<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o kierowcy</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Informacje o Kierowcy</h1>
    </header>

    <main>
        <section class="driver-info">
            <?php
            include 'kierowcy.php';

            // Sprawdzanie, czy jest podany klucz kierowcy w URL
            $key = $_GET['name'] ?? null;
            if ($key && isset($drivers[$key])) {
                $driver = $drivers[$key];
                echo "<h2>{$driver['name']}</h2>";
                echo "<p><strong>Kraj:</strong> {$driver['country']}</p>";
                echo "<p><strong>Zespół:</strong> <a href='zespol.php?team={$driver['team']}'>{$driver['team']}</a> </p>";
                echo "<p><strong>Mistrzostwa Świata:</strong> {$driver['championships']}</p>";
                echo "<p><strong>Sezony aktywności:</strong> {$driver['seasons']}</p>";
                echo "<p><strong>Najlepsze osiągnięcie:</strong> {$driver['best_achievement']}</p>";
                echo "<img src='{$driver['image']}' alt='Zdjęcie {$driver['name']}'>";
            } else {
                echo "<p>Nie znaleziono informacji o kierowcy.</p>";
            }
            ?>
            <nav><a href="mojastrona.php">Powrót do listy kierowców</a></nav>
        </section>
    </main>

   
</body>
</html>
