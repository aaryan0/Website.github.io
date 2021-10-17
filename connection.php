<?php
// include 'index.php';
$username = "root";
$password = "";
$server = 'localhost:3307';
$db = 'student'; 

$con = mysqli_connect($server,$username,$password,$db);
if($con ){
?>
    <script>
        alert('connection successful');
        </script> 
        
<?php
    // echo "connection successful";
}

else{
    // echo "No connection";
    die("no connection" .mysqli_connect_error());
    }






?>