let app = new Vue({

    el: ".app",
    data: {
        dischi: [],
        error: ""
    },
    methods: {

    },
    mounted() {

        axios
            .get('partials/personal_api.php')
            .then(response => {
                this.dischi = response.data;
                console.log(response);
            }).catch(error => {
                console.log("ERROR", error);
                this.error = "Ops! c'è stato un Problema"
            })
    }
});