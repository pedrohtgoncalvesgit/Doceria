<!DOCTYPE html>
<html lang="pt-BR" id="subir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mp Produtos</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="icon" href="Img/logo.png" type="image/png">
</head>
<body class="body">

<!-- Header -->
<?php include 'header.php' ?>
<!-- Fim header -->

<!-- setinha de subir -->
<a href="#subir">
    <span class="quadradinhodasetinha">
    <span class="material-symbols-outlined"><img src="Img/up-arrow.png" alt="" style="width: 15px;"></span>
    </span>
</a>

<!-- Produtos -->
    <div class="products">
        <div class="product">
            <img src="Img/São Paulo.webp" alt="Camiseta 1">
            <h2 class="cor">Camiseta do São Paulo 2023</h2>
            <p class="cor">Preço: R$ 279.99</p>
            <a href="Detalhes.php"><button class="add-to-cart" data-price="29.99">Mais Detalhes</button></a>
        </div>
        
        <div class="product">
            <img src="Img/Gremio.webp" alt="Camiseta 2">
            <h2 class="cor">Camiseta do Gremio 2022</h2>
            <p class="cor">Preço: R$ 350.00</p>
            <a href="Detalhes.php"><button class="add-to-cart" data-price="29.99">Mais Detalhes</button></a>
        </div>
        
        <div class="product">
            <img src="Img/Corinthians.webp" alt="Camiseta 3">
            <h2 class="cor">Camiseta do Corinthians 2023</h2>
            <p class="cor">Preço: R$ 279.99</p>
            <a href="Detalhes.php"><button class="add-to-cart" data-price="29.99">Mais Detalhes</button></a>
        </div>
    </div>


    <div class="products">
        <div class="product">
            <img src="Img/Flamengo.webp" alt="Camiseta 3">
            <h2 class="cor">Camiseta Esportiva 3</h2>
            <p class="cor">Preço: R$ 19.99</p>
            <a href="Detalhes.php"><button class="add-to-cart" data-price="29.99">Mais Detalhes</button></a>
        </div>

        <div class="product">
            <img src="Img/Fluminense.webp" alt="Camiseta 3">
            <h2 class="cor">Camiseta Esportiva 3</h2>
            <p class="cor">Preço: R$ 19.99</p>
            <a href="Detalhes.php"><button class="add-to-cart" data-price="29.99">Mais Detalhes</button></a>
        </div>

        <div class="product">
            <img src="Img/Palmeiras.webp" alt="Camiseta 3">
            <h2 class="cor">Camiseta Esportiva 3</h2>
            <p class="cor">Preço: R$ 19.99</p>
            <a href="Detalhes.php"><button class="add-to-cart" data-price="29.99">Mais Detalhes</button></a>
        </div>
    </div>
    <!-- Fim produtos -->

    <!-- Footer -->
    <?php include 'rodapé.php' ?>
    <!-- Fim Footer -->

    <script src="Js/script.js"></script>
</body>
</html>