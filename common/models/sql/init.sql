use `yii2-ecshop`;
DROP TABLE IF EXISTS `t_admin_shangpin_list`;
CREATE TABLE IF NOT EXISTS `t_admin_shangpin_list`(
  `FId` INT NOT NULL AUTO_INCREMENT,
  `FName` VARCHAR(40) NOT NULL DEFAULT '0',
  `FHuoHao` VARCHAR(12) NOT NULL DEFAULT 'YII',
  `FPrice` FLOAT NOT NULL DEFAULT 0,
  `FIsShangJia` BOOL NOT NULL DEFAULT TRUE ,
  `FIsJingPin` BOOL NOT NULL DEFAULT TRUE ,
  `FIsXinPin` BOOL NOT NULL DEFAULT TRUE ,
  `FIsReXiao` BOOL NOT NULL DEFAULT TRUE ,
  `FTuiJianPaiXu` INT DEFAULT 0,
  `FKuCun` INT DEFAULT 1,
  PRIMARY KEY (FId)
)ENGINE =innodb,CHARSET =utf8;