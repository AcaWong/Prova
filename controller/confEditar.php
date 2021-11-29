<?php
session_start();
$_SESSION["id"] = $_POST["vlrID"];

        header("Location:../view/editar.php");








