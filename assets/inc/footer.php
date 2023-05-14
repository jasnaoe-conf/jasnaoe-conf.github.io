	<nav class="pagetop" style="display: block;">
		<a href="#" data-scroll>
			<i class="fas fa-chevron-up"></i>
		</a>
	</nav>

	<footer class="main_footer">
		<div class="ft_wrap">
			<small>
				©2023 公益社団法人 日本船舶海洋工学会
			</small>
			</div><!-- ft_wrap -->
	</footer><!-- main_footer -->

	<script src="<?php echo $Path; ?>assets/js/jquery.min.js"></script>
		<script>
			$(function() {
				$('.tab1').on('click', function() {
					var tabWrap = $(this).parents('.tt-wrap');
					var tabBtn = tabWrap.find(".tab1");
					var tabContents = tabWrap.find('.content1');
					tabBtn.removeClass('active');
					$(this).addClass('active');
					var elmIndex = tabBtn.index(this);
					tabContents.removeClass('active');
					tabContents.eq(elmIndex).addClass('active');

					//Zoomリンク切り替え
					tabWrap.find(".stream_info>div").removeClass('active').eq(elmIndex).addClass('active');
				});

				<?php
				ini_set( 'display_errors', 0);
				date_default_timezone_set('Asia/Tokyo');

				//日時スクロール
				$date = $_GET["d"] ? $_GET["d"] : date("Y-m-d");
				$h = date("H");

				//分を20分単位
				$i = date("i");
				if( 40 <= $i && $i < 60 ){
					$i = "40";
				}else if( 20 <= $i && $i < 40 ){
					$i = "20";
				}else{
					$i = "00";
				}
				?>
                //var date = "2022-05-27";
                var date = "<?php echo $date; ?>";
				if($(".wrap_inner").find("#"+date).length > 0){
					<?php
					//日までの距離
					?>
					var moveto = $(".wrap_inner").find("#"+date).position().top;
					if( $(".wrap_inner").find("#"+date +" .time_table tr.<?php echo $h.$i; ?>").length > 0 ){
						<?php
						//時間までの距離（Header:100, fixed_hd:98 を引く）
						?>
						var moveto = $(".wrap_inner").find("#"+date +" tr.<?php echo $h.$i; ?>").position().top;
						moveto -= 100 + 98;
					}
					$("body, html").animate({scrollTop:moveto + "px" }, 500);
					$(".time_table tr.<?php echo $h.$i; ?>").addClass("col1");
				}

			});

		</script>

</body>
</html>