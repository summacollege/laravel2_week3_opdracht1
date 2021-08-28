<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Builder\Stub;

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
    $students = Student::all();
    foreach($students as $student){
        echo $student->achternaam . '<br>';
        echo $student->voornaam . '<br>';
        echo $student->woonplaats->woonplaats . '<br>';
    }
});
