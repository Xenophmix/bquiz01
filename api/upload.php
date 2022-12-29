<?php
include_once "./base.php";
// echo $_POST['id'];

$table = $_POST['table'];
$row = $$table->find($_POST['id']);
if (!empty($_FILES['img']['tmp_name'])) {
  move_uploaded_file($_FILES['img']['tmp_name'], '../upload/' . $_FILES['img']['name']);
  $row['img'] = $_FILES['img']['name'];
  dd($row);
  $$table->save($row);
}

to("../back.php?do=" . lcfirst($table));


