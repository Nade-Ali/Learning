<?php
function Combine($array1,$array2) {
    return(array_combine($array1,$array2));
}
$array1 = array("ali, ahmed, hassan");
$array2 = array('5','55','555');
print_r(Combine($array1,$array2));
?>