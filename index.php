<?php

require_once __DIR__.'/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader);

$stats = [];

if (!is_int($count = ($argv[1] ?? 100000))) {
    $count = 100000;
}

echo "Twig Benchmark\nUsage: php ".basename(__FILE__)." [number of iterations]\n\nRunning {$count} iterations.\n";


foreach (['embed', 'include', 'macro'] as $method) {

    // Each method will have its own cache to avoid interference
    $twig->setCache(new Twig\Cache\FilesystemCache(__DIR__.'/cache/'.$method));

    // Run once to generate cache
    $twig->render($method.'-runner.html.twig', [
        'count' => 1
    ]);

    $stats[$method] = [
        'start' => hrtime(true),
    ];

    // Run once to generate cache
    $twig->render($method.'-runner.html.twig', [
        'count' => $count
    ]);

    $stats[$method]['end'] = hrtime(true);
    $stats[$method]['elapsed'] = ($stats[$method]['end'] - $stats[$method]['start']);
}

uasort($stats, function($a, $b){
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
});

foreach ($stats as $method => $result) {
    echo $method."\t".round($result['elapsed']/1e+6)."ms\n";
}


