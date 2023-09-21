<?php
require_once __DIR__ . '/classes/Foods.php';
require_once __DIR__ . '/classes/Dogs.php';
require_once __DIR__ . '/classes/Cats.php';
require_once __DIR__ . '/classes/Foods.php';
require_once __DIR__ . '/classes/Toys.php';
require_once __DIR__ . '/products.php';

try {
} catch (AnimalShopException $e) {
    echo "Errore nell'AnimalShop: " . $e->getMessage();
} catch (Exception $e) {
    echo "Errore generico: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalShop</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="display-1 text-center p-3">AnimalShop</h1>
            <?php

            foreach ($prodotti as $prodotto) { ?>
                <div class="col-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo ($prodotto->getImg()) ?>" class="card-img-top img-fixed" alt="img">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($prodotto->getNome()) ?></h5>
                            <p class="card-text"><?php echo ($prodotto->getDescrizione()) ?></p>
                            <?php
                            if ($prodotto->getCategoria() === "cane") {
                                $animale = new Dogs("piccola", 7, true); ?>
                                <div><?php echo $animale->getIcon() ?></div>
                            <?php
                            } elseif ($prodotto->getCategoria() === "gatto") {
                                $animale = new Cats("piccola", 7, true); ?>
                                <div><?php echo $animale->getIcon() ?></div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>


        </div>
    </div>

    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>

<style>
    .img-fixed {
        width: 100%;
        height: auto;
        object-fit: cover;
        max-height: 200px;
    }
</style>