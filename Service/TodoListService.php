<?php

namespace Service{

    use Entity\Todolist;
    use Repository\TodoListRepository;
    use Repository\TodoListRepositoryImpl;

    interface TodoListService{
        
        function showTodoList():void;
        function addTodoList(string $todo):void;
        function removeTodoList(int $number):void;
    }

    class TodoListServiceImpl implements TodoListService{

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository=$todoListRepository;
        }
        function showTodoList(): void
        {

            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todoListRepository->findAll() as $number => $value) {
                echo "$number.". $value->getTodo() . PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
            $todoList= new Todolist($todo);
            $this->todoListRepository->save($todoList);
            echo "Sukses Menambah TodoList".PHP_EOL;
        }

        function removeTodoList(int $number): void
        {
            if($this->todoListRepository->remove($number)){
                echo "Sukses Hapus Tudolist Ke : $number".PHP_EOL;
            }else{
                echo "Gagal Hapus Todolist Number : $number".PHP_EOL;
            }
        }
    }
}