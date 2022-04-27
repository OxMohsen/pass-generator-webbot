<div id="top"></div>

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<br />
<div align="center">
  <a href="https://github.com/OxMohsen/pass-generator-webbot">
    <img src="web/icon.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Password Generator Web Bot</h3>

  <p align="center">
    a telegram web bot that generate strong random password. it's a simple example of the Web Bot (new feature in <a href="https://core.telegram.org/bots/api#april-16-2022">Telegram Bot Api 6.0</a>)
    <br />
    <a href="https://github.com/OxMohsen/pass-generator-webbot/issues">Report Bug</a>
    ·
    <a href="https://github.com/OxMohsen/pass-generator-webbot/issues">Request Feature</a>
  </p>
</div>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>


## About The Project

[![Password Generator Web Bot][product-screenshot]](https://github.com/OxMohsen/pass-generator-webbot)

Here's a Simple telegram web bot that generate strong random password with nice UI. the web bot theme used in this example changes based of the theme that client use in telegram.
its also user keyboard button to launch the web app, you can change it to inline keyboard just consider that you must validate the incoming data, for validating data see [this repo](https://github.com/OxMohsen/validating-data).

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [PHP](https://www.php.net/)
* [PHP Telegram Bot](https://github.com/php-telegram-bot/core)
* [PHP Telegram Bot Manager](https://github.com/php-telegram-bot/telegram-bot-manager)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

These instructions will get you a copy of these webbot.
You'll need [Git](https://git-scm.com) and [composer](https://getcomposer.org/download/).

### Installation

1. Follow the instructors detailed [here](https://github.com/php-telegram-bot/core#instructions)
2. Clone the repo
   ```sh
   git clone https://github.com/OxMohsen/pass-generator-webbot.git
   ```
3. Install composer packages
   ```sh
   composer install
   ```
4. change the data in `Config.php`.
5. set the webhook.
- `http://example.com/TgBot.php?s=SUPPER_SECRET_TEXT&a=set`

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Mohsen Falakedin - oxmohsen@oxmohsen.ir

Project Link: [https://github.com/OxMohsen/pass-generator-webbot](https://github.com/OxMohsen/pass-generator-webbot)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/OxMohsen/pass-generator-webbot.svg?style=for-the-badge
[contributors-url]: https://github.com/OxMohsen/pass-generator-webbot/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/OxMohsen/pass-generator-webbot.svg?style=for-the-badge
[forks-url]: https://github.com/OxMohsen/pass-generator-webbot/network/members
[stars-shield]: https://img.shields.io/github/stars/OxMohsen/pass-generator-webbot.svg?style=for-the-badge
[stars-url]: https://github.com/OxMohsen/pass-generator-webbot/stargazers
[issues-shield]: https://img.shields.io/github/issues/OxMohsen/pass-generator-webbot.svg?style=for-the-badge
[issues-url]: https://github.com/OxMohsen/pass-generator-webbot/issues
[license-shield]: https://img.shields.io/github/license/OxMohsen/pass-generator-webbot.svg?style=for-the-badge
[license-url]: https://github.com/OxMohsen/pass-generator-webbot/blob/master/LICENSE.txt
[product-screenshot]: screenshot.jpg
