<?php
    // configuration
    require ("../includes/config.php");
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER ["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render ("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER ["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["confirmation"]) || ($_POST ["password"] != $_POST ["confirmation"]))
        {
            if (empty($_POST ["username"]))
            {
                apologize ("Enter a username");
            }
            else if(empty($_POST ["password"]))
            {
                apologize ("Enter a password");
            }
            else if(empty($_POST ["confirmation"]))
            {
                apologize ("You must confirm a password");
            }
            else if($_POST ["password"] != $_POST ["confirmation"])
            {
                apologize ("password and confirmation are different");
            }
        }
    $result = CS50::query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
    if ($result === false)
    {
        apologize("Account creation failed");
    }
    else
    {
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];

        //remember new user id
        $_SESSION ["id"] = $id;

        //redirect to portfolio
        redirect("/");
    }

    }
?>