-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2016 at 11:20
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_group_discuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `title_articles` varchar(120) NOT NULL,
  `excerpt_articles` text NOT NULL,
  `url_articles` varchar(120) NOT NULL,
  `time_articles` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img_url_articles` varchar(120) NOT NULL,
  `source_name_articles` varchar(80) NOT NULL,
  `source_url_articles` varchar(120) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `comment` text NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `like_comment` int(11) NOT NULL DEFAULT '0',
  `dislike_comment` int(11) NOT NULL DEFAULT '0',
  `unrelated_comment` int(11) NOT NULL DEFAULT '0',
  `sentiment_score` int(11) NOT NULL DEFAULT '0',
  `id_discussion_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id_discussion_forum` int(11) NOT NULL,
  `start_date_discussion` date NOT NULL,
  `finish_date_discussion` date NOT NULL,
  `name_discussion` varchar(40) NOT NULL,
  `rating_discussion` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_member` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_discussion_forum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nick_name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`),
  ADD KEY `categories_articles_fk` (`id_categories`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `user_comments_fk` (`id_user`),
  ADD KEY `discussion_comments_fk` (`id_discussion_forum`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id_discussion_forum`),
  ADD KEY `id_articles` (`id_articles`),
  ADD KEY `user_discussion_fk` (`id_user`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `user_admin_discussion_fk` (`id_user`),
  ADD KEY `discussion_members_fk` (`id_discussion_forum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id_discussion_forum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `categories_articles_fk` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `discussion_comments_fk` FOREIGN KEY (`id_discussion_forum`) REFERENCES `discussion` (`id_discussion_forum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_comments_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `articles_discussion_fk` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`),
  ADD CONSTRAINT `user_discussion_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `discussion_members_fk` FOREIGN KEY (`id_discussion_forum`) REFERENCES `discussion` (`id_discussion_forum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_admin_discussion_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
