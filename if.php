	<?php
			$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
			echo $iPhone;
			$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
			echo $Android;

			$web = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

			if( $web == 0 ){
				header("Location: https://beeco.mn"); /* Redirect browser */
				exit();
			}

			if($Android) {
				header("Location: https://play.google.com/store/apps/details?id=com.beeco.ridesharing&hl=en"); /* Redirect browser */
				exit();
			}

			if($iPhone) {
				header("Location: https://itunes.apple.com/us/app/facebook/id284882215?mt=8"); /* Redirect browser */
				exit();
			}
	?>
