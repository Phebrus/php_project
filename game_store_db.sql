-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 04:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `calendar_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `mod_type` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `image_url` text NOT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendar_id`, `game_name`, `mod_type`, `release_date`, `image_url`, `link`) VALUES
(1, 'Night Vision', 'DEMO', '2025-05-01', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(2, 'Infinite Ammo', 'CONSOLE', '2025-05-03', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(3, 'Ultra Graphics', 'DEMO', '2025-05-07', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(4, 'Realism Pack', 'CONSOLE', '2025-05-10', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(5, 'Cyber Skins', 'DEMO', '2025-05-12', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(6, 'Zombie Mode', 'CONSOLE', '2025-05-15', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(7, 'Hardcore AI', 'DEMO', '2025-05-18', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(8, 'Retro Filter', 'CONSOLE', '2025-05-21', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(9, 'Neon Trails', 'DEMO', '2025-05-25', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(10, 'Tactical Strike', 'CONSOLE', '2025-05-28', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `game_name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `publisher` varchar(100) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `publisher`, `genre_id`, `description`, `price`, `image`) VALUES
(22, 'Palworld', 'Pocketpair', 2, 'An open-world monster-catching survival game combining crafting and Pokémon-like creatures.', 40.99, 'https://i.ytimg.com/vi/Y0vCA4uWMP8/maxresdefault_live.jpg'),
(23, 'Dragon’s Dogma 2', 'Capcom', 3, 'Fantasy RPG where you battle mythical beasts and explore vast lands.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2054970/header.jpg'),
(24, 'Final Fantasy VII Rebirth', 'Square Enix', 3, 'Part two of the FFVII Remake trilogy with expanded world and story.', 69.99, 'https://api.gamer.nl/media?url=https://www.datocms-assets.com/56706/1708593948-final-fantasy-vii-rebirth.jpeg?w=1100'),
(25, 'Stellar Blade', 'Shift Up', 1, 'Fast-paced action game set in a post-apocalyptic sci-fi world.', 69.99, 'https://th.bing.com/th/id/OIP.fzfAOUQ1RmIldfYpWZIVcgHaEK?cb=iwp2&rs=1&pid=ImgDetMain'),
(26, 'Banishers: Ghosts of New Eden', 'DON’T NOD', 3, 'Narrative action RPG about ghost hunters torn between love and duty.', 51.99, 'https://static1.srcdn.com/wordpress/wp-content/uploads/2024/01/banishers-ghosts-of-new-eden-game-poster.jpg'),
(27, 'Persona 3 Reload', 'Atlus', 3, 'A stylish and deep JRPG remake of the classic Persona 3.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2161700/header.jpg'),
(28, 'Like a Dragon: Infinite Wealth', 'Ryu Ga Gotoku Studio', 3, 'A wacky and heartfelt Yakuza RPG with turn-based combat.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2072450/header.jpg'),
(29, 'Prince of Persia: The Lost Crown', 'Ubisoft', 1, 'A Metroidvania-style reboot with fast acrobatic combat and puzzles.', 49.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2410460/header.jpg'),
(30, 'Tekken 8', 'Bandai Namco', 4, 'The latest in the iconic 3D fighting series.', 69.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1778820/header.jpg'),
(31, 'Suicide Squad: Kill the Justice League', 'Rocksteady', 1, 'Squad-based shooter featuring Harley Quinn and Deadshot vs brainwashed heroes.', 69.99, 'https://cdn.akamai.steamstatic.com/steam/apps/315210/header.jpg'),
(32, 'Alan Wake 2', 'Remedy Entertainment', 2, 'A dark, atmospheric survival horror game with a deep story.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1088850/header.jpg'),
(33, 'Baldur\'s Gate 3', 'Larian Studios', 3, 'Award-winning CRPG based on Dungeons & Dragons.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1086940/header.jpg'),
(34, 'Resident Evil 4 Remake', 'Capcom', 2, 'A modern horror classic reborn with stunning visuals and gameplay.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2050650/header.jpg'),
(35, 'Remnant II', 'Gunfire Games', 1, 'Souls-like co-op shooter in a multiverse of monstrous threats.', 49.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1282100/header.jpg'),
(36, 'Dead Space Remake', 'Motive Studio', 2, 'A faithful and terrifying rebuild of the 2008 horror classic.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1693980/header.jpg'),
(37, 'Armored Core VI: Fires of Rubicon', 'FromSoftware', 1, 'Fast-paced mecha action from the makers of Elden Ring.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1888160/header.jpg'),
(38, 'Starfield', 'Bethesda', 3, 'Epic space RPG with thousands of explorable planets.', 69.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1716740/header.jpg'),
(39, 'Cyberpunk 2077: Phantom Liberty', 'CD Projekt Red', 3, 'Story-rich expansion to Cyberpunk 2077 with spy-thriller vibes.', 29.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2138330/header.jpg'),
(40, 'Lies of P', 'NEOWIZ', 1, 'Dark souls-like inspired by Pinocchio, with unique steampunk combat.', 49.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1627720/header.jpg'),
(41, 'Atomic Heart', 'Mundfish', 1, 'Bioshock-like sci-fi shooter with Russian retro-futuristic design.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/668580/header.jpg'),
(42, 'Forza Motorsport', 'Turn 10 Studios', 5, 'High-end car simulation game with stunning realism.', 69.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2440510/header.jpg'),
(43, 'EA Sports FC 24', 'EA Sports', 6, 'The rebranded FIFA series with next-gen football gameplay.', 69.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2195250/header.jpg'),
(44, 'F1 24', 'Codemasters', 6, 'Official Formula 1 racing game with realistic driving mechanics.', 59.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2676950/header.jpg'),
(45, 'Cities: Skylines II', 'Colossal Order', 7, 'Advanced city-building sim with deeper systems and realism.', 49.99, 'https://cdn.akamai.steamstatic.com/steam/apps/949230/header.jpg'),
(46, 'Senua\'s Saga: Hellblade II', 'Ninja Theory', 2, 'Haunting psychological adventure in a Nordic world.', 59.99, 'https://c4.wallpaperflare.com/wallpaper/665/164/891/senua-s-saga-hellbalde-ii-video-game-art-hd-wallpaper-preview.jpg'),
(47, 'Avowed', 'Obsidian Entertainment', 3, 'Fantasy RPG set in the Pillars of Eternity universe.', 69.99, 'https://www.digitaltrends.com/wp-content/uploads/2024/01/Avowed-key-art-1.jpg?fit=1920%2C1080&p=1'),
(48, 'Black Myth: Wukong', 'Game Science', 3, 'Souls-like action RPG based on the Chinese legend of Sun Wukong.', 69.99, 'https://th.bing.com/th/id/OIP.b1aGpwP-lb0JMeY3LmTjLwHaEK?cb=iwp2&rs=1&pid=ImgDetMain'),
(49, 'The Plucky Squire', 'All Possible Futures', 2, 'Adventure between 2D and 3D in a storybook world.', 39.99, 'https://cdn.akamai.steamstatic.com/steam/apps/2084830/header.jpg'),
(50, 'Hades II', 'Supergiant Games', 1, 'Mythological roguelike sequel with new protagonist and powers.', 29.99, 'https://cdn.akamai.steamstatic.com/steam/apps/1145350/header.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'RPG'),
(4, 'Simulation'),
(5, 'Strategy'),
(6, 'Puzzle'),
(7, 'Horror'),
(8, 'Shooter'),
(9, 'Sports'),
(10, 'Racing'),
(11, 'MMO'),
(12, 'Sandbox'),
(13, 'Platformer'),
(14, 'Fighting'),
(15, 'Stealth'),
(16, 'Rhythm'),
(17, 'Party'),
(18, 'Educational'),
(19, 'Card'),
(20, 'Trivia');

-- --------------------------------------------------------

--
-- Table structure for table `mods`
--

CREATE TABLE `mods` (
  `mod_id` int(11) NOT NULL,
  `mod_name` varchar(255) NOT NULL,
  `mod_type` varchar(255) NOT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mods`
--

INSERT INTO `mods` (`mod_id`, `mod_name`, `mod_type`, `release_date`, `image_url`, `link`) VALUES
(1, 'Night Vision', 'DEMO', '2025-05-01', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(2, 'Infinite Ammo', 'CONSOLE', '2025-05-03', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(3, 'Ultra Graphics', 'DEMO', '2025-05-07', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(4, 'Realism Pack', 'CONSOLE', '2025-05-10', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(5, 'Cyber Skins', 'DEMO', '2025-05-12', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(6, 'Zombie Mode', 'CONSOLE', '2025-05-15', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(7, 'Hardcore AI', 'DEMO', '2025-05-18', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(8, 'Retro Filter', 'CONSOLE', '2025-05-21', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(9, 'Neon Trails', 'DEMO', '2025-05-25', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#'),
(10, 'Tactical Strike', 'CONSOLE', '2025-05-28', 'https://mods.store.gx.me/mods/b39cda62-eb21-42c3-b62d-fadb917f8a20/7ff04974-8391-437c-b196-0775744cc329/e2739783-a8f6-4cbb-8707-44e825638a96/contents/icon_512.png?e6a29d05b80e64db2b2fd8de79902296', '#');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `source` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `source`, `category`, `title`, `image_url`) VALUES
(1, 'GamesRadar', 'News', 'Talk To Me director\'s new horror movie Bring Her Back is being called...', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(2, 'Digital Trends', 'Gaming', '8 intense and gripping movies like Sinners to watch next', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(3, 'Gamespot', 'News', 'Split Fiction Sales Are Nearly Double What EA Expected So Far', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(4, 'TechRadar', 'Technology', 'PlayStation 5’s New Update Brings Major Performance Improvements', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(5, 'Kotaku', 'Gaming', 'The Best RPGs to Play on Your PlayStation 4 and 5', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(6, 'IGN', 'Gaming', 'How to Defeat Every Boss in Elden Ring', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(7, 'Polygon', 'Gaming', 'The Evolution of the Star Wars Video Games', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(8, 'Eurogamer', 'Gaming', 'FIFA 22 Review: A game that’s in a league of its own', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(9, 'GamesRadar', 'Gaming', 'Top 10 Open World Games You Should Play in 2023', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(10, 'The Verge', 'Technology', 'The Best Laptops for Gaming in 2023', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(11, 'Game Informer', 'Gaming', 'Red Dead Redemption 2 PC Update Brings Enhanced Performance', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(12, 'PC Gamer', 'Gaming', 'The Best Gaming Keyboards in 2023', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(13, 'GamesRadar', 'News', 'Hideo Kojima Explains Why His Next Game Is A New Direction', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(14, 'Engadget', 'Technology', 'The Rise of Cloud Gaming and Its Future', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg'),
(15, 'PCGamesN', 'Gaming', 'The Best Free-to-Play Games You Can Play in 2023', 'https://t4.ftcdn.net/jpg/04/18/23/83/360_F_418238331_zgJDGd2iOk4RuhqxSeN33CgrTN9keOJT.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `username`, `password`) VALUES
(1, 'user1@example.com', 'user1', 'pass1'),
(2, 'user2@example.com', 'user2', 'pass2'),
(3, 'user3@example.com', 'user3', 'pass3'),
(4, 'user4@example.com', 'user4', 'pass4'),
(5, 'user5@example.com', 'user5', 'pass5'),
(6, 'user6@example.com', 'user6', 'pass6'),
(7, 'user7@example.com', 'user7', 'pass7'),
(8, 'user8@example.com', 'user8', 'pass8'),
(9, 'user9@example.com', 'user9', 'pass9'),
(10, 'user10@example.com', 'user10', 'pass10'),
(11, 'user11@example.com', 'user11', 'pass11'),
(12, 'user12@example.com', 'user12', 'pass12'),
(13, 'user13@example.com', 'user13', 'pass13'),
(14, 'user14@example.com', 'user14', 'pass14'),
(15, 'user15@example.com', 'user15', 'pass15'),
(16, 'user16@example.com', 'user16', 'pass16'),
(17, 'user17@example.com', 'user17', 'pass17'),
(18, 'user18@example.com', 'user18', 'pass18'),
(19, 'user19@example.com', 'user19', 'pass19'),
(20, 'user20@example.com', 'user20', 'pass20'),
(21, 'sabssa.sdsdaw@gmail.com', 'saadddabvba', 'Saba2004'),
(22, 'saba.sherazadishvili2004@gmail.com', 'saba', 'Saba2004'),
(26, 'sabssa.sdsdawsssssss@gmail.com', 'sabashaaa', '$2y$10$6OYr4CXriBrCBVZZHP50k.60YeWu253u0UGJKsZ597TsLAGGcYmxC'),
(27, 'sabssa.sdsdawaaaaaaa@gmail.com', 'sabashaaadddd', '$2y$10$rxYPMMTSGFDUFb7k0iaHtusJH1LNTaLmHGG7WaZ3Yy3yv5/JcSqjC');

-- --------------------------------------------------------

--
-- Table structure for table `video_items`
--

CREATE TABLE `video_items` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_thumbnail_url` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_items`
--

INSERT INTO `video_items` (`video_id`, `video_title`, `video_thumbnail_url`, `video_link`, `tags`) VALUES
(1, 'Top New Games of May 2025', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example1', 'TOP, NEW GAMES'),
(2, 'Opera GX Mods You Need to Try', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example2', 'MODS'),
(3, 'Top New Games of April 2025', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example3', 'TOP, NEW GAMES'),
(4, 'Hell\'s Obby Now on Roblox', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example4', 'FUNNY'),
(5, 'Top New Games of March 2025', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example5', 'TOP, FUNNY'),
(6, 'Upcoming Mods in 2025', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example6', 'MODS'),
(7, 'Summer 2025: Must-Play Games', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example7', 'NEW GAMES, MUST PLAY'),
(8, 'Best Mods for Opera GX', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example8', 'MODS'),
(9, 'Fun Games of 2025', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example9', 'FUNNY, NEW GAMES'),
(10, 'Top 10 Games to Watch', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example10', 'TOP, MUST WATCH'),
(11, 'April 2025 Game Picks', 'https://mods.store.gx.me/mods/a7aa9b41-7166-45f4-a9a7-ade4faf5a533/89953951-ce1a-4535-93a8-ac6280048ae0/c6b73d99-8ec3-46f9-bcaf-5c0fed750fda/contents/icon_512.png?32e05f563ea0f1f6b0053e7c1052aba8', 'https://youtube.com/watch?v=example11', 'TOP, NEW GAMES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `mods`
--
ALTER TABLE `mods`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video_items`
--
ALTER TABLE `video_items`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mods`
--
ALTER TABLE `mods`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `video_items`
--
ALTER TABLE `video_items`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
