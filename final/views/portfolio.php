<div>
    <h1>Вiтаємо, <?php print($cash[0]["username"]); ?>!</h1>
    <h5 style="color: red;">На Вашому рахунку: $<?php print (number_format($cash[0]["cash"],2)); ?></h5>
</div>
<div>
    <h3>Ваше замовлення:</h3>
</div>
<br>
<div>
    <table class="table table-striped">
        <tr>
            <th class="text-center">Мiсто</th>
            <th class="text-center">Дата <br/>заїзду</th>
            <th class="text-center">Дата <br/>виїзду</th>
            <th class="text-center">Кiлькiсть <br/>дорослих</th>
            <th class="text-center">Кiлькiсть <br/>дiтей</th>
            <th class="text-center">Вартість <br/>замовлення</th>
            <th class="text-center">Номер ID</th>
        </tr>
    <?php

        foreach ($positions as $position)
        {
            print("<tr>");
            print("<td>" . $position["city"] . "</td>");
            print("<td>" . $position["arr"] . "</td>");
            print("<td>" . $position["dep"] . "</td>");
            print("<td>" . $position["adult"] . "</td>");
            print("<td>" . $position["child"] . "</td>");
            //print("<td>" . $position["price"] . "</td>");
            print("<td>" . sprintf("%.2f",$position["price"]) . "</td>");
            print("<td>" . $position["id"] . "</td>");
            print("</tr>");
        }

    ?>
    </table>
</div>
<div>
    <h3>Залишок на рахунку: $<?php print (number_format($cash[0]["cash"] - $sum,2)); ?></h3>
    <br/>
    <a href="sell.php">Скасувати замовлення</a>
</div>
