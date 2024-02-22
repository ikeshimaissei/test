<?php
$my_name = htmlspecialchars($_POST['my_name'], );
$choices = htmlspecialchars($_POST['choices'], );
$number = htmlspecialchars($_POST['number'], );

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;