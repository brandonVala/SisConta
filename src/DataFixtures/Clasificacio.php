<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Clasificacion extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $data = [
            [10, 'Activo circulante'],
            [11, 'Activo no circulante'],
            [12, 'Otros Activos'],
            [20, 'Pasivos a Corto Plazo'],
            [21, 'Pasivos a Largo Plazo'],
            [22, 'Otros Pasivos'],
            [30, 'Capital Contable'],
            [40, 'Cuentas de Resultados'],
        ];

        foreach ($data as $item) {
            $clasificacion = new Clasificacion();
            $clasificacion->setClasificacionCuentas($item[0]);
            $clasificacion->setNombreClasificacion($item[1]);

            $manager->persist($clasificacion);
        }

        $manager->flush();
    }
}
