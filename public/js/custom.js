// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '-tab"]').tab('show');
} //add a suffix

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})

// footer

// <script type="text/javascript">
// 		$('ul.foot li a').on('click', function(e){
// 			$(".nav.nav-pills").find('.active').removeClass('active');
// 			$(".tab-content").find('.active').removeClass('active');
// 			// console.log($(this).attr('href'));
// 			var link = $(this).attr('href');
			
			
// 			$(link).addClass('active');
// 		})
// 	</script>