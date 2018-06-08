<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Default:indexx.html.twig');
    }

    public function indexxAction()
    {
        return $this->render('ShopBundle:templete:indexx.html.twig');
    }
    public function productsAction()
    {
        return $this->render('ShopBundle:templete:products.html.twig');
    }
    public function products1Action()
    {
        return $this->render('ShopBundle:templete:products1.html.twig');
    }
    public function registeredAction()
    {
        return $this->render('ShopBundle:templete:registered.html.twig');
    }
    public function singleAction()
    {
        return $this->render('ShopBundle:templete:single.html.twig');
    }
    public function codesAction()
    {
        return $this->render('ShopBundle:templete:codes.html.twig');
    }
    public function checkoutAction()
    {
        return $this->render('ShopBundle:templete:checkout.html.twig');
    }

}
