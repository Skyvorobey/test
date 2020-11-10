<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашняя задание №1</title>
</head>
<body>
    <h1>Домашнее задание №1.</h1>

    <div class="task-1">
        <p class="description" style="font-weight: bold">1. Добейтесь корректной работы вашего сервера. Тщательно повторите шаги, которые мы делали на уроке. В случае затруднений - обращайтесь в чат поддержки!</p>
        <p>Выполнено!</p>
    </div>

    <div class="task-2">
        <p class="description" style="font-weight: bold">2. Добавьте себе в закладки официальный мануал по языку http://fi2.php.net/manual/ru/</p>
        <p>Добавлено!</p>
    </div>

    <div class="task-3">
        <p class="description" style="font-weight: bold"> 3. В PHP есть функция var_dump($something), которая выводит подробную информацию о значениях и их типах. Попробуйте написать что-нибудь вроде var_dump(2*2) <span style="font-weight: bold"><?php var_dump(2*2) ?></span>; чтобы увидеть, как она работает. Изучите с помощью этой функции следующие выражения:</p>
        <p>1. 3 / 1 <br>
            <?php var_dump(3 / 1) ?> <br>
            <span style="font-weight: bold">Комментарий:</span> Деление 3 на 1, выдает результат, целое число 3.</p>

        <p>2. 1 / 3 <br>
            <?php var_dump(1 / 3) ?> <br>
            <span style="font-weight: bold">Комментарий:</span> Деление 1 на 3, выдает результат, нецелого числа 0.33.</p>

        <p>3. '20cats' + 40 <br>
            <?php var_dump('20cats' + 40) ?><br>
            <span style="font-weight: bold">Комментарий:</span> '20cats' + 40. PHP, пытается довести программу до конца. В данном случае, PHP выдает резуальтат сумму при сложении 20 и 40</p>

        <p>4. 18 % 4 <br>
            <?php var_dump(18 % 4) ?> <br>
            <span style="font-weight: bold">Комментарий:</span> Деление по модулю. Результат Целочисленного остатока от деления 18 на 4 равняется 2</p>
    </div>

    <div class="task-4">
        <p class="description" style="font-weight: bold"> 4. Говорят, что в PHP "всё является выражением". Интересно, что даже присваивание переменной какого-либо значения тоже является выражением! Изучите примеры ниже и дайте ответ - что же является значением выражения присваивания?</p>
        <p>1. echo ($a = 2); <br>
            <span style="font-weight: bold"> Ответ:</span><br>
            "$a" это перменная<br>
            2 это значение выражения
        </p>
        <p>2. $x = ($y = 12) - 8; echo $x; <br>
            <span style="font-weight: bold"> Ответ:</span><br>
            "$x" это перменная, её значение это и "$y" и "12". <br>
            Тогда как у переменной "$y" значение "12".
        </p>

        <p> <span style="font-weight: bold"> Комментарий:</span> Значением выражения присваивания является, то значение, которое было присвоино. То есть, то что присвоили переменной, то и будет значением этой операции. <br>
            <span style="bold"> "y = 2"</span> <br>
        </p>
    </div>

    <div class="task-5">
        <p class="description" style="font-weight: bold">5. В PHP имеется логический (boolean) тип, имеющий два значения - true (истина) и false (ложь). Изучите с помощью var_dump() следующие выражения и объясните их.</p>
        
        <p>1. 1 == 1.0 <br>
        <?php var_dump(1 == 1.0)?> <br>
            <span style="font-weight: bold"> Ответ:</span> Истина. При нестрогом сравнении, целое число 1 равняется, нецелому числу 1.0. Так как нестрого говоря 1 и 1.0 равны.</p>

        <p>2. 1 === 1.0 <br>
        <?php var_dump(1 === 1.0)?> <br>
            <span style="font-weight: bold"> Ответ:</span> Ложь. При строгом сравнении, 1 не равно 1.0, потому что одно число целое, второе число, нецелое.</p>

        <p>3. '02' == 2 <br>
        <?php var_dump('02' == 2)?> <br>
            <span style="font-weight: bold"> Ответ:</span> Истина. При нестрогом сравнении, строка 02 равняется 2. Нестрого говоря 02 это 2, по этому 02 равняется 2.</p>
        
        <p>4. '02' === 2 <br>
        <?php var_dump('02' === 2)?> <br>
            <span style="font-weight: bold"> Ответ:</span> Ложь. При строгом сравнении, ложь, так как одно значение это строка, а другое это целое число.</p>

        <p>5. '02' == '2' <br>
        <?php var_dump('02' == '2');?> <br>
            <span style="font-weight: bold"> Ответ:</span> Истина. Нестрогое сравнение, строка 02 и 2 равны. Так как нестрого говоря 02 это 2, а два равно двум.</p>
    </div>

    <div class="task-6">
        <p class="description" style="font-weight: bold"> 6. Попробуйте объяснить результат:</p>
        <p>$x = true xor true; <br>
            var_dump($x); <br>
        <?php $x = true xor true;
        var_dump($x);?> <br>
            <span style="font-weight: bold"> Ответ:</span> Переменная $x, выдает результат истина так как, в данном примере, мы присваиваем переменной $x значение "истина". Что бы выражение работало исправно, необходимо после оператора присвоения, выражение, заключить в скобки. $x = (true xor true); <br>
            <span style="font-weight: bold"> Решение:</span> $y = (true xor true); <br>
        <?php $y = (true xor true);
        var_dump($y);
        ?></p>
    </div>

</body>
</html>