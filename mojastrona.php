<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kierowcy Formuły 1 od 2020 roku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Kierowcy Formuły 1 od 2020 roku</h1>
    </header>

    <main>
        <section class="drivers-list">
            <h2>Lista Kierowców</h2>
            <ul>
                <?php
                include 'kierowcy.php'; // Plik z danymi kierowców
                foreach ($drivers as $key => $driver) {
                    echo "<li><a href='podstrona.php?name=$key'>{$driver['name']}</a></li>";
                }
                ?>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Formuła 1 - Kierowcy od 2020 roku</p>
    </footer>
</body>
</html>
