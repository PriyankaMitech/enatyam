<?php 
require_once 'vendor/autoload.php';
require_once "class-db.php";
 
define('CLIENT_ID', 'VgnyFhzT6qtROlQSFBDoQ');
define('CLIENT_SECRET', 'Akej79tleg875RTEurCLxscujZ76Zg9Y');
define('REDIRECT_URI', 'http://localhost/enatyam/callback.php');
 
define('ZOOM_CLIENT_ID', 'RNpVBQ3rQhWtiqo5WTcgow');
define('ZOOM_CLIENT_SECRET', 'TJgzrKmgOFn49Riw72bljPvym7R0BIMO');
define('ZOOM_REDIRECT_URI', 'https://enatyam.nahichaltahai.org/');
define('ZOOM_TESTABLE_URI', 'https://zoom.us/oauth/authorize?client_id=RNpVBQ3rQhWtiqo5WTcgow&response_type=code&redirect_uri=https%3A%2F%2Fenatyam.nahichaltahai.org%2F');

// https://zoom.us/oauth/authorize?response_type=code&client_id=k54o2bTTO6PXtdAZHiXdA&redirect_uri=https://enatyam.nahichaltahai.org/
// <a href="https://zoom.us/oauth/authorize?response_type=code&client_id=k54o2bTTO6PXtdAZHiXdA&redirect_uri=https://enatyam.nahichaltahai.org/" target="_blank" rel="noopener noreferrer"><img src="https://marketplacecontent.zoom.us/zoom_marketplace/img/add_to_zoom.png" height="32" alt="Add to ZOOM" /></a>

// https://zoom.us/oauth/authorize?response_type=code&client_id=k54o2bTTO6PXtdAZHiXdA&redirect_uri=https://enatyam.nahichaltahai.org/
// https://zoom.us/oauth/authorize?response_type=code&client_id=k54o2bTTO6PXtdAZHiXdA&redirect_uri=https://enatyam.nahichaltahai.org/