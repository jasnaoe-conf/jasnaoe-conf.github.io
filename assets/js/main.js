<!-- main_header sticky  -->
<script>
	$(window).scroll(function(){
		var top = $(window).scrollTop();

		if(top > 75){
			$('.main_header').addClass('fixed');
		}else{
			$('.main_header').removeClass('fixed');
		}
	})
</script>