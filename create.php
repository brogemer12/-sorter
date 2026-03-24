<?php require('header.php');?>
<form action="query.php" method="post">
    <input type="hidden" name="createHash">

    <label for="text">Введите текст</label>
    <textarea class="textarea" name="text" id="text" cols="70" rows="5"></textarea><br>

    <select name="select" class="my-button dancing-script-uniquifier" id="select" class="cd-select">
        <option name="Vibor">-- Выберите канал знаний --</option>
    </select>
    <label for="ChanelName">Введите канал</label>
    <input type="text" name="ChanelName" id="ChanelName">

    <label for="CheckBox">Отметить доверенный канал</label>
    <input type="checkbox" name="CheckBox" id="CheckBox">

    <select name="select2" class="my-button dancing-script-uniquifier" id="select2" class="cd-select">
        <option name="Vibor2">-- Выберите область знаний --</option>
        <option name="Kitchen" >Кулинария</option>
        <option name="life_hacks" >Лайвхаки для хозяйства</option>
        <option name="Flowers" >Растения</option>
        <option name="Animals" >Животные</option>
        <option name="Techics" >Техника</option>
    </select>

    <label for="CheckBox2">Сделать приватным?</label>
    <input type="checkbox" name="CheckBox2" id="CheckBox2">

    <button class="my-button dancing-script-uniquifier" type="submit">Submit</button>

</form>
<?php require('footer.html');?>