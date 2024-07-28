
<div id="header">
<h1>Quick Quotes</h1>
<div id="tab-navigation">
	<ul>
	<?php 
		require_once ( 'mysqli_connect.php' );
        if  (strlen($_SESSION['member_id'] == 0)) {?>
			<li><a href="index.php">Home page</a></li>
			<li><a href="forum_w.php">Wise Quotes</a></li>
			<li><a href="forum_c.php">Comical Quotes</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="safer-register-page.php">Register</a></li>
			<!-- <li><a href="logout.php">Logout</a></li> -->
			<!--<li><a href="post.php">Add a quote</a></li>-->
			<!--<li><a href="view_posts.php">View your Posts</a></li>-->
		
		<?php } else {?>
			<li><a href="index.php">Home page</a></li>
			<li><a href="forum_w.php">Wise Quotes</a></li>
			<li><a href="forum_c.php">Comical Quotes</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="post.php">Add a quote</a></li>
			<li><a href="view_posts.php">View your Posts</a></li>
			<li><a href="logout.php">Logout</a></li>
			<!-- <li><a href="login.php">Login</a></li> -->
			<!-- <li><a href="safer-register-page.php">Register</a></li> -->
			
		
		
		
		<?php }?>

		
	</ul>
</div>
</div>