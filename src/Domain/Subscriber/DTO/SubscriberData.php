<?php

namespace Domain\Subscriber\DTO;

use Illuminate\Validation\Rule;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class SubscriberData extends Data
{
    public function __construct(public readonly ?int $id,
        public readonly string $email,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly ?DataCollection $tags,
        public readonly ?FormData $form,
    ) {}

    public static function rules(): array{
        return [
            'email' => ['required', 'email',Rule::unique('subscribers','email')->ignore(request('subscriber'))],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'tag_ids' => ['nullable', 'sometimes','array'],
            'form_id' => ['nullable', 'sometimes','exists:forms,id'],
        ];
    }
}
