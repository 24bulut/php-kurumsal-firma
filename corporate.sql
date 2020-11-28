-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Kas 2020, 20:44:36
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `corporate`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_turkish_ci NOT NULL,
  `password` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$EXisTNLukjyTpKXtEtyUJuvkGpEsLzneYoxiWqACiuKd2Y9RugZSy');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `site_title` text COLLATE utf8_turkish_ci NOT NULL,
  `site_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `site_description` text COLLATE utf8_turkish_ci NOT NULL,
  `address` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `phone1` text COLLATE utf8_turkish_ci NOT NULL,
  `phone2` text COLLATE utf8_turkish_ci NOT NULL,
  `google_maps_code` text COLLATE utf8_turkish_ci NOT NULL,
  `about_us` text COLLATE utf8_turkish_ci NOT NULL,
  `logo` text COLLATE utf8_turkish_ci NOT NULL,
  `company_name` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `config`
--

INSERT INTO `config` (`id`, `site_title`, `site_keywords`, `site_description`, `address`, `email`, `phone1`, `phone2`, `google_maps_code`, `about_us`, `logo`, `company_name`) VALUES
(1, 'company name | Lorem ', 'company , company name', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', 'Mahmutbey Mahallesi 2544.sk 10/C Bağcılar/İstanbul', 'info@company.com', '555 555 55 55', '555 555 55 55', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.9164286851874!2d29.015819614844737!3d41.07081937929442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab64695fe427d%3A0xc09fa703bd286117!2sMicrosoft%20T%C3%BCrkiye!5e0!3m2!1str!2str!4v1606591225899!5m2!1str!2str', '<p>&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit,&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Inventore&nbsp;et&nbsp;nulla&nbsp;ex&nbsp;sunt&nbsp;rerum&nbsp;<strong>molestias&nbsp;illo&nbsp;veniam&nbsp;</strong>doloribus&nbsp;blanditiis,</p>\r\n\r\n<p>&nbsp;quisquam&nbsp;maiores,&nbsp;debitis,&nbsp;voluptatum&nbsp;tempora&nbsp;esse&nbsp;tenetur&nbsp;sit&nbsp;corporis&nbsp;rem&nbsp;placeat.&nbsp;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit,&nbsp;amet&nbsp;consectetur&nbsp;</p>\r\n\r\n<p>adipisicing&nbsp;elit.&nbsp;Inventore&nbsp;et&nbsp;nulla&nbsp;ex&nbsp;sunt&nbsp;rerum&nbsp;molestias&nbsp;illo&nbsp;veniam&nbsp;</p>\r\n\r\n<p>doloribus&nbsp;blanditiis,&nbsp;quisquam&nbsp;maiores,&nbsp;debitis,&nbsp;voluptatum&nbsp;tempora&nbsp;esse&nbsp;tenetur&nbsp;sit&nbsp;corporis&nbsp;rem&nbsp;placeat.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'logo.png', 'company name');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `image_url` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galery`
--

INSERT INTO `galery` (`id`, `image_url`) VALUES
(1, 'deneme.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `title`, `content`) VALUES
(1, 'Evden Eve Nakliyat', '<p><strong>Evden eve nakliyat</strong> sekt&ouml;r&uuml;nde hizmet veren firmamız, t&uuml;m &uuml;r&uuml;n modellerini talep edilen adreslere g&ouml;t&uuml;rmektedir. Ev, ofis ve benzeri alanlarda kullanılan eşya modelleri, alanında profesyonel ekiplerimiz tarafından kısa bir s&uuml;re i&ccedil;erisinde taşınmaktadır. Ayrıca s&ouml;z verilen s&uuml;reler i&ccedil;erisinde t&uuml;m eşyalar yeni adreslere g&ouml;t&uuml;r&uuml;lmekte ve herhangi bir sorun yaşanması engellenmektedir. Evden eve nakliyat firması olarak, m&uuml;şterilerimizi memnun etmek i&ccedil;in uygun fiyat ile hizmet vermekteyiz.</p>\r\n'),
(2, 'Kurumsal Nakliyat\r\n', 'Firmamız bünyesinde çalışan ekip arkadaşlarımız da alanında uzman ve profesyonel isimlerden seçilmektedir. Müşterilerimizin isteklerini analiz ederek, her zaman bu istekler doğrultusunda çalışmalarımızı sürdürürüz. Çalışma ağı olarak da Türkiye’nin en çok bölgede hizmet veren nakliyat firmalarından biri olmanın gururunu yaşıyoruz. Kalite çıtamızı her zaman ve her işimizde üst seviyelere koyup, Avrupa Birliği standartlarında hizmet verme amacıyla çalışmalarımızı sürdürüyoruz'),
(3, 'Şehirdışı Nakliyat', 'Başka şehirden başka şehire veya aynı şehirde farklı semtlere taşınma gerçekleştirilmektedir. İş hayatı, okul hayatı veya konut sahibi olma gibi kişilerin ihtiyaçları doğrultusunda farklı seçenekler vardır. Taşınmak için yaşanılan sebepler bunlarla kalmayıp daha birçok sebep örnek gösterilebilmektedir. Firmamızda mevcut olan ekipmanlar ve ekip arkadaşlarımız ile sorunsuz bir taşınma gerçekleştirmekteyiz.'),
(4, 'Şehiriçi nakliyat', 'Aynı şehirde farklı bir semte veya mahalleye taşınan eşyalarınızda taşınma sırasında oluşabilecek olumsuzluklar müşterilerimizi endişelendirmektedir. Masaların ayaklarının kırılması, mobilyaların yüzeylerinin çizilmesi, bozulan ve kırılan değerli küçük eşyalar gibi olumsuzluklarla karşılaşmamak için firmamızı tercih edebilirsiniz. Şehir içi nakliyat olarak taşıdığımız eşyalarınıza zarar gelmemesi için çok titiz davranmaktayız.\r\n\r\n'),
(5, 'Fuar Taşımacılığı', 'Fuar nakliye hizmetleri, diğer nakliyat hizmetlerine göre daha zor olmakla beraber profesyonellik gerektirmektedir. Özellikle de paketleme işlemleri sadece uzman personeller tarafından gerçekleştirilmelidir. Fuar taşımacılığı desteği sağlayan pek çok firma, bu işi ev veya ofis taşımacılığı gibi sanarak maddi kayıpların oluşmasına neden olmaktadır. Ancak Evden Nakliye Eve nakliyat firmamız bu iş için özel bir ekip kurmuştur. Dolasıyla da fuarlarda bulunan tüm malzemeler bilimsel yöntemler ile işlem görmektedir.\r\n\r\n'),
(6, 'Fabrika Taşıma\r\n', 'Fabrika Taşıma Firmamız faaliyetleri esnasında gerçekleştirmiş olduğu kaliteli hizmet sayesinde taşımacılık sektöründe bu konuda öncü bir firma olarak devam etmektedir. Müşteri memnuniyeti önemseyen firmamız sürekli olarak faaliyetlerini daha da ileriye getirmektedir. Fabrika taşımacılığı konusunda her zaman çalışanları en iyi şekilde yetiştiren firmamız taşıma sırasında yer alabilecek problemleri en aza düşürmüştür. Kaliteli taşımacılık işlemlerinin tek adresi olan firmamız bugün binlerce kişi tarafından tercih edilmektedir.\r\n\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image_url` text COLLATE utf8_turkish_ci NOT NULL,
  `title` text COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `image_url`, `title`, `content`) VALUES
(1, 'slider1.jpg', 'Company Name', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit,&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;</p>\r\n\r\n<p>Quo&nbsp;deserunt&nbsp;optio,&nbsp;dolor&nbsp;dolores&nbsp;molestiae&nbsp;saepe&nbsp;est&nbsp;quia</p>\r\n\r\n<p>&nbsp;minus&nbsp;laboriosam&nbsp;esse&nbsp;possimus&nbsp;repellendus&nbsp;natus&nbsp;tempore&nbsp;dicta,&nbsp;aliquam&nbsp;adipisci&nbsp;ut,&nbsp;harum&nbsp;obcaecati.&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
