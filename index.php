<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Laboratory work 1</h1>
    <h2>IA-301k Shvydenko Dmytro</h2>
    <?php

    //Робота зі змінними та масивами
    //1.1. Створіть змінні $ a = 10 і $ b = 2. Виведіть на екран їх суму, різницю, добуток і частку (результат ділення).
    $a = 10;
    $b = 2;
    echo "a + b = ", $a + $b, "<br>\n"; 
    echo "a - b = ", $a - $b, "<br>\n";
    echo "a * b = ", $a * $b, "<br>\n";
    echo "a % b = ", $a % $b, "<br>\n", "<br>\n";
    //1.2. Створіть змінні $ c = 15 і $ d = 2. Підсумуйте їх, а результат надайте змінної $ result. Виведіть на екран значення змінної $ result.
    $c = 15;
    $d = 2;
    echo "c + d = ", $result = $c + $d, "<br>\n", "<br>\n"; 
    //1.3. Створіть масив $ arr = array ('html', 'css', 'php') і з його допомогою виведіть на екран рядок 'php, html, css'.
    $arr = array('html','css','php');
    echo implode(" ", $arr);
    //1.4. Дано масив з елементами 'html', 'css', 'php', 'js', 'jq'. За допомогою циклу foreach виведіть ці слова в стовпчик.
    $arr = array('html','css','php', 'js', 'jq');
    echo "<br>\n";
    foreach($arr as &$value){
        echo "<br>\n", $value;
    }

    //Робота зі циклами та вибором
    //2.1 Написати цикл while, який буде виводити на екран всі непарні числа від 0 до 50.
    echo "<br>\n", "<br>\n";
    $num = 0;
    while($num < 50){
        if ($num % 2 !== 0){
            echo $num, "\n";
        }
        $num++;
    }
    //2.2 Дан масив з елементами 2, 5, 9, 15, 0, 4. За допомогою циклу foreach і оператора if виведіть на екран стовпець тих елементів масиву, які більше 3-х, але менше 10.
    echo "<br>\n", "<br>\n";
    $arr = array(2, 5, 9, 15, 0, 4);
    foreach($arr as &$value){
        if ($value > 3 && $value < 10){
            echo $value, "\n";
        }
    }
    //2.3 Створити функцію, яка приймає чотири текстові рядки у вигляді вхідних змінних, а виводить html-код таблиці, де кожний з вихідних рядків розташований в окремій клітинці таблиці.
    echo "<br>\n", "<br>\n";
    function table($str1, $str2, $str3, $str4){
        echo '<table border="1">';
        echo '<tr>' . '<td>' . $str1 . '</td>' . '</tr>';
        echo '<tr>' . '<td>' . $str2 . '</td>' . '</tr>';
        echo '<tr>' . '<td>' . $str3 . '</td>' . '</tr>';
        echo '<tr>' . '<td>' . $str4  . '</td>' . '</tr>';
        echo '</table>';
    };
    table('test0','test1','test2','test3')

    ?>


</body>
</html>