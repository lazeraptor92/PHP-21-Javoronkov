
<!DOCTYPE>
<html lang="ru">
<head>
    <title>Сергей – web-разработчик</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
        dl {
            display: table-row;
        }
        dt,
        dd {
            display: table-cell;
            padding: 10px 15px;
        }
    </style>
</head>
<body>
    <?php
        $userFirstname = 'Сергей';
        $userLasttname = 'Жаворонков';
        $userEmail = 'mattchuzi@yandex.ru';
        $userCity = 'Serpukhov';
        $userAbout = 'web-разработчик';
        $userFullname = $userFirstname . ' ' . $userLasttname;
        $userAge = '25';
       ?>
        <h1>Страница пользователя Сергей</h1>
        <dl>
            <dt>Имя</dt>
            <dd>
                <?= $userFullname ?>
            </dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd>
                <?= $userAge ?>
            </dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd>
                <a href="mailto:mattchuzi@yandex.ru">
                    <?= $userEmail ?>
                </a>
            </dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd>
                <?= $userCity ?>
            </dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd>
                <?= $userAbout ?>
            </dd>
        </dl>
</body>

</html>

