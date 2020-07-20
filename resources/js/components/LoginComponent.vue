

<template>
    <form @submit.prevent = "submit">
    <input type="text" placeholder="Please enter your password" name="uname" v-model='password' required>
    <button type="submit" >Submit</button>
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: () => ({
            password:null
        }),
        methods: {
            submit(Event){
                // `files` is always an array because the file input may be in multiple mode
                const pass = Event.target.value;

                const data = new FormData();
                data.append('password', this.password);
                console.log(this.password);
                axios.post('/login', data,{
                })
                    .then(response => {
                        console.log(response);
                        if(response.data == 'good'){
                            window.location = "/main";
                        }


                    })
                    .catch(error => {
                        console.log(error.response);
                    });;

            }

        }

    }
</script>
