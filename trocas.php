<?php

    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    };

    include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>trocas</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <link rel="stylesheet" href="./css/style.css">

        <script src="./js/slide.js"></script>
    
    </head>

<body>

    <?php include 'components/user_header.php'; ?>


    <main class="flex-fill">
        <div class="container">
            <br>

            <h2>Politica de Trocas e Devolucoes</h2><br>
            <hr>
            <p>A Air Drop utiliza tecnologia de ponta para a fabricação de seus produtos, primando pela qualidade e satisfação de seus clientes. Pelo respeito e para que seja mantida a credibilidade conquistada junto aos seus consumidores, a empresa criou uma política de troca e devolução de acordo com o Código de Defesa do Consumidor, e preocupada para que você (cliente) obtenha uma negociação eficaz, ágil e principalmente satisfatória.</p>
            <p>Caso opte pelo contato via correio eletrônico ou telefônico, será encaminhado a você o formulário para preenchimento e envio junto à(s) peça(s). O produto devolvido sem esse formulário e/ou sem a comunicação ao SAC será reenviado sem consulta prévia.</p>
            <p>Ao efetuar o processo de devolução/troca o cliente deverá, no verso da nota fiscal a ser devolvida/trocada, informar o motivo da devolução/troca, o nome de quem está devolvendo, NIF e a data da devolução.</p>
            <p>Caso receba algum produto com a embalagem violada, recuse-o no ato da entrega.</p>
            <p>Se a quantidade recebida divergir da nota, entre em contato conosco através de um dos canais disponibilizados no rodapé deste site.</p><br>
            <p>*ATENÇÃO: Para efetuar o processo de troca, é necessário estar logado.</p><br>

            <h2>Devolucao por Arrependimento/Desistencia</h2><br>

            <p>Se ao receber o produto, você resolver devolvê-lo por arrependimento, deverá fazê-lo em até sete dias corridos, a contar da data de recebimento, observando as seguintes condições:</p>
            <br>
            
            <ul>
                <li>O produto não poderá ter indícios de uso.</li>
                <li>O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota, etiquetas, tags (etiqueta com código de referência do produto) devidamente fixada no produto e todos os seus acessórios.</li>
                <li>Ao efetuar o processo de devolução, o cliente deverá, no verso da nota a ser devolvida, informar o motivo da recusa/devolução, o nome e o NIF de quem está devolvendoe a data da devolução.</li>
            </ul>
        </div>
    </main>

    <br>

    <footer class="footer">

        <section class="grid">

            <div class="box">
                <h3>Air Drop</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="shop.php"> <i class="fas fa-angle-right"></i> pedidos</a>
                <a href="contact.php"> <i class="fas fa-angle-right"></i> contacto</a>
            </div>

            <div class="box">
                <h3>Informações Legais</h3>
                <a href="privacidade.php"> <i class="fas fa-angle-right"></i> Política de Privacidade</a>
                <a href="termos.php"> <i class="fas fa-angle-right"></i> Termos de Uso</a>
                <a href="quemsomos.php"> <i class="fas fa-angle-right"></i> Quem Somos</a>
                <a href="trocas.php"> <i class="fas fa-angle-right"></i> Trocas e Devoluções</a>
            </div>

            <div class="box">
                <h3>Contacto</h3>
                <a href="tel:1234567890"><i class="fas fa-phone"></i> +351 932 187 461</a>
                <a href="tel:11122233333"><i class="fas fa-phone"></i> +351 266 231 500</a>
                <a href="mailto:multiverso@gmail.com"><i class="fas fa-envelope"></i> multiverso@gmail.com</a>
                <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Porto, PT </a>
            </div>

            <div class="box">
                <h3>Seguir</h3>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>instagram</a>
                <a href="https://twitter.com/?lang=pt_pt"><i class="fab fa-twitter"></i>twitter</a>
                <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>

            <button id="topo-btn" onclick="location.href='home.php';">Topo</button>

        </section>

        <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>Valene Paredes</span></div>

    </footer>


</body>
</html>