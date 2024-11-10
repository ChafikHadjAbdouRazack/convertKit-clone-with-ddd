<?php

namespace Domain\Subscriber\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends BaseModel
{
    public function subscribers(): HasMany
    {
        return $this->hasMany(Subscriber::class);
    }
}
