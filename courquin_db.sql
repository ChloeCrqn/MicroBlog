-- Base de données courquin_db

-- Table messages :
-- Contient les champs et infos pour les messages

CREATE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `vote` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
)

-- Table utilisateur :
-- Contient les infos clasiques utilisateur

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nom` varchar(255) NOT NULL,
  `passe` varchar(255) NOT NULL
)

--