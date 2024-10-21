<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Basic email content
    $to = "shabnam.thinknext@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission:";
    $message = "Name: $name\nEmail: $email\n\n$message";
     // Prepare SQL statement with placeholders
     $sql = "INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)";

     // Prepare the statement
     $stmt = $conn->prepare($sql);
 
     // Bind parameters to the placeholders
     $stmt->bind_param("ssss", $name, $email, $phone, $message);
 
     // Execute the statement
     if ($stmt->execute()) {
        
        // if (mail($to, $subject, $message)) {
        //     echo "Thank you for your message. We will get back to you soon!";
        // } else {
        //     echo "Oops! Something went wrong and we couldn't send your message.";
        // }
         echo "Message submitted successfully.";
         header("location:contact.html?msg=success");
     } else {
         echo "Error: " . $conn->error;
     }
 
     // Close statement
     $stmt->close();
    // Send email
  
}
?>
