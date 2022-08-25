<?php
require_once __DIR__."/../Entity/Todolist.php";
require_once __DIR__."/../Repository/TodolistRepository.php";
require_once __DIR__."/../Service/TodoListService.php";
require_once __DIR__."/../View/TodoListView.php";
require_once __DIR__."/../Helper/InputHelper.php";
use Entity\Todolist;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;
function testViewTodoList():void{

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar Javascript");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP WEB");

    $todoListView->showTodoList();

}

function testAddTodoList():void{

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar Javascript");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP WEB");

    $todoListService->showTodoList();
    $todoListView->addTodoList();
    $todoListService->showTodoList();
    $todoListView->addTodoList();
    $todoListService->showTodoList();
}

function testRemoveTodoList():void{

    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar Javascript");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP WEB");

    $todoListService->showTodoList();
    $todoListView->removeTodoList();
    $todoListService->showTodoList();
    $todoListView->removeTodoList();
    $todoListService->showTodoList();
}

testRemoveTodoList();