-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 06:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vetgroom_services_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminUsername` varchar(128) NOT NULL,
  `adminpwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminUsername`, `adminpwd`) VALUES
(4, 'admin', '$2y$10$GjjC3BKhZkC94zriGofPbeo0mRP0beMsagsfixZIIAJ1qTxrbN0zi'),
(5, 'Admin1', '$2y$10$qZix/WEhCGJm5hm4zeA74emrZWNEGZGJ.iK0OgaPwyIGBZ3omse76');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_ID` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `cat_description` varchar(250) NOT NULL,
  `cat_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_ID`, `cat_name`, `cat_description`, `cat_img`) VALUES
(92, 'Grooming', 'Grooming refers to the things that people do to keep themselves clean and make their face, hair, and skin look nice.sss', 'grooom.jpg'),
(93, 'Veterinary', 'a doctor who gives medical treatment to animals', '831892915d16e521bac47d17153ede10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rate_feedbacks`
--

CREATE TABLE `rate_feedbacks` (
  `rate_feedback_ID` int(11) NOT NULL,
  `users_Id` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `comments` text NOT NULL,
  `vet_and_groom_ID` int(11) NOT NULL,
  `vet_and_groom_Name` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate_feedbacks`
--

INSERT INTO `rate_feedbacks` (`rate_feedback_ID`, `users_Id`, `ratingNumber`, `title`, `comments`, `vet_and_groom_ID`, `vet_and_groom_Name`, `created`, `modified`, `status`) VALUES
(135, 1, 5, '5 star ka sakin ', 'Ang ganda ng kanilang services', 36, 'AV Veterinary Clinic', '2022-09-06 12:35:48', '2022-09-06 12:35:48', 1),
(136, 4, 5, 'Ang ganda ng kanilang Services', 'Ang Lufet 5 Star to sakin', 41, 'DVM Animal Clinic', '2022-09-10 11:17:44', '2022-09-10 11:17:44', 1),
(137, 2, 5, 'Ang Lufet', 'Ang Ganda ng kanilang services', 42, 'Vets in Practice', '2022-09-13 03:47:53', '2022-09-13 03:47:53', 1),
(138, 1, 5, 'Ang Ganda', 'napaka ayos ng kanilang serbisyo', 45, 'Makati Dog & Cat Hospital', '2022-09-13 03:50:03', '2022-09-13 03:50:03', 1),
(139, 4, 5, '5 star to sakin', 'Ang ganda ng kanilang grooming services', 35, 'Mr. Paws Pet Care Grooming & Hotel', '2022-09-13 03:53:43', '2022-09-13 03:53:43', 1),
(140, 4, 4, 'Goods lang naman', 'ok lang naman ang kanilangg servies', 36, 'AV Veterinary Clinic', '2022-09-13 03:55:13', '2022-09-13 03:55:13', 1),
(141, 5, 5, '5 star ka sakin', 'goods ang kanilang services', 41, 'DVM Animal Clinic', '2022-09-13 05:16:40', '2022-09-13 05:16:40', 1),
(142, 6, 5, 'Ang lufet ng services nila', '5 star ka sakin', 42, 'Vets in Practice', '2022-09-21 04:38:01', '2022-09-21 04:38:01', 1),
(144, 7, 3, 'Goods lang naman', 'Hindi na relax si Paolitasau nabaliaan ang kanyang paa', 42, 'Vets in Practice', '2022-09-22 03:55:15', '2022-09-22 03:55:15', 1),
(145, 8, 3, 'Hindi gustohan ni Paolitasau', 'Ang panget ng services niyo', 36, 'AV Veterinary', '2022-09-24 03:29:14', '2022-09-24 03:29:14', 1),
(146, 8, 5, 'Ang ganda', '5 star to saking ang ganda ng kanilang services', 42, 'Vets in Practice', '2022-09-24 03:31:44', '2022-09-24 03:31:44', 1),
(147, 9, 5, 'Ang lufet', '5 star to sakin ang ganda ng kanilang services', 37, 'Frodo Station Pet Grooming, Hotel and Animal Clinic', '2022-09-25 03:03:18', '2022-09-25 03:03:18', 1),
(148, 10, 4, 'ang angas ng website', 'nakakatulong talaga sa mga pet lover ', 36, 'AV Veterinary', '2022-09-26 05:22:38', '2022-09-26 05:22:38', 1),
(149, 12, 5, 'ang ganda ', 'ang saya ng aso kung si kylec', 42, 'Vets in Practice', '2022-09-26 06:05:55', '2022-09-26 06:05:55', 1),
(151, 14, 5, '5 star to sakin', 'Ang ganda ng kanilang services', 36, 'AV Veterinary', '2022-09-26 14:23:37', '2022-09-26 14:23:37', 1),
(152, 15, 5, 'Ang ganda', 'Ang lufet ng kanilang services', 35, 'Mr. Paws Pet Care Grooming & Hotel', '2022-09-27 05:30:35', '2022-09-27 05:30:35', 1),
(154, 17, 4, '4 star ka lang sakin', 'ang saya ng aso kong si kyle', 41, 'DVM Animal Clinic', '2022-09-28 04:28:45', '2022-09-28 04:28:45', 1),
(155, 18, 5, 'Ang Ganda', 'Nice Groomingsdas', 36, 'AV Veterinary', '2022-09-28 10:03:39', '2022-09-28 10:03:39', 1),
(156, 19, 3, 'Goods lang', 'Pwede na!', 35, 'Ms. Paws Pet Care Grooming & Hotel', '2022-09-29 09:27:53', '2022-09-29 09:27:53', 1),
(157, 21, 4, '4 star', 'Amazing services', 37, 'Frodo Station Pet Grooming, Hotel and Animal Clinic', '2022-11-12 10:28:59', '2022-11-12 10:28:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersContactNumber` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `socialmedia` varchar(128) NOT NULL,
  `birthday` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersContactNumber`, `usersPwd`, `image`, `socialmedia`, `birthday`, `gender`, `address`) VALUES
(1, 'Tedra, Mark V.', 'marktedra29@gmail.com', 'qanna', '09087621204', '$2y$10$T.6eEArJnusWAzbrD1hhfuG5/WNDGTnO/BUmCCQr.p.gJn0elfWBq', '2x2.png', 'facebook.com/Qanna789', 'April 29, 2001', 'Male', '2312 Chico St. Centennial 2 Nagpayong Pinagbuhatan Pasig City'),
(2, 'Sausa, Bryan Paolo A.', 'sausabrayan@gmail.com', 'sausa', '09300256761', '$2y$10$B.6888xRakJ1NrFkNdOw2e5JyQHX5mGcD7jxQDX9cfNLiGGbA/P0O', '47685368_499970767189249_1620376523808702464_n.jpg', 'Sausa16', 'Noob. 16, 2000', 'Male', '5693 blk 1 lot 19 Libra St. Wonderland Ville HOA, Centennial 2, Nagpayong, Pinagbuhatan, Pasig City'),
(3, 'Serrano, Dan Eidref', 'serranodan06@gmail.com', 'serrano', '09158165077', '$2y$10$6WgvOXFByCjN7xbxoGLTG.5bsl7u78Umux2.9G5rxdsq7yQtxd45O', '161000913_192390112356057_2576508503270084424_n.jpg', 'igop.dan23', 'September 12, 2000', 'Male', '#125 mh del pilar st. purok camia Pinagbuhatan Pasig City'),
(4, 'Jenny Dugos', 'jennydugos@gmail.com', 'jenny', '09158165077', '$2y$10$7sSrZIFYl4ameF68pQ1NIu/haVQofFgTfRTanycC/57Kjjcc3TWUS', 'titajen.jpg', 'https://www.facebook.com/profile.php?id=100008606460456', 'April 15, 2000', 'Female', '45 E. Manuel L. Quezon st., wawa Taguig City'),
(5, 'Kyle Cruz', 'kyle.cruz1422@gmail.com', 'cruz', '09611681217', '$2y$10$tbxP/BinkoO/yzpuIty5uOb4eLvTIdSbTNEKF0DycmuuGfVQCp9NC', '292582325_755515819028498_631326946929262306_n.jpg', 'kyle.cruz', 'November 22,2000', 'Male', '109 C. Trinidad St. San Joaquin Pasig City'),
(6, 'Troy Alcain', 'troyalcain@gmail.com', 'alcain', '09123456789', '$2y$10$Uomhfu36jA.LeqmVMEjOquBRUxIh40mOx0HcaUxibGV5eTbGn2512', '4290042.jpg', 'Facebook/troyalcain.25', 'September 12, 2000', 'Male', '#123 MH DEL PILAR ST. PUROK CAMIA PINAGBUHATAN PASIG CITY'),
(7, 'Edmar Pogi', 'edmarpogi@gmail.com', 'edmarpogi123', '09563114253', '$2y$10$X3RKH89otl1OXU5cmwSwT.Wyx.8uiTy3liG5AmCOi2ka7k8Q.81OG', '831892915d16e521bac47d17153ede10.jpg', '', '', '', ''),
(8, 'Rv Sumalinog', 'rvsumalinog2929@gmail.com', 'rv123', '09123874622', '$2y$10$14Dfv2hQxCBjl.6Q74YAn.OlwkN3GRSo1CPex.xR.ilu4Ry1y9Yba', '161000913_192390112356057_2576508503270084424_n.jpg', 'facebook.com/rvsumalinog/', 'May 16, 2000', 'Male', '231222 Chico St. Centennial 2 Nagpayong Pinagbuhatan Pasig City'),
(9, 'Galido Sakuna', 'galido@gmail.com', 'galids', '09786738471', '$2y$10$6EJ889Eh8XM4VKjmBoypGObKozBZh44YAdR1TAksDJpNawQaLkMLi', '4290043.jpg', 'Facebook/ Galidspogi', 'May 16, 2001', 'Male', 'Chico st. 2312 Pinagbuhatan Pasig City'),
(10, 'kenneth barrieta', 'kennethbarrieta3@gmail.com', 'kenneth', '09090800725', '$2y$10$E31Kalh7bc0cFM8f2HT8KuIIZ7yxJACb6KzTzIi8QfdGHWPz2M0NW', '278057173_967245817288421_1889364916669404191_n.jpg', '', 'febuary 10 2005', 'male', '2312 Chico St. Centennial 2 Nagpayong Pinagbuhatan Pasig City'),
(12, 'Cyril Lanoy', 'lanoycyril@gmail.com', 'cyrill', '09102852144', '$2y$10$OHKK0ZSRPmMbqt6wFxDw5uzNZtRXYqB4Fmo9B.k68q2.3A8NSGk5S', '302282271_3439327806393001_4390853933877594163_n.jpg', 'https://www.facebook.com/cyril.lanoy.5', 'May 7, 2003', 'Male', '044 chico st. Centennial 2 Nagpayong Pinagbuhatan Pasig City'),
(13, 'Jonelle Torrecampo', 'JonelleT@gmail.com', 'jonelle', '09783427681', '$2y$10$DBUL4CvjeUvI/2ql.v06wuouD6m4ATLpOmbInsGvZj0jtnNlPPtd2', '161000913_192390112356057_2576508503270084424_n.jpg', 'facebook.com/jonelleT', 'December 24, 2000', 'Male', '#123 MH DEL PILAR ST. PUROK CAMIA PINAGBUHATAN PASIG CITY'),
(14, 'Sheila Mae Lanoy', 'sheilalanoy@gmail.com', 'sheila', '09516315248', '$2y$10$mlNRAF/W9uSg3dRfdI4/zejmn.xsDheJ9VP63i5ENpHamwOayrIUa', '307594220_817259786125740_5342199120374931449_n.jpg', 'https://www.facebook.com/1485exol', 'September 18, 2003', 'Female', '044 chico st. Centennial 2 Nagpayong Pinagbuhatan Pasig City'),
(15, 'kyle gwapo', 'kyleidologwapo@gmail.com', 'kyleidolo', '09384927481', '$2y$10$D5VUl5bIGgtDYOUSeASOduYByeAzZHYlN.yjwx39nabQ03ggI7mc2', '161000913_192390112356057_2576508503270084424_n.jpg', 'www.facebook.com/kyle.cruz', 'September 12, 2000', 'Male', '23122 Chico St. Centennial 2 Nagpayong Pinagbuhatan Pasig City'),
(16, 'Cyre Kevin Sacro', 'cysacro@gmail.com', 'sacro', '09397242684', '$2y$10$tGsc8HEeT/8Ec5lpcbhi/udRl9TAvgM4AGzp19JHTFb2XxJlcbxnu', 'sac.png', 'facebook.com/789', 'May 29, 1999', 'Male', 'Chico st. 2312 Pinagbuhatan Pasig City'),
(17, 'Sairem Gloria', 'sairemgloria@gmail.com', 'sai123', '09074837122', '$2y$10$64KuQULpMQlpUAzCAcHtqul6CIl/8WQh5XzA.S6ksl8ezfEysUv4C', '47685368_499970767189249_1620376523808702464_n.jpg', 'facebook.com/sai789', 'April 15, 2000', 'Male', '#123 MH DEL PILAR ST. PUROK CAMIA PINAGBUHATAN PASIG CITY'),
(18, 'Maria Jannest V. Tedra', 'jannesttedra09@yahoo.com', 'jannest', '09087621204', '$2y$10$Zmsb/3YzAgysf3M/cNRQ2etod37dpTShA09p/Xxo37KUVfWi/bjH.', '302282271_3439327806393001_4390853933877594163_n.jpg', 'facebook.com/jannesttedra09', 'May 15, 1999', 'Female', 'Chico st. 2312 Pinagbuhatan Pasig City'),
(19, 'Edmar Cruz', 'edmarcruz@gmail.com', 'edmarcruz', '09483912812', '$2y$10$QIexpTHN/C97zf9vAI0v/eVrMUp.hwRn.cejTAjza58i9Jn578e8O', '4290065.jpg', 'edmarcruz12', 'April 29, 2001', 'Male', 'Chico st. 2312 Pinagbuhatan Pasig City'),
(21, 'Kylie Bambam', 'kyliebam@gmail.com', 'kylie', '09483912812', '$2y$10$2gn1roKNHakjSqw5BizB1O6w5M4oEP.CuYST53qYx.HC/8eHT86s2', '297819298_557954372785890_4908743518758831680_n.jpg', 'Facebook/kylie09', 'April 29, 2001', 'Female', 'Chico st. 2312 Pinagbuhatan Pasig City');

-- --------------------------------------------------------

--
-- Table structure for table `vet_and_groom_services`
--

CREATE TABLE `vet_and_groom_services` (
  `vet_and_groom_ID` int(11) NOT NULL,
  `b_logo` varchar(128) NOT NULL,
  `b_name` varchar(128) NOT NULL,
  `b_description` varchar(500) NOT NULL,
  `b_owner` varchar(128) NOT NULL,
  `b_address` varchar(128) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  `b_phone` varchar(128) NOT NULL,
  `b_city` varchar(128) NOT NULL,
  `b_email` varchar(128) NOT NULL,
  `b_founded_year` varchar(20) NOT NULL,
  `b_operation_hr` varchar(128) NOT NULL,
  `cat_ID` int(11) NOT NULL,
  `b_service_provide` varchar(50) NOT NULL,
  `admin_Id` int(11) NOT NULL,
  `b_services_logo_1` varchar(100) NOT NULL,
  `b_services_name_1` varchar(50) NOT NULL,
  `b_services_description_1` varchar(500) NOT NULL,
  `b_services_logo_2` varchar(100) NOT NULL,
  `b_services_name_2` varchar(50) NOT NULL,
  `b_services_description_2` varchar(500) NOT NULL,
  `b_services_logo_3` varchar(100) NOT NULL,
  `b_services_name_3` varchar(50) NOT NULL,
  `b_services_description_3` varchar(500) NOT NULL,
  `b_services_logo_4` varchar(100) NOT NULL,
  `b_services_name_4` varchar(50) NOT NULL,
  `b_services_description_4` varchar(500) NOT NULL,
  `b_services_logo_5` varchar(100) NOT NULL,
  `b_services_name_5` varchar(50) NOT NULL,
  `b_services_description_5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vet_and_groom_services`
--

INSERT INTO `vet_and_groom_services` (`vet_and_groom_ID`, `b_logo`, `b_name`, `b_description`, `b_owner`, `b_address`, `Latitude`, `Longitude`, `b_phone`, `b_city`, `b_email`, `b_founded_year`, `b_operation_hr`, `cat_ID`, `b_service_provide`, `admin_Id`, `b_services_logo_1`, `b_services_name_1`, `b_services_description_1`, `b_services_logo_2`, `b_services_name_2`, `b_services_description_2`, `b_services_logo_3`, `b_services_name_3`, `b_services_description_3`, `b_services_logo_4`, `b_services_name_4`, `b_services_description_4`, `b_services_logo_5`, `b_services_name_5`, `b_services_description_5`) VALUES
(35, 'Mr.Paws.png', 'Ms. Paws Pet Care Grooming & Hotel', 'Mr. Paws offers self and full service pet grooming care; pet daycare and hotel; premium pet-care products and innovative pet-care solutions for your pets.', 'Manuel Cruz', '2F-RS-213 The Grove Retail Row, The Grove by Rockwell, E. Rodriguez Jr. Avenue, Pasig, Philippines, 1604', '14.586007', '121.080216', '(02) 7744 9894', 'Pasig City', 'mr.pawsph@gmail.com', '2016-04-29', 'Open 9:00am - 5:00pm', 93, 'Veterinary', 5, '255370597_187647883536764_9220929876806874973_n.jpg', 'Hair cut and Trim', 'Less than two inches cut from the ends of your hair and don\'t want any change in the current overall style or shape of your hair.\r\n', 'Mr.paws serv2.png', 'Nail Clipping and Filing', 'Filing your dog\'s nails will help you get closer to the nail\'s quick, and the closer you trim to the quick, the further this vein will recede making it possible for shorter nails. If your dog\'s nails are long, your dog will more likely tolerate dremeling if you clip them first, then dremel as a finishing tool.', 'Mr.paws serv3.png', 'Bath and Massage', 'Brushing removes excess hair from your dog\'s coat and helps distribute natural oils in your dog\'s fur and skin, keeping their coat healthy.', 'Mr.paws serv4.png', 'Dry and Brush Out', 'Brushing removes excess hair from your dog\'s coat and helps distribute natural oils in your dog\'s fur and skin, keeping their coat healthy.', 'Mr.paws serv5.png', 'Sanitary Trim or Shave', 'A sanitary trim (or sanitary clip) refers to trimming or shaving the coat so it\'s shorter in the areas where urine or feces may otherwise stain or get stuck in the coat. Areas such as around the anus, genitals and abdomen.'),
(36, 'AV Vet.png', 'AV Veterinary', 'Our veterinary clinic is a health and wellness hospital for dogs and cats and their owners. The clinic offers a range of on-site services from wellness exams, dentistry, surgery, vaccinations to nutritional and behavioural consultations.', 'Marco Dimaculangan', '451 Eulogio Amang Rodriguez Ave, Pasig, Metro Manila', '14.607750', '121.092184', '0905 268 0163', 'Pasig City', 'avveterinaryclinic@gmail.com', '2012-01-31', 'Open 9:00am - 5:00pm', 93, 'Veterinary', 5, 'AV Vet serv1.png', 'Medicine', 'The easiest way to give your dog a pill is to hide the pill in food. This usually works best if you hide it in a special treat such as a small amount of canned dog food, cooked sweet potato, or a soft dog treat that can be molded around it. ', 'AV Vet serv2.png', 'Vaccines', 'Vaccinations can help avoid costly treatments for diseases that can be prevented. Vaccinations prevent diseases that can be passed between animals and also from animals to people.', 'AV Vet serv3.png', 'Operation', 'When a dog experiences bloat and their stomach is filling up with gas and fluid, it can be a serious condition that requires immediate surgery. Other times, pets need surgery is if there is a mass that forms.', 'AV Vet serv4.png', 'Check-Up', 'Listening to your animal\'s lungs and heart. Checking your cat or dog\'s stance, gait, and weight. Examining your pet\'s eyes for signs of excessive tearing, discharge, redness, cloudiness, or eyelid issues.', 'AV Vet serv5.png', 'Dermatology', 'A veterinary dermatologist can perform allergy tests, skin biopsies, and other diagnostic tests to determine what is causing your pet\'s problems. A pet dermatologist will determine the underlying problems and work with you and your family veterinarian to control them.'),
(37, 'Frodo.png', 'Frodo Station Pet Grooming, Hotel and Animal Clinic', 'We are an affordable pet grooming and supplies store in Pasig. We also accept home service pet grooming in nearby cities and areas.', 'Frodo Guzman', '3051 Kaginhawaan St. Karangalan Village, Manggahan 1611 Pasig, Philippines', '14.603298', '121.099990', '0931 862 0151', 'Pasig City', 'rodostation.ph@gmail.com', '2018-08-30', 'Open 9:00am - 7:00pm', 92, 'Grooming', 5, 'Frodo serv1.png', 'Hair Cut', 'It\'s one of the most common types of grooming styles because it can be done on any dog breed with medium to long hair, and it\'s perfect for keeping fur from getting matted.', 'Frodo serv2.png', 'Nail Cutting', 'Nails that are too long are at risk of being torn off, such as if your dog\'s nail gets caught on a piece of carpeting or furniture. This can result in an injury that might require veterinary care if it\'s serious enough. Longer dog nails also make it harder for dogs to walk around comfortably.', 'Frodo serv3.png', 'Bath', 'Help remove visible dirt your dog earned through happy walks and romps through natural environments.', 'Frodo serv4.png', 'Brush Out', 'Slicker brushes have fine, short wires close together on a flat surface. They are used on medium-to-long-haired or curly-haired dogs to remove mats.', 'Frodo serv5.png', 'Shave', 'Any clipper work that takes the natural lay of the hair off of the body. Partial shaving of the throat, sanitary, ears and pads (with a #7 or shorter) are minimally damaging to the skin.'),
(38, 'PurpleG.png', 'The Purple Groom Pet Salon', 'The Purple Groom offers a no-frills complete grooming package for your pets. Our service quality is unmatched, yet our pricing is affordable. Our groomers are certified licensed dog handlers who can make the grooming experience comfortable for your pet. You can try our professional grooming service now.', 'Jane Mercedes', 'Greenwoods Executive Village Phase 9 Greenwoods E Ave, Cainta Rizal, 1900 Metro Manila', '14.561987', '121.099567', '0917 705 3097', 'Pasig City', 'thepurplegroom@gmail.com', '2016-05-15', 'Open 10:00am - 6:00pm', 92, 'Grooming', 5, 'PurpleG serv1.png', 'Fur Brushing', 'Regular brushing removes dead hair, distributes natural oils for a clean and healthy coat, stimulates the surface of the skin, gets rid of dead and dry skin, and helps you become familiar with your dog\'s body. You should brush your dog every couple of days no matter the length of his coat.', 'PurpleG serv2.png', 'Massage', 'A massage can increase your dog\'s circulation, decrease blood pressure, improve lymphatic fluid movement, strengthen his immune system, aid digestion, stimulate the kidneys and liver, and encourage deeper breathing', 'PurpleG serv3.png', 'Washing', 'Choose a shampoo specifically designed for dogs. Dogs have sensitive skin and their skin pH is different to the pH of human skin so human shampoo products should not be used on dogs. For dogs with healthy skin and coat, choose a mild and gentle hypoallergenic shampoo.', 'PurpleG serv4.png', 'Shaving', 'Trimming their long hair may make it more manageable. However, it is best to allow a professional groomer to perform the hair cutting, and never shave down to the skin or try to cut the hair yourself with scissors.', 'PurpleG serv5.png', 'Shaving', 'Many dog owners believe shaving is good for their pet, especially to cool off in summer, but even one shave could do irreparable damage to a dog\'s coat and make it more uncomfortable.'),
(39, 'arflogo.jpg', 'ARF ARF Love', 'It is not expensive to pamper and spoil your lovely babies. We made it AFFORDABLE for you!\r\n', 'Arman Bautista', '51 DR SIXTO ANTONIO AVENUE BRGY KAPASIGAN PASIG (NEAR MERALCO & BDO) 1600 Pasig, Philippines', '14.56380', '121.07649', '0917 612 7379', 'Pasig City', 'arfarflove@gmail.com', '2010-11-04', 'Open 8:00am - 8:00pm', 92, 'Grooming', 5, 'arf1.jpg', 'Hair trimming', 'Trimming their long hair may make it more manageable. However, it is best to allow a professional groomer to perform the hair cutting, and never shave down to the skin or try to cut the hair yourself with scissors.', 'arf2.jpg', 'Nail Cutting', 'Nails that are too long are at risk of being torn off, such as if your dog\'s nail gets caught on a piece of carpeting or furniture.', 'arf3.jpg', 'Brushing teeth', 'Brushing your pet\'s teeth is slightly different than brushing our own. You need to brush only the outside surface of their teeth (those facing their cheeks). For dogs, Lee recommends brushing in a downward direction (and for cats, a horizontal motion is preferred). Ideally, you\'ll brush their teeth every day.', 'arf4.jpg', 'Ear Cleaning', 'Dark brown or black—This type of earwax is commonly associated with yeast and/or bacterial ear infections. It\'s a good idea to consult with a veterinarian if earwax is this color. Brown—Light brown earwax is normal and expected. If the wax is accompanied by odor or inflammation, it can be a sign of infection.', 'arf5.jpg', 'Massaging', 'Dogs love massage therapy just as much as humans do. The benefits of massage therapy, which include decreased anxiety, relief from pain, and increased overall health, have been proven time and time again. Massaging your dog allows you another opportunity to bond as well as socialize him. '),
(40, 'barklogo.jpg', 'Bark & Go', 'Bark & Go is a new brand in dog wear fashion design. It was found in 2016 by two pet lovers. The idea of the brand and the need to change something in what was available in this niche came at the moment when we could not find what we need for our pets for them to look stylish, funny and cool.', 'Grace Lopez', '3rd Street, Landex Building, Countryside Avenue, Pasig City Pasig, Philippines', '', '', '0905 722 3660', 'Pasig City', 'barkngo.ph@gmail.com', '2016-11-11', 'Open 9:00am - 6:00pm', 92, 'Grooming', 4, 'bark1.jpeg', 'Fur Cutting', 'Fur will grow to a certain length and stop. Each of these different coat types required different grooming approaches, tools, and care.', 'bark2.jpg', 'Fur Brushing', 'Regular brushing removes dead hair, distributes natural oils for a clean and healthy coat, stimulates the surface of the skin, gets rid of dead and dry skin, and helps you become familiar with your dog\'s body.', 'bark3.jpg', 'Teeth Cleaning', 'Without this yearly cleaning, plaque develops on the teeth. This can lead to bad breath, gingivitis, periodontal disease and - in severe forms - tooth loss.', 'bark4.jpg', 'Nose Cleaning', 'It is a good idea to clean his nose first to remove any external causes of the dryness. Take a cool, wet cloth and gently wipe his nose. Wait a little bit to see if his nose naturally moistens back up.', 'bark5.jpg', 'Claw cutting', 'It is quiet and less likely to scare a dog than the buzz of the grinder. It is faster, so the process is quick. This may work best if you have a dog that doesn\'t sit still for long.'),
(41, 'dvm Animal Clinic logo.png', 'DVM Animal Clinic', 'DVM Animal Clinic provides services such as consultation, confinement, surgeries, and more.', 'Ferdienad Lopez', '7 P. Burgos Street, Santa Ana, Taguig City', '14.527934921767974', '121.07504397722893', '09499942204', 'Taguig City', 'dvmanimaclinic@gmail.com', '2004-11-12', 'Open Mon-Sat 9:00am - 6:00pm', 93, 'Veterinary', 5, 'veterinary-blood_transfusion.jpg', 'Blood Transfusion', 'The need for a blood transfusion is an emergency, such as severe bleeding or sudden destruction of red blood cells due to other disease. Transfusions may also be needed to treat anemia.', 'veterinary-neutering service.jpg', 'Neutering (Kapon) Services', 'Risk of testicular cancer is eliminated, and decreases incidence of prostate disease. Reduces number of unwanted cats/kittens/dogs/puppies. Decreases aggressive behavior, including dog bites. Helps dogs and cats live longer, healthier lives.', 'Veterinary-Surgery.jpg', 'Surgery', 'Diagnosing illnesses in a variety of different animals. Prescribing the appropriate treatment or operating on the animal if necessary.', 'veterinary-ultrasound.jpg', 'Ultrasound', 'To guide a small needle to diseased areas of tissue for biopsy. Abdominal ultrasound imaging is performed to evaluate the: kidneys. Liver.', 'Veterinary-XRay.jpg', 'X-ray', 'Used to diagnose disease in the chest, abdomen and musculoskeletal system. We also perform many special studies such as contrast studies of the gastrointestinal and urinary tract to diagnose obstructions.'),
(42, 'Vet in Practice logo.png', 'Vets in Practice', 'Description: To provide them the finest in health care, we have carefully selected a diverse staff of exceptionally trained veterinarians, veterinary nurses and technicians, each with special interests and continuing education in companion and exotic animal medicine and surgery.', 'Nielsen Donato', '1B Lower ground, one West Campus, McKinley West, Fort Bonifacio, Taguig City', '14.53638328861667', '121.04518666178788', '09167495989', 'Taguig City', 'fort@vetsinpractice.ph', '2003-12-20', 'Open Mon-Sun 9:00am - 6:00pm', 93, 'Veterinary', 5, 'Veterinary-Diagnostic-Medecine.jpg', 'Diagnostic Medicine', 'Our vets determine your pet’s medical condition using a variety of diagnostic tools we have available.', 'Veterinary-XRay2.jpg', 'X-Ray', 'X-rays work well for creating images of bones, foreign objects, and large body cavities. They are often used to help detect fractures, tumors, injuries, infections, and deformities.', 'veterinary-ultrasound2.jpg', 'Ultrasound', 'Ultrasound images are captured in real-time, they can show the structure and movement of the body\'s internal organs, as well as blood flowing through blood vessels.', 'Veterinary-Surgery2.jpg', 'Emergency Surgery', 'Vets In Practice has become a referral center for a wide range of surgical procedures. Our teams of veterinary surgeons perform routine elective procedures like spaying and neutering, as well as complicated soft-tissue and orthopedic surgeries, following the strictest surgical guidelines to minimize risks and complications and to produce positive outcomes.', 'Veterinary Therapy and Rehabilitation.jpg', 'Therapy and Rehabilitation', 'Physical rehabilitation for veterinary patients expedites return to normal function, pain relief, and encouragement of optimal health for patients suffering from orthopedic, neurologic, and chronic diseases'),
(43, 'Pendragon_logo.jpg', 'Pendragon Vet', 'Our approach to treatment is innovative. There are some tried and tested therapies used in humans but seldom, if ever, used in the practice of veterinary medicine.', 'Jeff Paredis', 'G/F Amaremca Bldg. 107-a Kalayaan Avenue Diliman, Quezon City', '', '', '285529868', 'Quezon City', 'admin@pendragonvet.com', '2004-06-17', 'Open Mon-Sun 9:30am - 6:30 pm', 93, 'Veterinary', 4, 'Veterinary-confine.jpg', 'Confinement', 'Keeping animals in confined, isolated environments and not allowing opportunities to express natural behaviors or to exercise normally can induce unwanted negative behaviors', 'Veterinary-XRay3.jpg', 'X-Ray', 'Perform many special studies such as contrast studies of the gastrointestinal and urinary tract to diagnose obstructions.', 'veterinary-ultrasound3.jpg', 'Ultrasound', 'It can detect pregnancy and the number of fetus’s in utero, ingested foreign bodies and cardiac function.', 'veterinary-blood_transfusion2.jpg', 'Emergency Blood Transfusion', 'Helps for the anemic pets and who is needs a ongoing blood transfusion for their pets.', 'veterinary-endoscopy.png', 'Endoscopy', 'To see the insides of the stomach and intestine to find some foreign objects inside of it.'),
(44, 'cainta animal clinic logo.jpg', 'Cainta Animal Clinic', 'We are affordable veterinary services in cainta. We sure of your pet safety in our veterinary.', 'Mary Lee', '772 A. Bonifacio AVE. Cainta, Rizal', '', '', '09566988490', 'Cainta Rizal', 'caintadogdistemperclinicandcatclinic@gmail.com', '2004-02-10', 'Open Mon - Sun 9:am - 5:00pm', 93, 'Veterinary', 4, 'Veterinary-confine2.jpg', 'Confinement', 'Any means used to restrict and/or seclude a companion animal. If companion animals are to be temporarily confined in some manner.', 'veterinary-ultrasound4.jpg', 'Ultrasound', 'Can help to detect the foreign object that is being ingested or detect tumor in the body.', 'Veterinary-XRay4.jpg', 'X-ray', 'To see the if there is a bone fracture, dislocated bone or other deformality to your pet.', 'veterinary-lab_diagnostic.jpg', 'Laboratory Diagnostic', 'Researching new and better ways to detect disease, and supporting the biomedical research community with sample analysis and interpretation of data across species.', 'veterinary-blood_transfusion3.jpg', 'Blood Transfusion', 'To treat symptoms caused by anemia by replacing red blood cells so that proper oxygenation of organs can occur'),
(45, 'mdch-logo.jpg', 'Makati Dog & Cat Hospital', 'Makati Cat and Dog Hospital is probably the longest continuing pet hospital in Asia, providing expert veterinary care for almost a century.', 'Dr. Sixto Carlos', '5426 General Luna St. cor. Algier St. Poblacion, Makati City', '', '', '09088967113', 'Makati City', 'makaticatanddoghospital.com', '1927-11-19', 'Mon-Sat 7:00am - 5:00pm', 93, 'Veterinary', 4, 'Veterinary-XRay5.jpg', 'X-Ray', 'To get a view of your pet\'s bones, tissues, and internal organs so that they can diagnose issues such as broken bones, bladder stones, swallowed foreign objects, and more.', 'veterinary-lab_diagnostic2.jpg', 'Laboratory Diagnostic', 'To collect a sample, run a specified test or experiment, and record your results for your pet.', 'Veterinary-Surgery3.jpg', 'Surgery', 'Veterinary surgeons maintain the health and welfare of a wide range of animals, from personal pets to livestock, zoo specimens, or even injured wild animals.', 'veterinary-ultrasound5.jpg', 'Ultrasound', 'To get a view of the inside of your pets body and detect all foreign objects inside of the body of your pet and also detect the fetus if pregnant.', 'veterinary-blood_transfusion4.jpg', 'Blood Transfusion', 'Used in acute situations such as acute hemolysis or blood loss, but can also be used for chronic conditions such as immune mediated hemolytic anemia.'),
(46, 'Philippine Animal Medical Center logo.jpg', 'Philippine Animal Medical Center', 'PAMC aims to complement the growing small animal veterinary industry in the areas of diagnostic imaging, critical care, telemedicine and training.', 'Paolo Manzano', '168 RV Mansion Bldg. E. Rodriguez jr. Ave, Quezon City', '', '', '09954055146', 'Quezon City', 'philmedc@gmail.com', '2010-06-15', 'Open Mon - Sun 9:00am - 4:00pm', 93, 'Veterinary', 4, 'veterinary-Vaccination.jpg', 'Vaccination and Deworming', 'Dogs should be vaccinated against rabies, canine parvovirus, canine distemper, hepatitis, lyme disease and kennel cough.', 'Veterinary-XRay6.jpg', 'X-Ray', 'To spot some tumors, pregnancy, and enlarged organs which may lead to a diagnosis such as heart disease or cancer.', 'veterinary-ultrasound6.jpg', 'Ultrasound', 'To see inside an animal’s body without the risks associated with other imaging modalities giving the what are the problems inside the body.', 'veterinary-Dental_prophylaxis.jpg', 'Dental Prophylaxis', 'To cleaning and polishing of a dog\'s teeth. It is important to realize that dental disease does not reach a particular level and remain there.', 'Delivery_Assistance.jpg', 'Delivery Assistance/ Cs', 'C-section, is major surgery performed to remove puppies from the uterus. This is most commonly performed as an emergency procedure when there is difficulty with natural birth.'),
(47, 'petlink logo.png', 'Petlink Veterinary Clinic', 'Most clinic protocols avoid admitting patients who are Canine Distemper Virus positive into their facility to prevent the risk of spreading onto other patients.', 'Andrew Delos Santos', '40 JYC Bldg. EDSA, Caloocan City', '', '', '09382508700', 'Caloocan City', 'ask@petlinkvet.com', '2014-10-21', 'Open Mon-Sat 9:00am - 7:30am', 93, 'Veterinary', 4, 'Veterinary-Surgery4.jpg', 'Veterinary Surgery', 'To operate the part the is being damage and prevent it for any more damage to the body.', 'Veterinary-XRay7.jpg', 'X-Ray', 'A diagnostic procedure which allows us to see inside your pet’s body to assess their bones and organs for any issues or diseases.', 'veterinary-Vaccination2.jpg', 'Vaccination and Deworming', 'Vaccinations provide your puppy or kitten the ability to build up immunity to the common diseases that can harm them. ', 'veterinary-ultrasound7.jpg', 'Ultrasound', 'To locate the of any foreign object inside of the body without the risk but ultrasound is primarily used for pregnancy diagnosis', 'Delivery_Assistance2.jpg', 'Delivery Assistance/ Cs', 'In most cases the dog instinctively knows what to do, but being prepared and knowing when to call a vet during labor & delivery is important for the health of both the mother and the puppies.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_ID`);

--
-- Indexes for table `rate_feedbacks`
--
ALTER TABLE `rate_feedbacks`
  ADD PRIMARY KEY (`rate_feedback_ID`),
  ADD KEY `usersId` (`users_Id`),
  ADD KEY `vet_and_groom_ID` (`vet_and_groom_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `vet_and_groom_services`
--
ALTER TABLE `vet_and_groom_services`
  ADD PRIMARY KEY (`vet_and_groom_ID`),
  ADD KEY `adminId` (`admin_Id`),
  ADD KEY `cat_ID` (`cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `rate_feedbacks`
--
ALTER TABLE `rate_feedbacks`
  MODIFY `rate_feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vet_and_groom_services`
--
ALTER TABLE `vet_and_groom_services`
  MODIFY `vet_and_groom_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rate_feedbacks`
--
ALTER TABLE `rate_feedbacks`
  ADD CONSTRAINT `rate_feedbacks_ibfk_1` FOREIGN KEY (`vet_and_groom_ID`) REFERENCES `vet_and_groom_services` (`vet_and_groom_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_feedbacks_ibfk_2` FOREIGN KEY (`users_Id`) REFERENCES `users` (`usersId`) ON DELETE CASCADE;

--
-- Constraints for table `vet_and_groom_services`
--
ALTER TABLE `vet_and_groom_services`
  ADD CONSTRAINT `ERD1` FOREIGN KEY (`admin_Id`) REFERENCES `admin` (`adminId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ERD2` FOREIGN KEY (`cat_ID`) REFERENCES `categories` (`cat_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
