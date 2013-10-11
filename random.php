<?php

// Random Numbers Script
// by Alison Foxall, about 2004
// uploaded to github for entertainment purposes
// "i like money" -idiocracy

$output = array();
$range = 6;

for($i=1; $i<=$range; $i++)
{
   $gobbly_number = rand (1, 53);

   $output[] = "<li>$gobbly_number</li>";
}

$output = implode('',$output);

//print out the numbers
echo "
Your Lucky Lotto Numbers today are:
<br /><br />
<ul>$output</ul>";
?>