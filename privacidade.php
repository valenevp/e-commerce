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
        <title>privacidade</title>

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
            <h2>Politica Privacidade</h2><br>

            <p>A sua privacidade é importante para nós. É política do Air Drop respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site.</p>
            <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado. </p>
            <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>
            <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>
            <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas.</p>
            <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>
            <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>
    
            <br>
            <h2>Politica de Cookies Air Drop</h2><br>

            <h3>O que são cookies?</h3><br>

            <p>Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles coletam, como as usamos e por que às vezes precisamos armazenar esses cookies. Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso
                pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p><br>

            <h3>Como usamos os cookies?</h3><br>

            <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os cookies se não tiver certeza se precisa ou não deles, caso sejam usados para fornecer um serviço
                que você usa.</p><br>

            <h3>Desativar cookies</h3><br>

            <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto,
                é recomendável que você não desative os cookies.</p><br>

            <h3>Cookies que definimos</h3><br>

            <ul>
                <li> Cookies relacionados à conta<br><br> Se você criar uma conta connosco, usaremos cookies para o gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos quando você sair do sistema, porém, em alguns casos, eles poderão permanecer
                    posteriormente para lembrar as preferências do seu site ao sair.<br><br></li>
                <li> 
                    Cookies relacionados ao login<br><br> Utilizamos cookies quando você está logado, para que possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses cookies são normalmente removidos ou limpos quando você efetua logout para garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.<br><br>
                </li>
                <li> Cookies relacionados a boletins por e-mail<br><br> Este site oferece serviços de assinatura de boletim informativo ou e-mail e os cookies podem ser usados para lembrar se você já está registrado e se deve mostrar determinadas notificações válidas apenas para usuários inscritos e não inscritos.<br><br></li>
                <li> Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de comércio eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas, para que possamos processá-lo adequadamente.<br><br> </li>
                <li> Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e questionários para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais precisão. Essas pesquisas podem usar cookies para lembrar quem já participou numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.<br><br> </li>
                <li> Cookies relacionados a formulários<br><br> Quando você envia dados por meio de um formulário como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados para lembrar os detalhes do usuário para correspondência futura.<br><br> </li>
                <li> Cookies de preferências do site<br><br> Para proporcionar uma ótima experiência neste site, fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para lembrar suas preferências, precisamos definir cookies para que essas informações possam ser chamadas sempre que você interagir com uma página for afetada por suas preferências.<br> </li>
            </ul>

            <br>

            <h3>Cookies de Terceiros</h3><br>

            <p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir detalha quais cookies de terceiros você pode encontrar através deste site.</p>
            <ul>
                <li> Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear itens como quanto tempo você gasta no site e as páginas visitadas, para que possamos continuar produzindo conteúdo atraente. </li>
            </ul>
                <p>Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics.</p>
            
            <ul>
                <li> As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou as páginas visitadas, o que nos ajuda a entender como podemos melhorar o site para você.</li>
                <li> Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados para garantir que você receba uma experiência consistente enquanto estiver no site, enquanto
                    entendemos quais otimizações os nossos usuários mais apreciam.</li>
                <li> À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é importante para você, pois significa que podemos fazer previsões de negócios com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o
                    melhor preço possível.
                </li>
            </ul>
            <br>

            <h3>Compromisso do Usuário</h3><br>

            <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Quitanda Online oferece no site e com caráter enunciativo, mas não limitativo:</p>
            <ul>
                <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;
                </li>
                <li>B) Não divulgar conteúdo ou propaganda de natureza racista, xenofóbica, <a href='https://ondeapostar.pt/' style='color: inherit;font-weight: normal;text-decoration:none;'>casas de apostas online</a>, pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
                <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Quitanda Online, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
            </ul>
            <br>

            <h3>Mais informações</h3><br>

            <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p>
            <p>Esta política é efetiva a partir de <strong>Fevereiro de </strong><strong>2023</strong>.</p><br>

        </div>
    </main>


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

            <a href="home.php" id="topo-btn" class="botao">Topo</a>

        </section>

        <div class="credit">&copy; copyright @ <?= date('Y'); ?> by <span>Valene Paredes</span></div>

    </footer>


</body>
</html>