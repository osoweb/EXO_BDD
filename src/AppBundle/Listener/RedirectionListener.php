<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 19/08/2018
 * Time: 19:27
 */
namespace AppBundle\Listener;

use AppBundle\Entity\user;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Csrf\TokenStorage;
use Symfony\Component\Asset\Context;

class RedirectionListener
{
    private $securityContext;

    public function __construct (ContainerInterface $container, Session $session)
    {
        $this->session = $session;
        $this->router = $container->get('router');
        $this->securityContext = $session->get('security.context');
    }


    public function onKernelRequest(GetResponseEvent $event)
    {
        $route = $event->getRequest()->attributes->get('_route');
        $session = $this->session->get('session');

        if ($route == 'livraison' || $route == 'validation') {
            if ($this->session->has('panier')) {
                if (count($this->session->get('panier')) == 0)
                    $event->setResponse(new RedirectResponse($this->router->generate('panier')));
            }

            /*(!isset($this->$session)) (is_object($this->session->get('user')))|| (!is_object($this->securityContext->getToken()->getUser()))  */
           if($this->session->get('_security_main')== NULL) {
               //var_dump($this->session->all());die();//$this->session->get('_csrf/form')
                $this->session->getFlashBag()->add('notification','Vous devez vous identifier');
                $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
            }
        }
    }

}