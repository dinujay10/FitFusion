<?php

trait Model
{
    use Database;

    protected $limit = 10;
    protected $offset = 0;
    protected $order_type = 'desc';
    protected $order_column = 'id';
    public $errors = [];

    function test()
    {
        $query = "select * from users";
        $result = $this->query($query);
        show($result);
    }

    // Where function - to get one or more than one record
    public function findAll()
    {
        $query = "select * from $this->table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

        return $this->query($query);
    }

    public function where($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && "; // the :id tells that its a variable and not a query($id), therefore SQL attacks can be prevented
        }
        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");
        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        return $this->query($query, $data);
    }

    public function first($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && "; // the :id tells that its a variable and not a query($id), therefore SQL attacks can be prevented
        }
        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        $query = trim($query, " && ");
        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);

        if ($result)
            return $result[0];
        return false;
    }

    public function insert($data)
    {
        // remove unwanted data

        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "insert into $this->table (" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";

        $this->query($query, $data);
        return false;
    }

    public function update($id, $data, $id_column = 'id')
    {
        // remove unwanted data

        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        $query = "update $this->table set ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . ", "; // the :id tells that its a variable and not a query($id), therefore SQL attacks can be prevented
        }

        $query = trim($query, ", ");
        $query .= " where $id_column = :$id_column ";

        $data[$id_column] = $id;
        // echo $query;
        $this->query($query, $data);

        return false;
    }

    // id column?????????
    public function delete($id, $id_column = 'id') {
      
       $data[$id_column] = $id;
       $query = "delete from $this->table where $id_column = :$id_column ";
        
       //echo $query;
       $this->query($query, $data);

        return false;
    }

    public function deletemachine($id, $id_column = 'id') {
        $con=new mysqli('localhost','root','','fitfusion');
        //$con = $this->connect();
        $sql="delete from `machines` where id=$id";
        $result=mysqli_query($con,$sql);
       // $data[$id_column] = $id;
       // $query = "delete from $this->table where $id_column = :$id_column ";

    }


    public function deletepackage($id, $id_column = 'id')
    {
        $con = new mysqli('localhost', 'root', '', 'fitfusion');
        //$con = $this->connect();
        $sql = "delete from `packages` where id=$id";
        $result = mysqli_query($con, $sql);
        // $data[$id_column] = $id;
        // $query = "delete from $this->table where $id_column = :$id_column ";

        // echo $query;
        // $this->query($query, $data);

        return false;
    }
    public function deletecomplaint($id, $id_column = 'id') {
        $con=new mysqli('localhost','root','','fitfusion');
        //$con = $this->connect();
        $sql="delete from `complaint` where id=$id";
        $result=mysqli_query($con,$sql);
       // $data[$id_column] = $id;
       // $query = "delete from $this->table where $id_column = :$id_column ";
        
        // echo $query;
       // $this->query($query, $data);

        return false;
    }
    public function findMachineIds($managerEmail, $machineType) {
        $con = new mysqli('localhost', 'root', '', 'fitfusion');
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        
        // Prepare the statement
        $sql = "SELECT id FROM machines WHERE manageremail = ? AND machineType = ?";
        $stmt = $con->prepare($sql);
        if (!$stmt) {
            die("Error in preparing statement: " . $con->error);
        }

        $stmt->bind_param("ss", $managerEmail, $machineType);

        $stmt->execute();

        $result = $stmt->get_result();

        $ids = array();

        while ($row = $result->fetch_assoc()) {
            $ids[] = $row['id'];
        }

        $stmt->close();
        $con->close();
        return $ids;
    }
    
}