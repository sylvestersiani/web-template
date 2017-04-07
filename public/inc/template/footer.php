
<footer id="footer">
	<div class="directory">
		<ul>

            <li><a href="#" target="_blank">Twitter</a></li>
            <li><a href="#" target="_blank">Facebook</a></li>
			<li><a href="<?php echo "index.php?page=". htmlspecialchars("about")?>">contact Us</a></li>
			<li><a href="<?php echo "index.php?page=". htmlspecialchars("trustees")?>">sitemap</a></li>

		</ul>
	</div>

    <div class="copyright">
        <p> Copyright &copy; <?php echo date('Y') . ' Kwetu Charitas'; ?></p>
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