<?php
include 'vendor/autoload.php';

use Strava\API\OAuth;
use Strava\API\Exception;

try {
    $options = array(
        'clientId'     => 14277,
        'clientSecret' => 'fda09fc12c68cbee802380ee7d42a909d9bc926e',
        'redirectUri'  => 'https://dislexstrava.herokuapp.com/callback.php'
    );
    $oauth = new OAuth($options);

    if (!isset($_GET['code'])) {
        print '<a href="'.$oauth->getAuthorizationUrl().'">connect</a>';
    } else {
        $token = $oauth->getAccessToken('authorization_code', array(
            'code' => $_GET['code']
        ));
        print $token;
    }
} catch(Exception $e) {
    print $e->getMessage();
}

