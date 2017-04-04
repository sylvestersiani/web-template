
<footer id="footer">
	<div class="copyright">
		<p> &copy; <?php echo date('d-M-Y') . ' Kwetu Charitas'; ?></p>
	</div>
	<div class="directory">
		<ul>


			<li><a href="<?php echo "index.php?page=". htmlspecialchars("about")?>">contact Us</a></li>

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