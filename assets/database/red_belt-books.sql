-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema red_belt-books
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema red_belt-books
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `red_belt-books` DEFAULT CHARACTER SET utf8 ;
USE `red_belt-books` ;

-- -----------------------------------------------------
-- Table `red_belt-books`.`books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `red_belt-books`.`books` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL DEFAULT NULL,
  `author` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `red_belt-books`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `red_belt-books`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(100) NULL DEFAULT NULL,
  `last_name` VARCHAR(100) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(255) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `red_belt-books`.`reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `red_belt-books`.`reviews` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `content` TEXT NULL DEFAULT NULL,
  `rating` TINYINT(4) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  `user_id` INT(11) NOT NULL,
  `book_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Reviews_Users_idx` (`user_id` ASC),
  INDEX `fk_Reviews_Books1_idx` (`book_id` ASC),
  CONSTRAINT `fk_Reviews_Users`
    FOREIGN KEY (`user_id`)
    REFERENCES `red_belt-books`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reviews_Books1`
    FOREIGN KEY (`book_id`)
    REFERENCES `red_belt-books`.`books` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
