-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2020 at 11:52 PM
-- Server version: 5.7.31-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemical_PACHISIA`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

CREATE TABLE `blog_data` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `title`, `content`, `image`, `time`) VALUES
(1, 'Sample Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis rhoncus urna neque viverra justo nec. At tellus at urna condimentum. Vitae et leo duis ut diam quam nulla. Velit ut tortor pretium viverra suspendisse. Sagittis purus sit amet volutpat consequat. Sit amet nulla facilisi morbi tempus iaculis. Lectus arcu bibendum at varius vel pharetra vel. Et leo duis ut diam quam nulla porttitor massa id. Egestas erat imperdiet sed euismod nisi porta lorem. Est lorem ipsum dolor sit amet. Scelerisque in dictum non consectetur a erat nam at lectus. Faucibus a pellentesque sit amet porttitor eget dolor morbi non.\r\n\r\nErat pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Nibh tortor id aliquet lectus proin nibh nisl. Porttitor lacus luctus accumsan tortor. Id venenatis a condimentum vitae sapien pellentesque habitant morbi. Pulvinar pellentesque habitant morbi tristique senectus et. Sed risus pretium quam vulputate dignissim suspendisse in est ante. Bibendum ut tristique et egestas quis ipsum. Pellentesque elit eget gravida cum. Dolor sit amet consectetur adipiscing elit ut aliquam purus. Aliquam ut porttitor leo a diam sollicitudin tempor id. Gravida neque convallis a cras semper auctor neque vitae. Pharetra convallis posuere morbi leo. Fringilla ut morbi tincidunt augue interdum velit euismod.\r\n\r\nViverra nam libero justo laoreet sit amet cursus sit. Elit pellentesque habitant morbi tristique senectus et netus et. Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat. In metus vulputate eu scelerisque felis imperdiet proin fermentum. Id consectetur purus ut faucibus pulvinar elementum integer enim. Metus aliquam eleifend mi in nulla posuere. Ut sem viverra aliquet eget. Dolor magna eget est lorem ipsum. Semper risus in hendrerit gravida rutrum quisque non.', '', '2020-11-15 17:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `chem` varchar(100) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `msg` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `resp` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `chem`, `qty`, `msg`, `timestamp`, `resp`) VALUES
(10, 'Tushar Tyagi', 'abd@gmail.com', '123456789', 'dkwnb', '8', 'bhgfchg', '2020-09-01 15:33:08', 0),
(11, 'Tushar Deshwal', 'tdeshwal0001@gmail.com', '8800201222', 'Sodium Hypochlorite', '1', 'Checking promptness of reverting back to a customer.', '2020-09-03 06:21:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `time`) VALUES
('jatin', 'pachisia_chemicals@123', '2020-08-22 21:10:13'),
('Shreyans', 'Jain', '2020-02-27 08:19:39'),
('test', 'test', '2020-03-29 10:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(5) NOT NULL,
  `name` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `company` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `query` text COLLATE utf8_swedish_ci,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `company`, `query`, `time`) VALUES
(14, 'Tushar', 'abccd@gmail.com', 'sanjay chemicals', '2 litres h2so4', '2020-09-01 15:16:40'),
(15, 'Tushar Deshwal', 'tdeshwal0001@gmail.com', 'Self employed', 'Inspecting our platform.', '2020-09-03 06:16:01'),
(16, 'Williambab', 'no-replyVateNelm@gmail.com', 'google', 'Hi!  chemicalhome.in \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd prÐ¾pÐ¾sÐ°l whÐ¾lly lÐ°wfully? \r\nWÐµ prÐ¾ffÐµr Ð° nÐµw lÐµgitimÐ°tÐµ mÐµthÐ¾d Ð¾f sÐµnding businÐµss prÐ¾pÐ¾sÐ°l thrÐ¾ugh ÑÐ¾ntÐ°Ñt fÐ¾rms. SuÑh fÐ¾rms Ð°rÐµ lÐ¾ÑÐ°tÐµd Ð¾n mÐ°ny sitÐµs. \r\nWhÐµn suÑh mÐµssÐ°gÐµs Ð°rÐµ sÐµnt, nÐ¾ pÐµrsÐ¾nÐ°l dÐ°tÐ° is usÐµd, Ð°nd mÐµssÐ°gÐµs Ð°rÐµ sÐµnt tÐ¾ fÐ¾rms spÐµÑifiÑÐ°lly dÐµsignÐµd tÐ¾ rÐµÑÐµivÐµ mÐµssÐ°gÐµs Ð°nd Ð°ppÐµÐ°ls. \r\nÐ°lsÐ¾, mÐµssÐ°gÐµs sÐµnt thrÐ¾ugh fÐµÐµdbÐ°Ñk FÐ¾rms dÐ¾ nÐ¾t gÐµt intÐ¾ spÐ°m bÐµÑÐ°usÐµ suÑh mÐµssÐ°gÐµs Ð°rÐµ ÑÐ¾nsidÐµrÐµd impÐ¾rtÐ°nt. \r\nWÐµ Ð¾ffÐµr yÐ¾u tÐ¾ tÐµst Ð¾ur sÐµrviÑÐµ fÐ¾r frÐµÐµ. WÐµ will sÐµnd up tÐ¾ 50,000 mÐµssÐ°gÐµs fÐ¾r yÐ¾u. \r\nThÐµ ÑÐ¾st Ð¾f sÐµnding Ð¾nÐµ milliÐ¾n mÐµssÐ°gÐµs is 49 USD. \r\n \r\nThis lÐµttÐµr is ÑrÐµÐ°tÐµd Ð°utÐ¾mÐ°tiÑÐ°lly. PlÐµÐ°sÐµ usÐµ thÐµ ÑÐ¾ntÐ°Ñt dÐµtÐ°ils bÐµlÐ¾w tÐ¾ ÑÐ¾ntÐ°Ñt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693', '2020-09-13 04:28:34'),
(17, 'Sulaiman Taniji', 'profaukdave@gmail.com', 'google', 'Dear CEO chemicalhome.in \r\nI have contacted you in your feedback form with an offer to manage a business of high remuneration. \r\nHere is the placement: \r\nValue of funds: ONE HUNDRED AND FORTY MILLION EUROS. \r\nLocation of funds:  BANK IN THE UK. \r\nPlacement opens to:  COMPANIES/INDIVIDUALS. \r\nFund disbursement:  AS SOON AS POSSIBLE. \r\nArea of investment interest: FOREX, CRYPTOCURRENCIES, REAL ESTATE, AGRICULTURE, INDUSTRY, HOTEL AND OTHERS. \r\nPurpose of funds:  LONG TERM INVESTMENT (AT LEAST) 10% ROI/PA. \r\nFunds owner:    RETIRED TRADER \r\nProof of fund:   READILY AVAILABLE UPON DEMAND. \r\nBenefits: 10% Return on Investment (ROI) will be your benefit. If you are capable and ready, kindly reply as soon as possible stating your full names, country of residence, occupation, age and direct phone number. Please, reach out for full details:  maerskinsurancebroker@gmail.com \r\nUpon your reply you will be contacted further from our companyâ€™s email address. \r\n \r\nWarm regards, \r\nSulaiman Taniji.', '2020-09-19 17:52:48'),
(18, 'Jerrygaick', 'uhgffvd@mail.ru', 'google', '<a href=\"https://account.admitad.com/en/promo/?ref=be611b327e\">You want to know: \r\nWhat is Admitad? \r\nIt is a network that helps both publishers and advertisers to establish mutually beneficial cooperation. We will provide you with a wide range of ad creatives, statistics, technical support, various additional services and will make everything so that you have a decent income. \r\n \r\nYou will surely ask: \r\nÂ«Why Admitad is so good?Â» \r\n \r\nQuick payments \r\nWithdraw money via WebMoney within 5 minutes or withdraw your earnings via bank or PayPal. \r\nHonest cooperation \r\nWe do not charge fees for withdrawals, but instead share secrets how to earn more money. \r\nBonus program \r\nMore than a hundred exclusive programs to Admitad publishers. The hardest-working affiliates receive bonuses and higher rates from advertisers. \r\nThe best tools \r\nWe provide widgets, ReTag container, product feeds, promo codes and other tools and technologies to increase your conversion rate and get maximum feedback from your audience. \r\n</a>.', '2020-09-26 18:48:16'),
(19, 'Mike Carroll\r\n', 'no-replyJuits@google.com', 'google', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Carroll\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', '2020-09-29 17:09:48'),
(20, 'Maike Reine-Berg', 'maikereine.mmr@gmail.com', 'google', 'My name is Maike Reine-Berg, Customer Service Representative for AAA Structured Finance Ltd, thank you for your time, my company offers project financing and lending services, do you have any project that requires funding at the moment? You need a business or personal loan? We are ready to work with you on a more transparent approach. Contact Us for more information via email:  Reine.berg@outlook.com.', '2020-09-30 12:13:19'),
(21, 'James Turner\r\n', 'no-reply@hilkom-digital.de', 'google', 'HÐµllÐ¾! \r\nI have just checked chemicalhome.in for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2020-10-02 14:14:12'),
(22, 'Marquiskab', 'info@deoleodigitalpublishing.com', 'google', 'HAVE YOU EVER WANTED TO LEARN HOW TO CLOSE 100% OF YOUR CONSULTATIONS & HELP YOUR COMPANY  WIN IN OUR NEW  COVID-19  ECONOMY? \r\n \r\nSEE THE OFFICIAL TRAILER:@ \r\nThe Author site https://www.tonydeoleo.com \r\n \r\n \r\nDownload your E-book Copy Now @ The Author official site: \r\nhttps://www.tonydeoleo.com \r\nAmazon : https://www.amazon.com/dp/195226359X \r\nBarns&Nobles : https://m.barnesandnoble.com/w/closing-100-of-your-fitness-consultations-tony-deoleo/1137240205', '2020-10-04 14:29:09'),
(23, 'James King\r\n', 'no-reply@hilkom-digital.de', 'google', 'HÐµllÐ¾! \r\nI have just checked chemicalhome.in for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2020-10-06 17:41:26'),
(24, 'Williekef', 'turbomavro@gmail.com', 'google', 'Welcome to the world of short term bitcoin investments.Â  \r\n \r\nToday \"Turbo MMM\" is number 1 in the list of investment blockchain projects! \r\nThe innovative program provides an opportunity to participate in short-term investment in the cryptocurrency market.Â  \r\n \r\n \r\nTop up your balance by at least 0.005 and get profit. \r\nEvery 2 days \"Turbo MMM\" adds +10% to your bitcoin balance to your wallet. \r\nThe program is available immediately after registration on the official website.Â Â  \r\n \r\nFor example: invest 0.1 bitcoins today, in 2 days you will receive 0.11 bitcoins in your personal bitcoin wallet. \r\n \r\nRe-investment is available.Â  \r\n \r\n \r\n \r\n \r\nGet a bonus when registering in the amount of 0.001 BTC and become a full member of the Turbo MMM project. \r\n \r\n \r\nRegister and get a bonus: https://bit.ly/3h8c9Pu \r\n', '2020-10-09 19:14:19'),
(25, 'WilliamSeill', 'abelbreath456@gmail.com', 'google', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', '2020-10-27 03:08:13'),
(26, 'Mike Saunder\r\n', 'no-replyJuits@google.com', 'google', 'Hi there \r\n \r\nIf you want to get ahead of your competition, have a higher Domain Authority score. Its just simple as that. \r\nWith our service you get Domain Authority above 50 points in just 30 days. \r\n \r\nThis service is guaranteed \r\n \r\nFor more information, check our service here \r\nhttps://www.monkeydigital.co/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nN E W : \r\nDA60 is now available here \r\nhttps://www.monkeydigital.co/product/moz-da60-seo-plan/ \r\n \r\n \r\nthank you \r\nMike Saunder\r\n \r\nMonkey Digital \r\nsupport@monkeydigital.co', '2020-10-28 09:51:29'),
(27, 'ContactDen', 'no-replyVateNelm@gmail.com', 'google', 'Hi!  chemicalhome.in \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd prÐ¾pÐ¾sÐ°l fully lÐµgit? \r\nWÐµ prÐ¾vidÐµ Ð° nÐµw wÐ°y Ð¾f sÐµnding businÐµss prÐ¾pÐ¾sÐ°l thrÐ¾ugh fÐµÐµdbÐ°Ñk fÐ¾rms. SuÑh fÐ¾rms Ð°rÐµ lÐ¾ÑÐ°tÐµd Ð¾n mÐ°ny sitÐµs. \r\nWhÐµn suÑh businÐµss prÐ¾pÐ¾sÐ°ls Ð°rÐµ sÐµnt, nÐ¾ pÐµrsÐ¾nÐ°l dÐ°tÐ° is usÐµd, Ð°nd mÐµssÐ°gÐµs Ð°rÐµ sÐµnt tÐ¾ fÐ¾rms spÐµÑifiÑÐ°lly dÐµsignÐµd tÐ¾ rÐµÑÐµivÐµ mÐµssÐ°gÐµs Ð°nd Ð°ppÐµÐ°ls. \r\nÐ°lsÐ¾, mÐµssÐ°gÐµs sÐµnt thrÐ¾ugh ÑÐ¾ntÐ°Ñt FÐ¾rms dÐ¾ nÐ¾t gÐµt intÐ¾ spÐ°m bÐµÑÐ°usÐµ suÑh mÐµssÐ°gÐµs Ð°rÐµ ÑÐ¾nsidÐµrÐµd impÐ¾rtÐ°nt. \r\nWÐµ Ð¾ffÐµr yÐ¾u tÐ¾ tÐµst Ð¾ur sÐµrviÑÐµ fÐ¾r frÐµÐµ. WÐµ will sÐµnd up tÐ¾ 50,000 mÐµssÐ°gÐµs fÐ¾r yÐ¾u. \r\nThÐµ ÑÐ¾st Ð¾f sÐµnding Ð¾nÐµ milliÐ¾n mÐµssÐ°gÐµs is 49 USD. \r\n \r\nThis Ð¾ffÐµr is ÑrÐµÐ°tÐµd Ð°utÐ¾mÐ°tiÑÐ°lly. PlÐµÐ°sÐµ usÐµ thÐµ ÑÐ¾ntÐ°Ñt dÐµtÐ°ils bÐµlÐ¾w tÐ¾ ÑÐ¾ntÐ°Ñt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp - +375259112693', '2020-11-03 22:09:52'),
(28, 'James Adamson\r\n', 'no-reply@hilkom-digital.de', 'google', 'GÐ¾Ð¾d dÐ°y! \r\nI have just checked chemicalhome.in for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2020-11-04 15:49:03'),
(29, 'Global Blue', 'kelstewart1414@gmail.com', 'google', 'How would you like to make money by simply driving your car advertising for Global Blue. \r\nWe are currently seeking to employ individualâ€™s worldwide. \r\nYou will receive an up front payment of $300 as soon you have been certified. \r\n \r\nContact us by email, with the following details, if you are interested in these offer for more details. \r\n \r\nFull Name: \r\nAddress: \r\nCity: \r\nState: \r\nZip code: \r\nCountry: \r\nMake of car/ year: \r\nTelephone numbers: \r\n \r\nYou are to send the above requested information to your contact Agent indicating the Agent No: 4141 \r\nName :- Kelvin Stewart \r\nEmail :- kelstewart1414@gmail.com \r\nWe shall be contacting you as soon as we receive the requested information. \r\n \r\nJacques Stern \r\n \r\nExecutive, \r\nGlobal Blue Promo(TM)', '2020-11-04 22:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_data`
--
ALTER TABLE `blog_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_data`
--
ALTER TABLE `blog_data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
