<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ViewController
 *
 * @author jeanchristian-petetin
 */
class ViewController extends Controller{
    
    /**
     * La route correspond à l'URI passé dans la requête HTTP
     * ici l'iru = yellow
     * @Route("/yellow", name="y")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getYellow(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleur/yellow.html.twig");
        }else{
            return new Response("yellow");
        }
    }
    
    /**
     * @Route("/red", name="r")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getRed(Request $r){
        // on retourne la page html si on a fait une requette de type GET
        if($r->getMethod() == "GET"){
            return $this->render("default/couleur/red.html.twig");
        // sinon on retourne du texte dans un nouvelle reponse    
        }else{
            return new Response("red");
        }
    }
    
    /**
     * @Route("/blue", name="b")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getBlue(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleur/blue.html.twig");
        }else{
            return new Response("blue");
        }
    }
    
    /**
     * @Route("/green", name="g")
     * @return Response correspond a la couleur passé dans l'URI
     */
    public function getGreen(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleur/green.html.twig");
        }else{
            return new Response("green");
        }
    }
}
