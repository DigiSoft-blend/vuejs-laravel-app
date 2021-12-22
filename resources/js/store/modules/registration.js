
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

    })
    .catch(error => {
      console.log(error)
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