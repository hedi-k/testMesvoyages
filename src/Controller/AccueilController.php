<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author 1050
 */
class AccueilController {
    /**
     * @Route("/",name="accueil")
     * @return Response
     */
    public function index(): Response{
        return new Response('Hello world');
    }
}