-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2017 at 12:28 AM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

DROP DATABASE IF EXISTS coolmarket;
CREATE DATABASE coolmarket;
USE coolmarket;

CREATE TABLE `members` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `first_name` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `last_name` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `email` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `address` varchar(1000) COLLATE latin1_general_cs NOT NULL,
  `home_phone` varchar(16) COLLATE latin1_general_cs NOT NULL,
  `cell_phone` varchar(16) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `users`
--

INSERT INTO `members` (`id`, `password`, `first_name`, `last_name`, `email`, `address`, `home_phone`, `cell_phone`) 
VALUES
('Paderau', '', 'Paderau', 'Roberts', 'nachrichten@fickhub.at', '4 Tower Dr. Miami, FL 33125', '(578) 906-7443', '(342) 934-7723'),
('Ramon', '', 'Ramon', 'Carson', 'bmidd@verizon.net', '795 Amerige St. Ridgefield, CT 06877', '(873) 634-5536', '(524) 246-6935'),
('Steven', '', 'Steven', 'Ferguson', 'konit@mac.com', '4 North Piper St. Sylvania, OH 43560', '(626) 175-3161', '(130) 166-5444'),
('Kelly', '', 'Kelly', 'Taylor', 'tkrotchko@optonline.net', '52 Virginia Rd. Pelham, AL 35124', '(461) 450-9485', '(109) 472-9992'),
('Angie', '', 'Angie', 'Barton', 'daveewart@me.com', '568 Longbranch Lane Utica, NY 13501', '(841) 481-8047', '(419) 433-3929'),
('Gerardo', '', 'Gerardo', 'Snyder', 'sekiya@hotmail.com', '952 N. Constitution Street Saint Albans, NY 11416', '(522) 463-7067', '(575) 386-8934'),
('Andre', '', 'Andre', 'Pena', 'jimxugle@yahoo.com', '9828 Longbranch Dr. Neptune, NJ 07753', '(525) 463-1417', '(948) 914-1352'),
('Nathan', '', 'Nathan', 'Andrews', 'sequin@hotmail.com', '768 Griffin Dr. Longwood, FL 32779', '(301) 327-8892', '(731) 323-0243'),
('Chad', '', 'Chad', 'Reed', 'cumarana@aol.com', '33 Pennington Ave. Palm Harbor, FL 34683', '(651) 198-9169', '(920) 914-2622'),
('Theodore', '', 'Theodore', 'Roberts', 'retoh@hotmail.com', '33 Edgewater Street Everett, MA 02149', '(138) 922-0066', '(156) 742-2848'),
('Elbert', '', 'Elbert', 'Howell', 'kronvold@me.com', '167 Shore Street Sykesville, MD 21784', '(416) 448-0588', '(236) 920-2052'),
('Bernice', '', 'Bernice', 'Blake', 'sburke@optonline.net', '64 Pacific Street Niagara Falls, NY 14304', '(286) 741-5540', '(764) 272-6208'),
('Angelica', '', 'Angelica', 'Carpenter', 'jginspace@yahoo.ca', '8068 Linda St. Abingdon, MD 21009', '(745) 798-9116', '(196) 208-0481'),
('Lindsay', '', 'Lindsay', 'Bishop', 'gordonjcp@msn.com', '609 State Street Buffalo, NY 14215', '(852) 538-8584', '(831) 537-3127'),
('Nelson', '', 'Nelson', 'Hunt', 'ribet@att.net', '19 Windfall St. Grandville, MI 49418', '(631) 810-4177', '(660) 886-5308'),
('Rochelle', '', 'Rochelle', 'Caldwell', 'erynf@me.com', '4 Goldfield Rd. Honolulu, HI 96815', '(633) 417-1952', '(334) 137-7153'),
('Elena', '', 'Elena', 'Haynes', 'jbailie@verizon.net', '9917 Mayfair Road Greenwood, SC 29646', '(219) 228-8405', '(853) 674-2396'),
('Julio', '', 'Julio', 'Carr', 'aegreene@optonline.net', '154 Belmont Circle Banning, CA 92220', '(448) 126-9844', '(218) 256-6802'),
('Phil', '', 'Phil', 'Stanley', 'fraterk@msn.com', '7641 Mayfair Street Elizabethtown, PA 17022', '(604) 583-0116', '(171) 608-0660'),
('Reginald', '', 'Reginald', 'Riley', 'tokuhirom@outlook.com', '7181 East Birch Hill Street Nampa, ID 83651', '(564) 290-4146', '(353) 290-6997'),
('Everett', '', 'Everett', 'Kennedy', 'jnolan@comcast.net', '29 Pendergast Ave. Buckeye, AZ 85326', '(411) 643-1493', '(789) 344-2220'),
('Blanca', '', 'Blanca', 'Torres', 'horrocks@icloud.com', '15 Walnut Street Asheville, NC 28803', '(453) 940-8834', '(639) 367-4181');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
