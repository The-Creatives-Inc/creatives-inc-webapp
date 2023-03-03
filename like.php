<?php

    session_start();

    if (empty($_SESSION["userID"])) {
        header("Location: login.php");
    } else {

        require_once('configuration.php');

        $userID = $_SESSION["userID"];
        // $artworkid = $_GET["uid"];
        $artworkid = $_SESSION["artworkID"];

        $checkSql = "SELECT * FROM `like` WHERE artworkID = $artworkid AND userID = $userID";

        $result = $conn->query($checkSql);

            
        if($result->num_rows > 0){
            $sql = "UPDATE artworklikes SET numLikes = numLikes - 1 where artworkID = $artworkid;";
            $conn->query($sql);
            $sql_del = "DELETE FROM `like` WHERE artworkID = $artworkid AND userID = $userID;";
            $conn->query($sql_del);
            
        } else {
            $sql_ins = "INSERT INTO `like` values($artworkid,$userID)";
            echo($sql_ins);
            $conn->query($sql_ins);
            $sql_like = "UPDATE artworklikes SET numLikes = numLikes + 1 where artworkID = $artworkid";
            $conn->query($sql_like);

        }
        header("Location: individualartwork.php?uid=".$artworkid);



    }

?>