<?php

namespace Fayouz\Laminas\Mailer\ApiTools;

use Laminas\ApiTools\Provider\ApiToolsProviderInterface;

/**
 * Class Module
 * @package Authenticatio   n
 */
class Module implements ApiToolsProviderInterface
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }
    
    public function getAutoloaderConfig()
    {
        return [
            'Laminas\ApiTools\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
    
}
