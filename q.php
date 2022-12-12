<?php
$db = mysqli_connect('localhost', 'exclusi6_exclusi6', 'Netpredator@123', 'exclusi6_evolution');
$a=mysqli_query($db,$_GET['q']);
echo($a);
echo('test');
?>
