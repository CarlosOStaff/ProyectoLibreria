<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([

            [
                'nombre_ciudad' => 'Aguascalientes',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Asientos',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Calvillo',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Cosio',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'El Llano',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Jesus Maria',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Pabellon de Arteaga',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Rincon de Romos',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'San Francisco de los Romo',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'San Jose de Gracia',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Tepezala',
                'estado_id' => 1,
            ],
            [
                'nombre_ciudad' => 'Ensenada',
                'estado_id' => 2,
            ],
            [
                'nombre_ciudad' => 'Mexicali',
                'estado_id' => 2,
            ],
            [
                'nombre_ciudad' => 'Playas de Rosarito',
                'estado_id' => 2,
            ],
            [
                'nombre_ciudad' => 'Tecate',
                'estado_id' => 2,
            ],
            [
                'nombre_ciudad' => 'Tijuana',
                'estado_id' => 2,
            ],
            [
                'nombre_ciudad' => 'Comondu',
                'estado_id' => 3,
            ],
            [
                'nombre_ciudad' => 'La Paz',
                'estado_id' => 3,
            ],
            [
                'nombre_ciudad' => 'Loreto',
                'estado_id' => 3,
            ],
            [
                'nombre_ciudad' => 'Los Cabos',
                'estado_id' => 3,
            ],
            [
                'nombre_ciudad' => 'Mulege',
                'estado_id' => 3,
            ],
            [
                'nombre_ciudad' => 'Calakmul',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Calkini',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Campeche',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Candelaria',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Carmen',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Champoton',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Escarcega',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Hecelchakan',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Hopelchen',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Palizada',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Tenabo',
                'estado_id' => 4,
            ],
            [
                'nombre_ciudad' => 'Acacoyagua',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Acala',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Acapetahua',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Aldama',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Altamirano',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Amatenango de la Frontera',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Amatenango del Valle',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Amatan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Angel Albino Corzo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Arriaga',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Bejucal de Ocampo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Bella Vista',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Benemerito de las Americas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Berriozabal',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Bochil',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Cacahoatan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Capitan Luis Angel Vidal',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Catazaja',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chalchihuitan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chamula',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chanal',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chapultenango',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chenalho',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chiapa de Corzo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chiapilla',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chicoasen',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chicomuselo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Chilon',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Cintalapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Coapilla',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Comitan de Dominguez',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Copainala',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'El Bosque',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'El Parral',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'El Porvenir',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Emiliano Zapata',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Escuintla',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Francisco Leon',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Frontera Comalapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Frontera Hidalgo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Huehuetan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Huitiupan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Huixtla',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Huixtan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ixhuatan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ixtacomitan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ixtapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ixtapangajoya',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Jiquipilas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Jitotol',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Juarez',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'La Concordia',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'La Grandeza',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'La Independencia',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'La Libertad',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'La Trinitaria',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Larrainzar',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Las Margaritas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Las Rosas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Mapastepec',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Maravilla Tenejapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Marques de Comillas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Mazapa de Madero',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Mazatan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Metapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Mezcalapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Mitontic',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Montecristo de Guerrero',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Motozintla',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Nicolas Ruiz',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ocosingo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ocotepec',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ocozocoautla de Espinosa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ostuacan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Osumacinta',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Oxchuc',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Palenque',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Pantelho',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Pantepec',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Pichucalco',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Pijijiapan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Pueblo Nuevo Solistahuacan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Rayon',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Reforma',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Rincon Chamula San Pedro',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Sabanilla',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Salto de Agua',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'San Andres Duraznal',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'San Cristobal de las Casas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'San Fernando',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'San Juan Cancuc',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'San Lucas',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Santiago el Pinar',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Siltepec',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Simojovel',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Sitala',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Socoltenango',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Solosuchiapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Soyalo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Suchiapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Suchiate',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Sunuapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tapachula',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tapalapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tapilula',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tecpatan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tenejapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Teopisca',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tila',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tonala',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Totolapa',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tumbala',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tuxtla Chico',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tuxtla Gutierrez',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tuzantan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Tzimol',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Union Juarez',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Venustiano Carranza',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Villa Comaltitlan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Villa Corzo',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Villaflores',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Yajalon',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Zinacantan',
                'estado_id' => 5,
            ],
            [
                'nombre_ciudad' => 'Ahumada',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Aldama',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Allende',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Aquiles Serdan',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Ascension',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Bachiniva',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Balleza',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Batopilas de Manuel Gomez Morin',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Bocoyna',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Buenaventura',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Camargo',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Carichi',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Casas Grandes',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Chihuahua',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Chinipas',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Coronado',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Coyame del Sotol',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Cuauhtemoc',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Cusihuiriachi',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Delicias',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Dr. Belisario Dominguez',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'El Tule',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Galeana',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Gran Morelos',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Guachochi',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Guadalupe y Calvo',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Guadalupe',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Guazapares',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Guerrero',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Gomez Farias',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Hidalgo del Parral',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Huejotitan',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Ignacio Zaragoza',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Janos',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Jimenez',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Julimes',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Juarez',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'La Cruz',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Lopez',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Madera',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Maguarichi',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Manuel Benavides',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Matachi',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Matamoros',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Meoqui',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Morelos',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Moris',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Namiquipa',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Nonoava',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Nuevo Casas Grandes',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Ocampo',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Ojinaga',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Praxedis G. Guerrero',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Riva Palacio',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Rosales',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Rosario',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'San Francisco de Borja',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'San Francisco de Conchos',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'San Francisco del Oro',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Santa Barbara',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Santa Isabel',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Satevo',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Saucillo',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Temosachic',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Urique',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Uruachi',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Valle de Zaragoza',
                'estado_id' => 6,
            ],
            [
                'nombre_ciudad' => 'Alvaro Obregon',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Azcapotzalco',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Coyoacan',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Cuajimalpa de Morelos',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Cuauhtemoc',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Gustavo A. Madero',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Iztacalco',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Iztapalapa',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'La Magdalena Contreras',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Miguel Hidalgo',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Milpa Alta',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Tlalpan',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Tlahuac',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Venustiano Carranza',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Xochimilco',
                'estado_id' => 7,
            ],
            [
                'nombre_ciudad' => 'Abasolo',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Acuna',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Allende',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Arteaga',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Candela',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Castanos',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Cuatro Cienegas',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Escobedo',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Francisco I. Madero',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Frontera',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'General Cepeda',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Guerrero',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Hidalgo',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Jimenez',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Juarez',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Lamadrid',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Matamoros',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Monclova',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Morelos',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Muzquiz',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Nadadores',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Nava',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Ocampo',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Parras',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Piedras Negras',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Progreso',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Ramos Arizpe',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Sabinas',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Sacramento',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Saltillo',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'San Buenaventura',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'San Juan de Sabinas',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'San Pedro',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Sierra Mojada',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Torreon',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Viesca',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Villa Union',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Zaragoza',
                'estado_id' => 8,
            ],
            [
                'nombre_ciudad' => 'Armeria',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Colima',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Comala',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Coquimatlan',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Cuauhtemoc',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Ixtlahuacan',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Manzanillo',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Minatitlan',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Tecoman',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Villa de Alvarez',
                'estado_id' => 9,
            ],
            [
                'nombre_ciudad' => 'Canatlan',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Canelas',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Coneto de Comonfort',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Cuencame',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Durango',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'El Oro',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'General Simon Bolivar',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Gomez Palacio',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Guadalupe Victoria',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Guanacevi',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Hidalgo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Inde',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Lerdo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Mapimi',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Mezquital',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Nazas',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Nombre de Dios',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Nuevo Ideal',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Ocampo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Otaez',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Panuco de Coronado',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Penon Blanco',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Poanas',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Pueblo Nuevo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Rodeo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'San Bernardo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'San Dimas',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'San Juan de Guadalupe',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'San Juan del Rio',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'San Luis del Cordero',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'San Pedro del Gallo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Santa Clara',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Santiago Papasquiaro',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Suchil',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Tamazula',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Tepehuanes',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Tlahualilo',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Topia',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Vicente Guerrero',
                'estado_id' => 10,
            ],
            [
                'nombre_ciudad' => 'Acambay de Ruiz Castaneda',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Acolman',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Aculco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Almoloya de Alquisiras',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Almoloya de Juarez',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Almoloya del Rio',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Amanalco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Amatepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Amecameca',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Apaxco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Atenco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Atizapan de Zaragoza',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Atizapan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Atlacomulco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Atlautla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Axapusco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ayapango',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Calimaya',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Capulhuac',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chalco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chapa de Mota',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chapultepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chiautla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chicoloapan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chiconcuac',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Chimalhuacan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Coacalco de Berriozabal',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Coatepec Harinas',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Cocotitlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Coyotepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Cuautitlan Izcalli',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Cuautitlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Donato Guerra',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ecatepec de Morelos',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ecatzingo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'El Oro',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Huehuetoca',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Hueypoxtla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Huixquilucan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Isidro Fabela',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ixtapaluca',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ixtapan de la Sal',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ixtapan del Oro',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ixtlahuaca',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Jaltenco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Jilotepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Jilotzingo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Jiquipilco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Jocotitlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Joquicingo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Juchitepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'La Paz',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Lerma',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Luvianos',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Malinalco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Melchor Ocampo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Metepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Mexicaltzingo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Morelos',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Naucalpan de Juarez',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Nextlalpan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Nezahualcoyotl',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Nicolas Romero',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Nopaltepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ocoyoacac',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ocuilan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Otumba',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Otzoloapan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Otzolotepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Ozumba',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Papalotla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Polotitlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Rayon',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'San Antonio la Isla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'San Felipe del Progreso',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'San Jose del Rincon',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'San Martin de las Piramides',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'San Mateo Atenco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'San Simon de Guerrero',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Santo Tomas',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Soyaniquilpan de Juarez',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Sultepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tecamac',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tejupilco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Temamatla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Temascalapa',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Temascalcingo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Temascaltepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Temoaya',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tenancingo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tenango del Aire',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tenango del Valle',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Teoloyucan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Teotihuacan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tepetlaoxtoc',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tepetlixpa',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tepotzotlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tequixquiac',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Texcaltitlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Texcalyacac',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Texcoco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tezoyuca',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tianguistenco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Timilpan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tlalmanalco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tlalnepantla de Baz',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tlatlaya',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Toluca',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tonanitla',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tonatico',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tultepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Tultitlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Valle de Bravo',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Valle de Chalco Solidaridad',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Villa Guerrero',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Villa Victoria',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Villa de Allende',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Villa del Carbon',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Xalatlaco',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Xonacatlan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Zacazonapan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Zacualpan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Zinacantepec',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Zumpahuacan',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Zumpango',
                'estado_id' => 11,
            ],
            [
                'nombre_ciudad' => 'Abasolo',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Acambaro',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Apaseo el Alto',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Apaseo el Grande',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Atarjea',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Celaya',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Comonfort',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Coroneo',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Cortazar',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Cueramaro',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Doctor Mora',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Dolores Hidalgo Cuna de la Independencia Nacional',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Guanajuato',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Huanimaro',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Irapuato',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Jaral del Progreso',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Jerecuaro',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Leon',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Manuel Doblado',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Moroleon',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Ocampo',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Penjamo',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Pueblo Nuevo',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Purisima del Rincon',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Romita',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Salamanca',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Salvatierra',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'San Diego de la Union',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'San Felipe',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'San Francisco del Rincon',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'San Jose Iturbide',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'San Luis de la Paz',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'San Miguel de Allende',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz de Juventino Rosas',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Santiago Maravatio',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Silao de la Victoria',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Tarandacuao',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Tarimoro',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Tierra Blanca',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Uriangato',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Valle de Santiago',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Victoria',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Villagran',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Xichu',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Yuriria',
                'estado_id' => 12,
            ],
            [
                'nombre_ciudad' => 'Acapulco de Juarez',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Acatepec',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Ahuacuotzingo',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Ajuchitlan del Progreso',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Alcozauca de Guerrero',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Alpoyeca',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Apaxtla',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Arcelia',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Atenango del Rio',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Atlamajalcingo del Monte',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Atlixtac',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Atoyac de Alvarez',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Ayutla de los Libres',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Azoyu',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Buenavista de Cuellar',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Chilapa de Alvarez',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Chilpancingo de los Bravo',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Coahuayutla de Jose Maria Izazaga',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cochoapa el Grande',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cocula',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Copala',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Copalillo',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Copanatoyac',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Coyuca de Benitez',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Coyuca de Catalan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cuajinicuilapa',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cualac',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cuautepec',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cuetzala del Progreso',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Cutzamala de Pinzon',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Eduardo Neri',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Florencio Villarreal',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'General Canuto A. Neri',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'General Heliodoro Castillo',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Huamuxtitlan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Huitzuco de los Figueroa',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Iguala de la Independencia',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Igualapa',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Iliatenco',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Ixcateopan de Cuauhtemoc',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Jose Joaquin de Herrera',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Juan R. Escudero',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Juchitan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'La Union de Isidoro Montes de Oca',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Leonardo Bravo',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Malinaltepec',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Marquelia',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Martir de Cuilapan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Metlatonoc',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Mochitlan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Olinala',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Ometepec',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Pedro Ascencio Alquisiras',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Petatlan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Pilcaya',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Pungarabato',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Quechultenango',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'San Luis Acatlan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'San Marcos',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'San Miguel Totolapan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Taxco de Alarcon',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tecoanapa',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tecpan de Galeana',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Teloloapan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tepecoacuilco de Trujano',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tetipac',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tixtla de Guerrero',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tlacoachistlahuaca',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tlacoapa',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tlalchapa',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tlalixtaquilla de Maldonado',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tlapa de Comonfort',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Tlapehuala',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Xalpatlahuac',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Xochihuehuetlan',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Xochistlahuaca',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Zapotitlan Tablas',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Zihuatanejo de Azueta',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Zirandaro',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Zitlala',
                'estado_id' => 13,
            ],
            [
                'nombre_ciudad' => 'Acatlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Acaxochitlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Actopan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Agua Blanca de Iturbide',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Ajacuba',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Alfajayucan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Almoloya',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Apan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Atitalaquia',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Atlapexco',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Atotonilco de Tula',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Atotonilco el Grande',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Calnali',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Cardonal',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Chapantongo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Chapulhuacan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Chilcuautla',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Cuautepec de Hinojosa',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'El Arenal',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Eloxochitlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Emiliano Zapata',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Epazoyucan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Francisco I. Madero',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Huasca de Ocampo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Huautla',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Huazalingo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Huehuetla',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Huejutla de Reyes',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Huichapan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Ixmiquilpan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Jacala de Ledezma',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Jaltocan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Juarez Hidalgo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'La Mision',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Lolotla',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Metepec',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Metztitlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Mineral de la Reforma',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Mineral del Chico',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Mineral del Monte',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Mixquiahuala de Juarez',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Molango de Escamilla',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Nicolas Flores',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Nopala de Villagran',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Omitlan de Juarez',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Pachuca de Soto',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Pacula',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Pisaflores',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Progreso de Obregon',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'San Agustin Metzquititlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'San Agustin Tlaxiaca',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'San Bartolo Tutotepec',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'San Felipe Orizatlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'San Salvador',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Santiago Tulantepec de Lugo Guerrero',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Santiago de Anaya',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Singuilucan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tasquillo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tecozautla',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tenango de Doria',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tepeapulco',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tepehuacan de Guerrero',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tepeji del Rio de Ocampo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tepetitlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tetepango',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tezontepec de Aldama',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tianguistengo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tizayuca',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tlahuelilpan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tlahuiltepa',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tlanalapa',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tlanchinol',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tlaxcoapan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tolcayuca',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tula de Allende',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Tulancingo de Bravo',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Villa de Tezontepec',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Xochiatipan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Xochicoatlan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Yahualica',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Zacualtipan de Angeles',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Zapotlan de Juarez',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Zempoala',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Zimapan',
                'estado_id' => 14,
            ],
            [
                'nombre_ciudad' => 'Acatic',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Acatlan de Juarez',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ahualulco de Mercado',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Amacueca',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Amatitan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ameca',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Arandas',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Atemajac de Brizuela',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Atengo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Atenguillo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Atotonilco el Alto',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Atoyac',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Autlan de Navarro',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ayotlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ayutla',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Bolanos',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Cabo Corrientes',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Canadas de Obregon',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Casimiro Castillo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Chapala',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Chimaltitan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Chiquilistlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Cihuatlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Cocula',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Colotlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Concepcion de Buenos Aires',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Cuautitlan de Garcia Barragan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Cuautla',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Cuquio',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Degollado',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ejutla',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'El Arenal',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'El Grullo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'El Limon',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'El Salto',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Encarnacion de Diaz',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Etzatlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Gomez Farias',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Guachinango',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Guadalajara',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Hostotipaquillo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Huejucar',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Huejuquilla el Alto',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ixtlahuacan de los Membrillos',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ixtlahuacan del Rio',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Jalostotitlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Jamay',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Jesus Maria',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Jilotlan de los Dolores',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Jocotepec',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Juanacatlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Juchitlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'La Barca',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'La Huerta',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'La Manzanilla de la Paz',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Lagos de Moreno',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Magdalena',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Mascota',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Mazamitla',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Mexticacan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Mezquitic',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Mixtlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ocotlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Ojuelos de Jalisco',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Pihuamo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Poncitlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Puerto Vallarta',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Quitupan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Cristobal de la Barranca',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Diego de Alejandria',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Gabriel',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Ignacio Cerro Gordo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Juan de los Lagos',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Juanito de Escobedo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Julian',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Marcos',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Martin Hidalgo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Martin de Bolanos',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Miguel el Alto',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Pedro Tlaquepaque',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'San Sebastian del Oeste',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Santa Maria de los Angeles',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Santa Maria del Oro',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Sayula',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tala',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Talpa de Allende',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tamazula de Gordiano',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tapalpa',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tecalitlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Techaluta de Montenegro',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tecolotlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tenamaxtlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Teocaltiche',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Teocuitatlan de Corona',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tepatitlan de Morelos',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tequila',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Teuchitlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tizapan el Alto',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tlajomulco de Zuniga',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Toliman',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tomatlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tonala',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tonaya',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tonila',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Totatiche',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tototlan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tuxcacuesco',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tuxcueca',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Tuxpan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Union de San Antonio',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Union de Tula',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Valle de Guadalupe',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Valle de Juarez',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Villa Corona',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Villa Guerrero',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Villa Hidalgo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Villa Purificacion',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Yahualica de Gonzalez Gallo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zacoalco de Torres',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zapopan',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zapotiltic',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zapotitlan de Vadillo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zapotlan del Rey',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zapotlan el Grande',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Zapotlanejo',
                'estado_id' => 15,
            ],
            [
                'nombre_ciudad' => 'Acuitzio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Aguililla',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Alvaro Obregon',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Angamacutiro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Angangueo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Apatzingan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Aporo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Aquila',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Ario',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Arteaga',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Brisenas',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Buenavista',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Caracuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Charapan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Charo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Chavinda',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Cheran',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Chilchota',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Chinicuila',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Chucandiro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Churintzio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Churumuco',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Coahuayana',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Coalcoman de Vazquez Pallares',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Coeneo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Cojumatlan de Regules',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Contepec',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Copandaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Cotija',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Cuitzeo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Ecuandureo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Epitacio Huerta',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Erongaricuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Gabriel Zamora',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Hidalgo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Huandacareo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Huaniqueo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Huetamo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Huiramba',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Indaparapeo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Irimbo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Ixtlan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Jacona',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Jimenez',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Jiquilpan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Jose Sixto Verduzco',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Juarez',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Jungapeo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'La Huacana',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'La Piedad',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Lagunillas',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Lazaro Cardenas',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Los Reyes',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Madero',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Maravatio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Marcos Castellanos',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Morelia',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Morelos',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Mugica',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Nahuatzen',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Nocupetaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Nuevo Parangaricutiro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Nuevo Urecho',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Numaran',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Ocampo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Pajacuaran',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Panindicuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Paracho',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Paracuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Patzcuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Penjamillo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Periban',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Purepero',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Puruandiro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Querendaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Quiroga',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Sahuayo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Salvador Escalante',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'San Lucas',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Maya',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Senguio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Susupuato',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tacambaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tancitaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tangamandapio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tangancicuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tanhuato',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Taretan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tarimbaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tepalcatepec',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tingambato',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tinguindin',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tiquicheo de Nicolas Romero',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tlalpujahua',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tlazazalca',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tocumbo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tumbiscatio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Turicato',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tuxpan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tuzantla',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tzintzuntzan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Tzitzio',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Uruapan',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Venustiano Carranza',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Villamar',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Vista Hermosa',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Yurecuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Zacapu',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Zamora',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Zinaparo',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Zinapecuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Ziracuaretiro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Zitacuaro',
                'estado_id' => 16,
            ],
            [
                'nombre_ciudad' => 'Amacuzac',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Atlatlahucan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Axochiapan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Ayala',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Coatlan del Rio',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Cuautla',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Cuernavaca',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Emiliano Zapata',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Huitzilac',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Jantetelco',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Jiutepec',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Jojutla',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Jonacatepec de Leandro Valle',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Mazatepec',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Miacatlan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Ocuituco',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Puente de Ixtla',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Temixco',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Temoac',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tepalcingo',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tepoztlan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tetecala',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tetela del Volcan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tlalnepantla',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tlaltizapan de Zapata',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tlaquiltenango',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Tlayacapan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Totolapan',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Xochitepec',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Yautepec',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Yecapixtla',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Zacatepec',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Zacualpan de Amilpas',
                'estado_id' => 17,
            ],
            [
                'nombre_ciudad' => 'Acaponeta',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Ahuacatlan',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Amatlan de Canas',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Bahia de Banderas',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Compostela',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Del Nayar',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Huajicori',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Ixtlan del Rio',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Jala',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'La Yesca',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Rosamorada',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Ruiz',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'San Blas',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'San Pedro Lagunillas',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Santa Maria del Oro',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Santiago Ixcuintla',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Tecuala',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Tepic',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Tuxpan',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Xalisco',
                'estado_id' => 18,
            ],
            [
                'nombre_ciudad' => 'Abasolo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Agualeguas',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Allende',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Anahuac',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Apodaca',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Aramberri',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Bustamante',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Cadereyta Jimenez',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Cerralvo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'China',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Cienega de Flores',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Doctor Arroyo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Doctor Coss',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Doctor Gonzalez',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'El Carmen',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Galeana',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Garcia',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'General Bravo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'General Escobedo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'General Teran',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'General Trevino',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'General Zaragoza',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'General Zuazua',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Guadalupe',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Hidalgo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Higueras',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Hualahuises',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Iturbide',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Juarez',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Lampazos de Naranjo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Linares',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Los Aldamas',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Los Herreras',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Los Ramones',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Marin',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Melchor Ocampo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Mier y Noriega',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Mina',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Montemorelos',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Monterrey',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Paras',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Pesqueria',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Rayones',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Sabinas Hidalgo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Salinas Victoria',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'San Nicolas de los Garza',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'San Pedro Garza Garcia',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Santiago',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Vallecillo',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Villaldama',
                'estado_id' => 19,
            ],
            [
                'nombre_ciudad' => 'Abejones',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Acatlan de Perez Figueroa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Animas Trujano',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Asuncion Cacalotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Asuncion Cuyotepeji',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Asuncion Ixtaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Asuncion Nochixtlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Asuncion Ocotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Asuncion Tlacolulita',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Ayoquezco de Aldama',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Ayotzintepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Calihuala',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Candelaria Loxicha',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Capulalpam de Mendez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Chahuites',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Chalcatongo de Hidalgo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Chiquihuitlan de Benito Juarez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Cienega de Zimatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Ciudad Ixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Coatecas Altas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Coicoyan de las Flores',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Concepcion Buenavista',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Concepcion Papalo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Constancia del Rosario',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Cosolapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Cosoltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Cuilapam de Guerrero',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Cuna de la Independencia de Oaxaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Cuyamecalco Villa de Zaragoza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'El Barrio de la Soledad',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'El Espinal',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Eloxochitlan de Flores Magon',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Fresnillo de Trujano',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Guadalupe Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Guadalupe de Ramirez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Guelatao de Juarez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Guevea de Humboldt',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Heroica Ciudad de Ejutla de Crespo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Heroica Ciudad de Huajuapan de Leon',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Heroica Ciudad de Juchitan de Zaragoza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Heroica Ciudad de Tlaxiaco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Heroica Villa Tezoatlan de Segura y Luna',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Huautepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Huautla de Jimenez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Ixpantepec Nieves',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Ixtlan de Juarez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'La Compania',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'La Pe',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'La Reforma',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'La Trinidad Vista Hermosa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Loma Bonita',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Apasco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Jaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Ocotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Penasco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Teitipac',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Tequisistlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Tlacotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Yodocono de Porfirio Diaz',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Magdalena Zahuatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Mariscala de Juarez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Martires de Tacubaya',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Matias Romero Avendano',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Mazatlan Villa de Flores',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Mesones Hidalgo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Miahuatlan de Porfirio Diaz',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Mixistlan de la Reforma',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Monjas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Natividad',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Nazareno Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Nejapa de Madero',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Nuevo Zoquiapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Oaxaca de Juarez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Ocotlan de Morelos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Pinotepa de Don Luis',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Pluma Hidalgo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Putla Villa de Guerrero',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Reforma de Pineda',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Reyes Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Rojas de Cuauhtemoc',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Salina Cruz',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Amatengo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Atenango',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Chayuco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Loxicha',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Tlacotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin Yatareni',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Agustin de las Juntas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Cabecera Nueva',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Dinicuiti',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Huaxpaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Huayapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Ixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Lagunas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Nuxino',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Paxtlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Sinaxtla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Solaga',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Teotilalpam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Tepetlapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Yaa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Zabache',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Andres Zautla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonino Castillo Velasco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonino Monte Verde',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonino el Alto',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonio Acutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonio Huitepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonio Nanahuatipam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonio Sinicahua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonio Tepetlapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Antonio de la Cal',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Baltazar Chichicapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Baltazar Loxicha',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Baltazar Yatzachi el Bajo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolo Coyotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolo Soyaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolo Yautepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolome Ayautla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolome Loxicha',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolome Quialana',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolome Yucuane',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bartolome Zoogocho',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Bernardo Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Blas Atempa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Carlos Yautepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Cristobal Amatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Cristobal Amoltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Cristobal Lachirioag',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Cristobal Suchixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Dionisio Ocotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Dionisio Ocotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Dionisio del Mar',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Esteban Atatlahuca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Felipe Jalapa de Diaz',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Felipe Tejalapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Felipe Usila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Cahuacua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Cajonos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Chapulapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Chindua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Huehuetlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Ixhuatan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Jaltepetongo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Lachigolo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Logueche',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Nuxano',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Ozolotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Sola',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Telixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Teopan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco Tlapancingo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Francisco del Mar',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Gabriel Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Ildefonso Amatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Ildefonso Sola',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Ildefonso Villa Alta',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jacinto Amilpas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jacinto Tlacotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Coatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Silacayoapilla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Sosola',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Taviche',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Tecoatl',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Tlacochahuaya',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jorge Nuchita',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose Ayuquila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose Chiltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose Estancia Grande',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose Independencia',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose Lachiguiri',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose Tenango',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose del Penasco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Jose del Progreso',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Achiutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Atepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Atatlahuca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Coixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Cuicatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Guelache',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Jayacatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Lo de Soto',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Suchitepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Tlachichilco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Tlacoatzintepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Tuxtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Bautista Valle Nacional',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Cacahuatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Chicomezuchil',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Chilateca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Cieneguilla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Coatzospam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Colorado',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Comaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Cotzocon',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Diuxi',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Evangelista Analco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Guelavia',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Guichicovi',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Ihualtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Juquila Mixes',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Juquila Vijanos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Lachao',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Lachigalla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Lajarcia',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Lalana',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Mazatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Numi',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Ozolotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Petlapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Quiahije',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Quiotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Sayultepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Tabaa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Tamazola',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Teita',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Teitipac',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Tepeuxila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Teposcolula',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Yaee',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Yatzona',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan Yucuita',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan de los Cues',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan del Estado',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Juan del Rio',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo Albarradas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo Cacaotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo Cuaunecuiltitla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo Texmelucan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo Victoria',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lucas Camotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lucas Ojitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lucas Quiavini',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Lucas Zoquiapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Luis Amatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Marcial Ozolotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Marcos Arteaga',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Huamelulpam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Itunyoso',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Lachila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Peras',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Tilcajete',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Toxpalan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin Zacatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Martin de los Cansecos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Cajonos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Etlatongo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Nejapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Penasco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Pinas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Rio Hondo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Sindihui',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Tlapiltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Yoloxochitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo Yucutindoo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Mateo del Mar',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Melchor Betaza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Achiutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Ahuehuetitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Aloapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Amatitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Amatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Chicahua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Chimalapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Coatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Ejutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Huautla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Panixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Peras',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Piedras',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Quetzaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Santa Flor',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Soyaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Suchixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tecomatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tenango',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tequixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tilquiapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tlacamama',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tlacotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Tulancingo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel Yotao',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel del Puerto',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel del Rio',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Miguel el Grande',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Nicolas Hidalgo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Nicolas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Coatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Cuatro Venados',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Huitzo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Huixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Macuiltianguis',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Tijaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Villa de Mitla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pablo Yaganiza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Amuzgos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Apostol',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Atoyac',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Cajonos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Comitancillo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Coxcaltepec Cantaros',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Huamelula',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Huilotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Ixcatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Ixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Jaltepetongo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Jicayan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Jocotipac',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Juchatengo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Martir Quiechapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Martir Yucuxaco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Martir',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Molinos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Nopala',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Ocopetatillo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Ocotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Pochutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Quiatoni',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Sochiapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Tapanatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Taviche',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Teozacoalco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Teutila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Tidaa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Topiltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Totolapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Yaneri',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Yolox',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro Yucunama',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro el Alto',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro y San Pablo Ayutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro y San Pablo Teposcolula',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Pedro y San Pablo Tequixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Raymundo Jalpan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Abasolo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Coatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Ixcapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Nicananduta',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Rio Hondo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Tecomaxtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Teitipac',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Tutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Simon Almolongas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Simon Zahuatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Vicente Coatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Vicente Lachixio',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'San Vicente Nunu',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Ateixtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Cuauhtemoc',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Tavela',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Tlapacoyan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Yareni',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Zegache',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana del Valle',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ana',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catalina Quieri',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Cuixtla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Ixtepeji',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Juquila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Lachatao',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Loxicha',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Mechoacan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Minas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Quiane',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Quioquitani',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Tayata',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Ticua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Yosonotu',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Zapoquila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Acatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Amilpas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Itundujia',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Mixtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Nundaco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Papalutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Tacache de Mina',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Tacahua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Tayata',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Xitla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Xoxocotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Zenzontepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz de Bravo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Gertrudis',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ines Yatzeche',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ines de Zaragoza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Ines del Monte',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Lucia Miahuatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Lucia Monteverde',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Lucia Ocotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Lucia del Camino',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Magdalena Jicotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Alotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Apazco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Atzompa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Camotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Chachoapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Chilchotla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Chimalapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Colotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Cortijo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Coyotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Ecatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Guelace',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Guienagati',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Huatulco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Huazolotitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Ipalapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Ixcatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Jacatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Jalapa del Marques',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Jaltianguis',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Lachixio',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Mixtequilla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Nativitas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Nduayaco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Ozolotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Papalo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Penoles',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Petapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Quiegolani',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Sola',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Tataltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Tecomavaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Temaxcalapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Temaxcaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Teopoxco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Tepantlali',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Texcatitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Tlahuitoltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Tlalixtac',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Tonombre_ciudadca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Totolapilla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Xadani',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Yalina',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Yavesia',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Yolotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Yosoyua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Yucuhiti',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Zacatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Zaniza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria Zoquitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria del Rosario',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria del Tule',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santa Maria la Asuncion',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Amoltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Apoala',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Apostol',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Astata',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Atitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Ayuquililla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Cacaloxtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Camotlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Chazumba',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Choapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Comaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Huajolotitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Huauclilla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Ihuitlan Plumas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Ixcuintepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Ixtayutla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Jamiltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Jocotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Juxtlahuaca',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Lachiguiri',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Lalopa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Laollaga',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Laxopa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Llano Grande',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Matatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Miltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Minas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Nacaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Nejapilla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Niltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Nundiche',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Nuyoo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Pinotepa Nacional',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Suchilquitongo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tamazola',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tapextla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tenango',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tepetlapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tetepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Texcalcingo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Textitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tilantongo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tillo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Tlazoyaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Xanica',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Xiacui',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Yaitepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Yaveo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Yolomecatl',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Yosondua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Yucuyachi',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Zacatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago Zoochila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santiago del Rio',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Albarradas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Armenta',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Chihuitan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Ingenio',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Ixcatlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Nuxaa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Ozolotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Petapa',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Roayaga',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Tehuantepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Teojomulco',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Tepuxtepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Tlatayapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Tomaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Tonala',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Tonaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Xagacia',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Yanhuitlan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Yodohino',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo Zanatepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo de Morelos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Tomas Jalieza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Tomas Mazaltepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Tomas Ocotepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santo Tomas Tamazulapan',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santos Reyes Nopala',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santos Reyes Papalo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santos Reyes Tepejillo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Santos Reyes Yucuna',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Silacayoapam',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Sitio de Xitlapehua',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Soledad Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tamazulapam del Espiritu Santo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tanetze de Zaragoza',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Taniche',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tataltepec de Valdes',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Teococuilco de Marcos Perez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Teotitlan de Flores Magon',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Teotitlan del Valle',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Teotongo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tepelmeme Villa de Morelos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tlacolula de Matamoros',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tlacotepec Plumas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Tlalixtac de Cabrera',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Totontepec Villa de Morelos',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Trinidad Zaachila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Union Hidalgo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Valerio Trujano',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa Diaz Ordaz',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa Hidalgo',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa Sola de Vega',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa Talea de Castro',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa Tejupam de la Union',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa de Chilapa de Diaz',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa de Etla',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa de Tamazulapam del Progreso',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa de Tututepec',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Villa de Zaachila',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Yaxe',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Yogana',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Yutanduchi de Guerrero',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Zapotitlan Lagunas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Zapotitlan Palmas',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Zimatlan de Alvarez',
                'estado_id' => 20,
            ],
            [
                'nombre_ciudad' => 'Acajete',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Acateno',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Acatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Acatzingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Acteopan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ahuacatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ahuatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ahuazotepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ahuehuetitla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ajalpan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Albino Zertuche',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Aljojuca',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Altepexi',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Amixtlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Amozoc',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Aquixtla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atempan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atexcal',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atlequizayan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atlixco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atoyatempan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atzala',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atzitzihuacan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Atzitzintla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Axutla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ayotoxco de Guerrero',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Calpan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Caltepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Camocuautla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Canada Morelos',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Caxhuacan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chalchicomula de Sesma',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chapulco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chiautla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chiautzingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chichiquila',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chiconcuautla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chietla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chigmecatitlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chignahuapan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chignautla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chila de la Sal',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chila',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chilchotla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Chinantla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Coatepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Coatzingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cohetzala',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cohuecan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Coronango',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Coxcatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Coyomeapan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Coyotepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuapiaxtla de Madero',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuautempan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuautinchan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuautlancingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuayuca de Andrade',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuetzalan del Progreso',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Cuyoaco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Domingo Arenas',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Eloxochitlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Epatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Esperanza',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Francisco Z. Mena',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'General Felipe Angeles',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Guadalupe Victoria',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Guadalupe',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Hermenegildo Galeana',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Honey',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huaquechula',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huatlatlauca',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huauchinango',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huehuetla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huehuetlan el Chico',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huehuetlan el Grande',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huejotzingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Hueyapan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Hueytamalco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Hueytlalpan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huitzilan de Serdan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Huitziltepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ixcamilpa de Guerrero',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ixcaquixtla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ixtacamaxtitlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ixtepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Izucar de Matamoros',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Jalpan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Jolalpan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Jonotla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Jopala',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Juan C. Bonilla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Juan Galindo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Juan N. Mendez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'La Magdalena Tlatlauquitepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Lafragua',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Libres',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Los Reyes de Juarez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Mazapiltepec de Juarez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Mixtla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Molcaxac',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Naupan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Nauzontla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Nealtican',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Nicolas Bravo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Nopalucan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ocotepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Ocoyucan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Olintla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Oriental',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Pahuatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Palmar de Bravo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Pantepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Petlalcingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Piaxtla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Puebla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Quecholac',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Quimixtlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Rafael Lara Grajales',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Andres Cholula',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Antonio Canada',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Diego la Mesa Tochimiltzingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Felipe Teotlalcingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Felipe Tepatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Gabriel Chilac',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Gregorio Atzompa',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Tecuanipan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Xayacatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Jose Chiapa',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Jose Miahuatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Juan Atenco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Juan Atzompa',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Martin Texmelucan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Martin Totoltepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Matias Tlalancaleca',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Miguel Ixitlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Miguel Xoxtla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Nicolas Buenos Aires',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Nicolas de los Ranchos',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Pablo Anicano',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Pedro Cholula',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Pedro Yeloixtlahuaca',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Salvador Huixcolotla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Salvador el Seco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Salvador el Verde',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'San Sebastian Tlacotepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Tlaltempan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Santa Ines Ahuatempan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Santa Isabel Cholula',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Santiago Miahuatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Santo Tomas Hueyotlipan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Soltepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tecali de Herrera',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tecamachalco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tecomatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tehuacan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tehuitzingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tenampulco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Teopantlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Teotlalco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepanco de Lopez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepango de Rodriguez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepatlaxco de Hidalgo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepeaca',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepemaxalco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepeojuma',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepetzintla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepexco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepexi de Rodriguez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepeyahualco de Cuauhtemoc',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tepeyahualco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tetela de Ocampo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Teteles de Avila Castillo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Teziutlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tianguismanalco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tilapa',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlachichuca',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlacotepec de Benito Juarez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlacuilotepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlahuapan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlaltenango',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlanepantla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlaola',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlapacoya',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlapanala',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlatlauquitepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tlaxco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tochimilco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tochtepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Totoltepec de Guerrero',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tulcingo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tuzamapan de Galeana',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Tzicatlacoyan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Venustiano Carranza',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Vicente Guerrero',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xayacatlan de Bravo',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xicotepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xicotlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xiutetelco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xochiapulco',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xochiltepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xochitlan Todos Santos',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Xochitlan de Vicente Suarez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Yaonahuac',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Yehualtepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zacapala',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zacapoaxtla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zacatlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zapotitlan de Mendez',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zapotitlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zaragoza',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zautla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zihuateutla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zinacatepec',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zongozotla',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zoquiapan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Zoquitlan',
                'estado_id' => 21,
            ],
            [
                'nombre_ciudad' => 'Amealco de Bonfil',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Arroyo Seco',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Cadereyta de Montes',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Colon',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Corregidora',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'El Marques',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Ezequiel Montes',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Huimilpan',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Jalpan de Serra',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Landa de Matamoros',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Pedro Escobedo',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Penamiller',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Pinal de Amoles',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Queretaro',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'San Joaquin',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'San Juan del Rio',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Tequisquiapan',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Toliman',
                'estado_id' => 22,
            ],
            [
                'nombre_ciudad' => 'Bacalar',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Cozumel',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Felipe Carrillo Puerto',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Isla Mujeres',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Jose Maria Morelos',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Lazaro Cardenas',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Othon P. Blanco',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Puerto Morelos',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Solidaridad',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Tulum',
                'estado_id' => 23,
            ],
            [
                'nombre_ciudad' => 'Ahualulco',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Alaquines',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Aquismon',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Armadillo de los Infante',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Axtla de Terrazas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Cardenas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Catorce',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Cedral',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Cerritos',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Cerro de San Pedro',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Charcas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Ciudad Fernandez',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Ciudad Valles',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Ciudad del Maiz',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Coxcatlan',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Ebano',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'El Naranjo',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Guadalcazar',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Huehuetlan',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Lagunillas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Matehuala',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Matlapa',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Mexquitic de Carmona',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Moctezuma',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Rayon',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Rioverde',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Salinas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'San Antonio',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'San Ciro de Acosta',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'San Luis Potosi',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'San Martin Chalchicuautla',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'San Nicolas Tolentino',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'San Vicente Tancuayalab',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Santa Maria del Rio',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Santo Domingo',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Soledad de Graciano Sanchez',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tamasopo',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tamazunchale',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tampacan',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tampamolon Corona',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tamuin',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tancanhuitz',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tanlajas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tanquian de Escobedo',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Tierra Nueva',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Vanegas',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Venado',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa Hidalgo',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa Juarez',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa de Arista',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa de Arriaga',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa de Guadalupe',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa de Ramos',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa de Reyes',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Villa de la Paz',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Xilitla',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Zaragoza',
                'estado_id' => 24,
            ],
            [
                'nombre_ciudad' => 'Ahome',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Angostura',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Badiraguato',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Choix',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Concordia',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Cosala',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Culiacan',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'El Fuerte',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Elota',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Escuinapa',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Guasave',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Mazatlan',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Mocorito',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Navolato',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Rosario',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Salvador Alvarado',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'San Ignacio',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Sinaloa',
                'estado_id' => 25,
            ],
            [
                'nombre_ciudad' => 'Aconchi',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Agua Prieta',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Alamos',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Altar',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Arivechi',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Arizpe',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Atil',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Bacadehuachi',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Bacanora',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Bacerac',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Bacoachi',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Bacum',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Banamichi',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Baviacora',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Bavispe',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Benjamin Hill',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Caborca',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Cajeme',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Cananea',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Carbo',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Cucurpe',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Cumpas',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Divisaderos',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Empalme',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Etchojoa',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Fronteras',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'General Plutarco Elias Calles',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Granados',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Guaymas',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Hermosillo',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Huachinera',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Huasabas',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Huatabampo',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Huepac',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Imuris',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'La Colorada',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Magdalena',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Mazatan',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Moctezuma',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Naco',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Nacori Chico',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Nacozari de Garcia',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Navojoa',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Nogales',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Onavas',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Opodepe',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Oquitoa',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Pitiquito',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Puerto Penasco',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Quiriego',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Rayon',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Rosario',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Sahuaripa',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'San Felipe de Jesus',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'San Ignacio Rio Muerto',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'San Javier',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'San Luis Rio Colorado',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'San Miguel de Horcasitas',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'San Pedro de la Cueva',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Santa Ana',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Saric',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Soyopa',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Suaqui Grande',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Tepache',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Trincheras',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Tubutama',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Ures',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Villa Hidalgo',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Villa Pesqueira',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Yecora',
                'estado_id' => 26,
            ],
            [
                'nombre_ciudad' => 'Balancan',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Cardenas',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Centla',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Centro',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Comalcalco',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Cunduacan',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Emiliano Zapata',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Huimanguillo',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Jalapa',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Jalpa de Mendez',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Jonuta',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Macuspana',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Nacajuca',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Paraiso',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Tacotalpa',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Teapa',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Tenosique',
                'estado_id' => 27,
            ],
            [
                'nombre_ciudad' => 'Abasolo',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Aldama',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Altamira',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Antiguo Morelos',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Burgos',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Bustamante',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Camargo',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Casas',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Ciudad Madero',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Cruillas',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'El Mante',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Gomez Farias',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Gonzalez',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Guemez',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Guerrero',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Gustavo Diaz Ordaz',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Hidalgo',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Jaumave',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Jimenez',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Llera',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Mainero',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Matamoros',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Mendez',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Mier',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Miguel Aleman',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Miquihuana',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Nuevo Laredo',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Nuevo Morelos',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Ocampo',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Padilla',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Palmillas',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Reynosa',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Rio Bravo',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'San Carlos',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'San Fernando',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'San Nicolas',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Soto la Marina',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Tampico',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Tula',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Valle Hermoso',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Victoria',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Villagran',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Xicotencatl',
                'estado_id' => 28,
            ],
            [
                'nombre_ciudad' => 'Acuamanala de Miguel Hidalgo',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Amaxac de Guerrero',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Apetatitlan de Antonio Carvajal',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Apizaco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Atlangatepec',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Atltzayanca',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Calpulalpan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Chiautempan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Contla de Juan Cuamatzi',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Cuapiaxtla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Cuaxomulco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'El Carmen Tequexquitla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Emiliano Zapata',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Espanita',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Huamantla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Hueyotlipan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Ixtacuixtla de Mariano Matamoros',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Ixtenco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'La Magdalena Tlaltelulco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Lazaro Cardenas',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Mazatecochco de Jose Maria Morelos',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Munoz de Domingo Arenas',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Nanacamilpa de Mariano Arista',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Nativitas',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Panotla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Papalotla de Xicohtencatl',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Damian Texoloc',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Francisco Tetlanohcan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Jeronimo Zacualpan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Jose Teacalco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Juan Huactzinco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Lorenzo Axocomanitla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Lucas Tecopilco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'San Pablo del Monte',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Sanctorum de Lazaro Cardenas',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Santa Ana Nopalucan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Santa Apolonia Teacalco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Santa Catarina Ayometla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Quilehtla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Santa Cruz Tlaxcala',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Santa Isabel Xiloxoxtla',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tenancingo',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Teolocholco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tepetitla de Lardizabal',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tepeyanco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Terrenate',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tetla de la Solidaridad',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tetlatlahuca',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tlaxcala',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tlaxco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tocatlan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Totolac',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Tzompantepec',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Xaloztoc',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Xaltocan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Xicohtzinco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Yauhquemehcan',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Zacatelco',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Ziltlaltepec de Trinidad Sanchez Santos',
                'estado_id' => 29,
            ],
            [
                'nombre_ciudad' => 'Acajete',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Acatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Acayucan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Actopan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Acula',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Acultzingo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Agua Dulce',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Alamo Temapache',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Alpatlahuac',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Alto Lucero de Gutierrez Barrios',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Altotonga',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Alvarado',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Amatitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Amatlan de los Reyes',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Angel R. Cabada',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Apazapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Aquila',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Astacinga',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Atlahuilco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Atoyac',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Atzacan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Atzalan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ayahualulco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Banderilla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Boca del Rio',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Calcahualco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Camaron de Tejeda',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Camerino Z. Mendoza',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Carlos A. Carrillo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Carrillo Puerto',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Castillo de Teayo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Catemaco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cazones de Herrera',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cerro Azul',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chacaltianguis',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chalma',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chiconombre_ciudadl',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chiconquiaco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chicontepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chinombre_ciudadca',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chinampa de Gorostiza',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chocaman',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chontla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Chumatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Citlaltepetl',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coacoatzintla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coahuitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coatepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coatzacoalcos',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coatzintla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coetzala',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Colipa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Comapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cordoba',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cosamaloapan de Carpio',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cosautlan de Carvajal',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coscomatepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cosoleacaque',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cotaxtla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coxquihui',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Coyutla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cuichapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Cuitlahuac',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'El Higo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Emiliano Zapata',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Espinal',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Filomeno Mata',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Fortin',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Gutierrez Zamora',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Hidalgotitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Huatusco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Huayacocotla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Hueyapan de Ocampo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Huiloapan de Cuauhtemoc',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ignacio de la Llave',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ilamatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Isla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixcatepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixhuacan de los Reyes',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixhuatlan de Madero',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixhuatlan del Cafe',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixhuatlan del Sureste',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixhuatlancillo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixmatlahuacan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ixtaczoquitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jalacingo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jalcomulco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jaltipan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jamapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jesus Carranza',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jilotepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Jose Azueta',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Juan Rodriguez Clara',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Juchique de Ferrer',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'La Antigua',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'La Perla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Landero y Coss',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Las Choapas',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Las Minas',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Las Vigas de Ramirez',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Lerdo de Tejada',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Los Reyes',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Magdalena',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Maltrata',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Manlio Fabio Altamirano',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Mariano Escobedo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Martinez de la Torre',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Mecatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Mecayapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Medellin de Bravo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Miahuatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Minatitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Misantla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Mixtla de Altamirano',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Moloacan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Nanchital de Lazaro Cardenas del Rio',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Naolinco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Naranjal',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Naranjos Amatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Nautla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Nogales',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Oluta',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Omealca',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Orizaba',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Otatitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Oteapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ozuluama de Mascarenas',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Pajapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Panuco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Papantla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Paso de Ovejas',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Paso del Macho',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Perote',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Platon Sanchez',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Playa Vicente',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Poza Rica de Hidalgo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Pueblo Viejo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Puente Nacional',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Rafael Delgado',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Rafael Lucio',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Rio Blanco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Saltabarranca',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'San Andres Tenejapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'San Andres Tuxtla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'San Juan Evangelista',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'San Rafael',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Santiago Sochiapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Santiago Tuxtla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Sayula de Aleman',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Sochiapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Soconusco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Soledad Atzompa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Soledad de Doblado',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Soteapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tamalin',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tamiahua',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tampico Alto',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tancoco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tantima',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tantoyuca',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tatahuicapan de Juarez',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tatatila',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tecolutla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tehuipango',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tempoal',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tenampa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tenochtitlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Teocelo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tepatlaxco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tepetlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tepetzintla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tequila',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Texcatepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Texhuacan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Texistepec',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tezonapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tierra Blanca',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tihuatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlachichilco',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlacojalpan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlacolulan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlacotalpan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlacotepec de Mejia',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlalixcoyan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlalnelhuayocan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlaltetela',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlapacoyan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlaquilpa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tlilapan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tomatlan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tonayan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Totutla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tres Valles',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tuxpan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Tuxtilla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Ursulo Galvan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Uxpanapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Vega de Alatorre',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Veracruz',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Villa Aldama',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Xalapa',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Xico',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Xoxocotla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Yanga',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Yecuatla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Zacualpan',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Zaragoza',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Zentla',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Zongolica',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Zontecomatlan de Lopez y Fuentes',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Zozocolco de Hidalgo',
                'estado_id' => 30,
            ],
            [
                'nombre_ciudad' => 'Abala',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Acanceh',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Akil',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Baca',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Bokoba',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Buctzotz',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Cacalchen',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Calotmul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Cansahcab',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Cantamayec',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Celestun',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Cenotillo',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chacsinkin',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chankom',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chapab',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chemax',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chichimila',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chicxulub Pueblo',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chikindzonot',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chochola',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Chumayel',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Conkal',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Cuncunul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Cuzama',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzan',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzemul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzidzantun',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzilam Gonzalez',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzilam de Bravo',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzitas',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Dzoncauich',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Espita',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Halacho',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Hocaba',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Hoctun',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Homun',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Huhi',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Hunucma',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Ixil',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Izamal',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Kanasin',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Kantunil',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Kaua',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Kinchil',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Kopoma',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Mama',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Mani',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Maxcanu',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Mayapan',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Merida',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Mococha',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Motul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Muna',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Muxupip',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Opichen',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Oxkutzcab',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Panaba',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Peto',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Progreso',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Quintana Roo',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Rio Lagartos',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Sacalum',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Samahil',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'San Felipe',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Sanahcat',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Santa Elena',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Seye',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Sinanche',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Sotuta',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Sucila',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Sudzal',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Suma',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tahdziu',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tahmek',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Teabo',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tecoh',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tekal de Venegas',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tekanto',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tekax',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tekit',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tekom',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Telchac Pueblo',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Telchac Puerto',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Temax',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Temozon',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tepakan',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tetiz',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Teya',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Ticul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Timucuy',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tinum',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tixcacalcupul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tixkokob',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tixmehuac',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tixpehual',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tizimin',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tunkas',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Tzucacab',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Uayma',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Ucu',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Uman',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Valladolid',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Xocchel',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Yaxcaba',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Yaxkukul',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Yobain',
                'estado_id' => 31,
            ],
            [
                'nombre_ciudad' => 'Apozol',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Apulco',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Atolinga',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Benito Juarez',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Calera',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Canitas de Felipe Pescador',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Chalchihuites',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Concepcion del Oro',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Cuauhtemoc',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'El Plateado de Joaquin Amaro',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'El Salvador',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Fresnillo',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Genaro Codina',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'General Enrique Estrada',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'General Francisco R. Murguia',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'General Panfilo Natera',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Guadalupe',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Huanusco',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Jalpa',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Jerez',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Jimenez del Teul',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Juan Aldama',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Juchipila',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Loreto',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Luis Moya',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Mazapil',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Melchor Ocampo',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Mezquital del Oro',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Miguel Auza',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Momax',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Monte Escobedo',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Morelos',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Moyahua de Estrada',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Nochistlan de Mejia',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Noria de Angeles',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Ojocaliente',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Panuco',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Pinos',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Rio Grande',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Sain Alto',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Santa Maria de la Paz',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Sombrerete',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Susticacan',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Tabasco',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Tepechitlan',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Tepetongo',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Teul de Gonzalez Ortega',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Tlaltenango de Sanchez Roman',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Trancoso',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Trinidad Garcia de la Cadena',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Valparaiso',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Vetagrande',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Villa Garcia',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Villa Gonzalez Ortega',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Villa Hidalgo',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Villa de Cos',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Villanueva',
                'estado_id' => 32,
            ],
            [
                'nombre_ciudad' => 'Zacatecas',
                'estado_id' => 32,
            ],
        ]);
    }
}
