<?php

use App\Models\SocialProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\CompraEmail;
use Illuminate\Support\Facades\Mail;

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

Auth::routes(['verify' => true]);

// Rutas generales
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/funcionamiento', 'HomeController@como')->name('home.como');
Route::get('/nosotros', 'HomeController@somos')->name('home.somos');
Route::get('/contacto', 'HomeController@contacto')->name('home.contacto');
Route::get('/terminos', 'HomeController@terminos')->name('home.terminos');
Route::get('/aviso', 'HomeController@aviso')->name('home.aviso');
Route::get('/cookies', 'HomeController@cookies')->name('home.cookies');
Route::get('/preguntas', 'HomeController@preguntas')->name('home.preguntas');
Route::get('/glosario', 'HomeController@glosario')->name('home.glosario');
Route::get('/ayuda', 'HomeController@ayuda')->name('home.ayuda');
Route::get('/reglamento', 'HomeController@reglamento')->name('home.reglamento');
Route::get('/devolucion', 'HomeController@devolucion')->name('home.devolucion');
Route::get('/tips', 'HomeController@tips')->name('home.tips');
Route::get('/cat/response', 'HomeController@getCategories')->name('home.categories');
Route::post('/', 'HomeController@ir')->name('home.ir');

// Rutas de correo
Route::get('CorreoCompra', function ()
{
    $correo = new CompraEmail;

    Mail::to('paco_dimas@outlook.com')->send($correo);

    return 'Mensaje Enviado';
});

// Rutas de usuario
Route::get('/index', 'UsuarioController@index')->name('user.index');
Route::get('/index/{id}', 'UsuarioController@usuarioProd')->name('user.usuarioProd');
Route::get('/misfavoritos', 'UsuarioController@favoritos')->name('user.favoritos');
Route::get('/misventas', 'UsuarioController@ventas')->name('user.ventas');
Route::get('/miscuentas', 'UsuarioController@balance')->name('user.balance');
Route::get('/miscompras', 'UsuarioController@compras')->name('user.compras');
Route::post('/cuenta/save', 'UsuarioController@saveAccount')->name('user.saveAccount');
Route::get('/cuenta', 'UsuarioController@account')->name('user.account');
Route::get('/cuenta/envío', 'UsuarioController@delivery')->name('user.delivery');
Route::post('/cuenta/envío/update', 'UsuarioController@updateDelivery')->name('user.updateDelivery');
Route::get('/cuenta/mas', 'UsuarioController@sellMore')->name('user.sellMore');
Route::get('/cuenta/notificaciones', 'UsuarioController@notifications')->name('user.notifications');
Route::get('/cuenta/contraseña', 'UsuarioController@password')->name('user.password');
Route::post('/cuenta/contraseña/update', 'UsuarioController@updatePassword')->name('user.updatePassword');
Route::get('/cambio/contraseña', 'UsuarioController@changePassword')->name('user.password');
Route::get('/user/pic/{filename}', 'ImageController@usergetImage')->name('user.picture');

// Inicio de sesión con facebook y google
Route::get('/login/{driver}', function ($driver) {
    $drivers = [
        'facebook',
        'google',
    ];

    if (in_array($driver, $drivers)) {
        return Socialite::driver($driver)->redirect();
    } else {
        return redirect()->route('home.index')->with('info', $driver . ' no es una aplicación valida para poder ingresar');
    }
});

Route::get('/login/{driver}/callback', function (Request $request, $driver) {
    if ($request->get('error')) {
        return redirect()->route('home.index')->with('info', 'Ocurrió un error al iniciar sesión con ' . $driver);
    }

    $userSocialite = Socialite::driver($driver)->user();

    // dd($userSocialite);
    // die();



    $social_profile = SocialProfile::where('social_id', $userSocialite->getId())
        ->where('social_name', $driver)->first();

    if (!$social_profile) {

        $user = User::where('email', $userSocialite->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'role' => 'user',
                'name' => $userSocialite->getName(),
                'nickname' => $userSocialite->getName(),
                'email' => $userSocialite->getEmail(),
                'registered' => 1,
                'last_connection' => now(),
            ]);
        }

        SocialProfile::create([
            'user_id' => $user->id,
            'social_id' => $userSocialite->getId(),
            'social_name' => $driver,
            'social_avatar' => $userSocialite->getAvatar(),
        ]);
    }

    // auth()->login($social_profile->user);
    Auth::login($social_profile->user);
    return redirect()->route('home.index');
});

// Rutas de administrador
Route::get('/admin/login', 'HomeController@loginAdmin')->name('admin.login');
Route::get('/admin/index', 'AdminController@index')->name('admin.index');

// Gestionar usuarios
Route::get('/admin/usuarios', 'AdminController@info')->name('user.info');
Route::get('/admin/usuarios/bloquear/{id}', 'AdminController@blockUser')->name('user.blockUser');
Route::get('/admin/usuarios/desbloquear/{id}', 'AdminController@unlockUser')->name('user.unlockUser');
Route::get('/admin/usuarios/eliminar/{id}', 'AdminController@deleteUser')->name('user.deleteUser');

// Rutas de Subcategorías
Route::get('/admin/subcategorias', 'SubcategoryController@index')->name('subcategory.index');
Route::get('/admin/subcategorias/crear', 'SubcategoryController@create')->name('subcategory.create');
Route::post('/admin/subcategorias/guardar', 'SubcategoryController@save')->name('subcategory.save');
Route::get('/admin/subcategorias/delete/{id}', 'SubcategoryController@delete')->name('subcategory.delete');
Route::get('/admin/subcategorias/editar/{id}', 'SubcategoryController@edit')->name('subcategory.edit');
Route::post('/admin/subcategorias/update', 'SubcategoryController@update')->name('subcategory.update');
Route::get('/image/file/{filename}', 'ImageController@SubcategoriesgetImage')->name('image.file');

// Rutas de Elementos
Route::get('/admin/elementos', 'ElementController@index')->name('element.index');
Route::get('/admin/elementos/crear', 'ElementController@create')->name('element.create');
Route::get('/admin/elementos/subcategoria/{category_id}', 'ElementController@createSubcategories');
Route::post('/admin/elementos/guardar', 'ElementController@save')->name('element.save');
Route::get('/admin/elementos/delete/{id}', 'ElementController@delete')->name('element.delete');
Route::get('/admin/elementos/edit/{id}', 'ElementController@edit')->name('element.edit');
Route::post('/admin/elementos/update', 'ElementController@update')->name('element.update');

// Rutas de Marcas
Route::get('/admin/marcas', 'BrandController@index')->name('brand.index');
Route::get('/admin/marcas/crear', 'BrandController@create')->name('brand.create');
Route::post('/admin/marcas/guardar', 'BrandController@save')->name('brand.save');
Route::get('/admin/marcas/delete/{id}', 'BrandController@delete')->name('brand.delete');
Route::get('/admin/marcas/editar/{id}', 'BrandController@edit')->name('brand.edit');
Route::post('/admin/marcas/update', 'BrandController@update')->name('brand.update');

// Rutas de Tallas
Route::get('/admin/tallas', 'SizeController@index')->name('size.index');
Route::get('/admin/tallas/crear', 'SizeController@create')->name('size.create');
Route::post('/admin/tallas/guardar', 'SizeController@save')->name('size.save');
Route::get('/admin/tallas/delete/{id}', 'SizeController@delete')->name('size.delete');
Route::get('/admin/tallas/editar/{id}', 'SizeController@edit')->name('size.edit');
Route::post('/admin/tallas/update', 'SizeController@update')->name('size.update');

// Rutas de Estados
Route::get('/admin/estados', 'StatusController@index')->name('statuses.index');
Route::get('/admin/estados/crear', 'StatusController@create')->name('statuses.create');
Route::post('/admin/estados/guardar', 'StatusController@save')->name('statuses.save');
Route::get('/admin/estados/delete/{id}', 'StatusController@delete')->name('statuses.delete');
Route::get('/admin/estados/editar/{id}', 'StatusController@edit')->name('statuses.edit');
Route::post('/admin/estados/update', 'StatusController@update')->name('statuses.update');

// Rutas de Colores
Route::get('/admin/colores', 'ColorController@index')->name('colors.index');
Route::get('/admin/colores/crear', 'ColorController@create')->name('colors.create');
Route::post('/admin/colores/guardar', 'ColorController@save')->name('colors.save');
Route::get('/admin/colores/delete/{id}', 'ColorController@delete')->name('colors.delete');
Route::get('/admin/colores/editar/{id}', 'ColorController@edit')->name('colors.edit');
Route::post('/admin/colores/update', 'ColorController@update')->name('colors.update');

// -----------------------------------------------------------------------------------

// Rutas de productos
Route::post('/prenda/crear', 'ProductController@crear')->name('product.crear');
Route::get('/prenda/crear', 'ProductController@crear')->name('product.new');
Route::get('/producto/crear/subcategories/{category_id}', 'ProductController@createSubcategories');
Route::get('/producto/crear/brands/{category_id}', 'ProductController@createBrands');
Route::get('/producto/crear/elements/{subcategory_id}', 'ProductController@createElements');
Route::post('/prenda/save', 'ProductController@save')->name('product.save');
Route::get('/prenda/listo', 'ProductController@ready')->name('product.ready');
Route::get('/producto/detalles/{product_id}', 'ProductController@details')->name('product.detail');
Route::get('/producto/comprar/{id}', 'ProductController@buy')->name('product.buy');
Route::post('/prenda/compra', 'ProductController@purchases')->name('product.purchase');
Route::get('/product/file/{filename}', 'ImageController@productsgetImage')->name('product.file');
Route::get('/purchase/file/{id}', 'ImageController@purchasesgetImage')->name('purchase.file');
Route::get('/producto/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::get('/producto/editar/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/producto/update', 'ProductController@update')->name('product.update');


// Rutas de comentarios
Route::post('/comentario/save', 'CommentController@save')->name('comment.save');

// Rutas de subcomentarios
Route::post('/subcomentario/save', 'SubcommentController@save')->name('subcomment.save');

// Rutas de likes
Route::get('/producto/like/{id}', 'LikeController@like')->name('likes.like');
Route::get('/producto/dislike/{id}', 'LikeController@dislike')->name('likes.dislike');

// Rutas de busqueda
Route::get('/{nombre}', 'SearchController@category')->name('search.category');
Route::get('/{cname}/{nombre}', 'SearchController@subcategory')->name('search.subcategory');
Route::post('/prenda/busqueda', 'SearchController@product')->name('search.product');
