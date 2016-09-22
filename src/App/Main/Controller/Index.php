<?php

namespace App\Main\Controller;


use Interop\TemplateRenderer\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Index
{
    public static function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $response->getBody()->write(self::getTemplateRenderer()->render('main/index/index', [
            'dir' => __DIR__,
        ]));
    }

    /**
     * @return TemplateRendererInterface
     */
    public static function getTemplateRenderer()
    {
        return \Eva::$container->get(TemplateRendererInterface::class);
    }
}