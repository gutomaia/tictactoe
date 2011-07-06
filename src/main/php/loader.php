<?php
if (!function_exists('__autoload')) {
	function __autoload($classname) {
		if (preg_match('@^(osapi)@sie', $classname)) {
			$base = 'opensocial-php-client' . DIRECTORY_SEPARATOR .
			'osapi' . DIRECTORY_SEPARATOR;
			$providers = $base . 'providers' . DIRECTORY_SEPARATOR;
			$io = $base . 'io' . DIRECTORY_SEPARATOR;
			$storage = $base . 'storage' . DIRECTORY_SEPARATOR;
			$external = $base . 'external' . DIRECTORY_SEPARATOR;
			$auth = $base . 'auth' . DIRECTORY_SEPARATOR;
			$logger = $base . 'logger' . DIRECTORY_SEPARATOR;
			//TODO: add all!!
			require_once ($base . 'osapi.php');
			require_once ($providers . 'osapiGoogleProvider.php');
			require_once ($providers . 'osapiProvider.php');
			require_once ($io . 'osapiCurlProvider.php');
			require_once ($io . 'osapiHttpProvider.php');
			require_once ($storage . 'osapiFileStorage.php');
			require_once ($storage . 'osapiStorage.php');
			require_once ($external . 'OAuth.php');
			require_once ($auth . 'osapiAuth.php');
			require_once ($io . 'osapiIO.php');
			require_once ($logger . 'osapiLogger.php');
			require_once ($logger . 'osapiLogger.php');
		} else if ($classname == 'TwitterOAuth') {
			$base = 'twitteroauth' . DIRECTORY_SEPARATOR . 'twitteroauth' . DIRECTORY_SEPARATOR;
			require_once ($base . 'OAuth.php');
			require_once ($base . 'twitteroauth.php');
		} else {
			$classpath = str_replace('_',DIRECTORY_SEPARATOR, $classname);
			require_once ($classpath.'.php');
		}
	}
}