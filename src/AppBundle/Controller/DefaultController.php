<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Objets\Plateau;
use AppBundle\Objets\Perso;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Instanciation du plateau en 20 x 20
        $pla = new Plateau(20,20);
        
//        $perso1 = new Perso();
//        $perso1->setX("a");
//        $perso1->setY(1);
//        $perso1->setAtt(10);
//        $perso1->setDef(0.5);
//        $perso1->setPv(20);
//        $perso1->setMov(3);
//        
//        $perso2 = new Perso();
//        $perso2->setX("t");
//        $perso2->setX(20);
//        $perso2->setAtt(10);
//        $perso2->setDef(0.5);
//        $perso2->setPv(20);
//        $perso2->setMov(3);
        
        $perso = new Perso("Elfe");
        
        // Génération de la vue avec le plateau & les perso        
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'plateau' => $pla,
            'perso1' => $perso1,
            'perso2' => $perso2,
        ]);
    }
}
