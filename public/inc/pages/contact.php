
<div id="form">
	<div class="inner-wrapper">

		<div class="contact-details">
			<div class="info">
				<div class="entree">
					<h2>Dalie</h2>
					<h3>Co-Founder &amp; CEO</h3>
					<p>example@mail.com</p>
				</div>

				<div class="entree">
					<h2>Lydia Mumba</h2>
					<h3>Co-Founder &amp; Trustee</h3>
					<p>example@mail.com</p>
				</div>

				<div class="entree">
					<h2>Michael Otadenede</h2>
					<h3>Trustee &amp; Acting Chair</h3>
					<p>example@mail.com</p>
				</div>

			</div>
		</div>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<ul id="form-opt">
				<li><input type="name" name="name" placeholder="NAME" ></li>
				<li><input type="email" name="email" placeholder="EMAIL"></li>
				<li><input type="number" name="number" placeholder="PHONE NUMBER"></li>
				<li><textarea type="text" placeholder="..."></textarea></li>
			</ul>
		</form>
		
	</div>
</div>