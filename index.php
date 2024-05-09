<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4</title>
</head>

<body>
    <?php
    // $red = 255;
    // $green = 255;
    // $blue = 100;
    // printf("#%X%X%X", $red, $green, $blue);
    // echo '<pre>';
    // printf("%4d", 45);
    // echo '<br>';
    // printf("%04d", 5);
    // echo '<br>';
    // printf("%4.2f", 5.584865);
    // echo '<br>';
    // printf("%.4f", 55.55557575);
    // echo '</pre>';
    // $str = 'Name, Surname, e-mail';
    // echo '<pre>';
    // print_r(explode(', ', $str)); // third arg how many variables
    // echo '</pre>';

    // Format jsone
    $arr = [
        'name' => 'SomeName',
        'phones' => [
            '888',
            '777',
        ]
    ];
    $encodeArr = json_encode($arr);
    echo $encodeArr;
    echo '<pre>';
    print_r(json_decode($encodeArr, false));
    echo '</pre>';



    ?>
</body>

</html>