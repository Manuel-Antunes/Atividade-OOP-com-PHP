<?php
session_start();

if (isset($_GET["view"])) {
    require_once "app/views/" . $_GET["view"] . "/index.php";
} else if (isset($_GET["action"]) && isset($_GET["class"])) {
    $resolver = $_GET["class"] . "Resolver";
    $action = $_GET["action"];
    require_once "app/resolvers/" . $resolver . ".php";
    $resolver = new $resolver();
    $resolver->$action();
} else if (isset($_SESSION["loggedUser"])) {
    require_once "app/views/home/index.php";
} else {
    require_once "app/views/login/index.php";
}
