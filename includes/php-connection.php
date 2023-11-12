<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}



$formError = false;
// Connect to Database
try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=my_library2', 'root', '');
 
  // dd("connected to datebase");
} catch (PDOException $e) {
  dd($e->getMessage());
}
// Select all in database table
$statement = $pdo->prepare('select * from member');
$statement->execute();
$allEmails = $statement->fetchALL(PDO::FETCH_OBJ);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['email'] != "") {
      $data = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
      ];
      $statement = $pdo->prepare("INSERT INTO member (name, email, password) 
      VALUES (:name, :email, :password)");

      $newEmail = $statement->execute($data);

      if($newEmail) {
        header('Location: '. 'http://localhost/thankyou.php');
      }
      dd($newEmail);
      echo "Entry Recorded";
    } else {
      $formError = true;
      // dd('Error Empty Field');
    }

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);    
  
  }

  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $password = $_POST['password'];

  //   if (empty($name) || empty($email) || empty($password)) {
  //     // Handle empty fields
  //     echo "Please fill in all required fields.";
  // } else {
  //     // Validate email
  //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //         echo "Invalid email format.";
  //     } else {
  //         // Sanitize data
  //         $name = htmlspecialchars($name);
  //         $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  //         // Hash the password
  //         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  //         // Database interaction - Example using PDO
  //         $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
  //         $stmt = $pdo->prepare('INSERT INTO member (name, email, password) VALUES (:name, :email, :password)');
  //         $stmt->execute([$name, $email, $hashedPassword]);

  //         echo "Registration successful!";
  //     }
  // }


?>