<?php
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Wave</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        * {
            box-sizing: border-box;
        }

        footer {
            background-color: #000;
            color: #fff;
            font-family: 'Arial', sans-serif;
            padding: 40px 20px;
        }

        .footer-top {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border-bottom: 1px solid #444;
            padding-bottom: 30px;
        }

        .footer-col {
            flex: 1 1 200px;
            margin: 10px;
        }

        .footer-col h4 {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 13px;
        }

        .footer-col ul li a:hover {
            text-decoration: underline;
        }

        .newsletter input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid white;
            border-radius: 10px;
            background-color: transparent;
            color: white;
        }

        .newsletter input::placeholder {
            color: white;
        }

        .newsletter button {
            padding: 10px 20px;
            background: white;
            color: black;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .newsletter button:hover {
            background: #444;
            color: white;

        }

        .social-icons a {
            color: white;
            margin-right: 10px;
            font-size: 18px;
        }

        .footer-bottom {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            border-top: 1px solid #444;
            padding-top: 20px;
        }

        .whatsapp-btn {
            display: flex;
            justify-content: center;
            color: white;
            border: 1px solid white;
            padding: 10px;
        }

        @media (max-width: 768px) {
            .footer-top {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <footer>
        <div class="footer-top">
            <div class="footer-col newsletter">
                <h4>FAÇA PARTE DO MOVIMENTO</h4>
                <p>Inscreva-se e tenha acesso exclusivo à vendas antecipadas, promoções e novidades.</p>
                <input type="email" placeholder="E-mail">
                <button>Inscrever-se</button>
            </div>

            <div class="footer-col">
                <h4>EMPRESA</h4>
                <ul>
                    <li><a href="#">Sobre a Wave</a></li>
                    <li><a href="#">Revenda</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>ATENDIMENTO AO CLIENTE</h4>
                <ul>
                    <li><a href="#">Dúvidas Frequentes</a></li>
                    <li><a href="#">Trocas e Devoluções</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Frete e Entrega</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>MINHA CONTA</h4>
                <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Curtidas</a></li>
                    <li><a href="#"><em>Carrinho</em></a></li>
                    <li><a href="#"><em>Programa de Fideldiade</em></a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>ENTRE EM CONTATO</h4>
                <p>Tel: (85) 98404-1796</p>
                <br>
                <p></p>E-mail: wavedeepstyle@gmail.com</p>
                <br>
                <p></p>Atendimento de Segunda a Sexta das 8h às 18h</p>
                <a href="https://wa.me/5585984041796/" class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/wavedeepstyle/?next=%2F"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
            <p>&copy; <?php echo $currentYear; ?> Wave. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>