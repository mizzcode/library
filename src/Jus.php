<?php

namespace Mizz\Library;

class Jus
{
    public ?string $buah;
    public int $stok;

    public function __construct(string $buah, int $stok)
    {
        $this->buah = $buah;
        $this->stok = $stok;
    }
}
