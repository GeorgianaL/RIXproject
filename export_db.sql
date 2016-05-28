-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2016 at 03:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rix`
--

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id_pref` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `java` int(2) NOT NULL,
  `.net` int(2) NOT NULL,
  `android` int(2) NOT NULL,
  `iOS` int(2) NOT NULL,
  `html` int(2) NOT NULL,
  `css` int(2) NOT NULL,
  `javascript` int(2) NOT NULL,
  `api` int(2) NOT NULL,
  `data_bases` int(2) NOT NULL,
  `design` int(2) NOT NULL,
  `architecture` int(2) NOT NULL,
  `security` int(2) NOT NULL,
  `web` int(2) NOT NULL,
  `testing` int(2) NOT NULL,
  `cloud` int(2) NOT NULL,
  `automation` int(2) NOT NULL,
  `framework` int(2) NOT NULL,
  `tools` int(2) NOT NULL,
  `performance` int(2) NOT NULL,
  `productivity` int(2) NOT NULL,
  `machine_learning` int(2) NOT NULL,
  `methodology` int(2) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Georgiana', 'georgiana@gmail.com', '$2y$10$ycvI65GV8Wpz6qsjlkTPP.jXkSDBiubowcQ/nZmQH3hjVVCiOMwPK', 'VcaG4HT3DfMOal3eBH2nZWFTFiWdEhe5J1OLKQKfHxKvZR9IpTPgzbHqRzmY', '2016-05-14', '2016-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `user_video`
--

CREATE TABLE `user_video` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_video`
--

INSERT INTO `user_video` (`id`, `user_id`, `video_id`, `created_at`, `updated_at`) VALUES
(7, 2, 22, '0000-00-00', '0000-00-00'),
(8, 2, 25, '0000-00-00', '0000-00-00'),
(9, 2, 21, '0000-00-00', '0000-00-00'),
(10, 2, 26, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `embed` text NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `uri`, `description`, `duration`, `embed`, `width`, `height`, `link`, `tags`, `created_at`, `updated_at`) VALUES
(100, 'iPhones Compared on Original iOS Versions - iOS 4 vs 5 vs 6 vs 7 vs 8 vs 9!', 'qSkZQ3XNW58', 'The Ultimate Planned Obsolescence Test! 6 Generations of iPhones Compared on Original Firmwares.', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/qSkZQ3XNW58" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=qSkZQ3XNW58', 'IOSiOS 4 vs iOS 5 vs iOS 6 vs iOS 7 vs iOS 8 vs iOS 9Planned Obsolescence TestComparing iPhones on Original iOS VersionsOriginal iOS VersionsiOS 4iOS 5iOS 6iOS 7iOS 8iOS 9iPhone 4iPhone 4SiPhone 5iPhone 5SiPhone 6iPhone 6SiPhone Comparison on Original Ver', '2016-05-21', '2016-05-21'),
(101, 'iOS 9.3.2 Released - Everything You Need To Know!', 'NgCXUqlmzcc', 'iOS 9.3.2 Finally Released! New Features, Performance & Bug Fixes. Is iOS 9.3.2 vs iOS 9.3.1 Any Faster?', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/NgCXUqlmzcc" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=NgCXUqlmzcc', 'iOS 5 on iPhone 4SiOS 9.3.29.3.2iOS 9.3.2 Update9.3.2 UpdateiOS 9.3.2 Released9.3.2 ReleasediOS 9.3.2 ReviewiOS 9.3.2 FeaturesiOS 9.3.2 New Features9.3.2 FeaturesiOS 9.3.2 ChangesiOS 9.3.2 What''s NewiOS 9.3.2 JailbreakJailbreak 9.3.2How To Jailbreak 9.3.2', '2016-05-21', '2016-05-21'),
(102, 'iOS 9.3.2 vs 9.3.1 Speed Test on iPhone 6S, 6, 5S, 5, 4S & SE!', 'uxSYlZ6pFH0', 'iOS 9.3.2 vs iOS 9.3.1 FINAL Speed Test Comparison! Is 9.3.2 Faster? Lag, Startup, App Launching on iPhone SE, 6S, 6, 5S, 5 & 4S!', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/uxSYlZ6pFH0" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=uxSYlZ6pFH0', 'iOS 9.3.2 Jailbreak UpdateiOS 9.3.29.3.29.3.2 UpdateiOS 9.3.2 UpdateiOS 9.3.2 Speed Test9.3.2 Speed TestSpeedTestSpeed TestiOS 9.3.2 vs 9.3.1iOS 9.3.2 vs iOS 9.3.1iOS 9.3.2 vs 9.3.1 Speed Test9.3.2 vs 9.3.1iOS 9.3.19.3.19.3.1 vs 9.3.2iOS 9.3.2 Performance', '2016-05-21', '2016-05-21'),
(103, '"ZOMBIE PVP BATTLES!!!"  The Walking Dead No Man''s Land IOS / Android gameplay walkthrough', 'TulgwE2S7JA', 'Download The Walking Dead No Man''s Land for FREE on your iOS or Android device! http://roostr.video/WALKINGDEADNMLGENB\n\n(Downloads via the SPONSORED link above directly supports my channel, so THANK YOU VERY MUCH for your love and support!!!)\n\nWelcome to my "Hermit Goes Mobile" gameplay of The Walking Dead No Man''s Land! This walkthrough contains 1080p HD iOS gameplay footage, but the game is also available on Android devices!  Download it for FREE at http://roostr.video/WALKINGDEADNMLGENB\n\nAbout The Walking Dead No Man''s Land:\n\n“The Walking Dead meets XCOM in fantastic new game tied to AMC show.” - Polygon\n\nStay human and survive in the official mobile game of AMC’s The Walking Dead.\n\nJoin Daryl Dixon in the fight against the flesh-hungry walkers. Do you have what it takes to stay alive?\n\nThe Walking Dead: No Man’s Land is a thrilling, action-packed RPG game where tactical choices make a difference between life and death. The one and only, Daryl Dixon, will teach you how to kill and survive - but remember, in the end you are on your own.\n\n• FIGHT through hordes of walkers in tactical turn-based combat\n• TRAIN your survivor group and upgrade their weapons\n• CHOOSE who lives or dies and keep your people safe\n• HUNT walkers in Terminus, Prison and other familiar locations from AMC’s The Walking Dead\n• JOIN other players in deadly weekly challenges for exclusive rewards\n\n“Throw in some pretty swish graphics, lovely animations and blood splatters, and you have one of the most carefully fleshed out zombie games we''ve seen on mobile. It looks lovely, and plays great too.” - Pocketgamer\n\n“Each aspect of survival on AMC''s The Walking Dead has been parallel to the series'' official mobile game, subtitled No Man''s Land.” - Mashable\n\n“Imagine your favorite mobile base-building strategy game, mix in a dash of XCOM, and then paint on a fresh coat of AMC’s The Walking Dead. That’s No Man’s Land in a nutshell.” - Gamezebo\n\n=============================================\n\nOutro Music by Elybeatmaker! Full song here: https://youtu.be/IKYybTC-gu4\n\nSupport your favorite Hermit!!!!\n\n? NEW STORE! http://shop.generikb.com/\n? Twitter http://www.twitter.com/generikb\n? Facebook http://www.facebook.com/generikb\n? Livestream http://www.twitch.tv/generikb\n\n\nBuild your own dream PC today at https://www.caseking.de/en/pc-systems/finder/pc-configurator\n=============================================', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/TulgwE2S7JA" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=TulgwE2S7JA', 'iOS 9.3.2 Speedgenerikbthe walking deadno man''s landmobileiosandroidzombiefreecheatshacks', '2016-05-21', '2016-05-21'),
(104, 'Apple lanza la versión final de iOS 9.3.2', 'HEewE5oJLK8', 'Por fin Apple ha liberado iOS 9.3.2 para todos los usuarios de iOS. Tras 4 betas para desarrolladores, ya es posible actualizar iOS desde los ajustes de nuestros equipo o desde la aplicación de iTunes. En este video os contamos lo que sabemos al respecto.\n\nMás info sobre iOS 9.3.2, en este articulo: https://apple5x1.com/ios-9-3-2-ya-esta-disponible-para-su-descarga/\n\nNuestra página web http://www.apple5x1.com/\n\n¡Suscríbete al canal! http://bit.ly/SubApple5x1\n\nBúscanos en nuestras redes sociales:\nhttps://twitter.com/Apple5x1\nhttps://www.facebook.com/Apple5x1\nhttps://plus.google.com/u/0/+Fernando5x1\nhttps://www.instagram.com/apple5x1/\nhttps://telegram.me/Apple5x1\n\nVisita nuestro proyecto hermano:\nAndroid 5x1: http://bit.ly/Android5x1\n\nEscucha nuestros podcast:\nhttp://goo.gl/GT2iid\n\nSi quieres anunciar tu aplicación, producto o servicio:\nfernando@apple5x1.com\n\nParticipan en la creación de este video: \nFernando del Moral: https://twitter.com/Fernando5x1\nDavid Hebrero: https://twitter.com/malospelos666\nCarlos de Rojas: https://twitter.com/Carlos5x1', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/HEewE5oJLK8" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=HEewE5oJLK8', 'hacksios 9.3.2ios 9ios 9.3.2 novedadesappleiosactualizacionios 9.3.2 reviewapple 5x1', '2016-05-21', '2016-05-21'),
(105, 'A visual history of iOS', '5b2F1iO2ag0', 'The iPhone''s OS has changed a lot over the years. Here''s a history of iOS, from its smash-hit debut, through apps and Siri, all the way up to the next version coming this fall, iOS 8.', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/5b2F1iO2ag0" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=5b2F1iO2ag0', 'apple 5x1Verge UpdateculturetechnologyiPhonehistorynewsiOS 8iOS 7iOS 6The VergeiOS 4iOS 3iOS 2iOS 1TechscienceentertainmentiOS 5iOSTechnologyApplejournalismNewsiPadthe vergereviewstech', '2016-05-21', '2016-05-21'),
(106, '10 Features To Expect in iOS 10!', '3i18LBDWzCE', '10 Rumored Features Happening in iOS 10! Awesome New Features Based on Leaks, Patents & Analysts.', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/3i18LBDWzCE" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=3i18LBDWzCE', 'techiOS 10iOS10iOS 10 FeaturesiOS 10 UpdateiOS 10 Features To ExpectiOS 10 ConceptWWDC 2016WWDCiOS10iOS10 ConceptiOS 10 Release DateNew iOS 10 FeaturesiOS 10 New FeaturesiOS 10 ReviewiOS 10 RumorsiOS 10 DownloadiOS 10 TraileriOS 10 WishlistiOS 10 BetaTop ', '2016-05-21', '2016-05-21'),
(107, 'iOS 5 vs iOS 6 vs iOS 7 vs iOS 8 vs iOS 9 on iPhone 4S Speed Test', 'zH7FslRYsNg', 'iPhone 4S on EVERY Firmware Speed Test! Planned Obsolescence Real? iOS 5 vs iOS 6 vs iOS 7 vs iOS 8 vs iOS 9 Comparison on 4S!', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/zH7FslRYsNg" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=zH7FslRYsNg', 'iOS 10 vs iOS 9iOS 5 vs iOS 6 vs iOS 7 vs iOS 8 vs iOS 9iPhone 4SiOS 5iOS 6iOS 7iOS 8iOS 9iPhone 4S Every Firmware TestiPhone 4S Speed Test on Every FirmwareiOS 5 vs iOS 9iOS 5 on iPhone 4SiOS 6 on iPhone 4SiOS 7 on iPhone 4SiOS 8 on iPhone 4SiOS 9 on iPh', '2016-05-21', '2016-05-21'),
(108, 'iOS 9.3.2 Jailbreak UPDATE! Pangu, TaiG & iOS 9.3.x Release', 'Pdcz-4i6Paw', 'iOS 9.3.2 Final Jailbreak Update, Where is It?! Explained! iOS 9.3.2 Release Date and Jailbreak 9.3.x Discussed. http://jailbreakandhacks.com/jailbreak-ios-9.3.2-update.html\n\n ???? Support The Channel & Get EPIC Prizes: http://btinfo.co/join-icu-community\n\n All iOS 9.3.2 and 9.3.1 Jailbreak Updates - Watch NEXT! http://btinfo.co/update-jailbreak-ios-9-3-1\n\n?? Table of Contents ??\n\n0:09 - iOS 9.3.2 Released! \n0:55 - Changes Found in iOS 9.3.2\n2:49 - New iOS 9.3.2 Is Great News! \n3:38 - TaiG & Pangu Jailbreak Recap\n4:12 - iOS 9.3.2 Is Important Because….\n5:27 - Stable iOS 9.3.2 Jailbreak Inbound?\n6:01 - Relating iOS 9.3.x to iOS 8.4\n6:34 - Toxicity in Jailbreaking \n7:10 - Jailbreaking Will Never Die! \n7:53 - Static VS Dynamic Jailbreaking\n8:09 - iOS 9.3.2 Jailbreak RELEASE Date?\n8:39 - Should You Update? \n\n ?? FACEBOOK: \n https://www.facebook.com/besttechinfo\n ?? TWITTER: \n https://twitter.com/icrackuridevice\n ?? SUBSCRIBE:\n http://btinfo.co/subscribe-icu-id\n\n THANK YOU SO MUCH FOR SUPPORTING THE CHANNEL, PATRONS: \n Chris, Jake Lowe, Chad MacLeod, mohammed Nabil Alyafei, Daniel Sheppard, Noor Sa, Kevin, Marcus, Nathan otero, Ernest Aguilar, doug masters, Tyler Sanderson, Jose Reyes, Jorge M Lopez, Ally Starr, Matt Kane\n\n Subscribe if this helped for more great videos!', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/Pdcz-4i6Paw" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=Pdcz-4i6Paw', 'Old iOS Speed TestJailbreak iOS 9.3.2iOS 9.3.JailbreakiOS 9.3.2Jailbreak 9.3.2UntetherediOS 9.3 JailbreakiOS 9.3.2 JailbreakRelease DateJailbreak 9.3Jailbreak PanguJailbreak iOS 9.3.xiOS 9.3.2 & 9.3 JailbreakJailbreak iOS 9.3.2Jailbreak 9.3.2 TaiGiOS 9.3.', '2016-05-21', '2016-05-21'),
(109, 'iOS 9.3.2 Beta 4 Released! What''s New Review', 'HOr1ag0ewEI', 'iOS 9.3.2 Beta 4 Released! New Features Review, Bug Fixes & Speed Test, Faster?', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/HOr1ag0ewEI" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=HOr1ag0ewEI', 'jailbreakiOS 9.3.2iOS 9.3.2 UpdateiOS 9.3.2 ReleasediOS 9.3.2 Beta 4iOS 9.3.2 Beta 4 Released9.3.29.3.2 Beta9.3.2 Update9.3.2 ReviewiOS 9.3.2 Review9.3.2 Beta 4iOS 9.3.2 Speed TestiOS 9.3.2 PerformanceiOS 9.3.2 What''s NewiOS 9.3.2 ChangesReviewiOS 9.3.2 v', '2016-05-21', '2016-05-21'),
(110, 'Android N: Naming Tip #1', '2s6r0iYDYko', 'Android N Naming Tip #1: Say it with an accent. Submit your ideas for names at https://android.com/n.\n\nDiscover more about Android by following us on:\nGoogle+: https://plus.google.com/+android\nTwitter: https://twitter.com/Android\nFacebook: https://www.facebook.com/AndroidOfficial', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/2s6r0iYDYko" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=2s6r0iYDYko', 'AndroidAndroid NnamingAndroidOStasty treatsweetoperating systemkit katjelly beanlollipopmarshmallowmobilenamenaming tipaccentneenish tartideas', '2016-05-21', '2016-05-21'),
(111, 'Google Play Awards revela quais são os 10 melhores apps do Android', 'sWFXdKWEELg', 'Mais informações:\nhttp://www.tecmundo.com.br/android/105053-google-play-awards-revela-10-melhores-apps-android.htm\n\n::http://www.tecmundo.com.br\n::http://www.baixaki.com.br', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/sWFXdKWEELg" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=sWFXdKWEELg', 'ideastecmundobaixakitecnologiatecnologiastecnologicositesitesgoogleplayawardsprêmiolojastoremelhoresappsaplicativosjogosgamescategorias', '2016-05-21', '2016-05-21'),
(112, 'Android N Preview 3 Review!', 'InvWxlEb-So', 'Google has released an updated to the Android N Developer Preview. This video will show you everything that is new and that has changed - including new emoji!\nCheck out Slickwraps: http://slickwraps.com\n\nAndroid N Preview 1: https://youtu.be/CEFWMP5M6Zk\nAndroid N Preview 2: https://youtu.be/d9MAObn1pgg\nAndroid N Split Screen: https://youtu.be/7CUGRUlF1Lk\nGoogle Keyboard 5.0: https://youtu.be/V35bBR93eMs\nLeave a comment and let me know what you think Android N should be called! https://www.android.com/versions/name-n/\n---\nSupport me by saving this as your Amazon bookmark:\nhttp://amzn.to/1BFrRvF\n\nFacebook: http://www.facebook.com/qbking77\nTwitter: http://twitter.com/#!/qbking77\nGoogle Plus: http://google.com/+qbking77\nInstagram: @qbking77\nSnapchat: qbking77\n\nMusic by Tobu; Colors\nhttp://www.youtube.com/tobuofficial', 0, '<iframe width="640" height="360" src="//www.youtube.com/embed/InvWxlEb-So" frameborder="0" allowfullscreen></iframe>', 0, 0, 'https://www.youtube.com/watch?v=InvWxlEb-So', 'categoriasqbking77qbkingqb77qb77androidphonesandroid developmentandroid phonessmartphonetablettechreviewtechnologytim schofieldandroid nandroid nutellaandroid nerdsandroid nougatandroid n previewandroid n betaandroid n developer previewandroid previewandr', '2016-05-21', '2016-05-21'),
(113, 'Search and Rescue', '/videos/12208142', 'Franks crashed his plane whilst I was flying mine. The spotter saw it coming down.\n\nWill we find the model ? in what condition ?', 413, '<iframe src="https://player.vimeo.com/video/12208142?title=0&byline=0&portrait=0&badge=0&autopause=0&player_id=0" width="640" height="480" frameborder="0" title="Search and Rescue" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 640, 480, 'https://vimeo.com/12208142', 'Beachamptoncowsfrankfpvgliderradiandirtydozenrescuesearch', '2016-05-21', '2016-05-21'),
(114, 'Search and Rescue', '/videos/12208142', 'Franks crashed his plane whilst I was flying mine. The spotter saw it coming down.\n\nWill we find the model ? in what condition ?', 413, '<iframe src="https://player.vimeo.com/video/12208142?title=0&byline=0&portrait=0&badge=0&autopause=0&player_id=0" width="640" height="480" frameborder="0" title="Search and Rescue" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 640, 480, 'https://vimeo.com/12208142', 'Beachamptoncowsfrankfpvgliderradiandirtydozenrescuesearch', '2016-05-21', '2016-05-21'),
(115, 'Search and Rescue', '/videos/12208142', 'Franks crashed his plane whilst I was flying mine. The spotter saw it coming down.\n\nWill we find the model ? in what condition ?', 413, '<iframe src="https://player.vimeo.com/video/12208142?title=0&byline=0&portrait=0&badge=0&autopause=0&player_id=0" width="640" height="480" frameborder="0" title="Search and Rescue" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 640, 480, 'https://vimeo.com/12208142', 'Beachamptoncowsfrankfpvgliderradiandirtydozenrescuesearch', '2016-05-21', '2016-05-21'),
(116, 'Indiana Air Search and Rescue UH-1H Bell Huey', '/videos/13736121', 'This is the Indiana Air Search and Rescue''s Bell UH-1H Huey. Built in 1968, it flew in Vietnam from 1969-1971 in the 1st/9th Air Cav, 2nd/20th Air Cav, 117 Air Assault. About six years ago, the Indiana Air Search and Rescue acquired this helicopter and restored it to full flying condition for 5 1/2 years. Today, this helicopter is flown weekly and in reborn once again.Thanks to all of our great crew who brought this helicopter back to life.', 81, '<iframe src="https://player.vimeo.com/video/13736121?title=0&byline=0&portrait=0&badge=0&autopause=0&player_id=0" width="1280" height="720" frameborder="0" title="Indiana Air Search and Rescue UH-1H Bell Huey" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 1280, 720, 'https://vimeo.com/13736121', 'HueyUH-1HHelicopterSearch and RescueVietnam Veteran1st/9th2nd/20th117 Air Cav.FlyingHoverPattern', '2016-05-21', '2016-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `video_tags`
--

CREATE TABLE `video_tags` (
  `id_tag` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_video`
--
ALTER TABLE `user_video`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `video_tags`
--
ALTER TABLE `video_tags`
  ADD UNIQUE KEY `id_tag` (`id_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_video`
--
ALTER TABLE `user_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
