<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TorabitShop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png"
            sizes="32x32">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
            type='text/css'>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
            href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <!--<link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="shortcut icon" href="favicon.ico"> -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/carr.css')}}">
        <link rel="stylesheet" href="{{asset('css/docs.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.js')}}"></script>
    </head>

    <body>
        @include('header')

        <section id="conteudo">

            <section>
                <!-- Seção para o ebook -->
                <div id="ebook">
                    <span class="pfrase">PLANEJE E GERENCIE UM</span> <br>
                    <span>MONITORAMENTO EM REDES SOCIAIS</span>
                    <div><a href="http://www.torabit.com.br/wp-content/uploads/2019/02/MonitoramentoRedesSociais.pdf"
                            target="_blank"><button type="button" class="btn">Download Ebook</button></a></div>

                </div> <!-- Fim da seção do ebook -->


                <!--   <?php //include("carrossel.php");?> -->
                <!-- Tirei o carrossel acima -->

            </section> <!-- Fim da sessão para o ebook -->

            <section id="area-carrossel">
                <!--<div class="texto">Escolha aqui sua ferramenta: </div> -->
                @include('carrossel')


            </section>


            <section id="alta">
                <!-- Seção do "Em alta" -->
                <!--<h5>Em Alta</h5>-->
                
                <section id="contProduto col-12 col-md-12 col-lg-12 col-sm-12">
                <div class="row ">
                    <div class="col-md-12 col-lg-3 col-sm-12 col-12 borda">
                        <img class="card-img-top" src="{{asset('imgs/imagens_cortadas/menu1.png')}}">
                        <div class="card-body">
                            <h4 class="card-title">Ranking de posts</h4>
                            <p class="altp">Compare os posts de suas marcas de interesse com seus concorrentes.</p>
                            <a href="/sobre" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>


                    <div class="col-md-12 col-lg-3 col-sm-12 col-12 borda">
                        <img class="card-img-top" src="{{asset('imgs/imagens_cortadas/menu2.png')}}">
                        <div class="card-body">
                            <h4 class="card-title">Analytics</h4>
                            <p class="altp">Compare o desempenho de marcas em 11 plataformas diferentes.</p>
                            <a href="/sobre" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-3 col-sm-12 col-12 borda">
                        <img class="card-img-top" src="{{asset('imgs/imagens_cortadas/menu3.png')}}">
                        <div class="card-body">
                            <h4 class="card-title">Rastrear Links</h4>
                            <p class="altp">Acompanhe os compartilhamentos de notícias nas redes.</p>
                            <a href="/sobre" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-3 col-sm-12 col-12 borda">
                        <img class="card-img-top" src="{{asset('imgs/imagens_cortadas/menu4.png')}}">
                        <div class="card-body">
                            <h4 class="card-title">Trends</h4>
                            <p class="altp">Acompanhe o que mais falam, o que mais buscam e o que mais leem.</p>
                            <a href="/sobre" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                    </div>
                </section>
        
                <hr>

                @include('footer')
            </section>

        </section>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    </body>

</html>
