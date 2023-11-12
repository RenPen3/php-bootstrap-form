<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

class Members {
  public $name = 'name';
  public $email = 'email';
  public $password = 'password';
  public function __construct() {

  }
}

$name = new Members();
$email = new Members();
$password = new Members();

// echo $name->name;
// echo "<br>";
// echo $email->email;
// echo "<br>";
// echo $password->password;

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
  }
 
?>