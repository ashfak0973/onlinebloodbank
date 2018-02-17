-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 12:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `beadonor`
--

CREATE TABLE `beadonor` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `lastdonation` varchar(20) NOT NULL,
  `nextdonation` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beadonor`
--

INSERT INTO `beadonor` (`name`, `email`, `password`, `bloodgroup`, `lastdonation`, `nextdonation`, `contact`, `location`, `gender`) VALUES
('Zaki  Mahmud', 'zaki@gmail.com', '2662', 'B+', '01-01-2017', '1', '01685200115', 'Mirpur-1,golartek', 'male'),
('Md. Hasan Kabir Rafi', 'rafikabir11@gmail .com', '2662', 'A+', '01-01-2017', '1', '01685200115`', 'Mirpur,sheyalbari', 'male'),
('Moriam Afroz Muna', 'moriamafroz@gmail.com', '2662', 'O+', '01-06-2017', '1', '01625352410', 'Mirpur-13', 'male'),
('Md.  Asaduzzaman', 'jaman.nayon@gmail.com', '2662', 'B+', '01-06-2017', '1', '01625622161', 'Mirpur-2', 'male'),
('Md. Al-Amin Sharif', 'alamin.rishat@yahoo.com', '2662', 'A+', '01-01-2017', '1', '01967426602', 'Mirpur,rainkhola', 'male'),
('Atiya  Fairooz', 'atiyafairooz@yahoo.com', '2662', 'B+', '01-01-2017', '1', '01625352410', 'Mirpur-2', 'female'),
('Rukshana  Amin ruhi', 'rukshana.amin.m@gmail .com', '2662', 'O+', '01-07-2017', '1', '01673993522', 'Savar,dhaka', 'female'),
('Rajmin  Rothy', 'rajmin.rothy@yahoo .com', '2662', 'B+', '01-03-2017', '1', '01768735050', 'Mirpur-2', 'female'),
('Md. Showkat Hossain', 'showkat7566@gmail.com', '2662', 'O+', '01-05-2017', '1', '01744530182', 'Mirpur-2', 'male'),
('Md. Nahid Hasan Limon', 'nh.limon@yahoo.com', '2662', 'O+', '01-10-2017', '0', '01621316727', 'Mirpur,rainkhola', 'female'),
('Md. Masum Billah Khan', 'masum@gmail.com', '2662', 'O+', '01-06-2017', '1', '01681084020', 'Mirpur,sheyalbari', 'male'),
('Md.  Aktarujjama', 'akteruzzaman477@gmail .com', '2662', 'A-', '01-01-2017', '1', '01683526525', 'Jatrabari,dhaka', 'male'),
('Sabrina Hossain Heya', 'sabrina.heya@gmail .com', '2662', 'A+', '01-01-2017', '1', '01686777007', 'Mirpur,rainkhola', 'female'),
('Kamrul Hasan Himel', 'lastrain007@gmail.com', '2662', 'B+', '01-10-2017', '0', '01679720377', 'Mirpur-13', 'male'),
('Mithun Kumar Paul', 'mithunpaul20494@gmail .com', '2662', 'AB+', '01-08-2017', '1', '01753405034', 'Mirpur,kallanpur', 'male'),
('Avrojit Das', 'Avrojit.cse.bubt@gmail .com', '2662', 'O+', '01-07-2017', '1', '01672072386', 'Mirpur,shewrapara', 'male'),
('Md. Raihan Uddin Rana', 'raihan.cse.bubt@gmail .com', '262', 'B+', '01-08-2017', '1', '01672072386', 'Mirpur-2', 'male'),
('Sabrina Momtaz Puthy', 'sabrinamomtaz1995@gmail .com', '2662', 'B+', '01-01-2017', '1', '01850149914', 'Rupnagar,abashik', 'female'),
('Md. Abdullah Al Rafiul Hasan', 'alrafiulhasan@gmail.com', '2662', 'O+', '01-07-2017', '1', '01675557100', 'ECB,cantonment,mirpur', 'male'),
('Md. Muhtanik Mudir Pritom', 'Pritom5185@gmail .com', '2662', 'B+', '01-05-2017', '1', '01723717107', 'Mirpur,rainkhola', 'male'),
('Rosevelt Recheal Gomes', 'Ricky2194@yahoo .com', '2662', 'B+', '01-06-2017', '1', '01629601757', 'Mirpur,kafrul', 'male'),
('Darul Salam Jubair', 'dsjobair@yahoo .com', '2662', 'O+', '01-05-2017', '1', '01687929135', 'Mirpur-13', 'male'),
('Md. Rashed Bari', 'Rashed.cse.7@gmail .com', '2662', 'AB+', '01-06-2017', '1', '01753405034', 'Mirpur-2', 'male'),
('Rayhan Miah Limon', 'Limon7530.it@gmail .com', '2662', 'B+', '01-06-2017', '1', '01571749094', 'Mirpur,sheyalbari', 'male'),
('Md. Mahbub -Ul- Alam', 'imleon@outlook .com', '2662', 'O+', '01-06-2017', '1', '01611817863', 'Md.pur', 'male'),
('Rabzida  Sultana', 'Rabzidaria1994@gmail .com', '2662', 'O+', '01-01-2017', '1', '01622396780', 'Mirpur,rainkhola', 'female'),
('Saila  Tasmim', 'sailapipin@hotmail .com', '2662', 'O+', '01-07-2017', '1', '01625352410', 'Mirpur-13', 'female'),
('Shema rani das', 'Shemadas1994@gmail .com', '2662', 'AB+', '01-01-2017', '1', '01963928319', 'Mirpur,rainkhola', 'female'),
('Samia - Sultana - Pushpo', 'Pushporani67@gmail .com', '2662', 'O+', '01-07-2017', '1', '01673993522', 'Mirpur,shewrapara', 'female'),
('Mehnaz mostofa', 'Shanzidak@gmail .com', '2662', 'O+', '01-06-2017', '1', '01926279675', 'Rupnagar,abashik', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `donorrequest`
--

CREATE TABLE `donorrequest` (
  `email` varchar(50) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `nbags` varchar(5) NOT NULL,
  `demail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorrequest`
--

INSERT INTO `donorrequest` (`email`, `bloodgroup`, `contact`, `nbags`, `demail`) VALUES
('rose@gmail.com', 'AB+', '01629601757', '3', 'mehedi@yahoo.com'),
('alamin.rishat@yahoo.com', 'AB+', '01967426602', '1', 'rafikabir11@gmail .com'),
('showkat7566@gmail.com', 'B+', '01744530182', '3', 'imleon@outlook .com'),
('akteruzzaman477@gmail .com', 'O+', '01683526525', '2', 'Rabzidaria1994@gmail .com'),
('Shanzidak@gmail .com', 'O-', '01926279675', '1', 'Avrojit.cse.bubt@gmail .com'),
('Ricky2194@yahoo .com', 'AB+', '01629601757', '2', 'Pritom5185@gmail .com'),
('nh.limon@yahoo.com', 'B-', '01621316727', '1', 'jaman.nayon@gmail.com'),
('moriamafroz@gmail.com', 'B+', '01625352410', '3', 'lastrain007@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`, `bloodgroup`, `contact`, `location`, `gender`) VALUES
('Zaki  Mahmud', 'zaki@gmail.com', '2662', 'B+', '01685200115', 'Mirpur-1,golartek', 'male'),
('Md. Hasan Kabir Rafi', 'rafikabir11@gmail .com', '2662', 'A+', '01685200115', 'Mirpur,sheyalbari', 'male'),
('Moriam Afroz Muna', 'moriamafroz@gmail.com', '2662', 'O+', '01625352410', 'Mirpur-13', 'female'),
('Md.  Asaduzzaman', 'jaman.nayon@gmail.com', '2662', 'B+', '01625622161', 'Mirpur-2', 'male'),
('Md. Al-Amin Sharif', 'alamin.rishat@yahoo.com', '2662', 'A+', '01967426602', 'Mirpur,rainkhola', 'male'),
('Atiya  Fairooz', 'atiyafairooz@yahoo.com', '2662', 'B+', '01625352410', 'Mirpur-2', 'female'),
('Rukshana  Amin ruhi', 'rukshana.amin.m@gmail .com', '2662', 'O+', '01673993522', 'Savar,dhaka', 'female'),
('Rajmin  Rothy', 'Rajmin.rothy@yahoo .com', '2662', 'B+', '01768735050', 'Mirpur-2', 'female'),
('Md. Showkat Hossain', 'showkat7566@gmail.com', '2662', 'O+', '01744530182', 'Mirpur-2', 'male'),
('Md. Nahid Hasan Limon', 'nh.limon@yahoo.com', '2662', 'O+', '01621316727', 'Mirpur,rainkhola', 'male'),
('Md. Masum Billah Khan', 'masum@gmail.com', '2662', 'O+', '01681084020', 'Mirpur,sheyalbari', 'male'),
('Md.  Aktarujjama', 'akteruzzaman477@gmail .com', '2662', 'A-', '01683526525', 'Jatrabari,dhaka', 'male'),
('Md. Ashfakur Rahman', 'ashfak0973@gmail.com', '01675942182', 'B+', '01675942182', 'Mirpur,kazipara', 'male'),
('Sabrina Hossain Heya', 'sabrina.heya@gmail .com', '2662', 'A+', '01686777007', 'Mirpur,rainkhola', 'female'),
('Kamrul Hasan Himel', 'lastrain007@gmail.com', '2662', 'B+', '01679720377', 'Mirpur-13', 'male'),
('Mithun Kumar Paul', 'mithunpaul20494@gmail .com', '2662', 'AB+', '01753405034', 'Mirpur,kallanpur', 'male'),
('Md. Raihan Uddin Rana', 'raihan.cse.bubt@gmail .com', '2662', 'B+', '01672072386', 'Mirpur-2', 'male'),
('Sabrina Momtaz Puthy', 'sabrinamomtaz1995@gmail .com', '2662', 'B+', '01850149914', 'Rupnagar,abashik', 'female'),
('Md. Abdullah Al Rafiul Hasan', 'alrafiulhasan@gmail.com', '2662', 'O+', '01675557100', 'ECB,cantonment,mirpur', 'male'),
('Md. Muhtanik Mudir Pritom', 'Pritom5185@gmail .com', '2662', 'B+', '01723717107', 'Mirpur,rainkhola', 'male'),
('Rosevelt Recheal Gomes', 'Ricky2194@yahoo .com', '2662', 'B+', '01629601757', 'Mirpur,kafrul', 'male'),
('Darul Salam Jubair', 'dsjobair@yahoo .com', '2662', 'O+', '01687929135', 'Mirpur-13', 'male'),
('Md. Rashed Bari', 'Rashed.cse.7@gmail .com', '2662', 'AB+', '01753405034', 'Mirpur-2', 'male'),
('Rayhan Miah Limon', 'Limon7530.it@gmail .com', '2662', 'B+', '01571749094', 'Mirpur,sheyalbari', 'male'),
('Md. Mahbub -Ul- Alam', 'imleon@outlook .com', '2662', 'O+', '01611817863', 'Md.pur', 'male'),
('Rabzida  Sultana', 'Rabzidaria1994@gmail .com', '2662', 'O+', '01622396780', 'Mirpur,rainkhola', 'female'),
('Saila  Tasmim', 'sailapipin@hotmail .com', '2662', 'O+', '01625352410', 'Mirpur-13', 'female'),
('Shema rani das', 'Shemadas1994@gmail .com', '2662', 'AB+', '01963928319', 'Mirpur,rainkhola', 'female'),
('Samia - Sultana - Pushpo', 'Pushporani67@gmail .com', '2662', 'O+', '01673993522', 'Mirpur,shewrapara', 'female'),
('Mehnaz mostofa', 'Shanzidak@gmail .com', '2662', 'O+', '01926279675', 'Rupnagar,abashik', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `email` varchar(50) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `nbags` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`email`, `bloodgroup`, `contact`, `nbags`) VALUES
('alamin.rishat@yahoo.com', 'AB+', '01967426602', 1),
('showkat7566@gmail.com', 'B+', '01744530182', 3),
('akteruzzaman477@gmail .com', 'O+', '01683526525', 2),
('Shanzidak@gmail .com', 'O-', '01926279675', 1),
('Ricky2194@yahoo .com', 'AB+', '01629601757', 2),
('nh.limon@yahoo.com', 'B-', '01621316727', 1),
('Shemadas1994@gmail .com', 'AB+', '01963928319', 2),
('moriamafroz@gmail.com', 'B+', '01625352410', 3),
('rukshana.amin.m@gmail .com', 'O+', '01673993522', 1),
('saba@gmail.com', 'O+', '01786544321', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
