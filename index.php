<?php
	require_once'controller/func.php';
	render_header('header');
?>


<section>
	<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];


			switch ($page) {
				case 'about':
					background_img("http://africa-facts.org/wp-content/uploads/2015/01/african-kids.jpg");

					include 'public/inc/pages/about.php';
					break;
				case 'index':
					echo 'home';
					break;
				default:
					# code...
					break;
			}

		}
	?>
</section>

<?php
	render_template('footer');
?>