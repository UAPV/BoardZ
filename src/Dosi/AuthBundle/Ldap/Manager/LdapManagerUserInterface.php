<?php

namespace Dosi\AuthBundle\Ldap\Manager;

interface LdapManagerUserInterface
{
  function __construct(LdapConnectionInterface $conn);
  function exists($username);
  function auth();
  function doPass();
  function getDn();
  function getEmail();
  function getUsername();
  function getRoles();
  function setUsername($username);
  function setPassword($password);
  function search($query);
}
