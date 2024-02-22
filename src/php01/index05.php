<?php
for($i=0; $i<4; $i++){
echo $i;
}

echo "<br />";

$count=0;
while($count<100){
    if($count/3==0){
        $count++;
        continue;
    }
    if($count==20){
        break;

    }
    echo $count++ ."<br />";
}
$num=0;
do{
    echo 'num ='.$num.'<br/>';
    $num++;
}while($num<3);
$Fizz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";

for($f=1; $f<=50; $f++){
    if($f%15==0){
        echo $FizzBuzz;
    }elseif($f%3==0){
        echo $Fizz;
    }elseif($f%5==0){
        echo $Buzz;
    }else{
        echo $f;
    }
}
