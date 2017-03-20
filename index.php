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