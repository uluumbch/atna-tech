<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/consulting', function () {
    return view('consulting');
})->name('consulting');

Route::get('/office', function () {
    return view('office');
})->name('office');

Route::get('/s', function () {
    $httpClient = new \GuzzleHttp\Client();
    $response = $httpClient->get('https://www.google.com/maps/place/Atna+Tech/@-6.2138556,106.8304643,19z/data=!4m8!3m7!1s0x2e69f5005697bd6f:0x1ec34cb7f61cb4d6!8m2!3d-6.2138569!4d106.831108!9m1!1b1!16s%2Fg%2F11wnjc6p1p?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D');
    $htmlString = (string) $response->getBody();

    dd($htmlString);
    //add this line to suppress any warnings
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTML($htmlString);
    $xpath = new DOMXPath($doc);
    $titles = $xpath->evaluate('//*[@id="QA0Szd"]/div/div/div[1]/div[2]/div/div[1]/div/div/div[2]/div[9]/div[21]/div/div/div[2]/div[2]/div[1]/button/div[1]');
    $extractedTitles = [];
    foreach ($titles as $title) {
        $extractedTitles[] = $title->textContent . PHP_EOL;
    }
    dd($extractedTitles);
});
