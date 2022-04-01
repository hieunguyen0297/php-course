-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `released_date` varchar(100) NOT NULL,
  `rent_price` float NOT NULL,
  `game_publisher` varchar(100) NOT NULL,
  `game_image` varchar(100) NOT NULL,
  `game_description` text NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `released_date`, `rent_price`, `game_publisher`, `game_image`, `game_description`, `genre_id`) VALUES
(1, 'Dying Light 2: Stay Human', '2/4/22', 59.99, 'Square Enix', 'dying_light_2.jpg', 'Over twenty years ago in Harran, we fought the virus - and lost. Now, we\'re losing again. The City, one of the last large human settlements, is torn by conflict. Civilization has fallen back into the Dark Ages. And yet, we still have hope. You are a wanderer with the power to change the fate of The City. But your exceptional abilities come at a price. Haunted by memories you cannot decipher, you set out to learn the truth… and find yourself in a combat zone. Hone your skills, as to defeat your enemies and make allies, you\'ll need both fists and wits.', 1),
(2, 'Forspoken', '10/11/21', 69.99, 'Square Enix', 'forspoken.jpg', 'Forspoken follows the journey of Frey, a young New Yorker transported to the beautiful and cruel land of Athia. In search of a way home, Frey must use her newfound magical abilities to traverse sprawling landscapes and battle monstrous creatures.', 1),
(3, 'Ghostwire: Tokyo', '3/25/21', 49.99, 'Bethesda', 'ghostwire.jpg', 'Ghostwire: Tokyo harnesses the power of the PlayStation 5 to re-create Tokyo\'s timeless beauty - an unmatched mix of ultra-modern cityscapes, deep dark alleyways, and beautiful ancient temples… with a supernatural twist that will be a surprise even to those who are familiar with the city. While barren and ominous, the metropolis\' splendor is on full display with iconic landmarks including Shibuya Crossing, Tokyo Tower, and more.\r\n', 1),
(4, 'Metroid Dread', '10/8/21', 44.99, 'Nintendo', 'metroid_dread.jpg', 'Samus\' story continues after the events of the Metroid Fusion game when she descends upon planet ZDR to investigate a mysterious transmission sent to the Galactic Federation. The remote planet has become overrun by vicious alien lifeforms and chilling mechanical menaces. Samus is more agile and capable than ever, but can she overcome the inhuman threat stalking the depths of ZDR?', 1),
(5, 'Tiny Tina\'s Wonderland: Next Level Edition', '3/25/21', 79.99, '2K', 'tiny_tina_wonderland.jpg', 'Embark on an epic adventure full of whimsy, wonder, and high-powered weaponry! Bullets, magic, and broadswords collide across this chaotic fantasy world brought to life by the unpredictable Tiny Tina. Roll your own multiclass hero and loot, shoot, slash, and cast your way through outlandish monsters and loot-filled dungeons on a quest to stop the tyrannical Dragon Lord. Everyone\'s welcome, so join the party, throw on your adventuring boots, and be Chaotic Great!', 1),
(6, 'Demon Slayer: Kimetsu no Yaiba - The Hinokami Chronicles', '10/15/21', 29.99, 'Sega', 'demon_slayer.jpg', 'In Taisho-era Japan, Tanjiro Kamado\'s peaceful life is shattered when he returns home to find his entire family slaughtered by a demon. The only survivor is Nezuko, his little sister who has herself been transformed into a demon. Devastated, Tanjiro sets out to walk the path of a \"Demon Slayer\" to reverse his sister\'s transformation and destroy the demon who threatens all of humanity.A story of a brother and sister, and of man and demon, now begins…', 2),
(7, 'Dengeki Bunko: Fighting Climax', '10/6/15', 19.99, 'Sega', 'fighting_climax.jpg', 'Old-school Sega fanatics will have a whale of a time in this new-school take on classic 2D fighting games. Choose from a large roster of playable characters from Dengeki Bunko manga. Whether you\'re fighting as Akira Yuki from Virtua Fighter, Selvaria Bles from Valkyria Chronicles, or Sword Art Online\'s Asuna, you\'ll have a deep arsenal of balanced moves to take on your opponent. For even more visual impact, you can fight in Sega-themed stages designed to resemble popular titles like Sonic the Hedgehog. ', 2),
(8, 'King of Fighters XV', '2/17/22', 59.99, 'Koch Media', 'king_of_fighters_xv.jpg', 'Since its debut in 1994, the KOF fighting game series has been driving the world to excitement with its appealing characters and unique game system. Six years have passed since the last title in the series, and now KOF XV surpasses all its predecessors in terms of graphics, systems, and online experience!', 2),
(9, 'Mortal Kombat 11: Ultimate Edition', '11/18/20', 39.99, 'WB Games', 'mortal_kombat_11.jpg', 'The newest installment of the critically acclaimed franchise gives players a deeply personalized experience with the brand-new Custom Character Variation System. Players can choose which Skins, Special Abilities, Intro and Victory Cinemas, Gear, Taunts, and Brutalities they wish to use to suit their style. One of the new characters making a debut is Geras, a servant of Kronika with a powerful time-manipulation ability. Returning fan-favorites include Raiden, Skarlet, Baraka, Scorpion, Sub-Zero, Sonya Blade, and more. Mortal Kombat 11 features multiple modes and challenges to keep you busy, plus a cinematic story that continues the Mortal Kombat legacy. ', 2),
(10, 'WWE 2K20', '10/21/19', 89.99, '2K', 'wwe_2k20.jpg', 'WWE 2K20 will feature key gameplay improvements, streamlined controls, and the most fun and creatively expansive entry in the franchise to date. Relive the groundbreaking journey of the Four Horsewomen and the Women\'s Evolution in 2K Showcase, featuring in-depth documentary-style vignettes, cut-scenes, and objective-based gameplay! Play through unforgettable moments and matches from the meteoric rise of the Women\'s Division, as told in the words of Charlotte Flair, Sasha Banks, Bayley, and WWE 2K20 Cover Superstar Becky Lynch! For the first time ever in WWE 2K, play as both a male and female MyPLAYER in MyCAREER as you journey through the twists, turns, and story lines on the path to WWE excellence - featuring cut-scenes and voice-overs from your favorite Superstars. Controls will be streamlined to allow new players to jump into the game more easily, while experienced players will still enjoy a challenge.', 2),
(11, 'Gas Guzzlers Extreme', '2/28/22\r\n', 59.99, 'GS2 Games', 'gas_guzzlers_extreme.jpg', 'Gas Guzzlers Extreme is a fast, furious, armed-to-the-teeth, trigger-happy shooter, shifted into top gear! Take a white-knuckle ride in this crazily addictive combat racing game that features a ton of vehicles, weapons, upgrades, on-track bonuses, and environments. Gas Guzzlers Extreme is an exciting new twist on the car combat experience with the addition of furious team/clan combat battles.', 3),
(12, 'Gran Turismo 7', '3/4/22', 89.99, 'Sony Computer Entertainment', 'gran_turismo_7.jpg', 'Whether you\'re a competitive or casual racer, collector, tuner, livery designer, or photographer - find your line with a staggering collection of game modes including fan-favorites like GT Campaign*, Arcade, and Driving School*. With the reintroduction of the legendary GT Simulation Mode*, buy, tune, race, and sell your way through a rewarding solo campaign as you unlock new cars and challenges. And if you love going head-to-head with others, hone your skills and compete in the GT Sport Mode*.', 3),
(13, 'GRID Legends', '2/25/22', 49.99, 'Electronic Arts', 'grid_legends.jpg', 'Welcome to GRID Legends: a high-stakes driving experience that combines thrilling unpredictable motorsport, incredible race variety, and an immersive driving story that puts you at the heart of the action. Race, upgrade and customise every one of GRID\'s largest ever car roster, from classic tourers, to single-seaters, to big rigs. Compete on over 130 routes including real circuits like Brands Hatch and Indianapolis, historic GRID venues, and new locations, like London and Strada Alpina - and much more to be revealed.', 3),
(14, 'Mario Kart 8: Deluxe', '4/28/17', 39.99, 'Nintendo', 'mario_kart_8.jpg', 'Mario Kart 8 is back! The Mario Kart franchise makes its debut on the Nintendo Switch. The stakes have never been higher, and the tracks are crazier than ever. So crazy, in fact, that you\'ll be driving upside down. Antigravity karts will have you zooming through new race courses in ways you\'ve never experienced before. Maneuver across walls, ceilings, and other tricky obstacles with your favorite kart, bike, or ATV. Popular features returning to the franchise are hang gliders and underwater racing. Play competitively online with up to 12 players. Whether you\'re playing as Mario, Luigi, or Donkey Kong, the definitive version of Mario Kart 8 is bound to get you speeding with excitement!', 3),
(15, 'Monster Energy Supercross 5', '3/17/22', 69.99, 'Koch Media', 'monster_energy_supercross_5.jpg', 'Jump on your bike and challenge the complete roster from the 2021 Monster Energy Supercross official championship: 450, 250 East and West, and all the tracks, to have the complete Supercross experience! Play the deepest Supercross Career Mode yet. Join the competition as a Futures and start your path to the top in the brand-new Rider Shape system: 5 different levels that each affect your rider\'s stats. Fully customize your Supercross experience with Rhythm Section, Helmet and Sticker editors. Create your helmet and share it online with players from all over the world, on any platform. Challenge your friends with the new Split Screen mode, featuring stunning Supercross multiplayer action on one local device!', 3),
(16, 'Madden NFL 22', '8/20/21', 59.99, 'Electronic Arts', 'madden_nfl_22.jpg', 'Madden NFL 22 is where gameday happens. All-new features in Franchise include staff management, an enhanced scenario engine, and weekly strategy. Share avatar progress and player class between Face of The Franchise and The Yard with unified progression. And for the first time ever in Ultimate Team, adjust Superstar X-Factors at halftime. Create your avatar and play your rookie season the way you want as a QB, WR, RB or LB. Want more customization? No problem. A new class system and player physiques let you customize ratings, skills, attributes and body type. Earn rep via gameplay and level up your avatar at each class until you max out.\r\n', 4),
(17, 'Mario Golf: Super Rush', '6/25/21', 29.99, 'Nintendo', 'mario_golf_super_rush.jpg', 'Hit the green with up to four players locally or online and golf with familiar Mushroom Kingdom characters. Modes range from Standard Golf to the energetic Speed Golf and an RPG-like golf adventure in Story Mode. Intuitive motion or button controls, a shot gauge that adapts to the curve of the course, and other new features make it easy for both new players and seasoned pros to drive and putt with power. Tee off at the same time with up to three other players and race through the course to get your ball in first. Outpace and interrupt your opponents with dashes and special shots. Mario, for example, can blow other players\' balls away. Enroll your Mii character in golf training in a prestigious country club and go from rookie to pro! You\'ll face off against your Mushroom Kingdom classmates and earn experience points. Level up to improve your character\'s stats like power, movement, and spin.', 4),
(18, 'Mario Tennis Aces', '6/21/18', 19.59, 'Nintendo', 'mario_tennies_aces.jpg', 'When he\'s not out rescuing the princess, Mario loves to unwind with a nice tennis match! This colorful sports game lets you play as iconic Mushroom Kingdom characters like Mario, Peach, Yoshi, and Bowser, all decked out in tennis gear. But don\'t let its lighthearted presentation fool you - Mario Tennis Aces is a complex and nuanced tennis simulation. Anyone can learn the controls, but they are difficult to master. As your tennis skills grow, you\'ll be able to pull off a ton of impressive shots and build elaborate strategies on the court. Whether you\'re playing against your friends or the CPU, the key to winning is reading your foe\'s on-court position and responding with the perfect shot. There\'s even an Adventure Mode that lets you tackle missions and boss battles as you learn new techniques.', 4),
(19, 'Riders Republic', '10/28/21', 59.79, 'Ubisoft', 'rider_republic.jpg', 'Jump into the Riders Republic massive multiplayer playground! Grab your bike, skis, snowboard, or wingsuit and explore an open world sports paradise where the rules are yours to make - or break. Battle against over 20 players simultaneously in a massive multiplayer playground. Compete in an all-out mass start race - collide, grind, and fight your way to the finish!', 4),
(20, 'WWE 2K22', '3/11/22', 49.98, '2K', 'wwe_2k22.jpg', 'Get ripped out of the stands and hit with complete control of the WWE Universe. Hit with the biggest and most realistic-looking WWE Superstars and Legends: The Rock, Sasha Banks, Goldberg, Brock Lesnar, and more. Relive pivotal moments in Rey Mysterio\'s iconic career in 2K Showcase and 619 your way to superstardom. Booyaka! Call the shots as a WWE General Manager in MyGM - Take the reins of Raw, SmackDown, NXT or NXT UK, and draft your ultimate roster then compete against rival GM\'s to build the biggest brand in the WWE Universe.\r\n', 4),
(21, 'Harvest Moon: One World', '3/2/21', 49.98, 'Natsume', 'harvest_moon.jpg', 'Take a trip around the world in the latest entry in the long-running Harvest Moon series! You\'ll ride camels across the deserts of Pastilla, venture deep into the snowy mountains of Salmiakki, and even visit a volcano near the cozy mountain town of Lebkuchen! Can you imagine a world without cabbage, tomatoes, or even carrots? Believe it or not, that\'s the world you\'ll find yourself in at the beginning of Harvest Moon: One World because the Harvest Goddess, the queen of crops herself, has vanished. However, before the Harvest Goddess disappeared from this world, she imbued the tiny Harvest Wisps with the knowledge of various seeds, thus ensuring the various fruits and vegetables of the world would not be lost. Using the power given to these Harvest Wisps, you\'ll unlock various seeds as you progress through the game!', 5),
(22, 'Jurassic World Evolution 2', '11/9/21', 79.99, 'Sold Out', 'jurassic_world_evolution_2.jpg', 'Jurassic World Evolution 2 is the much-anticipated sequel to Frontier\'s highly successful Jurassic World Evolution, building upon the groundbreaking and immersive 2018 management simulation. It introduces a compelling, new narrative campaign, incredible new features, and awe-inspiring new dinosaurs brought to life with captivating authenticity. Together with expanded construction and more customization options, the result is an even bigger, better, and authentic Jurassic World game.\r\n', 5),
(23, 'Surviving the Aftermath', '1/18/22', 39.49, 'Koch Media', 'surviving_the_aftermath.jpg', 'Survive and thrive in a post-apocalyptic future - resources are scarce, but opportunity calls. Build the ultimate disaster proof colony, protect your colonists, and restore civilization to a devastated world. Go beyond the colony and explore the wastelands to gather resources, meet rival colonies, and fight off bandits!\r\n', 5),
(24, 'The Great Ace Attorney Chronicles', '7/27/21', 19.99, 'Capcom', 'the_great_ace_attorney_chronicles.jpg', 'Get ready to cross-examine your opponents and reason your way to justice in The Great Ace Attorney Chronicles, releasing for the first time in North America and Europe on July 27, 2021. The collection tells the story of an ancestor of Phoenix Wright, the protagonist of the iconic Ace Attorney courtroom adventure series. In The Great Ace Attorney Chronicles, players take on the role of a defense attorney to track down evidence, argue in court, and ensure a just ruling. Featuring newly recorded English voices, The Great Ace Attorney Chronicles includes The Great Ace Attorney: Adventures and The Great Ace Attorney 2: Resolve, both previously only available in Japan.', 5),
(25, 'Two Point Campus', '5/17/21', 69.99, 'Sega', 'two_point_campus.jpg', 'A deep and engaging management sim from the creators of the multi-million selling Two Point Hospital. Taking the very best fan feedback and propelling the series to new heights. Build & Control your own university - empowered with new creative tools to help you build a unique and distinct educational masterpiece! Nurture your students through the best years of their lives with new and improved relationships systems! Make sure they have everything they need to work hard and play hard!', 5);

-- --------------------------------------------------------

--
-- Table structure for table `game_genre`
--

CREATE TABLE `game_genre` (
  `genre_id` int(11) NOT NULL,
  `genre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_genre`
--

INSERT INTO `game_genre` (`genre_id`, `genre`) VALUES
(1, 'Action Adventure'),
(2, 'Fighting'),
(3, 'Racing'),
(4, 'Sports'),
(5, 'Strategy');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(4) NOT NULL,
  `role` varchar(25) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`) VALUES
(1, 'System Administrator', 'The system administrator has full permissions and can edit the content of the website.'),
(2, 'Basic User', 'A basic user can use the website to rent video games via the shopping cart.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'Man', 'admin@admin.com', 'admin', 'password', 1),
(2, 'Basic', 'User', 'basic@user.com', 'basicuser', 'password', 2),
(3, 'Zach', 'Czachura', 'zczachur@iu.edu', 'zczachura', 'password', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `game_genre`
--
ALTER TABLE `game_genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `game_genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
