-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-08-06 16:39:38
-- 伺服器版本: 10.1.34-MariaDB
-- PHP 版本： 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sea`
--

-- --------------------------------------------------------

--
-- 資料表結構 `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `img1` text COLLATE utf8_unicode_ci,
  `img2` text COLLATE utf8_unicode_ci,
  `img3` text COLLATE utf8_unicode_ci,
  `img4` text COLLATE utf8_unicode_ci,
  `img5` text COLLATE utf8_unicode_ci,
  `img6` text COLLATE utf8_unicode_ci,
  `link1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `banner`
--

INSERT INTO `banner` (`id`, `created_at`, `updated_at`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`) VALUES
(1, '2017-07-01 18:47:23', '2018-07-20 15:16:56', '/elfinder/files/紅斑梯型蟹.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `content_zh` text COLLATE utf8_unicode_ci,
  `content_en` text COLLATE utf8_unicode_ci,
  `content_kh` text COLLATE utf8_unicode_ci,
  `name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `content`
--

INSERT INTO `content` (`id`, `created_at`, `updated_at`, `content_zh`, `content_en`, `content_kh`, `name`) VALUES
(1, '0000-00-00 00:00:00', '2018-02-25 13:18:03', '<p>關於我們</p>\r\n\r\n<p>國立海洋生物博物館產學合作中心致力於將研究成果商業化，並加強連接人與海洋的關係。我們的目標是培育和創造新的商業模式和產業，並支援他們不斷獲得商業價值。此外，我們將規劃以海洋印象開發海洋文創商品。以文化創意為理念設計出具有文化性、創意性、紀念性、實用性的文創商品，提供遊客有更多的紀念商品選擇，並提昇海生館的創新形象</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The NMMBA Industry-Academia Collaboration Center is making efforts to use research for practical, commercial purposes, and ensure human actions benefit oceans. Our goal is to breed and foster new business models and industries, and help them gain business value. Furthermore, we plan to make an impression on marine research and develop cultural, creative products. We plan to design cultural, creative, memorable, and practical products. We will provide tourists with information regarding commodity options, and promote NMMBA&rsquo;s ideas and innovations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\"><span style=\"color:#0000FF\"><span style=\"font-size:24px\"><strong>海洋生物博物館產學中心主要業務工作</strong>&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align: center;\">業務工作細項 project</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:114.42%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>1</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>處理產業與博物館合作計劃案。</p>\r\n\r\n			<p><strong>Processing industry applications: cooperative museum proposals.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>2</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>建立博物館、產業與大學之間的橋樑。</p>\r\n\r\n			<p><strong>Building a bridge between industries, museums, and universities.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>3</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>鼓勵研究人員投入於產業研究。</p>\r\n\r\n			<p><strong>Encouraging researchers to devote time to the industry.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>4</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>組織博物館、大學和產業策略聯盟。</p>\r\n\r\n			<p><strong>Organizing a strategic alliance between museums, universities, and industries.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>5</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>專利的歸檔、管理和審查。</p>\r\n\r\n			<p><strong>Filing and managing patents.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>6</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>處理技術轉移和專利申請。</p>\r\n\r\n			<p><strong>Processing technology transfer applications and patent filings.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:8.74%\">\r\n			<p><strong>7</strong></p>\r\n			</td>\r\n			<td style=\"width:91.26%\">\r\n			<p>海洋文創商品的設計和開發</p>\r\n\r\n			<p><strong>Designing and developing cultural and creative marine products.</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:57px; width:8.74%\">\r\n			<p><strong>8</strong></p>\r\n			</td>\r\n			<td style=\"height:57px; width:91.26%\">\r\n			<p>提供創業諮詢。</p>\r\n\r\n			<p><strong>Providing consultations for start-up companies.</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, '關於我們'),
(2, '0000-00-00 00:00:00', '2018-02-26 16:31:43', '<p>組織架構</p>\r\n\r\n<p>產學中心成員</p>\r\n\r\n<table border=\"3\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E8%98%87%E4%B8%BB%E4%BB%BB.jpg\" style=\"height:369px; width:260px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>蘇瑞欣</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>產學中心主任</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>1326、5118</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>x2219@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams; 推動產學合作</p>\r\n\r\n			<p>&diams; 專利技轉相關業務</p>\r\n\r\n			<p>&diams; 指導辦理創新育成</p>\r\n\r\n			<p>&diams; 繁養殖生物販售咨詢</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E5%8A%89%E7%B6%93%E7%90%86.jpg\" style=\"height:320px; width:253px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>劉英宜</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>產品開發行銷部經理</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>5009、5124</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>liuyy@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;文創商品開發及製作</p>\r\n\r\n			<p>&diams;產學合作中心內部產品之經營管理</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E8%94%A3%E5%B2%B3%E6%A1%90.jpg\" style=\"height:369px; width:245px\" /></p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>蔣岳桐</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>專案人員</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>5117</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>tung@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;中心相關帳務核銷，銷售統計及財產管理</p>\r\n\r\n			<p>&diams;研發成果專利簽約申請及專利維護管理</p>\r\n\r\n			<p>&diams;各式補助及委託計畫借款申請核章，中心公文收發及計畫結案歸檔</p>\r\n\r\n			<p>&diams;行政業務協調聯繫及委員會開會聯絡事宜</p>\r\n\r\n			<p>&diams;產學中心網頁管理維護</p>\r\n\r\n			<p>&diams;文書處理</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E8%91%89%E4%BF%8A%E8%B6%B3.jpg\" style=\"height:478px; width:264px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>葉俊足</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>專案人員</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>6118</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>money3@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;展場商品銷售</p>\r\n\r\n			<p>&diams;櫥窗陳列</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E6%A5%8A%E5%AF%B6%E8%B2%B4.jpg\" style=\"height:446px; width:251px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>楊寶貴</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>專案人員</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>6118</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>money3@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;展場商品銷售</p>\r\n\r\n			<p>&diams;櫥窗陳列</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E9%99%B3%E8%B2%9E%E6%85%A7.jpg\" style=\"height:467px; width:245px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>陳貞慧</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>計畫助理</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>6118</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>money3@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;展場商品銷售</p>\r\n\r\n			<p>&diams;展區清潔維護</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E9%99%B3%E7%A7%80%E6%95%8F.jpg\" style=\"height:275px; width:248px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>陳秀敏</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>專案人員</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>5075</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>money3@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;展場商品銷售</p>\r\n\r\n			<p>&diams;櫥窗陳列</p>\r\n\r\n			<p>&diams;倉儲管理</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E9%99%B3%E9%88%BA%E5%A9%B7.jpg\" style=\"height:369px; width:238px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>陳鈺婷</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>專案人員</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>5075</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>yuhtyng@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;展場商品銷售</p>\r\n\r\n			<p>&diams;櫥窗陳列</p>\r\n\r\n			<p>&diams;展場POP製作</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:623px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"5\" style=\"width:262px\">\r\n			<p><img alt=\"\" src=\"/elfinder/files/%E5%BC%B5%E5%AE%B6%E8%B1%AA.jpg\" style=\"height:370px; width:250px\" /></p>\r\n			</td>\r\n			<td style=\"width:125px\">\r\n			<p>姓名</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>張家豪</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>職稱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>計畫助理</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>分機</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>5122</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>信箱</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>money3@nmmba.gov.tw</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:125px\">\r\n			<p>業務職掌</p>\r\n			</td>\r\n			<td style=\"width:236px\">\r\n			<p>&diams;文創商品設計</p>\r\n\r\n			<p>&diams;櫥窗陳列設計</p>\r\n\r\n			<p>&diams;產品文宣設計</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"margin-left:18pt\">&nbsp;</p>', NULL, NULL, '組織架構'),
(3, '0000-00-00 00:00:00', '2018-02-25 13:53:53', '<p style=\"text-align: center;\"><span style=\"font-size:24px\">服務項目 Service</span></p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100.0%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>1</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>協助專利申請</p>\r\n\r\n			<p><strong>Assist in Filing for Patent Applications</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>2</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>技術轉移和許可</p>\r\n\r\n			<p><strong>Technology Transfer and Licensing</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>3</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>產學合作</p>\r\n\r\n			<p><strong>Industry-Academia Collaboration</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>4</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>創新與創業諮詢服務</p>\r\n\r\n			<p><strong>Innovation and Start-up Consulting Services</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>5</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>合作研究</p>\r\n\r\n			<p><strong>Research Collaboration</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>6</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>產業服務</p>\r\n\r\n			<p><strong>Industrial Services</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width:10.0%\">\r\n			<p><strong>7</strong></p>\r\n			</td>\r\n			<td style=\"width:90.0%\">\r\n			<p>育成服務</p>\r\n\r\n			<p><strong>Incubation Services</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, NULL, '服務項目'),
(4, '0000-00-00 00:00:00', '2018-02-26 11:50:29', '<p><img alt=\"\" src=\"/elfinder/files/1.jpg\" /></p>', NULL, NULL, '專利申請'),
(5, '0000-00-00 00:00:00', '2018-02-26 13:20:16', '<p>人工誘導促進石斑魚類自然性轉變之方法及其應用</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>項目</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>內容</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>專利類型</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>發明</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>專利權號數</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>I418297</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>發明人</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>呂明毅、孟培傑、劉擎華、李展榮</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>單位</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>國立海洋生物博物館</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>地址</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>屏東縣車城鄉後灣村後灣路2號</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>專利摘要</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>本發明係提供一種人工誘導促進石斑魚類自然性轉變之方法及其應用，該方法係利用環境調節因素(社群控制)的原理去誘導並促進一雌性石斑魚自然發生性轉變，該方法係在繁殖季節前一預定時間選擇一健康且生殖腺已屆成熟之雌性石斑魚，並將該雌性石斑魚放養至密度至少4尾雌性石斑魚/1000m3水體之環境中，等到該石斑魚自然發生性轉變成為一雄性石斑魚後，則可將發生性轉變之該雄性石斑魚移出，該環境可再次使一雌性石斑魚發生性轉變。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>可能應用</p>\r\n\r\n			<p>的範圍</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>可應用於所有屬於雌雄同體之石斑魚類或單雄型之先雌後雄之石斑魚類，該石斑魚類係為駝背鱸屬(Cromileptes)、星鱠屬(Variola)、煙鱠屬(Aethaloperca)、纖齒鱸屬(Gracila)、九刺鮨屬(Cephalopholis)、光腭鮨屬(Anyperodon)、鳶鱠(Triso)、石斑魚屬(Epinephelus)、貧鱠屬(Saloptia)或刺鰓鮨屬(Plectropomus)等石斑亞科魚類。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<p>與現今技術相比較後，列舉此項發明的優點</p>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<p>1. 其不需使用賀爾蒙，以減少對種魚操作壓迫（Stress）之效果，符合種魚管理的經濟效益。 2. 其操作簡單且所需時間短，以節省人工繁殖的生產成本。</p>\r\n\r\n			<p>3. 可避免使用外源性雄性素而影響魚類內分泌的變化，進一步避免造成性轉變逆轉現象。</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"width: 141px; height: 42px;\">\r\n			<div>\r\n			<p>附加檔案</p>\r\n			</div>\r\n			</td>\r\n			<td style=\"width: 412px; height: 42px;\">\r\n			<ol>\r\n				<li><a href=\"http://academia.nmmba.gov.tw/FileDownload/HoldPatentCollections/20160312163522780466259.pdf\" target=\"_blank\" title=\"人工誘導促進石斑魚類自然性轉變之方法及其應用_.pdf檔案下載(另開新視窗)\">人工誘導促進石斑魚類自然性轉變之方法及其應用</a></li>\r\n				<li><a href=\"http://academia.nmmba.gov.tw/FileDownload/HoldPatentCollections/20160312163522796067365.docx\" target=\"_blank\" title=\"公告本館人工誘導促進石斑魚類自然性轉變之方法及其應用_.docx檔案下載(另開新視窗)\">公告本館人工誘導促進石斑魚類自然性轉變之方法及其應用</a></li>\r\n			</ol>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, '技術轉移'),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '創新育成'),
(7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '研發合作'),
(8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '合作關係'),
(14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `dy_doc`
--

CREATE TABLE `dy_doc` (
  `id` int(11) NOT NULL,
  `title` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '產品名稱',
  `content` text COLLATE utf8_unicode_ci COMMENT '商品介紹(html)',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00',
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  `submenu` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類項目',
  `weights` int(11) DEFAULT '0',
  `post_date` date DEFAULT NULL,
  `enable` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `top` enum('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `dy_doc`
--

INSERT INTO `dy_doc` (`id`, `title`, `content`, `updated_at`, `created_at`, `submenu`, `weights`, `post_date`, `enable`, `top`) VALUES
(557, '1212', '<p>1212</p>', '2018-06-21 11:29:52', '2018-06-19 18:21:26', '專利申請', 1000, '2018-05-20', 'Y', 'Y');

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nickname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enable` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ps` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`, `created_at`, `updated_at`, `nickname`, `enable`, `type`, `ps`) VALUES
(12, 'admin', 'joejin23', NULL, '2018-05-27 02:41:57', 'hsu james', 'Y', '{\"elfinder\":\"Y\",\"pageSetting\":\"Y\",\"banner\":\"Y\",\"user\":\"Y\",\"news\":\"Y\",\"department\":\"Y\",\"teachers\":\"Y\",\"admissions\":\"Y\",\"course\":\"Y\",\"lab\":\"Y\",\"learn\":\"Y\",\"links\":\"Y\"}', NULL),
(70, 'sjc', '2008', '2018-05-30 12:47:20', '2018-06-12 22:00:17', 'sjc', 'N', '{\"elfinder\":\"Y\",\"pageSetting\":false,\"banner\":false,\"user\":false,\"news\":\"Y\",\"department\":\"Y\",\"teachers\":\"Y\",\"admissions\":\"Y\",\"course\":\"Y\",\"lab\":\"Y\",\"learn\":false,\"links\":\"Y\"}', NULL),
(68, 'iling594010@hotmail', '73dc942924aace5305529b9b789042cd', '2017-08-18 00:59:41', '2018-05-27 01:58:34', '010', 'Y', '{\"elfinder\":\"Y\",\"pageSetting\":\"Y\",\"banner\":\"Y\",\"user\":\"Y\",\"news\":\"Y\",\"department\":\"Y\",\"teachers\":\"Y\",\"admissions\":\"Y\",\"course\":\"Y\",\"lab\":\"Y\",\"learn\":\"Y\",\"links\":\"Y\"}', NULL),
(71, 'soimportant', 'notimportant', '2018-06-13 15:26:36', '2018-06-13 15:26:36', '黃宬瑋', 'N', '{\"elfinder\":\"Y\",\"pageSetting\":false,\"banner\":false,\"user\":false,\"news\":false,\"department\":false,\"teachers\":false,\"admissions\":false,\"course\":false,\"lab\":false,\"learn\":\"Y\",\"links\":false}', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '產品名稱',
  `content` text COLLATE utf8_unicode_ci COMMENT '商品介紹(html)',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00',
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  `submenu_id` int(11) DEFAULT NULL COMMENT '分類項目',
  `weights` int(11) DEFAULT '0',
  `post_date` date DEFAULT NULL,
  `enable` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `top` enum('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `updated_at`, `created_at`, `submenu_id`, `weights`, `post_date`, `enable`, `top`) VALUES
(557, '1212', '<p>1212</p>', '2018-06-19 18:21:26', '2018-06-19 18:21:26', NULL, 1000, '2018-05-20', 'Y', 'Y');

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `order_info_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `productID` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `productName` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `order_detail`
--

INSERT INTO `order_detail` (`id`, `created_at`, `updated_at`, `order_info_id`, `amount`, `productID`, `size`, `color`, `productName`, `price`) VALUES
(4, '2018-07-20 16:41:15', '2018-07-20 16:41:15', 23, 2, '0002001001', '6', '水藍', '鯊魚棉T', NULL),
(5, '2018-07-20 16:41:15', '2018-07-20 16:41:15', 23, 1, '0002001002', '8', '水藍', '鯊魚棉T', NULL),
(6, '2018-07-20 16:41:15', '2018-07-20 16:41:15', 23, 1, '0002001005', '26', '綠', '鯊魚棉T', NULL),
(7, '2018-07-20 16:43:04', '2018-07-20 16:43:04', 24, 2, '0002001001', '6', '水藍', '鯊魚棉T', 350),
(8, '2018-07-20 16:43:04', '2018-07-20 16:43:04', 24, 1, '0002001002', '8', '水藍', '鯊魚棉T', 350),
(9, '2018-07-20 16:43:04', '2018-07-20 16:43:04', 24, 1, '0002001005', '26', '綠', '鯊魚棉T', 350),
(10, '2018-07-20 17:00:14', '2018-07-20 17:00:14', 25, 1, '0002001002', '8', '水藍', '鯊魚棉T', 350),
(11, '2018-07-20 17:00:14', '2018-07-20 17:00:14', 25, 1, '0002001005', '26', '綠', '鯊魚棉T', 350),
(12, '2018-07-20 17:28:13', '2018-07-20 17:28:13', 26, 1, '0002001002', '8', '水藍', '鯊魚棉T', 350),
(13, '2018-07-20 17:28:13', '2018-07-20 17:28:13', 26, 1, '0002001005', '26', '綠', '鯊魚棉T', 350),
(14, '2018-07-20 17:28:13', '2018-07-20 17:28:13', 26, 1, '0002001001', '6', '水藍', '鯊魚棉T', 350),
(15, '2018-07-20 17:32:55', '2018-07-20 17:32:55', 27, 1, '0002001002', '8', '水藍', '鯊魚棉T', 350),
(16, '2018-07-20 17:32:55', '2018-07-20 17:32:55', 27, 1, '0002001005', '26', '綠', '鯊魚棉T', 350),
(17, '2018-07-20 17:32:55', '2018-07-20 17:32:55', 27, 1, '0002001001', '6', '水藍', '鯊魚棉T', 350),
(18, '2018-07-20 17:32:55', '2018-07-20 17:32:55', 27, 1, '0002001006', '28', '綠', '鯊魚棉T', 350),
(19, '2018-07-20 17:32:55', '2018-07-20 17:32:55', 27, 1, '0002001004', '12', '水藍', '鯊魚棉T', 350);

-- --------------------------------------------------------

--
-- 資料表結構 `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `name1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addrress1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time1` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addrress2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time2` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` float DEFAULT NULL,
  `freight` float DEFAULT NULL,
  `lidm` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipment` varchar(40) COLLATE utf8_unicode_ci DEFAULT '尚未處理',
  `returnStatus` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `order_info`
--

INSERT INTO `order_info` (`id`, `created_at`, `updated_at`, `name1`, `email1`, `mobile1`, `addrress1`, `time1`, `name2`, `email2`, `mobile2`, `addrress2`, `time2`, `total`, `freight`, `lidm`, `shipment`, `returnStatus`) VALUES
(23, '2018-07-20 16:41:15', '2018-07-20 16:41:15', '許宏國', 'clare0323@gmail.com', '11', '11', NULL, '許宏國', 'clare0323@gmail.com', '11', '11', NULL, 100, NULL, '2018072016411523', '尚未處理', NULL),
(24, '2018-07-20 16:43:04', '2018-07-20 16:43:04', '許宏國', 'clare0323@gmail.com', '112', '112', NULL, '許宏國', 'clare0323@gmail.com', '112', '112', NULL, 1500, NULL, '2018072016430424', '尚未處理', NULL),
(25, '2018-07-20 17:00:14', '2018-07-20 17:00:14', '許宏國', 'clare0323@gmail.com', 'www', 'www', NULL, '許宏國', 'clare0323@gmail.com', 'www', 'www', NULL, 800, NULL, '2018072017001425', '尚未處理', NULL),
(26, '2018-07-20 17:28:13', '2018-07-20 17:28:13', '許宏國', 'clare0323@gmail.com', 'ttt', 'ttt', NULL, '許宏國', 'clare0323@gmail.com', 'ttt', 'ttt', NULL, 1150, NULL, '2018072017281326', '尚未處理', NULL),
(27, '2018-07-20 17:32:55', '2018-07-20 17:32:55', '許宏國', 'clare0323@gmail.com', '1234', '1234', NULL, '許宏國', 'clare0323@gmail.com', '1234', '11', NULL, 1750, NULL, '2018072017325527', '尚未處理', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `page_setting`
--

CREATE TABLE `page_setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `address_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `page_setting`
--

INSERT INTO `page_setting` (`id`, `title`, `description`, `email`, `phone`, `address`, `fax`, `address_en`) VALUES
(1, '國立海洋生物博物館', '國立海洋生物博物館', 'clare0323@gmail.com', '08-8825001 分機：5117或5119 (不含例假日)', '屏東縣車城鄉後灣村後灣路２號', '08-8824860', '三隆里福隆街205號');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `productID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `w_img` text COLLATE utf8_unicode_ci,
  `w_weights` int(11) DEFAULT NULL,
  `w_content` text COLLATE utf8_unicode_ci,
  `enable` enum('N','Y') COLLATE utf8_unicode_ci DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`productID`, `updated_at`, `created_at`, `w_img`, `w_weights`, `w_content`, `enable`) VALUES
('0002001001-1', '2018-07-17 07:49:02', '2018-07-17 07:49:02', NULL, NULL, NULL, 'N');

-- --------------------------------------------------------

--
-- 資料表結構 `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `productID` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `w_img` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product_img`
--

INSERT INTO `product_img` (`id`, `productID`, `updated_at`, `created_at`, `w_img`) VALUES
(12, '0002001001-1', '2018-07-18 05:48:59', '2018-07-18 05:48:59', '/elfinder/files/1/20170821145356223747293.jpg'),
(13, '0002001001-1', '2018-07-18 05:49:01', '2018-07-18 05:49:01', '/elfinder/files/1/20170821145356428757969.jpg'),
(14, '0002001001-1', '2018-07-18 05:49:03', '2018-07-18 05:49:03', '/elfinder/files/1/20170821145357664826293.jpg'),
(16, '0001102001-1', '2018-07-20 09:51:40', '2018-07-20 09:10:42', '/elfinder/files/2/20170818160253089346860.jpg'),
(18, '0002001022-1', '2018-07-23 09:07:25', '2018-07-23 09:07:25', '/elfinder/files/8/20170818151948687348860.JPG');

-- --------------------------------------------------------

--
-- 資料表結構 `product_style`
--

CREATE TABLE `product_style` (
  `id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `w_color` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product_style`
--

INSERT INTO `product_style` (`id`, `updated_at`, `created_at`, `w_color`, `color_name`) VALUES
(8, '2018-07-17 17:40:14', '2018-07-17 07:49:02', '#8080ff', '水藍'),
(9, '2018-07-17 17:40:46', '2018-07-17 07:49:02', '#00ff00', '綠'),
(10, '2018-07-17 17:40:46', '2018-07-17 17:28:04', '#c0c0c0', '灰'),
(11, '2018-07-17 17:40:46', '2018-07-17 17:28:04', '#ff0080', '桃紅'),
(12, '2018-07-17 17:40:14', '2018-07-17 17:28:04', '#000000', '黑'),
(13, '2018-07-17 17:40:46', '2018-07-17 17:28:04', '#ff8000', '橘'),
(14, '2018-07-17 17:40:46', '2018-07-17 17:28:04', '#004080', '藍'),
(15, '2018-07-20 09:13:14', '2018-07-20 09:13:14', NULL, '古銀'),
(16, '2018-07-20 09:13:14', '2018-07-20 09:13:14', NULL, '青銅'),
(17, '2018-07-20 09:13:14', '2018-07-20 09:13:14', NULL, '紅銅');

-- --------------------------------------------------------

--
-- 資料表結構 `p_class`
--

CREATE TABLE `p_class` (
  `id` int(11) NOT NULL,
  `product_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_submenu_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `p_class`
--

INSERT INTO `p_class` (`id`, `product_id`, `p_submenu_id`, `updated_at`, `created_at`) VALUES
(4, '1', 10, '2018-06-21 11:07:59', '2018-06-21 11:07:59'),
(10, '0002001001-1', 9, '2018-07-20 07:47:07', '2018-07-20 07:47:07'),
(11, '0002001001-1', 10, '2018-07-20 07:47:07', '2018-07-20 07:47:07'),
(12, '0013001011-1', 9, '2018-07-20 07:50:29', '2018-07-20 07:50:29'),
(13, '0001102001-1', 9, '2018-07-20 09:11:03', '2018-07-20 09:11:03'),
(14, '0001102001-1', 10, '2018-07-20 09:11:03', '2018-07-20 09:11:03');

-- --------------------------------------------------------

--
-- 資料表結構 `p_submenu`
--

CREATE TABLE `p_submenu` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weights` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `p_submenu`
--

INSERT INTO `p_submenu` (`id`, `created_at`, `updated_at`, `title`, `weights`) VALUES
(9, '2018-05-19 17:05:30', '2018-06-21 19:03:15', '熱門商品', 10000),
(10, '2018-05-19 17:06:13', '2018-06-21 19:03:42', '特價商品', 9000);

-- --------------------------------------------------------

--
-- 資料表結構 `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `enable` enum('N','Y') COLLATE utf8_unicode_ci DEFAULT 'Y',
  `gender` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `mobile` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`, `updated_at`, `enable`, `gender`, `birthday`, `mobile`) VALUES
(1, 'admin', '$2y$10$AvrCtKQ2/xhsUJrWCllqH.YPHiVEPmsMkXD0PwqWyV5oP5awqpLt.', 'smajoe23@hotmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Y', NULL, NULL, NULL),
(2, '許宏國', 'joejin23', 'clare0323@gmail.com', '2018-06-21 05:26:45', '2018-06-21 05:26:45', 'Y', 'on', '1978-03-23 00:00:00', '0919331914');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `dy_doc`
--
ALTER TABLE `dy_doc`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `page_setting`
--
ALTER TABLE `page_setting`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- 資料表索引 `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product_style`
--
ALTER TABLE `product_style`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `p_class`
--
ALTER TABLE `p_class`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `p_submenu`
--
ALTER TABLE `p_submenu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表 AUTO_INCREMENT `dy_doc`
--
ALTER TABLE `dy_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- 使用資料表 AUTO_INCREMENT `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- 使用資料表 AUTO_INCREMENT `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表 AUTO_INCREMENT `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表 AUTO_INCREMENT `page_setting`
--
ALTER TABLE `page_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表 AUTO_INCREMENT `product_style`
--
ALTER TABLE `product_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表 AUTO_INCREMENT `p_class`
--
ALTER TABLE `p_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表 AUTO_INCREMENT `p_submenu`
--
ALTER TABLE `p_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
