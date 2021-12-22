<template>
  
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
         <router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/">Home</router-link>
       <router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/register">Register</router-link>
       <router-link v-if="loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/logout">Logout</router-link>
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
