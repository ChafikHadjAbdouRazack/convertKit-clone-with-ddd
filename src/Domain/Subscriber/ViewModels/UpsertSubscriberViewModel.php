<?php

namespace Domain\Subscriber\ViewModels;

use Domain\Shared\ViewModels\ViewModel;
use Domain\Subscriber\DTO\FormData;
use Domain\Subscriber\DTO\SubscriberData;
use Domain\Subscriber\DTO\TagData;
use Domain\Subscriber\Models\Form;
use Domain\Subscriber\Models\Subscriber;
use Domain\Subscriber\Models\Tag;
use Illuminate\Support\Collection;

class UpsertSubscriberViewModel extends ViewModel
{
    public function __construct(public readonly ?Subscriber $subscriber = null)
    {
    }

    public function subscriber(): ?SubscriberData{
        if (!$this->subscriber){
            return null;
         }
        return SubscriberData::from($this->subscriber->load('tags','form'));
    }

    public function tags(): Collection{
        return Tag::all()->map(function (Tag $tag){
            return TagData::from($tag);
        });
    }

    public function forms(): Collection{
        return Form::all()->map(function (Form $form){
            return FormData::from($form);
        });
    }

}
