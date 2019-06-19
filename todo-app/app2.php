<?php
echo "<h1>My Todo app v2.</h1>";

class TodoList2
{
  private $todos;

  function __construct()
  {
    $this->todos = [];
  }

  function addTodo($input)
  { 
    array_push($this->todos, $input);
  }

  function __get ($getInput) {
    return $this->$getInput;
  }
};

class Todo2 {
  private $id;
  private $title;
  private $isDone;

  static $ID_GENERATOR = 1;

  function __construct($title)
  {
    $this->id = Todo2::$ID_GENERATOR++;
    $this->title = $title;
    $this->isDone = false;
  }

  function done() {
    $done = $this->isDone ? "[X]" : '[ &nbsp; ]';
    return $done;
  }

  function __set ($input, $value) {
    $this->$input = $value;
  }

  function __toString()
  {
    return "| $this->id. | $this->title {$this->done()}";
  }
};

$todoo1 = new Todo2('kutya');
$todoo2 = new Todo2('cica');
$todoo3 = new Todo2('mérési hiba');
$newTodo = new Todo2($_POST["query"]);

$todoo3->isDone = false;
$todoo2->isDone = true;

$todoList2 = new TodoList2;

$todoList2->addTodo($todoo1);
$todoList2->addTodo($todoo2);
$todoList2->addTodo($todoo3);
$todoList2->addTodo($newTodo);

//var_dump($todoList2);

foreach($todoList2->todos as $key) {
  echo $key . "<br>";
};