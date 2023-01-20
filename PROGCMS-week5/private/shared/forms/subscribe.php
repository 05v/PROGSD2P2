<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PORTAL</title>
    <script src="../public/media/javascript/dd3de96bc3.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/media/style/style.css">
</head>

<body>
    <header>
        CMS Contentbeheer - ADMIN PORTAL
        <ul>
            <li><a href=".. /../../public/index.php">HOME</a></li>
        </ul>
    </header>

    <main class="cmsAdmin">
        <div class="subscribe">
            <h1>Voeg een post toe</h1>
            <form method="post" action="../private/shared/forms/submit.php">

                <input type="text" name="post" placeholder="Post" id="post" required>

                <input class="submit" type="submit" value="Upload Post">
            </form>
        </div>

        <h2>All posts</h2>
        <p><b>IF YOU DELETE A POST YOU CAN'T UNDO IT <br> RELOAD THE WEBSITE AFTER EDITING OR UPLOADING A POST</b></p>

        <div class="deleteCMS">

            <?php
            $SQLitePDO = new PDO('sqlite:../private/db/forms.db');

            $result = $SQLitePDO->query("SELECT post,id FROM post ORDER BY id DESC");
            foreach ($result as $row) {
                print('<form method="post" action="" class="deleteForm">
              <input type="hidden" name="id" value="' . $row['id'] . '">
              <input type="submit" name="delete" value="Delete">'
                    . '<input type="submit" name="edit" value="Edit">'
                    . '<p class="postTextCMS">' . $row['post'] . '</p>');
                if (isset($_POST['edit']) && $_POST['id'] == $row['id']) {
                    print('<form method="post" action="">
                        <textarea name="post" rows="5" cols="30">' . $row['post'] . '</textarea>
                        <input type="hidden" name="id" value="' . $row['id'] . '">
                        <input type="submit" name="update" value="Update"></form>');
                }
                print('</form>');
            };

            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                $stmt = $SQLitePDO->prepare("DELETE FROM post WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }

            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $post = $_POST['post'];
                $stmt = $SQLitePDO->prepare("UPDATE post SET post = :post WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':post', $post);
                $stmt->execute();
            }
            ?>

        </div>

    </main>

</body>

</html>