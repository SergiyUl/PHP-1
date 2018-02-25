<?php

include __DIR__. '/function.php';

assert(-15 === discriminant(2, -9, 12));
assert(12 === discriminant(1, -8, 13));
assert(0 === discriminant(1, -6, 9));