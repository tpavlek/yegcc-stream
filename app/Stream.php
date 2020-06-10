<?php

namespace App;

class Stream
{

    public string $name;
    public string $youtube_id;

    public function __construct($name, $youtube_id)
    {
        $this->name = $name;
        $this->youtube_id = $youtube_id;
    }

    public static function yegcc()
    {
        return new self('#yegcc', 'UCvNVcW_fAV0J8qXOEzomycg');
    }

    public static function epsb()
    {
        return new self('EPSB', 'UCbM-KEF2IX0MqQ63eM0lL5g');
    }

    public function isYegcc()
    {
        return $this->name === '#yegcc';
    }

    public function isEpsb()
    {
        return $this->name === 'EPSB';
    }
}
