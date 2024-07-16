<!DOCTYPE html>
<html>
<body>

    <h2>Kalkulator</h2>

    <form method="POST">
        <label for="add1">Zbrajanje</label><br>
        <input type="text" id="add1" name="add1">
        <input type="text" id="add2" name="add2"><br>
        <input type="submit" name="operation" value="Zbroji"><br><br>

        <label for="sub1">Oduzimanje</label><br>
        <input type="text" id="sub1" name="sub1">
        <input type="text" id="sub2" name="sub2"><br>
        <input type="submit" name="operation" value="Oduzmi"><br><br>

        <label for="mul1">Množenje</label><br>
        <input type="text" id="mul1" name="mul1">
        <input type="text" id="mul2" name="mul2"><br>
        <input type="submit" name="operation" value="Pomnoži"><br><br>

        <label for="div1">Dijeljenje</label><br>
        <input type="text" id="div1" name="div1">
        <input type="text" id="div2" name="div2"><br>
        <input type="submit" name="operation" value="Podijeli"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'Zbroji':
                $num1 = $_POST['add1'];
                $num2 = $_POST['add2'];
                $result = $num1 + $num2;
                echo "<p>Rješenje: $result</p>";
                break;
            case 'Oduzmi':
                $num1 = $_POST['sub1'];
                $num2 = $_POST['sub2'];
                $result = $num1 - $num2;
                echo "<p>Rješenje: $result</p>";
                break;
            case 'Pomnoži':
                $num1 = $_POST['mul1'];
                $num2 = $_POST['mul2'];
                $result = $num1 * $num2;
                echo "<p>Rješenje: $result</p>";
                break;
            case 'Podijeli':
                $num1 = $_POST['div1'];
                $num2 = $_POST['div2'];
                if ($num2 == 0) {
                    echo "<p>Greška: Dijeljenje s nulom nije dopušteno.</p>";
                } else {
                    $result = $num1 / $num2;
                    echo "<p>Rješenje: $result</p>";
                }
                break;
        }
    }
    ?>

</body>
</html>