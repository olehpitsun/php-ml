
<?php

require_once 'vendor/autoload.php';

use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\Network\MultilayerPerceptron;
$mlp = new MLPClassifier(4, [2], ['a', 'b', 'c']);


$mlp->train(
    $samples = [[1, 0, 0, 0], [0, 1, 1, 0], [1, 1, 1, 1], [0, 0, 0, 0]],
    $targets = ['a', 'a', 'b', 'c']
);

echo json_encode($mlp->predict([[1, 1, 1, 1], [0, 0, 0, 0]])) ;





?>
