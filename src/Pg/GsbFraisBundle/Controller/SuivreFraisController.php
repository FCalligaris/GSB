<?php

namespace Pg\GsbFraisBundle\Controller;

require_once 'include\Class.pdogsb.inc.php';
require_once 'include\Fct.inc.php';

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \PdoGsb;



class SuivreFraisController extends Controller {
    public function indexAction(){
        $session = $this->container->get('request')->getSession();
        $pdo = PdoGsb::getPdoGsb();
        $lesVisiteurs = $pdo->getTousLesVisiteurs();
    
        return $this->render('PgGsbFraisBundle:SuivieFrais:suivreFrais.html.twig',
                array(
                    'lesVisiteurs' => $lesVisiteurs,
                ) 
            ); 
    } 
}