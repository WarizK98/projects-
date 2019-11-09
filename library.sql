-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 06:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `library3`
--

CREATE TABLE `library3` (
  `id` int(11) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `tb_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library3`
--

INSERT INTO `library3` (`id`, `sem`, `subject`, `tb_name`, `author`, `available`) VALUES
(302, 3, 'Engineering Mathematics-III ', 'Higher Engineering Mathematics, S. Chand Publishers, 3rd Edition, 2014', ' H. K. Dass, Er. RajnishVerma', 2),
(303, 3, 'Data Structures With Applications', ' Fundamentals of Data Structures in C, 2nd Edition, Universities Press, 2007', ' Horowitz, Sahni, Anderson-Freed', 2),
(304, 3, 'Data Structures With Applications', ' Approach of Data Structures”, Person Publication, 5th Edition, 2015 ', ' A.M Padma Reddy', 2),
(305, 3, 'Object Oriented Programming With JAVA', ' Java The Complete Reference, 7th Edition, Tata McGraw Hill, 2007', ' Herbert Schildt', 2),
(306, 3, 'Object Oriented Programming With JAVA  ', ' Introduction to JAVA Programming, 6th Ed, Pearson Education, 2007', 'Y. Daniel Liang:', 2),
(307, 3, 'Logic Design ', ' Digital Principles and Applications, 7th Edition, Tata McGraw Hill, 2010.', 'Donald P Leach, Albert Paul Malvino&GoutamSaha', 2),
(308, 3, ' Logic Design', ' Illustrative Approach to Logic Design, Sanguine-Pearson, 2010', ' R D Sudhaker Samuel: ', 2),
(309, 3, 'Computer Organization', ' Computer Organization, 5th Edition, Tata McGraw Hill, 2002. ', ' Carl Hamacher, ZvonkoVranesic, SafwatZaky', 2),
(310, 3, ' Computer Organization', ' Computer Organization & Architecture, 7th Edition, PHI, 2006. ', ' William Stallings', 2),
(311, 3, 'Discrete Mathematical Structures', ' Discrete and Combinatorial Mathematics, 5th Edition, Pearson Education, 2004', 'Ralph P. Grimaldi', 2),
(312, 3, 'Discrete Mathematical Structures', ' A Treatise on Discrete Mathematical Structures, Sanguine-Pearson, 2010', 'JayantGanguly', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library4`
--

CREATE TABLE `library4` (
  `id` int(11) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `tb_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library4`
--

INSERT INTO `library4` (`id`, `sem`, `subject`, `tb_name`, `author`, `available`) VALUES
(401, 4, 'Engineering Mathematics', 'Higher Engineering Mathematics,  Khanna Publishers, 43rd Edition, 2014 June', 'B.S. Grewal', 2),
(402, 4, 'Engineering Mathematics', ' Advanced Engineering Mathematics; John Wiley & Sons, 9th Edition, 2007', 'Erwin Kreyszig', 2),
(403, 4, 'Design & Analysis of Algorithms', ' Introduction to the Design & Analysis of Algorithms, 3rd  Edition, Pearson Education, 2012', 'Anany Levitin', 2),
(404, 4, 'Design & Analysis of Algorithms', ' Fundamentals of Computer Algorithms, 2nd Edition, Universities Press', ' Ellis Horowitz, Sartaj Sahni, Sanguthevar Rajasekaran', 2),
(405, 4, 'Microprocessors and Microcontrollers', 'The Intel Microprocessors, 8th Edition, Pearson Education, 2009', ' Barry B Brey', 2),
(406, 4, 'Microprocessors and Microcontrollers', '“The 8051 Microcontroller and Embedded Systems – using assembly and C ', ' Muhammad Ali Mazidi and Janice Gillespie Mazidi and Rollin D. McKinlay', 2),
(407, 4, 'Operating System', ' Operating System Principles, 8th edition, Wiley India, 2009 ', ' Abraham Silberschatz, Peter Baer Galvin, Greg Gagne', 2),
(408, 4, 'Operating System', ' Operating systems - A concept based Approach,2nd Edition, Tata McGraw- Hill, 2002', ' D.M Dhamdhere', 2),
(409, 4, 'Automata Theory And Formal Languages', 'Introduction to Automata Theory, Languages and Computation, 3rd Edition, Pearson Education, 2007', 'John E. Hopcroft, Rajeev Motwani, Jeffrey D.Ullman', 2),
(410, 4, 'Automata Theory And Formal Languages', 'Introduction to Languages and Automata Theory, 3rd Edition, Tata McGraw-Hill, 2007', 'John C Martin', 2),
(411, 4, 'Linux System Programming', 'Linux System Programming', 'Robert Love ', 2),
(412, 4, 'Linux System Programming', 'Linux Fundamentals', 'Paul Cobbaut ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library5`
--

CREATE TABLE `library5` (
  `id` int(11) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `tb_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library5`
--

INSERT INTO `library5` (`id`, `sem`, `subject`, `tb_name`, `author`, `available`) VALUES
(501, 5, 'Management and Entrepreneurship', 'Principles of Management, Tata McGraw Hill , 4th Edition, 2008', 'P.C.Tripathi, P.N.Reddy ', 2),
(502, 5, 'Management and Entrepreneurship ', 'Management & Entrepreneurship, IK International, 1st Edition, 2014', 'N V R Naidu', 2),
(503, 3, 'Computer Networks ', 'Data Communication and Networking , 4th Edition, Tata McGraw-Hill, 2006', ' Behrouz A. Forouzan', 2),
(504, 5, 'Computer Networks ', ' Data and Computer Communication, Pearson Education , 8th Edition, 2007 ', ' William Stallings', 2),
(505, 5, 'Database Management Systems ', '	An Introduction to Database Systems, 8th Edition, Pearson Education , 2006', ' C.J. Date, A. Kannan, S. Swamynatham', 2),
(506, 5, 'Database Management Systems ', '	Fundamentals of Database Systems, 5th Edition, Pearson Education , 2007', ' Elmasri and Navathe', 2),
(507, 5, 'Software Engineering ', '	Software Engineering , 8th Edition, Pearson Education , 2007', ' Ian Sommerville', 2),
(508, 5, 'Software Engineering ', 'Software Engineering-A Practitioners approach, 7th Edition, Tata McGraw Hill , 2007', 'Roger.S.Pressman', 2),
(509, 5, 'Artificial Intelligence ', 'Artificial Intelligence A Modern  Approach, 2nd Edition, Pearson Education , 2003', 'Stuart Russel, Peter Norvig', 2),
(510, 5, 'Artificial Intelligence ', 'Artificial Intelligence, 3rd Edition, Tata McGraw Hill , 2009', 'Elaine Rich, Kevin Knight', 2),
(511, 5, 'Mobile Application Development ', 'Android Programming: The Big Nerd Ranch Guide, 1st Edition, Pearson Education , 2003', 'Brian Hardy, Bill Phillips', 2),
(512, 5, 'Mobile Application Development ', 'Hello, Android: Introducing Google\'s Mobile Development Platform, 3rd edition, Pearson Education , 2', 'Ed Burnette', 2),
(513, 5, 'Advanced Java ', 'J2EE- The Complete Reference , 1st edition, Tata McGraw Hill , 2003', 'Jim Keogh', 2),
(514, 5, 'Advanced Java ', 'The J2EE Tutorial, 2nd edition, Pearson Education , 2004', 'Stephanie Bodoff etal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library6`
--

CREATE TABLE `library6` (
  `id` int(11) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `tb_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library6`
--

INSERT INTO `library6` (`id`, `sem`, `subject`, `tb_name`, `author`, `available`) VALUES
(601, 6, 'Internet and Web Technologies', 'Programming the World Wide Web, 4th edition, Pearson Education , 2008', 'Robert W. Sebesta', 2),
(602, 6, 'Internet and Web Technologies', 'Internet & World Wide WebHow to Program, 4th edition, Pearson Education , 2004', '	M. Deitel, P.J. Deitel, A. B. Goldberg', 2),
(603, 6, 'Compiler Design', 'Compilers- Principles, Techniques and Tools, 2nd edition, Pearson Education , 2007', 'Alfred V Aho, Monica S.Lam, Ravi Sethi, Jeffrey D Ullman', 2),
(604, 6, 'Compiler Design', 'Crafting a Compiler with C, 4th edition, Pearson Education , 2004', 'Charles N. Fischer, Richard J. leBlanc, Jr. ', 2),
(605, 6, 'Computer Graphics & Visualization ', 'Interactive Computer Graphics A Top-Down Approach with OpenGL, 5th edition, Pearson Education , 2008', 'Edward Angel', 2),
(606, 6, 'Computer Graphics & Visualization', 'Computer Graphics- OpenGL Version, 3rd edition, Pearson Education , 2004', 'Donald Hearn and Pauline Baker', 2),
(607, 6, 'Cloud & Big Data Applications ', 'Cloud Computing Theory and Practice, 3rd edition, Elsevier(MK), 2013', 'Dan C Marinescu', 2),
(608, 6, 'Cloud & Big Data Applications ', 'Hadoop: The Definitive Guide, 3rd edition,O\'Reilley , 2012', 'Tom White ', 2),
(609, 6, 'Internet Of Things', 'Internet of Things – A hands-on approach, 1st edition,Universities Press , 2012', 'Arshdeep Bahga, Vijay Madisetti ', 2),
(610, 6, 'Internet Of Things', 'Computer networking : a top-down approach, 5th edition,Pearson,2012', 'Kurose, James F.; Ross, Keith W.', 2),
(611, 6, 'Cyber Security', 'Cryptography, Network Security and Cyber Laws, 4th edition,Cengage Learning,2010', ' Bernard Menezes', 2),
(612, 6, 'Cyber Security', 'Cryptography and Network Security, 3rd edition,Mc-GrawHill,2015', ' Behrouz A Forouzan, Debdeep Mukhopadhyay', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library7`
--

CREATE TABLE `library7` (
  `id` int(11) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `tb_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library7`
--

INSERT INTO `library7` (`id`, `sem`, `subject`, `tb_name`, `author`, `available`) VALUES
(701, 7, 'Machine learning ', 'Machine Learning, McGraw-Hill Education (INDIAN EDITION), 2013', 'Tom M. Mitchell', 2),
(702, 7, 'Machine learning', 'Data Mining Concepts and Techniques', '  Jiawei Han, Micheline Kamber, Jian Pei, Elsevier', 2),
(703, 7, 'Object oriented and design', 'Object-Oriented Modeling and Design with UML, 2nd Edition, Pearson Education, 2005. ', ' \r\nMichael Blaha, James Rumbaugh', 2),
(704, 7, 'Object oriented and design', ' Pattern-Oriented Software Architecture, A System of Patterns, Volume 1, John Wiley and Sons, 2007, ', 'Frank Buschmann, Regine Meunier, Hans Rohnert, Peter Sommerlad, Michael Stal ', 2),
(705, 7, 'System modeling and simulation', ' Discrete Event system Simulation, Pearson Education, Asia, 4th Edition,2007', 'Jerry Banks, John S Carson, II, Berry L Nelson, David M Nicol,', 2),
(706, 7, ' Embedded computer system', ' Computers as Components, Principles of EmbeddedComputing Systems Design, 2nd Edition, Elsevier, 200', 'Wayne Wolf', 2),
(707, 7, 'Embedded computer system ', 'Introduction to Embedded Systems, Tata McGraw Hill,2009 ', 'Shibu K V', 2),
(708, 7, ' Iot', ' IoT Fundamentals: Networking Technologies, Protocols, and Use Cases for the Internet ofThings, 1stE', ' David Hanes, Gonzalo Salgueiro, Patrick Grossetete, Robert Barton, Jerome Henry ', 2),
(709, 7, 'IoT', ' Internet of Things – A hands-on approach, Universities Press, 2015. ', 'ArshdeepBahga, Vijay Madisett ', 2),
(710, 7, '\r\nData structure with c ', ' Fundamentals of Data Structures in C, 2nd Edition, Universities Press, 2007. ', 'Horowitz, Sahni, Anderson-Freed ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `library8`
--

CREATE TABLE `library8` (
  `id` int(11) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `tb_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library8`
--

INSERT INTO `library8` (`id`, `sem`, `subject`, `tb_name`, `author`, `available`) VALUES
(801, 8, 'nformation and network security', ' Principles of Information Security, 2nd Edition, Cengage Learning, 2005.', 'Michael E. Whitman and Herbert J. Mattord', 2),
(802, 8, 'nformation and network security', 'Network Security Essentials: Applications and Standards, 3rd Edition, Pearson Education, 2007. ', ' William Stalling', 2),
(803, 8, 'Business intelligence', ' Business Intelligence Roadmap : The Complete Project Lifecycle for Decision Support Applications, A', 'Larissa T Moss and ShakuAtre', 2),
(804, 8, 'Business intelligence', 'Fundamentals of Business Analytics , Wiley India, 2011. ', ' R N Prasad, SeemaAcharya', 2),
(805, 8, 'Advanced database systems', 'Database Management Systems, 3\r\nEdition, McGraw-Hill, 2003.', 'Raghu Ramakrishnan and Johannes Gehrke ', 2),
(806, 8, 'Advanced database systems', ' Fundamentals of Database Systems, 5 th\r\nEdition, Addison-Wesley, 2007.', 'Elmasri and Navathe ', 2),
(807, 8, 'Real time operating systems', ' Real Time Systems, McGraw Hill, India, 1997 ', ' C. M. Krishna, Kang. G. Shin,', 2),
(808, 8, 'Programming in python', ' Practical Programming: An Introduction to Computer Science Using Python 3, Pragmatic Bookshelf,', '\r\nPaul Gries , Jennifer Campbell, Jason Montojo', 2),
(809, 8, 'Programming in python', 'Beginning Python: Using Python 2.6 and Python 3, Wiley India, 2010', 'James Payne', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'dhathwar91', 'dhathwar91@gmail.com', '98673a3b728872effe144279b1a0153f'),
(2, 'kavyahathwar97@gmail.com', 'kavyahathwar97@gmail.com', '2e3817293fc275dbee74bd71ce6eb056');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library3`
--
ALTER TABLE `library3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library4`
--
ALTER TABLE `library4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library5`
--
ALTER TABLE `library5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library6`
--
ALTER TABLE `library6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library7`
--
ALTER TABLE `library7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library8`
--
ALTER TABLE `library8`
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
-- AUTO_INCREMENT for table `library3`
--
ALTER TABLE `library3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `library4`
--
ALTER TABLE `library4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `library5`
--
ALTER TABLE `library5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- AUTO_INCREMENT for table `library6`
--
ALTER TABLE `library6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=613;

--
-- AUTO_INCREMENT for table `library7`
--
ALTER TABLE `library7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=711;

--
-- AUTO_INCREMENT for table `library8`
--
ALTER TABLE `library8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
