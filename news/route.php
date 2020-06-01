<?php
    require_once "Controller/Route.php";
    $route = new Route("ViewController@getIndex");
    $route->get("link", "register", "ViewController@getRegister");
    $route->post("action", "register", "ActionController@registerAction");
    //*****
    $route->post("action", "loginact", "ActionController@login");
    $route->get("action", "logoutact", "ActionController@logout");

    $route->post("action", "load_status", "ActionController@loadStatus");
    $route->post("action", "load_history", "ActionController@loadInOutHistory");
    //*****
    $route->process();
?>