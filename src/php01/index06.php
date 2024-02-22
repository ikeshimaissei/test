<?php
function allscore($score1,$score2,$score3){
    $value=$score1+$score2+$score3;
    return $value;
}

$totalscore=allscore(100,10,10);
echo $totalscore;