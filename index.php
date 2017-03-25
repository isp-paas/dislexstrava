<?php
include 'vendor/autoload.php';

use Strava\API\OAuth;
use Strava\API\Exception;

try {
    $options = array(
        'clientId'     => 14277,
        'clientSecret' => 'fda09fc12c68cbee802380ee7d42a909d9bc926e',
        'redirectUri'  => 'https://dislexstrava.herokuapp.com/app.php'
    );
    $oauth = new OAuth($options);

    if (!isset($_GET['code'])) {
        print '<html><body>';
        print ' <h1>Autenticazione Richiesta</h1>';
        print '<a href="'.$oauth->getAuthorizationUrl().'">Connect a Strava</a>';
        print '</body></html>';
    } else {
        $token = $oauth->getAccessToken('authorization_code', array(
            'code' => $_GET['code']
        ));

        print '<html><body>';
        print '<h1>Benvenuto in Dislex Strava</h1>';
        print '<p>Token per autenticazione '.$token.'</p>';
        
        print '</body></html>';
    }
} catch(Exception $e) {
    print $e->getMessage();
}

