<?php
$username='root';
$servername='localhost';
$databasename='guvi';
$password='';
try{
	$con=new mysqli($servername,$username,$password,$databasename);
}catch(Exection $e){
	echo $e->getMessage();
}
echo "<h1><center> coonected successfl</center><h1>";
$Email=$_POST['email'];
$password=$_POST['password'];

$sql = "select * from data where Email = '$Email'";  
        //$result = mysqli_query($con, $sql);  
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        //$count = mysqli_num_rows($result);  
        $stmt=$con->prepare($sql);
        $stmt->execute();

        $result =$stmt->get_result();
        while($data = $result->fetch_assoc()){
            if($data['email'==$Email] && $data['password'==$password]){
                echo "<h1><center> Login successful </center></h1>"; 
            }
        }
        

?>