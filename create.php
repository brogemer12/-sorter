<?php require('header.php');?>
<form action="query.php" method="post">
    <input type="hidden" name="create">

    <label for="addres">Введите аддрес</label>
    <textarea class="textarea" name="addres" id="addres" cols="70" rows="5"></textarea><br>

    <button class="my-button dancing-script-uniquifier" type="submit">Submit</button>

</form>
<?php require('footer.html');?>