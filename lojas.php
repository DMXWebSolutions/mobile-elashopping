<!-- HEADER DA PAGINA  -->    
<?php include('components/templates/Header.php') ?>
<div class="lojas-wrap">
    <div class="page-title">
        <img src="assets/imgs/line_title.png" alt="">
        <span>As Lojas</span>
    </div>
    <div class="floor-container">   
        <h1>Piso 1</h1>
        <hr>
        <div class="floor-row">
            <div v-if="piso1 !== null" v-for="loja in piso1" class="floor-item">
                <a :href="'http://' + loja.site" v-if="loja.site !== null">
                    <img :src="'https://www.elashopping.com.br/' + loja.logotipo"  alt="">
                </a>
                <img :src="'https://www.elashopping.com.br/' + loja.logotipo"  v-if="loja.site === null"  alt="">
                <p>{{loja.nome}}</p>
                <p v-html="loja.telefone">{{loja.telefone}}</p>
            </div>   
        </div>
    </div>
    <div class="floor-container">
        <h1>Piso 2 </h1>   
        <hr>
        <div class="floor-row">
            <div v-if="piso1 !== null" v-for="loja in piso2" class="floor-item">
                <a :href="'http://' + loja.site" v-if="loja.site !== null">
                    <img :src="'https://www.elashopping.com.br/' + loja.logotipo"  alt="">
                </a>
                <img :src="'https://www.elashopping.com.br/' + loja.logotipo"  v-if="loja.site === null"  alt="">
                <p>{{loja.nome}}</p>
                <p v-html="loja.telefone">{{loja.telefone}}</p>
            </div>   
        </div>
    </div>
    <div class="floor-container">
        <h1>Piso 3 </h1>   
        <hr>
        <div class="floor-row">
            <div v-if="piso1 !== null" v-for="loja in piso3" class="floor-item">
                <a :href="'http://' + loja.site" v-if="loja.site !== null">
                    <img :src="'https://www.elashopping.com.br/' + loja.logotipo"  alt="">
                </a>
                <img :src="'https://www.elashopping.com.br/' + loja.logotipo"  v-if="loja.site === null"  alt="">
                <p>{{loja.nome}}</p>
                <p v-html="loja.telefone">{{loja.telefone}}</p>
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
                departaments: null,
                departament: '',
                stores: null,
                store: '',
                storeInfo: null,
                piso1: null,
                piso2: null,
                piso3: null
                
            },
            methods: {
                getStores: function(piso) {
                    fetch(`https://api-elashopping.dmxapp.com.br/stores/piso/${piso}`)
                        .then(resp => resp.json())
                        .then(data => {
                            if(piso === 1) {
                                return this.piso1 = data.stores
                            }

                            if(piso === 2 ) {
                                return this.piso2 = data.stores
                            }

                            if(piso === 3 ) {
                                return this.piso3 = data.stores
                            }
                        }).then( a => console.log(a))
                }
            },
            mounted() {
                this.getStores(1)
                this.getStores(2)
                this.getStores(3)
            }
      
        })
    </script>
</body>
</html>