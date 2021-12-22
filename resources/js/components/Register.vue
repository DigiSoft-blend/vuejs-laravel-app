<template>
  <div>
<main class="form-signin">
  <form @submit="register">
    
    <h1 class="h3 mb-3 fw-normal">Sign up with BCO</h1>

    <div class="form-floating mb-2">
      <input v-model="name"  type="text" class="form-control" id="floatingInput" placeholder="User Name">
      <label class="colr" for="floatingInput">User Name</label>
    </div>
    <div class="form-floating mb-2">
      <input v-model="email"  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label class="colr" for="floatingInput">Email Address</label>
    </div> 
     <div class="form-floating mb-2">
      <input v-model="password"  type="password" class="form-control" id="floatingInput" placeholder="Password">
      <label class="colr" for="floatingInput">Password</label>
    </div>
    <div class="form-floating">
      <input  v-model="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label class="colr" for="floatingPassword">Confirm Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button> -->
    <button class="w-100 btn button" style="vertical-align:middle"><span>Sign up</span></button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020–2030</p>
  </form>
</main>
  </div> 
</template>

<script>

export default {
    name: "register",
    data(){
     return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        }
    },
    methods:{
        
        register(e){
             e.preventDefault();
             this.$store.dispatch('registerUser', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
             })
        }
    }
}
</script>

<style scoped>
  .colr{
    color: black;
  }
</style>