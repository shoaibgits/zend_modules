<?php

/**
 * @author gencyolcu
 * @copyright 2017
 */

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Album\Controller\AlbumController;

class AlbumControllerFactory implements FactoryInterface
{
    /**
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return AlbumController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $class = $requestedName ? $requestedName : AlbumController::class;
        $albumTable = $container->get('Album\Model\AlbumTable'); // get service from service manager
        $controller = new $class($albumTable);

        return $controller;

    }
    /**
     * Provided for backwards compatibility; proxies to __invoke().
     *
     * @param ContainerInterface|ServiceLocatorInterface $container
     * @return AlbumController
     */
    public function createService(ServiceLocatorInterface $container)
    {
        return $this($container, AlbumController::class);
    }
}

?>