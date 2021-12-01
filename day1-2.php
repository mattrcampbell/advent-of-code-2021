<?php
$d = array();
$increase = 0;
$fp = fopen('day1.input','r');
while($line=fgets($fp)) $d[]=trim($line);
for($i=3; $i<count($d); $i++) if( ($d[$i-3]+$d[$i-2]+$d[$i-1]) < ($d[$i-2]+$d[$i-1]+$d[$i]) )$increase++;    
print"Part 2 $increase\n";
?>
