<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <form name="sentMessage" id="contactForm" method="post" action="connection.php" novalidate>
        <div>
            <label>Full Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Phone Number:</label>
            <input type="tel" name="phone" required>
        </div>
        <div>
            <label>Email Address:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Message:</label>
            <textarea name="message" required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>
