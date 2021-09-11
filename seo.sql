-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Eyl 2021, 12:28:33
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `seo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_sitelogo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitetitle` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitedescription` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitekeywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteauthor` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitetel` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitegsm` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitefaks` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitemail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteil` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteadres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitemesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitemaps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteanalystic` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitezoopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakimdurum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_sitelogo`, `ayar_sitetitle`, `ayar_sitedescription`, `ayar_sitekeywords`, `ayar_siteauthor`, `ayar_sitetel`, `ayar_sitegsm`, `ayar_sitefaks`, `ayar_sitemail`, `ayar_siteilce`, `ayar_siteil`, `ayar_siteadres`, `ayar_sitemesai`, `ayar_sitemaps`, `ayar_siteanalystic`, `ayar_sitezoopim`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakimdurum`) VALUES
(0, '', 'Mersin Üniversitesi Kütüphanesi', 'Mersin Üniversitesi Kütüphane Otomasyonu', 'kitap, kütüphane, mersin, üniversite', 'Malik Utku Vur', '0324 361 00 33', '', '0324 361 00 32', 'muhendislik@mersin.edu.tr', 'Ciftlikköy', 'Mersin', 'Çiftlikköy', 'Mersin Üniversitesi Kütüphane Yazılımı', '', '', '', 'https://www.facebook.com/universitymersin/', 'https://twitter.com/meukurumsal', 'https://www.instagram.com/meukurumsal/', 'https://www.youtube.com/channel/UCJ8ZDZ7bgrYBRgIV2SZDv6g', 'smtp.google.com', 'stajprojetest@gmail.com', 'Test123_', '587', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE `kitap` (
  `kitap_id` int(10) UNSIGNED NOT NULL,
  `kitap_adi` text COLLATE utf8_unicode_ci NOT NULL,
  `yazar_adi` text COLLATE utf8_unicode_ci NOT NULL,
  `alinan_tarih` date NOT NULL,
  `geriverilecek_tarih` date NOT NULL,
  `alan_kisi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`kitap_id`, `kitap_adi`, `yazar_adi`, `alinan_tarih`, `geriverilecek_tarih`, `alan_kisi`) VALUES
(1, 'Suç ve Ceza', 'Fyodor Dostoyevski', '2021-08-10', '2021-08-17', ''),
(2, 'Alis Harikalar Diyarında', 'Lewis Caroll', '0000-00-00', '0000-00-00', ''),
(3, 'Savaş ve Barış', 'Lev Tolstoy', '2021-09-01', '2021-09-08', 'malikutku@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `admin_durum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_ad`, `kullanici_mail`, `kullanici_sifre`, `kullanici_soyad`, `kullanici_unvan`, `kullanici_yetki`, `admin_durum`) VALUES
(1, 'test', 'test@test.com', '202cb962ac59075b964b07152d234b70', 'test', 'yonetici', '1', 1),
(17155033, 'Malik Utku', 'malikutku@gmail.com', '202cb962ac59075b964b07152d234b70', 'Vur', 'Öğrenci', '0', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `kitap`
--
ALTER TABLE `kitap`
  ADD PRIMARY KEY (`kitap_id`);
ALTER TABLE `kitap` ADD FULLTEXT KEY `kitap_adi` (`kitap_adi`,`yazar_adi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kitap`
--
ALTER TABLE `kitap`
  MODIFY `kitap_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
