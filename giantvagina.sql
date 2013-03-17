-- phpMyAdmin SQL Dump
-- version 2.6.4-pl3
-- http://www.phpmyadmin.net
-- 
-- Host: db1199.perfora.net
-- Generation Time: Mar 17, 2013 at 01:49 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.3-7+squeeze15
-- 
-- Database: `db346955923`
-- 
CREATE DATABASE `db346955923` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE db346955923;

-- --------------------------------------------------------

-- 
-- Table structure for table `image_metadata`
-- 

CREATE TABLE `image_metadata` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE latin1_general_ci,
  `pos` smallint(6) NOT NULL,
  `page` smallint(6) DEFAULT NULL,
  `type` tinytext COLLATE latin1_general_ci NOT NULL,
  `title` text COLLATE latin1_general_ci,
  `text` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=80 ;

-- 
-- Dumping data for table `image_metadata`
-- 

INSERT INTO `image_metadata` VALUES (1, 'allamericangirl', 130, 1, 'gif', 'All American Girl', NULL);
INSERT INTO `image_metadata` VALUES (2, 'angelbaby', 110, 1, 'jpg', 'Angel Baby', NULL);
INSERT INTO `image_metadata` VALUES (3, 'anightinparis', 280, 1, 'jpg', 'A Night In Paris', NULL);
INSERT INTO `image_metadata` VALUES (4, 'bathingbeauty', 120, 1, 'jpg', 'Bathing Beauty', NULL);
INSERT INTO `image_metadata` VALUES (5, 'birthlovedoll', 10, 1, 'jpg', 'birthlovedoll', NULL);
INSERT INTO `image_metadata` VALUES (6, 'blossoming', 100, 1, 'jpg', 'Blossoming', NULL);
INSERT INTO `image_metadata` VALUES (7, 'chalkoutline-1', 510, 1, 'jpg', 'Coppertone', NULL);
INSERT INTO `image_metadata` VALUES (8, 'chalkoutline-2', 520, 1, 'jpg', 'Strike a Pose', NULL);
INSERT INTO `image_metadata` VALUES (9, 'chalkoutline-3', 530, 1, 'jpg', 'Tantrum', NULL);
INSERT INTO `image_metadata` VALUES (11, 'coppertone', 260, 1, 'jpg', 'Coppertone', NULL);
INSERT INTO `image_metadata` VALUES (12, 'cottoncandy', 70, 1, 'jpg', 'Cotton Candy', NULL);
INSERT INTO `image_metadata` VALUES (13, 'dollface', 60, 1, 'jpg', 'Cover Yourself Up, Dollface!', NULL);
INSERT INTO `image_metadata` VALUES (14, 'drillbabydrill', 20, 1, 'jpg', 'drillbabydrill', NULL);
INSERT INTO `image_metadata` VALUES (15, 'envy', 460, 1, 'jpg', 'Envy', NULL);
INSERT INTO `image_metadata` VALUES (16, 'flowergirl', 80, 1, 'jpg', 'Flower Girl', NULL);
INSERT INTO `image_metadata` VALUES (17, 'giddyup', 330, 1, 'jpg', 'Giddy Up', NULL);
INSERT INTO `image_metadata` VALUES (18, 'heymickey', 170, 1, 'gif', 'Hey Mickey', NULL);
INSERT INTO `image_metadata` VALUES (19, 'ilovelove', 310, 1, 'jpg', 'I Love Love', NULL);
INSERT INTO `image_metadata` VALUES (20, 'improper', 300, 1, 'jpg', 'Improper', NULL);
INSERT INTO `image_metadata` VALUES (21, 'lildebbiedoesdallas', 540, 1, 'jpg', 'Lil Debbie Does Dallas', NULL);
INSERT INTO `image_metadata` VALUES (22, 'lolita-1', 180, 1, 'jpg', 'Lolita 1', NULL);
INSERT INTO `image_metadata` VALUES (23, 'lolita-2', 190, 1, 'jpg', 'Lolita 2', NULL);
INSERT INTO `image_metadata` VALUES (24, 'lolita-3', 200, 1, 'jpg', 'Lolita 3', NULL);
INSERT INTO `image_metadata` VALUES (25, 'lolita-4', 210, 1, 'jpg', 'Lolita 4', NULL);
INSERT INTO `image_metadata` VALUES (26, 'lolly', 350, 1, 'jpg', 'Lolly', NULL);
INSERT INTO `image_metadata` VALUES (27, 'Madonna', 40, 1, 'jpg', 'madonna', NULL);
INSERT INTO `image_metadata` VALUES (28, 'masked', 140, 1, 'gif', 'Masked', NULL);
INSERT INTO `image_metadata` VALUES (29, 'milkmustache', 80, 1, 'jpg', 'Milk Mustache', NULL);
INSERT INTO `image_metadata` VALUES (30, 'myprincewillcum', 480, 1, 'jpg', 'My Prince Will Cum', NULL);
INSERT INTO `image_metadata` VALUES (31, 'naughtyornice', 360, 1, 'jpg', 'Naughty Or Nice', NULL);
INSERT INTO `image_metadata` VALUES (32, 'netherland', 400, 1, 'jpg', 'Netherland', NULL);
INSERT INTO `image_metadata` VALUES (33, 'oohbaby', 420, 1, 'jpg', 'Ooh Baby', NULL);
INSERT INTO `image_metadata` VALUES (34, 'palliative', 380, 1, 'jpg', 'Palliative', NULL);
INSERT INTO `image_metadata` VALUES (36, 'pigtailsandall', 430, 1, 'jpg', 'Pigtails and All', NULL);
INSERT INTO `image_metadata` VALUES (37, 'playinghorsey', 250, 1, 'jpg', 'Playing Horsey', NULL);
INSERT INTO `image_metadata` VALUES (38, 'playinghouse', 270, 1, 'jpg', 'Playing House', NULL);
INSERT INTO `image_metadata` VALUES (39, 'plushie', 490, 1, 'jpg', 'Plushie', NULL);
INSERT INTO `image_metadata` VALUES (40, 'prettyfuckinggrimm-1', 220, 1, 'jpg', 'Pretty Fucking Grimm #1', NULL);
INSERT INTO `image_metadata` VALUES (41, 'prettyfuckinggrimm-2', 230, 1, 'jpg', 'Pretty Fucking Grimm #2', NULL);
INSERT INTO `image_metadata` VALUES (42, 'prettyfuckinggrimm-3', 240, 1, 'jpg', 'Pretty Fucking Grimm #3', NULL);
INSERT INTO `image_metadata` VALUES (43, 'purelove', 450, 1, 'jpg', '100% Pure Love', NULL);
INSERT INTO `image_metadata` VALUES (44, 'pure', 370, 1, 'jpg', 'Pure', NULL);
INSERT INTO `image_metadata` VALUES (45, 'ripe', 440, 1, 'jpg', 'Ripe', NULL);
INSERT INTO `image_metadata` VALUES (46, 'schoolties', 320, 1, 'jpg', 'School Ties', NULL);
INSERT INTO `image_metadata` VALUES (47, 'self_portrait', 50, 1, 'jpg', 'Self-Portrait as an Inflatable Love Doll', NULL);
INSERT INTO `image_metadata` VALUES (48, 'sourpuss', 290, 1, 'jpg', 'Sourpuss', NULL);
INSERT INTO `image_metadata` VALUES (49, 'staircase', 30, 1, 'jpg', 'staircase', NULL);
INSERT INTO `image_metadata` VALUES (50, 'sucker', 90, 1, 'jpg', 'Sucker', NULL);
INSERT INTO `image_metadata` VALUES (51, 'suck', 150, 1, 'gif', 'Suck', NULL);
INSERT INTO `image_metadata` VALUES (52, 'suckup', 340, 1, 'jpg', 'Suck Up', NULL);
INSERT INTO `image_metadata` VALUES (53, 'switchbox1', 30, 2, 'jpg', 'switchbox1', NULL);
INSERT INTO `image_metadata` VALUES (54, 'switchbox2', 40, 2, 'jpg', 'switchbox2', 'switchbox1');
INSERT INTO `image_metadata` VALUES (55, 'switchbox3', 50, 2, 'jpg', 'switchbox3', 'switchbox1');
INSERT INTO `image_metadata` VALUES (56, 'switchbox4', 60, 2, 'jpg', 'switchbox4', 'switchbox1');
INSERT INTO `image_metadata` VALUES (57, 'switchbox5', 70, 2, 'jpg', 'switchbox5', 'switchbox1');
INSERT INTO `image_metadata` VALUES (58, 'teacherspet', 160, 1, 'gif', 'Teacher&rsquo;s Pet', NULL);
INSERT INTO `image_metadata` VALUES (59, 'theicingonthecake', 500, 1, 'jpg', 'The Icing on the Cake', NULL);
INSERT INTO `image_metadata` VALUES (60, 'thor', 10, 2, 'jpg', 'thor', 'thor');
INSERT INTO `image_metadata` VALUES (61, 'thumbsuck', 390, 1, 'jpg', 'Thumbsuck', NULL);
INSERT INTO `image_metadata` VALUES (62, 'whatbigeyesyouhave', 410, 1, 'jpg', 'What Big Eyes You Have', NULL);
INSERT INTO `image_metadata` VALUES (63, 'wouldyouliketochecksomethingout', 470, 1, 'jpg', 'Would You Like to Check Something Out?', NULL);
INSERT INTO `image_metadata` VALUES (64, 'seal', 60, 1, 'jpg', 'seal', NULL);
INSERT INTO `image_metadata` VALUES (65, 'furlobster', 60, 1, 'jpg', 'furlobster', NULL);
INSERT INTO `image_metadata` VALUES (66, 'mermaid', 60, 1, 'jpg', 'mermaid', NULL);
INSERT INTO `image_metadata` VALUES (67, 'freudianclam', 60, 1, 'jpg', 'freudianclam', NULL);
INSERT INTO `image_metadata` VALUES (68, 'lastphoto', 0, 1, 'jpg', 'lastphoto', NULL);
INSERT INTO `image_metadata` VALUES (72, 'instinctual', 20, 2, 'jpg', 'instinctual', NULL);
INSERT INTO `image_metadata` VALUES (69, 'evidence-1', 62, 1, 'jpg', 'Evidence 1', NULL);
INSERT INTO `image_metadata` VALUES (70, 'evidence-2', 64, 1, 'jpg', 'Evidence 2', NULL);
INSERT INTO `image_metadata` VALUES (71, 'evidence-3', 66, 1, 'jpg', 'Evidence 3', NULL);
INSERT INTO `image_metadata` VALUES (75, 'origin', -3, 1, 'jpg', 'L\\''Origin du Inflatable Love Doll', NULL);
INSERT INTO `image_metadata` VALUES (76, 'mrgoodbar', -6, 1, 'jpg', 'Mr. Goodbar', NULL);
INSERT INTO `image_metadata` VALUES (77, 'chartreuse', -20, 2, 'jpg', 'Harry''s Color Sake', NULL);
INSERT INTO `image_metadata` VALUES (78, 'bella', -10, 2, 'jpg', 'Bella', NULL);
INSERT INTO `image_metadata` VALUES (79, 'emmett', 0, 2, 'jpg', 'Little Mr. Emmett', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `pages`
-- 

CREATE TABLE `pages` (
  `id` smallint(6) NOT NULL,
  `index_file` text COLLATE latin1_general_ci NOT NULL,
  `index_file_link_image_file` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `pages`
-- 

INSERT INTO `pages` VALUES (1, 'index.php', 'home.gif');
INSERT INTO `pages` VALUES (2, 'publicart.php', 'publicartcommissions.gif');
