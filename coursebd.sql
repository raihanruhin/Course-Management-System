-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2014 at 09:50 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coursebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(10) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `credit` decimal(4,0) NOT NULL,
  `hourweek` decimal(4,0) DEFAULT NULL,
  `mark` decimal(10,0) DEFAULT NULL,
  `programid` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursecode`, `coursename`, `credit`, `hourweek`, `mark`, `programid`, `semester`) VALUES
(2, 'CSE-103', 'Physics (Electricity, Magnetism and Optics) ', '3', '0', '0', 1, 1),
(4, 'CSE-101', 'Mathematics I (Calculus)', '3', '0', '0', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `detailid` int(11) NOT NULL AUTO_INCREMENT,
  `detail` varchar(5000) DEFAULT NULL,
  `coursecode` varchar(10) NOT NULL,
  PRIMARY KEY (`detailid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detailid`, `detail`, `coursecode`) VALUES
(5, '<p><strong>Introduction:</strong> Introduction to Distributed Systems. Advantages / Disadvantages over Centralized Systems. <br /><strong>Design issues:</strong> Transparency, Flexibility, Reliability, Performance, Scalability.<br /><strong>Communications:</strong> IPC &amp; Client-Server Computing, Remote Procedure Call, Distributed objects. Synchronization &amp; Concurrency Control: Clock Synchronization, Mutual Exclusion &amp; Election Algorithms, Deadlocks in Distributed Systems, Concurrency Control in Distributed Systems, Transaction Management.<br /><strong>Processes &amp; Processors:</strong> System Models &amp; Scheduling in Distributed Systems, Fault Tolerance. Distributed file systems: Distributed File System Design and Implementation, Naming, Distributed file systems case studies.</p>\r\n<p><strong>Security:</strong> Introduction to security, security channels, Access control.</p>\r\n<p><strong>Reference Books:</strong><br />1. A.S. Tanenbaum, and Maarten van Steen, Distributed Systems Principles and Paradigms,<br />Prentice Hall, 2002.<br />2. A.S. Tanenbaum, Distributed Operating Systems, Prentice Hall International Editions, 1995.<br />3. C. Brown, UNIX Distributed Programming, Prentice Hall, 1994.<br />4. G. Coulouris, J. Dollimore and T. Kindberg, Distributed Systems: Concepts and Design, 3rd<br />Edition, 2001.<br />5. Doreen L. Galli, Distributed Operating Systems: Concepts and Practice, Prentice Hall, 2000.</p>', 'CSE 601'),
(2, '<p><strong>Charge, Electric field &amp; Gauss&rsquo;s Law:</strong>Simple phenomena in electrostatics; Electrostatic induction and charge density; Coulomb&rsquo;s law; Electric field &amp; field strength; Point charge in an electric field; Dipole in an electric field; Electric flux; Gauss&rsquo;s law and some applications; Electric potential; Potential due to a point charge; Equipotential surfaces; Potential energy; Potential gradient; Capacitance and its calculation; Parallel plate capacitor withdielectric; Dielectric &amp; Gauss&rsquo;s law; Electric vectors; Energy stored in an electric field</p>\r\n<p><br /><strong>Electric current, Simple circuits and Electrical Measurements:</strong>Current and Ohm&rsquo;s law; E.M.F. and potential difference; Kirchhoff&rsquo;s laws; Whetstone bridge; Single loop &amp; multi loop circuits; Simple RC and RL circuits, Kirchhoff''s laws, The potentiometer; Moving coil galvanometer; Ammeter; Voltmeter; Multimeter; Wattmeter &amp; Energy meter; Measurements of Voltage, Current, Resistance, Inductance, Capacitance, Power and Energy.</p>\r\n<p><br /><strong>Magnetic Field &amp; Force on Current:</strong>Coulomb&rsquo;s law; Magnetic field and field strength; Magnetic force on current; Ampere&rsquo;s law; Directions of current and field; Maxwell&rsquo;s cork screw rule; Fleming&rsquo;s left hand rule; Magnetic field near long wire; Magnetic field for solenoid; Biot-savart law. Faraday&rsquo;s law of electromagnetic induction; Fleming&rsquo;s right hand rule; Lenz&rsquo;s law.</p>\r\n<p><br /><strong>Magnetic properties of matter:</strong>Poles and dipoles; Coulomb&rsquo;s law for magnets &amp; Gauss&rsquo;s theorem of magnetism; Dia-magnetism, Para-magnetism and Ferromagnetism; Magnetomotive force and field intensity; Concept of self and mutual inductance; Coefficient of magnetic coupling; Rise of current and decay of current in 4 inductive circuit; Energy in magnetic field; Inductance in series and parallel; <br />Hysteresis and eddy current losses.&nbsp;</p>\r\n<p><br /><strong>Optics:</strong> Refraction and total internal reflection; Group velocity and Phase velocity of light; Dispersion; Interference; Holography; Fresnel and Fraunhofer diffraction; Polarization of light wave. </p>\r\n<p>&nbsp;</p>\r\n<p><strong>Book:</strong></p>\r\n<ol>\r\n<li><strong>David Halliday, Robert Resnick, Physics Part-II,</strong> Wiley Eastern Limited, <br />1992.</li>\r\n<li><strong>D. K. Cheng, Field and Wave Electromagnetics,</strong> Pearson Education, 2001.</li>\r\n<li><strong>N. Vasudeva, Fundamentals of Magnetism and Electricity,</strong> S. Chand and <br />Company Limited, 1998.</li>\r\n<li><strong>K. K. Tewari, Electricity and Magnetism with Electronics,</strong> S. Chand and <br />Company Limited, 1995.</li>\r\n</ol>', 'CSE-103'),
(4, '<p><strong>Indefinite Integrals as Inverse of Derivatives:</strong> Techniques of integration; Reduction formula; Definite integral as limit of a sum; Interpretation as area; Fundamental theorem of integral calculus (for continuous functions); Determination of length and area of plain curves; Volume and surface area revolution.</p>\r\n<p><strong>Differential Equations:</strong> Degree and order of ordinary differential Equation, Formation of differential equations; Solution of linear, non-linear, homogeneous, non-homogeneous and exact ordinary differential equations by various methods; Solution of ordinary differential equations with constant co-efficient power series solutions about singular points; Solution of partial differential equations by the method of separation variables.</p>\r\n<p><br /><strong>Books:</strong><br />&nbsp;&nbsp;&nbsp;&nbsp; 1. <strong>B.C. Das</strong>, Integral calculus.<br />&nbsp;&nbsp;&nbsp;&nbsp; 2. <strong>Dr. Abdul Matin</strong>, Integral calculus.<br />&nbsp;&nbsp;&nbsp;&nbsp; 3. <strong>Howard and Anton</strong>, Calculus a New Horizon.<br />&nbsp;&nbsp;&nbsp;&nbsp; 4. <strong>B.O. Sharma</strong>, Differential Equations.<br />&nbsp;&nbsp;&nbsp;&nbsp; 5. <strong>M.D. Raisingha mia</strong>, Ordinary and Partial differential equations.</p>', 'CSE-101');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `programid` int(11) NOT NULL AUTO_INCREMENT,
  `programname` varchar(100) NOT NULL,
  PRIMARY KEY (`programid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`programid`, `programname`) VALUES
(1, 'B.Sc'),
(2, 'MS');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `sessionid` int(11) NOT NULL,
  `sessionname` int(11) NOT NULL,
  PRIMARY KEY (`sessionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sessionid`, `sessionname`) VALUES
(2007, 2007),
(2008, 2008),
(2009, 2009),
(2010, 2010),
(2011, 2011),
(2012, 2012),
(2013, 2013),
(2014, 2014),
(2015, 2015),
(2016, 2016),
(2017, 2017),
(2018, 2018),
(2019, 2019),
(2020, 2020),
(2021, 2021),
(2022, 2022),
(2023, 2023),
(2024, 2024),
(2025, 2025),
(2026, 2026),
(2027, 2027),
(2028, 2028),
(2029, 2029),
(2030, 2030),
(2031, 2031),
(2032, 2032),
(2033, 2033),
(2034, 2034),
(2035, 2035),
(2036, 2036),
(2037, 2037),
(2038, 2038),
(2039, 2039),
(2040, 2040),
(2041, 2041),
(2042, 2042),
(2043, 2043),
(2044, 2044),
(2045, 2045),
(2046, 2046),
(2047, 2047),
(2048, 2048),
(2049, 2049),
(2050, 2050);

-- --------------------------------------------------------

--
-- Table structure for table `sessioncourse`
--

CREATE TABLE IF NOT EXISTS `sessioncourse` (
  `coursecode` varchar(10) NOT NULL,
  `sessionid` int(11) NOT NULL,
  PRIMARY KEY (`coursecode`,`sessionid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessioncourse`
--

INSERT INTO `sessioncourse` (`coursecode`, `sessionid`) VALUES
('CSE-101', 2007),
('CSE-101', 2008),
('CSE-103', 2007),
('CSE-103', 2008);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `userloginid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`userloginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userloginid`, `username`, `password`, `email`) VALUES
(1, 'admin', '12345', 'mostafiz.cseju@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
