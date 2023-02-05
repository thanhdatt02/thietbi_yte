-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 03:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhd`
--

-- --------------------------------------------------------

--
-- Table structure for table `dhd_category`
--

CREATE TABLE `dhd_category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dhd_category`
--

INSERT INTO `dhd_category` (`cat_id`, `cat_title`) VALUES
(1, 'máy đo huyết áp'),
(2, 'máy đo đường huyết'),
(3, 'Nhiệt kế điện tử');

-- --------------------------------------------------------

--
-- Table structure for table `dhd_product`
--

CREATE TABLE `dhd_product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `desc` longtext NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `product_show` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dhd_product`
--

INSERT INTO `dhd_product` (`id`, `cat_id`, `product_name`, `price`, `code`, `desc`, `thumb`, `product_show`) VALUES
(0, 1, 'Máy đo huyết áp Sinocare BA-801', 699000, 'dat#1', 'Máy đo huyết áp Sinoheart BA-801\r\n        Thương hiệu Sinocare nổi tiếng với các dòng máy đo sức khỏe đang làm mưa làm gió trên thị trường với mẫu máy đo đường huyết Sinocare Safe Accu giá rẻ phổ thông mà chất lượng và độ chính xác cao.\r\n         ', '1_product1.jpg', '- Máy đo huyết áp Sinoheart BA-801 là dòng sản phẩm bán chạy trên toàn cầu. Với ông nghệ hoàn toàn vượt trội và đặc biệt là công nghệ hoàn toàn mới so với tất cả các dòng máy đo huyết áp trên thị trường.\r\n        - Tính năng:90 bộ lưu trữ (2 người), IHB rối loạn nhịp tim phát hiện, bảng phân loại huyết áp của WHO. Intelligense tạo áp suất\r\n        Máy Đo Huyết Áp Bắp Tay Sinocare Sinoheart BA-801 là dòng sản phẩm bán chạy trên toàn cầu.\r\nVới công nghệ hoàn toàn vượt trội và đặc biệt là công nghệ hoàn toàn mới so với tất cả các dòng máy đo huyết áp trên thị trường.\r\nTính năng: 90 bộ lưu trữ (2 người), IHB rối loạn nhịp tim phát hiện, bảng phân loại huyết áp của WHO. Intellisense tạo áp suất.\r\nBA-801 thể hiện đầy đủ 3 chỉ số: huyết áp tối đa, tối thiểu, nhịp tim.\r\nThao tác đo đơn giản, độ chính xác cao, màn hình to, dễ nhìn thích hợp cho người cao tuổi.\r\nLà sản phẩm đo trên bắp tay nên phù hợp với mọi đối tượng đo ngay cả người bị tiểu đường lẫn xơ vữa động mạch.'),
(1, 1, 'Máy đo huyết áp bắp tay Omron Hem 7121', 999000, 'dat#2', 'Tính năng nổi bật của máy đo huyết áp Omron Hem 7121: Sử dụng công nghệ intellisense cảm biến tuyệt vời cho kết quả đo nhanh và độ chính xác cao Bộ nhớ lưu được 30 kết quả đo tiện cho việc xem lại kết quả đo Máy gọn, nhỏ, dễ sử dụng với giá thành hợp lý Thông số kỹ thuật của máy đo huyết áp Hem 7121: Phương pháp đo: Đo dao động. Giới hạn đo: Huyết áp: 0 tới 299 mm Hg; Nhịp tim: 40 tới 180 nhịp/phút. Độ chính xác: Huyết áp: ±3 mm Hg; Nhịp tim: ±5%. Tự động bơm và xả khí. Pin: 4 pin AA hoặc bộ đổi điện Omron( mua thêm) Trọng lượng: 250g (không gồm pin). Kích thước máy : Khoảng 103 (rộng) x 80 (cao) x 129 (dài) Phụ kiện kèm theo: Vòng bít cỡ trung bình; Hướng dẫn sử dụng; Bộ pin.', '1_product2.jpg', 'Tính năng nổi bật của máy đo huyết áp Omron Hem 7121:\r\n\r\n        Sử dụng công nghệ intellisense cảm biến tuyệt vời cho kết quả đo nhanh và độ chính xác cao\r\n        \r\n        Bộ nhớ lưu được 30 kết quả đo tiện cho việc xem lại kết quả đo\r\n        \r\n        Máy gọn, nhỏ, dễ sử dụng với giá thành hợp lý\r\n        \r\n        Thông số kỹ thuật của máy đo huyết áp Hem 7121:\r\n        \r\n        Phương pháp đo: Đo dao động.\r\n        \r\n        Giới hạn đo: Huyết áp: 0 tới 299 mm Hg; Nhịp tim: 40 tới 180 nhịp/phút.\r\n        \r\n        Độ chính xác: Huyết áp: ±3 mm Hg; Nhịp tim: ±5%.\r\n        \r\n        Tự động bơm và xả khí.\r\n        \r\n        Pin: 4 pin AA hoặc bộ đổi điện Omron( mua thêm)\r\n        \r\n        Trọng lượng: 250g (không gồm pin).\r\n        \r\n        Kích thước máy : Khoảng 103 (rộng) x 80 (cao) x 129 (dài)\r\n        \r\n        Phụ kiện kèm theo: Vòng bít cỡ trung bình; Hướng dẫn sử dụng; Bộ pin.'),
(2, 1, 'Máy Đo Huyết Áp Tự Động Omron HEM-7156', 1350000, 'dat#3', 'Độ chính xác là một trong những yêu cầu quan trọng nhất trong theo dõi huyết áp. Với vòng bít IntelliWrap ™ 360° chính xác, HEM-7156 của OMRON giúp bạn có được các kết quả đo chính xác một cách dễ dàng, bất kể vòng bít được quấn ở nhà như thế nào. Giúp bạn có được kết quả đo chính xác như ở phòng khám của bác sĩ!\r\n        ', '1_product3.jpg', 'Tự động áp dụng đúng mức áp suất để đo nhanh, chính xác và thoải mái hơn\r\n\r\n        IntelliSense & thương mại; Máy bơm hơi vòng bít đến mức lý tưởng với mỗi lần sử dụng. Người dùng không cần điều chỉnh để chọn mức bơm hơi. Điều này đặc biệt thuận tiện cho người sử dụng bị tăng huyết áp và cho những người bị rối loạn nhịp tim hoặc rối loạn tim, vì huyết áp của họ có khả năng lên xuống thất thường.\r\n        \r\n        Công nghệ IntelliSense tiên tiến\r\n        \r\n        Tự động hoàn toàn\r\n        Mức độ bơm hơi được thiết kế phù hợp cho từng cá nhân để đạt được sự thoải mái tối đa\r\n        Van xả xả hơi nhanh cho quá trình đo nhanh chóng'),
(3, 2, 'Máy đo đường huyết Sinocare', 399000, 'dat#4', 'MÁY ĐO ĐƯỜNG HUYẾT SINOCARE\r\n        Thương hiệu: Sinocare\r\n        Xuất xứ: TQ\r\n        Bảo hành máy: Vĩnh viễn', '2_product1.jpg', 'Tính năng nổi bật:\r\n        – Sinocare là sản phẩm cải tiến mới không sử dụng mã code que thử. Mang đến sự tiện ích và dễ sử dụng cho người dùng.\r\n        – Sinocare được sản xuất dựa trên công nghệ tiên tiến của Đức\r\n        Cho kết quả nhanh, độ chính xác cao, tin cậy.\r\n        – Máy Sinocare sử dụng que thử tự động lấy lượng máu rất nhỏ 0.6µl (microliter) ở vùng lấy máu tự chọn ngón tay. Máy đo đường huyết Sinocare có thể đo trong phạm vi từ 20 – 630mg/dl (1.1-35mmol/l).\r\n        – Kết quả sẽ hiển thị rõ trên màn hình LCD trong 10 giây.\r\n        – Tự báo lỗi khi lượng máu không đủ\r\n        – Với bộ nhớ lưu trữ được 480 lần đo.\r\n        – Chỉ dùng 1 pin 3V duy nhất.\r\n        – Thân máy chắc chắn, nhẹ và dễ sử dụng.\r\n        – Thiết kế nhỏ gọn, dễ sử dụng, phù hợp để mang theo khi đi xa, tiện lợi mọi lúc, mọi nơi.'),
(4, 2, 'Máy đo đường huyết Accu Chek Active', 949000, 'dat#5', '- Máy đo đường huyết Accu Check Active thế hệ mới (2017) không cần mã CODE (thẻ mã hóa). Tiện lợi hơn cho người sử dụng.\r\n\r\n        - Kim lấy máu rất dễ sử dụng, có thể điều chỉnh được độ nông sâu của kim cho phù hợp với tay của từng người sử dụng.\r\n        ', '2_product2.jpg', 'TÍNH NĂNG NỔI BẬT\r\n\r\n        Đơn giản để kiểm tra đường huyết hàng ngày.\r\n        \r\n        Cho kết quả chính xác:\r\n        \r\n         Cho kết quả nhanh và chính xác trong vòng 5 giây. Máy Accu-Chek Active đáp ứng đúng tiêu chuẩn ISO 15197:2013*.\r\n        \r\n        Có thể kiểm chứng kết quả đo bằng việc so sánh với dãy màu trên thân lọ que.\r\n        Dễ sử dụng: \r\n        \r\n        Đơn giản trong 6 bước ra cho ra kết quả.\r\n        Màn hình lớn với hai nút bấm giúp dễ dàng đọc kết quả.\r\n        Có thể đo trong máy và ngoài máy.'),
(5, 2, 'Máy đo đường huyết Accu Chek Guide', 1499000, 'dat#6', 'Máy đo đường huyết Accu Chek Guide được xem là một trong những chiếc máy đo đường huyết tốt nhất hiện nay với bộ máy hoạt động thông minh, cho kết quả cực nhanh, cực chính xác. Nếu bạn đang băn khoăn không biết máy đo đường huyết loại nào tốt thì chiếc máy này là một lựa chọn hoàn hảo.\r\n        ', '2_product3.jpg', 'Thông số kỹ thuật của máy đo tiểu đường Accu Chek Guide:\r\n        Tên sản phẩm: Máy đo đường huyết Accu-Chek® Guide\r\n        Xuất xứ: Roche – Mỹ\r\n        Tự động khởi động khi gắn que thử vào máy\r\n        Tự động tắt máy khi rút que thử ra\r\n        Tự động tắt máy sau 2 phút nếu không sử dụng\r\n        Nguồn năng lượng: 1 pin ( loại CR 2032)\r\n        Tuổi thọ của pin: 1 viên pin có thể đo được 1.000 que thử hoặc khoảng 1 năm\r\n        Thời gian đo: 5 giây.\r\n        Nhiệt độ tốt nhất: Khi hoạt động:+6° đến + 44°C.\r\n        Điều kiện bảo quản máy: 25°C đến +70°C không có pin trong máy,-10°C đến +50°C có pin trong máy\r\n        Giới hạn độ ẩm cho máy hoạt động: 10-90%.\r\n        Trọng lượng máy: tương đương 62g kèm pin.\r\n        Truyền dữ liệu: Truyền dữ liệu vào máy tính thông qua cổng hồng ngoại.\r\n        Phương pháp đo: đo điện cực.\r\n        Tính kết quả trung bình của 7, 14, 30 ngày đo.'),
(6, 3, 'Nhiệt kế điện tử đo trán Microlife FR1MF1', 900000, 'dat#7', 'Nhiệt kế hồng ngoại đo trán Microlife FR1MF1 là sản phẩm đo thân nhiệt cao cấp của Microlife, được thiết kế sang trọng, công nghệ cảm ứng nhiệt hồng ngoại vùng trán thông minh không cần chạm, cho kết quả nhanh và chính xác trong 3 giây.\r\n        ', '3_product1.jpg', 'Đo thân nhiệt cho bé ngay cả khi không cần chạm!   \r\n\r\n        Nhiệt kế hồng ngoại Microlife FR1MF1 ứng dụng công nghệ cảm biến tiên tiến nhất, đo không cần chạm, không tiếp xúc với cơ thể ở khoảng cách 1-3 cm. Đo thân nhiệt cho bé ngay cả khi bé đang ngủ, không còn làm phiền đến cơ thể.\r\n        \r\n        Đo thân nhiệt nhanh trong 3 giây – Bạn kiểm soát được việc quan trọng nhất!\r\n        \r\n        Nhiệt kế đo trán Microlife FR1MF1 giúp kiểm soát thân nhiệt cho kết quả chính xác đáng tin cậy trong 1 giây. Kiểm soát nhiệt độ cơ thể khi bị nóng sốt là điều cực kỳ quan trọng để tránh các biến chứng nguy hiểm do sốt gây ra.\r\n        \r\n        Độ chính xác được kiểm nghiệm lâm sàng\r\n        \r\n        Nhiệt kế hồng ngoại Microlife FR1MF1 đã được kiểm nghiệm lâm sàng tại Châu Âu và được các bác sỹ khuyên dùng . Chức năng cảnh báo sốt 10 tiếng bíp nhanh liên tục kèm theo màn hình chuyển sang màu đỏ khi nhiệt độ lên cao quá 37.5 độ C'),
(7, 3, 'Nhiệt kế điện tử Yuwell YT1', 749000, 'dat#8', 'Nhiệt kế điện tử chính hãng Yuwell YT1\r\n        - Sản phẩm chính hãng, nhập khẩu và phân phối chính ngạch, đảm bảo chất lượng.\r\n        - Bảo hành tại các trung tâm bảo hành chính hãng trên toàn quốc', '3_product2.jpg', ' Công dụng và tính năng sản phẩm:\r\n        - Sản phẩm không chứa thủy ngân, sử dụng tia hồng ngoại và không gây hại cho người sử dụng\r\n        - Màn hình lớn\r\n        - Cách đo: đo ở trán khoảng cách 0-5cm\r\n        - Thời gian đo: 2 ses ± 1 ses\r\n        - Khoảng nhiệt độ: 32 ~ 43 độ C\r\n        - Sai số: 0.2 độ C (35 ~ 42 độ C) và 0.3 cái dãi đo còn lại\r\n        - Chuyển đổi đơn vị đo: độ F và độ C\r\n        - Công nghệ máy tính siêu nhỏ'),
(8, 3, 'Nhiệt kế điện tử Omron MC 246', 109000, 'dat#9', 'Nhiệt kế điện tử hiện số MC-246, dễ sử dụng và đảm bảo vệ sinh, là sản phẩm lý tưởng cho việc chăm sóc sức khỏe gia đình bạn.', '3_product3.jpg', 'Tính năng nổi bật:\r\n        Có thể đo ở miệng, nách hoặc hậu môn.\r\n        Chính xác hơn tới 0.1oC\r\n        Đo nhanh, sau 60 giây.\r\n        Có nhớ kết quả đo trước\r\n        Có tín hiệu báo kết quả\r\n        Không thấm nước\r\n        Thông số kỹ thuật:\r\n        Kích thước máy: 19,4 (rộng) x 132,5 (dài) x 10 (dầy) mm\r\n        Trọng lượng: 11g(cả pin)\r\n        Tuổi thọ pin khoảng 2 năm\r\n        Kết quả hiện 3 chữ số + oC  và 0,1 0c\r\n        Phụ kiện kèm theo\r\n        Túi đựng.\r\n        Hướng dẫn sử dụng.\r\n        5 vỏ bọc đầu đo.\r\n        Các phụ kiện khác.'),
(9, 1, 'Máy đo huyết áp bắp tay Omron Hem 8712', 849000, 'dat#9', 'Máy đo huyết áp Omron Hem 8712 sản phẩm mới ra mắt của hãng Omron trong tháng 12/2013, với công nghệ Intellisense giúp cho máy có độ chính xác cao và thời gian đo nhanh hơn so với máy đo huyết áp Hem 7111.', '1_product4.jpg', 'Tính năng nổi bật của máy đo huyết áp Omron Hem 8712:  Sử dụng công nghệ tiên tiến nhất intellisense cảm biến thông mình tuyệt vời, cho tốc độ đo nhanh và độ chính xác cao.  Bộ nhớ lưu lại kết quả đo trước (1 lần nhớ)  Máy nhỏ gọn bền đẹp và dễ sử dụng  Thông số kỹ thuật của máy đo huyết áp Hem 8712:  Giới hạn đo: Huyết áp: 0 tới 299 mm Hg; Nhịp tim: 40 tới 180 nhịp/phút. Độ chính xác: Huyết áp: ±3 mm Hg; Nhịp tim: ±5%. Tự động bơm và xả khí. Pin: 4 pin AA hoặc bộ đổi điện Omron Trọng lượng: 250g (không gồm pin). Kích thước máy : Khoảng 103 (rộng) x 80 (cao) x 129 (dài) Phụ kiện kèm theo: Vòng bít cỡ trung bình; Hướng dẫn sử dụng; Bộ pin.');

-- --------------------------------------------------------

--
-- Table structure for table `dhd_users`
--

CREATE TABLE `dhd_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dhd_users`
--

INSERT INTO `dhd_users` (`user_id`, `username`, `fullname`, `password`, `email`) VALUES
(8, 'admin123', 'admin', 'Admin.123', ''),
(15, 'dat123', 'Đỗ Thành Đạt', 'Dat.123', 'dat@gmail.com'),
(16, 'hoavu02', 'Vũ Minh Hòa', 'Hoa.123', 'hoa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhd_category`
--
ALTER TABLE `dhd_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `dhd_product`
--
ALTER TABLE `dhd_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhd_users`
--
ALTER TABLE `dhd_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dhd_category`
--
ALTER TABLE `dhd_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dhd_product`
--
ALTER TABLE `dhd_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dhd_users`
--
ALTER TABLE `dhd_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
