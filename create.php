<?php require('header.php');?>
<form action="query.php" method="post">
    <input type="hidden" name="createHash">

    <label for="text">Введите текст</label>
    <textarea class="textarea" name="text" id="text" cols="70" rows="5"></textarea><br>

    <select name="select" class="my-button dancing-script-uniquifier" id="select    " class="cd-select">
        <option value="">-- Выберите область знаний --</option>
        <option name="Kitchen" >Кулинария</option>
        <option name="life_hacks" >Лайвхаки для хозяйства</option>
        <option name="Flowers" >Растения</option>
        <option name="Animals" >Животные</option>
        <option name="Techics" >Техника</option>
    </select>

    <button class="my-button dancing-script-uniquifier" type="submit">Submit</button>

</form>
<?php require('footer.html');?>