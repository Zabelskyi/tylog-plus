<?php

    //configuration
    require ("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("buy_form.php", ["title" => "Buy"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["city"]) || empty($_POST["arr"]) || empty($_POST["dep"]) || empty($_POST["adult"]) || empty($_POST["child"]) || empty($_POST["price"]))
        {
            apologize ("Заповніть, будь ласка, усі дані");
        }
    }

        print (number_format($cash[0]["cash"] + $price,2));
        
        CS50::query("INSERT INTO Securities(user_id,city,arr,dep,adult,child,price) VALUES(?,?,?,?,?,?,?)",$_SESSION["id"],strtoupper($_POST["city"]),$_POST["arr"],$_POST["dep"],$_POST["adult"],$_POST["child"],$_POST["price"]);

        // send the information into the history table
        CS50::query("INSERT INTO history(user_id,city,arr,dep,adult,child,price,date) VALUES(?,?,?,?,?,?,?,CURRENT_TIMESTAMP)",$_SESSION["id"],strtoupper($_POST["city"]),$_POST["arr"],$_POST["dep"],$_POST["adult"],$_POST["child"],$_POST["price"]);


        redirect("/");



?>
