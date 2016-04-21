<?php
// Konek ke Database lokal
    $con = mysqli_connect("localhost","root","","catfeeder"); //Change it if required

//Check Connection
        if(mysqli_connect_errno())
        {
            echo "Failed to connect to database" .     mysqli_connect_errno();
        }
		
		$username=$_POST["username"];
		$nama= $_POST["nama"];
		$email= $_POST["email_pengguna"];
		$password=$_POST["pass_pengguna"];
		

        $sql = "INSERT INTO pengguna (nama, username, email, password)
                    VALUES     ('$nama','$username','$email','$password') ";

        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error($con));
        }
        echo "1 record added successfully in the database";
        echo '<br />';
        mysqli_close($con);   
?>