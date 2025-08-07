<?php

namespace TboTechnology\Core;

use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\PublicKeyLoader;

class TboTechnologyController extends TboTechnologyHttp {

    public function __construct(array $config = []) {        
        parent::__construct($config);
    }

}
