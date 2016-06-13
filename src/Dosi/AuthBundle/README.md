Prérequis
==========================
# composer.json
"kriswallsmith/buzz": ">=0.7,<1.0-dev"

Configuration
==========================
# AppKernel.php
new Dosi\AuthBundle\DosiAuthBundle(),

# config.yml
dosi_auth:
    admin_sso:
        protocol:
            id: cas
            version: 2
        server:
            id: cas
            login_url: https://cas.univ-avignon.fr/login
            logout_url: https://cas.univ-avignon.fr/logout
            validation_url: https://cas.univ-avignon.fr/serviceValidate
    client:
        host: ldap.univ-avignon.fr
        port: 389
        version: 3
    user:
        base_dn: dc=univ-avignon,dc=fr
        name_attribute: uid
    role:
        base_dn: dc=univ-avignon,dc=fr
        filter: NULL        
            
# security.yml
    encoders:
        Dosi\AuthBundle\Security\Core\User\LdapUser: plaintext

    providers:
        ldap:
            id: dosi_ldap.security.user.provider

    firewalls:
        main:
            pattern: ^/
            provider: ldap
            sso:
                manager: admin_sso
                login_action: false
                logout_action: false
                create_users: false
                default_target_path: /
            logout: true
            anonymous: true
et sécuriser les parties sensibles avec
    access_control:
        xxx