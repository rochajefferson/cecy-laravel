<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ignug\Catalogue;
use Illuminate\Support\Facades\DB;

class CombosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //status
            Catalogue::factory()->create([
                'code' => '10',
                'name' => 'en proceso',
                'type' => 'status_vinculacion',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '11',
                'name' => 'pendiente',
                'type' => 'status_vinculacion',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '12',
                'name' => 'ractificar',
                'type' => 'status_vinculacion',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '13',
                'name' => 'corregido',
                'type' => 'status_vinculacion',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '14',
                'name' => 'aprobado',
                'type' => 'status_vinculacion',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '15',
                'name' => 'culminado',
                'type' => 'status_vinculacion',
                'state_id' => 1,
            ]);
            //funcion teacher
            Catalogue::factory()->create([
                'code' => '16',
                'name' => 'tutor',
                'type' => 'funtion_vinculacion',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '17',
                'name' => 'cordinador',
                'type' => 'funtion_vinculacion',
                'state_id' => 1,
            ]);
            //FraquencyOfActivity Frecuencia de actividades
            Catalogue::factory()->create([
                'code' => '18',
                'name' => 'Diaria',
                'type' => 'fraquency_activity',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '19',
                'name' => 'Semanal',
                'type' => 'fraquency_activity',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '20',
                'name' => 'Quincenal',
                'type' => 'fraquency_activity',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '21',
                'name' => 'Mensual',
                'type' => 'fraquency_activity',
                'state_id' => 1,
            ]);
            //AssignedLine
            Catalogue::factory()->create([
                'code' => '22',
                'name' => 'Gestion de Integracion del Proyecto',//Linea Asignada
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '23',
                'name' => 'Gestion del Alcance del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '24',
                'name' => 'Gestion de Tiempo del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '25',
                'name' => 'Gestion de Costo del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '26',
                'name' => 'Gestion de la Calidad del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '27',
                'name' => 'Gestion RRHH del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '28',
                'name' => 'Gestion de Comunicaciones del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '29',
                'name' => 'Gestion de Riesgos del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '30',
                'name' => 'Gestion de Adquisiones del Proyecto',
                'type' => 'assigned_line',
                'state_id' => 1,
            ]);
            //aims_types
            Catalogue::factory()->create([
                'code' => '31',
                'name' => 'Objetivo especifico',
                'type' => 'aims_types',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '32',
                'name' => 'Resultado',
                'type' => 'aims_types',
                'state_id' => 1,
            ]);
            //MeansOfVerification

            Catalogue::factory()->create([
                'code' => '33',
                'name' => 'medios de verificacion',
                'type' => 'Means_Verification',
                'state_id' => 1,
            ]);

            //LinkageAxes/ejes de vinculacion
            Catalogue::factory()->create([
                'code' => '34',
                'name'=>'Ambiental',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '35',
                'name'=>'Interculturalidad/género ',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '36',
                'name'=>'Investigativo Académico',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '37',
                'name'=>'Desarrollo social,comunitario',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '38',
                'name'=>'Desarrollo local',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '39',
                'name'=>'Economía popular y solidaria',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '40',
                'name'=>'Desarrollo técnico y tecnológico',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '41',
                'name'=>'Innovación',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '42',
                'name'=>'Responsabilidad social universitaria',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '43',
                'name'=>'Matriz productiva',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '44',
                'name'=>'Otros',
                'type' => 'linkage_axes',
                'state_id' => 1,
            ]);

            //BondingActivities/Actividad de vinculación
            Catalogue::factory()->create([
                'code' => '45',
                'name'=>'Investigación',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '46',
                'name'=>'Acuerdo',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '47',
                'name'=>'Proyecto de vinculación propio IST JME',
                'type' => 'bonding_activitiess',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '48',
                'name'=>'Programa de capacitación a la comunidad',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '49',
                'name'=>'Practicas Vinculación con la comunidad',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '50',
                'name'=>'Practicas Vinculación con la comunidad',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '51',
                'name'=>'Convenios institucionales',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '52',
                'name'=>'Otros',
                'type' => 'bonding_activities',
                'state_id' => 1,
            ]);
            //research_areas/area de investigacion
            Catalogue::factory()->create([
                'code' => '53',
                'name'=>'Atención a la Ciudadanía',
                'type' => 'research_areas',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '54',
                'name'=>'Dirección',
                'type' => 'research_areas',
                'state_id' => 1,
            ]);
            //General Aim
            Catalogue::factory()->create([
                'code' => '55',
                'name'=>'objetivo general',
                'type' => 'aims',
                'state_id' => 1,
            ]);
            //Especifics Aims
            Catalogue::factory()->create([
                'code' => '56',
                'name'=>'objetivo especifico',
                'type' => 'aims',
                'state_id' => 1,
            ]);
            //Resultado
            Catalogue::factory()->create([
                'code' => '57',
                'name'=>'resultado',
                'type' => 'aims',
                'state_id' => 1,
            ]);
            //Actividades
            Catalogue::factory()->create([
                'code' => '58',
                'name'=>'Actividades',
                'type' => 'aims',
                'state_id' => 1,
            ]);
            // career modality
            Catalogue::factory()->create([
                'code' => '59',
                'name' => 'PRESENCIAL',
                'type' => 'career_modality',
                'state_id' => 1,
             ]);

             Catalogue::factory()->create([
                'code' => '60',
                'name' => 'SEMI-PRESENCIAL',
                'type' => 'career_modality',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '61',
                'name' => 'DISTANCIA',
                'type' => 'career_modality',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '62',
                'name' => 'DUAL',
                'type' => 'career_modality',
                'state_id' => 1,
            ]);

    }
}
