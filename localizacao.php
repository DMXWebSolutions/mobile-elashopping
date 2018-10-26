<!-- HEADER DA PAGINA  -->  
<?php include('components/templates/Header.php') ?>
    <div class="localizacao-wrap">
        <div class="page-title">
            <img src="assets/imgs/line_title.png" alt="">
            <span>Localização</span>
        </div>
        <div class="localizacao-container">
            <div class="localizacao-google" style="padding: 20px;">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1540493799251!6m8!1m7!1sm0OWnmco0cJ3RTY5d3esJQ!2m2!1d-22.7864021572165!2d-43.31086450334001!3f283.0018780376602!4f8.78746956839396!5f0.7820865974627469"  width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="accordion" id="accordionExample">
                    <div class="evento-box" id="headingOne" data-toggle="collapse" data-target="#collapseOne" >
                        <div class="logo-evento">
                            <div class="l-event">
                                <img src="assets/imgs/icones/trem.png"/>
                            </div>
                        </div>
                        <div class="evento-title">
                            <span>Trem</span>
                        </div>
                        <div class="set-icon">
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse  collapse-event" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <p class="local-textos">
                            <span>
                                <strong>Rio de Janeiro</strong>
                            </span>
                            <span>
                                Ramal Saracuruna - Estação de Caxias
                            </span>
                        </p>
                    
                    </div>
                    <div class="evento-box" id="headingOne" data-toggle="collapse" data-target="#collapseTwo" >
                        <div class="logo-evento">
                            <div class="l-event">
                                <img src="assets/imgs/icones/carro.png"/>
                            </div>
                        </div>
                        <div class="evento-title">
                            <span>Carro</span>
                        </div>
                        <div class="set-icon">
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse collapse-event" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <p class="local-textos">
                            <span>
                                <strong>Linha Vermelha</strong>
                            </span>
                            <span>
                                Ultilizar a saida em Duque de Caxias, Fazer o retorno em direção a Duque de Caxias e pegar a Rua Dr. Plínio Casado. Após a Rua Nunes Alvez efetuar o primeiro retorno a esquerda a Av. Presidente Kenedy.
                            </span>
                        </p>
                    </div>
                    <div class="evento-box" id="headingOne" data-toggle="collapse" data-target="#collapseThree" >
                        <div class="logo-evento">
                            <div class="l-event">
                                <img src="assets/imgs/icones/onibus.png"/>
                            </div>
                        </div>
                        <div class="evento-title">
                            <span>Ônibus</span>
                        </div>
                        <div class="set-icon">
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse collapse-event" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <p class="local-textos">
                            <span>
                                <strong>Rio de Janeiro</strong>
                            </span>
                            <span>
                                Master: Jardim Leal X Central
                                Limosine Carioca: Caxias X Central
                                Limosine Carioca: Caxias X Castelo
                                Vera Cruz: Caxias X Pau Ferro
                                Vera Cruz: Caxias X Freguesia
                                Vera Cruz: Caxias X Méier
                                Santo Antônio: Caxias X Barra
                            </span>
                            <br>
                            <span>
                                <strong>Belford Roxo</strong>
                            </span>
                            <span>
                                Nilopolitano: Queimados X Caxias
                                Flores - Nova Iguaçu X Caxias
                            </span>
                            <br>
                            <span>
                                <strong>São João de Meriti</strong>
                            </span>
                            <span>
                                Master: Via Light X Caxias
                                Master: São João de Meriti X Caxias
                                Santo Antônio: Periquitos X Variante
                            </span>
                            <br>
                            <span>
                                <strong>Nova Iguaçu</strong>
                            </span>
                            <span>
                                Master: Nova Iguaçu X Caxias
                                Master: Via Light X Caxias
                                Nilopolitano: Queimados X Caxias
                                Flores - Nova Iguaçu X Caxias
                            </span>
                            <br>
                            <span>
                                <strong>Outros</strong>
                            </span>
                            <span>
                                Master: Caxias X Nilópolis
                            </span>
                        
                        </p>
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
            },
            methods: {
        
            },
            mounted() {
      
            }
      
        })
    </script>
</body>
</html>