<?php

require 'vendor/autoload.php';

$openstack = new OpenStack\OpenStack([
    'authUrl' => '{authUrl}',
    'region'  => '{region}',
    'user'    => [
        'id'       => '{userId}',
        'password' => '{password}'
    ],
]);

$service = $openstack->networkingV2();
$healthMonitor = $service->getLoadBalancerHealthMonitor('{healthMonitorId}');

$healthMonitor->retrieve();
