-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2023 at 08:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL COMMENT 'admin id, auto-generated',
  `admin_name` varchar(1000) NOT NULL COMMENT 'admin name for login process',
  `admin_gmail` varchar(1000) NOT NULL COMMENT 'admin gmail required for login',
  `admin_pwd` varchar(1000) NOT NULL COMMENT 'password of admin to enter login stage'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_gmail`, `admin_pwd`) VALUES
(1, 'admin', 'admin200133@gmail.com', 'admin'),
(2, 'apple', 'apple22@gmail.com', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL COMMENT 'category id, auto generated',
  `cat_name` varchar(1000) NOT NULL COMMENT 'category name',
  `cat_description` varchar(10000) NOT NULL COMMENT 'category description',
  `cat_iconn` varchar(1000) NOT NULL COMMENT 'category icon for home page',
  `cat_image` varchar(1000) NOT NULL COMMENT 'first image for course page',
  `cat_imagetwo` varchar(1000) NOT NULL COMMENT 'cover photo of category in course page'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`, `cat_iconn`, `cat_image`, `cat_imagetwo`) VALUES
(1, 'Undergraduate', '🎓 Unlock Your Potential in Information Technology at Noble University by undergraduate program! 🌐Ready to step into a world of endless possibilities? Noble University invites you to join our prestigious undergraduate program in Information Technology. Gain the skills, knowledge, and experience needed to thrive in the rapidly evolving IT industry.Cutting-Edge Curriculum:Our comprehensive program covers everything from programming languages to cybersecurity, database management to artificial intelligence. Prepare to tackle the latest trends and technologies with confidence.', 'studying (1).png', 'students-learn-in-sound-booth.jpg', 'pexels-photo-5940841.jpeg'),
(2, 'Graduate(Bachelor)', '🎓Elevate Your IT Expertise with Noble University\'s Graduate Program 🌐Are you ready to take your IT career to new heights? Noble University is delighted to present our distinguished graduate program in Information Technology, tailored for aspiring professionals like you. Prepare to elevate your expertise, expand your network, and unlock limitless opportunities in the ever-evolving world of technology.🖥️ Advanced Specializations: Our graduate program offers a wide array of specialized tracks, allowing you to focus on areas that align with your career goals. Dive deep into subjects like artificial intelligence, cybersecurity,data science, software engineering, and more, and become a true expert in your chosen field.', 'graduation-hat.png', 'grad-cap-with-gold-tassle-and-red-ribbon.jpg', 'cole-keister-vEgVWRBr2VY-unsplash.jpg'),
(24, 'English', 'Noble University\'s English program offers comprehensive language instruction tailored for university students, equipping them with the skills to excel in academic settings. Our experienced faculty utilize proven teaching methods, fostering proficiency in reading, writing, listening, and speaking to support students\' academic success. With a focus on personalized attention and modern learning resources, our program ensures students gain the language abilities needed for effective communication and academic achievement.', 'eng.png', 's.jpg', 'O2-4.jpg'),
(25, 'Doctor of Philosophy(Ph.D)', 'This is an advanced research degree that focuses on the exploration and advancement of knowledge in various areas of IT. This program provides students with the opportunity to delve deeply into cutting-edge research topics, contribute to the field\'s theoretical and practical understanding, and make significant original contributions to the body of knowledge in IT. Throughout the program, students engage in rigorous research, work closely with faculty advisors and experts in the field, and produce a doctoral dissertation that showcases their expertise and demonstrates their ability to conduct independent research. A Ph.D. in IT Fields equips graduates with the skills and expertise to pursue academic careers, lead innovative research projects, and make valuable contributions to academia, industry, and society as a whole in the rapidly evolving field of information technology.', 'special.png', 'image_a40fea82-67e0-4e06-82b9-a1f12de7f608.jpg', 'Dr-David-Bottomley-Picture-credit-Jaimi-Chisholm-1.jpg'),
(28, 'Master ', 'Master\'s program in Information Technology (IT) is a graduate-level program that offers advanced education and specialization in various areas of IT. The program provides students with a deeper understanding of IT concepts, theories, and practical skills, preparing them for leadership roles in the IT industry. ', 'study.png', 'Masters-Degree-1-1024x683.jpg', 'Masters.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL COMMENT 'course id, auto generated',
  `cat_id` int(11) NOT NULL COMMENT 'primary key of category table connecting courses underlying in related category',
  `course_credit` int(11) NOT NULL COMMENT 'credit of course',
  `course_name` varchar(1000) NOT NULL COMMENT 'course name',
  `course_intakes` varchar(1000) NOT NULL COMMENT 'opening intake of this course',
  `course_fee` int(100) NOT NULL COMMENT 'course fee',
  `course_duration` varchar(225) NOT NULL COMMENT 'duration teach for course',
  `course_description` mediumtext NOT NULL COMMENT 'description of course',
  `jobs` varchar(1000) NOT NULL COMMENT 'jobs which can apply after this course',
  `course_image` varchar(10000) NOT NULL COMMENT 'image of course',
  `course_outline` longtext NOT NULL COMMENT 'outline of course'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `cat_id`, `course_credit`, `course_name`, `course_intakes`, `course_fee`, `course_duration`, `course_description`, `jobs`, `course_image`, `course_outline`) VALUES
(28, 1, 240, 'Data Structures and Algorithms', 'January', 30200, '2 years', 'That explores the fundamental concepts and techniques for organizing, storing, retrieving, and manipulating data efficiently, along with designing and analyzing algorithms to solve complex computational problems.', 'Software Engineer/Developer, Data Scientist, Algorithm Engineer', 'Data+Structures+and+Algorithms.png', 'Introduction to Data Structures, Basic Algorithms and Analysis, Advanced Data Structures, Graph Algorithms, String Algorithms'),
(29, 2, 120, 'Database Management System', 'September', 16000, '1 year', 'This provides a comprehensive understanding of fundamental database concepts, relational database design, SQL querying, transaction management, security, and performance tuning, enabling students to effectively design, manage, and optimize modern database systems', 'Database Administrator, Database Developer, Data Engineer, Business Intelligence Developer', '1_LJeVeJKqiZ6vlsHKgRdrkw.png', 'Introduction to Database Management Systems, Relational Database Design, SQL and Query Optimization, Database Security and Authorization'),
(30, 1, 240, 'Web Development', 'September', 32440, '2 years', 'It provides students with the knowledge and skills necessary to design, build, and deploy dynamic and interactive websites and web applications. Students will learn various web technologies, programming languages, and frameworks to create visually appealing and functional websites.', 'Front-End Developer, Web Designer, Web Application Developer, Web Project Manager, E-commerce Developer', '1_V-Jp13LvtVc2IiY2fp4qYw.jpg', 'Introduction to Web Development, Front-End Web Development, Back-End Web Development, Web Development Best Practices, '),
(31, 1, 240, 'Computer Networks', 'September', 34200, '2 years', 'This introduces students to the fundamental principles and concepts of computer networks. It covers the design, implementation, and management of computer networks, including protocols, network architectures, and network security.', 'Network Administrator, Network Engineer,Network Analyst, Network Operations Center (NOC) Technician', '221.jpg', 'Introduction to Computer Networks, Network Architecture and Protocols, Network Design and Implementation, Network Security,Network Management and Monitoring'),
(32, 2, 120, 'Cloud Computing', 'September', 14200, '1 year', 'This introduces students to the concepts, technologies, and practices of cloud computing. It covers the fundamentals of cloud computing, virtualization, cloud service models, deployment models, and the design and management of cloud-based systems.', 'Cloud Architect, Cloud Engineer, Cloud Security Specialist, Cloud Consultant, Cloud Administrator', 'Types_Of_Cloud_Computing_Service_Models.jpg', 'Virtualization Technologies, Cloud Infrastructure and Platforms, Cloud Application Development and Deployment, Cloud Security and Governance'),
(33, 2, 120, 'Mobile Application Development', 'September', 13900, '1 year', 'This provides students with the knowledge and skills to design, develop, and deploy mobile applications for various platforms, such as iOS and Android. The course covers mobile app development concepts, frameworks, and best practices.', 'Mobile App Developer, Mobile App Tester, Mobile App Project Manager, Mobile App Entrepreneur, Mobile App Marketing Specialist', 'mobile-app-development-methodologies.jpg', 'User Interface Design for Mobile Apps, Mobile App Development Fundamentals, Mobile App Development with Cross-Platform Frameworks, Mobile App Performance and Optimization'),
(34, 1, 240, 'Data Science and Analytics', 'January', 34600, '2 years', 'This provides students with a comprehensive understanding of data science principles, techniques, and tools used to extract insights and value from data. The course covers topics such as data exploration, statistical analysis, machine learning, and data visualization.', 'Data Scientist, Business Analyst, Data Visualization Specialist, Data Scientist in Research', '294-ds-vs-da_Page_1-2048x798-1.png', 'Data Exploration and Preprocessing, Statistical Analysis and Probability, Big Data Analytics, Natural Language Processing'),
(35, 2, 120, 'Cyber security', 'January', 18000, '1 year', 'This provides students with the knowledge and skills to protect computer systems, networks, and data from cyber threats and attacks. The course covers various aspects of cyber security, including risk assessment, secure network design, incident response, and security management.', 'Security Analyst, Incident Responder, Security Architect, Security Operations Center Analyst', 'CyberImage2.png', 'Information Security Fundamentals, Network Security, Cryptography and Data Protection, Web Application Security'),
(36, 2, 120, 'Machine Learning', 'September', 18200, '1 year', 'This introduces students to the principles and techniques of machine learning, focusing on algorithms and methodologies that enable computers to learn and make predictions or decisions based on data. The course covers various machine learning concepts, model training, evaluation, and application domains.', 'Machine Learning Engineer, Data Engineer, AI Consultant, Machine Learning Researcher', '960x0.jpg', 'Regression Models, Classification Models, Unsupervised Learning, Feature Engineering and Selection'),
(37, 1, 240, 'Internet of Things (IoT) and Sensor Networks', 'January', 35000, '2 years', 'This provides students with a comprehensive understanding of the IoT ecosystem, sensor technologies, and network protocols. The course covers the design, implementation, and management of IoT systems, enabling students to develop applications that leverage sensor data and network connectivity.', 'IoT Solutions Architect, IoT System Engineer, IoT Application Developer, IoT Consultant', 'scientech-6205-iot-application.jpg', 'IoT Architecture and Protocols, Sensor Data Collection and Processing, IoT Network Infrastructure, IoT Application Development, Emerging Trends in IoT'),
(38, 24, 0, 'IELTS Preparation Course', 'January, September', 600, '6 months', 'This is designed to equip students with the skills and strategies necessary to excel in the International English Language Testing System (IELTS) exam. This course focuses on all four sections of the test: Listening, Reading, Writing, and Speaking. Through a combination of targeted practice, feedback, and interactive exercises, students will develop their language proficiency and familiarize themselves with the exam format, question types, and time management techniques. By the end of the course, students will be well-prepared to achieve their desired scores in the IELTS exam and gain confidence in their English language abilities.', 'Just and entrance exam to get in university. ', 'image-7.jpg', 'Listening Skills Development, Reading Skills Enhancement, Writing Skills Improvement, Speaking Skills Development, Vocabulary and Grammar Enhancement'),
(40, 25, 120, 'Advanced Network Security', 'Januray', 300000, '3 years', 'This course at the doctoral level provides an in-depth exploration of advanced concepts, methodologies, and techniques in network security. Students delve into the intricacies of securing computer networks and systems, studying advanced topics such as cryptography, secure network design, intrusion detection and prevention systems, secure protocols, and emerging threats. Through research-oriented investigations, students gain expertise in designing and implementing robust security measures to protect against evolving cyber threats.', 'Security Architect, Security Operations Manager, Network Security Engineer, Security Compliance Manager, Information Security Officer', '775ef445dd14.jpeg', 'Advanced Cryptography, Secure Network Design, Intrusion Detection and Prevention Systems, Emerging Threats and Defense Techniques'),
(41, 25, 120, 'Advanced Software Engineering Principles', 'January', 31000, '3 years', 'This course at the doctoral level focuses on advanced concepts, methodologies, and practices in software engineering. It provides students with an in-depth understanding of the theories and principles that underpin the development of complex software systems. Students explore advanced topics such as software design patterns, architectural styles, requirements engineering, software evolution, and software project management. Through research-oriented investigations, students gain expertise in advancing the theory and practice of software engineering.', 'Research Scientist in Software Engineering, Software Engineering Consultant, Software Engineering Manager, Software Engineering Educator, Software Product Manager', 'The-keywords-of-the-software-engineering.png', 'Advanced Software Design Principles, Requirements Engineering and Management, Software Evolution and Maintenance, Software Project Management'),
(44, 28, 180, 'Advanced Data Analytics', 'January', 210000, '2 years', 'This course is designed to equip students with the advanced knowledge and skills required for effectively analyzing and interpreting complex datasets to extract valuable insights and support data-driven decision-making. This course goes beyond the foundational concepts of data analysis and dives into advanced techniques and methodologies used in various domains. Students will explore statistical modeling, machine learning algorithms, data visualization, and big data analytics. Through hands-on projects and real-world case studies, students will gain practical experience in working with large and diverse datasets to solve complex analytical problems.', 'Data Scientist, Data Analyst, Data Engineer, Market Research Analyst, Research Scientist', 'what-is-advanced-analytics.jpg', 'Exploratory Data Analysis, Machine Learning Algorithms, Big Data Analytics,Data Visualization and Storytelling, Ethical and Legal Considerations in Data Analytics'),
(47, 24, 0, 'Duolingo', 'January, September', 200, '3 months', 'Attending Duolingo courses is highly recommended for those seeking entry into Information Technology programs at the university level. Duolingo is an online language learning platform that offers a diverse range of language courses. Proficiency in multiple languages can be advantageous in the globalized IT industry, enabling effective communication with clients and colleagues from different linguistic backgrounds. Moreover, Duolingo\'s gamified approach to learning and flexible online platform make language acquisition enjoyable and accessible. By showcasing your commitment to self-improvement and continuous learning through Duolingo, you demonstrate your dedication to personal growth and readiness for the challenges of Information Technology studies.', 'Just an entry exam to entry of Noble University', '07w3TE0qtevWbXyZZOsB6gK-4s5.jpg', 'Duolingo\'s course outline offers a comprehensive and engaging language learning experience. It covers fundamental basics, vocabulary expansion, grammar and sentence structure, listening and speaking skills, reading and writing practice, cultural insights, and skill progression. The courses are organized into skill levels, and regular reinforcement and review exercises ensure knowledge retention. Duolingo\'s gamified approach keeps learners motivated and committed to their language learning journey. Overall, the course outline provides a well-rounded and enjoyable language learning experience.');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(11) NOT NULL COMMENT 'enroll id, auto generated',
  `student_id` int(11) NOT NULL COMMENT 'student id (primary key of student table where it saves the filled documents)',
  `SID` int(11) NOT NULL COMMENT 'primary key of student_information, it keeps student login id by knowing which student has been enroll ',
  `course_id` int(11) NOT NULL COMMENT 'primary key of course_id which course has been enrolled',
  `enroll_date` varchar(225) NOT NULL COMMENT 'enroll date automatically enter immediately after filling document'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enroll_id`, `student_id`, `SID`, `course_id`, `enroll_date`) VALUES
(64, 171, 51, 31, '2023-07-09 17:09:15'),
(65, 172, 51, 34, '2021-07-09 17:11:19'),
(66, 173, 52, 30, '2023-07-09 17:14:05'),
(67, 174, 52, 32, '2020-07-09 17:15:28'),
(68, 175, 53, 38, '2019-07-09 17:17:22'),
(69, 176, 54, 31, '2023-07-09 17:19:21'),
(70, 177, 49, 30, '2023-07-10 07:27:05'),
(72, 179, 52, 28, '2023-07-10 09:12:51'),
(83, 190, 59, 32, '2023-12-12 15:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL COMMENT 'id of student, auto generated',
  `SID` int(11) NOT NULL COMMENT 'primary key of student_information that carries id of login account of student',
  `student_address` varchar(10000) NOT NULL COMMENT 'address of student',
  `studnet_phonenumber` varchar(100) NOT NULL COMMENT 'student phone number',
  `bank_account` varchar(1000) NOT NULL COMMENT 'bank account number',
  `bank_name` varchar(100) NOT NULL COMMENT 'bank name',
  `documentation` varchar(100) NOT NULL COMMENT 'zip file of student document'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `SID`, `student_address`, `studnet_phonenumber`, `bank_account`, `bank_name`, `documentation`) VALUES
(171, 51, '90Q, York Street, London', '+44 20 1234 5678', '6662-1112-4521-2123', 'visa', 'EXXAMPLwwEZIP - Copy.zip'),
(172, 51, '49S, Owl Street, Yangon', '+959692213421', '9991-2222-8291-9931', 'americanexpress', 'EXXAMPLwwEZIP - Copy.zip'),
(173, 52, '97G, Elly Road, Mandalay', '+959182448192', '9923-1123-1263-2865', 'americanexpress', 'EXXAMPLEZIP.zip'),
(174, 52, '23 C, Jasmine Road, Mandalay', '+959439881276', '9998-1123-1212-7781', 'mastercard', 'EXXAMPLEZIP.zip'),
(175, 53, '78G, White Swan, Myitkyina ', '+959438991278', '9993-9995-7822-9821', 'mastercard', 'EXXAMPLEZIP.zip'),
(176, 54, '911K, St.Mary Street, Thailand', '+66 2 123 4567', '9281-1191-1192-1283', 'mastercard', 'EXXAMPLEZIP.zip'),
(177, 49, '89G,Umbera Street, Mandalay', '+959237881921', '9999-2222-1312-1292', 'mastercard', 'EXXAMPLwwEZIP - Copy.zip'),
(179, 52, '88V, Umberall,Yangon', '+98912212123123', '9999-1111-2221-1111', 'americanexpress', 'EXXAMPLwwEZIP - Copy.zip'),
(180, 55, '873 B, Yupar Road, Kalaw, Myanmar', '+959698772811', '9976-7547-7663-7839', 'mastercard', 'EXXAMPLEZIP.zip'),
(187, 52, '88V, Umberall,Yangon', '0911212121', '9991-2221-2231-3121', 'mastercard', 'EXXAMPLwwEZIP - Copy.zip'),
(188, 52, '78LL,Han Road', '091289385723', '5555-2222-1242-1123', 'mastercard', 'EXXAMPLwwEZIP - Copy.zip'),
(189, 52, 'sfa', '2342', '23423', 'mastercard', 'EXXAMPLwwEZIP - Copy.zip'),
(190, 59, 'Thanlyin', '093232323', '322-111-333-111', 'mastercard', 'example.zip');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `SID` int(11) NOT NULL COMMENT 'student login account id , auto-generated',
  `Sname` varchar(1000) NOT NULL COMMENT 'login student account name',
  `Spwd` varchar(1000) NOT NULL COMMENT 'student account password',
  `Semail` varchar(100) NOT NULL COMMENT 'email of student to login'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`SID`, `Sname`, `Spwd`, `Semail`) VALUES
(49, 'Han', '$2y$10$r5RL6G6isvNn92OJ0h8Mm.1g5yZfCM5bdvPtKATJ50oINuSCPEu7W', 'hanna2004@gmail.com'),
(50, 'Su Hlaing', '$2y$10$alPxv9JJrzouV665liSow.qd5n1/IBisU0ffOpXr8hUTgovKkp4jy', 'su123@gmail.com'),
(51, 'Ashely', '$2y$10$L2AMLVnBhjh75ep131LHV.nwsXaFZWAMLr2fM8nWDw6B43o5bVo8C', 'ashely778@gmail.com'),
(52, 'yo', '$2y$10$eicuC8SSgyhSenGjlv61uuWEB3LL4yxo.eGFaqGebyirJt8A3Z5PC', 'yo9000@gmail.com'),
(53, 'Hla', '$2y$10$CNACSgvykXtOrj7zgdK10eCG5oG6o8FpM2PyEg2Gz9JUDLY7wkWLe', 'hla1233@gmail.com'),
(54, 'tun', '$2y$10$cWczPS4TNGO9K5iRFqvT8ecLJgm4JPi4vuf/96B3fyUa6rpw93ZpS', 'tun2003@gmail.com'),
(55, 'Emearl', '$2y$10$Ks0ZltlOEVSkTxvGgfIaWeGYkNR0ntQYw3xJ4P5id4Orsbzrp..MW', 'emral7981@gmail.com'),
(56, 'apple', '$2y$10$kcjDELYRlq0iGXR6fWdenOgnCwLV1YHtEk1YQvYsXmKmD7nejSmSy', 'aaa@gmail.com'),
(57, 'a', '$2y$10$zx/m9FD4vi0zOBwLrlqBmu0dkWDs8c6vAWlxf5VrwtNIpXSu2mcyO', 'aaa@gmail.com'),
(58, 'aa', '$2y$10$AitvjpbJN9Gv9UUoOjWKXO2pQNIb2PUJsIqPqnwMzkwdpyLvDR8eS', 'aaa@gmail.com'),
(59, 'han', '$2y$10$LKqai4vzHJp0ZdhpVMJIkOgS8fSonRciEntlzq7rC7Af2ZCkMbzF.', 'hanna2004@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `SID` (`SID`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `sidd` (`SID`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'admin id, auto-generated', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'category id, auto generated', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'course id, auto generated', AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'enroll id, auto generated', AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of student, auto generated', AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'student login account id , auto-generated', AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `SID` FOREIGN KEY (`SID`) REFERENCES `student_information` (`SID`),
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `sidd` FOREIGN KEY (`SID`) REFERENCES `student_information` (`SID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
