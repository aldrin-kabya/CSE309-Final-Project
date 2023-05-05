-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 10:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `researchflow_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(16) NOT NULL,
  `name_` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `subject_` varchar(256) NOT NULL,
  `message_` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `name_`, `email`, `subject_`, `message_`) VALUES
(1, 'Jonathon Reyes', 'jonathon@gmail.com', 'Looking for research purpose', 'Hello, I am looking to use your software for research purposes. Is there any way I can contact you?');

-- --------------------------------------------------------

--
-- Table structure for table `grants`
--

CREATE TABLE `grants` (
  `grant_id` int(16) NOT NULL,
  `project_title` varchar(256) NOT NULL,
  `principal_investigator` varchar(64) NOT NULL,
  `grant_number` varchar(16) NOT NULL,
  `project_summary` varchar(1024) NOT NULL,
  `project_description` varchar(1024) NOT NULL,
  `department` varchar(32) NOT NULL,
  `timeline` varchar(32) NOT NULL,
  `budget` varchar(32) NOT NULL,
  `application_date` varchar(32) NOT NULL,
  `funding_agency` varchar(128) NOT NULL,
  `supporting_documents` varchar(128) NOT NULL,
  `project_status` varchar(64) NOT NULL,
  `project_impact` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grants`
--

INSERT INTO `grants` (`grant_id`, `project_title`, `principal_investigator`, `grant_number`, `project_summary`, `project_description`, `department`, `timeline`, `budget`, `application_date`, `funding_agency`, `supporting_documents`, `project_status`, `project_impact`) VALUES
(5, 'Cloud Computing for Data Analytics', 'John Smith', '#65944', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '6 months ', '50,000', '5 May, 2023', 'Microsoft Research', '', 'Pending', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(6, 'Machine Learning for Computer Vision', 'Sarah Lee', '#91403', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '8 months ', '55,000', '1 May, 2023', 'Google Research', '', 'Awarded', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(8, 'Secure Distributed Systems', 'David Kim', '#24077', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '7 months', '65,000', '19 April, 2023', 'Google Research', '', 'Awarded', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(9, 'Software Defined Networking', 'Michael Wong', '#26412', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '9 months', '60,000', '21 March, 2023', 'Microsoft Research', '', 'Rejected', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(10, 'Big Data Analytics for Health', 'Rachel Chen', '#36251', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '6 months ', '40,000', '17 March, 2023', 'Microsoft Research', '', 'Awarded', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(11, 'Blockchain for IoT Security', 'Alice Park', '#34772', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '7 months', '60,000', '24 February, 2023', 'AWS Research', '', 'Awarded', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(12, 'Natural Language Processing for Social Media', 'Mark Kelly', '#34159', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '8 months ', '20,000', '2 February, 2023', 'Facebook Research', '', 'Pending', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(13, 'AI for Education', 'Sarah Johnson', '#35327', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '9 months', '20,000', '17 January, 2023', 'AWS Research', '', 'Awarded', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(14, 'Blockchain Security', 'Peter Lee', '#74005', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '7 months', '25,000', '14 December, 2022', 'Intel Labs', '', 'Awarded', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.'),
(15, 'Data Analytics', 'Michael Brown', '#97123', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', 'Computer Science', '8 months ', '30,000', '20 September, 2022', 'IBM Research', '', 'Rejected', 'This research project has the potential to make a significant impact in the field of artificial intelligence. By exploring novel techniques for data preprocessing and feature extraction, the project aims to improve the accuracy and efficiency of machine learning models. If successful, these advancements could lead to more robust and effective applications in areas such as natural language processing, computer vision, and predictive modeling. Additionally, the projects focus on incorporating ethical considerations into the machine learning process could contribute to the development of more responsible and equitable AI systems. Ultimately, the outcomes of this research have the potential to enhance our understanding of machine learning and drive progress towards the creation of more intelligent and beneficial technologies.');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `user_id` int(16) NOT NULL,
  `username_` varchar(64) NOT NULL,
  `password_` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`user_id`, `username_`, `password_`) VALUES
(1, 'admin', 'admin123'),
(2, 'aldrin', 'aldrin123');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `prof_id` int(16) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `address_` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `joining_date` varchar(32) NOT NULL,
  `user_id` varchar(32) NOT NULL,
  `password_` varchar(32) NOT NULL,
  `mobile_number` varchar(32) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `department` varchar(32) NOT NULL,
  `date_of_birth` varchar(32) NOT NULL,
  `education` varchar(32) NOT NULL,
  `publications` varchar(16) NOT NULL,
  `citations` varchar(16) NOT NULL,
  `h_index` varchar(16) NOT NULL,
  `description_` varchar(2048) NOT NULL,
  `photo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`prof_id`, `full_name`, `address_`, `email`, `joining_date`, `user_id`, `password_`, `mobile_number`, `designation`, `department`, `date_of_birth`, `education`, `publications`, `citations`, `h_index`, `description_`, `photo`) VALUES
(2, 'Tiger Nixon, PhD', '1954  Mountain View CA', 'tigernixon@gmail.com', '18 March, 2020', '1030443', 'tiger1234', '987 654 3210', 'Professor', 'Computer Science', '23 June, 1973', 'M.COM., P.H.D.', '121', '254', '43', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education.\r\n\r\nThroughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications.\r\n\r\nAs a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic7.jpg'),
(10, 'Elizabeth', '9830 Cherry Ave. Alpharetta', 'elizabeth@gmail.com', '14 February, 2023', '1030444', 'elizabeth123', '+01 123 456 7890', 'Associate Professor', 'Computer Science', '8 August, 2023', 'B.COM., M.COM.', '93', '132', '32', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic3.jpg'),
(11, 'Amelia', '950 Sunnyslope St. Hamtramck', 'amelia@gmail.com', '13 February, 2023', '1030445', 'amelia123', '+01 123 456 7890', 'Associate Professor', 'Computer Science', '19 July, 2023', 'M.COM., P.H.D.', '82', '126', '29', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic4.jpg'),
(12, 'Charlotte', '7877 Oak Valley Drive Sanford', 'charlotte@gmail.com', '14 February, 2023', '1030446', 'charlotte123', '+01 123 456 7890', 'Assistant Professor', 'Computer Science', '20 June, 2023', 'B.COM., M.COM.', '78', '122', '28', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic5.jpg'),
(13, 'Isabella', '255 Sussex Lane Waxhaw', 'isabella@gmail.com', '13 February, 2023', '1030447', 'isabella123', '+01 123 456 7890', 'Assistant Professor', 'Computer Science', '', 'B.A, B.C.A', '75', '118', '27', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic6.jpg'),
(14, 'Sebastian', '8 Selby St. Paducah', 'sebastian@gmail.com', '20 February, 2023', '1030448', 'sebastian123', '+01 123 456 7890', 'Assistant Professor', 'Computer Science', '19 April, 2023', 'M.COM., P.H.D.', '73', '113', '26', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic2.jpg'),
(15, 'Olivia', '542 NW. Mayfair Ave. Bergenfield', 'olivia@gmail.com', '20 April, 2023', '1030449', 'olivia123', '+01 123 456 7890', 'Lecturer', 'Computer Science', '8 May, 2023', 'B.COM., M.COM.', '69', '108', '24', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic8.jpg'),
(16, 'Emma', '28 Oak Valley Drive Mobile', 'emma@gmail.com', '22 March, 2023', '1030449', 'emma123', '+01 123 456 7890', 'Lecturer', 'Computer Science', '17 November, 2023', 'B.A, B.C.A', '65', '105', '23', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic9.jpg'),
(17, 'Jackson', 'Virginia Dr. Franklin Square', 'jackson@gmail.com', '24 January, 2023', '1030450', 'jackson123', '+01 123 456 7890', 'Lecturer', 'Computer Science', '16 June, 2023', 'M.COM., P.H.D.', '61', '94', '21', 'As a highly experienced PhD professor with several years of research experience, my interests lie in the intersection of computer science and artificial intelligence. My research aims to solve real-world problems by developing novel algorithms and techniques that can be applied to various domains, including healthcare, finance, and education. Throughout my career, I have published numerous papers in high-impact journals and presented my work at international conferences. I am particularly interested in exploring the potential of machine learning and natural language processing in understanding and analyzing large-scale datasets. Additionally, I have extensive experience in developing and implementing deep learning models, which have been successfully applied to several real-world applications. As a mentor, I am passionate about fostering the next generation of researchers and providing them with the tools they need to succeed in the field. I enjoy collaborating with students and colleagues from diverse backgrounds and disciplines, as I believe that this leads to more innovative and impactful research.', 'pic10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(11) NOT NULL,
  `project_name` varchar(256) NOT NULL,
  `department` varchar(64) NOT NULL,
  `abstract` varchar(1024) NOT NULL,
  `proposal_details` varchar(1024) NOT NULL,
  `starting_date` varchar(32) NOT NULL,
  `project_duration` varchar(32) NOT NULL,
  `budget` varchar(32) NOT NULL,
  `collaborators` varchar(128) NOT NULL,
  `professor_name` varchar(128) NOT NULL,
  `contact_number` varchar(32) NOT NULL,
  `project_status` varchar(32) NOT NULL,
  `progress` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `project_name`, `department`, `abstract`, `proposal_details`, `starting_date`, `project_duration`, `budget`, `collaborators`, `professor_name`, `contact_number`, `project_status`, `progress`) VALUES
(3, 'Machine Learning-based Intrusion Detection System for Web Applications', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '26 April, 2023', '8 months', '6,000', 'Richard Smith, Bryson Tex, Jared Josh, Erick Dax', 'Tiger Nixon, PhD', '0176351451', 'Completed', 100),
(4, 'Natural Language Processing for News Article Summarization', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '25 April, 2023', '6 months', '4,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Sebastian', '0176351451', 'Ongoing', 30),
(14, 'Optimizing Neural Network Hyperparameters with Genetic Algorithms', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '9 May, 2023', '7 months', '12,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Elizabeth', '0176351451', 'Ongoing', 80),
(15, 'Developing a Cloud-Based Electronic Health Record System', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '26 April, 2023', '9 months', '8,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Amelia', '0176351451', 'Suspended', 70),
(16, 'Analyzing Cybersecurity Risks in Internet of Things (IoT) Devices', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '26 April, 2023', '4 months', '9,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Charlotte', '0176351451', 'Ongoing', 60),
(17, 'Automated Diagnosis of Skin Lesions using Image Analysis', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '11 April, 2023', '5 months', '5,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Isabella', '0176351451', 'Completed', 100),
(18, 'Multi-Modal Biometric Authentication System using Deep Learning', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '15 March, 2023', '8 months', '10,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Olivia', '0176351451', 'Ongoing', 40),
(19, 'Analysis of Sentiment on Social Media during Global Crises', 'CSE', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.\r\n', 'The research project will involve the following steps:\r\n\r\n1. Data collection: A dataset of web traffic will be collected from a web application server. The dataset will include normal traffic and traffic with known attacks.\r\n2. Feature extraction: Features will be extracted from the collected data to train the machine learning models. These features will include HTTP request headers, parameters, and payloads.\r\n3. Model selection and training: Several machine learning algorithms will be evaluated for their effectiveness in detecting attacks. The selected algorithms will be trained on the collected data.\r\n4. Evaluation: The performance of the proposed IDS will be evaluated on a test dataset. The evaluation will include measuring the accuracy, precision, and recall of the system.', '13 April, 2023', '6 months', '15,000', 'Nathan Gill, Abraham Martinez, Leroy Reed', 'Emma', '0176351451', 'Ongoing', 90);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `pub_id` int(16) NOT NULL,
  `publication_title` varchar(128) NOT NULL,
  `publisher` varchar(64) NOT NULL,
  `authors` varchar(128) NOT NULL,
  `notes` varchar(256) NOT NULL,
  `department` varchar(32) NOT NULL,
  `publication_type` varchar(128) NOT NULL,
  `submission_date` varchar(32) NOT NULL,
  `keywords` varchar(128) NOT NULL,
  `publication_status` varchar(64) NOT NULL,
  `abstract` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`pub_id`, `publication_title`, `publisher`, `authors`, `notes`, `department`, `publication_type`, `submission_date`, `keywords`, `publication_status`, `abstract`) VALUES
(1, 'Deep Reinforcement Learning for Autonomous Driving: A Review', 'Springer', 'John Doe, Jane Doe', '---', 'Computer Science', 'Journal', '25 April, 2023', 'machine learning', 'Submitted', 'Web application security is a critical issue as more and more businesses are moving their services online. With the increasing amount of sensitive data being stored and transmitted online, the need for effective intrusion detection systems (IDS) has become paramount. The proposed research project aims to develop an IDS for web applications using machine learning algorithms. The system will be able to identify suspicious patterns and detect potential security breaches.'),
(2, 'A Machine Learning Framework for Predicting Heart Disease Using Clinical Data', 'IEEE', 'Mary Smith, John Doe', '---', 'Computer Science', 'Conference', '15 March, 2023', 'machine learning', 'Under Review', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.1\r\n'),
(5, 'Towards a Unified Framework for Real-time Scene Understanding in Autonomous Systems', 'ACM', 'Alice Brown, Bob Johnson', '---', 'Computer Science', 'Book', '22 February, 2023', 'machine learning', 'Accepted', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.1\r\n'),
(6, 'Comparative Analysis of Edge Computing Platforms for IoT Applications', 'Elsevier', 'Alex Lee, David Kim', '', 'Computer Science', 'Journal', '2 January, 2023', '', 'Published', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.'),
(7, 'Efficient Deep Learning-based Object Detection for Robotics Applications', 'ACM', 'David Kim, Sam Jones', '', 'Computer Science', 'Conference', '3 May, 2023', '', 'Submitted', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.'),
(8, 'Secure Data Aggregation in Wireless Sensor Networks using Homomorphic Encryption', 'Springer', 'John Smith, Mary Brown', '', 'Computer Science', 'Journal', '29 December, 2022', '', 'Published', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.'),
(9, 'Improving the Robustness of Deep Learning Models against Adversarial Attacks using Regularization Techniques', 'IEEE', 'Alice Lee, David Kim', '', 'Computer Science', 'Conference', '6 February, 2023', '', 'Published', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.'),
(10, 'A Survey on the Use of Machine Learning in Cybersecurity', 'ACM', 'Mary Brown, John Doe', '', 'Computer Science', 'Journal', '11 April, 2023', '', 'Accepted', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.'),
(11, 'Multi-Objective Optimization of Resource Allocation in Edge Computing Networks', 'Springer', 'Sam Jones, Alice Lee', '', 'Computer Science', 'Conference', '21 February, 2023', '', 'Accepted', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.'),
(12, 'Automated Detection of Retinal Diseases using Convolutional Neural Networks', 'Elsevier', 'David Kim', '', 'Computer Science', 'Book', '24 January, 2023', '', 'Under Review', 'Large language models (LLMs) have shown impressive performance on complex reasoning by\r\nleveraging chain-of-thought (CoT) prompting to\r\ngenerate intermediate reasoning chains as the rationale to infer the answer. However, existing\r\nCoT studies have focused on the language modality. We propose Multimodal-CoT that incorporates language (text) and vision (images) modalities into a two-stage framework that separates\r\nrationale generation and answer inference. In this\r\nway, answer inference can leverage better generated rationales that are based on multimodal\r\ninformation. With Multimodal-CoT, our model\r\nunder 1 billion parameters outperforms the previous state-of-the-art LLM (GPT-3.5) by 16 percentage points (75.17%→91.68% accuracy) and even\r\nsurpasses human performance on the ScienceQA\r\nbenchmark. Code is publicly available.');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(11) NOT NULL,
  `supervisor` varchar(32) NOT NULL,
  `student_name` varchar(64) NOT NULL,
  `academic_level` varchar(32) NOT NULL,
  `student_id` int(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `registration_date` varchar(32) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `mobile_number` varchar(32) NOT NULL,
  `date_of_birth` varchar(32) NOT NULL,
  `address_` varchar(128) NOT NULL,
  `major` varchar(32) NOT NULL,
  `student_status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `supervisor`, `student_name`, `academic_level`, `student_id`, `email`, `registration_date`, `gender`, `mobile_number`, `date_of_birth`, `address_`, `major`, `student_status`) VALUES
(1, 'Tiger Nixon, PhD', 'Garrett Winters', 'Masters', 2030442, 'garrettwinters@gmail.com', '20 January, 2023', 'Male', '987 654 3210', '4 May, 2023', '4182 Clair Street, Rosebud, Texas', 'CSE', 'Completed'),
(3, 'Elizabeth', 'Cedric Kelly', 'Undergraduate', 2021489, 'cedrickelly@gmail.com', '26 January, 2023', 'Female', '123 456 7890', '4 August, 2023', '4040 Catherine Drive, Jackhorn, Kentucky', 'CSE', 'Ongoing'),
(6, 'Charlotte', 'Ashton Cox', 'Masters', 2024853, 'ashtoncox@gmail.com', '13 February, 2023', 'Female', '987 654 3210', '19 October, 2023', '30823 Beverly Curve Apt. 486', 'EEE', 'Ongoing'),
(7, 'Amelia', 'Airi Satou', 'PhD', 2013269, 'airisatou@gmail.com', '25 February, 2023', 'Male', '987 654 3210', '13 September, 2023', '422 Effertz Rue', 'CSE', 'Ongoing'),
(8, 'Isabella', 'Alexys Rodriguez', 'Undergraduate', 2201385, 'alexysrodriguez@gmail.com', '4 March, 2023', 'Female', '(123) 456 7890', '14 December, 2023', '5805 Feil Mount Apt. 209', 'EEE', 'Suspended'),
(9, 'Sebastian', 'Brielle Williamson', 'Undergraduate', 2103264, 'briellewilliamson@gmail.com', '17 March, 2023', 'Female', '987 654 3210', '8 August, 2023', '9598 Daniel Brook', 'CSE', 'Ongoing'),
(10, 'Olivia', 'Herrod Chandler', 'Undergraduate', 2036591, 'herrodchandler@gmail.com', '11 April, 2023', 'Male', '123 456 7890', '23 August, 2023', '905 Heaven Crossroad Apt. 883', 'CSC', 'Suspended'),
(11, 'Emma', 'Rhona Davidson', 'Undergraduate', 2302658, 'rhonadavidson@gmail.com', '26 April, 2023', 'Female', '987 654 3210', '17 August, 2023', '65378 Marks Grove', 'EEE', 'Completed'),
(12, 'Jackson', 'Colleen Hurst', 'Masters', 2235478, 'colleenhurst@gmail.com', '2 May, 2023', 'Female', '(123) 456 7890', '25 April, 2023', '435 Yasmeen Rue', 'CSE', 'Ongoing'),
(13, 'Tiger Nixon, PhD', 'Sonya Frost', 'Undergraduate', 2136852, 'sonyafrost@gmail.com', '4 May, 2023', 'Female', '987 654 3210', '12 January, 2023', '957 Woodrow Trace Apt. 737', 'CSE', 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`grant_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grants`
--
ALTER TABLE `grants`
  MODIFY `grant_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `user_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `prof_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `pub_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
