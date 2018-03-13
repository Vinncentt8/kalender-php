<?php
echo "Edit a Birthdate:"
?>

<fieldset>
<form action="<?=URL?>calendar/editSave" method="post">
	<label for="person">Name</label>
	<br>
    <input required type="text" name="person" placeholder="Name" value="<?= $birthday['person'] ?>">
    <br>
    <label for="date">Date(D-M-Y)</label>
    <br>
    <input required type="number" name="day" placeholder="Day" value="<?= $birthday['day'] ?>">
    <input required type="number" name="month" placeholder="Month" value="<?= $birthday['month'] ?>">
    <input required type="number" name="year" placeholder="Year" value="<?= $birthday['year'] ?>">
    <input type="hidden" name="id" value="<?= $birthday['id'] ?>">
    <br>
    <input type="submit" name="submit" value="update">
</form>
</fieldset>