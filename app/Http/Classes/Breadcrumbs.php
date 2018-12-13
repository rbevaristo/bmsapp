<?php

class BreadCrumbs {
    protected static $routes = array('dashboard');
    protected static $breadcrumbs = array();

    public static function push($route)
    {
        if($route != 'dashboard')
            array_push(self::$routes, $route);

        self::$breadcrumbs = self::$routes;
    }

    public static function breadcrumb()
    {
        return self::$breadcrumbs;
    }
}