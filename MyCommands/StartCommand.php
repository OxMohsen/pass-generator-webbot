<?php

namespace Longman\TelegramBot\Commands\SystemCommands;

use OxMohsen\TgBot\Config;
use OxMohsen\TgBot\Messages;
use Longman\TelegramBot\Entities\Keyboard;
use Longman\TelegramBot\Entities\WebAppInfo;
use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\KeyboardButton;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Exception\TelegramException;

class StartCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'start';

    /**
     * @var string
     */
    protected $description = 'start command';

    /**
     * @var string
     */
    protected $usage = '/start';

    /**
     * @var string
     */
    protected $version = '1.0';

    /**
     * @var bool
     */
    protected $private_only = true;

    /**
     * Main command execution.
     *
     * @throws TelegramException
     *
     * @return ServerResponse
     */
    public function execute(): ServerResponse
    {
        $keyboard = new Keyboard([
            new KeyboardButton([
                'text'    => Messages::WEBAPP_KEYBOARD_TEXT,
                'web_app' => new WebAppInfo(['url' => Config::WEBAPP_URL]),
            ]),
        ]);
        $keyboard->setResizeKeyboard(true);

        return $this->replyToChat(Messages::START_MESSAGE, ['reply_markup' => $keyboard]);
    }
}
