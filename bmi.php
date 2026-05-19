<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
        <section id="logo">
        <img src="wzor.jpg" alt="wzór BMI">
    </section>
    <heaer>
        <h1>Oblicz swoje BMI</h1>
    </heaer>
        <main>
            <section class="glowny">
        <table>
        <tr>
            <th>Interpretacja BMI</th>
            <th>Wartość minimalna</th>
            <th>Wartość maksymalna</th>
        </tr>
        <tr>
            <td>niedowaga</td>
            <td>0</td>
            <td>18</td>
        </tr>
        <tr>
            <td>waga prawidłowa</td>
            <td>19</td>
            <td>25</td>
        </tr>
        <tr>
            <td>nadwaga</td>
            <td>26</td>
            <td>30</td>
        </tr>
        <tr>
            <td>otyłość</td>
            <td>31</td>
            <td>100</td>
        </tr>
    </table>
</main>
    </section>
            <section class="lewy">
                <h2>POdaj wagę i wzrost</h2>
                <form action="bmi.php" method="post">
                    <label for="waga">Waga (kg):</label>
                    <input type="number" id="waga" name="waga" required><br><br>
                    <label for="wzrost">Wzrost (cm):</label>
                    <input type="number" id="wzrost" name="wzrost" required><br><br>
                    <input type="submit" value="Oblicz BMI">
                </form>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $waga = $_POST["waga"];
                        $wzrost = $_POST["wzrost"] / 100; // konwersja cm na metry
                        $bmi = $waga / ($wzrost * $wzrost);
                        echo "<p>Twoje BMI wynosi: " . round($bmi, 2) . "</p>";
                        
                        // Określenie kategorii BMI
                        if ($bmi < 18) {
                            $kategoria = "niedowaga";
                        } elseif ($bmi >= 19 && $bmi <= 25) {
                            $kategoria = "waga prawidłowa";
                        } elseif ($bmi >= 26 && $bmi <= 30) {
                            $kategoria = "nadwaga";
                        } else {
                            $kategoria = "otyłość";
                        }
                        
                        echo "<p>Interpretacja: <strong>" . $kategoria . "</strong></p>";
                    }
                ?>
            </section>
            <section class="prawy">

            </section>
        <footer>
            <p>Autor: 00000000000</p> <a href="#">Zobacz kwerendy</a>
        </footer>
    
</body>
</html>