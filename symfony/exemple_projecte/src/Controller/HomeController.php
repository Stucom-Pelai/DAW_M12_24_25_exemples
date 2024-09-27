<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/usuari/login', name: 'app_home')]
    public function login(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
    #[Route('usuari/info/{id}',name:"usuari_info")]
    public function info(string $id):JsonResponse{
        $usuari=["nom"=>"pepe","email"=>"pepe@gmail.com"];
        $usuari["edat"]=26;

        $usuaris["22"]=$usuari;
        $usuaris["33"]=["nom"=>"mercedes","email"=>"mercedes@gmail.com"];

        $resposta = $usuaris[$id];

       // return new Response(json_encode($usuari),Response::HTTP_OK);
        return new JsonResponse($resposta,Response::HTTP_OK);
    }

}
