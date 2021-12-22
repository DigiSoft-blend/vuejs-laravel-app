

const state = { 
  token: localStorage.getItem('token') || null,
  users:[]
};

const getters = {
   loggedIn(state){
     return state.token != null
   },
   getUsers(state){
    return state.users 
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
}
};

export default {
 state,
 getters,
 actions,
 mutations
};