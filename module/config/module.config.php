<?php
return array(
    'controllers' => array(
        'factories' => array(
            'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\Controller' => 'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\SendControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'fayouz-laminas-mailer-api-tools.rpc.send' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/mail/send',
                    'defaults' => array(
                        'controller' => 'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\Controller',
                        'action' => 'send',
                    ),
                ),
            ),
        ),
    ),
    'api-tools-versioning' => array(
        'uri' => array(
            0 => 'fayouz-laminas-mailer-api-tools.rpc.send',
        ),
    ),
    'api-tools-rpc' => array(
        'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\Controller' => array(
            'service_name' => 'send',
            'http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'route_name' => 'fayouz-laminas-mailer-api-tools.rpc.send',
        ),
    ),
    'api-tools-content-negotiation' => array(
        'controllers' => array(
            'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\Controller' => array(
                0 => 'application/vnd.fayouz-laminas-mailer-api-tools.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'Fayouz\\Laminas\\Mailer\\ApiTools\\V1\\Rpc\\Send\\Controller' => array(
                0 => 'application/vnd.fayouz-laminas-mailer-api-tools.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
);
