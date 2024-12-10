<?php

require_once "../Mode/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar.PHP");
addTodoList("Belajar.Mysql");
addTodoList("Belajar.Laravel");

var_dump($todoList);