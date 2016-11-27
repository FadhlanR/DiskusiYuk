-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 03:08
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_group_discuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `title_articles` varchar(120) NOT NULL,
  `url_articles` text NOT NULL,
  `img_url_articles` text NOT NULL,
  `source_name_articles` varchar(80) NOT NULL,
  `source_url_articles` text NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_articles`, `title_articles`, `url_articles`, `img_url_articles`, `source_name_articles`, `source_url_articles`, `id_categories`) VALUES
(2268206, 'Google Fit for Android: Recording API', 'http://code.tutsplus.com/tutorials/google-fit-for-android-recording-api--cms-25855', 'https://db6wg66ahfje1.cloudfront.net/16/02/17/e220090e.jpg', 'Code Tuts+ (Mobile Dev)', 'http://code.tutsplus.com/categories/mobile-development', 111),
(2269444, 'A look back at 2015: My Top Mac Apps', 'http://brettterpstra.com/2016/02/17/a-look-back-at-2015-my-top-mac-apps', 'https://db6wg66ahfje1.cloudfront.net/16/02/18/8918c794.jpg', 'Brettterpstra.com', 'http://brettterpstra.com/', 111),
(2272406, 'Android How to Integrate Google AdMob in your App', 'http://androidhive.info/2016/02/android-how-to-integrate-google-admob-in-your-app', 'https://db6wg66ahfje1.cloudfront.net/16/02/18/9eecbeb4.jpg', 'androidhive.info', 'androidhive.info', 111),
(2276680, 'MeisterTask for iOS, Mac, and Android', 'http://brettterpstra.com/2016/02/18/meistertask-for-ios-mac-and-android-sponsor', 'https://db6wg66ahfje1.cloudfront.net/16/02/18/26c2b207.jpg', 'Brettterpstra.com', 'http://brettterpstra.com/', 111),
(2279247, 'Get the guide to family app success on Google Play and see how BabyFirst increased installs by 50%', 'http://feedproxy.google.com/~r/blogspot/hsDu/~3/sgmseUEsQSg/get-guide-to-family-app-success-on.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/19/0899f66b.jpg', 'feedproxy.google.com', 'feedproxy.google.com', 111),
(2279656, 'Rogue Wave introduces continuous static code analysis', 'http://sdtimes.com/rogue-wave-introduces-continuous-static-code-analysis', '', 'SD Times', 'http://sdtimes.com/', 110),
(2280340, 'Altova supports JSON, .NET API in latest software release', 'http://sdtimes.com/altova-supports-json-net-api-in-latest-software-release', '', 'SD Times', 'http://sdtimes.com/', 110),
(2286253, 'Indeterminate â€“ Part 2', 'http://feedproxy.google.com/~r/StylingAndroid/~3/q7jM0BSKfNY', 'https://db6wg66ahfje1.cloudfront.net/16/02/19/d86dcb3c.jpg', 'Styling Android', 'http://blog.stylingandroid.com/#', 111),
(2287606, 'SD Times GitHub Project of the Week: TensorFlow Serving', 'http://sdtimes.com/sd-times-github-project-of-the-week-tensorflow-serving', 'https://db6wg66ahfje1.cloudfront.net/16/02/19/4e3e6574.jpg', 'SD Times', 'http://sdtimes.com/', 110),
(2287609, 'What designers, game developers and architects need to know about Git LFS', 'http://feedproxy.google.com/~r/AllAtlassianBlogs/~3/RU36EWJ5XlY', 'https://db6wg66ahfje1.cloudfront.net/16/02/19/7f92e679.jpg', 'Atlassian Blogs', 'http://blogs.atlassian.com/', 110),
(2287788, 'Friday Q&A 2016-02-19: What Is the Secure Enclave?', 'https://mikeash.com/pyblog/friday-qa-2016-02-19-what-is-the-secure-enclave.html', '', 'Mikeash.com (Pyblog)', 'https://mikeash.com/pyblog/', 111),
(2288681, 'iTerm2 Version 3 now in beta', 'http://sdtimes.com/iterm2-version-3-now-in-beta', '', 'SD Times', 'http://sdtimes.com/', 110),
(2289086, 'The Zephyr Project, Google Cloud Vision API, Yahoo''s mobile developer suite and new ArcGIS releaseâ€“SD Times news diges', 'http://sdtimes.com/google-and-red-hat-announce-cloud-based-scalable-file-servers', '', 'SD Times', 'http://sdtimes.com/', 110),
(2289625, '20 Material Design Resources', 'http://code.tutsplus.com/tutorials/20-material-design-resources--cms-25951', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/1874e211.jpg', 'Code Tuts+ (Mobile Dev)', 'http://code.tutsplus.com/categories/mobile-development', 111),
(2289670, 'Professor develops facial recognition software that detects CEO emotions', 'http://sdtimes.com/professor-develops-face-recognition-software-that-detects-ceo-emotions', '', 'SD Times', 'http://sdtimes.com/', 110),
(2289801, 'AquaJS framework for Node.js is open source and in beta', 'http://sdtimes.com/aquajs-framework-for-node-js-is-open-source-and-in-beta', '', 'SD Times', 'http://sdtimes.com/', 110),
(2290022, 'Google releases new developer tool for analytics', 'http://sdtimes.com/google-releases-new-developer-tool-for-analytics', '', 'SD Times', 'http://sdtimes.com/', 110),
(2290141, '''The Secret Lives of Tumblr Teens'' and 5 Stories You Should Read', 'https://contently.com/strategist/2016/02/19/the-secret-lives-of-tumblr-teens-and-5-stories-you-should-read', '', 'Contently (Strategist)', 'http://contently.com/strategist/', 103),
(2290852, 'Using Credentials between your Server and Google Services', 'http://feedproxy.google.com/~r/blogspot/hsDu/~3/AY_JwwPp5hY/using-credentials-between-your-server.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/298d4ef1.jpg', 'feedproxy.google.com', 'feedproxy.google.com', 111),
(2292405, 'Free Download: A Minimal Mobile Chat UI Kit', 'http://feedproxy.google.com/~r/Webappers/~3/AUHiYtzSUSM', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/ce7f614a.jpg', 'Web Appers', 'http://www.webappers.com/', 112),
(2293597, 'This Week in Content Marketing: Brands Create More Content with Less Engagement', 'http://contentmarketinginstitute.com/2016/02/content-engagement-podcast', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/4b30d73d.jpg', 'Conteng Marketing Institute', 'http://contentmarketinginstitute.com/', 103),
(2293905, 'Campaigners issue condoms telling UK to pull out of European Union', 'http://mashable.com/2016/02/19/brexit-condoms-uk-eu', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/9c495c23.jpg', 'Mashable (Weddings)', 'http://mashable.com/category/weddings/', 80),
(2294539, 'Rainmaker Rewind: New Mini-Series: Things I Love/Things I Hate', 'http://copyblogger.com/rainmaker-rewind-3', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/d01d783c.jpg', 'Copyblogger (Blog)', 'http://www.copyblogger.com/blog/', 103),
(2294643, 'Porn actors won''t be forced to wear condoms in California', 'http://mashable.com/2016/02/19/porn-films-california-condoms', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/4367a657.jpg', 'Mashable (Weddings)', 'http://mashable.com/category/weddings/', 80),
(2294646, 'How to Create a Custom Dashboard in Google Analytics', 'http://elegantthemes.com/blog/tips-tricks/how-to-create-a-custom-dashboard-in-google-analytics', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/622746eb.jpg', 'elegantthemes.com', 'http://www.elegantthemes.com/blog/', 112),
(2294976, 'Hitam Putih Perjanjian Pra-Nikah', 'http://weddingku.com/blog/hitam-putih-perjanjian-pra-nikah', 'https://db6wg66ahfje1.cloudfront.net/16/02/20/268c3981.jpg', 'Weddingku.com', 'http://www.weddingku.com/blogs', 80),
(2295086, 'Content Marketing Trends in 2016 [Infographic]', 'http://marketingprofs.com/chirp/2016/29388/content-marketing-trends-in-2016-infographic', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/22921af5.jpg', 'Marketing Profs (Marketing)', 'http://www.marketingprofs.com/marketing/library/articles/', 103),
(2296965, 'Aplikasi Android Pilihan Ini Bantu Mahasiswa Kelola Tugas dan Kuliah (15 â€“ 21 Februari 2016)', 'https://dailysocial.id/post/aplikasi-android-pilihan-ini-bantu-mahasiswa-kelola-tugas-dan-kuliah-15-21-februari-2016', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/a044b448.jpg', 'Dailysocial.id', 'http://dailysocial.id', 104),
(2298820, 'Brides Beware: 15 Unexpected Wedding Costs', 'http://onefabday.com/15-unexpected-wedding-costs-wedding-budget-advice', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/ba52b4aa.jpg', 'One Fab Day', 'http://onefabday.com/', 80),
(2298867, 'Bringing Ideas to Life: A Look Behind the Creative Curtain', 'http://contentmarketinginstitute.com/2016/02/behind-creative-curtain', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/c3267531.jpg', 'Conteng Marketing Institute', 'http://contentmarketinginstitute.com/', 103),
(2298911, 'Lilac & Lavender: Ciara + Brendan''s Ballymagarvey Village Wedding', 'http://onefabday.com/ballymagarvey-village-wedding', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/29d95b48.jpg', 'One Fab Day', 'http://onefabday.com/', 80),
(2298913, 'Short & Stylish - 18 Short Hairstyles for Brides & Bridesmaids', 'http://onefabday.com/short-hair-brides', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/81f7ce73.jpg', 'One Fab Day', 'http://onefabday.com/', 80),
(2299010, 'Didukung penuh pemkot, Qlue siap go nasional', 'http://techno.id/apps/didukung-penuh-pemkot-qlue-siap-go-nasional-160221s.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/fbe66897.jpg', 'Techno.id (Apps)', 'http://www.techno.id/apps/', 104),
(2299193, 'Readia Meramaikan Aplikasi Komik Windows 10', 'https://idwinphone.com/2016/02/21/readia-meramaikan-aplikasi-komik-windows-10', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/99937b5d.jpg', 'IDWinPhone.com (Aplikasi)', 'http://idwinphone.com/aplikasi/', 104),
(2299895, 'Weekly News for Designers (N.322)', 'http://speckyboy.com/2016/02/21/weekly-news-for-designers-n-322', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/f81d9ef8.jpg', 'Specky Boy', 'http://speckyboy.com', 112),
(2299974, '20+ Free Resume Design Templates for Web Designers', 'http://elegantthemes.com/blog/resources/20-free-resume-design-templates-for-web-designers', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/e3b291a6.jpg', 'elegantthemes.com', 'http://www.elegantthemes.com/blog/', 112),
(2300255, 'Mark Zuckerberg attended the most elite boarding school in America', 'http://businessinsider.sg/most-famous-phillips-exeter-alumni-2016-2?IR=T', 'https://db6wg66ahfje1.cloudfront.net/16/02/21/b67f151c.jpg', 'Businessinsider.com/warroom', 'businessinsider.com/warroom', 89),
(2300575, '7 TED Talks that will make you smarter about your money', 'http://businessinsider.sg/ted-talks-that-will-make-you-smarter-about-your-money-2016-2?IR=T', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/4d65ad36.jpg', 'Businessinsider.com/warroom', 'businessinsider.com/warroom', 89),
(2300955, 'A former Bear Stearns exec describes what it''s like to be a mom on Wall Street', 'http://businessinsider.sg/a-former-bear-stearns-exec-describes-what-its-like-to-be-a-mom-on-wall-street-2016-2?IR=T', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/57975632.jpg', 'Businessinsider.com/warroom', 'businessinsider.com/warroom', 89),
(2301708, 'The biggest sign it''s time to quit your job', 'http://businessinsider.sg/biggest-sign-its-time-to-quit-your-job-2016-2?IR=T', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/cc425d44.jpg', 'Businessinsider.com/warroom', 'businessinsider.com/warroom', 89),
(2301776, 'Synagogues and Independent Congregations Are Allies, Not Enemies', 'http://forward.com/opinion/letters/333921/synagogues-and-independent-congregations-are-allies-not-enemies', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/d64d283f.jpg', 'Forward', 'http://forward.com', 106),
(2302714, 'Halakhah and Historical Context', 'http://torahmusings.com/2016/02/halakhah-and-historical-context', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/048f0c25.jpg', 'Torah Musings', 'http://www.torahmusings.com/', 106),
(2302837, 'Prospek Penjualan <em>Indonesia Property Expo 2016</em> Capai Rp3,7 Triliun', 'http://propertidata.com/berita/prospek-penjualan-indonesia-property-expo-2016-capai-rp37-triliun?fr=kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/9b2112b1.jpg', 'PropertiData.com', 'http://news.propertidata.com/', 115),
(2302839, 'Gipsum Gyproc Akan Naikkan Kapasitas Produksi', 'http://propertidata.com/berita/gipsum-gyproc-akan-naikkan-kapasitas-produksi?fr=kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/b1cb56af.jpg', 'PropertiData.com', 'http://news.propertidata.com/', 115),
(2302979, 'Daftar Media yang Terhubung dengan Rumahku.com', 'http://propertidata.com/berita/daftar-media-yang-terhubung-dengan-rumahku-com?fr=kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/ea14efe6.jpg', 'PropertiData.com', 'http://news.propertidata.com/', 115),
(2302981, 'BI Rate Rendah, Bunga KPR Siap Turun 3 Bulan Lagi', 'http://propertidata.com/berita/bi-rate-rendah-bunga-kpr-siap-turun-3-bulan-lagi?fr=kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/f813fd82.jpg', 'PropertiData.com', 'http://news.propertidata.com/', 115),
(2302983, 'Omaha Village Sudah Ludes dan Lakukan Serah Terima', 'http://propertidata.com/berita/omaha-village-sudah-ludes-dan-lakukan-serah-terima?fr=kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/a29c1b11.jpg', 'PropertiData.com', 'http://news.propertidata.com/', 115),
(2303614, 'That Awesome Time Drake Crashed a Bat Mitzvah', 'http://forward.com/the-assimilator/333927/that-awesome-time-drake-crashed-a-bat-mitzvah', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/cf122681.jpg', 'Forward', 'http://forward.com', 106),
(2303804, '5 Things You Can Do To Sleep Better', 'http://pickthebrain.com/blog/5-things-can-sleep-better', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/1e0ef35c.jpg', 'PickTheBrain.com (Self Improvement)', 'http://www.pickthebrain.com/blog/category/self-improvement/', 89),
(2303902, 'Rupiah Semakin Perkasa, IHSG Siang Ini Berbalik Melemah', 'http://ekbis.sindonews.com/read/1087257/32/rupiah-semakin-perkasa-ihsg-siang-ini-berbalik-melemah-1456118345', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/d5740dc7.jpg', 'Sindonews.com (Properti)', 'http://ekbis.sindonews.com/topic/158/bisnis-properti', 115),
(2304523, 'Awal 2016, Menteri Susi Tenggelamkan Puluhan Kapal', 'http://ekbis.sindonews.com/read/1087277/34/awal-2016-menteri-susi-tenggelamkan-puluhan-kapal-1456122947', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/629277ae.jpg', 'Sindonews.com (Properti)', 'http://ekbis.sindonews.com/topic/158/bisnis-properti', 115),
(2304588, 'Three steps to a more productive business', 'http://betterproductivityblog.com/three-steps-to-a-more-productive-business', '', 'betterproductivityblog.com', 'betterproductivityblog.com', 89),
(2304744, 'Brick.js â€“ A Blazing Fast Masonry Layout Generator', 'http://feedproxy.google.com/~r/Webappers/~3/MCKwRHiHP1M', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/98a08641.jpg', 'Web Appers', 'http://www.webappers.com/', 112),
(2305078, 'An Introduction to Swift 2.0 for iOS and OSX', 'http://sitepoint.com/introduction-swift-programming-language', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/56ecdaf9.jpg', 'Site Point', 'http://www.sitepoint.com/', 112),
(2305117, '5 Aplikasi edit video terbaik untuk Android', 'http://techno.id/apps/5-aplikasi-edit-video-terbaik-untuk-android-160221u.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/f8edbb70.jpg', 'Techno.id (Apps)', 'http://www.techno.id/apps/', 104),
(2305155, 'Alasan Jokowi Indonesia Harus Masuk TPP', 'http://ekbis.sindonews.com/read/1087297/34/alasan-jokowi-indonesia-harus-masuk-tpp-1456126535', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/e3e331f5.jpg', 'Sindonews.com (Properti)', 'http://ekbis.sindonews.com/topic/158/bisnis-properti', 115),
(2305215, 'Start Closer to the Goal', 'https://facilethings.com/blog/en/start-closer-to-the-goal.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/3cd33171.jpg', 'facilethings.com', 'facilethings.com/blog/en', 89),
(2305234, 'Tepian Surga di New Zealand-Bagian 3', 'http://weddingku.com/blog/tepian-surga-di-new-zealand-bagian-3', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/58cdd4f5.jpg', 'Weddingku.com', 'http://www.weddingku.com/blogs', 80),
(2305302, 'BIAS Amp update â€“ tweaks for Positive Grid''s amp designer app for iOS', 'http://musicappblog.com/bias-amp-update-2', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/3afcbc02.jpg', 'Music App Blog', 'http://www.musicappblog.com/', 104),
(2305379, 'Hey Retailers: Want to Boost Sales Conversion? Build a Mobile App', 'http://socialmediatoday.com/marketing/hey-retailers-want-boost-sales-conversion-build-mobile-app', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/d41714b7.jpg', 'Social Media Today', 'http://www.socialmediatoday.com/', 102),
(2305380, 'What''s Next for Wearable Tech?', 'http://socialmediatoday.com/technology-data/whats-next-wearable-tech', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/1569a43f.jpg', 'Social Media Today', 'http://www.socialmediatoday.com/', 102),
(2305801, 'Facebook Messenger untuk Android Hadirkan Fitur Multi Akun', 'https://dailysocial.id/post/facebook-messenger-untuk-android-hadirkan-fitur-multi-akun', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/d00dcb4d.jpg', 'Dailysocial.id', 'http://dailysocial.id', 104),
(2305805, 'Butuh Rekomendasi Resep Masakan? Coba Kumpulan Aplikasi untuk iOS dan Android Ini', 'https://id.techinasia.com/rekomendasi-aplikasi-resep-masakan', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/3da1a21a.jpg', 'Tech in Asia Indonesia (Aplikasi Mobile)', 'http://id.techinasia.com/category/mobile/', 104),
(2305883, 'Auto-Engagements Aren''t Fooling Anybody', 'http://socialmediatoday.com/social-networks/auto-engagements-arent-fooling-anybody', '', 'Social Media Today', 'http://www.socialmediatoday.com/', 102),
(2305888, 'Tracking Digital Marketing Campaigns Without Expensive Software', 'http://socialmediatoday.com/marketing/tracking-digital-marketing-campaigns-without-expensive-software', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/579a26b4.jpg', 'Social Media Today', 'http://www.socialmediatoday.com/', 102),
(2305947, 'Triqtraq update â€“ Zaplin bring some tweaks to their pocket-sized electronic music app', 'http://musicappblog.com/triqtraq-update-3', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/36343c70.jpg', 'Music App Blog', 'http://www.musicappblog.com/', 104),
(2306184, 'Essential Advice & Impeccable Style: The Weekly Round Up', 'http://onefabday.com/wedding-advice-and-wedding-style', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/f44fcbd3.jpg', 'One Fab Day', 'http://onefabday.com/', 80),
(2306187, 'The Adventure Begins: Aoife + Sean''s Sparkling Winter Wedding', 'http://onefabday.com/sparkle-winter-wedding', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/3a08d9d6.jpg', 'One Fab Day', 'http://onefabday.com/', 80),
(2306239, 'How to Prospect Using Twitter, LinkedIn, and Facebook', 'http://socialmediaexaminer.com/how-to-prospect-using-twitter-linkedin-and-facebook', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/c4919599.jpg', 'Social Media Examiner', 'http://www.socialmediaexaminer.com/', 102),
(2306248, 'Holocaust Survivors Struggle To Prove Their Cases as Claims Conference Cracks Down', 'http://forward.com/news/333762/holocaust-survivors-struggle-to-prove-their-cases-as-claims-conference-crac', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/c586e3ab.jpg', 'Forward', 'http://forward.com', 106),
(2306257, 'Stop Trying To Steal Bernie Sanders''s Red Flag â€”Â and Mine', 'http://forward.com/opinion/333776/stop-trying-to-steal-bernie-sanderss-red-flag-and-mine', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/4ee099ff.jpg', 'Forward', 'http://forward.com', 106),
(2306258, 'Portraying Master Portraitist Annie Leibovitz', 'http://forward.com/culture/art/333684/portraying-master-portraitist-annie-leibovitz', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/15b4caf8.jpg', 'Forward', 'http://forward.com', 106),
(2306357, 'LooperSonic giveaway results â€“ 5 winners of streamlined looper recording app', 'http://musicappblog.com/loopersonic-giveaway-results', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/db152d10.jpg', 'Music App Blog', 'http://www.musicappblog.com/', 104),
(2306468, 'iMaschine 2 updated â€“ Native Instruments bring full iPad Pro support to their IOS groove production app', 'http://musicappblog.com/imaschine-2-updated-2', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/10c2be86.jpg', 'Music App Blog', 'http://www.musicappblog.com/', 104),
(2306538, 'How to Set Digital Marketing Goals that Yield Results', 'http://socialmediatoday.com/marketing/how-set-digital-marketing-goals-yield-results', '', 'Social Media Today', 'http://www.socialmediatoday.com/', 102),
(2306615, 'Two Reasons Why Your Facebook Ads are Failing', 'http://kimgarst.com/two-reasons-why-your-facebook-ads-are-failing', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/02e750f7.jpg', 'kimgarst.com', 'kimgarst.com', 102),
(2306891, 'Stingray masterfully photobombs couple''s aquarium engagement', 'http://mashable.com/2016/02/19/stingray-photobomb-proposal', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/5c7995ad.jpg', 'Mashable (Weddings)', 'http://mashable.com/category/weddings/', 80),
(2306914, 'Mobile App Ecosystem: Tap Into Audience Attention', 'http://feedproxy.google.com/~r/HeidiCohen/~3/7__wNcZ9CzI', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/469b2dd1.jpg', 'feedproxy.google.com', 'feedproxy.google.com', 102),
(2306919, 'Why You Need Two Types of Content Strategist', 'http://contentmarketinginstitute.com/2016/02/types-content-strategist', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/ea11c9fe.jpg', 'Conteng Marketing Institute', 'http://contentmarketinginstitute.com/', 103),
(2306961, 'How I Came to My Senses About Marco Rubio and Why I Still Support Ted Cruz', 'http://soshable.com/how-i-came-to-my-senses-about-marco-rubio-and-why-i-still-support-ted-cruz', '', 'Soshable', 'http://soshable.com/', 102),
(2306965, '17 Tips for Successful Facebook Contests', 'http://socialmediaexaminer.com/17-tips-for-successful-facebook-contests', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/f7292f53.jpg', 'Social Media Examiner', 'http://www.socialmediaexaminer.com/', 102),
(2307283, 'SEO for B2B Content Marketing in 2016', 'http://toprankblog.com/2016/02/seo-for-b2b-content-marketing', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/9fc799fa.jpg', 'Top Rank Blog', 'http://www.toprankblog.com/', 103),
(2307447, 'It''s Time B2B Enterprise Marketers Did Some Math: An Interview with Enterprise Marketing Expert Michael Brenner', 'http://marketeer.kapost.com/b2b-enterprise-marketing-interview-with-enterprise-marketing-expert-michael-brenner', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/2c7f030a.jpg', 'Kapost (Content Marketeer)', 'http://marketeer.kapost.com/', 103),
(2307504, 'Spanish Town Backs Down From BDS Push', 'http://forward.com/news/breaking-news/333932/spanish-town-backs-down-from-bds-push', '', 'Forward', 'http://forward.com', 106),
(2307516, 'How to become a human lie detector', 'http://businessinsider.sg/how-to-become-human-lie-detector-gary-neuman-2016-2?IR=T', '', 'Businessinsider.com/warroom', 'businessinsider.com/warroom', 89),
(2307517, 'Bibi Backs General in ''Empty the Magazine'' Dispute Over Palestinian Violence', 'http://forward.com/news/breaking-news/333929/bibi-backs-general-in-empty-the-magazine-dispute-over-palestinian-violence', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/6078b002.jpg', 'Forward', 'http://forward.com', 106),
(2307518, 'Australia Day School Endorses Gay Marriage Equality', 'http://forward.com/news/breaking-news/333928/australia-day-school-endorses-gay-marriage-equality', '', 'Forward', 'http://forward.com', 106),
(2307533, '20 Time-Saving WordPress SQL Query Snippets', 'http://speckyboy.com/2016/02/22/wordpress-sql-query-snippets', '', 'Specky Boy', 'http://speckyboy.com', 112),
(2307539, 'What Are Laravel 5.0 Facades?', 'http://code.tutsplus.com/tutorials/what-are-laravel-50-facades--cms-25347', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/6ede0e9a.jpg', 'Code Tuts+ (Web Dev)', 'http://code.tutsplus.com/categories/web-development', 112),
(2307540, 'Efficient Responsive Design Process', 'https://smashingmagazine.com/2016/02/efficient-responsive-design-process', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/4e00ad9d.jpg', 'Smashing Magazine', 'http://www.smashingmagazine.com/', 112),
(2307682, 'Spanish City Backs Down From BDS Push', 'http://forward.com/news/breaking-news/333932/spanish-city-backs-down-from-bds-push', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/e1ba3e59.jpg', 'Forward', 'http://forward.com', 106),
(2307693, 'TPS79: Email on Your Phone w/ Mike Schmitz', 'http://asianefficiency.com/podcast/079-email-on-your-phone', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/a5635d3d.jpg', 'asianefficiency.com', 'asianefficiency.com', 89),
(2307820, 'KPPU Nilai Insentif OJK Bakal Bikin Sektor Perbankan Tak Sehat', 'http://ekbis.sindonews.com/read/1087408/178/kppu-nilai-insentif-ojk-bakal-bikin-sektor-perbankan-tak-sehat-1456144693', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/f020f5fc.jpg', 'Sindonews.com (Properti)', 'http://ekbis.sindonews.com/topic/158/bisnis-properti', 115),
(2307821, 'Jokowi Sebut 42 Ribu Aturan Investasi Bikin RI Sulit Bergerak', 'http://ekbis.sindonews.com/read/1087392/34/jokowi-sebut-42-ribu-aturan-investasi-bikin-ri-sulit-bergerak-1456142252', '', 'Sindonews.com (Properti)', 'http://ekbis.sindonews.com/topic/158/bisnis-properti', 115),
(2307902, '3 Effective & Affordable SMB Marketing Tactics', 'http://business2community.com/small-business/3-effective-affordable-smb-marketing-tactics-01457883', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/2f9ca874.jpg', 'business2community.com', 'business2community.com', 89),
(2307988, 'Next #SEJThinkTank Webinar: Visual Marketing in 2016 and Why You Still Need it (More Than Ever) by @megcabrera', 'https://searchenginejournal.com/next-sejthinktank-webinar-visual-marketing-in-2016-and-why-you-still-need-it-more-than-ever/156859', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/0da5b396.jpg', 'Search Engine Journal (Content Marketing)', 'http://www.searchenginejournal.com/category/content-marketing/', 103),
(2308022, 'Nah Lho, Tarif Kereta Cepat Harus Lebih Mahal dari ''Travel''', 'http://teropongsenayan.com/31735-nah-lho-tarif-kereta-cepat-harus-lebih-mahal-dari-travel', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/98a1b978.jpg', 'teropongsenayan.com', 'teropongsenayan.com', 99),
(2308031, 'Calo PTPN IV mengaku orang dekat Dahlan Iskan menipu 97 korban', 'http://merdeka.com/peristiwa/calo-ptpn-iv-mengaku-orang-dekat-dahlan-iskan-menipu-97-korban.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/01cf3c92.jpg', 'Merdeka.com', 'http://www.merdeka.com/berita-hari-ini/', 99),
(2308032, 'Prostitusi masih Ada di Saritem, Emil: Kawasan itu bukanâ€¦', 'http://jabar.metrotvnews.com/read/2016/02/22/488256/prostitusi-masih-ada-di-saritem-emil-kawasan-itu-bukan-', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/ea505123.jpg', 'jabar.metrotvnews.com', 'jabar.metrotvnews.com', 99),
(2308033, 'Diduga serangan jantung, kru KMP Prahita tewas di atas kapal', 'http://merdeka.com/peristiwa/diduga-serangan-jantung-kru-kmp-prahita-tewas-di-atas-kapal.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/d4b2a3b3.jpg', 'Merdeka.com', 'http://www.merdeka.com/berita-hari-ini/', 99),
(2308034, 'NFL player''s ''Harry Potter'' wedding cake is fit for a Hogwarts feast', 'http://mashable.com/2016/02/22/harry-potter-cake-mike-evans', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/573e34a7.jpg', 'Mashable (Weddings)', 'http://mashable.com/category/weddings/', 100),
(2308038, 'Indian market wrap: Shares extend gains as risk appetite improves; budget caution weighs', 'http://asia.nikkei.com/Business/AC/Shares-extend-gains-as-risk-appetite-improves-budget-caution-weighs', '', 'Nikkei.com (Asia)', 'http://asia.nikkei.com/Politics-Economy/', 100),
(2308043, '''Dangerous'' Derren Brown suffocation trick should not have aired in daytime | Media', 'http://theguardian.com/media/2016/feb/22/derren-brown-suffocation-trick-uktv-watch', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/b94d7770.jpg', 'The Guardian (Headlines)', 'http://www.theguardian.com/uk', 100),
(2308055, 'Exploring WordPress Managers: iThemes Sync & WP Remote', 'http://code.tutsplus.com/tutorials/exploring-wordpress-managers-ithemes-sync-wp-remote--cms-25618', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/2ef13bfd.jpg', 'Code Tuts+ (Web Dev)', 'http://code.tutsplus.com/categories/web-development', 112),
(2308063, 'Please Don''t Learn to Code Unlessâ€¦', 'http://simpleprogrammer.com/2016/02/22/please-dont-learn-to-code-unless', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/ba16a7e7.jpg', 'Simple Programmer', 'http://simpleprogrammer.com/', 110),
(2308070, 'Dicokok Polisi, Tiga Anggota KPK Lakukan Penyadapan Ilegal?', 'http://m.news.viva.co.id/news/read/739063-dicokok-polisi-tiga-anggota-kpk-lakukan-penyadapan-ilegal-kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/c800c462.jpg', 'Viva.co.id', 'http://www.viva.co.id/ ', 99),
(2308105, 'Agus Rahardjo Akui UU KPK Tidak Sempurna', 'http://nasional.sindonews.com/read/1087415/13/agus-rahardjo-akui-uu-kpk-tidak-sempurna-1456146762', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/6a2f02d7.jpg', 'Sindonews.com (Nasional)', 'http://nasional.sindonews.com/', 99),
(2308206, 'Jokowi and House agree to postpone KPK Law revision', 'http://thejakartapost.com/news/2016/02/22/jokowi-and-house-agree-postpone-kpk-law-revision.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/80fa676b.jpg', 'TheJakartaPost.com', 'http://www.thejakartapost.com/', 100),
(2308208, 'Demokrat Toraja Utara: Deng Ical Jangan Terlalu Bernafsu Jadi Ketua', 'http://gosulsel.com/indeks/22/02/2016/demokrat-toraja-utara-deng-ical-jangan-terlalu-bernafsu-jadi-ketua', '', 'Gosulsel.com', 'http://gosulsel.com/', 99),
(2308210, 'Kalijodo Protester Charged With Prostitution, Human Trafficking', 'http://jakartaglobe.beritasatu.com/news/kalijodo-protester-charged-prostitution-human-trafficking', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/bb697ff8.jpg', 'Jakartaglobe.com', 'http://jakartaglobe.beritasatu.com/', 100),
(2308211, 'How Close We Are To A 3-D-Printed Human Heart', 'http://huffingtonpost.com/entry/3d-printed-human-heart_us_56ca3f41e4b0928f5a6c54f6', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/476c8498.jpg', 'HuffingtonPost.com (World)', 'http://www.huffingtonpost.com/theworldpost/', 100),
(2308212, 'Last Survivor Of Treblinka Nazi Death Camp Dies At 93', 'http://huffingtonpost.com/entry/samuel-willenberg-dead-treblinka-survivor_us_56cacb94e4b0928f5a6c5d1d', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/9499ae86.jpg', 'HuffingtonPost.com (World)', 'http://www.huffingtonpost.com/theworldpost/', 100),
(2308214, 'Festival Cap Go Meh Ubah Pecinan Bogor Jadi Lautan Manusia', 'http://news.liputan6.com/read/2442715/festival-cap-go-meh-ubah-pecinan-bogor-jadi-lautan-manusia', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/f4148c9c.jpg', 'Liputan6.com', 'http://www.liputan6.com', 99),
(2308215, 'Nenek 106 Tahun Histeris Bertemu Barack dan Michelle Obama', 'http://news.liputan6.com/read/2442671/nenek-106-tahun-histeris-bertemu-barack-dan-michelle-obama', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/2a202cd7.jpg', 'Liputan6.com', 'http://www.liputan6.com', 99),
(2308220, 'Turkey''s increasingly desperate predicament poses real dangers', 'https://washingtonpost.com/world/middle_east/turkeys-increasingly-desperate-predicament-poses-real-dangers/2016/02/20/a3374030-d593-11e5-a65b-587e721fb231_story.html', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/243e09f9.jpg', 'HuffingtonPost.com (World)', 'http://www.huffingtonpost.com/theworldpost/', 100),
(2308221, 'Saudi Arabia leads surge in arms imports by Middle East states | World news', 'http://theguardian.com/world/2016/feb/22/saudi-arabia-surge-arms-imports-middle-east', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/dc5e0b68.jpg', 'The Guardian (Headlines)', 'http://www.theguardian.com/uk', 100),
(2308222, 'London Mayor Boris Johnson Says He Favors Brexit', 'http://huffingtonpost.com/entry/david-cameron-urges-london-mayor-not-to-join-brexit-campaign_us_56c9f8f9e4b041136f176052', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/8c5b43f0.jpg', 'HuffingtonPost.com (World)', 'http://www.huffingtonpost.com/theworldpost/', 100),
(2308234, '3 Petugas KPK Ditangkap Polisi Saat Melakukan Tugas', 'http://m.news.viva.co.id/news/read/739067-3-petugas-kpk-ditangkap-polisi-saat-melakukan-tugas-kurio', 'https://db6wg66ahfje1.cloudfront.net/16/02/22/1a06c84a.jpg', 'Viva.co.id', 'http://www.viva.co.id/ ', 99);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`) VALUES
(80, 'Wedding'),
(89, 'Self Help'),
(99, 'News'),
(100, 'News and Buzz'),
(102, 'Social Media Marketing'),
(103, 'Content Marketing'),
(104, 'Apps'),
(106, 'Judaism'),
(110, 'Software Development'),
(111, 'App Development'),
(112, 'Web Development'),
(115, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `comment` text NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `like_comment` int(11) NOT NULL DEFAULT '0',
  `dislike_comment` int(11) NOT NULL DEFAULT '0',
  `unrelated_comment` int(11) NOT NULL DEFAULT '0',
  `sentiment_score_positif` float NOT NULL DEFAULT '0',
  `sentiment_score_negatif` float NOT NULL DEFAULT '0',
  `sentiment_score_neutral` float NOT NULL DEFAULT '0',
  `showed` int(11) NOT NULL DEFAULT '0',
  `id_discussion_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `comment`, `added`, `like_comment`, `dislike_comment`, `unrelated_comment`, `sentiment_score_positif`, `sentiment_score_negatif`, `sentiment_score_neutral`, `showed`, `id_discussion_forum`, `id_user`) VALUES
(1, 'API google rame banget untuk di eksplor', '2016-11-26 20:44:12', 3, 0, 0, 0.727, 0.182, 0.091, 0, 1, 2),
(2, 'Tapi susah banget cara pakai APInya', '2016-11-26 20:44:12', 5, 1, 5, 0.286, 0.571, 0.143, 0, 1, 2),
(3, 'Tenang Sodara Waffi, anda harus tetap semangat', '2016-11-26 20:44:12', 1, 1, 0, 0.615, 0.308, 0.077, 0, 1, 1),
(4, 'Kemana aja kalian semua, topik tentang ahok lebih rame loh', '2016-11-26 20:44:12', 1, 5, 6, 0.333, 0.333, 0.333, 0, 1, 3),
(5, 'Apa kamu, jangan oot dong, focus ke topik', '2016-11-26 20:44:12', 5, 1, 2, 0.333, 0.333, 0.333, 0, 1, 4),
(6, 'Betul setuju, mari kembali ke topik. API tuh sebenarnya focus ke mana?', '2016-11-26 20:44:12', 3, 1, 0, 0.444, 0.444, 0.111, 0, 1, 5),
(7, 'Jadi, API tuh focus ke interaksi data di server dengan pengambilan data di lokal kita nantinya', '2016-11-26 20:44:12', 5, 0, 0, 0.4, 0.4, 0.2, 0, 1, 6),
(8, 'Anjing lo ul, ga nyambung banget bahasan lo', '2016-11-26 20:44:12', 0, 1, 0, 0.286, 0.571, 0.143, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id_discussion_forum` int(11) NOT NULL,
  `start_date_discussion` timestamp NULL DEFAULT NULL,
  `finish_date_discussion` timestamp NULL DEFAULT NULL,
  `name_discussion` varchar(40) NOT NULL,
  `rating_discussion` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id_discussion_forum`, `start_date_discussion`, `finish_date_discussion`, `name_discussion`, `rating_discussion`, `id_user`, `id_articles`) VALUES
(1, '2016-11-27 02:01:19', '2016-11-27 02:03:15', 'Discussion 1', 5, 1, 2268206);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_member` int(11) NOT NULL,
  `allowed` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_discussion_forum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_member`, `allowed`, `id_user`, `id_discussion_forum`) VALUES
(1, 0, 2, 1),
(2, 0, 1, 1),
(3, 0, 3, 1),
(4, 0, 4, 1),
(5, 0, 5, 1),
(6, 0, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nick_name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_photo` varchar(30) NOT NULL DEFAULT 'images.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nick_name`, `username`, `user_password`, `user_photo`) VALUES
(1, 'husain', 'husain', '123', 'images.jpg'),
(2, 'waffi', 'waffi', '123', 'images.jpg'),
(3, 'maul', 'maul', '123', 'images.jpg'),
(4, 'fadhlan', 'fadhlan', '123', 'images.jpg'),
(5, 'saiful', 'saiful', '123', 'images.jpg'),
(6, 'imam', 'imam', '123', 'images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`),
  ADD KEY `categories_articles_fk` (`id_categories`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `user_comments_fk` (`id_user`),
  ADD KEY `discussion_comments_fk` (`id_discussion_forum`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id_discussion_forum`),
  ADD KEY `id_articles` (`id_articles`),
  ADD KEY `user_discussion_fk` (`id_user`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `user_admin_discussion_fk` (`id_user`),
  ADD KEY `discussion_members_fk` (`id_discussion_forum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id_discussion_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `categories_articles_fk` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `discussion_comments_fk` FOREIGN KEY (`id_discussion_forum`) REFERENCES `discussion` (`id_discussion_forum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_comments_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `articles_discussion_fk` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`),
  ADD CONSTRAINT `user_discussion_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `discussion_members_fk` FOREIGN KEY (`id_discussion_forum`) REFERENCES `discussion` (`id_discussion_forum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_admin_discussion_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
