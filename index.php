<?php
include 'vendor/autoload.php';

use Strava\API\OAuth;
use Strava\API\Exception;

use Pest;
use Strava\API\Client;
use Strava\API\Service\REST;


use Conco\Presentation\printAthleteInfos;




try {
    $options = array(
        'clientId'     => 14277,
        'clientSecret' => 'fda09fc12c68cbee802380ee7d42a909d9bc926e',
        'redirectUri'  => 'https://dislexstrava.herokuapp.com/index.php'
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

        try {
            $adapter = new Pest('https://www.strava.com/api/v3');
            $service = new REST($token, $adapter);  // Define your user token here..
            $client = new Client($service);

            $athlete = $client->getAthlete();
            
            //print_r($athlete);

            printAthleteInfos($athlete);

            $activities = $client->getAthleteActivities();
            //print_r($activities);

            //$club = $client->getClub(9729);
            //print_r($club);
        } catch(Exception $e) {
            print $e->getMessage();
        }


        
        print '</body></html>';
    }
} catch(Exception $e) {
    print $e->getMessage();
}

