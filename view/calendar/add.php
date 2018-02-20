
<?php
echo "Add birthdate's here: ";
?>
<fieldset>
<form action="<?=URL?>calendar/save" method="post">
    <input required type="text" name="person" placeholder="Name">
    <br>
    <input required type="number" name="day" min="1" max="31" placeholder="day">
    <input required type="number" name="month" min="1" max="12" placeholder="month">
    <input required type="number" name="year" min="1900" max="2017" placeholder="year">
    <input type="submit" name="submit" value="Register Birthdate">
</form>

</fieldset>