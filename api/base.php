<?php

session_start();
date_default_timezone_set("Asia/Taipei");

class DB
{
  protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db10";
  protected $table;
  protected $pdo;

  public function __construct($table)
  {
    $this->table = $table;
    $this->pdo = new PDO($this->dsn, 'root', '');
  }


  public function find($id)
  {
    $sql = "SELECT * FROM $this->table";
    if (is_array($id)) {
      foreach ($id as $key => $value) {
        $tmp[] = "`$key` = '$value'";
      }

      $sql = $sql . " WHERE " . join("&&", $tmp);
    } else {
      $sql = $sql . " WHERE `id` = '$id'";
    }
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
  }

  public function all()
  {
  }

  public function save()
  {
  }

  public function del()
  {
  }

  public function sum()
  {
  }

  public function count()
  {
  }

  public function max()
  {
  }

  public function min()
  {
  }

  public function avg()
  {
  }
}

function dd()
{
}

function to($location)
{
}

function q()
{
}
$db = new DB('bottom');
$bot = $db->find(1);
print_r($bot);
