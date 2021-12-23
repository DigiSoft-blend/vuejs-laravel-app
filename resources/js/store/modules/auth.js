

const state = { 
  id: '',
  token: localStorage.getItem('token') || null,
  users:[]
};

const getters = {
   loggedIn(state){
     return state.token != null
   },
   getUsers(state){
    return state.users 
   },
   getToken(state){
     return state.token
   }
};

const actions = {
 
 loginDev(context, credentials){

  return new Promise(( resolve, reject) => {
    axios.post('http://127.0.0.1:8000/api/user/loginDev', {
      email: credentials.email,
      password: credentials.password,
    })
    .then(response => {
      const token = response.data.token 
      localStorage.setItem('token', token)
      context.commit('login', token)
      resolve(response)
    })
    .catch(error => {
        console.log(error)
      reject(error)
    })
   })
  },

  getUsers(context){
   
    //Tell axios the header you want
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token
    
    axios.get('http://127.0.0.1:8000/api/user/all')
    .then(response => {
       context.commit('Users', response.data.data)
    })
    .catch(error => {
      console.log(error)
    })
  
  },
  

  destroyToken(context){ 

    //Tell axios the header you want
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token
     
    if(context.getters.loggedIn){

      return new Promise(( resolve, reject) => {
        axios.post('http://127.0.0.1:8000/api/user/logoutDev')
        .then(response => {
          localStorage.removeItem('token')
          context.commit('destroyToken')
          resolve(response)
        })
        .catch(error => {
          localStorage.removeItem('token')
          context.commit('destroyToken')
          reject(error)
        })
       })
    }
  },

  deleteUser(context, id){

     Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
            //Tell axios the header you want
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token

        axios.delete('http://127.0.0.1:8000/api/user/delete/'+id)
        .then(response => {
          context.commit('deleteUser', id)
        })
        .catch(error => {
          console.log(error)
          if(error.response.status == 404){
            Swal.fire({
              icon: 'warning',
              title: '404',
              text: 'This User does not exist!',
              footer: '<a href="">Why do I have this issue?</a>'
            })
          }
        })

      }
    })
  }

};

const mutations = {
 login(state, token){
   state.token = token
 },
 destroyToken(state){
   state.token = null;
 },
 Users(state, users){
  state.users = users
 },

deleteUser(state, id){
  const index =state.users.findIndex(item => item.id == id)
  state.users.splice(index, 1)
}

};

export default {
 state,
 getters,
 actions,
 mutations
};