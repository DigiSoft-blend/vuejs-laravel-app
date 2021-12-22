<template>

   <main class="form-signin">
  <form @submit="login">
    
    <h1 class="h3 mb-3 fw-normal">Sign in as Admin</h1>

    <div class="form-floating mb-2">
      <input v-model="email"  type="email" class="form-control colr" id="floatingInput" placeholder="name@example.com">
      <label class="colr" for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input v-model="password" type="password" class="form-control colr" id="floatingPassword" placeholder="Password">
      <label class="colr" for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn button" style="vertical-align:middle"><span>Sign in</span></button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2030</p>
  </form>
</main>

</template>

</style>

<script>

export default {
    name: "login",
    data(){
     return {
            email: '',
            password: '',
        }
    },
    methods:{
        login(e){
             e.preventDefault();
             this.$store.dispatch('loginDev', {
                email: this.email,
                password: this.password,
             })
             .then(response => {
               this.$router.push({ name: 'dashboard'})
             })
        },
    },

    
}
</script>

<style scoped>
  .colr{
    color:black
  }
</style>