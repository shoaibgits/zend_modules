Big-Sticky-Notes
================
    ______ _         _____                 _
    | ___ (_)       |  ___|               | |
    | |_/ /_  __ _  | |__  _ __ ___  _ __ | | ___  _   _  ___  ___
    | ___ \ |/ _` | |  __|| '_ ` _ \| '_ \| |/ _ \| | | |/ _ \/ _ \
    | |_/ / | (_| | | |___| | | | | | |_) | | (_) | |_| |  __/  __/
    \____/|_|\__, | \____/|_| |_| |_| .__/|_|\___/ \__, |\___|\___|
              __/ |                 | |             __/ |
             |___/                  |_|            |___/

Introduction
------------
Big Sticky Notes is web application tutorial built on Zend Framework 2 and uses
the ZF2 MVC layer and module system. This simple application is an extention to
the skeleton application provided by Zend Technologies.

Installation
------------

Using Composer (recommended)
----------------------------
Clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git://github.com/bigemployee/Big-Sticky-Notes.git
    cd Big-Sticky-Notes
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Database
--------
--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `phone` varchar(155) NOT NULL,
  `address` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Shoaib', 'shoaib@zend.com', '0987654321', 'Universe');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `artist`, `title`) VALUES
(2, 'Adele', '21'),
(3, 'Bruce  Springsteen', 'Wrecking Ball (Deluxe)'),
(4, 'Lana  Del  Rey', 'Born  To  Die'),
(5, 'Gotye', 'Making  Mirrors'),
(6, 'Shoaib', 'Banner Slider'),
(7, 'Shoaib', 'TMK | That\'s my kind');

-- --------------------------------------------------------

--
-- Table structure for table `stickynotes`
--

CREATE TABLE `stickynotes` (
  `id` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `stickynotes`
--

INSERT INTO `stickynotes` (`id`, `note`, `created`) VALUES
(1, 'This is a sticky note you can type and edit.', '0000-00-00 00:00:00'),
(2, 'This is another sticky note ', '2017-03-07 06:13:49'),
(17, NULL, '2017-03-15 06:47:24'),
(12, 'dasdasdasdasdasd', '2017-03-13 07:42:04');


open config/autoload/global.php and config/autoload/local.php and configure
your Database credentials.

if local.php is missing duplicate local.php.dist and modify the file

    // /config/autoload/local.php
    return array(
        'db' => array(
            'username' => 'DB_User_Name',
            'password' => 'DB_Password',
        ),
    );

Virtual Host
------------
Afterwards, set up a virtual host to point to the public/ directory of the
project and you should be ready to go!
