<?php
    if(isset($_GET['id_rest'])) {
        $id_restaurant = $_GET['id_rest'];
    } else {
        $id_restaurant = "sin Restaurante";
    }

    if(isset($_GET['id_mesa'])) {
        $id_mesa = $_GET['id_mesa'];
    } else {
        $id_mesa = "sin Mesa";
    }
?>