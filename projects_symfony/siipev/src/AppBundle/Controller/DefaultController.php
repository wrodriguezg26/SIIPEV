<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/siipev", name="siipev")
     */
    public function siipevAction(Request $request)
    {
        
        return $this->render('index/main/proysiipev.html.twig');
    }

     /**
     * @Route("/docestudio", name="docestudio")
     */
    public function docestudioAction(Request $request)
    {
        
        return $this->render('index/main/doc_estudio.html.twig');
    }

     /**
     * @Route("/docestudio_tec", name="docestudio_tec")
     */
    public function docestudio_tecAction(Request $request)
    {
        
        return $this->render('index/main/doc_estudio_tec.html.twig');
    }

    /**
     * @Route("/t_linea", name="t_linea")
     */
    public function t_lineaAction(Request $request)
    {
        
        return $this->render('index/main/tramites_linea.html.twig');
    }
      /**
     * @Route("/fregistros", name="fregistros")
     */
    public function fregistrosAction(Request $request)
    {
        
        return $this->render('index/main/form_registro.html.twig');
    }
     /**
     * @Route("/construccion", name="construccion")
     */
    public function construccionAction(Request $request)
    {
        
        return $this->render('index/main/construccion.html.twig');
    }

     /**
     * @Route("/w_siipev", name="w_siipev")
     */
    public function w_siipevAction(Request $request)
    {
        
        return $this->render('index/main/wsiipev.html.twig');
    }
     /**
     * @Route("/v_geo", name="v_geo")
     */
    public function v_geoAction(Request $request)
    {
        
        return $this->render('index/main/vgeofrafico.html.twig');
    }
}
