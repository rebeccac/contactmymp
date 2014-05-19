<?php
$message = Input::get ('message');
$name = Input::get('name');
?>

<p>
<?php echo ($message);?><br>
<br>
<br>
<?php echo ($name); ?>
</p>
