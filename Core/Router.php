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
     * Parameters
     *
     * @var array
     */
    protected $params = [];
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
    /**
     * Undocumented function
     *
     * @param [type] $url
     * @return boolean
     */
    public function match($url)
    {
        // foreach ($this->routes as $route => $params) {
        //     if ($url == $route) {
        //         $this->params = $params;
        //         return true;
        //     }
        // }
        // return false;
          
        $regex = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
        if (preg_match($regex, $url, $matches)) {
          
          
          $params = [];
          foreach($matches as $key => $match) {
            if (is_string($match)){
              $params[$key] = $match;
            }
          }
          $this->params = $params;
          return true;
        }
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }
}
