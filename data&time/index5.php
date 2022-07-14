<?php
$d1 = new DateTime('20 May 2010');
$d2 = new DateTime('27 August 2011');
$difference = date_diff($d1, $d2);
echo $difference->format('%y Year %m Month %d Days');