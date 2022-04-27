<?php

namespace Longman\TelegramBot\Commands\SystemCommands;

use OxMohsen\TgBot\Messages;
use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;

class GenericmessageCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'genericmessage';

    /**
     * @var string
     */
    protected $description = 'Handle generic message';

    /**
     * @var string
     */
    protected $version = '1.0';

    /**
     * Main command execution.
     *
     * @return ServerResponse
     */
    public function execute(): ServerResponse
    {
        $web_app_data = $this->getMessage()->getWebAppData();
        if ($web_app_data) {
            return $this->replyToChat(
                sprintf(Messages::WEBAPP_DATA_MESSAGE, $web_app_data->getData()),
                ['parse_mode' => 'Markdown']
            );
        }

        return $this->telegram->executeCommand('start');
    }
}
