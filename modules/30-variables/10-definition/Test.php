<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use function HexletBasics\Tests\expectOutput;

$expected = 'What Is Dead May Never Die!';
expectOutput($expected);
