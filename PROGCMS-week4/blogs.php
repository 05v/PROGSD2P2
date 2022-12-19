<?php include 'private/init.php'; ?>
<?php include SHARED_DIRECTORY . '/header.php'; ?>
<h1>
    Blogs
</h1>
<?php
lees_bestand('blogs.txt');
bestands_check('blogs.txt');
// als je ze omdraait doet hij het nog steeds.
?>
<?php include SHARED_DIRECTORY . '/footer.php'; ?>