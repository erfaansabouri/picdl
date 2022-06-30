<?php

function normalizePhoneNumber($phoneNumber)
{
    return $phoneNumber; // todo
}

function getPublicImage($path)
{
    return getenv('APP_URL'). "/storage/". $path;
}
