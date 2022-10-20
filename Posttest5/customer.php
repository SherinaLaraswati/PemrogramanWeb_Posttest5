<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Admin</title>
        <link rel ="stylesheet"  href = "Pendataan.css">
    </head>
    <b>Login Customer Wear Time</b>
    <form method="POST" action="index.php">
   
        <div>
            <label>Masukkan email anda: </label><br>
            <input name = "email" type = "email" >
        </div>
        <div><br>
            <label>Masukkan password: </label><br>
            <input name ="password" type = "password" >
        </div>

        <div><br>
            <button>Submit</button>
        </div>
    </form>
    <footer>
        <div class = "outer-footer">
        Copyright &copy; 2022 Desgin by SherinaLaraswati
    </footer>

</html>

<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];
if ($email){
    echo "<strong>Email: </strong> {$email} <br>"; 
}
if ($password){
    echo "<strong>Password: </strong> {$password} <br>"; 
}