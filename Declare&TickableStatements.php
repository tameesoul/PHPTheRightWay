<?php
//declare - ticks(event)

declare(strict_types=1);
function ontick()
{
    echo 'Tick<br>';
}

//register_tick_function(ontick());
declare(ticks=1);




function sum(int $x , int $y)
{
    echo $x + $y;
}

sum(4,4);








