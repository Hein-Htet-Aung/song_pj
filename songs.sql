-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 06:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songs`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_name`, `image`) VALUES
(1, 'Revival', 'revival.jpg'),
(2, 'Purpose(deluxe)', 'purpose.jpg'),
(3, 'Love Songs', 'lovesongs.jpg'),
(7, 'A Star Is Born Soundtrack', 'a star is born.jpg'),
(9, 'Greatest Hits', 'greatest hits.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_name`, `image`) VALUES
(1, 'Selena Gomez', 'selena12.jpg'),
(2, 'Justin Bieber', 'jb8.jpg'),
(3, 'Adele', 'adele1.jpg'),
(5, 'Queen', 'queen1.jpg'),
(7, 'One Direction', 'one direction1.jpg'),
(9, 'Charlie Puth', 'charlie1.jpg'),
(10, 'Lady Gaga', 'lg42.jpg'),
(12, 'Bruno Mars', 'mar1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user_id`, `username`, `email`, `message`) VALUES
(9, 'AungAung', 'aungaung@gmail.com', 'good good');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `song_title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `song_date` date NOT NULL,
  `m_link` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `song_title`, `artist`, `album`, `genre`, `image`, `song_date`, `m_link`, `audio`) VALUES
(1, 'Revival', 'selena gomez', 'Revival', 'pop', 'selena1.jpg', '2019-07-04', 'https://drive.google.com/file/d/1e9qAiwbu6-kmbNwzS8NO5k4f7VpNrYX2/view?usp=sharing', '01 - Revival.mp3'),
(2, 'Kill Em With Kindness', 'selena gomez', 'Revival', 'pop', 'selena2.jpg', '2019-07-04', 'https://drive.google.com/open?id=1vcLAh6nmoD5twzwG3oliKCuE7IdAO_tX', '02 - Kill Em With Kindness.mp3'),
(3, 'Hands To Myself', 'selena gomez', 'Revival', 'pop', 'selena3.jpg', '2019-07-04', 'https://drive.google.com/open?id=1Y404ebIp6FhNJB8uGvt-7GCQi8JMRJ3H', '03 - Hands To Myself.mp3'),
(4, 'Same Old Love', 'selena gomez', 'Revival', 'pop', 'selena4.jpg', '2019-07-04', 'https://drive.google.com/file/d/1oPedf3e-1pMRaZQw_T-JTh6_y27pZwhh/view?usp=sharing', '04 - Same Old Love.mp3'),
(5, 'Sober', 'selena gomez', 'Revival', 'pop', 'selena5.jpg', '2019-07-04', 'https://drive.google.com/file/d/1AWyCgy8Jguhh48YsB4kNwJIVbo_ByEX9/view?usp=sharing', '05 - Sober.mp3'),
(6, 'Good For You', 'selena gomez', 'Revival', 'pop', 'selena6.jpg', '2019-07-04', 'https://drive.google.com/file/d/1-lHauzzgHFtU9D-2-0qr-tN9CkdM8ldA/view?usp=sharing', '06 - Good For You.mp3'),
(7, 'Camouflage', 'selena gomez', 'Revival', 'pop', 'selena7.jpg', '2019-07-04', 'https://drive.google.com/file/d/12Y0i4_r3Kne2RO7c7_XyqlZOsNWCSOqo/view?usp=sharing', '07 - Camouflage.mp3'),
(8, 'Me & The Rhythm', 'selena gomez', 'Revival', 'pop', 'selena8.jpg', '2019-07-04', 'https://drive.google.com/file/d/1cP4Sfst3yzCm8rHiOZ18pVqEIojedDRD/view?usp=sharing', '08 - Me & The Rhythm.mp3'),
(9, 'Survivors', 'selena gomez', 'Revival', 'pop', 'selena9.jpg', '2019-07-04', 'https://drive.google.com/file/d/12V7sUY00Vgy8toB-e9UZYZoC-KB6lxVi/view?usp=sharing', '09 - Survivors.mp3'),
(10, 'Body Heat', 'selena gomez', 'Revival', 'pop', 'selena10.jpg', '2019-07-04', 'https://drive.google.com/file/d/1oTKKrkwV1-YXn1ELtvmdkr9L4eGsXZkG/view?usp=sharing', '10 - Body Heat.mp3'),
(11, 'Rise', 'selena gomez', 'Revival', 'pop', 'selena11.jpg', '2019-07-04', 'https://drive.google.com/file/d/1eC_nmH9WBBiHUTuBMOVf6oSfN1NaUeQ8/view?usp=sharing', '11 - Rise.mp3'),
(12, 'Me & My Girls', 'selena gomez', 'Revival', 'pop', 'selena12.jpg', '2019-07-04', 'https://drive.google.com/file/d/1029-r5navJgRmhiekjoU5zlkQersLqEG/view?usp=sharing', '12 - Me & My Girls.mp3'),
(13, 'Nobody', 'selena gomez', 'Revival', 'pop', 'selena13.jpg', '2019-07-04', 'https://drive.google.com/file/d/1wXR0Y5ZsSGnhNebWT11biT-hfZpLMgqz/view?usp=sharing', '13 - Nobody.mp3'),
(14, 'Perfect', 'selena gomez', 'Revival', 'pop', 'selena14.jpg', '2019-07-04', 'https://drive.google.com/file/d/1tKDZTejIQdXNsIsB2_B2fhNuhYETPuCm/view?usp=sharing', '14 - Perfect.mp3'),
(15, 'Outta My Hands(Loco)', 'selena gomez', 'Revival', 'pop', 'selena22.jpg', '2019-07-04', 'https://drive.google.com/file/d/1MOy4scS4cEjF74elkMHD-y1kTMBbXaXJ/view?usp=sharing', '15 - Outta My Hands (Loco).mp3'),
(16, 'Cologne', 'selena gomez', 'Revival', 'pop', 'selena23.jpg', '2019-07-04', 'https://drive.google.com/file/d/1E111gbfYq8Nafv7yOCVJkqOLEfbfB26-/view?usp=sharing', '16 - Cologne.mp3'),
(17, 'Mark My Words', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb1.jpg', '2019-07-04', 'https://drive.google.com/file/d/1RD7l6RdWBB76RvSGQ--xxlvSbN2znXHA/view?usp=sharing', '01 Mark My Words.mp3'),
(19, 'What Do You Mean', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb2.jpg', '2019-07-04', 'https://drive.google.com/file/d/1U9DaUW1PnDpzALkWharPTRiF_9Y-BsxX/view?usp=sharing', '03 What Do You Mean_.mp3'),
(20, 'Sorry', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb3.jpg', '2019-07-04', 'https://drive.google.com/open?id=1qEMtYp9CH9aPfc4UPfAtdA1-_Q2lx2L-', '04 Sorry.mp3'),
(21, 'Love Yourself', 'justin bieber', 'Purpose(Deluxe)', 'R&B\r\n', 'jb5.jpg', '2019-07-04', 'https://drive.google.com/file/d/15XHcPftxLtzIOzzN7vucGgnQH8ncx_8W/view?usp=sharing', '05 Love Yourself.mp3'),
(22, 'Company', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb6.jpg', '2019-07-04', 'https://drive.google.com/file/d/1YWuw7-4mOBzP_E4HJ1NcfcKZbTUNhPzv/view?usp=sharing', '06 Company.mp3'),
(23, 'No Pressure', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb7.jpg', '2019-07-04', 'https://drive.google.com/file/d/1Ce90NwIvyu4TNJBQ1a9U3WdjdZlVOn7I/view?usp=sharing', '07 No Pressure (feat. Big Sean).mp3'),
(24, 'No Sense', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb8.jpg', '2019-07-04', 'https://drive.google.com/file/d/1NKDtzVzikZOGl6DZOpnZDAHcpoKgprqM/view?usp=sharing', '08 No Sense (feat. Travis Scott).mp3'),
(25, 'The Feeling', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb9.jpg', '2019-07-04', 'https://drive.google.com/file/d/1yqe4T-hApprDVIhs7z9nRuiZ8G9alEjF/view?usp=sharing', '09 The Feeling (feat. Halsey).mp3'),
(26, 'Life Is Worth Living', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb9.jpg', '2019-07-04', 'https://drive.google.com/file/d/1M0bZ4MCzkxE-pBuAU0CVZDaGiD4UrrP2/view?usp=sharing', '10 Life Is Worth Living.mp3'),
(27, 'Where Are U Now', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb10.jpg', '2019-07-04', 'https://drive.google.com/file/d/1q3qY07JndAoVudCT9be3s6iRz96S6ELu/view?usp=sharing', '11 Where Are Ãœ Now.mp3'),
(28, 'Children', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb11.jpg', '2019-07-04', 'https://drive.google.com/file/d/1M3veFheI4ZTwBf1_IfUCiA9FdWV364CA/view?usp=sharing', '12 Children.mp3'),
(29, 'Purpose', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb12.jpg', '2019-07-04', 'https://drive.google.com/file/d/1WGry_lbGp4X7Wz1oleFFntMHlZH21bPs/view?usp=sharing', '13 Purpose.mp3'),
(30, 'Been You ', 'justin bieber', 'Purpose(Deluxe)', 'r&b', 'jb13.jpg', '2019-07-04', 'https://drive.google.com/file/d/1utsie9XI6uT61dCdypF_UW0PBfQYvBl0/view?usp=sharing', '14 Been You.mp3'),
(31, 'Get Used To It', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb14.jpg', '2019-07-04', 'https://drive.google.com/file/d/1bCRnefCZrbhp1XPWts9OeimKVw58lbNr/view?usp=sharing', '15 Get Used To It.mp3'),
(32, 'We Are ', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb19.jpg', '2019-07-04', 'https://drive.google.com/file/d/1wTge5kJz0ChyGZuSGBptFhGUe6SBmHEm/view?usp=sharing', '16 We Are (feat. Nas).mp3'),
(33, 'Trust', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb20.jpg', '2019-07-04', 'https://drive.google.com/file/d/1mS0upfxWnEhkuFLR0P_q8JvYHhsBVQJM/view?usp=sharing', '17 Trust.mp3'),
(34, 'All In It', 'justin bieber', 'Purpose(Deluxe)', 'R&B', 'jb47.jpg', '2019-07-04', 'https://drive.google.com/file/d/1ZqFzcsGF38qIijInjlUYb0-Blzvqa4ki/view?usp=sharing', '18 All In It.mp3'),
(97, 'hello', 'adele', 'target deluxe edition...freak37', 'pop', 'adele1.jpg', '2019-07-04', 'https://drive.google.com/file/d/1cDXFdVGrYqh2BaQXXw7ov4LZiIBF-NtK/view?usp=sharing', '01. Hello.mp3'),
(98, 'send my love', 'adele', 'target deluxe edition...freak37', 'pop', 'adele2.jpg', '2019-07-04', 'https://drive.google.com/file/d/1ZrWeN7H-JrO5xYoVaLu4jl4tOG6TrL6w/view?usp=sharing', '02. Send My Love (To Your New Lover).mp3'),
(99, 'i miss you', 'adele', 'target deluxe edition...freak37', 'pop', 'adele3.jpg', '2019-07-04', 'https://drive.google.com/file/d/1ZoS03lS0ROXsCr4Vfh4WIg5DHYp4Zq7g/view?usp=sharing', '03. I Miss You.mp3'),
(100, 'when we were young', 'adele', 'target deluxe edition...freak37', 'pop', 'adele4.jpg', '2019-07-04', 'https://drive.google.com/file/d/1RCP_cgswHYBpAjDRUWHfSWgPbe7tkTVT/view?usp=sharing', '04. When We Were Young.mp3'),
(101, 'remedy', 'adele', 'target deluxe edition...freak37', 'pop', 'adele6.jpg', '2019-07-04', 'https://drive.google.com/file/d/1f_4NDP4bIHvwq2D4DIWOgy9rHKeHRjT2/view?usp=sharing', '05. Remedy.mp3'),
(102, 'water under the bridge', 'adele', 'target deluxe edition...freak37', 'pop', 'adele7.jpg', '2019-07-04', 'https://drive.google.com/file/d/1hhdYeEc65njm9weHo10a0crRY0cdVSVh/view?usp=sharing', '06. Water Under The Bridge.mp3'),
(103, 'the way i am', 'charlie puth', 'voicentoes(2018)', 'pop', 'charlie1.jpg', '2019-07-04', 'https://drive.google.com/file/d/1m-9HHCEXpSzJdavaL2TJeNlxpewu1UzY/view?usp=sharing', '01. The Way I Am.mp3'),
(104, 'attention', 'charlie puth', 'voicentoes(2018)', 'pop', 'charlie2.jpg', '2019-07-04', 'https://drive.google.com/file/d/1TQ9jOKv99JgLpZ5x6h5rLB5vwp2U-Aj5/view?usp=sharing', '02. Attention.mp3'),
(105, 'la girls', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie3.jpg', '2019-07-04', 'https://drive.google.com/file/d/1ZX07SL6goV4UFNdF-8JSnYw0xvcDKfdR/view?usp=sharing', '03. LA Girls.mp3'),
(106, 'how long ', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie4.jpg', '2019-07-04', 'https://drive.google.com/file/d/1qySB6MnFGCKmN4nBwOO6MpQYkEVkaseo/view?usp=sharing', '04. How Long.mp3'),
(107, 'done for me', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie5.jpg', '2019-07-04', 'https://drive.google.com/file/d/1BBE1dvqkeZ4x3cXghiiW--BcWlhJh-kN/view?usp=sharing', '05. Done For Me (feat. Kehlani).mp3'),
(108, 'patient', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie6.jpg', '2019-07-04', 'https://drive.google.com/file/d/1wy4Ouq_fHcMmtaC-KqXXN_eWKLn9XAql/view?usp=sharing', '06. Patient.mp3'),
(109, 'if you leave me now', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie7.jpg', '2019-07-04', 'https://drive.google.com/file/d/1DRlLYL8x19LHL9IJt3kFSDQYPh0VFwPh/view?usp=sharing', '07. If You Leave Me Now (feat. Boyz II Men).mp3'),
(110, 'boy', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie8.jpg', '2019-07-04', 'https://drive.google.com/file/d/1dXsL_Hi4_cUvvuSZxmUVlK_3pJPt0o0c/view?usp=sharing', '08. BOY.mp3'),
(111, 'slow it down', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie9.jpg', '2019-07-04', 'https://drive.google.com/file/d/11OTFpfj8S3XYzLeGDfriRxhtRo1mrScY/view?usp=sharing', '09. Slow It Down.mp3'),
(112, 'change', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie10.jpg', '2019-07-04', 'https://drive.google.com/file/d/1DHrocj_YKdVIdyh5KagXPFLB3aYhCJ-Z/view?usp=sharing', '10. Change (feat. James Taylor).mp3'),
(113, 'somebody told me', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie11.jpg', '2019-07-04', 'https://drive.google.com/file/d/1-5HEObK5P_pWoxPcG9TOcJolbDmprYlh/view?usp=sharing', '11. Somebody Told Me.mp3'),
(114, 'empty cups', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie12.jpg', '2019-07-04', 'https://drive.google.com/file/d/1BvzJsOHNhqqYuy8spB2clFYHuyn4SKw0/view?usp=sharing', '12. Empty Cups.mp3'),
(115, 'through it all', 'charlie puth', 'voicenotes(2018)', 'pop', 'charlie14.jpg', '2019-07-04', 'https://drive.google.com/file/d/19BGlG5Pl7JEJ60tnS9I62stvdy6qiag-/view?usp=sharing', '13. Through It All.mp3'),
(123, 'kiss you', 'one direction', 'take me home(2012)', 'pop', 'one direction12.png', '2019-07-07', 'https://drive.google.com/file/d/17RFi9vQkuY5FF-AGl8vMZsHPfVjEWFoU/view?usp=sharing', '02 - Kiss You.mp3'),
(124, 'little things', 'one direction', 'take me home(2012)', 'pop', 'one direction14.jpg', '2019-07-07', 'https://drive.google.com/file/d/1WKi2zVIKQ76wXHoKRdu6J1WANrajSKrO/view?usp=sharing', '03 - Little Things.mp3'),
(126, 'last first kiss', 'one direction', 'take me home(2012)', 'pop', 'one direction5.jpg', '2019-07-07', 'https://drive.google.com/file/d/17u7p9fzko3ueHyzcQ9TZbdFBSZl2muqP/view?usp=sharing', '05 - Last First Kiss.mp3'),
(127, 'heart attack', 'one direction', 'take me home(2012)', 'pop', 'one direction3.jpg', '2019-07-07', 'https://drive.google.com/file/d/1QpTkXOINgDbaY9iBxLNnbhydQrVRftGu/view?usp=sharing', '06 - Heart Attack.mp3'),
(128, 'rock me', 'one direction', 'take me home(2012)', 'pop', 'one direction1.jpg', '2019-07-07', 'https://drive.google.com/file/d/1sgssDdvHKcqGriVb1zArm8_RmagPeVIF/view?usp=sharing', '07 - Rock Me.mp3'),
(129, '24k_magic', 'bruno mars', '24K magic', 'pop', 'mar26.jpg', '2019-07-07', 'https://drive.google.com/file/d/14nhRuU0E5DQwNgKGWn0Ew3k6S6cMycsV/view?usp=sharing', '01-bruno_mars-24k_magic.mp3'),
(130, 'chunky', 'bruno mars', '24K magic', 'pop', 'mar20.jpg', '2019-07-07', 'https://drive.google.com/file/d/12s2hYS9Eu1sdU3u283YaWxglubwZokYM/view?usp=sharing', '02-bruno_mars-chunky.mp3'),
(131, 'perm', 'bruno mars', '24K magic', 'pop', 'mar15.jpg', '2019-07-07', 'https://drive.google.com/file/d/19gq8gk7Q0M-hgFRTyXdQIlGCZHznkXan/view?usp=sharing', '03-bruno_mars-perm.mp3'),
(132, 'thats what i like', 'bruno mars', '24K magic', 'pop', 'mar15.jpg', '2019-07-07', 'https://drive.google.com/file/d/1TdM9ZeZzVf4UYzkxyv_cXjEIX8fuSuAq/view?usp=sharing', '04-bruno_mars-thats_what_i_like.mp3'),
(133, 'calling all my lovelies', 'bruno mars', '24K magic', 'pop', 'mar10.jpg', '2019-07-07', 'https://drive.google.com/file/d/1CyDlXhx2ZW4qQarWDHJMdwzuK81y-Dif/view?usp=sharing', '07-bruno_mars-calling_all_my_lovelies.mp3'),
(134, 'finesse', 'bruno mars', '24K magic', 'pop', 'mar8.jpg', '2019-07-07', 'https://drive.google.com/file/d/1UkEYbS9pcazSs-S8KxShBSw1EZu1olT0/view?usp=sharing', '08-bruno_mars-finesse.mp3'),
(135, 'too good to say goodbye', 'bruno mars', '24K magic', 'pop', 'mar5.jpg', '2019-07-07', 'https://drive.google.com/file/d/1uDLrLiTs0cJlx1baBSaaBsLZdiyGngzM/view?usp=sharing', '09-bruno_mars-too_good_to_say_goodbye.mp3'),
(145, 'When We Were Young', 'Adele', 'Love songs', 'pop', 'adele1.jpg', '2019-07-10', '', '1 When We Were Young.mp3'),
(146, 'Someone Like You', 'Adele', 'Love songs', 'pop', 'adele2.jpg', '2019-07-10', '', '2 Someone Like You.mp3'),
(148, 'Melt My Heart To Stone', 'Adele', 'Love songs', 'pop', 'adele4.jpg', '2019-07-10', '', '4 Melt My Heart To Stone.mp3'),
(149, 'Hometown Glory', 'Adele', 'Love songs', 'pop', 'adele5.jpg', '2019-07-10', '', '5 Hometown Glory.mp3'),
(150, 'Love In The Dark', 'Adele', 'Love songs', 'pop', 'adele6.jpg', '2019-07-10', '', '6 Love In The Dark.mp3'),
(152, 'Chasing Pavements', 'Adele', 'Love songs', 'pop', 'adele7.jpg', '2019-07-10', '', '8 Chasing Pavements.mp3'),
(153, 'Million Years Ago', 'Adele', 'Love songs', 'pop', 'adele8.jpg', '2019-07-10', '', '9 Million Years Ago.mp3'),
(154, 'Make You Feel My Love', 'Adele', 'Love songs', 'pop', 'adele9.jpg', '2019-07-10', '', '10 Make You Feel My Love.mp3'),
(155, 'Crazy For You', 'Adele', 'Love songs', 'pop', 'adele10.jpg', '2019-07-10', '', '11 Crazy For You.mp3'),
(156, 'Take It All', 'Adele', 'Love songs', 'pop', 'adele11.jpg', '2019-07-10', '', '12 Take It All.mp3'),
(157, 'La Vie En Rose', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lady6.jpg', '2019-07-24', '', '05. La Vie En Rose.mp3'),
(158, 'Always Remember Us This Way', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lady7.jpg', '2019-07-24', '', '17. Always Remember Us This Way.mp3'),
(159, 'Look What I Found', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lady21.jpg', '2019-07-24', '', '20. Look What I Found.mp3'),
(160, 'Heal Me', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lady38.jpg', '2019-07-24', '', '22. Heal Me.mp3'),
(161, 'Is That Alright', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lady10.jpg', '2019-07-24', '', '25. Is That Alright_.mp3'),
(162, 'Why Did You Do That', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lady15.jpg', '2019-07-24', '', '27. Why Did You Do That_.mp3'),
(163, 'Hair Body Face', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lg9.jpg', '2019-07-24', '', '28. Hair Body Face.mp3'),
(164, 'Before I Cry', 'Lady Gaga', 'A Star Is Born Soundtrack', 'pop', 'lg38.jpg', '2019-07-24', '', '30. Before I Cry.mp3'),
(165, 'Bohemian Rhapsody', 'Queen', 'Greatest Hits', 'rock', 'queen1.jpg', '2019-07-24', '', '01 Queen - Bohemian Rhapsody.mp3'),
(166, 'Another One Bites the Dust', 'Queen', 'Greatest Hits', 'rock', 'queen2.jpg', '2019-07-24', '', '02 Queen - Another One Bites the Dust.mp3'),
(167, 'Killer Queen', 'Queen', 'Greatest Hits', 'rock', 'queen3.jpg', '2019-07-24', '', '03 Queen - Killer Queen.mp3'),
(168, 'Fat Bottomed Girls', 'Queen', 'Greatest Hits', 'rock', 'queen4.jpg', '2019-07-24', '', '04 Queen - Fat Bottomed Girls.mp3'),
(169, 'Bicycle Race', 'Queen', 'Greatest Hits', 'rock', 'queen6.jpg', '2019-07-24', '', '05 Queen - Bicycle Race.mp3'),
(170, 'Save Me', 'Queen', 'Greatest Hits', 'rock', 'queen1.jpg', '2019-07-24', '', '08 Queen - Save Me.mp3'),
(171, 'Crazy Little Thing Called Love', 'Queen', 'Greatest Hits', 'rock', 'queen2.jpg', '2019-07-24', '', '09 Queen - Crazy Little Thing Called Love.mp3'),
(172, 'Somebody to Love', 'Queen', 'Greatest Hits', 'hip hop', 'queen3.jpg', '2019-07-24', '', '10 Queen - Somebody to Love.mp3'),
(173, 'Good Old-Fashioned Lover Boy', 'Queen', 'Greatest Hits', 'rock', 'queen5.jpg', '2019-07-24', '', '12 Queen - Good Old-Fashioned Lover Boy.mp3'),
(174, 'Play the Game', 'Queen', 'Greatest Hits', 'rock', 'queen6.jpg', '2019-07-24', '', '13 Queen - Play the Game.mp3'),
(175, 'Flash', 'Queen', 'Greatest Hits', 'rock', 'queen7.jpg', '2019-07-24', '', '14 Queen - Flash.mp3'),
(176, 'Seven Seas of Rhye', 'Queen', 'Greatest Hits', 'rock', 'queen8.jpg', '2019-07-24', '', '15 Queen - Seven Seas of Rhye.mp3'),
(177, 'We Will Rock You', 'Queen', 'Greatest Hits', 'rock', 'queen9.jpg', '2019-07-24', '', '16 Queen - We Will Rock You.mp3'),
(178, 'We Are the Champions', 'Queen', 'Greatest Hits', 'rock', 'queen10.jpg', '2019-07-24', '', '17 Queen - We Are the Champions.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`) VALUES
(1, 'KoKo', '12345', 'Ko', 'Ko', 'koko@gmail.com', 'admin'),
(2, 'theint', '45678', 'tndt', 'theint', 'tndt@gmail.com', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
