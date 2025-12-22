-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2025 at 06:05 AM
-- Server version: 8.0.44-0ubuntu0.22.04.1
-- PHP Version: 8.4.15

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
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int NOT NULL,
  `institute_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `director_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `nick_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_photo` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_biography` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
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
  `expert_as` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_linkdin_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_github_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_website_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
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

INSERT INTO `admin_directory` (`course_unique_id`, `registration_date`, `id`, `institute_name`, `director_name`, `nick_name`, `admin_email`, `admin_photo`, `admin_biography`, `email_otp`, `email_otp_verification`, `admin_whatsapp_number`, `whatsapp_otp`, `whatsapp_verification_status`, `admin_avatar`, `organisation_logo`, `organisation_address`, `organisation_contact`, `organisation_email`, `portal_uid`, `expert_as`, `admin_linkdin_url`, `admin_github_url`, `admin_website_url`, `facebook_url`, `twitter_url`, `instagram_url`, `youtube_url`, `organisation_foundation_year`, `about_us`, `our_mission`, `our_vision`, `principal_message`, `director_message`, `google_map_embeded`, `onboarding_date`, `total_tenure`, `expiry_date`, `subscription_amount`, `payment_method`, `dues_if_any`, `profile_completion_percent`, `system_generated_password`, `password_update_status`, `portal_credentials`, `profile_active_status`) VALUES
('ZIVJJC', '2025-11-23 01:20:22', 4, 'Edurock', 'Rahuljaiswallove', 'Chandanjaiswallove', 'edurock@gmail.com', '69466db4ec903_WhatsApp_Image_2025-12-20_at_3_04_30_PM.jpeg', 'esf', 'DDPN05', 'Pending', '7292818092', '236170', 'Pending', 'http://localhost/NeverRock/modules/avatar/avatar1.png', 'http://localhost/NeverRock/modules/avatar/avatar1.png', 'To be Updated', 'To be Updated', 'To be Updated', 'ORG1125EduZIW', 'Director', 'https://www.instagram.com/chandanjaiswallove', 'https://www.aidcom.in/', 'https://www.instagram.com/chandanjaiswallove', 'https://www.facebook.com/chandanjaiswallove', 'https://x.com/https://www.instagram.com/chandanjaiswallove', '', 'https://www.youtube.com/rahuljaiswallove', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', '81LMIFdN', 'Updated By User', '$2y$12$Hyi4FWP3gczUwA9TMrTQ9OK8VPWM7gz6xDSUBhMZndFyNHC9O79LK', 'Active'),
('', '2025-12-06 08:33:54', 5, 'Educationhub', 'Education Hub Admin', '', 'educationhub@gmail.com ', '', '', 'SB2XQQ', 'Pending', '9546214790', '931265', 'Pending', 'http://localhost/NeverRock/modules/avatar/avatar2.png', 'http://localhost/NeverRock/modules/avatar/avatar2.png', 'To be Updated', 'To be Updated', 'To be Updated', 'ORG1225EduV6O', '', '', '', '', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', '9ShGtvCH', 'To be Updated', '$2y$12$3Ti1DUgX6zHX4Fc1PnZ/vep299ml6cKRTX1IF982mycapwZLcR.76', 'Active'),
('', '2025-12-06 08:42:47', 6, 'Apex', 'Apex Admin', '', 'apex@gmail.com', '', '', 'CI4I8G', 'Pending', '8807212396', '769581', 'Pending', 'http://localhost/NeverRock/modules/avatar/avatar5.png', 'http://localhost/NeverRock/modules/avatar/avatar5.png', 'To be Updated', 'To be Updated', 'To be Updated', 'ORG1225ApeNJO', '', '', '', '', 'https://www.facebook.com/', 'https://x.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'To be Updated', 'C#XOacmQ', 'To be Updated', '$2y$12$ECYX/3.zN8geT/UfY11i1e/w07d6ZmINTbFGSy/rx8jf8LNqYtJdq', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `course_directory`
--

CREATE TABLE `course_directory` (
  `id` int NOT NULL,
  `course_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
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
  `course_preview_video` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_video_content` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `course_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_directory`
--

INSERT INTO `course_directory` (`id`, `course_name`, `course_unique_id`, `course_category`, `course_type`, `course_thumbnail`, `starting_date`, `ending_date`, `course_mode`, `enquiry_number`, `course_language`, `course_description`, `course_actual_cost`, `course_selling_cost`, `discount_applied`, `course_preview_video`, `course_video_content`, `course_creation_date`) VALUES
(34, 'बिहार बोर्ड 12वीं 2026', 'ZIVJJC', 'filter3', 'paid', '6922639a08cc2_690b24b975b08_68ef521beca62_courseDetails.jpg', '2025-11-29', '2026-01-17', 'online + offline', '+91 7292818092', 'hinglish', 'Write the Short Description about this course\r\nWrite the Short Description about this course\r\nWrite the Short Description about this course\r\n', '999', '99.90', '90', 'https://www.youtube.com/shorts/I1sPQMs0YGY', 'https://www.youtube.com/shorts/I1sPQMs0YGY', '2025-11-23 01:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `course_faqs`
--

CREATE TABLE `course_faqs` (
  `id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `faq_Question` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `faq_Answer` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_faqs`
--

INSERT INTO `course_faqs` (`id`, `course_unique_id`, `registration_date`, `faq_Question`, `faq_Answer`) VALUES
(48, 'ZIVJJC', '2025-12-03 12:03:57', 'Which animal is known as the “King of the Jungle”?', 'The Internet is a global network connecting millions of computers.'),
(49, 'ZIVJJC', '2025-12-05 10:39:13', 'What is a Variable?', 'A function is a block of reusable code that performs a specific task.'),
(50, 'ZIVJJC', '2025-12-06 04:41:51', 'What is a Database?', 'A database is a collection of organized data stored electronically.');

-- --------------------------------------------------------

--
-- Table structure for table `course_features`
--

CREATE TABLE `course_features` (
  `id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `feature_heading` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `feature_value` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_features`
--

INSERT INTO `course_features` (`id`, `course_unique_id`, `registration_date`, `feature_heading`, `feature_value`) VALUES
(57, 'ZIVJJC', '2025-12-03 11:05:20', '“Certificate ”', '“Yes”'),
(58, 'ZIVJJC', '2025-12-03 12:31:41', 'Identity Card', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `course_headings`
--

CREATE TABLE `course_headings` (
  `id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `dimpHeading` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `dimpDescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_headings`
--

INSERT INTO `course_headings` (`id`, `course_unique_id`, `dimpHeading`, `dimpDescription`, `registration_date`) VALUES
(29, 'ZIVJJC', 'Introduction to Web Development', 'This module covers the basics of creating websites using HTML, CSS, and JavaScript. Students learn how web pages work and how to build simple interactive layouts.', '2025-12-05 10:39:32'),
(30, 'ZIVJJC', 'Learn Basics of Programming', 'Understand the core concepts of programming such as variables, loops, functions, and logic building. Perfect for beginners to start coding confidently.', '2025-12-05 10:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `course_instructors`
--

CREATE TABLE `course_instructors` (
  `teacher_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `instructor_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_instructors`
--

INSERT INTO `course_instructors` (`teacher_unique_id`, `id`, `course_unique_id`, `registration_date`, `instructor_name`) VALUES
('INST_D8A76FC056', 10, 'ZIVJJC', '2025-12-06 03:46:09', 'Vivek Kujur'),
('INST_D8A76FC088', 11, 'ZIVJJC', '2025-12-09 03:08:23', 'Aidcom'),
('INST_D8A76FC094', 12, 'ZIVJJC', '2025-12-09 03:08:23', 'Robin Kujur'),
('INST_BA9C4FA76E', 13, 'ZIVJJC', '2025-12-09 04:08:04', 'Saanvi Jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `course_keys`
--

CREATE TABLE `course_keys` (
  `id` int NOT NULL,
  `topic_id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `dimpDescription` text COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_keys`
--

INSERT INTO `course_keys` (`id`, `topic_id`, `course_unique_id`, `dimpDescription`, `registration_date`) VALUES
(57, 42, '', 'SADFASDF ', '2025-12-05 10:38:33'),
(59, 42, '', 'ssssssssssssss', '2025-12-05 10:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `course_subjects`
--

CREATE TABLE `course_subjects` (
  `subject_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_subjects`
--

INSERT INTO `course_subjects` (`subject_unique_id`, `id`, `course_unique_id`, `subject_name`, `registration_date`) VALUES
('SUBJ_0BF34E3', 53, 'ZIVJJC', 'ENGLISH LECTURE', '2025-12-06 09:15:55'),
('SUBJ_6A01AA0', 57, 'ZIVJJC', 'HINDI', '2025-12-08 14:21:20'),
('SUBJ_6A01AA0', 58, 'ZIVJJC', 'SCIENCE', '2025-12-08 14:21:20'),
('SUBJ_374E086', 61, 'ZIVJJC', 'SANSKRIT', '2025-12-20 09:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `course_subjects_chapters`
--

CREATE TABLE `course_subjects_chapters` (
  `course_unique_id` int NOT NULL,
  `subject_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `chapter_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `chapter_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_topics`
--

CREATE TABLE `course_topics` (
  `id` int NOT NULL,
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `importantTopic` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_topics`
--

INSERT INTO `course_topics` (`id`, `course_unique_id`, `importantTopic`, `registration_date`) VALUES
(42, 'ZIVJJC', 'CCCCCCCCCCCC  ', '2025-12-05 10:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_directory`
--

CREATE TABLE `instructor_directory` (
  `teacher_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `instructor_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_phone` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_photo` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `expert_as` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `nick_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `biography_bio` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `github_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `website_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `linkdin_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_uid` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_SystemPassword` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `portal_credentials` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `password_update_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_active_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_directory`
--

INSERT INTO `instructor_directory` (`teacher_unique_id`, `id`, `registration_date`, `instructor_name`, `instructor_email`, `instructor_phone`, `instructor_photo`, `expert_as`, `nick_name`, `biography_bio`, `twitter_url`, `github_url`, `website_url`, `linkdin_url`, `instagram_url`, `youtube_url`, `facebook_url`, `instructor_uid`, `instructor_SystemPassword`, `portal_credentials`, `password_update_status`, `profile_active_status`) VALUES
('INST_D8A76FC094', 1, '2025-10-07 15:21:34', 'Robin Kujur', 'robin@gmail.com', '9262253821', '', '', '', '', '', '', '', '', '', '', '', 'INS1025ROBBST', 'GAV2Y89E', '$2y$12$.IoHsZIenypfkQZOK8eL4.r3QNyB6q04SQ5bn6HA8RobbXM72BrwO', 'Updated By User', 'Active'),
('INST_D8A76FC056', 2, '2025-10-30 04:22:56', 'Vivek Kujur', 'vivek@gmail.com', '9264453821', '', '', '', '', '', '', '', '', '', '', '', 'INS1025VIVX5U', 'ROD%H23Y', '$2y$12$/nR8iFe3BmbgdunNnUvWke5tj5JjFgFgnWG9MzPSSdVfc.mhcMtny', 'Updated By User', 'Active'),
('INST_D8A76FC066', 3, '2025-11-21 06:04:50', 'Developer Bettiah', 'developerbettiah@gmail.com', '7292818092', '6920266a63195_cjlcover.jpeg', 'Instructor Teacher', 'Sambhaw Kumar', 'We are here testing instructor profile updated testing .', 'https://www.facebook.com/chandanjaiswalloves', 'https://www.github.com/chandanjaiswallove', 'https://www.facebook.com/', 'https://www.instagram.com/chandanjaiswalloves', 'https://www.instagram.com/chandanjaiswalloves', 'https://www.aidcom.in/', 'https://www.facebook.com/', 'INS1125DEV5CM', 'V8GDHZA0', '$2y$12$XPYflSwhAJW2KFkvCF.gOu/Ac1x08o3ynxKqmaJ9kJ5B/KkiSYW1G', 'Updated By User', 'Active'),
('INST_D8A76FC088', 4, '2025-11-23 01:32:23', 'Aidcom', 'aidcom@gmail.com', '7291818092', '6923de93b8b34_thoasdp.jpg', 'Science Teacher', 'Michel Jackson', '', 'https://x.com/https://www.instagram.com/chandanjaiswallove', 'https://www.github.com/rahuljaiswallove', '', 'https://www.instagram.com/chandanjaiswalloves', 'https://www.instagram.com/chandanjaiswalloves', '', 'https://www.facebook.com/chandanjaiswallove', 'INS1125AIDIO3', 'AMKG%9T1', '$2y$12$fX/tHQ9DFim4/k/7H9As9e1rahfYgoMOtCr4DQv3AFuzkmQFEdX4a', 'Updated By User', 'Active'),
('INST_BA9C4FA76E', 5, '2025-12-06 08:44:33', 'Saanvi Jaiswal', 'saanvi@gmail.com', '7668212587', '', '', '', '', '', '', '', '', '', '', '', 'INS1225SAAJGQ', 'HZWTV9CR', '$2y$12$eqQ1t7VymHPRHUV8CwGSYOiwzMGuob2zKwqnrVKEzmKgY5Ok04lJq', 'To be Updated', 'Active'),
('INST_D8A76FC099', 6, '2025-12-06 09:03:18', 'Ram', 'ram@gmail.com', '7779935582', '', '', '', '', '', '', '', '', '', '', '', 'INS1225RAM6KY', 'FPHUQX0Y', '$2y$12$EIG4HfXn25F8ML3c8BgRquSxi1au4dxKu0PasKgliNTzoWUgQOPDa', 'To be Updated', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_directory`
--

CREATE TABLE `student_directory` (
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `student_fullname` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_phone` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `nick_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `biography_bio` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `linkdin_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `github_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_photo` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_password` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_username` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_state` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_directory`
--

INSERT INTO `student_directory` (`course_unique_id`, `registration_date`, `student_fullname`, `student_email`, `student_phone`, `nick_name`, `biography_bio`, `linkdin_url`, `github_url`, `instagram_url`, `student_photo`, `student_password`, `student_username`, `student_state`) VALUES
('', '2025-10-06 16:29:36', 'Sunny Kumar', 'sunny@gmail.com', '7292818092', '', '', '', '', '', '', '$2y$12$1ILUTrPFdxkvnK1oSak9bu30HlMcwza7lbfZsvnTuws7MG1cvf4Jy', 'EDUSUNWFM', 'Bihar'),
('', '2025-10-29 08:04:12', 'Shashi Jaiswal', 'shashi@gmail.com', '9471230096', '', '', '', '', '', '', '$2y$12$z8jyq61cVLN.pK6f2qHdSumtKn6CUVIWYe6SyiNljd4rK1fZt2.gy', 'EDUSHAMNA', 'Bihar'),
('', '2025-11-21 09:14:49', 'Chandan Jaiswal Love', 'loves@gmail.com', '9262275600', '', '', '', '', '', '', '$2y$12$ixApkcb41Z4w7JhVZrK7geUtPHz/peBoHfI4TH1YPkb01IUN4z2Qy', 'EDUCHANS1', 'Arunachal Pradesh'),
('', '2025-11-22 04:28:37', 'Developerbettiah', 'developerbettiah@gmail.com', '9821218761', '', '', '', '', '', '', '$2y$12$iGcFQ7g.SeoF0pbtTE9qy.skw8K45KS/aaW28qjkGnlmgkPe6JSq2', 'EDUDEVEO6', 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `subject_teacher_assign`
--

CREATE TABLE `subject_teacher_assign` (
  `course_unique_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `id` int NOT NULL,
  `subject_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `subject_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `assigned_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `teacher_unique_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `instructor_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_teacher_assign`
--

INSERT INTO `subject_teacher_assign` (`course_unique_id`, `id`, `subject_unique_id`, `subject_name`, `assigned_date`, `teacher_unique_id`, `instructor_name`) VALUES
('ZIVJJC', 227, '58', 'SCIENCE', '2025-12-17 12:28:37', 'INST_D8A76FC056', 'Vivek Kujur'),
('ZIVJJC', 228, '58', 'SCIENCE', '2025-12-17 12:28:37', 'INST_D8A76FC088', 'Aidcom'),
('ZIVJJC', 229, '58', 'SCIENCE', '2025-12-17 12:28:37', 'INST_D8A76FC094', 'Robin Kujur'),
('ZIVJJC', 230, '58', 'SCIENCE', '2025-12-17 12:28:37', 'INST_BA9C4FA76E', 'Saanvi Jaiswal'),
('ZIVJJC', 232, '59', 'HEALTH', '2025-12-17 12:29:07', 'INST_D8A76FC056', 'Vivek Kujur'),
('ZIVJJC', 233, '59', 'HEALTH', '2025-12-17 12:29:07', 'INST_D8A76FC088', 'Aidcom'),
('ZIVJJC', 234, '59', 'HEALTH', '2025-12-17 12:29:07', 'INST_D8A76FC094', 'Robin Kujur'),
('ZIVJJC', 235, '59', 'HEALTH', '2025-12-17 12:29:07', 'INST_BA9C4FA76E', 'Saanvi Jaiswal'),
('ZIVJJC', 266, '60', 'TEST ', '2025-12-17 12:52:20', 'INST_D8A76FC094', 'Robin Kujur'),
('ZIVJJC', 267, '60', 'TEST ', '2025-12-17 12:52:20', 'INST_BA9C4FA76E', 'Saanvi Jaiswal'),
('ZIVJJC', 270, '57', 'HINDI', '2025-12-18 08:34:21', 'INST_D8A76FC056', 'Vivek Kujur'),
('ZIVJJC', 271, '57', 'HINDI', '2025-12-18 08:34:21', 'INST_D8A76FC088', 'Aidcom'),
('ZIVJJC', 272, '57', 'HINDI', '2025-12-18 08:34:21', 'INST_BA9C4FA76E', 'Saanvi Jaiswal'),
('ZIVJJC', 273, '53', 'ENGLISH LECTURE', '2025-12-20 09:27:42', 'INST_D8A76FC056', 'Vivek Kujur'),
('ZIVJJC', 274, '53', 'ENGLISH LECTURE', '2025-12-20 09:27:42', 'INST_D8A76FC088', 'Aidcom'),
('ZIVJJC', 275, '53', 'ENGLISH LECTURE', '2025-12-20 09:27:42', 'INST_BA9C4FA76E', 'Saanvi Jaiswal'),
('ZIVJJC', 276, '61', 'SANSKRIT', '2025-12-20 09:27:50', 'INST_D8A76FC088', 'Aidcom'),
('ZIVJJC', 277, '61', 'SANSKRIT', '2025-12-20 09:27:50', 'INST_D8A76FC094', 'Robin Kujur'),
('ZIVJJC', 278, '61', 'SANSKRIT', '2025-12-20 09:27:50', 'INST_BA9C4FA76E', 'Saanvi Jaiswal');

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
-- Indexes for table `course_faqs`
--
ALTER TABLE `course_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_features`
--
ALTER TABLE `course_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_headings`
--
ALTER TABLE `course_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_instructors`
--
ALTER TABLE `course_instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_keys`
--
ALTER TABLE `course_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_subjects`
--
ALTER TABLE `course_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_subjects_chapters`
--
ALTER TABLE `course_subjects_chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_topics`
--
ALTER TABLE `course_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_directory`
--
ALTER TABLE `instructor_directory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_teacher_assign`
--
ALTER TABLE `subject_teacher_assign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_directory`
--
ALTER TABLE `admin_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_directory`
--
ALTER TABLE `course_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `course_faqs`
--
ALTER TABLE `course_faqs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `course_features`
--
ALTER TABLE `course_features`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `course_headings`
--
ALTER TABLE `course_headings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `course_instructors`
--
ALTER TABLE `course_instructors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course_keys`
--
ALTER TABLE `course_keys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `course_subjects`
--
ALTER TABLE `course_subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `course_subjects_chapters`
--
ALTER TABLE `course_subjects_chapters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_topics`
--
ALTER TABLE `course_topics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `instructor_directory`
--
ALTER TABLE `instructor_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject_teacher_assign`
--
ALTER TABLE `subject_teacher_assign`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
