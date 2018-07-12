

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL COMMENT 'adminID',
  `password` varchar(255) NOT NULL COMMENT 'password ',
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("admin@admin.com","111");



CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'departmentID',
  `dept_name` varchar(50) NOT NULL COMMENT 'department name',
  `dept_detail` varchar(255) DEFAULT NULL COMMENT 'about the department',
  `status_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`dept_id`),
  UNIQUE KEY `dept_name` (`dept_name`),
  KEY `status` (`status_id`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO department VALUES("1","cse","computer science & eng","1");
INSERT INTO department VALUES("2","BSc IT","information technology 2015","1");
INSERT INTO department VALUES("3","eco","economics department of lcb college","1");
INSERT INTO department VALUES("4","english","english department of lcb college","2");
INSERT INTO department VALUES("5","electronics","electronices of LCB","1");



CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'employeeID',
  `password` varchar(255) NOT NULL COMMENT 'password ',
  `name` varchar(50) NOT NULL COMMENT 'Name Of the employee',
  `photo` varchar(30) NOT NULL DEFAULT 'default_pic.png',
  `email` varchar(50) NOT NULL COMMENT 'Email of the employee',
  `phone` varchar(10) NOT NULL COMMENT 'phone number of the employee',
  `dept_id` int(11) NOT NULL COMMENT 'department_id of the concerned department',
  `salary` decimal(10,0) NOT NULL COMMENT 'salary of th employee',
  `status_id` int(11) NOT NULL COMMENT 'status of the employee',
  `joined_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'joined date & time of the employee',
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `email` (`email`),
  KEY `dept_id` (`dept_id`),
  KEY `status` (`status_id`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("1","12345","admin121","default_pic.png","admin@admin.com","1234567890","1","1000","1","2018-06-14 23:39:33");
INSERT INTO employee VALUES("2","111","Computer HOD","default_pic.png","hod.cs@ems.com","1234567890","1","65000","1","2018-06-15 00:04:36");
INSERT INTO employee VALUES("3","66666","injnwef","default_pic.png","kalita@11.com","1234567890","2","132456778","2","2018-07-06 07:05:26");
INSERT INTO employee VALUES("4","123","alen","default_pic.png","a@a.a","1234567890","2","1234","2","2018-07-06 07:41:15");
INSERT INTO employee VALUES("5","12345","biswa","default_pic.png","biswa@dev.io","87654","3","0","1","2018-07-06 07:42:18");
INSERT INTO employee VALUES("7","12345","rofi","default_pic.png","rofi@rofi.io","1234567890","2","100000000","1","2018-07-06 07:43:29");
INSERT INTO employee VALUES("8","123","localhost","default_pic.png","mandal@gmail.com","8761929518","2","0","2","2018-07-06 07:52:30");



CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `notice_date` date DEFAULT NULL,
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notice_id`),
  KEY `notice_ibfk_1` (`dept_id`),
  CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO notice VALUES("7","1","PG"," PG admissions open","2018-07-28","2018-07-10 07:55:32");
INSERT INTO notice VALUES("8","2","my first post"," lorem  epsum dolor","2018-07-13","2018-07-12 09:35:28");



CREATE TABLE `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ststusID',
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO status VALUES("1","active");
INSERT INTO status VALUES("2","inactive");
INSERT INTO status VALUES("3","suspended");

