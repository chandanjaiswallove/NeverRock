-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2025 at 08:43 AM
-- Server version: 8.0.43-0ubuntu0.22.04.2
-- PHP Version: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neverRock`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_directory`
--

CREATE TABLE `admin_directory` (
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int NOT NULL,
  `institute_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `director_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_otp` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `email_otp_verification` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_whatsapp_number` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp_otp` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp_verification_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_avatar` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `organisation_logo` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `organisation_address` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `organisation_contact` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `organisation_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `portal_uid` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `organisation_foundation_year` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `about_us` text COLLATE utf8mb4_general_ci NOT NULL,
  `our_mission` text COLLATE utf8mb4_general_ci NOT NULL,
  `our_vision` text COLLATE utf8mb4_general_ci NOT NULL,
  `principal_message` text COLLATE utf8mb4_general_ci NOT NULL,
  `director_message` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `google_map_embeded` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `onboarding_date` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `total_tenure` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `expiry_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `subscription_amount` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `payment_method` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `dues_if_any` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_completion_percent` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `system_generated_password` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `password_update_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `portal_credentials` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profile_active_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_directory`
--

INSERT INTO `admin_directory` (`registration_date`, `id`, `institute_name`, `director_name`, `admin_email`, `email_otp`, `email_otp_verification`, `admin_whatsapp_number`, `whatsapp_otp`, `whatsapp_verification_status`, `admin_avatar`, `organisation_logo`, `organisation_address`, `organisation_contact`, `organisation_email`, `portal_uid`, `facebook_url`, `twitter_url`, `instagram_url`, `youtube_url`, `organisation_foundation_year`, `about_us`, `our_mission`, `our_vision`, `principal_message`, `director_message`, `google_map_embeded`, `onboarding_date`, `total_tenure`, `expiry_date`, `subscription_amount`, `payment_method`, `dues_if_any`, `profile_completion_percent`, `system_generated_password`, `password_update_status`, `portal_credentials`, `profile_active_status`) VALUES
('2025-10-30 04:18:16', 3, 'Education Hub', 'Rahul Jaiswal', 'rahul@gmail.com', 'MPNSIC', 'Pending', '9262275600', '763058', 'Pending', 'http://localhost/NeverRock/modules/avatar/avatar4.png', 'http://localhost/NeverRock/modules/avatar/avatar4.png', 'To be Updated', 'To be Updated', 'To be Updated', 'ORG1025EduNBC', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', '1VihDScA', 'Updated By User', '$2y$12$RnBx2yXLZWAKNpLgFM/pYuUk3fuy6BhuQu8cb3QgdXZT77A3LKs2e', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `course_directory`
--

CREATE TABLE `course_directory` (
  `id` int NOT NULL,
  `course_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_category` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `course_type` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_thumbnail` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `starting_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `ending_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `course_mode` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `enquiry_number` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_language` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `course_actual_cost` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `course_selling_cost` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `discount_applied` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `course_large_description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `course_preview_video` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_video_content` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_directory`
--

INSERT INTO `course_directory` (`id`, `course_name`, `course_category`, `course_type`, `course_thumbnail`, `starting_date`, `ending_date`, `course_mode`, `enquiry_number`, `course_language`, `course_description`, `course_actual_cost`, `course_selling_cost`, `discount_applied`, `course_large_description`, `course_preview_video`, `course_video_content`, `course_creation_date`) VALUES
(14, 'BIHAR BOARD 12TH 2026 ', 'filter5', 'paid', '68ece2b59a741_courseDetails.jpg', '2025-10-18', '2026-10-18', 'offline', '', 'hindi', 'To be Updated', '650', '585.00', '10', 'To be Updated', 'To be Updated', '', '2025-10-13 11:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_directory`
--

CREATE TABLE `instructor_directory` (
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `instructor_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_phone` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_uid` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_SystemPassword` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `portal_credentials` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `password_update_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_active_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_directory`
--

INSERT INTO `instructor_directory` (`registration_date`, `instructor_name`, `instructor_email`, `instructor_phone`, `instructor_uid`, `instructor_SystemPassword`, `portal_credentials`, `password_update_status`, `profile_active_status`) VALUES
('2025-10-07 15:21:34', 'Robin Kujur', 'robin@gmail.com', '9262253821', 'INS1025ROBBST', 'GAV2Y89E', '$2y$12$.IoHsZIenypfkQZOK8eL4.r3QNyB6q04SQ5bn6HA8RobbXM72BrwO', 'Updated By User', 'Active'),
('2025-10-30 04:22:56', 'Vivek Kujur', 'vivek@gmail.com', '9264453821', 'INS1025VIVX5U', 'ROD%H23Y', '$2y$12$/nR8iFe3BmbgdunNnUvWke5tj5JjFgFgnWG9MzPSSdVfc.mhcMtny', 'Updated By User', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_directory`
--

CREATE TABLE `student_directory` (
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `student_fullname` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_phone` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_password` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_username` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_state` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_directory`
--

INSERT INTO `student_directory` (`registration_date`, `student_fullname`, `student_email`, `student_phone`, `student_password`, `student_username`, `student_state`) VALUES
('2025-10-06 16:29:36', 'Sunny Kumar', 'sunny@gmail.com', '7292818092', '$2y$12$1ILUTrPFdxkvnK1oSak9bu30HlMcwza7lbfZsvnTuws7MG1cvf4Jy', 'EDUSUNWFM', 'Bihar'),
('2025-10-29 08:04:12', 'Shashi Jaiswal', 'shashi@gmail.com', '9471230096', '$2y$12$z8jyq61cVLN.pK6f2qHdSumtKn6CUVIWYe6SyiNljd4rK1fZt2.gy', 'EDUSHAMNA', 'Bihar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_directory`
--
ALTER TABLE `admin_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_directory`
--
ALTER TABLE `course_directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_directory`
--
ALTER TABLE `admin_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_directory`
--
ALTER TABLE `course_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
