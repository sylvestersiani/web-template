
<?php include "controller/contact-exec.php"; ?>
<div id="form">
	<form method="post" action="<?php  $_SERVER['PHP_SELF']?>">
		<ul id="form-opt">
			<li><input type="name" name="name" placeholder="<?php isset($name_error)? print $name_error : print 'Name'; ?>" value="<?php isset($name)? print $name: '' ;?>"  ></li>

			<li><input type="email" name="email" placeholder="<?php isset($email_error)? print $email_error : print 'name@email.com'; ?>"  value="<?php isset($email)? print $email: '' ;?>"  ></li>

			<li><input type="text" name="number" placeholder="<?php isset($tel_error)? print $tel_error : print '0754103629'; ?>" value="<?php isset($tel)? print $tel: '' ;?>" ></li>

			<li><textarea type="text" name="query" placeholder="<?php isset($query_error)? print $query_error : print 'Share your views with us.'; ?>"><?php isset($query)? print $query: '' ;?></textarea></li>

			<button type="submit">contact</button>
		</ul>
	</form>

	<div class="contact-details">
		<div class="info">
			<p>example@email.com </p>
		</div>
	</div>

</div>