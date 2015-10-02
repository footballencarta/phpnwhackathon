<?php

$i = 126433562;

while ($i < PHP_INT_MAX) {
  $json = json_decode(file_get_contents('https://www.dominos.co.uk/Questionnaire/GetPizzaTrackerStatus?orderId=' . $i));

  print $i . PHP_EOL;

  if($json->step1Css == 'is-step-in-progress') {
    print '1 ' . $json->orderStage . PHP_EOL;
  }

  if($json->step2Css == 'is-step-in-progress') {
    print '2 ' . $json->orderStage . PHP_EOL;
  }

  if($json->step3Css == 'is-step-in-progress') {
    print '3 ' . $json->orderStage . PHP_EOL;
  }

  if($json->step4Css == 'is-step-in-progress') {
    print '4 ' . $json->orderStage . PHP_EOL;
  }

  if($json->step5Css == 'is-step-in-progress') {
    print '5 ' . $json->orderStage . PHP_EOL;
  }

  $i++;
}

print "done with nowt :(";
