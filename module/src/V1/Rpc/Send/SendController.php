<?php
namespace Fayouz\Laminas\Mailer\ApiTools\V1\Rpc\Send;

use Fayouz\Laminas\Mailer\Core\Service\MailerService;
use Fayouz\Laminas\Mailer\Core\Service\MailerServiceInterface;
use Laminas\ApiTools\Hal\View\HalJsonModel;
use Laminas\Mvc\Controller\AbstractActionController;
use PHPMailer\PHPMailer\Exception;

/**
 *
 */
class SendController extends AbstractActionController
{
    /**
     * @var MailerServiceInterface|MailerService
     */
    private $mailerService;
    
    /**
     * @param MailerServiceInterface $mailerService
     */
    public function __construct(MailerServiceInterface $mailerService){
        $this->mailerService = $mailerService;
    }
    
    /**
     * @return HalJsonModel
     * @throws Exception
     */
    public function sendAction(): HalJsonModel
    {
        return new HalJsonModel([$this->mailerService->send()]);
    }
}
