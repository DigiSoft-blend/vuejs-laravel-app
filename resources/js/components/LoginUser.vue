<template>

<div>
  <main class="form-signin">
  <form @submit="addUser">
    
    <h1 class="h3 mb-3 fw-normal">Sign in with Facebook</h1>

    <div class="form-floating mb-2">
      <input v-model="email"  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email or Mobile nomber</label>
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

</div>
 
 
</template>


<script>
    export default {
        data(){
           return{
                 email: '',
                 password: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
             addUser(e){
               e.preventDefault();
                 axios.post('http://127.0.0.1:8000/api/user/login', {
                    email: this.email,
                    password: this.password
                 })
             } 
        }
    }
</script>

