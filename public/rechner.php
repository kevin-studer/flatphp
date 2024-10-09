<?php
use App\Service\Rechner;
use App\Service\RechnerException;
include_once('../vendor/autoload.php');
?>
<html>
    <head>
        <title>Website - Rechner</title>
    </head>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/rechner.php">Rechner</a></li>
            <li><a href="/stern.php">Stern</a></li>
        </ul>
        <form method="post">
            Number 1: <input type="text" name="number1" value="<?= $_POST['number1'] ?? '' ?>" />
            Number 2: <input type="text" name="number2" value="<?= $_POST['number2'] ?? '' ?>"  />

            <button type="submit" name="operation" value="add">+</button>
            <button type="submit" name="operation" value="sub">-</button>
            <button type="submit" name="operation" value="mul">*</button>
            <button type="submit" name="operation" value="div">/</button>
        </form>

        <div style="border: 1px solid black">
            <?php
            if (isset($_POST['number1'])) {
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                switch($_POST['operation']) {
                    case 'add':
                        $result = Rechner::add($number1, $number2);
                        echo "Resultat: " . $result;
                        break;
                    case 'sub':
                        $result = Rechner::subtract($number1, $number2);
                        echo "Resultat: " . $result;
                        break;
                    case 'mul':
                        $result = Rechner::multiply($number1, $number2);
                        echo "Resultat: " . $result;
                        break;
                    case 'div':
                        try {
                            $result = Rechner::divide($number1, $number2);
                            echo "Resultat: " . $result;
                        } catch (RechnerException $e) {
                            echo "Fehler bei der Berechnung: " . $e->getMessage();
                        }

                        break;
                }
            }
            ?>
        </div>
    </body>
</html>

