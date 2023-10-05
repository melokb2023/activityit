-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 11:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `completename` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `completename`, `username`, `password`) VALUES
(1, 'Kyle BryantMelo', 'kylemelo', '$2y$10$8DLS7hIgfpB3h1PwFQ4KceVvdwiXYpKRAkcmNl//d4/WOnL66EyZ.'),
(2, 'Kyle Bryant\nMelo', 'kylemelo', '$2y$10$yW1uFUdrOFrwreFzOGWo4ea/g.IBvyETEeH9NrqS1gjomzVu5Guy.'),
(3, 'Kyle Bryant\nMelo', 'kmelo', '$2y$10$/teupeTvqHeK1aaqSUKWve/phH.1dftT5qYpfcC6Mn89TXpu8gLNi'),
(7, 'Kyle Bryant\nMejares', 'charmy23', '$2y$10$MugeWP7CP0SUoS97TKn6gOyQfl6HSXoR7g/W5LpAkPbXiqePRK78q'),
(8, 'Kyle Bryant\nMelo', 'mrtechnoman', '$2y$10$ZBdYH7d61MocY8vV2j7JLe31pzCOQCsph9H.TBXO6aO34IW1UkR3y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
