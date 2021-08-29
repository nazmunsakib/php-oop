<?php
namespace Employers;
//include "employ.php";
include "ceo.php";
include "f1.php";
include "f2.php";

$emp = new \Employers\Employ();
$cmp = new \Employers\Ceo();
$emp->sayName();
$cmp->position();
$cmp->sayName();

//USE LES
use \Project\phone\Mobile as PH;
use \Project\Mobile as SM;
$ph = new PH();
$ph->sayName();

$ph1 = new SM();
$ph1->sayName();