<?php
/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Dosi\AuthBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\JsonResponse;
use Monolog\Logger;

use Dosi\AuthBundle\Ldap\Manager\LdapManagerUser;
use Dosi\AuthBundle\Ldap\Manager\LdapConnection;

class LdapController extends Controller
{    
    public function searchAjaxAction($query)
    {
        $response = new JsonResponse();
        $manager = new LdapManagerUser(new LdapConnection($this->container->getParameter('dosi_ldap.ldap_connection.params')));
        $response->setData($manager->search($query));
        
        return $response;
    }

    private function getAuthenticationError()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            return $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
    }

    private function generateToken()
    {
        $token = $this->get('form.csrf_provider')
                      ->generateCsrfToken('authenticate');
                      
        return $token;
    }
}
