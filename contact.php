<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
        $email = $_POST['email'];
            $message = $_POST['message'];

                // Send email (Optional)
                    $to = "your-email@example.com"; // Replace with your email
                        $subject = "New Contact Form Submission";
                            $body = "Name: $name\nEmail: $email\nMessage: $message";
                                $headers = "From: $email";

                                    if (mail($to, $subject, $body, $headers)) {
                                            echo "Your message has been sent!";
                                                } else {
                                                        echo "Failed to send message. Please try again.";
                                                            }
                                                            }
                                                            ?>