<?php

/**
 *
 * Here i'm going to write regex for match any youtube url and get video ID using preg_match()
 *
*/
// 

	function getYoutubeId( $url ) {
		$pattern = "%^(?:https?://)?(?:www\.)?(?:youtu\.be/ | youtube\.com(?:/embed/ | /v/ | .*v=))([\w-]{10,12})($|&).*$%x";
		$result = preg_match( $pattern, $url, $matches );
			if ( false !== $result ) {
			return $matches[1];
			}
		return false;
	}

	$url = "https://www.youtube.com/watch?v=C0DPdy98e4c";
	echo getYoutubeId($url);