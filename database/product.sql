-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2017 lúc 04:52 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `product`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '2017-11-21 15:37:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `information` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `description`, `information`, `created_at`, `updated_at`) VALUES
(1, '<p>Nếu bạn có câu hỏi về sản phẩm hay dịch vụ cũng như thông tin chi tiết xin hãy điền thông tin của bạn theo form bên dưới để liên hệ với chúng tôi, chúng rất cảm ơn bạn đã liên hệ với chúng rôi. </p>', '<h2>Thông tin</h2>\r\n                        <p>Địa chỉ: HCM</p>\r\n                        <p>Hotline: 0123456789</p>\r\n                        <p>Email: info@gmail.com</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_product`
--

DROP TABLE IF EXISTS `images_product`;
CREATE TABLE `images_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images_product`
--

INSERT INTO `images_product` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Original-Apple-font-b-iPhone-b-font-font-b-7-b-font-2GB-RAM-32-128GB.jpg', 5, NULL, NULL),
(2, 'iphone-7-case-3.jpg', 5, NULL, NULL),
(3, 'iphone_7_-_mau_vang.jpg', 5, NULL, NULL),
(4, '2016101004291669fc366f1a0ccb6967c128510f26854e.jpg', 5, NULL, NULL),
(5, 'Mieng dan da Davis iPhone 7 plus - 3_1476502667.png.jpg', 5, NULL, NULL),
(101, '2017-11-22-13-36-05Hydrangeas.jpg', 39, '2017-11-22 06:36:05', '2017-11-22 06:36:05'),
(102, '2017-11-22-13-36-05Penguins.jpg', 39, '2017-11-22 06:36:06', '2017-11-22 06:36:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_16_025234_create_product_categories_table', 2),
(4, '2017_11_16_025318_create_news_table', 2),
(5, '2017_11_16_024647_create_products_table', 3),
(6, '2017_11_16_032259_create_images_product_table', 4),
(8, '2017_11_16_130405_create_slide_table', 5),
(9, '2017_11_18_134855_create_about_table', 6),
(10, '2017_11_18_140246_create_contact_table', 7),
(11, '2017_11_19_015450_create_shoppingcart_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `picture`, `title`, `front_description`, `description`, `created_at`, `updated_at`) VALUES
(1, '1_91902', 'iPhone 7 Plus đạt điểm số AnTuTu cao nhất', 'Mới đây, trang An', 'Mới đây, trang ', '2017-11-14 17:00:00', NULL),
(3, 'galaxy-s8-unofficial-render.jpg', 'Tra tấn\" HTC U Ultra bản Sapphire: Khó trầy nhưng dễ vỡ!', 'sssssssssssssssssssssss', '<img src=\"/source/images/news/galaxys8ab_800x450_800x450-600x400.jpg\">\r\n                <h4 style=\"text-align: justify\">Mới đây, trang Android Authority vừa mới dẫn nguồn một báo cáo từ BusinessKorea, dự đoán rằng Galaxy S8 sẽ là một quả bom thật sự từ Samsung, và doanh số của thiết bị này gần như chắc chắn sẽ vượt mặt thế hệ đàn anh Galaxy S7.<br>\r\n                    Năm ngoái, bộ đôi Galaxy S7 và S7 Edge đã đạt đến số lượng máy bán ra khổng lồ, lên tới 50 triệu chiếc. Đây quả thực là một nhận định khá tham vọng dành cho những siêu phẩm kế tiếp nhà Samsung.<br>\r\n                    Samsung cũng đã thực sự nghiêm túc và tập trung quảng bá cho thiết bị mới này. Nổi bật chính là đoạn video với tựa đề \"This is a phone\" (Đây mới là điện thoại) được đăng tải hồi tháng 2.</h4>\r\n                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2iNTxLXO-Iw\" frameborder=\"0\" allowfullscreen></iframe>\r\n                <p style=\"text-align: justify\">Đoạn video dù không hé lộ thêm bất cứ điều gì về Galaxy S8 nhưng rõ ràng đã thu hút được đến 26 triệu lượt xem và phần lớn có những phản ứng khá tích cực. Liên tiếp các mẫu quảng cáo tiếp theo dù đơn giản nhưng vẫn gây hiệu ứng tốt và nhắc nhở người dùng về sự xuất hiện của Galaxy S8 (và S8 Plus) vào ngày 29/3 sắp tới. <br>\r\n\r\n                    Bên cạnh đó, dựa trên những hình ảnh rò rỉ và thông số cấu hình mạnh mẽ của S8, S8 Plus, nhiều người dùng cũng như giới yêu thích công nghệ đã có cái nhìn khá tổng quan về thiết bị này. Samsung cũng không phải bỏ sức quá nhiều vào các hoạt động marketing truyền thống để quảng bá cho thiết bị của họ.<br>\r\n\r\n                    Rất dễ để hình dung Galaxy S8 sẽ là một thiết bị với ngoại hình độc đáo, các cạnh bên được bo cong và phần màn hình được làm sát ra các cạnh ấn tượng, tỉ lệ màn hình mới cùng cấu hình và camera mạnh mẽ nhất hiện tại. Đó chẳng phải là tất cả những gì chúng ta cần ở một chiếc smartphone hay sao!<br>\r\n\r\n                    Mặc dù các thông tin trên có vẻ ấn tượng, nhưng việc S8 liệu có thể vượt mặt người đàn anh S7 vẫn là một điều rất khó nói. Đặc biệt trong bối cảnh Samsung vừa trải qua sự cố lớn với Galaxy Note 7 và thế hệ S8 cũng được dự đoán sẽ có giá cao hơn đáng kể so với người tiền nhiệm.</p>', '2017-11-14 17:00:00', NULL),
(4, 'galaxy-s8-unofficial-render.jpg', 'Hacker đã \"bẻ khoá\" được Touch Bar của MacBook Pro như thế nào?', 'sssssssssssssssssssssss', '<img src=\"/source/images/news/galaxys8ab_800x450_800x450-600x400.jpg\">\r\n                <h4 style=\"text-align: justify\">Mới đây, trang Android Authority vừa mới dẫn nguồn một báo cáo từ BusinessKorea, dự đoán rằng Galaxy S8 sẽ là một quả bom thật sự từ Samsung, và doanh số của thiết bị này gần như chắc chắn sẽ vượt mặt thế hệ đàn anh Galaxy S7.<br>\r\n                    Năm ngoái, bộ đôi Galaxy S7 và S7 Edge đã đạt đến số lượng máy bán ra khổng lồ, lên tới 50 triệu chiếc. Đây quả thực là một nhận định khá tham vọng dành cho những siêu phẩm kế tiếp nhà Samsung.<br>\r\n                    Samsung cũng đã thực sự nghiêm túc và tập trung quảng bá cho thiết bị mới này. Nổi bật chính là đoạn video với tựa đề \"This is a phone\" (Đây mới là điện thoại) được đăng tải hồi tháng 2.</h4>\r\n                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2iNTxLXO-Iw\" frameborder=\"0\" allowfullscreen></iframe>\r\n                <p style=\"text-align: justify\">Đoạn video dù không hé lộ thêm bất cứ điều gì về Galaxy S8 nhưng rõ ràng đã thu hút được đến 26 triệu lượt xem và phần lớn có những phản ứng khá tích cực. Liên tiếp các mẫu quảng cáo tiếp theo dù đơn giản nhưng vẫn gây hiệu ứng tốt và nhắc nhở người dùng về sự xuất hiện của Galaxy S8 (và S8 Plus) vào ngày 29/3 sắp tới. <br>\r\n\r\n                    Bên cạnh đó, dựa trên những hình ảnh rò rỉ và thông số cấu hình mạnh mẽ của S8, S8 Plus, nhiều người dùng cũng như giới yêu thích công nghệ đã có cái nhìn khá tổng quan về thiết bị này. Samsung cũng không phải bỏ sức quá nhiều vào các hoạt động marketing truyền thống để quảng bá cho thiết bị của họ.<br>\r\n\r\n                    Rất dễ để hình dung Galaxy S8 sẽ là một thiết bị với ngoại hình độc đáo, các cạnh bên được bo cong và phần màn hình được làm sát ra các cạnh ấn tượng, tỉ lệ màn hình mới cùng cấu hình và camera mạnh mẽ nhất hiện tại. Đó chẳng phải là tất cả những gì chúng ta cần ở một chiếc smartphone hay sao!<br>\r\n\r\n                    Mặc dù các thông tin trên có vẻ ấn tượng, nhưng việc S8 liệu có thể vượt mặt người đàn anh S7 vẫn là một điều rất khó nói. Đặc biệt trong bối cảnh Samsung vừa trải qua sự cố lớn với Galaxy Note 7 và thế hệ S8 cũng được dự đoán sẽ có giá cao hơn đáng kể so với người tiền nhiệm.</p>', '2017-11-14 17:00:00', NULL),
(5, 'galaxy-s8-unofficial-render.jpg', 'Hiện trên thị trường, ', 'sssssssssssssssssssssss', '<img src=\"/source/images/news/galaxys8ab_800x450_800x450-600x400.jpg\">\r\n                <h4 style=\"text-align: justify\">Mới đây, trang Android Authority vừa mới dẫn nguồn một báo cáo từ BusinessKorea, dự đoán rằng Galaxy S8 sẽ là một quả bom thật sự từ Samsung, và doanh số của thiết bị này gần như chắc chắn sẽ vượt mặt thế hệ đàn anh Galaxy S7.<br>\r\n                    Năm ngoái, bộ đôi Galaxy S7 và S7 Edge đã đạt đến số lượng máy bán ra khổng lồ, lên tới 50 triệu chiếc. Đây quả thực là một nhận định khá tham vọng dành cho những siêu phẩm kế tiếp nhà Samsung.<br>\r\n                    Samsung cũng đã thực sự nghiêm túc và tập trung quảng bá cho thiết bị mới này. Nổi bật chính là đoạn video với tựa đề \"This is a phone\" (Đây mới là điện thoại) được đăng tải hồi tháng 2.</h4>\r\n                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2iNTxLXO-Iw\" frameborder=\"0\" allowfullscreen></iframe>\r\n                <p style=\"text-align: justify\">Đoạn video dù không hé lộ thêm bất cứ điều gì về Galaxy S8 nhưng rõ ràng đã thu hút được đến 26 triệu lượt xem và phần lớn có những phản ứng khá tích cực. Liên tiếp các mẫu quảng cáo tiếp theo dù đơn giản nhưng vẫn gây hiệu ứng tốt và nhắc nhở người dùng về sự xuất hiện của Galaxy S8 (và S8 Plus) vào ngày 29/3 sắp tới. <br>\r\n\r\n                    Bên cạnh đó, dựa trên những hình ảnh rò rỉ và thông số cấu hình mạnh mẽ của S8, S8 Plus, nhiều người dùng cũng như giới yêu thích công nghệ đã có cái nhìn khá tổng quan về thiết bị này. Samsung cũng không phải bỏ sức quá nhiều vào các hoạt động marketing truyền thống để quảng bá cho thiết bị của họ.<br>\r\n\r\n                    Rất dễ để hình dung Galaxy S8 sẽ là một thiết bị với ngoại hình độc đáo, các cạnh bên được bo cong và phần màn hình được làm sát ra các cạnh ấn tượng, tỉ lệ màn hình mới cùng cấu hình và camera mạnh mẽ nhất hiện tại. Đó chẳng phải là tất cả những gì chúng ta cần ở một chiếc smartphone hay sao!<br>\r\n\r\n                    Mặc dù các thông tin trên có vẻ ấn tượng, nhưng việc S8 liệu có thể vượt mặt người đàn anh S7 vẫn là một điều rất khó nói. Đặc biệt trong bối cảnh Samsung vừa trải qua sự cố lớn với Galaxy Note 7 và thế hệ S8 cũng được dự đoán sẽ có giá cao hơn đáng kể so với người tiền nhiệm.</p>', '2017-11-14 17:00:00', NULL),
(6, 'galaxy-s8-unofficial-render.jpg', 'Tra tấn\" HTC U Ultra bản Sapphire: Khó trầy nhưng dễ vỡ!', 'sssssssssssssssssssssss', 'sssssssssssssssssssssss', '2017-11-14 17:00:00', NULL),
(7, 'galaxy-s8-unofficial-render.jpg', 'Hacker đã \"bẻ khoá\" được Touch Bar của MacBook Pro như thế nào?', 'sssssssssssssssssssssss', '<img src=\"/source/images/news/galaxys8ab_800x450_800x450-600x400.jpg\">\r\n                <h4 style=\"text-align: justify\">Mới đây, trang Android Authority vừa mới dẫn nguồn một báo cáo từ BusinessKorea, dự đoán rằng Galaxy S8 sẽ là một quả bom thật sự từ Samsung, và doanh số của thiết bị này gần như chắc chắn sẽ vượt mặt thế hệ đàn anh Galaxy S7.<br>\r\n                    Năm ngoái, bộ đôi Galaxy S7 và S7 Edge đã đạt đến số lượng máy bán ra khổng lồ, lên tới 50 triệu chiếc. Đây quả thực là một nhận định khá tham vọng dành cho những siêu phẩm kế tiếp nhà Samsung.<br>\r\n                    Samsung cũng đã thực sự nghiêm túc và tập trung quảng bá cho thiết bị mới này. Nổi bật chính là đoạn video với tựa đề \"This is a phone\" (Đây mới là điện thoại) được đăng tải hồi tháng 2.</h4>\r\n                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2iNTxLXO-Iw\" frameborder=\"0\" allowfullscreen></iframe>\r\n                <p style=\"text-align: justify\">Đoạn video dù không hé lộ thêm bất cứ điều gì về Galaxy S8 nhưng rõ ràng đã thu hút được đến 26 triệu lượt xem và phần lớn có những phản ứng khá tích cực. Liên tiếp các mẫu quảng cáo tiếp theo dù đơn giản nhưng vẫn gây hiệu ứng tốt và nhắc nhở người dùng về sự xuất hiện của Galaxy S8 (và S8 Plus) vào ngày 29/3 sắp tới. <br>\r\n\r\n                    Bên cạnh đó, dựa trên những hình ảnh rò rỉ và thông số cấu hình mạnh mẽ của S8, S8 Plus, nhiều người dùng cũng như giới yêu thích công nghệ đã có cái nhìn khá tổng quan về thiết bị này. Samsung cũng không phải bỏ sức quá nhiều vào các hoạt động marketing truyền thống để quảng bá cho thiết bị của họ.<br>\r\n\r\n                    Rất dễ để hình dung Galaxy S8 sẽ là một thiết bị với ngoại hình độc đáo, các cạnh bên được bo cong và phần màn hình được làm sát ra các cạnh ấn tượng, tỉ lệ màn hình mới cùng cấu hình và camera mạnh mẽ nhất hiện tại. Đó chẳng phải là tất cả những gì chúng ta cần ở một chiếc smartphone hay sao!<br>\r\n\r\n                    Mặc dù các thông tin trên có vẻ ấn tượng, nhưng việc S8 liệu có thể vượt mặt người đàn anh S7 vẫn là một điều rất khó nói. Đặc biệt trong bối cảnh Samsung vừa trải qua sự cố lớn với Galaxy Note 7 và thế hệ S8 cũng được dự đoán sẽ có giá cao hơn đáng kể so với người tiền nhiệm.</p>', '2017-11-14 17:00:00', NULL),
(8, 'galaxy-s8-unofficial-render.jpg', 'Galaxy S8 lộ diện thêm 3 tông màu mới thông qua ảnh thực tế', 'sssssssssssssssssssssss', '<img src=\"/source/images/news/galaxys8ab_800x450_800x450-600x400.jpg\">\r\n                <h4 style=\"text-align: justify\">Mới đây, trang Android Authority vừa mới dẫn nguồn một báo cáo từ BusinessKorea, dự đoán rằng Galaxy S8 sẽ là một quả bom thật sự từ Samsung, và doanh số của thiết bị này gần như chắc chắn sẽ vượt mặt thế hệ đàn anh Galaxy S7.<br>\r\n                    Năm ngoái, bộ đôi Galaxy S7 và S7 Edge đã đạt đến số lượng máy bán ra khổng lồ, lên tới 50 triệu chiếc. Đây quả thực là một nhận định khá tham vọng dành cho những siêu phẩm kế tiếp nhà Samsung.<br>\r\n                    Samsung cũng đã thực sự nghiêm túc và tập trung quảng bá cho thiết bị mới này. Nổi bật chính là đoạn video với tựa đề \"This is a phone\" (Đây mới là điện thoại) được đăng tải hồi tháng 2.</h4>\r\n                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2iNTxLXO-Iw\" frameborder=\"0\" allowfullscreen></iframe>\r\n                <p style=\"text-align: justify\">Đoạn video dù không hé lộ thêm bất cứ điều gì về Galaxy S8 nhưng rõ ràng đã thu hút được đến 26 triệu lượt xem và phần lớn có những phản ứng khá tích cực. Liên tiếp các mẫu quảng cáo tiếp theo dù đơn giản nhưng vẫn gây hiệu ứng tốt và nhắc nhở người dùng về sự xuất hiện của Galaxy S8 (và S8 Plus) vào ngày 29/3 sắp tới. <br>\r\n\r\n                    Bên cạnh đó, dựa trên những hình ảnh rò rỉ và thông số cấu hình mạnh mẽ của S8, S8 Plus, nhiều người dùng cũng như giới yêu thích công nghệ đã có cái nhìn khá tổng quan về thiết bị này. Samsung cũng không phải bỏ sức quá nhiều vào các hoạt động marketing truyền thống để quảng bá cho thiết bị của họ.<br>\r\n\r\n                    Rất dễ để hình dung Galaxy S8 sẽ là một thiết bị với ngoại hình độc đáo, các cạnh bên được bo cong và phần màn hình được làm sát ra các cạnh ấn tượng, tỉ lệ màn hình mới cùng cấu hình và camera mạnh mẽ nhất hiện tại. Đó chẳng phải là tất cả những gì chúng ta cần ở một chiếc smartphone hay sao!<br>\r\n\r\n                    Mặc dù các thông tin trên có vẻ ấn tượng, nhưng việc S8 liệu có thể vượt mặt người đàn anh S7 vẫn là một điều rất khó nói. Đặc biệt trong bối cảnh Samsung vừa trải qua sự cố lớn với Galaxy Note 7 và thế hệ S8 cũng được dự đoán sẽ có giá cao hơn đáng kể so với người tiền nhiệm.</p>', '2017-11-14 17:00:00', NULL),
(9, 'galaxy-s8-unofficial-render.jpg', 'Không chỉ riêng dòng Xperia, Galaxy S8 cũng vừa lộ diện màu tím cực đẹp', 'sssssssssssssssssssssss', '<img src=\"/source/images/news/galaxys8ab_800x450_800x450-600x400.jpg\">\r\n                <h4 style=\"text-align: justify\">Mới đây, trang Android Authority vừa mới dẫn nguồn một báo cáo từ BusinessKorea, dự đoán rằng Galaxy S8 sẽ là một quả bom thật sự từ Samsung, và doanh số của thiết bị này gần như chắc chắn sẽ vượt mặt thế hệ đàn anh Galaxy S7.<br>\r\n                    Năm ngoái, bộ đôi Galaxy S7 và S7 Edge đã đạt đến số lượng máy bán ra khổng lồ, lên tới 50 triệu chiếc. Đây quả thực là một nhận định khá tham vọng dành cho những siêu phẩm kế tiếp nhà Samsung.<br>\r\n                    Samsung cũng đã thực sự nghiêm túc và tập trung quảng bá cho thiết bị mới này. Nổi bật chính là đoạn video với tựa đề \"This is a phone\" (Đây mới là điện thoại) được đăng tải hồi tháng 2.</h4>\r\n                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2iNTxLXO-Iw\" frameborder=\"0\" allowfullscreen></iframe>\r\n                <p style=\"text-align: justify\">Đoạn video dù không hé lộ thêm bất cứ điều gì về Galaxy S8 nhưng rõ ràng đã thu hút được đến 26 triệu lượt xem và phần lớn có những phản ứng khá tích cực. Liên tiếp các mẫu quảng cáo tiếp theo dù đơn giản nhưng vẫn gây hiệu ứng tốt và nhắc nhở người dùng về sự xuất hiện của Galaxy S8 (và S8 Plus) vào ngày 29/3 sắp tới. <br>\r\n\r\n                    Bên cạnh đó, dựa trên những hình ảnh rò rỉ và thông số cấu hình mạnh mẽ của S8, S8 Plus, nhiều người dùng cũng như giới yêu thích công nghệ đã có cái nhìn khá tổng quan về thiết bị này. Samsung cũng không phải bỏ sức quá nhiều vào các hoạt động marketing truyền thống để quảng bá cho thiết bị của họ.<br>\r\n\r\n                    Rất dễ để hình dung Galaxy S8 sẽ là một thiết bị với ngoại hình độc đáo, các cạnh bên được bo cong và phần màn hình được làm sát ra các cạnh ấn tượng, tỉ lệ màn hình mới cùng cấu hình và camera mạnh mẽ nhất hiện tại. Đó chẳng phải là tất cả những gì chúng ta cần ở một chiếc smartphone hay sao!<br>\r\n\r\n                    Mặc dù các thông tin trên có vẻ ấn tượng, nhưng việc S8 liệu có thể vượt mặt người đàn anh S7 vẫn là một điều rất khó nói. Đặc biệt trong bối cảnh Samsung vừa trải qua sự cố lớn với Galaxy Note 7 và thế hệ S8 cũng được dự đoán sẽ có giá cao hơn đáng kể so với người tiền nhiệm.</p>', '2017-11-14 17:00:00', NULL),
(10, '2017-11-22-12-14-44Desert.jpg', 'asdasdad', 'asdasd', '<p>asdas</p>', '2017-11-22 05:14:44', '2017-11-22 05:14:44'),
(11, '2017-11-22-13-50-02Penguins.jpg', 'ádasd', 'ádasd', '<p>&aacute;das</p>', '2017-11-22 06:49:47', '2017-11-22 06:50:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_sale` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `total_one` int(11) NOT NULL,
  `hot` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `picture`, `title`, `price_sale`, `price`, `total_one`, `hot`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(0, '5_4.jpg', 'tablet', 12.00, 54.00, 0, 0, '<h2 style=\"text-align: justify;\"><strong>Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời <a href=\"https://www.thegioididong.com/dtdd/iphone-6-plus-64gb\" target=\"_blank\" title=\"iPhone 6 Plus\" type=\"iPhone 6 Plus\">iPhone 6 Plus</a>, &nbsp;iPhone 7 Plus&nbsp;được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.</strong></h2><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb1-1.jpg\" onclick=\"return false;\"><img alt=\"Diện mạo mới của iPhone 7 Plus\" data-original=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg\" class=\"lazy\" title=\"Diện mạo mới của iPhone 7 Plus\" src=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg\" style=\"display: block;\"></a><br>Thay đổi dãy nhựa an-ten bắt sóng được đưa vòng lên trên thay vì cắt ngang ở mặt lưng như trước.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb2-1.jpg\" onclick=\"return false;\"><img alt=\"Bút home cảm ứng\" data-original=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg\" class=\"lazy\" title=\"Bút home cảm ứng\" src=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg\" style=\"display: block;\"></a><br>Nút Home quen thuộc không còn là phím vật lý nữa mà được thay thế bằng cảm ứng, nó sẽ rung lên khi bạn ấn. Vì đã dùng iPhone một thời gian rất dài, nên tôi công nhận rằng hơi khó để làm quen với nó, nhưng có lẽ chỉ mất vài ngày thôi.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb3-1.jpg\" onclick=\"return false;\"><img alt=\"Trang bị chuẩn chống nước cao cấp\" data-original=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg\" class=\"lazy\" title=\"Trang bị chuẩn chống nước cao cấp\" src=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg\" style=\"display: block;\"></a><br>Cuối cùng chúng ta cũng có được chiếc iPhone vẫn sống khi rơi vào nước hay đi mưa không cần phải loay hoay tìm chỗ cất vì Apple đã mang chuẩn chống nước IP67 cho iphone 7 plus .(Lưu ý: không nên cố tình ngâm nước vì nếu có thiệt hại do vào nước sẽ không được Apple bảo hành).</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb4-1.jpg\" onclick=\"return false;\"><img alt=\"Màn hình Retina sáng và sắc nét\" data-original=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Màn hình Retina sáng và sắc nét\" src=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg\"></a><br>Màn hình Retina trên 7 Plus hỗ trợ DCI-P3 gam màu rộng, nghĩa là chúng có khả năng tái tạo màu sắc trong phạm vi của sRGB. Nói đơn giản, chúng có thể hiển thị sống động hơn, sắc thái hình ảnh tốt hơn trước đó. Độ phân giải, mật độ điểm ảnh và kích thước màn hình vẫn giữ nguyên so với iPhone 6s Plus.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb5-1.jpg\" onclick=\"return false;\"><img alt=\"Dàn loa stereo\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Dàn loa stereo\" src=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg\"></a><br>Lần đầu tiên iPhone xuất hiện tính năng âm thanh Stereo. Phim ảnh, podcast và các cuộc gọi loa ngoài bây giờ âm thanh rõ ràng hơn rất nhiều. Đó là do Apple đã dùng công nghệ thiết lập loa chứ không phải thiết kế 2 loa ngay trên mặt.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb6-.jpg\" onclick=\"return false;\"><img alt=\"Camera kép\" data-original=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg\" class=\"lazy\" title=\"Camera kép\" src=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg\" style=\"display: block;\"></a></p><p>iPhone 7 Plus là&nbsp;chiếc iPhone đầu tiên được trang bị camera kép, đem lại khả năng chụp ảnh ở hai tiêu cự khác nhau. Camera thông thường vẫn chụp hình góc rộng, còn camera thứ hai có tiêu cự phù hợp để chụp chân dung, có tính năng chụp chân dung xóa phông (làm mờ hậu cảnh).&nbsp;</p><p>Với 1 chạm nhanh chóng bạn có thể chuyển đổi giữa chế độ 1x và zoom 2x, hoặc bạn có thể kéo thanh trượt hay dùng 2 ngón tay đến zoom. Apple đã thêm tính năng zoom kỹ thuật số lên đến 10x.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb8-1.jpg\" onclick=\"return false;\"><img alt=\"Mặt lưng bóng bẩy\" data-original=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg\" class=\"lazy\" title=\"Mặt lưng bóng bẩy\" src=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg\" style=\"display: block;\"></a><br>Điểm nhấn ấn tượng nhất nằm ở mặt lưng của sản phẩm với hiệu ứng phản chiếu ánh sáng khi thay đổi góc nhìn rất đặc biệt. Hiệu ứng này cũng được áp dụng cho toàn bộ khung máy, từ cạnh trên, cạnh dưới cho đến các nút bấm nên cho cảm giác một thiết bị cực kỳ hoàn thiện, gần như không có bất kỳ một chi tiết thừa nào cả.&nbsp;</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb9.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình cực mạnh\" data-original=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Cấu hình cực mạnh\" src=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg\"></a></p><p>Ngoài trái tim&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tong-quan-ve-chip-a10-fusion-cua-apple-885052\" target=\"_blank\" title=\"Apple A10 Fusion 4 nhân 64-bit\" type=\"Apple A10 Fusion 4 nhân 64-bit\">Apple A10 Fusion 4 nhân</a>&nbsp;với hiệu năng cực kì mạnh mẽ và ấn tượng thì iPhone 7 Plus còn được trang bị hệ điều hành mới nhất IOS 10 với nhiều tính năng bất ngờ, và thú vị.</p><p>“Táo khuyết” cũng không quên nhấn mạnh iPhone 7 Plus sẽ nhanh hơn iPhone đời đầu tới… 140 lần. Những ai mê chơi game trên di động cũng sẽ “phải lòng” iPhone mới khi có chip xử lý đồ họa được nâng tầm đúng chất “máy chơi game”.</p><p>Camera trước nâng cấp độ phân giải 7MP với khẩu độ mở lớn f/2.2 hỗ trợ chụp trong điều kiệu thiếu sáng tuyệt vời với công nghệ <a href=\"https://www.thegioididong.com/tin-tuc/cac-tinh-nang-chup-anh-camera-truoc-769270#retinaflash\" target=\"_blank\" title=\"Retina Flash\" type=\"Retina Flash\">Retina Flash</a>, Auto HDR</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb10.jpg\" onclick=\"return false;\"><img alt=\"Camera trước\" data-original=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Camera trước\" src=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg\"></a></p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb11.jpg\" onclick=\"return false;\"><img alt=\"Chụp thiếu sáng với Retina Flash\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Chụp thiếu sáng với Retina Flash\" src=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg\"></a></p><p>Iphone 7 plus theo bản thân đánh giá là một sự lựa chọn hợp lý trong tầm giá:</p><ul><li><strong>Ưu điểm:</strong><ul style=\"list-style-type:circle;\"><li>Hiệu năng rất cao</li><li>Camera trước sau rất tuyệt vời</li><li>Chống nước</li><li>Thời lượng pin tốt</li></ul></li><li><strong>Nhược điểm:</strong><ul style=\"list-style-type:circle;\"><li>Loại bỏ jack 3.5mm</li><li>Không thay đổi thiết kế quá nhiều mặc dù đã 3 năm</li><li>Phím Home cần thời gian để làm quen</li></ul></li></ul>', 4, NULL, NULL),
(1, '7_3.jpg', 'laptop', 123.00, 234.00, 0, 0, '', 6, NULL, NULL),
(2, '8.jpg', 'Tai nghe', 1234.00, 534.00, 0, 0, '', 5, NULL, NULL),
(3, 'ipad-pro-97-inch-21-300x300.jpg', 'iPad Pro 9.7 inch Wifi 32GB', 0.00, 251118.00, 100, 0, '<h2 style=\"text-align: justify;\"><strong>Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời <a href=\"https://www.thegioididong.com/dtdd/iphone-6-plus-64gb\" target=\"_blank\" title=\"iPhone 6 Plus\" type=\"iPhone 6 Plus\">iPhone 6 Plus</a>, &nbsp;iPhone 7 Plus&nbsp;được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.</strong></h2><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb1-1.jpg\" onclick=\"return false;\"><img alt=\"Diện mạo mới của iPhone 7 Plus\" data-original=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg\" class=\"lazy\" title=\"Diện mạo mới của iPhone 7 Plus\" src=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg\" style=\"display: block;\"></a><br>Thay đổi dãy nhựa an-ten bắt sóng được đưa vòng lên trên thay vì cắt ngang ở mặt lưng như trước.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb2-1.jpg\" onclick=\"return false;\"><img alt=\"Bút home cảm ứng\" data-original=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg\" class=\"lazy\" title=\"Bút home cảm ứng\" src=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg\" style=\"display: block;\"></a><br>Nút Home quen thuộc không còn là phím vật lý nữa mà được thay thế bằng cảm ứng, nó sẽ rung lên khi bạn ấn. Vì đã dùng iPhone một thời gian rất dài, nên tôi công nhận rằng hơi khó để làm quen với nó, nhưng có lẽ chỉ mất vài ngày thôi.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb3-1.jpg\" onclick=\"return false;\"><img alt=\"Trang bị chuẩn chống nước cao cấp\" data-original=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg\" class=\"lazy\" title=\"Trang bị chuẩn chống nước cao cấp\" src=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg\" style=\"display: block;\"></a><br>Cuối cùng chúng ta cũng có được chiếc iPhone vẫn sống khi rơi vào nước hay đi mưa không cần phải loay hoay tìm chỗ cất vì Apple đã mang chuẩn chống nước IP67 cho iphone 7 plus .(Lưu ý: không nên cố tình ngâm nước vì nếu có thiệt hại do vào nước sẽ không được Apple bảo hành).</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb4-1.jpg\" onclick=\"return false;\"><img alt=\"Màn hình Retina sáng và sắc nét\" data-original=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Màn hình Retina sáng và sắc nét\" src=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg\"></a><br>Màn hình Retina trên 7 Plus hỗ trợ DCI-P3 gam màu rộng, nghĩa là chúng có khả năng tái tạo màu sắc trong phạm vi của sRGB. Nói đơn giản, chúng có thể hiển thị sống động hơn, sắc thái hình ảnh tốt hơn trước đó. Độ phân giải, mật độ điểm ảnh và kích thước màn hình vẫn giữ nguyên so với iPhone 6s Plus.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb5-1.jpg\" onclick=\"return false;\"><img alt=\"Dàn loa stereo\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Dàn loa stereo\" src=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg\"></a><br>Lần đầu tiên iPhone xuất hiện tính năng âm thanh Stereo. Phim ảnh, podcast và các cuộc gọi loa ngoài bây giờ âm thanh rõ ràng hơn rất nhiều. Đó là do Apple đã dùng công nghệ thiết lập loa chứ không phải thiết kế 2 loa ngay trên mặt.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb6-.jpg\" onclick=\"return false;\"><img alt=\"Camera kép\" data-original=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg\" class=\"lazy\" title=\"Camera kép\" src=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg\" style=\"display: block;\"></a></p><p>iPhone 7 Plus là&nbsp;chiếc iPhone đầu tiên được trang bị camera kép, đem lại khả năng chụp ảnh ở hai tiêu cự khác nhau. Camera thông thường vẫn chụp hình góc rộng, còn camera thứ hai có tiêu cự phù hợp để chụp chân dung, có tính năng chụp chân dung xóa phông (làm mờ hậu cảnh).&nbsp;</p><p>Với 1 chạm nhanh chóng bạn có thể chuyển đổi giữa chế độ 1x và zoom 2x, hoặc bạn có thể kéo thanh trượt hay dùng 2 ngón tay đến zoom. Apple đã thêm tính năng zoom kỹ thuật số lên đến 10x.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb8-1.jpg\" onclick=\"return false;\"><img alt=\"Mặt lưng bóng bẩy\" data-original=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg\" class=\"lazy\" title=\"Mặt lưng bóng bẩy\" src=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg\" style=\"display: block;\"></a><br>Điểm nhấn ấn tượng nhất nằm ở mặt lưng của sản phẩm với hiệu ứng phản chiếu ánh sáng khi thay đổi góc nhìn rất đặc biệt. Hiệu ứng này cũng được áp dụng cho toàn bộ khung máy, từ cạnh trên, cạnh dưới cho đến các nút bấm nên cho cảm giác một thiết bị cực kỳ hoàn thiện, gần như không có bất kỳ một chi tiết thừa nào cả.&nbsp;</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb9.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình cực mạnh\" data-original=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Cấu hình cực mạnh\" src=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg\"></a></p><p>Ngoài trái tim&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tong-quan-ve-chip-a10-fusion-cua-apple-885052\" target=\"_blank\" title=\"Apple A10 Fusion 4 nhân 64-bit\" type=\"Apple A10 Fusion 4 nhân 64-bit\">Apple A10 Fusion 4 nhân</a>&nbsp;với hiệu năng cực kì mạnh mẽ và ấn tượng thì iPhone 7 Plus còn được trang bị hệ điều hành mới nhất IOS 10 với nhiều tính năng bất ngờ, và thú vị.</p><p>“Táo khuyết” cũng không quên nhấn mạnh iPhone 7 Plus sẽ nhanh hơn iPhone đời đầu tới… 140 lần. Những ai mê chơi game trên di động cũng sẽ “phải lòng” iPhone mới khi có chip xử lý đồ họa được nâng tầm đúng chất “máy chơi game”.</p><p>Camera trước nâng cấp độ phân giải 7MP với khẩu độ mở lớn f/2.2 hỗ trợ chụp trong điều kiệu thiếu sáng tuyệt vời với công nghệ <a href=\"https://www.thegioididong.com/tin-tuc/cac-tinh-nang-chup-anh-camera-truoc-769270#retinaflash\" target=\"_blank\" title=\"Retina Flash\" type=\"Retina Flash\">Retina Flash</a>, Auto HDR</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb10.jpg\" onclick=\"return false;\"><img alt=\"Camera trước\" data-original=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Camera trước\" src=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg\"></a></p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb11.jpg\" onclick=\"return false;\"><img alt=\"Chụp thiếu sáng với Retina Flash\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Chụp thiếu sáng với Retina Flash\" src=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg\"></a></p><p>Iphone 7 plus theo bản thân đánh giá là một sự lựa chọn hợp lý trong tầm giá:</p><ul><li><strong>Ưu điểm:</strong><ul style=\"list-style-type:circle;\"><li>Hiệu năng rất cao</li><li>Camera trước sau rất tuyệt vời</li><li>Chống nước</li><li>Thời lượng pin tốt</li></ul></li><li><strong>Nhược điểm:</strong><ul style=\"list-style-type:circle;\"><li>Loại bỏ jack 3.5mm</li><li>Không thay đổi thiết kế quá nhiều mặc dù đã 3 năm</li><li>Phím Home cần thời gian để làm quen</li></ul></li></ul>', 4, NULL, NULL),
(4, '10-1_3.jpg', 'Tai nghe', 435.00, 345.00, 0, 0, '', 1, NULL, NULL),
(5, 'xiaomi-mi-mix-2-300x300.jpg', 'Xiaomi Mi MIX 2', 16.99, 15.99, 15, 0, '<h2 style=\"text-align: justify;\"><strong>Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời <a href=\"https://www.thegioididong.com/dtdd/iphone-6-plus-64gb\" target=\"_blank\" title=\"iPhone 6 Plus\" type=\"iPhone 6 Plus\">iPhone 6 Plus</a>, &nbsp;iPhone 7 Plus&nbsp;được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.</strong></h2><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb1-1.jpg\" onclick=\"return false;\"><img alt=\"Diện mạo mới của iPhone 7 Plus\" data-original=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg\" class=\"lazy\" title=\"Diện mạo mới của iPhone 7 Plus\" src=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg\" style=\"display: block;\"></a><br>Thay đổi dãy nhựa an-ten bắt sóng được đưa vòng lên trên thay vì cắt ngang ở mặt lưng như trước.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb2-1.jpg\" onclick=\"return false;\"><img alt=\"Bút home cảm ứng\" data-original=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg\" class=\"lazy\" title=\"Bút home cảm ứng\" src=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb2-1.jpg\" style=\"display: block;\"></a><br>Nút Home quen thuộc không còn là phím vật lý nữa mà được thay thế bằng cảm ứng, nó sẽ rung lên khi bạn ấn. Vì đã dùng iPhone một thời gian rất dài, nên tôi công nhận rằng hơi khó để làm quen với nó, nhưng có lẽ chỉ mất vài ngày thôi.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb3-1.jpg\" onclick=\"return false;\"><img alt=\"Trang bị chuẩn chống nước cao cấp\" data-original=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg\" class=\"lazy\" title=\"Trang bị chuẩn chống nước cao cấp\" src=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb3-1.jpg\" style=\"display: block;\"></a><br>Cuối cùng chúng ta cũng có được chiếc iPhone vẫn sống khi rơi vào nước hay đi mưa không cần phải loay hoay tìm chỗ cất vì Apple đã mang chuẩn chống nước IP67 cho iphone 7 plus .(Lưu ý: không nên cố tình ngâm nước vì nếu có thiệt hại do vào nước sẽ không được Apple bảo hành).</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb4-1.jpg\" onclick=\"return false;\"><img alt=\"Màn hình Retina sáng và sắc nét\" data-original=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Màn hình Retina sáng và sắc nét\" src=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb4-1.jpg\"></a><br>Màn hình Retina trên 7 Plus hỗ trợ DCI-P3 gam màu rộng, nghĩa là chúng có khả năng tái tạo màu sắc trong phạm vi của sRGB. Nói đơn giản, chúng có thể hiển thị sống động hơn, sắc thái hình ảnh tốt hơn trước đó. Độ phân giải, mật độ điểm ảnh và kích thước màn hình vẫn giữ nguyên so với iPhone 6s Plus.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb5-1.jpg\" onclick=\"return false;\"><img alt=\"Dàn loa stereo\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Dàn loa stereo\" src=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb5-1.jpg\"></a><br>Lần đầu tiên iPhone xuất hiện tính năng âm thanh Stereo. Phim ảnh, podcast và các cuộc gọi loa ngoài bây giờ âm thanh rõ ràng hơn rất nhiều. Đó là do Apple đã dùng công nghệ thiết lập loa chứ không phải thiết kế 2 loa ngay trên mặt.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb6-.jpg\" onclick=\"return false;\"><img alt=\"Camera kép\" data-original=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg\" class=\"lazy\" title=\"Camera kép\" src=\"https://cdn2.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb6-.jpg\" style=\"display: block;\"></a></p><p>iPhone 7 Plus là&nbsp;chiếc iPhone đầu tiên được trang bị camera kép, đem lại khả năng chụp ảnh ở hai tiêu cự khác nhau. Camera thông thường vẫn chụp hình góc rộng, còn camera thứ hai có tiêu cự phù hợp để chụp chân dung, có tính năng chụp chân dung xóa phông (làm mờ hậu cảnh).&nbsp;</p><p>Với 1 chạm nhanh chóng bạn có thể chuyển đổi giữa chế độ 1x và zoom 2x, hoặc bạn có thể kéo thanh trượt hay dùng 2 ngón tay đến zoom. Apple đã thêm tính năng zoom kỹ thuật số lên đến 10x.</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb8-1.jpg\" onclick=\"return false;\"><img alt=\"Mặt lưng bóng bẩy\" data-original=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg\" class=\"lazy\" title=\"Mặt lưng bóng bẩy\" src=\"https://cdn4.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb8-1.jpg\" style=\"display: block;\"></a><br>Điểm nhấn ấn tượng nhất nằm ở mặt lưng của sản phẩm với hiệu ứng phản chiếu ánh sáng khi thay đổi góc nhìn rất đặc biệt. Hiệu ứng này cũng được áp dụng cho toàn bộ khung máy, từ cạnh trên, cạnh dưới cho đến các nút bấm nên cho cảm giác một thiết bị cực kỳ hoàn thiện, gần như không có bất kỳ một chi tiết thừa nào cả.&nbsp;</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb9.jpg\" onclick=\"return false;\"><img alt=\"Cấu hình cực mạnh\" data-original=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Cấu hình cực mạnh\" src=\"https://cdn1.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb9.jpg\"></a></p><p>Ngoài trái tim&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tong-quan-ve-chip-a10-fusion-cua-apple-885052\" target=\"_blank\" title=\"Apple A10 Fusion 4 nhân 64-bit\" type=\"Apple A10 Fusion 4 nhân 64-bit\">Apple A10 Fusion 4 nhân</a>&nbsp;với hiệu năng cực kì mạnh mẽ và ấn tượng thì iPhone 7 Plus còn được trang bị hệ điều hành mới nhất IOS 10 với nhiều tính năng bất ngờ, và thú vị.</p><p>“Táo khuyết” cũng không quên nhấn mạnh iPhone 7 Plus sẽ nhanh hơn iPhone đời đầu tới… 140 lần. Những ai mê chơi game trên di động cũng sẽ “phải lòng” iPhone mới khi có chip xử lý đồ họa được nâng tầm đúng chất “máy chơi game”.</p><p>Camera trước nâng cấp độ phân giải 7MP với khẩu độ mở lớn f/2.2 hỗ trợ chụp trong điều kiệu thiếu sáng tuyệt vời với công nghệ <a href=\"https://www.thegioididong.com/tin-tuc/cac-tinh-nang-chup-anh-camera-truoc-769270#retinaflash\" target=\"_blank\" title=\"Retina Flash\" type=\"Retina Flash\">Retina Flash</a>, Auto HDR</p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb10.jpg\" onclick=\"return false;\"><img alt=\"Camera trước\" data-original=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Camera trước\" src=\"https://cdn3.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb10.jpg\"></a></p><p><a class=\"preventdefault\" href=\"https://www.thegioididong.com/images/42/87840/iphone-7-plus-256gb11.jpg\" onclick=\"return false;\"><img alt=\"Chụp thiếu sáng với Retina Flash\" data-original=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg\" class=\"lazy\" style=\"display: block;\" title=\"Chụp thiếu sáng với Retina Flash\" src=\"https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb11.jpg\"></a></p><p>Iphone 7 plus theo bản thân đánh giá là một sự lựa chọn hợp lý trong tầm giá:</p><ul><li><strong>Ưu điểm:</strong><ul style=\"list-style-type:circle;\"><li>Hiệu năng rất cao</li><li>Camera trước sau rất tuyệt vời</li><li>Chống nước</li><li>Thời lượng pin tốt</li></ul></li><li><strong>Nhược điểm:</strong><ul style=\"list-style-type:circle;\"><li>Loại bỏ jack 3.5mm</li><li>Không thay đổi thiết kế quá nhiều mặc dù đã 3 năm</li><li>Phím Home cần thời gian để làm quen</li></ul></li></ul>', 1, NULL, NULL),
(6, 'mieng-dan-man-hinh-galaxy-j5-prime-avatar-300x300.jpg', 'Miếng dán màn hình Galaxy J5 Prime', 58.00, 24.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(7, 'macbook.jpg', 'Macbook Pro', 7.00, 251118.00, 15, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(8, 'ipad-pro-97-inch-21-300x300.jpg', 'iPad Pro 9.7 inch Wifi 32GB', 1.00, 14900.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(9, 'xiaomi-mi-mix-2-300x300.jpg', 'Xiaomi Mi MIX 2', 16.99, 15.99, 15, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(10, 'mieng-dan-man-hinh-galaxy-j5-prime-avatar-300x300.jpg', 'Miếng dán màn hình', 16.99, 15.99, 15, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(11, 'macbook.jpg', 'Macbook', 16.99, 15.99, 15, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(12, 'tainghe.jpg', 'Tai nghe', 16.99, 15.99, 15, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 4, NULL, NULL),
(13, 'oppo-f1s-7-300x300.jpg', 'OPPO F1S 7', 0.00, 500000.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(14, 'xiaomi-mi-mix-2-300x300.jpg', 'Xiaomi Mi MIX 2', 0.00, 500000.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(15, 'samsung-galaxy-s7-edge-blue-coral-edition-300x300.jpg', 'Samsung galaxy s7 Edge', 0.00, 500000.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(16, 'iphone-7-plus-256gb-300x300.jpg', 'Iphone 7 plus 256GB', 0.00, 500000.00, 15, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(17, 'oppo-f1s-7-300x300.jpg', 'OPPO F1S 7', 0.00, 500000.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(18, 'htc-desire-10-pro-300x300.jpg', 'HTC Desire 10 pro', 0.00, 500000.00, 15, 0, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', 1, NULL, NULL),
(39, '2017-11-22-13-36-05Tulips.jpg', '1', 1.00, 1.00, 1, 0, '<p>11</p>', 2, '2017-11-22 06:35:43', '2017-11-22 06:36:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `cate_parent`, `created_at`, `updated_at`) VALUES
(1, 'Điện Thoại', 0, NULL, NULL),
(2, 'Tablet', 0, NULL, NULL),
(4, 'Phụ Kiện', 0, NULL, NULL),
(5, 'Máy Cũ', 0, NULL, NULL),
(6, 'Sim, Thẻ', 0, NULL, NULL),
(8, 'IPHONE', 1, NULL, NULL),
(9, 'OPPO', 1, NULL, NULL),
(10, 'SAMSUNG', 1, NULL, NULL),
(11, 'SONY', 1, NULL, NULL),
(12, 'ASUS', 1, NULL, NULL),
(13, 'NOKIA', 1, NULL, NULL),
(14, 'LG', 1, NULL, NULL),
(15, 'IPHONE', 2, NULL, NULL),
(16, 'OPPO', 2, NULL, NULL),
(17, 'SAMSUNG', 2, NULL, NULL),
(18, 'SONY', 2, NULL, NULL),
(19, 'ASUS', 2, NULL, NULL),
(20, 'NOKIA', 2, NULL, NULL),
(21, 'LG', 2, NULL, NULL),
(22, 'ASUS', 3, NULL, NULL),
(23, 'DELL', 3, NULL, NULL),
(24, 'HP', 3, NULL, NULL),
(25, 'ACER', 3, NULL, NULL),
(26, 'MSI', 3, NULL, '2017-11-21 08:48:28'),
(27, 'ádasd', 1, '2017-11-22 01:13:25', '2017-11-22 01:13:25'),
(28, 'dđ', 6, '2017-11-22 01:13:41', '2017-11-22 01:13:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `title`, `sub_title`, `slide_picture`, `created_at`, `updated_at`) VALUES
(1, 'Máy tính bảng Samsung galaxy Tab S', 'Sự lựa chọn hoàn hảo dành cho bạn', 'home1_slider1.jpg', NULL, NULL),
(2, 'IPHONE SE', 'Làm cho cuộc sống trở nên dể dàng hơn', 'home1_slider2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `address`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'duckhanhkhong', 'duckhanhkhong', 'khongk39@gmail.com', '$2y$10$kYm/nUlxbGc7msKTDCRYSOulLmsuCFEun49FKmRU1/QeXLnq/Lue6', 123456789, 'duckhanhkhongasd112312', 1, 'umpIjDLV1kEsIey82otHVsDkdP5XwIEOaNvJ7yHFsux5wIcA1EQyJWLgiY1h', '2017-11-16 09:25:11', '2017-11-16 09:25:11'),
(2, 'taikhoan1', 'taikhoan1', 'taikhoan1@gmail.com', '$2y$10$McZMjmO3cY12HyA4vADoZeMxeic5iErTuWWTGKOdRuiRCXauC5JnW', 123456479, 'taikhoan1', 0, 'uWDR6bTjrQ7xNIr7OWIavWFanozO91GBOvrnkkLslGyH3sHTq9Uh6Xq5hL0z', '2017-11-16 09:36:30', '2017-11-16 09:36:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images_product`
--
ALTER TABLE `images_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `images_product`
--
ALTER TABLE `images_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images_product`
--
ALTER TABLE `images_product`
  ADD CONSTRAINT `images_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
