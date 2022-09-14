<?php
    $SERVERNAME="localhost";
    $USERNAME="root";
    $PASSWORD="";
    $DBNAME="green";
    $conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME);

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $amount=$_POST['amount'];
        $number=$_POST['mobile']

        $pay = "INSERT INTO transact ( `mobile`, `amount`, `user`) VALUES ( '$mobile', '$amount', '$name')";
        
        if($patients = mysqli_query($conn,$pay) ){
            header("location:pages/index.html");
        }
         }
?>