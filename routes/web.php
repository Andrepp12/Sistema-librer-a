<?php

//GESTION CLIENTES

use App\Http\Controllers\ClienteControlador;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\logControler;
use App\Http\Controllers\PublicidadControler;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\segmentoController;
use App\Mail\Notification;
use App\Mail\Publicidad;
use App\Models\dashboard;
//



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DepartmentController;

//GESTION ADQUISICION
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\SolicitudaController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\RecursosBibliograficosController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\Operacion2Controller;
use App\Http\Controllers\DevolucionGeneralController;

//GESTION ADMINISTRACION
use App\Http\Controllers\Balance_GeneralController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\PlanillaController;

//GESTION CIRCULACION
use App\Http\Controllers\CartController;
use App\Http\Controllers\DevolucionController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\PDFsController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AlmacenController;


//GESTION DE SERV TECNICOS
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RecicladorController;
use App\Http\Controllers\Recurso_MantenimientoController;
use App\Http\Controllers\Desecho_RecursoController;
use App\Http\Controllers\DetalleOperacionController;


use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

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

/** for side bar menu active */
// function set_active( $route ) {
//     if( is_array( $route ) ){
//         return in_array(Request::path(), $route) ? 'active' : '';
//     }
//     return Request::path() == $route ? 'active' : '';
// }

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();


// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

//GESTION ADQUISICION
Route::resource("recurso",RecursosController::class);
Route::resource("recursobibliografico",RecursosBibliograficosController::class);
Route::resource("proveedores",ProveedoresController::class);
//SOLICITUD DE SELECCION
Route::resource("solicitud",SolicitudController::class);
Route::resource("solicituda",SolicitudaController::class);
Route::resource("operacion",OperacionController::class);
Route::resource("operacion2",Operacion2Controller::class);
Route::resource("devoluciongeneral",DevolucionGeneralController::class);
Route::get('/nuevaDevolucion01', [DevolucionGeneralController::class, 'created'])->name('devoluciongeneral.created');
Route::post('/nuevaDevolucion1', [DevolucionGeneralController::class, 'create'])->name('devoluciongeneral.create');
Route::post('/stored1', [DevolucionGeneralController::class, 'store'])->name('devolver1');

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
    Route::get('adquisicion/dashboard', 'studentDashboardIndex')->middleware('auth')->name('adquisicion/dashboard');
});

// ----------------------------- user controller -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');
});

// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('adquisicion/list', 'student')->middleware('auth')->name('adquisicion/list'); // list student
    Route::get('adquisicion/grid', 'studentGrid')->middleware('auth')->name('adquisicion/grid'); // grid student
    Route::get('adquisicion/add/page', 'studentAdd')->middleware('auth')->name('adquisicion/add/page'); // page student
    Route::post('adquisicion/add/save', 'studentSave')->name('adquisicion/add/save'); // save record student
    Route::get('adquisicion/edit/{id}', 'studentEdit'); // view for edit
    Route::post('adquisicion/update', 'studentUpdate')->name('adquisicion/update'); // update record student
    Route::post('adquisicion/delete', 'studentDelete')->name('adquisicion/delete'); // delete record student
    Route::get('adquisicion/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
});

// ------------------------ teacher -------------------------------//
Route::controller(TeacherController::class)->group(function () {
    Route::get('teacher/add/page', 'teacherAdd')->middleware('auth')->name('teacher/add/page'); // page teacher
    Route::get('teacher/list/page', 'teacherList')->middleware('auth')->name('teacher/list/page'); // page teacher
    Route::get('teacher/grid/page', 'teacherGrid')->middleware('auth')->name('teacher/grid/page'); // page grid teacher
    Route::post('teacher/save', 'saveRecord')->middleware('auth')->name('teacher/save'); // save record
    Route::get('teacher/edit/{id}', 'editRecord'); // view teacher record
    Route::post('teacher/update', 'updateRecordTeacher')->middleware('auth')->name('teacher/update'); // update record
    Route::post('teacher/delete', 'teacherDelete')->name('teacher/delete'); // delete record teacher
});

// ----------------------- department -----------------------------//
Route::controller(DepartmentController::class)->group(function () {
    Route::get('department/add/page', 'indexDepartment')->middleware('auth')->name('department/add/page'); // page add department
    Route::get('department/edit/page', 'editDepartment')->middleware('auth')->name('department/edit/page'); // page add department
});


//GESTION CLIENTES

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('usuario',usuarioController::class);

Route::get('usercancel',function(){
    return redirect()->route('usuario.index')->with('datos','Accion cancelada ...');
})->name('cancelarUSUARIO');

// Route::get('/',[logControler::class,'showlogin']);
Route::post('/identificacion',[logControler::class,'verificalogin'])->name('identificacion');
Route::post('/',[logControler::class,'salir'])->name('logout');

//clientes
Route::resource('clientes',ClienteControlador::class);
Route::get('clienteSeg',[ClienteControlador::class,'indexClienteSeg'])->name('cliente.seg');

Route::get('clienteSegEdit/{id}/confirmar',[ClienteControlador::class,'editSegmento'])->name('editSegmento');

Route::get('cliente/{id}/redirect/',[ClienteControlador::class,'creaUsuarioCliente'])->name('cliente.creaUsuarioCliente');

Route::put('cliente2/{id}/redirect/',[ClienteControlador::class,'update2'])->name('clientes.update2');

Route::get('asdasdadsasdacancelar',function(){
    return redirect()->route('clientes.index')->with('datos','Accion cancelada ...');
})->name('cancelar');
Route::get('22asdasdadsasdacancelar',function(){
    return redirect()->route('cliente.seg')->with('datos','Accion cancelada ...');
})->name('cancelar.seg');
Route::get('cliente/{id}/confirmar',[ClienteControlador::class,'confirmar'])->name('clientes.confirmar');
//clientes

//segmento
Route::resource('segmento',segmentoController::class);
//Route::get('segmento/{id}/redirect/',[segmentoController::class,'creaUsuarioCliente'])->name('cliente.creaUsuarioCliente');
Route::get('asdasdacancelar',function(){
    return redirect()->route('segmento.index')->with('datos','Accion cancelada ...');
})->name('segmento.cancelar');
Route::get('segmento/{id}/confirmar',[segmentoController::class,'confirmar'])->name('segmento.confirmar');
//segmento


Route::get('miperfil',function()
    {
        return view('clientes.vistaCliente');
    })->name('clientes.vistaCliente');
Route::get('pdfClientes/',[ClienteControlador::class,'pdf'])->name('Clientes.pdf');
Route::get('pdfSegmento/',[segmentoController::class,'pdf'])->name('Segmento.pdf');
Route::get('pdfSegmentadossscLI/',[ClienteControlador::class,'pdfSegmentadocLI'])->name('CliSegmentado.pdf');

Route::get('pdfOperacion/',[OperacionController::class,'pdf'])->name('Operacion.pdf');
Route::get('pdfDevolucionGeneral/',[DevolucionGeneralController::class,'pdf'])->name('DevolucionGeneral.pdf');

//dasboard
Route::resource('dashboard',dashboardController::class);
//Route::get('segmento/{id}/redirect/',[segmentoController::class,'creaUsuarioCliente'])->name('cliente.creaUsuarioCliente');
Route::get('sssscancelar',function(){
    return redirect()->route('dashboard.index')->with('datos','Accion cancelada ...');
})->name('dashboard.cancelar');
Route::get('dashboard/{id}/confirmar',[dashboardController::class,'confirmar'])->name('dashboard.confirmar');
//dasboard


Route::resource('usuario',usuarioController::class);
Route::get('notific/{id}/asdssss/{id2}/cor/',[Notification::class,'enviarCorreo'])->name('enviarCorreo');
Route::get('notific/{id}/asd/{id2}/cor/',[Publicidad::class,'enviaCorreoSegmento'])->name('enviaCorreoSegmento');
/*require __DIR__.'/auth.php';*/

Route::resource('publicidad',PublicidadControler::class);

 Route::get('/inicio', function () {
      return view('plantilla');
})->name('plantilla');

Route::get('/generar-informe', 'InformeController@generarInforme');

//GESTION CIRCULACIÓN

Route::resource("venta",VentaController::class);
Route::resource("devolucion",DevolucionController::class);
Route::resource("reserva",ReservaController::class);

Route::get('/nuevaVenta', [VentaController::class, 'create'])->name('ventas.create');
Route::post('/store', [VentaController::class, 'store'])->name('vender');
Route::get('/boleta', [VentaController::class, 'boleta'])->name('boleta');
Route::get('/salir_boleta', [VentaController::class, 'salir_boleta'])->name('salir_boleta');

Route::get('pdf/{id}', [PDFsController::class, 'index'])->name('pdf');

Route::get('/nuevaDevolucion0', [DevolucionController::class, 'created'])->name('devolucion.created');
Route::post('/nuevaDevolucion', [DevolucionController::class, 'create'])->name('devolucion.create');
Route::post('/stored', [DevolucionController::class, 'store'])->name('devolver');


Route::get('/nuevaReserva', [ReservaController::class, 'create'])->name('reserva.create');
Route::post('/storer', [ReservaController::class, 'store'])->name('reservar');

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'cart')->name('cart.index');
    Route::post('/add', 'add')->name('cart.store');
    Route::post('/add1', 'add1')->name('cart.store1');
    Route::post('/add2', 'add2')->name('cart.store2');
    Route::post('/addd', 'addd')->name('cart.stored');
    Route::post('/adddd', 'adddd')->name('cart.storedd');
    Route::post('/addr', 'addr')->name('cart.storer');
    Route::post('/update','update')->name('cart.update');
    Route::post('/remove', 'remove')->name('cart.remove');
    Route::post('/remove1', 'remove1')->name('cart.remove1');
    Route::post('/remove2', 'remove2')->name('cart.remove2');
    Route::post('/removed', 'removed')->name('cart.removed');
    Route::post('/removedd', 'removedd')->name('cart.removedd');
    Route::post('/remover', 'remover')->name('cart.remover');
    Route::any('/clear','clear')->name('cart.clear');
    Route::any('/clear1','clear1')->name('cart.clear1');
    Route::any('/clear2','clear2')->name('cart.clear2');
    Route::any('/cleard','cleard')->name('cart.cleard');
    Route::any('/cleardd','cleardd')->name('cart.cleardd');
    Route::any('/clearr','clearr')->name('cart.clearr');
});


//GESTION DE SERV TECNICOS


Route::resource('material', MaterialController::class);
Route::resource('reciclador', RecicladorController::class);
Route::resource('recurso_mantenimiento', Recurso_MantenimientoController::class);
Route::resource('desecho_recurso', Desecho_RecursoController::class);
Route::resource("almacen",AlmacenController::class);
Route::resource("detalleoperacion",DetalleOperacionController::class);



Route::get('cancelar-material', function () {
    return redirect()->route('material.index')->with('datos', '¡Acción cancelada!');
})->name('material.cancelar');

Route::get('cancelar-reciclador', function () {
    return redirect()->route('reciclador.index')->with('datos', '¡Acción cancelada!');
})->name('reciclador.cancelar');

Route::get('cancelar-mantenimiento', function () {
    return redirect()->route('recurso_mantenimiento.index')->with('datos', '¡Acción cancelada!');
})->name('recurso_mantenimiento.cancelar');

Route::get('cancelar-desecho', function () {
    return redirect()->route('desecho_recurso.index')->with('datos', '¡Acción cancelada!');
})->name('desecho_recurso.cancelar');

Route::get('cancelar-almacen', function () {
    return redirect()->route('almacen.index')->with('datos', '¡Acción cancelada!');
})->name('almacen.cancelar');

Route::get('cancelar-detalle', function () {
    return redirect()->route('almacen.index')->with('datos', '¡Acción cancelada!');
})->name('detalle.cancelar');

Route::get('material/{id}/confirmar/', [MaterialController::class, 'confirmar'])->name('material.confirmar');
Route::get('almacen/{id}/confirmar/', [AlmacenController::class, 'confirmar'])->name('almacen.confirmar');
Route::get('reciclador/{id}/confirmar/', [RecicladorController::class, 'confirmar'])->name('reciclador.confirmar');
Route::get('recurso_mantenimiento/{id}/confirmar/', [Recurso_MantenimientoController::class, 'confirmar'])->name('recurso_mantenimiento.confirmar');
Route::get('desecho_recurso/{id}/confirmar/', [Desecho_RecursoController::class, 'confirmar'])->name('desecho_recurso.confirmar');
Route::get('/almacen/abrir/{id}', [AlmacenController::class, 'abrir'])->name('almacen.abrir');
Route::get('/detalle/ingresar/{idAlmacen}', [DetalleOperacionController::class, 'create'])->name('detalla.create');
Route::get('/desecho_recurso/vista/{idAlmacen}', [Desecho_RecursoController::class, 'vista'])->name('desecho_recurso.vista');
Route::post('/detalle/ingresar', [DetalleOperacionController::class, 'store'])->name('detalle.store');






















/*SECCION BALANCE*/
Route::get("balance/{id}/pdf",[Balance_GeneralController::class,"pdf"])->name('balance.pdf');
Route::get("balance/{a}/pdf2",[Balance_GeneralController::class,"pdf2"])->name('balance.pdf2');
Route::get("balance/ano",[Balance_GeneralController::class,"ano"])->name('balance.ano');
Route::get("balance/{a}/pindex",[Balance_GeneralController::class,"pindex"])->name('balance.pindex');
Route::get("balance/{id}/ver",[Balance_GeneralController::class,"ver"])->name('balance.ver');
Route::resource("balance",Balance_GeneralController::class);
Route::get("balance/{id}/confirmar",[Balance_GeneralController::class,"confirmar"])->name('balance.confirmar');
Route::get("cancelar/balance",function(){
    return redirect()->route('balance.index')->with('datos','Acción Cancelada...!');
})->name('cancelar.balance');

/*SECCION ROL*/
Route::resource("rol",TipoController::class);
Route::get("rol/{id}/confirmar",[TipoController::class,"confirmar"])->name('rol.confirmar');
Route::get("cancelar/rol",function(){
    return redirect()->route('rol.index')->with('datos','Acción Cancelada...!');
})->name('cancelar.rol');

/*SECCION TRABAJADOR*/
Route::get("trabajador/{id}/ano",[TrabajadorController::class,"ano"])->name('trabajador.ano');
Route::get("trabajador/{a}/{id}/mes",[TrabajadorController::class,"mes"])->name('trabajador.mes');
Route::get("trabajador/{a}/{m}/{id}/asistencia",[TrabajadorController::class,"asistencia"])->name('trabajador.asistencia');
Route::resource("trabajador",TrabajadorController::class);
Route::get("trabajador/{id}/confirmar",[TrabajadorController::class,"confirmar"])->name('trabajador.confirmar');
Route::get("cancelar/trabajador",function(){
    return redirect()->route('trabajador.index')->with('datos','Acción Cancelada...!');
})->name('cancelar.trabajador');


/*SECCION ASISTENCIA*/
Route::get("asistencia/ano",[AsistenciaController::class,"ano"])->name('asistencia.ano');
Route::get("asistencia/{a}/mes",[AsistenciaController::class,"mes"])->name('asistencia.mes');
Route::get("asistencia/{a}/{m}/mes",[AsistenciaController::class,"asistencia"])->name('asistencia.asistencia');
Route::get("asistencia/{a}/{m}/{id}/registra",[AsistenciaController::class,"registrar"])->name('asistencia.registrar');
Route::resource("asistencia",AsistenciaController::class);
Route::get("cancelar/asistencia",function(){
    return redirect()->route('asistencia.ano')->with('datos','Acción Cancelada...!');
})->name('cancelar.asistencia');


/*SECCION PLANILLA*/
Route::get("planilla/{id}/pdf",[PlanillaController::class,"pdf"])->name('planilla.pdf');
Route::get("planilla/ano",[PlanillaController::class,"ano"])->name('planilla.ano');
Route::get("planilla/{a}/pindex",[PlanillaController::class,"pindex"])->name('planilla.pindex');
Route::get("planilla/{a}/create",[PlanillaController::class,"createP"])->name('planilla.createP');
Route::resource("planilla",PlanillaController::class);
Route::get("planilla/{id}/confirmar",[PlanillaController::class,"confirmar"])->name('planilla.confirmar');
Route::get("cancelar/planilla",function(){
    return redirect()->route('planilla.index')->with('datos','Acción Cancelada...!');
})->name('cancelar.planilla');
