const app = new Vue ({
    el: '#app',
    data: {
        lista : null
    },
    mounted() {
        axios
        .get('/PHP/php-ajax-dischi/milestone-2/api/lista.php')
        .then(resp => {
            this.lista = resp.data;
        }).catch(e => {
            console.log(e);
        })
    }
})