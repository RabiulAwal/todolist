<?php
 namespace App;

  class Todolist 
  {
  	private $connection;
  	function __construct()
  	{
  		$connection = new \mysqli("localhost", "root", "", "todolist");

		if(!$connection){
			die("Error: Cannot connect to the database");
		}

		$this->connection = $connection;

  	}
    // Add todo data

  	public function add()
  	{
  		echo "hello";
  	}

    public function add_query()
    {

    	if(isset($_POST['addtodo']))
    	{
    		if($_POST['addtodo'] != '')
    		{
    			$addtodo = $_POST['addtodo'];

    			$this->connection->query("INSERT INTO `todo_userdata` SET user_input='{$addtodo}' "); 

    			header('location:file.php?msg=success');
    		}

    	}
    }

    public function read_data()
    {
    	$query = $this->connection->query("SELECT * FROM `todo_userdata` ORDER BY `id` ASC");
      $rows = array(); 
      
      while($row = $query->fetch_assoc()) 
      {
          $rows[]  = (object)$row;
      }
    	return $rows; 
    }



  }
