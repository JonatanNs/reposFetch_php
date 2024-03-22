<?php

class DefaultController extends AbstractController{
    public function home() : void
    {
        $this->render("default/home.html.twig", [
            "title" => "Accueil"
        ]);
    }
    public function notFound() : void{
        $this->render("default/404.html.twig", [
            "title" => "404 : Page introuvable"
        ]);
    }
}
