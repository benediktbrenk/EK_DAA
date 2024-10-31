<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Über mich</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

    <?php  require_once("./components/header.php") ?>
    <div class="container">
        <h1>Über mich</h1>
        <p>My learnings</p>
        <ol>
            <li>PHP require_once</li>
            <li>Bootstrap Arbeit mit Templates</li>
        </ol>
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
    <?php  require_once("./components/footer.php") ?>