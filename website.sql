-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2024 at 09:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `Exam-patient`
--

CREATE TABLE `Exam-patient` (
  `Exam_Name` varchar(100) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Exam-patient`
--

INSERT INTO `Exam-patient` (`Exam_Name`, `Description`, `Start_Date`, `End_Date`) VALUES
('HIV Antibody Test', ' This is a simple blood test that detects the presence of HIV antibodies, indicating HIV infection. Early diagnosis is crucial for timely initiation of treatment and preventing complications. ', '2024-01-14', '2024-01-14'),
('Ambulatory Blood Pressure Monitoring (ABPM)', 'This involves wearing a blood pressure monitor for 24 hours to get a more accurate picture of a patient\\\'s blood pressure throughout the day and night. It is helpful in diagnosing and managing hypertension. \\r\\n', '2024-01-14', '2024-01-14'),
('hypertension', 'used!', '2024-01-05', '2024-01-11'),
('hiv test', 'checking', '2024-01-05', '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `Exam_Patient`
--

CREATE TABLE `Exam_Patient` (
  `Patient_ID` int(50) NOT NULL,
  `Exam_name` varchar(10000) NOT NULL,
  `Discription` varchar(1000) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Nurse_message`
--

CREATE TABLE `Nurse_message` (
  `Status` varchar(50) NOT NULL,
  `Event_Number` varchar(100) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Nurse_message`
--

INSERT INTO `Nurse_message` (`Status`, `Event_Number`, `Phone_Number`, `Message`) VALUES
('admin', 'Meeting for helpfull!', '0789765432', 'everyone are invited! at 10 A.M on centrale de sante!'),
('public', 'walk starting heal ', '0796543214', 'to go!');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Patient_ID` varchar(100) NOT NULL,
  `Sector` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Phone_Number` int(30) NOT NULL,
  `Date_of_Birth` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`First_Name`, `Last_Name`, `Patient_ID`, `Sector`, `District`, `Phone_Number`, `Date_of_Birth`, `Gender`) VALUES
('NYANDWI', 'Alex\\\'s', '1175423144256254', 'kigali', 'gasabo', 789076554, '1791-05-18', 'male'),
('ISAAC', 'Izabayo', '12000809876635', 'kamabuye', 'kamonyi', 734567231, '2000-03-15', 'female'),
('INEZA', 'giselle', '1200370098765432', 'burera', 'burega', 790098765, '2003-10-18', 'female'),
('HIRWA', 'vincha', '120038009876543', 'Nyamirambo', 'Nyagenda', 734343543, '2003-10-14', 'male'),
('HAVUGI', '  Justin', '12003800987654345', 'muhondo', 'gakenke', 722698002, '2003-11-10', 'male'),
('BANITUZE', 'Winbal', '1200445678265433', 'kagogo', 'bugesera', 89234516, '2004-07-15', 'male'),
('NIRAGIRE ', 'Eric', '1200480098765246573', 'Kimisagara', 'Nyarugenge', 782348000, '2004-11-26', 'male'),
('Aline', 'mutoni', '12007034567876543', 'nyamabuye', 'Muhanga', 798765432, '2003-03-28', 'female'),
('SHIMWA MUBYEYI', 'FORTUNE', '1203700987654', 'muko', 'musanze', 789368709, '2003-07-17', 'female'),
('MUGISHA', 'Vincent  M', '12121454343', 'SHYUNGA', 'NyarugengA', 1213421, '2024-01-15', 'male'),
('kanimba', 'jean', '123645646738674665466', 'koko', 'gakuko', 987654, '2011-11-15', 'male'),
('Kajeguhora', 'floriane', '198480098765246576', 'Nabitekeri', 'Rusizi', 782348301, '1984-11-26', 'male'),
('KUBWIMANA', 'Jackline', '19908009876123', 'Muhondo', 'Rubavu', 780009876, '1990-02-18', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `Patient_message`
--

CREATE TABLE `Patient_message` (
  `Name` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Patient_message`
--

INSERT INTO `Patient_message` (`Name`, `phone`, `Message`) VALUES
('vincent', 789368709, 'szdxfcgbhjmkl,;'),
('Anaclet Gad', 789543323, 'Naje kwijuza , mubwirako ndibuze kubona messange imbwira itariki,umunsi n\\\' isaha nzagarukiraho kubonana namuganga. Ariko nanubu sindayibona , mwamfasha se?'),
('Silas', 784523876, 'Uzajye wivuza kugihe utararemba'),
('fortanee', 785423241, 'silas ari kumwira ngo najye gusura umurwayi nicyo nigikorwa kiza!!! kd ntabufasha buruta kujya gusura umuntu! do you agree with him?'),
('shema', 89123456, 'done!'),
('vincent', 480003456, 'Done! I am so sick!');

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `ID` varchar(16) NOT NULL,
  `Status` text NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Institution_email` varchar(50) NOT NULL,
  `Full_name_of_institution` varchar(100) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`ID`, `Status`, `Firstname`, `Lastname`, `Institution_email`, `Full_name_of_institution`, `Location`, `Username`, `Password`) VALUES
('', '', '', '', '', '', '', '', ''),
('123', 'admin', 'Habayimana ', 'Vincent ', 'vincenthabayimana@gmail.com', 'ABC', 'kigali', 'vincentpriest8@gmail.com', '12334'),
('1234', 'admin', 'SHIMWA MUBYEYI', 'FORTUNE', 'vincenthabayimana@gmail.com', 'ABCT', 'Gakenke city', 'shimwamubyeyifortune@gmail.com', '12345'),
('12345', 'public', 'silas', 'hakuzi', 'vincenthabayimana@gmail.com', 'ATUB', 'bugesera', 'hakusilas@gmail.com', 'Silas'),
('123453', 'user', 'haba', 'nina', 'vincenthabayimana@gmail.com', 'AQW', 'kago', 'vincentpriest83@gmail.com', '12QW'),
('12358', 'user', 'Aline', 'NIYONIZERA', 'vincenthabayimana@gmail.com', 'ABK', 'kigali', 'niyonizeraaline@gmail.com', '1234@'),
('126', 'user', 'NIRAGIRE ', 'Maginifiqwe', 'vincenthabayimana@gmail.com', 'ITEC', 'NDUBA', 'niragiremagini@gmail.com', '123mag'),
('12ADVC', 'user', 'HAGENIMANA', 'Joseph', 'vincenthabayimana@gmail.com', 'ADVC', 'mukura', 'hagenimana@gmail.com', '12334');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
