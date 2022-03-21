<?php
    session_start();
    include 'config.php';
    $exist = false;
    foreach ($_SESSION["cart"] as $key => $value) {
        if($_SESSION["cart"][$key]->idProduit == $_GET["id"]){
            $_SESSION["cart"][$key]->quantite += $_POST["quantite"];
            $exist = true;
        }
    }
    if(!isset($_SESSION["cart"] )){
        $_SESSION["cart"] = [];
    }
    if($exist == false){
        $object = (object) ["idProduit"=>$_GET["id"], "quantite"=>$_POST["quantite"]];
        array_push($_SESSION["cart"], $object);
    }
    header("location: cart.php");
?>
