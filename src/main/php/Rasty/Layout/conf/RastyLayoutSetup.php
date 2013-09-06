<?php

namespace Rasty\Layout\conf;
use Rasty\app\LoadRasty;

class RastyLayoutSetup {
	
    
    /**
     * inicializamos phprasty layout
     */
    static public function initialize( $sourcesPath="", $rastyHome="" ){
		
    	$rastyLoader = LoadRasty::getInstance();
    	$rastyLoader->loadXml(dirname(__DIR__) . '/conf/rasty.xml',  $sourcesPath, $rastyHome );
    	    	
    }
}