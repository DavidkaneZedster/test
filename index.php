<?php 
    // подключение файлов в нужном порядке 
    // для правильной работы классов
    include('salary.php');
    include('work.php');
    include('workers.php');
?>
<!-- 
    Есть класс сотрудники, есть класс работа, есть класс зарплата.
    В классе работа должны быть какие-либо сотрудники.
    В классе зарплата должен быть список возможных зарплат.
    В классе работа должны быть зарплаты. 
-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salaries : Jobs</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="jobs">
            <div class="jobs__item">
                <h1 class="title">Работа: 
                    <?php 
                        echo $workFirst->workName . ', ' . $workFirst->mediumSalary;
                    ?> 
                </h1>
                <h2 class="subtitle">Список работников в области 
                    <?php 
                        echo $workFirst->workName; 
                    ?> 
                    разработки:
                </h2>
                <ul>
                    <?php 
                        foreach($workFirst->list as $elem)
                        {
                            echo "<li>" . $elem->id . ', ' . $elem->workerName, ', ' . $elem->workerLastName . ', ' . $elem->workerSalary . "</li>"; 
                        }
                    ?>
                </ul>
            </div>
            <div class="jobs__item">
                <h1 class="title">Работа: 
                    <?php 
                        echo $workSecond->workName . ', ' . $workSecond->mediumSalary;
                    ?> 
                </h1>
                <h2 class="subtitle">Список работников в области 
                    <?php 
                        echo $workSecond->workName; 
                    ?> 
                    разработки:
                </h2>
                <p>
                    <?php
                        foreach($workSecond->list as $elem)
                        {
                            echo "<li>" . $elem->id . ', ' . $elem->workerName, ', ' . $elem->workerLastName . ', ' . $elem->workerSalary . "</li>"; 
                        }
                    ?>
                </p>
            </div>
            <div class="jobs__item">
                <h1 class="title">Работа: 
                    <?php 
                        echo $workThird->workName . ', ' . $workThird->mediumSalary;
                    ?> 
                </h1>
                <h2 class="subtitle">Список работников в области 
                    <?php 
                        echo $workThird->workName; 
                    ?> 
                    разработки:
                </h2>
                  <p>
                    <?php
                        foreach($workThird->list as $elem)
                        {
                            echo "<li>" . $elem->id . ', ' . $elem->workerName, ', ' . $elem->workerLastName . ', ' . $elem->workerSalary . "</li>"; 
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>


