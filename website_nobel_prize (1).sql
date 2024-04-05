-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 05, 2024 lúc 07:14 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_nobel_prize`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `img_banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `cartegory_id`, `brand_name`, `img_banner`) VALUES
(1, 11, '  Physics Prize  ', 'z5295849666181_7edefed1815cbe5535a953c9f2a6b2c5.jpg'),
(2, 11, '  Chemistry Prize  ', 'z5296032433886_203dde534865cda499d54eb7201116b7.jpg'),
(3, 11, ' Medicine Prize ', 'z5296037099429_d09706dc8f1890e2ff364549b2cf6765.jpg'),
(4, 11, ' Peace Prize ', 'z5296035248871_5bbe91e70507a0b57f317a7af548c5bf.jpg'),
(5, 12, 'Physics Prize', ''),
(6, 12, 'Literature Prize', ''),
(7, 13, '  Alfred Nobel’s life  ', 'pf-alfred-bust.jpg'),
(8, 13, ' Alfred Nobel’s will ', 'z5313748670753_e3a3079f4dc12db021b023e4ac2641eb.jpg'),
(9, 14, 'Press', ''),
(10, 14, 'In-depth', ''),
(11, 11, 'Prize in Economic Sciences', 'z5296014005380_a762bc729c326b8ff85779666a852fa5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartegory`
--

CREATE TABLE `tbl_cartegory` (
  `cartegory_id` int(11) NOT NULL,
  `cartegory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartegory`
--

INSERT INTO `tbl_cartegory` (`cartegory_id`, `cartegory_name`) VALUES
(13, 'Alfred Nobel'),
(14, 'News & insights'),
(11, 'Nobel Prizes & Laureates'),
(12, 'Nomination');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_content_home`
--

CREATE TABLE `tbl_content_home` (
  `content_home_id` int(11) NOT NULL,
  `name_content` varchar(255) NOT NULL,
  `name_topic` varchar(255) NOT NULL,
  `name_prize` varchar(255) NOT NULL,
  `name_img` varchar(255) NOT NULL,
  `detail_content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_content_home`
--

INSERT INTO `tbl_content_home` (`content_home_id`, `name_content`, `name_topic`, `name_prize`, `name_img`, `detail_content`) VALUES
(2, 'Nobel Prize awarded work', 'Nobel Prize in Chemistry 2003', 'The discovery of water channels', 'z5274978317277_21fdfb74d0f1c4fd98848a2f5b9114d4.jpg', 'The world’s most efficient recycling plant, the human kidney, uses special channels to recover water from urine our body produces every day. For years no one knew what the channels looked like, but in 1990 Peter Agre isolated a protein he proved was the sought-after water canal. He named the protein aquaporin, “water pore”. Agre received the 2003 Nobel Prize in Chemistry “for the discovery of water channels”.'),
(3, 'Watch Nobel Minds', '2023 Nobel Prize', '2023 Nobel Prize laureates in discussion', '151216-landscape-medium-2x.jpg', 'Watch the laureates in a discussion about their discoveries and achievements, and how these might find a practical application. Nobel Minds is hosted by the BBC’s Zeinab Badawi.'),
(4, 'Nobel Prize nominations', 'Nobel Peace Prize 2024', '2024 Nobel Peace Prize nominations', '125610-landscape-medium-2x.jpg', 'The Norwegian Nobel Committee received a total of 285 candidates for the 2024 Nobel Peace Prize. 89 of these are organisations.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_generality`
--

CREATE TABLE `tbl_generality` (
  `brand_id` int(11) NOT NULL,
  `generality` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_generality`
--

INSERT INTO `tbl_generality` (`brand_id`, `generality`) VALUES
(0, '“The said interest shall be divided into five equal parts, which shall be apportioned as follows: /- – -/ one part to the person who shall have made the most important discovery within the domain of physiology or medicine …” (Excerpt from the will of Alfred Nobel)\r\n\r\nAlfred Nobel had an active interest in medical research. Through Karolinska Institutet, he came into contact with Swedish physiologist Jöns Johansson around 1890. Johansson worked in Nobel’s laboratory in Sevran, France during a brief period the same year. Physiology or medicine was the third prize area Nobel mentioned in his will.\r\n\r\nThe Nobel Prize in Physiology or Medicine is awarded by the Nobel Assembly at Karolinska Institutet, Stockholm, Sweden.\r\n\r\nSee all medicine laureates or learn more about the nomination process.'),
(1, 'About the prize\r\n“The said interest shall be divided into five equal parts, which shall be apportioned as follows: /- – -/ one part to the person who shall have made the most important discovery or invention within the field of physics …” (Excerpt from the will of Alfred Nobel)\r\n\r\nPhysics was the prize area which Alfred Nobel mentioned first in his will from 1895. At the end of the nineteenth century, many people considered physics as the foremost of the sciences, and perhaps Nobel saw it this way as well. His own research was also closely tied to physics.\r\n\r\nThe Nobel Prize in Physics is awarded by the Royal Swedish Academy of Sciences, Stockholm, Sweden.\r\n\r\nSee all physics laureates or learn more about the nomination process.'),
(2, '“The said interest shall be divided into five equal parts, which shall be apportioned as follows: one part to the person who shall have made the most important chemical discovery or improvement…”  (Excerpt from the will of Alfred Nobel.)\r\n\r\nChemistry was the most important science for Alfred Nobel’s own work. The development of his inventions as well as the industrial processes he employed were based upon chemical knowledge. Chemistry was the second prize area that Nobel mentioned in his will.\r\n\r\nThe Nobel Prize in Chemistry is awarded by the Royal Swedish Academy of Sciences, Stockholm, Sweden.\r\n\r\nSee all chemistry laureates or learn about the nomination process.'),
(3, '“The said interest shall be divided into five equal parts, which shall be apportioned as follows: /- – -/ one part to the person who shall have made the most important discovery within the domain of physiology or medicine …” (Excerpt from the will of Alfred Nobel)\r\n\r\nAlfred Nobel had an active interest in medical research. Through Karolinska Institutet, he came into contact with Swedish physiologist Jöns Johansson around 1890. Johansson worked in Nobel’s laboratory in Sevran, France during a brief period the same year. Physiology or medicine was the third prize area Nobel mentioned in his will.\r\n\r\nThe Nobel Prize in Physiology or Medicine is awarded by the Nobel Assembly at Karolinska Institutet, Stockholm, Sweden.\r\n\r\nSee all medicine laureates or learn more about the nomination process.'),
(4, '“The said interest shall be divided into five equal parts, which shall be apportioned as follows: /- – -/ one part to the person who shall have done the most or the best work for fraternity between nations, the abolition or reduction of standing armies and for the holding and promotion of peace congresses.”  (Excerpt from the will of Alfred Nobel)\r\n\r\nAlfred Nobel showed a big interest in social issues and was engaged in the peace movement. His acquaintance with Bertha von Suttner, who was a driving force in the international peace movement in Europe and later awarded the Peace Prize, influenced his views on peace. Peace was the fifth and final prize area that Nobel mentioned in his will. The Nobel Peace Prize is awarded by a committee elected by the Norwegian Parliament (Stortinget).\r\n\r\nSee all peace prize laureates or learn about the nomination process.'),
(11, 'In 1968, Sveriges Riksbank (Sweden’s central bank) established the Prize in Economic Sciences in Memory of Alfred Nobel, founder of the Nobel Prize. The prize is based on a donation received by the Nobel Foundation in 1968 from Sveriges Riksbank on the occasion of the bank’s 300th anniversary. The first prize in economic sciences was awarded to Ragnar Frisch and Jan Tinbergen in 1969.\r\n\r\nThe prize in economic sciences is awarded by the Royal Swedish Academy of Sciences, Stockholm, Sweden, according to the same principles as for the Nobel Prizes that have been awarded since 1901.\r\n\r\nSee all economic sciences laureates or learn about the nomination process.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quick_fact`
--

CREATE TABLE `tbl_quick_fact` (
  `brand_id` int(11) NOT NULL,
  `prize_quantity` int(11) NOT NULL,
  `winner_quantity` int(11) NOT NULL,
  `women_quantity` int(11) NOT NULL,
  `youngest_age` int(11) NOT NULL,
  `oldest_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quick_fact`
--

INSERT INTO `tbl_quick_fact` (`brand_id`, `prize_quantity`, `winner_quantity`, `women_quantity`, `youngest_age`, `oldest_age`) VALUES
(1, 117, 225, 5, 25, 96),
(2, 115, 194, 8, 35, 97),
(3, 114, 227, 13, 32, 87),
(4, 104, 141, 19, 17, 87),
(11, 55, 93, 3, 46, 90);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_winner_prize`
--

CREATE TABLE `tbl_winner_prize` (
  `winner_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `winner_name` varchar(255) NOT NULL,
  `prize_name` varchar(255) NOT NULL,
  `prize_year` int(11) NOT NULL,
  `prize_detail` varchar(500) NOT NULL,
  `prize_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_winner_prize`
--

INSERT INTO `tbl_winner_prize` (`winner_id`, `brand_id`, `winner_name`, `prize_name`, `prize_year`, `prize_detail`, `prize_img`) VALUES
(4, 1, 'Albert Einstein', 'The Nobel Prize in Physics', 1921, 'for his services to Theoretical Physics, and especially for his discovery of the law of the photoelectric effect.', 'einstein.jpg'),
(5, 1, 'Marie Curie, née Skłodowska', 'The Nobel Prize in Physics', 1903, 'in recognition of the extraordinary services they have rendered by their joint researches on the radiation phenomena discovered by Professor Henri Becquerel.', 'Marie Curie.jpg'),
(6, 1, 'Niels Henrik David Bohr', 'The Nobel Prize in Physics', 1922, 'for his services in the investigation of the structure of atoms and of the radiation emanating from them.', 'Niels Henrik David Bohr.jpg'),
(7, 1, 'Joseph John Thomson', 'The Nobel Prize in Physics', 1906, 'in recognition of the great merits of his theoretical and experimental investigations on the conduction of electricity by gases.', 'Joseph John Thomson.jpg'),
(8, 2, 'Ernest Rutherford', 'The Nobel Prize in Chemistry ', 1908, 'for his investigations into the disintegration of the elements, and the chemistry of radioactive substances', 'Ernest Rutherford.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  ADD PRIMARY KEY (`cartegory_id`),
  ADD UNIQUE KEY `cartegory_name_uni` (`cartegory_name`);

--
-- Chỉ mục cho bảng `tbl_content_home`
--
ALTER TABLE `tbl_content_home`
  ADD PRIMARY KEY (`content_home_id`);

--
-- Chỉ mục cho bảng `tbl_generality`
--
ALTER TABLE `tbl_generality`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_quick_fact`
--
ALTER TABLE `tbl_quick_fact`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_winner_prize`
--
ALTER TABLE `tbl_winner_prize`
  ADD PRIMARY KEY (`winner_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_content_home`
--
ALTER TABLE `tbl_content_home`
  MODIFY `content_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_quick_fact`
--
ALTER TABLE `tbl_quick_fact`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_winner_prize`
--
ALTER TABLE `tbl_winner_prize`
  MODIFY `winner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
