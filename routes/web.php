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

Route::get('/', function () {
    return view('pages.index',['active_menu' => 'inicio']);
});

Route::get('/nosotros/quienes-somos', function () {
    return view('pages.nosotros.quienes-somos',['active_menu' => 'nosotros']);
});

Route::get('/nosotros/galeria', function () {
    return view('pages.nosotros.galeria',['active_menu' => 'nosotros']);
});

Route::get('/nosotros/contacto', function () {
    return view('pages.nosotros.contacto',['active_menu' => 'nosotros']);
});

Route::get('/nosotros/faqs', function () {
    return view('pages.nosotros.faqs',['active_menu' => 'nosotros']);
});

Route::get('/idiomas/ingles', function () {
    return view('pages.idiomas.ingles.ingles',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/ingles/ingles-ninos', function () {
    return view('pages.idiomas.ingles.ingles-ninos',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/ingles/jovenes-y-adultos', function () {
    return view('pages.idiomas.ingles.jovenes-y-adultos',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/ingles/personalizado', function () {
    return view('pages.idiomas.ingles.personalizado',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/ingles/tecnicos', function () {
    return view('pages.idiomas.ingles.tecnicos',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/ingles/corporativo', function () {
    return view('pages.idiomas.ingles.corporativo',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/ingles/en-linea', function () {
    return view('pages.idiomas.ingles.en-linea',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/otros-idiomas/aleman', function () {
    return view('pages.idiomas.otros-idiomas.aleman',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/otros-idiomas/arabe', function () {
    return view('pages.idiomas.otros-idiomas.arabe',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/otros-idiomas/frances', function () {
    return view('pages.idiomas.otros-idiomas.frances',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/otros-idiomas/italiano', function () {
    return view('pages.idiomas.otros-idiomas.italiano',['active_menu' => 'idiomas'  ]);
});

Route::get('/idiomas/otros-idiomas/japones', function () {
    return view('pages.idiomas.otros-idiomas.japones',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/otros-idiomas/mandarin', function () {
    return view('pages.idiomas.otros-idiomas.mandarin',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/otros-idiomas/portugues', function () {
    return view('pages.idiomas.otros-idiomas.portugues',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/intercambio/venezuela', function () {
    return view('pages.idiomas.intercambio.venezuela',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/intercambio/otros-paises', function () {
    return view('pages.idiomas.intercambio.otros-paises',['active_menu' => 'idiomas']);
});

Route::get('/idiomas/espanol', function () {
    return view('pages.idiomas.espanol',['active_menu' => 'idiomas']);
});

Route::get('/traduccion', function () {
    return view('pages.traduccion.index',['active_menu' => 'traduccion']);
});

Route::get('/legal/apostilla', function () {
    return view('pages.legal.apostilla',['active_menu' => 'legal']);
});

Route::get('/legal/gestoria', function () {
    return view('pages.legal.gestoria',['active_menu' => 'legal']);
});

Route::get('/edicion/redaccion', function () {
    return view('pages.edicion.redaccion',['active_menu' => 'edicion']);
});

Route::get('/comercial/eventos', function () {
    return view('pages.comercial.eventos',['active_menu' => 'comercial']);
});

Route::get('/comercial/franquicia', function () {
    return view('pages.comercial.franquicia',['active_menu' => 'comercial']);
});

Route::get('/comercial/intercambio', function () {
    return view('pages.comercial.intercambio',['active_menu' => 'comercial']);
});
