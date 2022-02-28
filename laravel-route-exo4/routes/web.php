<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/about', function () {
    $fruit = "pomme";
    return view('pages/about', compact("fruit"));
});

Route::get('/contact', function () {
    $nom = "dupuis";
    $prenom = "robert";
    $n_tel = "XX XXX XXX";
    return view('pages/contact', compact("nom", "prenom", "n_tel"));
});


Route::get('/coding', function () {

    class obj_personne{
        public $nom;
        public $prenom;
        public $age;
        public $commune;

        function set_props($nom, $prenom, $age, $commune){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->commune = $commune;
        }

        function get_props(){
            return $this->nom . " " . $this->prenom . " " .$this->age . " " .$this->commune;
        }

    }

    
    $personne = new obj_personne();
    $personne->set_props("Dupuis", "Robert", 40, "Ixelles");

    $personne_2 = new obj_personne();
    $personne_2->set_props("Dubois", "Jean-Robert", 14, "Ixelles");

    $personne_3 = new obj_personne();
    $personne_3->set_props("Dupuit", "Marc", 19, "Ixelles");

    $personne_4 = new obj_personne();
    $personne_4->set_props("Dupond", "Jean-Marc", 12, "Ixelles");

    $personne_5 = new obj_personne();
    $personne_5->set_props("Dupont", "Joseph", 59, "Ixelles");

    $personnes = array($personne, $personne_2, $personne_3, $personne_4, $personne_5);

    $prenom = array("prenom1", "prenom2", "prenom3");
    return view('pages/coding', compact("prenom", "personnes"));
});
