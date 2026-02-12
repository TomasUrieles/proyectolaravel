<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "TOMAS URIELES";
});

Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/store', function (Request $request) {
    print_r($request->all());
});


Route::get('/php-basico', function () {

    echo "h1 style ='color: red;'>Hola Mundo</h1>";

    $name = "Tomas Urieles";
    $height = 1.86;
    $isLogin = true;
    $age = 19;

    echo "<h2>  " . $name . " </h2>";
    echo "<p>  " . $name . " </p>";

    echo "<br><br><br>*************************ESTRCUTURAS DE CONTROL*************************<br><br><br>";
    
    $message = "Soy $name, tengo $age años. Soy mayor de edad";


    $pc =  [
        "name" => "Teclado",
        "price" => 600,
        "marca" =>"Asus"
    ];

    $teclado =  [
        "name" => "Teclado",
        "price" => "200",
        "marca" => "Asus",
    ];

    foreach ($teclado as $item) {
        echo  $item["name"] .  "<br>";
    }

});

function valadateAge (){
    if ($age >= 18) {
        return "Soy mayor de edad";
    }else {
        return "Soy menor de edad";
    }
}