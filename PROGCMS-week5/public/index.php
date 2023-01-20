<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTENT BLOG</title>
    <link rel="stylesheet" type="text/css" href="../public/media/style/style.css">
</head>

<body>

    <header>
        CMS Contentbeheer
        <ul>
            <li><a href="cms.php">ADMIN</a></li>
        </ul>
    </header>

    <main>
        <div class="intro">
            <h2>Welkom op mijn website</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni inventore vel et ducimus tenetur
                repudiandae
                asperiores eaque consectetur? Maxime consequatur soluta pariatur modi. A quia sed cum quasi, impedit
                est.
            </p>
        </div>

        <hr>

        <div class="posts">
            <h2>De 6 meest recente posts</h2>
            <p>
                <?php
                $SQLitePDO = new PDO('sqlite:../private/db/forms.db');


                $result = $SQLitePDO->query(
                    "SELECT post FROM post ORDER BY id DESC LIMIT 6"
                );

                foreach ($result as $row) {
                    print('<p class="postText mainText">' . $row['post'] . '</p>');
                };

                ?></p>
        </div>
    </main>

    <hr>

    <footer>Vlad Verheij Copyright 2023</footer>
</body>

</html>