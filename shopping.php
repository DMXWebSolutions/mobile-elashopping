<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ela Shopping</title>
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="assets/js/vue.min.js"></script>
</head>
<body>
    <div class="wrap" id="app">
        <div class="menu-responsive" :class="{'menu-open': menuIsOpen, 'menu-close': !menuIsOpen}" >
            <button @click="menuIsOpen = !menuIsOpen" class="close-button fas fa-times"></button>
            <div class="menu-items">
                <a href="index.php">Home</a>
                <a href="lojas.php">Lojas</a>
                <a href="shopping.php">Shopping</a>
                <a href="eventos.php">Eventos</a>
                <a href="#">Localização</a>
                <a href="#">Contato</a>
            </div>
        </div>
        <header class="header">
            <div class="menu">
                <div class="logo"><img src="assets/imgs/LOGO/ela.png"/></div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/elashopping" class="fab fa-facebook-f"></a>
                    <a href="https://www.instagram.com/elashopping" class="fab fa-instagram"></a>
                    <a href="https://twitter.com/elashopping" class="fab fa-twitter"></a>
                </div>
                <div class="menu-bottom">
                    <button @click="menuIsOpen = !menuIsOpen" class="fas fa-bars"></button>
                </div>
            </div>
            <div class="slide">
                <img src="assets/imgs/banners/shopping.png"/>
            </div>
        </header>
        <div class="shopping-wrap">
            <div class="page-title">
                <img src="assets/imgs/line_title.png" alt="">
                <span>O Shopping</span>
            </div>
            <p class="shop-text">
                <span class="s-text">
                É o primeiro Shopping no Brasil, voltado para o público feminino, oportunidades numa proposta de mercado ainda inexplorada. Se integra ao segmento de shoppings temáticos que apresentam o melhor índice de crescimento no mundo e aceitação pelo mercado consumidor.
                </span>
            </p>
            <p class="shop-text">
                <span class="s-title">
                    Localização
                </span>
                <span class="s-text">
                No coração comercial de Duque de Caxias, entre a Avenida Presidente Kennedy e Rua José de Alvarenga, no Centro da Cidade, no tradicional Calçadão de Caxias, surge o Ela Shopping. O mais novo empreendimento comercial da região é também o primeiro Shopping Center com conceito verticalizado para atender ás necessidades e desejos da mulher de Duque de Caxias. Junto ás principais lojas de departamento, entre elas CA, Leader Magazine, Casa e Vídeo, Lojas Americanas, Ponto Frio, Ricardo Eletro e Casas Bahia.

                </span>
            </p>
            <p class="shop-text">
                <span class="s-title">
                    E por que ELA?
                </span>
                <span class="s-text">
                Porque a mulher brasileira entrou definitivamente em todos os segmentos da sociedade, na vida pública e privada, é sabidamente responsável pela maior parte das compras da família, consome mais individualmente, é a Principal usuária e consumidora no mercado de varejo em geral e apresenta o maior índice de compras por impulso. Não é por acaso que em média, nos shoppings centers, 65% das lojas são dirigidas ao segmento feminino.
                </span>
            </p>
            <p class="shop-text">
                <span class="s-title">
                    ELA  traz excelentes oportunidades de negócios.
                </span>
                <span class="s-text">
                Aqui, você poderá ter uma loja num shopping cercado de todas as facilidades para atrair o público de sua área de influência porque oferece beleza, conforto, segurança, 5 andares de estacionamento, ambiente refrigerado e facilidade de acesso, além de um mix estudado e planejado para receber um enorme fluxo de clientes, sem prejudicar o lojista com qualquer concorrência predatória.Aqui, você poderá ter uma loja num shopping cercado de todas as facilidades para atrair o público de sua área de influência porque oferece beleza, conforto, segurança, 5 andares de estacionamento, ambiente refrigerado e facilidade de acesso, além de um mix estudado e planejado para receber um enorme fluxo de clientes, sem prejudicar o lojista com qualquer concorrência predatória.
                </span>
            </p>
            <p class="shop-text">
                <span class="s-title">
                    No calçadão de Caxias.
                </span>
                <span class="s-text">
                Sua localização é garantia de público! O mix foi cuidadosamente estudado e planejado pela Tenant Mix, que traz na bagagem larga experiência em planejamento e comercialização de shoppings de maneira a garantir o máximo fluxo em todos os segmentos comerciais, representados por lojas de:
                </span>

                <ul>
                    <li>Vestuário</li>
                    <li>Acessórios de moda</li>
                    <li>Calçados</li>
                    <li>Artigos do lar</li>
                    <li>Artigos diversos</li>
                    <li>Alimentação (fast food)</li>
                    <li>Serviços</li>
                </ul>
            </p>
            <div class="universo-ela">
                <span class="u-title">
                    O universo ELA em Caxias.
                </span>
                <div class="u-box">
                    <div class="u-row">
                        <p class="u-item">
                            <span class="u-item-title">
                                185.000
                            </span>
                            <span class="u-item-text">
                                com pessoas<br/>de sexo<br/>feminino
                            </span>
                        </p>
                        <p class="u-item">
                            <span class="u-item-title">
                                23,7%
                            </span>
                            <span class="u-item-text">
                                da população<br/>pertencente as<br/>classes A1, A2, B1,<br/> B2 e C.
                            </span>
                        </p>
                    </div>
                    <div class="u-row">
                        <p class="u-item">
                            <span class="u-item-title">
                                R$ 257 milhões
                            </span>
                            <span class="u-item-text">
                                em consumo no<br/> setor Vestuário,<br/> artigos do lar e<br/> diversos superior
                            </span>
                        </p>
                        <p class="u-item">
                            <span class="u-item-title">
                                75%
                            </span>
                            <span class="u-item-text">
                                do público<br/> consumidor
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
        })
    </script>
</body>
</html>