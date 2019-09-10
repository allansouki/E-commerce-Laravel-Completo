<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('owl.carrossel.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/pagamento.css')}}" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

    <style>
        .secBody {
            width: 80%;
            top: 2%;
            left: 10%;
            /* border: 1px solid black; */
            margin: auto;


        }

        .divImg {
            width: 40%;
            height: 20%;
            margin: auto;
            margin-bottom: 5%;
            /* border: 1px solid black; */
        }

        .divImg img {
            width: 100%;
            height: 100%;
            margin: auto;
            animation-duration: 3s;
            /* animation-delay: 3s; */
            animation-name: img;
            /* border: 1px solid black; */
        }

        .compra {
            width: 60%;
            height: 20%;
            margin: auto;
            margin-bottom: 5%;
            /* border: 1px solid black; */
            text-align: center;
            animation-duration: 5s;
            /* animation-delay: 4s; */
            animation-name: compra;

        }


        .explainText {
            width: 65%;
            height: 30%;
            margin: auto;
            margin-bottom: 12%;
            text-align: center;
            animation-duration: 7s;
            /* animation-delay: 5s; */
            animation-name: texto;
            /* opacity: 0;  */
            /* border: 1px solid black; */
        }

        .explainText p {
            width: 100%;
            height: 100%;
            margin: auto;

        }

        .footerSection {
            width: 100%;

        }


        @keyframes img {
            0% {
                opacity: 0;
                /* width: 300% */
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
                /* width: 100%; */
            }
        }

        @keyframes compra {
            0% {
                opacity: 0;
                /* width: 300% */
            }

            50% {
                opacity: 0;
            }

            75% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
                /* width: 100%; */
            }
        }

        @keyframes texto {
            0% {
                opacity: 0;
                /* width: 300% */
            }

            50% {
                opacity: 0;
            }

            75% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
                /* width: 100%; */
            }
        }
    </style>

    @include('header')

    <br>

    <section class="secBody">

        <div class="divImg">
            <img src="{{asset('imgs\imagens_cortadas\torabit_ecommerce_logo.png')}}" alt="">
        </div>

        <h1 class="compra">Compra realizada com sucesso!</h1>

        <div class="explainText">
            <p>
                Parabéns!!! Você acabou de realizar uma compra de um serviço Torabit. <br>
                Aproveite os nossos serviços, esperamos te ver novamente em breve.
            </p>
        </div>



        <section class="footerSection">

            @include ('footer')

        </section>

    </section>


</body>

</html>