<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "restarent_table"; // Corrected spelling

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = isset($_POST['f_name']) ? $_POST['f_name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pass = isset($_POST['pws']) ? $_POST['pws'] : '';
    $confirm_p = isset($_POST['c_pws']) ? $_POST['c_pws'] : '';
    $html_page_url = "fd.html";
    $linked_word = "For Food";

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO table2 VALUES (?, ?, ?, ?,?)");
    $stmt->bind_param("sisss", $user,$phone,$email, $pass,$confirm_p);

    // Execute
    if ($stmt->execute()) {
        echo "<span class='success-message'>Booked successfully</span>";
        echo "<a href='$html_page_url'>$linked_word</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
