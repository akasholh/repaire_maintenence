<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $maintenance_type = htmlspecialchars($_POST['maintenance_type']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $zip = htmlspecialchars($_POST['zip']);
    $date = htmlspecialchars($_POST['date']);

    // Basic email content
    $to =  $email; // Replace with your email address
    $from="youremail@gmail.com";
    $subject = "Service Form Submission:";
    $message = "Name: $name\nEmail: $email\n\n$message";
     // Prepare SQL statement with placeholders
     $sql = "INSERT INTO services (`name`, `email`, `phone`, `address`, `maintenance_type`, `city`, `state`, `zip`, `date`) VALUES (?, ?, ?, ?,?, ?, ?, ?,?)";

     // Prepare the statement
     $stmt = $conn->prepare($sql);
 
     // Bind parameters to the placeholders
     $stmt->bind_param("sssssssss", $name, $email, $phone, $address,$maintenance_type, $city, $state, $zip,$date);
 
     // Execute the statement
     if ($stmt->execute()) {
        
        // if (mail($to, $subject, $message)) {
        //     echo "Thank you for your message. We will get back to you soon!";
        // } else {
        //     echo "Oops! Something went wrong and we couldn't send your message.";
        // }
         echo "Message submitted successfully.";
         header("location:service.html?msg=success");
     } else {
         echo "Error: " . $conn->error;
     }
 
     // Close statement
     $stmt->close();
    // Send email
  
}
?>
