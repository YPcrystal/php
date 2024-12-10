<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar Web");
addTodoList("Belajar Mysql");
addTodoList("Belajar Laravel");

showTodoList();

viewRemoveTodoList();

showTodoList();