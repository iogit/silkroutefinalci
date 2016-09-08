-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 05:59 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `io_admin`
--

CREATE TABLE `io_admin` (
  `admn_id` int(11) NOT NULL,
  `admn_usrName` varchar(255) CHARACTER SET latin5 NOT NULL,
  `admn_psswrd` varchar(255) CHARACTER SET latin5 NOT NULL,
  `admn_logDate` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `io_admin`
--

INSERT INTO `io_admin` (`admn_id`, `admn_usrName`, `admn_psswrd`, `admn_logDate`) VALUES
(1, 'ioroot', 'ION0pass', '2014-02-26 14:01:18'),
(2, 'mkuser', 'mkpass', '2016-08-21 02:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `io_blog`
--

CREATE TABLE `io_blog` (
  `ioBlog_id` int(11) NOT NULL,
  `ioBlog_title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioBlog_content` text CHARACTER SET latin5 NOT NULL,
  `ioBlog_link` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioBlog_view` int(255) NOT NULL,
  `ioBlog_date` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioBlog_live` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_blog`
--

INSERT INTO `io_blog` (`ioBlog_id`, `ioBlog_title`, `ioBlog_content`, `ioBlog_link`, `ioBlog_view`, `ioBlog_date`, `ioBlog_live`) VALUES
(6, 'TIP  (HAKİKATEN)  BU DEĞİL!..', '                           \r\n                        Yazımın başlığında kullandığım ifade aslında ?TIP BU DEĞİL? isimli kitaba atıfta bulunmak için..bu kitap deneyimli doktorlar tarafından hazırlanmış, gerçekleri tespit eden  bir kitap?\r\nBu kitap,okuyan için, son yüzyılda tıbbın zemininin nereye kaydırıldığı ve nasıl bir RANT sektörüne dönüştürüldüğü konusunda fikir sahibi olabileceği gerçeklerle dolu..\r\nÜniversite hoclarımızın bile artık bu hakikatleri dile getiriyor olması memnuniyet verici?\r\nFakat ben, müsaadenizle ve affınıza sığınarak ?GÜNAYDIN? demek isterim?\r\nBatı-ortodoks tıbbın marifetlerini bu milletin evladı 70 yıldır seyrediyor ama çaresizce buna teslim oluyor, çünkü bu ülkenin doktorları çoğu itibariyle bugüne kadar bu Tıp(?) ekolüne hizmet etmiştir ve yine çoğu hem fikren hem de bedenen hizmet etmeye devam etmektedir!\r\nBu gerçekle yüzleşen bir doktor arkadaşımız cevap olarak ?mecburuz?? diyor ve kendini temize çıkarıveriyor. İşte tam da burada büyük bir yanılgı ve problem var!..Biz bu sisteme kısmen(!)de olsa bedenen hizmet etmek zorunda olunduğunun farkındayız..\r\n Gel gelelim, fikren ve zihnen NEDEN bu Ortodoks tıbbının esiriyiz ki?..bunu kabullenmek mümkün değildir. Onlar(!) ilaç yapsın, biz sadece zabıt katibi gibi o ilaçları yazalım, sonra da bekleyelim ki hastalar iyileşsin?peki iyileşiyorlar mı?..?..?..\r\nKanser, Diyabet(şeker hastalığı), Romatizma, MS, Parkinson, Alzheimer, Damar tıkanıklığı, Hepatit B ve C iyileşiyor mu?..Batı Ortodoks tıbbının tedavi yaklaşımında ?şifa? yani tam sağlığa kavuşma derdi var mı?..Ortodoks kimyasal tıbbının tedavi veya iyileşmekten kastettiği şey sağlığa kavuşmak değil ki!\r\nBu maddeci ve ilaççı(!) tıp anlayışında Şeker hastası, yıllarca tablet ve insülin kullanıp yine sonunda ya kör olur (bkz göz klinikleri), ya ayağı kesilir (bkz ortopedi servisleri), ya da böbrek yetmezliğine girer (bkz diyaliz merkezleri) vs.vs?\r\n?Bu hastalık seninle ömür boyu gider? cümlesini bize söylettiren KİM?..\r\nHala oturup ta başımızı iki elimizin arasına alıp düşünmeyecek miyiz?..ben düşünürüm!\r\nİnsanımızın bu kronik hastalıklardan kıvranmasına razı olmadığım için araştırırım!\r\nMeme kanseri ileri evrede olduğu için, birkaç ay yaşarsın evine götürün, diye ümitsizliğe mahkum edilen Aynur hanımın  6 ay Reishi mantarı kullandıktan sonra 3 yıldır halinden memnun yaşıyor olduğunu gördükten sonra, özgürce düşünmenin ve doktor olarak araştırmanın ne kadar isabetli olduğunu anlayarak ta araştırmaya devam ederim!\r\nDarısı tüm bağımsız düşünebilen ve zulme engel olamasa bile en azından fikren(!) karşı olan ve en azından kalbinden buğzeden hekimlerin başına?\r\nHerkese hakiki sağlık dolu günler dileğimle?\r\nUzman Dr. Dinçer Erdinç\r\n', '', 37, '2013-07-11 23:43:38', 0),
(7, 'KOCA KARI DEĞİL ?KOCA KARYA? İLACI!..', '                           \r\nBinlerce yıldır dilden dile gelen sözcük veya tabirlerin çoğu zaman kulaktan kulağa değişime uğraması sık rastladığımız bir durumdur. İşte böyle azizliğe uğramış olan bir tabir de ?Koca karı ilaçları? deyimidir. Bu tabirin aslı ?Koca Karya ilaçları?dır?garip değil mi?..\r\nBu traji-komik ve üzüntü verici durumun hikayesi şöyle sevgili dostlar:\r\n?Koca Karya? etnik gurubu Türkiye?nin ege bölgesinde milattan önce 1500?lü yıllardan itibaren yaşamıştır. Kesin olarak bilinmemekle beraber Selcuklu veya Osmanlı dönemine kadar ulaştığı söylenmektedir. İlk zamanlar Karya devleti iken çok büyüdüğü için ?Koca Karya? diye anılır olmuşlardı. Koca Kayralılar, Kimya ve ilaç bilimi üzerine uzmanlaşmışlardı ve halk hasta olduğunda doğal bitkisel ilaçlarla insanları iyileştirirlerdi.\r\nO zamandan bu zamana kadar bu toplumun ilaçlarına verilen ?Kocakarya ilaçları? tabiri ne yazık ki günümüze ?kocakarı? ilaçları şeklinde intikal et(tiril)miştir?\r\nBu tahrifatın bilinçli mi bilinçsiz mi olduğu tartışmalıdır..çünkü bitkilere karşı olanlar kocakarı ilacı söylemini hep aleyhte kullanmıştır?Birilerinin bunu yapmış olabileceğine inanmak zor geliyorsa bir de şunu dinleyin; İslam peygamberi ?Yemek yerken susmayın (konuşun)?diye tavsiye etmiş ama küçükken bize ?yemek yerken konuşulmaz? demişlerdi? sonradan öğrendik ki yemek yerken konuşmamak Yahudi adetiymiş?yorum yok!\r\nMuğla-Aydın bölgesinde yerleşik Karya, bir zamanlar ilmi bir merkezmiş. Karya devleti ilaçlarıyla o kadar ünlenmiş ki, Koca Karya kütüphanesi diye bir de hazinesi varmış. Özellikle incir, nar, keçiboynuzu, zeytin ve üzümden elde ettikleri ilaçları türlü baharatlarla bezeyerek şifa dağıtmışlar.\r\nTicari niteliği en yüksek incir meyvesi cinsinin beşiği ve merkezi Karya (Muğla-Aydın) bölgesinde olduğundan, bu ?düz incir?in (common fig) ismi, bugün halk arasında ?Aydın inciri? denildiği gibi, botanik bilimine ?Ficus carica? şeklinde geçmiştir.\r\nKıssadan değil, Tarihi Hakikatten HİSSE(!) şudur sevgili okurlar;\r\nÜzerinde doğduğumuz topraklar Anadolu?dur ve medeniyetin, ilmin, ve dahi tıbbın beşiğidir. Fakat ne yazık ki birkaç yüzyıldır bütün değerli zenginlikleri ve potansiyeli unut(tur)ulmuştur veya tahribata maruz kalmıştır.\r\nYer altı ve yer üstündeki zenginlikleriyle, insan gücü ve enerjisiyle (kendine biçilmiş) kabına sığmayan bu toprakların insanı,şimdilerde gerçeklere gözünü açmaya başlamış gibi? Umarız ki bu süreç hızlanır; çünkü hasta çok, hastalık çok ve doktor-doktor, hastane-hastane dolaşıp şifa arayan insan evladı çok?\r\nGelin birkez daha şapkayı önümüze koyup düşünelim?değerlerimize sahip çıkalım ve geçmişten günümüze mirasımızı küçük görmeden, iyi araştırıp öğrenelim?\r\nVe n?olur artık ?kocakarı? ilacı tabirini lügatımızdan silelim!\r\nHerkese bol oksijenli günler dilerim.\r\nUzm.Dr.Dinçer Erdinç\r\nAile Hekimliği ve Tamamlayıcı Tıp Uzmanı\r\n', '', 21, '2013-07-12 01:59:40', 1),
(8, 'AYVAYI YE Kİ?HAPI YUTMA!..', '\r\nAyva, nedense ve ne yazık ki, olumsuz anlamlı bir deyim ile  meşhur olmuş bir meyvedir? dolayısıyla ayvayı yemek kötü bir şeymiş gibi oluyor! Gelin görün ki ayva kalbin dostu toksinlerin düşmanıdır?\r\n\r\nAyva ile ilgili yapılmış çok sayıda nitelikli bilimsel tıbbi araştırma göstermiş ki ayva, göğsü yumuşatıyor, kalbi güçlendiriyor ve vücudumuzun Kalp-damar-dolaşım sistemi başta olmak üzere tüm organlarımız için faydalı özellikte maddeler içeriyor.\r\n\r\nYani sizin anlayacağınız ayvayı yemek her türlü iyi bir şeydir?\r\n\r\nPekiyi,hapı yutmak nasıl bir şeydir?? Herkesin bildiği bir gerçeği dile getirmek gerekirse, her ilaç ?dozu ayarlanmış? bir zehir hükmündedir. Yerinde ve zamanında ve de dozunda kullanılırsa -ancak- faydalı olacaktır.\r\n\r\nİlaç kullanmak, bir ?kâr-zarar? hesabıdır aslında..yani hiç yan etkisi olmayan bir ilaç olmadığı gibi ölüme yol açabilecek ilaçlar bile vardır. Örneğin herkesin çok iyi bildiği ?joker ilaç? olan aspirin nedeniyle mide kanaması geçirip yoğun bakımlık olup ölen insanlar vardır? ama tabii ki bu durum aspirinin kötü bir ilaç olduğunu göstermez! Tekrar edelim ki her ilaç fayda ve yan etkileri iyi hesaplanarak hastaya özel uygun dozda kullanılırsa ?hayat kurtarıcı? dahi olabilir.\r\n\r\nHakikat şudur ki; doktora giden bir insana, hastalığına yönelik ?sadece? ilaç yazıp göndermek çoğu zaman eksik veya yanlış olur. O insana yaşam tarzı ve beslenme düzenlemesi yapılmadan, sanki sadece ilaçla şifa bulacakmış gibi tedavi planlamak yanlıştır.\r\n\r\nHalbuki her ilaç ya karaciğer ya da böbreği meşgul edecek ve bu organların marifetiyle ancak vücuttan temizlenebilecek zehirli maddelere dönüşür. Düşünün ki eğer bu zehirler temizlenemezse vücudumuzda neler olur?..neler olmaz ki?..\r\n\r\nAslında ideal tedavi yaklaşımında ilaca başvurmak için bütün doğal yaklaşımların tükenmiş olması gerekir? örneğin tansiyonu yükseldiği için ilk kez doktora başvuran kişiye hemen ilaç başlanmaz! Önce diyet-egzersiz-yaşam tarzı değişikliği ve tansiyon takibi yapılır! İleriki kontrollerde bu önlemlere rağmen hala tansiyonu yüksekse ilaç başlanır!?\r\n\r\nÖyleyse, adeta ilaç müptelası olmuş bir toplumun fertleri olarak, gelin bakış açımızı genişletelim ve sağlıklı yaşamanın ?binlerce yıllık? kurallarına yönelip araştıralım ve uygulayalım. Doğal ve sağlıklı-dinç yaşama dönüş yapalım, dik duralım.\r\n\r\nAyvayı, doğal sağlıklı yaşamın temsilcisi olarak düşünecek olursak, ilaca(hapa) bağımlılıktan bizi kurtarabilecek olan şey ayvayı yemektir sevgili dostlar!\r\n\r\nVelhasıl, güzel güzel ayvayı(!) yiyelim de, hapı(!) yutmayalım derim!..\r\n\r\nÇünkü görünen o ki; ayvayı yersek, hapı yutmak zorunda kalmayız!?\r\n\r\nBir başka deyişle; ?Ayvayı yemezsek?işte o zaman hapı yutarız!?\r\n\r\nHerkese hakiki(!) sağlıklı günler dilerim.\r\n\r\nTamamlayıcı Tıp ve Aile Hekimliği Uzmanı Dr. Dinçer Erdinç\r\n\r\n                 ', '', 14, '2013-07-12 07:48:44', 1),
(9, 'UZUN YAŞAMIN SIRRI !?', '                           \r\nUzun yaşamak isteği, insanoğlunun öteden beri hep arzusu olmuştur. Tabii ki, daha akl-ı selim düşünen aklı başında tecrübeli insanlar, uzun yaşamaktan ziyade ?hayırlı? bir ömür dilemeyi yeğler.\r\nAtalarımız bu işi çokça düşünmüş olarak bir cümleyle paketlemişler zaten;?Allah hayırlı uzun ömür versin??doğru ya, sonradan pişmanlığını duyacağımız uzun bir ömür başımıza dert olacaktır hiç şüphesiz. Günümüz tıbbında ise bu meselenin karşılığı ?kaliteli? yaşamın öncelikli olması ve mümkünse ?kaliteli-uzun? yaşamın sırlarını araştırmaktır.\r\nPekiyi doktor bey, bu ?uzun yaşama? konusu tıpta ne alemde diyecek olursanız, ben hemen sizlere durumu özetleyeyim;\r\nBugüne kadar yaşamı uzatacağı düşünülen pek çok faktör tıp dünyasında gündeme gelmiş tartışılmış ve üzerinde çalışmalar yapılmıştır. Yıllarca sürmüş olan bu kadar çalışma ve araştırmanın sonunda, bugün itibariyle yaşamı uzatabileceği gösterilmiş ilk ve tek unsur nedir biliyor musunuz sevgili okurlarım; sıkı durun? ?Kalori kısıtlaması?!?\r\nEvet, 2009 yılında ünlü ?Science? dergisinde yayınlanan bilimsel çalışma sonuçlarına göre Wisconsin Üniversitesinden Dr.Richard Weinruch der ki ?20 yıllık araştırmanın verilerine bakılırsa günlük kalori alımının 30% azaltılması yşam süresini 40% uzattığı tesbit edildi?.\r\nAmerika?nın bu şöhretli üniversitesinde Dr Ricki J.Colman ve Dr. Richard Weinruch?un gerçekleştirdiği 20 yıl sürmüş olan bu çalışmaya göre, kalori kısıtlaması yapılan maymunlarda şeker hastalığı, kanser, kalp ve beyin hastalıkları da dahil bir çok problem daha az görüldü.\r\nKalori kısıtlamasının genel anlamı ?az yemek? diye algılansa da daha net ifadesi ?yediklerimizin içeriği? olmalıdır. Yani bir insan ne yediğine dikkat eder ve günlük toplam kalori içeriğini azaltırsa sağlıklı yaşam adına inanılmaz kazançlar sağlayabilir.\r\nKalori kısıtlaması hücresel bazda oluşan oksijen artıklarını (serbest oksijen radikalleri) azaltıyor ve böylece bizim yaşlanmamızdan en çok sorumlu olduğu düşünülen oksidatif hasarı reaksiyonlarını azaltarak anti-aging etki yapıyor. Benzer etkiler ?gençlik aşısı? diye adlandırılan Ozon tedavisinde de oluşmaktadır.\r\nKalori kısıtlamasının yaşlanmaya neden olan reaksiyonları azalttığı ve kişinin zindeliğini arttırdığı ve bağışıklık sistemini kıvamında tuttuğu gerçeği aslında bir süredir tıbbın bilgisi dahilinde fakat?nedense(!) bir türlü hak ettiği yüksek tonda gündem olamadı dostlar!?\r\nNetice itibariyle kalori kısıtlaması yaşamı uzatır mı uzatmaz mı bilmem ama yaşam kalitesini arttırdığı, yani daha zinde, daha aktif, daha sağlıklı kalmamızı sağladığı kesindir. Bugüne kadar bu konuda yapılmış olan çalışmalarda ?yaşamanın devamlılığı? üzerine alınan net bir sonuç olarak kalori kısıtlamasının keşfedilmesi büyük bir tesbit olmuştur.\r\nSizlerle bu bilgiyi paylaşmış olmanın huzuruyla, birkez daha atalarımızın eşsiz tecrübeleriyle süzüp bizlere bıraktığı şu sözlerle yazımı sonlandırıyorum: ?Allah hayırlı uzun ömür versin.?\r\nHepinize bol Oksijenli günler diliyorum.\r\nUzm.Dr.Dinçer ERDİNÇ\r\n', '', 67, '2013-07-12 08:03:12', 1),
(10, 'AYVAYI YE Kİ?HAPI YUTMA!..', '                     Değerli bir sitenin seçkin bir köşesinde yazılacak ilk yazının ilk cümlesinin dayanılmaz zorluğunu çabucak atlatarak, çok mühim bir mevzuyla başlamak isterim?\r\nSaygıdeğer atalarımızdan bize ulaşan ?Hapı yuttuk!? tabiri tam da bugünlerde uyanmaya başladığımız bir hakikati dile getiriyor sanki!..\r\nBahsettiğimiz hakikat odur ki,günümüzde ?Modern Tıp? veya ?Batı Tıbbı? veya ?Ortodoks Tıbbı? veya ?Semptomatik Tıp? veya ?Allopatik Tıp? gibi pekçok tabir ile anılan ve bizlerin hem hekimler olarak hemde halk olarak adeta teslim (!) olduğumuz tıp ekolü neyazıkki tüm gerçekleri bize anlatmamaktadır! Hemen güncel bir konudan örnek verecek olursak, ?kolesterol? gibi vücudumuzun temel yapı taşlarından birini damar tıkanıklığının ana nedeniymiş gibi lanse edilerek(!), bahsedilen ilaçların aksi tesirlerinin sümenaltı edilmesi, Batı tıbbının niyetini, hem dünyada hemde ülkemizde yeniden sorgulanır hale getirmiştir.\r\nBatı Ortodoks Tıbbının acil durumlarda, hastanede yatan hasta bakımında ve cerrahideki üstün başarısının takdire şayan olduğunu teslim-i hak olarak belirtmek ve teknolojiden sonuna kadar faydalanarak insanları pekçok dertten kurtardığını söylemek te boynumuzun borcudur. Fakat neyazıkki söz konusu ?kronikleşmiş hastalıklar? olduğunda bu Baskın Tıp ekolü sadece bulgu ve şikayetleri yani hastalıkların sonuçlarını gidermek üzerine ilerlemiştir.\r\nÖyleyse Batı (!) Tıbbı -bilerek veya bilmeyerek- nerede hata yapmıştır ki bugün Kanser gibi Diyabet, Hipertansiyon, Obezite, Romatizma, Damar sertliği, Kireçlenme, Allerji-Astım, Egzema, Migren, MS, Alzheimer, Parkinson vs gibi insan hayatını yaşanmaz hale getiren kronik(!) hastalıklarla başedemeyecek kadar aciz durumda kalmıştır?\r\nAcaba bu hastalıklardan kurtulmanın hakikaten(!) hiçbir yolu yok mudur? Yoksaaa? yutturacak bir hapını henüz üretemediği için bizi yıllar boyunca oyalamış mıdır? Daha kötü bir ihtimal daha varki onu şimdi burada zikretmeyelim?\r\nDüşünelim ve soralım, dünyada 1 trilyon(!) doları aşmış bir ilaç piyasası varken ve bu ilaçların ezici çoğunluğu yazdığımız kronik hastalıkların sözde(!) tedavileri için harcanırken, hem iyileşmeyip yani şifa bulamayıp hemde bu kadar para ödemiş olmak bizim yanımıza zarar mı kalmıştır?\r\nAslında en çarpıcı soruyu tekrar soralım mı? Bu hastalıkların gerçekten çaresi yani şifası yok mudur? Modern=Batı tıbbına göre YOKTUR!.. Ama ben size insan evladının görüp göreceği en güvenilir kaynaktan gelen bir hakikati aktarayım mı?\r\n?Hiçbir hastalık yoktur ki Allah(cc) onun çaresini yaratmış olmasın?(Hz.Muhammed (S.A.V)-Buhari ve Müslim?den sahih rivayetle)\r\nBunun üzerine söz söyleyip haddi aşmaktansa, mezkur çareleri araştırmak bize yakışacak en güzel davranış ve düşünce şekli olsa gerek!\r\nYeniden buluşmak dileğiyle, bol Oksijenli günler diliyorum.\r\nUzm.Dr.Dinçer Erdinç\r\nAile Hekimliği Uzmanı\r\n      \r\n                        ', '', 4, '2013-07-22 04:19:18', 1),
(11, 'UZUN YAŞAMIN SIRRI !?', '                           \r\n                        Değerli bir sitenin seçkin bir köşesinde yazılacak ilk yazının ilk cümlesinin dayanılmaz zorluğunu çabucak atlatarak, çok mühim bir mevzuyla başlamak isterim?\r\nSaygıdeğer atalarımızdan bize ulaşan ?Hapı yuttuk!? tabiri tam da bugünlerde uyanmaya başladığımız bir hakikati dile getiriyor sanki!..\r\nBahsettiğimiz hakikat odur ki,günümüzde ?Modern Tıp? veya ?Batı Tıbbı? veya ?Ortodoks Tıbbı? veya ?Semptomatik Tıp? veya ?Allopatik Tıp? gibi pekçok tabir ile anılan ve bizlerin hem hekimler olarak hemde halk olarak adeta teslim (!) olduğumuz tıp ekolü neyazıkki tüm gerçekleri bize anlatmamaktadır! Hemen güncel bir konudan örnek verecek olursak, ?kolesterol? gibi vücudumuzun temel yapı taşlarından birini damar tıkanıklığının ana nedeniymiş gibi lanse edilerek(!), bahsedilen ilaçların aksi tesirlerinin sümenaltı edilmesi, Batı tıbbının niyetini, hem dünyada hemde ülkemizde yeniden sorgulanır hale getirmiştir.\r\nBatı Ortodoks Tıbbının acil durumlarda, hastanede yatan hasta bakımında ve cerrahideki üstün başarısının takdire şayan olduğunu teslim-i hak olarak belirtmek ve teknolojiden sonuna kadar faydalanarak insanları pekçok dertten kurtardığını söylemek te boynumuzun borcudur. Fakat neyazıkki söz konusu ?kronikleşmiş hastalıklar? olduğunda bu Baskın Tıp ekolü sadece bulgu ve şikayetleri yani hastalıkların sonuçlarını gidermek üzerine ilerlemiştir.\r\nÖyleyse Batı (!) Tıbbı -bilerek veya bilmeyerek- nerede hata yapmıştır ki bugün Kanser gibi Diyabet, Hipertansiyon, Obezite, Romatizma, Damar sertliği, Kireçlenme, Allerji-Astım, Egzema, Migren, MS, Alzheimer, Parkinson vs gibi insan hayatını yaşanmaz hale getiren kronik(!) hastalıklarla başedemeyecek kadar aciz durumda kalmıştır?\r\nAcaba bu hastalıklardan kurtulmanın hakikaten(!) hiçbir yolu yok mudur? Yoksaaa? yutturacak bir hapını henüz üretemediği için bizi yıllar boyunca oyalamış mıdır? Daha kötü bir ihtimal daha varki onu şimdi burada zikretmeyelim?\r\nDüşünelim ve soralım, dünyada 1 trilyon(!) doları aşmış bir ilaç piyasası varken ve bu ilaçların ezici çoğunluğu yazdığımız kronik hastalıkların sözde(!) tedavileri için harcanırken, hem iyileşmeyip yani şifa bulamayıp hemde bu kadar para ödemiş olmak bizim yanımıza zarar mı kalmıştır?\r\nAslında en çarpıcı soruyu tekrar soralım mı? Bu hastalıkların gerçekten çaresi yani şifası yok mudur? Modern=Batı tıbbına göre YOKTUR!.. Ama ben size insan evladının görüp göreceği en güvenilir kaynaktan gelen bir hakikati aktarayım mı?\r\n?Hiçbir hastalık yoktur ki Allah(cc) onun çaresini yaratmış olmasın?(Hz.Muhammed (S.A.V)-Buhari ve Müslim?den sahih rivayetle)\r\nBunun üzerine söz söyleyip haddi aşmaktansa, mezkur çareleri araştırmak bize yakışacak en güzel davranış ve düşünce şekli olsa gerek!\r\nYeniden buluşmak dileğiyle, bol Oksijenli günler diliyorum.\r\nUzm.Dr.Dinçer Erdinç\r\nAile Hekimliği Uzmanı\r\n', '', 31, '2013-07-22 04:19:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `io_call`
--

CREATE TABLE `io_call` (
  `ioCall_id` int(11) NOT NULL,
  `ioCall_name` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioCall_phone` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioCall_order` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioCall_address` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioCall_status` int(11) NOT NULL,
  `ioCall_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `io_comment`
--

CREATE TABLE `io_comment` (
  `ioComment_id` int(11) NOT NULL,
  `ioComment_idparent` int(255) NOT NULL,
  `ioComment_categid` int(11) NOT NULL,
  `ioComment_name` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioComment_email` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioComment_title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioComment_comment` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioComment_answer` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioComment_view` int(255) NOT NULL,
  `ioComment_date` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioComment_post` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `io_comment`
--

INSERT INTO `io_comment` (`ioComment_id`, `ioComment_idparent`, `ioComment_categid`, `ioComment_name`, `ioComment_email`, `ioComment_title`, `ioComment_comment`, `ioComment_answer`, `ioComment_view`, `ioComment_date`, `ioComment_post`) VALUES
(89, 5, 1, 'slider doctor house', 'email@email.com', 'slider house baslik', 'yorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyorum houseyo', '', 0, '2013-08-05 05:28:14', 1),
(90, 5, 1, 'slider doctor house', 'deneme@deneme.com', 'Doktor 1', 'doktor yourm 2', '', 0, '2013-08-05 05:30:54', 1),
(91, 6, 1, 'alpha bravo tango id 6', 'deneme@deneme.com', 'Bu uzun ve mesakkatli bir yorum yazisidir.ğüğüişişişiç.öç.öç.ö.öç.', 'asdfafasdfasfadfasfadfasfsfdf', '', 0, '2013-08-05 05:33:25', 1),
(92, 9, 3, 'blog yazisis ', 'blog@blog.com', 'blog yazisi yorum deneme', 'blog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum denemeblog yazisi yorum deneme', '', 0, '2013-08-05 05:40:02', 1),
(93, 7, 3, 'koca kari ', 'koca@kocagmail.com', 'koca kari gmail', 'koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari koca kari ', '', 0, '2013-08-05 05:41:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `io_gallerypic`
--

CREATE TABLE `io_gallerypic` (
  `iogallerypic_id` int(11) NOT NULL,
  `iogallerypic_title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `iogallerypic_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_gallerypic`
--

INSERT INTO `io_gallerypic` (`iogallerypic_id`, `iogallerypic_title`, `iogallerypic_date`) VALUES
(6, 'hastalik', '2013-07-07 03:30:53'),
(7, 'lamborghini', '2013-07-12 04:19:03'),
(8, 'Resim baslik', '2013-07-12 04:19:42'),
(9, 'deneme yazıısı pğüğğüğçö.çö.ö', '2013-07-12 07:22:40'),
(10, 'denem', '2013-07-12 07:25:36'),
(11, 'Deneme', '2013-07-15 03:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `io_galleryvid`
--

CREATE TABLE `io_galleryvid` (
  `iogalleryvid_id` int(11) NOT NULL,
  `iogalleryvid_link` varchar(255) CHARACTER SET latin5 NOT NULL,
  `iogalleryvid_title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `iogalleryvid_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_galleryvid`
--

INSERT INTO `io_galleryvid` (`iogalleryvid_id`, `iogalleryvid_link`, `iogalleryvid_title`, `iogalleryvid_date`) VALUES
(13, 'http://youtu.be/dlH2pIndNrU', 'youtube video linki', '2013-07-14 04:26:36'),
(14, 'http://youtu.be/dlH2pIndNrU', 'Deneme video link uzunluk testi ve türkçe karakter testi ığü.Çöç.ö.çö.', '2013-07-14 04:29:05'),
(15, 'http://youtu.be/dlH2pIndNrU', 'Deneme video link uzunluk testi ve türkçe karakter testi ığü.Çöç.ö.çö.', '2013-07-14 04:32:21'),
(16, 'http://youtu.be/dlH2pIndNrU', 'Deneme video link uzunluk testi ve türkçe karakter testi ığü.Çöç.ö.çö.', '2013-07-14 05:42:55'),
(19, 'http://youtu.be/dlH2pIndNrU', 'Deneme video link uzunluk testi ve türkçe karakter testi ığü.Çöç.ö.çö.', '2013-07-19 07:25:14'),
(20, 'http://youtu.be/dlH2pIndNrU', 'Deneme video link uzunluk testi ve türkçe karakter testi ığü.Çöç.ö.çö.', '2013-07-19 07:51:30'),
(21, 'http://youtu.be/dlH2pIndNrU', 'a', '2013-07-20 07:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `io_message`
--

CREATE TABLE `io_message` (
  `ioMessage_id` int(11) NOT NULL,
  `ioMessage_name` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioMessage_email` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioMessage_message` text CHARACTER SET latin5 NOT NULL,
  `ioMessage_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_message`
--

INSERT INTO `io_message` (`ioMessage_id`, `ioMessage_name`, `ioMessage_email`, `ioMessage_message`, `ioMessage_date`) VALUES
(3, 'My Namesdfadf', 'deneme@deneme.com', 'ASDSadADssFASDF', '2013-07-23 04:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `io_news`
--

CREATE TABLE `io_news` (
  `ioNews_id` int(11) NOT NULL,
  `ioNews_title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioNews_content` text CHARACTER SET latin5 NOT NULL,
  `ioNews_link` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioNews_view` int(255) NOT NULL,
  `ioNews_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_news`
--

INSERT INTO `io_news` (`ioNews_id`, `ioNews_title`, `ioNews_content`, `ioNews_link`, `ioNews_view`, `ioNews_date`) VALUES
(23, 'Makale bas;ligi', '<!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:DontVertAlignCellWithSp/>\r\n   <w:DontBreakConstrainedForcedTables/>\r\n   <w:DontVertAlignInTxbx/>\r\n   <w:Word11KerningPairs/>\r\n   <w:CachedColBalance/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="&#45;-"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]-->\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Değerli bir sitenin seçkin bir köşesinde\r\nyazılacak ilk yazının ilk cümlesinin dayanılmaz zorluğunu çabucak atlatarak,\r\nçok mühim bir mevzuyla başlamak isterim?</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Saygıdeğer atalarımızdan bize ulaşan ?Hapı\r\nyuttuk!? tabiri tam da bugünlerde uyanmaya başladığımız bir hakikati dile\r\ngetiriyor sanki!..</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Bahsettiğimiz hakikat odur ki,günümüzde\r\n?Modern Tıp? veya ?Batı Tıbbı? veya ?Ortodoks Tıbbı? veya ?Semptomatik Tıp?\r\nveya ?Allopatik Tıp? gibi pekçok tabir ile anılan ve bizlerin hem hekimler\r\nolarak hemde halk olarak adeta teslim (!) olduğumuz tıp ekolü neyazıkki tüm\r\ngerçekleri bize anlatmamaktadır! Hemen güncel bir konudan örnek verecek\r\nolursak, ?kolesterol? gibi vücudumuzun temel yapı taşlarından birini damar\r\ntıkanıklığının ana nedeniymiş gibi lanse edilerek(!), bahsedilen ilaçların aksi\r\ntesirlerinin sümenaltı edilmesi, Batı tıbbının niyetini, hem dünyada hemde\r\nülkemizde yeniden sorgulanır hale getirmiştir.</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Batı Ortodoks Tıbbının acil durumlarda,\r\nhastanede yatan hasta bakımında ve cerrahideki üstün başarısının takdire şayan\r\nolduğunu teslim-i hak olarak belirtmek ve teknolojiden sonuna kadar\r\nfaydalanarak insanları pekçok dertten kurtardığını söylemek te boynumuzun\r\nborcudur. Fakat neyazıkki söz konusu ?kronikleşmiş hastalıklar? olduğunda bu Baskın\r\nTıp ekolü sadece bulgu ve şikayetleri yani hastalıkların sonuçlarını gidermek\r\nüzerine ilerlemiştir.</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Öyleyse Batı (!) Tıbbı -bilerek veya\r\nbilmeyerek- nerede hata yapmıştır ki bugün Kanser gibi Diyabet, Hipertansiyon,\r\nObezite, Romatizma, Damar sertliği, Kireçlenme, Allerji-Astım, Egzema, Migren,\r\nMS, Alzheimer, Parkinson vs gibi insan hayatını yaşanmaz hale getiren kronik(!)\r\nhastalıklarla başedemeyecek kadar aciz durumda kalmıştır?</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Acaba bu hastalıklardan kurtulmanın\r\nhakikaten(!) hiçbir yolu yok mudur? Yoksaaa? yutturacak bir hapını henüz\r\nüretemediği için bizi yıllar boyunca oyalamış mıdır? Daha kötü bir ihtimal daha\r\nvarki onu şimdi burada zikretmeyelim?</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Düşünelim ve soralım, dünyada 1 trilyon(!)\r\ndoları aşmış bir ilaç piyasası varken ve bu ilaçların ezici çoğunluğu\r\nyazdığımız kronik hastalıkların sözde(!) tedavileri için harcanırken, hem\r\niyileşmeyip yani şifa bulamayıp hemde bu kadar para ödemiş olmak bizim yanımıza\r\nzarar mı kalmıştır?</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Aslında en çarpıcı soruyu tekrar soralım mı?\r\nBu hastalıkların gerçekten çaresi yani şifası yok mudur? Modern=Batı tıbbına\r\ngöre YOKTUR!.. Ama ben size insan evladının görüp göreceği en güvenilir\r\nkaynaktan gelen bir hakikati aktarayım mı?</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">?Hiçbir hastalık yoktur ki Allah(cc) onun\r\nçaresini yaratmış olmasın?(Hz.Muhammed (S.A.V)-Buhari ve Müslim?den sahih\r\nrivayetle)</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Bunun üzerine söz söyleyip haddi aşmaktansa,\r\nmezkur çareleri araştırmak bize yakışacak en güzel davranış ve düşünce şekli\r\nolsa gerek!</span></p>\r\n\r\n<p style="background:white"><span style="font-size:9.0pt;font-family:\r\n&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Yeniden buluşmak dileğiyle, bol Oksijenli\r\ngünler diliyorum.</span></p>\r\n\r\n<p style="background:white"><em><b><span style="font-size:9.0pt;\r\nfont-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Uzm.Dr.Dinçer Erdinç</span></b></em><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR"></span></p>\r\n\r\n<p style="background:white"><em><b><span style="font-size:9.0pt;\r\nfont-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR">Aile Hekimliği Uzmanı</span></b></em><span style="font-size:9.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:black" lang="TR"></span></p>\r\n\r\n<!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-qformat:yes;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin-top:0in;\r\n	mso-para-margin-right:0in;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0in;\r\n	line-height:115%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-fareast-font-family:"Times New Roman";\r\n	mso-fareast-theme-font:minor-fareast;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:"Times New Roman";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]-->                           \r\n                        ', '', 3, '2013-07-22 04:17:43'),
(24, 'baslik', '&nbsp;&nbsp; &nbsp;$viewgalleryvids.=''&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &lt;li&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;article&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="bwWrapper"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src="''.base_url().''images/galleryvids_images/''.$iogalleryvid_id.''.jpg" alt="" /&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;a href="''.$iogalleryvid_link.''" rel="prettyPhoto" class="kp-pf-detail" data-icon="&amp;#xe022;"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="pf-info"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span class="entry-view"&gt;&lt;span class="icon-eye-4 entry-icon"&gt;&lt;/span&gt;17786 Views&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span class="entry-like"&gt;&lt;a class="icon-heart-3 entry-icon" href="#"&gt;&lt;/a&gt;1663 Likes&lt;/span&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a class="pf-name" href="''.$iogalleryvid_link.''" rel="prettyPhoto" class="kp-pf-detail" &gt;&lt;p style="font-size:14px;"&gt;''.$iogalleryvid_title.''&lt;/p&gt;&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/article&gt;&lt;!--element--&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/li&gt; ''; <br>', 'safdsfdfdaf', 13, '2013-07-23 02:30:59'),
(26, 'silkroute', 'silkroute                           \r\n                        ', 'youtube silkroute', 0, '2016-08-20 17:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `io_order`
--

CREATE TABLE `io_order` (
  `ioOrder_id` int(11) NOT NULL,
  `ioOrder_name` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioOrder_phone` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioOrder_participant` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioOrder_datex` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioOrder_hour` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioOrder_description` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioOrder_status` int(11) NOT NULL,
  `ioOrder_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `io_order`
--

INSERT INTO `io_order` (`ioOrder_id`, `ioOrder_name`, `ioOrder_phone`, `ioOrder_participant`, `ioOrder_datex`, `ioOrder_hour`, `ioOrder_description`, `ioOrder_status`, `ioOrder_date`) VALUES
(10, 'asdsf', '233432', '12', '213213', 'sdfasf', 'werweqr', 0, '2013-06-19 15:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `io_slider`
--

CREATE TABLE `io_slider` (
  `ioSlider_id` int(11) NOT NULL,
  `ioSlider_title` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioSlider_text` varchar(255) CHARACTER SET latin5 NOT NULL,
  `ioSlider_view` int(255) NOT NULL,
  `ioSlider_date` varchar(255) CHARACTER SET latin5 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `io_slider`
--

INSERT INTO `io_slider` (`ioSlider_id`, `ioSlider_title`, `ioSlider_text`, `ioSlider_view`, `ioSlider_date`) VALUES
(12, '', '', 0, '2016-08-20 16:51:20'),
(13, 'test', ' test', 0, '2016-08-20 17:06:31'),
(14, 'test', ' test', 0, '2016-08-20 17:08:44'),
(15, 'itsilk route header', 'it silk route', 0, '2016-08-20 17:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `usr_tbl`
--

CREATE TABLE `usr_tbl` (
  `usr_id` int(16) NOT NULL,
  `usr_userName` varchar(255) NOT NULL,
  `usr_name` varchar(255) CHARACTER SET latin5 NOT NULL,
  `usr_lastName` varchar(255) CHARACTER SET latin5 NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_activationCode` varchar(255) NOT NULL,
  `usr_activated` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_tbl`
--

INSERT INTO `usr_tbl` (`usr_id`, `usr_userName`, `usr_name`, `usr_lastName`, `usr_password`, `usr_email`, `usr_activationCode`, `usr_activated`) VALUES
(8, 'iboreeves', 'ibrahim', 'oraklı', 'ec6178bb87069c469ec87f8ec2dabb35f5b1c041', 'iorakli@hotmail.com', '566NLJoWQ94', 1),
(9, 'username2', 'ibrahim', 'oraklı', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'iorakli2@hotmail.com', 'Z2LS0li2zlV', 0),
(10, 'root3451', 'alişğp', 'içömsffd', 'ec6178bb87069c469ec87f8ec2dabb35f5b1c041', 'jhgjhgjhghj@lkslk.com', '8xLw4t4RT9x', 1),
(11, 'iorakli', 'ibrahim', 'orakli', 'ec6178bb87069c469ec87f8ec2dabb35f5b1c041', 'myidlemail@gmail.com', 'KI99wXJ7lJl', 1),
(12, 'null', 'null', 'null', 'ec6178bb87069c469ec87f8ec2dabb35f5b1c041', 'i@i.com', 'null', 0),
(13, 'null', 'null', 'null', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test@test.com', 'null', 1),
(14, 'null', 'null', 'null', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test2@test2.com', 'null', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `io_admin`
--
ALTER TABLE `io_admin`
  ADD PRIMARY KEY (`admn_id`);

--
-- Indexes for table `io_blog`
--
ALTER TABLE `io_blog`
  ADD PRIMARY KEY (`ioBlog_id`);

--
-- Indexes for table `io_call`
--
ALTER TABLE `io_call`
  ADD PRIMARY KEY (`ioCall_id`);

--
-- Indexes for table `io_comment`
--
ALTER TABLE `io_comment`
  ADD PRIMARY KEY (`ioComment_id`);

--
-- Indexes for table `io_gallerypic`
--
ALTER TABLE `io_gallerypic`
  ADD PRIMARY KEY (`iogallerypic_id`);

--
-- Indexes for table `io_galleryvid`
--
ALTER TABLE `io_galleryvid`
  ADD PRIMARY KEY (`iogalleryvid_id`);

--
-- Indexes for table `io_message`
--
ALTER TABLE `io_message`
  ADD PRIMARY KEY (`ioMessage_id`);

--
-- Indexes for table `io_news`
--
ALTER TABLE `io_news`
  ADD PRIMARY KEY (`ioNews_id`);

--
-- Indexes for table `io_order`
--
ALTER TABLE `io_order`
  ADD PRIMARY KEY (`ioOrder_id`);

--
-- Indexes for table `io_slider`
--
ALTER TABLE `io_slider`
  ADD PRIMARY KEY (`ioSlider_id`);

--
-- Indexes for table `usr_tbl`
--
ALTER TABLE `usr_tbl`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `io_admin`
--
ALTER TABLE `io_admin`
  MODIFY `admn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `io_blog`
--
ALTER TABLE `io_blog`
  MODIFY `ioBlog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `io_call`
--
ALTER TABLE `io_call`
  MODIFY `ioCall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `io_comment`
--
ALTER TABLE `io_comment`
  MODIFY `ioComment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `io_gallerypic`
--
ALTER TABLE `io_gallerypic`
  MODIFY `iogallerypic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `io_galleryvid`
--
ALTER TABLE `io_galleryvid`
  MODIFY `iogalleryvid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `io_message`
--
ALTER TABLE `io_message`
  MODIFY `ioMessage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `io_news`
--
ALTER TABLE `io_news`
  MODIFY `ioNews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `io_order`
--
ALTER TABLE `io_order`
  MODIFY `ioOrder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `io_slider`
--
ALTER TABLE `io_slider`
  MODIFY `ioSlider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `usr_tbl`
--
ALTER TABLE `usr_tbl`
  MODIFY `usr_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
