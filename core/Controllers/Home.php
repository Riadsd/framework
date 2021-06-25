<?php

namespace Controllers;


class Home //extends Controller si besoin d'un model
{
    //  protected $modelName; si besoin d'un model


    /**
     * affiche l'accueil du framework
     * 
     * 
     */
    public function index()
    {
        $titreDeLaPage = "Accueil Framework";

         $message = "Bienvenue dans la documentation";

         $messageChanger = "Voici le message a changer";

         if(!empty($_POST['messageChanger'])){

            $messageChanger = $_POST['messageChanger'];
         };


        // render un template

        \Rendering::render('home/home', compact('titreDeLaPage', 'message', 'messageChanger'));


    }

   



}