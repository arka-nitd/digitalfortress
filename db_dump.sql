-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 11:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE IF NOT EXISTS `leaderboard` (
`id` int(10) unsigned NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `round_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_01_19_190443_create_quiz_table', 1),
('2016_01_20_134902_create_ques_solved_table', 1),
('2016_01_20_160250_create_postion_table', 1),
('2016_01_21_051121_create_leaderboard_table', 1),
('2016_01_21_085603_create_round_answer_table', 1),
('2016_01_23_224450_create_profile_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `question_id` int(10) unsigned NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `round` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`question_id`, `question`, `answer`, `round`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Two cyclist, 200 km apart, are cycling toward each other at the speed of 50 km/hour each. A fly takes off from one cyclist flying straight toward the other at the speed of 75 km/hour. Having reached the other cyclist, the fly bounces off it and flies back to the first   cyclist. The fly repeats the trip until the cyclist collide and the bug is squashed. What distance(in km) has the fly traveled until its death?<br>This cool math puzzle is not as easy as you think.<br>Think outside the box.', '150', 1, '38.855286,-77.341219', '2016-01-27 14:45:25', '0000-00-00 00:00:00'),
(2, 'Einstein youth lasted 1/6 of his life. He had his first beard in the next 1/12 of his life. At the end of the following 1/7 of his life he supposedly got married. Five years from then his son was born. His son lived exactly 1/2 of Einstein life but died 4 years after the death of his son.<br>How long did Einstein supposedly live?', '84', 1, '42.570080,-88.556260', '2016-01-27 14:45:52', '0000-00-00 00:00:00'),
(3, 'If it were two hours later, it would be half as long until midnight as it would be if it were an hour later. What time is it now?', '9', 1, '50.360042,-4.744857', '2016-01-26 16:56:05', '0000-00-00 00:00:00'),
(4, 'A beautiful country Bewishland has the following condition:<br>Though there are many people and not all are bauld, but no two inhabitants have the   same number of hairs on their head.  Not just this, but  no inhabitant has exactly 518 hairs. Also, there are more inhabitants in town than hairs on any individual inhabitant''s head.  How many maximum inhabitants can live in Bewishland ?', '518', 1, '47.374177,8.551082', '2016-01-27 14:48:25', '0000-00-00 00:00:00'),
(5, 'There has been given a part of a famous play and it’s setting.<br>“…. impatiently waiting for her LOVE to arrive. She hasn’t seen her LOVE in several   months. SHE can hardly contain her excitement; shortly HE arrives at the house with a small wrapped gift in HIS hand.”<br>The theme of this play is to treasure items that are passed down from generation to generation.<br>They are special parts of people’s past.<br>This play has been converted into Taiwan ghost movie.<br>Identify the play.', 'the heirloom', 2, '35.4731307,-83.3168072', '2016-01-27 18:44:50', '0000-00-00 00:00:00'),
(6, '…had a pretty bird, <br>Feathers bright and yellow,<br>Slender legs—upon my word <br>…was a pretty fellow! <br>The sweetest note he always sung,<br>Which much delighted….<br>She often, where the cage was hung,<br>Sat hearing her….<br>The first line of the poem has 7 syllables and every other syllable is accented, beginning with the first one.<br>The theme of the poem is how much the protagonist enjoys his singing.<br>Identify the poem.', 'mary''s canary', 2, '15.270168,76.606125', '2016-01-27 18:45:06', '0000-00-00 00:00:00'),
(7, 'Given below is a prose.<br>There is a kid. Very tensed and very nervous.<br><br>When HE walked into the meeting room, he swallowed hard. Most of the tables were full of kids talking and laughing with each other. There was only one spot open, and it was at a table way in the back.<br><br>There were three other kids at the table. They all knew each other, but they were happy to talk to him too. He no longer felt nervous. By the time he went home, he knew he had a new set of friends for the summer.<br><br>Identity the prose.', 'artcamp', 2, '11.530038,76.644547', '2016-01-27 18:45:24', '0000-00-00 00:00:00'),
(8, 'This famous play compares the seven phases of a man''s life,  infant,  lover, soldier, justice, Pantalone and old age, facing imminent death.<br><br>The infant cries and vomits all the time. Later, that infant grows into a schoolboy, not willing to attend school which is the fourth stage of a man’s life. The third phase is that of a lover who is lost in his thoughts of love. The lover writes poetry to his lady’s beauty. In the fourth phase, as he grows older, he joins the army and becomes a soldier. He is physically fit and is aggressive, short-tempered and ambitious in nature.The fifth phase shows that with maturity and wisdom, the family man becomes a judge. He is a fair, healthy man full of wisdom.His look is authoritative and he advises people. The sixth phase is about the man who has grown old and is seen in a pantaloon and spectacles. His authoritative voice has grown weak and his voice trembles as he talks.  The last phase is about the senile man who loses his teeth, his vision and his hearing. After this, the man part in the world ends and he exits from the phases of his life forever. <br><br>Identify the play and get one more point unlocked in the world’s map.', 'as you like it', 2, '46.430668,-85.591853', '2016-01-27 18:45:39', '0000-00-00 00:00:00'),
(9, 'This lady is considered one the most beautiful women of all time. She was married to king. But some another prince also fell in love with the beautiful lady and abducted her, taking her back to his place. The king assembled a great army, led by the king’s brother whose wife was abducted to retrieve the queen. The kingdom of the mad lover prince was destroyed. The beauty returned safely to his husband, where she lived happily with him for the rest of her life. The story is all time favorite love story.<br><br>So fell in love again and try o figure out which story are we talking about!!', 'helen of troy', 2, '53.3871232,12.3249123', '2016-01-27 18:46:02', '0000-00-00 00:00:00'),
(10, 'Almost every land in this world belongs to someone. Internet is a mini world itself and have  features almost like real world. Even on internet, the places are bought for site to be hosted. Can you tell me the first registered organisation on this mini world?', 'symbolics.com', 3, '-37.820008,144.9833602', '2016-01-28 04:34:00', '0000-00-00 00:00:00'),
(11, 'Now-a-days webcasting is a matter of play. All we need to do is that upload our video on YouTube and here are we, the whole world comes to know about it! But have you ever wondered, when was it the first time when the web was used as broadcasting any inauguration in the world?', 'january 1997', 3, '40.712704,-74.011917', '2016-01-28 04:34:30', '0000-00-00 00:00:00'),
(12, 'Viruses are common terms now-a-days, be it in case of medical science or the computer science. But there is a special program, which from nowhere came into the limelight which was the first to come into sight “in the wild” — that is, outside the single computer or lab where it was created. Can you guess its name!', 'rother j', 3, '51.529825,-0.172152', '2016-01-28 04:34:45', '0000-00-00 00:00:00'),
(13, 'Without the web browser, even google and Facebook will fall to drain! We never give\r\nimportance to web browser. But now it’s the time that you start appreciating its worth \r\nand its immense popularity from 1990’s because that’s the answer to this question. \r\n<br>What am I talking about?', 'mosaic', 3, '46.232737,6.053762', '2016-01-28 04:38:45', '0000-00-00 00:00:00'),
(14, 'Although computer is said to be smartest invention till date as it can compute things\r\nvery fast. We have thought since our childhood that there is no work which computer can’t do except obviously having its own IQ. But there is still something which no computer has got success in solving till this date which is a public Turing test to tell computers and humans apart. What can it be?', 'captcha', 3, '52.623176,-1.218402', '2016-01-28 04:38:35', '0000-00-00 00:00:00'),
(15, 'When the queen from other galaxy threatens the protagonist, the brave girl from this movie addresses her as “BITCH!" which became the famous dialogue of all time. Which famous movie is this?', 'aliens', 4, '11.550000,104.850000', '2016-01-29 08:39:14', '0000-00-00 00:00:00'),
(16, 'Apollo is a chain of hospital in india which have been serving people for several years. Gattaca is a movie released in 1997. There was a man in the movie who has a very deep relationship with Apollo thirteen. Who is he?', 'loren dean', 4, '9.033333,38.750000', '2016-01-29 08:39:25', '0000-00-00 00:00:00'),
(17, 'There was this film I watched a few years ago that isn''t very well known. I do not know any of the actors in it, but it''s about this new girl at this school who comes between two best friends. The new girl is obsessed with one of them, so she invites the other one to a fake party with them and when they get to a warehouse, she murders the girl so that she and the girl she''s obsessed with can be best friends.The other girl who the killer is obsessed with wants to tell the dead girl''s parents but she''s being forced not to, so the dead girl''s mother investigates and finds out herself. Does anyone know what this film is called ?', 'death clique', 4, '22.673889,14.527778', '2016-01-29 08:39:41', '0000-00-00 00:00:00'),
(18, 'Once I watched a black-and-white comedy movie about a man and a woman who believed that they were brother and sister. The plot of movie is how the man discovers and constantly tries to tell people that there are 13 dead bodies in the cellar. The end of the movie has the sister trying to tell his brother the same thing but he informs her that she isn''t really his sister. They drive off together while a cop at the house shouts after them that he''s a little teapot. Can you guess the name!', 'arsenic and old lace', 4, '10.766667,106.694444', '2016-01-29 08:39:49', '0000-00-00 00:00:00'),
(19, 'Amitabh Bachchan, the Shahenshah of Bollywood has played many roles in his life like father, brother, son, lover and what not. He had spent a lot of moments romanticizing with his female partner and also portraying himself as a son. There was a lady who walked with him holding his hand but he could also feel the warmth of her womb. An angel she was and also a goddess. He would wake to her and also sleep into her arms. Who is that lady?', 'waheeda rahman', 4, '43.689167,7.241111', '2016-01-29 08:39:51', '0000-00-00 00:00:00'),
(20, 'There lies a small town far away at some distant place. Like the fairy tales, day and night, there is a humming sound always coming from some place. Nobody had ever known from where it comes from! This buzz, though could be heard clearly from naked ears, people have compared this sound with a sound of distant diesel engine, although neither there is any railway station nor lies any railway track in its surroundings and neither any sound detecting device could track it. <br>Can you tell this small town’s name?', 'taos', 5, '63.301882,-20.600773', '2016-01-28 05:30:51', '0000-00-00 00:00:00'),
(21, 'As the world is too diverse, so are people’s taste and culture. Though we are social animals, as said, still we have our own differences. Starting from our language to our dressing style, everything differs. The way we think and our individual’s thought differences can be understood with the fact that there lies a manuscript whose even origin could not be found till now. The only idea people have about it is from the drawings encrypted in it, and the LIPI of it could not be understood till date. Which manuscript am I talking about?', 'voynich manuscript', 5, '40.784199,-82.502492', '2016-01-28 05:30:59', '0000-00-00 00:00:00'),
(22, 'In late 1800’s, there was a mad man in London who had some sort of feelings for prostitutes and a great place for women in his heart. He wanted to immortalize 11 women, so he finally decided to free them from this evil world by slashing their throats. He could never be recognized. Who is this great man?', 'jack the ripper', 5, '-23.549443,-46.640556', '2016-01-28 05:31:21', '0000-00-00 00:00:00'),
(23, 'Started between bombay and thane, my leader X expanded me thereafter. Who is X?', 'robert maitland brereton', 6, '28.641738,77.218579', '2016-01-28 06:57:21', '0000-00-00 00:00:00'),
(24, 'This building was build to pay respect to a great personality. Specialty of this building is the first sun ray fall on the spot through a hole in the roof where pot of ashes of this great man was kept. What''s the name of that building ?', 'mahatma gandhi memorial', 6, '21.151876,79.088677', '2016-01-28 06:49:54', '0000-00-00 00:00:00'),
(25, 'I am the nerve centre of malayalam literature and often called mural city of the country. Who am I ?', 'kottayam', 6, '10.996359,76.967225', '2016-01-28 06:52:51', '0000-00-00 00:00:00'),
(26, 'Among all cities with population greater than 2 million I am the leader in literacy rate of people. Who am I ?', 'nagpur', 6, '8.087734,77.546707', '2016-01-28 06:58:26', '0000-00-00 00:00:00'),
(27, 'Its an aromatic lamb dish from one of the finest places in world. First part of the food in persian means ''oil''  and its second part signifies ''passion,boiling,hotness''. Thus that food is cooked in oil at intense heat. Can you guess the name of that place where this beautiful dish is prepared ?', 'jammu and kashmir', 6, '32.9829536,74.9356288', '2016-01-28 07:00:13', '0000-00-00 00:00:00'),
(28, 'A beautiful archipelago in India initially had three names. Then it was changed to a single name and referred to it thereafter. When was it done ??', '1973', 7, '17.380527,78.440472', '2016-01-28 19:36:56', '0000-00-00 00:00:00'),
(29, 'There I stand all victorious at 6 different places. The only man on the zenith on Indian soil. Use your brain and get a point unlocked', 'atal bihari vajpayee', 7, '22.710439,75.879908', '2016-01-28 19:37:54', '0000-00-00 00:00:00'),
(30, 'I represented coca cola and pepsico in different cases as an advocate and earned respect as strategic planer in the party. Who am I ?', 'arun jaitley', 7, '21.246791,81.630956', '2016-01-28 19:39:04', '0000-00-00 00:00:00'),
(31, 'In a joint effort by CNN-IBN and Google, Anna Hazare, Sadananda Gowda (ex-CM Karnataka), Omar Abdullah, and Sharad Pawar answered public questions. The campaign was called : The India Election __________ Series.<br>The word in the blank is mostly known to us in the form of social media conversations and conferences.', 'hangout', 7, '25.454016,81.883096', '2016-01-28 19:40:10', '0000-00-00 00:00:00'),
(32, 'Old is gold. 94 times I have seen people ruling and I have finally tasted that success in Bidar. Who am I?', 'ramachandra veerappa', 7, '20.276386,85.842749', '2016-01-28 19:41:00', '0000-00-00 00:00:00'),
(33, 'We love get-togethers, not because we are free but because we are humans. Being human is enough a reason for our hangouts and gathering.  Even there has been a time when our get-togethers could be viewed from space! And trust me, I’m not joking!', 'kumbh mela', 8, '34.055876,74.429769', '2016-01-28 19:45:20', '0000-00-00 00:00:00'),
(34, 'Floating in the hymns of mountains, connecting people of around 7,175 in numbers who live far away, conveying their messages! Which place am I talking about?', 'dal lake', 8, '53.498445,-0.330876', '2016-01-28 19:46:10', '0000-00-00 00:00:00'),
(35, 'On One side, bundles of steels and another 50,000 African elephants, on a Weighing balance.  Again, steel wires on one hand and Earth’s circumference on another. Such a marvelous thought!', 'bandra worli sealink', 8, '21.401731,79.343559', '2016-01-28 19:47:57', '0000-00-00 00:00:00'),
(36, 'Highest bouncer, frozen audiences, and a lot of cheers. Not an ordinary scene!!', 'chail cricket ground', 8, '27.305423,88.189206', '2016-01-28 19:48:54', '0000-00-00 00:00:00'),
(37, '“swatchta hai pehchan hambari”. Not from now but for many years. Sweet gesture of ours which we gifted the whole world.  Not just extraction, we showed them all the techniques of being sweet. Which food I am talking about ?', 'sugar', 8, '51.371282,-2.251878', '2016-01-28 19:49:42', '0000-00-00 00:00:00'),
(38, 'Wings strong enough to carry the most weight, situated at Gurgaon. Largest framework to  attract the maximum of market shares, with least cost. Decode me.', 'indigo', 9, '12.303882,76.654443', '2016-01-29 10:19:24', '0000-00-00 00:00:00'),
(39, 'νέον  is the son of William Ramsay and Morris W. Travers. He is too light and does not mix  with anyone. Stars are his best friends with whom he spends all his time. Make him your   friend too. What is his real name?', 'neon', 9, '23.379184,85.315594', '2016-01-29 10:19:44', '0000-00-00 00:00:00'),
(40, 'Words have their own worth and yet they wander lonely in clouds that floats on high over  vales and hills. Suddenly all at once, in silence, William saw a crowd, fluttering and dancing in the breeze and realized the beauty of them. What was that crowd?', 'daffodils', 9, '19.119948,72.845383', '2016-01-29 10:20:00', '0000-00-00 00:00:00'),
(41, '“Men will be men”  and official sponsored of world series hockey are enough to describe this.', 'imperial blue', 9, '28.664535,77.230647', '2016-01-29 10:20:13', '0000-00-00 00:00:00'),
(42, 'Be it the river, or e-retailer, it has place which is exotic and different. What can it be?', 'amazon', 9, '12.309611,76.640485', '2016-01-29 10:20:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roundans`
--

CREATE TABLE IF NOT EXISTS `roundans` (
  `round_id` int(11) NOT NULL,
  `round_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roundans`
--

INSERT INTO `roundans` (`round_id`, `round_name`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Ak aur Ak Gyarah', 'Our thoughts never intersect but we have two same best friends. Who are we four ?', 'parallelogram', '2016-01-27 19:04:32', '0000-00-00 00:00:00'),
(2, 'English Vinglish', 'Hidden from all, it was my world. My poems were inspired from it, it was a creature so perfect so fit. Who am I ?', 'lord byron', '2016-01-27 18:51:37', '0000-00-00 00:00:00'),
(3, 'Game of Fingers', 'Born in one of the most popular nuclear research centre, today I am the most popular open source info space.', 'world wide web', '2016-01-28 04:40:33', '0000-00-00 00:00:00'),
(4, 'The Reel Life', 'Globe is all mine and golden is what I like..<br>Kids have special place in my heart<br>Time to pull your socks and boost your start !! Guess my name', 'angelina jolie', '2016-01-29 09:44:52', '0000-00-00 00:00:00'),
(5, 'Mysterious World', 'Instruments going haywire and you are lost in the middle of the blues.', 'bermuda triangle', '2016-01-28 05:33:39', '0000-00-00 00:00:00'),
(6, 'Poo chik chik chik chik', 'Kashmir tu main kanyakumari, North-South ki kat gyi dekho doori hi saari !!', 'himsagar express', '2016-01-28 06:47:15', '0000-00-00 00:00:00'),
(7, 'The Dirty Picture', 'When prayers and hymns are personified into trust and leadership', 'namo', '2016-01-28 14:02:06', '0000-00-00 00:00:00'),
(8, 'My Hidden India', 'Water, water everywhere not a drop to drink…  drained we, under the largest cloud, place not in dreams!!', 'cherrapunji', '2016-01-28 19:43:49', '0000-00-00 00:00:00'),
(9, 'Flying Colors', 'The ruler is made and the proof that you have chosen them is what I do.', 'mysore paints and varnishes private limited', '2016-01-29 09:20:42', '0000-00-00 00:00:00'),
(10, '', 'Round 10 Question', 'answer', '2016-01-23 10:02:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `solved`
--

CREATE TABLE IF NOT EXISTS `solved` (
`id` int(10) unsigned NOT NULL,
  `user_token` bigint(20) NOT NULL,
  `question_no` int(11) NOT NULL,
  `round_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
 ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `roundans`
--
ALTER TABLE `roundans`
 ADD PRIMARY KEY (`round_id`);

--
-- Indexes for table `solved`
--
ALTER TABLE `solved`
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
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solved`
--
ALTER TABLE `solved`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
