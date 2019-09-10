<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Configurações da conta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
        <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png" sizes="32x32">
    </head>

    <body>
    @include('header')

      <div id="corpo">
        <div id="area-cadastro">
            
            <h2>Configurações da conta</h2>
            <br>
           
           <div id="topico">
            <a href=""><h6 class="conta">Excluir Conta</h6></a>
            <a href=""><h6 class="forma">Forma de pagamento</h6></a>
           </div>
           <br><br>

           <form>

            <label>Email</label>
            <input class="form-control form-control-md email2" type="email" name="emailConfirm">
            <br>

            <label>Nova Senha</label>
            <input class="form-control form-control-md senha2" type="password" name="novaSenha">
            <br>

            <label>Confirmar Nova Senha</label>
            <input class="form-control form-control-md senha2" type="password" name="novaSenha2">
            <br>

            <label>Idioma</label>
            <select class="form-control select" name="idioma">
            <option>Português [BR]</option>
            <option>Inglês [EN]</option>
            </select>
            <br>

            <label>Profissão</label>
            <select class="form-control select" name="profissao">
            <option>Escolha sua Profissão</option>
            </select>
            <br>

           <div id="botoes">
            <button type="submit" class="btn cancelar">CANCELAR</button>
            <button type="submit" class="btn btn-primary">SALVAR</button>
           </div>
           </form> 
            <hr> 
            @include ('footer')  
         </div> 
       </div>
        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>