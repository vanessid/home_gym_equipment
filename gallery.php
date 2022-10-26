<?php
$feed_url = "http://localhost/hgm/rss.php";

$object = new DOMDocument();

$object->load($feed_url);

$content = $object->getElementsByTagName("item");
?>
<?php include_once("includes/header.php") ?>

<section class="facilities">
    <h1> Our Gallery</h1>
    <div class="row">
        <?php foreach ($content as $row) : ?>
            <div class="facilities-col">
                <img src="<?= $row->getElementsByTagName("enclosure")->item(0)->attributes["url"]->nodeValue ?>" alt="" />
                <h3><?= $row->getElementsByTagName("title")->item(0)->nodeValue ?></h3>
                <p><?= $row->getElementsByTagName("description")->item(0)->nodeValue ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>