<?php
echo "Edit your Birthdate:"
?>

<fieldset>
<form action="<?=URL?>calendar/editSave" method="post">
    <input required type="text" name="person" placeholder="name" value="<?= $birthday['person'] ?>">
    <br>
    <input required type="number" name="day" placeholder="day" value="<?= $birthday['day'] ?>">
    <input required type="number" name="month" placeholder="month" value="<?= $birthday['month'] ?>">
    <input required type="number" name="year" placeholder="year" value="<?= $birthday['year'] ?>">
    <input type="hidden" name="id" value="<?= $birthday['id'] ?>">
    <input type="submit" name="submit" value="update">
</form>
</fieldset>