<?php
$corte1=new DateTime('2020-07-06 13:30');
$corte2=new DateTime('2020-07-06 23:00');
$now=new DateTime();
//print_r($now->format('Y-m-d H:i:s'));exit();
if($now->getTimestamp()<$corte1->getTimestamp()){
    $url='https://unlpeduar.webex.com/unlpeduar-es/onstage/g.php?MTID=e2c848bbfd603b6bf2e6da97c6dafe595';
}elseif($now->getTimestamp()<$corte2->getTimestamp()){
    $url='https://unlpeduar.webex.com/unlpeduar-es/onstage/g.php?MTID=ed39d69688d4b396bad717a04b87015a0';
}else{
    $url='https://unlpeduar.webex.com/unlpeduar-es/onstage/g.php?MTID=e289aece959b0aca4b0338453741b68a3';
}

header('Location: '.$url);
