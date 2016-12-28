<?php

namespace LayoutChange\Listener;

use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\MvcEvent;

class LayoutListener extends AbstractListenerAggregate
{
    public function attach(EventManagerInterface $events, $priority = 1)
    {
        $events->getSharedManager()->attach('Zend\Mvc\Controller\AbstractController', MvcEvent::EVENT_DISPATCH, [$this, 'changeLayout'], 100);
    }

    public function changeLayout(MvcEvent $e)
    {
        $controller = get_class($e->getTarget());
        $moduleName = substr($controller, 0, strpos($controller, '\\'));
        $config     = $e->getApplication()->getServiceManager()->get('config');

        if(isset($config['module_layouts'][$moduleName])){
            $e->getTarget()->layout($config['module_layouts'][$moduleName]);
        }
    }
}
