


    let app = new Vue({

        el: ".app",
        data: {
            dischi: [],
        },
        methods: {

        },
        mounted() {
          
            axios
                .get('partials/personal_api.php')
                .then(response => {
                    this.dischi = response.data;
                    console.log(response);
                })
            
        }
    });