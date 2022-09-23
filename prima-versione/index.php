<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>
        Php Dischi
    </title>
</head>

<body>
    <?php
    include __DIR__ . '/../db/dischi.php';
    ?>
    <header class="main_header">
        <div class="logo_wrapper">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpnggrid.com%2Fwp-content%2Fuploads%2F2021%2F05%2FSpotify-PNG-Logo-1536x1534.png&f=1&nofb=1" alt="logo_spotify">
        </div>
    </header>
    <main class="main_content">
        <div class="container">
            <ul class="cards_list">
                <?php
                foreach ($dischi as $disco) {
                ?>
                    <li class="list_item">
                        <div class="card_wrapper">
                            <div class="img_wrapper">
                                <img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>'s poster">
                            </div>
                            <h3>
                                <?= $disco['title'] ?>
                            </h3>
                            <p>
                                <?= $disco['author'] ?>
                            </p>
                            <p>
                                <?= $disco['year'] ?>
                            </p>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </main>
</body>

</html>