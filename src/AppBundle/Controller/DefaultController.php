<?php

namespace AppBundle\Controller;

use Application\Sonata\UserBundle\Document\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction()
    {
        $url = $this->container->get('router')->generate('sonata_admin_dashboard');
        return new RedirectResponse($url);
    }
}