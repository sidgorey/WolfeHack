<?php
echo "Droplet created";
require 'C:\Wamp software\wamp\apps\phpmyadmin4.1.14\vendor\autoload.php';
echo "Droplet created";
use DigitalOceanV2\Adapter\BuzzAdapter;
use DigitalOceanV2\DigitalOceanV2;
echo "Droplet created";
// create an adapter with your access token which can be
// generated at https://cloud.digitalocean.com/settings/applications
$adapter = new BuzzAdapter('ebfc6803cddd96c826f181969c50e1481210046b02217a3841dbf33c20e45dd5');
echo "Droplet created";
// create a digital ocean object with the previous adapter
$digitalocean = new DigitalOceanV2($adapter);
echo "Droplet created";
$droplet = $digitalocean->droplet();
echo "Droplet created";
$created = $droplet->create('ayushi', 'nyc3', '512mb', 449676388);
$droplets = $droplet->getAll();
$neighbors = $droplet->getAllNeighbors();
$created = $droplet->create('ayushi', 'nyc3', '512mb', 'ubuntu-14-04-x64');
echo "Droplet created";
$myvolume = $volume->create('example', 'Block store for examples', 10, 'nyc1');
$volume->attach('506f78a4-e098-11e5-ad9f-000f53306ae1', ayushi, 'nyc3');
?>