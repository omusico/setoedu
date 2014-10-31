$(document).ready(function(){
			
			$('#camera_wrap_1').camera({
				thumbnails: true,
				loader: 'bar'
			});
			
			$("#eventCalendarDefault").eventCalendar({
							eventsjson: 'data/event.json', // link to events json
							eventsScrollable: true
						});
						
			$(".vscroll").jCarouselLite({
					vertical: true,
					hoverPause:true,
					visible: 3,
					auto:3000,
				speed:1000
			});

			$("ul#ticker01").liScroll();
			
			$("select").change(function () {
  				$("select option:selected").each(function () {
            				str = $(this).text();
					if (str == 'Tokyo') {
						$("#city").load("tokyo.php")
					} 
					if (str == 'Osaka') {
						$("#city").load("osaka.php")
					}
					if (str == 'Fukuoka') {
						$("#city").load("fukuoka.php")
					}
					if (str == 'Kathmandu') {
						$("#city").load("kathmandu.php")
					}
				});
 			}).change();

			var showChar = 109;
			var ellipsestext = "...";
			var moretext = "more";
			var lesstext = "less";
			$('.more').each(function() {
				var content = $(this).html();

				if(content.length > showChar) {

					var c = content.substr(0, showChar);
					var h = content.substr(showChar, content.length - showChar);

					var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

					$(this).html(html);
				}

			});

			$(".morelink").click(function(){
				if($(this).hasClass("less")) {
					$(this).removeClass("less");
					$(this).html(moretext);
				} else {
					$(this).addClass("less");
					$(this).html(lesstext);
				}
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
				return false;
			});
		});
