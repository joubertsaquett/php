//baixar e instalar o composer

//iniciar um projeto
composer create-project --prefer-dist laravel/laravel projeto1

//baixar o PASSPORT para autenticação HTTP
composer require laravel/passport

//Criar o banco em utf8 e configurar tambem no config/database.php o charset e collation
php artisan migrate
php artisan migrate:flush

//instalar o passport
php artisan passport:install



//editar o arquivo app/user.php
use Laravel\Passport\HasApiTokens;
use Notifiable, HasApiTokens;

//editar app/prodivers/AuthServiceProvider.php
use Laravel\Passport\Passport;
e depois de // acrescentar
Passport::routes();

//editar config/auth.php nos guards substituir por
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],
    
    
//Criar os controladores
php artisan make:controller AutenticadorControlador

//Criado o arquivo em app/htpp/Controllers/AutenticadorControlador.php inclua os metodos
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class AutenticadorControlador extends Controller
{
    public function registro(Request $request){
        //nome emal senha
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        return response()->json([
            'res' => 'Usuario criado com sucesso'
        ], 201);
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $credenciais =[
            'email' => $request->email,
            'password' => $request->password
        ];
        if(!Auth::attempt($credenciais)):
            return response()-json([
                'res' => 'Accesso Negado'
            ], 401);
        endif;
        $user = $request->user();
        $token = $user->createToken('Token de acesso')->accessToken;
        return response()->json([
            'token' => $token
        ], 200);
    }
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'res' => 'Deslogado com sucesso'
        ]);
    }
}
/////////////////////////////////


//Criar o controlador 
php artisan make:controller ProdutosControlador

//Com o conteudo
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProdutosControlador extends Controller
{
    public function inde(){
        return response()->json([
            ['id' => 1, 'nome'=> 'produto 1'],
            ['id' => 2, 'nome'=> 'produto 2'],
            ['id' => 3, 'nome'=> 'produto 3'],
            ['id' => 4, 'nome'=> 'produto 4'],
        ]);
    }
}


//configurar as rotas API.php
<?php
use Illuminate\Http\Request;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('auth')->group(function(){
    Route::post('registro', 'AutenticadorControlador@registro');
    Route::post('login', 'AutenticadorControlador@login');
    Route::middleware('auth:api')->group(function(){
         Route::post('login', 'AutenticadorControlador@logout');
    });
});
Route::get('produtos', 'ProdutosControlador@index')
    ->middleware('auth:api');
    
 //////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
//testando as rotas
http://localhost/api/public/auth/registro
body:
{
  "name": "Joubert",
  "email": "joubertsaquett@gmail.com",
  "password": "joubert",
  "password_confirmation": "joubert"
}   
header:
Content-Type : application/json
Accept : application/json
//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////    

//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////    
http://localhost/api/public/api/auth/login
{
  "email": "joubertsaquett@gmail.com",
  "password": "joubert"
}
header:
Content-Type : application/json
Accept : application/json
//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////Após login acessando uma rota
GET: http://localhost/api/public/api/produtos
header:
Accept : application/json
Authorization : Bearer token_com_espaço_entre_o_bearer


//Logout
POST http://localhost/api/public/api/auth/logout
header:
Accept : application/json
Authorization : Bearer token_com_espaço_entre_o_bearer   
    
    
    
    
    
    
    
    
    
