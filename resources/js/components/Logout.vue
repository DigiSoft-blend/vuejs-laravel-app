<template>
    
</template>

<script>

export default {
    created(){
        this.$store.dispatch('destroyToken')

        .then(response => {

             if(response.status == 200){
             Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'You are logged out',
                    showConfirmButton: false,
                    timer: 3000
            })
         }

            this.$router.push({ name: 'Home'})
        })
        .catch(error => {
            if(error.response.status != 200){
                  Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Looks like something went wrong while trying to logout',
                    showConfirmButton: false,
                    timer: 3000
            })
            }
        })
    }
}

</script>