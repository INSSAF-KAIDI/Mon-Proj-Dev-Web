<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styls.css">
    <title>Nous Contacter</title>
</head>


<body>
    <header>
        <h1>Nous Contacter</h1>
    </header>

    <section class="contact-form">
        <form action="process.php" method="post">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section>

    <footer>
        <p>© 2023 INSSAF RENTAL CAR</p>
    </footer>
</body>
</html>
