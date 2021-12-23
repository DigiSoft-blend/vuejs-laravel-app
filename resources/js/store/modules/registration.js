
const state = { 
   token: null,
   users:[]
};

const getters = {
   
};

const actions = {
  
  registerUser(context, credentials){
 
    axios.post('http://127.0.0.1:8000/api/user/register', {

      name: credentials.name,
      email: credentials.email,
      password: credentials.password,
      password_confirmation: credentials.password_confirmation

    })
    .then(response => {

      const token = response.data.token 
      localStorage.setItem('token', token)
      context.commit('registerUser', token)
        
      if(response.status == 200){
        Swal.fire({
          icon: 'success',
          title: 'Success',
          text: 'Your BCO Airdroper account has beeen created successfully',
        })
      }

    })
    .catch(error => {
      console.log(error)
      if(error.response.status == 422){
        Swal.fire({
          icon: 'warning',
          title: 'Oops',
          text: 'Looks like the email has already been taken, choose another',
          footer: '<a href="">Why do I have this issue?</a>'
        })
      }
    })
  }

};

const mutations = {
  registerUser(state, token){
    state.token = token
  }
};

export default {
  state,
  getters,
  actions,
  mutations
};