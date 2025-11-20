<div align="center">
 
  <h2 align="center">Instagram Downloader telegram bot</h2>
  <p align="center">
A Telegram webhook-based bot designed to download Instagram reels, posts, stories, and additional media. Developed with a simple, efficient architecture.
    <br />
    <a href="https://t.me/instaISMbot">@instaISMbot</a>
    <br />
    <br />
    <br />
    <a href="https://github.com/ismoiloffS/InstaDownload/#-changelog">📜 ChangeLog</a>
    ·
    <a href="https://github.com/ismoiloffS/InstaDownload/issues">⚠️ Report Bug</a>
    ·
    <a href="https://github.com/ismoiloffS/InstaDownload/issues">💡 Request Feature</a>
  </p>

  <p align="center">
    <img src="https://img.shields.io/badge/LICENSE-%20BY%20MIT-red?style=for-the-badge"/>
    <img src="https://img.shields.io/github/stars/ismoiloffS/InstaDownload.svg?style=for-the-badge&color=red"/>
    <img src="https://img.shields.io/github/issues/ismoiloffS/InstaDownload?style=for-the-badge&color=red"/>
    <a href="https://t.me/ismoiloff_S">
     <img src="https://img.shields.io/badge/Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white"/>
    </a>
  </p>
</div>

---

### ⚙️ Installation Instructions

1. **Ensure PHP 7.4+ is installed** on your system.

2. **Create a Telegram-Bot**:
   go to the <a href="https://t.me/BotFather/">@BotFather</a> send **/newbot** send your bot's name, and send bot's username, **the username must be unique and not already used/occupied by anyone.**
   <br>
   <img src="https://ismoiloff.uz/photo4git.jpg" alt="oops" width="350px">
   <br>
   And we extract token, it looks like 8113194154:AssDDRNHbYvApEWW_0

3. **Edit bot.php**:
    ```php
   $API_TOKEN="";
   ```
    here you write your Telegam-Bot's token which we got from botfather
    
4. **Setting WEBHOOK**:
  - Put your token to TOKEN and your url to bot.php (it should be hosted cause of webhook)
    ```url
     https://api.telegram.org/botTOKEN/setwebhook?url=https://example.com/url/to/bot.php
     ```
---

Original code by [Ismoiloff](https://instagram.com/Ismoiloff_S)
