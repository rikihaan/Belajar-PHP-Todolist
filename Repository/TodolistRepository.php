<?php

namespace Repository {

    use Entity\Todolist;
    use PDO;

    interface TodoListRepository
    {
        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {

        private array $todolist = array();
        private PDO $connection;

        public function __construct(PDO $connection)
        {
            $this->connection = $connection;
        }

        function save(Todolist $todolist): void
        {
            // versi sebelum menggunakan mysql
            // $number = sizeof($this->todolist) + 1;
            // $this->todolist[$number] = $todolist;

            // versi setelah menggunakan mysql
            $sql = "INSERT INTO todo (todo) VALUES (?)";
            $prepare=$this->connection->prepare($sql);
            $prepare->execute([$todolist->getTodo()]);

        }

        function remove(int $number): bool
        {
            // if ($number > sizeof($this->todolist)) {
            //     return false;
            // }

            // for ($i = $number; $i < sizeof($this->todolist); $i++) {
            //     $this->todolist[$i] = $this->todolist[$i + 1];
            // }

            // unset($this->todolist[sizeof($this->todolist)]);

            // return true;

            // lakukan pengecekan ke database
            $sql = "SELECT * FROM todo WHERE id = ?";
            $statement =$this->connection->prepare($sql);
            $statement->execute([$number]);

            // cek apakah hasil nya true
            if($statement->fetch()){
                // jika ada
                $sql = "DELETE FROM todo WHERE id = ?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);
                return true;
            }else{
                // jika data tidak ada
                return false;
            }
        }

        function findAll(): array
        {
            $sql ="SELECT id,todo FROM todo";
            $statement=$this->connection->prepare($sql);
            $statement->execute();
            $result=[];
            foreach($statement as $row){
                $todolist=new Todolist();
                $todolist->SetId($row['id']);
                $todolist->setTodo($row['todo']);
                $result[] = $todolist;
            }
            return $result;
        }
    }
}
