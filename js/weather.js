$(document).ready(function(){
			
			
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

			
		});
