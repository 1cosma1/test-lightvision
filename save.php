<?php
    $nume = $_POST["Nume"];
    $email = $_POST["Email"];
    $telefon = $_POST["Telefon"];
    $mesaj = $_POST["Mesaj"];
    $conn=mysqli_connect("localhost", "12c2023_acosma", "wsx37uHk", "12c2023_acosma", "3306") or die("Connection failed");
    $sql = "INSERT INTO contact_form(Nume, Email, Telefon, Mesaj) VALUES ('{$nume}', '{$email}', '{$telefon}', '{$mesaj}' )";
    //$result = mysqli_query($conn, $sql) or die("Query failed");

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    mysqli_close($conn);
?>
