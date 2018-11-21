-- MySQL Workbench Synchronization
-- Generated: 2018-11-18 20:09
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Hendy

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `skillancer` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `skillancer`.`Freelancer` (
  `id_freelancer` INT(11) NOT NULL,
  `fk_Id_user` INT(11) NOT NULL,
  `nota` TINYINT(1) NULL DEFAULT NULL,
  `tipo_servico` VARCHAR(45) NULL DEFAULT NULL,
  `linkedin` VARCHAR(45) NULL DEFAULT NULL,
  `facebook` VARCHAR(45) NULL DEFAULT NULL,
  `twitter` VARCHAR(45) NULL DEFAULT NULL,
  `github` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_freelancer`),
  INDEX `fk_Freelancer_Users1_idx` (`fk_Id_user` ASC) ,
  CONSTRAINT `fk_Freelancer_Users1`
    FOREIGN KEY (`fk_Id_user`)
    REFERENCES `skillancer`.`Users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `skillancer`.`Users` (
  `id_user` INT(11) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `cpf_cnpj` INT(11) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `skillancer`.`Metodo_pagamento` (
  `id_pagamento` INT(11) NOT NULL,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pagamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `skillancer`.`Projeto` (
  `id_projeto` INT(11) NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `tipo_servico` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(100) NULL DEFAULT NULL,
  `valor` FLOAT(11) NULL DEFAULT NULL,
  `fk_id_freelancer` INT(11) NOT NULL,
  `fk_idPagamento` INT(11) NOT NULL,
  `fk_idUser` INT(11) NOT NULL,
  PRIMARY KEY (`id_projeto`),
  INDEX `fk_Projeto_Freelancer_idx` (`fk_id_freelancer` ASC) ,
  INDEX `fk_Projeto_Metodo_pagamento1_idx` (`fk_idPagamento` ASC) ,
  INDEX `fk_Projeto_Users1_idx` (`fk_idUser` ASC) ,
  CONSTRAINT `fk_Projeto_Freelancer`
    FOREIGN KEY (`fk_id_freelancer`)
    REFERENCES `skillancer`.`Freelancer` (`id_freelancer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Projeto_Metodo_pagamento1`
    FOREIGN KEY (`fk_idPagamento`)
    REFERENCES `skillancer`.`Metodo_pagamento` (`id_pagamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Projeto_Users1`
    FOREIGN KEY (`fk_idUser`)
    REFERENCES `skillancer`.`Users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `skillancer`.`Portfolio` (
  `id_portfolio` INT(11) NOT NULL,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  `imagem` VARCHAR(45) NULL DEFAULT NULL,
  `fk_idFreelancer` INT(11) NOT NULL,
  `data` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id_portfolio`),
  INDEX `fk_portfolio_Freelancer1_idx` (`fk_idFreelancer` ASC) ,
  CONSTRAINT `fk_portfolio_Freelancer1`
    FOREIGN KEY (`fk_idFreelancer`)
    REFERENCES `skillancer`.`Freelancer` (`id_freelancer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `skillancer`.`Habilidade` (
  `id_habilidade` INT(11) NOT NULL,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  `icone` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_habilidade`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `skillancer`.`Freelancer_has_habilidade` (
  `Freelancer_id_freelancer` INT(11) NOT NULL,
  `habilidade_id_habilidade` INT(11) NOT NULL,
  PRIMARY KEY (`Freelancer_id_freelancer`, `habilidade_id_habilidade`),
  INDEX `fk_Freelancer_has_habilidade_habilidade1_idx` (`habilidade_id_habilidade` ASC) ,
  INDEX `fk_Freelancer_has_habilidade_Freelancer1_idx` (`Freelancer_id_freelancer` ASC) ,
  CONSTRAINT `fk_Freelancer_has_habilidade_Freelancer1`
    FOREIGN KEY (`Freelancer_id_freelancer`)
    REFERENCES `skillancer`.`Freelancer` (`id_freelancer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Freelancer_has_habilidade_habilidade1`
    FOREIGN KEY (`habilidade_id_habilidade`)
    REFERENCES `skillancer`.`Habilidade` (`id_habilidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
