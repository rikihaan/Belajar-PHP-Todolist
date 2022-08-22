<?php
namespace Entity{
    class Todolist{
        private $todo;

        public function __construct(string $todo="")
        {
            $this->todo=$todo;
        }

        // for get property todo
        public function getTodo(): string
        {
            return $this->todo;
        }

        // for set property todo
        public function setTodo(string $todo):void{
            $this->todo=$todo;
        }
    }
}