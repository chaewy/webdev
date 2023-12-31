-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 08:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emporium`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(10) NOT NULL,
  `author_name` varchar(30) DEFAULT NULL,
  `author_desc` longtext NOT NULL,
  `author_image` varchar(30) DEFAULT NULL,
  `book_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_desc`, `author_image`, `book_id`) VALUES
(1, 'Robert Greene', 'Robert Greene, born on May 14, 1959, is an American author known for his expertise in strategy, power dynamics, and human behavior. His notable works include \"The 48 Laws of Power,\" \"The Art of Seduction,\" and \"The 33 Strategies of War.\" Greene\'s writing often delves into historical examples and psychological insights to provide readers with strategic wisdom for navigating various aspects of life. He combines elements of philosophy, psychology, and strategy to offer a unique perspective on achieving success and influence. Greene\'s books are characterized by a pragmatic approach to understanding power dynamics, often drawing lessons from historical figures and classic literature. His writing style is engaging and thought-provoking, challenging readers to think strategically and critically about their actions in both personal and professional spheres.', '../../Images/robertgreene.jpg', 1),
(2, 'Friedrich Nietszche', 'Friedrich Nietzsche (1844–1900) was a German philosopher, cultural critic, poet, and philologist, known for his profound and controversial ideas. Nietzsche\'s work has had a lasting impact on philosophy, literature, psychology, and various intellectual disciplines. Born in Prussia, Nietzsche challenged conventional morality, religion, and the concept of truth in his writings.\r\n\r\nSome of his most influential works include \"Thus Spoke Zarathustra,\" \"Beyond Good and Evil,\" and \"The Genealogy of Morals.\" Nietzsche\'s philosophy is characterized by concepts such as the will to power, the eternal recurrence, and the Übermensch (Overman or Superman). He critiqued traditional values and religious beliefs, advocating for a reevaluation of human values based on individual creativity and self-expression.\r\n\r\nNietzsche\'s writing style is often poetic, aphoristic, and metaphorical, making his works open to various interpretations. Despite the controversy surrounding his ideas, Nietzsche\'s contributions to existentialism and postmodern thought continue to influence thinkers and writers across the globe.', '../../Images/friedrich.jpg', 4),
(3, 'David Goggins', 'David Goggins, born on February 17, 1975, is an American ultramarathon runner, motivational speaker, and retired Navy SEAL. Known for his incredible mental and physical toughness, Goggins has become a popular figure in the realms of fitness, endurance sports, and self-improvement.\r\n\r\nGoggins\' memoir, \"Can\'t Hurt Me: Master Your Mind and Defy the Odds,\" co-authored with Adam Skolnick, details his challenging upbringing, his experiences in Navy SEAL training (including Hell Week three times), and his accomplishments as an ultra-endurance athlete. Goggins often shares his personal journey of overcoming adversity, pushing through physical and mental limits, and embracing discomfort as a means of personal growth.\r\n\r\nHis motivational philosophy emphasizes the importance of resilience, self-discipline, and mental toughness. Goggins has inspired many with his \"cookie jar\" concept, encouraging individuals to draw strength from their past achievements during challenging times. His story resonates w', '../../Images/davidgoggins.jpg', 5),
(4, 'Tatsuki Fujimoto', 'Tatsuki Fujimoto is a Japanese manga artist best known for his work in the manga industry. Born on June 18, 1992, Fujimoto gained widespread recognition for his unique and often dark storytelling.\r\n\r\nHis notable work includes \"Fire Punch,\" a post-apocalyptic fantasy manga serialized from 2016 to 2018, which marked his debut as a professional manga artist. However, Fujimoto truly rose to international prominence with his subsequent work, \"Chainsaw Man.\" Serialized in Weekly Shōnen Jump from 2018 to 2020, \"Chainsaw Man\" gained a significant following for its intense and unpredictable narrative, as well as its unconventional take on the shōnen genre.\r\n\r\nTatsuki Fujimoto is celebrated for his ability to blend action, horror, and emotional depth in his storytelling, making him a prominent and innovative figure in the world of manga. Please note that developments in his career may have occurred since my last update in January 2022.', '../../Images/tatsuki.jpg', 6),
(5, 'Haruki Murakami', 'Haruki Murakami is a renowned Japanese author and translator, born on January 12, 1949, in Kyoto, Japan. Murakami\'s works are known for their blend of magical realism, surrealism, and elements of pop culture. His writing often explores themes of loneliness, existentialism, and the complexities of modern life.\r\n\r\nSome of Haruki Murakami\'s most famous novels include \"Norwegian Wood,\" \"Kafka on the Shore,\" \"1Q84,\" and \"The Wind-Up Bird Chronicle.\" His works have gained international acclaim, and he has been considered a prominent figure in contemporary literature.\r\n\r\nMurakami\'s writing style is characterized by a dreamlike quality, intricate plots, and a deep exploration of the human psyche. He has received numerous literary awards for his contributions to world literature. It\'s worth noting that there might have been further developments in Murakami\'s career or new releases since my last update.', '../../Images/haruki.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(30) DEFAULT NULL,
  `book_author` varchar(20) DEFAULT NULL,
  `book_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_author`, `book_image`) VALUES
(1, '48 Laws Of Power', 'Robert Greene', '../../Images/48lawsofpower.jpg'),
(2, 'Batman The Dark Knight', 'Batman', '../../Images/Batmanthedarkknight.jpg'),
(3, 'Becoming Hitler', 'Hitler', '../../Images/Becominghitler.jpg'),
(4, 'Beyond Good And Evil', 'Friedrich Nietszche', '../../Images/BeyondGoodAndEvil.jpg'),
(5, 'Can\'t Hurt Me', 'David Goggin', '../../Images/Canthurtme.jpg'),
(6, 'Chainsawman1', 'Tatsuki Fujimoto', '../../Images/Chainsawman1.jpg'),
(7, 'Chainsawman2', 'Tatsuki Fujimoto', '../../Images/Chainsawman2.png'),
(8, 'Chainsawman 3', 'Tatsuki Fujimoto', '../../Images/Chainsawman3.jpg'),
(9, 'Fadilat Amal', 'Muhammad Abdul Wahid', '../../Images/fadilatamal.jpg'),
(10, 'Book Of Five Rings', 'Musashi', '../../Images/Fiverings.jpg'),
(11, 'The World Of Guweiz', 'Zheng Wei', '../../Images/Guweiz.jpg'),
(12, 'The World Of Guweiz 2', 'Zheng Wei', '../../Images/Guweiz2.jpg'),
(13, 'Ikigai', 'Ichigo Ichie', '../../Images/Ikigai.jpg'),
(14, 'Kafka On The Shore', 'Haruki Murakami', '../../Images/Kafkaontheshore.jpg'),
(15, 'King A Life', 'Jonathan Eig', '../../Images/Kingalife.jpg'),
(16, 'Nerds', 'Stephen Segaller', '../../Images/Nerds.jpg'),
(17, 'Nirnama', 'Hilal Asyraf', '../../Images/Nirnama.jpg'),
(18, 'Norwegian Wood', 'Haruki Murakami', '../../Images/norwegianwood.jpg'),
(19, 'Pablo Picasso', 'Pablo Picasso', '../../Images/Pablopicasso.jpg'),
(20, 'The Hun', 'Rashid Khalidi', '../../Images/Palestine.jpg'),
(21, 'Studio Anywhere', 'Nick Fancher', '../../Images/StudioAnywhere.jpg'),
(22, 'Studio Anywhere 2', 'Nick Fancher', '../../Images/StudioAnywhere2.jpg'),
(23, 'The 33 Strategies Of War', 'Robert Greene', '../../Images/The33strategiesofwar.jpg'),
(24, 'The Beauty of Everyday Things', 'Soetsu Yanagi', '../../Images/Thebeautyofeverydaythings.jpg'),
(25, 'The Power Of Art', 'Caroline Campbell', '../../Images/Thepowerofart.jpg'),
(26, 'The Wager', 'David Grann', '../../Images/thewager.jpg'),
(27, 'The Way of Kings', 'Brandon Sanderson', '../../Images/Thewayofkings.jpg'),
(28, 'Colorless Tsukuru Tazaki', 'Haruki Murakami', '../../Images/Tsukurutazaki.jpg'),
(29, 'Weathering With You', 'Makoto Shinkai', '../../Images/Weatheringwithyou.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_description`
--

CREATE TABLE `book_description` (
  `desc_id` int(10) NOT NULL,
  `book_id` int(10) DEFAULT NULL,
  `synopsis` longtext DEFAULT NULL,
  `ISBN` int(20) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_description`
--

INSERT INTO `book_description` (`desc_id`, `book_id`, `synopsis`, `ISBN`, `year`) VALUES
(1, 1, 'The 48 Laws of Power\" is a book written by Robert Greene, published in 1998. The book explores themes related to power dynamics, strategy, and human behavior. It draws upon historical examples, anecdotes, and philosophical principles to provide readers with insights into the nature of power and how to navigate social and professional environments.\r\n\r\nThe book is structured around 48 \"laws\" or principles, each offering advice on how to gain, maintain, or defend against power. These laws are derived from historical figures, political leaders, and strategic thinkers. Some of the laws include \"Law 1: Never Outshine the Master,\" \"Law 3: Conceal Your Intentions,\" and \"Law 15: Crush Your Enemy Totally.\"\r\n\r\nWhile \"The 48 Laws of Power\" has gained popularity for its strategic insights, it has also been criticized for its sometimes Machiavellian approach and the ethical implications of some of the suggested tactics. The book has found a diverse readership, including individuals in business, politics, and various fields interested in understanding the dynamics of power and influence.', 1122, 2013),
(2, 2, '\"Batman: The Dark Knight Returns\" is set in a dystopian future where an aging Bruce Wayne comes out of retirement to fight crime in Gotham City once again. The story explores themes of aging, the role of superheroes, and the complex relationship between Batman and the authorities. As Batman returns to the streets, he faces new and old adversaries, including a violent gang called the Mutants and a powerful foe known as the Joker.\r\n\r\nThe graphic novel is praised for its mature and gritty storytelling, as well as its influence on the darker and more complex portrayal of superheroes in modern comics. Frank Miller\'s art style and narrative approach in \"The Dark Knight Returns\" have had a lasting impact on the Batman mythos and the superhero genre as a whole.', 12233, 1986),
(3, 3, 'An award-winning historian charts Hitler\'s radical transformation after World War I from a directionless loner into a powerful National Socialist leader\r\n\r\nIn Becoming Hitler, award-winning historian Thomas Weber examines Adolf Hitler\'s time in Munich between 1918 and 1926, the years when Hitler shed his awkward, feckless persona and transformed himself into a savvy opportunistic political operator who saw himself as Germany\'s messiah. The story of Hitler\'s transformation is one of a fateful match between man and city. After opportunistically fluctuating between the ideas of the left and the right, Hitler emerged as an astonishingly flexible leader of Munich\'s right-wing movement. The tragedy for Germany and the world was that Hitler found himself in Munich; had he not been in Bavaria in the wake of the war and the revolution, his transformation into a National Socialist may never have occurred.\r\n\r\nIn Becoming Hitler, Weber brilliantly charts this tragic metamorphosis, dramatically expanding our knowledge of how Hitler became a lethal demagogue.', 54324254, 1945),
(4, 4, '\"Beyond Good and Evil\" is a philosophical work by the German philosopher Friedrich Nietzsche. It was first published in 1886. In this book, Nietzsche explores a wide range of topics, presenting his thoughts on morality, religion, culture, truth, and the nature of philosophy itself.\r\n\r\nThe title \"Beyond Good and Evil\" suggests Nietzsche\'s challenge to traditional ethical systems and his exploration of a new, more nuanced understanding of morality. He critiques conventional moral frameworks and advocates for a reevaluation of values, urging readers to question prevailing notions of good and evil.\r\n\r\nKey themes in the book include the idea of the \"will to power,\" the critique of traditional morality, and the exploration of the concept of the \"Ubermensch\" or \"Overman,\" a transcendent individual who rises above conventional moral and social norms.\r\n\r\nNietzsche\'s writing style is often aphoristic, presenting ideas in short, impactful statements. \"Beyond Good and Evil\" is considered one of Nietzsche\'s most significant works and has had a profound influence on philosophy, literature, and various intellectual movements.', 5435234, 1887);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `fav_id` int(10) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`fav_id`, `users_id`, `book_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(20) NOT NULL,
  `users_uid` varchar(20) DEFAULT NULL,
  `users_pwd` varchar(60) DEFAULT NULL,
  `users_email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'naim', '$2y$10$9XgsVCd5ObndwH9/1i2px.JgSi45QoGVj9wjxVjk7VJbiZ46Cvgsi', 'naimrzm17@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `author_name` (`author_name`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_description`
--
ALTER TABLE `book_description`
  ADD PRIMARY KEY (`desc_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `book_description`
--
ALTER TABLE `book_description`
  MODIFY `desc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `fav_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `book_description`
--
ALTER TABLE `book_description`
  ADD CONSTRAINT `book_description_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
