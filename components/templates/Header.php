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
                <a href="localizacao.php">Localização</a>
                <a href="contato_fazendoparte.php">Venha fazer parte do ELA</a>
                <a href="contato.php">Contato</a>
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
                <img src="assets/imgs/banners/banner_principal.png"/>
            </div>
        </header>