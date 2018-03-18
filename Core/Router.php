<?php

/**
 * Router
 *
 * PHP 7.1
 */

class Router
{
    /**
     * Associative array of routes
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Undocumented function
     *
     * @param [string] $route
     * @param [array] $params
     * @return void
     */
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }
    /**
     * Undocumented function
     *
     * @return $routes
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}
