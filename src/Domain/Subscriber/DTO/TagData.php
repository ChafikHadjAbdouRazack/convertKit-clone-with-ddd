<?php

namespace Domain\Subscriber\DTO;

use Spatie\LaravelData\Data;

class TagData extends Data
{
    public function __construct(public readonly ?int $id, public readonly string $title) {}
}
