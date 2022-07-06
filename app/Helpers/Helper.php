<?php

function normalizePhoneNumber($phoneNumber)
{
    return $phoneNumber; // todo
}

function getPublicImage($path)
{
    return getenv('APP_URL'). "/storage/". $path;
}



function getSubscribeInfoShutterstock()
{
    $SHUTTERSTOCK_API_TOKEN = getenv('SHUTTERSTOCK_API');

    $options = [
        CURLOPT_URL => "https://api.shutterstock.com/v2/user/subscriptions",
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
    dd($decodedResponse);
}

function licenseShutterstock($image_id, $subscription_id)
{
    $SHUTTERSTOCK_API_TOKEN = getenv('SHUTTERSTOCK_API');

    $body = [
        "images" => [
            [
                "image_id" => (string)($image_id),
                "price"=> 0,
                "metadata"=> [
                    "customer_id"=> "abc"
                ]
            ]
        ]
    ];
    $encodedBody = json_encode($body);

    $options = [
        CURLOPT_URL => "https://api.shutterstock.com/v2/images/licenses",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $encodedBody,
        CURLOPT_USERAGENT => "php/curl",
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $SHUTTERSTOCK_API_TOKEN",
            "Content-Type: application/json"
        ],
        CURLOPT_RETURNTRANSFER => 1
    ];

    $handle = curl_init();
    curl_setopt_array($handle, $options);
    $response = curl_exec($handle);
    curl_close($handle);

    $decodedResponse = json_decode($response);
    if(!empty(@$decodedResponse->data[0]->download->url))
    {
        return $decodedResponse->data[0]->download->url;
    }
    return null;
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

function getImagesShutterstock($query, $page = 1, $per_page = 10)
{
    $SHUTTERSTOCK_API_TOKEN = getenv('SHUTTERSTOCK_API');

    $queryFields = [
        "query" => $query,
        "page" => $page,
        "per_page" => $per_page,
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

    return [];
}

function getSourceCreditForSingleFile($source_id, $file_type = 'image')
{
    $source = \App\Models\Source::query()
        ->where('id', $source_id)->first();

    if ($source)
    {
        switch ($file_type){
            case 'image':
                return $source->cost_per_image;
            case 'vector':
                return $source->cost_per_vector;
            case 'film':
                return $source->cost_per_film;
        }
    }

    return 1;
}
