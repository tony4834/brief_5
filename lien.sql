

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE lien (
  id_lien int(11) NOT NULL,
  nom_lien varchar(1000) NOT NULL,
  url_lien varchar(1000) NOT NULL,
  description_lien varchar(1000) NOT NULL
  id_categ int(11)  NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table lien
--

INSERT INTO lien (`id_lien`, `nom_lien`, `url_lien`, `description_lien`, `id_categ`) VALUES
(1, 'github', 'https://github.com/', 'github', 2),
(2, 'tuto_figma', 'https://youtu.be/e68PKFYWfoQ', 'tuto_figma' , 4)
(3, 'javascript' , 'https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript' , 'javascript', 3)




*






(4, 'développeur', 'https://code.visualstudio.com/' , 'vscode' , 1)
(5, 'support', 'https://drive.google.com/file/d/1Pq1S5q6Cg9bsvcAKwWqoDiGLlQ3W_2vo/view?usp=sharing' , 'google.drive',5)