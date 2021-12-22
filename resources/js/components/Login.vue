<template>

   <main class="form-signin">
  <form @submit="login">
    
    <h1 class="h3 mb-3 fw-normal">Sign in as Admin</h1>

    <div class="form-floating mb-2">
      <input v-model="email"  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input v-model="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
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