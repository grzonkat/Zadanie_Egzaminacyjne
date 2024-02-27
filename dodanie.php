<?php
    @$nrKaretki=$_POST['nrKaretki'];
    @$ratownik1=$_POST['ratownik1'];
    @$ratownik2=$_POST['ratownik2'];
    @$ratownik3=$_POST['ratownik3'];
    $con = mysqli_connect('localhost','root','ee09');
    $zap = mysqli_query("INSERT INTO `ratownicy` ( `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('$nrKaretki','$ratownik1','$ratownik2','$ratownik3');");
    echo "Do bazy zostało wysłane zapytanie: ".$zap;
    mysqli_close($con);
?>