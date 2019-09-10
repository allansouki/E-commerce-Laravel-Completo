

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/docs.theme.min.css')}}">
    <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png" sizes="32x32">
</head>

<body>
  @include ('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br><br><div class="card">
                <div class="card-header p-3 mb-2 bg-primary text-white">{{ __('Cadastro') }}</div >

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>











                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="number" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contato" class="col-md-4 col-form-label text-md-right">{{ __('Contato') }}</label>

                            <div class="col-md-6">
                                <input id="contato" type="number" class="form-control @error('contato') is-invalid @enderror" name="contato" value="{{ old('contato') }}" required autocomplete="contato" autofocus>

                                @error('contato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('Cep') }}</label>

                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus>

                                @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco" autofocus>

                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Numero') }}</label>

                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>

                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="complemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus>

                                @error('complemento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>

                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required autocomplete="estado" autofocus>

                                @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{  $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>




                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                            <p class="agree">Ao continuar, você concorda com as condições de Uso <br> 
            e com a Política de Privacidade do Torabit.</p>
                            </div>
                            
                        </div>



                     






































































                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('CRIAR MINHA CONTA') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('footer')
<script src="http://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$("#cep").mask("99999-999",{completed:function(){
		var cep = $(this).val().replace(/[^0-9]/, "");
		
		// Validação do CEP; caso o CEP não possua 8 números, então cancela
		// a consulta
		if(cep.length != 8){
			return false;
		}
		
		// A url de pesquisa consiste no endereço do webservice + o cep que
		// o usuário informou + o tipo de retorno desejado (entre "json",
		// "jsonp", "xml", "piped" ou "querty")
		var url = "http://viacep.com.br/ws/"+cep+"/json/";
		
		$.getJSON(url, function(dadosRetorno){
			try{
				// Preenche os campos de acordo com o retorno da pesquisa
				$("#endereco").val(dadosRetorno.logradouro);
				$("#bairro").val(dadosRetorno.bairro);
				$("#cidade").val(dadosRetorno.localidade);
				$("#estado").val(dadosRetorno.uf);
				$("#nr_end").focus();
			}catch(ex){}
		});
	}});
	
});
</script>
</body>
</html>