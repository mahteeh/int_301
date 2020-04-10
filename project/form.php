<?php
$nameError = $emailError = $passwordError = $cpasswordError ="";
$name = $email =$password = $cpassword ="";

$count = 0;

$con = mysqli_connect("localhost", "root", "", "int_301");
if(!$con){
    echo "anable to connect to database";}

  if($_SERVER["REQUEST_METHOD"]== "POST"){

    //name conditions
    if (empty($_POST["name"])){
        $nameError = "Name is required";
        
    }
    else{
        $name = test_input($_POST["name"]);
        }



    //email conditions
    if (empty($_POST["email"])){
        $emailError = "Email is required";

    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError="Invalid email format";

        }
    }

	//password conditions
	if(empty($_POST["password"])) {
		$passwordError = "password is required";

	}
	 else{
		 $password = test_input($_POST["password"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordError = "Your Password Must Contain At Least 8 Characters!";

        }

    }


	//confirm password conditions
	 if (empty($_POST["cpassword"]) || ($_POST["cpassword"] != $_POST["password"])) {
        $cpasswordError = "the passwords don't match";

    }
}


function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = stripcslashes($data);
		return $data;
		}
    if($_POST){
         if($count == 0)
       {
           $query = "insert into Users(Username, Email, Password) values ('$name', '$email', '$password')";
           if(!mysqli_query($con,$query))
           {
               echo "values not inserted";
           }
           else{
                header("location: success.php");
               exit();
           }

       }
       }


?>
