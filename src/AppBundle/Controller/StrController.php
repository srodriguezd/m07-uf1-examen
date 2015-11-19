<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StrController extends Controller
{
    /**
     * @Route("/", name="str")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('str/index.html.twig');
    }

        /**
     * @Route("/mayusculas", name="app_str_mayusculas")
     */
    public function mayusculasAction()
    {
        return $this->render('str/mayusculas.html.twig');
    }

    /**
     * @Route("/do-mayusculas", name="app_str_doMayusculas")
     */
    public function doMayusculasAction(request $request)
    {
        $str = $this->get('app.service.str');
        $op1 = $request->request->get('op1');
        $str->setOp1($op1);
        $str->mayusculasAction($op1);

        $result = $str->getResult();



        return $this->render(
            ':str:do-mayusculas.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'Mayusculas',
            ]
        );
    }

    /**
     * @Route("/minusculas", name="app_str_minusculas")
     */
    public function minusculasAction()
    {
        return $this->render('str/minusculas.html.twig');
    }

    /**
     * @Route("/do-minusculas", name="app_str_doMinusculas")
     */
    public function doMinusculasAction(request $request)
    {
        $str = $this->get('app.service.str');
        $op1 = $request->request->get('op1');
        $str->setOp1($op1);
        $str->minusculasAction($op1);

        $result = $str->getResult();



        return $this->render(
            ':str:do-minusculas.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'Minusculas',
            ]
        );
    }

    /**
     * @Route("/combina", name="app_str_combina")
     */
    public function combinaAction()
    {
        return $this->render('str/combina.html.twig');
    }

    /**
     * @Route("/do-combina", name="app_str_doCombina")
     */
    public function doCombinaAction(request $request)
    {
        $str = $this->get('app.service.str');
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $str->setOp1($op1);
        $str->setOp2($op2);

        $str->combinaAction();
        $result = $str->getResult();




        return $this->render(
            ':str:do-combina.html.twig',
            [
                'op1' => $op1,
                'op2' => $op2,
                'result'=> $result,

                'title' => 'Combina',
            ]
        );
    }


    /**
     * @Route("/cuenta", name="app_str_cuenta")
     */
    public function cuentaAction()
    {
        return $this->render('str/cuenta.html.twig');
    }

    /**
     * @Route("/do-cuenta", name="app_str_doCuenta")
     */
    public function doCuentaAction(request $request)
    {
        $str = $this->get('app.service.str');
        $op1 = $request->request->get('op1');
        $str->setOp1($op1);
        $str->cuentaAction($op1);

        $result = $str->getResult();



        return $this->render(
            ':str:do-cuenta.html.twig',
            [
                'op1' => $op1,
                'result'=> $result,

                'title' => 'Cuenta',
            ]
        );
    }

    /**
     * @Route("/numletra", name="app_str_numletra")
     */
    public function numletraAction()
    {
        return $this->render('str/numletra.html.twig');
    }

    /**
     * @Route("/do-numletra", name="app_str_doNumletra")
     */
    public function doNumletraAction(request $request)
    {
        $str = $this->get('app.service.str');
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $str->setOp1($op1);
        $str->setOp2($op2);

        $str->numletraAction();
        $result = $str->getResult();




        return $this->render(
            ':str:do-numletra.html.twig',
            [
                'op1' => $op1,
                'op2' => $op2,
                'result'=> $result,

                'title' => 'numletra',
            ]
        );
    }


}