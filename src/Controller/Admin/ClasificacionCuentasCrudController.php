<?php

namespace App\Controller\Admin;

use App\Entity\ClasificacionCuentas;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextBlockField;

class ClasificacionCuentasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClasificacionCuentas::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            
            IdField::new('id'),

            AssociationField::new('cuentasCodigoCuenta', 'Codigo Cuenta')->formatValue(fn($value, $entity) => $entity->getCuentasCodigoCuenta()->getCodigoCuenta()),
            TextField::new('nombreCuenta', 'Nombre Cuenta'),
            TextField::new('nombreClasificacion', 'Tipo Recurso'),

            AssociationField::new('clasificacionCuentas', 'Clasificación Cuentas')->formatValue(fn($value, $entity) => $entity->getClasificacionCuentas()->getIdClasificacionCuentas()),
            TextField::new('nombreRecurso', 'Nombre Recurso'),

        ];
    }

}
