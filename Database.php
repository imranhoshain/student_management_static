<?php

class Database{
    public $host   = DB_HOST;
    public $user   = DB_USER;
    public $pass   = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
        $this->connectDB();
    }

    private function connectDB(){
        $this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        if(!$this->link){
            $this->error = "connection fail !".$this->link->connect_error();
            return false;
        }
    }

    //select or read data from database
    public function select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }

    //insert data into tbl_user
    public function insert($query){
        $insert_row = $this->link->query($query);// or die ($this->link->error.__LINE____);
        if($insert_row){
            echo "data inserted..";
           // header("Location: home.php?msg=".urlencode('Data Inserted Successful.'));
            //exit();
        }
        else{
            die("Error :(".$this->link->errno.")".$this->link->error);
        }
    }

    //update data
    public function update($query){
        $update_row = $this->link->query($query);//  or die ($this->link->error.__LINE____);
        if($update_row){
            echo "Data Updated...";
            //header("location:view.php");
           // header("Location: view.php?msg=".urldecode('Data Updated Successful.'));
            exit();
        }
        else{
            die("Error :(".$this->link->errno.")".$this->link->error);
        }
    }

    //Delete data
    public function delete($query){
        $delete_data = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($delete_data){
            header("Location: home.php?msg=".urlencode('Data Deleted Successful'));
            exit();
        }
        else{
            die("Error :(".$this->link->errno.")".$this->link->error);
        }
    }

}


?>