
<?php 
	echo "received in view:<br>";
	print_r($birthday);
?>

<form action="<?=URL?>calendar/editSave" method="post">
    <input type="text" name="person" placeholder="name" value="<?= $birthday['person'] ?>">
    <input type="text" name="day" placeholder="day" value="<?= $birthday['day'] ?>">
    <input type="text" name="month" placeholder="month" value="<?= $birthday['month'] ?>">
    <input type="text" name="year" placeholder="year" value="<?= $birthday['year'] ?>">
    <input type="hidden" name="id" value="<?= $birthday['id'] ?>">
    <input type="submit" name="submit" value="update">
</form>