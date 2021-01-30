-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 12:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updationDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin@demo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-30 10:58:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` text NOT NULL,
  `number` varchar(250) NOT NULL,
  `travel_time` varchar(50) NOT NULL,
  `car` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `location`, `number`, `travel_time`, `car`, `time`) VALUES
(29, 'Mohammad  Shahabuddin', 'Chittagong', '01680850224', '2021-02-04', 'Tesla', '2021-01-30 11:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `image`, `time`) VALUES
(8, 'Tesla', 'c20bbc24dc2faf400dbbca6e39e9e5a9.jpg', '2021-01-30 10:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `title` varchar(2250) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `caption` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `body`, `image`, `caption`, `time`) VALUES
(3, 'Tesla in India', 'Tesla Motors, one of the biggest names in the automobile industry, is an American electric car manufacturer. The company was founded by Martin Eberhard and Marc Tarpenning in 2003. The company is named after Nikolas Tesla, a physicist and an electrical engineer. The AC induction motor technology was patented by Nikolas Tesla in 1888.The initial funding was majorly led by Elon Musk, the third member of the company. Now, he is the main face behind Tesla Motors and the CEO since 2008. The company is currently the best selling plug-in and battery electric car manufacturer in the world. It now exports its models to over 30 countries.Tesla Inc started its stint with the Roadster model in 2008. The company aimed to commercialise the usage of electric vehicles and make people move towards a greener path. It was built from the bodyshell of a Lotus Elise and came with a range of more than 245 miles (390 kilometres).The Tesla Roadster delivered up to 288 horsepower and could do the 0-100 sprint in just 3.8 seconds. Lotus had allocated only 2500 units of the Elise to Tesla and in 3 years, all of them were sold out. That’s when Tesla launched its first completely in-house developed all-electric car - Model S.The model S was launched in 2012 for a much affordable price. It was a five-door luxury sedan and came in many variants. Its latest long-range variant offers a range of more than 647 kilometres. In 2015, Tesla launched the Model X, its mid-sized electric SUV offering. By this time, Tesla also launched its Autopilot driving assistance system. It came with the Model S as well as the model X.The Tesla Model 3 is the best selling electric car from the manufacturer, since its launch in 2017. It faces a high waiting period in most of the countries sold. In just a week of it being unveiled, more than 3 lakh reservations were made for it. The base variant of the Model 3 is available for as low as 37,990 dollars.Over the past decade, Tesla has grown substantially in terms of market share and revenue. It now generates annual revenue of over 20 million dollars. After tapping into many foreign markets, the American giant is eyeing the Indian market. Tesla’s first offering in India, Model 3, will be bought through the CBU (completely built unit) route i.e. it will be fully imported.Its prices are expected to be upwards of Rs 60 lakh. However, the government is expected to offer certain incentives and rebates on it. Once it receives a good response, Tesla might move to local manufacturing to further reduce prices.\r\n\r\nThe Tesla brand has decided to add to a prospective buyer’s choices by entering the Indian market. The Tesla brand is well-known for its Tesla Cybertruck, Tesla Model 3, Tesla Model S, Tesla Model X, Tesla Model Y cars majorly. The first offering from the Tesla brand is likely to tug it out in the Pickup Trucks segment.', 'c20bbc24dc2faf400dbbca6e39e9e5a9.jpg', 'tesla', '2021-01-30 11:00:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
