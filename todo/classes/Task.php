<?php

namespace App;

/**
 * Class Task
 * @author yourname
 */
class Task extends Connection
{
    public function __construct()
    {
        $this->connect();
    }

    public function find()
    {
        $sql = "select * from task";
        $results = $this->conn->query($sql);

        $data = array();
        $results->data_seek(0);
        while($row = $results->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function findOne($id)
    {
        $sql = "select * from task where id = $id";
        $results = $this->conn->query($sql);

        if ($results->num_rows) {
            $results->data_seek(0);
            return $results->fetch_assoc();
        }

        return array();
    }

    public function insert(array $data)
    {
        $sql = "insert into task(task) values ('${data['task']}')";
        $this->conn->query($sql);
    }

    public function update(array $data)
    {
        $sql = "update task"
            . " set task = '${data['task']}'"
            . " where id = ${data['id']}";

        $this->conn->query($sql);
    }

    public function remove($id)
    {
        $sql = "delete from task where id = $id";
        $this->conn->query($sql);
    }
}
