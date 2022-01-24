<?php
  class CreateDb
  {
    public $hostname;
    public $dbname;
    public $username;
    public $password;
    public $tablename;
    public $con;

    //class constructor
    public function __construct(
      $hostname = "mysql",
      $dbname = "shopping_cart",
      $username = "root",
      $password = "root",
      $tablename = "product")
    {
      $this->hostname = $hostname;
      $this->dbname = $dbname;
      $this->username = $username;
      $this->password = $password;
      $this->tablename = $tablename;

      //create connection
      $this->con = mysqli_connect($hostname, $username, $password);

      //check connection
      if(!$this->con){
        die("Connection failed:".mysqli_connect_error());
      }

      //query
      $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

      //execute query
      if(mysqli_query($this->con, $sql)){
        $this->con = mysqli_connect($hostname, $username, $password, $dbname);

        //sql to create new table
        $sql = "CREATE TABLE IF NOT EXISTS $tablename
                        (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        product_name VARCHAR (25) NOT NULL,
                        product_price FLOAT,
                        product_image VARCHAR (100)
                        );";
        if(!mysqli_query($this->con, $sql)){
          echo "Error creating table : " . mysqli_error($this->con);
        }
      }else{
        return false;
      }
    }


    //get product from the database
    public function getData(){
      $sql = "SELECT * FROM $this->tablename";
      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
        return $result;
      }
    }
    
  }