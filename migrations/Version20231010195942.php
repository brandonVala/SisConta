<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231010195942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE AltaMateriales DROP FOREIGN KEY FK_F74EDEC0A4D8A3DD');
        $this->addSql('ALTER TABLE ValuacionInventarios DROP FOREIGN KEY FK_BC2799DF13E9CAD7');
        $this->addSql('ALTER TABLE UsuariosEmpresa DROP FOREIGN KEY FK_2850800CA86E31A2');
        $this->addSql('ALTER TABLE UsuariosEmpresa DROP FOREIGN KEY FK_2850800CDF09C8A');
        $this->addSql('DROP TABLE clasif_principal');
        $this->addSql('DROP TABLE cuentas_pro_reg');
        $this->addSql('DROP TABLE cuentas_info');
        $this->addSql('DROP TABLE cuentas');
        $this->addSql('DROP TABLE ejercicio_fiscal');
        $this->addSql('DROP TABLE clasificacion_cuentas');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP TABLE AltaMateriales');
        $this->addSql('DROP TABLE clasificacion_c');
        $this->addSql('DROP TABLE naturaleza');
        $this->addSql('DROP TABLE ValuacionInventarios');
        $this->addSql('DROP TABLE procedimiento_reg');
        $this->addSql('DROP TABLE user_empresa');
        $this->addSql('DROP TABLE UsuariosEmpresa');
        $this->addSql('DROP TABLE reg_cuentas');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE reg_entradas_salidas');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clasif_principal (id INT NOT NULL, id_recurso INT NOT NULL, nombre_recurso VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cuentas_pro_reg (id INT AUTO_INCREMENT NOT NULL, CodigoProcReg INT DEFAULT NULL, CodigoCuenta VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_B3B223E55A69B02F (CodigoProcReg), INDEX IDX_B3B223E5F7B1DC90 (CodigoCuenta), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cuentas_info (id INT AUTO_INCREMENT NOT NULL, codigo_cuenta INT NOT NULL, nombre_cuenta VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tipo_recurso VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CodigoProcReg INT DEFAULT NULL, INDEX IDX_D0E002215A69B02F (CodigoProcReg), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cuentas (id INT AUTO_INCREMENT NOT NULL, codigo_cuenta VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nombre_cuenta VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ejercicio_fiscal (idEjercicioFiscal INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, mes VARCHAR(40) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, pro_rec INT NOT NULL, estado VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, fin_fecha DATE NOT NULL, observaciones VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, EmpresaIdEmpresa INT DEFAULT NULL, ProRec INT DEFAULT NULL, INDEX IDX_7B214ADFFE12A870 (ProRec), INDEX IDX_7B214ADF13E9CAD7 (EmpresaIdEmpresa), PRIMARY KEY(idEjercicioFiscal)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE clasificacion_cuentas (id INT AUTO_INCREMENT NOT NULL, ClasificacionCuentas INT DEFAULT NULL, CuentasCodigoCuenta VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ClasifPrincipalIdRecurso INT DEFAULT NULL, INDEX IDX_940187E35331FFAA (ClasifPrincipalIdRecurso), INDEX IDX_940187E36787F192 (ClasificacionCuentas), INDEX IDX_940187E391E44DCA (CuentasCodigoCuenta), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE empresa (idEmpresa INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, direccion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telefono VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, giro VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, rfc VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE AltaMateriales (material VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PrecioUnitario DOUBLE PRECISION NOT NULL, Marca VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, Lote VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, Serie VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, empresa_idEmpresa INT DEFAULT NULL, CodigoMateriales INT AUTO_INCREMENT NOT NULL, PosicionFinanciera VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, Descripcion VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UnidadMedida VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_F74EDEC0A4D8A3DD (empresa_idEmpresa), PRIMARY KEY(CodigoMateriales)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE clasificacion_c (id INT AUTO_INCREMENT NOT NULL, nombre_clasificacion VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id_clasificacion_cuentas INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE naturaleza (id INT AUTO_INCREMENT NOT NULL, codigo_naturaleza INT NOT NULL, tipo_naturaleza VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ValuacionInventarios (CodigoValuacion INT NOT NULL, NombreValuacion VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, EmpresaIdEmpresa INT DEFAULT NULL, INDEX IDX_BC2799DF13E9CAD7 (EmpresaIdEmpresa), PRIMARY KEY(CodigoValuacion)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE procedimiento_reg (CodigoProcReg INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(CodigoProcReg)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_empresa (user_id INT NOT NULL, empresa_id INT NOT NULL, INDEX IDX_E0DA445A521E1991 (empresa_id), INDEX IDX_E0DA445AA76ED395 (user_id), PRIMARY KEY(user_id, empresa_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE UsuariosEmpresa (UEmail VARCHAR(45) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, idEmpresa INT NOT NULL, INDEX IDX_2850800CA86E31A2 (idEmpresa), INDEX IDX_2850800CDF09C8A (UEmail), PRIMARY KEY(UEmail, idEmpresa)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reg_cuentas (id_reg_cuentas INT NOT NULL, num_poliza INT NOT NULL, fecha_factura DATE NOT NULL, fecha_reg DATE NOT NULL, nombre_cuenta VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, concepto VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, monto DOUBLE PRECISION NOT NULL, CuentasCodigoCuenta VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CodigoNaturaleza INT DEFAULT NULL, EjerIdEjercicioFiscal INT DEFAULT NULL, cuentas_codigo_cuenta VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, codigo_naturaleza INT NOT NULL, ejer_id_ejercicio_fiscal INT NOT NULL, INDEX IDX_C38B9006115A0939 (CodigoNaturaleza), INDEX IDX_C38B900617C65D7 (EjerIdEjercicioFiscal), INDEX IDX_C38B900691E44DCA (CuentasCodigoCuenta), PRIMARY KEY(id_reg_cuentas)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, app VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, apm VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tel VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reg_entradas_salidas (id INT AUTO_INCREMENT NOT NULL, IDentradassalidas INT NOT NULL, FechaReg DATE NOT NULL, UnidadMedida VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, Cantidad DOUBLE PRECISION NOT NULL, CostoUnitario DOUBLE PRECISION NOT NULL, Total DOUBLE PRECISION DEFAULT NULL, AltaMaterialesCodigo INT DEFAULT NULL, CodigoNaturaleza INT DEFAULT NULL, CodigoValuacion INT DEFAULT NULL, INDEX IDX_C696CDB8115A0939 (CodigoNaturaleza), INDEX IDX_C696CDB86A2E6D73 (AltaMaterialesCodigo), INDEX IDX_C696CDB87CF6FC99 (CodigoValuacion), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE AltaMateriales ADD CONSTRAINT FK_F74EDEC0A4D8A3DD FOREIGN KEY (empresa_idEmpresa) REFERENCES empresa (idEmpresa) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ValuacionInventarios ADD CONSTRAINT FK_BC2799DF13E9CAD7 FOREIGN KEY (EmpresaIdEmpresa) REFERENCES empresa (idEmpresa) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE UsuariosEmpresa ADD CONSTRAINT FK_2850800CA86E31A2 FOREIGN KEY (idEmpresa) REFERENCES empresa (idEmpresa) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE UsuariosEmpresa ADD CONSTRAINT FK_2850800CDF09C8A FOREIGN KEY (UEmail) REFERENCES user (email) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
