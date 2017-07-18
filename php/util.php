<?php
	/**
	 * Determines if we are running on the live server (or locally)
	 *
	 */
	function isLive() {
		return !preg_match('/experiments.dev|localhost/', $_SERVER['SERVER_NAME']);
	}
?>