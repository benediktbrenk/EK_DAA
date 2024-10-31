<?php
require_once(".\app\ContactController.php");
$controller = new ContactController();
$result = $controller->sendMessage();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<?php require_once("./components/header.php") ?>

<div class="container my-4">
    <div class="text-center mb-4">
        <h1 class="display-4">About Me</h1>
        <p class="lead">Here are some of my learnings and improvements from the course.</p>
    </div>
    
    <div class="row" id="cards">
    </div>
    
    <div class="text-center mb-4">
        <h1 class="display-4">Questions? Contact me!</h1>
    </div>

    <form method="POST">
    <?= isset($result) ? $result : ''; ?> 
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="visitor_email" class="form-control" placeholder="Email optional" maxlength="120">
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="body" class="form-control" placeholder="Your message" required minlength="10" maxlength="900"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Contact Me</button>
</form>

</div>

<?php require_once("./components/footer.php") ?>