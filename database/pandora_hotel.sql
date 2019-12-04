-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 07:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandora_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `day` int(10) NOT NULL,
  `message` longtext NOT NULL,
  `total_price` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `room_id`, `user_id`, `checkin`, `checkout`, `day`, `message`, `total_price`, `create_at`) VALUES
(15, 'Michelle', 'www.nayyiake@gmail.com', 2147483647, 15, 8, '2019-12-01 00:00:00', '2019-12-05 00:00:00', 4, 'aaaaa', '120000', '2019-11-30 09:47:39'),
(16, 'nainglin', 'nayyiake@gmail.com', 2147483647, 14, 1, '2019-12-02 00:00:00', '2019-12-15 00:00:00', 5, 'eesdrtfgyuhjik', '225000', '2019-12-01 05:57:16'),
(17, 'may', 'may@gmail.com', 98765432, 12, 7, '2019-12-03 00:00:00', '2019-12-11 00:00:00', 10, '', '450000', '2019-12-01 06:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE `news_table` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `about` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `name`, `about`, `date`, `photo`) VALUES
(2, 'dasd', 'AboutDd', '2029-11-21', '1_inle_lake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `room_detail` longtext,
  `gallery` longtext NOT NULL,
  `facilities` longtext NOT NULL,
  `room_type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `price` varchar(20) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `room_detail`, `gallery`, `facilities`, `room_type`, `status`, `price`, `create_at`) VALUES
(12, 'Single room', '<p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""><span data-name-en="Bathroom"><span class="bicon-" style="font-family: booking-iconset; speak: none; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; -webkit-font-smoothing: antialiased; font-size: 15pt;"><span style="font-family: -apple-system, BlinkMacSystemFont, " segoe="" ui",="" roboto,="" "helvetica="" neue",="" arial,="" "noto="" sans",="" sans-serif,="" "apple="" color="" emoji",="" "segoe="" ui="" symbol",="" emoji";="" font-size:="" 16px;="" font-weight:="" 700;"=""><span style="font-weight: 700; font-size: 16px;" segoe="" ui",="" roboto,="" "helvetica="" neue",="" arial,="" "noto="" sans",="" sans-serif,="" "apple="" color="" emoji",="" "segoe="" ui="" symbol",="" emoji";="" font-size:="" 1rem;"="">Room Detail</span></span></span></span><span style="font-size: 16px;">ï»¿</span><span data-name-en="Bathroom"><span class="bicon-" style="font-family: booking-iconset; speak: none; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; -webkit-font-smoothing: antialiased; font-size: 15pt;"><span style="font-family: -apple-system, BlinkMacSystemFont, " segoe="" ui",="" roboto,="" "helvetica="" neue",="" arial,="" "noto="" sans",="" sans-serif,="" "apple="" color="" emoji",="" "segoe="" ui="" symbol",="" emoji";="" font-size:="" 16px;="" font-weight:="" 700;"=""><span style="font-weight: 700; font-size: 16px;" segoe="" ui",="" roboto,="" "helvetica="" neue",="" arial,="" "noto="" sans",="" sans-serif,="" "apple="" color="" emoji",="" "segoe="" ui="" symbol",="" emoji";="" font-size:="" 1rem;"="">s: â€‹</span><span style="font-size: 16px;">â€‹</span></span><br></span></span></p><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""><span data-name-en="Bathroom"><span class="bicon-" style="font-family: booking-iconset; speak: none; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; -webkit-font-smoothing: antialiased; font-size: 15pt;">ëŒ´</span>&nbsp;Private bathroom</span></p><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""><span data-name-en="Parking" data-component="tooltip" data-tooltip-custom-class="room-lightbox-tooltip" data-tooltip-text="\r\n                \r\n                    \r\n    \r\n\r\n\r\n\r\n    <div>\r\n        <div class=" display--table-row"="">\r\n            \r\n                <span class="apt_block--left display--table-cell">\r\n                    \r\n                        \r\n                            <span class="hp-facility-icon-2 hp-facility-icon-policy"></span>\r\n                        \r\n                    \r\n                </span>\r\n            \r\n            <span class="apt_block--right">\r\n                \r\n                    <span class="highlight_free_stuff">Free!</span>\r\n                \r\n                Free private parking is available  on site (reservation is not needed).\r\n            </span>\r\n        \r\n    \r\n\r\n\r\n    \r\n\r\n\r\n                \r\n            "&gt;<svg fill="#000000" size="medium" width="16" height="16" viewBox="0 0 128 128" class="bk-icon -iconset-parking_sign"><path d="M70.8 44H58v16h12.8a8 8 0 0 0 0-16z"></path><path d="M108 8H20A12 12 0 0 0 8 20v88a12 12 0 0 0 12 12h88a12 12 0 0 0 12-12V20a12 12 0 0 0-12-12zM70 76H58v24H42V28h28a24 24 0 0 1 0 48z"></path></svg>&nbsp;Free parking</span></p><p data-name-en="roomsize" style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></p><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;"="">Room Size&nbsp;</h2><p><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"="">71 mÂ²</span></p><p class="hprt-lightbox-title" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></p><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;"="">In your private bathroom:</h2><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="9" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Hairdryer" data-id="12" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Hairdryer</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Bathrobe" data-id="19" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Bathrobe</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Free toiletries" data-id="27" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Free toiletries</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Slippers" data-id="43" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Slippers</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Bathtub or shower" data-id="69" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Bathtub or shower</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Guest bathroom" data-id="72" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Guest bathroom</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Additional bathroom" data-id="118" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Additional bathroom</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Towels" data-id="124" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Towels</li></ul><p class="hprt-lightbox-title" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></p><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;"="">View:</h2><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></p><p><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></span><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""></span></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="4" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Garden view" data-id="110" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Garden view</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Pool view" data-id="111" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Pool view</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Landmark view" data-id="113" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Landmark view</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="City view" data-id="121" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ City view</li></ul><p style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;"><br></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="4" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, " segoe="" ui",="" roboto,="" helvetica,="" arial,="" sans-serif;="" font-size:="" small;"=""><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="City view" data-id="121" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;"><br></li></ul>', '1574960821_43635ddffeb501490_132578014.jpg,1574960821_43635ddffeb501490_132578016.jpg,1574960821_43635ddffeb501490_132578018.jpg,', '<h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">Room Facilities: â€‹</h2><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="32" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Minibar" data-id="3" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Minibar</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Safe" data-id="6" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Safe</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Telephone" data-id="9" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Telephone</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Air conditioning" data-id="11" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Air conditioning</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Iron" data-id="15" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Iron</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Suit press" data-id="18" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Suit press</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Refrigerator" data-id="22" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Refrigerator</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Desk" data-id="23" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Desk</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Sitting area" data-id="26" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Sitting area</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Extra long beds (> 6.5 ft)" data-id="39" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Extra long beds (> 6.5 ft)</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Walk-in closet" data-id="41" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Walk-in closet</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Satellite channels" data-id="44" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Satellite channels</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Cable channels" data-id="68" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Cable channels</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Interconnecting room(s) available" data-id="73" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Interconnecting room(s) available</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Laptop safe" data-id="74" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Laptop safe</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Flat-screen TV" data-id="75" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Flat-screen TV</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Sofa" data-id="77" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Sofa</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Soundproof" data-id="79" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Soundproof</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Tile/Marble floor" data-id="80" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Tile/Marble floor</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Hardwood or parquet floors" data-id="82" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Hardwood or parquet floors</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Wake-up service" data-id="83" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Wake-up service</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Alarm clock" data-id="84" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Alarm clock</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Dining area" data-id="85" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Dining area</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Electric kettle" data-id="86" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Electric kettle</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Dryer" data-id="94" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Dryer</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Wardrobe or closet" data-id="95" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Wardrobe or closet</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Hypoallergenic" data-id="115" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Hypoallergenic</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Linens" data-id="125" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Linens</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="High chair" data-id="127" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ High chair</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Upper floors accessible by elevator" data-id="132" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Upper floors accessible by elevator</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Clothes rack" data-id="138" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Clothes rack</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Socket near the bed" data-id="184" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Socket near the bed</li></ul><h2 data-name-en="wifi" data-id="wifi" class="js-lightbox-facility" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">Free WiFi!</h2><div class="info" style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small; border: none !important; padding: 0px !important; margin: 5px 0px !important;"><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline;">Bathrooms:</h2>Â 2</div><div class="policy-section" style="margin: 8px 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline;">Smoking: â€‹</h2>No smoking</div><div class="parking-policy" style="margin: 8px 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline;">Parking: â€‹</h2><div class="parking-policy__title" style="margin: 10px 0px;"><div class="display--table-row"><span class="apt_block--left display--table-cell"><span class="hp-facility-icon-2 hp-facility-icon-policy"></span></span><span class="apt_block--right"><span class="highlight_free_stuff" style="color: rgb(10, 178, 27); font-weight: 600;">Free!</span>Â Free private parking is available on site (reservation is not needed).</span></div></div></div><p><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></span><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></span></p><div class="inline-feedback inline-feedback_bordered-light inline-feedback_lightbox" data-component="feedback-inline" data-poll="rc_www_hp_rt_lb_missing_info_new" data-modal-extra-class="feedback-modal-wrapper feedback-modal-wrapper_over" data-modal-mask-extra-class="feedback-modal-mask_over" style="margin: 24px 0px 0px; padding: 8px 0px 15px; border-bottom: 0px; text-align: right; color: rgb(119, 155, 202); clear: both; border-top: 1px solid rgb(233, 240, 250); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><div data-view="index"></div></div>', 1, 1, '45000', '2019-11-27 08:05:22'),
(14, 'Double Room zzz', '<p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><span data-name-en="Bathroom"><span class="bicon-" style="font-family: booking-iconset; speak: none; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; -webkit-font-smoothing: antialiased; font-size: 15pt;"><span style="font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 700;">Room Details: â€‹</span><br></span></span></p><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><span data-name-en="Bathroom"><span class="bicon-" style="font-family: booking-iconset; speak: none; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 1; -webkit-font-smoothing: antialiased; font-size: 15pt;">ëŒ´</span>Â Private bathroom</span></p><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><span data-name-en="Parking" data-component="tooltip" data-tooltip-custom-class="room-lightbox-tooltip" data-tooltip-text="\r\n                \r\n                    \r\n    \r\n\r\n\r\n\r\n    <div>\r\n        <div class="display--table-row">\r\n            \r\n                <span class="apt_block--left display--table-cell">\r\n                    \r\n                        \r\n                            <span class="hp-facility-icon-2 hp-facility-icon-policy"></span>\r\n                        \r\n                    \r\n                </span>\r\n            \r\n            <span class="apt_block--right">\r\n                \r\n                    <span class="highlight_free_stuff">Free!</span>\r\n                \r\n                Free private parking is available  on site (reservation is not needed).\r\n            </span>\r\n        </div>\r\n    </div>\r\n\r\n\r\n    \r\n\r\n\r\n                \r\n            "><svg fill="#000000" size="medium" width="16" height="16" viewBox="0 0 128 128" class="bk-icon -iconset-parking_sign"><path d="M70.8 44H58v16h12.8a8 8 0 0 0 0-16z"></path><path d="M108 8H20A12 12 0 0 0 8 20v88a12 12 0 0 0 12 12h88a12 12 0 0 0 12-12V20a12 12 0 0 0-12-12zM70 76H58v24H42V28h28a24 24 0 0 1 0 48z"></path></svg>Â Free parking</span></p><p data-name-en="roomsize" style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">Room SizeÂ </h2><p><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;">32 mÂ²</span></p><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;">Boasting garden views, this room offers a cable/satellite TV, air conditioning and a seating area. Featuring a shower, private bathroom also comes with slippers and a hairdryer.<br><br>Please note that this room type cannot accommodate extra beds.</p><p class="hprt-lightbox-title" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">In your private bathroom:</h2><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="8" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Hairdryer" data-id="12" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Hairdryer</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Bathrobe" data-id="19" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Bathrobe</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Free toiletries" data-id="27" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Free toiletries</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Slippers" data-id="43" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Slippers</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Bathtub or shower" data-id="69" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Bathtub or shower</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Guest bathroom" data-id="72" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Guest bathroom</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Towels" data-id="124" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Towels</li></ul><p class="hprt-lightbox-title" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">View:</h2><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><p><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></span><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></span></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="4" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Garden view" data-id="110" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Garden view</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Pool view" data-id="111" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Pool view</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Landmark view" data-id="113" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Landmark view</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="City view" data-id="121" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ City view</li></ul>', '1574881936_69595ddeca9035e94_65248891.jpg,1574881936_69595ddeca9035e94_65248894.jpg,1574881936_69595ddeca9035e94_132578014.jpg,', '<h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">Room Facilities: â€‹</h2><p style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></p><ul class="hprt-lightbox-list js-lightbox-facilities" data-nr-of-facilities="29" style="column-count: 2; margin-top: 5px; padding: 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Minibar" data-id="3" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Minibar</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Safe" data-id="6" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Safe</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Telephone" data-id="9" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Telephone</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Air conditioning" data-id="11" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Air conditioning</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Suit press" data-id="18" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Suit press</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Desk" data-id="23" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Desk</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Sitting area" data-id="26" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Sitting area</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Extra long beds (> 6.5 ft)" data-id="39" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Extra long beds (> 6.5 ft)</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Walk-in closet" data-id="41" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Walk-in closet</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Satellite channels" data-id="44" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Satellite channels</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Cable channels" data-id="68" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Cable channels</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Interconnecting room(s) available" data-id="73" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Interconnecting room(s) available</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Laptop safe" data-id="74" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Laptop safe</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Flat-screen TV" data-id="75" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Flat-screen TV</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Sofa" data-id="77" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Sofa</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Soundproof" data-id="79" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Soundproof</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Tile/Marble floor" data-id="80" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Tile/Marble floor</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Hardwood or parquet floors" data-id="82" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Hardwood or parquet floors</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Wake-up service" data-id="83" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Wake-up service</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Alarm clock" data-id="84" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Alarm clock</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Electric kettle" data-id="86" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Electric kettle</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Dryer" data-id="94" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Dryer</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Wardrobe or closet" data-id="95" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Wardrobe or closet</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Hypoallergenic" data-id="115" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Hypoallergenic</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Linens" data-id="125" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Linens</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Upper floors accessible by elevator" data-id="132" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Upper floors accessible by elevator</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Entire unit wheelchair accessible" data-id="134" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Entire unit wheelchair accessible</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Clothes rack" data-id="138" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Clothes rack</li><li class="hprt-lightbox-list__item js-lightbox-facility" data-name-en="Socket near the bed" data-id="184" style="list-style-type: none; margin-bottom: 5px; break-inside: avoid-column; width: 131px; line-height: 17px;">â€¢ Socket near the bed</li></ul><h2 data-name-en="wifi" data-id="wifi" class="js-lightbox-facility" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;">Free WiFi!</h2><div class="policy-section" style="margin: 8px 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline;">Smoking: â€‹</h2>No smoking</div><p><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></span><span style="color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"></span></p><div class="parking-policy" style="margin: 8px 0px; color: rgb(56, 56, 56); font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; font-size: small;"><h2 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; font-size: inherit; font-weight: bold; display: inline;">Parking: â€‹</h2><div class="parking-policy__title" style="margin: 10px 0px;"><div class="display--table-row"><span class="apt_block--left display--table-cell"><span class="hp-facility-icon-2 hp-facility-icon-policy"></span></span><span class="apt_block--right"><span class="highlight_free_stuff" style="color: rgb(10, 178, 27); font-weight: 600;">Free!</span>Â Free private parking is available on site (reservation is not needed).</span></div></div></div>', 2, 1, '45000', '2019-11-27 08:12:16'),
(15, 'Double Room', '<p>thrduyuf</p><ul><li>ojojkkk</li><li>gfjhkuliu</li><li>jgjgujh</li><li>jyujhkhki</li></ul>', '1574957068_70195ddff00c36238_132578016.jpg,1574957068_70195ddff00c36238_132578018.jpg,', '<p>tjdydtkuuhkhjkhu</p>', 2, 1, '30000', '2019-11-28 07:29:34'),
(16, 'Dulex', '<p>hdhusuhajdijgw</p>', '1574956376_286965ddfed5871748_65248891.jpg,1574956376_286965ddfed5871748_65248894.jpg,1574956376_286965ddfed5871748_65248900.jpg,', '<p>sfhbrhdtyj</p>', 3, 1, '45000', '2019-11-28 04:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `type`) VALUES
(1, 'Single Room'),
(2, 'Double Room'),
(3, 'Dulex Room'),
(4, 'Romance Room');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption`, `image`) VALUES
(13, 'Welcome from Pandora', '1.jpg'),
(14, 'Welcome from Pandora', 'p1.jpg'),
(15, 'Welcome from Pandora', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `address` longtext NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `phone_number`, `address`, `password`, `role`, `create_at`) VALUES
(1, 'nainglin', 'nayyiake@gmail.com', '09876545633', 'yangon', '96e79218965eb72c92a549dd5a330112', 'admin', '2019-11-20 00:34:53'),
(6, 'Soe Moe', 'soemoe@gmail.com', '234234234', 'aaaaaa', '96e79218965eb72c92a549dd5a330112', 'admin', '2019-11-21 06:56:29'),
(7, 'may', 'may@gmail.com', '098765432', 'mandalay', '96e79218965eb72c92a549dd5a330112', 'member', '2019-11-24 11:24:57'),
(8, 'Michelle', 'www.nayyiake@gmail.com', '0987876456435', 'yangon', '96e79218965eb72c92a549dd5a330112', 'member', '2019-11-25 10:01:43'),
(12, 'Pancy', 'pancy@gmail.com', '09878556', 'hdlouhvjadv', '96e79218965eb72c92a549dd5a330112', 'member', '2019-12-02 21:51:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_table`
--
ALTER TABLE `news_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `news_table`
--
ALTER TABLE `news_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
