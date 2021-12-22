const state = { 
    todos:[]
 };
 
 const getters = {
     
 };
 
 const actions = {
   async addTodo({ commit }, title){
        const response = await axios.post('http://127.0.0.1:8000/api/user/addtodo', { title });
        commit('addTodo', response.data);
   }
 };
 
 const mutations = {
   addTodo: (state, todo) => state.todos.unshift(todo)
 };
 
 export default {
   state,
   getters,
   actions,
   mutations
 };