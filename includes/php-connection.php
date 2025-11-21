<?php

// function dd($data) {
//   echo '<pre>';
//   die(var_dump($data));
//   echo '</pre>';
// }



// $formError = false;

// try {
//   $pdo = new PDO('mysql:host=localhost;dbname=my_library2', 'root', 'root');
 
//   dd("connected to datebase");
// } catch (PDOException $e) {
//   dd($e->getMessage());
// }

// $statement = $pdo->prepare('select * from member');
// $statement->execute();
// $allEmails = $statement->fetchALL(PDO::FETCH_OBJ);

//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if ($_POST['email'] != "") {
//       $data = [
//         "name" => $_POST["name"],
//         "email" => $_POST["email"],
//         "password" => $_POST["password"],
//       ];
//       $statement = $pdo->prepare("INSERT INTO member (name, email, password) 
//       VALUES (:name, :email, :password)");

//       $newEmail = $statement->execute($data);

//       if($newEmail) {
//         header('Location: '. 'http://localhost:8888/thankyou.php');
//       }
//       dd($newEmail);
//       echo "Entry Recorded";
//     } else {
//       $formError = true;
//       dd('Error Empty Field');
//     }
//   }

// -----------------------------------------------
// Debugging Helper (like Laravel's dd())
// -----------------------------------------------
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit; // always stop the script
}

// -----------------------------------------------
// Connect to the Database
// -----------------------------------------------
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=my_library2;charset=utf8',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );

} catch (PDOException $e) {
    dd($e->getMessage());
}

// -----------------------------------------------
// Fetch All Members (optional, not required for insert)
// -----------------------------------------------
$statement = $pdo->prepare("SELECT * FROM member");
$statement->execute();
$allMembers = $statement->fetchAll(PDO::FETCH_OBJ);

// -----------------------------------------------
// Form Handling
// -----------------------------------------------
$formError = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Trim all input values
    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // -----------------------------------------------
    // Validate Inputs
    // -----------------------------------------------
    
    if ($name === "" || $email === "" || $password === "") {
        $formError = "All fields are required.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = "Please enter a valid email.";
    }
    else {
        // -----------------------------------------------
        // Check if email already exists
        // -----------------------------------------------
        $check = $pdo->prepare("SELECT id FROM member WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            $formError = "This email is already registered.";
        } else {

            // -----------------------------------------------
            // Insert into database
            // -----------------------------------------------
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $statement = $pdo->prepare("
                INSERT INTO member (name, email, password) 
                VALUES (:name, :email, :password)
            ");

            $success = $statement->execute([
                ":name"     => $name,
                ":email"    => $email,
                ":password" => $hashedPassword,
            ]);

            // -----------------------------------------------
            // Redirect after success
            // -----------------------------------------------
            if ($success) {
                header("Location: http://localhost:8888/thankyou.php");
                exit;
            } else {
                $formError = "Something went wrong saving your data.";
            }
        }
    }
}
?>