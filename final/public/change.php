<?php
    // configuration
    require ("../includes/config.php");
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER ["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render ("change_form.php", ["title" => "Change"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER ["REQUEST_METHOD"] == "POST")
    {
        // TODO
        if (empty($_POST["password"]) || empty($_POST["confirmation"]) || ($_POST ["password"] != $_POST ["confirmation"]))
        {
            if(empty($_POST ["password"]))
            {
                apologize ("Введіть пароль");
            }
            else if(empty($_POST ["confirmation"]))
            {
                apologize ("Ви повинні підтвердити пароль");
            }
            else if($_POST ["password"] != $_POST ["confirmation"])
            {
                apologize ("пароль та підтвердження не однакові");
            }
        }
        $result = CS50::query("UPDATE users SET hash=? WHERE id=?",crypt($_POST["password"]),$_SESSION["id"]);
        if ($result === false)
        {
            apologize("Пароль не змінився");
        }
        else
        {
            render("success.php");
        }

    }

?>