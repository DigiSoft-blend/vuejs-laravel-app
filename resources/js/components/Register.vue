<template>
   <div class="container mt-4">
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