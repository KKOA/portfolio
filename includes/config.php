<?php 

//root directory
defined('ROOTFLD') ? null : define("ROOTFLD", '/portfolio-15-05-2017');

//Wifi-WiMAX-LTE directory
defined('WIFIWIMAXLTEFLD') ? null : define("WIFIWIMAXLTEFLD", ROOTFLD.'/wifi-wimax-lte');

//Styles directory
defined('STYLEFLD') ? null : define("STYLEFLD", ROOTFLD.'/styles');

//Scripts directory
defined('SCRIPTFLD') ? null : define("SCRIPTFLD", ROOTFLD.'/scripts');

//images directory
defined('IMGFLD') ? null : define("IMGFLD", ROOTFLD.'/imgs');

//Video directory
defined('VIDEOFLD') ? null : define("VIDEOFLD", ROOTFLD.'/video');

//Download directory
defined('DOWNLOADFLD') ? null : define("DOWNLOADFLD", ROOTFLD.'/downloads');

//Digital Communications Directory
defined('DIGTALFLD') ? null : define("DIGTALFLD", WIFIWIMAXLTEFLD.'/digital-com');

//Wi-Fi Directory
defined('WIFIFLD') ? null : define("WIFIFLD", WIFIWIMAXLTEFLD.'/wifi');

//WiMAX Directory
defined('WIMAXFLD') ? null : define("WIMAXFLD", WIFIWIMAXLTEFLD.'/wimax');

//LTE Directory
defined('LTEFLD') ? null : define("LTEFLD", WIFIWIMAXLTEFLD.'/lte');

//Support Directory
defined('SUPPORTFLD') ? null : define("SUPPORTFLD", WIFIWIMAXLTEFLD.'/support');

//Summary Directory
defined('SUMMARYFLD') ? null : define("SUMMARYFLD", WIFIWIMAXLTEFLD.'/summary');


//Quiz Directory
defined('QUIZFLD') ? null : define("QUIZFLD", WIFIWIMAXLTEFLD.'/quiz');




//Database Condifuration
require('dbconfig.php');
//Host

?>