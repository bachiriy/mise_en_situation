<?php 


class Room{

public $id;
public $name;
public $creat_id;

static public function NewRoom($id,$roomName,$creat_id){
    global $db;
    $query = ("INSERT INTO rooms (id, roomName, create_id) VALUES ('$id','$roomName','$creat_id')");
    return $db->query($query);
}
}

?>
