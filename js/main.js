Vue.config.devtools = true;

const app = new Vue({
    el : '#app',
    data: {
        APILink: 'api/server.php',
        AlbumsInfo: [],
        genres: [],
        selectedGenre: '',
    },
    methods: {
        getAlbumsData(){
            axios
            .get(this.APILink)
            .then(reply => {
                // console.log(reply.data);
                this.AlbumsInfo = reply.data;
                
                this.AlbumsInfo.forEach((album) => {
                    if (!this.genres.includes(album.genre)){
                        this.genres.push(album.genre);
                    }
                });
            })

            .catch(err =>{
                console.log("errore nella chiamta API: ", err);
            })
        },
    },
    computed: {
        FiltredAlbumList(){
            if(this.selectedGenre === ''){
                return this.AlbumsInfo
            } else {
                return this.AlbumsInfo.filter((item) => item.genre === this.selectedGenre);
            }
        }
    },
    
    created() {
        this.getAlbumsData()
    },
})





