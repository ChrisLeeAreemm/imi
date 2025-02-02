<?php

declare(strict_types=1);

namespace Imi\Server\WebSocket\Route;

class RouteResult
{
    /**
     * 路由配置项.
     */
    public ?RouteItem $routeItem = null;

    /**
     * 参数.
     */
    public array $params = [];

    /**
     * 回调.
     *
     * @var callable
     */
    public $callable;

    public function __construct(RouteItem $routeItem, array $params = [])
    {
        $this->routeItem = $routeItem;
        $this->params = $params;
        $this->callable = $routeItem->callable;
    }
}
