<script type="text/javascript">
	$('#cmbtn').click(function () {
		$("#cat__top-bar").toggleClass('cat__invisible');
		$("#cat__content").toggleClass('content__margin');
		icon = $(this).find("i");
		icon.toggleClass("fa-chevron-up fa-chevron-down")
	})
	$( document ).ready(function() {
    var ww = $(window).width();
		if (ww < 767){
			$("#topnavtoggler").toggleClass('collapsed');
		}
});

</script>
