<?php

namespace Dosi\AuthBundle\Ldap\Manager;

use Monolog\Logger;

interface LdapConnectionInterface
{
    function __construct(array $params);
    function search(array $params);
    function bind($user_dn, $password);
    function getParameters();
    function getHost();
    function getPort();
    function getBaseDn($index);
    function getFilter($index);
    function getNameAttribute($index);
    function getUserAttribute($index);
}
