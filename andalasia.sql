-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2015 at 03:44 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andalasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `adm_id` int(8) NOT NULL,
  `adm_room` varchar(100) NOT NULL,
  `adm_room_rate` varchar(100) NOT NULL,
  `adm_hospital_plan` int(100) NOT NULL,
  `adm_admission_date` date NOT NULL,
  `adm_admission_time` time NOT NULL,
  `adm_discharge_date` date NOT NULL,
  `adm_discharge_time` time NOT NULL,
  `adm_discharge_note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_person`
--

CREATE TABLE IF NOT EXISTS `contact_person` (
  `cp_id` int(8) NOT NULL,
  `cp_name` varchar(200) NOT NULL,
  `cp_relationship` varchar(100) NOT NULL,
  `cp_address` varchar(100) NOT NULL,
  `cp_contact` varchar(100) NOT NULL,
  `cp_occupation/business` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
  `d_id` int(8) NOT NULL,
  `d_physician` varchar(100) NOT NULL,
  `d_provisional_diagnosis` varchar(100) NOT NULL,
  `d_final_diagnosis` varchar(100) NOT NULL,
  `d_surgical_procedure` varchar(100) NOT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(100) NOT NULL,
  `emp_fname` varchar(100) NOT NULL,
  `emp_lname` varchar(100) NOT NULL,
  `emp_bday` date NOT NULL,
  `emp_sex` varchar(100) NOT NULL,
  `emp_position` varchar(100) NOT NULL,
  `emp_image` varchar(300) NOT NULL,
  `emp_register` date NOT NULL,
  `emp_status` varchar(100) NOT NULL,
  `emp_schedule` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='=_= i dont know whats going on';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fname`, `emp_lname`, `emp_bday`, `emp_sex`, `emp_position`, `emp_image`, `emp_register`, `emp_status`, `emp_schedule`) VALUES
(3, 'Jasper', 'Buena', '1993-12-02', 'male', 'doctor', '', '0000-00-00', 'Available', ''),
(4, 'Mara', 'Licardo', '1993-02-04', 'male', 'doctor', '', '0000-00-00', 'Suspended', ''),
(5, 'Kamaru', 'Kasaragi', '2015-07-14', 'female', 'nurse', '', '0000-00-00', 'Suspended', '');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `lab_id` int(8) NOT NULL,
  `lab_specimen` varchar(100) NOT NULL,
  `lab_date` date NOT NULL,
  `lab_examination` varchar(100) NOT NULL,
  `lab_status` varchar(100) NOT NULL,
  `lab_inCharge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(8) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `p_contact` varchar(100) NOT NULL,
  `p_age` int(8) NOT NULL,
  `p_sex` varchar(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `p_nationality` varchar(100) NOT NULL,
  `p_religion` varchar(100) NOT NULL,
  `p_birthplace` varchar(100) NOT NULL,
  `p_birthdate` varchar(100) NOT NULL,
  `p_father_name` varchar(100) NOT NULL,
  `p_mother_name` varchar(100) NOT NULL,
  `w_id` int(8) NOT NULL,
  `cp_id` int(8) NOT NULL,
  `d_id` int(8) NOT NULL,
  `adm_id` int(8) NOT NULL,
  `lab_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `sched_id` int(8) NOT NULL,
  `sched_date` date NOT NULL,
  `sched_timein` time NOT NULL,
  `sched_timeout` time NOT NULL,
  `sched_assignment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sched_list`
--

CREATE TABLE IF NOT EXISTS `sched_list` (
  `emp_id` int(8) NOT NULL,
  `sched_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='These are the usernames for the system.';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `work_info`
--

CREATE TABLE IF NOT EXISTS `work_info` (
  `w_id` int(8) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_description` varchar(400) NOT NULL,
  `w_employer` varchar(100) NOT NULL,
  `w_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `contact_person`
--
ALTER TABLE `contact_person`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `work_info`
--
ALTER TABLE `work_info`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `adm_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_person`
--
ALTER TABLE `contact_person`
  MODIFY `cp_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `d_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `lab_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_info`
--
ALTER TABLE `work_info`
  MODIFY `w_id` int(8) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
