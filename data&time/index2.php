<?php 
date_default_timezone_set("Asia/Dhaka");
// echo date('d/m/y'); //28/03/21

// echo date('d/M/Y'); //18/Mar/2021

// echo date('dS F, Y'); //28 March, 2021 

// echo date('dS F, Y H:i:s A'); //28 March, 2021  08:27:28
// echo "\n";
// echo date('z');

echo date('dS F, Y H:i:s A', time()+24*60*60);
echo "\n";
echo date('t');