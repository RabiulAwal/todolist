<?php
	use App\Todolist;
	include "vendor/autoload.php";
	$todolist = new Todolist(); 
	$readdata = $todolist->read_data();
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
	body{
	    background-color:#EEEEEE;
	}
	.todolist{
	    background-color:#FFF;
	    padding:20px 20px 10px 20px;
	    margin-top:30px;
	}
	.todolist h1{
	    margin:0;
	    padding-bottom:20px;
	    text-align:center;
	}
	.form-control{
	    border-radius:0;
	}
	li.ui-state-default{
	    background:#fff;
	    border:none;
	    border-bottom:1px solid #ddd;
	}

	li.ui-state-default:last-child{
	    border-bottom:none;
	}

	.todo-footer{
	    background-color:#F4FCE8;
	    margin:0 -20px -10px -20px;
	    padding: 10px 20px;
	}
	#done-items li{
	    padding:10px 0;
	    border-bottom:1px solid #ddd;
	    text-decoration:line-through;
	}
	#done-items li:last-child{
	    border-bottom:none;
	}
	#checkAll{
	    margin-top:10px;
	}
</style>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
    	<div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="todolist not-done">
             <h1>Todos</h1>

	            <form action="/todolist/save.php" method="POST">
	                <input type="text" class="form-control add-todo" name="addtodo" placeholder="Add todo">
	            </form>

                <ul id="sortable" class="list-unstyled">
                	<?php foreach($readdata as $readdatas) { ?>
                    <li class="ui-state-default" id="textli<?php echo $readdatas->id; ?>">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="todocheckbox" value="<?php echo $readdatas->id; ?>" />
                            	<span id="text<?php echo $readdatas->id; ?>">
                            		<?php echo $readdatas->user_input; ?>
                            	</span>
                            	<s id="strike_text<?php echo $readdatas->id; ?>"></s>
                            </label>
                        </div>
                    </li> 
                	<?php } ?>
                </ul>

                <div class="todo-footer">
                	<div class="row">
                		<div class="col-md-3"><strong><span class="count-todos"></span></strong> <?php echo count($readdata); ?> Items Left</div>
                		<div class="col-md-3"></div>
                		<div class="col-md-6">
                			<a href="file.php"><button class="btn btn-success btn-sm">All</button></a>
                			<button class="btn btn-success btn-sm">Active</button>
                			<button class="btn btn-success btn-sm">Completed</button>
                		</div>
                	</div>                   
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/todoscript.js"></script>


