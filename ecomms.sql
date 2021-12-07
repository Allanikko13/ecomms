-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 04:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomms`
--

-- --------------------------------------------------------

--
-- Table structure for table `barn`
--

CREATE TABLE `barn` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barn`
--

INSERT INTO `barn` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Ace Flat Barn Red Barn and Fence Paint Exterior 1 gal.', 1300, './images/bn1.jpg'),
(2, 'Ace Flat Black Barn and Fence Paint Exterior 1 gal. ', 1300, './images/bn2.jpg'),
(3, 'Ace Gloss Barn Red Oil-Based Barn and Fence Paint Exterior 1 gal.', 1400, './images/bn3.jpg'),
(4, 'Ace Flat Ranch Brown Barn and Fence Paint Exterior 1 gal.', 1300, './images/bn4.jpg'),
(5, 'Ace Flat White Barn and Fence Paint Exterior 1 gal.', 1300, './images/bn5.jpg'),
(6, 'Ace Flat White Barn and Fence Paint Exterior 5 gal.', 4900, './images/bn6.jpg'),
(7, 'Ace Gloss White Oil-Based Barn and Fence Paint Exterior 1 gal. ', 1400, './images/bn7.jpg'),
(8, 'Ace Flat Barn Red Barn and Fence Paint Exterior 5 gal.', 4900, './images/bn8.jpg'),
(9, 'Ace Gloss Barn Red Oil-Based Barn and Fence Paint Exterior 5 gal. ', 5800, './images/bn9.jpg'),
(10, 'Ace Flat Green Barn and Fence Paint Exterior 1 gal. ', 1300, './images/bn10.jpg'),
(11, 'Ace Flat Black Barn and Fence Paint Exterior 5 gal.', 4900, './images/bn11.jpg'),
(12, 'Ace Gloss Ranch Brown Oil-Based Barn and Fence Paint Exterior 1 gal.', 1400, './images/bn12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brush`
--

CREATE TABLE `brush` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brush`
--

INSERT INTO `brush` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Linzer Assorted in. W Assorted Paint Brush Set', 800, './images/b1.jpg'),
(2, 'Purdy XL 1, 1-1/2 and 2 in. W Assorted Paint Brush Set', 1300, './images/b2.jpg'),
(3, 'Purdy Clearcut Glide 2 in. W Angle Trim Paint Brush', 800, './images/b3.jpg'),
(4, 'Jen 2 in. W Chiseled Paint Brush', 500, './images/b4.jpg'),
(5, 'Linzer Project Select 1 1/2, 2 and 3 in. W Flat Paint Brush Set', 700, './images/b5.jpg'),
(6, 'Wooster Bravo Stainer 4 in. W Flat Paint Brush', 800, './images/b6.jpg'),
(7, 'Cabot 4 in. W Straight Stain Brush', 700, './images/b7.jpg'),
(8, 'Linzer Project Select 2 and 2-1/2 in. W Angle Paint Brush Set', 400, './images/b8.jpg'),
(9, 'Ace Knit 3/8 in. x 9 in. W Regular Paint Roller Cover 3 pk', 800, './images/b9.jpg'),
(10, 'Purdy Contractor 1st Polyester 3/8 in. x 9 in. W Paint Roller Cover 3 pk', 700, './images/b10.jpg'),
(11, 'Wagner Polyester 9 in. W x 3/8 in. Paint Roller Cover 1 pk', 100, './images/b11.jpg'),
(12, 'Purdy White Dove Dralon 4.5 in. W x 1/4 in. Mini Paint Roller Cover 2 pk', 400, './images/b12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Benjamin Moore Advance Satin Base 1 Paint Interior 1 gal.', 2900, './images/cab1.jpg'),
(2, 'Magnolia Home by Joanna Gaines KILZ Semi-Gloss Tint Base Base 1 Cabinet and Trim Paint Interio ', 2500, './images/cab2.jpg'),
(3, 'Clark+Kensington Semi-Gloss White Premium Cabinet, Door & Trim Paint Interior 1 gal. ', 2200, './images/cab3.jpg'),
(4, 'Clark+Kensington Semi-Gloss White Premium Cabinet, Door & Trim Paint Interior 1 qt.', 1200, './images/cab4.jpg'),
(5, 'Benjamin Moore Advance Satin Base 4 Paint Interior 1 gal. ', 2900, './images/cab5.jpg'),
(6, 'Benjamin Moore Advance Satin Base 3 Paint Interior 1 gal.', 2900, './images/cab6.jpg'),
(7, 'Benjamin Moore Advance Semi-Gloss Base 1 Paint Interior 1 qt. ', 1300, './images/cab7.jpg'),
(8, 'Benjamin Moore Advance Semi-Gloss Base 3 Paint Interior 1 gal. ', 2900, './images/cab8.jpg'),
(9, 'Benjamin Moore Advance Satin Base 2 Paint Interior 1 gal. ', 2900, './images/cab9.jpg'),
(10, 'Magnolia Home by Joanna Gaines KILZ Semi-Gloss Tint Base Base 3 Cabinet and Trim Paint Interio ', 1200, './images/cab10.jpg'),
(11, 'Benjamin Moore Advance Satin Base 4 Paint Interior 1 qt.', 1300, './images/cab11.jpg'),
(12, 'Magnolia Home by Joanna Gaines KILZ Semi-Gloss Tint Base Base 1 Cabinet and Trim Paint Interio ', 1200, './images/cab12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ceiling`
--

CREATE TABLE `ceiling` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ceiling`
--

INSERT INTO `ceiling` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Clark+Kensington Flat (Non-Glare) Ceiling White Paint & Primer Interior 1 gal. ', 1700, './images/ce1.jpg'),
(2, 'Clark+Kensington Flat (Non-Glare) White Premium Paint Interior 1 qt. ', 900, './images/ce2.jpg'),
(3, 'Clark+Kensington Flat (Non-Glare) White Premium Paint Interior 5 gal. ', 6800, './images/ce3.jpg'),
(4, 'Royal Flat (Non-Glare) White Paint & Primer Interior 1 gal.', 1300, './images/ce4.jpg'),
(5, 'Royal Flat (Non-Glare) White Paint Interior 5 gal.', 5100, './images/ce5.jpg'),
(6, 'Insl-x Flat White Color Changing Ceiling Paint Interior 1 gal. ', 2000, './images/ce6.jpg'),
(7, 'Benjamin Moore Muresco Flat White Ceiling Paint Interior 1 gal.', 2500, './images/ce7.jpg'),
(8, 'Benjamin Moore Muresco Flat White Ceiling Paint Interior 1 qt. ', 1000, './images/ce8.jpg'),
(9, 'Benjamin Moore Muresco Flat White Ceiling Paint Interior 5 gal.', 8900, './images/ce9.jpg'),
(10, 'Benjamin Moore Waterborne Ceiling Paint Flat Base 1 Ceiling Paint Interior 1 gal.', 2300, './images/ce10.jpg'),
(11, 'Benjamin Moore Waterborne Ceiling Paint Flat Base 4 Ceiling Paint Interior 1 qt. ', 1100, './images/ce11.jpg'),
(12, 'Benjamin Moore Waterborne Ceiling Paint Flat Base 1 Ceiling Paint Interior 1 qt. ', 1100, './images/ce12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chalk`
--

CREATE TABLE `chalk` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chalk`
--

INSERT INTO `chalk` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Rust-Oleum Chalked Ultra Matte Linen White Water-Based Acrylic Chalk Paint 30 oz.', 1100, './images/ch1.jpg'),
(2, 'Amy Howard at Home Light Base Latex One Step Furniture Paint 32 oz.\r\n', 1700, './images/ch2.jpg'),
(3, 'Rust-Oleum Chalked Clear Chalk Paint 30 oz.', 1300, './images/ch3.jpg'),
(4, 'Rust-Oleum Chalked Ultra Matte Linen White Oil-Based Acrylic Sprayable Chalk Paint 12 oz.', 500, './images/ch4.jpg'),
(5, 'Rust-Oleum Chalked Ultra Matte Charcoal Oil-Based Acrylic Sprayable Chalk Paint 12 oz.', 500, './images/ch5.jpg'),
(6, 'Rust-Oleum Chalked Ultra Matte Chiffon Cream Oil-Based Acrylic Sprayable Chalk Paint 12 oz.\r\n', 500, './images/ch6.jpg'),
(7, 'Rust-Oleum Chalked Ultra Matte Chiffon Cream Water-Based Chalk Paint 30 oz.', 1300, './images/ch7.jpg'),
(8, 'Rust-Oleum Chalked Ultra Matte Aged Gray Oil-Based Acrylic Sprayable Chalk Paint 12 oz.', 500, './images/ch8.jpg'),
(9, 'Amy Howard at Home Dark Base Latex One Step Furniture Paint 32 oz.\r\n', 1700, './images/ch9.jpg'),
(10, 'Rust-Oleum Chalked Ultra Matte Charcoal Water-Based Acrylic Chalk Paint 30 oz.', 1100, './images/ch10.jpg'),
(11, 'Rust-Oleum Chalked Ultra Matte Aged Gray Water-Based Acrylic Chalk Paint 30 oz.\r\n', 1100, './images/ch11.jpg'),
(12, 'Rust-Oleum Chalked Matte Clear Spray Paint 12 oz.', 500, './images/ch12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fluorescent`
--

CREATE TABLE `fluorescent` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fluorescent`
--

INSERT INTO `fluorescent` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Rust-Oleum Specialty Fluorescent Pink Spray Paint 11 oz. ', 400, './images/fl1.jpg'),
(2, 'Rust-Oleum Specialty Fluorescent Yellow Spray Paint 11 oz.', 400, './images/fl2.jpg'),
(3, 'Rust-Oleum Specialty Fluorescent Orange Spray Paint 11 oz.', 400, './images/fl3.jpg'),
(4, 'Rust-Oleum Specialty Fluorescent Green Spray Paint 11 oz. ', 400, './images/fl4.jpg'),
(5, 'Rust-Oleum Specialty Fluorescent Red-Orange Spray Paint 11 oz. ', 400, './images/fl5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Rust-Oleum Satin Battleship Gray Acrylic Concrete and Garage Floor Paint 1 gal. ', 3400, './images/gr1.jpg'),
(2, 'Rust-Oleum Satin Armor Gray Acrylic Concrete & Garage Floor Paint 1 gal.', 1800, './images/gr2.jpg'),
(3, 'Rust-Oleum Epoxyshield Gloss Gray Water-Based Garage Floor Coating Kit 1 gal.', 5300, './images/gr3.jpg'),
(1900, 'Homax Tough As Tile Gloss White Bathtub and Tile Refinishing Kit 32 oz.', 6200, './images/gr4.jpg'),
(1901, 'Rust-Oleum RockSolid Mocha Epoxy Garage Floor Coating Kit 76 oz.', 6200, './images/gr5.jpg'),
(1902, 'Rust-Oleum RockSolid Gray Garage Floor Coating Kit 76 oz.', 4900, './images/gr6.jpg'),
(1903, 'Rust-Oleum EpoxyShield High Gloss Clear Premium Floor Coating Kit 90 oz. ', 1300, './images/gr7.jpg'),
(1904, 'Rust-Oleum Concrete Patch and Repair 24 oz.', NULL, './images/gr8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Rust-Oleum Painters Touch Semi-Gloss White Spray Paint 12 oz. ', 600, './images/h1.jpg'),
(2, 'Rust-Oleum Stops Rust Flat Black Spray Paint 12 oz.', 600, './images/h2.jpg'),
(3, 'Rust-Oleum Stops Rust Semi-Gloss Black Spray Paint 12 oz. ', 600, './images/h3.jpg'),
(4, 'Rust-Oleum Painters Touch Matte Clear Spray Paint 12 oz.', 300, './images/h4.jpg'),
(5, 'Rust-Oleum Stops Rust Gloss White Spray Paint 12 oz. ', 600, './images/h5.jpg'),
(6, 'Ace Premium Satin White Spray Paint 12 oz.', 300, './images/h6.jpg'),
(7, 'Ace Premium Gloss Black Enamel Spray Paint 12 oz. ', 500, './images/h7.jpg'),
(8, 'Rust-Oleum Stops Rust Gloss Black Spray Paint 12 oz.', 600, './images/h8.jpg'),
(9, 'Rust-Oleum Stops Rust Semi-Gloss White Spray Paint 12 oz.', 600, './images/h9.jpg'),
(10, 'Ace Premium Satin Black Enamel Spray Paint 12 oz. ', 300, './images/h10.jpg'),
(11, 'Ace Premium Flat Black Enamel Spray Paint 12 oz. ', 500, './images/h11.jpg'),
(12, 'Ace Premium Gloss White Enamel Spray Paint 12 oz.', 500, './images/h12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `masonry`
--

CREATE TABLE `masonry` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masonry`
--

INSERT INTO `masonry` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Valspar Semi-Transparent Tintable Base 4 Concrete Stain 1 gal. ', 1600, './images/ms1.jpg'),
(2, 'Valspar Fast Prep Transparent Concrete Etching Stain 1 gal.', 1300, './images/ms2.jpg'),
(3, 'Valspar Solid Base 4 Resin Concrete Stain 1 gal. ', 1600, './images/ms3.jpg'),
(4, 'Valspar Solid Base 2 Resin Concrete Stain 1 gal.', 1600, './images/ms4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `metallic`
--

CREATE TABLE `metallic` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metallic`
--

INSERT INTO `metallic` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Rust-Oleum Universal Oil Rubbed Bronze Metallic Spray Paint 11 oz. ', 600, './images/m1.jpg'),
(2, 'Rust-Oleum Universal Black Stainless Steel Metallic Spray Paint 11 oz.', 500, './images/m2.jpg'),
(3, 'Rust-Oleum Universal Pure Gold Metallic Spray Paint 11 oz. ', 700, './images/m3.jpg'),
(4, 'Rust-Oleum Universal Satin Bronze Metallic Spray Paint 11 oz.', 500, './images/m4.jpg'),
(5, 'Rust-Oleum Stops Rust Silver Metallic Spray Paint 11 oz.', 400, './images/m5.jpg'),
(6, 'Rust-Oleum Universal Aged Copper Metallic Spray Paint 11 oz.', 600, './images/m6.jpg'),
(7, 'Rust-Oleum Universal Satin Nickel Metallic Spray Paint 11 oz.', 600, './images/m7.jpg'),
(8, 'Ace Brilliant Bright Gold Spray Paint 11.5 oz.', 500, './images/m8.jpg'),
(9, 'Rust-Oleum Universal Copper Rose Metallic Spray Paint 11 oz.', 500, './images/m9.jpg'),
(10, 'Rust-Oleum Stops Rust Black Night Metallic Spray Paint 11 oz.', 400, './images/m10.jpg'),
(11, 'Rust-Oleum Universal Titanium Silver Metallic Spray Paint 11 oz.', 600, './images/m11.jpg'),
(12, 'Rust-Oleum Stops Rust Cold Gray Galvanizing Compound Spray 20 oz.', 500, './images/m12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mixer`
--

CREATE TABLE `mixer` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mixer`
--

INSERT INTO `mixer` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Ace 4.75 in. W x 24 in. L Steel Paint Mixer For 5 Gallon Containers', 700, './images/mx1.jpg'),
(2, 'Ace 2.75 in. W x 16.75 in. L Steel Paint Mixer For 1 Gallon Containers ', 300, './images/mx2.jpg'),
(3, 'Ace 2.5 in. W x 11.5 in. L Polypropylene Paint Mixer For 1 Gallon Containers', 400, './images/mx3.jpg'),
(4, 'Ace 3 in. W x 18.25 in. L Polypropylene Paint Mixer For 5 Gallon Containers ', 500, './images/mx4.jpg'),
(5, 'Ace 2.75 in. W x 16 in. L Steel Paint Mixer For 1 and 5 Gallon Containers', 400, './images/mx5.jpg'),
(6, 'Allway 4.75 in. W x 24 in. L Steel Paint Mixer For 5 Gallon Containers', 700, './images/mx6.jpg\r\n'),
(7, 'Allway 2.75 in. W x 16.75 in. L Steel Paint Mixer For 1 Gallon Containers', 500, './images/mx7.jpg'),
(8, 'Hyde Mudslinger 3-1/4 in. W x 16 in. L Steel Paint Mixer For 5 Gallon Containers ', 500, './images/mx8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paints`
--

CREATE TABLE `paints` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paints`
--

INSERT INTO `paints` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Benjamin Moore Regal Eggshell Base 1', 3500, './images/p1.jpg'),
(2, 'Clark+Kensington Flat (Non-Glare)', 1600, './images/p2.jpg'),
(3, 'Rust-Oleum Painters Touch Semi-Gloss', 600, './images/p3.jpg'),
(4, 'Insl-x Flat Ceiling White Color Changing Paint', 1500, './images/p6.jpg'),
(5, 'Benjamin Moore Muresco Flat White Ceiling Paint', 8900, './images/p7.jpg'),
(6, 'Benjamin Moore Waterborne Ceiling Paint', 2300, './images/p8.jpg'),
(7, 'Royal Satin High Hiding White Paint', 1600, './images/p11.jpg'),
(8, 'Clark+Kensington Neutral Base Premium Paint', 2000, './images/p10.jpg'),
(9, 'Benjamin Moore Ben Eggshell Base 2', 2500, './images/p9.jpg'),
(10, 'Zinsser Perma-White Satin White Water-Based', 1600, './images/p12.jpg'),
(11, 'Benjamin Moore Aura Eggshell Base', 3900, './images/p13.jpg'),
(12, 'Rust-Oleum Specialty Satin Bar-B-Que Black High Heat', 600, './images/p14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pbrush`
--

CREATE TABLE `pbrush` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pbrush`
--

INSERT INTO `pbrush` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Linzer Assorted in. W Assorted Paint Brush Set', 800, './images/b1.jpg'),
(2, 'Purdy XL 1, 1-1/2 and 2 in. W Assorted Paint Brush Set', 1300, './images/b2.jpg'),
(3, 'Purdy Clearcut Glide 2 in. W Angle Trim Paint Brush', 800, './images/b3.jpg'),
(4, 'Jen 2 in. W Chiseled Paint Brush', 500, './images/b4.jpg'),
(5, 'Linzer Project Select 1 1/2, 2 and 3 in. W Flat Paint Brush Set', 700, './images/b5.jpg'),
(6, 'Wooster Bravo Stainer 4 in. W Flat Paint Brush', 800, './images/b6.jpg'),
(7, 'Cabot 4 in. W Straight Stain Brush', 700, './images/b7.jpg'),
(8, 'Linzer Project Select 2 and 2-1/2 in. W Angle Paint Brush Set', 400, './images/b8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `porch`
--

CREATE TABLE `porch` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porch`
--

INSERT INTO `porch` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Ace Royal Satin Steel Wool Gray Porch & Patio Floor Paint 1 gal. ', 1400, './images/po1.jpg'),
(2, 'Rust-Oleum EpoxyShield Semi-Gloss Silver Gray Solvent-Based Epoxy Epoxy Floor Paint 256 oz.', 8600, './images/po2.jpg'),
(3, 'Rust-Oleum RockSolid Marble Mountain White Floor Coating Kit 80 oz.', 9100, './images/po3.jpg'),
(4, 'Ace Royal Satin Tile Red Porch & Patio Floor Paint 1 gal.', 1400, './images/po4.jpg'),
(5, 'Ace Royal Gloss Steel Wool Gray Porch & Patio Floor Paint 1 gal.', 2400, './images/po5.jpg'),
(6, 'Rust-Oleum RockSolid Marble Stone Obsidian Epoxy Floor Paint 80 oz.', 9100, './images/po6.jpg'),
(7, 'Rust-Oleum RockSolid Pearlescent Pearl Black Epoxy Floor Paint 80 oz. ', 7700, './images/po7.jpg'),
(8, 'Rust-Oleum RockSolid Pearlescent Smoky Blue Epoxy Floor Paint 80 oz.', 7700, './images/po8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `primers`
--

CREATE TABLE `primers` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `primers`
--

INSERT INTO `primers` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'KILZ White Water-Based Primer and Sealer', 2200, './images/p26.jpg'),
(2, 'KILZ Premium White Flat Water-Based Primer and Sealer', 2500, './images/p16.jpg'),
(3, 'Zinsser White Water-Based Acrylic Mold Killing Primer', 1000, './images/p17.jpg'),
(4, 'Zinsser Bulls Eye 123 White Water-Based Styrenated Acrylic Primer and Sealer', 2000, './images/p18.jpg'),
(5, 'Sheetrock First Coat White Flat Latex Primer', 2700, './images/p19.jpg'),
(6, 'KILZ Original White Flat Oil-Based Primer', 800, './images/p20.jpg'),
(7, 'KILZ Original White Flat Oil-Based Primer 13 oz', 500, './images/p21.jpg'),
(8, 'Zinsser Gardz Clear Matte Problem Surface Sealer', 1600, './images/p22.jpg'),
(9, 'X-I-M Peel Bond Clear Acrylic Primer and Sealer', 8700, './images/p23.jpg'),
(10, 'Zinsser Bulls Eye Zero White Smooth Water-Based Acrylic Primer and Sealer', 1600, './images/p24.jpg'),
(11, 'Benjamin Moore Fresh Start White Low Lustre Acrylic Latex Primer', 1900, './images/p25.jpg'),
(12, 'Zinsser Shieldz Universal White Wallcovering Primer', 1300, './images/p26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Benjamin Moore Regal Eggshell Base 1', 3500, './images/p1.jpg'),
(2, 'Clark+Kensington Flat (Non-Glare)', 1600, './images/p2.jpg'),
(4, 'Rust-Oleum Painters Touch Semi-Gloss', 600, './images/p3.jpg'),
(5, 'Wagner SMART Roller 9 in. W Regular Paint Roller Kit', 1500, './images/p4.jpg'),
(6, 'Benjamin Moore Ben Eggshell Base 2', 2500, './images/p9.jpg'),
(7, 'Benjamin Moore Muresco Flat White Ceiling Paint', 8900, './images/p7.jpg'),
(8, 'Sheetrock First Coat White Flat Latex Primer', 2700, './images/p19.jpg'),
(9, 'X-I-M Peel Bond Clear Acrylic Primer and Sealer', 8700, './images/p23.jpg'),
(10, 'Flex Seal Gray Liquid Rubber Sealant Coating', 6800, './images/s1.jpg'),
(11, 'Benjamin Moore Regal Semi-Gloss Base 1 Paint Interior', 3100, './images/s2.jpg'),
(12, 'Benjamin Moore Ben Semi-Gloss Base 1 Paint Interior', 2500, './images/s3.jpg'),
(13, 'Benjamin Moore Ben Semi-Gloss Base 1 Paint Interior', 3400, './images/s4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `proller`
--

CREATE TABLE `proller` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proller`
--

INSERT INTO `proller` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Ace Knit 3/8 in. x 9 in. W Regular Paint Roller Cover 3 pk', 800, './images/b9.jpg'),
(2, 'Purdy Contractor 1st Polyester 3/8 in. x 9 in. W Paint Roller Cover 3 pk', 700, './images/b10.jpg'),
(3, 'Wagner Polyester 9 in. W x 3/8 in. Paint Roller Cover 1 pk', 100, './images/b11.jpg'),
(4, 'Purdy White Dove Dralon 4.5 in. W x 1/4 in. Mini Paint Roller Cover 2 pk', 400, './images/b12.jpg'),
(5, 'Ace 9 in. W Regular Paint Roller Kit Threaded End', 1200, './images/pr1.jpg'),
(6, 'Purdy Premium 9 in. W Regular Paint Roller Kit', 1200, './images/pr2.jpg'),
(7, 'Wagner SMART Roller 9 in. W Regular Paint Roller Kit ', 1400, './images/pr3.jpg'),
(8, 'Linzer 9 in. W Regular Paint Roller Kit Threaded End', 1100, './images/pr4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `confirmpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `user`, `pass`, `confirmpass`) VALUES
(0, 'gieortopar', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `trim`
--

CREATE TABLE `trim` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trim`
--

INSERT INTO `trim` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Benjamin Moore Ben Flat Tintable Base Base 1 Paint Exterior 1 gal. ', 2500, './images/t1.jpg'),
(2, 'Benjamin Moore Ben Low Luster Tintable Base Base 2 Paint Exterior 1 gal.', 2900, './images/t2.jpg'),
(3, 'Benjamin Moore Ben Low Luster Tintable Base Base 1 Paint Exterior 1 gal.', 2900, './images/t3.jpg'),
(4, 'Ace Royal Semi-Gloss Neutral Base House & Trim Paint & Primer 1 gal.', 1800, './images/t4.jpg'),
(5, 'Benjamin Moore Ben Low Luster Tintable Base Base 4 Paint Exterior 1 gal. ', 2500, './images/t5.jpg'),
(6, 'Benjamin Moore Ben Soft Gloss Tintable Base Base 4 Paint Exterior 1 gal.', 2900, './images/t6.jpg'),
(7, 'Benjamin Moore Ben Soft Gloss Tintable Base Base 1 Paint Exterior 1 gal. ', 2900, './images/t7.jpg'),
(8, 'Ace Royal Satin Neutral Base House & Trim Paint & Primer 1 gal.', 1700, './images/t8.jpg'),
(9, 'Benjamin Moore Ben Soft Gloss Tintable Base Base 2 Paint Exterior 1 gal. ', 2900, './images/t9.jpg'),
(10, 'Benjamin Moore Ben Soft Gloss Tintable Base Base 4 Paint Exterior 1 qt.', 1100, './images/t10.jpg'),
(11, 'Benjamin Moore Ben Flat Tintable Base Base 4 Paint Exterior 1 qt.', 1000, './images/t11.jpg'),
(12, 'Benjamin Moore Ben Flat Tintable Base Base 1 Paint Exterior 5 gal.', 11500, './images/t12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `varnish`
--

CREATE TABLE `varnish` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varnish`
--

INSERT INTO `varnish` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Minwax Helmsman Satin Clear Spar Urethane 1 qt.', 1200, './images/v1.jpg'),
(2, 'Minwax Satin Clear Fast-Drying Polyurethane 1 qt.', 900, './images/v2.jpg'),
(3, 'Minwax Satin Clear Polycrylic 1 qt.', 1300, './images/v3.jpg'),
(4, 'Minwax Semi-Gloss Clear Fast-Drying Polyurethane 1 qt.', 1000, './images/v4.jpg'),
(5, 'Minwax Gloss Clear Fast-Drying Polyurethane 1 qt.', 1000, './images/v5.jpg'),
(6, 'Cabot Gold Satin 3471 Sunlit Walnut Deck Varnish 1 gal. ', 2500, './images/v6.jpg'),
(7, 'Minwax Helmsman Satin Clear Spar Urethane 11.5 oz. ', 800, './images/v7.jpg'),
(8, 'Minwax Satin Clear Polyurethane 1 qt.', 1200, './images/v8.jpg'),
(9, 'Minwax Helmsman Semi-Gloss Clear Spar Urethane 1 qt.', 1200, './images/v9.jpg'),
(10, 'Minwax Gloss Clear Polycrylic 1 qt.', 1300, './images/v10.jpg'),
(11, 'Minwax Semi-Gloss Clear Fast-Drying Polyurethane 11.5 oz. ', 600, './images/v11.jpg'),
(12, 'Old Masters Ascend Matte Clear Water-Based Finish 1 qt. ', 1400, './images/v12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wpaint`
--

CREATE TABLE `wpaint` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wpaint`
--

INSERT INTO `wpaint` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Benjamin Moore Regal Eggshell Base 2 Paint Interior 1 gal. ', 3100, './images/wp1.jpg'),
(2, 'Benjamin Moore Regal Eggshell Base 4 Paint Interior 1 gal.', 2900, './images/wp2.jpg'),
(3, 'Benjamin Moore Ben Eggshell Base 1 Paint Interior 1 gal.', 2000, './images/wp3.jpg'),
(4, 'Benjamin Moore Ben Eggshell Base 2 Paint Interior 1 gal. ', 2500, './images/wp4.jpg'),
(5, 'Benjamin Moore Ben Eggshell Base 3 Paint Interior 1 gal.', 2500, './images/wp5.jpg'),
(6, 'Benjamin Moore Ben Eggshell Base 4 Paint Interior 1 gal.', 2500, './images/wp6.jpg'),
(7, 'Magnolia Home by Joanna Gaines Eggshell Tint Base Base 1 Paint and Primer Interior 1 gal.', 2200, './images/wp7.jpg'),
(8, 'Magnolia Home by Joanna Gaines Eggshell Tint Base Base 2 Paint and Primer Interior 1 gal.', 2200, './images/wp8.jpg'),
(9, 'Magnolia Home by Joanna Gaines Eggshell Tint Base Base 3 Paint Interior 1 gal.', 2200, './images/wp9.jpg'),
(10, 'Clark+Kensington Satin Tint Base Ultra White Base Premium Paint Interior 1 gal.', 2000, './images/wp10.jpg'),
(11, 'Clark+Kensington Satin Tint Base Mid-Tone Base Premium Paint Interior 1 gal.', 2000, './images/wp11.jpg'),
(12, 'Clark+Kensington Satin Tint Base Neutral Base Premium Paint Interior 1 gal. ', 2000, './images/wp12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wstain`
--

CREATE TABLE `wstain` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wstain`
--

INSERT INTO `wstain` (`productid`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Klean Strip Transparent Clear Boiled Linseed Oil 5 gal.\r\n', 8200, './images/ws1.jpg'),
(2, 'Watco Rust-Oleum Transparent Teak Oil-Based Teak Oil 1 qt.', 900, './images/ws2.jpg'),
(3, 'Cabot Semi-Transparent Driftwood Gray Water-Based Acrylic Bleaching Stain 5 gal.', 9700, './images/ws3.jpg'),
(4, 'Watco Rust-Oleum Transparent Natural Oil-Based Danish Oil 1 qt. ', 800, './images/ws4.jpg'),
(5, 'Minwax Transparent Amber Oil-Based Tung Oil 1 pt. ', 900, './images/ws5.jpg'),
(6, 'Klean Strip Transparent Clear Boiled Linseed Oil 1 qt. ', 1000, './images/ws6.jpg'),
(7, 'Klean Strip Transparent Clear Boiled Linseed Oil 1 gal.', 2500, './images/ws7.jpg'),
(8, 'Varathane Semi-Transparent Gray Water-Based Weathered Wood Accelerator 1 qt.', 900, './images/ws8.jpg'),
(9, 'Superdeck Transparent Natural Oil-Based Wood Stain 5 gal.', 9400, './images/ws9.jpg'),
(10, 'Varathane Transparent Satin Clear Water-Based Polyurethane 1 qt.', 900, './images/ws10.jpg'),
(11, 'Minwax Transparent White Wash Pickling Water-Based Acrylic Wood Stain 1 qt.', 900, './images/ws11.jpg'),
(12, 'Minwax Helmsman Transparent Amber Oil-Based Teak Oil 1 qt.', 900, './images/ws12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barn`
--
ALTER TABLE `barn`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `brush`
--
ALTER TABLE `brush`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `ceiling`
--
ALTER TABLE `ceiling`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `chalk`
--
ALTER TABLE `chalk`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `fluorescent`
--
ALTER TABLE `fluorescent`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `masonry`
--
ALTER TABLE `masonry`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `metallic`
--
ALTER TABLE `metallic`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `mixer`
--
ALTER TABLE `mixer`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `paints`
--
ALTER TABLE `paints`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `pbrush`
--
ALTER TABLE `pbrush`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `porch`
--
ALTER TABLE `porch`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `primers`
--
ALTER TABLE `primers`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `proller`
--
ALTER TABLE `proller`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `trim`
--
ALTER TABLE `trim`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `varnish`
--
ALTER TABLE `varnish`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `wpaint`
--
ALTER TABLE `wpaint`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `wstain`
--
ALTER TABLE `wstain`
  ADD PRIMARY KEY (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barn`
--
ALTER TABLE `barn`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brush`
--
ALTER TABLE `brush`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cabinet`
--
ALTER TABLE `cabinet`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ceiling`
--
ALTER TABLE `ceiling`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chalk`
--
ALTER TABLE `chalk`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fluorescent`
--
ALTER TABLE `fluorescent`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1905;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `masonry`
--
ALTER TABLE `masonry`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `metallic`
--
ALTER TABLE `metallic`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mixer`
--
ALTER TABLE `mixer`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `paints`
--
ALTER TABLE `paints`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pbrush`
--
ALTER TABLE `pbrush`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `porch`
--
ALTER TABLE `porch`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `primers`
--
ALTER TABLE `primers`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `proller`
--
ALTER TABLE `proller`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trim`
--
ALTER TABLE `trim`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `varnish`
--
ALTER TABLE `varnish`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wpaint`
--
ALTER TABLE `wpaint`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wstain`
--
ALTER TABLE `wstain`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
