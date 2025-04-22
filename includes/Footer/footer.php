<?php
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <title>Footer</title>
</head>
<body>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Sobre nós</a>
                <a href="#">Contato</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos de Serviço</a>
            </div>
            <div class="footer-logo">
                <img src="../assets/wavefooter.png" alt="Wave Logo" />
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo $currentYear; ?> Wave. Todos os direitos reservados.</p>
        </div>
    </footer>

    <style>
        footer {
            background-color: #000000;
            color: white;
            padding: 30px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-family: 'Arial', sans-serif;
            box-sizing: border-box;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .footer-logo img {
            width: 250px;
            height: auto;
            max-width: 100%;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            margin-top: 20px;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 12px;
        }

        .footer-bottom a {
            color: white;
            text-decoration: none;
            font-size: 12px;
        }

        .footer-bottom a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .footer-links {
                margin-bottom: 20px;
            }

            .footer-logo img {
                width: 200px;
            }

            .footer-links a {
                font-size: 18px;
            }
        }
    </style>

</body>
</html>
