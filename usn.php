<!DOCTYPE html>

<?php
	function test()
	{
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['usn']))
    {
			$usnresult = "";
			func();

		}
	}
    function func()
    {
				
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$usn = $_POST['usn'];

		
		$sql = "SELECT * FROM students where usn = '$usn' ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
						$res =  $row["result"];
				}

				if($res == 1)
				{
					$usnresult =  "Result: Congradulations you Pass";
				}
				else
				{
					$usnresult = "Result: Fail";
				}

				echo $usnresult;


		} 



		}

		

	
?>


<html>
<head>
<title>PRATIBHA MUSIC SCHOOL</title>
<style>
.menu{
width:100%;
background:#142b47;
overflow:auto;
}
.menu ul{
margin:0;
padding:0;
list-style:none;
line-height:50px;
}
.menu li{
float:left;
}
.menu li a{
display:block;
color:white;
font-size:16px;
letter-spacing:0.5px;
padding:12px 14px;
text-decoration:none;
background-color:#142b47;
width:130px;
text-align:center;
float:left;
line-width:200px;
}
.search-form{
margin-top:15px;
float:right;
margin-right:100px;
}
input[type=text]{
padding:7px;
border:none;
font-size:16px;
font-family:sans-serif;
}
button{
float:right;
background:orange;
color:white;
border-radius:0 5px 5px 0;
cursor:pointer;
position:relative;
padding:7px;
font-family:sans-serif;
border:none;
font-size:16px;
}

</style>
</head>
<body background="ak1.jpg"> 
<h1 align="center" style="color:black;" style="font-family:arial;">PRATIBHA SCHOOL OF ART AND MUSIC</h1>
<nav class="menu">
<ul style="list-style:none;">
<li><a href="index.html">HOME</a></li>
<li><a href="course.html">COURSES</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="contact.html">CONTACT US</a></li>
</ul>
<form class="search-form">
<input type="text" placeholder="Search">
<button>Search</button>
</form>
</nav>
<script type="text/javascript">

function validateUsn(elem)

{
		
var alphaExp = /^[1-4][a-z A-Z][a-z A-Z][0-9][0-9][a-z A-Z][a-z A-Z][0-9][0-9][0-9]$/;

var str = elem.value;
	
if(!elem.value.match(alphaExp))
	
{
			
alert("Invalid USN ");

return false;
		
}
	
	else if(str.length!=10)
		
{
		
	alert("Invalid USN");
			
        return false;
	
	}
		
else
		
{
			
alert("valid usn");
return true;		
}
	
}

</script>


<body>

	
<form method = "POST" action="">
	

<lable>Enter USN:</lable>

<input type = "text" id = "usn" name = "usn"/>
	
<input type = "submit" onClick="validateUsn(document.getElementById('usn'))" value="validate">		
	</form>

	<br>

	<h2><?php test(); ?></h2>
</body>
</html>


</body>
</html>
