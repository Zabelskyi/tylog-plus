<div>
    <h5>Історія замовлень <?php print($username[0]["username"]); ?>:</h5>
</div>
<br>
<div>
    <table class="table table-striped">
        <tr>
            <th class="text-center">Місто</th>
            <th class="text-center">Дата <br/>заїзду</th>
            <th class="text-center">Дата <br/>виїзду</th>
            <th class="text-center">Кількість <br/>дорослих</th>
            <th class="text-center">Кількість <br/>дітей</th>
            <th class="text-center">Дата <br/>замовлення</th>
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
            print("<td>" . $position["date"] . "</td>");
            print("</tr>");
        }

    ?>
    </table>
</div>