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
    $data = $_POST;
    $data = array_map('trim', $data);
    $data = array_map('htmlspecialchars', $data);
    $data = array_map('stripslashes', $data);

    foreach ($data as $key => $value) {
        if (!isset($value) || empty($value)) {
            unset($data[$key]);
        }
    }

    echo "Naam: " . $data['name'] . "<br>";
    echo "E-mail: " . $data['email'] . "<br>";
    echo "Commentaar: " . $data['comment'] . "<br>";
}
?>