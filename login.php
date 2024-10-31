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
    <?php  require_once("./components/navbar.php") ?>
    <div class="container">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <label for="username">Benutzername:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Passwort:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Einloggen</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./components/navbar.js"></script>
</body>

</html>