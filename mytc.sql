/*
Navicat MySQL Data Transfer

Source Server         : pp
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : mytc

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-08 17:32:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mytc_admin`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_admin`;
CREATE TABLE `mytc_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `role_id` int(8) NOT NULL DEFAULT '1',
  `logintime` varchar(255) NOT NULL,
  `register` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_admin
-- ----------------------------
INSERT INTO `mytc_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '', '17-06-11');

-- ----------------------------
-- Table structure for `mytc_area`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_area`;
CREATE TABLE `mytc_area` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_area
-- ----------------------------

-- ----------------------------
-- Table structure for `mytc_bis`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_bis`;
CREATE TABLE `mytc_bis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `licence_logo` varchar(255) NOT NULL DEFAULT '',
  `introduction` text NOT NULL,
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `money` decimal(20,2) NOT NULL DEFAULT '0.00',
  `bank_name` varchar(50) NOT NULL DEFAULT '',
  `bank_user` varchar(50) NOT NULL DEFAULT '',
  `faren` varchar(20) NOT NULL DEFAULT '',
  `faren_tel` varchar(20) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_bis
-- ----------------------------
INSERT INTO `mytc_bis` VALUES ('5', 'dafdsf', 'dfljalkf@54654.com', '/shop/public/upload\\20170627\\23b2f2af1c49be18b4078fd4df0cbeb8.jpg', '/shop/public/upload\\20170627\\265bc7f810f4a7cba3d980dc79f54121.jpg', '<p>dfafdfsffdsfaf</p>', '1', '2', '465466489431349865', '0.00', 'dlfjlajldsf', 'dfoiaofdsf', 'dfasfasdf', '4561659815', '0', '0', '1498557598', '1498786735');
INSERT INTO `mytc_bis` VALUES ('6', 'dafdsf', 'dfljalkf@54654.com', '/shop/public/upload\\20170627\\23b2f2af1c49be18b4078fd4df0cbeb8.jpg', '/shop/public/upload\\20170627\\265bc7f810f4a7cba3d980dc79f54121.jpg', '<p>dfafdfsffdsfaf</p>', '1', '2', '465466489431349865', '0.00', 'dlfjlajldsf', 'dfoiaofdsf', 'dfasfasdf', '4561659815', '0', '0', '1498557600', '1498721861');
INSERT INTO `mytc_bis` VALUES ('7', 'dafdsfdfgsfdg', 'dfljalkf@54654.com', '/shop/public/upload\\20170628\\2070cac73590819eaab2f41701789500.jpg', '/shop/public/upload\\20170628\\3f7d0a598332e75c3c63fa9f788c28af.jpg', '<p>发生就到了发的说法&nbsp;</p>', '1', '3', '465466489431349865', '0.00', '发斯蒂芬', '范德萨热', '第三方', '4561659815', '0', '0', '1498609513', '1498818322');
INSERT INTO `mytc_bis` VALUES ('8', 'dafdsfdfgsfdg', 'dfljalkf@54654.com', '/shop/public/upload\\20170628\\2070cac73590819eaab2f41701789500.jpg', '/shop/public/upload\\20170628\\3f7d0a598332e75c3c63fa9f788c28af.jpg', '<p>发生就到了发的说法&nbsp;</p>', '1', '3', '465466489431349865', '0.00', '发斯蒂芬', '范德萨热', '第三方', '4561659815', '0', '0', '1498611750', '1498786691');
INSERT INTO `mytc_bis` VALUES ('9', '都说了附近拉开始的减肥', '54654564@qq.com', '/shop/public/upload\\20170629\\88e443eced55200833ef079d865437c8.gif', '/shop/public/upload\\20170629\\4a5e017e3f55fdddf8d5f929db4445bb.gif', '<p>的范德萨发撒的发生</p>', '1', '', '6574456', '0.00', '的司法斯蒂芬', '大东方', '6547', '6859998', '0', '0', '1498703083', '1498786695');
INSERT INTO `mytc_bis` VALUES ('10', '宏波养殖实业有限公司', '13881801576@qq.com.cn', '/shop/public/upload\\20170629\\da3e76d2965f676ce9b3f5bd1bc9817d.gif', '/shop/public/upload\\20170629\\5038e1b9c6d63f0dce5a9e5c44ac5697.gif', '<p><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;一、养殖业：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;二、种植业：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;种植，观光，休闲为一体的现代循环农业经济园。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;三、餐饮业：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;四、矿产业：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;五、地产业：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;六、网络运作：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路调整到与互联网接轨，提高信息更新速度，加速发展养殖业的宏伟目标的开始。同时，四川\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;肉牛网与四川养殖网也将被推广为四川地区养殖行业的门户网站，为广大养殖企业和养殖户提供一个买卖、咨询、发布广告的综合信息平台。目前网站已经建设成功，在正常运营中。</p>', '1', '', '4564543432131', '0.00', '四川省德阳市', '陈波', '陈波', '13881801576', '0', '0', '1498719462', '1498814799');
INSERT INTO `mytc_bis` VALUES ('11', '宏波养殖实业有限公司', '13881801576@qq.com.cn', '/shop/public/upload\\20170630\\fe70837a4e6c885076c5c8c01e006ff7.gif', '/shop/public/upload\\20170630\\f9225a079c992588fa0e63d75726e1ce.gif', '<p style=\"text-indent: 2em; line-height: 1.5em;\"><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</p><p style=\"line-height: 1.5em;\">一、养殖业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。</p><p style=\"line-height: 1.5em;\">二、种植业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。</p><p style=\"line-height: 1.5em;\">三、餐饮业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。<br/>四、矿产业：<br/>公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。</p><p style=\"line-height: 1.5em;\">五、地产业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。</p><p style=\"line-height: 1.5em;\">六、网络运作：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路调整到与互联网接轨，提高信息更新速度，加速发展养殖业的宏伟目标的开始。同时，四川肉牛网与四川养殖网也将被推广为四川地区养殖行业的门户网站，为广大养殖企业和养殖户提供一个买卖、咨询、发布广告的综合信息平台。目前网站已经建设成功，在正常运营中。</p>', '1', '5', '54456565466545612', '0.00', '四川省德阳市', '陈波', '陈波', '8608387102727', '0', '0', '1498813301', '1498814795');
INSERT INTO `mytc_bis` VALUES ('12', '宏波养殖实业有限公司', '13881801576@qq.com.cn', '/shop/public/upload\\20170630\\7e6d33a093c6480dd945039c01d0efff.gif', '/shop/public/upload\\20170630\\b799333050007e7729f111607a49d1b3.gif', '<p style=\"text-indent: 2em; line-height: 1.5em;\"><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</p><p style=\"line-height: 1.5em;\">一、养殖业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。</p><p style=\"line-height: 1.5em;\">二、种植业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。</p><p style=\"line-height: 1.5em;\">三、餐饮业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。<br/>四、矿产业：<br/>公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。</p><p style=\"line-height: 1.5em;\">五、地产业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。</p><p style=\"line-height: 1.5em;\">六、网络运作：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路调整到与互联网接轨，提高信息更新速度，加速发展养殖业的宏伟目标的开始。同时，四川肉牛网与四川养殖网也将被推广为四川地区养殖行业的门户网站，为广大养殖企业和养殖户提供一个买卖、咨询、发布广告的综合信息平台。目前网站已经建设成功，在正常运营中。</p>', '1', '5', '54456565466545612', '0.00', '四川省德阳市', '陈波', '陈波', '8608387102727', '0', '0', '1498814453', '1498814790');
INSERT INTO `mytc_bis` VALUES ('13', '宏波养殖实业有限公司', '13881801576@qq.com.cn', '/shop/public/upload\\20170630\\d1f3bf0609c08e174112ff3ad2a6297d.gif', '/shop/public/upload\\20170630\\5985be97f9328ad6157c0b7d2591f89c.gif', '<p style=\"line-height: 1.5em;\"><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</p><p style=\"line-height: 1.5em;\">一、养殖业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。</p><p style=\"line-height: 1.5em;\">二、种植业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。</p><p style=\"line-height: 1.5em;\">三、餐饮业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。</p><p style=\"line-height: 1.5em;\">四、矿产业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。</p><p style=\"line-height: 1.5em;\">五、地产业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。</p><p style=\"line-height: 1.5em;\">六、网络运作：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路调整到与互联网接轨，提高信息更新速度，加速发展养殖业的宏伟目标的开始。同时，四川肉牛网与四川养殖网也将被推广为四川地区养殖行业的门户网站，为广大养殖企业和养殖户提供一个买卖、咨询、发布广告的综合信息平台。目前网站已经建设成功，在正常运营中。</p>', '1', '5', '54864165613265', '0.00', '四川省德阳市', '陈波', '陈波', '8608387102727', '0', '0', '1498815850', '1498816015');
INSERT INTO `mytc_bis` VALUES ('14', '宏波养殖实业有限公司', '13881801576@qq.com.cn', '/shop/public/upload\\20170630\\d1f3bf0609c08e174112ff3ad2a6297d.gif', '/shop/public/upload\\20170630\\5985be97f9328ad6157c0b7d2591f89c.gif', '<p style=\"line-height: 1.5em;\"><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</p><p style=\"line-height: 1.5em;\">一、养殖业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。</p><p style=\"line-height: 1.5em;\">二、种植业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。</p><p style=\"line-height: 1.5em;\">三、餐饮业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。</p><p style=\"line-height: 1.5em;\">四、矿产业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。</p><p style=\"line-height: 1.5em;\">五、地产业：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。</p><p style=\"line-height: 1.5em;\">六、网络运作：</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路调整到与互联网接轨，提高信息更新速度，加速发展养殖业的宏伟目标的开始。同时，四川肉牛网与四川养殖网也将被推广为四川地区养殖行业的门户网站，为广大养殖企业和养殖户提供一个买卖、咨询、发布广告的综合信息平台。目前网站已经建设成功，在正常运营中。</p>', '1', '5', '54864165613265', '0.00', '四川省德阳市', '陈波', '陈波', '8608387102727', '0', '1', '1498815868', '1498816544');
INSERT INTO `mytc_bis` VALUES ('15', 'ddfds ', '456546544@44.com.dd', '/shop/public/upload\\20170704\\b979034ce3f924113c2c0d863400a240.jpg', '/shop/public/upload\\20170704\\f089a799e048e7f48a200695022c445b.jpg', '<p>dfdfsa&nbsp;</p>', '1', '2', '45646465', '0.00', 'dfsdaf', 'fdfa', 'fdsa', '5645564', '0', '1', '1499158382', '1499158382');

-- ----------------------------
-- Table structure for `mytc_bis_account`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_bis_account`;
CREATE TABLE `mytc_bis_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `bis_id` int(11) unsigned NOT NULL DEFAULT '0',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `technology` text NOT NULL,
  `outlook` text NOT NULL,
  `base` text NOT NULL,
  `become` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bis_id` (`bis_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_bis_account
-- ----------------------------
INSERT INTO `mytc_bis_account` VALUES ('1', 'admin', '23c06a72232284211e1e95e663ea20b9', '4216', '5', '', '0', '1', '0', '0', '1498557598', '1498786735', '<p>dfdsfasdfdsf<br/></p>', '<p>dfdsafsdfsda</p>', '<p>dfdsaf</p>', '<p>dsfasdfsd</p>');
INSERT INTO `mytc_bis_account` VALUES ('2', 'admin', '5ffebf805d854c0fda8f37fbd97e43e5', '372', '6', '', '0', '1', '0', '0', '1498557600', '1498721861', '<p>dfdsfasdfdsf<br/></p>', '<p>dfdsafsdfsda</p>', '<p>dfdsaf</p>', '<p>dsfasdfsd</p>');
INSERT INTO `mytc_bis_account` VALUES ('3', 'admin123', '853057ab41a93be52c57948f97c9266e', '4120', '7', '', '0', '1', '0', '0', '1498609513', '1498818322', '<p>大多数</p>', '<p>短发非堵塞</p>', '<p>地方热用户的速度</p>', '<p>反对使用人数</p>');
INSERT INTO `mytc_bis_account` VALUES ('4', 'admin123', '8aaa0d1af24b1e997ce878a097180b78', '9335', '8', '', '0', '1', '0', '0', '1498611750', '1498786691', '<p>大多数</p>', '<p>短发非堵塞</p>', '<p>地方热用户的速度</p>', '<p>反对使用人数</p>');
INSERT INTO `mytc_bis_account` VALUES ('5', 'admin11', '5b9754cb3891a761bfef91de8d1b50e6', '2686', '9', '', '0', '1', '0', '0', '1498703083', '1498786695', '<p>答复是第三方</p>', '<p>大法师打发打发</p>', '<p>发生的士大夫似的</p>', '<p>的飞洒发士大夫似的</p>');
INSERT INTO `mytc_bis_account` VALUES ('6', 'username', '696bf0ed84dfe896cb7b585d42b2fe45', '367', '10', '', '0', '1', '0', '0', '1498719462', '1498814799', '<p>一、中江柚品种特性及发展情况<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易丰产，一年栽，3-4年可试花挂果，6-7年可丰产，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;亩产可达5000斤以上。其缺点是易裂果，裂果率可达10-20%，故应选择6-7月份水源能解决的地方发展栽培。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;二、中江柚丰产优质栽培技术<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为了使中江柚尽快投产，产生效益，为我们致富奔小康作出贡献，我们就应学习、掌握和采用先进的科学的中江柚栽培技术，该项技术可用八个字来概括，即：种（良种壮苗）、\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;建（高标准建园）、肥（科学施肥）、水（适时排灌）、剪（合理修剪）、保（保花保果）、治（加强病虫防治）、促（控长促花）。具体来讲：<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;（一）积极推广优良品种，培育发展良种壮苗<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;良种壮苗是中江柚获得“三高”的物质基础，首先必须加强对中江柚的提纯选优，从中选出裂果率低或不裂果、丰产稳产优质的优选单株，进行繁殖推广；其次要培育良种壮苗，发展栽植良种壮苗，杜绝劣等苗\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;出圃。苗木质量好坏，直接影响到成活率、树体生长发育、丰产性和果实品质等，良种壮苗要求：（1）无检疫性病虫害，如黄龙病、溃疡病、果实蝇等；（2）品种纯正，砧木优良，嫁接部位愈合良好；（3）\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;苗木生长健壮，主干端直，一般苗高40厘米以上，茎粗0.8厘米以上，并有3个以上分枝，每枝长20厘米以上；（4）根系完整，主侧根发达，一般主根长16.5厘米以上，并且有3-4条侧根，须根发达。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;（二）高标准建园，确保质量效益<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;柚树根深树高，经济寿命长，几十年上百年固定在同一地点生长结果。因此，新建柚园只有始终坚持高标准、高质量建园，才能获得高产、优质和高效益。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1、应选择坡度在25度以下的山地、丘陵和排灌方便、土壤疏松湿润的地方建园。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2、整地时必须全面修筑等高反坡梯田和保土贮水竹节沟及梯田外缘作梯梗，并种上香根草、百喜草等。<br/>\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3、新建园应坚持“三大一篓”，即大穴、大肥、大苗和营养篓（袋）假植。所谓大穴，就是挖深、宽一米的壕沟或一米见方的穴；大肥，就是每立方米分3-4层填埋20公斤稻草或绿肥、厩肥100-150斤、\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;石灰1-1.5斤、磷肥1-1.5公斤、麸饼1-1.5公斤作基肥；大苗，按良种壮苗出圃；营养篓（袋）假植带土移栽（营养土配置，以菜园土、水稻田表土、干塘泥、火土为基础，每立方土中加入人粪2担、磷肥2-3公斤、\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;猪牛粪3-4担拌匀成堆，外用稀泥密封堆沤30-45天，9月份用营养篓（袋）装营养土假植小苗，第二年9月份带土移栽）。 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '<p><img src=\"/ueditor/php/upload/image/20170629/1498719412729388.gif\" title=\"1498719412729388.gif\" alt=\"20.gif\"/>截止2009年底，已建成县城工业集中发展区面积6平方公里，加上乡镇特色工业小区，已集聚规模以上企业107家，比上年增加18家，占全县规模以上企业总数的71.3%，实现工业总产值66.2亿元。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;县城工业集中区有规模以上企业54家，实现工业总产值39.5亿元，工业增加值10.63亿元，主营业务收入38.8亿元，利税总额10082万元，利润总额6325万元，分别占到了全县规模以上企业\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;的44.4%、46.4%、44.5%、31.9%、31.5%。工业集中发展区已经成为县域经济发展的重要载体和排头兵 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '<p><img src=\"/ueditor/php/upload/image/20170629/1498719422139827.gif\" title=\"1498719422139827.gif\" alt=\"17.gif\"/><img src=\"/ueditor/php/upload/image/20170629/1498719427123475.gif\" title=\"1498719427123475.gif\" alt=\"18.gif\"/><img src=\"/ueditor/php/upload/image/20170629/1498719432101671.gif\" title=\"1498719432101671.gif\" alt=\"19.gif\"/></p>', '<p><img src=\"/ueditor/php/upload/image/20170629/1498719448732530.gif\" title=\"1498719448732530.gif\" alt=\"21.gif\"/></p><p>江县童游街道水尾村赤坭土布自然村人口不到100人，却有个不平凡的致富能手，他叫曹宗成，今年53岁。</p><p>　　</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;曹宗成致富的故事从1991年开始。当时，他一男一女两个孩子在城里读小学，一年借读费要200元，这对于曹宗成一家来说是笔大数目。曹宗成一家四口人，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;分得10亩农田，一年收入也在2000元左右。生活的艰辛，逼得曹宗成不得不另谋出路，赤坭土布后山四里处有一片30多亩的荒山，长年无人打理。曹宗成觉得可惜，他主动找到村委会，要求承包这片山。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;经过多次协商，曹宗成最终以一次性付4200元的价格取得这片山61年经营权。东拼西借，曹宗成终于凑足了这笔钱。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;1992年开春，曹宗成在山的东面种了10多亩蜜桔与蜜柚，在山的西面种下了20亩的板栗。1996年，蜜桔开始挂果，1997年蜜柚也开始挂果，看着树上的果实，曹宗成喜上眉梢，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;多年辛苦的劳作终于有了收获。天有不测风云，1997年，一场大雪把曹宗成六七年的心血化为乌有，所有的果树都被冻死了。曹宗成没有低头，他决定种一种效益快又能防冻的新品种水果——青花梨。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1998年春，曹宗成种了10亩青花梨。去年，这片青花梨开始结果。曹宗成采得梨子500多公斤。收入超过1000元。早先种下的板栗，2002年也开始挂果，开始有了收入。</p><p>&nbsp;</p><p>　　赤坭土布后山还有一片属于村集体的杨梅山，因为缺少管理，长势一直不好，村里多次提出要承包给村民管理，却一直无人问津。为了村集体的利益，曹宗成包下了这座山。在曹宗成起早贪黑的呵护下，\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;这片山不到两年便有了变化，杨梅越长越好，尽管去年大旱，但还是结出了累累硕果，曹宗成获得了近3000元的收入。</p><p>　　水尾村在建阳是以竹多出名的。早在1981年，联产承包到户时，曹宗成便在田头种下了第一批竹。自包了村里的山后，他种竹的劲头更大了，他在承包的山边空隙处、家里的自留地等处种下了竹子。\r\n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;现在，他的竹林总计达20多亩，每年可挖不少的鲜笋上市，总价值超过万元。</p><p>&nbsp;</p><p>　　山上空地多，与外界接触少，疾病传播渠道少，适宜于养鸡。1999年，曹宗成开始养鸡，数量达300只，收入超过千元。在之后的几年里，他不断追加投资，加大养鸡批次，收入也随之跟着增加。2003年。。。</p><p><br/></p>');
INSERT INTO `mytc_bis_account` VALUES ('7', 'chengboo', 'd289419a1c0b3b9c9741f4b14eb2fdbe', '3969', '11', '', '0', '1', '0', '0', '1498813301', '1498814795', '<p>一、中江柚品种特性及发展情况</p><p style=\"text-indent: 2em; line-height: 1.5em;\">中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易丰产，一年栽，3-4年可试花挂果，6-7年可丰产，亩产可达5000斤以上。其缺点是易裂果，裂果率可达10-20%，故应选择6-7月份水源能解决的地方发展栽培。</p><p>二、中江柚丰产优质栽培技术</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了使中江柚尽快投产，产生效益，为我们致富奔小康作出贡献，我们就应学习、掌握和采用先进的科学的中江柚栽培技术，该项技术可用八个字来概括，即：种（良种壮苗）、建（高标准建园）、肥（科学施肥）、水（适时排灌）、剪（合理修剪）、保（保花保果）、治（加强病虫防治）、促（控长促花）。具体来讲：</p><p>（一）积极推广优良品种，培育发展良种壮苗</p><p style=\"text-indent: 2em; line-height: 1.5em;\">良种壮苗是中江柚获得“三高”的物质基础，首先必须加强对中江柚的提纯选优，从中选出裂果率低或不裂果、丰产稳产优质的优选单株，进行繁殖推广；其次要培育良种壮苗，发展栽植良种壮苗，杜绝劣等苗出圃。苗木质量好坏，直接影响到成活率、树体生长发育、丰产性和果实品质等，良种壮苗要求：（1）无检疫性病虫害，如黄龙病、溃疡病、果实蝇等；（2）品种纯正，砧木优良，嫁接部位愈合良好；（3）苗木生长健壮，主干端直，一般苗高40厘米以上，茎粗0.8厘米以上，并有3个以上分枝，每枝长20厘米以上；（4）根系完整，主侧根发达，一般主根长16.5厘米以上，并且有3-4条侧根，须根发达。</p><p>（二）高标准建园，确保质量效益</p><p style=\"text-indent: 2em; line-height: 1.5em;\">柚树根深树高，经济寿命长，几十年上百年固定在同一地点生长结果。因此，新建柚园只有始终坚持高标准、高质量建园，才能获得高产、优质和高效益。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">1、应选择坡度在25度以下的山地、丘陵和排灌方便、土壤疏松湿润的地方建园。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2、整地时必须全面修筑等高反坡梯田和保土贮水竹节沟及梯田外缘作梯梗，并种上香根草、百喜草等</p><p style=\"text-indent: 2em; line-height: 1.5em;\">3、新建园应坚持“三大一篓”，即大穴、大肥、大苗和营养篓（袋）假植。所谓大穴，就是挖深、宽一米的壕沟或一米见方的穴；大肥，就是每立方米分3-4层填埋20公斤稻草或绿肥、厩肥100-150斤、石灰1-1.5斤、磷肥1-1.5公斤、麸饼1-1.5公斤作基肥；大苗，按良种壮苗出圃；营养篓（袋）假植带土移栽（营养土配置，以菜园土、水稻田表土、干塘泥、火土为基础，每立方土中加入人粪2担、磷肥2-3公斤、猪牛粪3-4担拌匀成堆，外用稀泥密封堆沤30-45天，9月份用营养篓（袋）装营养土假植小苗，第二年9月份带土移栽）。</p>', '', '', '');
INSERT INTO `mytc_bis_account` VALUES ('8', 'chengboos', '42d80891e2514896ce50eff5ca4f1b5b', '1000', '12', '', '0', '1', '0', '0', '1498814453', '1498814790', '<p style=\"line-height: 1.5em;\">一、中江柚品种特性及发展情况</p><p style=\"text-indent: 2em; line-height: 1.5em;\">中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易丰产，一年栽，3-4年可试花挂果，6-7年可丰产，亩产可达5000斤以上。其缺点是易裂果，裂果率可达10-20%，故应选择6-7月份水源能解决的地方发展栽培。</p><p style=\"line-height: 1.5em;\">二、中江柚丰产优质栽培技术</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了使中江柚尽快投产，产生效益，为我们致富奔小康作出贡献，我们就应学习、掌握和采用先进的科学的中江柚栽培技术，该项技术可用八个字来概括，即：种（良种壮苗）、建（高标准建园）、肥（科学施肥）、水（适时排灌）、剪（合理修剪）、保（保花保果）、治（加强病虫防治）、促（控长促花）。具体来讲：</p><p style=\"line-height: 1.5em;\">（一）积极推广优良品种，培育发展良种壮苗</p><p style=\"text-indent: 2em; line-height: 1.5em;\">良种壮苗是中江柚获得“三高”的物质基础，首先必须加强对中江柚的提纯选优，从中选出裂果率低或不裂果、丰产稳产优质的优选单株，进行繁殖推广；其次要培育良种壮苗，发展栽植良种壮苗，杜绝劣等苗出圃。苗木质量好坏，直接影响到成活率、树体生长发育、丰产性和果实品质等，良种壮苗要求：（1）无检疫性病虫害，如黄龙病、溃疡病、果实蝇等；（2）品种纯正，砧木优良，嫁接部位愈合良好；（3）苗木生长健壮，主干端直，一般苗高40厘米以上，茎粗0.8厘米以上，并有3个以上分枝，每枝长20厘米以上；（4）根系完整，主侧根发达，一般主根长16.5厘米以上，并且有3-4条侧根，须根发达。</p><p style=\"line-height: 1.5em;\">（二）高标准建园，确保质量效益</p><p style=\"text-indent: 2em; line-height: 1.5em;\">柚树根深树高，经济寿命长，几十年上百年固定在同一地点生长结果。因此，新建柚园只有始终坚持高标准、高质量建园，才能获得高产、优质和高效益。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">1、应选择坡度在25度以下的山地、丘陵和排灌方便、土壤疏松湿润的地方建园。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2、整地时必须全面修筑等高反坡梯田和保土贮水竹节沟及梯田外缘作梯梗，并种上香根草、百喜草等。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">3、新建园应坚持“三大一篓”，即大穴、大肥、大苗和营养篓（袋）假植。所谓大穴，就是挖深、宽一米的壕沟或一米见方的穴；大肥，就是每立方米分3-4层填埋20公斤稻草或绿肥、厩肥100-150斤、石灰1-1.5斤、磷肥1-1.5公斤、麸饼1-1.5公斤作基肥；大苗，按良种壮苗出圃；营养篓（袋）假植带土移栽（营养土配置，以菜园土、水稻田表土、干塘泥、火土为基础，每立方土中加入人粪2担、磷肥2-3公斤、猪牛粪3-4担拌匀成堆，外用稀泥密封堆沤30-45天，9月份用营养篓（袋）装营养土假植小苗，第二年9月份带土移栽）。</p>', '', '', '');
INSERT INTO `mytc_bis_account` VALUES ('9', 'chenbboo', 'ba3e094a196ea123d8c79ebc5bdd2d3e', '5916', '14', '', '0', '1', '0', '1', '1498815868', '1498816544', '<p style=\"line-height: 1.5em;\">一、中江柚品种特性及发展情况</p><p style=\"text-indent: 2em; line-height: 1.5em;\">中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易丰产，一年栽，3-4年可试花挂果，6-7年可丰产，亩产可达5000斤以上。其缺点是易裂果，裂果率可达10-20%，故应选择6-7月份水源能解决的地方发展栽培。</p><p style=\"line-height: 1.5em;\">二、中江柚丰产优质栽培技术</p><p style=\"text-indent: 2em; line-height: 1.5em;\">为了使中江柚尽快投产，产生效益，为我们致富奔小康作出贡献，我们就应学习、掌握和采用先进的科学的中江柚栽培技术，该项技术可用八个字来概括，即：种（良种壮苗）、建（高标准建园）、肥（科学施肥）、水（适时排灌）、剪（合理修剪）、保（保花保果）、治（加强病虫防治）、促（控长促花）。具体来讲：</p><p style=\"line-height: 1.5em;\">（一）积极推广优良品种，培育发展良种壮苗</p><p style=\"text-indent: 2em; line-height: 1.5em;\">良种壮苗是中江柚获得“三高”的物质基础，首先必须加强对中江柚的提纯选优，从中选出裂果率低或不裂果、丰产稳产优质的优选单株，进行繁殖推广；其次要培育良种壮苗，发展栽植良种壮苗，杜绝劣等苗出圃。苗木质量好坏，直接影响到成活率、树体生长发育、丰产性和果实品质等，良种壮苗要求：（1）无检疫性病虫害，如黄龙病、溃疡病、果实蝇等；（2）品种纯正，砧木优良，嫁接部位愈合良好；（3）苗木生长健壮，主干端直，一般苗高40厘米以上，茎粗0.8厘米以上，并有3个以上分枝，每枝长20厘米以上；（4）根系完整，主侧根发达，一般主根长16.5厘米以上，并且有3-4条侧根，须根发达。</p><p style=\"line-height: 1.5em;\">（二）高标准建园，确保质量效益</p><p style=\"text-indent: 2em; line-height: 1.5em;\">柚树根深树高，经济寿命长，几十年上百年固定在同一地点生长结果。因此，新建柚园只有始终坚持高标准、高质量建园，才能获得高产、优质和高效益。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">1、应选择坡度在25度以下的山地、丘陵和排灌方便、土壤疏松湿润的地方建园。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">2、整地时必须全面修筑等高反坡梯田和保土贮水竹节沟及梯田外缘作梯梗，并种上香根草、百喜草等。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">3、新建园应坚持“三大一篓”，即大穴、大肥、大苗和营养篓（袋）假植。所谓大穴，就是挖深、宽一米的壕沟或一米见方的穴；大肥，就是每立方米分3-4层填埋20公斤稻草或绿肥、厩肥100-150斤、石灰1-1.5斤、磷肥1-1.5公斤、麸饼1-1.5公斤作基肥；大苗，按良种壮苗出圃；营养篓（袋）假植带土移栽（营养土配置，以菜园土、水稻田表土、干塘泥、火土为基础，每立方土中加入人粪2担、磷肥2-3公斤、猪牛粪3-4担拌匀成堆，外用稀泥密封堆沤30-45天，9月份用营养篓（袋）装营养土假植小苗，第二年9月份带土移栽）。</p>', '<img src=\"/ueditor/php/upload/image/20170630/1498815587602617.gif\" title=\"1498815587602617.gif\" alt=\"20.gif\" style=\"float: left;\"/><p style=\"text-indent: 2em;\"><span style=\"font-size: 14px;\">截止2009年底，已建成县城工业集中发展区面积6平方公里，加上乡镇特色工业小区，已集聚规模以上企业107家，比上年增加18家，占全县规模以上企业总数的71.3%，实现工业总产值66.2亿元。县城工业集中区有规模以上企业54家，实现工业总产值39.5亿元，工业增加值10.63亿元，主营业务收入38.8亿元，利税总额10082万元，利润总额6325万元，分别占到了全县规模以上企业的44.4%、46.4%、44.5%、31.9%、31.5%。工业集中发展区已经成为县域经济发展的重要载体和排头兵</span></p>', '<p style=\"text-indent: 0em;\"><img src=\"/ueditor/php/upload/image/20170630/1498815619115505.gif\" title=\"1498815619115505.gif\" alt=\"1498815619115505.gif\" width=\"334\" height=\"255\" border=\"0\" vspace=\"10\" style=\"width: 334px; height: 255px;margin-right:10px\"/><img src=\"/shop/public/upload/image/20170630/1498815624100302.gif\" title=\"1498815624100302.gif\" alt=\"1498815624100302.gif\" width=\"346\" height=\"255\" border=\"0\" vspace=\"10\" style=\"width: 346px; height: 255px;\"/><img src=\"/ueditor/php/upload/image/20170630/1498815629429457.gif\" title=\"1498815629429457.gif\" alt=\"19.gif\"/></p>', '<img src=\"/ueditor/php/upload/image/20170630/1498815717200657.gif\" title=\"1498815717200657.gif\" alt=\"21.gif\" style=\"float: left;\"/><p style=\"text-indent: 2em; line-height: 1.5em;\">江县童游街道水尾村赤坭土布自然村人口不到100人，却有个不平凡的致富能手，他叫曹宗成，今年53岁。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">曹宗成致富的故事从1991年开始。当时，他一男一女两个孩子在城里读小学，一年借读费要200元，这对于曹宗成一家来说是笔大数目。曹宗成一家四口人，分得10亩农田，一年收入也在2000元左右。生活的艰辛，逼得曹宗成不得不另谋出路，赤坭土布后山四里处有一片30多亩的荒山，长年无人打理。曹宗成觉得可惜，他主动找到村委会，要求承包这片山。经过多次协商，曹宗成最终以一次性付4200元的价格取得这片山61年经营权。东拼西借，曹宗成终于凑足了这笔钱。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">1992年开春，曹宗成在山的东面种了10多亩蜜桔与蜜柚，在山的西面种下了20亩的板栗。1996年，蜜桔开始挂果，1997年蜜柚也开始挂果，看着树上的果实，曹宗成喜上眉梢，多年辛苦的劳作终于有了收获。天有不测风云，1997年，一场大雪把曹宗成六七年的心血化为乌有，所有的果树都被冻死了。曹宗成没有低头，他决定种一种效益快又能防冻的新品种水果——青花梨。1998年春，曹宗成种了10亩青花梨。去年，这片青花梨开始结果。曹宗成采得梨子500多公斤。收入超过1000元。早先种下的板栗，2002年也开始挂果，开始有了收入。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">赤坭土布后山还有一片属于村集体的杨梅山，因为缺少管理，长势一直不好，村里多次提出要承包给村民管理，却一直无人问津。为了村集体的利益，曹宗成包下了这座山。在曹宗成起早贪黑的呵护下，这片山不到两年便有了变化，杨梅越长越好，尽管去年大旱，但还是结出了累累硕果，曹宗成获得了近3000元的收入。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">水尾村在建阳是以竹多出名的。早在1981年，联产承包到户时，曹宗成便在田头种下了第一批竹。自包了村里的山后，他种竹的劲头更大了，他在承包的山边空隙处、家里的自留地等处种下了竹子。现在，他的竹林总计达20多亩，每年可挖不少的鲜笋上市，总价值超过万元。</p><p style=\"text-indent: 2em; line-height: 1.5em;\">山上空地多，与外界接触少，疾病传播渠道少，适宜于养鸡。1999年，曹宗成开始养鸡，数量达300只，收入超过千元。在之后的几年里，他不断追加投资，加大养鸡批次，收入也随之跟着增加。2003年。。。</p>');
INSERT INTO `mytc_bis_account` VALUES ('10', 'admin', '749050132006298febb377aebb740bf1', '2824', '15', '', '0', '1', '0', '1', '1499158382', '1499158382', '<p>dfsdafsdfa</p>', '<p>dfsdf</p>', '<p>dsfasf</p>', '<p>dsfafd</p>');

-- ----------------------------
-- Table structure for `mytc_bis_location`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_bis_location`;
CREATE TABLE `mytc_bis_location` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `notes` varchar(255) NOT NULL,
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_id` int(11) unsigned NOT NULL DEFAULT '0',
  `open_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_main` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `api_address` varchar(255) NOT NULL DEFAULT '',
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `city_path` varchar(50) NOT NULL DEFAULT '',
  `category_id` int(11) unsigned NOT NULL DEFAULT '0',
  `category_path` varchar(50) NOT NULL DEFAULT '',
  `bank_info` varchar(50) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `bis_id` (`bis_id`),
  KEY `category_id` (`category_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_bis_location
-- ----------------------------
INSERT INTO `mytc_bis_location` VALUES ('1', 'dafdsf', '/shop/public/upload\\20170627\\23b2f2af1c49be18b4078fd4df0cbeb8.jpg', 'lkjsdhfhasdkj', '7498789', 'dlsfas', '', '', '', '5', '2017', '1', 'lkjsdhfhasdkj', '1', '2', '2', '14', '465466489431349865', '0', '0', '1498557598', '1498786735');
INSERT INTO `mytc_bis_location` VALUES ('2', 'dafdsf', '/shop/public/upload\\20170627\\23b2f2af1c49be18b4078fd4df0cbeb8.jpg', 'lkjsdhfhasdkj', '7498789', 'dlsfas', '', '', '', '6', '2017', '1', 'lkjsdhfhasdkj', '1', '2', '2', '14', '465466489431349865', '0', '0', '1498557600', '1498721861');
INSERT INTO `mytc_bis_location` VALUES ('3', 'dafdsfdfgsfdg', '/shop/public/upload\\20170628\\2070cac73590819eaab2f41701789500.jpg', '打发斯蒂芬', '7498789', '发的是热', '', '', '', '7', '2017', '1', '打发斯蒂芬', '1', '3', '4', '17', '465466489431349865', '0', '0', '1498609513', '1498786686');
INSERT INTO `mytc_bis_location` VALUES ('4', 'dafdsfdfgsfdg', '/shop/public/upload\\20170628\\2070cac73590819eaab2f41701789500.jpg', '打发斯蒂芬', '7498789', '发的是热', '', '', '', '8', '2017', '1', '打发斯蒂芬', '1', '3', '4', '17', '465466489431349865', '0', '0', '1498611750', '1498786691');
INSERT INTO `mytc_bis_location` VALUES ('5', '豆腐三三', '/shop/public/upload\\20170628\\650d24855cec826834c6ef63904d9288.jpg', '大', '565', '范德萨发', '', '', '', '7', '2018', '2', '', '1', '', '2', '', '', '0', '0', '1498633547', '1498721893');
INSERT INTO `mytc_bis_location` VALUES ('6', '大哥大公司', '/shop/public/upload\\20170628\\8161304e49809bcfb2f0ab3e8d1971eb.jpg', '的收发文', '698998', '的说法是否都是', '', '', '', '7', '989798', '2', '的收发文', '1', '2', '2', '13', '', '0', '0', '1498635267', '1498818322');
INSERT INTO `mytc_bis_location` VALUES ('7', '反倒是发生的', '/shop/public/upload\\20170628\\42206f9c7f8f3609129768b779c1e252.jpg', '速度范围', '546+7', '风复古色', '', '', '', '7', '424545', '2', '速度范围', '1', '3', '3', '15', '', '0', '0', '1498636904', '1498818308');
INSERT INTO `mytc_bis_location` VALUES ('8', 'dafdsfdfgsfdg', '/shop/public/upload\\20170628\\9682c7481b91bb17fbb69ffa3ddf505f.jpg', '打发斯蒂芬', '7498789', '发的是热', '', '', '', '7', '2017', '2', '打发斯蒂芬', '1', '', '4', '', '', '0', '0', '1498641070', '1498818289');
INSERT INTO `mytc_bis_location` VALUES ('9', '都说了附近拉开始的减肥', '/shop/public/upload\\20170629\\88e443eced55200833ef079d865437c8.gif', '日发给对方给房东说', '12151545', '告诉对方', '', '', '', '9', '2017', '1', '日发给对方给房东说', '1', '', '3', '15', '6574456', '0', '0', '1498703083', '1498786695');
INSERT INTO `mytc_bis_location` VALUES ('10', '宏波养殖实业有限公司', '/shop/public/upload\\20170629\\da3e76d2965f676ce9b3f5bd1bc9817d.gif', '中国四川省德阳市中江县双龙镇 ', '08387102727', '陈波', '<p style=\"text-indent: 2em\"><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</p>', '', '', '10', '2017', '1', '中国四川省德阳市中江县双龙镇 ', '1', '', '5', '', '4564543432131', '0', '0', '1498719462', '1498814799');
INSERT INTO `mytc_bis_location` VALUES ('11', '宏波养殖实业有限公司', '/shop/public/upload\\20170630\\fe70837a4e6c885076c5c8c01e006ff7.gif', '中国四川德阳市四川省德阳市中江县双龙镇 ', '13881801576', '陈波', '<p style=\"text-indent: 2em\"><strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。</p>', '', '', '11', '2017', '1', '中国四川德阳市四川省德阳市中江县双龙镇 ', '1', '5', '5', '18', '54456565466545612', '0', '0', '1498813301', '1498814795');
INSERT INTO `mytc_bis_location` VALUES ('12', '宏波养殖实业有限公司', '/shop/public/upload\\20170630\\7e6d33a093c6480dd945039c01d0efff.gif', '中国四川德阳市四川省德阳市中江县双龙镇 ', '13881801576', '陈波', '', '', '', '12', '2017', '1', '中国四川德阳市四川省德阳市中江县双龙镇 ', '1', '5', '5', '', '54456565466545612', '0', '0', '1498814453', '1498814790');
INSERT INTO `mytc_bis_location` VALUES ('13', '宏波养殖实业有限公司', '/shop/public/upload\\20170630\\d1f3bf0609c08e174112ff3ad2a6297d.gif', '中国四川德阳市四川省德阳市中江县双龙镇 ', '13881801576', '陈波', '<p><strong style=\"line-height: 24px; white-space: normal;\">宏波养殖实业有限公司</strong><span style=\"line-height: 24px;\">创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成', '', '', '13', '2017', '1', '中国四川德阳市四川省德阳市中江县双龙镇 ', '1', '5', '5', '18', '54864165613265', '0', '0', '1498815850', '1498816015');
INSERT INTO `mytc_bis_location` VALUES ('14', '宏波养殖实业有限公司', '/shop/public/upload\\20170630\\d1f3bf0609c08e174112ff3ad2a6297d.gif', '中国四川德阳市四川省德阳市中江县双龙镇 ', '13881801576', '陈波', '<p><strong style=\"line-height: 24px; white-space: normal;\">宏波养殖实业有限公司</strong><span style=\"line-height: 24px;\">创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成', '', '', '14', '2017', '1', '中国四川德阳市四川省德阳市中江县双龙镇 ', '1', '5', '5', '18', '54864165613265', '0', '1', '1498815868', '1498816544');
INSERT INTO `mytc_bis_location` VALUES ('15', 'ddfds ', '/shop/public/upload\\20170704\\b979034ce3f924113c2c0d863400a240.jpg', 'dfdfa', '4654645', 'fgsa', '<p>dfdfsd</p>', '', '', '15', '2017', '1', 'dfdfa', '1', '2', '2', '14', '45646465', '0', '1', '1499158382', '1499158382');

-- ----------------------------
-- Table structure for `mytc_category`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_category`;
CREATE TABLE `mytc_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `uname` varchar(50) NOT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_category
-- ----------------------------
INSERT INTO `mytc_category` VALUES ('2', '农作物类', '', '0', '100', '1', '1', '1498461290', '1498461290');
INSERT INTO `mytc_category` VALUES ('3', '农机械类', '', '0', '100', '1', '1', '1498461348', '1498522428');
INSERT INTO `mytc_category` VALUES ('4', '养殖类', '', '0', '100', '1', '1', '1498461357', '1498461357');
INSERT INTO `mytc_category` VALUES ('5', '蔬果类', '', '0', '100', '1', '1', '1498461373', '1498525069');
INSERT INTO `mytc_category` VALUES ('6', '特产类', '', '0', '101', '1', '1', '1498461382', '1498522426');
INSERT INTO `mytc_category` VALUES ('7', '其他', '', '0', '102', '1', '1', '1498461391', '1498522433');
INSERT INTO `mytc_category` VALUES ('8', 'nihao', '', '0', '100', '1', '-1', '1498469883', '1498469902');
INSERT INTO `mytc_category` VALUES ('9', '行业信息', '', '0', '100', '2', '1', '1498524948', '1498524948');
INSERT INTO `mytc_category` VALUES ('10', '展会信息', '', '0', '100', '2', '1', '1498524963', '1498524963');
INSERT INTO `mytc_category` VALUES ('11', '市场信息', '', '0', '100', '2', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('13', '谷物', '', '2', '200', '1', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('14', '豆类', '', '2', '200', '1', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('15', '收割机', '', '3', '300', '1', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('16', '山羊', '', '4', '333', '1', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('17', '牛', '', '4', '333', '1', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('18', '水果及加工品', '', '5', '555', '1', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('19', '最新信息', '', '0', '455', '2', '1', '1498524980', '1498524980');
INSERT INTO `mytc_category` VALUES ('20', '合作社介绍', 'INTRODUCTION', '0', '100', '3', '1', '1498788042', '1498788042');
INSERT INTO `mytc_category` VALUES ('21', '产品介绍', 'PRODUCTS', '0', '100', '3', '1', '1498788061', '1498788061');
INSERT INTO `mytc_category` VALUES ('22', '技术支持', 'TECHNOLOGY', '0', '100', '3', '1', '1498788070', '1498788070');
INSERT INTO `mytc_category` VALUES ('23', '行业前景', 'OUTLOOK', '0', '100', '3', '1', '1498788087', '1498788087');
INSERT INTO `mytc_category` VALUES ('24', '致富故事', 'BECOME', '0', '100', '3', '1', '1498788101', '1498788101');
INSERT INTO `mytc_category` VALUES ('25', '生产基地', 'BASE', '0', '100', '3', '1', '1498788117', '1498788117');

-- ----------------------------
-- Table structure for `mytc_city`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_city`;
CREATE TABLE `mytc_city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `uname` varchar(50) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uname` (`uname`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_city
-- ----------------------------
INSERT INTO `mytc_city` VALUES ('1', '中江', 'zjiang', '0', '0', '111', '1', '0', '0');
INSERT INTO `mytc_city` VALUES ('2', '龙台', 'ltai', '1', '0', '100', '1', '0', '0');
INSERT INTO `mytc_city` VALUES ('3', '继光', 'jg', '1', '0', '100', '1', '0', '0');
INSERT INTO `mytc_city` VALUES ('4', '广福', 'guangf', '1', '0', '100', '1', '0', '0');
INSERT INTO `mytc_city` VALUES ('5', '双龙镇', 'slong', '1', '0', '100', '1', '0', '0');

-- ----------------------------
-- Table structure for `mytc_deal`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_deal`;
CREATE TABLE `mytc_deal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `se_category_id` int(11) NOT NULL DEFAULT '0',
  `bis_id` int(11) NOT NULL DEFAULT '0',
  `format` varchar(50) NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `origin_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `city_id` int(11) NOT NULL DEFAULT '0',
  `buy_count` int(11) NOT NULL DEFAULT '0',
  `total_count` int(11) NOT NULL DEFAULT '0',
  `xpoint` varchar(20) NOT NULL DEFAULT '',
  `ypoint` varchar(20) NOT NULL DEFAULT '',
  `bis_account_id` int(10) NOT NULL DEFAULT '0',
  `balance_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `start_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `se_category_id` (`se_category_id`),
  KEY `city_id` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_deal
-- ----------------------------
INSERT INTO `mytc_deal` VALUES ('1', '中江柚', '5', '18', '14', '	4*500G', '1', '0', '/shop/public/upload\\20170629\\1d39f5e8c43f1862d2c698622b79461b.gif', '<p>&nbsp; 中江柚，以独特的风味著称。果大，皮薄，可食比例大。果肉乳白微黄，质地脆嫩化渣，酸甜适度，汁多味美，营养丰富，有止咳，化痰，顺气，平喘的药用功能。中江柚栽植历史悠久，但在漫长的岁月里，由于一般农民未掌握果树嫁接管理的科学技术，故发展缓慢。</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;	</p><p>&nbsp;&nbsp;&nbsp;&nbsp;1975年柑桔选种，中江柚以它早产性，丰产性，耐贮性、抗逆性等各项指标均超过当地普通柚种，受到果树专家和有关部门重视，列为我县开发农业的重点项目。国家林业部列为全国“八五”百项林产品重点开发科技项目。1986年在全省柚类鉴评会上获唯一的肉质满分。1990年在德阳市柑桔鉴定会上又位居榜首。1991年在全省水果评审会上被专家评为肉质第一名，果形第二名的优质水果。</p><p><br/></p>', '7500.00', '1', '0', '200', '', '', '3', '0.00', '0', '1', '1498702543', '1498702543', '2017');
INSERT INTO `mytc_deal` VALUES ('2', '中江瓜蒌', '5', '18', '7', '', '1', '1', '/shop/public/upload\\20170629\\2fec158eec098e33b52277081880238b.gif', '<p>中江瓜篓</p>', '4500.00', '1', '0', '55', '', '', '3', '0.00', '0', '1', '1498716044', '1498716044', '2017');
INSERT INTO `mytc_deal` VALUES ('3', '中江挂面', '6', '0', '7', '', '1', '0', '/shop/public/upload\\20170629\\e75ab830dd9c56461a1cb7078115deff.gif', '<p>中江挂面</p>', '22.00', '1', '0', '75', '', '', '3', '0.00', '0', '1', '1498716223', '1498716223', '2017');
INSERT INTO `mytc_deal` VALUES ('4', '中江白芍', '2', '13', '7', '', '1', '0', '/shop/public/upload\\20170629\\3f57c3042ffb8e0971d1997d5dbc9842.gif', '<p>中江白芍</p>', '66.00', '1', '0', '736', '', '', '3', '0.00', '0', '1', '1498716284', '1498716284', '2017');
INSERT INTO `mytc_deal` VALUES ('5', '中江竹编', '7', '0', '7', '', '1', '0', '/shop/public/upload\\20170629\\b372031543841678bab5a6aa6dc1439d.gif', '<p>中江竹编</p>', '22.00', '1', '0', '87', '', '', '3', '0.00', '0', '1', '1498716576', '1498716576', '2017');
INSERT INTO `mytc_deal` VALUES ('6', '中江八宝油糕', '6', '0', '7', '', '1', '0', '/shop/public/upload\\20170629\\725bf98c603ed62bb76ccd4af5f7bbf4.gif', '<p>中江八宝油糕</p>', '45.00', '1', '0', '789', '', '', '3', '0.00', '10', '1', '1498716616', '1498718501', '2017');
INSERT INTO `mytc_deal` VALUES ('7', '供应特产极品海参', '6', '0', '7', '', '0', '0', '/shop/public/upload\\20170629\\52d4ecdac30a2320d635f158880daa62.gif', '', '454.00', '1', '0', '200', '', '', '3', '0.00', '0', '-1', '1498716716', '1498718189', '2017');
INSERT INTO `mytc_deal` VALUES ('8', '供应特产极品海参', '6', '0', '7', '', '0', '0', '/shop/public/upload\\20170629\\52d4ecdac30a2320d635f158880daa62.gif', '<p>&nbsp; 经审核批准，5种食品添加剂新品种包括焦磷酸一氢三钠、氧化亚氮、乳糖酶、柠檬酸钙(三水)、右旋糖酐酶。<br/>&nbsp;&nbsp;&nbsp;&nbsp;此外，卫生部还批准乳酸钙等13种食品添加剂、白油(液体石蜡)等5种食品用加工助剂和铁等8种食品营养强化剂扩大使用范围及用量，增补已批准食品添加剂葡萄糖酸-δ-内酯的质量规格要求......</p>', '454.00', '1', '0', '200', '', '', '3', '0.00', '11', '1', '1498717750', '1498718809', '2017');

-- ----------------------------
-- Table structure for `mytc_inquiry`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_inquiry`;
CREATE TABLE `mytc_inquiry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(60) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_inquiry
-- ----------------------------
INSERT INTO `mytc_inquiry` VALUES ('1', '求购玉米小麦大豆高粱', '等等', '786978', '0', '1', '1498785875', '1498785875');
INSERT INTO `mytc_inquiry` VALUES ('2', '求购玉米小麦大豆高粱', '如果通风', '5446464', '0', '1', '1498785995', '1498785995');
INSERT INTO `mytc_inquiry` VALUES ('3', '求购玉米小麦大豆高粱', '等等', '786978', '0', '1', '1498786003', '1498786003');
INSERT INTO `mytc_inquiry` VALUES ('4', '求购玉米小麦大豆高粱', '求购玉米小麦大豆高粱', '7587987', '0', '1', '1498786013', '1498786013');
INSERT INTO `mytc_inquiry` VALUES ('5', '求购玉米小麦大豆高粱', '等等', '45685', '0', '1', '1498786070', '1498786070');
INSERT INTO `mytc_inquiry` VALUES ('6', '求购玉米小麦大豆高粱', '求购玉米小麦大豆高粱', '786978', '0', '1', '1498786083', '1498786083');

-- ----------------------------
-- Table structure for `mytc_message`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_message`;
CREATE TABLE `mytc_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(50) NOT NULL DEFAULT '0',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_message
-- ----------------------------
INSERT INTO `mytc_message` VALUES ('1', '发生的', '如果通风', '', '5446464', '0', '0', '1498724915', '1498724915');
INSERT INTO `mytc_message` VALUES ('5', '请问我要来加盟你们怎么操作呢？', '你好', '', '156195949', '0', '0', '1498818017', '1498818017');
INSERT INTO `mytc_message` VALUES ('6', '请问我要来加盟你们怎么操作呢？', '你不好', '', '446656454', '0', '0', '1498818034', '1498818034');

-- ----------------------------
-- Table structure for `mytc_news`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_news`;
CREATE TABLE `mytc_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `content` varchar(60) NOT NULL DEFAULT '',
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL,
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_news
-- ----------------------------
INSERT INTO `mytc_news` VALUES ('1', '​大量优质新鲜的草莓上市啦！', '<p>大量优质新鲜的草莓上市啦！</p>', '10', '0', '', '0', '1', '1498731308', '1498731308');
INSERT INTO `mytc_news` VALUES ('2', '质优价廉的山核桃大量上市..！', '<p>质优价廉的山核桃大量上市..！</p>', '10', '0', '', '0', '1', '1498731308', '1498731308');
INSERT INTO `mytc_news` VALUES ('3', '大量供应红富士苹果！', '<p>大量供应红富士苹果！</p>', '10', '0', '', '0', '1', '1498731308', '1498731308');
INSERT INTO `mytc_news` VALUES ('4', '春季时令蔬菜已上市！', '<p>春季时令蔬菜已上市！</p>', '10', '0', '', '0', '1', '1498731335', '1498731335');
INSERT INTO `mytc_news` VALUES ('5', '山东大雨浇“落”无花果 斤..', '<p>山东大雨浇“落”无花果 斤..</p>', '11', '0', '', '0', '1', '1498731383', '1498731383');
INSERT INTO `mytc_news` VALUES ('6', '江苏常州：近期“菜走势..', '<p>江苏常州：近期“菜走势..</p>', '11', '0', '', '0', '1', '1498731399', '1498731399');
INSERT INTO `mytc_news` VALUES ('7', '国庆将至 四川内江提前入..', '<p>国庆将至 四川内江提前入..</p>', '11', '0', '', '0', '1', '1498731413', '1498731413');
INSERT INTO `mytc_news` VALUES ('8', '国庆节前山东青水果价格..', '<p>国庆节前山东青水果价格..</p>', '11', '0', '', '0', '1', '1498731427', '1498731427');
INSERT INTO `mytc_news` VALUES ('9', '山东大雨浇“落”无花果 斤..', '<p>山东大雨浇“落”无花果 斤..</p>', '9', '0', '', '0', '1', '1498731459', '1498731459');
INSERT INTO `mytc_news` VALUES ('10', '江苏常州：近期“菜走势..', '<p>江苏常州：近期“菜走势..</p>', '9', '0', '', '0', '1', '1498731478', '1498731478');
INSERT INTO `mytc_news` VALUES ('11', '国庆将至 四川内江提前入..', '<p>国庆将至 四川内江提前入..</p>', '9', '0', '', '0', '1', '1498731490', '1498731490');
INSERT INTO `mytc_news` VALUES ('12', '国庆节前山东青水果价格..', '<p>国庆节前山东青水果价格..</p>', '9', '0', '', '0', '1', '1498731508', '1498731508');

-- ----------------------------
-- Table structure for `mytc_order`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_order`;
CREATE TABLE `mytc_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `out_number` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `pay_in` int(11) NOT NULL,
  `total_price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `address` varchar(60) NOT NULL DEFAULT '''''',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_order
-- ----------------------------
INSERT INTO `mytc_order` VALUES ('1', '878121499161621', '1', '2', '35', '273594.00', '3', '0', '1', '1499161621', '1499505064');
INSERT INTO `mytc_order` VALUES ('2', '715791499414261', '1', '1', '0', '264.00', '\'\'', '0', '1', '1499414261', '1499414270');
INSERT INTO `mytc_order` VALUES ('3', '861391499485670', '1', '0', '0', '0.00', '\'\'', '0', '1', '1499485670', '1499485670');

-- ----------------------------
-- Table structure for `mytc_order_deal`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_order_deal`;
CREATE TABLE `mytc_order_deal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `out_number` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `deal_name` varchar(100) NOT NULL DEFAULT '',
  `image` varchar(200) NOT NULL DEFAULT '',
  `price` decimal(20,2) NOT NULL DEFAULT '0.00',
  `count` int(11) NOT NULL DEFAULT '0',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_order_deal
-- ----------------------------
INSERT INTO `mytc_order_deal` VALUES ('27', '878121499161621', '1', '4', '中江白芍', '/shop/public/upload\\20170629\\3f57c3042ffb8e0971d1997d5dbc9842.gif', '66.00', '9', '0', '1', '1499161621', '1499484308');
INSERT INTO `mytc_order_deal` VALUES ('28', '878121499161621', '1', '1', '中江柚', '/shop/public/upload\\20170629\\1d39f5e8c43f1862d2c698622b79461b.gif', '7500.00', '7', '0', '1', '1499161681', '1499416904');
INSERT INTO `mytc_order_deal` VALUES ('29', '878121499161621', '1', '2', '中江瓜蒌', '/shop/public/upload\\20170629\\2fec158eec098e33b52277081880238b.gif', '4500.00', '49', '0', '1', '1499161884', '1499416899');
INSERT INTO `mytc_order_deal` VALUES ('30', '715791499414261', '1', '4', '中江白芍', '/shop/public/upload\\20170629\\3f57c3042ffb8e0971d1997d5dbc9842.gif', '66.00', '4', '0', '1', '1499414261', '1499414269');
INSERT INTO `mytc_order_deal` VALUES ('31', '861391499485670', '1', '4', '中江白芍', '/shop/public/upload\\20170629\\3f57c3042ffb8e0971d1997d5dbc9842.gif', '66.00', '8', '0', '1', '1499485670', '1499486338');

-- ----------------------------
-- Table structure for `mytc_pay`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_pay`;
CREATE TABLE `mytc_pay` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL,
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_pay
-- ----------------------------
INSERT INTO `mytc_pay` VALUES ('32', '中国银行', 'zgbc', '/shop/public/upload\\20170708\\58cad4d5673aaf1bbdf2b7e4032313be.gif', '1', '0', '1', '1499499404', '1499499404');
INSERT INTO `mytc_pay` VALUES ('33', '工商银行', 'gsbc', '/shop/public/upload\\20170708\\c283435ce3ba3ddf3dca5565f4fa78af.gif', '1', '0', '1', '1499499442', '1499499442');
INSERT INTO `mytc_pay` VALUES ('34', '农业银行', 'nybc', '/shop/public/upload\\20170708\\be46bf6515a117b3138f46635fb139db.gif', '1', '0', '1', '1499499462', '1499499462');
INSERT INTO `mytc_pay` VALUES ('35', '建设银行', 'jsbc', '/shop/public/upload\\20170708\\d1ea1c13e18248e2eb3e0f11cb251f7f.gif', '1', '0', '1', '1499499481', '1499499481');
INSERT INTO `mytc_pay` VALUES ('36', '光大银行', 'gdbc', '/shop/public/upload\\20170708\\88e39fb6a997d0fbf0d32f86a269f2cf.gif', '1', '0', '1', '1499499500', '1499499500');
INSERT INTO `mytc_pay` VALUES ('37', '招商银行', 'zsbc', '/shop/public/upload\\20170708\\940c77c5bffd554f687169eae7b5b570.gif', '1', '0', '1', '1499499517', '1499499517');
INSERT INTO `mytc_pay` VALUES ('38', '平安银行', 'pabc', '/shop/public/upload\\20170708\\477b0fc05489c180cf76a6f1da950018.gif', '1', '0', '1', '1499499541', '1499499541');
INSERT INTO `mytc_pay` VALUES ('39', '邮政储蓄银行', 'yzbc', '/shop/public/upload\\20170708\\68caca7db1b78857415056e7dbbff2f8.gif', '1', '0', '1', '1499499564', '1499499564');
INSERT INTO `mytc_pay` VALUES ('40', '兴业银行', 'xybc', '/shop/public/upload\\20170708\\0a960d5783dd34b965fb3db69f1f5c20.gif', '1', '0', '1', '1499499594', '1499499594');
INSERT INTO `mytc_pay` VALUES ('41', '民生银行', 'msbc', '/shop/public/upload\\20170708\\f03c81862115558920f1f00e2ab87de9.gif', '1', '0', '1', '1499499623', '1499499623');
INSERT INTO `mytc_pay` VALUES ('42', '财付通', 'cft', '/shop/public/upload\\20170708\\61e76c8f13f93eb8ff73fa4d8eebd0bf.jpg', '2', '0', '1', '1499499653', '1499499653');
INSERT INTO `mytc_pay` VALUES ('43', '支付宝', 'zfb', '/shop/public/upload\\20170708\\acde6abd8ee00657ae90a8b1c6e51e90.jpg', '3', '0', '1', '1499499670', '1499499670');

-- ----------------------------
-- Table structure for `mytc_toupiao`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_toupiao`;
CREATE TABLE `mytc_toupiao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sore` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `work` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_toupiao
-- ----------------------------
INSERT INTO `mytc_toupiao` VALUES ('1', '7', '余杭小镇', '余杭小镇', '余杭小镇');

-- ----------------------------
-- Table structure for `mytc_user`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_user`;
CREATE TABLE `mytc_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `code` varchar(10) NOT NULL DEFAULT '',
  `last_login_ip` varchar(20) NOT NULL DEFAULT '',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0',
  `email` varchar(30) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `listorder` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_user
-- ----------------------------
INSERT INTO `mytc_user` VALUES ('1', 'user', '08185c52598d6af8bca128e34cd3498f', '50638', '', '0', '75757654654@qq.com.cm', '', '0', '1', '1499075151', '1499075151');

-- ----------------------------
-- Table structure for `mytc_user_info`
-- ----------------------------
DROP TABLE IF EXISTS `mytc_user_info`;
CREATE TABLE `mytc_user_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL DEFAULT '',
  `recipients` varchar(10) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL DEFAULT '',
  `city_id` int(11) unsigned NOT NULL DEFAULT '0',
  `se_city_id` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(20) NOT NULL DEFAULT '',
  `zcode` int(8) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mytc_user_info
-- ----------------------------
INSERT INTO `mytc_user_info` VALUES ('2', '1', '李小鸟', '45664651', '1', '5', '小鸟村2组', '112035', '1', '1499416659', '1499416659');
INSERT INTO `mytc_user_info` VALUES ('3', '1', '李米华', '6545656', '1', '4', '光伏街道', '7978', '1', '1499416746', '1499416746');
