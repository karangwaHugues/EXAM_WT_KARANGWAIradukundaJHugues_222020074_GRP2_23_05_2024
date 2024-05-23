-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 12:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogp`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `AchievementID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `GameID` int(11) DEFAULT NULL,
  `AchievementName` varchar(100) NOT NULL,
  `Description` text,
  `DateEarned` date DEFAULT NULL,
  `AchievementIcon` varchar(255) DEFAULT NULL,
  `Rarity` enum('Common','Rare','Epic','Legendary') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`AchievementID`, `UserID`, `GameID`, `AchievementName`, `Description`, `DateEarned`, `AchievementIcon`, `Rarity`) VALUES
(1, 1, 1, 'Master of the Wild', 'Complete all quests and discover all locations in the game', '2024-05-20', 'icon_1.jpg', 'Epic'),
(2, 2, 2, 'Global Elite', 'Reach the highest rank in competitive matchmaking', '2024-05-21', 'icon_2.jpg', 'Legendary'),
(3, 3, 3, 'Impostor Syndrome', 'Win a game as the Impostor without getting caught', '2024-05-22', 'icon_3.jpg', 'Rare'),
(4, 4, 4, 'Victory Royale', 'Win a game of Battle Royale', '2024-05-23', 'icon_4.jpg', 'Common');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `GameID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Genre` varchar(50) DEFAULT NULL,
  `Description` text,
  `ReleaseDate` date DEFAULT NULL,
  `Developer` varchar(100) DEFAULT NULL,
  `Publisher` varchar(100) DEFAULT NULL,
  `Platform` varchar(50) DEFAULT NULL,
  `AverageRating` decimal(3,2) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `TotalPlaytime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`GameID`, `Title`, `Genre`, `Description`, `ReleaseDate`, `Developer`, `Publisher`, `Platform`, `AverageRating`, `Price`, `TotalPlaytime`) VALUES
(1, 'The Witcher 3: Wild Hunt', 'Action RPG', 'An open-world action role-playing game developed by CD Projekt Red.', '2015-05-19', 'CD Projekt Red', 'CD Projekt', 'PC, PS4, Xbox One', '4.80', '49.99', 200),
(2, 'Counter-Strike: Global Offensive', 'First-Person Shooter', 'A multiplayer first-person shooter game developed by Valve and Hidden Path Entertainment.', '2012-08-21', 'Valve Corporation', 'Valve Corporation', 'PC', '4.50', '0.00', 500),
(3, 'Among Us', 'Social Deduction', 'An online multiplayer social deduction game developed and published by InnerSloth.', '2018-06-15', 'InnerSloth', 'InnerSloth', 'PC, iOS, Android', '4.70', '4.99', 100),
(4, 'The Legend of Zelda: Breath of the Wild', 'Action-Adventure', 'An action-adventure game developed and published by Nintendo for the Nintendo Switch and Wii U consoles.', '2017-03-03', 'Nintendo EPD', 'Nintendo', 'Nintendo Switch, Wii U', '4.90', '59.99', 300);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `ScoreID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `GameID` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `DateAchieved` date DEFAULT NULL,
  `ReplayLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`ScoreID`, `UserID`, `GameID`, `Score`, `DateAchieved`, `ReplayLink`) VALUES
(7, 1, 1, 9500, '2024-05-20', 'replay_link_1'),
(8, 2, 2, 8000, '2024-05-21', 'replay_link_2'),
(9, 3, 3, 8500, '2024-05-22', 'replay_link_3');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `TournamentID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `GameID` int(11) DEFAULT NULL,
  `Organizer` varchar(100) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `PrizePool` decimal(10,2) DEFAULT NULL,
  `EntryFee` decimal(10,2) DEFAULT NULL,
  `TournamentType` varchar(50) DEFAULT NULL,
  `Participants` int(11) DEFAULT NULL,
  `Status` enum('Upcoming','Ongoing','Completed') DEFAULT 'Upcoming'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`TournamentID`, `Title`, `GameID`, `Organizer`, `StartDate`, `EndDate`, `PrizePool`, `EntryFee`, `TournamentType`, `Participants`, `Status`) VALUES
(1, 'CS:GO Major Championship', 2, 'Valve Corporation', '2024-07-01', '2024-07-10', '1000000.00', '50.00', 'Single Elimination', 32, 'Upcoming'),
(2, 'FIFA 24 World Cup', 3, 'FIFA', '2024-06-01', '2024-07-15', '500000.00', '20.00', 'Group Stage + Knockout', 64, 'Ongoing'),
(3, 'League of Legends Championship Series', 1, 'Riot Games', '2024-05-01', '2024-08-31', '2000000.00', '100.00', 'Round Robin + Playoffs', 10, 'Completed'),
(4, 'Fortnite World Cup', 4, 'Epic Games', '2024-09-01', '2024-09-30', '3000000.00', '75.00', 'Swiss System + Playoffs', 50, 'Upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `ProfilePicture` varchar(255) DEFAULT NULL,
  `AccountCreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastLoginDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `AccountStatus` enum('Active','Suspended','Banned') DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Email`, `Password`, `DateOfBirth`, `Country`, `ProfilePicture`, `AccountCreationDate`, `LastLoginDate`, `AccountStatus`) VALUES
(1, 'user1', 'user1@example.com', 'password1', '1990-05-10', 'USA', 'profile_pic_1.jpg', '2024-05-23 08:40:46', '2024-05-23 08:40:46', 'Active'),
(2, 'user2', 'user2@example.com', 'password2', '1992-08-15', 'UK', 'profile_pic_2.jpg', '2024-05-23 08:40:46', '2024-05-23 08:40:46', 'Active'),
(3, 'user3', 'user3@example.com', 'password3', '1985-12-20', 'Canada', 'profile_pic_3.jpg', '2024-05-23 08:40:46', '2024-05-23 08:40:46', 'Active'),
(4, 'user4', 'user4@example.com', 'password4', '1988-04-25', 'Australia', 'profile_pic_4.jpg', '2024-05-23 08:40:46', '2024-05-23 08:40:46', 'Active'),
(5, 'emmy', 'ndahi@gmai.com', '123', '2024-05-14', 'Canada', NULL, '2024-05-23 10:15:35', '2024-05-23 10:15:35', 'Active'),
(7, 'muhoz', 'ndrti@gmai.com', '123', '2024-05-14', 'Australia', NULL, '2024-05-23 10:17:59', '2024-05-23 10:17:59', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`AchievementID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `GameID` (`GameID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`ScoreID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `GameID` (`GameID`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`TournamentID`),
  ADD KEY `GameID` (`GameID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `AchievementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `GameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `ScoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `TournamentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `achievement_ibfk_2` FOREIGN KEY (`GameID`) REFERENCES `games` (`GameID`);

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `scores_ibfk_2` FOREIGN KEY (`GameID`) REFERENCES `games` (`GameID`);

--
-- Constraints for table `tournament`
--
ALTER TABLE `tournament`
  ADD CONSTRAINT `tournament_ibfk_1` FOREIGN KEY (`GameID`) REFERENCES `games` (`GameID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
