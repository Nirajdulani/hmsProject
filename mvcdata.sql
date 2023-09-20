-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 07:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `postal` varchar(20) NOT NULL,
  `diseases` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fullname`, `age`, `email`, `gender`, `contact`, `date`, `address`, `city`, `country`, `postal`, `diseases`) VALUES
(1, 'nirajdulani', '20', 'nirajdulani195@gmai.', 'male', '0000900099', '2023-09-13', '136,fggddd', 'jamnagar', 'india', '361001', 'brain'),
(2, 'jatingangani', '88', 'jatin@gmail.com', 'male', '9898989', '2023-09-13', '136,fggddd', 'jamnagar', 'india', '361001', 'kideny'),
(3, 'Fiona Glenn', '66', 'jilufos@mailinator.c', 'male', '89889899', '1997-08-18', 'Voluptatum quia cupi', 'fycykuvi@mailinator.', 'Reprehenderit aliqu', 'Eum rerum quis eos ', 'Obcaecati numquam Na'),
(4, 'Paula Lamb', '44', 'jynak@mailinator.com', 'male', '6565656', '2007-03-09', 'Accusantium nesciunt', 'tegek@mailinator.com', 'Nihil ipsum vero occ', 'Lorem qui id odio q', 'Libero voluptates ne'),
(5, 'Chastity Pittman', '87', 'dujugely@mailinator.', 'female', '89898989', '1994-12-31', 'Atque amet ut anim ', 'xatopiq@mailinator.c', 'Pariatur Sit corrup', 'Vero quod lorem prae', 'Aut officiis ipsum q'),
(6, 'Mariko Mcintosh', '78', 'wujicy@mailinator.co', 'male', '77778888', '2019-12-05', 'Et at iste aute fugi', 'potate@mailinator.co', 'Ipsam hic atque temp', 'Libero dolor vel mol', 'Tenetur consectetur'),
(8, 'Ferdinand Hyde', '56', 'xufanymyk@mailinator', 'male', '78878787', '1988-10-21', 'Cillum commodi conse', 'zatam@mailinator.com', 'Pariatur Deleniti e', 'Deserunt nemo rerum ', 'Et non provident pr'),
(9, 'Fuller Kemp', '22', 'cawilowax@mailinator', 'female', '9998377293', '1975-06-04', 'Enim autem dolore co', 'masor@mailinator.com', 'Consequatur suscipit', 'Omnis eaque minim qu', 'Animi et non occaec'),
(10, 'Keaton Finley', '67', 'somivex@mailinator.c', 'female', '88888888', '0000-00-00', 'victoriabridege,\r\n', '', '', '', 'Esse a non autem eu');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `joiningdate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `fullname`, `gender`, `age`, `joiningdate`, `email`, `address`, `contact`, `department`) VALUES
(1, 'nirajdulani', 'male', 21, '2023-09-30', 'nirajdulani195@gmai.com', '136,fggddd', 900099, 'cardiologist'),
(2, 'Reed Wilder', 'female', 55, '2000-06-16', 'dapohemara@mailinator.com', 'Asperiores anim volu', 33333333, 'neurology');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int(12) NOT NULL,
  `specialist` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `gender`, `age`, `email`, `address`, `contact`, `specialist`) VALUES
(3, 'nirajdulani', 'male', '20', 'nirajdulani195@gmai.', '136,fggddd', 900099, 'kidney'),
(4, 'David Moody', 'female', '33', 'sosah@mailinator.com', 'Sapiente voluptatem ', 90909, 'Doloribus totam et a'),
(5, 'Kylie Logan', 'female', '55', 'kiqiburi@mailinator.', 'Officiis laboris bla', 90909, 'Qui dolores ea offic'),
(6, 'Ayanna Rutledge', 'male', '33', 'cewepededy@mailinato', 'Dolores voluptate qu', 78787878, 'Commodi itaque quae ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `user_name`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `joiningdate` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `diseases` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fullname`, `gender`, `age`, `joiningdate`, `email`, `address`, `contact`, `diseases`) VALUES
(1, 'nirajdulani', 'male', '20', '2023-09-20', 'nirajdulani195@gmai.', '136,fggddd', '0000900099', 'gg'),
(2, 'Jerome Blanchard', 'female', '56', '0000-00-00', 'bonazedino@mailinato', 'Et aut sint veritati', 'Eligendi distinctio', 'Earum sed dolorem vo'),
(3, 'Quentin Small', 'male', '30', '2009-05-09', 'vudysun@mailinator.c', 'Tempora facere fugia', 'Numquam cupidatat ip', 'Tempore aut in tota'),
(4, 'Mark Pearson', 'male', '33', '1977-11-19', 'qikykih@mailinator.c', 'Unde unde autem omni', '787878', 'Id amet pariatur ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `contact`, `address`, `status`) VALUES
(2, 'NirajDulani', 'nirajdulani195@', '1212122', '136,victoriabridge', 'locked'),
(3, 'Niraj ', 'nirajdulani1@gmail.c', '88888888', '2222222ddd', 'Locked'),
(4, 'manoj', 'nirajdulani02@gmail.', '787878', '2222333332222', 'active'),
(5, 'manoj', 'nirajdulani195@gmail', '88888888', '3k34eeeeeeeeeeeeee', 'active'),
(7, 'jacky chen', 'jacky chen.com', '99998998', 'gggggggg', 'Locked'),
(8, 'localtrain', 'local.com', '99989889', 'dddddjjjjddddj', 'locked'),
(9, 'hiren', 'hiren@gmail.com', '9090909090', '123,jajaj colony,', 'locked'),
(10, 'Haley Wilcox', 'pycimofik@mailinator', 'Velit ipsa omnis q', 'Voluptates occaecat ', 'active'),
(11, 'Orson Turner', 'sinov@mailinator.com', 'Ut dolorem nobis bea', 'Vel velit dolorum l', 'locked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
