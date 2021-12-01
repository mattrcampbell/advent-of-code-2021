<?php

$fp = fopen('day1.input','r');
$last = trim(fgets($fp));
$increase = 0;
while($line=fgets($fp)){
    $line = trim($line);
    print "$last $line\n";
    if($line>$last)$increase++;
    $last=$line;
}
print"Part 1 $increase\n";


?>
