-- MySQL Script generated by MySQL Workbench
-- Mon Feb  7 15:58:28 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema reconhecer
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `reconhecer` ;

-- -----------------------------------------------------
-- Schema reconhecer
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `reconhecer` DEFAULT CHARACTER SET utf8 ;
USE `reconhecer` ;

-- -----------------------------------------------------
-- Table `reconhecer`.`funcionario`
-- -----------------------------------------------------

DROP TABLE IF EXISTS `reconhecer`.`funcionario` ;

CREATE TABLE IF NOT EXISTS `reconhecer`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(200) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(200) NULL,
  `cargo` VARCHAR(45) NULL,
  `status` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;