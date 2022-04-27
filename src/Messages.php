<?php

namespace OxMohsen\TgBot;

class Messages
{
    public const START_MESSAGE = 'Hi! 👋' . \PHP_EOL .
        'use the button below to launch the webapp and generate random password.' . \PHP_EOL .
        'this bot is fully open source and you can see the code here 👇' . \PHP_EOL .
        'https://github.com/OxMohsen/pass-generator-webbot';
    public const WEBAPP_DATA_MESSAGE  = '🔰 Your Generated Password is: `%s`';
    public const WEBAPP_KEYBOARD_TEXT = '🚀 Generate Password 🚀';
}
