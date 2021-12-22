<template>
  
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
         <router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/"><span class="co">Home</span></router-link>
       <router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/register"><span class="co">Sign Up</span></router-link>
       <router-link v-if="loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/logout"><span class="co">Logout</span></router-link>
      </nav>
   
</template>

<script>
export default {
   computed: {
     loggedIn() {
       return this.$store.getters.loggedIn
     }
   }
}
</script>

<style scoped>
  .co{
    color: antiquewhite;
  }
</style>