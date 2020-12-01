<?php


$page = $_GET['page'];

if(!$page){
    $page = 'home';
}

require ('includes/header.php');

require (sprintf('pages/%s.php', $page));


require ('includes/footer.php');
?>