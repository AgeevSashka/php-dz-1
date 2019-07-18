<?php
    // Задание 1

        /*$name = 'Александр';
        $age = 25;
        echo "Меня зовут:  $name\n";
        echo " Мне $age лет\n";
        echo '“!|/’”\ ';
        echo "\n";*/

    // Задание 2

        /*const picture = 80; // Общее кол-во рисунков
        const markers = 23; // Нарисованно маркерами
        const pencils = 40; // Нарисованно корондашами
        const pains = picture - markers - pencils; // Нарисованно крассками

        echo "<br>\n";
        echo pains;*/

    // Задание 3

        /*$age = 20;


        if ($age > 18 && $age < 65) {
            echo "Вам еще работать и работать";
        } elseif ($age > 65) {
            echo "Вам пора на пенсию";
        } elseif ($age > 1 && $age < 17) {
            echo "Рано еще работать";
        } else {
            echo "Неизвестный возраст";
        }*/

    // Задание 4

    /*$day = 1;

        switch ($day) {
            case $day >= 1 && $day <= 5:
                echo "Это рабочий день";
                break;
            case $day == 6 || $day == 7:
                echo "Это выходной день";
                break;
            case $day < 1 || $day > 7:
                echo "Неизвестный день";
                break;
        }*/

    // Задание 5

       /* $bmw = [
            'model' => 'X5',
            'speed' => 120,
            'doors' => 5,
            'year' => '2015'
        ];

        $tayota = [
            'model' => 'Carmy',
            'speed' => 110,
            'doors' => 5,
            'year' => '2012'
        ];
        $opel = [
            'model' => 'astra h',
            'speed' => 130,
            'doors' => 5,
            'year' => '2019'
        ];

        $car = [$bmw, $opel, $tayota];
        echo "<pre>";
        var_dump($car);*/

       // Задание 6



        echo '<table border="1px solid black">';

        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 10; $j++) {
                echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
