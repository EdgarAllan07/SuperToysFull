-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Productos` (
  `idProductos` INT NOT NULL,
  `Nombre_Producto` VARCHAR(50) NOT NULL,
  `Precio` DOUBLE NOT NULL,
  `Cantidad` INT NOT NULL,
  `Fecha_Registro` DATE NOT NULL,
  `Marca_Producto` VARCHAR(45) NOT NULL,
  `Detalles` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idProductos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `idCliente` INT NOT NULL,
  `Nombre_Cliente` VARCHAR(45) NOT NULL,
  `Apellido_Cliente` VARCHAR(45) NOT NULL,
  `Correo` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(100) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL,
  `Sexo` INT NOT NULL,
  `Contraseña` VARCHAR(45) NOT NULL,
  `Tipo_Usuario` INT NOT NULL,
  `Encuesta_idEncuesta` INT NOT NULL,
  PRIMARY KEY (`idCliente`, `Encuesta_idEncuesta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Contactos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Contactos` (
  `idContactos` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL,
  `Correo` VARCHAR(45) NOT NULL,
  `Mensaje` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idContactos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Encuesta` (
  `idEncuesta` INT NOT NULL,
  `Nombre` VARCHAR(100) NOT NULL,
  `Edad` INT NOT NULL,
  `Fecha` DATE NOT NULL,
  `Monto` DOUBLE NOT NULL,
  `Precio` INT NOT NULL,
  `Genero` INT NOT NULL,
  `Encontrar` INT NOT NULL,
  `Calidad` VARCHAR(30) NOT NULL,
  `Gustar` VARCHAR(45) NOT NULL,
  `Color` VARCHAR(10) NOT NULL,
  `Calificacion` INT NOT NULL,
  `Navegar` INT NOT NULL,
  `Pagina` INT NOT NULL,
  `Pago` VARCHAR(45) NOT NULL,
  `Comentario` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idEncuesta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Categoria` (
  `idCategoria` INT NOT NULL,
  `Nombre_Categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Proveedor` (
  `idProveedor` INT NOT NULL,
  `Nombre_Proveedor` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(100) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idProveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Factura` (
  `idFactura` INT NOT NULL,
  `Nombre_Cliente` VARCHAR(45) NOT NULL,
  `Fecha_Compra` VARCHAR(45) NOT NULL,
  `Total` DOUBLE NOT NULL,
  `Usuario_idCliente` INT NOT NULL,
  `Productos_idProductos` INT NOT NULL,
  PRIMARY KEY (`idFactura`, `Usuario_idCliente`, `Productos_idProductos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Detalle_Factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Detalle_Factura` (
  `idDetalles` INT NOT NULL,
  `Cantidad` INT NOT NULL,
  `Descuento` DOUBLE NOT NULL,
  `Credito_Fiscal` TINYINT NULL,
  `Consumidor_Final` TINYINT NULL,
  PRIMARY KEY (`idDetalles`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
