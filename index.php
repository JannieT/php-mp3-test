<?php

require __DIR__ . '/vendor/autoload.php';

$source = __DIR__ . "/long.mp3";
$target = __DIR__ . "/clipped.mp3";
echo "clipping $source\n";
\falahati\PHPMP3\MpegAudio::fromFile($source)->trim(2, 2)->saveFile($target);
echo "$target\n";
