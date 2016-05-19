-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 19, 2016 at 02:20 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
-- Important thing: Make sure that you create a database called "norfleet" first, and paste this into here. 
--
-- Database: `norfleet`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `doneby` varchar(255) NOT NULL DEFAULT '',
  `in_content` varchar(255) NOT NULL DEFAULT '',
  `hashtag` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `doneby`, `in_content`, `hashtag`) VALUES
(0, 'camran', 'Wow this is so good! ', '#winning!'),
(0, 'camran', 'W E W L A D ', '#random'),
(0, 'camran', 'I love potatoes', '#random'),
(0, 'John', 'I am a CSS genius! ', '#ilearnedsomething'),
(0, 'John', 'literally nothing', '#idk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`) VALUES
(7, 'asdf', 'ce9d6339460c695640b032e686870c6118351fbe57bc5a7ad5dc74744ebecad9', '561b067826a0ec70', 'camran.hansen@ucc.on.ca'),
(8, 'W E W L A D', 'd37a69a474f2177b616b07dae8d4e18b1bedaccb4491eed6703da2bb13a29296', '33d873fe26d50898', 'm@ail.com'),
(9, 'asdf1234', 'bee6d7418394bb2b1f765fce1a916886bf6d0fa480d828496060296970f2f692', '56385a692a7737ca', 'a@mail.com'),
(10, 'm', '2c182a798074000fec29e35e6c4e904c727ea6949d30aea39c3dc50611fb898b', '402f4d25cdc0e51', 'z@ail.com'),
(11, 'x', 'c7a749438ce6636da0708704ab68706d73ad2ff8a3d416c91c9f8464f4aa78e1', '3ec3ba824954b705', 'x@mail.com'),
(12, 'charlie', 'e2fd2e550890985b3e8e5a8c7f1c27cdd244032369c638f734962f40ebcbd8b2', '5f71b03519f512c8', 'z@ms.com'),
(13, 'dai', '15faefd3e33d20363be3844d0a716556e2632d41e4809a514dad84ed767c0cb5', '24819e8021792867', 'd@ai.com'),
(14, 'v', '05d05d3e480d71ce09aa53bf2065caf22eb19496b0e94463bded1e087723c107', '5e4f87745843913c', 'v@s.com'),
(15, 'q', '2e11110efff2c0bc005a5d0b3237c00de798f57b6494e9bd49a23075009f31cc', '63218f3d4f5fdfb9', 'q@z.com'),
(16, 'camran', 'b3320d85c5fb9fb29ea89ff5b0cb3fd5aaa7a975f0b903bdf2411252cf36383d', '2adfbd9d37f82cb7', 'zx@mail.com'),
(17, '1234', '1b3714bc000b77b34448d94eb8bc4b82984306afbed428159a23f9cb57bfe625', '31198eb3ba205a9', 'sdf@dfgdg.com'),
(18, 'John', 'adee4990f37d20f803b6ea16541d2a958c47f5df6696525b2f4252b802afc7b7', '78e23d11d0d862', 'n@mad.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;