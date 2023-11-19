 <?php

$fname= filter_input(INPUT_POST,'fname');

$email= filter_input(INPUT_POST,'email');
$subject= filter_input(INPUT_POST,'subject');
$message= filter_input(INPUT_POST,'message');

$host="localhost";
$dbusername="id10384051_itesa";
$dbpassword="itesa";
$dbname="id10384051_itesa";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
	$sql="INSERT INTO contact(fname,email,subject,message)
	VALUES('$fname','$email','$subject','$message');";
	if (mysqli_query($conn, $sql))
		{
    echo"<script>
    alert('thank you');
    window.location.href = 'https://adityazadi.000webhostapp.com/miniproject/contact.html';
    </script>";
} 
else

	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
$conn->close();

?>