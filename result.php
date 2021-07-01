<?php
$my_name = htmlspecialchars($_POST['my_name'], );
$choices = htmlspecialchars($_POST['choices'], );
$number = htmlspecialchars($_POST['number'], );
?>

<p>私の名前は、<?php echo $my_name; ?></p>
<p>ご希望商品は、<?php echo $choices; ?></p>
<p>注文数は、<?php echo $number; ?></p> 