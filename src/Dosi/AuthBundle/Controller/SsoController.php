<?php

namespace Dosi\AuthBundle\Controller;

use Dosi\AuthBundle\Sso\Manager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class SsoController extends Controller
{
    public function loginAction(Manager $manager, Request $request, AuthenticationException $exception = null)
    {
        return $this->render(
            'DosiAuthBundle:Sso:login.html.twig',
            array(
                'manager'   => $manager,
                'request'   => $request,
                'exception' => $exception
            )
        );
    }

    public function logoutAction(Manager $manager, Request $request)
    {
        return $this->render(
            'DosiAuthBundle:Sso:logout.html.twig',
            array(
                'manager' => $manager,
                'request' => $request
            )
        );
    }  
}
