<?php

    //configuration
    require ("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("sell_form.php", ["title" => "Sell"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $rows=CS50::query("SELECT * FROM Securities WHERE user_id=? AND id=?",$_SESSION["id"],$_POST["id"]);

        $positions = [];
        foreach ($rows as $row)
        {
            $positions[] = [
            "id" => $row["id"]
            ];
        }
        if ($row["id"] == $_POST["id"])
        {
           CS50::query("DELETE FROM Securities WHERE user_id=? AND id=?",$_SESSION["id"],$_POST["id"]);
        }

        redirect("/");


    }

?>