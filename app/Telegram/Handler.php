<?php

namespace App\Telegram;

use DefStudio\Telegraph\Enums\ChatActions;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Stringable;

class Handler extends WebhookHandler
{
    protected function handleUnknownCommand(Stringable $text): void
    {
        if ($text->value() == '/start') {
            $this->reply(message: "Рад тебя видеть!");
        } else {
            $this->reply(message: "Такая команда нет!");
        }
    }
}