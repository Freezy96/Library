-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2016 at 09:16 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `isbn` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(60) NOT NULL,
  `publisher` varchar(60) NOT NULL,
  `image` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `subject` varchar(5) NOT NULL,
  `reserve` int(10) NOT NULL,
  `loan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `title`, `author`, `publisher`, `image`, `description`, `subject`, `reserve`, `loan`) VALUES
('978-0393339758', 'The Shallows: What the Internet Is Doing to Our Brains', 'Nicholas Carr', 'W. W. Norton & Company (June 6, 2011)', 'id1.jpg', '“Is Google making us stupid?” When Nicholas Carr posed that question, in a celebrated Atlantic Monthly cover story, he tapped into a well of anxiety about how the Internet is changing us. He also crystallized one of the most important debates of our time: As we enjoy the Net’s bounties, are we sacrificing our ability to read and think deeply?', '1', 0, 0),
('978-0743277464', 'The Art of Learning: An Inner Journey to Optimal Performance', 'Josh Waitzkin', 'Free Press; Reprint edition (May 27, 2008)', 'id2.jpg', 'Josh Waitzkin transformed himself from a warrior of the mind into a top-level tai chi martial arts practitioner. This is somewhat an unusual, as many/most chess players (with a few exceptions) appear to be pallid who would get sand kicked in their faces at the beach. (Too much library and study time, perhaps.)', '2', 0, 0),
('978-1476730639', 'The Promise of a Pencil: How an Ordinary Person Can Create Extraordinary Change', 'Adam Braun', 'Scribner; Reprint edition (February 3, 2015)', 'id3.jpg', 'The riveting New York Times bestseller about a young man who built more than 250 schools around the world—and the steps anyone can take to lead a successful and significant life.', '2', 0, 0),
('978-0812981605', 'The Power of Habit: Why We Do What We Do in Life and Busines', 'Charles Duhigg', 'Random House Trade Paperbacks (January 7, 2014)', 'id4.jpg', 'In The Power of Habit, Pulitzer Prize–winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed. Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter & Gamble to sidelines of the NFL to the front lines of the civil rights movement, Duhigg presents a whole new understanding of human nature and its potential. At its core, The Power of Habit contains an exhilarating argument: The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', '2', 0, 0),
('978-0307465351', 'The 4-Hour Workweek: Escape 9-5, Live Anywhere, and Join the New Rich', 'Timothy Ferriss', 'Harmony; Exp Upd edition (December 15, 2009)', 'id5.jpg', 'Forget the old concept of retirement and the rest of the deferred-life plan–there is no need to wait and every reason not to, especially in unpredictable economic times. Whether your dream is escaping the rat race, experiencing high-end world travel, earning a monthly five-figure income with zero management, or just living more and working less, The 4-Hour Workweek is the blueprint. \r\n', '3', 0, 0),
('978-0140280197', 'The 48 Laws of Power', 'Robert Greene', 'Penguin Books; 1st edition (September 1, 2000)', 'id6.jpg', 'Amoral, cunning, ruthless, and instructive, The 48 Laws of Power is the definitive manual for anyone interested in gaining, observing, or defending against ultimate control. \r\n\r\nIn the book that People magazine proclaimed “beguiling” and “fascinating,” Robert Greene and Joost Elffers have distilled three thousand years of the history of power into 48 essential laws by drawing from the philosophies of Machiavelli, Sun Tzu, and Carl Von Clausewitz and also from the lives of figures ranging from Henry Kissinger to P.T. Barnum.', '1', 0, 0),
('978-0061438295', 'What Every BODY is Saying: An Ex-FBI Agent’s Guide to Speed-Reading People', 'Joe Navarro', 'William Morrow Paperbacks; 1 edition (April 15, 2008)', 'id7.jpg', 'Read this book and send your nonverbal intelligence soaring. Joe Navarro, a former FBI counterintelligence officer and a recognized expert on nonverbal behavior, explains how to "speed-read" people: decode sentiments and behaviors, avoid hidden pitfalls, and look for deceptive behaviors. You''ll also learn how your body language can influence what your boss, family, friends, and strangers think of you.', '3', 0, 0),
('978-0974320625', 'Emotional Intelligence 2.0', 'Travis Bradberry', 'TalentSmart; Har/Dol En edition (June 16, 2009)', 'id8.jpg', 'In today''s fast-paced world of competitive workplaces and turbulent economic conditions, each of us is searching for effective tools that can help us to manage, adapt, and strike out ahead of the pack. ', '2', 0, 0),
('978-1451639612', 'The 7 Habits of Highly Effective People: Powerful Lessons in Personal Change', 'Stephen R. Covey', 'Simon & Schuster; Anniversary edition (November 19, 2013)', 'id9.jpg', 'This twenty-fifth anniversary edition of Stephen Covey’s cherished classic commemorates the timeless wisdom of the 7 Habits.', '4', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `news` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(1, 'Library Exhibition: Spooky Spooky October'),
(2, 'Used Book Fair : Come & Visit Us / 喜阅好书 · 欢迎索赠'),
(3, 'Exhibition: Books Coming to the Big Screen'),
(4, 'TCM Library closing on 8 August 2016 / 中医图8月8日（星期一）闭馆'),
(5, 'TCM Library closing on 25 July 2016 / 中医图7月25日（星期一）闭馆'),
(6, 'TCM Library closing on 4 July 2016 / 中医图7月4日（星期一）闭馆'),
(7, 'Trail Database - CNKI Journal Translation Project'),
(8, 'Subscription to “CNKI” & 1-year Complimentary Access to “Traditional Chinese Medicine Knowledge Serv'),
(9, 'Library opening hours / 图书馆开放时间'),
(10, 'LIBRARY CLOSING ANNOUNCEMENT – Chinese New Year / 农历新年闭馆通知'),
(11, ' Library E-Resources’ Webpage Reformation / 图书馆电子资源网页更新'),
(12, 'Suspension of Library Wifi Service / 暂停图书馆无线网络服务'),
(13, '试用资料库：CNKI 中国知网'),
(14, 'Trial Databases'),
(15, 'TCM Library closing TODAY (9 October 2015) / 中医图今日闭馆'),
(16, 'Temporary break down of air-con system / 冷气故障'),
(17, 'Nobel Prize in Literature Book Exhibition / 诺贝尔文学奖主题书展'),
(18, 'Used Book Fair : Come & Visit Us / 喜阅好书 · 欢迎索赠'),
(19, 'Chinese Book Fair / 中文书展'),
(20, 'Newly added audio visual equipment and group reservation / 新增视听器材与开放团体申请使用'),
(21, 'Good News!New Power Sockets installation in Library'),
(22, 'Closing on 23rd March 2015 / 闭馆通告'),
(23, 'Adjustment of the library’s opening hour on 13/2/2015（Friday）and 17/2/2015（Tuesday） / 2015年2月13日（五）及'),
(24, 'Used Book Fair : Come & Visit Us / 喜阅好书 · 欢迎索赠'),
(25, 'Library opening hours / 图书馆开放时间'),
(26, 'Temporary break down of air-con system / 冷气故障'),
(27, 'Photography/ Filming in the Library / 申请图书馆内摄影'),
(28, 'Book Sale / 书展'),
(29, 'Exhibition: Books Coming to the Big Screen'),
(30, 'TCM Library closing on 8 August 2016 / 中医图8月8日（星期一）闭馆'),
(31, ' Announcement'),
(32, 'New URL of the Library’s Website / 图书馆网页新网址'),
(33, 'Adjustment of the TCM Library’s opening hour / 调整中医图的开放时间'),
(34, 'Prohibition on carrying any bags into the library / 禁止携带书包进入图书馆'),
(35, 'Access ProQuest Through Moodle While Off-Campus / 在校外通过登录Moodle 来使用 ProQuest 电子期刊'),
(36, 'Solution for Difficulty in Using Library Catalogue with Internet Explorer Versions later than Versio'),
(37, 'Adjustment of the TCM Library’s opening hour on Thursdays and Saturdays / 调整中医图周四及周六的开放时间'),
(38, 'Access Ebrary Through Moodle While Off-Campus / 在校外通过登录Moodle 来使用 Ebrary电子书'),
(39, 'Trial Databases / 试用数据库'),
(40, 'Difficulty in Accessing ProQuest, Ebrary and WanFang Databases in Campus / 校内无法直接登录ProQuest、Ebrary与万'),
(41, 'Prof. Shan Te Hsing Gives Seminar on “Edward Said in the Chinese World”/ 单德兴教授南方大学学院开讲“华文世界的萨依德”'),
(42, 'Attention / 书架组装'),
(43, 'ProQuest Library Research'),
(44, 'Wan Fang Database 万方数据库'),
(45, 'Long-term Loan Service / 长期借阅服务'),
(46, 'LevArt年度“同游乐”讲座'),
(47, 'Long-term Loan Service / 长期借阅服务'),
(48, 'Adjustment of the Library’s Closing Time / 提早闭馆通告'),
(49, 'Trial of Databases_ProQuest'),
(50, 'Adjustment of the TCM Library''s opening hour / 中医图本周六闭馆');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(1, 'Internet'),
(2, 'Self-help'),
(3, 'Fiction'),
(4, 'Gardening');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `bookreservenum` int(3) NOT NULL,
  `bookloannum` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `identity`, `bookreservenum`, `bookloannum`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'stenlleycold@yahoo.com', 'Staff', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
