<?php  
require_once("./app/User.php");

$result = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["user_name"]) && isset($_POST["password"])) {
    $exampleName = "benedikt";
    $examplePassword = "passwort";
    $firstName = "Benedikt";
    $lastName = "Brenk";

    $User = new User($exampleName, $examplePassword, $firstName, $lastName);
    $User->senderName = $exampleName;
    $User->senderPassword = $examplePassword;
    $User->firstName = $firstName;
    $User->lastName = $lastName;

    $send_result = $User->login($_POST["user_name"], $_POST["password"]);
    
    if ($send_result) {
        $result = "Successfully logged in";
    } else {
        $result = "Wrong user name or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <?php require_once("./components/header.php"); ?>
    <div class="container my-4">
        <div class="text-center mb-4">
            <h1 class="display-4">Login</h1>
        </div>
        <?php if (!empty($result)): ?>
            <div class="alert alert-info text-center">
                <?= htmlspecialchars($result) ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="username">User name:</label>
                    <input type="text" name="user_name" class="form-control" id="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div> 
    <?php require_once("./components/footer.php"); ?>
</body>
</html>
