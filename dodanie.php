<?php
    $con=mysqli_connect("localhost","root","","ee09");
    $karetka=$_POST['nrKaretki'];
    $ratownik1=$_POST['ratownik1'];
    $ratownik2=$_POST['ratownik2'];
    $ratownik3=$_POST['ratownik3'];
    $zap="INSERT INTO ratownicy(nrKaretki,ratownik1,ratownik2,ratownik3) VALUES ('$karetka','$ratownik1','$ratownik2','$ratownik3');";
    $query=mysqli_query($con,$zap);
    echo'Do bazy zostało wysłane zapytanie: INSERT INTO ratownicy (nrKaretki,ratownik1,ratownik2,ratownik3) VALUES ('.$karetka.','.$r1.','.$r2.','.$r3.');';
    mysqli_close($con);
?>