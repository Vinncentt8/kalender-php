
<?php
echo "Add birthdate's here: ";
?>
<fieldset>
<form action="<?=URL?>calendar/save" method="post">
	<label for="person">Name</label>
	<br>
    <input required type="text" name="person" placeholder="Name">
    <br>
    <label for="date">Date</label>
    <br>
    <input required type="number" name="day" min="1" max="31" placeholder="Day">
    <input required type="number" name="month" min="1" max="12" placeholder="Month">
    <input required type="number" name="year" min="1900" max="2017" placeholder="Year">
    <br>
    <input type="submit" name="submit" value="Register Birthdate">
</form>

</fieldset>