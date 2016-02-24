<?php

class oo
{
    public function test()
    {
        return 0;
    }
}
$test = function () {
    return 0;
};

function test() {
    return 0;
}

$sut = new oo();

$nb_occur=500000;


$time_start = microtime(true);

for ($i=0 ; $i<$nb_occur; $i++)
{
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
    $test2 = 0;
}

$time_end = microtime(true);
$time = $time_end - $time_start;

echo 'Durée nofunc: '.$time.' secondes' . "\n";


$time_start = microtime(true);

for ($i=0 ; $i<$nb_occur; $i++)
{
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
    $test2 = test();
}

$time_end = microtime(true);
$time = $time_end - $time_start;

echo 'Durée func: '.$time.' secondes' . "\n";

$time_start = microtime(true);

for ($i=0 ; $i<$nb_occur; $i++)
{
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
    $test2 = $test();
}

$time_end = microtime(true);
$time = $time_end - $time_start;

echo 'Durée anonym: '.$time.' secondes' . "\n";

$time_start = microtime(true);

for ($i=0 ; $i<$nb_occur; $i++)
{
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
    $test2 = $sut->test();
}

$time_end = microtime(true);
$time = $time_end - $time_start;

echo 'Durée oop : '.$time.' secondes' . "\n";
