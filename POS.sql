-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema pos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pos` DEFAULT CHARACTER SET latin1 ;
USE `pos` ;

-- -----------------------------------------------------
-- Table `pos`.`aretes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`aretes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cantidad` DOUBLE NOT NULL,
  `precio` DOUBLE NOT NULL,
  `compra` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pos`.`bancos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`bancos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NULL DEFAULT NULL,
  `abreviacion` VARCHAR(50) NULL DEFAULT NULL,
  `saldo` DOUBLE NULL DEFAULT NULL,
  `cuenta` TEXT NULL DEFAULT NULL,
  `fecha_alta` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Bancos';


-- -----------------------------------------------------
-- Table `pos`.`catalogos_bancos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`catalogos_bancos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(45) NOT NULL,
  `nombre_corto` TEXT NOT NULL,
  `razon_social` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 94
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catálogo de Bancos Origen';


-- -----------------------------------------------------
-- Table `pos`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`categorias` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `categoria` TEXT NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `pos`.`chofer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`chofer` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NULL DEFAULT NULL,
  `email` TEXT NULL DEFAULT NULL,
  `telefono` TEXT NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Chofer';


-- -----------------------------------------------------
-- Table `pos`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`clientes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `documento` INT(11) NOT NULL,
  `email` TEXT NOT NULL,
  `telefono` TEXT NULL DEFAULT NULL,
  `celular` TEXT NULL DEFAULT NULL,
  `compras` INT(11) NOT NULL,
  `ultima_compra` DATETIME NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rfc` TEXT NULL DEFAULT NULL,
  `banco` TEXT NOT NULL,
  `num_cuenta` DOUBLE NOT NULL,
  `cta_clabe` DOUBLE NOT NULL,
  `total_comprado` DOUBLE NOT NULL,
  `total_adeudo` DOUBLE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `pos`.`compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`compras` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` INT(11) NULL DEFAULT NULL,
  `id_proveedor` INT(11) NULL DEFAULT NULL,
  `id_administrador` INT(11) NULL DEFAULT NULL,
  `impuesto` DOUBLE NULL DEFAULT NULL,
  `subtotal` DOUBLE NULL DEFAULT NULL,
  `total` DOUBLE NULL DEFAULT NULL,
  `metodo_deposito` TEXT NULL DEFAULT NULL,
  `ultima_edic` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_factura` VARCHAR(45) NULL DEFAULT NULL,
  `factura` VARCHAR(45) NULL DEFAULT NULL,
  `id_chofer` INT(11) NULL DEFAULT NULL,
  `descuento` DOUBLE NULL DEFAULT NULL,
  `flete` DOUBLE NULL DEFAULT NULL,
  `resta` DOUBLE NULL DEFAULT NULL,
  `deposito` DOUBLE NULL DEFAULT '0',
  `destino` VARCHAR(100) NULL DEFAULT NULL,
  `observaciones` TEXT NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  `total_facturado` DOUBLE NULL DEFAULT '0',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Compras';


-- -----------------------------------------------------
-- Table `pos`.`conceptos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`conceptos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `clave` INT(11) NOT NULL,
  `descripcion` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catálogo de Conceptos';


-- -----------------------------------------------------
-- Table `pos`.`egresos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`egresos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `importe` DOUBLE NOT NULL,
  `descripcion` TEXT NOT NULL,
  `banco_origen` INT(11) NOT NULL,
  `no_autorizacion` TEXT NOT NULL,
  `proveedor` INT(11) NOT NULL,
  `concepto` TEXT NOT NULL,
  `tipo_pago` INT(11) NOT NULL,
  `banco_destino` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catálogo de egresos';


-- -----------------------------------------------------
-- Table `pos`.`ingresos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`ingresos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `importe` DOUBLE NOT NULL,
  `descripcion` TEXT NOT NULL,
  `banco_destino` INT(11) NOT NULL,
  `no_autorizacion` TEXT NOT NULL,
  `cliente` INT(11) NOT NULL,
  `concepto` INT(11) NOT NULL,
  `tipo_pago` INT(11) NOT NULL,
  `banco_origen` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Ingresos';


-- -----------------------------------------------------
-- Table `pos`.`listapcom`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`listapcom` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(50) NULL DEFAULT NULL,
  `categoria` INT(11) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = latin1
COMMENT = 'Lista de Precios Compra';


-- -----------------------------------------------------
-- Table `pos`.`listapventa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`listapventa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(50) NULL DEFAULT NULL,
  `categoria` INT(11) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de listas de precios de venta';


-- -----------------------------------------------------
-- Table `pos`.`merma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`merma` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `merma` DOUBLE NOT NULL,
  `venta` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1
COMMENT = 'Registro de porcentajes de mermas por operación';


-- -----------------------------------------------------
-- Table `pos`.`partidas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`partidas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `numero` DOUBLE NOT NULL,
  `descripcion` TEXT NOT NULL,
  `total` DOUBLE NOT NULL,
  `info` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1
COMMENT = 'Esta tabla contiene las partidas que se le autorizaran al departamento';


-- -----------------------------------------------------
-- Table `pos`.`pesos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`pesos` (
  `idpesos` INT(11) NOT NULL AUTO_INCREMENT,
  `peso` DOUBLE NULL DEFAULT NULL,
  `listaprecc` INT(11) NULL DEFAULT NULL,
  `alta` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `compra` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idpesos`))
ENGINE = InnoDB
AUTO_INCREMENT = 99
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pos`.`pesosventa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`pesosventa` (
  `idpesosventa` INT(11) NOT NULL AUTO_INCREMENT,
  `peso` DOUBLE NOT NULL,
  `listaprecv` INT(11) NOT NULL,
  `alta` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `venta` INT(11) NOT NULL,
  PRIMARY KEY (`idpesosventa`))
ENGINE = InnoDB
AUTO_INCREMENT = 99
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de pesos de venta';


-- -----------------------------------------------------
-- Table `pos`.`precioscompra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`precioscompra` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `kilos` VARCHAR(25) NULL DEFAULT NULL,
  `pecio` VARCHAR(25) NULL DEFAULT NULL,
  `listapcom` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 52
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Precios';


-- -----------------------------------------------------
-- Table `pos`.`preciosventa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`preciosventa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `kilos` DOUBLE NULL DEFAULT NULL,
  `precio` FLOAT NULL DEFAULT NULL,
  `listapventa` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 32
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Precios venta';


-- -----------------------------------------------------
-- Table `pos`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`proveedor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `rfc` TEXT NOT NULL,
  `info` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_requisitado` DOUBLE UNSIGNED NULL DEFAULT '0',
  `usuario` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catalogo de Proveedores';


-- -----------------------------------------------------
-- Table `pos`.`requisicion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`requisicion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idpartida` INT(11) NOT NULL,
  `idproveedor` INT(11) NOT NULL,
  `foliointerno` VARCHAR(45) NOT NULL,
  `facturaserie` VARCHAR(45) NOT NULL,
  `facturafolio` VARCHAR(45) NOT NULL,
  `fecha_factura` DATE NOT NULL,
  `total_factura` DOUBLE NOT NULL,
  `total_requi` DOUBLE NOT NULL,
  `observaciones` TEXT NOT NULL,
  `usuario` INT(11) NOT NULL,
  `info` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_requi` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1
COMMENT = 'Tabla en donde se guardan las requisiciones dadas de alta';


-- -----------------------------------------------------
-- Table `pos`.`tipo_pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`tipo_pago` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `clave` TEXT NOT NULL,
  `descripcion` TEXT NOT NULL,
  `abreviacion` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1
COMMENT = 'Catálogo de tipos de pago';


-- -----------------------------------------------------
-- Table `pos`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `usuario` TEXT NOT NULL,
  `password` TEXT NOT NULL,
  `perfil` TEXT NOT NULL,
  `foto` TEXT NOT NULL,
  `estado` INT(11) NOT NULL,
  `ultimo_login` DATETIME NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 67
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `pos`.`ventas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pos`.`ventas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` INT(11) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  `id_administrador` INT(11) NOT NULL,
  `subtotal` DOUBLE NULL DEFAULT NULL,
  `total` DOUBLE NULL DEFAULT NULL,
  `ultima_edic` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `factura` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_factura` VARCHAR(45) NULL DEFAULT NULL,
  `resta` DOUBLE NULL DEFAULT NULL,
  `deposito` DOUBLE NULL DEFAULT NULL,
  `destino` TEXT NULL DEFAULT NULL,
  `merma` DOUBLE NULL DEFAULT NULL,
  `compra` INT(11) NOT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  `observaciones` TEXT NULL DEFAULT NULL,
  `total_facturado` DOUBLE NULL DEFAULT NULL,
  `pesoreal` DOUBLE NULL DEFAULT NULL,
  `mermareal` DOUBLE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
