
CREATE DATABASE IF NOT EXISTS `testuballers` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testuballers`;





CREATE TABLE `users` (
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `conflogin` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `users` (`prenom`, `nom`, `login`, `conflogin`, `mdp`, `sexe`) VALUES
('a', 'a', 'a', 'a', 'a', 'femme');
