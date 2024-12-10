<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Balajar PHP");
addTodoList("Balajar Mysql");
addTodoList("Balajar Laravel");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();