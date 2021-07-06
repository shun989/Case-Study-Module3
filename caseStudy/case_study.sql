-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 05:03 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_12_095220_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chuối', 30000.00, 'Chuối chín rất tốt cho người bị thiếu máu\r\nChuối có hàm lượng sắt cao nên mang lại lợi ích trong điều trị bệnh thiếu máu rất hiệu quả. Ăn chuối giúp cơ thể kích thích sản xuất Hemoglobin trong máu nên có thể giảm nguy cơ thiếu máu.\r\n\r\nNhất là khi bạn hoạt động nhiều, cơ thể mất nước và bài tiết nhiều mồ hôi khiến cơ thể mệt mỏi sẽ làm cho nồng độ Kali trong máu giảm. Vì thế ăn chuối sẽ giúp bổ sung Kali rất tốt, phòng và điều trị chứng thiếu Kali máu.\r\n\r\nĂn chuối sẽ giảm nguy cơ về bệnh tim mạch và đột quỵ\r\nChuối là nguồn thực phẩm giàu dinh dưỡng và nhiều Kali, nó giúp cân bằng chất lỏng ở tế bào trong cơ thể và giúp kiểm soát huyết áp, từ đó làm giảm nguy cơ đau tim và đột quỵ. Nghiên cứu đã chỉ ra rằng, ăn chuối thường xuyên có thể giảm nguy cơ đột quỵ đến 40%. Khi cơ thể thiếu kali sẽ làm cho nhịp tim không đều, nhịp quá nhanh, huyết áp hạ thấp', 'Không hạt', 'https://thucphamdongxanh.com/wp-content/uploads/2019/09/chuoinammy2-600x450.jpg', NULL, NULL),
(2, 'Bưởi Năm Roi', 50000.00, 'Bưởi năm roi được biết đến như món tráng miệng khoái khẩu, thanh mát sau mỗi bữa ăn trong gia đình hoặc được dùng nhiều để ép lấy nước uống, hay làm gỏi bưởi. Vỏ bưởi dùng để chiết xuất tinh dầu có tác dụng thần kỳ trong việc giúp chị em phụ nữ làm đẹp, giữ gìn nhan sắc, đẩy lùi lão hóa và giảm căng thẳng. Còn về phần hạt bưởi đã được các nghiên cứu chỉ ra rằng có khả năng chữa bệnh tiểu đường và tim mạch.', 'Có hạt', 'https://thucphamdongxanh.com/wp-content/uploads/2019/07/buoi-nam-roi-ngon.jpg', NULL, NULL),
(3, 'Cam Vàng', 40000.00, 'Cam vàng “thần dược”tự nhiên trong làng chăm sóc sức khỏe\r\nCam vàng tươi cung cấp nhiều dưỡng chất cho cơ thể như: vitamin C, glucose.. và hàm lượng chất xơ dồi dào. Cam vàng là một trong những loại quả tốt nhất hỗ trợ thúc đẩy sức khỏe tối ưu.\r\n\r\nGiúp hệ tiêu hóa khỏe mạnh\r\nCam tự hào là một loại trái cây giàu chất xơ có tác dụng tuyệt vời hỗ trợ cho đường tiêu hóa, ngăn ngừa tình trạng viêm loét dạ dày, ngăn ngừa tình trạng táo bón, giúp cho đường ruột hấp thụ dinh dưỡng tốt hơn.\r\n\r\nThêm một quả cam vào chế độ ăn hàng ngày có tác dụng không nhỏ trong việc giảm nguy cơ ung thư dạ dày.\r\n\r\nGiảm nguy cơ mắc bệnh tim mạch\r\nCác nghiên cứu đã chỉ ra rằng, trong cam vàng có các chất chống oxy hóa giúp ngăn ngừa quá trình oxy hóa cholesterol. Ngoài ra trong đó còn chứa rất nhiều kali, một loại khoáng chất cần thiết cho hệ tim mạch.', 'Có hạt', 'https://thucphamdongxanh.com/wp-content/uploads/2019/07/s6m8nVR.jpg', NULL, NULL),
(4, 'Chôm chôm', 60000.00, ' Chôm chôm tróc: Loại này cũng ngon nhất là khi quả còn tươi, vỏ ngoài đỏ điểm vàng, gai tua tủa và có độ giòn, xanh đầu gai, khi bóc không rỉ mật hoặc chảy nước thì quả chôm chôm sẽ tróc và rất giòn.', 'Có hạt', 'https://thucphamdongxanh.com/wp-content/uploads/2019/07/Rwx1WBC.jpg', NULL, NULL),
(5, 'Dưa Hấu', 35000.00, 'Dưa hấu chứa hàm lượng nước rất lớn, vì vậy nó được xem như loại trái cây giải nhiệt số 1 trong những ngày hè nóng nực. Bên cạnh đó, loại quả này còn có rất nhiều lợi ích tuyệt vời cho sức khỏe.', 'Có hạt', 'https://m.soibien.vn/media/img/product/365/03/Ch%E1%BA%A3%20m%E1%BB%B1c%20(4)_a281617077497.png', NULL, '2021-06-14 02:29:04'),
(7, 'Lê', 40000.00, 'Lê có tác dụng giảm đau và viêm gây ra do căn bệnh viêm khớp. Bên cạnh đó, những người có hệ thống miễn dịch kém cũng nên thường xuyên ăn lê bởi loại quả này cung cấp lượng Vitamin dồi dào và nhiều dưỡng chất thiết yếu khác. Cụ thể như Vitamin B2, B3, B6, K, C, mangan, canxi, kali, folate,… Những hợp chất này sẽ giúp tăng cường hệ thống miễn dịch, tăng sức đề kháng cho người sử dụng.', 'Có hạt', 'https://thucphamdongxanh.com/wp-content/uploads/2019/07/tsZDsyT.jpg', NULL, NULL),
(8, 'Nhãn Huế', 50000.00, 'Trong cùi Nhãn Huế tươi có chứa: nước (77,15%), độ tro (0.01%), chất béo (0,13%), protit (1.47%), hợp chất có Nitơ tan trong nước (20,55%), đường Sacaroza (12,25%), Vitamin A và B.\r\n\r\nĐối với cùi nhãn khô có chứa: nước (0,85%), chất không tan trong nước (19,39%), chất tan trong nước (79,77%), độ trơ (3,36%). Trong phần tan trong nước có chứa: Sacaroza (0,22%). Glucozo (26,91%), axit theatric (1,26%) và chất có Nitơ (6,03%).', 'Có hạt', 'https://thucphamdongxanh.com/wp-content/uploads/2019/09/Bao-ton-nhan-Hue_1.jpg', NULL, NULL),
(9, 'Mít mật ống', 100000.00, 'Ngăn ngừa ung thư\r\nCác gốc tự do trong cơ thể được tạo ra do stress oxy hóa và gây tổn thương ADN, cung cấp một môi trường thích hợp dẫn tới sản sinh tế bào ung thư. Mít chứa nhiều chất chống oxy hóa, flavonoid và các chất dinh dưỡng thực vật giúp ngăn chặn stress oxy hóa và do đó, ngăn ngừa ung thư.\r\nCải thiện sức khỏe của xương\r\nMít chứa nhiều canxi hơn sữa. Nó cũng có kali giúp ngăn ngừa sự mất canxi thông qua thận. Nó có vitamin C giúp hấp thu nhiều canxi hơn. Do đó, mít giúp tăng mật độ xương.\r\n...', 'Có hạt', 'https://icdn.dantri.com.vn/2018/6/16/an-mit-15291167595851817740407.jpg', '2021-06-14 01:56:29', '2021-06-14 01:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Tuan admin', 'admin@gmail.com', NULL, '$2y$10$/4SjBpiplJx8L9.xcdGsu.9L2ZDoTPSLQa0ERfdZVcsuAMvjNaq0S', NULL, NULL, NULL, 1),
(2, 'Minh Tuan', 'minhtuanvt89@gmail.com', NULL, '$2y$10$/4SjBpiplJx8L9.xcdGsu.9L2ZDoTPSLQa0ERfdZVcsuAMvjNaq0S', NULL, '2021-06-13 19:50:58', '2021-06-13 19:50:58', 0),
(3, 'nguyen van a', 'vana@gmail.com', NULL, '$2y$10$V/lKKsCHcR3YnGQXNlwaCejk57OD05SpkjeabNkP6x/EMF64CAVn.', NULL, '2021-06-13 23:44:25', '2021-06-13 23:44:25', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
