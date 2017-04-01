
<footer id="footer">
	<div class="copyright">
		<p>Copyright 2017 NAME</p>
	</div>
	<div class="directory">
		<ul>
			<li><a href="<?php echo "index.php?page=". htmlspecialchars("index")?>">accessibility</a></li>

			<li><a href="<?php echo "index.php?page=". htmlspecialchars("about")?>">contact Us</a></li>

			<li><a href="<?php echo "index.php?page=". htmlspecialchars("get-involved")?>">privacy</a></li>

			<li><a href="<?php echo "index.php?page=". htmlspecialchars("trustees")?>">policy</a></li>

			<li><a href="<?php echo "index.php?page=". htmlspecialchars("trustees")?>">sitemap</a></li>
		</ul>
	</div>
</footer>
</div>
<script>
$(document).ready(function(){
    $(".trigger").click(function(){
        $(".trigger").toggle();
        $(".momento").toggle();
        $("#mobile-menu").toggle("slow");
        $('body').addClass('noscroll');
    });
});
</script>

<script>
$(document).ready(function(){
    $(".momento").click(function(){
        $(".trigger").toggle();
        $(".momento").toggle();
        $("#mobile-menu").toggle();
        $('body').removeClass('noscroll');
    });
});
</script>



<!--Javascript-->
</body>
</html>