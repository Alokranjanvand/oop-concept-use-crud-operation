<?php
    class database{
        var $con;
        var $server = "localhost";
        var $user = "root";
        var $pass = "";
        var $db = "oops_db";
        
        function __construct(){
            $this->con = new mysqli($this->server,$this->user,$this->pass,$this->db);
            
            if($this->con->connect_error){
                echo "Database Connection Failed";
                exit;
            }
        }
        function select($query){
            $resource =  $this->con->query($query) or $this->error($this->con->errno,$this->con->error,$query);
            return $resource;
        }
        function insert($table,$fields,$values){
            $query = "insert into ".$table." (".$fields.") values(".$values.")";
            $this->con->query($query) or $this->error($this->con->errno,$this->con->error,$query);
        }
        function update($table,$sets,$where){
            $query = "update ".$table." set ".$sets." where ".$where;
            $this->con->query($query) or $this->error($this->con->errno,$this->con->error,$query);
        }
        function error($errno,$error,$query){
            echo "<div style='background-color:#faa;padding:2px'>";
            echo "<h4 style='background-color:#ee4141;padding:5px'>".$errno." - ".$error."</h4>";
            echo $query;
            echo "</div>";
            exit;
        }
        function fetch($resource){
            return $resource->fetch_assoc();
        }
        function num_rows($resource){
            return $resource->num_rows;
        }
        function delete($query){
            $this->con->query($query) or $this->error($this->con->errno,$this->con->error,$query);
        }
        
    }

    

    //insert into student(name,age,city) values('aaa','aaa','aaaa');
    //update student set name='aa',age='3',city='333' where id='3';
?>











    
    