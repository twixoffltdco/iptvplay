<?php

if(!isset($_COOKIE["PreloaderReact1"])) 
{
	setcookie("PreloaderReact1", 1, time()+900);
	require_once 'ddos.html';
}
else
{
	$phpVersion = phpversion();
	if (version_compare($phpVersion, '7.3.3', '<'))
	{
		die("PHP 7.0.0 or newer is required. $phpVersion does not meet this requirement. Please ask your host to upgrade PHP.");
	}

	$dir = __DIR__;
	require($dir . '/src/XF.php');

	XF::start($dir);

	if (\XF::requestUrlMatchesApi())
	{
		\XF::runApp('XF\Api\App');
	}
	else
	{
		\XF::runApp('XF\Pub\App');
	}	    	
}