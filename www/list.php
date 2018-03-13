<html>
	<!DOCTYPE>

	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<script>
		function displayPosts(arrPosts){
			for(var i; i<arrPosts.size(); i++;){
				var author= arrPosts[i].[author];
				var post= arrPosts[i].[post];
				var ts= arrPosts[i].[ts];
				var ctrl = getCtrl(author,post,ts);
			}
			$('#post').append(ctrl);

		}

		function getCtrl(author,post,ts){
			var ctrl = $($("<div class='post-entry' id='report'><div class='post-stat'><</div><div class='post-time' id='ts'></div></div><div class='post-label'><h4 id='author'></h4><p id='post'></p></div></div>");
			ctrl.find("#author").html(author);
			ctrl.find("#post").html(post);
			ctrl.find("#ts").html(ts);
			return ctrl;
		}
	function retrievePosts()
	{
		$.post("servlets/data_ops.php",
			    {
				op: "getPosts"
			    },
			    function(data, status){
				var arrPosts = $.parseJSON(data);
				displayPosts(arrPosts);
			    });
	}
	// Periodically update page with new reports (if any)
	setInterval(retrievePosts,15000);
	</script>
	</head>
	<body>
<div class="container bootstrap snippets">
    <div class="col-md-7 col-md-offset-2">
        <div class="panel panel-body">
    		<div class="post" id="post">
    			<div class="post-header">
    				<div class="post-header-title bg-success">Now</div>
    			</div>
    		
    		</div>
    		<!-- End Timeline -->
    	</div>
    </div>
</div>
Have you seen Dr. Evil or his team members? <a href="report.php">Report here</a>
</body>



</html>
