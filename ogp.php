<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.3
 */

/**
 * Database `ogp`
 */

/* `ogp`.`achievement` */
$achievement = array(
  array('AchievementID' => '1','UserID' => '1','GameID' => '1','AchievementName' => 'Master of the Wild','Description' => 'Complete all quests and discover all locations in the game','DateEarned' => '2024-05-20','AchievementIcon' => 'icon_1.jpg','Rarity' => 'Epic'),
  array('AchievementID' => '2','UserID' => '2','GameID' => '2','AchievementName' => 'Global Elite','Description' => 'Reach the highest rank in competitive matchmaking','DateEarned' => '2024-05-21','AchievementIcon' => 'icon_2.jpg','Rarity' => 'Legendary'),
  array('AchievementID' => '3','UserID' => '3','GameID' => '3','AchievementName' => 'Impostor Syndrome','Description' => 'Win a game as the Impostor without getting caught','DateEarned' => '2024-05-22','AchievementIcon' => 'icon_3.jpg','Rarity' => 'Rare'),
  array('AchievementID' => '4','UserID' => '4','GameID' => '4','AchievementName' => 'Victory Royale','Description' => 'Win a game of Battle Royale','DateEarned' => '2024-05-23','AchievementIcon' => 'icon_4.jpg','Rarity' => 'Common')
);

/* `ogp`.`games` */
$games = array(
  array('GameID' => '1','Title' => 'The Witcher 3: Wild Hunt','Genre' => 'Action RPG','Description' => 'An open-world action role-playing game developed by CD Projekt Red.','ReleaseDate' => '2015-05-19','Developer' => 'CD Projekt Red','Publisher' => 'CD Projekt','Platform' => 'PC, PS4, Xbox One','AverageRating' => '4.80','Price' => '49.99','TotalPlaytime' => '200'),
  array('GameID' => '2','Title' => 'Counter-Strike: Global Offensive','Genre' => 'First-Person Shooter','Description' => 'A multiplayer first-person shooter game developed by Valve and Hidden Path Entertainment.','ReleaseDate' => '2012-08-21','Developer' => 'Valve Corporation','Publisher' => 'Valve Corporation','Platform' => 'PC','AverageRating' => '4.50','Price' => '0.00','TotalPlaytime' => '500'),
  array('GameID' => '3','Title' => 'Among Us','Genre' => 'Social Deduction','Description' => 'An online multiplayer social deduction game developed and published by InnerSloth.','ReleaseDate' => '2018-06-15','Developer' => 'InnerSloth','Publisher' => 'InnerSloth','Platform' => 'PC, iOS, Android','AverageRating' => '4.70','Price' => '4.99','TotalPlaytime' => '100'),
  array('GameID' => '4','Title' => 'The Legend of Zelda: Breath of the Wild','Genre' => 'Action-Adventure','Description' => 'An action-adventure game developed and published by Nintendo for the Nintendo Switch and Wii U consoles.','ReleaseDate' => '2017-03-03','Developer' => 'Nintendo EPD','Publisher' => 'Nintendo','Platform' => 'Nintendo Switch, Wii U','AverageRating' => '4.90','Price' => '59.99','TotalPlaytime' => '300')
);

/* `ogp`.`scores` */
$scores = array(
  array('ScoreID' => '7','UserID' => '1','GameID' => '1','Score' => '9500','DateAchieved' => '2024-05-20','ReplayLink' => 'replay_link_1'),
  array('ScoreID' => '8','UserID' => '2','GameID' => '2','Score' => '8000','DateAchieved' => '2024-05-21','ReplayLink' => 'replay_link_2'),
  array('ScoreID' => '9','UserID' => '3','GameID' => '3','Score' => '8500','DateAchieved' => '2024-05-22','ReplayLink' => 'replay_link_3')
);

/* `ogp`.`tournament` */
$tournament = array(
  array('TournamentID' => '1','Title' => 'CS:GO Major Championship','GameID' => '2','Organizer' => 'Valve Corporation','StartDate' => '2024-07-01','EndDate' => '2024-07-10','PrizePool' => '1000000.00','EntryFee' => '50.00','TournamentType' => 'Single Elimination','Participants' => '32','Status' => 'Upcoming'),
  array('TournamentID' => '2','Title' => 'FIFA 24 World Cup','GameID' => '3','Organizer' => 'FIFA','StartDate' => '2024-06-01','EndDate' => '2024-07-15','PrizePool' => '500000.00','EntryFee' => '20.00','TournamentType' => 'Group Stage + Knockout','Participants' => '64','Status' => 'Ongoing'),
  array('TournamentID' => '3','Title' => 'League of Legends Championship Series','GameID' => '1','Organizer' => 'Riot Games','StartDate' => '2024-05-01','EndDate' => '2024-08-31','PrizePool' => '2000000.00','EntryFee' => '100.00','TournamentType' => 'Round Robin + Playoffs','Participants' => '10','Status' => 'Completed'),
  array('TournamentID' => '4','Title' => 'Fortnite World Cup','GameID' => '4','Organizer' => 'Epic Games','StartDate' => '2024-09-01','EndDate' => '2024-09-30','PrizePool' => '3000000.00','EntryFee' => '75.00','TournamentType' => 'Swiss System + Playoffs','Participants' => '50','Status' => 'Upcoming')
);

/* `ogp`.`users` */
$users = array(
  array('UserID' => '1','Username' => 'user1','Email' => 'user1@example.com','Password' => 'password1','DateOfBirth' => '1990-05-10','Country' => 'USA','ProfilePicture' => 'profile_pic_1.jpg','AccountCreationDate' => '2024-05-23 10:40:46','LastLoginDate' => '2024-05-23 10:40:46','AccountStatus' => 'Active'),
  array('UserID' => '2','Username' => 'user2','Email' => 'user2@example.com','Password' => 'password2','DateOfBirth' => '1992-08-15','Country' => 'UK','ProfilePicture' => 'profile_pic_2.jpg','AccountCreationDate' => '2024-05-23 10:40:46','LastLoginDate' => '2024-05-23 10:40:46','AccountStatus' => 'Active'),
  array('UserID' => '3','Username' => 'user3','Email' => 'user3@example.com','Password' => 'password3','DateOfBirth' => '1985-12-20','Country' => 'Canada','ProfilePicture' => 'profile_pic_3.jpg','AccountCreationDate' => '2024-05-23 10:40:46','LastLoginDate' => '2024-05-23 10:40:46','AccountStatus' => 'Active'),
  array('UserID' => '4','Username' => 'user4','Email' => 'user4@example.com','Password' => 'password4','DateOfBirth' => '1988-04-25','Country' => 'Australia','ProfilePicture' => 'profile_pic_4.jpg','AccountCreationDate' => '2024-05-23 10:40:46','LastLoginDate' => '2024-05-23 10:40:46','AccountStatus' => 'Active'),
  array('UserID' => '5','Username' => 'emmy','Email' => 'ndahi@gmai.com','Password' => '123','DateOfBirth' => '2024-05-14','Country' => 'Canada','ProfilePicture' => NULL,'AccountCreationDate' => '2024-05-23 12:15:35','LastLoginDate' => '2024-05-23 12:15:35','AccountStatus' => 'Active'),
  array('UserID' => '7','Username' => 'muhoz','Email' => 'ndrti@gmai.com','Password' => '123','DateOfBirth' => '2024-05-14','Country' => 'Australia','ProfilePicture' => NULL,'AccountCreationDate' => '2024-05-23 12:17:59','LastLoginDate' => '2024-05-23 12:17:59','AccountStatus' => 'Active')
);
