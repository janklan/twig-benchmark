<?php

require_once __DIR__.'/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader);

$stats = [];

if (isset($argv[1]) && is_numeric($argv[1])) {
    $count = (int)$argv[1];
} else {
    $count = 100000;
}

echo "Twig Benchmark\nUsage: php ".basename(__FILE__)." [number of iterations]\n\nRunning {$count} iterations.\n";

$methods = ['embed', 'include', 'macro'];

// Randomise the order of tests to rule out the order's effect on the outcome
shuffle($methods);

foreach ($methods as $method) {

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
    if ($a['elapsed'] === $b['elapsed']) {
        return 0;
    }
    return ($a['elapsed'] > $b['elapsed']) ? -1 : 1;
});

foreach ($stats as $method => $result) {
    echo $method."\t".round($result['elapsed']/1e+6)."ms\n";
}


