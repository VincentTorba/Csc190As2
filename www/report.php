<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}

input[type=submit] {
    width: 300px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 350px;
    border-radius: 45px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
	<script>
		function InsertPost(){
			var author = $("#name").val();
			var post = $("#local").val();
			$.post("servlets/data_ops.php",
			    {
				author: author,
				post: post 
			    }
			   
				window.location.assign("http://localhost/list.php");
				
		};
	</script>
<body>
<center>
<h1 style="font-family:helvetica;">Where's Dr. Evil??</h1>

<div align="left">
  
  <form action="/action_page.php">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Name..">
    <br>
    <label for="lname">Where's Dr. Evil</label>
    <input type="text" id="local" name="location" placeholder="Location..">
    <br><center>
    <input type ="submit" text = "Submit" onclick ="InsertPost()"> </center>
  </form>
</div></center>

</body>
</html>

