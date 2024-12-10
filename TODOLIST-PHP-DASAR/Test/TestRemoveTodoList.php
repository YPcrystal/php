<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
addTodoList("Belajar Mysql");
addTodoList("Belajar Laravel");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$succes = removeTodoList(4);
var_dump($succes);

showTodoList();