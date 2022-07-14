<?php
echo time()."\n";
echo mktime(0,0,0,28,3,2021)."\n";
date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,12,1,2019)."\n";
echo gmmktime(0,0,0,12,1,2019)."\n";
echo (22400-800)/(60*60);
echo "\n";

echo (mktime(0,0,0, 12, 12, 2010) - mktime(0,0,0,3,30,2020))/(24*60*60);