-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 05 Haz 2022, 20:23:15
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `wirnews`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_adiSoyadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admin_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(10) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_adiSoyadi`, `admin_mail`, `admin_sifre`, `yetki`) VALUES
(1, 'Ebubekir Güner', 'ebubekirguner00@gmail.com', 'Ebubekir9.', '5'),
(2, 'yusuf', 'yusuf@wiripco.com', '125690', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gundem_post`
--

CREATE TABLE `gundem_post` (
  `post_id` int(11) NOT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `baslik` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `katagori` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `gundem_post`
--

INSERT INTO `gundem_post` (`post_id`, `resim`, `tarih`, `baslik`, `icerik`, `katagori`) VALUES
(41, 'dow_img/gundem/24185285903081430043n4ii1fo3.elt.webp', '2022-01-30 15:12:18', 'Ankara için kar uyarısı(Balkanlardan kar şiddetli geliyor )', 'Meteoroloji Genel Müdürlüğü, Ankara\'da bugün akşam saatlerinden sonra orta kuvvete kar yağışı beklendiğini bildirdi.\nMeteoroloji Genel Müdürlüğünden yapılan açıklamada, il genelinde bugün akşam saatlerinden sonra beklenen kar yağışının orta kuvvette ve yarın sabah saatlerine kadar etkili olacağının tahmin edildiği belirtilerek, buzlanma ve don olayına bağlı ulaşımda aksamalar gibi olumsuzluklara karşı dikkatli ve tedbirli olunması istendi.', 'hayat'),
(42, 'dow_img/gundem/28833288193007529513whxjj2bo.kow.webp', '2022-01-30 15:43:21', 'İstanbul Havalimanı\'nın CEO\'su: Atatürk Havalimanı açılamaz, biz varken ihtiyaç yok', 'İstanbul Havalimanı\'nı yöneten İGA\'nın CEO\'su Kadri Samsunlu, havalimanında metronun olmamasının bir eksiklik olduğunu ifade etti. Atatürk Havalimanı’nın tekrar açılamayacağı görüşünü dile getiren Samsunlu, “Biz varken ihtiyacı yok. Bizimle beraber de yok” dedi.\n\nHalk TV’den İsmail Saymaz, şehirde yaşanan kar fırtınası sırasında binlerce insanın mahsur kaldığı İstanbul Havalimanı’nı gezdi. Burada havalimanının CEO ile yaptığı görüşmeyi aktaran Saymaz’ın söyleşisinden bir kısım şöyle:\n\nHavalimanında 20 bin insan mahsur kaldı. İnsanlar kartonlarda yattı. Protesto oldu. Bu tabloyu nasıl açıklıyorsunuz?\n\nKar başladıktan sonra takımıma şunu söyledim: \"Ne kara ne de hava tarafında kimse kalmamalı. Herkesi içeri alacağız.\" Bir parçası, uçaktakilerin tahliyesiydi. İkincisi, bağlantı yolunda kalan bin araç. D-20\'den havalimanı sapağını geçince kara saplanmışlar. Önlerini açtık, tek tek içeriye aldık. Büyük kısmı yolcu ve turist getiren taksi ve servislerdi. Saat 21\'de kar bitti. Dışarıda kimse kalmadı. İçeriye geldik. Neye ihtiyaç var? Yemeğe. Hemen kumanya. Kızılay ile valilikle konuştuk. 60 bin kumanya ve 5 bin battaniye dağıtıldı. Büyük kısmı AFAD\'dan geldi.\n\n20 bin insan neden bu halde yattı?\n\nNerede yatıracağım? Havalimanında kapasiteler yolcu akışına göre hesaplanır. 25 bin kişinin kalması için ayarlanmış tesis değil burası. Öncelik ne? İnsanın emniyetini, ihtiyaçlarını, zarar almadan fırtınayı geçirmesini sağlamak. Onu yaptık.\n\nfazla oku\nBu bölüm, konuyla ilgili referans noktalarını içerir. (Related Nodes field)\n\nOtel?\n\nVar, 450 yataklı. Anında doldu tabi. Bakın, bu bir felaket. İnsanların tümüne yatak ve koltuk vermemiz mümkün değil. Kişisel güvenlikleri sağlandı mı? Yüzde yüz.\n\nMetro olsa kalabalık evine dönmez miydi?\n\nYolcularımızın ağırlıklı kesimi yabancı. Metro olsa da şehre gidip otel arayacağını düşünmüyorum. Ben yapmam. Beklerim.\n\nAma vatandaşlar var.\n\nEvet, onlar bekledi.\n\nMetro olsa dönerlerdi. Bu bir eksiklik değil mi?\n\nMetronun olmaması eksiklik mi? Evet, eksiklik. Metro geliyor mu? Evet, geliyor. Şu an deneme sürüşü yapılıyor. Nisan gibi açılacak. Metronun olması durumunda insanlar evinde kalırdı ama indikleri anda ulaşım bulabilecekler mi... Doğru, ben de evime gitmeye çalışırdım. Ama o geceki profile bakın, ağırlıklı yabancıydı.\n\nHavalimanının metrosu tamamlanmadan açılması bana göre hataydı.\n\nBence değil. Biz havalimanına erişimi sağlıyor muyuz? Sağlıyoruz. Taksi var. Otobüs var. Hava-İst var. Özel araç var. Otoparklar ucuz. Bu kadar yoldan erişiliyorsa, yatırımı da bitirdiysek metro gelmedi diye iki sene kapalı tutabilir miyiz? Ekonomik değil. Sabiha Gökçen Havalimanı\'nda da metro yok. Ankara\'da da.\n\nMetrosu olan AHL\'yi terk ederek, metrosu olmayan İstanbul\'a geldik. Bu haklı bir eleştiri değil mi?\n\nDoğru bir eleştiri. Ama bu havalimanının stratejisi farklı. AHL kapasite olarak THY\'nin büyümesini destekleyecek noktada değil.\n\nKimi vatandaşlar AHL\'nin yeniden açılmasını istiyor.\n\nAHL açılamaz.\n\nNeden?\n\nBiz varken ihtiyacı yok. Bizimle beraber de yok.\n\nHalk TV, Independent Türkçe', 'gundem'),
(46, 'dow_img/gundem/22530263702846220820rysuilsr.zzm.webp', '2022-02-02 01:36:09', 'Macron\'un adaylığını açıklamak için Ukrayna krizi ve Covid-19\'un hafiflemesini beklediği belirtildi', 'Fransa Cumhurbaşkanı Emmanuel Macron\'un nisan ayında yapılacak seçimler için adaylığını resmi olarak açıklamadan önce Ukrayna krizi ve koronavirüs salgınının hafiflemesini bekleyeceği belirtildi.\r\n\r\nFranceinfo radyosuna konuşan hükümet sözcüsü Gabriel Attal, \"Şu anda Cumhurbaşkanının dikkatini odaklaması gereken bir çok konu var ve bunlar onun adaylığını resmi olarak açıklamasına pek fırsat vermiyor,\" ifadelerini kullandı.\r\n\r\nHaftalık programında perşembe ve cuma günlerine herhangi resmi bir program konmamış olması Macron\'un bu günlerde adaylığını açıklayabileceği yorumlarına neden olmuştu.\r\n\r\nAttal, Macron\'un Rusya ve Ukrayna arasındaki krizle ilgili günlük olarak dünya liderleri ile yoğun bir görüşme trafiği yürüttüğünü aynı zamanda da yükselen vaka sayıları nedeniyle hükümetle de yakından çalıştığını vurguladı.\r\n\r\nSözcü böyle bir ortamda adaylığını açıklaması halinde Fransız halkının Macron\'u yanlış anlayabileceğini belirtti.\r\n\r\nMacron\'un rakipleri ise cumhurbaşkanının adaylığını açıklamayı kasıtlı olarak geciktirerek makamının avantajlarının son ana kadar kullanmak istemekle suçluyor.\r\n\r\nAttal ise bu iddiaları reddederek tam tersine rakipleri kampanyalarına başlamışken Macron\'un bunu yapamamasını dezavantaj olarak değerlendirdi.\r\n\r\nİkinci dönemi kazanmasına yüksek ihtimal verilen Macron\'un ekibi de yakın zamanda bir açıklama gelmesini beklemiyor.\r\n\r\nAFP\'ye konuşan bir cumhurbaşkanlığı kaynağı Macron\'un adaylığını açıklaması için 10 ile 20 Şubat arasında bir pencere olabileceğini belirtti.', 'gundem'),
(47, 'dow_img/gundem/26975233022861830245spor.webp', '2022-02-16 22:14:30', 'Hes kablo Kayserispor, bu sezon 5 kez öne geçtiği maçı kazanamadı.', 'Ligin ilk yarısında sahasında oynadığı Galatasaray ve Denizlispor, ligin ikinci yarısında sahasında oynadığı Antalyaspor ve Ankaragücü müsabakalarında öne geçmesine rağmen üstünlüğünü koruyamayan sarı kırmızılı ekip, deplasmanda oynadığı Fenerbahçe maçında da skor üstünlüğünü koruyamadı.', 'Spor'),
(49, 'dow_img/gundem/23140308492787428191dolar-5f6v_cover.jpg.webp', '2022-02-17 14:55:03', 'Dolar/TL\'de bir yeni rekor daha', 'Cumhurbaşkanı Erdoğan\'ın TRT canlı yayınında sarf ettiği, \"Faiz sebep, enflasyon neticedir. Faizi şu anda düşürüyoruz ve enflasyonun da inşallah düştüğünü hep birlikte göreceğiz\" açıklaması ardından gün içinde 13.18 TL\'ye çıkan dolar/TL, açıklama sonrası yeni bir rekorla 13,96 seviyesine kadar yükseldi. 14 seviyelerine yaklaşan kur bir süre sonra 13,60 seviyesine indi.\r\n\r\nCumhurbaşkanı konuşmasının kurla ilgili kısmında, \"Büyümeyi istikrarsız hale getirmelerine müsaade etmeyeceğiz ve biz bu sarmaldan çıkacağız. Kur-faiz spekülasyonu ile karşı karşıyayız. Dolayısıyla bu spekülasyonu ancak biz engelleriz. Artık cari açık verip bu açığı dış borçla finanse eden değil, döviz kazanıp cari fazla veren ekonomi olma hedefiyle hareket ediyoruz.\" diye konuştu.\r\n\r\nCumhurbaşkanı Erdoğan, Seçim öncesine kadar faizin düşeceğini, kuru tetikleyen yüksek faizin düşüşü sebebiyle kurda da enflasyonda da iyileşmenin gerçekleşeceğini savundu.', 'finans');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_post`
--

CREATE TABLE `slider_post` (
  `post_id` int(11) NOT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date DEFAULT NULL,
  `baslik` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `siteurl` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `haberkonu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `slider_post`
--

INSERT INTO `slider_post` (`post_id`, `resim`, `tarih`, `baslik`, `icerik`, `siteurl`, `haberkonu`) VALUES
(37, 'dow_img/slider/20473225482199020259resized_20997-91f4b07dvk.jpg', '2022-01-30', 'Hızlı bulaşan Omicron yeterli bağışıklık sağlamıyor', 'a', 'https://www.bundle.app/gundem/ankara-icin-kar-uyarisi-b157e438-c332-4ba2-84d9-58cff23dd567', 'hastalık'),
(38, 'dow_img/slider/20637257262226526572kapak_100849.jpg', '2022-01-30', 'Son dakika | İstanbul\'da polisleri taşıyan minibüs devrildi: Yaralılar var', 'b', 'https://www.cumhuriyet.com.tr/turkiye/son-dakika--istanbulda-polisleri-tasiyan-minibus-devrildi-yaralilar-var-1903820', 'GÜNDEM'),
(39, 'dow_img/slider/2938525559268582058661f5429086b24a16f09c49c2.jpg', '2022-01-30', 'Cumhurbaşkanı Erdoğan\'dan İmamoğlu\'na \'balıkçı\' tepkisi', 'a', 'https://www.milliyet.com.tr/siyaset/son-dakika-cumhurbaskani-erdogandan-onemli-aciklamalar-6690390', 'GÜNDEM'),
(41, 'dow_img/slider/239122303922229260365wjv3m5q.dvz.webp', '2022-01-30', 'iOS\'un yeni sürümüyle gelecek emojiler belli oldu', 'b', 'https://www.bundle.app/gundem/iosun-yeni-surumuyle-gelecek-emojiler-belli-oldu-11a86581-4853-472b-a50e-64ea34c21da8', 'TEKNOLOJİ'),
(42, 'dow_img/slider/21240225092263421808obsvzkgm.yf3.webp', '2022-01-30', 'Modern tarihteki en büyük düşüş: Rus nüfusu 1 milyondan fazla azaldı', 'b', 'https://www.bundle.app/gundem/modern-tarihteki-en-buyuk-dusus-rus-nufusu-1-milyondan-fazla-azaldi-c95d9dea-bb6d-423e-81c0-7bb8f64a6745', 'TARİH'),
(43, 'dow_img/slider/28313210342774730198dxjx3nba.ati.webp', '2022-01-30', 'Başkan, Ghislain Konan transferini resmen açıkladı', 'a', 'https://www.bundle.app/spor/baskan-ghislain-konan-transferini-resmen-acikladi-0c00ca7c-32e8-4f37-b603-56e491a52728', 'Spor'),
(44, 'dow_img/slider/30929319972299621349silder.webp', '2017-02-20', 'Elazığ kısıtlamanın son gününde havadan görüntülendi', '', 'https://haber.medyainternet.com.tr/elazig-kisitlamanin-son-gununde-havadan-goruntulendi/530/', 'Korona virüsle (Covid-19)');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `gundem_post`
--
ALTER TABLE `gundem_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Tablo için indeksler `slider_post`
--
ALTER TABLE `slider_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `gundem_post`
--
ALTER TABLE `gundem_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Tablo için AUTO_INCREMENT değeri `slider_post`
--
ALTER TABLE `slider_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
