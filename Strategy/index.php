<?php

include("FlyInterface.php")
include("HighQuack.php")
include("LowQuack.php")
include("FlyWithoutWings.php")
include("FlyWithWings.php")
include("Duck.php")
include("RedHeadDuck.php")
include("QuackInterface.php")
 
$red_head_duck = new RedHeadDuck();
$red_head_duck->fly();
$red_head_duck->quack();