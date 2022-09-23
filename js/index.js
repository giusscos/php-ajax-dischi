const app = new Vue({
    el: '#app',
    data: {
        dischi: [],
    },
    created() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/api/dischi.php')
            .then((res) => {
                const { response } = res.data
                this.dischi = response
            })
    },
})