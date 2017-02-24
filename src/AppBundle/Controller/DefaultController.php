<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use AppBundle\Objets\Plateau;
use AppBundle\Objets\Classes;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {   
        

if(!isset($_SESSION)) { session_start(); };
        
        // Instanciation du plateau en 20 x 20
        $pla = new Plateau(20,20);
        
        $joueur1 = new Classes("palade", "nain", "truc", "1_a");
        
        $joueur2 = new Classes("cretin", "lapin", "machin", "20_a");
        
        // Génération de la vue avec le plateau & les perso        
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'plateau' => $pla,
            'joueur1' => $joueur1,
            'joueur2' => $joueur2
        ]);
    }
    
    /**
     * @Route("/move/{coord}")"
     * name="move"
     */
    public function moveAction($coord)
    {   
        
        $test = $_POST["joueur"];
        
        
        $test["movencours"]--;
        $test["coord"] = $_POST["dest"];
        
        if ($test["movencours"]==0){
            $test["act"]--;            
            if ($test["act"]==0) {
                $test["error"]=1;
            }
            else { $test["movencours"]=$test["mov"]; }
        }
        
        return new JsonResponse($test);
    }
}
