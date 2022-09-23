const app = new Vue({
    el: '#app',
    data: {
        dischi: [],
        genres: [],
        selectedGenre: '',
    },
    computed: {
        getGenre() {
            for (let i = 0; i < this.dischi.length; i++) {
                if (!this.genres.includes(this.dischi[i].genre)) {
                    this.genres.push(this.dischi[i].genre)
                }
            }
            return this.genres
        }
    },
    methods: {
        fetchDischi() {
            axios
                .get('http://localhost:8888/php-ajax-dischi/bonus/api/dischi.php', {
                    params: {
                        genre: this.selectedGenre
                    }
                })
                .then((res) => {
                    const { response } = res.data
                    console.log(response)
                    this.dischi = response
                })
        }
    },
    created() {
        this.fetchDischi()
    },
})