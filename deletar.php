<?php

    if(!empty($_GET['id']))
    {
        include_once 'xx.php';
        include 'sa.php';

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM registros WHERE id=$id";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM registros WHERE id=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: sa.php');
   