<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Światowe rozgrzywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </header>
    <section id="blok">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "egzamin2");

        $zap1 = "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'";
        $result1 = mysqli_query($conn, $zap1);

        while ($row = mysqli_fetch_assoc($result1)) {
            $zepol1 = $row['zespol1'];
            $zepsol2 = $row['zespol2'];
            $wynik = $row['wynik'];
            $data = $row['data_rozgrywki'];
            echo"<section id='mecz'>";
            echo"<h3>$zepol1 - $zepsol2</h3>";
            echo"<h4>$wynik</h4>";
            echo"<p>w dniu: $data</p>";
            echo"</section>";
        }
        ?>
    </section>
    <main>
        <h2>Reprezentacja Polski</h2>
    </main>
    
    <section id="left">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="post">
            <input type="number" name="pozycja" min="1" max="4">
            <input type="submit" value="Sprawdź">
        </form>
        <ul>
            <?php
            mysqli_close($conn);
            ?>
        </ul>
    </section>
    <section id="right">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 00000000000</p>

    </section>
    <script>

        </script>
</body>
</html>