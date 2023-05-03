-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 05:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'hi\n', '2023-04-23 07:46:34', 0),
(2, 2, 1, '', '2023-04-23 07:46:34', 0),
(3, 2, 1, '', '2023-04-23 07:46:35', 0),
(4, 2, 1, '', '2023-04-23 07:46:35', 0),
(5, 2, 1, '', '2023-04-23 07:46:35', 0),
(6, 2, 1, 'hi\n', '2023-04-23 07:48:18', 0),
(7, 2, 1, 'how are you?', '2023-04-23 07:48:28', 0),
(8, 2, 1, 'hi', '2023-04-23 08:08:59', 0),
(9, 1, 2, 'hi\n', '2023-04-23 08:09:09', 0),
(10, 2, 1, 'yooo', '2023-04-23 08:09:24', 0),
(11, 2, 1, 'YOLO', '2023-04-23 08:10:32', 0),
(12, 1, 2, 'YOLA', '2023-04-23 08:10:55', 0),
(13, 2, 1, 'hi', '2023-04-23 08:17:07', 0),
(14, 2, 1, 'hi\n', '2023-04-23 08:17:13', 0),
(15, 1, 2, 'hi\n', '2023-04-23 08:17:19', 0),
(16, 2, 1, 'hellooo', '2023-04-23 08:18:14', 0),
(17, 1, 2, 'heelooo\n', '2023-04-23 08:18:22', 0),
(18, 2, 1, 'somaiya\n', '2023-04-23 08:24:18', 0),
(19, 1, 2, 'somaiya', '2023-04-23 08:24:35', 0),
(20, 2, 1, 'u mymymy', '2023-04-23 08:27:07', 0),
(21, 1, 2, 'umdmdmd', '2023-04-23 08:27:21', 0),
(22, 3, 1, 'hey', '2023-04-23 08:35:05', 0),
(23, 1, 3, 'hi', '2023-04-23 08:35:17', 0),
(24, 1, 3, 'how are you', '2023-04-23 08:35:28', 0),
(25, 1, 3, 'i am in somaiya', '2023-04-23 08:36:28', 0),
(26, 3, 1, 'in comps?', '2023-04-23 08:37:15', 0),
(27, 1, 3, 'yes', '2023-04-23 08:37:21', 0),
(28, 3, 1, 'noice', '2023-04-23 08:37:31', 0),
(29, 3, 1, 'which year', '2023-04-23 08:38:21', 0),
(30, 1, 3, 'SY', '2023-04-23 08:38:26', 0),
(31, 3, 1, 'I am in TY', '2023-04-23 08:38:31', 0),
(32, 1, 3, 'cool', '2023-04-23 08:44:46', 0),
(33, 1, 3, 'hi john...!!!!', '2023-04-23 09:08:39', 0),
(34, 1, 3, 'Its been a long time', '2023-04-23 09:08:53', 0),
(35, 3, 1, 'ikr', '2023-04-23 09:09:14', 0),
(36, 1, 3, 'how have you been', '2023-04-23 09:10:56', 0),
(37, 1, 3, 'fine ?', '2023-04-23 09:11:11', 0),
(38, 3, 1, 'yes', '2023-04-23 09:11:25', 0),
(39, 3, 1, 'HELLO', '2023-04-24 08:40:15', 0),
(40, 1, 3, 'HIIIIII!!!!!!CB;VIUBF', '2023-04-24 08:40:25', 0),
(41, 2, 1, '', '2023-04-24 08:43:51', 0),
(42, 1, 3, 'EUDHEUDE', '2023-04-24 08:52:45', 0),
(43, 1, 3, 'EDED\n', '2023-04-24 08:52:57', 0),
(44, 1, 3, 'EDED\n', '2023-04-24 08:55:39', 0),
(45, 1, 3, 'FRGG', '2023-04-24 08:55:50', 0),
(46, 1, 3, 'MOON IS BEAUTIFUL', '2023-04-24 08:57:44', 0),
(47, 1, 3, 'be LIKE IT', '2023-04-24 08:57:59', 0),
(48, 3, 1, 'SURE!!!!', '2023-04-24 08:58:10', 0),
(49, 1, 3, 'RREGR', '2023-04-24 08:58:22', 0),
(50, 1, 3, 'FERFER', '2023-04-24 08:58:25', 0),
(51, 1, 3, 'sooraj dooba hai', '2023-04-24 09:00:53', 0),
(52, 1, 3, 'haa na', '2023-04-24 09:01:01', 0),
(53, 3, 2, 'heyy\n', '2023-04-25 05:42:43', 0),
(54, 2, 3, 'hello', '2023-04-25 05:42:57', 0),
(55, 2, 3, '', '2023-04-25 05:43:00', 0),
(56, 3, 2, 'Somaiya', '2023-04-25 05:43:36', 0),
(57, 2, 3, 'uala', '2023-04-25 05:44:13', 0),
(58, 2, 3, 'eduee', '2023-04-25 05:44:31', 1),
(59, 12, 13, 'Sup??', '2023-04-25 06:11:05', 0),
(60, 13, 12, 'mast...', '2023-04-25 06:11:11', 0),
(61, 12, 13, 'heyy', '2023-04-25 06:27:54', 0),
(62, 13, 12, 'yooo', '2023-04-25 10:27:45', 0),
(63, 12, 13, 'hello', '2023-04-25 10:27:57', 0),
(64, 12, 13, 'yolo', '2023-04-27 05:23:21', 0),
(65, 12, 13, 'vget', '2023-04-27 05:23:43', 0),
(66, 13, 11, 'Hii', '2023-04-30 17:36:10', 0),
(67, 11, 13, 'Hello\n', '2023-04-30 17:36:15', 0),
(68, 13, 11, 'How are you?', '2023-04-30 17:36:24', 0),
(69, 11, 13, 'I am good?', '2023-04-30 17:36:31', 0),
(70, 13, 11, 'Lets submit assignment', '2023-04-30 17:36:40', 0),
(71, 11, 13, 'sure!!!', '2023-04-30 17:36:45', 0),
(72, 11, 13, 'rfnreife', '2023-04-30 19:59:31', 0),
(73, 13, 11, 'ulalal', '2023-04-30 19:59:54', 0),
(74, 12, 13, 'ruhrug', '2023-05-03 10:15:13', 1),
(75, 12, 11, 'yolo', '2023-05-03 11:15:57', 0),
(76, 3, 11, '', '2023-05-03 11:24:05', 1),
(77, 16, 11, '', '2023-05-03 11:26:40', 1),
(78, 11, 12, 'hiii\n', '2023-05-03 11:51:26', 0),
(79, 11, 12, 'bjhbuc7utcv\n', '2023-05-03 11:51:45', 0),
(80, 12, 11, 'ouhino', '2023-05-03 11:51:52', 0),
(81, 17, 18, 'helloo', '2023-05-03 12:28:29', 0),
(82, 18, 17, 'hi handsome', '2023-05-03 12:29:45', 0),
(83, 17, 18, 'YO', '2023-05-03 12:29:56', 0),
(84, 18, 17, 'mar ja', '2023-05-03 12:30:19', 0),
(85, 17, 18, 'theeke', '2023-05-03 12:30:27', 0),
(86, 17, 18, 'bye', '2023-05-03 12:30:32', 0),
(87, 18, 17, 'bye', '2023-05-03 12:30:36', 0),
(88, 17, 18, '<3', '2023-05-03 12:34:36', 0),
(89, 18, 17, 'aa gaya na wapas mere paas', '2023-05-03 12:35:24', 0),
(90, 18, 17, 'love u too', '2023-05-03 12:35:36', 0),
(91, 17, 18, 'okay', '2023-05-03 12:35:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `file_path`, `upload_time`, `user_id`, `username`) VALUES
(1, 'Screenshot (178).png', 'uploads/Screenshot (178).png', '2023-05-01 19:27:36', 0, 'mehta'),
(2, 'Screenshot (177).png', 'uploads/Screenshot (177).png', '2023-05-01 19:28:17', 0, 'mitra'),
(3, 'Screenshot (172).png', 'uploads/Screenshot (172).png', '2023-05-01 19:31:32', 0, 'peterParker'),
(4, 'Screenshot (165).png', 'uploads/Screenshot (165).png', '2023-05-01 19:32:57', 0, 'peterParker'),
(5, 'Screenshot (165).png', 'uploads/Screenshot (165).png', '2023-05-01 19:34:43', 0, 'peterParker'),
(6, 'Screenshot (162).png', 'uploads/Screenshot (162).png', '2023-05-01 19:35:31', 0, 'yash_merchant'),
(7, 'Screenshot (170).png', 'uploads/Screenshot (170).png', '2023-05-02 19:34:56', 0, 'mitra'),
(8, 'Screenshot (176).png', 'uploads/Screenshot (176).png', '2023-05-02 19:45:22', 0, 'mehta'),
(9, 'Screenshot (121).png', 'uploads/Screenshot (121).png', '2023-05-03 06:31:18', 0, 'mehta'),
(10, 'out (4).png', 'uploads/out (4).png', '2023-05-03 06:55:06', 0, 'yash_merchant'),
(11, 'Screenshot (161).png', 'uploads/Screenshot (161).png', '2023-05-03 07:13:11', 0, 'yash_merchant'),
(14, 'Screenshot (178).png', 'uploads/Screenshot (178).png', '2023-05-03 09:19:40', 0, 'yash_merchant'),
(15, 'Screenshot (124).png', 'uploads/Screenshot (124).png', '2023-05-03 11:14:19', 0, 'yash_merchant'),
(16, 'Screenshot (139).png', 'uploads/Screenshot (139).png', '2023-05-03 11:49:04', 0, 'mehta'),
(17, 'Screenshot (30).png', 'uploads/Screenshot (30).png', '2023-05-03 12:16:46', 0, 'yash_merchant'),
(18, 'Screenshot (167).png', 'uploads/Screenshot (167).png', '2023-05-03 12:25:32', 0, 'chevy');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(11, 'yash_merchant', '$2y$10$Mp0wqDKg.xHzmlODCmH6Du.LR0nEvw5aRP6w9enYUHC08TrDqFVGu'),
(12, 'mehta', '$2y$10$tXO7nHcBciGwl1UKCMBydOclXT13mJXm6TVkMrFZRn3RQJm7Sz5wa'),
(14, 'atharv', '$2y$10$c1peBkkdvj8S9PEXb0TnHOeJanVT1hQP8Q3/anlyp/1gW7f7f0KE2'),
(15, 'raunakm', '$2y$10$3S2UcgVrJbq86Z4wvqXc5eHocVQCu.3hdAsO4DZydUSid1oYw4Zcq'),
(16, 'mitra456', '$2y$10$NKL5OrZogXYmVk9YATCo/u5S0dbgiiH2cFQATArEsR/Z2Zk2NMtGq'),
(17, 'chevy', '$2y$10$DPp/8ipsGDxzwRQA/An4feHOCGgMK5tbKmAcyAoaJNc1oykXyRU8.'),
(18, 'Shadow388', '$2y$10$DyCmELMGreW0fTXiphT5NueE3MlOFl2FCintwsJoYH4cPLZnMcnj2');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2023-04-20 09:19:31', 'no'),
(2, 1, '2023-04-20 09:20:32', 'no'),
(3, 2, '2023-04-20 09:22:55', 'no'),
(4, 1, '2023-04-20 09:29:39', 'no'),
(5, 2, '2023-04-20 10:37:54', 'no'),
(6, 1, '2023-04-20 11:28:19', 'no'),
(7, 2, '2023-04-20 10:44:36', 'no'),
(8, 2, '2023-04-20 10:45:11', 'no'),
(9, 3, '2023-04-20 10:46:02', 'no'),
(10, 3, '2023-04-20 11:34:52', 'no'),
(11, 1, '2023-04-20 11:41:05', 'no'),
(12, 1, '2023-04-20 14:13:10', 'no'),
(13, 1, '2023-04-23 08:34:19', 'no'),
(14, 2, '2023-04-23 08:34:25', 'no'),
(15, 1, '2023-04-24 08:39:03', 'no'),
(16, 3, '2023-04-23 11:32:59', 'no'),
(17, 3, '2023-04-25 05:57:26', 'no'),
(18, 1, '2023-04-24 09:01:06', 'no'),
(19, 1, '2023-04-24 09:17:11', 'no'),
(20, 1, '2023-04-24 09:18:28', 'no'),
(21, 2, '2023-04-25 05:59:35', 'no'),
(22, 11, '2023-04-25 06:02:19', 'no'),
(23, 12, '2023-04-25 06:28:31', 'no'),
(24, 13, '2023-04-25 06:12:15', 'no'),
(25, 13, '2023-04-25 06:29:50', 'no'),
(26, 13, '2023-04-26 17:43:43', 'no'),
(27, 12, '2023-04-25 10:35:33', 'no'),
(28, 13, '2023-04-27 05:44:41', 'no'),
(29, 12, '2023-04-27 05:31:02', 'no'),
(30, 13, '2023-04-27 05:46:29', 'no'),
(31, 13, '2023-04-27 05:48:21', 'no'),
(32, 13, '2023-04-27 05:59:11', 'no'),
(33, 12, '2023-04-27 05:59:31', 'no'),
(34, 13, '2023-04-27 06:02:00', 'no'),
(35, 12, '2023-04-27 06:04:49', 'no'),
(36, 2, '2023-04-27 06:05:29', 'no'),
(37, 13, '2023-04-27 06:40:10', 'no'),
(38, 13, '2023-04-27 06:48:49', 'no'),
(39, 12, '2023-04-27 10:11:46', 'no'),
(40, 13, '2023-04-27 10:12:33', 'no'),
(41, 13, '2023-04-28 07:32:37', 'no'),
(42, 1, '2023-04-30 17:35:37', 'no'),
(43, 3, '2023-04-30 17:35:29', 'no'),
(44, 13, '2023-04-30 17:36:57', 'no'),
(45, 11, '2023-04-30 18:43:27', 'no'),
(46, 11, '2023-04-30 18:47:23', 'no'),
(47, 11, '2023-04-30 19:22:38', 'no'),
(48, 11, '2023-04-30 19:27:29', 'no'),
(49, 11, '2023-04-30 19:28:49', 'no'),
(50, 11, '2023-04-30 19:57:44', 'no'),
(51, 13, '2023-04-30 20:05:56', 'no'),
(52, 11, '2023-04-30 20:00:22', 'no'),
(53, 15, '2023-04-30 20:16:54', 'no'),
(54, 16, '2023-04-30 20:30:14', 'no'),
(55, 13, '2023-05-01 19:06:09', 'no'),
(56, 13, '2023-05-01 19:16:21', 'no'),
(57, 12, '2023-05-01 19:27:55', 'no'),
(58, 13, '2023-05-01 19:28:45', 'no'),
(59, 2, '2023-05-01 19:34:56', 'no'),
(60, 11, '2023-05-02 19:32:41', 'no'),
(61, 13, '2023-05-02 19:39:23', 'no'),
(62, 12, '2023-05-03 06:34:49', 'no'),
(63, 11, '2023-05-03 10:14:22', 'no'),
(64, 13, '2023-05-03 10:26:02', 'no'),
(65, 13, '2023-05-03 10:30:23', 'no'),
(66, 11, '2023-05-03 10:34:52', 'no'),
(67, 11, '2023-05-03 10:36:24', 'no'),
(68, 1, '2023-05-03 10:38:50', 'no'),
(69, 11, '2023-05-03 10:47:43', 'no'),
(70, 11, '2023-05-03 10:51:37', 'no'),
(71, 11, '2023-05-03 11:41:09', 'no'),
(72, 12, '2023-05-03 11:16:05', 'no'),
(73, 12, '2023-05-03 11:59:58', 'no'),
(74, 11, '2023-05-03 11:52:03', 'no'),
(75, 11, '2023-05-03 12:14:18', 'no'),
(76, 11, '2023-05-03 12:19:44', 'no'),
(77, 17, '2023-05-03 12:36:19', 'no'),
(78, 18, '2023-05-03 12:36:09', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `name`, `path`, `uploaded_at`, `username`) VALUES
(1, 'resumes', 'resumes/', '2023-05-03 08:52:54', 'yash_merchant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
