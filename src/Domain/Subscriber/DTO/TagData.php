<?php

namespace Domain\Subscriber\DTO;

use Spatie\LaravelData\Concerns\WithDeprecatedCollectionMethod;
use Spatie\LaravelData\Data;

class TagData extends Data
{
    use WithDeprecatedCollectionMethod;
    public function __construct(public readonly ?int $id, public readonly string $title) {}
}
