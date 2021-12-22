<template>
   <!-- <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark">
                    <div class="card-header">
                      Example Component
                      <router-link to="/">Home</router-link>
                       <router-link to="/dashboard">Dashboard</router-link>
                    </div>

                    <div class="card-body">
                        <form @submit="register" >

                                <input  class="form-control mb-4" v-model="name" type="text" placeholder="Enter your name" >
                                <input  class="form-control mb-4" v-model="email"  type="email" placeholder="Email or mobile" >
                                <input  class="form-control mb-4" v-model="password" type="password" placeholder="password" >
                                <input  class="form-control mb-4" v-model="password_confirmation" type="password" placeholder="confirm password" >

                                <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success" type="submit">register</button>

                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  -->

   <main class="form-signin">
  <form @submit="register">
    
    <h1 class="h3 mb-3 fw-normal">Sign in as Admin</h1>

    <div class="form-floating mb-2">
      <input v-model="name"  type="text" class="form-control" id="floatingInput" placeholder="User Name">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating mb-2">
      <input v-model="email"  type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email Address</label>
    </div>
    <div class="form-floating mb-2">
      <input v-model="password"  type="password" class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating">
      <input v-model="password_confirmation" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Confirm Password</label>
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