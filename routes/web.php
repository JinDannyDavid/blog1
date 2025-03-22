<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenidos a la interfaz de inicio";
});

Route::get('/contacto', function () {
    return "Saludo desde la interfaz de contacto";
});

Route::get('/contacto/informacion', function () {
    return "Aqui se muestra toda la informacion de los cursos";
})->name('contacto.informacion');


Route::get('/cursos/{id}', function ($id) {
    return "Bienvenido a la interaz con ID: $id";
});

Route::get('/post', function () {
    return "Bienvenido a la interaz post";
});

Route::get('/posts', function () {
    return "Aqui se procesara el formulario para crear los post";
});

Route::get('/posts/{post}', function ($post) {
    return "Aqui se mostrara el post: $post";
});

Route::get('/posts/{post}/edit', function ($post) {
    return "Aqui se mostrara el formulario para editar los post: $post";
});

Route::put('/posts/{post}', function ($post) {
    return "Aqui se mostrara el formulario para editar los post: $post";
});

Route::delete('/posts/{post}', function ($post) {
    return "Aqui se eliminara los post: $post";
});

Route::get('/post/create', function () {
    return "Bienvenido a la interaz para crear post";
});

Route::get('/contacto/{curso}/{categoria}', function ($curso,$categoria=null) {
    if($categoria){
        return "Bienvenido a la interfaz del curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido a la interfaz de curso: $curso";
    }
});