<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // File name for Excel (CSV format)
    $file = fopen("responses.csv", "a");

    // Save data as a new row
    fputcsv($file, [$name, $email, $feedback]);

    fclose($file);

    echo "Thank you! Your response has been saved.";
}
?>
