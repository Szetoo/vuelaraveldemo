
<template>


    <div id="logo"><img :src="logo" width="167" height="100" alt="Site logo"/>
    <span> Click here to change the logo image!</span>
    <input type="file" @change="selectLogoFile">
    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props:['path'],
        data: () => ({
            photo: null,
            abc: null,
            logo: 'rw_common/images/bemo-logo2.png'
        }),
        methods: {
            selectLogoFile(Event){
                // `files` is always an array because the file input may be in multiple mode
                const photoToUpload = Event.target.files[0];
                const nameOfFile = photoToUpload.name;
                //this.background = "rw_common/images/" + nameOfFile;
                //this.background = encodeURIComponent(this.background);

                const data = new FormData();
                data.append('photo', photoToUpload);

                axios.post('/photo-upload', data,{
                })
                    .then(response => {
                        console.log(response);
                        this.logo = "rw_common/images/" + nameOfFile;
                        this.logo = encodeURIComponent(this.logo);
                    })
                    .catch(error => {
                        console.log(error.response);
                    });;

            }

        }

    }
</script>
