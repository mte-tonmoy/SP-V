 <?php
database connection code
if(isset($_POST['Name']))
{



// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','course'); -->

get the post records

$name = $_POST['Name'];
$department = $_POST['Department'];
$sid = $_POST['Student Id'];
$email = $_POST['Email'];
$batch = $_POST['Batch No'];
$choose = $_POST['Password Id'];
$choose = $_POST['Choose your course'];

// database insert SQL code
$sql = "INSERT INTO `students` (`Name`, `Department`, `Student Id`, `Email`, `Batch No`,`Password`,`Choosen Course`) VALUES ('0', '$Name', '$Department', '$Student Id', '$Email', '$Batch No', '$Password Id', '$Choose your course')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>