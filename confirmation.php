<?php
if(isset($_POST['name'])){
$server ="localhost";
$username="root";
$password="";

$con=mysqli_connect($server, $username, $password);



if(!$con){
    die("connection to the database failed due to".mysqli_connect_error());
    
}


$name =$_POST['name'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];

$sql= "Insert Into `db_connect`.`multi contact`(`Fldname`,`Fldemail`,`Fldphone`) VALUES('$name','$email','$mobile');";
echo $sql;

if($con->query($sql)==true)
{
    echo "successfully inserted";
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

}

// $server ="localhost";
// $username="root";
// $password="";

// $con=mysqli_connect($server, $username, $password);


// foreach ($_POST['name'] as $key => $value) {
//     $sql= "Insert Into `db_connect`.`multi contact`(`Fldname`,`Fldemail`,`Fldphone`) VALUES(:name, :email, :mobile');";
//     $stmt=$con->prepare($sql);
//     $stmt->execute([
//         'name'=>$value,
//         'email'=>$_POST['email'][$key],
//         'mobile'=>$POST['mobile'][$key]

//     ]);
// }
// echo 'data inserted successfully'
?>
