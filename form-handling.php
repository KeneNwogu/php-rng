<?php
if(isset($_POST['firstname']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['age'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    if($firstname != '' and $surname != '' and $email != '' and $age != ''){
        echo $firstname . "<br>" . $surname . "<br>" . $email . "<br>" . $age;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Form Handler</title>
    <style>
       body{
           font-family: Sans-serif;
       }
       input{
           display: block;
           margin-top: 30px;
           margin-bottom: 30px;
       }
       input[type="submit"]{
           background-color: blue;
           border-radius: 12px;
           color: white;
           font-size: 23px;
           border-bottom: none;
           cursor: pointer;
       }
       input[type="text"], input[type="number"], input[type="submit"]{
           width: 100%;
           padding: 12px 20px;
           outline: none;
           border: none;
           border-bottom: 1px solid blue;
           transition: .2s ease-in;
       }
       input[type="text"]:hover{
           border-bottom: 1px solid green;
       }
       .form{
           display: flex;
           justify-content: center;
           align-items: center;
           /* height: 200px; */
           margin-left: 20vw;
           margin-right: 20vw;
           border: 2px solid purple;
       }
    </style>
</head>
<body>
    <div class="form">
        <form action="form-handling.php" method="post">
            <h1 style="text-align: center;">Register - Form Handler</h1>
            <input type="text" name="firstname" placeholder="Enter your first name">
            <input type="text" name="surname" placeholder="Enter your last name">
            <input type="text" name="email" placeholder="Enter your email">
            <input type="number" name="age" placeholder="Enter your age">
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>