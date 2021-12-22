<template>
    <div class="container">
      
       <div class="card card-body mb-2 bg-dark" v-for="user in getUsers" :key="user.id">
          <h3>{{ user.email }}</h3>
          <p>{{  user.password }}</p>
          <hr>
          <button class="btn btn-danger" @click="deleteArticle(article.id)">delete</button>
       </div>
       
    </div>
</template>

<script>


export default {

   created(){
      this.$store.dispatch('getUsers');
   },

   computed: {
     getUsers() {
       return this.$store.getters.getUsers
     }
   },

      
};
</script>

