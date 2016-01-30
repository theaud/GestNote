
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `doctor` int(11) NOT NULL,
  `marks` varchar(255) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(contact) REFERENCES contact(id),
  FOREIGN KEY(doctor) REFERENCES doctor(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `identity` (
  `id` int(11) NOT NULL,
  `birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `registerdate` date NOT NULL,
  `prev_school` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id) REFERENCES student(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `coordonate` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `fixphone` varchar(20) NOT NULL,
  `mobilephone` varchar(20) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id) REFERENCES student(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `fixphone` varchar(20) NOT NULL,
  `mobilephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `fixphone` varchar(20) NOT NULL,
  `mobilephone` varchar(20) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `allergic` varchar(255) NOT NULL,
  `medical_notes` varchar(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
