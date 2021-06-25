<?php

//Les contrôleurs servent à réceptionner les requêtes triées et à fournir une réponse au client. C'est l'intermédaire entre le modèle et la vue.
//Ici logique , calcul et decisions.
namespace Controllers;

abstract class Controller
{

     protected $model;

     protected $modelName;

    /**  PHP permet aux développeurs de déclarer des constructeurs pour les classes. 
    * Les classes qui possèdent une méthode constructeur appellent cette méthode à chaque création d'une nouvelle instance de l'objet*/

        public function __construct(){

            $this->model = new $this->modelName();
        }



}