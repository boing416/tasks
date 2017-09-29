<?php
class Task {

    public $id;
    public $title;
    public $user_id;
    public $username;
    public $img;
    public $text;
    public $email;
    public $status;

    public function __construct($id, $title, $user_id, $username, $img, $text, $email, $status) {
        $this->id      = $id;
        $this->title  = $title;
        $this->user_id = $user_id;
        $this->username = $username;
        $this->img = $img;
        $this->text = $text;
        $this->email = $email;
        $this->status = $status;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM tasks');


        foreach($req->fetchAll() as $task) {
            $list[] = new Task(
                $task['id'],
                $task['title'],
                $task['user_id'],
                $task['username'],
                $task['img'],
                $task['text'],
                $task['email'],
                $task['status']
            );
        }

        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();

        $id = intval($id);
        $req = $db->prepare('SELECT * FROM tasks WHERE id = :id');

        $req->execute(array('id' => $id));
        $task = $req->fetch();

        return new Task(
            $task['id'],
            $task['title'],
            $task['user_id'],
            $task['username'],
            $task['img'],
            $task['text'],
            $task['email'],
            $task['status']
        );
    }

    public static function edit($id) {
        $db = Db::getInstance();
        $sql = "UPDATE tasks SET status='1' WHERE id = :id";

        $req = $db->prepare($sql);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();

    }

    public static function create($title,$username,$text,$img,$email) {
        $db = Db::getInstance();
        $sql = "INSERT INTO tasks (title,username,text,img,email) VALUES('$title','$username','$text','$img','$email')";
        $db->query($sql);
        if ($db->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }


    }
}
