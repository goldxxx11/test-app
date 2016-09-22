<?php
use Interop\Container\ContainerInterface;
use Interop\Emitter\EmitterInterface;
use Interop\Router\RouterInterface;
use Interop\TemplateRenderer\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\ServerRequestFactory;

return [
    RouterInterface::class => function(ContainerInterface $container) {
        $router = new \Interop\AuraRouter\Router();
        $map = $router->getMap();
        $map->get('main', '/', 'App\Main\Controller\Index::index');
        $map->get('weather-index', '/weather', 'App\Weather\Controller\Index::index');
        return $router;
    },
    EmitterInterface::class => SapiEmitter::class,
    ServerRequestInterface::class => function(ContainerInterface $container) {
        return ServerRequestFactory::fromGlobals();
    },
    ResponseInterface::class => Response::class,
    TemplateRendererInterface::class => function(ContainerInterface $container) {
        return new League\Plates\Engine(__DIR__ . './../templates');
    }
];