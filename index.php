<?php
$developer=new Project();
$developer->setFirstName("Иван");
$developer->setLastName("Иванов");
$developer->setProfession("дизайнер");
$developer->setCostProjectForMonth(3000);

$developer->setFirstName("Петор");
$developer->setLastName("Петров");
$developer->setProfession("Senior Developer");
$developer->setCostProjectForHour(10,60);

$developer->setFirstName("Игорь");
$developer->setLastName("Егоров");
$developer->setProfession("Middle Developer");
$developer->setCostProjectForMonth(1000,3);


$developer->setFirstName("Сидр");
$developer->setLastName("Сидорович");
$developer->setProfession("Верстальщк");
$developer->setCostProjectForHour(5,120);


$developer-> getCostProject();
