-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 15:39
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp2flix`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `ano` int(4) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `ator1` varchar(50) NOT NULL,
  `ator2` varchar(50) NOT NULL,
  `nota` int(2) DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `ano`, `categoria`, `diretor`, `ator1`, `ator2`, `nota`, `img`) VALUES
(2, 'Venom', 2018, 'acao', 'Ruben Fleischer', 'Tom Hardy', 'Michelle Williams', 3, 'https://m.media-amazon.com/images/M/MV5BNzAwNzUzNjY4MV5BMl5BanBnXkFtZTgwMTQ5MzM0NjM@._V1_.jpg'),
(3, 'PePequeno', 2018, 'animacao', 'Karey Kirkpatrick', 'Channing Tatum', 'James Corden', 8, 'https://m.media-amazon.com/images/M/MV5BMTc5NzI1NjY4MV5BMl5BanBnXkFtZTgwNDIxNTIyNDM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(4, 'Por Agua Abaixo', 2006, 'animacao', 'David Bowers', 'Hugh Jackman', 'Kate Winslet', 9, 'https://m.media-amazon.com/images/M/MV5BMTI1MzE1MDk2N15BMl5BanBnXkFtZTYwMjEwMzI3._V1_.jpg'),
(5, 'O Bixo Vai Pegar', 2006, 'animacao', 'Roger Allers', 'Ashton Kutcher', 'Martin Lawrence', 6, 'https://m.media-amazon.com/images/M/MV5BMTQwOTg2MjU0OV5BMl5BanBnXkFtZTcwMzIzNTQzMQ@@._V1_SY1000_SX673_AL_.jpg'),
(6, 'Zerando A Vida', 2016, 'comedia', 'Steven Brill', 'Adam Sandler', 'David Spade', 10, 'https://m.media-amazon.com/images/M/MV5BMTYyNDY2NzAxNV5BMl5BanBnXkFtZTgwOTMxMzg2ODE@._V1_SY1000_SX675_AL_.jpg'),
(7, 'It: A Coisa', 2017, 'terror', 'Andy Muschietti', 'Bill Skarsgård', 'Jaeden Lieberher', 9, 'https://m.media-amazon.com/images/M/MV5BZDVkZmI0YzAtNzdjYi00ZjhhLWE1ODEtMWMzMWMzNDA0NmQ4XkEyXkFqcGdeQXVyNzYzODM3Mzg@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(8, '50 Tons de Liberdade', 2018, 'romance', 'James Foley', 'Dakota Johnson', 'Jamie Dornan', 1, 'https://m.media-amazon.com/images/M/MV5BMTYxOTQ1MzI0Nl5BMl5BanBnXkFtZTgwMzgwMzIxNDM@._V1_SY1000_CR0,0,631,1000_AL_.jpg'),
(9, 'Maze Runner: A Cura Mortal', 2018, 'fantasia', 'Wes Ball', 'Dylan O\'Brien', 'Kaya Scodelario', 5, 'https://m.media-amazon.com/images/M/MV5BMTYyNzk3MDc2NF5BMl5BanBnXkFtZTgwMDk3OTM1NDM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(10, 'Corra!', 2017, 'suspense', 'Jordan Peele', 'Daniel Kaluuya', 'Allison Williams', 10, 'https://m.media-amazon.com/images/M/MV5BMjUxMDQwNjcyNl5BMl5BanBnXkFtZTgwNzcwMzc0MTI@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(11, 'Gente Grande', 2010, 'comedia', 'Dennis Dugan', 'Adam Sandler', 'Salma Hayek', 10, 'https://m.media-amazon.com/images/M/MV5BMjA0ODYwNzU5Nl5BMl5BanBnXkFtZTcwNTI1MTgxMw@@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(12, 'WiFi Ralph: Quebrando a Internet', 2018, 'animacao', 'Phil Johnston', 'John C. Reilly', 'Gal Gadot', 7, 'https://m.media-amazon.com/images/M/MV5BMTYyNzEyNDAzOV5BMl5BanBnXkFtZTgwNTk3NDczNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(13, 'Robin Hood', 2018, 'acao', 'Otto Bathurst', 'Taron Egerton', 'Jamie Foxx', 7, 'https://m.media-amazon.com/images/M/MV5BOGQzZDM0NGUtZGE1NS00ZjQwLTk0N2EtMWI0NTgxYTkwYWQ4XkEyXkFqcGdeQXVyNDMzMzI5MjM@._V1_SY1000_CR0,0,648,1000_AL_.jpg'),
(14, 'O Quebra-Nozes e os Quatro Reinos', 2018, 'fantasia', 'Lasse Hallström', 'Morgan Freeman', 'Keira Knightley', 10, 'https://m.media-amazon.com/images/M/MV5BMTgzOTc0NTE3Nl5BMl5BanBnXkFtZTgwODY4MDgwNjM@._V1_SY1000_SX700_AL_.jpg'),
(15, 'Nasce uma Estrela', 2018, 'romance', 'Bradley Cooper', 'Lady Gaga', 'Bradley Cooper', 8, 'https://m.media-amazon.com/images/M/MV5BMjE3MDQ0MTA3M15BMl5BanBnXkFtZTgwMDMwNDY2NTM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(16, 'Halloween', 2018, 'terror', 'David Gordon Green', 'Jamie Lee Curtis', 'Judy Greer', 5, 'https://m.media-amazon.com/images/M/MV5BMmMzNjJhYjUtNzFkZi00MWQ4LWJiMDEtYWM0NTAzNGZjMTI3XkEyXkFqcGdeQXVyOTE2OTMwNDk@._V1_.jpg'),
(17, 'Guardiões da Galaxia Vol. 2', 2017, 'acao', 'James Gunn', 'Chris Pratt', 'Zoe Saldana', 9, 'https://m.media-amazon.com/images/M/MV5BMTg2MzI1MTg3OF5BMl5BanBnXkFtZTgwNTU3NDA2MTI@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(18, 'Logan', 2017, 'fantasia', 'James Mangold', 'Hugh Jackman', 'Patrick Stewart', 10, 'https://m.media-amazon.com/images/M/MV5BYzc5MTU4N2EtYTkyMi00NjdhLTg3NWEtMTY4OTEyMzJhZTAzXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg'),
(19, 'Dunkirk', 2017, 'acao', 'Christopher Nolan', 'Fionn Whitehead', 'Barry Keoghan', 10, 'https://m.media-amazon.com/images/M/MV5BN2YyZjQ0NTEtNzU5MS00NGZkLTg0MTEtYzJmMWY3MWRhZjM2XkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(20, 'Star Wars: Os Últimos Jedi', 2017, 'fantasia', 'Rian Johnson', 'Daisy Ridley', 'Mark Mamill', 7, 'https://m.media-amazon.com/images/M/MV5BMjQ1MzcxNjg4N15BMl5BanBnXkFtZTgwNzgwMjY4MzI@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(21, 'Blade Runner 2049', 2017, 'fantasia', 'Denis Villeneuve', 'Harrison Ford', 'Ryan Gosling', 6, 'https://m.media-amazon.com/images/M/MV5BNzA1Njg4NzYxOV5BMl5BanBnXkFtZTgwODk5NjU3MzI@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(22, 'Viva - A Vida é uma Festa', 2017, 'animacao', 'Lee Unkrich', 'Anthony Gonzalez', 'Gael García Bernal', 3, 'https://m.media-amazon.com/images/M/MV5BYjQ5NjM0Y2YtNjZkNC00ZDhkLWJjMWItN2QyNzFkMDE3ZjAxXkEyXkFqcGdeQXVyODIxMzk5NjA@._V1_SY1000_CR0,0,699,1000_AL_.jpg'),
(23, 'Bakemono no ko', 2015, 'animacao', 'Mamoru Hosoda', 'John Swasey', 'Randy E. Aguebor', 10, 'https://m.media-amazon.com/images/M/MV5BZDgzZmRjNDItM2I3Yy00YjU5LTliZjYtMTNiZGVlZmY2MzFkXkEyXkFqcGdeQXVyMjQ4OTA4MDU@._V1_SY1000_CR0,0,706,1000_AL_.jpg'),
(24, 'Busca Implacavel', 2008, 'acao', 'Pierre Morel', 'Liam Neeson', 'Maggie Grace', 5, 'https://m.media-amazon.com/images/M/MV5BMTM4NzQ0OTYyOF5BMl5BanBnXkFtZTcwMDkyNjQyMg@@._V1_.jpg'),
(25, 'Ratatouille', 2007, 'animacao', 'Brad Bird', ' Brad Garrett', 'Lou Romano', 10, 'https://m.media-amazon.com/images/M/MV5BMTMzODU0NTkxMF5BMl5BanBnXkFtZTcwMjQ4MzMzMw@@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(26, 'Como Treinar o Seu Dragao', 2010, 'animacao', 'Dean DeBlois', 'Jay Baruchel', 'Gerard Butler', 9, 'https://m.media-amazon.com/images/M/MV5BMjA5NDQyMjc2NF5BMl5BanBnXkFtZTcwMjg5ODcyMw@@._V1_SY1000_CR0,0,672,1000_AL_.jpg'),
(27, 'Duro de Matar', 1988, 'acao', 'John McTiernan', 'Alan Rickman', 'Bruce Willis', 1, 'https://m.media-amazon.com/images/M/MV5BZjRlNDUxZjAtOGQ4OC00OTNlLTgxNmQtYTBmMDgwZmNmNjkxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,666,1000_AL_.jpg'),
(28, 'Apertem os Cintos, o Piloto Sumiu', 1980, 'comedia', ' Jim Abrahams', 'Leslie Nielsen ', 'Robert Hays', 10, 'https://m.media-amazon.com/images/M/MV5BZjA3YjdhMWEtYjc2Ni00YzVlLWI0MTUtMGZmNTJjNmU0Yzk2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),
(29, 'A Historia do Mundo - Parte I', 1981, 'comedia', 'Mel Brooks', 'Mel Brooks', 'Gregory Hines', 10, 'https://m.media-amazon.com/images/M/MV5BNjU4ZGUyYjUtYzVlMS00YWFmLWFjM2UtYTk5YjFlZmJhNDQyXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY999_CR0,0,641,999_AL_.jpg'),
(30, 'A Vida de Brian', 1979, 'comedia', 'Terry Jones', ' Graham Chapman', 'John Cleese', 10, 'https://m.media-amazon.com/images/M/MV5BMzAwNjU1OTktYjY3Mi00NDY5LWFlZWUtZjhjNGE0OTkwZDkwXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,637,1000_AL_.jpg'),
(31, 'Carga Explosiva', 2002, 'acao', 'Louis Leterrier', 'Jason Statham', 'Qi Shu', 4, 'https://m.media-amazon.com/images/M/MV5BMTk2NDc2MDAxN15BMl5BanBnXkFtZTYwNDc1NDY2._V1_.jpg'),
(32, 'xXx', 2002, 'acao', 'Rob Cohen', 'Vin Diesel', 'Asia Argento', 3, 'https://m.media-amazon.com/images/M/MV5BNzZjZmM1ZDctNDhlZi00Mzk1LWFjNWItYzIxNGY2OWYzYjJmXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@._V1_.jpg'),
(33, 'O Senhor dos Aneis: A Sociedade do Anel', 2001, 'fantasia', 'Peter Jackson', 'Elijah Wood', 'Ian McKellen', 9, 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SY999_CR0,0,673,999_AL_.jpg'),
(34, 'Harry Potter e a Pedra Filosofal', 2001, 'fantasia', 'Chris Columbus', 'Richard Harris', 'Alan Rickman', 8, 'https://m.media-amazon.com/images/M/MV5BNjQ3NWNlNmQtMTE5ZS00MDdmLTlkZjUtZTBlM2UxMGFiMTU3XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg'),
(35, 'Animais Fantasticos: Os Crimes de Grindelwald', 2018, 'fantasia', 'David Yates', 'Eddie Redmayne', 'Katherine Waterston', 7, 'https://m.media-amazon.com/images/M/MV5BZjFiMGUzMTAtNDAwMC00ZjRhLTk0OTUtMmJiMzM5ZmVjODQxXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg'),
(36, 'Todo Poderoso', 2003, 'comedia', 'Tom Shadyac', 'Morgan Freeman', 'Jim Carrey', 9, 'https://m.media-amazon.com/images/M/MV5BNzMyZDhiZDUtYWUyMi00ZDQxLWE4NDQtMWFlMjI1YjVjMjZiXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(37, 'O Show de Truman', 1998, 'comedia', 'Peter Weir', 'Jim Carrey', 'Ed Harris', 10, 'https://m.media-amazon.com/images/M/MV5BMDIzODcyY2EtMmY2MC00ZWVlLTgwMzAtMjQwOWUyNmJjNTYyXkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_SY1000_SX674_AL_.jpg'),
(38, 'Questao de Tempo', 2013, 'romance', 'Richard Curtis', 'Rachel McAdams', 'Bill Nighy', 10, 'https://m.media-amazon.com/images/M/MV5BMTA1ODUzMDA3NzFeQTJeQWpwZ15BbWU3MDgxMTYxNTk@._V1_SY1000_CR0,0,631,1000_AL_.jpg'),
(39, 'Como se Fosse a Primeira Vez', 2004, 'romance', 'Peter Segal', 'Adam Sandler', 'Drew Barrymore', 7, 'https://m.media-amazon.com/images/M/MV5BMjAwMzc4MDgxNF5BMl5BanBnXkFtZTYwNjUwMzE3._V1_.jpg'),
(40, 'Click', 2006, 'comedia', 'Frank Coraci', 'Christopher Walken', 'Adam Sandler', 6, 'https://m.media-amazon.com/images/M/MV5BMTA1MTUxNDY4NzReQTJeQWpwZ15BbWU2MDE3ODAxNw@@._V1_.jpg'),
(41, 'Seven: Os Sete Crimes Capitais', 1995, 'suspense', 'David Fincher', 'Morgan Freeman', 'Brad Pitt', 7, 'https://m.media-amazon.com/images/M/MV5BOTUwODM5MTctZjczMi00OTk4LTg3NWUtNmVhMTAzNTNjYjcyXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,639,1000_AL_.jpg'),
(42, 'Fragmentado', 2016, 'suspense', 'M. Night Shyamalan', 'James McAvoy', ' Anya Taylor-Joy', 9, 'https://m.media-amazon.com/images/M/MV5BZTJiNGM2NjItNDRiYy00ZjY0LTgwNTItZDBmZGRlODQ4YThkL2ltYWdlXkEyXkFqcGdeQXVyMjY5ODI4NDk@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(43, 'Um Contratempo', 2016, 'suspense', 'Oriol Paulo', 'Mario Casas', 'Ana Wagener', 5, 'https://m.media-amazon.com/images/M/MV5BMDk0YzAwYjktMWFiZi00Y2FmLWJmMmMtMzUyZDZmMmU5MjkzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY1000_SX700_AL_.jpg'),
(44, 'Os Suspeitos', 1995, 'suspense', 'Bryan Singer', 'Kevin Spacey', 'Gabriel Byrne', 8, 'https://m.media-amazon.com/images/M/MV5BYTViNjMyNmUtNDFkNC00ZDRlLThmMDUtZDU2YWE4NGI2ZjVmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,670,1000_AL_.jpg'),
(45, 'A Pele que Habito', 2011, 'suspense', 'Pedro Almodóvar', 'Antonio Banderas', 'Elena Anaya', 9, 'https://m.media-amazon.com/images/M/MV5BMjMwOTYyNDY4NV5BMl5BanBnXkFtZTcwNDI1ODk0Ng@@._V1_SY1000_CR0,0,669,1000_AL_.jpg'),
(46, 'O Abutre', 2014, 'suspense', 'Dan Gilroy', 'Jake Gyllenhaal', 'Rene Russo', 10, 'https://m.media-amazon.com/images/M/MV5BN2U1YzdhYWMtZWUzMi00OWI1LWFkM2ItNWVjM2YxMGQ2MmNhXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg'),
(47, 'O Sexto Sentido', 1999, 'suspense', 'M. Night Shyamalan', 'Bruce Willis', 'Haley Joel Osment', 6, 'https://m.media-amazon.com/images/M/MV5BMWM4NTFhYjctNzUyNi00NGMwLTk3NTYtMDIyNTZmMzRlYmQyXkEyXkFqcGdeQXVyMTAwMzUyOTc@._V1_.jpg'),
(48, 'Diário de uma Paixão', 2004, 'romance', 'Nick Cassavetes', 'James Garner', 'Rachel McAdams', 6, 'https://m.media-amazon.com/images/M/MV5BMTk3OTM5Njg5M15BMl5BanBnXkFtZTYwMzA0ODI3._V1_.jpg'),
(49, 'A Culpa e das Estrelas', 2014, 'romance', 'Josh Boone', 'Ansel Elgort', 'Nat Wolff', 0, 'https://m.media-amazon.com/images/M/MV5BMjA4NzkxNzc5Ml5BMl5BanBnXkFtZTgwNzQ3OTMxMTE@._V1_SY1000_CR0,0,675,1000_AL_.jpg'),
(50, 'La La Land: Cantando Estacoes', 2016, 'romance', 'Damien Chazelle', 'Ryan Gosling', 'Emma Stone', 8, 'https://m.media-amazon.com/images/M/MV5BMzUzNDM2NzM2MV5BMl5BanBnXkFtZTgwNTM3NTg4OTE@._V1_SY1000_SX675_AL_.jpg'),
(51, 'Brilho Eterno de uma Mente Sem Lembranças', 2004, 'romance', 'Michel Gondry', 'Jim Carrey', 'Kate Winslet', 9, 'https://m.media-amazon.com/images/M/MV5BMTY4NzcwODg3Nl5BMl5BanBnXkFtZTcwNTEwOTMyMw@@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(52, 'Um Lugar Silencioso', 2018, 'terror', 'John Krasinski', 'Emily Blunt', 'John Krasinski', 8, 'https://m.media-amazon.com/images/M/MV5BMjI0MDMzNTQ0M15BMl5BanBnXkFtZTgwMTM5NzM3NDM@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(53, 'Annabelle 2: A Criacao do Mal', 2017, 'terror', 'David F. Sandberg', 'Anthony LaPaglia', 'Samara Lee', 9, 'https://m.media-amazon.com/images/M/MV5BMjA1MzIwMjMxNF5BMl5BanBnXkFtZTgwMDQ3NTc2MjI@._V1_SY1000_CR0,0,674,1000_AL_.jpg'),
(54, 'Jogos Mortais: Jigsaw', 2017, 'terror', 'Peter Spierig', 'Matt Passmore', 'Tobin Bell', 6, 'https://m.media-amazon.com/images/M/MV5BNmRiZDM4ZmMtOTVjMi00YTNlLTkyNjMtMjI2OTAxNjgwMWM1XkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_SY1000_CR0,0,648,1000_AL_.jpg'),
(55, 'O Culto de Chucky', 2017, 'terror', 'Don Mancini', 'Allison Dawn Doiron', 'Alex Vincent', 3, 'https://m.media-amazon.com/images/M/MV5BMTA5NTMyN2UtMDBmOC00YzVlLWIzZTEtNTM0YjZmY2E4YjYzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,671,1000_AL_.jpg'),
(56, 'O Silencio dos Inocentes', 1991, 'terror', 'Jonathan Demme', 'Jodie Foster', 'Anthony Hopkins', 7, 'https://m.media-amazon.com/images/M/MV5BNjNhZTk0ZmEtNjJhMi00YzFlLWE1MmEtYzM1M2ZmMGMwMTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,677,1000_AL_.jpg'),
(57, 'O Chamado', 2002, 'terror', 'Gore Verbinski', 'Naomi Watts', 'Martin Henderson', 1, 'https://m.media-amazon.com/images/M/MV5BNDA2NTg2NjE4Ml5BMl5BanBnXkFtZTYwMjYxMDg5._V1_.jpg'),
(61, 'Boku No Piko', 2006, 'animacao', 'Shota Nakama', 'Lil Kid', 'Piko', 24, 'https://m.media-amazon.com/images/M/MV5BMTA0ZjI0MWUtMjZlMS00YzNmLWEzNWEtM2MzNDA5YzE2YTYyXkEyXkFqcGdeQXVyNjQ5OTQwNzc@._V1_.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `login`) VALUES
(35, 'juaum'),
(8, 'mask'),
(3, 'mask'),
(36, 'mask'),
(36, 'mask'),
(61, 'mask'),
(61, 'mask');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`) VALUES
('admin', 'admin'),
('juaum', '321'),
('mask', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD KEY `liga_id` (`id`),
  ADD KEY `liga_login` (`login`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `liga_id` FOREIGN KEY (`id`) REFERENCES `filmes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `liga_login` FOREIGN KEY (`login`) REFERENCES `usuarios` (`login`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
