<?php

$servername = "localhost";
$username = "collins1_instructor";
$password = "aceinthehole";
$database = "collins1_instruct_contactform";


// Create Connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());   
}

echo "Connected Successfully"; 

$sql = "INSERT INTO myUsers (firstname, lastname, email, comment) VALUES ('John', 'Doe', 'john@example.com', 'Comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully.";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*BELOW THIS LINE - DO I ALSO DO THIS STUFF?
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_comment = $_POST['comment'];


$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_comment = $_POST['comment'];
$email_from = 'Ace In The Hole';

$email_subject = "New Contact Submission";

$email_body = "User Name: $users_name.\n".
                "User Email: $users_email.\n".
                "User Message: $users_comment.\n";

$to = "carolyn.collins@pcc.edu"

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: newform.html");*/  
    
?>