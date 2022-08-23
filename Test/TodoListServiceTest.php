<?php
require_once __DIR__."/../Entity/TodoList.php";
require_once __DIR__."/../Repository/TodoListRepository.php";
require_once __DIR__."/../Service/TodoListService.php";

// use todolist Service ImplsD
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use Entity\Todolist;

function testShowTodoList(){

    // memanggil service todoList
    // todolist Service memiliki contructor Parameternya bertype TodolistRepositosry, untuk itu kita buat repositry nya
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[]= new Todolist("Belajar Javascrip");
    $todoListRepository->todolist[]= new Todolist("Belajar PHP OOP");
    $todoListRepository->todolist[]= new Todolist("Belajar GOLANG");
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->showTodoList();
    
}

testShowTodoList();