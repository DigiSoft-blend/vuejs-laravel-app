<template>
     <router-link v-if="!loggedIn" class="me-3 py-2 text-dark text-decoration-none" to="/loginuser"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign in with Facebook</button></router-link>
</template>

<script>
export default {
    
}
</script>