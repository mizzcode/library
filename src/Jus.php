<?php

namespace Mizz\Library;

class Jus
{
    public ?string $buah;
    public int $stok;
}

class JusAnggur extends Jus
{
    public ?string $buah = "Anggur";
    public int $stok = 100;
}