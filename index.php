<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <?php  require_once("./components/navbar.php") ?>
    <div class="container">
        <h1>Willkommen auf meiner persönlichen Website!</h1>
        <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
        <p>Informatiker Winter 2024</p>
        <p>Name: [Ihr Vorname] [Ihr Nachname]</p>
        <p>Standort: [Ihr Standort]</p>
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="message">Nachricht:</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kontaktiere mich</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./components/navbar.js"></script>
</body>

</html>