-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 05:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wewatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `userid`, `Username`, `Email`, `password`, `user_type`) VALUES
(1, 'USR_91487_0', 'don', 'donbenny916@gmail.com', '1234', 'admin'),
(27, 'USR_36373_2', 'hellorenu', 'renu@gmail.com', 'Don@123', 'user'),
(28, 'USR_7908_2', 'tks', 'don@as.com', '2588520@', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `movie_no` int(11) NOT NULL,
  `Movie_name` text NOT NULL,
  `movie_tag_id` text DEFAULT NULL,
  `movie_thumbnail` text DEFAULT NULL,
  `rate_avg` double DEFAULT 0,
  `description` longtext NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL,
  `total_ratings` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`movie_no`, `Movie_name`, `movie_tag_id`, `movie_thumbnail`, `rate_avg`, `description`, `image`, `type`, `total_ratings`) VALUES
(1, 'Spider_man', 'spider_man', 'https://img.hurawatch.it/xxrz/250x400/345/44/a0/44a071d59a52fc4addc2d7208fe9242b/44a071d59a52fc4addc2d7208fe9242b.jpg', 3, 'Spider-Man is a superhero appearing in American comic books published by Marvel Comics. Created by writer-editor Stan Lee and artist Steve Ditko, he first appeared in the anthology comic book Amazing Fantasy #15 (August 1962) in the Silver Age of Comic Books. He has since been featured in films, television shows, video games, and plays. Spider-Man is the alias of Peter Parker, an orphan raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker died in a plane crash. Lee and Ditko had the character deal with the struggles of adolescence and financial issues and gave him many supporting characters, such as Flash Thompson, J. Jonah Jameson, and Harry Osborn; romantic interests Gwen Stacy, Mary Jane Watson, and the Black Cat; and foes such as Doctor Octopus, the Green Goblin, and Venom. In his origin story, he gets spider-related abilities from a bite from a radioactive spider; these include clinging to surfaces, superhuman strength and agility, and detecting danger with his \"spider-sense.\" He also builds wrist-mounted \"web-shooter\" devices that shoot artificial spider webs of his own design.\r\n\r\n', 'https://wallpaperaccess.com/full/1288436.jpg', 'Movie', 1),
(3, 'Uncharted', 'uncharted', 'https://img.hurawatch.it/xxrz/250x400/345/17/59/175956f74a1490c57ac31647c9be6776/175956f74a1490c57ac31647c9be6776.jpg', 0, 'Uncharted is a 2022 American action-adventure film directed by Ruben Fleischer from a screenplay by Rafe Lee Judkins, Art Marcum and Matt Holloway, based on the video game franchise of the same name developed by Naughty Dog and published by Sony Interactive Entertainment. It stars Tom Holland as Nathan Drake and Mark Wahlberg as Victor Sullivan, with Sophia Ali, Tati Gabrielle, and Antonio Banderas in supporting roles. In the film, Drake is recruited by Sullivan in a race against corrupt billionaire Santiago Moncada (Banderas) and mercenary leader Jo Braddock (Gabrielle) to locate the fabled treasure of the Magellan expedition.The film entered development in 2008 with producer Avi Arad stating that he would be working with Sony Pictures to develop a film adaptation of the video game franchise. It entered a complicated production process with various directors, screenwriters, and cast members attached at various points. \r\n', 'https://images4.alphacoders.com/120/1205664.jpg', 'Movie', 0),
(4, 'The Princess', 'the_princess', 'https://img.hurawatch.it/xxrz/250x400/345/a3/05/a305824badd6fbb966b737ecb086806b/a305824badd6fbb966b737ecb086806b.jpg', 0, 'The film is set in a medieval realm ruled by a King and his Queen who have two daughters, the titular Princess and her younger sister Violet. The Princess was drilled in the fighting arts by Linh, the niece of one of her father\'s advisors, with her mother\'s quiet approval. Since the Queen did not bear any sons, the King intended to wed the Princess to Julius, the ruthless son of a royal diplomat who despises the King\'s peaceful reign, thinking that a \"strong\" king should rule with an iron fist. But the Princess left him at the altar, and as a result, Julius, his whip-wielding henchwoman Moira, and a band of brutal mercenaries took the castle by force, seizing the royal family and their retainers.The Princess is locked in the top of her castle\'s highest tower to await her forced wedding with Julius. When two mercenaries enter and prepare to rape her, she kills them and sets out to rescue her family. After she slays several mercenaries on her way, Julius and Moira are finally alerted and send their men after her. She evades her pursuers and meets up with Linh, who escaped the castle\'s sacking and joins her in her fight. While trying to reach the sewers, and from there the dungeons, they are forced to fight Moira, and Linh stays behind to stall her.\r\n', 'https://staticg.sportskeeda.com/editor/2022/06/fb807-16564393892899-1920.jpg', 'Movie', 0),
(5, 'Code_Name_Banshee', 'code_name_banshee', 'https://img.hurawatch.it/xxrz/250x400/345/b4/0e/b40e5e06b41b3487a49f491c7dfed17c/b40e5e06b41b3487a49f491c7dfed17c.jpg', 3, 'Code Name Banshee is an action movie about an assassin for hire (Jaime King) helping her late father\'s former partner (Antonio Banderas) fight a dangerous enemy (Tommy Flanagan). It\'s great to watch two strong women driving the movie, but there\'s so little actually going on that it\'s ultimately a letdown. Violence includes tons of shootouts, with characters being shot and killed, blood sprays, grenades/explosions, fighting, punching, and women getting treated roughly. Language is also strong, with uses of \"f--k,\" \"s--t,\" \"p---y,\" \"a--hole,\" and more. There\'s social beer drinking, and a minor character drinks shots in a bar.\r\n', 'https://i.ytimg.com/vi/Cj876ciYN0E/maxresdefault.jpg\r\n', 'Movie', 1),
(7, 'Top_Gun_Maverick', 'top_gun_maverick', 'https://img.hurawatch.it/xxrz/250x400/345/8c/76/8c76f7ba1f8d85c3c260b7347e1e64cc/8c76f7ba1f8d85c3c260b7347e1e64cc.jpg', 5, 'Top Gun: Maverick is a 2022 American action drama film directed by Joseph Kosinski and written by Ehren Kruger, Eric Warren Singer, and Christopher McQuarrie, from a story by Peter Craig and Justin Marks. The sequel to Top Gun (1986) and the second installment in the Top Gun film series, the film stars Tom Cruise as Captain Pete \"Maverick\" Mitchell reprising his role from the original, alongside Miles Teller, Jennifer Connelly, Jon Hamm, Glen Powell, Lewis Pullman, Ed Harris, and Val Kilmer (who also reprises his role). It follows Maverick confronting his past while training a group of younger TOPGUN graduates, including the son of his deceased best friend.\r\n', 'https://i.swncdn.com/media/800w/via/images/2022/05/27/25700-top-gun-maverick-scott-garfield-2019-paramoun_source_file.jpg\r\n', 'Movie', 1),
(8, 'Batman', 'batman', 'https://img.hurawatch.it/xxrz/250x400/345/21/2d/212d2d95b9d515504a4de227d49a769f/212d2d95b9d515504a4de227d49a769f.jpg', 3, 'Batman[a] is a superhero appearing in American comic books published by DC Comics. The character was created by artist Bob Kane and writer Bill Finger, and debuted in the 27th issue of the comic book Detective Comics on March 30, 1939. In the DC Universe continuity, Batman is the alias of Bruce Wayne, a wealthy American playboy, philanthropist, and industrialist who resides in Gotham City. Batman\'s origin story features him swearing vengeance against criminals after witnessing the murder of his parents Thomas and Martha, a vendetta tempered with the ideal of justice. He trains himself physically and intellectually, crafts a bat-inspired persona, and monitors the Gotham streets at night. Kane, Finger, and other creators accompanied Batman with supporting characters, including his sidekicks Robin and Batgirl; allies Alfred Pennyworth, James Gordon, and Catwoman; and foes such as the Penguin, the Riddler, Two-Face, and his archenemy the Joker.\r\n', 'https://phantom-marca.unidadeditorial.es/98c8f9c58e54b477dac2ef7ba89df382/resize/1320/f/jpg/assets/multimedia/imagenes/2021/10/17/16345007851976.jpg\r\n', 'Movie', 1),
(9, 'Spider_Head', 'spider_head', 'https://img.hurawatch.it/xxrz/250x400/345/c1/81/c1812a66e9a1b17314c7a18acc8c3afa/c1812a66e9a1b17314c7a18acc8c3afa.jpg', 0, 'Spiders (order Araneae) are air-breathing arthropods that have eight legs, chelicerae with fangs generally able to inject venom,[2] and spinnerets that extrude silk.[3] They are the largest order of arachnids and rank seventh in total species diversity among all orders of organisms.[4][5] Spiders are found worldwide on every continent except for Antarctica, and have become established in nearly every land habitat. As of August 2021, 49,623 spider species in 129 families have been recorded by taxonomists.[1] However, there has been dissension within the scientific community as to how all these families should be classified, as evidenced by the over 20 different classifications that have been proposed since 1900.[6]\r\n', 'https://occ.a.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABeCI-2nKJp1DrYRDKjUkttzEvfgK6o0LmnYShqXMmyfUoFNshhYbwaPLjuu8CBRddo8yG0MDDvQo61f6KEKN4J3yyu360UvXTukU.jpg?r=60e\r\n', 'Movie', 1),
(10, 'Endangered', 'endangered', 'https://img.hurawatch.it/xxrz/250x400/345/c3/cb/c3cbb50763055e3e3f981e95a84db7bf/c3cbb50763055e3e3f981e95a84db7bf.jpg', 4, 'Thriller about a burnt out New York ex-cop Reuben Castle (Robert Urich) and a female sheriff (Jo Beth Williams) who begin to fall in love while investigating a string of mysterious cattle mutilations in a small Colorado town. Castle is a retired alcoholic police lieutenant out visiting the town with his tomboy daughter. At first he tries to stay out of the case but finds himself involved after the mysterious death of his friend Joe Hiatt. Hiatt was the editor of the local paper whose theories about black helicopters have aroused the ire of cattle baron Ben Morgan. Morgan seems to know much more about the cattle killings than he is telling, and may know why the organs of the dead cattle are being harvested. Castle is trying miserably to stay sober, and he finds himself back in danger and in love, as he and the sheriff work together to get to the bottom of the mystery, encountering incredible danger and resistance from the frightened locals. Morgan, who is turning the locals against Castle, also seems to have links to organizations which are not local, although these are denied.\r\n', 'https://i0.wp.com/doblumedia.s3.amazonaws.com/wpcontent/uploads/2021/06/26112403/Endangered-Species2021-06-26-11h20m59s889.png?ssl=1\r\n', 'Movie', 1),
(13, 'Valley_of_the_dead', 'valley_of_the_dead', 'https://img.hurawatch.it/xxrz/250x400/345/93/10/9310ac3536d2bf696452b7ea668fe7f7/9310ac3536d2bf696452b7ea668fe7f7.jpg', 3, 'Valley of the Dead (Spanish: Malnazidos)[1] is a 2020 Spanish zombie action film directed by Javier Ruiz Caldera and Alberto de Toro set in the Spanish Civil War. Its cast features Miki Esparbé, Aura Garrido, Luis Callejo, Álvaro Cervantes, Jesús Carroza and María Botto.Malnazidos is an adaptation of the novel Noche de difuntos del 38 by Manuel Martín Ferreras.[11] The film was produced by Telecinco Cinema, Cactus Flower Producciones, Malnazidos AIE, La Terraza Films and Ikiru Films.[12] It was co-directed by Javier Ruiz Caldera and Alberto de Toro whereas the screenplay was written by Jaime Marqués Olarreaga, Alberto Fernández Arregui and Cristian Conti.[12] Ghislain Barrois, Álvaro Augustin, Cristian Conti, Javier Ugarte and Edmon Rochare were credited as producers.[11] Shooting took place in Catalonia.[8]\r\n', 'https://occ-0-2568-2186.1.nflxso.net/dnm/api/v6/6AYY37jfdO6hpXcMjf9Yu5cnmO0/AAAABe7HNQCPgpcNjV6p5pxHKx97W99a7leUjWlZOyKe8mPaESROWMIb-QAnORMZAqhxJf0LTwzXBJr7qmzWAhu7wvSR0e1iyLUfOIOQ.jpg?r=a0c\r\n', 'Movie', 2),
(106, 'home', 'home_2022', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR9CHannr6pNNU-9-VhPlgmX2L7duBSXD-bNEQXKsSFM5v3ump8', 4, 'Home is an Indian Malayalam-language drama film directed and written by Rojin Thomas.[2] The film stars Indrans, Sreenath Bhasi, Manju Pillai, Naslen K. Gafoor, Johny Antony, and Kainakary Thankaraj.[1][3] The film was released on Amazon Prime Video on 19 August 2021.[4][5][6] This film received widespread critical attention. The story, background score, cinematography, social relevance, characterization and performances of the lead cast especially that of Indrans and Manju Pillai was critically acclaimed. Deepa Thomas plays as the lead actress.\r\nThe plot revolves around a middle-class family consisting of Oliver Twist (Indrans), Kuttiyamma (Manju Pillai), Antony (Sreenath Bhasi), Charles (Naslen K. Gafoor), and Appachan (Kainakary Thankaraj). It\'s a film that serves as a mirror for today\'s generation in a world full of technology.The story revolves around a technologically challenged father and his tech-savvy sons.\r\n', 'https://static.toiimg.com/photo/85431825.cms\r\n', 'Movie', 3),
(115, 'kgf', 'kgf', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmMDMExq7bSNx_4YMaNZXdlLdC4od2IpI255BFtJXfC6r0gVDt', 1.5, 'K.G.F: Chapter 2 is a 2022 Indian Kannada-language period action film written and directed by Prashanth Neel, and produced by Vijay Kiragandur under the banner Hombale Films. The second instalment in a two-part series, it serves as a sequel to the 2018 film K.G.F: Chapter 1. The film stars Yash, Sanjay Dutt, Raveena Tandon, Srinidhi Shetty and Prakash Raj. It follows the assassin Rocky, who after establishing himself as the kingpin of the Kolar Gold Fields, must retain his supremacy over adversaries and government officials, while also coming to terms with his past\r\nProduced on a budget of ₹100 crore (US$13 million), K.G.F: Chapter 2 is the most expensive Kannada film ever made. Neel retained the technicians from its predecessor with Bhuvan Gowda handling the cinematography and Ravi Basrur composed the film score and songs. Dutt and Tandon joined the cast in early 2019, marking the former\'s Kannada film debut. Portions of the film were shot back-to-back with Chapter 1. Principal photography for the rest of the sequences commenced in March 2019, but was halted in February 2020 owing to the COVID-19 lockdown in India. Filming resumed five months later and was completed in December 2020. Locations included Bangalore, Hyderabad, Mysore and Kolar.\r\n', 'https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2022/05/yashkgf-2-1651472029.jpg', 'Movie', 2),
(163, 'Jhon Luther', 'jhon_luther', 'https://m.media-amazon.com/images/M/MV5BNDk4YWYyYmEtMGM1Mi00MmJiLTkyYzQtMDY2ZTlkMzViN2M4XkEyXkFqcGdeQXVyMjkxNzQ1NDI@._V1_FMjpg_UX1000_.jpg', 3, '', '', '', 1),
(164, 'Thallumala', 'thallumala', 'https://m.media-amazon.com/images/M/MV5BYjM0ZTA0YzMtOWNlZC00NTdhLWE2YTQtYTNmZjFkNGNiNDY5XkEyXkFqcGdeQXVyMjkxNzQ1NDI@._V1_.jpg', 4, 'Thallumaala is a 2022 Indian Malayalam-language action comedy film directed by Khalid Rahman. Written by Muhsin Parari and Ashraf Hamza, the film is produced by Ashiq Usman. The film stars Tovino Thomas, Kalyani Priyadarshan and Shine Tom Chacko in lead roles. The principal photography started on 2021 October 12', 'https://img.onmanorama.com/content/dam/mm/en/entertainment/movie-reviews/images/2022/8/12/tovino-thallumala-c.jpg', 'Movie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `review_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` longtext NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`review_id`, `movie_id`, `user_rating`, `user_review`, `datetime`, `user_name`) VALUES
(10, 115, 0, 'dasd', '2022-08-06 07:32:57', 'don'),
(11, 9, 0, 'spiderhead ggooof', '2022-08-06 07:33:11', 'don'),
(12, 106, 3, 'vcxvvds', '2022-08-08 06:17:52', 'don'),
(13, 13, 3, 'gioodds', '2022-08-08 06:17:59', 'don'),
(14, 10, 4, 'nice', '2022-08-08 08:38:51', 'don'),
(15, 13, 3, 'fsdfsf', '2022-08-08 08:46:30', 'test-user'),
(16, 1, 3, 'dasddac', '2022-08-08 08:46:52', 'test-user'),
(17, 5, 3, 'nice one\n', '2022-08-08 08:48:20', 'test-user'),
(18, 8, 3, 'dsad', '2022-08-08 08:49:09', 'test-user'),
(20, 163, 3, 'crime thriller goood frell', '2022-08-08 09:24:52', 'don'),
(21, 106, 5, 'If there is a better word than stunning then I would use that here. Crime thillers and horror genre have been ruling the Malayalam film industry. The trend was interesting and good to watch but somewhere somehow I missed a good laugh and tension free movie. And this movie just filled my appetite! What a wonderful movie. Simple and good humour. Relatable af!😂 Hats off to the director! Brilliant performance by Indrans sir, he reminded me of my father in many scenes. Like the gestures and talks. Also Ive always heard my father talking about going under the lake to pick out rocks, climbing hills, encountering snakes ect... So like my usual self Ive always laughed at it like sreenath basi did! After this film Im sitting here thinking how lively and colourful would be those experiences in his mind but we could never see it like how he saw. Back to the movie, both the children did complete justice to the techno-expert youth. And manju pilla did an awesome job to! That temper!😂 All the other characters were also potrayed wonderfully. \nOverall this movie was something that malayalam industry needed. \nBrilliant 👏👏👏⭐⭐⭐⭐⭐', '2022-08-10 09:08:38', 'tks'),
(22, 106, 4, 'Absolutely incredible!! The best malayalam movie to be released in 2021 (yet). My friends are also blasting with positive reviews on this movie. Its got a proper concept, and they ve represented it very beautifully! It s got some really good jokes. And they have out at the perfect timings. They are also relatable to all age groups, which makes it the perfect family movie to watch. Something else I really appreciate about this movie is the actors. Some movies spend a lot of their budget on actors and dont give them the proper roles that suit their characteristics. This movie has given the actors the best roles they can get. Speaking of actors, a huge shoutout to all the actors who have acted in this movie. All of them did a perfect and splendid job! They expressed the emotions they were supposed to express perfectly. The best part about this movie are the jokes, I bet everyone will laugh at least once while watching this movie. If someone asks me for a movie suggestion, this is gonna be on my top 3 list. Before I conclude, here is a simple suggestion, if you were to ever watch this movie, watch it with your family, that will make the experience very much more lively.', '2022-08-10 09:25:07', 'hellorenu'),
(23, 115, 3, 'sxzasasda dsadasd', '2022-08-13 03:28:12', 'hellorenu'),
(24, 164, 4, 'awsome nice and ggoood', '2022-08-13 05:51:09', 'tks');

-- --------------------------------------------------------

--
-- Table structure for table `slider_movies`
--

CREATE TABLE `slider_movies` (
  `movie_name` text NOT NULL,
  `movie_img` text NOT NULL,
  `duration` int(30) DEFAULT NULL,
  `genere` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `movie_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_movies`
--

INSERT INTO `slider_movies` (`movie_name`, `movie_img`, `duration`, `genere`, `language`, `description`, `movie_no`) VALUES
('The Boys', '\"https://img.hurawatch.it/xxrz/1200x600/345/eb/16/eb169ba8c56f28cb6313e90180a08e2c/eb169ba8c56f28cb6313e90180a08e2c.jpg\"', 60, 'Action,Romance', 'English', 'A group of vigilantes known informally as “The Boys” set out to take down corrupt superheroes with no more than blue-collar grit and a willingness to fight dirty.', 1),
('The Northmen', '\"https://img.hurawatch.it/xxrz/1200x600/345/34/e3/34e3fb454c0f6d2f713671d402cc9a51/34e3fb454c0f6d2f713671d402cc9a51.jpg\"', 130, 'Action,Epic,History', 'English', 'Prince Amleth is on the verge of becoming a man when his father is brutally murdered by his uncle, who kidnaps the boys mother. Two decades later, Amleth is now a Viking whos on a mission to save his mother, kill his uncle and avenge his father.', 2),
('The Umberla Acadamy', '\"https://img.hurawatch.it/xxrz/1200x600/345/c4/c9/c4c94224d04ca24c6a7609574cd86452/c4c94224d04ca24c6a7609574cd86452.jpg\"', 60, 'Action,Romance', 'English', 'A dysfunctional family of superheroes comes together to solve the mystery of their fathers death, the threat of the apocalypse and more.', 3),
('Doctor Strange', '\"https://img.hurawatch.it/xxrz/1200x600/345/85/df/85df956da490423f01f503313513912a/85df956da490423f01f503313513912a.jpg\"', 100, 'Action,Romance', 'English', 'Doctor Strange in the Multiverse of Madness is a 2022 American superhero film based onMarvel Comics featuring the character Doctor Strange. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the sequel to Doctor Strange (2016) and the 28th film in the Marvel Cinematic Universe (MCU).', 4),
('Westworld', '\"https://img.hurawatch.it/xxrz/1200x600/345/6f/99/6f991e65077747b8bb07a7f6cc92bfa0/6f991e65077747b8bb07a7f6cc92bfa0.jpg\"', 120, 'Action,Romance', 'English', 'A dark odyssey about the dawn of artificial consciousness and the evolution of sin. Setat the intersection of the near future and the reimagined past, it explores a world inwhich every human appetite, no matter how noble or depraved, can be indulged.', 5),
('Kaduva', '\"https://imgnew.outlookindia.com/uploadimage/library/16_9/16_9_5/Kaduva_1655718782.jpg\"', 125, 'Action,Romance', 'Malayalam', 'Kaduv is an upcoming Indian Malayalam-language period action thrillerfilm directed by Shaji Kailas and written by Jinu V. Abraham. It stars PrithvirajSukumaran in the title role, along with Vivek Oberoi and Samyuktha Menon.', 6),
('The Lost city', '\"https://img.hurawatch.it/xxrz/1200x600/345/86/31/8631983867f3a3e8ab2e102c55cc09f9/8631983867f3a3e8ab2e102c55cc09f9.jpg\"', 120, 'Action,Adventure,Romance', 'English', 'Follows a reclusive romance novelist who was sure nothing could be worse than getting stuck on a book tour with her cover model, until a kidnapping attempt sweeps them both into a cutthroat jungle adventure, proving life can be so much stranger, and more romantic, than any of her paperback fictions.', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`movie_no`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `slider_movies`
--
ALTER TABLE `slider_movies`
  ADD PRIMARY KEY (`movie_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `movie_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `home_content` (`movie_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
