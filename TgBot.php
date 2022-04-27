<?php

use OxMohsen\TgBot\Config;
use Longman\TelegramBot\TelegramLog;
use TelegramBot\TelegramBotManager\BotManager;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Exception\TelegramLogException;

require_once __DIR__ . '/vendor/autoload.php';

/** @var array $config */
$config = [
    'api_key'      => Config::BOT_TOKEN,
    'bot_username' => Config::BOT_USERNAME,
    'secret'       => Config::SECRET,
    'webhook'      => [
        'url' => Config::WEBHOOK_URL,
        // (string) Path to a self-signed certificate (if necessary).
        // 'certificate' => __DIR__ . '/server.crt',
        // (int) Maximum allowed simultaneous HTTPS connections to the webhook.
        // 'max_connections' => 20,
        // (array) List the types of updates you want your bot to receive.
        // 'allowed_updates' => ['message', 'edited_channel_post', 'callback_query'],
    ],
    'validate_request' => false,
    // // telegram valid ip, get it from https://core.telegram.org/bots/webhooks#the-short-version
    // 'validate_request' => true
    // 'valid_ips'    => ['149.154.160.0/20', '91.108.4.0/22'],
    'commands'     => ['paths' => Config::COMMAND_PATH],
    'admins'       => Config::ADMINS,
    // 'mysql'        => Config::SQL_DB,
    'limiter'      => ['enabled' => true, 'options' => ['interval' => 0.5]],
    // Logging (Debug, Error and Raw Updates)
    // 'logging'  => [
    //     'debug'  => __DIR__ . '/php-telegram-bot-debug.log',
    //     'error'  => __DIR__ . '/php-telegram-bot-error.log',
    //     'update' => __DIR__ . '/php-telegram-bot-update.log',
    // ],
    // Set custom Upload and Download paths
    // 'paths'        => [
    //     'download' => __DIR__ . '/Download',
    //     'upload'   => __DIR__ . '/Upload',
    // ],
];

try {
    $bot = new BotManager($config);
    $bot->run();
} catch (TelegramException $e) {
    TelegramLog::error($e);
    // Uncomment this to output any errors (ONLY FOR DEVELOPMENT!)
    // echo $e;
} catch (TelegramLogException $e) {
    // Uncomment this to output log initialization errors (ONLY FOR DEVELOPMENT!)
    // echo $e;
}
