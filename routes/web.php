<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\candidato;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::post('/cadastrar-candidato', function (Request $dados){
    candidato::create([
        'nome' => $dados->Nome_candidato,
        'idade' => $dados->Idade_candidato,
        'telefone' => $dados->Telefone_candidato,
        'profissao' => $dados->Profissao_candidato
    ]);
    echo "Candidato enviado com sucesso!!";
    return redirect('/listar-candidatos');
});

Route::get('/mostrar-candidato/{id}', function ($id){
    $candidato = candidato::findOrFail($id);
    echo $candidato->nome;
    echo $candidato->idade;
    echo $candidato->telefone;
    echo $candidato->profissao;
});

Route::get('/editar-candidato/{id}', function ($id){
    $candidato = candidato::findOrFail($id);
    return view('editar', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id}', function (Request $dados, $id){
    $candidato = candidato::findOrFail($id);
    $candidato->nome = $dados->Nome_candidato;
    $candidato->idade = $dados->Idade_candidato;
    $candidato->telefone = $dados->Telefone_candidato;
    $candidato->profissao = $dados->Profissao_candidato;
    $candidato->save();
    echo "Registro atualizado com sucesso!";
    return redirect('/listar-candidatos');
});

Route::get('/excluir-candidato/{id}', function ($id){
    $candidato = candidato::findOrFail($id);
    $candidato->delete();
    echo "Candidato excluído com sucesso!!";
    return redirect('/listar-candidatos');
});

Route::get('/listar-candidatos', function (){
    $candidato = candidato::all();
    return view('listar', ['candidatos' => $candidato]);
});