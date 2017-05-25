<?php
$app->post('/api/MapboxDirection/getOptimalWalking', function ($request, $response) {
    /** @var \Slim\Http\Response $response */
    /** @var \Slim\Http\Request $request */
    /** @var \Models\checkRequest $checkRequest */

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken', 'coordinates']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $postData = $validateRes;
    }

    $url = $settings['apiUrl'] . "/mapbox/walking/";
    if (is_array($postData['args']['coordinates'])) {
        $url .= str_replace(" ", "", implode(';', $postData['args']['coordinates']));
    }
    else {
        $coordinateArray = [];
        foreach ($postData['args']['coordinates'] as $coordinate) {
            $coordinateArray[] = $coordinate['lng'] . ';' . $coordinate['lat'];
        }
        $url .= implode(';', $coordinateArray);
    }

    $params['access_token'] = $postData['args']['accessToken'];

    if (isset($postData['args']['alternatives']) && strlen($postData['args']['alternatives']) > 0) {
        $params['alternatives'] = $postData['args']['alternatives'];
    }
    if (isset($postData['args']['geometries']) && strlen($postData['args']['geometries']) > 0) {
        $params['geometries'] = $postData['args']['geometries'];
    }
    if (isset($postData['args']['overview']) && strlen($postData['args']['overview']) > 0) {
        $params['overview'] = $postData['args']['overview'];
    }
    if (isset($postData['args']['radiuses']) && strlen($postData['args']['radiuses']) > 0) {
        $params['radiuses'] = $postData['args']['radiuses'];
    }
    if (isset($postData['args']['steps']) && strlen($postData['args']['steps']) > 0) {
        $params['steps'] = $postData['args']['steps'];
    }
    if (isset($postData['args']['continueStraight']) && strlen($postData['args']['continueStraight']) > 0) {
        $params['continue_straight'] = $postData['args']['continueStraight'];
    }
    if (isset($postData['args']['bearings']) && strlen($postData['args']['bearings']) > 0) {
        $params['bearings'] = $postData['args']['bearings'];
    }
    if (isset($postData['args']['annotations']) && strlen($postData['args']['annotations']) > 0 ) {
        $params['annotations'] = $postData['args']['annotations'];
    }

    try {
        /** @var GuzzleHttp\Client $client */
        $client = $this->httpClient;
        $vendorResponse = $client->get($url, [
            'query' => $params
        ]);
        $vendorResponseBody = $vendorResponse->getBody()->getContents();
        if ($vendorResponse->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = json_decode($vendorResponse->getBody());
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($vendorResponseBody) ? $vendorResponseBody : json_decode($vendorResponseBody);
        }
    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $vendorResponseBody = $exception->getResponse()->getBody();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = json_decode($vendorResponseBody);
    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});