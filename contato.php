<!DOCTYPE html>
<html id="subir"> 
<head>
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="stylesheet" href="Js/script.js">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Mp Contato</title>
    <link rel="icon" href="Img/logo.png" type="image/png">
</head>
<body class="body" ng-app="app" ng-controller="Controlador">
  <?php include 'header.php' ?>

<!-- setinha de subir -->
  <a href="#subir">
    <span class="quadradinhodasetinha">
    <span class="material-symbols-outlined"><img src="Img/up-arrow.png" alt="" style="width: 15px;"></span>
</span>
    </a>

    <div class="fundo">
        <div class="contato">
            <div class="botaocontato">
                <button>
                    <span ng-click="funcaosobre()">Sobre nós</span>
                </button>

                <button>
                    <span ng-click="funcaopagamento()">Formas de Pagamento</span>
                </button>

                <button>
                    <span ng-click="funcaolocalizacao()">Localização</span>
                </button>

                <button>
                    <span ng-click="funcaopolitica()">Politica de Privacidade</span>
                </button>

                <button>
                    <span ng-click="funcaopergunta()">Perguntas Frequentes</span>
                </button>
            </div>


            <div class="conteudocontato">

                <div class="sobre" ng-show="sobre">
                    <div class="titulocontato">
                        <h3 class="Centraliza">QUEM SOMOS?</h3>
                    </div>

                    <div class="textosobre">
                        <p>Bem-vindo à MP Sports! Somos uma loja de camisetas de futebol que nasceu da paixão inabalável pelo esporte mais popular do mundo. Fundada em 02 de novembro de 2023 por um grupo de entusiastas do futebol, nossa missão é proporcionar a você a melhor experiência no mundo das camisetas de clubes de futebol.</p>
                        <p>Oferecemos uma ampla variedade de camisetas de futebol de clubes nacionais e internacionais. Do Barcelona ao Real Madrid, do Manchester United ao Vasco, temos uma seleção diversificada para atender a todos os gostos. Seja qual for o time do seu coração, você encontrará a camiseta perfeita aqui.</p>
                        <p>Além de camisetas tradicionais de times, oferecemos a opção de personalização. Agora, você pode adicionar seu nome e número nas costas da camiseta, tornando-a verdadeiramente única e especial.</p>
                        <p>Nossa dedicação à qualidade é inegociável. Todas as nossas camisetas são produzidas com materiais de alta qualidade, garantindo que sejam confortáveis para uso durante as partidas ou no dia a dia.</p>
                    </div>

                    <img src="Img/logoextenso.png" alt="logotipo da loja" class="formapag" style="width: 1000px;"> 
                </div>

                <div class="sobre" ng-show="pagamento">
                    <div class="titulocontato">
                        <h3 class="Centraliza">FORMAS DE PAGAMENTO</h3>
                    </div>

                    <div class="textopagamento">

                        <h3 style="margin: 15px;">Cartão de Crédito</h3>
                        <p style="margin: 15px;font-family:'Segoe UI', Tahoma, Geneva, Verdana">
                            <strong>Vantagem: Comodidade e Flexibilidade</strong> <br>
                            O pagamento com cartão de crédito oferece a conveniência de fazer compras imediatas e permite que você pague o valor total ou parcelado.
                            Isso significa que você pode adquirir produtos agora e gerenciar seus pagamentos ao longo do tempo, proporcionando flexibilidade para o seu orçamento.
                        </p>


                        <h3 style="margin: 15px;">Cartão de Débito</h3>
                        <p style="margin: 15px;">
                            <strong>Vantagem: Pagamento Imediato</strong> <br>
                            Optar pelo cartão de débito garante que o pagamento seja efetuado no ato da compra, evitando dívidas e juros. Você mantém um controle financeiro rigoroso, evitando surpresas no futuro.
                        </p>

                        <h3 style="margin: 15px;">Transferência Bancária</h3>
                        <p style="margin: 15px;">
                            <strong>Vantagem: Segurança e Rapidez</strong> <br>
                            A transferência bancária é uma opção segura e rápida. Suas informações financeiras são protegidas, e a transação ocorre em tempo real, garantindo que o vendedor receba o pagamento imediatamente.
                        </p>
                        <h3 style="margin: 15px;">Boleto Bancário</h3> 
                        <p style="margin: 15px;">
                            <strong>Vantagem: Sem a Necessidade de Cartão</strong> <br>
                            O boleto bancário é uma alternativa acessível para quem não possui cartões de crédito ou débito. Basta imprimir o boleto e pagar em um banco, 
                            lotérica ou até mesmo online, tornando as compras online acessíveis a todos.
                        </p>
                        <h3 style="margin: 15px;">Pagamento por Pix</h3>
                        <p style="margin: 15px;">
                            <strong>Vantagem: Rapidez e Economia</strong> <br>
                            O Pix oferece transações imediatas 24/7 e geralmente é gratuito para o consumidor. Com ele, você economiza tempo e dinheiro nas transações, 
                            tornando o pagamento rápido e eficaz.todas as idades e tamanhos merecem vestir seu time do coração. Por isso, oferecemos tamanhos para crianças, jovens e adultos, 
                            garantindo que todos possam encontrar sua camiseta perfeita.
                        </p>

                        <img src="Img/formapagamento.webp" alt="Formas de Pagamento" class="formapag">
                    </div>
                </div>

                <div class="sobre" ng-show="localizacao">
                    <div class="titulocontato">
                        <h3 class="Centraliza">VISITE NOSSA LOJA FÍSICA</h3>
                    </div>

                    <h3 style="margin: 15px;">Nossa Localização - MP Sports: No Coração do Pacaembu, São Paulo</h3>
                        <p style="margin: 15px;">
                            <strong>A MP Sports tem a honra de estar situada em um local verdadeiramente icônico, que respira a paixão pelo futebol a cada esquina. Nossa loja é uma extensão do espírito do Pacaembu, em São Paulo, um local que é reverenciado por sua rica história esportiva.</strong> <br>
                        
                            <strong>Endereço</strong> <br>
                            Praça Charles Miller <br>
                            Pacaembu, São Paulo - SP <br>
                            CEP: 01234-010 <br>
                            Brasil
                            <br>
                            <br>
                            <strong>Um Endereço Histórico:</strong> 
                            <br>
                            Nosso endereço, na Praça Charles Miller, é um tributo à história do futebol no Brasil. A Praça Charles Miller, lar do icônico Estádio do Pacaembu, é onde grandes equipes escreveram suas histórias de glória, e onde gerações de torcedores se reuniram para celebrar o esporte.
                            <br>
                            <br>
                            <strong>Horário de Atendimento:</strong> <br>
                            Nossa loja abre suas portas de segunda a sábado, das 9h às 19h, e aos domingos, das 10h às 17h. Nossa equipe dedicada está pronta para ajudar você a encontrar a camiseta perfeita para mostrar seu amor pelo seu time favorito.
                                <br>
                                <br>        
                            <strong>Como Chegar:</strong>  <br>
                            A localização privilegiada no coração do Pacaembu torna nossa loja acessível a partir de várias áreas da cidade de São Paulo. Seja de carro, transporte público ou até mesmo a pé, você encontrará facilmente o caminho até nós. E se precisar de orientações precisas, aplicativos de mapas online estão à disposição para ajudar você a nos encontrar com facilidade.
                        </p>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7907.375682141935!2d-46.67495210753671!3d-23.547475947088618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5825e5ce392b%3A0xa1bf631ab482f725!2sEst%C3%A1dio%20Municipal%20Paulo%20Machado%20de%20Carvalho-%20O%20Pacaembu!5e0!3m2!1spt-BR!2sbr!4v1699029021537!5m2!1spt-BR!2sbr" width="95%" height="350" style="border:2px solid black; display:flex; margin:0 auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="sobre" ng-show="politica">
                    <div class="titulocontato">
                        <h3 class="Centraliza">POLITICA DE PRIVACIDADE</h3>
                    </div>

                    <div class="textopolitica">
                    <h3>Política de Privacidade - Compras Virtuais de Camisas de Time na "MP Sports"</h3>
                    <p style="margin: 15px;">Na MP Sports, valorizamos a privacidade de nossos clientes e estamos empenhados em proteger suas informações pessoais. Esta Política de Privacidade descreve como coletamos, usamos e protegemos seus dados durante suas compras virtuais de camisas de time.
                            <strong>Coleta de Informações Pessoais</strong>
                            <br>
                            Coletamos informações pessoais, como nome, endereço, e-mail, número de telefone e detalhes de pagamento, exclusivamente para processar suas compras e fornecer um serviço de qualidade.
                            <br>
                            <br>    
                            <strong>Uso de Informações Pessoais</strong>
                            <br>
                            Utilizamos seus dados pessoais estritamente para processar seu pedido, fornecer informações sobre a entrega e entrar em contato em caso de dúvidas.
                            <br>
                            Para personalizar sua experiência, podemos utilizar seu histórico de compras para oferecer recomendações e promoções.
                            <br>
                            <br>
                            <strong>Proteção de Dados</strong>
                            <br>
                            Garantimos a segurança de seus dados pessoais por meio de medidas de proteção técnica e organizacional. Todas as transações são protegidas com criptografia para prevenir acesso não autorizado.
                            <br>
                            <br>
                            <strong>Compartilhamento de Informações</strong>
                            <br>
                            Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros sem seu consentimento explícito, a menos que seja necessário para o processamento de seu pedido (por exemplo, compartilhando informações com a transportadora para entrega).
                            <br>
                            <br>
                            <strong>Cookies e Tecnologias Semelhantes</strong>
                            <br>
                            Usamos cookies e tecnologias semelhantes para melhorar sua experiência de compra, rastrear preferências do usuário e coletar informações estatísticas. Você pode gerenciar suas preferências de cookies nas configurações do seu navegador.
                            <br>
                            <br>
                            <strong>Comunicações de Marketing</strong>
                            <br>
                            Enviaremos informações de marketing somente se você optar por recebê-las. Você pode cancelar a inscrição a qualquer momento.
                            <br>
                            <br>
                            <strong>Direitos do Titular dos Dados</strong>
                            <br>
                            Você tem o direito de acessar, corrigir ou excluir suas informações pessoais a qualquer momento. Entre em contato conosco para exercer esses direitos.
                            <br>
                            <br>
                            <strong>Retenção de Dados</strong>
                            <br>
                            Retemos seus dados pessoais pelo tempo necessário para cumprir nossos compromissos contratuais e obrigações legais.
                            <br>    
                            <br>
                            <strong>Crianças</strong>
                            <br>
                            Não coletamos intencionalmente informações pessoais de crianças menores de 13 anos. Se você é um pai/mãe ou responsável e acredita que coletamos informações pessoais de uma criança, entre em contato para que possamos remover essas informações.
                            <br>
                            <br>
                            <strong>Alterações na Política de Privacidade</strong>
                            <br>
                            Reservamos o direito de fazer alterações nesta política de privacidade. As alterações serão notificadas em nosso site.
                            <br>
                            Na "MP Sports", estamos comprometidos com a proteção de suas informações pessoais e a garantia de uma experiência de compra segura e confiável. Se você tiver alguma dúvida ou preocupação sobre nossas práticas de privacidade, entre em contato conosco. Obrigado por escolher a "MP Sports" para suas compras de camisas de time.
                        </p>

                    </div>
                </div>

                <div class="sobre" ng-show="pergunta">
                <div class="titulocontato">
                        <h3 class="Centraliza">PERGUNTAS FREQUENTES</h3>
                    </div>

                    <div class="textopolitica">
                        <ol>
                            <li>
                                <strong>Quais times de futebol vocês oferecem em sua loja?</strong>
                                <p>Em nossa loja, oferecemos uma ampla gama de camisas de times de futebol, incluindo times nacionais e internacionais. Nós cobrimos os principais clubes e seleções, bem como equipes menos conhecidas.</p>
                            </li>

                            <li>
                                <strong>Como posso encontrar camisas do meu time favorito?</strong>
                                <p>Para encontrar camisas do seu time favorito, você pode usar nossa função de pesquisa no site e digitar o nome do time. Também categorizamos nossos produtos para facilitar a navegação.</p>
                            </li>

                            <li>
                                <strong>Vocês oferecem camisas personalizadas com nomes e números?</strong>
                                <p>Sim, oferecemos a opção de personalização. Você pode adicionar seu próprio nome e número às camisas, tornando-as únicas e personalizadas de acordo com suas preferências.</p>
                            </li>

                            <li>
                                <strong>Qual é a qualidade das camisas que vocês vendem?</strong>
                                <p>Todas as camisas que vendemos são de alta qualidade e licenciadas. Trabalhamos com fabricantes respeitáveis para garantir que nossos produtos sejam autênticos e duráveis.</p>
                            </li>

                            <li>
                                <strong>Vocês têm tamanhos para crianças e adultos?</strong>
                                <p>Sim, temos uma variedade de tamanhos disponíveis, incluindo tamanhos para crianças, jovens e adultos. Nossas camisas são projetadas para atender a todas as idades e tamanhos.</p>
                            </li>

                            <li>
                                <strong>Quanto tempo leva para a entrega das camisas?</strong>
                                <p>Os prazos de entrega podem variar de acordo com a localização e o método de envio escolhido. Geralmente, nossos clientes podem esperar receber seus produtos dentro de [inserir prazo de entrega médio].</p>
                            </li>

                            <li>
                                <strong>Como faço para entrar em contato com o atendimento ao cliente em caso de dúvidas ou problemas?</strong>
                                <p>Nossa equipe de atendimento ao cliente está disponível para ajudar. Você pode entrar em contato conosco por e-mail, telefone ou através do chat ao vivo em nosso site.</p>
                            </li>

                            <li>
                                <strong>Qual é a política de devolução e reembolso da loja?</strong>
                                <p>Nossa política de devolução e reembolso é amigável ao cliente. Se você não estiver satisfeito com sua compra, entre em contato conosco para obter assistência na devolução ou troca de produtos. Oferecemos reembolsos de acordo com nossas diretrizes de retorno.</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include 'rodapé.php' ?>

    <script>
        var app = angular.module('app', []);
        app.controller('Controlador', function($scope){
            $scope.sobre = true;
            $scope.pagamento = false;
            $scope.localizacao = false;
            $scope.politica = false;
            $scope.pergunta = false;

            $scope.funcaosobre = function(){
            $scope.sobre = true;
            $scope.pagamento = false;
            $scope.localizacao = false;
            $scope.politica = false;
            $scope.pergunta = false;
            }

            $scope.funcaopagamento = function(){
            $scope.pagamento = true;
            $scope.sobre = false;
            $scope.localizacao = false;
            $scope.politica = false;
            $scope.pergunta = false;
            }

            $scope.funcaolocalizacao = function(){
            $scope.localizacao = true;
            $scope.sobre = false;
            $scope.pagamento = false;
            $scope.politica = false;
            $scope.pergunta = false;
            }

            $scope.funcaopolitica = function(){
            $scope.politica = true;
            $scope.sobre = false;
            $scope.pagamento = false;
            $scope.localizacao = false;
            $scope.pergunta = false;
            }

            $scope.funcaopergunta = function(){
            $scope.pergunta = true;
            $scope.sobre = false;
            $scope.pagamento = false;
            $scope.localizacao = false;
            $scope.politica = false;
            }
        })
    </script>
</body>
</html>