-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 11, 2024 lúc 01:37 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duca`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'macchu', 'huumac@gmail.com', '12345', '', '', 'VIETNAM', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(100) NOT NULL,
  `box_icon` varchar(100) NOT NULL,
  `box_title` varchar(255) NOT NULL,
  `box_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_icon`, `box_title`, `box_desc`) VALUES
(4, 'fa fa-trash', 'BEST IN MARKET', 'offer'),
(6, 'fa fa-shipping-fast fa-5', 'FAST SERVICE', 'raw'),
(7, 'fa fa-user', 'EDIT YOURSELF', 'edit'),
(8, 'fa fa-trash', 'DELETE EVERYTHING', 'delete');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(7, 'GUITAR CLASSIC', ''),
(8, 'GUITAR ĐIỆN', ''),
(9, 'PIANO', ''),
(10, 'GUITAR BASS', ''),
(13, 'TRỐNG ĐIỆN', ''),
(14, 'CAPO', ''),
(15, 'DÂY ĐEO ĐÀN', ''),
(16, 'TAI NGHE', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_id`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(18, 236385455, 342, 'Paytm', 232323, '2021-05-18'),
(20, 1601455995, 599, 'google pay', 232323, '2021-05-11'),
(21, 1601455995, 599, 'Bank transfer', 112121, '2021-05-10'),
(22, 2098939645, 299, 'Bank transfer', 232323, '2021-06-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(39, 23, 7, '2024-10-10 12:23:53', 'CORDOBA C1M 02685', 'cordoba-c1m-02685-400x400.jpg', 'cordoba-c1m-02685-400x400.jpg', 'cordoba-c1m-02685-400x400.jpg', 75, 'mô tả sản phẩm\r\nVideo\r\nCórdoba C1M là cây đàn guitar dây nylon hoàn hảo cho học sinh ở mọi trình độ và hoàn toàn có thể sử dụng trong lớp học hoặc ở nhà. Thoải mái và dễ chơi, đây là cây đàn đầu tiên tuyệt vời với giá cả phải chăng.\r\n\r\n', 'guitar classic CORDOBA C1M 02685'),
(40, 23, 7, '2024-10-10 12:25:38', 'Cordoba Fusion 5', 'guitar-classic-cordoba-fusion-5-kem-bag-guclcor-05407-400x400.jpg', 'guitar-classic-cordoba-fusion-5-kem-bag-guclcor-05407-400x400.jpg', 'guitar-classic-cordoba-fusion-5-kem-bag-guclcor-05407-400x400.jpg', 300, 'Guitar Classic Cordoba FUSION 5 được thiết kế dáng Cutaway giúp người chơi dễ dàng bấm ở các ngăn cao, hợp âm cuối một cách dễ dàng, vừa tăng thêm tính thẩm mỹ cho cây đàn. Mặt top của đàn là gỗ nguyên tấm Solid mang đến âm thanh trong trẻo, ấm áp, vang hơn góp phần cân bằng giữa âm Bass và âm Treble.', 'Cordoba Fusion 5 guitar '),
(41, 23, 7, '2024-10-10 12:27:15', 'Cordoba Stage', 'guitar-cordoba-stage-001-400x400.jpg', 'guitar-cordoba-stage-001-400x400.jpg', 'guitar-cordoba-stage-001-400x400.jpg', 230, 'Guitar Cordoba Stage có tông đàn đúng chuẩn, Mid’ed. Sẵn sàng cho các kích thước sân khấu và phòng thu khác nhau. Mid’ed là sound âm thanh sẵn sàng cho việc đặt Micro thu Guitar', 'Cordoba Stage guitar classic'),
(42, 23, 7, '2024-10-10 12:28:27', 'Tanglewood TWBB SDE', 'tanglewoodguitars-twbbsde-01-400x400.jpg', 'tanglewoodguitars-twbbsde-01-400x400.jpg', 'tanglewoodguitars-twbbsde-01-400x400.jpg', 0, 'mô tả sản phẩm\r\nthông số kỹ thuật\r\nVideo\r\nĐàn guitar acoustic Tanglewood TWBB-SDE là mẫu đàn thiết kế đẹp, âm thanh chất lượng trong tầm giá 6 triệu. Thực sự bạn sẽ không tin vào chất lượng âm thanh và khả năng chơi với mức giá này.', '250'),
(43, 23, 8, '2024-10-10 12:31:59', 'Fender Player Plus ', 'Ảnh chụp màn hình 2024-10-10 193034.png', 'Ảnh chụp màn hình 2024-10-10 193034.png', 'Ảnh chụp màn hình 2024-10-10 193034.png', 400, 'Kết hợp giữa thiết kế Fender® cổ điển với các tính năng lấy người chơi làm trung tâm cùng lớp phủ mới thú vị, Player Plus Telecaster® mang đến khả năng chơi tuyệt vời và phong cách không thể nhầm lẫn. Được hỗ trợ bởi một bộ Pickup Player Plus Noiseless ™, Player Plus Tele® mang đến âm thanh Tele® ngọt ngào, ấm áp - không có tiếng xì, ồn.\r\n\r\n', 'Fender Player Plus Telecaster MN CMJ'),
(44, 23, 8, '2024-10-10 12:33:21', 'Fender Mij Fsr-Collection', 'fender-mij-fsr-collection-hydrid-ii-strat-rosewood-daphne-blue-5631100304-400x400.jpg', 'fender-mij-fsr-collection-hydrid-ii-strat-rosewood-daphne-blue-5631100304-400x400.jpg', 'fender-mij-fsr-collection-hydrid-ii-strat-rosewood-daphne-blue-5631100304-400x400.jpg', 500, 'Series MIJ Hydrid đã là một trong những series nổi tiếng từ trước đến nay, từ chất lượng âm thanh cũng như độ hoàn thiện của cây đàn. Với Hydrid II phiên bản được cải tiến từ Hydrid, chất lượng về âm thanh vẫn được giữ nguyên thêm vào đó hãng sẽ cho chúng ta màu sắc mới và độ hoàn thiện tốt nhất.\r\n\r\nVề cấu hình gỗ, Body gỗ Alder. Dáng Strat có màu Artic White được phủ lớp sơn Polyester. Cần đàn Modern “C” Shape có độ cong mặt phím 9.5” (241mm), cần nhỏ gọn khiến người chơi có thể dễ dàng chơi hơn.', 'Fender Mij Fsr-Collection'),
(45, 24, 9, '2024-10-10 14:45:04', 'Kawai K-300', 'dan-piano-kawai-k300-mau-den-sang-trong.jpg', 'dan-piano-kawai-k300-mau-den-sang-trong.jpg', 'dan-piano-kawai-k300-mau-den-sang-trong.jpg', 1000, 'Đàn piano Kawai K300 là sản phẩm tiêu biểu trong dòng K series của Kawai. Tiếp nối sự thành công của người anh tiền nhiệm là piano Kawai K3, model K3 là cây đàn “Piano Acoustic” đạt danh hiệu cây đàn piano của năm trong suốt 4 năm liền từ 2008 – 2011, do độc giả của tạp chí MMR tại Mỹ bình chọn.', 'Kawai K-300'),
(46, 24, 9, '2024-10-10 14:48:54', 'Kawai GL-10', 'GL10-Polished-Ebony-400x400.jpg', 'GL10-Polished-Ebony-400x400.jpg', 'GL10-Polished-Ebony-400x400.jpg', 2000, 'mô tả sản phẩm\r\nthông số kỹ thuật\r\nphụ kiện\r\nVideo\r\nĐàn piano kawai GL-10 được thiết kế tỉ mỉ đến từng chi tiết có chất lượng âm thanh tuyệt vời. Piano Kawai GL-10 thuộc dòng \"baby grand\" được sản xuất và lắp ráp thủ công theo nguyên tắc cổ điển, sẽ là cây đàn phù hợp cho những cuộc thi âm nhạc, biểu diễn. Loại đàn này cũng được khá nhiều gia đình chọn lựa để trưng bày như một loại nội thất cao cấp và kết hợp tập luyện âm nhạc.', 'Kawai GL-10'),
(47, 27, 13, '2024-10-11 00:14:50', 'Alesis Crimson II SE', 'CRIMSONIISE-400x400.jpg', 'CRIMSONIISE-400x400.jpg', 'CRIMSONIISE-400x400.jpg', 500, 'Alesis Crimson II Kit là bộ trống điện tử 9 chi tiết có đệm mặt lưới độc quyền của Alesis ( bằng sáng chế Hoa Kỳ 9.424.827) mang lại biểu cảm và cảm giác hoàn hảo. Bộ sản phẩm gồm 1 trống kick 8 inch, trống snare dual-zone 12inch, hai toms dual-zone 8inch, 1 tom sàn dual-zone 10inch, 1 hihat 12 inch đi kèm pedal, 2 crashes tripe-zone 14inch. 1 giá đỡ 4 trụ mạ crome với giá đỡ thanh giằng riêng biệt để toàn bộ bộ trống được bảo vệ vững chãi hơn, kể cả khi bạn dùng sức mạnh rất lớn.', 'Alesis Crimson II SE'),
(48, 27, 13, '2024-10-11 00:15:47', 'Roland TD-17KL', 'td-17kl-400x400-400x400.jpg', 'td-17kl-400x400-400x400.jpg', 'td-17kl-400x400-400x400.jpg', 723, 'Khi bạn có những đam mê nghiêm túc với bộ môn trống, bạn rất cần một bộ trống phù hợp với tham vọng trở thành một tay trống chuyên nghiệp của mình. Dòng V-Drums TD-17 cho phép kỹ thuật của bạn tỏa sáng thực sự, được tích hợp tính năng của các công cụ đào tạo giúp thúc đẩy năng lượng phấn đấu để tăng khả năng chơi trống của bạn. Kết hợp một động cơ âm thanh TD-50 với các miếng đệm mới được phát triển tạo ra một bộ trống điện tử giá cả phải chăng, gần giống với trống cơ. Trong khi đó, một loạt các chức năng huấn luyện tích hợp sẽ theo dõi kỹ thuật của bạn, đo lường sự tiến bộ của bạn và tăng động lực cố gắng cho bạn. Trở thành một tay trống tốt hơn trước giờ vẫn là công việc không hề dễ dàng, nhưng TD-17 có thể giúp bạn đạt được điều đó.', 'Roland TD-17KL'),
(51, 23, 10, '2024-10-11 01:37:45', 'Squier FSR Affinity', 'squier-fsr-affinity-p-bass-pj-maple-surf-green-0378552557-400x400.jpg', 'squier-fsr-affinity-p-bass-pj-maple-surf-green-0378552557-400x400.jpg', 'squier-fsr-affinity-p-bass-pj-maple-surf-green-0378552557-400x400.jpg', 300, 'Affinity P Bass là một sự lựa chọn hoàn hảo để bắt đầu làm quen với guitar Bass. Squier Affnity Precision Bass PJ được dựa trên thiết kế và tone của những cây Precision Bass – huyền thoại của Fender. Với những đặc tính nổi bật như body mỏng và nhẹ, cần đàn “C” shape, bộ khoá Vintage-Style để tune dễ dàng và cao độ chính xác. Squier Affinity Bass dễ dàng tiếp cận tới những người mới chơi.', 'Squier FSR Affinity'),
(55, 0, 0, '2024-10-11 02:21:31', 'Squier AFFINITY ', 'squier-affinity-series-precision-bass-pj-3.jpg', 'squier-affinity-series-precision-bass-pj-3.jpg', 'squier-affinity-series-precision-bass-pj-3.jpg', 680, 'Squier® Affinity Series ™ Precision Bass® PJ mang đến thiết kế huyền thoại và giai điệu tinh túy cho tay bass đầy tham vọng ngày nay. P Bass® này có một số cải tiến thân thiện với người chơi như body mỏng và nhẹ, cổ hình chữ “C” mỏng và thoải mái và khoá điều chỉnh dây kiểu cổ điển để điều chỉnh mượt mà, chính xác. Được trang bị Pickup Neck P Bass Singlecoil. mô hình này sẵn sàng giúp đặt nền móng cho bất kỳ người chơi nào ở bất kỳ giai đoạn nào.', 'Squier AFFINITY '),
(56, 65, 14, '2024-10-11 02:39:17', 'Xyax Guitar Capo ', 'images.jpg', 'images.jpg', 'images.jpg', 3, '', 'Xyax Guitar Capo '),
(57, 65, 14, '2024-10-11 02:39:55', 'Ukulele Capo', 'vn-11134207-7r98o-lz49fag5mt9d1b.jpg', 'vn-11134207-7r98o-lz49fag5mt9d1b.jpg', 'vn-11134207-7r98o-lz49fag5mt9d1b.jpg', 2, '', 'Ukulele Capo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL,
  `p_cat_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `p_cat_title`, `p_cat_desc`, `p_cat_img`) VALUES
(23, 'GUITAR', '', 0),
(24, 'PIANO', '', 0),
(25, 'SÁO', '', 0),
(26, 'VIOLIN', '', 0),
(27, 'TRỐNG', '', 0),
(28, 'SAXOPHONE', '', 0),
(33, 'DÂY ĐÀN', '', 0),
(35, 'SHAVING FOAM', '', 0),
(36, 'FACIAL KIT', '', 0),
(37, 'POWDER', '', 0),
(38, 'LIP CARE', '', 0),
(39, 'EYE LINER', '', 0),
(40, 'EYE LINER', '', 0),
(41, 'FACE CRAEM', '', 0),
(42, 'NAILPOLISH', '', 0),
(43, 'BEAUTICREAM', '', 0),
(44, 'LACME', '', 0),
(45, 'SCIN CARE', '', 0),
(46, 'INNER WEAR', '', 0),
(47, 'UNDER WEAR', '', 0),
(48, 'CAP', '', 0),
(49, 'HANKEY', '', 0),
(50, 'DETERGENT', '', 0),
(51, 'DEODODRANT', '', 0),
(52, 'FACEWASH', '', 0),
(53, 'HAIR GEL', '', 0),
(54, 'HARPIC', '', 0),
(55, 'PERFUME', '', 0),
(56, 'WALLET', '', 0),
(57, 'BELT', '', 0),
(58, 'SOAP', '', 0),
(59, 'TOOTHPASTE', '', 0),
(60, 'HANDWASH', '', 0),
(61, 'SHAMPOO', '', 0),
(62, 'HAIR OIL', '', 0),
(63, 'ROOM FRAGRANCE', '', 0),
(65, 'PHỤ KIỆN', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `Id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`Id`, `slider_name`, `slider_image`, `slider_url`) VALUES
(18, 'sale', 'edef6ac2e2721688a25316d7bff4e825.gif', 'http://localhost/ecom/details.php?pro_id=10'),
(23, 'huu', '66c23929fbc953b91502905b5e140744.gif', 'a'),
(24, '332', '3dc3d26d02d666ab5b664c8d039f4b2f.gif', 'ừ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
