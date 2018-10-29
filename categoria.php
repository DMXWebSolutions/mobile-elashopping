<!-- HEADER DA PAGINA  -->    
<?php include('components/templates/Header.php') ?>
<div class="lojas-wrap">
    <div class="page-title">
        <img src="assets/imgs/line_title.png" alt="">
        <span>As Lojas</span>
    </div>
    <div class="floor-container">   
        <h1 v-if="departament !== null">{{ departament }}</h1>
        <div class="floor-row">
            <div v-if="stores !== null" v-for="store in stores" class="floor-item">
                <a :href="'http://' + store.site" v-if="store.site !== null">
                    <img :src="'https://www.elashopping.com.br/img-icons/' + store.logotipo"  alt="">
                </a>
                <img :src="'https://www.elashopping.com.br/img-icons/' + store.logotipo"  v-if="store.site === null"  alt="">
                <p>{{store.nome}}</p>
                <p v-html="store.telefone">{{store.telefone}}</p>
            </div>   
        </div>
    </div>
</div>



<!-- FOOTER DA PÁGINA -->
<?php include('components/templates/Footer.php') ?>
    <script>
        new Vue({
            el: "#app",
            data: {
                menuIsOpen: false,
                departament: null,
                stores: null,
            },
            methods: {
                getStores: function() {
                    var category = window.sessionStorage.getItem('category')
                    fetch(`https://api-elashopping.dmxapp.com.br/departaments/${category}`)
                        .then(resp => resp.json())
                        .then(data => this.stores = data.stores)
                    switch(category) {
                        case '1':
                            this.departament = 'Moda Masculina';
                            break
                        case '2':
                            this.departament = 'Moda Feminina';
                            break
                        case '3':
                            this.departament = 'Moda Acessorios e Perfumaria';
                            break
                        case '4':
                            this.departament = 'Celulares e Eletrônicos';
                            break
                        case '5':
                            this.departament = 'Saúde e Serviços';
                            break
                        case '6':
                            this.departament = 'Lanches e Alimentação';
                            break
                        case '7':
                            this.departament = 'Moda Infantil';
                            break
                    }
                },
            },
            mounted() {
                this.getStores()
            }
      
        })
    </script>
</body>
</html>