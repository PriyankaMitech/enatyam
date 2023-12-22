<?php
require_once 'config.php';
 
try {
    $client = new GuzzleHttp\Client(['base_uri' => 'https://zoom.us']);
 
    // $response = $client->request('POST', '/oauth/token', [
    //     "headers" => [
    //         "Authorization" => "Basic ". base64_encode(ZOOM_CLIENT_ID.':'.ZOOM_CLIENT_SECRET)
    //     ],
    //     'form_params' => [
    //         "grant_type" => "authorization_code",
    //         // "code" => $_GET['code'],
    //         "redirect_uri" => ZOOM_REDIRECT_URI
    //     ],
    // ]);
 
    // $token = json_decode($response->getBody()->getContents(), true);
 
    $db = new DB();
    $db->update_access_token(json_encode('63aff755428f4424ab05a984e1cc1eef'));
    echo "Access token inserted successfully.";
} catch(Exception $e) {
    echo $e->getMessage();
}