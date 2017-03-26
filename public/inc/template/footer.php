</div>
<footer id="footer">
	
</footer>
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