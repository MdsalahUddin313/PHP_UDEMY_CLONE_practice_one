-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 08:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `17.01.04.126`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `catagory_id` int(11) NOT NULL,
  `Catagory_name` varchar(50) NOT NULL,
  `sub_catagory_name` varchar(30) NOT NULL,
  `catagory_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`catagory_id`, `Catagory_name`, `sub_catagory_name`, `catagory_status`) VALUES
(1, 'Business', '', '1'),
(2, 'Fitness', '', '1'),
(3, 'It & Development', '', '1'),
(4, 'Design', '', '1'),
(5, 'Photography', '', '1'),
(6, 'Lifestyle', '', '1'),
(7, 'Health & Fitness', '', '1'),
(8, 'Music', '', '1'),
(9, 'Language', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `massage_sub` varchar(155) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `massage`, `massage_sub`, `status`) VALUES
(1, 'Faisal', 'faisal@gmail.com', '0125478', 'lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'aboltabol', 0),
(2, 'Faisal', 'faisal@gmail.com', '0125478', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it', 'aboltabol', 0),
(3, 'asds', 'asd@gmail.com', '01236', 'adad', 'wddfa', 0),
(4, 'asds', 'asd@gmail.com', '01236', 'adad', 'wddfa', 0),
(5, 'asds', 'asd@gmail.com', '01236', 'adad', 'wddfa', 0),
(6, 'asds', 'asd@gmail.com', '01236', 'adad', 'wddfa', 0),
(7, 'assd', 'asd@gmail.com', '021563', 'asdddddaww', 'asdddddaa', 0),
(8, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(9, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(10, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(11, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(12, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(13, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(14, 'Nabid', 'habibullah@gnmail.com', '01748755386', 'Vai amra ekta kotha  bolbo', 'holo massage', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 0),
(17, '', '', '', '', '', 0),
(18, '', '', '', '', '', 0),
(19, '', '', '', '', '', 0),
(20, '', '', '', '', '', 0),
(21, '', '', '', '', '', 0),
(22, '', '', '', '', '', 0),
(23, '', '', '', '', '', 0),
(24, '', '', '', '', '', 0),
(25, '', '', '', '', '', 0),
(26, '', '', '', '', '', 0),
(27, '', '', '', '', '', 0),
(28, '', '', '', '', '', 0),
(29, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `images` varchar(200) NOT NULL,
  `batch` varchar(200) NOT NULL,
  `our_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`, `title`, `images`, `batch`, `our_id`) VALUES
(1, 'Nabid', '2/purohitepara', 5000, 'CSE Sudent', '../images/our image/nabid.jpg', 'CSE 3-1', '160204046'),
(2, 'S.M Yakub', '22/wallstreet ,Dhaka', 1500, 'CSE Sudent', '../images/our image/yakub.png', 'CSE 3-1', '170104126');

-- --------------------------------------------------------

--
-- Table structure for table `postdb`
--

CREATE TABLE `postdb` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `thumb_image` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `mainpost` text NOT NULL,
  `dislikes` int(11) NOT NULL,
  `submission_time` varchar(15) NOT NULL,
  `submission_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_cart_details`
--

CREATE TABLE `product_cart_details` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `semititle` varchar(250) DEFAULT NULL,
  `images` varchar(10000) DEFAULT NULL,
  `catagory_id` varchar(100) NOT NULL,
  `catagory_name` varchar(100) NOT NULL,
  `rating_star` varchar(250) DEFAULT NULL,
  `creator_name` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  `language` varchar(200) DEFAULT NULL,
  `total_hours` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `Price` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_cart_details`
--

INSERT INTO `product_cart_details` (`id`, `title`, `semititle`, `images`, `catagory_id`, `catagory_name`, `rating_star`, `creator_name`, `last_update`, `language`, `total_hours`, `description`, `Price`) VALUES
(1, 'The Web Developer Bootcamp ', 'The only course you need to learn web development - HTML, CSS, JS, Node, and More! ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1-peB7TVlap1R6jdRRQYZ-wmSNjjLJQcqxxd8BlXaTA&usqp=CAU&ec=45702844', '3', 'It & Development', '4.6', 'Colt steel', '6th january 2020', 'English,Arabic,France', 35.5, 'Just updated to include Bootstrap 4.1.3!\r\n\r\nHi! Welcome to the Web Developer Bootcamp, the only course you need to learn web development. There are a lot of options for online developer training, but this course is without a doubt the most comprehensive and effective on the market.  Here\'s why:\r\n\r\n    This is the only online course taught by a professional bootcamp instructor.\r\n\r\n    94% of my in-person bootcamp students go on to get full-time developer jobs. Most of them are complete beginners when I start working with them.\r\n\r\n    The previous 2 bootcamp programs that I taught cost $14,000 and $21,000.  This course is just as comprehensive but with brand new content for a fraction of the price.\r\n\r\n    Everything I cover is up-to-date and relevant to today\'s developer industry. No PHP or other dated technologies. This course does not cut any corners.\r\n\r\n    This is the only complete beginner full-stack developer course that covers NodeJS.\r\n\r\n    We build 13+ projects, including a gigantic production application called YelpCamp. No other course walks you through the creation of such a substantial application.\r\n\r\n    The course is constantly updated with new content, projects, and modules.  Think of it as a subscription to a never-ending supply of developer training.\r\n\r\n    You get to meet my dog Rusty!\r\n\r\nWhen you\'re learning to program you often have to sacrifice learning the exciting and current technologies in favor of the \"beginner friendly\" classes.  With this course, you get the best of both worlds.  This is a course designed for the complete beginner, yet it covers some of the most exciting and relevant topics in the industry.\r\n\r\nThroughout the course we cover tons of tools and technologies including:\r\n\r\n    HTML5\r\n\r\n    CSS3\r\n\r\n    JavaScript\r\n\r\n    Bootstrap 4\r\n\r\n    SemanticUI\r\n\r\n    DOM Manipulation\r\n\r\n    jQuery\r\n\r\n    Unix(Command Line) Commands\r\n\r\n    NodeJS\r\n\r\n    NPM\r\n\r\n    ExpressJS\r\n\r\n    REST\r\n\r\n    MongoDB\r\n\r\n    Database Associations\r\n\r\n    Authentication\r\n\r\n    PassportJS\r\n\r\n    Authorization\r\n\r\nThis course is also unique in the way that it is structured and presented. Many online courses are just a long series of \"watch as I code\" videos.  This course is different. I\'ve incorporated everything I learned in my years of teaching to make this course not only more effective but more engaging. The course includes:\r\n\r\n    Lectures\r\n\r\n    Code-Alongs\r\n\r\n    Projects\r\n\r\n    Exercises\r\n\r\n    Research Assignments\r\n\r\n    Slides\r\n\r\n    Downloads\r\n\r\n    Readings\r\n\r\n    Too many pictures of my dog Rusty\r\n\r\nIf you have any questions, please don\'t hesitate to contact me.  I got into this industry because I love working with people and helping students learn.  Sign up today and see how fun, exciting, and rewarding web development can be!\r\nWho this course is for:\r\n\r\n    This course is for anyone who wants to learn about web development, regardless of previous experience\r\n    It\'s perfect for complete beginners with zero experience\r\n    It\'s also great for anyone who does have some experience in a few of the technologies(like HTML and CSS) but not all\r\n    If you want to take ONE COURSE to learn everything you need to know about web development, take this course', '135$'),
(2, 'The Complete Financial Analyst Course 2020 ', 'Excel, Accounting, Financial Statement Analysis, Business Analysis, Financial Math, PowerPoint: Everything is Included! ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSaCFOKTEJ_5wj8EfsX1OCAOcA9wgnkt5Ob90QP1YLiiQ&usqp=CAU&ec=45702844', '1', 'Bussiness', '4.2', 'John Bohr', '8th february 2020', 'English', 15.6, '**Updated for August 2020!**\r\n\r\n\"If you’re trying to prepare for an eventual career in finance, but are still looking to round out your knowledge of the subject, The Complete Financial Analyst Course might be a perfect fit for you.\", Business Insider\r\n\r\n\"A Financial Analyst Career is one of the top-paying entry-level jobs on the market.” \r\n\r\n\"Even in the toughest job markets, the best candidates find great positions.\", Forbes\r\n\r\nYou simply have to find a way to acquire practical skills that will give you an edge over the other candidates.\r\n\r\nBut how can you do that?\r\n\r\nYou haven’t had the proper training, and you have never seen how analysts in large firms do their work ...\r\n\r\nStop worrying, please! We are here to help.\r\n\r\nThe Complete Financial Analyst Course is the most comprehensive, dynamic, and practical course you will find online.\r\n\r\nIt covers several topics, which are fundamental for every aspiring Financial Analyst:\r\n\r\n    Microsoft Excel for Beginner and Intermediate Users: Become Proficient with the world’s #1 productivity software\r\n\r\n    Accounting, Financial Statements, and Financial Ratios: Making Sense of Debits and Credits, Profit and Loss statements, Balance Sheets, Liquidity, Solvency, Profitability, and Growth Financial Ratios\r\n\r\n    Finance Basics: Interest Rates, Financial Math Calculations, Loan Calculations, Time Value of Money, Present and Future Value of Cash Flows\r\n\r\n    Business Analysis: Understanding what drives a Business, Key Items to be Analyzed and their Meaning, the Importance of Industry Cycles, Important Drivers for the Business of Startup, Growth, Mature and Declining Companies, Important Drivers for an Industry\r\n\r\n    Capital Budgeting: Decide whether a company\'s project is feasible from a financial perspective and be able to compare between different investment opportunities\r\n\r\n    Microsoft PowerPoint for Beginner and Intermediate Users: The #1 tool for visual representation of your work, a necessary skill for every Financial Analyst\r\n\r\nAs you can see, this is a complete bundle that ensures you will receive the right training for each critical aspect.\r\n\r\nHere comes the fun part!\r\n\r\nWe have a challenge for you! After covering each major roadblock, you will be asked to solve a challenge. You will:\r\n\r\n    Calculate a company’s sales in Excel\r\n\r\n    Register its bookkeeping entries and produce useful financial statements + calculate financial ratios\r\n\r\n    Calculate a complete loan schedule for the company’s debt\r\n\r\n    Analyze the company’s business performance\r\n\r\n    Create a PowerPoint presentation based on the results\r\n\r\n    Receive personalized feedback\r\n\r\n    Receive a gift\r\n\r\n    Participate in our monthly Amazon Gift Card Lottery(!)\r\n\r\nSounds interesting, right?\r\n\r\nAt the end of the challenge, you will send us the work you’ve done, and we will reply with personalized feedback. This makes for an interactive student experience that optimizes what you will learn from the course.\r\n\r\nWhat makes this course different from the rest of the Finance courses out there?\r\n\r\n    High quality of production: HD video and animations (this isn’t a collection of boring lectures!)\r\n\r\n    Knowledgeable instructor (experience in companies like Pwc and Coca-Cola)\r\n\r\n    Complete training: We will cover all major topics and skills you need to become a top-class Financial Analyst\r\n\r\n    Extensive Case Studies: To help you reinforce everything you’ve learned\r\n\r\n    Course Challenge: Solve our Course Challenge and make this course an interactive experience\r\n\r\n    Excellent support: If you don’t understand a concept or you simply want to drop us a line, you’ll receive an answer within 1 business day\r\n\r\n    Dynamic: We don’t want to waste your time! The instructor keeps up a very good pace throughout the whole course\r\n\r\nWhy should you consider a career as a Financial Analyst?\r\n\r\n    Salary. A Financial Analyst job usually leads to a very well-paid career\r\n\r\n    Promotions. Financial Analysts acquire valuable technical skills, which makes them the leading candidates for senior roles within a corporation\r\n\r\n    Secure Future. There is high demand for Financial Analysts on the job market, and you won’t have to be concerned about finding a job\r\n\r\n    Growth. This isn’t a boring job. Every day, you will face different challenges that will test your existing skills\r\n\r\nPlease don’t forget that the course comes with Udemy’s 30-day unconditional, money-back-in-full guarantee. And why not give such a guarantee, when we are convinced the course will provide a ton of value for you?\r\n\r\nJust go ahead and subscribe to this course! If you don\'t acquire these skills now, you will miss an opportunity to separate yourself from the others. Don\'t risk your future success! Let\'s start learning together now!\r\nWho this course is for:\r\n\r\n    People who want a successful career in Finance\r\n    Anyone who wants to learn the practical skills of Financial analysis\r\n    People who are ambitious and want to learn faster than their peers', '159$');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `massage`, `phone`, `email`) VALUES
(3, 'Arafat', 'Hello sir ', 13333333, 'araf@mail.com'),
(4, 'Faisal', 'Hello sir i\'am Faisal', 155555, 'faisal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `t_pass` varchar(100) NOT NULL,
  `t_courses` varchar(100) NOT NULL,
  `t_phone` varchar(100) NOT NULL,
  `t_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `t_name`, `t_email`, `t_pass`, `t_courses`, `t_phone`, `t_address`) VALUES
(1, 'Anwar', 'anwar@gmail.com', '123456', 'Math,Physics', '012222', 'Dhaka,Banglades'),
(2, 'Kamrul Hasan', 'kamrul@gmail.com', '123456', 'Bangla', '012544', 'Khulna,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'nabid', 'nabidbhuia313@gmail.com', '87659a458df5dedd128ea3040aa81686', 'admin'),
(2, 'hello', 'hell@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'teacher'),
(23, 'Student', 'student@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'student'),
(24, 'rahul', 'rahul@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'teacher'),
(25, 'abul', 'abul@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'teacher'),
(26, 'rahim', 'abdurrahim@mail.com', '4428c6c474502e61151877825bb41961', 'student'),
(27, 'adfg', 'student@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'teacher'),
(28, 'Fahim', 'fahim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student'),
(29, 'Rubel', 'rubel@yahoo.com', '8fdabe873b1cc6e1b4a9069480aaaf1d', 'student'),
(30, 'Abdullah', 'abdullah@gmail.com', 'd93ec75bca4b7ef88df5a6c591654422', 'teacher'),
(31, 'teacher', 'teacher@gmail.com', '8d788385431273d11e8b43bb78f3aa41', 'teacher'),
(32, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postdb`
--
ALTER TABLE `postdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart_details`
--
ALTER TABLE `product_cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
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
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postdb`
--
ALTER TABLE `postdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
