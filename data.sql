-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2023 lúc 05:17 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl-cnweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl`
--

CREATE TABLE `btl` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `discount` text NOT NULL,
  `price` text NOT NULL,
  `sold` text NOT NULL,
  `favourite` text NOT NULL,
  `sale` text NOT NULL,
  `imgsmall1` text NOT NULL,
  `imgsmall2` text NOT NULL,
  `imgsmall3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `btl`
--

INSERT INTO `btl` (`id`, `cid`, `img`, `name`, `discount`, `price`, `sold`, `favourite`, `sale`, `imgsmall1`, `imgsmall2`, `imgsmall3`) VALUES
(1, 1, 'images/danhmuc/aokhoac-1.png', 'Áo Khoác Hoodie Nỉ Hình Mặt Buồn Xanh Rêu Siêu Lạ Unisex Ulzzang', '', 'đ199.000', 'Đã bán 2,4k', 'Yêu thích', '10%', 'images/chitiet/aokhoac1-small1.jpg', 'images/chitiet/aokhoac1-small2.jpg', 'images/chitiet/aokhoac1-small3.jpg'),
(2, 1, 'images/danhmuc/aokhoac-2.png', 'Áo KHOÁC NÚT Ulzzang Unisex 1hitshop', '', 'đ159.000', 'Đã bán 1,4k', 'Yêu thích', '15%', 'images/chitiet/aokhoac2-small1.jpg', 'images/chitiet/aokhoac2-small2.jpg', 'images/chitiet/aokhoac2-small3.jpg'),
(3, 1, 'images/danhmuc/aokhoac-3.png', '[Mã SKAMCLU9 giảm 10% đơn 100K] Áo Sadboizvibes Hoodie Zipper Khoác dây kéo sad boiz 12 màu full tag', 'Giảm 5k', 'đ189.000', 'Đã bán 4k', '', '10%', 'images/chitiet/aokhoac3-small1.jpg', 'images/chitiet/aokhoac3-small2.jpg', 'images/chitiet/aokhoac3-small3.jpg'),
(4, 1, 'images/danhmuc/aokhoac-4.png', 'Áo khoác, áo jacket Guci sọc vai vorm rộng Unisex nam nữ mặc đều đẹp', 'Giảm 10k', 'đ129.000', 'Đã bán 234', 'Yêu Thích', '20%', '', '', ''),
(5, 1, 'images/danhmuc/aokhoac-5.png', 'Áo khoác nỉ bomber nam nữ,Áo sweater hoodie nam nữ from rộng unisex nỉ bông K48', 'Giảm 5k', 'đ99.000', 'Đã bán 1k', '', '10%', '', '', ''),
(6, 1, 'images/danhmuc/aokhoac-6.png', 'Áo khoác nỉ bomber nam nữ phản quang ,Áo sweater hoodie nam nữ from rộng unisex K52', 'Giảm 30k', 'đ199.000', 'Đã bán 1,1k', 'Yêu thích', '5%', '', '', ''),
(7, 1, 'images/danhmuc/aokhoac-7.png', 'Áo khoác nỉ bomber nam nữ,Áo sweater hoodie nam nữ from rộng unisex nỉ bông K34', '', 'đ349.000', 'Đã bán 2k', '', '30%', '', '', ''),
(8, 1, 'images/danhmuc/aokhoac-8.png', '[ ảnh thật + Video ] Áo Bomber unisex áo khoác nam nữ mặc được, 2 màu Đen Trắng, from to đại', 'Giảm 15k', 'đ215.000', 'Đã bán 5k', '', '40%', '', '', ''),
(9, 1, 'images/danhmuc/aokhoac-9.png', 'Áo khoác nỉ bomber nam nữ,Áo sweater hoodie nam nữ from rộng unisex nỉ bông K43', '', 'đ159.000', 'Đã bán 41', '', '15%', '', '', ''),
(10, 1, 'images/danhmuc/aokhoac-10.png', 'Áo khoác nam nữ thể thao ulzzang 3 sọc màu be🌸 Áo sweater hoodie nỉ bông kiểu dáng thể thao form rộng unisex K33', '', 'đ219.000', 'Đã bán 2k', 'Yêu Thích', '10%', '', '', ''),
(11, 1, 'images/danhmuc/aokhoac-11.png', 'Áo khoác nỉ bomber nam nữ,Áo sweater hoodie nam nữ from rộng unisex nỉ bông K50', 'Giảm 15k', 'đ99.000', 'Đã bán 1,4k', '', '15%', '', '', ''),
(12, 1, 'images/danhmuc/aokhoac-12.png', 'ÁO KHOÁC,ÁO BOMBER STURDUS GIÓ 2 LỚP FORM UNISEX NAM NỮ MẶC CỰC CHẤT', '', 'đ129.000', 'Đã bán 4k', 'Yêu Thích', '15%', '', '', ''),
(13, 1, 'images/danhmuc/aokhoac-13.png', 'Áo khoác nỉ bomber nam nữ,Áo hoodie sweater nam nữ from rộng unisex K51', '', 'đ340.000', 'Đã bán 26', '', '15%', '', '', ''),
(14, 1, 'images/danhmuc/aokhoac-14.png', 'Áo khoác nam nữ thể thao ulzzang 3 sọc màu be🌸 Áo sweater hoodie nỉ bông kiểu dáng thể thao form rộng unisex K33', 'Giảm 30k', 'đ140.000', 'Đã bán 1,2k', 'Yêu Thích', '15%', '', '', ''),
(15, 1, 'images/danhmuc/aokhoac-15.png', 'Áo khoác nỉ in hình gấu nữ Mee- Áo Sweater dáng rộng Ulzzang Hàn Quốc', '', 'đ190.000', 'Đã bán 1,7k', 'Yêu Thích', '5%', '', '', ''),
(16, 1, 'images/danhmuc/aokhoac-16.png', 'Áo khoác nỉ in hình gấu nữ Mee- Áo Sweater dáng rộng Ulzzang Hàn Quốc', 'Giảm 10k', 'đ89.000', 'Đã bán 1,1k', '', '15%', '', '', ''),
(17, 1, 'images/danhmuc/aokhoac-17.png', 'Áo sweater nam nữ form rộng nỉ đôi bạn, áo sweater đôi bạn siêu xinh S47', '', 'đ250.000', 'Đã bán 241', 'Yêu Thích', '15%', '', '', ''),
(18, 1, 'images/danhmuc/aokhoac-18.png', 'Áo Khoác Hoodie Nỉ Trơn Basic chun tay mũ lót 2 lớp - Áo tay bồng khóa kéo có mũ hàng thu đông Nam Nữ unisex freesize', 'Giảm 8k', 'đ72.000', 'Đã bán 2,1k', 'Yêu Thích', '10%', '', '', ''),
(19, 1, 'images/danhmuc/aokhoac-19.png', 'Áo khoác bóng chày Hàn Quốc (Ảnh thật) - Áo bomber Kaki siêu mềm oversized trẻ trung năng động', '', 'đ155.000', 'Đã bán 2,9k', '', '5%', '', '', ''),
(20, 1, 'images/danhmuc/aokhoac-20.png', '[ÁO CADIGAN] Cardigan Họa Tiết Kẻ Ô, Áo Khoác Nữ Len Dày Dặn', 'Giảm 10k', 'đ150.000', 'Đã bán 4,1k', '', '50%', '', '', ''),
(21, 2, 'images/danhmuc/vay1.jpg', '[Kèm ảnh thật] Váy ngủ xuyên thấu sexy hở ngực kèm chíp lọt khe', '', 'đ69.000', 'Đã bán 21', '', '5%', 'images/chitiet/vay1-small1.jpg', 'images/chitiet/vay1-small2.jpg', 'images/chitiet/vay1-small3.jpg'),
(22, 2, 'images/danhmuc/vay2.jpg', ' Đầm Ôm Dáng Màu Trơn Thời Trang Mùa Hè Phong Cách Hàn Quốc Cho Nữ', '', 'đ85.000', 'Đã bán 3,4k', '', '6%', '', '', ''),
(23, 2, 'images/danhmuc/vay3.jpg', ' Chân váy xếp ly dáng dài nữ cạp cao siêu xinh', '', 'đ99.000', 'Đã bán 4,7k', '', '50%', 'images/chitiet/vay3-small1.jpg', 'images/chitiet/vay3-small2.jpg', 'images/chitiet/vay3-small3.jpg'),
(24, 2, 'images/danhmuc/vay4.jpg', ' Dokma váy bé gái', '', 'đ76.500', 'Đã bán 3', '', '15%', '', '', ''),
(25, 2, 'images/danhmuc/vay5.jpg', ' Váy 2 dây trắng xoè nữ, đầm 2 dây buộc nơ hàn quốc V8 thời trang nữ emmei', '', 'đ99.000', 'Đã bán 2,1', 'Yêu Thích', '5%', '', '', ''),
(26, 2, 'images/danhmuc/vay6.jpg', 'Váy Tiểu Thư Màu Trắng Tay Ngắn Dáng Xèo video + ảnh thật', 'Giảm 10k', 'đ58.000', 'Đã bán 285', 'Yêu Thích', '5%', '', '', ''),
(27, 2, 'images/danhmuc/vay7.jpg', 'Váy thiết kế tiểu thư,váy công chúa đính cúc xinh xắn', '', 'đ295.000', 'Đã bán 399', 'Yêu Thích', '41%', '', '', ''),
(28, 2, 'images/danhmuc/vay8.jpg', 'VÁY Hở Lưng Sexy Body Công Chúa 🦋 Đầm Nữ Đẹp Xanh Trắng Đen Hotrend 🦋', '', 'đ69.000', 'Đã bán 345', 'Yêu Thích', '10%', '', '', ''),
(29, 2, 'images/danhmuc/vay9.jpg', 'VÁY TENNIS  KIỂU DÁNG XẾP LY CÓ NẾP GẤP CỰC ĐẸP ( CÓ QUẦN BẢO HỘ TRONG )', '', 'đ33.000', 'Đã bán 2,2k', '', '15%', '', '', ''),
(30, 2, 'images/danhmuc/vay10.jpg', 'Váy cúp ngực đầm dáng xòe tiểu thư chất xốp hoa hồng nổi kiểu công chúa bồng bềnh Rosie Dress', 'Giảm 20k', 'đ289.000', 'Đã bán 1,5k', 'Yêu Thích', '10%', '', '', ''),
(31, 2, 'images/danhmuc/vay11.jpg', 'Váy Công Sở Dáng Dài Cổ Vest ALICE V715, Váy Thiết Kế Đai Eo Tôn Dáng Cho Mùa Thu Đông', '', 'đ335.000', 'Đã bán 79', 'Yêu Thích', '36%', '', '', ''),
(32, 2, 'images/danhmuc/vay12.jpg', '[ẢNH THẬT CUỐI] Đầm 2 dây trơn đen - Váy hai dây ôm body quyến rũ', 'Giảm 10%', 'đ50.000', 'Đã bán 3,4k', 'Yêu Thích', '29%', '', '', ''),
(33, 2, 'images/danhmuc/vay13.jpg', 'VÁY TIỂU THƯ DÁNG XOÈ CỔ VUÔNG PHỐI TAY VOAN ĐÍNH NGỌC BO TAY 89 SIÊU HOT, TJTCOI4', 'Giảm 10%', 'đ168.000', 'Đã bán 328', 'Yêu Thích', '35%', '', '', ''),
(34, 2, 'images/danhmuc/vay14.jpg', ' [HÀNG QCCC] - Váy hoa ulzzang tiểu thư bạn thân quai ngọc vintage - M28 - jannahouse', '', 'đ70.000', 'Đã bán 2,7k', 'Yêu Thích', '5%', '', '', ''),
(35, 2, 'images/danhmuc/vay15.jpg', ' [CÓ FEEDBACK] Váy tiểu thư ulzzang khuy ngọc cao cấp - V13 - jannahouse', 'Giảm 5%', 'đ117.000', 'Đã bán 781', 'Yêu Thích', '10%', '', '', ''),
(36, 2, 'images/danhmuc/vay16.jpg', 'Sale ĐẦm dỰ tiỆc/prom/Đi chƠi - fiona dress - vÁy chÂn bỒng - v0007 chất lượng', '', 'đ50.000', 'Đã bán 5', '', '15%', '', '', ''),
(37, 2, 'images/danhmuc/vay17.jpg', 'Váy đi tiệc dáng xoè dài tay thắt nơ cổ có khoá kéo sau chất dạ nhung màu nâu-đen', 'Giảm 4k', 'đ119.000', 'Đã bán 867', 'Yêu Thích', '5%', '', '', ''),
(38, 2, 'images/danhmuc/vay18.jpg', 'Đầm 2 Dây Trễ Vai Ngực Bèo 🦋 Váy 2s Nữ Chất Voan Dáng Lỡ 3 Màu 🦋', '', 'đ66.000', 'Đã bán 2,6k', 'Yêu Thích', '26%', '', '', ''),
(39, 2, 'images/danhmuc/vay19.jpg', 'Váy trắng dự tiệc tiểu thư tay phồng cổ vuông, Váy công chúa trắng tay bồng có đệm ngực - Xưởng May Hạnh Hồng', '', 'đ159.000', 'Đã bán 887', 'Yêu Thích', '47%', '', '', ''),
(40, 2, 'images/danhmuc/vay20.jpg', '[NHIỀU MÀU] Vải voan tơ/ tơ óng trắng khổ 1m5 may váy, làm rèm, phông nền background sinh nhật', '', 'đ45.000', 'Đã bán 3,1k', 'Yêu Thích', '10%', '', '', ''),
(41, 3, 'images/danhmuc/quan1.jpg', '(Hình thật shop chụp ) Quần Jean Ôm Nữ Skinny Dáng Trơn Lưng Cao Co Gĩan Vãi Mêm Mịn Shop YuRi Jeans', 'Giảm 5%', 'đ148.000', 'Đã bán 17', '', '43%', 'images/chitiet/quan1-small1.jpg', 'images/chitiet/quan1-small2.jpg', 'images/chitiet/quan1-small3.jpg'),
(42, 3, 'images/danhmuc/quan2.jpg', 'Quần short nỉ da cá Jack Lane, quần short nam nữ Unisex, JACKLANE', 'Giảm 10%', 'đ99.000', 'Đã bán 5,7k', 'Yêu Thích', '24%', 'images/chitiet/quan2-small1.jpg', 'images/chitiet/quan2-small2.jpg', 'images/chitiet/quan2-small3.jpg'),
(43, 3, 'images/danhmuc/quan3.jpg', 'Quần jogger tim cạnh KA Closet from Ống Rộng chốt gấu ullzang có size M và L, chất nỉ ép dầy, VIDEO ẢNH THẬT', '', 'đ65.000', 'Đã bán 823', 'Yêu Thích', '50%', '', '', ''),
(44, 3, 'images/danhmuc/quan4.jpg', 'Quần short kaki nam BASIS, khóa kéo, lưng thun, vải kaki co giãn QK03', '', 'đ199.000', 'Đã bán 233', 'Yêu Thích', '30%', '', '', ''),
(45, 3, 'images/danhmuc/quan5.jpg', 'Quần nỉ ống BOOM Unisex - Jogger thun trơn cạp chun dáng rộng PT5, mặc ở nhà đi ngủ ulzzang HOT', '', 'đ61.000', 'Đã bán 2,4k', '', '32%', '', '', ''),
(46, 3, 'images/danhmuc/quan6.jpg', 'Quần boom jogger bo chun gấu siêu hot', '', 'đ49.000', 'Đã bán 2,3k', '', '5%', '', '', ''),
(47, 3, 'images/danhmuc/quan7.jpg', 'Quần tập legging gym, yoga cạp cao siêu nâng mông #CK176 vải dệt kim co dãn tốt, tôn dáng', 'Giảm 10%', 'đ107.000', 'Đã bán 637', 'Yêu Thích', '41%', '', '', ''),
(48, 3, 'images/danhmuc/quan8.jpg', 'Quần Jean Ống Rộng GÀI EO Nữ Màu Trắng Kem Ulzzang Unisex mặc lên cực tôn dáng RÔ STORE QD26', '', 'đ129.000', 'Đã bán 694', 'Yêu Thích', '46%', '', '', ''),
(49, 3, 'images/danhmuc/quan9.jpg', 'Quần ống rộng nữ dài 100cm chất nhung tăm cạp khóa trước thời trang Banamo Fashion 952', '', 'đ95.000', 'Đã bán 16,7k', 'Yêu Thích', '37%', '', '', ''),
(50, 3, 'images/danhmuc/quan10.jpg', 'Quần jean bò baggy nam Unisex hàng Quảng Châu phong cách Hàn Quốc sành điệu style năm 2021', 'Giảm 10k', 'đ150.000', 'Đã bán 4,6k', 'Yêu Thích', '32%', '', '', ''),
(51, 3, 'images/danhmuc/quan11.jpg', 'Quần Ống Suông Cạp Chun, Quần Ống Rộng Nữ Màu Đen Ulzzang CaMa Store M201', '', 'đ28.000', 'Đã bán 4,1k', 'Yêu Thích', '44%', '', '', ''),
(52, 3, 'images/danhmuc/quan12.jpg', 'Quần Ống Suông Cạp Chun, Quần Ống Rộng Nữ Màu Đen Ulzzang (video cận chất)', '', 'đ35.000', 'Đã bán 8,3k', 'Yêu Thích', '50%', '', '', ''),
(53, 3, 'images/danhmuc/quan13.jpg', 'Quần jogger tim có 2 màu Đen Trắng chất umi đanh mịn không xù dầy, tim đẹp, chun ống from rộng', 'Giảm 10%', 'đ59.000', 'Đã bán 6,8k', 'Yêu Thích', '14%', '', '', ''),
(54, 3, 'images/danhmuc/quan14.jpg', 'Quần Ống Rộng Nữ Ulzzang Chất Vải Nhung Tăm Xuất Hàn, Cạp Cao Khóa Trước Siêu Xinh', 'Giảm 15%', 'đ91.000', 'Đã bán 12,8k', 'Yêu Thích', '30%', '', '', ''),
(55, 3, 'images/danhmuc/quan15.jpg', ' [Rẻ vô địch] Quần Thô Kaki Ống Rộng Suông 2 Cúc', '', 'đ99.000', 'Đã bán 3,8k', 'Yêu Thích', '10%', '', '', ''),
(56, 3, 'images/danhmuc/quan16.jpg', 'Quần Nhung Ống Rộng Culottes Ulzzang Cạp chun nữ', 'Giảm 10%', 'đ89.000', 'Đã bán 3,3k', 'Yêu Thích', '10%', '', '', ''),
(57, 3, 'images/danhmuc/quan17.jpg', 'Quần lô gô Spun TT12', '', 'đ32.000', 'Đã bán 2,5k', 'Yêu Thích', '20%', '', '', ''),
(58, 3, 'images/danhmuc/quan18.jpg', 'quần legging_quần legging nữ xuất hàn', '', 'đ52.000', 'Đã bán 97,5k', 'Yêu Thích', '48%', '', '', ''),
(59, 3, 'images/danhmuc/quan19.jpg', 'Quần legging umi cạp to 2 khuy co giãn cực xinh_Q068', '10% Giảm', '79.000', 'Đã bán 1,1k', 'Yêu Thích', '47%', '', '', ''),
(60, 3, 'images/danhmuc/quan20.jpg', 'Quần Kẻ Nữ Ống Rộng Cạp Chun Caro Lưng Cao Dáng Rộng Ống Suông Ulzzang Full Màu Hot', '15% Giảm', '59.000', 'Đã bán 12,1k', 'Yêu Thích', '43%', '', '', ''),
(61, 4, 'images/danhmuc/tainghe1.jpg', 'QTai nghe nhét tai có dây U19 giắc cắm 3.5mm tích hợp micro chất lượng cao dành cho điện thoại - Awifi Case L3-2', '50% Giảm', '14.000', 'Đã bán 20k', 'Yêu Thích', '44%', 'images/chitiet/tainghe1-small1.jpg', 'images/chitiet/tainghe1-small2.jpg', 'images/chitiet/tainghe1-small3.jpg'),
(62, 4, 'images/danhmuc/tainghe2.jpg', 'Apple AirPods with Charging Case 2nd gen', '', '3.190.000', 'Đã bán 12,9k', '', '27%', 'images/chitiet/tainghe2-small1.jpg', 'images/chitiet/tainghe2-small2.jpg', 'images/chitiet/tainghe2-small3.jpg'),
(63, 4, 'images/danhmuc/tainghe15.jpg', 'Tai Nghe Bluetooth True Wireless Samsung Galaxy Buds Live - Hàng Chính Hãng', '', 'đ1.850.000', 'Đã bán 6,4k', '', '59%', '', '', ''),
(64, 4, 'images/danhmuc/tainghe4.jpg', 'Tai Nghe Nhét Tai TOPK F20 Chống Ồn Tích Hợp Micro Và Điều Khiển Âm Lượng', 'Giảm 10%', 'đ39.000', 'Đã bán 69,9k', '', '42%', '', '', ''),
(65, 4, 'images/danhmuc/tainghe5.jpg', 'Tai nghe nhét tai U19 giắc cắm 3.5mm dành cho điện thoại Android/iOs 6s 6plus/Samsung', '', 'đ15.000', 'Đã bán 31,3k', 'Yêu Thích', '33%', '', '', ''),
(66, 4, 'images/danhmuc/tainghe6.jpg', 'Tai Nghe Chụp Tai F10 Plus Headphone Nghe Nhạc Cực Hay Âm Bass Mạnh Mẽ Bảo Hành 1 Năm', '', 'đ37.000', 'Đã bán 352', 'Yêu Thích', '36%', '', '', ''),
(67, 4, 'images/danhmuc/tainghe7.jpg', '🔥Unico A🔥Tai Nghe Gaming Có Dây Nhét Tai Chơi Game Chống Ồn Có Mic In Ear Cho PC iPhone Plus Samsung Xiaomi Sony OPPO', '', 'đ15.000', 'Đã bán 2,9k', 'Yêu Thích', '47%', '', '', ''),
(68, 4, 'images/danhmuc/tainghe8.jpg', 'Tai nghe nhạc nhét tai màu macaron U19 giao diện 3.5mm với loa siêu trầm đa chức năng cho Android và iOS', '', 'đ9.000', 'Đã bán 21k', '', '47%', '', '', ''),
(69, 4, 'images/danhmuc/tainghe9.jpg', '🔥Unico A🔥Tai Nghe Gaming Có Dây Nhét Tai Chơi Game Chống Ồn Có Mic In Ear Cho PC iPhone Plus Samsung Xiaomi Sony OPPO', '', 'đ15.800', 'Đã bán 13,2k', 'Yêu Thích', '47%', '', '', ''),
(70, 4, 'images/danhmuc/tainghe10.jpg', 'Tai nghe có dây nhét tai gaming chính hãng chống ồn tốt âm thanh HiFi 8D chơi game ngon QKZ- AK6', '', 'đ85.800', 'Đã bán 1,2k', 'Yêu Thích', '4%', '', '', ''),
(71, 4, 'images/danhmuc/tainghe11.jpg', 'Tai Nghe Nhét Tai Có Dây Có Mic Jack 3.5mm chuyên gaming oppo, samsung', '', 'đ17.800', 'Đã bán 4,1k', 'Yêu Thích', '49%', '', '', ''),
(72, 4, 'images/danhmuc/tainghe12.jpg', 'Tai nghe chụp tai F20 Màu Trắng Đen có thể gấp gọn', '', 'đ35.900', 'Đã bán 5,1k', 'Yêu Thích', '10%', '', '', ''),
(73, 4, 'images/danhmuc/tainghe13.jpg', 'Tai Nghe Nhét Tai Có Dây Gaming Super Bass Chống Ồn Hiệu Quả Có Mic Đàm Thoại S2000', '', 'đ55.000', 'Đã bán 1,4k', 'Yêu Thích', '44%', '', '', ''),
(74, 4, 'images/danhmuc/tainghe14.jpg', 'Tai nghe ip 7/8/X/Xsmax/11promax - Bảo Hành 06 Tháng', 'Giảm 5k', 'đ95.000', 'Đã bán 4,9k', 'Yêu Thích', '44%', '', '', ''),
(75, 4, 'images/danhmuc/tainghe15.jpg', 'Tai nghe có dây Hoco M1 có mic chân tròn 3.5 chính hãng', 'Giảm 5k', 'đ51.000', 'Đã bán 1,1k', 'Yêu Thích', '49%', '', '', ''),
(76, 4, 'images/danhmuc/tainghe16.jpg', 'Tai Nghe ip 5/6/6s plus ZlN HK - Bảo Hành 12 Tháng Tương Thích với dòng 5,6,6s,6splus', 'Giảm 3k', 'đ65.000', 'Đã bán 3,8k', 'Yêu Thích', '34%', '', '', ''),
(77, 4, 'images/danhmuc/tainghe17.jpg', '[Lỗi 1 đổi 1] Tai Nghe ip 7 Bắt Bluetooth tự đông kết nối,có mic Bh 12 tháng.', '', 'đ70.000', 'Đã bán 353', '', '42%', '', '', ''),
(78, 4, 'images/danhmuc/tainghe18.jpg', 'Tai nghe BASS khủng Driver Dynamic 14mm chiến hêt mọi loại game', '', 'đ50.000', 'Đã bán 13k', 'Yêu Thích', '20%', '', '', ''),
(79, 4, 'images/danhmuc/tainghe19.jpg', 'Tai nghe nhét tai âm thanh sống động chất lượng cao Ky115', '', 'đ15.000', 'Đã bán 10,8k', 'Yêu Thích', '30%', '', '', ''),
(80, 4, 'images/danhmuc/tainghe20.jpg', 'Tai Nghe Nhét Tai Chống Ồn Trn Mt1 Dynamic Kz Edx Zstx Zsn Pro M10 Ta1 St1 Tiện Dụng', '', 'đ145.000', 'Đã bán 785', 'Yêu Thích', '50%', '', '', ''),
(81, 5, 'images/danhmuc/tui1.jpg', 'Túi Xách Nữ Hans Túi Xách Đeo Chéo Nữ Trần Ô 4 Ngăn Da PU Cao Cấp - QA07', 'Giảm đ15k', '209.000', 'Đã bán 960', 'Yêu Thích', '9%', 'images/chitiet/tui1-small1.jpg', 'images/chitiet/tui1-small2.jpg', 'images/chitiet/tui1-small3.jpg'),
(82, 5, 'images/danhmuc/tui2.jpg', 'Túi xách nữ 💖 𝑭𝑹𝑬𝑬𝑺𝑯𝑰𝑷 💖 Túi dây pha xích phong cách Hàn Quốc cá tính TD12', '10% Giảm ', '69.000', 'Đã bán 9k', 'Yêu Thích', '43%', 'images/chitiet/tui2-small1.jpg', 'images/chitiet/tui2-small2.jpg', 'images/chitiet/tui2-small3.jpg'),
(83, 5, 'images/danhmuc/tui3.jpg', 'Túi Xách Nữ Đeo Chéo Ô Trám Nắp Gập HAPAS - TSN20138', '25% Giảm ', '269.000', 'Đã bán 2,8k', 'Mall', '39%', '', '', ''),
(84, 5, 'images/danhmuc/tui4.jpg', 'Túi xách nữ đeo vai cao cấp xu hướng 2021', '50% Giảm ', '43.000', 'Đã bán 100', '', '19%', '', '', ''),
(85, 5, 'images/danhmuc/tui5.jpg', 'Túi Xách Nữ Đẹp Đeo Chéo da PU cao cấp tiện lợi gọn gàng xinh xắn trẻ trung mã 3853', '', '50.000', 'Đã bán 762', 'Yêu Thích', '10%', '', '', ''),
(86, 5, 'images/danhmuc/tui6.jpg', 'Túi xách nữ công sở đeo chéo đẹp để vừa A4 tote da pu đi học đi chơi thời trang cao cấp giá rẻ TX061', 'Giảm đ6k', '109.000', 'Đã bán 687', 'Yêu Thích', '34%', '', '', ''),
(87, 5, 'images/danhmuc/tui7.jpg', 'TÚI XÁCH NỮ, TÚI ĐEO CHÉO DA TRƠN MỀM DÁNG THUYỀN LOẠI 1 PK 179', 'Giảm đ1k', '65.000', 'Đã bán 5,2k', 'Yêu Thích', '50%', '', '', ''),
(88, 5, 'images/danhmuc/tui8.jpg', 'Túi kẹp nách, Túi xách nữ đeo vai đi chơi giá rẻ da rắn xếp ly PK 233', 'Giảm đ1k', '59.000', 'Đã bán 851', 'Yêu Thích', '44%', '', '', ''),
(89, 5, 'images/danhmuc/tui9.jpg', 'Túi Xách Nữ Đeo Chéo 🔸FREESHIP🔸 Túi Kẹp Nách Đeo Vai Da Mềm Trơn PK 201', 'Giảm đ1k', '75.000', 'Đã bán 3,6k', 'Yêu Thích', '48%', '', '', ''),
(90, 5, 'images/danhmuc/tui10.jpg', 'TÚI XÁCH NỮ Túi Xách Nữ Đeo Chéo Đeo Vai Phối Dây Quai Xích Ngọc Và Quai Da Tiện Ích Dành Cho Chị Em Phụ Nữ', 'Giảm đ2k', '89.000', 'Đã bán 266', 'Yêu Thích', '36%', '', '', ''),
(91, 5, 'images/danhmuc/tui11.jpg', 'Túi xách nữ đẹp, Túi đeo chéo giá rẻ đi chơi quai ngọc cực sang chảnh PK 216', 'Giảm đ1k', '84.000', 'Đã bán 1,1k', 'Yêu Thích', '47%', '', '', ''),
(92, 5, 'images/danhmuc/tui12.jpg', 'Túi xách nữ đeo chéo đeo vai kẹp nách dây đeo tuỳ chỉnh cao cấp giá rẻ phong cách hàn quốc 88STORE -TX007', 'Giảm đ5k', '79.000', 'Đã bán 1,4k', 'Yêu Thích', '43%', '', '', ''),
(93, 5, 'images/danhmuc/tui13.jpg', 'Túi Đeo Chéo Snoopy 🔸FREESHIP🔸 Túi Xách Nữ Đẹp Đi Chơi Kèm Ví Nhỏ Hot Trend PK 188', 'Giảm đ1k', '79.000', 'Đã bán 3,8k', 'Yêu Thích', '34%', '', '', ''),
(94, 5, 'images/danhmuc/tui14.jpg', 'Túi xách nữ 💖 𝑭𝑹𝑬𝑬𝑺𝑯𝑰𝑷 💖 Túi đeo chéo mini hàng quảng châu siêu hot TD09', '10% Giảm ', '69.000', 'Đã bán 15,8k', 'Yêu Thích', '30%', '', '', ''),
(95, 5, 'images/danhmuc/tui15.jpg', 'Túi xách nữ 💖 𝑭𝑹𝑬𝑬𝑺𝑯𝑰𝑷 💖 Túi dây pha xích phong cách Hàn Quốc cá tính TD12', '10% Giảm ', '69.000', 'Đã bán 9k', 'Yêu Thích', '43%', '', '', ''),
(96, 5, 'images/danhmuc/tui16.jpg', ' Túi xách nữ đep vai thiết kế độc đáo', '', '90.000', 'Đã bán 1,4k', 'Yêu Thích', '43%', '', '', ''),
(97, 5, 'images/danhmuc/tui17.jpg', ' Túi đeo chéo nữ 💖FREESHIP💖 Túi xách hàn quốc da mềm cực xinh PK 176', '', '59.000', 'Đã bán 1,9k', 'Yêu Thích', '44%', '', '', ''),
(98, 5, 'images/danhmuc/tui18.jpg', 'Túi kẹp nách nữ túi xách nữ khóa vuông vân da mềm basic phong cách Hàn Quốc túi ví nữ Alice Housee', '', '200.000', 'Đã bán 1,6k', 'Yêu Thích', '14%', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyen_muc`
--

CREATE TABLE `chuyen_muc` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuyen_muc`
--

INSERT INTO `chuyen_muc` (`id`, `name`) VALUES
(1, 'Áo khoác\r\n'),
(2, 'Váy'),
(3, 'Quần'),
(4, 'Tai Nghe\r\n'),
(5, 'Túi xách nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'thuongvu11', 'vu1234'),
(2, 'thuongvu123', '12342001'),
(3, 'thuongduy09', 'duy1234'),
(5, 'thuongvudz11', '12345'),
(7, 'thuongvu11', '12345'),
(8, 'vuvanvuong11', '2001'),
(9, '0335473792', 'thuongvu'),
(10, 'đá', 'da'),
(11, 'vuskt@gmail.com', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `btl`
--
ALTER TABLE `btl`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyen_muc`
--
ALTER TABLE `chuyen_muc`
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
-- AUTO_INCREMENT cho bảng `btl`
--
ALTER TABLE `btl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `chuyen_muc`
--
ALTER TABLE `chuyen_muc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
