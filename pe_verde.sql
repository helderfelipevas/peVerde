-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2016 às 18:44
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pe_verde`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `planta`
--

DROP TABLE IF EXISTS `planta`;
CREATE TABLE IF NOT EXISTS `planta` (
  `cd_planta` int(11) NOT NULL AUTO_INCREMENT,
  `nm_planta` varchar(100) DEFAULT NULL,
  `ds_luz` varchar(100) DEFAULT NULL,
  `ds_epoca` varchar(100) DEFAULT NULL,
  `ds_agua` varchar(100) DEFAULT NULL,
  `ds_colheita` varchar(100) DEFAULT NULL,
  `im_planta` varchar(100) DEFAULT NULL,
  `ds_temperatura` varchar(100) DEFAULT NULL,
  `ds_regiao` varchar(100) DEFAULT NULL,
  `ds_tamanho_vazo` varchar(100) DEFAULT NULL,
  `ds_como_plantar` varchar(2000) DEFAULT NULL,
  `ds_cuidados` varchar(1500) DEFAULT NULL,
  `ds_planta` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`cd_planta`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `planta`
--

INSERT INTO `planta` (`cd_planta`, `nm_planta`, `ds_luz`, `ds_epoca`, `ds_agua`, `ds_colheita`, `im_planta`, `ds_temperatura`, `ds_regiao`, `ds_tamanho_vazo`, `ds_como_plantar`, `ds_cuidados`, `ds_planta`) VALUES
(1, 'Orégano', 'alta', 'Qualquer Época', 'Uma vez por dia', 'Depois de 60 dias', 'oregano.jpg', '25º', 'Nordeste', 'Pequeno', 'O plantio pode ser realizado no local definitivo da horta, ou em sementeiras, vasos ou copinhos feitos de papel jornal. Neste último, as mudas são transplantadas quando tem 4 pares de folhas definitivas. A germinação das sementes ocorre geralmente em duas semanas.', 'Não deixar a terra secar, e não deixar em lugares com baixa luminosidade.', 'O orégano ou orégão é uma erva perene e aromática, muito utilizada na cozinha do Mediterrâneo. São utilizadas as suas folhas, frescas ou secas, pelo sabor e aroma que dão aos pratos. Considera-se que as folhas secas tem melhor sabor.'),
(2, 'Sálvia', 'média', 'Verão', 'Uma vez por dia', 'Entre 90 e 120 dias', 'salvia.jpg', '16º', 'Qualquer região', 'Pequeno', 'A sálvia ou salva pode ser cultivada a partir de sementes, por estaquia, por alporquia ou por divisão de touceiras. As sementes podem ser plantadas em canteiros, sementeiras, pequenos vasos e outros contêineres, sendo transplantadas quando ficam grandes o suficientes para serem manuseadas sem causar danos as mudas. Plante as sementes a 1 cm de profundidade ou menos. A germinação das sementes leva duas ou três semanas.', 'O solo deve ser mantido úmido durante todo o cultivo. Se a sálvia estiver plantada em local de temperatura mais baixa, a umidade deve ser mais branda.', 'a sálvia foi usada na cozinha medieval para temperar carnes gordurosas, vinho, cerveja e omeletes. Era muito utilizada na medicina da época para fazer gargarejo e tratar os dentes.'),
(3, 'Pimenta', 'alta', 'Qualquer Época', 'Duas vez por dia', 'Entre 80 e 150 dias', 'pimenta.jpg', '28º', 'Sul', 'Grande', 'Procure por um ambiente com solo fértil e bem drenável, visto que a planta não suporta a umidade excessiva.O ideal é que a plantação de pimenta seja instalada em um lugar plano, pois assim facilita o processo de semeadura e de colheita da especiaria, além de receber luminosidade e a incidência dos raios solares durante a maior parte do dia, pois esta planta necessita de calor frequente para se desenvolver.', 'É preciso ficar atento às particularidades de algumas espécies. Algumas pimentas, como a Jalapeño, precisam ser cultivadas em climas mais úmidos; outras, como a Habanero, preferem climas completamente secos. ', 'Com sabor picante, a pimenta é bastante utilizada em molhos, temperos e conservas, além de acompanhamento durante a refeição. Assim como a hortelã, deve ser plantada em vaso isolado, já que precisa de bastante espaço para se desenvolver.'),
(4, 'Hortelã', 'média', 'Verão e Primavera', 'Três vez por dia', 'Ao florecer', 'hortela.jpg', '20º', 'Qualquer região', 'Grande e Isolado', 'O plantio é geralmente realizado através de rizomas retirados de plantas bem desenvolvidas, saudáveis e de boas características, com duas ou três gemas em cada pedaço de rizoma. Estes podem ser plantados diretamente no local definitivo ou em vasos. O espaçamento varia conforme a espécie, mas um espaçamento de 30 a 40 cm entre as plantas é considerado adequado.', 'Deve ser plantada em local de temperatura amena e bem protegido do vento, que impede seu crescimento. O ideal é que o solo em que a hortelã está plantada esteja sempre úmido e nunca fique seco durante o desenvolvimento.', 'Tradicional na culinária árabe, a hortelã também é usada na decoração de pratos, no tempero de assados e grelhados e no preparo de chás.'),
(5, 'Manjericão', 'Alta', 'Qualquer época', 'Uma vez por dia', 'Depois de 60 dias', 'manjericao.jpg', '>18º', 'Clima Quente', 'Pequeno', 'As sementes podem ser plantadas diretamente no local definitivo da horta, especialmente em regiões de clima quente. Também pode ser plantadas em sementeiras, pequenos vasos ou copinhos feitos de papel jornal com aproximadamente 10 cm de altura por 5 cm de diâmetro. Neste caso, as mudas de manjericão são transplantadas quando têm 6 folhas definitivas e cerca de 10 a 15 cm de altura.\r\nO manjericão pode ser cultivado facilmente em jardineiras e vasos de tamanho médio ou grande, embora geralmente cresça menos. No solo e em boas condições de cultivo, alguns cultivares de manjericão podem ultrapassar a 1 metro de altura. Assim, para plantio em vasos e jardineiras, dê preferência a cultivares de menor porte, ainda que seja possível plantar qualquer um dos cultivares disponíveis.', 'O manjericão necessita de alta luminosidade e deve receber luz solar direta ao menos por algumas horas diariamente.', NULL),
(6, 'Salsa', 'moderada', 'Qualquer época', 'Uma vez por dia', 'Depois de 60 dias', 'salsa.jpg', '<22º', 'Clima ameno', 'Pequeno', 'As sementes de salsa podem tomar um longo tempo para germinar, variando de 2 a 6 semanas. Deixar as sementes de molho em água morna por um dia pode apressar a germinação. Plante as sementes no local definitivo na horta.\r\nA salsa pode ser cultivada em vasos e jardineiras, porém muitas pessoas plantam em vasos que são muito pequenos, o que limita muito o crescimento da planta, que pode atingir até 80 cm de altura na floração e cuja raiz pode ultrapassar a 50 cm de profundidade. Portanto os vasos e jardineiras utilizados devem ser profundos, com pelo menos 30 cm de profundidade para que a salsa possa se desenvolver bem.', 'Cultive a salsa de preferência em solo bem drenado, fértil, rico em matéria orgânica, com pH entre 5,8 e 7,2. Contudo, a salsa é uma planta rústica, que tolera bem várias condições de solo, crescendo mesmo em solos pouco férteis.', NULL),
(7, 'Alecrim', 'moderada', 'Qualquer época', 'diária-moderada', 'Depois de 90 dias', 'alecrim.jpg', '<22º', 'Clima ameno', 'Pequeno', 'O solo deve ser bem drenado e leve. A planta cresce melhor em solos calcários de pH neutro ou pH levemente alcalino (pH 7 a 7,8), mas é tolerante quanto ao pH e o tipo de solo. O alecrim tem mais aroma e sabor quando cultivado em solos pobres em nutrientes, e que não retêm muito a água.\r\nO alecrim pode ser cultivado a partir de sementes ou por estaquia. As sementes podem ser plantadas em sementeiras, pequenos vasos e outros contêineres. A germinação das sementes pode ser demorada e as plantas podem levar até três anos para se tornarem completamente desenvolvidas. As mudas de alecrim são transplantadas quando têm de 15 a 20 cm de altura.\r\nO plantio por estaquia é feito cortando ramos com cerca de 15 cm de comprimento. Plante os ramos em vasos ou outros recipientes, deixados em local bem iluminado, mas sem luz solar direta. O solo deve ser mantido bem úmido até o enraizamento, que leva de três a quatro semanas. Após o enraizamento as mudas devem receber luz solar direta. As mudas são transplantadas para o local definitivo com cerca de um ano em regiões onde o inverno é frio, mas podem ser transplantadas cerca de um ou dois meses após o enraizamento das mudas em regiões onde o inverno é ameno. As plantas jovens não devem ficar expostas a temperaturas muito baixas em seu primeiro ano de vida.\r\nO espaçamento entre as plantas pode ser geralmente de 80 cm, mas pode variar com o cultivar e as condições de cultivo.\r\nO alecrim pode ser cultivado em jardineiras e vasos de tamanho médio ou grande, mas geralmente não se desenvolve tanto quanto os cultivados no solo.', 'Retire plantas invasoras que estejam concorrendo por nutrientes e recursos.\r\nIrrigue com frequência para que o solo seja mantido levemente úmido enquanto as plantas são jovens. Quando as plantas estiverem bem desenvolvidas, a irrigação deve ser esparsa, permitindo que o solo seque levemente entre as irrigações. O alecrim é bastante resistente a períodos de seca.', NULL),
(8, 'Tomilho', 'Alta luminosidade', 'Qualquer época', 'a cada dois dias', 'Entre 60 a 90 dias', 'tomilho.jpg', 'Entre 4º e 28ºC', 'Clima tropical', 'pequeno', 'O tomilho pode ser propagado por sementes, por divisão de touceiras ou por estaquia, sendo estes dois últimos métodos os preferidos, uma vez que o plantio por sementes exige mais tempo para o crescimento das plantas e início da colheita. Além disso, algumas espécies de tomilho raramente produzem sementes, como por exemplo, o tomilho-alcarávia.\r\nAs sementes podem ser plantadas diretamente no local definitivo da horta, mas por serem muito pequenas o melhor é semear em sementeiras, pequenos vasos ou copinhos feitos de papel jornal, e transplantar as mudas quando têm 4 pares de folhas definitivas. A germinação das sementes leva de uma a três semanas.\r\nO plantio por estaquia, ou seja, por ramos cortados de plantas adultas saudáveis, é o método ideal, pois produz plantas que são idênticas a planta mãe e estas levam menos tempo para crescerem até a colheita. Corte ramos e mergulhe a metade inferior do ramo em um recipiente com água até que surjam raízes, e então plante no local definitivo, ou plante os ramos em vasos mantidos bem úmidos por três ou quatro semanas.\r\nO espaçamento entre as plantas pode ser geralmente de 15 cm a 20 cm. O tomilho também pode ser cultivado facilmente em jardineiras e vasos.', 'Retire plantas invasoras que estejam concorrendo por nutrientes e recursos.\r\nO tomilho é uma planta perene, podendo ser cultivada por muitos anos, mas que vai se tornando lenhosa com a idade, assim a produtividade será maior se as plantas forem renovadas a cada dois ou três anos.', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
