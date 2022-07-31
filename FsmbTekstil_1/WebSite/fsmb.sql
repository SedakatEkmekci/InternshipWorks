-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Ağu 2021, 09:09:59
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fsmb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `No` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Parola` varchar(50) NOT NULL,
  `Adi` varchar(50) NOT NULL,
  `Soyadi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`No`, `Email`, `Parola`, `Adi`, `Soyadi`) VALUES
(1, 'brkdmn1903@icloud.com', 'q7gutisimao', 'Burak', 'Duman'),
(2, 'test', 'test', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `No` int(11) NOT NULL,
  `Ad` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Mesaj` varchar(250) NOT NULL,
  `Tarih` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`No`, `Ad`, `Mail`, `Mesaj`, `Tarih`) VALUES
(1, 'burak', 'brkdmn1903@icloud.com', 'ajnfgnjaergn aweg', '02-08-2021 15:35:06'),
(2, 'seda', 'ösmdwsömö', 'mödnwöc', '02-08-2021 15:35:24'),
(3, 'asdfawef', 'awegaw4ga', 'wegaw', '02-08-2021 15:35:41'),
(4, 'asdfawef', 'awegaw4ga', 'wegaw', '02-08-2021 15:35:50'),
(5, 'ewqew', 'wqer', 'tre', '02-08-2021 15:36:05'),
(6, 'fubaf', 'a', 'sdfasdfwe', '02-08-2021 15:50:06'),
(7, 'burak', 'aeren.dmn@gmail.com', 'aesawer', '02-08-2021 15:51:21'),
(8, 'burak', 'aeren.dmn@gmail.com', 'asdfawefaw', '02-08-2021 15:53:18'),
(9, 'asd', 'aeren.dmn@gmail.com', 'asdew', '02-08-2021 15:55:30'),
(10, 'asfawe', 'werwer', 'qwrqw', '02-08-2021 15:58:29'),
(11, 'asdf', 'asdf', 'wfes', '03-08-2021 13:12:32'),
(12, 'burak', 'brkdmn1903@icloud.com', 'deneme 5 ağustos ', '05-08-2021 08:04:27'),
(13, 'burak', 'aeren.dmn@gmail.com', 'asfadsgawer', '05-08-2021 21:29:06'),
(14, 'burak', 'sdafea', '0908', '09-08-2021 11:50:28'),
(15, 'Melike Çok Fazla Kurcalama', 'TEST@gmail.com', 'mesaj iletildi mi', '09-08-2021 16:31:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteicerigi`
--

CREATE TABLE `siteicerigi` (
  `No` int(11) NOT NULL,
  `hakkimizda` mediumtext NOT NULL,
  `hizmetlerimiz` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siteicerigi`
--

INSERT INTO `siteicerigi` (`No`, `hakkimizda`, `hizmetlerimiz`) VALUES
(1, '<p>2017 yılında Adana&#39;da kurulan FSMB Tekstil yurt i&ccedil;i ve yurt dışı kadife kumaş pazar ihtiyacını karşılamak &uuml;zere ithalat faaliyetleri ile pazara giriş yapmıştır.&nbsp;</p>\r\n\r\n<p>FSMB Tekstil tecr&uuml;beli, gen&ccedil;, dinamik ve yenilik&ccedil;i bakış a&ccedil;ısına sahip yeni kadrosuyla kurulduğu ilk g&uuml;nk&uuml; heyecanla değerli iş ortaklarına s&uuml;rd&uuml;r&uuml;lebilir, kaliteli ve g&uuml;venilir bir şekilde hizmet vermektedir.</p>\r\n\r\n<p>Amacımız kumaş &uuml;retiminde en iyi kaliteyi, doğru fiyat politikasıyla m&uuml;şteriye sunabilmek ve s&uuml;rekli artan m&uuml;şteri memnuniyeti oluşturabilmektir. G&uuml;n&uuml;m&uuml;z teknolojisini en iyi şekilde takip eden &ccedil;evre dostu fabrikamız, uzman kadrosuyla kısa zamanda tekstil sekt&ouml;r&uuml;n&uuml;n aranılan firması haline gelmiştir. Tecr&uuml;beli ve eğitimli kadrosu ile &uuml;r&uuml;nlerimiz 4 kıtada farklı &uuml;lkelere ihracat yapmaktadır.</p>\r\n\r\n<p>FSMB Tekstil bundan sonraki s&uuml;re&ccedil;te de yerli &uuml;retim alanındaki Ar-Ge &ccedil;alışmalarına ağırlık vererek bu alanda &ouml;nde gelen firmalar arasında olmayı ve ilerleyen s&uuml;re&ccedil;te bu alanda ihracat yaparak &uuml;lke ekonomisine katkı sağlamayı hedeflemektedir.</p>\r\n\r\n<p>Y&uuml;ksek kalite ve s&uuml;rd&uuml;r&uuml;lebilir hizmet ile i&ccedil; pazarda geniş m&uuml;şteri portf&ouml;y&uuml;ne ulaşan FSMB Tekstil, bu yolda emin adımlarla ve değerlerinden &ouml;d&uuml;n vermeden ilerlemektedir.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', '<p>İPLİK &Uuml;RETİMİ<br />\r\nKapalı iplik &uuml;retim alanı toplam 20000 m&sup2; olan fabrikanın ayrıca, 5000 m&sup2; iplik ve pamuk depo alanı vardır.<br />\r\nKuruluş kapasitesi: 50400 iğ olan iplik fabrikası, 33600 iğlik yatırımı ger&ccedil;ekleştirmiş olup &uuml;retime devam etmektedir.<br />\r\nTesis, iki farklı pamuk cinsi &ccedil;alışacak şekilde organize edilmiş olup, %100 penye kompakt iplik &uuml;retmektedir. Ortalama 18 ton/g&uuml;n &uuml;retim ger&ccedil;ekleştirilmektedir. &Uuml;retimin %90&rsquo;ı kendi dahili &ouml;rg&uuml; işletmesinde &ouml;r&uuml;l&uuml;p, terbiye işletmelerinde &ccedil;alışılmaktadır.İplik &uuml;retim tesisi, son teknoloji klima tesisi ile klimatize edilmiştir.<br />\r\n&Uuml;retim makineleri 2012 model yılı olup tam otomatik sistem ile y&uuml;ksek verimlilikte &ccedil;alışmaktadır. Ortalama iplik numarası Ne: 34/1 olup, Ne: 20/1 ile Ne: 80/1 Aralığında &uuml;retim ger&ccedil;ekleştirilmektedir. Ayrıca Flam &uuml;retimi olanağı da mevcuttur. Fabrikamız, b&ouml;lgemizin show-room niteliğinde en modern iplik &uuml;retim tesisidir.</p>\r\n\r\n<p>İPLİK LABORATUVARI<br />\r\nİplik &uuml;retim prosesi; kalite ve proses kontrol esaslarına g&ouml;re, son teknoloji ile donatılmış fizik laboratuvarında, uzman laborantlar tarafından test ve kontrol edilmektedir. Laboratuvarımız; Uster tester-5, Tensorapid-4, HVI 1000, AfisPro-2, Numara ve b&uuml;k&uuml;m test makinaları ile donatılmıştır. Laboratuvarımız ayrıca LAB-Expert bilgi işlem ağı ile &ccedil;alışmaktadır.<br />\r\n&nbsp;<br />\r\nFabrikamızda &uuml;retim, pamuk girişi ve paketleme &ccedil;ıkışı arasındaki t&uuml;m proseslerde etkili olarak kontrol altına alınmıştır.</p>\r\n\r\n<p>Tam donanımlı iplik laboratuvarında kontrol edilerek gelen iplik, m&uuml;şteri istekleri doğrultusunda ham kumaşa d&ouml;n&uuml;şt&uuml;r&uuml;lmektedir. Makinelerin mevcut desenlendirme imkanlarının yanı sıra, farklı iplik cinsleri, numaraları ve renkleri kullanılarak &uuml;retilen yeni kaliteler m&uuml;şteri beğenisine sunulmaktadır.<br />\r\n&nbsp;<br />\r\n144 kişilik personeli ile yaklaşık 5 bin metrekarelik &uuml;retim alanı &uuml;zerinde; 129 adet yuvarlak &ouml;rme makinası ile 24 saat &uuml;retim ger&ccedil;ekleştiren işletmenin g&uuml;nl&uuml;k kapasitesi 25 ton/g&uuml;nd&uuml;r. Kumaşların istenen kalitede ki &uuml;retimi, 4 adet a&ccedil;ık en ve 2 t&uuml;p kalite kontrol makinesi ile anlık olarak izlenmektedir.</p>\r\n\r\n<p>&Ouml;rg&uuml; fabrikasında &ouml;r&uuml;len ve kalite kontrol&uuml; yapılan kumaşlar, barcod sistemiyle tanımlanıp, minimum s&uuml;rede stokta bekletilerek boyahaneye sevk edilir.<br />\r\n&nbsp;</p>\r\n\r\n<p>M&uuml;şteri beklentilerini %100 sağlayacak kumaşın &ouml;r&uuml;lebilmesi i&ccedil;in ortam şartları kontrol altında tutulmaktadır. Ortam koşulları 20 &ordm;C ve %65 nem olacak şekilde merkezi olarak kumanda edilmektedir.<br />\r\n&nbsp;</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`No`);

--
-- Tablo için indeksler `siteicerigi`
--
ALTER TABLE `siteicerigi`
  ADD PRIMARY KEY (`No`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `siteicerigi`
--
ALTER TABLE `siteicerigi`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
