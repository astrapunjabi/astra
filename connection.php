<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = trim($_POST['username']);
    $Email = trim($_POST['email']);
    $Password = trim($_POST['password']);
    $ConfirmPassword = trim($_POST['confirm_password']);

    if (!empty($Username) && !empty($Email) && !empty($Password) && !empty($ConfirmPassword)) {
        if ($Password === $ConfirmPassword) {
            $HashedPassword = password_hash($Password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO datainfo (Username, Email, Password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("sss", $Username, $Email, $HashedPassword);

                if ($stmt->execute()) {
                    header("Location: index.php?showModal=login&success=1");
                    exit();
                } else {
                    echo "❌ Error inserting data: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "❌ Failed to prepare statement: " . $conn->error;
            }
        } else {
            header("Location: index.php?showModal=signup&error=PasswordsDoNotMatch");
            exit();
        }
    } else {
        echo "⚠️ Please fill in all fields.";
    }
}
?>
