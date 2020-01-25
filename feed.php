<?php 
header('Content-Type: text/plain');
$url = 'https://otakudesu.org/feed/';

function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('<link>https://otakudesu.org/', '<link>https://miyamori.sinkaroid.org/application/controllers/get.php?anti=', $ambilkata);

    return $ambilkata;
}
echo wordFilter(file_get_contents($url));