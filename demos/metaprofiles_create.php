<?php

require_once(dirname(__FILE__) . "/../Ziggeo.php");

$opts = getopt("", array("token:", "privatekey:", "title:"));

$ziggeo = new Ziggeo($opts["token"], $opts["privatekey"]);

$ziggeo->metaProfiles()->create(array(
	"title" => $opts["title"]
));