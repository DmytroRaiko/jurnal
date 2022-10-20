<?php

include '../db/setting.php';
require_once '../db/db.php';

$speciality = new Speciality();

$nameNormalized = trim($_POST['name']);
$numberNormalized = trim($_POST['number']);
$department_headNormalized = trim($_POST['department_head']);

if (!empty($nameNormalized) && !empty($numberNormalized) && !empty($department_headNormalized)) {

  $sql = $speciality->add($nameNormalized, $numberNormalized, $department_headNormalized);

  if ($sql === 1) echo '<div style="padding-left: 3%; padding-bottom: 2%; width:100%"><p class="massage-error" style="width: auto; color:green;"><img src="../images/ok.png" alt="Ok!">Спецільність ' . $numberNormalized . ' додано!</p></div>';
  else echo '<div style="padding-left: 3%; padding-bottom: 2%; width:auto"><p class="massage-error" style="width: auto; color:red;"><img src="../images/error.png" alt="Error!">Спеціальність ' . $numberNormalized . ' вже існує!</p></div>';

}
?>