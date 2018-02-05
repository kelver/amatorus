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


Auth::routes();

Route::get('/', 'IndexController@index')->name('home');
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/perfil', 'PerfilController@index')->name('perfil');

Route::get('/jogadores', 'JogadoresController@index')->name('indexJogadores');
Route::get('/jogadores-new', 'JogadoresController@new')->name('newJogadores');
Route::post('/jogadoresStore', 'JogadoresController@store')->name('storeJogadores');

Route::get('/times', 'TimesController@index')->name('indexTimes');
Route::get('/times-new', 'TimesController@new')->name('newTimes');
Route::post('/times', 'TimesController@store')->name('storeTimes');

Route::get('/torneios', 'TorneiosController@index')->name('indexTorneios');
Route::get('/torneios-new', 'TorneiosController@new')->name('newTorneios');
Route::post('/torneios', 'TorneiosController@store')->name('storeTorneios');

Route::get('/usuarios', 'UsuariosController@index')->name('indexUsuarios');
Route::get('/usuarios-new', 'UsuariosController@new')->name('newUsuarios');
Route::post('/usuariosStore', 'UsuariosController@store')->name('storeUsuarios');

//Rotas para definição de papéis de usuário
Route::get('/usuarios/role/{id}', 'UsuariosController@role')->name('usuario.role');
Route::post('/usuarios/role/{role}', 'UsuariosController@roleStore')->name('usuario.role.store');
Route::delete('/usuarios/role/{usuario}/{role}', 'UsuariosController@roleDestroy')->name('usuario.role.destroy');

//Rotas para definição de permissões de grupos
Route::get('/grupos/permission/{id}', 'GruposController@permissions')->name('grupos.permission');
Route::post('/grupos/permission/{permission}', 'GruposController@permissionStore')->name('grupos.permission.store');
Route::delete('/grupos/permission/{usuario}/{permission}', 'GruposController@permissionDestroy')->name('grupos.permission.destroy');



Route::get('/estados', 'EstadosController@index')->name('indexEstados');
Route::get('/estados-new', 'EstadosController@new')->name('newEstados');
Route::post('/EstadosStore', 'EstadosController@store')->name('storeEstados');

Route::get('/cidades', 'CidadesController@index')->name('indexCidades');
Route::get('/cidades-new', 'CidadesController@new')->name('newCidades');
Route::post('/CidadesStore', 'CidadesController@store')->name('storeCidades');

Route::get('/grupos', 'GruposController@index')->name('indexGrupos');
Route::get('/grupos-new', 'GruposController@new')->name('newGrupos');
Route::post('/GruposStore', 'GruposController@store')->name('storeGrupos');

Route::get('/permissao', 'PermissaoController@index')->name('indexPermissao');
Route::get('/permissao-new', 'PermissaoController@new')->name('newPermissao');
Route::post('/PermissaoStore', 'PermissaoController@store')->name('storePermissao');

Route::get('/associados', 'AssociadosController@index')->name('indexAssociados');
Route::get('/associados-new', 'AssociadosController@new')->name('newAssociados');
Route::post('/AssociadosStore', 'AssociadosController@store')->name('storeAssociados');
Route::get('/todos-associados', 'AssociadosController@relatorioAll')->name('relAssociados');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');