<html>
    <head>
        <title>Website - Stern</title>
    </head>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/rechner.php">Rechner</a></li>
            <li><a href="/stern.php">Stern</a></li>
        </ul>

        <form method="post">
            Grösse: <input type="text" name="size" value="<?= $_POST['size'] ?? '2' ?>" />
            Stern: <input type="text" name="star" value="<?= $_POST['star'] ?? '*' ?>" />

            <button type="submit">Senden</button>
        </form>
        <div style="border: 1px solid black;">
            <pre>
<?php
$size = $_POST['size'] ?? 2;
$star = mb_substr($_POST['star'] ?? '*', 0, 1);
$calcSize = $size * 2 - 1;
for ($line = 1; $line <= $calcSize; $line++) {
    if ($line < $size) {
        $whitespace = $size - $line;
    } else {
        $whitespace = $line - $size;
    }
    $stars = $calcSize - $whitespace * 2;
    echo str_repeat(' ', $whitespace);
    echo str_repeat($star, $stars);
    echo PHP_EOL;
}
?>
            </pre>

        </div>
    </body>
</html>

