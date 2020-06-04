-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 07:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apanajob`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_uid` varchar(15) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_image` mediumblob NOT NULL,
  `blog_desc` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_uid`, `blog_name`, `blog_image`, `blog_desc`, `created_at`, `updated_at`) VALUES
(1, '', 'Break up the text', 0x626c6f672d706f7374312e6a7067, '11 Best Practices for Including Images in Your Blog Posts\r\nHome » Blog » Content Marketing » 11 Best Practices for Including Images in Your Blog Posts\r\nblog post image guide\r\nYou’re a writer, not a photographer.\r\nSo why do you need to add photos to your blog posts when your words should be enough to entice your audience, engage visitors, and persuade people that your content is great?\r\nThe truth is, it’s not enough.\r\nEspecially when writing a blog post for the web.\r\nWhat you need to understand is that your audience is lazy.\r\nThey want information as fast as they can get it.\r\nThey don’t want to struggle to read and digest your content. They want to be able to understand it quickly and easily to ascertain whether it’s going to be of any value to them.\r\nJust because images are important doesn’t mean your words aren’t too.\r\nThat’s why you don’t have a blog post full of only images.\r\nImages are a supporting tool that can take your content from bland to exciting.\r\nSo it’s strange, then, that some content writers don’t understand the best practices for including images in their blog posts.\r\nIf that’s you, then keep reading.\r\nLet’s dive in.\r\n\r\n\r\n1. Break up the text\r\nIn the same way people use paragraphs to separate points and make it easier for the reader to digest, people use images to separate points and make the text easier to understand.\r\n\r\nEspecially for longer pieces. Remember I said readers were lazy?\r\n\r\nWhen they are presented with a wall of text, the first thing they’ll do is try and find another source.\r\n\r\nEven if your wall of text isn’t as long as other people’s content, if it looks too difficult to read, they’re not going to bother.\r\nEven though the actual content is the same, which of the two images below would you rather read?', '2020-05-27 16:02:13', '2020-05-27 16:02:13'),
(2, '', 'Use clear images', 0x626c6f672d706f7374322e706e67, '11 Best Practices for Including Images in Your Blog Posts\r\nHome » Blog » Content Marketing » 11 Best Practices for Including Images in Your Blog Posts\r\nblog post image guide\r\nYou’re a writer, not a photographer.\r\nSo why do you need to add photos to your blog posts when your words should be enough to entice your audience, engage visitors, and persuade people that your content is great?\r\nThe truth is, it’s not enough.\r\nEspecially when writing a blog post for the web.\r\nWhat you need to understand is that your audience is lazy.\r\nThey want information as fast as they can get it.\r\nThey don’t want to struggle to read and digest your content. They want to be able to understand it quickly and easily to ascertain whether it’s going to be of any value to them.\r\nJust because images are important doesn’t mean your words aren’t too.\r\nThat’s why you don’t have a blog post full of only images.\r\nImages are a supporting tool that can take your content from bland to exciting.\r\nSo it’s strange, then, that some content writers don’t understand the best practices for including images in their blog posts.\r\nIf that’s you, then keep reading.\r\n', '2020-05-29 08:27:39', '2020-05-29 08:27:39'),
(3, '', 'Use explainer images', 0x626c6f672d706f7374332e706e67, 'When you use imagery in your blog posts, think about the reason why.\r\nIdeally, your imagery should act as a further explainer of your main point.\r\nFor example, if you’re writing a blog post about Twitter, then get a photo of a tweet that explains the blog post. A photo of a person on a computer is not relevant and doesn’t add any value.\r\nAlways ask yourself: does this image add any value? If the answer is no, then you should omit it.\r\nIf you have complex ideas you need to explain, then utilize diagrams to get your points across.\r\nUse OmniGraffle to create diagrams and flowcharts, which can act as great ways to break up complex ideas into easily digestible visual aids.\r\n\r\nScreen Shot 2017 09 20 at 13.14.39\r\nUse imgflip to create pie charts like the one below. They’re simple to produce and make your blog post stand out.', '2020-05-29 08:29:02', '2020-05-29 08:29:02'),
(4, '', 'Utilize SEO tactics', 0x626c6f672d706f7374342e706e67, 'Your blog images are another great tool to add to your SEO arsenal. Make use of the alt tag.\r\nIf you’re using WordPress, then click the pencil icon to edit the image.Screen Shot 2017 09 15 at 15.09.59\r\nFill in the alt text box with your chosen alt text.\r\nScreen Shot 2017 09 15 at 15.10.19\r\nIf for any reason your blog images don’t show up, the browser will load the alt image instead.\r\nAnother benefit of using the alt text is it’s what Google uses to crawl the web for images.\r\nIf you have an image about content marketing and you title your alt-tag text, “content marketing,” when someone does a Google image search for “content marketing’” your image may show up.\r\nThey might then click on that image and be taken to your content.\r\nSo choose an effective alt image text, rather than image18y447.', '2020-05-29 08:32:45', '2020-05-29 08:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_uid` varchar(15) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` mediumblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_uid`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, '', 'Accounting', 0x6163636f756e742e706e67, '2020-05-29 07:26:35', '2020-05-29 07:26:35'),
(2, '', 'Development', 0x4465766c6f706d656e742e706e67, '2020-05-29 07:26:59', '2020-05-29 07:26:59'),
(3, '', 'Technology', 0x546563686e6f6c6f67792e706e67, '2020-05-29 07:27:29', '2020-05-29 07:27:29'),
(5, '', 'Medical', 0x6d65646963616c2e706e67, '2020-05-29 07:28:11', '2020-05-29 07:28:11'),
(6, '', 'Goverment', 0x676f7665726d656e742e706e67, '2020-05-29 07:28:34', '2020-05-29 07:28:34'),
(7, '', 'Media & News', 0x6d656469612d6e6577732e706e67, '2020-05-29 08:01:49', '2020-05-29 08:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_uid` varchar(15) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment_subject` varchar(255) NOT NULL,
  `comment_body` text NOT NULL,
  `comment_user_logo` blob DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_uid`, `blog_id`, `name`, `email`, `comment_subject`, `comment_body`, `comment_user_logo`, `created_at`, `updated_at`) VALUES
(1, '', 1, 'mira', 'mira@gmail.in', 'Blog Comment', 'Here is good text of your blog content', NULL, '2020-05-30 14:47:53', '2020-05-30 14:47:53'),
(2, '', 1, 'saurabh', 'saurabh@gmail.com', 'Blog post', 'thanks for post.', NULL, '2020-05-30 16:07:50', '2020-05-30 16:07:50'),
(3, '', 1, 'vipin', 'sona.vipin@gmail.com', 'Blog post area', 'Usually I never comment on blogs but your article is so convincing that I never stop myself to say something about it.', NULL, '2020-05-30 16:13:17', '2020-05-30 16:13:17'),
(4, '', 2, 'mira', 'mira@gmail.in', 'Top blog', 'here is good post comments', NULL, '2020-05-30 17:12:05', '2020-05-30 17:12:05'),
(5, '', 2, 'saurabh', 'saurabh@gmail.com', 'Blog post', '11 Best Practices for Including Images in Your Blog Posts Home » Blog » Content Marketing » 11 Best Practices for Including Images in Your Blog Posts blog post image guide You’re a writer, not a photographer. So why do you need to add photos to your blog posts when your words should be enough to entice your audience, engage visitors, and persuade people that your content is great? The truth is, it’s not enough. Especially when writing a blog post for the web. What you need to understand is that your audience is lazy.', NULL, '2020-05-30 17:12:46', '2020-05-30 17:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `user_id` int(11) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `high_qualifiaction` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL DEFAULT '',
  `uc_name` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL DEFAULT '',
  `passing_year` year(4) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `status` char(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`user_id`, `user_uid`, `high_qualifiaction`, `course_name`, `specialization`, `uc_name`, `course_type`, `passing_year`, `skills`, `status`, `created_at`, `updated_at`) VALUES
(1, '5eccba98b956e', 'Master/Post-graducation', 'CS', 'Others', 'Kuman University', 'Part Time', 2001, 'PHP,React', '1', '2020-05-26 06:44:00', '2020-05-26 06:44:00'),
(2, '5ed13458ddbaf', 'Master/Post-graducation', 'CS', 'Others', 'Kuman University', 'Part Time', 2001, 'Python,PHP,Java', '1', '2020-05-29 16:12:49', '2020-05-29 16:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_uid` varchar(15) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_desc` longtext NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_min_salary` varchar(255) NOT NULL,
  `company_max_salary` varchar(255) NOT NULL,
  `company_logo` mediumblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_uid`, `job_name`, `company_name`, `job_desc`, `job_type`, `job_category`, `company_address`, `company_min_salary`, `company_max_salary`, `company_logo`, `created_at`, `updated_at`) VALUES
(1, '', 'Technical Support', 'Quick company', 'QuickCompany search bar and MCA21 master data are the most commonly used platform for free company search. \r\nHere is opening many vacancies there apply here .', 'Full time', 'Technology', 'Noida', '10k', '50k', 0x7072752e706e67, '2020-05-28 04:46:18', '2020-05-29 10:35:42'),
(2, '', 'customer services', 'Kp capital', 'K.P. Energy Limited is an India-based company engaged in the business of windmill infrastructure development. The Company provides a range of solutions from concept till completion of the project life-cycle of a wind project.', 'Full time', 'Technical', 'Delhi , sector 32 pritampura', '25k', '35k', 0x6b70632e706e67, '2020-05-29 09:24:26', '2020-05-29 09:59:41'),
(3, '', 'Customer Services', 'TVS company', 'The company has an annual sales of 3 million units and an annual capacity of over 4 million vehicles. TVS Motor Company is also the 2nd largest exporter in India with exports to over 60 Countries.', 'Part time', 'Technology', 'Kanpur , Jarib chowki Up', '10k', '20k', 0x7476732e706e67, '2020-05-29 09:27:38', '2020-05-29 10:00:03'),
(4, '', 'Articulate', 'Articulate Company', 'Articulate is renowned for building the best e-learning authoring software around. Learn more about the company values, executive team, career opportunities.', 'WFH (correspondence)', 'Development', 'Greater noida , pari chowk ', '15k', '45k', 0x6172746963756c6174652e706e67, '2020-05-29 10:17:45', '2020-05-29 10:17:45'),
(5, '', 'Customer dealer', 'Best car company', 'Best Car Brands in India that includes ... Right now, ahead of the advent of BS VI emission norms, the company is the same state.', 'Full time', 'Accounting', 'Noida sector 62', '20k', '55k', 0x626573746361722e706e67, '2020-05-29 10:21:18', '2020-05-29 10:21:18'),
(6, '', 'Airtel customer services', 'Airtel company', 'Bharti Airtel Limited, also known as Airtel, is an Indian global telecommunications services company.', 'Part time', 'Technology', 'Gurugram', '12.5 k', '17.5k', 0x61697274656c2e706e67, '2020-05-29 10:23:58', '2020-05-29 10:23:58'),
(7, '', 'Burger King Delivery boy', 'Burger King company', ' The two initiated a corporate restructuring of the chain; the first step being to rename the company Burger King.', 'Part time', 'Delivery boy', 'Noida', '8k', '10k', 0x6275726765722d6b696e672e706e67, '2020-05-29 10:28:33', '2020-05-29 10:28:33'),
(8, '', 'Technical supplair', 'Godaddy Technical Support ', 'GoDaddy Inc. is a technology provider to small businesses, Web design professionals and individuals. The Company delivers cloud-based products and personalized customer care. ... It provides Website building, hosting and security tools to help customers construct and protect online presence.', 'Correspondence', 'Technical', 'Noida', '10k', '100k', 0x676f64616464792e706e67, '2020-05-29 10:31:54', '2020-05-29 10:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `profilecompletes`
--

CREATE TABLE `profilecompletes` (
  `user_id` int(11) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_desc` longtext NOT NULL,
  `work_location` text NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `emp_type` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `last_year` year(4) NOT NULL,
  `exp_year` year(4) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` char(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilecompletes`
--

INSERT INTO `profilecompletes` (`user_id`, `user_uid`, `user_desc`, `work_location`, `job_type`, `emp_type`, `skills`, `version`, `last_year`, `exp_year`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, '5eccba98b956e', 'Hello dear How are You ??', 'Hariyana,Unnao', 'Temporary/Contract', 'Part Time', 'php', '3.1', 2000, 2001, 'Male', '1', '2020-05-26 06:44:33', '2020-05-26 06:44:33'),
(2, '5ed13458ddbaf', '<p>ApanaJob.com with MCA in Computers currently in Noida with prudigital media exp on 4 year .</p>\r\n', 'Hariyana,Kanpur', 'Temporary/Contract', 'Part Time', 'php', '3.1', 2000, 2001, 'Male', '1', '2020-05-29 16:13:26', '2020-05-29 16:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `user_id` int(11) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `resume` blob NOT NULL,
  `status` char(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`user_id`, `user_uid`, `name`, `email`, `password`, `mobile`, `location`, `resume`, `status`, `created_at`, `updated_at`) VALUES
(1, '5eccba98b956e', 'saurabh', 'saurabh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '7838094755', 'Hariyana', 0x50687020436f757273652044756361742e706466, '1', '2020-05-26 06:43:36', '2020-05-26 06:43:36'),
(2, '5ed13458ddbaf', 'saurabh2411', 'saurabh2411@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9876543219', 'Delhi', 0x50687020436f757273652044756361742e706466, '1', '2020-05-29 16:12:08', '2020-05-29 16:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `profilecompletes`
--
ALTER TABLE `profilecompletes`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profilecompletes`
--
ALTER TABLE `profilecompletes`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
