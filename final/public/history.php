<?php

    // configuration
    require("../includes/config.php");

    // return history data in $rows with query:
    $positions=CS50::query("SELECT * FROM history WHERE user_id=?",$_SESSION["id"]);



     // return username
    $id=$_SESSION["id"];
    $username=CS50::query("SELECT username FROM users WHERE id=$id");

    // render history
    render("history_form.php",["positions"=>$positions,"username"=>$username,"title"=>"History"]);

?>