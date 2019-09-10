<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'viewprodutoController@exibirIndex');

Route::get('/sobre', "sobreController@sobre");
Route::post('/sobre', "sobreController@sobre");

Route::get('/pagamento/{id}', 'pagamentoController@pagamento')->middleware("auth");
Route::post('/pagamento', 'pagamentoController@pagamento');
Route::get('/carrinho', 'pagamentoController@exibirCarrinho');
/* Route::get('/deletar/carrinho/{id}', [
    'uses' => 'pagamentoController@excluirProduto',
    'as' => 'excluir.produto'
]); */


Route::get('/resultadoCompra', 'resultadoCompraController@ResultadoCompra');
Route::post('/resultadoCompra', 'resultadoCompraController@ResultadoCompra');

Route::get('/cadastro', 'cadastroController@cadastro');
Route::post('/cadastro', "cadastroController@cadastro");

Route::get('/contato', 'contatoController@contato');
Route::post('/contato', 'contatoController@contato');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas do CRUD de produtos abaixo

Route::get('/welcome', function () {  // Acessar sistema do CRUD -> produtos
    return view('welcome');
})->middleware('auth:admin');

Route::get('/visualizar/produto', [
    'uses' => 'produtoController@visualizarProduto',
    'as' => 'visualizar.produto'   // Apelido de uma rota
]);

Route::get('/adicionar/produto', [
    'uses' => 'produtoController@adicionarProduto',
    'as' => 'adicionar.produto'
]);

Route::post('/salvar/produto', [
    'uses' => 'produtoController@salvarProduto',
    'as' => 'salvar.produto'
]);

Route::get('/editar/produto/{id}', [
    'uses' => 'produtoController@editarProduto',
    'as' => 'editar.produto'
]);

Route::post('/atualizar/produto/{id}', [
    'uses' => 'produtoController@atualizarProduto',
    'as' => 'atualizar.produto'
]);

Route::get('/detalhar/produto/{id}', [
    'uses' => 'produtoController@detalharProduto',
    'as' => 'detalhar.produto'
]);

Route::get('/deletar/produto/{id}', [
    'uses' => 'produtoController@deletarProduto',
    'as' => 'deletar.produto'
]);

Route::get('/procurar/produto/', [
    'uses' => 'produtoController@procurarProduto',
    'as' => 'procurar.produto'
]);

Route::get('/informacao/produto/{id}', [
    'uses' => 'viewprodutoController@infoProduto',
    'as' => 'info.produto'
]);

Route::prefix('/admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});



//Route::get('/adminconsulta', function () {
//  return view('adminconsulta');
//});

Route::get('/adminconsulta', 'DashbordController@index')->name('admin.dashboard');
Route::get('/admincadastrar', 'DashbordController@create');
Route::post('/admincadastrar', 'DashbordController@store')->name('admin.store');
Route::get('/admineditar/{id}', 'DashbordController@edit')->name('admin.editar');
Route::post('/admineditar/{id}', 'DashbordController@update')->name('admin.update');






Route::get('profile', 'UserController@profile')->middleware("auth");
Route::post('profile', 'UserController@update_avatar');


