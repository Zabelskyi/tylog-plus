<form action="buy.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="city" placeholder="Введіть назву міста" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="arr" placeholder="Дата заїзду: рррр-мм-дд" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="dep" placeholder="Дата виїзду: рррр-мм-дд" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="adult" placeholder="Кількість дорослих" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="child" placeholder="Кількість дітей" type="text"/>
        </div>
        <div>
            <input class="form-control" name="price" placeholder="Введіть бажану вартість" type="text"/>
        </div>
        <br/>
        <div class="form-group">
            <button type="submit" class="btn btn-success">ЗАМОВИТИ</button>
        </div>
    </fieldset>
</form>