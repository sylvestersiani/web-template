<style type="text/css">
	#form {
		min-height: 100%;
		height: 100%;
		 top:0;
    	bottom:0;
    	left:0;
    	right:0;
    	background-color: pink;
    	z-index: -999;

	}
	#form-opt{
		padding: 20px;
		background-color: #ececec;
	}
	#form-opt li{
		list-style: none;
		width: 95%;
		margin: 10px 0;

	}
	#form-opt{
		width: 50%;
	}
	#form-opt input, #form-opt textarea{
		width:100%;
		height: 40px;
		border: none;
		-moz-border: none;
		-webkit-border :none;
	}
	#form-opt textarea{
		height: 80px;
	}
</style>

<div id="form">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<ul id="form-opt">
			<li><input type="name" name="name" placeholder="John Smith" ></li>
			<li><input type="email" name="email" placeholder="name@mail.com"></li>
			<li><input type="number" name="number" placeholder="07000000000"></li>
			<li><textarea type="text" placeholder=""></textarea></li>
		</ul>


	</form>
</div>