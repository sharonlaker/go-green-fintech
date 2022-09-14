

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=gogreen", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Read from form
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $amount=$_POST['amount'];
    $number=$_POST['mobile']

    $sql = "INSERT INTO transact (mobile,amount,user) VALUES ($number, $amount, $name)"; 

// Attempt insert query execution
// try{
       
//     $pdo->exec($sql);
//     echo "Records inserted successfully.";
// // } catch(PDOException $e){
// //     die("ERROR: Could not able to execute $sql. " . $e->getMessage());
// // }
 
// // Close connection
// unset($pdo);
// ?>