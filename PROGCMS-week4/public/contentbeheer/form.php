<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Naam:</label><br>
    <input type="text" name="name"><br>
    <label>E-mail:</label><br>
    <input type="email" name="email"><br>
    <label>Commentaar:</label><br>
    <textarea name="comment"></textarea><br>

    <input type="submit" name="submit" value="Verstuur">
</form>

<?php
if (isset($_POST['submit'])) {

    $name = stripslashes(htmlspecialchars($_POST['name']));
    $email = stripslashes(htmlspecialchars($_POST['email']));
    $comment = stripslashes(htmlspecialchars($_POST['comment']));

    $data = array($name, $email, $comment);
    // $data = trim($data[0]);
    // $data = trim($data[1]);
    // $data = trim($data[2]);

    foreach ($data as $key => $value) {
        if (!isset($value) || empty($value)) {
            unset($data[$key]);
        }
    }

    echo "Naam: " . $data[0] . "<br>";
    echo "E-mail: " . $data[1] . "<br>";
    echo "Commentaar: " . $data[2] . "<br>";
}
?>