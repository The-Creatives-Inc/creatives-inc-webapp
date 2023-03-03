<?php

    session_start();



    require_once('configuration.php');

    $artworkid = $_SESSION["artworkID"];

    if(empty($_SESSION['userID'])){
        $_SESSION['no-session'] = "Login first";
        header("Location: individualartwork.php?uid=".$artworkID);
        exit();
      }

    $userID = $_SESSION["userID"];
    $checkSql = "SELECT * FROM `like` WHERE artworkID = $artworkid AND userID = $userID";

    $result = $conn->query($checkSql);

        
    if($result->num_rows > 0){
        $sql = "UPDATE artworklikes SET numLikes = numLikes - 1 where artworkID = $artworkid;";
        $conn->query($sql);
        $sql_del = "DELETE FROM `like` WHERE artworkID = $artworkid AND userID = $userID;";
        $conn->query($sql_del);
        
    } else {
        $sql_ins = "INSERT INTO `like` values($artworkid,$userID)";
        
        $conn->query($sql_ins);
        $sql_like = "UPDATE artworklikes SET numLikes = numLikes + 1 where artworkID = $artworkid";
        $conn->query($sql_like);

    }
    header("Location: individualartwork.php?uid=".$artworkid);




?>