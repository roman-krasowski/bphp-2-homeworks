<?php
fwrite(STDOUT, "Введите Вашу фамилию:" . PHP_EOL);
$surname = trim(fgets(STDIN));
fwrite(STDOUT, "Введите Ваше имя:" . PHP_EOL);
$firstName = trim(fgets(STDIN));
fwrite(STDOUT, "Введите Ваше отчество:" . PHP_EOL);
$middletName = trim(fgets(STDIN));

/*
$name = [$surname, $firstName, $middletName];
for($i=0; $i<count($name); $i++) {
  str_replace(substr($name[i], 0, 1), strtoupper(substr($name[i], 0, 1)), $name[i])
};
fwrite(STDOUT, "Полное имя: " . $name[0] . $name[1] . $name[2] . PHP_EOL);
fwrite(STDOUT, "Полное имя: " . $name[0] . substr($name[1], 0, 1) . substr($name[2], 0,1) . PHP_EOL);
fwrite(STDOUT, "Полное имя: " . substr($name[0], 0, 1) . substr($name[1], 0, 1) . substr($name[2], 0,1) . PHP_EOL);

*/

//преобразование первой буквы к верхнему регистру
$surname = str_replace(substr($surname, 0, 1), strtoupper(substr($surname, 0, 1)), $surname);
$firstName = str_replace(substr($firstName, 0, 1), strtoupper(substr($firstName, 0, 1)), $firstName);
$middletName = str_replace(substr($middletName, 0, 1), strtoupper(substr($middletName, 0, 1)), $middletName);

$fullName =  $surname . " " . $firstName . " " .$middletName;
$fullName = str_replace(substr($surname, 0, 1), strtoupper(substr($surname, 0, 1)),$surname);
$surnameAndInitials = $surname . " " . substr($firstName,0,1) . "." . substr($middletName,0,1) . ".";
$fio = substr($surname,0,1) . substr($firstName,0,1) . substr($middletName,0,1);

fwrite(STDOUT, "Полное имя: " . $fullName . PHP_EOL);
fwrite(STDOUT, "Фамилия и инициалы: " . $surnameAndInitials . PHP_EOL);
fwrite(STDOUT, "Аббревиатура: " . $fio . PHP_EOL);
?>
