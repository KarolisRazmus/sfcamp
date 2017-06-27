<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 6/27/2017
 * Time: 10:27 AM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class CampController extends Controller
{
    /**
     * Matches /hello exactly
     *
     * @Route("/hello", name="hello")
     * @Method({"GET"})
     */
    public function hello()
    {
        $greeting = 'hello, World!';

        return $this->render('hello.html.twig', array(
            'greeting' => $greeting,
        ));
    }

    /**
     * Matches /redir exactly
     *
     * @Route("/redir", name="redir")
     * @Method({"GET"})
     */
    public function redirectShow()
    {
        return $this->redirectToRoute('hello');
    }
}