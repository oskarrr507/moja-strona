<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kierowcy zespołu</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
    
    </header>

    <main>
        <section class="team-drivers">
            <?php
            include 'kierowcy.php';

            // Sprawdzanie, czy jest przekazany parametr 'team' w URL
            $team = $_GET['team'] ?? null;
            if ($team) {
                // Filtrujemy kierowców po zespole
                $team_drivers = array_filter($drivers, function($driver) use ($team) {
                    return $driver['team'] === $team;
                });

                // Wyświetlanie kierowców z wybranego zespołu
                echo "<h2>Kierowcy zespołu: $team</h2>";
                echo "<ul>";
                foreach ($team_drivers as $driver) {
                    echo "<li><a href='podstrona.php?name=" . array_search($driver, $drivers) . "'>{$driver['name']}</a></li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nie znaleziono zespołu.</p>";
            }
            ?>
            <nav><a href="mojastrona.php">Powrót do listy kierowców</a></nav>
        </section>
    </main>
</body>
</html>
