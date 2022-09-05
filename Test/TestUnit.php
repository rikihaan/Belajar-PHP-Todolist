<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

$repository = new Repository\TodoListRepositoryImpl();
$service = new Service\TodoListServiceImpl($repository);
