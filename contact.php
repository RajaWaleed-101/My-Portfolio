<?php
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=portfolio_db;charset=utf8mb4',
        'root',           // default XAMPP username
        '',               // default XAMPP has no password
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $stmt = $db->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $subject, $message]);

    $response['success'] = true;
    $response['message'] = 'Your message has been saved successfully!';
} catch (PDOException $e) {
    $response['error'] = 'Database error: ' . $e->getMessage();
}


?>
