<?php

    // configuration
    require("../includes/config.php");

    // return securities data in $rows with query:
    $user_id=$_SESSION["id"];
    $rows=CS50::query("SELECT city,arr,dep,adult,child,price,id FROM Securities WHERE user_id=$user_id");


    $positions = [];
    $sum=0.0;
    foreach ($rows as $row)
    {
        
            $positions[] = [
            "city" => $row["city"],
            "arr" => $row["arr"],
            "dep" => $row["dep"],
            "adult" => $row["adult"],
            "child" => $row["child"],
            "price" => $row["price"],
            "id" => $row["id"]
            ];
            $sum=$sum+$row["price"];
        
    }

    // return user cash
    $id=$_SESSION["id"];
    $cash=CS50::query("SELECT username, cash FROM users WHERE id=$id");

    // render portfolio
    render("portfolio.php",["positions" => $positions, "cash" => $cash, "sum" => $sum, "title" => "FINAL PROJECT"]);
    render("mashup.php", ["positions" => $positions, "cash" => $cash, "sum" => $sum, "title" => "buy"]);


?>
