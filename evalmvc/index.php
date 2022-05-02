<?php
include './view/view_menu.php';
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
/*-------------------------------------------
                    ROUTER
-------------------------------------------*/
//test de la valeur $path dans l'URL et import de la ressource
switch($path){
//route /routing/test -> ./test.php
case $path === "/evalmvc/adding":
include "./controler/controler_article.php";
break;
//route /routing/addUser -> ./controler/controler_add_user.php
case $path === "/evalmvc/show":
include "./controler/controler_show_article.php";
break;
case $path == "/evalmvc/update":
include "./controler/controler_update_article.php";
break;
}

?>