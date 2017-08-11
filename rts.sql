/*
SQLyog Community v12.09 (32 bit)
MySQL - 10.1.25-MariaDB : Database - rts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`rts` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `rts`;

/*Table structure for table `tbl_last_activity` */

DROP TABLE IF EXISTS `tbl_last_activity`;

CREATE TABLE `tbl_last_activity` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `raw_data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_last_activity` */

insert  into `tbl_last_activity`(`id`,`user_id`,`login_time`,`raw_data`) values (1,1,'2017-08-08 11:41:37',NULL),(2,1,'2017-08-08 11:44:37',NULL),(3,1,'2017-08-08 11:49:29',NULL),(4,1,'2017-08-08 12:27:36',NULL),(5,1,'2017-08-08 12:35:51',NULL),(6,1,'2017-08-08 12:39:29',NULL),(7,8,'2017-08-09 14:37:31',NULL),(8,1,'2017-08-09 17:57:50',NULL),(9,1,'2017-08-09 17:58:42',NULL),(10,1,'2017-08-09 18:00:19',NULL),(11,1,'2017-08-09 18:02:00',NULL),(12,1,'2017-08-10 11:01:34',NULL),(13,1,'2017-08-10 11:17:01',NULL),(14,1,'2017-08-10 11:31:50','{\"REDIRECT_MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"REDIRECT_MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"REDIRECT_OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"REDIRECT_PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"REDIRECT_PHPRC\":\"\\\\xampp\\\\php\",\"REDIRECT_TMP\":\"\\\\xampp\\\\tmp\",\"REDIRECT_STATUS\":\"200\",\"MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost:8080\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"67\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_ORIGIN\":\"http:\\/\\/localhost:8080\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.78 Safari\\/537.36\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8\",\"HTTP_REFERER\":\"http:\\/\\/localhost:8080\\/rts\\/login\\/validate_credentials\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.8\",\"HTTP_COOKIE\":\"ci_session=u8cviu9pha8f9r1qm25fbgnkq531o4qq\",\"PATH\":\"C:\\\\ProgramData\\\\Oracle\\\\Java\\\\javapath;C:\\\\WINDOWS\\\\system32;C:\\\\WINDOWS;C:\\\\WINDOWS\\\\System32\\\\Wbem;C:\\\\WINDOWS\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Sync\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Migration\\\\;C:\\\\Program Files (x86)\\\\Skype\\\\Phone\\\\;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_141\\\\bin;C:\\\\Python27;C:\\\\xampp\\\\php;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\PuTTY\\\\;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\GitHubDesktop\\\\bin;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Programs\\\\Git\\\\cmd;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Roaming\\\\npm\",\"SystemRoot\":\"C:\\\\WINDOWS\",\"COMSPEC\":\"C:\\\\WINDOWS\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\WINDOWS\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7 Server at localhost Port 8080<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"8080\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"SERVER_ADMIN\":\"postmaster@localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp\\/htdocs\\/rts\\/index.php\",\"REMOTE_PORT\":\"50626\",\"REDIRECT_URL\":\"\\/rts\\/login\\/validate_credentials\",\"REDIRECT_QUERY_STRING\":\"\\/login\\/validate_credentials\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"\",\"REQUEST_URI\":\"\\/rts\\/login\\/validate_credentials\",\"SCRIPT_NAME\":\"\\/rts\\/index.php\",\"PHP_SELF\":\"\\/rts\\/index.php\",\"REQUEST_TIME_FLOAT\":1502335910.507,\"REQUEST_TIME\":1502335910}'),(15,1,'2017-08-10 11:37:27','{\"REDIRECT_MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"REDIRECT_MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"REDIRECT_OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"REDIRECT_PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"REDIRECT_PHPRC\":\"\\\\xampp\\\\php\",\"REDIRECT_TMP\":\"\\\\xampp\\\\tmp\",\"REDIRECT_STATUS\":\"200\",\"MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost:8080\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"67\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_ORIGIN\":\"http:\\/\\/localhost:8080\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.78 Safari\\/537.36\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8\",\"HTTP_REFERER\":\"http:\\/\\/localhost:8080\\/rts\\/login\\/validate_credentials\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.8\",\"HTTP_COOKIE\":\"ci_session=0m97ggbufon8hmdcvsvb0b5f42qjsk3i\",\"PATH\":\"C:\\\\ProgramData\\\\Oracle\\\\Java\\\\javapath;C:\\\\WINDOWS\\\\system32;C:\\\\WINDOWS;C:\\\\WINDOWS\\\\System32\\\\Wbem;C:\\\\WINDOWS\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Sync\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Migration\\\\;C:\\\\Program Files (x86)\\\\Skype\\\\Phone\\\\;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_141\\\\bin;C:\\\\Python27;C:\\\\xampp\\\\php;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\PuTTY\\\\;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\GitHubDesktop\\\\bin;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Programs\\\\Git\\\\cmd;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Roaming\\\\npm\",\"SystemRoot\":\"C:\\\\WINDOWS\",\"COMSPEC\":\"C:\\\\WINDOWS\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\WINDOWS\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7 Server at localhost Port 8080<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"8080\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"SERVER_ADMIN\":\"postmaster@localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp\\/htdocs\\/rts\\/index.php\",\"REMOTE_PORT\":\"50702\",\"REDIRECT_URL\":\"\\/rts\\/login\\/validate_credentials\",\"REDIRECT_QUERY_STRING\":\"\\/login\\/validate_credentials\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"\",\"REQUEST_URI\":\"\\/rts\\/login\\/validate_credentials\",\"SCRIPT_NAME\":\"\\/rts\\/index.php\",\"PHP_SELF\":\"\\/rts\\/index.php\",\"REQUEST_TIME_FLOAT\":1502336247.167,\"REQUEST_TIME\":1502336247}'),(16,1,'2017-08-10 11:40:38','{\"REDIRECT_MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"REDIRECT_MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"REDIRECT_OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"REDIRECT_PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"REDIRECT_PHPRC\":\"\\\\xampp\\\\php\",\"REDIRECT_TMP\":\"\\\\xampp\\\\tmp\",\"REDIRECT_STATUS\":\"200\",\"MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost:8080\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"67\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_ORIGIN\":\"http:\\/\\/localhost:8080\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.78 Safari\\/537.36\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8\",\"HTTP_REFERER\":\"http:\\/\\/localhost:8080\\/rts\\/login\\/validate_credentials\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.8\",\"HTTP_COOKIE\":\"ci_session=0m97ggbufon8hmdcvsvb0b5f42qjsk3i\",\"PATH\":\"C:\\\\ProgramData\\\\Oracle\\\\Java\\\\javapath;C:\\\\WINDOWS\\\\system32;C:\\\\WINDOWS;C:\\\\WINDOWS\\\\System32\\\\Wbem;C:\\\\WINDOWS\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Sync\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Migration\\\\;C:\\\\Program Files (x86)\\\\Skype\\\\Phone\\\\;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_141\\\\bin;C:\\\\Python27;C:\\\\xampp\\\\php;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\PuTTY\\\\;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\GitHubDesktop\\\\bin;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Programs\\\\Git\\\\cmd;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Roaming\\\\npm\",\"SystemRoot\":\"C:\\\\WINDOWS\",\"COMSPEC\":\"C:\\\\WINDOWS\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\WINDOWS\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7 Server at localhost Port 8080<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"8080\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"SERVER_ADMIN\":\"postmaster@localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp\\/htdocs\\/rts\\/index.php\",\"REMOTE_PORT\":\"50784\",\"REDIRECT_URL\":\"\\/rts\\/login\\/validate_credentials\",\"REDIRECT_QUERY_STRING\":\"\\/login\\/validate_credentials\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"\",\"REQUEST_URI\":\"\\/rts\\/login\\/validate_credentials\",\"SCRIPT_NAME\":\"\\/rts\\/index.php\",\"PHP_SELF\":\"\\/rts\\/index.php\",\"REQUEST_TIME_FLOAT\":1502336437.959,\"REQUEST_TIME\":1502336437}'),(17,1,'2017-08-10 16:29:46','{\"REDIRECT_MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"REDIRECT_MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"REDIRECT_OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"REDIRECT_PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"REDIRECT_PHPRC\":\"\\\\xampp\\\\php\",\"REDIRECT_TMP\":\"\\\\xampp\\\\tmp\",\"REDIRECT_STATUS\":\"200\",\"MIBDIRS\":\"C:\\/xampp\\/php\\/extras\\/mibs\",\"MYSQL_HOME\":\"\\\\xampp\\\\mysql\\\\bin\",\"OPENSSL_CONF\":\"C:\\/xampp\\/apache\\/bin\\/openssl.cnf\",\"PHP_PEAR_SYSCONF_DIR\":\"\\\\xampp\\\\php\",\"PHPRC\":\"\\\\xampp\\\\php\",\"TMP\":\"\\\\xampp\\\\tmp\",\"HTTP_HOST\":\"localhost:8080\",\"HTTP_CONNECTION\":\"keep-alive\",\"CONTENT_LENGTH\":\"67\",\"HTTP_CACHE_CONTROL\":\"max-age=0\",\"HTTP_ORIGIN\":\"http:\\/\\/localhost:8080\",\"HTTP_UPGRADE_INSECURE_REQUESTS\":\"1\",\"HTTP_USER_AGENT\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/60.0.3112.78 Safari\\/537.36\",\"CONTENT_TYPE\":\"application\\/x-www-form-urlencoded\",\"HTTP_ACCEPT\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/webp,image\\/apng,*\\/*;q=0.8\",\"HTTP_REFERER\":\"http:\\/\\/localhost:8080\\/rts\\/login\",\"HTTP_ACCEPT_ENCODING\":\"gzip, deflate, br\",\"HTTP_ACCEPT_LANGUAGE\":\"en-US,en;q=0.8\",\"HTTP_COOKIE\":\"ci_session=gni0apouoviq2o2ft9f22ip0fbjmlren\",\"PATH\":\"C:\\\\ProgramData\\\\Oracle\\\\Java\\\\javapath;C:\\\\WINDOWS\\\\system32;C:\\\\WINDOWS;C:\\\\WINDOWS\\\\System32\\\\Wbem;C:\\\\WINDOWS\\\\System32\\\\WindowsPowerShell\\\\v1.0\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Sync\\\\;C:\\\\Program Files\\\\Google\\\\Google Apps Migration\\\\;C:\\\\Program Files (x86)\\\\Skype\\\\Phone\\\\;C:\\\\Program Files\\\\Java\\\\jdk1.8.0_141\\\\bin;C:\\\\Python27;C:\\\\xampp\\\\php;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\nodejs\\\\;C:\\\\Program Files\\\\PuTTY\\\\;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Microsoft\\\\WindowsApps;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\GitHubDesktop\\\\bin;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Local\\\\Programs\\\\Git\\\\cmd;C:\\\\Users\\\\dippu.kumar\\\\AppData\\\\Roaming\\\\npm\",\"SystemRoot\":\"C:\\\\WINDOWS\",\"COMSPEC\":\"C:\\\\WINDOWS\\\\system32\\\\cmd.exe\",\"PATHEXT\":\".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\",\"WINDIR\":\"C:\\\\WINDOWS\",\"SERVER_SIGNATURE\":\"<address>Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7 Server at localhost Port 8080<\\/address>\\n\",\"SERVER_SOFTWARE\":\"Apache\\/2.4.26 (Win32) OpenSSL\\/1.0.2l PHP\\/7.1.7\",\"SERVER_NAME\":\"localhost\",\"SERVER_ADDR\":\"::1\",\"SERVER_PORT\":\"8080\",\"REMOTE_ADDR\":\"::1\",\"DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"REQUEST_SCHEME\":\"http\",\"CONTEXT_PREFIX\":\"\",\"CONTEXT_DOCUMENT_ROOT\":\"C:\\/xampp\\/htdocs\",\"SERVER_ADMIN\":\"postmaster@localhost\",\"SCRIPT_FILENAME\":\"C:\\/xampp\\/htdocs\\/rts\\/index.php\",\"REMOTE_PORT\":\"52706\",\"REDIRECT_URL\":\"\\/rts\\/login\\/validate_credentials\",\"REDIRECT_QUERY_STRING\":\"\\/login\\/validate_credentials\",\"GATEWAY_INTERFACE\":\"CGI\\/1.1\",\"SERVER_PROTOCOL\":\"HTTP\\/1.1\",\"REQUEST_METHOD\":\"POST\",\"QUERY_STRING\":\"\",\"REQUEST_URI\":\"\\/rts\\/login\\/validate_credentials\",\"SCRIPT_NAME\":\"\\/rts\\/index.php\",\"PHP_SELF\":\"\\/rts\\/index.php\",\"REQUEST_TIME_FLOAT\":1502353786.269,\"REQUEST_TIME\":1502353786}');

/*Table structure for table `tbl_order_items` */

DROP TABLE IF EXISTS `tbl_order_items`;

CREATE TABLE `tbl_order_items` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `order_ref_id` bigint(15) DEFAULT NULL,
  `order_no` varchar(100) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `item_id` varchar(100) DEFAULT NULL,
  `tracking_no` varchar(200) DEFAULT NULL,
  `delivery_type` varchar(200) DEFAULT NULL,
  `shipping_provider` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_tbl_orders` (`order_ref_id`),
  CONSTRAINT `fk_tbl_orders` FOREIGN KEY (`order_ref_id`) REFERENCES `tbl_orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order_items` */

/*Table structure for table `tbl_order_items_log` */

DROP TABLE IF EXISTS `tbl_order_items_log`;

CREATE TABLE `tbl_order_items_log` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `order_ref_id` bigint(15) DEFAULT NULL,
  `order_no` varchar(100) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `item_id` varchar(100) DEFAULT NULL,
  `tracking_no` varchar(200) DEFAULT NULL,
  `delivery_type` varchar(200) DEFAULT NULL,
  `shipping_provider` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1',
  `logged_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_tbl_orders` (`order_ref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order_items_log` */

/*Table structure for table `tbl_orders` */

DROP TABLE IF EXISTS `tbl_orders`;

CREATE TABLE `tbl_orders` (
  `id` bigint(15) NOT NULL AUTO_INCREMENT,
  `order_no` varchar(100) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_orders` */

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `api_key` varchar(300) DEFAULT NULL,
  `userid` varchar(300) DEFAULT NULL COMMENT 'email',
  `seller_id` varchar(50) DEFAULT NULL COMMENT 'short code',
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` tinyint(1) DEFAULT '3' COMMENT '1-super admin,2-admin,3-seller',
  `status` tinyint(1) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`name`,`api_key`,`userid`,`seller_id`,`email`,`password`,`user_type`,`status`,`created_on`,`updated_on`) values (1,'Dippu','3w-1-953aa7rDtARldex1wfsKZW_bsizqKMFzv-kwcNAZruagDfIAhtM','dippu.kumar@lazada.com.my',NULL,'dippu.kumar@lazada.com.my','cc03e747a6afbbcbf8be7668acfebee5',3,1,'2017-08-08 17:44:30','2017-08-08 17:44:30'),(6,'asdfasfda','asdfasf','sdfsf','sdfsf','asfs@sfdds.sdf','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 14:32:12','2017-08-09 14:32:13'),(7,'asfdasf','dfasfdas','asdfasdfasdf','asdfasdfasdf','adfd@pol.df','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 14:33:41','2017-08-09 14:33:41'),(8,'sadfasdf','asdfasfdasf','sfasdfdasf','sfasdfdasf','asfd@lp.df','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 14:35:03','2017-08-09 14:35:03'),(9,'asfdasdf','asdfasfd','asdfas@sdf.ff','asfdasdf','asdfas@sdf.ff','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 16:36:52','2017-08-09 16:36:52'),(10,'asdfasff','sdafasdf','asf@sdf.df','asdfasdf','asf@sdf.df','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 16:38:51','2017-08-09 16:38:51'),(11,'asfdasfd','asfasfasdf','asfasf@sdfsd.df4','sadfasf','asfasf@sdfsd.df4','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 16:40:20','2017-08-09 16:40:20'),(12,'asdfasdf','asfasf','asfasf@sdfsd.y','safasasf','asfasf@sdfsd.y','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 16:41:48','2017-08-09 16:41:48'),(13,'asfdasfd','asdfasfd','asfd@lp.dfe','asdfasf','asfd@lp.dfe','c33367701511b4f6020ec61ded352059',3,1,'2017-08-09 17:05:02','2017-08-09 17:05:02'),(14,'asdfasfda','asfdasf','dippu.in@gmail.co','asfas','dippu.in@gmail.co','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 17:06:22','2017-08-09 17:06:22'),(15,'asdfasdf','asfasfd','sdfsdaf@sdf.uj','asdfdasf','sdfsdaf@sdf.uj','e10adc3949ba59abbe56e057f20f883e',3,1,'2017-08-09 18:06:15','2017-08-09 18:06:15');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
