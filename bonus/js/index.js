const app = new Vue({
    el: '#app',
    data: {
        dischi: [],
        genres: [],
        selectedGenre: '',
    },
    computed:{
        getGenre(){
            for(let i=0; i < this.dischi.length; i++){
                if(!this.genres.includes(this.dischi[i].genre)){
                    console.log(i)
                    this.genres.push(this.dischi[i].genre)
                }
            }
            return this.genres
        },
        filterByGenre(){
            return this.dischi.filter((el) => {
                const genre = el.genre

                if(genre === this.selectedGenre){
                    return true
                }

                return false
            })
        }
    },
    created() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/seconda-versione/api/dischi.php')
            .then((res) => {
                const { response } = res.data
                this.dischi = response
            })
    },
})