<?php
// array assosiatif
$buah = ["p"=>'pepaya',"d"=>'duku',"k"=>'kelapa'];
// cara manggil array assosiatif
echo "<ol>";
foreach ($buah as $fruit => $k){
    echo "<li> $fruit -$k </li>";
}
echo "</ol>";
?>