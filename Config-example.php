<?php

namespace OxMohsen\TgBot;

class Config
{
    /**
     * your bot token (get it from botfather).
     *
     * @var string
     */
    public const BOT_TOKEN = 'YOUR_BOT_TOKEN';

    /**
     * your bot username `without @`.
     *
     * @var string
     */
    public const BOT_USERNAME = 'YOUR_BOT_USERNAME';

    /**
     * Secret key required to access the webhook.
     *
     * @var string
     */
    public const SECRET = 'SUPPER_SECRET_TEXT';

    /**
     * the url of webhook file.
     *
     * @var string
     */
    public const WEBHOOK_URL = 'https://your-domain/path/to/TgBot.php';

    /**
     * the url of web app file.
     *
     * @var string
     */
    public const WEBAPP_URL = 'https://your-domain/path/to/web/index.html';

    /**
     * all paths for your custom commands.
     *
     * @var array
     */
    public const COMMAND_PATH = [__DIR__ . '/MyCommands'];

    /**
     * all IDs of admin users.
     *
     * @var array
     */
    public const ADMINS = [123456789, 987654321];


    /**
     * your MySQL database credentials.
     *
     * @var array
     */
    public const SQL_DB = [
        'host'     => '127.0.0.1',
        'user'     => 'root',
        'password' => '',
        'database' => 'TgFontWebBot',
    ];
}
