
<!-- HEADER DA PAGINA  -->    
<?php include('components/templates/Header.php') ?>

        <div class="segmentos">
            <div class="row-segmentos">
                <div class="items-seg">
                    <img src="assets/imgs/icones/celulares_e_eletronicos.png"/>
                    <p>Celulares e <br/>Eletrônicos</p>
                </div>
                <div class="items-seg">
                    <img src="assets/imgs/icones/vestuário.png"/>
                    <p>Vestuários</p>
                </div>
            </div>
            <div class="row-segmentos">
                <div class="items-seg">
                    <img src="assets/imgs/icones/perfumaria.png"/>
                    <p>Perfumaria</p>
                </div>
                <div class="items-seg">
                    <img src="assets/imgs/icones/acessórios.png"/>
                    <p>Acessório</p>
                </div>
            </div>
            <div class="row-segmentos">
                <div class="items-seg">
                    <img src="assets/imgs/icones/estética.png"/>
                    <p>Estética</p>
                </div>
                <div class="items-seg">
                    <img src="assets/imgs/icones/lanches_e_alimentação.png"/>
                    <p>Lanches e <br/> Alimentação</p>
                </div>
            </div>            
        </div>
        <div class="banner1">
            <img src="assets/imgs/banners/Banner_shopping.png"/>
        </div>
        <div class="encontre-lojas">
            <h2>ENCONTRE NOSSAS LOJAS</h2>
            <select v-model="departament">
                <option disabled value="">Selecione o departamento</option>
                <option v-for="depart in departaments" v-bind:value="depart.id">
                    {{ depart.descricao }}
                </option>
            </select>
            <select v-model="store">
                <option disabled value="">Selecione a loja</option>
                <option v-for="store in stores" v-bind:value="store.id">
                    {{ store.nome }}
                </option>
            </select>
            <button v-on:click="getStore">BUSCAR</button>
            <div class="loja-info" v-if="storeInfo !== null" v-for="str in storeInfo">
                <a :href="'http://' + str.site" v-if="str.site !== null">
                    <img :src="'https://www.elashopping.com.br/' + str.logotipo"  alt="">
                </a>
                <img :src="'https://www.elashopping.com.br/' + str.logotipo"  v-if="str.site === null"  alt="">
                <p>NOME: {{ str.nome }}</p>    
                <p>PISO: {{ str.piso }}</p>
                <p>NUMERO DA LOJA: {{ str.numero }}</p>
            </div>
        </div>
        <div class="banner2">
            <img src="assets/imgs/banners/banner_estacionamento1.png"/>
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
                storeInfo: null
            },
            methods: {
                getDepartaments: function() {
                    fetch('https://api-elashopping.dmxapp.com.br/departaments')
                        .then(resp => resp.json())
                        .then(data => this.departaments = data.departaments)
                },
                getStores: function() {
                    fetch(`https://api-elashopping.dmxapp.com.br/departaments/${this.departament}`)
                        .then(resp => resp.json())
                        .then(data => this.stores = data.stores)
                },
                getStore: function() {
                    fetch(`https://api-elashopping.dmxapp.com.br/stores/${this.store}`)
                        .then(resp => resp.json())
                        .then(data => this.storeInfo = data.stores)
                        //.then(data => console.log(data.stores))
                }
            },
            watch: {
                departament: function() {
                    this.getStores()
                }
            },

            mounted() {
                this.getDepartaments()
            }
      
        })
    </script>
</body>
</html>