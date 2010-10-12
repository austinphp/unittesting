<?php
class User
{
    public static function find()
    {
        $pdo = new PDO('sqlite:data.sqlite');
        $results = $pdo->query("SELECT * FROM users");
        foreach ($results as $result) {
            $obj = new User();
            foreach ($result as $key => $val) {
                $obj->$key = $val;
            }
            $users[] = $obj;
        }   
        return $users;
    }
    
    public function getAge()
    {
        
    }
}