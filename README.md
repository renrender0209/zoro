# 🎌 Zoro.to - Clone

> **Status**: 🚀 **Project Revival in Progress**

This project is a revival of an anime streaming platform. Feel free to customize it as you like!


## 🛠️ Tech Stack

- PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript (jQuery)
- **Styling**: Bootstrap 4, Font Awesome
- **API**: [AniWatch API](https://github.com/ghoshRitesh12/aniwatch-api)

## 📋 Requirements

### System Requirements
- **PHP**: 7.4 or higher
- **MySQL**: 5.7 or higher (or MariaDB)
- **Web Server**: Apache with mod_rewrite enabled
- **Extensions**: mysqli, json, curl

### Development Environment
- **XAMPP** (recommended for local development)

## 🚀 Quick Start

### 1. Clone the Repository
```bash
git clone https://github.com/SailorSammyy/zoro.to-clone.git
cd zoro.to-clone
```

### 2. Database Setup
1. Import the database schema:
   ```sql
   mysql -u root -p < AutoAnime.sql
   ```
2. Create a database named `anime` (or your preferred name)

### 3. Configuration
Edit `_config.php` with your settings:

```php
<?php 
// Database Configuration
$conn = mysqli_connect("localhost", "root", "", "anime") or die("Connection failed");

// Website Settings
$websiteTitle = "Zoro";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}"; // if on localhost then add a slash(/) after the '}' and type the folder name
$websiteLogo = $websiteUrl . "/files/images/logo_zoro.png";
$contactEmail = "your-email@gmail.com";
$version = "1.0";

// Social Links
$discord = "https://dsc.gg/sailorsammyy";
$github = "https://github.com/sailorsammyy";
$twitter = "https://x.com/";

// External Services
$disqus = "https://your-disqus-shortname.disqus.com/embed.js";
$api = "https://your-api-endpoint.com"; // No slash(/) at the end

$banner = $websiteUrl . "/files/images/banner.png";
?>
```

### 4. Local Development (XAMPP)

1. **Install XAMPP**: Download from [apachefriends.org](https://www.apachefriends.org/)

2. **Enable mod_rewrite**

3. **Start Services**:
   - Start Apache and MySQL in XAMPP Control Panel

4. **Access Your Site**:
   - Visit: `http://localhost/zoro`


## 🔧 Configuration Guide

### Database Configuration
| Parameter | Description | Example |
|-----------|-------------|---------|
| `hostname` | Database host | `localhost` |
| `username` | DB username | `root` |
| `password` | DB password | `` (empty for localhost) |
| `database` | Database name | `anime` |

## 🌐 Deployment

### Shared Hosting
1. Upload all files to your hosting directory
2. Import `AutoAnime.sql` to your database
3. Update `_config.php` with your hosting details
4. Ensure `.htaccess` is uploaded and working

### VPS/Dedicated Server
1. Set up LAMP stack (Linux, Apache, MySQL, PHP)
2. Configure virtual host
3. Enable mod_rewrite
4. Set proper file permissions

## 🤝 Contributing

We welcome contributions! Here's how you can help:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/feature`)
3. **Commit** your changes (`git commit -m 'Add feature'`)
4. **Push** to the branch (`git push origin feature/feature`)
5. **Open** a Pull Request

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

## 🙏 Acknowledgements

- **[AniWatch API](https://github.com/ghoshRitesh12/aniwatch-api)** - Provides anime data and streaming links
- **Bootstrap** - For responsive design components
- **Font Awesome** - For beautiful icons
- **jQuery** - For interactive functionality

## 💬 Community & Support

[![Join our Discord server!](https://invidget.switchblade.xyz/SUsQnPWvxT)](https://discord.com/invite/SUsQnPWvxT)

- **Discord**: Join our community for support and discussions
- **Issues**: Report bugs or request features on GitHub

---

<div align="center">
  <p>⭐ Star this repo if you found it helpful!</p>
</div>
