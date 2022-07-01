<?php

function normalizePhoneNumber($phoneNumber)
{
    return $phoneNumber; // todo
}

function getPublicImage($path)
{
    return getenv('APP_URL'). "/storage/". $path;
}


function getSingleImageShutterstock($id)
{
    $SHUTTERSTOCK_API_TOKEN = getenv('SHUTTERSTOCK_API');

    $options = [
        CURLOPT_URL => "https://api.shutterstock.com/v2/images/$id",
        CURLOPT_USERAGENT => "php/curl",
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $SHUTTERSTOCK_API_TOKEN"
        ],
        CURLOPT_RETURNTRANSFER => 1
    ];

    $handle = curl_init();
    curl_setopt_array($handle, $options);
    $response = curl_exec($handle);
    curl_close($handle);

    $result = json_decode($response);
    if(@$result->message == "Not Found" or empty($result))
        abort(404);
    return $result;
}

function getSimilarImagesShutterstock($product)
{
    $SHUTTERSTOCK_API_TOKEN = getenv('SHUTTERSTOCK_API');

    if($product && @$product->categories[0]->name)
    {
        $queryFields = [
            "query" => $product->categories[0]->name
        ];

        $options = [
            CURLOPT_URL => "https://api.shutterstock.com/v2/images/search?" . http_build_query($queryFields),
            CURLOPT_USERAGENT => "php/curl",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $SHUTTERSTOCK_API_TOKEN"
            ],
            CURLOPT_RETURNTRANSFER => 1
        ];

        $handle = curl_init();
        curl_setopt_array($handle, $options);
        $response = curl_exec($handle);
        curl_close($handle);

        $decodedResponse = json_decode($response);
        return $decodedResponse;
    }

    return [];
}
