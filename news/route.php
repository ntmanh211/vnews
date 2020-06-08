<?php
    require_once "Controller/Route.php";
    $route = new Route("ViewController@getIndex");
    $route->get("link", "register", "ViewController@getRegister");
    $route->post("action", "register", "ActionController@registerAction");
    //*****
    $route->get("link", "login", "ViewController@getLogin");
    // $route->post("action", "loginact", "ActionController@login");
    $route->get("action", "logoutact", "ActionController@logout");

    $route->post("action", "load_status", "ActionController@loadStatus");
    $route->post("action", "load_history", "ActionController@loadInOutHistory");
    //*****

    $route->get("link", "posts", "ViewController@getPosts");

    $route->get("link", "forgot_pass", "ViewController@forgot_pass");

    $route->get("link", "browse", "ViewController@getSearch");

    $route->process();
?>