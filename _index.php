<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.10/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>
        Php Dischi
    </title>
</head>

<body>
    <?php
    include __DIR__ . '/db/dischi.php';
    ?>
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