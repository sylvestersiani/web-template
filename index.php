<?php
	require_once'controller/func.php';
	render_header('header');
?>

<section class="page-content">
	<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			
			switch ($page) {
				case 'about':
					background_img("http://africa-facts.org/wp-content/uploads/2015/01/african-kids.jpg" );
					include 'public/inc/pages/about.php';
					break;
				case 'index':
					include 'public/inc/pages/home.php';
					break;
				case 'contact':
					include 'public/inc/pages/contact.php';
					break;
				case 'get-involved':
					include 'public/inc/pages/get-involved.php';
					break;
				case 'trustees':
					include 'public/inc/pages/trustees.php';
					break;
				default:
					include 'public/inc/pages/home.php';
			}

		}else{
			include 'public/inc/pages/home.php';
		}
	?>
</section>

<?php
	render_template('footer');
?>