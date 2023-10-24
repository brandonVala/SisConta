<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231024054921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `admin` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE alta_materiales (Codigo_Materiales INT NOT NULL, Posicion_Financiera VARCHAR(10) NOT NULL, Material VARCHAR(100) NOT NULL, Descripcion VARCHAR(150) NOT NULL, Unidad_Medida VARCHAR(45) NOT NULL, Precio_Unitario DOUBLE PRECISION NOT NULL, Marca VARCHAR(45) NOT NULL, Lote VARCHAR(45) NOT NULL, Serie VARCHAR(45) NOT NULL, empresa_idEmpresa INT NOT NULL, INDEX fk_alta_materiales_empresa1_idx (empresa_idEmpresa), PRIMARY KEY(Codigo_Materiales, empresa_idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clasificacion_c (idClasificacion_Cuentas INT AUTO_INCREMENT NOT NULL, Nombre_Clasificacion VARCHAR(45) NOT NULL, PRIMARY KEY(idClasificacion_Cuentas)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clasificacion_cuentas (Cuentas_Codigo_Cuenta VARCHAR(45) NOT NULL, Clasificacion_Cuentas INT NOT NULL, ClasifPrincipal_id_Recurso INT NOT NULL, INDEX fk_clasificacion_cuentas_ClasifPrincipal1_idx (ClasifPrincipal_id_Recurso), INDEX fk_Clasificacion_Cuentas_has_Cuentas_Clasificacion_Cuentas1_idx (Clasificacion_Cuentas), INDEX fk_Clasificacion_Cuentas_has_Cuentas_Cuentas1_idx (Cuentas_Codigo_Cuenta), PRIMARY KEY(Cuentas_Codigo_Cuenta, Clasificacion_Cuentas, ClasifPrincipal_id_Recurso)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clasifprincipal (id_Recurso INT AUTO_INCREMENT NOT NULL, Nombre_Recurso VARCHAR(45) NOT NULL, PRIMARY KEY(id_Recurso)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cuentas (Codigo_Cuenta VARCHAR(45) NOT NULL, Nombre_Cuenta VARCHAR(45) NOT NULL, PRIMARY KEY(Codigo_Cuenta)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cuentas_info (Codigo_Cuenta INT NOT NULL, Nombre_Cuenta VARCHAR(45) NOT NULL, Tipo_Recurso VARCHAR(25) NOT NULL, Codigo_Proc_Reg INT NOT NULL, INDEX fk_Cuentas_Info_Procedimiento_Reg1_idx (Codigo_Proc_Reg), PRIMARY KEY(Codigo_Cuenta, Codigo_Proc_Reg)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ejercicio_fiscal (idEjercicio_Fiscal INT NOT NULL, Fecha DATE NOT NULL, Mes VARCHAR(30) NOT NULL, Estado VARCHAR(15) NOT NULL, Fecha_Fin DATE NOT NULL, Observaciones VARCHAR(255) NOT NULL, Proc_Reg INT NOT NULL, Empresa_idEmpresa INT NOT NULL, INDEX fk_Ejercicio_Fiscal_Empresa1_idx (Empresa_idEmpresa), INDEX fk_Ejercicio_Fiscal_Procedimiento_Reg1_idx (Proc_Reg), PRIMARY KEY(idEjercicio_Fiscal, Proc_Reg, Empresa_idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE empresa (idEmpresa INT AUTO_INCREMENT NOT NULL, Nombre VARCHAR(45) NOT NULL, Direccion VARCHAR(45) NOT NULL, Telefono VARCHAR(45) NOT NULL, Giro VARCHAR(45) NOT NULL, RFC VARCHAR(45) NOT NULL, PRIMARY KEY(idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE naturaleza (Codigo_Naturaleza INT AUTO_INCREMENT NOT NULL, Tipo_Naturaleza VARCHAR(45) NOT NULL, PRIMARY KEY(Codigo_Naturaleza)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE procedimiento_reg (Codigo_Proc_Reg INT AUTO_INCREMENT NOT NULL, Nombre VARCHAR(45) NOT NULL, PRIMARY KEY(Codigo_Proc_Reg)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cuentas_proc_reg (Codigo_Proc_Reg INT NOT NULL, Codigo_Cuenta VARCHAR(45) NOT NULL, INDEX IDX_CCD14AB167AE9169 (Codigo_Proc_Reg), INDEX IDX_CCD14AB1FBF75EE0 (Codigo_Cuenta), PRIMARY KEY(Codigo_Proc_Reg, Codigo_Cuenta)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reg_cuentas (idReg_Cuentas INT NOT NULL, Num_Poliza INT NOT NULL, Fecha_Factura DATE NOT NULL, Fecha_Reg DATE NOT NULL, Nombre_Cuenta VARCHAR(50) NOT NULL, Concepto VARCHAR(100) NOT NULL, Monto DOUBLE PRECISION NOT NULL, cuentas_Codigo_Cuenta VARCHAR(45) NOT NULL, Codigo_Naturaleza INT NOT NULL, ejer_idEjercicio_Fiscal INT NOT NULL, INDEX fk_Reg_Cuentas_Naturaleza1_idx (Codigo_Naturaleza), INDEX fk_reg_cuentas_cuentas1_idx (cuentas_Codigo_Cuenta), INDEX fk_reg_cuentas_ejercicio_fiscal1_idx (ejer_idEjercicio_Fiscal), PRIMARY KEY(idReg_Cuentas, cuentas_Codigo_Cuenta, Codigo_Naturaleza, ejer_idEjercicio_Fiscal)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reg_entradas_salidas (IDentradas_salidas INT NOT NULL, Fecha_Reg DATE NOT NULL, Unidad_Medida VARCHAR(20) NOT NULL, Cantidad DOUBLE PRECISION NOT NULL, Costo_Unitario DOUBLE PRECISION NOT NULL, Total DOUBLE PRECISION DEFAULT NULL, CodigoValuacion INT NOT NULL, Codigo_Naturaleza INT NOT NULL, empresa_idEmpresa INT NOT NULL, altaMateriales_Codigo INT NOT NULL, INDEX fk_reg_entradas_salidas_valuacion_inventarios1_idx (CodigoValuacion), INDEX fk_reg_entradas_salidas_alta_materiales1_idx (altaMateriales_Codigo), INDEX fk_reg_entradas_salidas_naturaleza1_idx (Codigo_Naturaleza), INDEX fk_reg_entradas_salidas_empresa1_idx (empresa_idEmpresa), PRIMARY KEY(IDentradas_salidas, CodigoValuacion, Codigo_Naturaleza, empresa_idEmpresa, altaMateriales_Codigo)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (admin_id INT DEFAULT NULL, Nombre VARCHAR(45) NOT NULL, APP VARCHAR(45) NOT NULL, APM VARCHAR(45) NOT NULL, Tel VARCHAR(15) NOT NULL, Email VARCHAR(45) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_EF687F2642B8210 (admin_id), PRIMARY KEY(Email)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios_empresa (U_Email VARCHAR(45) NOT NULL, idEmpresa INT NOT NULL, INDEX IDX_409B3803F1280721 (U_Email), INDEX IDX_409B3803A86E31A2 (idEmpresa), PRIMARY KEY(U_Email, idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE valuacion_inventarios (CodigoValuacion INT NOT NULL, Nombre_Valuacion VARCHAR(20) NOT NULL, empresa_idEmpresa INT NOT NULL, INDEX fk_valuacion_inventarios_empresa1_idx (empresa_idEmpresa), PRIMARY KEY(CodigoValuacion, empresa_idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE alta_materiales ADD CONSTRAINT FK_F74EDEC0A4D8A3DD FOREIGN KEY (empresa_idEmpresa) REFERENCES empresa (idEmpresa)');
        $this->addSql('ALTER TABLE clasificacion_cuentas ADD CONSTRAINT FK_940187E393FB6E97 FOREIGN KEY (Cuentas_Codigo_Cuenta) REFERENCES cuentas (Codigo_Cuenta)');
        $this->addSql('ALTER TABLE clasificacion_cuentas ADD CONSTRAINT FK_940187E3CC749BA7 FOREIGN KEY (Clasificacion_Cuentas) REFERENCES clasificacion_c (idClasificacion_Cuentas)');
        $this->addSql('ALTER TABLE clasificacion_cuentas ADD CONSTRAINT FK_940187E37A60A2B9 FOREIGN KEY (ClasifPrincipal_id_Recurso) REFERENCES clasifprincipal (id_Recurso)');
        $this->addSql('ALTER TABLE cuentas_info ADD CONSTRAINT FK_D0E0022167AE9169 FOREIGN KEY (Codigo_Proc_Reg) REFERENCES procedimiento_reg (Codigo_Proc_Reg)');
        $this->addSql('ALTER TABLE ejercicio_fiscal ADD CONSTRAINT FK_7B214ADF5BC9D38C FOREIGN KEY (Proc_Reg) REFERENCES procedimiento_reg (Codigo_Proc_Reg)');
        $this->addSql('ALTER TABLE ejercicio_fiscal ADD CONSTRAINT FK_7B214ADF8A7B9127 FOREIGN KEY (Empresa_idEmpresa) REFERENCES empresa (idEmpresa)');
        $this->addSql('ALTER TABLE cuentas_proc_reg ADD CONSTRAINT FK_CCD14AB167AE9169 FOREIGN KEY (Codigo_Proc_Reg) REFERENCES procedimiento_reg (Codigo_Proc_Reg)');
        $this->addSql('ALTER TABLE cuentas_proc_reg ADD CONSTRAINT FK_CCD14AB1FBF75EE0 FOREIGN KEY (Codigo_Cuenta) REFERENCES cuentas (Codigo_Cuenta)');
        $this->addSql('ALTER TABLE reg_cuentas ADD CONSTRAINT FK_C38B90064334B4F FOREIGN KEY (cuentas_Codigo_Cuenta) REFERENCES cuentas (Codigo_Cuenta)');
        $this->addSql('ALTER TABLE reg_cuentas ADD CONSTRAINT FK_C38B90063741C2E3 FOREIGN KEY (Codigo_Naturaleza) REFERENCES naturaleza (Codigo_Naturaleza)');
        $this->addSql('ALTER TABLE reg_cuentas ADD CONSTRAINT FK_C38B9006559D78C6 FOREIGN KEY (ejer_idEjercicio_Fiscal) REFERENCES ejercicio_fiscal (idEjercicio_Fiscal)');
        $this->addSql('ALTER TABLE reg_entradas_salidas ADD CONSTRAINT FK_C696CDB87CF6FC99 FOREIGN KEY (CodigoValuacion) REFERENCES valuacion_inventarios (CodigoValuacion)');
        $this->addSql('ALTER TABLE reg_entradas_salidas ADD CONSTRAINT FK_C696CDB83741C2E3 FOREIGN KEY (Codigo_Naturaleza) REFERENCES naturaleza (Codigo_Naturaleza)');
        $this->addSql('ALTER TABLE reg_entradas_salidas ADD CONSTRAINT FK_C696CDB8A4D8A3DD FOREIGN KEY (empresa_idEmpresa) REFERENCES empresa (idEmpresa)');
        $this->addSql('ALTER TABLE reg_entradas_salidas ADD CONSTRAINT FK_C696CDB8C64CC54E FOREIGN KEY (altaMateriales_Codigo) REFERENCES alta_materiales (Codigo_Materiales)');
        $this->addSql('ALTER TABLE usuarios ADD CONSTRAINT FK_EF687F2642B8210 FOREIGN KEY (admin_id) REFERENCES `admin` (id)');
        $this->addSql('ALTER TABLE usuarios_empresa ADD CONSTRAINT FK_409B3803F1280721 FOREIGN KEY (U_Email) REFERENCES usuarios (Email)');
        $this->addSql('ALTER TABLE usuarios_empresa ADD CONSTRAINT FK_409B3803A86E31A2 FOREIGN KEY (idEmpresa) REFERENCES empresa (idEmpresa)');
        $this->addSql('ALTER TABLE valuacion_inventarios ADD CONSTRAINT FK_7E41B0E5A4D8A3DD FOREIGN KEY (empresa_idEmpresa) REFERENCES empresa (idEmpresa)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alta_materiales DROP FOREIGN KEY FK_F74EDEC0A4D8A3DD');
        $this->addSql('ALTER TABLE clasificacion_cuentas DROP FOREIGN KEY FK_940187E393FB6E97');
        $this->addSql('ALTER TABLE clasificacion_cuentas DROP FOREIGN KEY FK_940187E3CC749BA7');
        $this->addSql('ALTER TABLE clasificacion_cuentas DROP FOREIGN KEY FK_940187E37A60A2B9');
        $this->addSql('ALTER TABLE cuentas_info DROP FOREIGN KEY FK_D0E0022167AE9169');
        $this->addSql('ALTER TABLE ejercicio_fiscal DROP FOREIGN KEY FK_7B214ADF5BC9D38C');
        $this->addSql('ALTER TABLE ejercicio_fiscal DROP FOREIGN KEY FK_7B214ADF8A7B9127');
        $this->addSql('ALTER TABLE cuentas_proc_reg DROP FOREIGN KEY FK_CCD14AB167AE9169');
        $this->addSql('ALTER TABLE cuentas_proc_reg DROP FOREIGN KEY FK_CCD14AB1FBF75EE0');
        $this->addSql('ALTER TABLE reg_cuentas DROP FOREIGN KEY FK_C38B90064334B4F');
        $this->addSql('ALTER TABLE reg_cuentas DROP FOREIGN KEY FK_C38B90063741C2E3');
        $this->addSql('ALTER TABLE reg_cuentas DROP FOREIGN KEY FK_C38B9006559D78C6');
        $this->addSql('ALTER TABLE reg_entradas_salidas DROP FOREIGN KEY FK_C696CDB87CF6FC99');
        $this->addSql('ALTER TABLE reg_entradas_salidas DROP FOREIGN KEY FK_C696CDB83741C2E3');
        $this->addSql('ALTER TABLE reg_entradas_salidas DROP FOREIGN KEY FK_C696CDB8A4D8A3DD');
        $this->addSql('ALTER TABLE reg_entradas_salidas DROP FOREIGN KEY FK_C696CDB8C64CC54E');
        $this->addSql('ALTER TABLE usuarios DROP FOREIGN KEY FK_EF687F2642B8210');
        $this->addSql('ALTER TABLE usuarios_empresa DROP FOREIGN KEY FK_409B3803F1280721');
        $this->addSql('ALTER TABLE usuarios_empresa DROP FOREIGN KEY FK_409B3803A86E31A2');
        $this->addSql('ALTER TABLE valuacion_inventarios DROP FOREIGN KEY FK_7E41B0E5A4D8A3DD');
        $this->addSql('DROP TABLE `admin`');
        $this->addSql('DROP TABLE alta_materiales');
        $this->addSql('DROP TABLE clasificacion_c');
        $this->addSql('DROP TABLE clasificacion_cuentas');
        $this->addSql('DROP TABLE clasifprincipal');
        $this->addSql('DROP TABLE cuentas');
        $this->addSql('DROP TABLE cuentas_info');
        $this->addSql('DROP TABLE ejercicio_fiscal');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP TABLE naturaleza');
        $this->addSql('DROP TABLE procedimiento_reg');
        $this->addSql('DROP TABLE cuentas_proc_reg');
        $this->addSql('DROP TABLE reg_cuentas');
        $this->addSql('DROP TABLE reg_entradas_salidas');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE usuarios_empresa');
        $this->addSql('DROP TABLE valuacion_inventarios');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
