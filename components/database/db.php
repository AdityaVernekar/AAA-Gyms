<?php
session_start();

require("connect.php");
// var_dump($users);
// echo "<pre>". print_r($users)."</pre>";
function dd($value){//to be deleted
    echo "<pre>". print_r($value,true)."</pre>";
}
function executeQuery($sql,$data){
    global $conn;
    $stmt =  $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s',count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}
function selectAll($table,$conditions =[]){
    global $conn;
    $sql = "select * from $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $record;
    }
    else{
        //return records that match the condition
        $i=0;
        foreach ($conditions as $key => $value) {
            if($i==0){
                $sql = $sql . " where $key=?";
            }
            else{
                $sql = $sql . " and $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql,$conditions);
        $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $record;
    }

}
function selectLimited($table,$conditions =[],$limit){
    global $conn;
    $sql = "select * from $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $record;
    }
    else{
        //return records that match the condition
        $i=0;
        foreach ($conditions as $key => $value) {
            if($i==0){
                $sql = $sql . " where $key=?";
            }
            else{
                $sql = $sql . " and $key=?";
            }
            $i++;
        }
        $sql = $sql . " limit $limit";
        $stmt = executeQuery($sql,$conditions);
        $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $record;
    }

}
function selectOne($table,$conditions){
    global $conn;
    $sql = "select * from $table";
    
        //return records that match the condition
        $i=0;
        foreach ($conditions as $key => $value) {
            if($i==0){
                $sql = $sql . " where $key=?";
            }
            else{
                $sql = $sql . " and $key=?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql,$conditions);
        $record = $stmt->get_result()->fetch_assoc();
        return $record;
    

}
function create($table,$data){
    global $conn;
    $sql ="insert into $table set ";
    $i=0;
    foreach ($data as $key => $value) {
        if($i==0){
            $sql = $sql . "$key=?";
        }
        else{
            $sql = $sql . ",$key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;
    return $id;

}
function update($table,$id,$data){
    global $conn;
    $sql ="update $table set ";
    $i=0;
    foreach ($data as $key => $value) {
        if($i==0){
            $sql = $sql . "$key=?";
        }
        else{
            $sql = $sql . ",$key=?";
        }
        $i++;
    }
    $sql = $sql . " where id=?";
    $data['id']=$id;
    $stmt = executeQuery($sql,$data);
    
    return $stmt->affected_rows;
    dd($sql);

}
function delete($table,$id){
    global $conn;
    $sql = "delete from $table where id=?";
    $stmt = executeQuery($sql,['id'=>$id]);
    return $stmt->affected_rows;
}
function getPublishedPosts()
{
    global $conn;
    $sql = "SELECT p.*, u.name FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? limit 7";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function selectTopics(){
    global $conn;
    $sql="SELECT distinct topic FROM `posts`;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $record;
}


?>