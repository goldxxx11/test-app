<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 14.09.2016
 * Time: 22:04
 */

namespace App\Weather\Controller;


use Interop\TemplateRenderer\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Weather\Weather;

class Index
{
    public static function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        // создаём новый объект класса werther
        $object = new Weather();
        $data = $object->getDailyWeather();

        $response->getBody()->write(self::getTemplateRenderer()->render('weather/index/index', [
            'data' => $data,
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