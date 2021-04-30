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
            Catalogue::factory()->create([
                'code' => '63',
                'name' => 'SOFTWARE',
                'type' => 'area',
                'state_id' => 1,
            ]);

            Catalogue::factory()->create([
                'code' => '64',
                'name' => 'PRIMERO',
                'type' => 'academic_period',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '65',
                'name' => 'SEGUNDO',
                'type' => 'academic_period',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '66',
                'name' => 'TERCERO',
                'type' => 'academic_period',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '67',
                'name' => 'CUARTO',
                'type' => 'academic_period',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '68',
                'name' => 'QUINTO',
                'type' => 'academic_period',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '69',
                'name' => 'SEXTO',
                'type' => 'academic_period',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '70',
                'name' => 'TECNICO',
                'type' => 'course_type',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '71',
                'name' => 'ADMINISTRATIVO',
                'type' => 'course_type',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '72',
                'name' => 'JOVEN',
                'type' => 'participant_type',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '73',
                'name' => 'ADULTO',
                'type' => 'participant_type',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '74',
                'name' => 'JOVEN-ADULTO',
                'type' => 'participant_type',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '75',
                'name' => 'TRANSPORTE Y LOGÍSTICA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '76',
                'name' => 'PROCESOS INDUSTRIALES',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '77',
                'name' => 'MECÁNICA INDUSTRIAL Y MINERÍA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '78',
                'name' => 'MECÁNICA AUTOMOTRIZ',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '79',
                'name' => 'COMUNICACIÓN Y ARTES GRÁFICAS',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '80',
                'name' => 'ESPECIES ACUÁTICAS Y PESCA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '81',
                'name' => 'ELECTRICIDAD Y ELECTRÓNICA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '82',
                'name' => 'EDUCACIÓN Y CAPACITACIÓN',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '83',
                'name' => 'FORESTAL, ECOLOGÍA Y AMBIENTE',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '84',
                'name' => 'CONSTRUCCIÓN E INFRAESTRUCTURA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '85',
                'name' => 'FINANZAS, COMERCIO Y VENTAS',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '86',
                'name' => 'TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '87',
                'name' => 'ALIMENTACIÓN, GASTRONOMÍA Y TURISMO',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '88',
                'name' => 'ZOOTECNIA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '89',
                'name' => 'AGRONOMÍA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '90',
                'name' => 'ADMINISTRACIÓN Y LEGISLACIÓN',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '91',
                'name' => 'TURISMO',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '92',
                'name' => 'DESARROLLO DE SOFTWARE',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '93',
                'name' => 'INGLES',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '94',
                'name' => 'ARTES Y ARTESANÍA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '95',
                'name' => 'SERVICIOS SOCIOCULTURALES Y A LA COMUNIDAD',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '96',
                'name' => 'INDUSTRIA AGROPECUARIA',
                'type' => 'area',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '97',
                'name' => 'IDIOMAS',
                'type' => 'specialty',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '98',
                'name' => 'TECNOLOGIA',
                'type' => 'specialty',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '99',
                'name' => 'PEDAGOGIA',
                'type' => 'specialty',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '100',
                'name' => 'MARZO-JUNIO',
                'type' => 'school_period',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '101',
                'name' => 'ENERO-MARZO',
                'type' => 'school_period',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '102',
                'name' => 'JUNIO-SEPTIEMBRE',
                'type' => 'school_period',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '103',
                'name' => 'LUNES-VIERNES',
                'type' => 'day',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '104',
                'name' => 'DOMINGO',
                'type' => 'day',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '105',
                'name' => 'SABADOS',
                'type' => 'day',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '106',
                'name' => 'LUNES-DOMINGO',
                'type' => 'day',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '107',
                'name' => '7:00',
                'type' => 'start_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '108',
                'name' => '8:00',
                'type' => 'start_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '109',
                'name' => '9:00',
                'type' => 'start_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '110',
                'name' => '10:00',
                'type' => 'start_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '111',
                'name' => '11:00',
                'type' => 'start_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '112',
                'name' => '12:00',
                'type' => 'start_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '113',
                'name' => '12:00',
                'type' => 'end_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '114',
                'name' => '13:00',
                'type' => 'end_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '115',
                'name' => '14:00',
                'type' => 'end_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '116',
                'name' => '15:00',
                'type' => 'end_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '117',
                'name' => '16:00',
                'type' => 'end_time',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '118',
                'name' => '17:00',
                'type' => 'end_time',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '119',
                'name' => 'A',
                'type' => 'paralel',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '120',
                'name' => 'B',
                'type' => 'paralel',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '121',
                'name' => 'C',
                'type' => 'paralel',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '122',
                'name' => 'D',
                'type' => 'paralel',
                'state_id' => 1,
            ]); Catalogue::factory()->create([
                'code' => '123',
                'name' => 'MATUTINA',
                'type' => 'workday',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '124',
                'name' => 'VESPERTINA',
                'type' => 'workday',
                'state_id' => 1,
            ]);Catalogue::factory()->create([
                'code' => '125',
                'name' => 'NOCTURNA',
                'type' => 'workday',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '126',
                'name' => 'GENERADO',
                'type' => 'status_cecy',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '127',
                'name' => 'APROBADO',
                'type' => 'status_cecy',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '128',
                'name' => 'INACTIVO',
                'type' => 'status_cecy',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '129',
                'name' => 'RECHAZADO',
                'type' => 'status_cecy',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '130',
                'name' => 'AULA 1',
                'type' => 'classroom',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '131',
                'name' => 'AULA 2',
                'type' => 'classroom',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '132',
                'name' => 'LABORATORIO 1',
                'type' => 'classroom',
                'state_id' => 1,
            ]);
            Catalogue::factory()->create([
                'code' => '133',
                'name' => 'LABORATORIO 2',
                'type' => 'classroom',
                'state_id' => 1,
            ]);
            



    }
}
