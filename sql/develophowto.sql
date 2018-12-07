-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2018 at 11:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `develophowto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'fire'),
(7, 'Water'),
(8, 'Hacking'),
(9, 'Food'),
(10, 'Lifestyle'),
(11, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `image`, `comment`, `status`) VALUES
(1, 1345678322, 'aakash', 'indiancharizard', 2, 'aakashsingh1999@gmail.com', 'favicon.png', 'lolololllolololllolololllolololllolololllolololllolololllolololllolololllolololllolololllolololllolololl', 'unapprove'),
(2, 1542356038, 'Aakash SIngh', 'user', 2, 'aakash@spartanshub.com', 'favicon.png', 'this is lit!', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `news_data` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` longtext NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `categories`, `tags`, `post_data`, `views`, `status`) VALUES
(62, 1544122428, '4 Ways to Crack a Facebook Password & How to Protect Yourself from Them', 'testuser', 'test.png', '', 'Hacking', 'hacking, FB Hack , facebook', '<p>Despite the security concerns that have plagued Facebook for years, most people are sticking around and new members keep on joining. This has led Facebook to break records numbers with over&nbsp;<a href=\"http://newsroom.fb.com/Key-Facts\" rel=\"nofollow\" target=\"_blank\">1.94 billion monthly active users</a>, as of March 2017 &mdash; and around 1.28 billion daily active users.</p>\r\n\r\n<p>We share our lives on Facebook. We share our birthdays and our anniversaries. We share our vacation plans and locations. We share the births of our sons and the deaths of our fathers. We share our most cherished moments and our most painful thoughts. We divulge every aspect of our lives. Clinical psychologists have written entire&nbsp;<a href=\"https://www.amazon.de/Facehooked-Facebook-Affects-Emotions-Relationships/dp/194438703X/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">books detailing the surprisingly extensive impact Facebook has</a>&nbsp;on our emotions and relationships.</p>\r\n\r\n<p>But we sometimes forget who&#39;s watching.</p>\r\n\r\n<p>We use Facebook as a tool to connect, but there are those people who use that connectivity for malicious purposes. We reveal what others can use against us. They know when we&#39;re not home and for how long we&#39;re gone. They know the answers to our security questions. People can practically steal our identities &mdash; and that&#39;s just with the visible information we purposely give away through our public Facebook profile.</p>\r\n\r\n<p><img alt=\"facebook hack\" src=\"https://img.wonderhowto.com/img/original/22/19/63491552697702/0/634915526977022219.jpg\" style=\"float:left; height:400px; width:598px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The scariest part is that as we get more comfortable with advances in technology, we actually become more susceptible to hacking. As if we haven&#39;t already done enough to aid hackers in their quest for our data by sharing publicly, those in the know can get into our emails and Facebook accounts to steal every other part of our lives that we intended to keep away from prying eyes.</p>\r\n\r\n<p>In fact, you don&#39;t even have to be a&nbsp;<strong><a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-a-pro/\">professional hacker</a></strong>&nbsp;to get into someone&#39;s Facebook account.</p>\r\n\r\n<p>It can be as easy as&nbsp;<strong><a href=\"https://tag.wonderhowto.com/firesheep/\">running Firesheep on your computer</a></strong>&nbsp;for a few minutes. In fact, Facebook actually allows people to get into someone else&#39;s Facebook account without knowing their password. All you have to do is choose three friends to send a code to. You type in the three codes, and voil&agrave; &mdash; you&#39;re into the account. It&#39;s as easy as that.</p>\r\n\r\n<p>In this article I&#39;ll show you these, and a couple other ways that hackers (and even regular folks) can hack into someone&#39;s Facebook account. But don&#39;t worry, I&#39;ll also show you how to prevent it from happening to you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Method 1Reset the Password</h2>\r\n\r\n<p>The easiest way to &quot;hack&quot; into someone&#39;s Facebook is through resetting the password. This could be easier done by people who are friends with the person they&#39;re trying to hack.</p>\r\n\r\n<ul>\r\n	<li>The first step would be to get your friend&#39;s Facebook email login. If you don&#39;t already know it, try looking on their Facebook page in the Contact Info section. Still stuck? Hackers use scraping tools like TheHarvester to mine for email addresses,&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/scrape-target-email-addresses-with-theharvester-0176307/\">so check out our guide here</a>&nbsp;to find a user&#39;s email that you don&#39;t already know.</li>\r\n	<li>Next, click on&nbsp;<strong>Forgotten your password?</strong>&nbsp;and type in the victim&#39;s email. Their account should come up. Click&nbsp;<strong>This is my account</strong>.</li>\r\n	<li>It will ask if you would like to reset the password via the victim&#39;s emails. This doesn&#39;t help, so press&nbsp;<strong>No longer have access to these?</strong></li>\r\n	<li>It will now ask&nbsp;<strong>How can we reach you?</strong>&nbsp;Type in an email that you have that also isn&#39;t linked to any other Facebook account.</li>\r\n	<li>It will now ask you a question. If you&#39;re close friends with the victim, that&#39;s great. If you don&#39;t know too much about them, make an educated guess. If you figure it out, you can change the password. Now you have to wait 24 hours to login to their account.</li>\r\n	<li>If you don&#39;t figure out the question, you can click on&nbsp;<strong>Recover your account with help from friends</strong>. This allows you to choose between three and five friends.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/64/79/63491552940204/0/634915529402046479.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/64/79/63491552940204/0/4-ways-crack-facebook-password-protect-yourself-from-them.w1456.jpg\" /></a></p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"90\" id=\"google_ads_iframe_/10518929/tmnp.wonderhowto/a0-p3-s1_0\" name=\"\" scrolling=\"no\" src=\"https://tpc.googlesyndication.com/safeframe/1-0-31/html/container.html\" title=\"3rd party ad content\" width=\"728\"></iframe></p>\r\n\r\n<ul>\r\n	<li>It will send them passwords, which you may ask them for, and then type into the next page. You can either create three to five fake Facebook accounts and add your friend (especially if they just add anyone), or you can choose three to five close friends of yours that would be willing to give you the password.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/88/34/63491552960437/0/634915529604378834.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/88/34/63491552960437/0/4-ways-crack-facebook-password-protect-yourself-from-them.w1456.jpg\" /></a></p>\r\n\r\n<h2>How to Protect Yourself</h2>\r\n\r\n<ul>\r\n	<li>Use an email address specifically for your Facebook and don&#39;t put that email address on your profile.</li>\r\n	<li>When choosing a security question and answer, make it difficult. Make it so that no one can figure it out by simply going through your Facebook. No pet names, no anniversaries &mdash; not even third grade teacher&#39;s names. It&#39;s as easy as looking through a yearbook.</li>\r\n	<li>Learn about recovering your account from friends. You can select the three friends you want the password sent to. That way you can protect yourself from a friend and other mutual friends ganging up on you to get into your account.</li>\r\n</ul>\r\n\r\n<h2>Method 2Use a Keylogger</h2>\r\n\r\n<p><strong>Software Keylogger</strong></p>\r\n\r\n<p>A software keylogger is a program that can record each stroke on the keyboard that the user makes, most often without their knowledge. The software has to be downloaded manually on the victim&#39;s computer. It will automatically start capturing keystrokes as soon as the computer is turned on and remain undetected in the background. The software can be programmed to send you a summary of all the keystrokes via email.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"90\" id=\"google_ads_iframe_/10518929/tmnp.wonderhowto/a0-p4-s1_0\" name=\"\" scrolling=\"no\" src=\"https://tpc.googlesyndication.com/safeframe/1-0-31/html/container.html\" title=\"3rd party ad content\" width=\"728\"></iframe></p>\r\n\r\n<p>Null Byte features an excellent guide on&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-pro-remotely-install-keylogger-onto-your-girlfriends-computer-0141971/\">how to get a keylogger on a target computer</a>to get you started. If this isn&#39;t what you&#39;re looking for, you can search for free keyloggers or&nbsp;<a href=\"https://www.amazon.de/Hacking-Make-Keylogger-Programming-Language-ebook/dp/B06XBFYTM2/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">try coding a basic keylogger yourself</a>&nbsp;in C++.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/29/09/63491553875660/0/634915538756602909.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/29/09/63491553875660/0/4-ways-crack-facebook-password-protect-yourself-from-them.w1456.jpg\" /></a></p>\r\n\r\n<p><strong>Hardware Keylogger</strong></p>\r\n\r\n<p>These work the same way as the software keylogger, except that a USB drive with the software needs to be connected to the victim&#39;s computer. The USB drive will save a summary of the keystrokes, so it&#39;s as simple as plugging it to your own computer and extracting the data.</p>\r\n\r\n<p>There are several options available for hardware keyloggers.&nbsp;<a href=\"https://www.amazon.de/Keyllama-4MB-USB-Value-Keylogger/dp/B004ZGXU48/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">Wired keyloggers like the Keyllama</a>&nbsp;can be attached to the victim&#39;s computer to save keystrokes and works on any operating system &mdash; provided you have physical access to retrieve the device later. If you&#39;re looking to swipe the passwords remotely, you can invest in a&nbsp;<a href=\"https://www.amazon.de/Wi-Fi-Premium-Hardware-Keylogger-compatibility/dp/B00ENIVRDE/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">premium Wi-Fi enabled keylogger</a>&nbsp;which can email captured keystrokes or be accessed remotely over Wi-Fi.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/22/50/63491553951991/0/634915539519912250.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/22/50/63491553951991/0/4-ways-crack-facebook-password-protect-yourself-from-them.w1456.jpg\" /></a></p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"90\" id=\"google_ads_iframe_/10518929/tmnp.wonderhowto/a0-p5-s1_0\" name=\"\" scrolling=\"no\" src=\"https://tpc.googlesyndication.com/safeframe/1-0-31/html/container.html\" title=\"3rd party ad content\" width=\"728\"></iframe></p>\r\n\r\n<h2>How to Protect Yourself</h2>\r\n\r\n<ul>\r\n	<li>Use a firewall. Keyloggers usually send information through the internet, so a firewall will monitor your computer&#39;s online activity and sniff out anything suspicious.</li>\r\n	<li>Install a password manager. Keyloggers can&#39;t steal what you don&#39;t type. Password mangers automatically fill out important forms without you having to type anything in.</li>\r\n	<li>Update your software. Once a company knows of any exploits in their software, they work on an update. Stay behind and you could be susceptible.</li>\r\n	<li>Change passwords. If you still don&#39;t feel protected, you can change your password bi-weekly. It may seem drastic, but it renders any information a hacker stole useless.</li>\r\n</ul>\r\n\r\n<h2>Method 3Phishing</h2>\r\n\r\n<p>This option is much more difficult than the rest, but it is also the most common method to hack someone&#39;s account. The most popular type of&nbsp;<em>phishing</em>&nbsp;involves&nbsp;<strong><a href=\"https://null-byte.wonderhowto.com/how-to/social-engineering-part-2-hacking-friends-facebook-password-0130323/\">creating a fake login page</a></strong>. The page can be sent via email to your victim and will look exactly like the Facebook login page. If the victim logs in, the information will be sent to you instead of to Facebook. This process is difficult because you will need to create a web hosting account and a fake login page.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/13/97/63491554017324/0/634915540173241397.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/13/97/63491554017324/0/4-ways-crack-facebook-password-protect-yourself-from-them.w1456.jpg\" /></a></p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"90\" id=\"google_ads_iframe_/10518929/tmnp.wonderhowto/a0-p6-s1_0\" name=\"\" scrolling=\"no\" src=\"https://tpc.googlesyndication.com/safeframe/1-0-31/html/container.html\" title=\"3rd party ad content\" width=\"728\"></iframe></p>\r\n\r\n<p>The easiest way to do this would be to&nbsp;<strong>follow our guide on&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-pro-clone-any-website-using-httrack-0152420/\">how to clone a website</a></strong>to make an exact copy of the facebook login page. Then you&#39;ll just need to tweak the submit form to copy / store / email the login details a victim enters. If you need help with the exact steps, there are&nbsp;<strong><a href=\"https://null-byte.wonderhowto.com/how-to/social-engineering-part-2-hacking-friends-facebook-password-0130323/\">detailed instructions available</a></strong>&nbsp;by Alex Long here on Null Byte. Users are very careful now with logging into Facebook through other links, though, and email phishing filters are getting better every day, so that only adds to this already difficult process. But, it&#39;s still possible, especially if you&nbsp;<strong><a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-pro-clone-any-website-using-httrack-0152420/\">clone the entire Facebook website</a></strong>.</p>\r\n\r\n<h2>How to Protect Yourself</h2>\r\n\r\n<ul>\r\n	<li>Don&#39;t click on links through email. If an email tells you to login to Facebook through a link, be wary. First check the URL (<strong><a href=\"https://digiwonk.gadgethacks.com/how-to/dont-be-duped-by-malicious-short-links-heres-you-verify-destination-url-before-clicking-0139644/\">Here&#39;s a great guide on what to look out for</a></strong>). If you&#39;re still doubtful, go directly to the main website and login the way you usually do.</li>\r\n	<li>Phishing isn&#39;t only done through email. It can be any link on any website / chat room / text message / etc. Even ads that pop up can be malicious. Don&#39;t click on any sketchy looking links that ask for your information.</li>\r\n	<li>Use anti-virus &amp; web security software, like Norton or McAfee.</li>\r\n</ul>\r\n\r\n<h2>Method 4Man in the Middle Attack</h2>\r\n\r\n<p>If you can get close to your target, you can trick them into connecting to a fake Wi-Fi network to&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-capturing-wpa-passwords-by-targeting-users-with-fluxion-attack-0176134/\">steal credentials via a Man In The Middle (MITM) attack</a>. Tools like the&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/build-pumpkin-pi-rogue-ap-mitm-framework-fits-your-pocket-0177792/\">Wi-Fi Pumpkin</a>&nbsp;make creating a fake Wi-Fi network is as easy as sticking a&nbsp;<a href=\"https://www.amazon.de/Panda-300Mbps-Wireless-USB-Adapter/dp/B00EQT0YK2/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">$16 Wireless Network Adapter</a>&nbsp;on&nbsp;<a href=\"https://www.amazon.de/Raspberry-Model-A1-2GHz-64-bit-quad-core/dp/B01CD5VC92/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">the $35 Raspberry Pi</a>&nbsp;and getting close to your target. Once the victim connects to your fake network, you can inspect the traffic or route them to fake login pages. You can even set it to only replace certain pages and leave other pages alone.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/77/81/63634782110944/0/636347821109447781.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/77/81/63634782110944/0/4-ways-crack-facebook-password-protect-yourself-from-them.w1456.jpg\"  width=\"700\" height=\"300\"/></a></p>\r\n\r\n<p>This little computer can create an evil AP - a cloned wireless network to trick the user into connecting so you can listen in on their traffic.<em>Image by SADMIN/Null Byte</em></p>\r\n\r\n<blockquote>\r\n<p><strong>Get Hacking:</strong>&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/set-up-headless-raspberry-pi-hacking-platform-running-kali-linux-0176182/\">How to Set Up Kali Linux on the Raspberry Pi</a></p>\r\n</blockquote>\r\n\r\n<p><iframe frameborder=\"0\" height=\"90\" id=\"google_ads_iframe_/10518929/tmnp.wonderhowto/a0-p7-s1_0\" name=\"\" scrolling=\"no\" src=\"https://tpc.googlesyndication.com/safeframe/1-0-31/html/container.html\" title=\"3rd party ad content\" width=\"728\"></iframe></p>\r\n\r\n<h2>How to Protect Yourself</h2>\r\n\r\n<ul>\r\n	<li>Don&#39;t connect to any open (unencrypted) Wi-Fi Networks.</li>\r\n	<li>Especially don&#39;t connect to any Wi-Fi networks that are out of place. Why might you see a &quot;Google Starbucks&quot; when there&#39;s no Starbucks for miles? Because hackers know your phone or computer will automatically connect to it if you have used a network with the same name before.</li>\r\n	<li>If you have trouble connecting to your Wi-Fi, look at your list of nearby networks to see if there are any copies of your network name nearby.</li>\r\n	<li>If your router asks you to enter the password for a firmware update to enable the internet or shows you a page with major spelling or grammar errors, it is likely you&#39;re connected to a fake hotspot and&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-capturing-wpa-passwords-by-targeting-users-with-fluxion-attack-0176134/\">someone nearby is trying to steal your credentials</a>.</li>\r\n</ul>\r\n\r\n<h2>A Couple More Facebook Hacks</h2>\r\n\r\n<p>For those with a bit more technical skill, check out the&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-pro-hack-facebook-part-1-same-origin-policy-0159452/\">Same Origin Policy Facebook hack</a>&nbsp;and the somewhat easier,&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-pro-hack-facebook-part-2-facebook-password-extractor-0160523/\">Facebook Password Extractor</a>. We will continue add more Facebook hacks in the near future, so keep coming back here.</p>\r\n\r\n<h2>How to Protect Yourself</h2>\r\n\r\n<ul>\r\n	<li>On Facebook, go to your&nbsp;<strong>Account Settings</strong>&nbsp;and check under&nbsp;<strong>Security</strong>. Make sure Secure Browsing is enabled. Firesheep can&#39;t sniff out cookies over encrypted connections like HTTPS, so try to steer away from HTTP.</li>\r\n	<li>Full time SSL. Use Firefox add-ons such as&nbsp;<a href=\"https://www.eff.org/https-everywhere\" rel=\"nofollow\" target=\"_blank\">HTTPS-Everywhere</a>&nbsp;or&nbsp;<a href=\"https://addons.mozilla.org/en-US/firefox/addon/12714/\" rel=\"nofollow\" target=\"_blank\">Force-TLS</a>.</li>\r\n	<li>Log off a website when you&#39;re done. Firesheep can&#39;t stay logged in to your account if you log off.</li>\r\n	<li>Use only trustworthy Wi-Fi networks. A hacker can be sitting across from you at Starbucks and looking through your email without you knowing it.</li>\r\n	<li>Use a VPN. These protect against any sidejacking from the same WiFi network, no matter what website you&#39;re on as all your network traffic will be encrypted all the way to your VPN provider.</li>\r\n</ul>\r\n\r\n<h2>Protecting Yourself: Less Is More</h2>\r\n\r\n<p>Social networking websites are great ways to stay connected with old friends and meet new people. Creating an event, sending a birthday greeting and telling your parents you love them are all a couple of clicks away.</p>\r\n\r\n\r\n<p>Facebook isn&#39;t something you need to steer away from, but you do need to be aware of your surroundings and make smart decisions about what you put up on your profile. The less information you give out on Facebook for everyone to see, the more difficult you make it for hackers.</p>\r\n\r\n<p>If your Facebook account ever gets hacked, check out our guide on&nbsp;<strong><a href=\"https://digiwonk.gadgethacks.com/how-to/get-your-hacked-facebook-account-back-0147366/\">getting your hacked Facebook account back</a></strong>&nbsp;for information on restoring your account.</p>\r\n\r\n<p>Bonus: If you&#39;re interested in who&#39;s checking you out, there are some ways you can (kindof)&nbsp;<strong><a href=\"https://digiwonk.gadgethacks.com/how-to/track-who-views-your-facebook-profile-0147349/\">track who&#39;s viewed your Facebook profile</a></strong>.</p>\r\n', 9, 'publish'),
(63, 1544125982, 'How to hack wifi', 'testuser', 'test.png', '', 'Hacking', 'wifi hacking', '<p>Welcome back, my tenderfoot hackers!</p>\r\n\r\n<p>Do you need to get a Wi-Fi password but don&#39;t have the time to&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/wi-fi-hacking/\">crack it</a>? In previous tutorials, I have shown how to crack&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-cracking-wep-passwords-with-aircrack-ng-0147340/\">WEP</a>,&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-cracking-wpa2-psk-passwords-using-aircrack-ng-0148366/\">WPA2</a>, and&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-breaking-wps-pin-get-password-with-bully-0158819/\">WPS</a>, but some people have complained that cracking WPA2 takes too long and that not all access points have WPS enabled (even though quite a few do). To help out in these situations, I present to you an almost surefire way to get a Wi-Fi password without cracking&mdash;<a href=\"https://github.com/sophron/wifiphisher\" rel=\"nofollow\" target=\"_blank\">Wifiphisher</a>.</p>\r\n\r\n<h2>Steps in the Wifiphisher Strategy</h2>\r\n\r\n<p>The idea here is to create an&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-creating-evil-twin-wireless-access-point-eavesdrop-data-0147919/\">evil twin AP</a>, then de-authenticate or DoS the user from their real AP. When they re-authenticate to your fake AP with the same SSID, they will see a legitimate-looking webpage that requests their password because of a &quot;firmware upgrade.&quot; When they provide their password, you capture it and then allow them to use the evil twin as their AP, so they don&#39;t suspect a thing. Brilliant!</p>\r\n\r\n<p>To sum up, Wifiphisher takes the following steps:</p>\r\n\r\n<ol>\r\n	<li>De-authenticate the user from their legitimate AP.</li>\r\n	<li>Allow the user to authenticate to your&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-creating-evil-twin-wireless-access-point-eavesdrop-data-0147919/\">evil twin</a>.</li>\r\n	<li>Offer a webpage to the user on a proxy that notifies them that a &quot;firmware upgrade&quot; has taken place, and that they need to authenticate again.</li>\r\n	<li>The Wi-Fi password is passed to the hacker and the user continues to the web oblivious to what just happened.</li>\r\n</ol>\r\n\r\n<p>Similar scripts have been around for awhile, such as&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-selecting-good-wi-fi-hacking-strategy-0162526/\">Airsnarf</a>, but this new Wifiphisher script is more sophisticated. In addition, you could always do this all manually, but now we have a script that automates the entire process. Recently, another script named&nbsp;<strong>Fluxion</strong>&nbsp;has also gained popularity as an alternative to Wifiphisher. You can&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-wi-fi-capturing-wpa-passwords-by-targeting-users-with-fluxion-attack-0176134/\">check out this great guide on Fluxion</a>&nbsp;if Wifiphisher isn&#39;t working for you.</p>\r\n\r\n<p>To do this hack, you will need&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/hack-like-pro-getting-started-with-kali-your-new-hacking-system-0151631/\">Kali Linux</a>&nbsp;and two network wireless adapters, one of which must be capable of packet injection. You can use the tried and true&nbsp;<a href=\"https://www.amazon.de/dp/B004Y6MIXS/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">AWUS036NHA</a>, or check out our guide on&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/buy-best-wireless-network-adapter-for-wi-fi-hacking-2017-0178550/\">picking the best wireless network adapter</a>for Kali Linux.</p>\r\n\r\n<blockquote>\r\n<p><strong>Don&#39;t miss:&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/buy-best-wireless-network-adapter-for-wi-fi-hacking-2017-0178550/\">How to Buy the Best Best Wireless Network Adapter for Wi-Fi Hacking in 2017</a></strong></p>\r\n</blockquote>\r\n\r\n<p>You may use others, but before you do, make certain that it is compatible with&nbsp;<a href=\"http://www.aircrack-ng.org/doku.php?id=compatibility_drivers#which_is_the_best_card_to_buy\" rel=\"nofollow\" target=\"_blank\">Aircrack-ng</a>&nbsp;(packet injection capable). Please do NOT post questions on why it doesn&#39;t work until you check if your wireless adapter can do packet injection. Most cannot.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/91/05/63634780665557/0/636347806655579105.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/91/05/63634780665557/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" style=\"height:418px; width:700px\" /></a></p>\r\n\r\n<p>Make sure you get an adapter that works with Kali Linux - Check out out updated guide on buying one.<em>Image by SADMIN/<a href=\"https://null-byte.wonderhowto.com/how-to/buy-best-wireless-network-adapter-for-wi-fi-hacking-2017-0178550/\" rel=\"nofollow\">Null Byte</a></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Now let&#39;s take a look at Wifiphisher.</p>\r\n\r\n<h2>Step 1Download Wifiphisher</h2>\r\n\r\n<p>To begin, fire up Kali and open a terminal. Then download Wifiphisher&nbsp;<a href=\"https://github.com/sophron/wifiphisher/releases/\" rel=\"nofollow\" target=\"_blank\">from GitHub</a>and unpack the code.</p>\r\n\r\n<p><em><strong>kali &gt; tar -xvzf /root/wifiphisher-1.1.tar.gz</strong></em></p>\r\n\r\n<p>As you can see below, I have unpacked the Wifiphisher source code.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/48/36/63580344134593/0/635803441345934836.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/48/36/63580344134593/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>Alternatively, you can clone the code from GitHub by typing:</p>\r\n\r\n<p><em><strong>kali &gt; git clone https://github/sophron/wifiphisher</strong></em></p>\r\n\r\n<h2>Step 2Navigate to the Directory</h2>\r\n\r\n<p>Next, navigate to the directory that Wifiphisher created when it was unpacked. In my case, it is&nbsp;<em>/wifiphisher-1.1</em>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>kali &gt; cd wifiphisher-.1.1</strong></em></p>\r\n\r\n<p>When listing the contents of that directory, you will see that the wifiphisher.py script is there.</p>\r\n\r\n<p><em><strong>kali &gt; ls -l</strong></em></p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/50/77/63580350660218/0/635803506602185077.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/50/77/63580350660218/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<h2>Step 3Run the Script</h2>\r\n\r\n<p>You can run the Wifiphisher script by typing:</p>\r\n\r\n<p><em><strong>kali &gt; python wifiphisher.py</strong></em></p>\r\n\r\n<p>Note that I preceded the script with the name of the interpreter, python.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/64/41/63580350673218/0/635803506732186441.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/64/41/63580350673218/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>The first time you run the script, it will likely tell you that &quot;hostapd&quot; is not found and will prompt you to install it. Install by typing &quot;y&quot; for yes. It will then proceed to install hostapd.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/34/51/63580350791890/0/635803507918903451.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/34/51/63580350791890/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>When it has completed, once again, execute the Wifiphisher script.</p>\r\n\r\n<p><em><strong>kali &gt; python wifiphisher.py</strong></em></p>\r\n\r\n<p>This time, it will start the web server on port 8080 and 443, then go about and discover the available Wi-Fi networks.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/35/86/63580350812515/0/635803508125153586.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/35/86/63580350812515/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>When it has completed, it will list all the Wi-Fi networks it has discovered. Notice at the bottom of my example that it has discovered the network &quot;wonderhowto.&quot; That is the network we will be attacking.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/59/07/63580350863671/0/635803508636715907.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/59/07/63580350863671/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Step 4Send Your Attack &amp; Get the Password</h2>\r\n\r\n<p>Go ahead and hit&nbsp;<em>Ctrl&nbsp;</em>+&nbsp;<em>C</em>&nbsp;on your keyboard and you will be prompted for the number of the AP that you would like to attack. In my case, it is 12.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/56/49/63580350905718/0/635803509057185649.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/56/49/63580350905718/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>When you hit&nbsp;<em>Enter</em>, Wifiphisher will display a screen like the one below that indicates the interface being used and the SSID of the AP being attacked and cloned.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/52/37/63580350949093/0/635803509490935237.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/52/37/63580350949093/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The target user has been de-authenticated from their AP. When they re-authenticate, they will directed to the the cloned evil twin access point.</p>\r\n\r\n<p>When they do, the proxy on the web server will catch their request and serve up an authentic-looking message that a firmware upgrade has taken place on their router and they must re-authenticate.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/11/89/63580350995484/0/635803509954841189.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/11/89/63580350995484/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p>Notice that I have put in my password, nullbyte, and hit Submit.</p>\r\n\r\n<p>When the user enters their password, it will be passed to you through the Wifiphisher open terminal, as seen below. The user will be passed through to the web through your system and out to the Internet, never suspecting anything awry has happened.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/80/90/63580351070124/0/635803510701248090.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/80/90/63580351070124/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/93/52/63636276275054/0/636362762750549352.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/93/52/63636276275054/0/hack-wi-fi-get-anyones-wi-fi-password-without-cracking-using-wifiphisher.w1456.jpg\" style=\"height:328px; width:700px\" /></a></p>\r\n\r\n<p>Get started hacking on our Kali Linux build.<em>Image by SADMIN/Null Byte</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If you&#39;re looking for a cheap, handy platform to get started working with wifipfisher, check out our Kali Linux Raspberry Pi build using&nbsp;<a href=\"https://www.amazon.de/Raspberry-Model-A1-2GHz-64-bit-quad-core/dp/B01CD5VC92/?tag=wnbde-21&amp;language=en_GB\" rel=\"nofollow\" target=\"_blank\">the $35 Raspberry Pi</a>.</p>\r\n\r\n<blockquote>\r\n<p><strong>Get Started Hacking Today:&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/set-up-headless-raspberry-pi-hacking-platform-running-kali-linux-0176182/\">Set Up a Headless Raspberry Pi Hacking Platform Running Kali Linux</a></strong></p>\r\n</blockquote>\r\n\r\n<p>Now, my tenderfoot hackers, no Wi-Fi password is safe! Keep coming back as explore more of the world&#39;s most valuable skill set&mdash;hacking!</p>\r\n', 1, 'unpublish'),
(64, 1544176620, 'Get Unlimited Free Trials Using a \"Real\" Fake Credit Card Number', 'IndianCharizard', 'test.png', '', 'Hacking', 'Tech', '<p>When I see the words &quot;<a href=\"https://digiwonk.gadgethacks.com/how-to/get-unlimited-free-trial-subscriptions-netflix-spotify-and-more-using-gmail-0140823/\">free trial</a>,&quot; I know I&#39;m probably going to have to whip out my credit card and enter in the number to &quot;not get charged.&quot; Then I end up forgetting about the trial and want to kick myself in the ass when I see my statement at the end of the month.</p>\r\n\r\n<p>In order to avoid that rigmarole, you can actually use fake credit numbers instead of your own, and you can do that using the site&nbsp;<strong><a href=\"http://www.getcreditcardnumbers.com/\" rel=\"nofollow\" target=\"_blank\">getcreditcardnumbers.com</a></strong>, which can generate up to 9,999 credit card numbers at a time, or just one.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"90\" id=\"google_ads_iframe_/10518929/tmnp.wonderhowto/a0-p1-s1_0\" name=\"\" scrolling=\"no\" src=\"https://tpc.googlesyndication.com/safeframe/1-0-31/html/container.html\" title=\"3rd party ad content\" width=\"728\"></iframe></p>\r\n\r\n<p>Now, to be completely clear,&nbsp;<strong>these numbers cannot be used to purchase any item</strong>. Nada. Zilch. Nothing. For that to work, you would need a valid expiration date and CVV or CSV number. This site merely provides the standard&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/credit-card-algorithms-work-anatomy-credit-card-numbers-0132295/\">16 digit credit card number</a>&nbsp;that can be used to bypass certain online forms that only ask for the number.</p>\r\n\r\n<h2>How Does It Work?</h2>\r\n\r\n<p>The credit card number generator uses a system based off of the&nbsp;<a href=\"https://cons.wonderhowto.com/how-to/flaw-hiltons-rewards-program-allows-you-achieve-instant-hhonors-gold-status-for-free-0141743/\">Luhn Algorithm</a>, which has been used to validate numbers for decades. You can learn more about the algorithm on their&nbsp;<a href=\"http://www.getcreditcardnumbers.com/#algorithm\" rel=\"nofollow\" target=\"_blank\">webpage</a>, or check out the&nbsp;<a href=\"https://null-byte.wonderhowto.com/how-to/credit-card-algorithms-work-anatomy-credit-card-numbers-0132295/\">Null Byte guide on how credit card algorithms work</a>. A fake number will work for sites that store credit card information to either charge you later or ask you to upgrade.</p>\r\n\r\n<p>For sites that ask for an upfront fee or have an automatic charge sometime down the line (Hulu Plus, Netflix, Spotify), this won&#39;t work since they ask for more than just a credit card number for validation. You can, however, get&nbsp;<strong><a href=\"https://digiwonk.gadgethacks.com/how-to/get-unlimited-free-trial-subscriptions-netflix-spotify-and-more-using-gmail-0140823/\">unlimited free trials</a></strong>&nbsp;on those sites using a simple trick with&nbsp;<a href=\"https://digiwonk.gadgethacks.com/how-to/these-clever-gmail-hacks-will-stop-spam-from-sites-who-sell-your-email-address-0154726/\">your email address</a>&nbsp;if you have a valid card number with&nbsp;<a href=\"https://thesecretyumiverse.wonderhowto.com/how-to/15-clever-uses-for-expired-debit-credit-gift-and-membership-cards-0145922/\">expiration date</a>&nbsp;and CSV.</p>\r\n\r\n<h2>Getting a Card Number on Android</h2>\r\n\r\n<p>There&#39;s also an&nbsp;<a href=\"https://android.gadgethacks.com/\">Android</a>&nbsp;application for getting fake card numbers called&nbsp;<strong><a href=\"https://play.google.com/store/apps/details?id=com.mrma.cardgen\" rel=\"nofollow\" target=\"_blank\">CardGen</a></strong>, available for free in the Play Store. You can generate and validate credit card numbers directly from the app, making it easy to use on the go as well. Validation in particular would be useful if you were accepting credit card payments on your own site and wanted to make sure the cards were legit.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/57/21/63521084943702/0/635210849437025721.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/57/21/63521084943702/0/get-unlimited-free-trials-using-real-fake-credit-card-number.w1456.jpg\" style=\"height:312px; width:200px\" /></a></p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/01/96/63521084970753/0/635210849707530196.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/01/96/63521084970753/0/get-unlimited-free-trials-using-real-fake-credit-card-number.w1456.jpg\" style=\"height:314px; width:200px\" /></a></p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/48/06/63521085005525/0/635210850055254806.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/48/06/63521085005525/0/get-unlimited-free-trials-using-real-fake-credit-card-number.w1456.jpg\" style=\"height:312px; width:200px\" /></a></p>\r\n\r\n<p>The app is ad-supported, but since it&#39;s free, I can live with that. In the generate field you can select from most of the major credit card providers, including American Express, Mastercard, Visa, and Discover. The disclaimer explains what the app does and how you should use it.</p>\r\n\r\n<p><a href=\"https://img.wonderhowto.com/img/original/23/38/63521085548219/0/635210855482192338.jpg\" rel=\"nofollow\" target=\"_blank\"><img alt=\"\" src=\"https://img.wonderhowto.com/img/23/38/63521085548219/0/get-unlimited-free-trials-using-real-fake-credit-card-number.w1456.jpg\" style=\"height:394px; width:700px\" /></a></p>\r\n\r\n<p>What would you do with these credit card number generators? Let us know in the comments section.</p>\r\n', 3, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reg_date` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_date`, `first_name`, `last_name`, `username`, `email`, `city`, `country`, `school`, `age`, `image`, `password`, `role`, `details`, `salt`) VALUES
(13, 1345678322, 'Aakash', 'S', 'Aakash', 'aakash@spartanshub.com', 'New York', 'United States', 'University of Computer Science', '21', 'lol.png', '827ccb0eea8a706c4c34a16891f84e7b', 'Author', 'A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.', ''),
(16, 2018, '', '', 'IndianCharizard', 'aakashsingh1999@gmail.com', '', '', '', '', '', 'a30c7a7b4d049997112e4909d2e7a853', 'Author', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_date` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `username`, `email`, `reg_date`, `password`) VALUES
(1, 'Aakash', 'Aakash', 'aakashsingh1999@gmail.com', '2018-10-10', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
