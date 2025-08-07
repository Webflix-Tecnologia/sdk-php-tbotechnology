<?php

namespace TboTechnology\Core;

class TboHolidaysHotel extends TboTechnologyController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::PRODUCTION_HOLIDAYS
        ]);
        parent::__construct($config);
    }
}