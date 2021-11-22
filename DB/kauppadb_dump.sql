-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema kauppadb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema kauppadb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `kauppadb` DEFAULT CHARACTER SET utf8 ;
USE `kauppadb` ;

-- -----------------------------------------------------
-- Table `kauppadb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kauppadb`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `pwd` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kauppadb`.`often`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kauppadb`.`often` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `itemname` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `kauppadb`.`sometimes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `kauppadb`.`sometimes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `itemname` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
