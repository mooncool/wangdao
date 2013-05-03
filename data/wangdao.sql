SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `wangdao` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `wangdao` ;

-- -----------------------------------------------------
-- Table `wangdao`.`wangdao_user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `wangdao`.`wangdao_user` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(255) NOT NULL DEFAULT '' ,
  `user_email` VARCHAR(255) NOT NULL DEFAULT '' ,
  `user_pwd` VARCHAR(255) NOT NULL DEFAULT '' ,
  `last_login_time` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:00' ,
  `last_login_ip` VARCHAR(255) NOT NULL DEFAULT '' ,
  `create_time` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:00' ,
  `status` TINYINT NOT NULL DEFAULT 0 COMMENT '0:disable\n1:enable' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
COMMENT = 'Wonderya users' ;


-- -----------------------------------------------------
-- Table `wangdao`.`wangdao_shop`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `wangdao`.`wangdao_shop` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `shop_name` VARCHAR(255) NOT NULL DEFAULT '' ,
  `shop_address` VARCHAR(255) NOT NULL DEFAULT '' ,
  `shop_tel1` VARCHAR(255) NOT NULL DEFAULT '' ,
  `shop_tel2` VARCHAR(255) NOT NULL DEFAULT '' ,
  `create_time` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:00' ,
  `status` TINYINT NOT NULL DEFAULT 0 COMMENT '0:disable\n1:enable' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'Wonderya shops' ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
