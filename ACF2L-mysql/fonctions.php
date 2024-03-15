<?php
    require_once("connection.php");
    function getNbSalaries(){
        global $conn ;
        $req = "SELECT count(*) as nb FROM salaries ;"; 
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        $ligne=mysqli_fetch_assoc($result);
        return $ligne['nb'];
    }
    function getAllSalaries(){
        global $conn;
        $listeSalaries = array(); 
        $req = 'SELECT * FROM salaries';
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        while($ligne = mysqli_fetch_assoc($result)) { 
            $listeSalaries[]=$ligne; 
        }
        return $listeSalaries;
    }

SS
?>