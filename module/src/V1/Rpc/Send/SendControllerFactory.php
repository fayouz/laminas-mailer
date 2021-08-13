<?php
namespace Fayouz\Laminas\Mailer\ApiTools\V1\Rpc\Send;

use Fayouz\Laminas\Mailer\Core\Service\MailerServiceInterface;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class SendControllerFactory implements FactoryInterface
{
   
   public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
   {
      return new SendController($container->get(MailerServiceInterface::class));
   }
}
