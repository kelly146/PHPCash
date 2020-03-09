<?php
    include "../init/init.php";
    $m=new init();
    $cash=$m->filtermoney(100000,"₦");
    echo $cash[0].$cash[1]."<br>";

    
    $cash=$m->filtermoney(-3325400,"₦");
    echo $cash[0].$cash[1]."<br>";
    
    $cash=$m->filtermoney(-100000,"₦");
    echo $cash[0].$cash[1]."<br>";

    
    $cash=$m->filtermoney(100000000000,"₦");
    echo $cash[0].$cash[1]."<br>";

    
    $cash=$m->filtermoney(250000.4566,"₦");
    echo $cash[0].$cash[1]."<br>";
     
    
?>