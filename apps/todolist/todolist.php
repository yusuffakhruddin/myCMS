<?php
require_once('includes/cmsApplication.php');
class TodolistApplication extends CmsApplication{
	function addtodotask()
	{
		//echo 'Akan menambahkan data pekerjaan yang akan dialkukanke database';
		echo '<pre>';print_r($_REQUEST);echo "</pre>";	
	}
	function viewtodolist()
	{
		echo 'disni sakan ditampilkan data pekerjaan yang berasal dari databse';
	}
	function display()
	{
		//echo 'INI DARI TODO LIST';
		$this->displayDashboard();
	}

	private function displayDashboard()
	{
		?>
		<div>
		<h3>Todolist Application Dashboard</h3>
		<a href="index.php?app=todolist&task=addtaskform">Add Todo Task</a>
		<a href="#">View Todo List</a>
		</div>
		<?php
}

	function addtaskform()
{
	?>
	<div>
	<h3>Todolist Application Dashboard</h3>
	<form>
	<!--user request dengan methode POST-->
	<input type="hidden" name="app" value="todolist"/>
	<input type="hidden" name="task" value="addtodotask"/>


	<label for="title">Title</label>
	<br><input type="text" name="title"/>
	<p><label for="desc">Description</label></p>
	<textarea name="desc"></textarea>
	<br><input type="submit" value="Add Task"/>
	</form>
	<p>
		<form>
			<input type="submit" value="TOMBOL BARU">
		</form>
	</p>
	</div>
	<?php
}


}
?>
