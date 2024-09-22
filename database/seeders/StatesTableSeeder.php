<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 70,
                'id' => 1,
                'name' => 'Southern Nations, Nationalities, and Peoples\' Region',
            ),
            1 => 
            array (
                'country_id' => 70,
                'id' => 2,
                'name' => 'Somali Region',
            ),
            2 => 
            array (
                'country_id' => 70,
                'id' => 3,
                'name' => 'Amhara Region',
            ),
            3 => 
            array (
                'country_id' => 70,
                'id' => 4,
                'name' => 'Tigray Region',
            ),
            4 => 
            array (
                'country_id' => 70,
                'id' => 5,
                'name' => 'Oromia Region',
            ),
            5 => 
            array (
                'country_id' => 70,
                'id' => 6,
                'name' => 'Afar Region',
            ),
            6 => 
            array (
                'country_id' => 70,
                'id' => 7,
                'name' => 'Harari Region',
            ),
            7 => 
            array (
                'country_id' => 70,
                'id' => 8,
                'name' => 'Dire Dawa',
            ),
            8 => 
            array (
                'country_id' => 70,
                'id' => 9,
                'name' => 'Benishangul-Gumuz Region',
            ),
            9 => 
            array (
                'country_id' => 70,
                'id' => 10,
                'name' => 'Gambela Region',
            ),
            10 => 
            array (
                'country_id' => 70,
                'id' => 11,
                'name' => 'Addis Ababa',
            ),
            11 => 
            array (
                'country_id' => 147,
                'id' => 12,
                'name' => 'Petnjica Municipality',
            ),
            12 => 
            array (
                'country_id' => 147,
                'id' => 13,
                'name' => 'Bar Municipality',
            ),
            13 => 
            array (
                'country_id' => 147,
                'id' => 14,
                'name' => 'Danilovgrad Municipality',
            ),
            14 => 
            array (
                'country_id' => 147,
                'id' => 15,
                'name' => 'Rožaje Municipality',
            ),
            15 => 
            array (
                'country_id' => 147,
                'id' => 16,
                'name' => 'Plužine Municipality',
            ),
            16 => 
            array (
                'country_id' => 147,
                'id' => 17,
                'name' => 'Nikšić Municipality',
            ),
            17 => 
            array (
                'country_id' => 147,
                'id' => 18,
                'name' => 'Šavnik Municipality',
            ),
            18 => 
            array (
                'country_id' => 147,
                'id' => 19,
                'name' => 'Plav Municipality',
            ),
            19 => 
            array (
                'country_id' => 147,
                'id' => 20,
                'name' => 'Pljevlja Municipality',
            ),
            20 => 
            array (
                'country_id' => 147,
                'id' => 21,
                'name' => 'Berane Municipality',
            ),
            21 => 
            array (
                'country_id' => 147,
                'id' => 22,
                'name' => 'Mojkovac Municipality',
            ),
            22 => 
            array (
                'country_id' => 147,
                'id' => 23,
                'name' => 'Andrijevica Municipality',
            ),
            23 => 
            array (
                'country_id' => 147,
                'id' => 24,
                'name' => 'Gusinje Municipality',
            ),
            24 => 
            array (
                'country_id' => 147,
                'id' => 25,
                'name' => 'Bijelo Polje Municipality',
            ),
            25 => 
            array (
                'country_id' => 147,
                'id' => 26,
                'name' => 'Kotor Municipality',
            ),
            26 => 
            array (
                'country_id' => 147,
                'id' => 27,
                'name' => 'Podgorica Municipality',
            ),
            27 => 
            array (
                'country_id' => 147,
                'id' => 28,
                'name' => 'Old Royal Capital Cetinje',
            ),
            28 => 
            array (
                'country_id' => 147,
                'id' => 29,
                'name' => 'Tivat Municipality',
            ),
            29 => 
            array (
                'country_id' => 147,
                'id' => 30,
                'name' => 'Budva Municipality',
            ),
            30 => 
            array (
                'country_id' => 147,
                'id' => 31,
                'name' => 'Kolašin Municipality',
            ),
            31 => 
            array (
                'country_id' => 147,
                'id' => 32,
                'name' => 'Žabljak Municipality',
            ),
            32 => 
            array (
                'country_id' => 147,
                'id' => 33,
                'name' => 'Ulcinj Municipality',
            ),
            33 => 
            array (
                'country_id' => 152,
                'id' => 34,
                'name' => 'Kunene Region',
            ),
            34 => 
            array (
                'country_id' => 152,
                'id' => 35,
                'name' => 'Kavango West Region',
            ),
            35 => 
            array (
                'country_id' => 152,
                'id' => 36,
                'name' => 'Kavango East Region',
            ),
            36 => 
            array (
                'country_id' => 152,
                'id' => 37,
                'name' => 'Oshana Region',
            ),
            37 => 
            array (
                'country_id' => 152,
                'id' => 38,
                'name' => 'Hardap Region',
            ),
            38 => 
            array (
                'country_id' => 152,
                'id' => 39,
                'name' => 'Omusati Region',
            ),
            39 => 
            array (
                'country_id' => 152,
                'id' => 40,
                'name' => 'Ohangwena Region',
            ),
            40 => 
            array (
                'country_id' => 152,
                'id' => 41,
                'name' => 'Omaheke Region',
            ),
            41 => 
            array (
                'country_id' => 152,
                'id' => 42,
                'name' => 'Oshikoto Region',
            ),
            42 => 
            array (
                'country_id' => 152,
                'id' => 43,
                'name' => 'Erongo Region',
            ),
            43 => 
            array (
                'country_id' => 152,
                'id' => 44,
                'name' => 'Khomas Region',
            ),
            44 => 
            array (
                'country_id' => 152,
                'id' => 45,
                'name' => 'Karas Region',
            ),
            45 => 
            array (
                'country_id' => 152,
                'id' => 46,
                'name' => 'Otjozondjupa Region',
            ),
            46 => 
            array (
                'country_id' => 152,
                'id' => 47,
                'name' => 'Zambezi Region',
            ),
            47 => 
            array (
                'country_id' => 83,
                'id' => 48,
                'name' => 'Ashanti',
            ),
            48 => 
            array (
                'country_id' => 83,
                'id' => 49,
                'name' => 'Western',
            ),
            49 => 
            array (
                'country_id' => 83,
                'id' => 50,
                'name' => 'Eastern',
            ),
            50 => 
            array (
                'country_id' => 83,
                'id' => 51,
                'name' => 'Northern',
            ),
            51 => 
            array (
                'country_id' => 83,
                'id' => 52,
                'name' => 'Central',
            ),
            52 => 
            array (
                'country_id' => 83,
                'id' => 53,
                'name' => 'Ahafo',
            ),
            53 => 
            array (
                'country_id' => 83,
                'id' => 54,
                'name' => 'Greater Accra',
            ),
            54 => 
            array (
                'country_id' => 83,
                'id' => 55,
                'name' => 'Upper East',
            ),
            55 => 
            array (
                'country_id' => 83,
                'id' => 56,
                'name' => 'Volta',
            ),
            56 => 
            array (
                'country_id' => 83,
                'id' => 57,
                'name' => 'Upper West',
            ),
            57 => 
            array (
                'country_id' => 192,
                'id' => 58,
                'name' => 'San Marino',
            ),
            58 => 
            array (
                'country_id' => 192,
                'id' => 59,
                'name' => 'Acquaviva',
            ),
            59 => 
            array (
                'country_id' => 192,
                'id' => 60,
                'name' => 'Chiesanuova',
            ),
            60 => 
            array (
                'country_id' => 192,
                'id' => 61,
                'name' => 'Borgo Maggiore',
            ),
            61 => 
            array (
                'country_id' => 192,
                'id' => 62,
                'name' => 'Faetano',
            ),
            62 => 
            array (
                'country_id' => 192,
                'id' => 63,
                'name' => 'Montegiardino',
            ),
            63 => 
            array (
                'country_id' => 192,
                'id' => 64,
                'name' => 'Domagnano',
            ),
            64 => 
            array (
                'country_id' => 192,
                'id' => 65,
                'name' => 'Serravalle',
            ),
            65 => 
            array (
                'country_id' => 192,
                'id' => 66,
                'name' => 'Fiorentino',
            ),
            66 => 
            array (
                'country_id' => 160,
                'id' => 67,
                'name' => 'Tillabéri Region',
            ),
            67 => 
            array (
                'country_id' => 160,
                'id' => 68,
                'name' => 'Dosso Region',
            ),
            68 => 
            array (
                'country_id' => 160,
                'id' => 69,
                'name' => 'Zinder Region',
            ),
            69 => 
            array (
                'country_id' => 160,
                'id' => 70,
                'name' => 'Maradi Region',
            ),
            70 => 
            array (
                'country_id' => 160,
                'id' => 71,
                'name' => 'Agadez Region',
            ),
            71 => 
            array (
                'country_id' => 160,
                'id' => 72,
                'name' => 'Diffa Region',
            ),
            72 => 
            array (
                'country_id' => 160,
                'id' => 73,
                'name' => 'Tahoua Region',
            ),
            73 => 
            array (
                'country_id' => 135,
                'id' => 74,
                'name' => 'Mqabba',
            ),
            74 => 
            array (
                'country_id' => 135,
                'id' => 75,
                'name' => 'San Ġwann',
            ),
            75 => 
            array (
                'country_id' => 135,
                'id' => 76,
                'name' => 'Żurrieq',
            ),
            76 => 
            array (
                'country_id' => 135,
                'id' => 77,
                'name' => 'Luqa',
            ),
            77 => 
            array (
                'country_id' => 135,
                'id' => 78,
                'name' => 'Marsaxlokk',
            ),
            78 => 
            array (
                'country_id' => 135,
                'id' => 79,
                'name' => 'Qala',
            ),
            79 => 
            array (
                'country_id' => 135,
                'id' => 80,
                'name' => 'Żebbuġ Malta',
            ),
            80 => 
            array (
                'country_id' => 135,
                'id' => 81,
                'name' => 'Xgħajra',
            ),
            81 => 
            array (
                'country_id' => 135,
                'id' => 82,
                'name' => 'Kirkop',
            ),
            82 => 
            array (
                'country_id' => 135,
                'id' => 83,
                'name' => 'Rabat',
            ),
            83 => 
            array (
                'country_id' => 135,
                'id' => 84,
                'name' => 'Floriana',
            ),
            84 => 
            array (
                'country_id' => 135,
                'id' => 85,
                'name' => 'Żebbuġ Gozo',
            ),
            85 => 
            array (
                'country_id' => 135,
                'id' => 86,
                'name' => 'Swieqi',
            ),
            86 => 
            array (
                'country_id' => 135,
                'id' => 87,
                'name' => 'Saint Lawrence',
            ),
            87 => 
            array (
                'country_id' => 135,
                'id' => 88,
                'name' => 'Birżebbuġa',
            ),
            88 => 
            array (
                'country_id' => 135,
                'id' => 89,
                'name' => 'Mdina',
            ),
            89 => 
            array (
                'country_id' => 135,
                'id' => 90,
                'name' => 'Santa Venera',
            ),
            90 => 
            array (
                'country_id' => 135,
                'id' => 91,
                'name' => 'Kerċem',
            ),
            91 => 
            array (
                'country_id' => 135,
                'id' => 92,
                'name' => 'Għarb',
            ),
            92 => 
            array (
                'country_id' => 135,
                'id' => 93,
                'name' => 'Iklin',
            ),
            93 => 
            array (
                'country_id' => 135,
                'id' => 94,
                'name' => 'Santa Luċija',
            ),
            94 => 
            array (
                'country_id' => 135,
                'id' => 95,
                'name' => 'Valletta',
            ),
            95 => 
            array (
                'country_id' => 135,
                'id' => 96,
                'name' => 'Msida',
            ),
            96 => 
            array (
                'country_id' => 135,
                'id' => 97,
                'name' => 'Birkirkara',
            ),
            97 => 
            array (
                'country_id' => 135,
                'id' => 98,
                'name' => 'Siġġiewi',
            ),
            98 => 
            array (
                'country_id' => 135,
                'id' => 99,
                'name' => 'Kalkara',
            ),
            99 => 
            array (
                'country_id' => 135,
                'id' => 100,
                'name' => 'St. Julian\'s',
            ),
            100 => 
            array (
                'country_id' => 135,
                'id' => 101,
                'name' => 'Victoria',
            ),
            101 => 
            array (
                'country_id' => 135,
                'id' => 102,
                'name' => 'Mellieħa',
            ),
            102 => 
            array (
                'country_id' => 135,
                'id' => 103,
                'name' => 'Tarxien',
            ),
            103 => 
            array (
                'country_id' => 135,
                'id' => 104,
                'name' => 'Sliema',
            ),
            104 => 
            array (
                'country_id' => 135,
                'id' => 105,
                'name' => 'Ħamrun',
            ),
            105 => 
            array (
                'country_id' => 135,
                'id' => 106,
                'name' => 'Għasri',
            ),
            106 => 
            array (
                'country_id' => 135,
                'id' => 107,
                'name' => 'Birgu',
            ),
            107 => 
            array (
                'country_id' => 135,
                'id' => 108,
                'name' => 'Balzan',
            ),
            108 => 
            array (
                'country_id' => 135,
                'id' => 109,
                'name' => 'Mġarr',
            ),
            109 => 
            array (
                'country_id' => 135,
                'id' => 110,
                'name' => 'Attard',
            ),
            110 => 
            array (
                'country_id' => 135,
                'id' => 111,
                'name' => 'Qrendi',
            ),
            111 => 
            array (
                'country_id' => 135,
                'id' => 112,
                'name' => 'Naxxar',
            ),
            112 => 
            array (
                'country_id' => 135,
                'id' => 113,
                'name' => 'Gżira',
            ),
            113 => 
            array (
                'country_id' => 135,
                'id' => 114,
                'name' => 'Xagħra',
            ),
            114 => 
            array (
                'country_id' => 135,
                'id' => 115,
                'name' => 'Paola',
            ),
            115 => 
            array (
                'country_id' => 135,
                'id' => 116,
                'name' => 'Sannat',
            ),
            116 => 
            array (
                'country_id' => 135,
                'id' => 117,
                'name' => 'Dingli',
            ),
            117 => 
            array (
                'country_id' => 135,
                'id' => 118,
                'name' => 'Gudja',
            ),
            118 => 
            array (
                'country_id' => 135,
                'id' => 119,
                'name' => 'Qormi',
            ),
            119 => 
            array (
                'country_id' => 135,
                'id' => 120,
                'name' => 'Għargħur',
            ),
            120 => 
            array (
                'country_id' => 135,
                'id' => 121,
                'name' => 'Xewkija',
            ),
            121 => 
            array (
                'country_id' => 135,
                'id' => 122,
                'name' => 'Ta\' Xbiex',
            ),
            122 => 
            array (
                'country_id' => 135,
                'id' => 123,
                'name' => 'Żabbar',
            ),
            123 => 
            array (
                'country_id' => 135,
                'id' => 124,
                'name' => 'Għaxaq',
            ),
            124 => 
            array (
                'country_id' => 135,
                'id' => 125,
                'name' => 'Pembroke',
            ),
            125 => 
            array (
                'country_id' => 135,
                'id' => 126,
                'name' => 'Lija',
            ),
            126 => 
            array (
                'country_id' => 135,
                'id' => 127,
                'name' => 'Pietà',
            ),
            127 => 
            array (
                'country_id' => 135,
                'id' => 128,
                'name' => 'Marsa',
            ),
            128 => 
            array (
                'country_id' => 135,
                'id' => 129,
                'name' => 'Fgura',
            ),
            129 => 
            array (
                'country_id' => 135,
                'id' => 130,
                'name' => 'Għajnsielem',
            ),
            130 => 
            array (
                'country_id' => 135,
                'id' => 131,
                'name' => 'Mtarfa',
            ),
            131 => 
            array (
                'country_id' => 135,
                'id' => 132,
                'name' => 'Munxar',
            ),
            132 => 
            array (
                'country_id' => 135,
                'id' => 133,
                'name' => 'Nadur',
            ),
            133 => 
            array (
                'country_id' => 135,
                'id' => 134,
                'name' => 'Fontana',
            ),
            134 => 
            array (
                'country_id' => 135,
                'id' => 135,
                'name' => 'Żejtun',
            ),
            135 => 
            array (
                'country_id' => 135,
                'id' => 136,
                'name' => 'Senglea',
            ),
            136 => 
            array (
                'country_id' => 135,
                'id' => 137,
                'name' => 'Marsaskala',
            ),
            137 => 
            array (
                'country_id' => 135,
                'id' => 138,
                'name' => 'Cospicua',
            ),
            138 => 
            array (
                'country_id' => 135,
                'id' => 139,
                'name' => 'St. Paul\'s Bay',
            ),
            139 => 
            array (
                'country_id' => 135,
                'id' => 140,
                'name' => 'Mosta',
            ),
            140 => 
            array (
                'country_id' => 112,
                'id' => 141,
                'name' => 'Mangystau Region',
            ),
            141 => 
            array (
                'country_id' => 112,
                'id' => 142,
                'name' => 'Kyzylorda Region',
            ),
            142 => 
            array (
                'country_id' => 112,
                'id' => 143,
                'name' => 'Almaty Region',
            ),
            143 => 
            array (
                'country_id' => 112,
                'id' => 144,
                'name' => 'North Kazakhstan Region',
            ),
            144 => 
            array (
                'country_id' => 112,
                'id' => 145,
                'name' => 'Akmola Region',
            ),
            145 => 
            array (
                'country_id' => 112,
                'id' => 146,
                'name' => 'Pavlodar Region',
            ),
            146 => 
            array (
                'country_id' => 112,
                'id' => 147,
                'name' => 'Jambyl Region',
            ),
            147 => 
            array (
                'country_id' => 112,
                'id' => 148,
                'name' => 'West Kazakhstan Province',
            ),
            148 => 
            array (
                'country_id' => 112,
                'id' => 149,
                'name' => 'Turkestan Region',
            ),
            149 => 
            array (
                'country_id' => 112,
                'id' => 150,
                'name' => 'Karaganda Region',
            ),
            150 => 
            array (
                'country_id' => 112,
                'id' => 151,
                'name' => 'Aktobe Region',
            ),
            151 => 
            array (
                'country_id' => 112,
                'id' => 152,
                'name' => 'Almaty',
            ),
            152 => 
            array (
                'country_id' => 112,
                'id' => 153,
                'name' => 'Atyrau Region',
            ),
            153 => 
            array (
                'country_id' => 112,
                'id' => 154,
                'name' => 'East Kazakhstan Region',
            ),
            154 => 
            array (
                'country_id' => 112,
                'id' => 155,
                'name' => 'Baikonur',
            ),
            155 => 
            array (
                'country_id' => 112,
                'id' => 156,
                'name' => 'Nur-Sultan',
            ),
            156 => 
            array (
                'country_id' => 112,
                'id' => 157,
                'name' => 'Kostanay Region',
            ),
            157 => 
            array (
                'country_id' => 113,
                'id' => 158,
                'name' => 'Kakamega',
            ),
            158 => 
            array (
                'country_id' => 113,
                'id' => 159,
                'name' => 'Kisii',
            ),
            159 => 
            array (
                'country_id' => 113,
                'id' => 161,
                'name' => 'Busia',
            ),
            160 => 
            array (
                'country_id' => 113,
                'id' => 163,
                'name' => 'Embu',
            ),
            161 => 
            array (
                'country_id' => 113,
                'id' => 164,
                'name' => 'Laikipia',
            ),
            162 => 
            array (
                'country_id' => 113,
                'id' => 165,
                'name' => 'Nandi',
            ),
            163 => 
            array (
                'country_id' => 113,
                'id' => 166,
                'name' => 'Lamu',
            ),
            164 => 
            array (
                'country_id' => 113,
                'id' => 167,
                'name' => 'Kirinyaga',
            ),
            165 => 
            array (
                'country_id' => 113,
                'id' => 168,
                'name' => 'Bungoma',
            ),
            166 => 
            array (
                'country_id' => 113,
                'id' => 169,
                'name' => 'Uasin Gishu',
            ),
            167 => 
            array (
                'country_id' => 113,
                'id' => 170,
                'name' => 'Isiolo',
            ),
            168 => 
            array (
                'country_id' => 113,
                'id' => 171,
                'name' => 'Kisumu',
            ),
            169 => 
            array (
                'country_id' => 113,
                'id' => 173,
                'name' => 'Kwale',
            ),
            170 => 
            array (
                'country_id' => 113,
                'id' => 174,
                'name' => 'Kilifi',
            ),
            171 => 
            array (
                'country_id' => 113,
                'id' => 175,
                'name' => 'Narok',
            ),
            172 => 
            array (
                'country_id' => 113,
                'id' => 176,
                'name' => 'Taita–Taveta',
            ),
            173 => 
            array (
                'country_id' => 113,
                'id' => 178,
                'name' => 'Murang\'a',
            ),
            174 => 
            array (
                'country_id' => 113,
                'id' => 180,
                'name' => 'Nyeri',
            ),
            175 => 
            array (
                'country_id' => 113,
                'id' => 181,
                'name' => 'Baringo',
            ),
            176 => 
            array (
                'country_id' => 113,
                'id' => 182,
                'name' => 'Wajir',
            ),
            177 => 
            array (
                'country_id' => 113,
                'id' => 183,
                'name' => 'Trans Nzoia',
            ),
            178 => 
            array (
                'country_id' => 113,
                'id' => 184,
                'name' => 'Machakos',
            ),
            179 => 
            array (
                'country_id' => 113,
                'id' => 185,
                'name' => 'Tharaka-Nithi',
            ),
            180 => 
            array (
                'country_id' => 113,
                'id' => 186,
                'name' => 'Siaya',
            ),
            181 => 
            array (
                'country_id' => 113,
                'id' => 187,
                'name' => 'Mandera',
            ),
            182 => 
            array (
                'country_id' => 113,
                'id' => 188,
                'name' => 'Makueni',
            ),
            183 => 
            array (
                'country_id' => 113,
                'id' => 190,
                'name' => 'Migori',
            ),
            184 => 
            array (
                'country_id' => 113,
                'id' => 191,
                'name' => 'Nairobi City',
            ),
            185 => 
            array (
                'country_id' => 113,
                'id' => 192,
                'name' => 'Nyandarua',
            ),
            186 => 
            array (
                'country_id' => 113,
                'id' => 193,
                'name' => 'Kericho',
            ),
            187 => 
            array (
                'country_id' => 113,
                'id' => 194,
                'name' => 'Marsabit',
            ),
            188 => 
            array (
                'country_id' => 113,
                'id' => 195,
                'name' => 'Homa Bay',
            ),
            189 => 
            array (
                'country_id' => 113,
                'id' => 196,
                'name' => 'Garissa',
            ),
            190 => 
            array (
                'country_id' => 113,
                'id' => 197,
                'name' => 'Kajiado',
            ),
            191 => 
            array (
                'country_id' => 113,
                'id' => 198,
                'name' => 'Meru',
            ),
            192 => 
            array (
                'country_id' => 113,
                'id' => 199,
                'name' => 'Kiambu',
            ),
            193 => 
            array (
                'country_id' => 113,
                'id' => 200,
                'name' => 'Mombasa',
            ),
            194 => 
            array (
                'country_id' => 113,
                'id' => 201,
                'name' => 'Elgeyo-Marakwet',
            ),
            195 => 
            array (
                'country_id' => 113,
                'id' => 202,
                'name' => 'Vihiga',
            ),
            196 => 
            array (
                'country_id' => 113,
                'id' => 203,
                'name' => 'Nakuru',
            ),
            197 => 
            array (
                'country_id' => 113,
                'id' => 205,
                'name' => 'Tana River',
            ),
            198 => 
            array (
                'country_id' => 113,
                'id' => 206,
                'name' => 'Turkana',
            ),
            199 => 
            array (
                'country_id' => 113,
                'id' => 207,
                'name' => 'Samburu',
            ),
            200 => 
            array (
                'country_id' => 113,
                'id' => 208,
                'name' => 'West Pokot',
            ),
            201 => 
            array (
                'country_id' => 113,
                'id' => 209,
                'name' => 'Nyamira',
            ),
            202 => 
            array (
                'country_id' => 113,
                'id' => 210,
                'name' => 'Bomet',
            ),
            203 => 
            array (
                'country_id' => 113,
                'id' => 211,
                'name' => 'Kitui',
            ),
            204 => 
            array (
                'country_id' => 7,
                'id' => 212,
                'name' => 'Bié Province',
            ),
            205 => 
            array (
                'country_id' => 7,
                'id' => 213,
                'name' => 'Huambo Province',
            ),
            206 => 
            array (
                'country_id' => 7,
                'id' => 214,
                'name' => 'Zaire Province',
            ),
            207 => 
            array (
                'country_id' => 7,
                'id' => 215,
                'name' => 'Cunene Province',
            ),
            208 => 
            array (
                'country_id' => 7,
                'id' => 216,
                'name' => 'Cuanza Sul',
            ),
            209 => 
            array (
                'country_id' => 7,
                'id' => 217,
                'name' => 'Cuanza Norte Province',
            ),
            210 => 
            array (
                'country_id' => 7,
                'id' => 218,
                'name' => 'Benguela Province',
            ),
            211 => 
            array (
                'country_id' => 7,
                'id' => 219,
                'name' => 'Moxico Province',
            ),
            212 => 
            array (
                'country_id' => 7,
                'id' => 220,
                'name' => 'Lunda Sul Province',
            ),
            213 => 
            array (
                'country_id' => 7,
                'id' => 221,
                'name' => 'Bengo Province',
            ),
            214 => 
            array (
                'country_id' => 7,
                'id' => 222,
                'name' => 'Luanda Province',
            ),
            215 => 
            array (
                'country_id' => 7,
                'id' => 223,
                'name' => 'Lunda Norte Province',
            ),
            216 => 
            array (
                'country_id' => 7,
                'id' => 224,
                'name' => 'Uíge Province',
            ),
            217 => 
            array (
                'country_id' => 7,
                'id' => 225,
                'name' => 'Huíla Province',
            ),
            218 => 
            array (
                'country_id' => 7,
                'id' => 226,
                'name' => 'Cuando Cubango Province',
            ),
            219 => 
            array (
                'country_id' => 7,
                'id' => 227,
                'name' => 'Malanje Province',
            ),
            220 => 
            array (
                'country_id' => 7,
                'id' => 228,
                'name' => 'Cabinda Province',
            ),
            221 => 
            array (
                'country_id' => 26,
                'id' => 229,
                'name' => 'Gasa District',
            ),
            222 => 
            array (
                'country_id' => 26,
                'id' => 230,
                'name' => 'Tsirang District',
            ),
            223 => 
            array (
                'country_id' => 26,
                'id' => 231,
                'name' => 'Wangdue Phodrang District',
            ),
            224 => 
            array (
                'country_id' => 26,
                'id' => 232,
                'name' => 'Haa District',
            ),
            225 => 
            array (
                'country_id' => 26,
                'id' => 233,
                'name' => 'Zhemgang District',
            ),
            226 => 
            array (
                'country_id' => 26,
                'id' => 234,
                'name' => 'Lhuntse District',
            ),
            227 => 
            array (
                'country_id' => 26,
                'id' => 235,
                'name' => 'Punakha District',
            ),
            228 => 
            array (
                'country_id' => 26,
                'id' => 236,
                'name' => 'Trashigang District',
            ),
            229 => 
            array (
                'country_id' => 26,
                'id' => 237,
                'name' => 'Paro District',
            ),
            230 => 
            array (
                'country_id' => 26,
                'id' => 238,
                'name' => 'Dagana District',
            ),
            231 => 
            array (
                'country_id' => 26,
                'id' => 239,
                'name' => 'Chukha District',
            ),
            232 => 
            array (
                'country_id' => 26,
                'id' => 240,
                'name' => 'Bumthang District',
            ),
            233 => 
            array (
                'country_id' => 26,
                'id' => 241,
                'name' => 'Thimphu District',
            ),
            234 => 
            array (
                'country_id' => 26,
                'id' => 242,
                'name' => 'Mongar District',
            ),
            235 => 
            array (
                'country_id' => 26,
                'id' => 243,
                'name' => 'Samdrup Jongkhar District',
            ),
            236 => 
            array (
                'country_id' => 26,
                'id' => 244,
                'name' => 'Pemagatshel District',
            ),
            237 => 
            array (
                'country_id' => 26,
                'id' => 245,
                'name' => 'Trongsa District',
            ),
            238 => 
            array (
                'country_id' => 26,
                'id' => 246,
                'name' => 'Samtse District',
            ),
            239 => 
            array (
                'country_id' => 26,
                'id' => 247,
                'name' => 'Sarpang District',
            ),
            240 => 
            array (
                'country_id' => 134,
                'id' => 248,
                'name' => 'Tombouctou Region',
            ),
            241 => 
            array (
                'country_id' => 134,
                'id' => 249,
                'name' => 'Ségou Region',
            ),
            242 => 
            array (
                'country_id' => 134,
                'id' => 250,
                'name' => 'Koulikoro Region',
            ),
            243 => 
            array (
                'country_id' => 134,
                'id' => 251,
                'name' => 'Ménaka Region',
            ),
            244 => 
            array (
                'country_id' => 134,
                'id' => 252,
                'name' => 'Kayes Region',
            ),
            245 => 
            array (
                'country_id' => 134,
                'id' => 253,
                'name' => 'Bamako',
            ),
            246 => 
            array (
                'country_id' => 134,
                'id' => 254,
                'name' => 'Sikasso Region',
            ),
            247 => 
            array (
                'country_id' => 134,
                'id' => 255,
                'name' => 'Mopti Region',
            ),
            248 => 
            array (
                'country_id' => 134,
                'id' => 256,
                'name' => 'Taoudénit Region',
            ),
            249 => 
            array (
                'country_id' => 134,
                'id' => 257,
                'name' => 'Kidal Region',
            ),
            250 => 
            array (
                'country_id' => 134,
                'id' => 258,
                'name' => 'Gao Region',
            ),
            251 => 
            array (
                'country_id' => 183,
                'id' => 259,
                'name' => 'Southern Province',
            ),
            252 => 
            array (
                'country_id' => 183,
                'id' => 260,
                'name' => 'Western Province',
            ),
            253 => 
            array (
                'country_id' => 183,
                'id' => 261,
                'name' => 'Eastern Province',
            ),
            254 => 
            array (
                'country_id' => 183,
                'id' => 262,
                'name' => 'Kigali district',
            ),
            255 => 
            array (
                'country_id' => 183,
                'id' => 263,
                'name' => 'Northern Province',
            ),
            256 => 
            array (
                'country_id' => 23,
                'id' => 264,
                'name' => 'Belize District',
            ),
            257 => 
            array (
                'country_id' => 23,
                'id' => 265,
                'name' => 'Stann Creek District',
            ),
            258 => 
            array (
                'country_id' => 23,
                'id' => 266,
                'name' => 'Corozal District',
            ),
            259 => 
            array (
                'country_id' => 23,
                'id' => 267,
                'name' => 'Toledo District',
            ),
            260 => 
            array (
                'country_id' => 23,
                'id' => 268,
                'name' => 'Orange Walk District',
            ),
            261 => 
            array (
                'country_id' => 23,
                'id' => 269,
                'name' => 'Cayo District',
            ),
            262 => 
            array (
                'country_id' => 193,
                'id' => 270,
                'name' => 'Príncipe Province',
            ),
            263 => 
            array (
                'country_id' => 193,
                'id' => 271,
                'name' => 'São Tomé Province',
            ),
            264 => 
            array (
                'country_id' => 56,
                'id' => 272,
                'name' => 'Havana Province',
            ),
            265 => 
            array (
                'country_id' => 56,
                'id' => 273,
                'name' => 'Santiago de Cuba Province',
            ),
            266 => 
            array (
                'country_id' => 56,
                'id' => 274,
                'name' => 'Sancti Spíritus Province',
            ),
            267 => 
            array (
                'country_id' => 56,
                'id' => 275,
                'name' => 'Granma Province',
            ),
            268 => 
            array (
                'country_id' => 56,
                'id' => 276,
                'name' => 'Mayabeque Province',
            ),
            269 => 
            array (
                'country_id' => 56,
                'id' => 277,
                'name' => 'Pinar del Río Province',
            ),
            270 => 
            array (
                'country_id' => 56,
                'id' => 278,
                'name' => 'Isla de la Juventud',
            ),
            271 => 
            array (
                'country_id' => 56,
                'id' => 279,
                'name' => 'Holguín Province',
            ),
            272 => 
            array (
                'country_id' => 56,
                'id' => 280,
                'name' => 'Villa Clara Province',
            ),
            273 => 
            array (
                'country_id' => 56,
                'id' => 281,
                'name' => 'Las Tunas Province',
            ),
            274 => 
            array (
                'country_id' => 56,
                'id' => 282,
                'name' => 'Ciego de Ávila Province',
            ),
            275 => 
            array (
                'country_id' => 56,
                'id' => 283,
                'name' => 'Artemisa Province',
            ),
            276 => 
            array (
                'country_id' => 56,
                'id' => 284,
                'name' => 'Matanzas Province',
            ),
            277 => 
            array (
                'country_id' => 56,
                'id' => 285,
                'name' => 'Guantánamo Province',
            ),
            278 => 
            array (
                'country_id' => 56,
                'id' => 286,
                'name' => 'Camagüey Province',
            ),
            279 => 
            array (
                'country_id' => 56,
                'id' => 287,
                'name' => 'Cienfuegos Province',
            ),
            280 => 
            array (
                'country_id' => 161,
                'id' => 288,
                'name' => 'Jigawa',
            ),
            281 => 
            array (
                'country_id' => 161,
                'id' => 289,
                'name' => 'Enugu',
            ),
            282 => 
            array (
                'country_id' => 161,
                'id' => 290,
                'name' => 'Kebbi',
            ),
            283 => 
            array (
                'country_id' => 161,
                'id' => 291,
                'name' => 'Benue',
            ),
            284 => 
            array (
                'country_id' => 161,
                'id' => 292,
                'name' => 'Sokoto',
            ),
            285 => 
            array (
                'country_id' => 161,
                'id' => 293,
                'name' => 'Abuja Federal Capital Territory',
            ),
            286 => 
            array (
                'country_id' => 161,
                'id' => 294,
                'name' => 'Kaduna',
            ),
            287 => 
            array (
                'country_id' => 161,
                'id' => 295,
                'name' => 'Kwara',
            ),
            288 => 
            array (
                'country_id' => 161,
                'id' => 296,
                'name' => 'Oyo',
            ),
            289 => 
            array (
                'country_id' => 161,
                'id' => 297,
                'name' => 'Yobe',
            ),
            290 => 
            array (
                'country_id' => 161,
                'id' => 298,
                'name' => 'Kogi',
            ),
            291 => 
            array (
                'country_id' => 161,
                'id' => 299,
                'name' => 'Zamfara',
            ),
            292 => 
            array (
                'country_id' => 161,
                'id' => 300,
                'name' => 'Kano',
            ),
            293 => 
            array (
                'country_id' => 161,
                'id' => 301,
                'name' => 'Nasarawa',
            ),
            294 => 
            array (
                'country_id' => 161,
                'id' => 302,
                'name' => 'Plateau',
            ),
            295 => 
            array (
                'country_id' => 161,
                'id' => 303,
                'name' => 'Abia',
            ),
            296 => 
            array (
                'country_id' => 161,
                'id' => 304,
                'name' => 'Akwa Ibom',
            ),
            297 => 
            array (
                'country_id' => 161,
                'id' => 305,
                'name' => 'Bayelsa',
            ),
            298 => 
            array (
                'country_id' => 161,
                'id' => 306,
                'name' => 'Lagos',
            ),
            299 => 
            array (
                'country_id' => 161,
                'id' => 307,
                'name' => 'Borno',
            ),
            300 => 
            array (
                'country_id' => 161,
                'id' => 308,
                'name' => 'Imo',
            ),
            301 => 
            array (
                'country_id' => 161,
                'id' => 309,
                'name' => 'Ekiti',
            ),
            302 => 
            array (
                'country_id' => 161,
                'id' => 310,
                'name' => 'Gombe',
            ),
            303 => 
            array (
                'country_id' => 161,
                'id' => 311,
                'name' => 'Ebonyi',
            ),
            304 => 
            array (
                'country_id' => 161,
                'id' => 312,
                'name' => 'Bauchi',
            ),
            305 => 
            array (
                'country_id' => 161,
                'id' => 313,
                'name' => 'Katsina',
            ),
            306 => 
            array (
                'country_id' => 161,
                'id' => 314,
                'name' => 'Cross River',
            ),
            307 => 
            array (
                'country_id' => 161,
                'id' => 315,
                'name' => 'Anambra',
            ),
            308 => 
            array (
                'country_id' => 161,
                'id' => 316,
                'name' => 'Delta',
            ),
            309 => 
            array (
                'country_id' => 161,
                'id' => 317,
                'name' => 'Niger',
            ),
            310 => 
            array (
                'country_id' => 161,
                'id' => 318,
                'name' => 'Edo',
            ),
            311 => 
            array (
                'country_id' => 161,
                'id' => 319,
                'name' => 'Taraba',
            ),
            312 => 
            array (
                'country_id' => 161,
                'id' => 320,
                'name' => 'Adamawa',
            ),
            313 => 
            array (
                'country_id' => 161,
                'id' => 321,
                'name' => 'Ondo',
            ),
            314 => 
            array (
                'country_id' => 161,
                'id' => 322,
                'name' => 'Osun',
            ),
            315 => 
            array (
                'country_id' => 161,
                'id' => 323,
                'name' => 'Ogun',
            ),
            316 => 
            array (
                'country_id' => 229,
                'id' => 324,
                'name' => 'Rukungiri District',
            ),
            317 => 
            array (
                'country_id' => 229,
                'id' => 325,
                'name' => 'Kyankwanzi District',
            ),
            318 => 
            array (
                'country_id' => 229,
                'id' => 326,
                'name' => 'Kabarole District',
            ),
            319 => 
            array (
                'country_id' => 229,
                'id' => 327,
                'name' => 'Mpigi District',
            ),
            320 => 
            array (
                'country_id' => 229,
                'id' => 328,
                'name' => 'Apac District',
            ),
            321 => 
            array (
                'country_id' => 229,
                'id' => 329,
                'name' => 'Abim District',
            ),
            322 => 
            array (
                'country_id' => 229,
                'id' => 330,
                'name' => 'Yumbe District',
            ),
            323 => 
            array (
                'country_id' => 229,
                'id' => 331,
                'name' => 'Rukiga District',
            ),
            324 => 
            array (
                'country_id' => 229,
                'id' => 332,
                'name' => 'Northern Region',
            ),
            325 => 
            array (
                'country_id' => 229,
                'id' => 333,
                'name' => 'Serere District',
            ),
            326 => 
            array (
                'country_id' => 229,
                'id' => 334,
                'name' => 'Kamuli District',
            ),
            327 => 
            array (
                'country_id' => 229,
                'id' => 335,
                'name' => 'Amuru District',
            ),
            328 => 
            array (
                'country_id' => 229,
                'id' => 336,
                'name' => 'Kaberamaido District',
            ),
            329 => 
            array (
                'country_id' => 229,
                'id' => 337,
                'name' => 'Namutumba District',
            ),
            330 => 
            array (
                'country_id' => 229,
                'id' => 338,
                'name' => 'Kibuku District',
            ),
            331 => 
            array (
                'country_id' => 229,
                'id' => 339,
                'name' => 'Ibanda District',
            ),
            332 => 
            array (
                'country_id' => 229,
                'id' => 340,
                'name' => 'Iganga District',
            ),
            333 => 
            array (
                'country_id' => 229,
                'id' => 341,
                'name' => 'Dokolo District',
            ),
            334 => 
            array (
                'country_id' => 229,
                'id' => 342,
                'name' => 'Lira District',
            ),
            335 => 
            array (
                'country_id' => 229,
                'id' => 343,
                'name' => 'Bukedea District',
            ),
            336 => 
            array (
                'country_id' => 229,
                'id' => 344,
                'name' => 'Alebtong District',
            ),
            337 => 
            array (
                'country_id' => 229,
                'id' => 345,
                'name' => 'Koboko District',
            ),
            338 => 
            array (
                'country_id' => 229,
                'id' => 346,
                'name' => 'Kiryandongo District',
            ),
            339 => 
            array (
                'country_id' => 229,
                'id' => 347,
                'name' => 'Kiboga District',
            ),
            340 => 
            array (
                'country_id' => 229,
                'id' => 348,
                'name' => 'Kitgum District',
            ),
            341 => 
            array (
                'country_id' => 229,
                'id' => 349,
                'name' => 'Bududa District',
            ),
            342 => 
            array (
                'country_id' => 229,
                'id' => 350,
                'name' => 'Mbale District',
            ),
            343 => 
            array (
                'country_id' => 229,
                'id' => 351,
                'name' => 'Namayingo District',
            ),
            344 => 
            array (
                'country_id' => 229,
                'id' => 352,
                'name' => 'Amuria District',
            ),
            345 => 
            array (
                'country_id' => 229,
                'id' => 353,
                'name' => 'Amudat District',
            ),
            346 => 
            array (
                'country_id' => 229,
                'id' => 354,
                'name' => 'Masindi District',
            ),
            347 => 
            array (
                'country_id' => 229,
                'id' => 355,
                'name' => 'Kiruhura District',
            ),
            348 => 
            array (
                'country_id' => 229,
                'id' => 356,
                'name' => 'Masaka District',
            ),
            349 => 
            array (
                'country_id' => 229,
                'id' => 357,
                'name' => 'Pakwach District',
            ),
            350 => 
            array (
                'country_id' => 229,
                'id' => 358,
                'name' => 'Rubanda District',
            ),
            351 => 
            array (
                'country_id' => 229,
                'id' => 359,
                'name' => 'Tororo District',
            ),
            352 => 
            array (
                'country_id' => 229,
                'id' => 360,
                'name' => 'Kamwenge District',
            ),
            353 => 
            array (
                'country_id' => 229,
                'id' => 361,
                'name' => 'Adjumani District',
            ),
            354 => 
            array (
                'country_id' => 229,
                'id' => 362,
                'name' => 'Wakiso District',
            ),
            355 => 
            array (
                'country_id' => 229,
                'id' => 363,
                'name' => 'Moyo District',
            ),
            356 => 
            array (
                'country_id' => 229,
                'id' => 364,
                'name' => 'Mityana District',
            ),
            357 => 
            array (
                'country_id' => 229,
                'id' => 365,
                'name' => 'Butaleja District',
            ),
            358 => 
            array (
                'country_id' => 229,
                'id' => 366,
                'name' => 'Gomba District',
            ),
            359 => 
            array (
                'country_id' => 229,
                'id' => 367,
                'name' => 'Jinja District',
            ),
            360 => 
            array (
                'country_id' => 229,
                'id' => 368,
                'name' => 'Kayunga District',
            ),
            361 => 
            array (
                'country_id' => 229,
                'id' => 369,
                'name' => 'Kween District',
            ),
            362 => 
            array (
                'country_id' => 229,
                'id' => 370,
                'name' => 'Western Region',
            ),
            363 => 
            array (
                'country_id' => 229,
                'id' => 371,
                'name' => 'Mubende District',
            ),
            364 => 
            array (
                'country_id' => 229,
                'id' => 372,
                'name' => 'Eastern Region',
            ),
            365 => 
            array (
                'country_id' => 229,
                'id' => 373,
                'name' => 'Kanungu District',
            ),
            366 => 
            array (
                'country_id' => 229,
                'id' => 374,
                'name' => 'Omoro District',
            ),
            367 => 
            array (
                'country_id' => 229,
                'id' => 375,
                'name' => 'Bukomansimbi District',
            ),
            368 => 
            array (
                'country_id' => 229,
                'id' => 376,
                'name' => 'Lyantonde District',
            ),
            369 => 
            array (
                'country_id' => 229,
                'id' => 377,
                'name' => 'Buikwe District',
            ),
            370 => 
            array (
                'country_id' => 229,
                'id' => 378,
                'name' => 'Nwoya District',
            ),
            371 => 
            array (
                'country_id' => 229,
                'id' => 379,
                'name' => 'Zombo District',
            ),
            372 => 
            array (
                'country_id' => 229,
                'id' => 380,
                'name' => 'Buyende District',
            ),
            373 => 
            array (
                'country_id' => 229,
                'id' => 381,
                'name' => 'Bunyangabu District',
            ),
            374 => 
            array (
                'country_id' => 229,
                'id' => 382,
                'name' => 'Kampala District',
            ),
            375 => 
            array (
                'country_id' => 229,
                'id' => 383,
                'name' => 'Isingiro District',
            ),
            376 => 
            array (
                'country_id' => 229,
                'id' => 384,
                'name' => 'Butambala District',
            ),
            377 => 
            array (
                'country_id' => 229,
                'id' => 385,
                'name' => 'Bukwo District',
            ),
            378 => 
            array (
                'country_id' => 229,
                'id' => 386,
                'name' => 'Bushenyi District',
            ),
            379 => 
            array (
                'country_id' => 229,
                'id' => 387,
                'name' => 'Bugiri District',
            ),
            380 => 
            array (
                'country_id' => 229,
                'id' => 388,
                'name' => 'Butebo District',
            ),
            381 => 
            array (
                'country_id' => 229,
                'id' => 389,
                'name' => 'Buliisa District',
            ),
            382 => 
            array (
                'country_id' => 229,
                'id' => 390,
                'name' => 'Otuke District',
            ),
            383 => 
            array (
                'country_id' => 229,
                'id' => 391,
                'name' => 'Buhweju District',
            ),
            384 => 
            array (
                'country_id' => 229,
                'id' => 392,
                'name' => 'Agago District',
            ),
            385 => 
            array (
                'country_id' => 229,
                'id' => 393,
                'name' => 'Nakapiripirit District',
            ),
            386 => 
            array (
                'country_id' => 229,
                'id' => 394,
                'name' => 'Kalungu District',
            ),
            387 => 
            array (
                'country_id' => 229,
                'id' => 395,
                'name' => 'Moroto District',
            ),
            388 => 
            array (
                'country_id' => 229,
                'id' => 396,
                'name' => 'Central Region',
            ),
            389 => 
            array (
                'country_id' => 229,
                'id' => 397,
                'name' => 'Oyam District',
            ),
            390 => 
            array (
                'country_id' => 229,
                'id' => 398,
                'name' => 'Kaliro District',
            ),
            391 => 
            array (
                'country_id' => 229,
                'id' => 399,
                'name' => 'Kakumiro District',
            ),
            392 => 
            array (
                'country_id' => 229,
                'id' => 400,
                'name' => 'Namisindwa District',
            ),
            393 => 
            array (
                'country_id' => 229,
                'id' => 401,
                'name' => 'Kole District',
            ),
            394 => 
            array (
                'country_id' => 229,
                'id' => 402,
                'name' => 'Kyenjojo District',
            ),
            395 => 
            array (
                'country_id' => 229,
                'id' => 403,
                'name' => 'Kagadi District',
            ),
            396 => 
            array (
                'country_id' => 229,
                'id' => 404,
                'name' => 'Ntungamo District',
            ),
            397 => 
            array (
                'country_id' => 229,
                'id' => 405,
                'name' => 'Kalangala District',
            ),
            398 => 
            array (
                'country_id' => 229,
                'id' => 406,
                'name' => 'Nakasongola District',
            ),
            399 => 
            array (
                'country_id' => 229,
                'id' => 407,
                'name' => 'Sheema District',
            ),
            400 => 
            array (
                'country_id' => 229,
                'id' => 408,
                'name' => 'Pader District',
            ),
            401 => 
            array (
                'country_id' => 229,
                'id' => 409,
                'name' => 'Kisoro District',
            ),
            402 => 
            array (
                'country_id' => 229,
                'id' => 410,
                'name' => 'Mukono District',
            ),
            403 => 
            array (
                'country_id' => 229,
                'id' => 411,
                'name' => 'Lamwo District',
            ),
            404 => 
            array (
                'country_id' => 229,
                'id' => 412,
                'name' => 'Pallisa District',
            ),
            405 => 
            array (
                'country_id' => 229,
                'id' => 413,
                'name' => 'Gulu District',
            ),
            406 => 
            array (
                'country_id' => 229,
                'id' => 414,
                'name' => 'Buvuma District',
            ),
            407 => 
            array (
                'country_id' => 229,
                'id' => 415,
                'name' => 'Mbarara District',
            ),
            408 => 
            array (
                'country_id' => 229,
                'id' => 416,
                'name' => 'Amolatar District',
            ),
            409 => 
            array (
                'country_id' => 229,
                'id' => 417,
                'name' => 'Lwengo District',
            ),
            410 => 
            array (
                'country_id' => 229,
                'id' => 418,
                'name' => 'Mayuge District',
            ),
            411 => 
            array (
                'country_id' => 229,
                'id' => 419,
                'name' => 'Bundibugyo District',
            ),
            412 => 
            array (
                'country_id' => 229,
                'id' => 420,
                'name' => 'Katakwi District',
            ),
            413 => 
            array (
                'country_id' => 229,
                'id' => 421,
                'name' => 'Maracha District',
            ),
            414 => 
            array (
                'country_id' => 229,
                'id' => 422,
                'name' => 'Ntoroko District',
            ),
            415 => 
            array (
                'country_id' => 229,
                'id' => 423,
                'name' => 'Nakaseke District',
            ),
            416 => 
            array (
                'country_id' => 229,
                'id' => 424,
                'name' => 'Ngora District',
            ),
            417 => 
            array (
                'country_id' => 229,
                'id' => 425,
                'name' => 'Kumi District',
            ),
            418 => 
            array (
                'country_id' => 229,
                'id' => 426,
                'name' => 'Kabale District',
            ),
            419 => 
            array (
                'country_id' => 229,
                'id' => 427,
                'name' => 'Sembabule District',
            ),
            420 => 
            array (
                'country_id' => 229,
                'id' => 428,
                'name' => 'Bulambuli District',
            ),
            421 => 
            array (
                'country_id' => 229,
                'id' => 429,
                'name' => 'Sironko District',
            ),
            422 => 
            array (
                'country_id' => 229,
                'id' => 430,
                'name' => 'Napak District',
            ),
            423 => 
            array (
                'country_id' => 229,
                'id' => 431,
                'name' => 'Busia District',
            ),
            424 => 
            array (
                'country_id' => 229,
                'id' => 432,
                'name' => 'Kapchorwa District',
            ),
            425 => 
            array (
                'country_id' => 229,
                'id' => 433,
                'name' => 'Luwero District',
            ),
            426 => 
            array (
                'country_id' => 229,
                'id' => 434,
                'name' => 'Kaabong District',
            ),
            427 => 
            array (
                'country_id' => 229,
                'id' => 435,
                'name' => 'Mitooma District',
            ),
            428 => 
            array (
                'country_id' => 229,
                'id' => 436,
                'name' => 'Kibaale District',
            ),
            429 => 
            array (
                'country_id' => 229,
                'id' => 437,
                'name' => 'Kyegegwa District',
            ),
            430 => 
            array (
                'country_id' => 229,
                'id' => 438,
                'name' => 'Manafwa District',
            ),
            431 => 
            array (
                'country_id' => 229,
                'id' => 439,
                'name' => 'Rakai District',
            ),
            432 => 
            array (
                'country_id' => 229,
                'id' => 440,
                'name' => 'Kasese District',
            ),
            433 => 
            array (
                'country_id' => 229,
                'id' => 441,
                'name' => 'Budaka District',
            ),
            434 => 
            array (
                'country_id' => 229,
                'id' => 442,
                'name' => 'Rubirizi District',
            ),
            435 => 
            array (
                'country_id' => 229,
                'id' => 443,
                'name' => 'Kotido District',
            ),
            436 => 
            array (
                'country_id' => 229,
                'id' => 444,
                'name' => 'Soroti District',
            ),
            437 => 
            array (
                'country_id' => 229,
                'id' => 445,
                'name' => 'Luuka District',
            ),
            438 => 
            array (
                'country_id' => 229,
                'id' => 446,
                'name' => 'Nebbi District',
            ),
            439 => 
            array (
                'country_id' => 229,
                'id' => 447,
                'name' => 'Arua District',
            ),
            440 => 
            array (
                'country_id' => 229,
                'id' => 448,
                'name' => 'Kyotera District',
            ),
            441 => 
            array (
                'country_id' => 125,
                'id' => 449,
                'name' => 'Schellenberg',
            ),
            442 => 
            array (
                'country_id' => 125,
                'id' => 450,
                'name' => 'Schaan',
            ),
            443 => 
            array (
                'country_id' => 125,
                'id' => 451,
                'name' => 'Eschen',
            ),
            444 => 
            array (
                'country_id' => 125,
                'id' => 452,
                'name' => 'Vaduz',
            ),
            445 => 
            array (
                'country_id' => 125,
                'id' => 453,
                'name' => 'Ruggell',
            ),
            446 => 
            array (
                'country_id' => 125,
                'id' => 454,
                'name' => 'Planken',
            ),
            447 => 
            array (
                'country_id' => 125,
                'id' => 455,
                'name' => 'Mauren',
            ),
            448 => 
            array (
                'country_id' => 125,
                'id' => 456,
                'name' => 'Triesenberg',
            ),
            449 => 
            array (
                'country_id' => 125,
                'id' => 457,
                'name' => 'Gamprin',
            ),
            450 => 
            array (
                'country_id' => 125,
                'id' => 458,
                'name' => 'Balzers',
            ),
            451 => 
            array (
                'country_id' => 125,
                'id' => 459,
                'name' => 'Triesen',
            ),
            452 => 
            array (
                'country_id' => 28,
                'id' => 460,
                'name' => 'Brčko District',
            ),
            453 => 
            array (
                'country_id' => 28,
                'id' => 461,
                'name' => 'Tuzla Canton',
            ),
            454 => 
            array (
                'country_id' => 28,
                'id' => 462,
                'name' => 'Central Bosnia Canton',
            ),
            455 => 
            array (
                'country_id' => 28,
                'id' => 463,
                'name' => 'Herzegovina-Neretva Canton',
            ),
            456 => 
            array (
                'country_id' => 28,
                'id' => 464,
                'name' => 'Posavina Canton',
            ),
            457 => 
            array (
                'country_id' => 28,
                'id' => 465,
                'name' => 'Una-Sana Canton',
            ),
            458 => 
            array (
                'country_id' => 28,
                'id' => 466,
                'name' => 'Sarajevo Canton',
            ),
            459 => 
            array (
                'country_id' => 28,
                'id' => 467,
                'name' => 'Federation of Bosnia and Herzegovina',
            ),
            460 => 
            array (
                'country_id' => 28,
                'id' => 468,
                'name' => 'Zenica-Doboj Canton',
            ),
            461 => 
            array (
                'country_id' => 28,
                'id' => 469,
                'name' => 'West Herzegovina Canton',
            ),
            462 => 
            array (
                'country_id' => 28,
                'id' => 470,
                'name' => 'Republika Srpska',
            ),
            463 => 
            array (
                'country_id' => 28,
                'id' => 471,
                'name' => 'Canton 10',
            ),
            464 => 
            array (
                'country_id' => 28,
                'id' => 472,
                'name' => 'Bosnian Podrinje Canton',
            ),
            465 => 
            array (
                'country_id' => 195,
                'id' => 473,
                'name' => 'Dakar',
            ),
            466 => 
            array (
                'country_id' => 195,
                'id' => 474,
                'name' => 'Kolda',
            ),
            467 => 
            array (
                'country_id' => 195,
                'id' => 475,
                'name' => 'Kaffrine',
            ),
            468 => 
            array (
                'country_id' => 195,
                'id' => 476,
                'name' => 'Matam',
            ),
            469 => 
            array (
                'country_id' => 195,
                'id' => 477,
                'name' => 'Saint-Louis',
            ),
            470 => 
            array (
                'country_id' => 195,
                'id' => 478,
                'name' => 'Ziguinchor',
            ),
            471 => 
            array (
                'country_id' => 195,
                'id' => 479,
                'name' => 'Fatick',
            ),
            472 => 
            array (
                'country_id' => 195,
                'id' => 480,
                'name' => 'Diourbel Region',
            ),
            473 => 
            array (
                'country_id' => 195,
                'id' => 481,
                'name' => 'Kédougou',
            ),
            474 => 
            array (
                'country_id' => 195,
                'id' => 482,
                'name' => 'Sédhiou',
            ),
            475 => 
            array (
                'country_id' => 195,
                'id' => 483,
                'name' => 'Kaolack',
            ),
            476 => 
            array (
                'country_id' => 195,
                'id' => 484,
                'name' => 'Thiès Region',
            ),
            477 => 
            array (
                'country_id' => 195,
                'id' => 485,
                'name' => 'Louga',
            ),
            478 => 
            array (
                'country_id' => 195,
                'id' => 486,
                'name' => 'Tambacounda Region',
            ),
            479 => 
            array (
                'country_id' => 6,
                'id' => 487,
                'name' => 'Encamp',
            ),
            480 => 
            array (
                'country_id' => 6,
                'id' => 488,
                'name' => 'Andorra la Vella',
            ),
            481 => 
            array (
                'country_id' => 6,
                'id' => 489,
                'name' => 'Canillo',
            ),
            482 => 
            array (
                'country_id' => 6,
                'id' => 490,
                'name' => 'Sant Julià de Lòria',
            ),
            483 => 
            array (
                'country_id' => 6,
                'id' => 491,
                'name' => 'Ordino',
            ),
            484 => 
            array (
                'country_id' => 6,
                'id' => 492,
                'name' => 'Escaldes-Engordany',
            ),
            485 => 
            array (
                'country_id' => 6,
                'id' => 493,
                'name' => 'La Massana',
            ),
            486 => 
            array (
                'country_id' => 197,
                'id' => 494,
                'name' => 'Mont Buxton',
            ),
            487 => 
            array (
                'country_id' => 197,
                'id' => 495,
                'name' => 'La Digue',
            ),
            488 => 
            array (
                'country_id' => 197,
                'id' => 496,
                'name' => 'Saint Louis',
            ),
            489 => 
            array (
                'country_id' => 197,
                'id' => 497,
                'name' => 'Baie Lazare',
            ),
            490 => 
            array (
                'country_id' => 197,
                'id' => 498,
                'name' => 'Mont Fleuri',
            ),
            491 => 
            array (
                'country_id' => 197,
                'id' => 499,
                'name' => 'Les Mamelles',
            ),
            492 => 
            array (
                'country_id' => 197,
                'id' => 500,
                'name' => 'Grand\'Anse Mahé',
            ),
            493 => 
            array (
                'country_id' => 197,
                'id' => 501,
                'name' => 'Roche Caiman',
            ),
            494 => 
            array (
                'country_id' => 197,
                'id' => 502,
                'name' => 'Anse Royale',
            ),
            495 => 
            array (
                'country_id' => 197,
                'id' => 503,
                'name' => 'Glacis',
            ),
            496 => 
            array (
                'country_id' => 197,
                'id' => 504,
                'name' => 'Grand\'Anse Praslin',
            ),
            497 => 
            array (
                'country_id' => 197,
                'id' => 505,
                'name' => 'Bel Ombre',
            ),
            498 => 
            array (
                'country_id' => 197,
                'id' => 506,
                'name' => 'Anse-aux-Pins',
            ),
            499 => 
            array (
                'country_id' => 197,
                'id' => 507,
                'name' => 'Port Glaud',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 197,
                'id' => 508,
                'name' => 'Au Cap',
            ),
            1 => 
            array (
                'country_id' => 197,
                'id' => 509,
                'name' => 'Takamaka',
            ),
            2 => 
            array (
                'country_id' => 197,
                'id' => 510,
                'name' => 'Pointe La Rue',
            ),
            3 => 
            array (
                'country_id' => 197,
                'id' => 511,
                'name' => 'Plaisance',
            ),
            4 => 
            array (
                'country_id' => 197,
                'id' => 512,
                'name' => 'Beau Vallon',
            ),
            5 => 
            array (
                'country_id' => 197,
                'id' => 513,
                'name' => 'Anse Boileau',
            ),
            6 => 
            array (
                'country_id' => 197,
                'id' => 514,
                'name' => 'Baie Sainte Anne',
            ),
            7 => 
            array (
                'country_id' => 197,
                'id' => 515,
                'name' => 'Bel Air',
            ),
            8 => 
            array (
                'country_id' => 197,
                'id' => 516,
                'name' => 'La Rivière Anglaise',
            ),
            9 => 
            array (
                'country_id' => 197,
                'id' => 517,
                'name' => 'Cascade',
            ),
            10 => 
            array (
                'country_id' => 16,
                'id' => 518,
                'name' => 'Shaki',
            ),
            11 => 
            array (
                'country_id' => 16,
                'id' => 519,
                'name' => 'Tartar District',
            ),
            12 => 
            array (
                'country_id' => 16,
                'id' => 520,
                'name' => 'Shirvan',
            ),
            13 => 
            array (
                'country_id' => 16,
                'id' => 521,
                'name' => 'Qazakh District',
            ),
            14 => 
            array (
                'country_id' => 16,
                'id' => 522,
                'name' => 'Sadarak District',
            ),
            15 => 
            array (
                'country_id' => 16,
                'id' => 523,
                'name' => 'Yevlakh District',
            ),
            16 => 
            array (
                'country_id' => 16,
                'id' => 524,
                'name' => 'Khojali District',
            ),
            17 => 
            array (
                'country_id' => 16,
                'id' => 525,
                'name' => 'Kalbajar District',
            ),
            18 => 
            array (
                'country_id' => 16,
                'id' => 526,
                'name' => 'Qakh District',
            ),
            19 => 
            array (
                'country_id' => 16,
                'id' => 527,
                'name' => 'Fizuli District',
            ),
            20 => 
            array (
                'country_id' => 16,
                'id' => 528,
                'name' => 'Astara District',
            ),
            21 => 
            array (
                'country_id' => 16,
                'id' => 529,
                'name' => 'Shamakhi District',
            ),
            22 => 
            array (
                'country_id' => 16,
                'id' => 530,
                'name' => 'Neftchala District',
            ),
            23 => 
            array (
                'country_id' => 16,
                'id' => 531,
                'name' => 'Goychay',
            ),
            24 => 
            array (
                'country_id' => 16,
                'id' => 532,
                'name' => 'Bilasuvar District',
            ),
            25 => 
            array (
                'country_id' => 16,
                'id' => 533,
                'name' => 'Tovuz District',
            ),
            26 => 
            array (
                'country_id' => 16,
                'id' => 534,
                'name' => 'Ordubad District',
            ),
            27 => 
            array (
                'country_id' => 16,
                'id' => 535,
                'name' => 'Sharur District',
            ),
            28 => 
            array (
                'country_id' => 16,
                'id' => 536,
                'name' => 'Samukh District',
            ),
            29 => 
            array (
                'country_id' => 16,
                'id' => 537,
                'name' => 'Khizi District',
            ),
            30 => 
            array (
                'country_id' => 16,
                'id' => 538,
                'name' => 'Yevlakh',
            ),
            31 => 
            array (
                'country_id' => 16,
                'id' => 539,
                'name' => 'Ujar District',
            ),
            32 => 
            array (
                'country_id' => 16,
                'id' => 540,
                'name' => 'Absheron District',
            ),
            33 => 
            array (
                'country_id' => 16,
                'id' => 541,
                'name' => 'Lachin District',
            ),
            34 => 
            array (
                'country_id' => 16,
                'id' => 542,
                'name' => 'Qabala District',
            ),
            35 => 
            array (
                'country_id' => 16,
                'id' => 543,
                'name' => 'Agstafa District',
            ),
            36 => 
            array (
                'country_id' => 16,
                'id' => 544,
                'name' => 'Imishli District',
            ),
            37 => 
            array (
                'country_id' => 16,
                'id' => 545,
                'name' => 'Salyan District',
            ),
            38 => 
            array (
                'country_id' => 16,
                'id' => 546,
                'name' => 'Lerik District',
            ),
            39 => 
            array (
                'country_id' => 16,
                'id' => 547,
                'name' => 'Agsu District',
            ),
            40 => 
            array (
                'country_id' => 16,
                'id' => 548,
                'name' => 'Qubadli District',
            ),
            41 => 
            array (
                'country_id' => 16,
                'id' => 549,
                'name' => 'Kurdamir District',
            ),
            42 => 
            array (
                'country_id' => 16,
                'id' => 550,
                'name' => 'Yardymli District',
            ),
            43 => 
            array (
                'country_id' => 16,
                'id' => 551,
                'name' => 'Goranboy District',
            ),
            44 => 
            array (
                'country_id' => 16,
                'id' => 552,
                'name' => 'Baku',
            ),
            45 => 
            array (
                'country_id' => 16,
                'id' => 553,
                'name' => 'Agdash District',
            ),
            46 => 
            array (
                'country_id' => 16,
                'id' => 554,
                'name' => 'Beylagan District',
            ),
            47 => 
            array (
                'country_id' => 16,
                'id' => 555,
                'name' => 'Masally District',
            ),
            48 => 
            array (
                'country_id' => 16,
                'id' => 556,
                'name' => 'Oghuz District',
            ),
            49 => 
            array (
                'country_id' => 16,
                'id' => 557,
                'name' => 'Saatly District',
            ),
            50 => 
            array (
                'country_id' => 16,
                'id' => 558,
                'name' => 'Lankaran District',
            ),
            51 => 
            array (
                'country_id' => 16,
                'id' => 559,
                'name' => 'Agdam District',
            ),
            52 => 
            array (
                'country_id' => 16,
                'id' => 560,
                'name' => 'Balakan District',
            ),
            53 => 
            array (
                'country_id' => 16,
                'id' => 561,
                'name' => 'Dashkasan District',
            ),
            54 => 
            array (
                'country_id' => 16,
                'id' => 562,
                'name' => 'Nakhchivan Autonomous Republic',
            ),
            55 => 
            array (
                'country_id' => 16,
                'id' => 563,
                'name' => 'Quba District',
            ),
            56 => 
            array (
                'country_id' => 16,
                'id' => 564,
                'name' => 'Ismailli District',
            ),
            57 => 
            array (
                'country_id' => 16,
                'id' => 565,
                'name' => 'Sabirabad District',
            ),
            58 => 
            array (
                'country_id' => 16,
                'id' => 566,
                'name' => 'Zaqatala District',
            ),
            59 => 
            array (
                'country_id' => 16,
                'id' => 567,
                'name' => 'Kangarli District',
            ),
            60 => 
            array (
                'country_id' => 16,
                'id' => 568,
                'name' => 'Martuni',
            ),
            61 => 
            array (
                'country_id' => 16,
                'id' => 569,
                'name' => 'Barda District',
            ),
            62 => 
            array (
                'country_id' => 16,
                'id' => 570,
                'name' => 'Jabrayil District',
            ),
            63 => 
            array (
                'country_id' => 16,
                'id' => 571,
                'name' => 'Hajigabul District',
            ),
            64 => 
            array (
                'country_id' => 16,
                'id' => 572,
                'name' => 'Julfa District',
            ),
            65 => 
            array (
                'country_id' => 16,
                'id' => 573,
                'name' => 'Gobustan District',
            ),
            66 => 
            array (
                'country_id' => 16,
                'id' => 574,
                'name' => 'Goygol District',
            ),
            67 => 
            array (
                'country_id' => 16,
                'id' => 575,
                'name' => 'Babek District',
            ),
            68 => 
            array (
                'country_id' => 16,
                'id' => 576,
                'name' => 'Zardab District',
            ),
            69 => 
            array (
                'country_id' => 16,
                'id' => 577,
                'name' => 'Aghjabadi District',
            ),
            70 => 
            array (
                'country_id' => 16,
                'id' => 578,
                'name' => 'Jalilabad District',
            ),
            71 => 
            array (
                'country_id' => 16,
                'id' => 579,
                'name' => 'Shahbuz District',
            ),
            72 => 
            array (
                'country_id' => 16,
                'id' => 580,
                'name' => 'Mingachevir',
            ),
            73 => 
            array (
                'country_id' => 16,
                'id' => 581,
                'name' => 'Zangilan District',
            ),
            74 => 
            array (
                'country_id' => 16,
                'id' => 582,
                'name' => 'Sumqayit',
            ),
            75 => 
            array (
                'country_id' => 16,
                'id' => 583,
                'name' => 'Shamkir District',
            ),
            76 => 
            array (
                'country_id' => 16,
                'id' => 584,
                'name' => 'Siazan District',
            ),
            77 => 
            array (
                'country_id' => 16,
                'id' => 585,
                'name' => 'Ganja',
            ),
            78 => 
            array (
                'country_id' => 16,
                'id' => 586,
                'name' => 'Shaki District',
            ),
            79 => 
            array (
                'country_id' => 16,
                'id' => 587,
                'name' => 'Lankaran',
            ),
            80 => 
            array (
                'country_id' => 16,
                'id' => 588,
                'name' => 'Qusar District',
            ),
            81 => 
            array (
                'country_id' => 16,
                'id' => 589,
                'name' => 'Gədəbəy',
            ),
            82 => 
            array (
                'country_id' => 16,
                'id' => 590,
                'name' => 'Khachmaz District',
            ),
            83 => 
            array (
                'country_id' => 16,
                'id' => 591,
                'name' => 'Shabran District',
            ),
            84 => 
            array (
                'country_id' => 16,
                'id' => 592,
                'name' => 'Shusha District',
            ),
            85 => 
            array (
                'country_id' => 3,
                'id' => 593,
                'name' => 'Skrapar District',
            ),
            86 => 
            array (
                'country_id' => 3,
                'id' => 594,
                'name' => 'Kavajë District',
            ),
            87 => 
            array (
                'country_id' => 3,
                'id' => 595,
                'name' => 'Lezhë District',
            ),
            88 => 
            array (
                'country_id' => 3,
                'id' => 596,
                'name' => 'Librazhd District',
            ),
            89 => 
            array (
                'country_id' => 3,
                'id' => 597,
                'name' => 'Korçë District',
            ),
            90 => 
            array (
                'country_id' => 3,
                'id' => 598,
                'name' => 'Elbasan County',
            ),
            91 => 
            array (
                'country_id' => 3,
                'id' => 599,
                'name' => 'Lushnjë District',
            ),
            92 => 
            array (
                'country_id' => 3,
                'id' => 600,
                'name' => 'Has District',
            ),
            93 => 
            array (
                'country_id' => 3,
                'id' => 601,
                'name' => 'Kukës County',
            ),
            94 => 
            array (
                'country_id' => 3,
                'id' => 602,
                'name' => 'Malësi e Madhe District',
            ),
            95 => 
            array (
                'country_id' => 3,
                'id' => 603,
                'name' => 'Berat County',
            ),
            96 => 
            array (
                'country_id' => 3,
                'id' => 604,
                'name' => 'Gjirokastër County',
            ),
            97 => 
            array (
                'country_id' => 3,
                'id' => 605,
                'name' => 'Dibër District',
            ),
            98 => 
            array (
                'country_id' => 3,
                'id' => 606,
                'name' => 'Pogradec District',
            ),
            99 => 
            array (
                'country_id' => 3,
                'id' => 607,
                'name' => 'Bulqizë District',
            ),
            100 => 
            array (
                'country_id' => 3,
                'id' => 608,
                'name' => 'Devoll District',
            ),
            101 => 
            array (
                'country_id' => 3,
                'id' => 609,
                'name' => 'Lezhë County',
            ),
            102 => 
            array (
                'country_id' => 3,
                'id' => 610,
                'name' => 'Dibër County',
            ),
            103 => 
            array (
                'country_id' => 3,
                'id' => 611,
                'name' => 'Shkodër County',
            ),
            104 => 
            array (
                'country_id' => 3,
                'id' => 612,
                'name' => 'Kuçovë District',
            ),
            105 => 
            array (
                'country_id' => 3,
                'id' => 613,
                'name' => 'Vlorë District',
            ),
            106 => 
            array (
                'country_id' => 3,
                'id' => 614,
                'name' => 'Krujë District',
            ),
            107 => 
            array (
                'country_id' => 3,
                'id' => 615,
                'name' => 'Tirana County',
            ),
            108 => 
            array (
                'country_id' => 3,
                'id' => 616,
                'name' => 'Tepelenë District',
            ),
            109 => 
            array (
                'country_id' => 3,
                'id' => 617,
                'name' => 'Gramsh District',
            ),
            110 => 
            array (
                'country_id' => 3,
                'id' => 618,
                'name' => 'Delvinë District',
            ),
            111 => 
            array (
                'country_id' => 3,
                'id' => 619,
                'name' => 'Peqin District',
            ),
            112 => 
            array (
                'country_id' => 3,
                'id' => 620,
                'name' => 'Pukë District',
            ),
            113 => 
            array (
                'country_id' => 3,
                'id' => 621,
                'name' => 'Gjirokastër District',
            ),
            114 => 
            array (
                'country_id' => 3,
                'id' => 622,
                'name' => 'Kurbin District',
            ),
            115 => 
            array (
                'country_id' => 3,
                'id' => 623,
                'name' => 'Kukës District',
            ),
            116 => 
            array (
                'country_id' => 3,
                'id' => 624,
                'name' => 'Sarandë District',
            ),
            117 => 
            array (
                'country_id' => 3,
                'id' => 625,
                'name' => 'Përmet District',
            ),
            118 => 
            array (
                'country_id' => 3,
                'id' => 626,
                'name' => 'Shkodër District',
            ),
            119 => 
            array (
                'country_id' => 3,
                'id' => 627,
                'name' => 'Fier District',
            ),
            120 => 
            array (
                'country_id' => 3,
                'id' => 628,
                'name' => 'Kolonjë District',
            ),
            121 => 
            array (
                'country_id' => 3,
                'id' => 629,
                'name' => 'Berat District',
            ),
            122 => 
            array (
                'country_id' => 3,
                'id' => 630,
                'name' => 'Korçë County',
            ),
            123 => 
            array (
                'country_id' => 3,
                'id' => 631,
                'name' => 'Fier County',
            ),
            124 => 
            array (
                'country_id' => 3,
                'id' => 632,
                'name' => 'Durrës County',
            ),
            125 => 
            array (
                'country_id' => 3,
                'id' => 633,
                'name' => 'Tirana District',
            ),
            126 => 
            array (
                'country_id' => 3,
                'id' => 634,
                'name' => 'Vlorë County',
            ),
            127 => 
            array (
                'country_id' => 3,
                'id' => 635,
                'name' => 'Mat District',
            ),
            128 => 
            array (
                'country_id' => 3,
                'id' => 636,
                'name' => 'Tropojë District',
            ),
            129 => 
            array (
                'country_id' => 3,
                'id' => 637,
                'name' => 'Mallakastër District',
            ),
            130 => 
            array (
                'country_id' => 3,
                'id' => 638,
                'name' => 'Mirditë District',
            ),
            131 => 
            array (
                'country_id' => 3,
                'id' => 639,
                'name' => 'Durrës District',
            ),
            132 => 
            array (
                'country_id' => 129,
                'id' => 640,
                'name' => 'Sveti Nikole Municipality',
            ),
            133 => 
            array (
                'country_id' => 129,
                'id' => 641,
                'name' => 'Kratovo Municipality',
            ),
            134 => 
            array (
                'country_id' => 129,
                'id' => 642,
                'name' => 'Zajas Municipality',
            ),
            135 => 
            array (
                'country_id' => 129,
                'id' => 643,
                'name' => 'Staro Nagoričane Municipality',
            ),
            136 => 
            array (
                'country_id' => 129,
                'id' => 644,
                'name' => 'Češinovo-Obleševo Municipality',
            ),
            137 => 
            array (
                'country_id' => 129,
                'id' => 645,
                'name' => 'Debarca Municipality',
            ),
            138 => 
            array (
                'country_id' => 129,
                'id' => 646,
                'name' => 'Probištip Municipality',
            ),
            139 => 
            array (
                'country_id' => 129,
                'id' => 647,
                'name' => 'Krivogaštani Municipality',
            ),
            140 => 
            array (
                'country_id' => 129,
                'id' => 648,
                'name' => 'Gevgelija Municipality',
            ),
            141 => 
            array (
                'country_id' => 129,
                'id' => 649,
                'name' => 'Bogdanci Municipality',
            ),
            142 => 
            array (
                'country_id' => 129,
                'id' => 650,
                'name' => 'Vraneštica Municipality',
            ),
            143 => 
            array (
                'country_id' => 129,
                'id' => 651,
                'name' => 'Veles Municipality',
            ),
            144 => 
            array (
                'country_id' => 129,
                'id' => 652,
                'name' => 'Bosilovo Municipality',
            ),
            145 => 
            array (
                'country_id' => 129,
                'id' => 653,
                'name' => 'Mogila Municipality',
            ),
            146 => 
            array (
                'country_id' => 129,
                'id' => 654,
                'name' => 'Tearce Municipality',
            ),
            147 => 
            array (
                'country_id' => 129,
                'id' => 655,
                'name' => 'Demir Kapija Municipality',
            ),
            148 => 
            array (
                'country_id' => 129,
                'id' => 656,
                'name' => 'Aračinovo Municipality',
            ),
            149 => 
            array (
                'country_id' => 129,
                'id' => 657,
                'name' => 'Drugovo Municipality',
            ),
            150 => 
            array (
                'country_id' => 129,
                'id' => 658,
                'name' => 'Vasilevo Municipality',
            ),
            151 => 
            array (
                'country_id' => 129,
                'id' => 659,
                'name' => 'Lipkovo Municipality',
            ),
            152 => 
            array (
                'country_id' => 129,
                'id' => 660,
                'name' => 'Brvenica Municipality',
            ),
            153 => 
            array (
                'country_id' => 129,
                'id' => 661,
                'name' => 'Štip Municipality',
            ),
            154 => 
            array (
                'country_id' => 129,
                'id' => 662,
                'name' => 'Vevčani Municipality',
            ),
            155 => 
            array (
                'country_id' => 129,
                'id' => 663,
                'name' => 'Tetovo Municipality',
            ),
            156 => 
            array (
                'country_id' => 129,
                'id' => 664,
                'name' => 'Negotino Municipality',
            ),
            157 => 
            array (
                'country_id' => 129,
                'id' => 665,
                'name' => 'Konče Municipality',
            ),
            158 => 
            array (
                'country_id' => 129,
                'id' => 666,
                'name' => 'Prilep Municipality',
            ),
            159 => 
            array (
                'country_id' => 129,
                'id' => 667,
                'name' => 'Saraj Municipality',
            ),
            160 => 
            array (
                'country_id' => 129,
                'id' => 668,
                'name' => 'Želino Municipality',
            ),
            161 => 
            array (
                'country_id' => 129,
                'id' => 669,
                'name' => 'Mavrovo and Rostuša Municipality',
            ),
            162 => 
            array (
                'country_id' => 129,
                'id' => 670,
                'name' => 'Plasnica Municipality',
            ),
            163 => 
            array (
                'country_id' => 129,
                'id' => 671,
                'name' => 'Valandovo Municipality',
            ),
            164 => 
            array (
                'country_id' => 129,
                'id' => 672,
                'name' => 'Vinica Municipality',
            ),
            165 => 
            array (
                'country_id' => 129,
                'id' => 673,
                'name' => 'Zrnovci Municipality',
            ),
            166 => 
            array (
                'country_id' => 129,
                'id' => 674,
                'name' => 'Karbinci',
            ),
            167 => 
            array (
                'country_id' => 129,
                'id' => 675,
                'name' => 'Dolneni Municipality',
            ),
            168 => 
            array (
                'country_id' => 129,
                'id' => 676,
                'name' => 'Čaška Municipality',
            ),
            169 => 
            array (
                'country_id' => 129,
                'id' => 677,
                'name' => 'Kriva Palanka Municipality',
            ),
            170 => 
            array (
                'country_id' => 129,
                'id' => 678,
                'name' => 'Jegunovce Municipality',
            ),
            171 => 
            array (
                'country_id' => 129,
                'id' => 679,
                'name' => 'Bitola Municipality',
            ),
            172 => 
            array (
                'country_id' => 129,
                'id' => 680,
                'name' => 'Šuto Orizari Municipality',
            ),
            173 => 
            array (
                'country_id' => 129,
                'id' => 681,
                'name' => 'Karpoš Municipality',
            ),
            174 => 
            array (
                'country_id' => 129,
                'id' => 682,
                'name' => 'Oslomej Municipality',
            ),
            175 => 
            array (
                'country_id' => 129,
                'id' => 683,
                'name' => 'Kumanovo Municipality',
            ),
            176 => 
            array (
                'country_id' => 129,
                'id' => 684,
                'name' => 'Greater Skopje',
            ),
            177 => 
            array (
                'country_id' => 129,
                'id' => 685,
                'name' => 'Pehčevo Municipality',
            ),
            178 => 
            array (
                'country_id' => 129,
                'id' => 686,
                'name' => 'Kisela Voda Municipality',
            ),
            179 => 
            array (
                'country_id' => 129,
                'id' => 687,
                'name' => 'Demir Hisar Municipality',
            ),
            180 => 
            array (
                'country_id' => 129,
                'id' => 688,
                'name' => 'Kičevo Municipality',
            ),
            181 => 
            array (
                'country_id' => 129,
                'id' => 689,
                'name' => 'Vrapčište Municipality',
            ),
            182 => 
            array (
                'country_id' => 129,
                'id' => 690,
                'name' => 'Ilinden Municipality',
            ),
            183 => 
            array (
                'country_id' => 129,
                'id' => 691,
                'name' => 'Rosoman Municipality',
            ),
            184 => 
            array (
                'country_id' => 129,
                'id' => 692,
                'name' => 'Makedonski Brod Municipality',
            ),
            185 => 
            array (
                'country_id' => 129,
                'id' => 693,
                'name' => 'Gostivar Municipality',
            ),
            186 => 
            array (
                'country_id' => 129,
                'id' => 694,
                'name' => 'Butel Municipality',
            ),
            187 => 
            array (
                'country_id' => 129,
                'id' => 695,
                'name' => 'Delčevo Municipality',
            ),
            188 => 
            array (
                'country_id' => 129,
                'id' => 696,
                'name' => 'Novaci Municipality',
            ),
            189 => 
            array (
                'country_id' => 129,
                'id' => 697,
                'name' => 'Dojran Municipality',
            ),
            190 => 
            array (
                'country_id' => 129,
                'id' => 698,
                'name' => 'Petrovec Municipality',
            ),
            191 => 
            array (
                'country_id' => 129,
                'id' => 699,
                'name' => 'Ohrid Municipality',
            ),
            192 => 
            array (
                'country_id' => 129,
                'id' => 700,
                'name' => 'Struga Municipality',
            ),
            193 => 
            array (
                'country_id' => 129,
                'id' => 701,
                'name' => 'Makedonska Kamenica Municipality',
            ),
            194 => 
            array (
                'country_id' => 129,
                'id' => 702,
                'name' => 'Centar Municipality',
            ),
            195 => 
            array (
                'country_id' => 129,
                'id' => 703,
                'name' => 'Aerodrom Municipality',
            ),
            196 => 
            array (
                'country_id' => 129,
                'id' => 704,
                'name' => 'Čair Municipality',
            ),
            197 => 
            array (
                'country_id' => 129,
                'id' => 705,
                'name' => 'Lozovo Municipality',
            ),
            198 => 
            array (
                'country_id' => 129,
                'id' => 706,
                'name' => 'Zelenikovo Municipality',
            ),
            199 => 
            array (
                'country_id' => 129,
                'id' => 707,
                'name' => 'Gazi Baba Municipality',
            ),
            200 => 
            array (
                'country_id' => 129,
                'id' => 708,
                'name' => 'Gradsko Municipality',
            ),
            201 => 
            array (
                'country_id' => 129,
                'id' => 709,
                'name' => 'Radoviš Municipality',
            ),
            202 => 
            array (
                'country_id' => 129,
                'id' => 710,
                'name' => 'Strumica Municipality',
            ),
            203 => 
            array (
                'country_id' => 129,
                'id' => 711,
                'name' => 'Studeničani Municipality',
            ),
            204 => 
            array (
                'country_id' => 129,
                'id' => 712,
                'name' => 'Resen Municipality',
            ),
            205 => 
            array (
                'country_id' => 129,
                'id' => 713,
                'name' => 'Kavadarci Municipality',
            ),
            206 => 
            array (
                'country_id' => 129,
                'id' => 714,
                'name' => 'Kruševo Municipality',
            ),
            207 => 
            array (
                'country_id' => 129,
                'id' => 715,
                'name' => 'Čučer-Sandevo Municipality',
            ),
            208 => 
            array (
                'country_id' => 129,
                'id' => 716,
                'name' => 'Berovo Municipality',
            ),
            209 => 
            array (
                'country_id' => 129,
                'id' => 717,
                'name' => 'Rankovce Municipality',
            ),
            210 => 
            array (
                'country_id' => 129,
                'id' => 718,
                'name' => 'Novo Selo Municipality',
            ),
            211 => 
            array (
                'country_id' => 129,
                'id' => 719,
                'name' => 'Sopište Municipality',
            ),
            212 => 
            array (
                'country_id' => 129,
                'id' => 720,
                'name' => 'Centar Župa Municipality',
            ),
            213 => 
            array (
                'country_id' => 129,
                'id' => 721,
                'name' => 'Bogovinje Municipality',
            ),
            214 => 
            array (
                'country_id' => 129,
                'id' => 722,
                'name' => 'Gjorče Petrov Municipality',
            ),
            215 => 
            array (
                'country_id' => 129,
                'id' => 723,
                'name' => 'Kočani Municipality',
            ),
            216 => 
            array (
                'country_id' => 55,
                'id' => 724,
                'name' => 'Požega-Slavonia',
            ),
            217 => 
            array (
                'country_id' => 55,
                'id' => 725,
                'name' => 'Split-Dalmatia',
            ),
            218 => 
            array (
                'country_id' => 55,
                'id' => 726,
                'name' => 'Međimurje',
            ),
            219 => 
            array (
                'country_id' => 55,
                'id' => 727,
                'name' => 'Zadar',
            ),
            220 => 
            array (
                'country_id' => 55,
                'id' => 728,
                'name' => 'Dubrovnik-Neretva',
            ),
            221 => 
            array (
                'country_id' => 55,
                'id' => 729,
                'name' => 'Krapina-Zagorje',
            ),
            222 => 
            array (
                'country_id' => 55,
                'id' => 730,
                'name' => 'Šibenik-Knin',
            ),
            223 => 
            array (
                'country_id' => 55,
                'id' => 731,
                'name' => 'Lika-Senj',
            ),
            224 => 
            array (
                'country_id' => 55,
                'id' => 732,
                'name' => 'Virovitica-Podravina',
            ),
            225 => 
            array (
                'country_id' => 55,
                'id' => 733,
                'name' => 'Sisak-Moslavina',
            ),
            226 => 
            array (
                'country_id' => 55,
                'id' => 734,
                'name' => 'Bjelovar-Bilogora',
            ),
            227 => 
            array (
                'country_id' => 55,
                'id' => 735,
                'name' => 'Primorje-Gorski Kotar',
            ),
            228 => 
            array (
                'country_id' => 55,
                'id' => 736,
                'name' => 'Zagreb',
            ),
            229 => 
            array (
                'country_id' => 55,
                'id' => 737,
                'name' => 'Brod-Posavina',
            ),
            230 => 
            array (
                'country_id' => 55,
                'id' => 738,
                'name' => 'Zagreb',
            ),
            231 => 
            array (
                'country_id' => 55,
                'id' => 739,
                'name' => 'Varaždin',
            ),
            232 => 
            array (
                'country_id' => 55,
                'id' => 740,
                'name' => 'Osijek-Baranja',
            ),
            233 => 
            array (
                'country_id' => 55,
                'id' => 741,
                'name' => 'Vukovar-Syrmia',
            ),
            234 => 
            array (
                'country_id' => 55,
                'id' => 742,
                'name' => 'Koprivnica-Križevci',
            ),
            235 => 
            array (
                'country_id' => 55,
                'id' => 743,
                'name' => 'Istria',
            ),
            236 => 
            array (
                'country_id' => 57,
                'id' => 744,
            'name' => 'Kyrenia District (Keryneia)',
            ),
            237 => 
            array (
                'country_id' => 57,
                'id' => 745,
            'name' => 'Nicosia District (Lefkoşa)',
            ),
            238 => 
            array (
                'country_id' => 57,
                'id' => 746,
            'name' => 'Paphos District (Pafos)',
            ),
            239 => 
            array (
                'country_id' => 57,
                'id' => 747,
            'name' => 'Larnaca District (Larnaka)',
            ),
            240 => 
            array (
                'country_id' => 57,
                'id' => 748,
            'name' => 'Limassol District (Leymasun)',
            ),
            241 => 
            array (
                'country_id' => 57,
                'id' => 749,
            'name' => 'Famagusta District (Mağusa)',
            ),
            242 => 
            array (
                'country_id' => 19,
                'id' => 750,
                'name' => 'Rangpur Division',
            ),
            243 => 
            array (
                'country_id' => 19,
                'id' => 751,
                'name' => 'Cox\'s Bazar District',
            ),
            244 => 
            array (
                'country_id' => 19,
                'id' => 752,
                'name' => 'Bandarban District',
            ),
            245 => 
            array (
                'country_id' => 19,
                'id' => 753,
                'name' => 'Rajshahi Division',
            ),
            246 => 
            array (
                'country_id' => 19,
                'id' => 754,
                'name' => 'Pabna District',
            ),
            247 => 
            array (
                'country_id' => 19,
                'id' => 755,
                'name' => 'Sherpur District',
            ),
            248 => 
            array (
                'country_id' => 19,
                'id' => 756,
                'name' => 'Bhola District',
            ),
            249 => 
            array (
                'country_id' => 19,
                'id' => 757,
                'name' => 'Jessore District',
            ),
            250 => 
            array (
                'country_id' => 19,
                'id' => 758,
                'name' => 'Mymensingh Division',
            ),
            251 => 
            array (
                'country_id' => 19,
                'id' => 759,
                'name' => 'Rangpur District',
            ),
            252 => 
            array (
                'country_id' => 19,
                'id' => 760,
                'name' => 'Dhaka Division',
            ),
            253 => 
            array (
                'country_id' => 19,
                'id' => 761,
                'name' => 'Chapai Nawabganj District',
            ),
            254 => 
            array (
                'country_id' => 19,
                'id' => 762,
                'name' => 'Faridpur District',
            ),
            255 => 
            array (
                'country_id' => 19,
                'id' => 763,
                'name' => 'Comilla District',
            ),
            256 => 
            array (
                'country_id' => 19,
                'id' => 764,
                'name' => 'Netrokona District',
            ),
            257 => 
            array (
                'country_id' => 19,
                'id' => 765,
                'name' => 'Sylhet Division',
            ),
            258 => 
            array (
                'country_id' => 19,
                'id' => 766,
                'name' => 'Mymensingh District',
            ),
            259 => 
            array (
                'country_id' => 19,
                'id' => 767,
                'name' => 'Sylhet District',
            ),
            260 => 
            array (
                'country_id' => 19,
                'id' => 768,
                'name' => 'Chandpur District',
            ),
            261 => 
            array (
                'country_id' => 19,
                'id' => 769,
                'name' => 'Narail District',
            ),
            262 => 
            array (
                'country_id' => 19,
                'id' => 770,
                'name' => 'Narayanganj District',
            ),
            263 => 
            array (
                'country_id' => 19,
                'id' => 771,
                'name' => 'Dhaka District',
            ),
            264 => 
            array (
                'country_id' => 19,
                'id' => 772,
                'name' => 'Nilphamari District',
            ),
            265 => 
            array (
                'country_id' => 19,
                'id' => 773,
                'name' => 'Rajbari District',
            ),
            266 => 
            array (
                'country_id' => 19,
                'id' => 774,
                'name' => 'Kushtia District',
            ),
            267 => 
            array (
                'country_id' => 19,
                'id' => 775,
                'name' => 'Khulna Division',
            ),
            268 => 
            array (
                'country_id' => 19,
                'id' => 776,
                'name' => 'Meherpur District',
            ),
            269 => 
            array (
                'country_id' => 19,
                'id' => 777,
                'name' => 'Patuakhali District',
            ),
            270 => 
            array (
                'country_id' => 19,
                'id' => 778,
                'name' => 'Jhalokati District',
            ),
            271 => 
            array (
                'country_id' => 19,
                'id' => 779,
                'name' => 'Kishoreganj District',
            ),
            272 => 
            array (
                'country_id' => 19,
                'id' => 780,
                'name' => 'Lalmonirhat District',
            ),
            273 => 
            array (
                'country_id' => 19,
                'id' => 781,
                'name' => 'Sirajganj District',
            ),
            274 => 
            array (
                'country_id' => 19,
                'id' => 782,
                'name' => 'Tangail District',
            ),
            275 => 
            array (
                'country_id' => 19,
                'id' => 783,
                'name' => 'Dinajpur District',
            ),
            276 => 
            array (
                'country_id' => 19,
                'id' => 784,
                'name' => 'Barguna District',
            ),
            277 => 
            array (
                'country_id' => 19,
                'id' => 785,
                'name' => 'Chittagong District',
            ),
            278 => 
            array (
                'country_id' => 19,
                'id' => 786,
                'name' => 'Khagrachari District',
            ),
            279 => 
            array (
                'country_id' => 19,
                'id' => 787,
                'name' => 'Natore District',
            ),
            280 => 
            array (
                'country_id' => 19,
                'id' => 788,
                'name' => 'Chuadanga District',
            ),
            281 => 
            array (
                'country_id' => 19,
                'id' => 789,
                'name' => 'Jhenaidah District',
            ),
            282 => 
            array (
                'country_id' => 19,
                'id' => 790,
                'name' => 'Munshiganj District',
            ),
            283 => 
            array (
                'country_id' => 19,
                'id' => 791,
                'name' => 'Pirojpur District',
            ),
            284 => 
            array (
                'country_id' => 19,
                'id' => 792,
                'name' => 'Gopalganj District',
            ),
            285 => 
            array (
                'country_id' => 19,
                'id' => 793,
                'name' => 'Kurigram District',
            ),
            286 => 
            array (
                'country_id' => 19,
                'id' => 794,
                'name' => 'Moulvibazar District',
            ),
            287 => 
            array (
                'country_id' => 19,
                'id' => 795,
                'name' => 'Gaibandha District',
            ),
            288 => 
            array (
                'country_id' => 19,
                'id' => 796,
                'name' => 'Bagerhat District',
            ),
            289 => 
            array (
                'country_id' => 19,
                'id' => 797,
                'name' => 'Bogra District',
            ),
            290 => 
            array (
                'country_id' => 19,
                'id' => 798,
                'name' => 'Gazipur District',
            ),
            291 => 
            array (
                'country_id' => 19,
                'id' => 799,
                'name' => 'Satkhira District',
            ),
            292 => 
            array (
                'country_id' => 19,
                'id' => 800,
                'name' => 'Panchagarh District',
            ),
            293 => 
            array (
                'country_id' => 19,
                'id' => 801,
                'name' => 'Shariatpur District',
            ),
            294 => 
            array (
                'country_id' => 19,
                'id' => 802,
                'name' => 'Bahadia',
            ),
            295 => 
            array (
                'country_id' => 19,
                'id' => 803,
                'name' => 'Chittagong Division',
            ),
            296 => 
            array (
                'country_id' => 19,
                'id' => 804,
                'name' => 'Thakurgaon District',
            ),
            297 => 
            array (
                'country_id' => 19,
                'id' => 805,
                'name' => 'Habiganj District',
            ),
            298 => 
            array (
                'country_id' => 19,
                'id' => 806,
                'name' => 'Joypurhat District',
            ),
            299 => 
            array (
                'country_id' => 19,
                'id' => 807,
                'name' => 'Barisal Division',
            ),
            300 => 
            array (
                'country_id' => 19,
                'id' => 808,
                'name' => 'Jamalpur District',
            ),
            301 => 
            array (
                'country_id' => 19,
                'id' => 809,
                'name' => 'Rangamati Hill District',
            ),
            302 => 
            array (
                'country_id' => 19,
                'id' => 810,
                'name' => 'Brahmanbaria District',
            ),
            303 => 
            array (
                'country_id' => 19,
                'id' => 811,
                'name' => 'Khulna District',
            ),
            304 => 
            array (
                'country_id' => 19,
                'id' => 812,
                'name' => 'Sunamganj District',
            ),
            305 => 
            array (
                'country_id' => 19,
                'id' => 813,
                'name' => 'Rajshahi District',
            ),
            306 => 
            array (
                'country_id' => 19,
                'id' => 814,
                'name' => 'Naogaon District',
            ),
            307 => 
            array (
                'country_id' => 19,
                'id' => 815,
                'name' => 'Noakhali District',
            ),
            308 => 
            array (
                'country_id' => 19,
                'id' => 816,
                'name' => 'Feni District',
            ),
            309 => 
            array (
                'country_id' => 19,
                'id' => 817,
                'name' => 'Madaripur District',
            ),
            310 => 
            array (
                'country_id' => 19,
                'id' => 818,
                'name' => 'Barisal District',
            ),
            311 => 
            array (
                'country_id' => 19,
                'id' => 819,
                'name' => 'Lakshmipur District',
            ),
            312 => 
            array (
                'country_id' => 109,
                'id' => 820,
                'name' => 'Okayama Prefecture',
            ),
            313 => 
            array (
                'country_id' => 109,
                'id' => 821,
                'name' => 'Chiba Prefecture',
            ),
            314 => 
            array (
                'country_id' => 109,
                'id' => 822,
                'name' => 'Ōita Prefecture',
            ),
            315 => 
            array (
                'country_id' => 109,
                'id' => 823,
                'name' => 'Tokyo',
            ),
            316 => 
            array (
                'country_id' => 109,
                'id' => 824,
                'name' => 'Nara Prefecture',
            ),
            317 => 
            array (
                'country_id' => 109,
                'id' => 825,
                'name' => 'Shizuoka Prefecture',
            ),
            318 => 
            array (
                'country_id' => 109,
                'id' => 826,
                'name' => 'Shimane Prefecture',
            ),
            319 => 
            array (
                'country_id' => 109,
                'id' => 827,
                'name' => 'Aichi Prefecture',
            ),
            320 => 
            array (
                'country_id' => 109,
                'id' => 828,
                'name' => 'Hiroshima Prefecture',
            ),
            321 => 
            array (
                'country_id' => 109,
                'id' => 829,
                'name' => 'Akita Prefecture',
            ),
            322 => 
            array (
                'country_id' => 109,
                'id' => 830,
                'name' => 'Ishikawa Prefecture',
            ),
            323 => 
            array (
                'country_id' => 109,
                'id' => 831,
                'name' => 'Hyōgo Prefecture',
            ),
            324 => 
            array (
                'country_id' => 109,
                'id' => 832,
                'name' => 'Hokkaidō Prefecture',
            ),
            325 => 
            array (
                'country_id' => 109,
                'id' => 833,
                'name' => 'Mie Prefecture',
            ),
            326 => 
            array (
                'country_id' => 109,
                'id' => 834,
                'name' => 'Kyōto Prefecture',
            ),
            327 => 
            array (
                'country_id' => 109,
                'id' => 835,
                'name' => 'Yamaguchi Prefecture',
            ),
            328 => 
            array (
                'country_id' => 109,
                'id' => 836,
                'name' => 'Tokushima Prefecture',
            ),
            329 => 
            array (
                'country_id' => 109,
                'id' => 837,
                'name' => 'Yamagata Prefecture',
            ),
            330 => 
            array (
                'country_id' => 109,
                'id' => 838,
                'name' => 'Toyama Prefecture',
            ),
            331 => 
            array (
                'country_id' => 109,
                'id' => 839,
                'name' => 'Aomori Prefecture',
            ),
            332 => 
            array (
                'country_id' => 109,
                'id' => 840,
                'name' => 'Kagoshima Prefecture',
            ),
            333 => 
            array (
                'country_id' => 109,
                'id' => 841,
                'name' => 'Niigata Prefecture',
            ),
            334 => 
            array (
                'country_id' => 109,
                'id' => 842,
                'name' => 'Kanagawa Prefecture',
            ),
            335 => 
            array (
                'country_id' => 109,
                'id' => 843,
                'name' => 'Nagano Prefecture',
            ),
            336 => 
            array (
                'country_id' => 109,
                'id' => 844,
                'name' => 'Wakayama Prefecture',
            ),
            337 => 
            array (
                'country_id' => 109,
                'id' => 845,
                'name' => 'Shiga Prefecture',
            ),
            338 => 
            array (
                'country_id' => 109,
                'id' => 846,
                'name' => 'Kumamoto Prefecture',
            ),
            339 => 
            array (
                'country_id' => 109,
                'id' => 847,
                'name' => 'Fukushima Prefecture',
            ),
            340 => 
            array (
                'country_id' => 109,
                'id' => 848,
                'name' => 'Fukui Prefecture',
            ),
            341 => 
            array (
                'country_id' => 109,
                'id' => 849,
                'name' => 'Nagasaki Prefecture',
            ),
            342 => 
            array (
                'country_id' => 109,
                'id' => 850,
                'name' => 'Tottori Prefecture',
            ),
            343 => 
            array (
                'country_id' => 109,
                'id' => 851,
                'name' => 'Ibaraki Prefecture',
            ),
            344 => 
            array (
                'country_id' => 109,
                'id' => 852,
                'name' => 'Yamanashi Prefecture',
            ),
            345 => 
            array (
                'country_id' => 109,
                'id' => 853,
                'name' => 'Okinawa Prefecture',
            ),
            346 => 
            array (
                'country_id' => 109,
                'id' => 854,
                'name' => 'Tochigi Prefecture',
            ),
            347 => 
            array (
                'country_id' => 109,
                'id' => 855,
                'name' => 'Miyazaki Prefecture',
            ),
            348 => 
            array (
                'country_id' => 109,
                'id' => 856,
                'name' => 'Iwate Prefecture',
            ),
            349 => 
            array (
                'country_id' => 109,
                'id' => 857,
                'name' => 'Miyagi Prefecture',
            ),
            350 => 
            array (
                'country_id' => 109,
                'id' => 858,
                'name' => 'Gifu Prefecture',
            ),
            351 => 
            array (
                'country_id' => 109,
                'id' => 859,
                'name' => 'Ōsaka Prefecture',
            ),
            352 => 
            array (
                'country_id' => 109,
                'id' => 860,
                'name' => 'Saitama Prefecture',
            ),
            353 => 
            array (
                'country_id' => 109,
                'id' => 861,
                'name' => 'Fukuoka Prefecture',
            ),
            354 => 
            array (
                'country_id' => 109,
                'id' => 862,
                'name' => 'Gunma Prefecture',
            ),
            355 => 
            array (
                'country_id' => 109,
                'id' => 863,
                'name' => 'Saga Prefecture',
            ),
            356 => 
            array (
                'country_id' => 109,
                'id' => 864,
                'name' => 'Kagawa Prefecture',
            ),
            357 => 
            array (
                'country_id' => 109,
                'id' => 865,
                'name' => 'Ehime Prefecture',
            ),
            358 => 
            array (
                'country_id' => 39,
                'id' => 866,
                'name' => 'Ontario',
            ),
            359 => 
            array (
                'country_id' => 39,
                'id' => 867,
                'name' => 'Manitoba',
            ),
            360 => 
            array (
                'country_id' => 39,
                'id' => 868,
                'name' => 'New Brunswick',
            ),
            361 => 
            array (
                'country_id' => 39,
                'id' => 869,
                'name' => 'Yukon',
            ),
            362 => 
            array (
                'country_id' => 39,
                'id' => 870,
                'name' => 'Saskatchewan',
            ),
            363 => 
            array (
                'country_id' => 39,
                'id' => 871,
                'name' => 'Prince Edward Island',
            ),
            364 => 
            array (
                'country_id' => 39,
                'id' => 872,
                'name' => 'Alberta',
            ),
            365 => 
            array (
                'country_id' => 39,
                'id' => 873,
                'name' => 'Quebec',
            ),
            366 => 
            array (
                'country_id' => 39,
                'id' => 874,
                'name' => 'Nova Scotia',
            ),
            367 => 
            array (
                'country_id' => 39,
                'id' => 875,
                'name' => 'British Columbia',
            ),
            368 => 
            array (
                'country_id' => 39,
                'id' => 876,
                'name' => 'Nunavut',
            ),
            369 => 
            array (
                'country_id' => 39,
                'id' => 877,
                'name' => 'Newfoundland and Labrador',
            ),
            370 => 
            array (
                'country_id' => 39,
                'id' => 878,
                'name' => 'Northwest Territories',
            ),
            371 => 
            array (
                'country_id' => 209,
                'id' => 879,
                'name' => 'White Nile',
            ),
            372 => 
            array (
                'country_id' => 209,
                'id' => 880,
                'name' => 'Red Sea',
            ),
            373 => 
            array (
                'country_id' => 209,
                'id' => 881,
                'name' => 'Khartoum',
            ),
            374 => 
            array (
                'country_id' => 209,
                'id' => 882,
                'name' => 'Sennar',
            ),
            375 => 
            array (
                'country_id' => 209,
                'id' => 883,
                'name' => 'South Kordofan',
            ),
            376 => 
            array (
                'country_id' => 209,
                'id' => 884,
                'name' => 'Kassala',
            ),
            377 => 
            array (
                'country_id' => 209,
                'id' => 885,
                'name' => 'Al Jazirah',
            ),
            378 => 
            array (
                'country_id' => 209,
                'id' => 886,
                'name' => 'Al Qadarif',
            ),
            379 => 
            array (
                'country_id' => 209,
                'id' => 887,
                'name' => 'Blue Nile',
            ),
            380 => 
            array (
                'country_id' => 209,
                'id' => 888,
                'name' => 'West Darfur',
            ),
            381 => 
            array (
                'country_id' => 209,
                'id' => 889,
                'name' => 'West Kordofan',
            ),
            382 => 
            array (
                'country_id' => 209,
                'id' => 890,
                'name' => 'North Darfur',
            ),
            383 => 
            array (
                'country_id' => 209,
                'id' => 891,
                'name' => 'River Nile',
            ),
            384 => 
            array (
                'country_id' => 209,
                'id' => 892,
                'name' => 'East Darfur',
            ),
            385 => 
            array (
                'country_id' => 209,
                'id' => 893,
                'name' => 'North Kordofan',
            ),
            386 => 
            array (
                'country_id' => 209,
                'id' => 894,
                'name' => 'South Darfur',
            ),
            387 => 
            array (
                'country_id' => 209,
                'id' => 895,
                'name' => 'Northern',
            ),
            388 => 
            array (
                'country_id' => 209,
                'id' => 896,
                'name' => 'Central Darfur',
            ),
            389 => 
            array (
                'country_id' => 81,
                'id' => 897,
                'name' => 'Khelvachauri Municipality',
            ),
            390 => 
            array (
                'country_id' => 81,
                'id' => 898,
                'name' => 'Senaki Municipality',
            ),
            391 => 
            array (
                'country_id' => 81,
                'id' => 899,
                'name' => 'Tbilisi',
            ),
            392 => 
            array (
                'country_id' => 81,
                'id' => 900,
                'name' => 'Adjara',
            ),
            393 => 
            array (
                'country_id' => 81,
                'id' => 901,
                'name' => 'Abkhazia',
            ),
            394 => 
            array (
                'country_id' => 81,
                'id' => 902,
                'name' => 'Mtskheta-Mtianeti',
            ),
            395 => 
            array (
                'country_id' => 81,
                'id' => 903,
                'name' => 'Shida Kartli',
            ),
            396 => 
            array (
                'country_id' => 81,
                'id' => 904,
                'name' => 'Kvemo Kartli',
            ),
            397 => 
            array (
                'country_id' => 81,
                'id' => 905,
                'name' => 'Imereti',
            ),
            398 => 
            array (
                'country_id' => 81,
                'id' => 906,
                'name' => 'Samtskhe-Javakheti',
            ),
            399 => 
            array (
                'country_id' => 81,
                'id' => 907,
                'name' => 'Guria',
            ),
            400 => 
            array (
                'country_id' => 81,
                'id' => 908,
                'name' => 'Samegrelo-Zemo Svaneti',
            ),
            401 => 
            array (
                'country_id' => 81,
                'id' => 909,
                'name' => 'Racha-Lechkhumi and Kvemo Svaneti',
            ),
            402 => 
            array (
                'country_id' => 81,
                'id' => 910,
                'name' => 'Kakheti',
            ),
            403 => 
            array (
                'country_id' => 198,
                'id' => 911,
                'name' => 'Northern Province',
            ),
            404 => 
            array (
                'country_id' => 198,
                'id' => 912,
                'name' => 'Southern Province',
            ),
            405 => 
            array (
                'country_id' => 198,
                'id' => 913,
                'name' => 'Western Area',
            ),
            406 => 
            array (
                'country_id' => 198,
                'id' => 914,
                'name' => 'Eastern Province',
            ),
            407 => 
            array (
                'country_id' => 203,
                'id' => 915,
                'name' => 'Hiran',
            ),
            408 => 
            array (
                'country_id' => 203,
                'id' => 916,
                'name' => 'Mudug',
            ),
            409 => 
            array (
                'country_id' => 203,
                'id' => 917,
                'name' => 'Bakool',
            ),
            410 => 
            array (
                'country_id' => 203,
                'id' => 918,
                'name' => 'Galguduud',
            ),
            411 => 
            array (
                'country_id' => 203,
                'id' => 919,
                'name' => 'Sanaag Region',
            ),
            412 => 
            array (
                'country_id' => 203,
                'id' => 920,
                'name' => 'Nugal',
            ),
            413 => 
            array (
                'country_id' => 203,
                'id' => 921,
                'name' => 'Lower Shebelle',
            ),
            414 => 
            array (
                'country_id' => 203,
                'id' => 922,
                'name' => 'Middle Juba',
            ),
            415 => 
            array (
                'country_id' => 203,
                'id' => 923,
                'name' => 'Middle Shebelle',
            ),
            416 => 
            array (
                'country_id' => 203,
                'id' => 924,
                'name' => 'Lower Juba',
            ),
            417 => 
            array (
                'country_id' => 203,
                'id' => 925,
                'name' => 'Awdal Region',
            ),
            418 => 
            array (
                'country_id' => 203,
                'id' => 926,
                'name' => 'Bay',
            ),
            419 => 
            array (
                'country_id' => 203,
                'id' => 927,
                'name' => 'Banaadir',
            ),
            420 => 
            array (
                'country_id' => 203,
                'id' => 928,
                'name' => 'Gedo',
            ),
            421 => 
            array (
                'country_id' => 203,
                'id' => 929,
                'name' => 'Togdheer Region',
            ),
            422 => 
            array (
                'country_id' => 203,
                'id' => 930,
                'name' => 'Bari',
            ),
            423 => 
            array (
                'country_id' => 204,
                'id' => 931,
                'name' => 'Northern Cape',
            ),
            424 => 
            array (
                'country_id' => 204,
                'id' => 932,
                'name' => 'Free State',
            ),
            425 => 
            array (
                'country_id' => 204,
                'id' => 933,
                'name' => 'Limpopo',
            ),
            426 => 
            array (
                'country_id' => 204,
                'id' => 934,
                'name' => 'North West',
            ),
            427 => 
            array (
                'country_id' => 204,
                'id' => 935,
                'name' => 'KwaZulu-Natal',
            ),
            428 => 
            array (
                'country_id' => 204,
                'id' => 936,
                'name' => 'Gauteng',
            ),
            429 => 
            array (
                'country_id' => 204,
                'id' => 937,
                'name' => 'Mpumalanga',
            ),
            430 => 
            array (
                'country_id' => 204,
                'id' => 938,
                'name' => 'Eastern Cape',
            ),
            431 => 
            array (
                'country_id' => 204,
                'id' => 939,
                'name' => 'Western Cape',
            ),
            432 => 
            array (
                'country_id' => 159,
                'id' => 940,
                'name' => 'Chontales',
            ),
            433 => 
            array (
                'country_id' => 159,
                'id' => 941,
                'name' => 'Managua',
            ),
            434 => 
            array (
                'country_id' => 159,
                'id' => 942,
                'name' => 'Rivas',
            ),
            435 => 
            array (
                'country_id' => 159,
                'id' => 943,
                'name' => 'Granada',
            ),
            436 => 
            array (
                'country_id' => 159,
                'id' => 944,
                'name' => 'León',
            ),
            437 => 
            array (
                'country_id' => 159,
                'id' => 945,
                'name' => 'Estelí',
            ),
            438 => 
            array (
                'country_id' => 159,
                'id' => 946,
                'name' => 'Boaco',
            ),
            439 => 
            array (
                'country_id' => 159,
                'id' => 947,
                'name' => 'Matagalpa',
            ),
            440 => 
            array (
                'country_id' => 159,
                'id' => 948,
                'name' => 'Madriz',
            ),
            441 => 
            array (
                'country_id' => 159,
                'id' => 949,
                'name' => 'Río San Juan',
            ),
            442 => 
            array (
                'country_id' => 159,
                'id' => 950,
                'name' => 'Carazo',
            ),
            443 => 
            array (
                'country_id' => 159,
                'id' => 951,
                'name' => 'North Caribbean Coast',
            ),
            444 => 
            array (
                'country_id' => 159,
                'id' => 952,
                'name' => 'South Caribbean Coast',
            ),
            445 => 
            array (
                'country_id' => 159,
                'id' => 953,
                'name' => 'Masaya',
            ),
            446 => 
            array (
                'country_id' => 159,
                'id' => 954,
                'name' => 'Chinandega',
            ),
            447 => 
            array (
                'country_id' => 159,
                'id' => 955,
                'name' => 'Jinotega',
            ),
            448 => 
            array (
                'country_id' => 111,
                'id' => 956,
                'name' => 'Karak',
            ),
            449 => 
            array (
                'country_id' => 111,
                'id' => 957,
                'name' => 'Tafilah',
            ),
            450 => 
            array (
                'country_id' => 111,
                'id' => 958,
                'name' => 'Madaba',
            ),
            451 => 
            array (
                'country_id' => 111,
                'id' => 959,
                'name' => 'Aqaba',
            ),
            452 => 
            array (
                'country_id' => 111,
                'id' => 960,
                'name' => 'Irbid',
            ),
            453 => 
            array (
                'country_id' => 111,
                'id' => 961,
                'name' => 'Balqa',
            ),
            454 => 
            array (
                'country_id' => 111,
                'id' => 962,
                'name' => 'Mafraq',
            ),
            455 => 
            array (
                'country_id' => 111,
                'id' => 963,
                'name' => 'Ajloun',
            ),
            456 => 
            array (
                'country_id' => 111,
                'id' => 964,
                'name' => 'Ma\'an',
            ),
            457 => 
            array (
                'country_id' => 111,
                'id' => 965,
                'name' => 'Amman',
            ),
            458 => 
            array (
                'country_id' => 111,
                'id' => 966,
                'name' => 'Jerash',
            ),
            459 => 
            array (
                'country_id' => 111,
                'id' => 967,
                'name' => 'Zarqa',
            ),
            460 => 
            array (
                'country_id' => 212,
                'id' => 968,
                'name' => 'Manzini District',
            ),
            461 => 
            array (
                'country_id' => 212,
                'id' => 969,
                'name' => 'Hhohho District',
            ),
            462 => 
            array (
                'country_id' => 212,
                'id' => 970,
                'name' => 'Lubombo District',
            ),
            463 => 
            array (
                'country_id' => 212,
                'id' => 971,
                'name' => 'Shiselweni District',
            ),
            464 => 
            array (
                'country_id' => 117,
                'id' => 972,
                'name' => 'Al Jahra',
            ),
            465 => 
            array (
                'country_id' => 117,
                'id' => 973,
                'name' => 'Hawalli',
            ),
            466 => 
            array (
                'country_id' => 117,
                'id' => 974,
                'name' => 'Mubarak Al-Kabeer',
            ),
            467 => 
            array (
                'country_id' => 117,
                'id' => 975,
                'name' => 'Al Farwaniyah',
            ),
            468 => 
            array (
                'country_id' => 117,
                'id' => 976,
                'name' => 'Capital',
            ),
            469 => 
            array (
                'country_id' => 117,
                'id' => 977,
                'name' => 'Al Ahmadi',
            ),
            470 => 
            array (
                'country_id' => 119,
                'id' => 978,
                'name' => 'Luang Prabang Province',
            ),
            471 => 
            array (
                'country_id' => 119,
                'id' => 979,
                'name' => 'Vientiane Prefecture',
            ),
            472 => 
            array (
                'country_id' => 119,
                'id' => 980,
                'name' => 'Vientiane Province',
            ),
            473 => 
            array (
                'country_id' => 119,
                'id' => 981,
                'name' => 'Salavan Province',
            ),
            474 => 
            array (
                'country_id' => 119,
                'id' => 982,
                'name' => 'Attapeu Province',
            ),
            475 => 
            array (
                'country_id' => 119,
                'id' => 983,
                'name' => 'Xaisomboun Province',
            ),
            476 => 
            array (
                'country_id' => 119,
                'id' => 984,
                'name' => 'Sekong Province',
            ),
            477 => 
            array (
                'country_id' => 119,
                'id' => 985,
                'name' => 'Bolikhamsai Province',
            ),
            478 => 
            array (
                'country_id' => 119,
                'id' => 986,
                'name' => 'Khammouane Province',
            ),
            479 => 
            array (
                'country_id' => 119,
                'id' => 987,
                'name' => 'Phongsaly Province',
            ),
            480 => 
            array (
                'country_id' => 119,
                'id' => 988,
                'name' => 'Oudomxay Province',
            ),
            481 => 
            array (
                'country_id' => 119,
                'id' => 989,
                'name' => 'Houaphanh Province',
            ),
            482 => 
            array (
                'country_id' => 119,
                'id' => 990,
                'name' => 'Savannakhet Province',
            ),
            483 => 
            array (
                'country_id' => 119,
                'id' => 991,
                'name' => 'Bokeo Province',
            ),
            484 => 
            array (
                'country_id' => 119,
                'id' => 992,
                'name' => 'Luang Namtha Province',
            ),
            485 => 
            array (
                'country_id' => 119,
                'id' => 993,
                'name' => 'Sainyabuli Province',
            ),
            486 => 
            array (
                'country_id' => 119,
                'id' => 994,
                'name' => 'Xaisomboun',
            ),
            487 => 
            array (
                'country_id' => 119,
                'id' => 995,
                'name' => 'Xiangkhouang Province',
            ),
            488 => 
            array (
                'country_id' => 119,
                'id' => 996,
                'name' => 'Champasak Province',
            ),
            489 => 
            array (
                'country_id' => 118,
                'id' => 997,
                'name' => 'Talas Region',
            ),
            490 => 
            array (
                'country_id' => 118,
                'id' => 998,
                'name' => 'Batken Region',
            ),
            491 => 
            array (
                'country_id' => 118,
                'id' => 999,
                'name' => 'Naryn Region',
            ),
            492 => 
            array (
                'country_id' => 118,
                'id' => 1000,
                'name' => 'Jalal-Abad Region',
            ),
            493 => 
            array (
                'country_id' => 118,
                'id' => 1001,
                'name' => 'Bishkek',
            ),
            494 => 
            array (
                'country_id' => 118,
                'id' => 1002,
                'name' => 'Issyk-Kul Region',
            ),
            495 => 
            array (
                'country_id' => 118,
                'id' => 1003,
                'name' => 'Osh',
            ),
            496 => 
            array (
                'country_id' => 118,
                'id' => 1004,
                'name' => 'Chuy Region',
            ),
            497 => 
            array (
                'country_id' => 118,
                'id' => 1005,
                'name' => 'Osh Region',
            ),
            498 => 
            array (
                'country_id' => 165,
                'id' => 1006,
                'name' => 'Trøndelag',
            ),
            499 => 
            array (
                'country_id' => 165,
                'id' => 1007,
                'name' => 'Oslo',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 165,
                'id' => 1009,
                'name' => 'Innlandet',
            ),
            1 => 
            array (
                'country_id' => 165,
                'id' => 1011,
                'name' => 'Viken',
            ),
            2 => 
            array (
                'country_id' => 165,
                'id' => 1013,
                'name' => 'Svalbard',
            ),
            3 => 
            array (
                'country_id' => 165,
                'id' => 1014,
                'name' => 'Agder',
            ),
            4 => 
            array (
                'country_id' => 165,
                'id' => 1015,
                'name' => 'Troms og Finnmark',
            ),
            5 => 
            array (
                'country_id' => 165,
                'id' => 1018,
                'name' => 'Vestland',
            ),
            6 => 
            array (
                'country_id' => 165,
                'id' => 1020,
                'name' => 'Møre og Romsdal',
            ),
            7 => 
            array (
                'country_id' => 165,
                'id' => 1021,
                'name' => 'Rogaland',
            ),
            8 => 
            array (
                'country_id' => 165,
                'id' => 1024,
                'name' => 'Vestfold og Telemark',
            ),
            9 => 
            array (
                'country_id' => 165,
                'id' => 1025,
                'name' => 'Nordland',
            ),
            10 => 
            array (
                'country_id' => 165,
                'id' => 1026,
                'name' => 'Jan Mayen',
            ),
            11 => 
            array (
                'country_id' => 99,
                'id' => 1027,
                'name' => 'Hódmezővásárhely',
            ),
            12 => 
            array (
                'country_id' => 99,
                'id' => 1028,
                'name' => 'Érd',
            ),
            13 => 
            array (
                'country_id' => 99,
                'id' => 1029,
                'name' => 'Szeged',
            ),
            14 => 
            array (
                'country_id' => 99,
                'id' => 1030,
                'name' => 'Nagykanizsa',
            ),
            15 => 
            array (
                'country_id' => 99,
                'id' => 1031,
                'name' => 'Csongrád County',
            ),
            16 => 
            array (
                'country_id' => 99,
                'id' => 1032,
                'name' => 'Debrecen',
            ),
            17 => 
            array (
                'country_id' => 99,
                'id' => 1033,
                'name' => 'Székesfehérvár',
            ),
            18 => 
            array (
                'country_id' => 99,
                'id' => 1034,
                'name' => 'Nyíregyháza',
            ),
            19 => 
            array (
                'country_id' => 99,
                'id' => 1035,
                'name' => 'Somogy County',
            ),
            20 => 
            array (
                'country_id' => 99,
                'id' => 1036,
                'name' => 'Békéscsaba',
            ),
            21 => 
            array (
                'country_id' => 99,
                'id' => 1037,
                'name' => 'Eger',
            ),
            22 => 
            array (
                'country_id' => 99,
                'id' => 1038,
                'name' => 'Tolna County',
            ),
            23 => 
            array (
                'country_id' => 99,
                'id' => 1039,
                'name' => 'Vas County',
            ),
            24 => 
            array (
                'country_id' => 99,
                'id' => 1040,
                'name' => 'Heves County',
            ),
            25 => 
            array (
                'country_id' => 99,
                'id' => 1041,
                'name' => 'Győr',
            ),
            26 => 
            array (
                'country_id' => 99,
                'id' => 1042,
                'name' => 'Győr-Moson-Sopron County',
            ),
            27 => 
            array (
                'country_id' => 99,
                'id' => 1043,
                'name' => 'Jász-Nagykun-Szolnok County',
            ),
            28 => 
            array (
                'country_id' => 99,
                'id' => 1044,
                'name' => 'Fejér County',
            ),
            29 => 
            array (
                'country_id' => 99,
                'id' => 1045,
                'name' => 'Szabolcs-Szatmár-Bereg County',
            ),
            30 => 
            array (
                'country_id' => 99,
                'id' => 1046,
                'name' => 'Zala County',
            ),
            31 => 
            array (
                'country_id' => 99,
                'id' => 1047,
                'name' => 'Szolnok',
            ),
            32 => 
            array (
                'country_id' => 99,
                'id' => 1048,
                'name' => 'Bács-Kiskun',
            ),
            33 => 
            array (
                'country_id' => 99,
                'id' => 1049,
                'name' => 'Dunaújváros',
            ),
            34 => 
            array (
                'country_id' => 99,
                'id' => 1050,
                'name' => 'Zalaegerszeg',
            ),
            35 => 
            array (
                'country_id' => 99,
                'id' => 1051,
                'name' => 'Nógrád County',
            ),
            36 => 
            array (
                'country_id' => 99,
                'id' => 1052,
                'name' => 'Szombathely',
            ),
            37 => 
            array (
                'country_id' => 99,
                'id' => 1053,
                'name' => 'Pécs',
            ),
            38 => 
            array (
                'country_id' => 99,
                'id' => 1054,
                'name' => 'Veszprém County',
            ),
            39 => 
            array (
                'country_id' => 99,
                'id' => 1055,
                'name' => 'Baranya',
            ),
            40 => 
            array (
                'country_id' => 99,
                'id' => 1056,
                'name' => 'Kecskemét',
            ),
            41 => 
            array (
                'country_id' => 99,
                'id' => 1057,
                'name' => 'Sopron',
            ),
            42 => 
            array (
                'country_id' => 99,
                'id' => 1058,
                'name' => 'Borsod-Abaúj-Zemplén',
            ),
            43 => 
            array (
                'country_id' => 99,
                'id' => 1059,
                'name' => 'Pest County',
            ),
            44 => 
            array (
                'country_id' => 99,
                'id' => 1060,
                'name' => 'Békés',
            ),
            45 => 
            array (
                'country_id' => 99,
                'id' => 1061,
                'name' => 'Szekszárd',
            ),
            46 => 
            array (
                'country_id' => 99,
                'id' => 1062,
                'name' => 'Veszprém',
            ),
            47 => 
            array (
                'country_id' => 99,
                'id' => 1063,
                'name' => 'Hajdú-Bihar County',
            ),
            48 => 
            array (
                'country_id' => 99,
                'id' => 1064,
                'name' => 'Budapest',
            ),
            49 => 
            array (
                'country_id' => 99,
                'id' => 1065,
                'name' => 'Miskolc',
            ),
            50 => 
            array (
                'country_id' => 99,
                'id' => 1066,
                'name' => 'Tatabánya',
            ),
            51 => 
            array (
                'country_id' => 99,
                'id' => 1067,
                'name' => 'Kaposvár',
            ),
            52 => 
            array (
                'country_id' => 99,
                'id' => 1068,
                'name' => 'Salgótarján',
            ),
            53 => 
            array (
                'country_id' => 105,
                'id' => 1069,
                'name' => 'Tipperary',
            ),
            54 => 
            array (
                'country_id' => 105,
                'id' => 1070,
                'name' => 'Sligo',
            ),
            55 => 
            array (
                'country_id' => 105,
                'id' => 1071,
                'name' => 'Donegal',
            ),
            56 => 
            array (
                'country_id' => 105,
                'id' => 1072,
                'name' => 'Dublin',
            ),
            57 => 
            array (
                'country_id' => 105,
                'id' => 1073,
                'name' => 'Leinster',
            ),
            58 => 
            array (
                'country_id' => 105,
                'id' => 1074,
                'name' => 'Cork',
            ),
            59 => 
            array (
                'country_id' => 105,
                'id' => 1075,
                'name' => 'Monaghan',
            ),
            60 => 
            array (
                'country_id' => 105,
                'id' => 1076,
                'name' => 'Longford',
            ),
            61 => 
            array (
                'country_id' => 105,
                'id' => 1077,
                'name' => 'Kerry',
            ),
            62 => 
            array (
                'country_id' => 105,
                'id' => 1078,
                'name' => 'Offaly',
            ),
            63 => 
            array (
                'country_id' => 105,
                'id' => 1079,
                'name' => 'Galway',
            ),
            64 => 
            array (
                'country_id' => 105,
                'id' => 1080,
                'name' => 'Munster',
            ),
            65 => 
            array (
                'country_id' => 105,
                'id' => 1081,
                'name' => 'Roscommon',
            ),
            66 => 
            array (
                'country_id' => 105,
                'id' => 1082,
                'name' => 'Kildare',
            ),
            67 => 
            array (
                'country_id' => 105,
                'id' => 1083,
                'name' => 'Louth',
            ),
            68 => 
            array (
                'country_id' => 105,
                'id' => 1084,
                'name' => 'Mayo',
            ),
            69 => 
            array (
                'country_id' => 105,
                'id' => 1085,
                'name' => 'Wicklow',
            ),
            70 => 
            array (
                'country_id' => 105,
                'id' => 1086,
                'name' => 'Ulster',
            ),
            71 => 
            array (
                'country_id' => 105,
                'id' => 1087,
                'name' => 'Connacht',
            ),
            72 => 
            array (
                'country_id' => 105,
                'id' => 1088,
                'name' => 'Cavan',
            ),
            73 => 
            array (
                'country_id' => 105,
                'id' => 1089,
                'name' => 'Waterford',
            ),
            74 => 
            array (
                'country_id' => 105,
                'id' => 1090,
                'name' => 'Kilkenny',
            ),
            75 => 
            array (
                'country_id' => 105,
                'id' => 1091,
                'name' => 'Clare',
            ),
            76 => 
            array (
                'country_id' => 105,
                'id' => 1092,
                'name' => 'Meath',
            ),
            77 => 
            array (
                'country_id' => 105,
                'id' => 1093,
                'name' => 'Wexford',
            ),
            78 => 
            array (
                'country_id' => 105,
                'id' => 1094,
                'name' => 'Limerick',
            ),
            79 => 
            array (
                'country_id' => 105,
                'id' => 1095,
                'name' => 'Carlow',
            ),
            80 => 
            array (
                'country_id' => 105,
                'id' => 1096,
                'name' => 'Laois',
            ),
            81 => 
            array (
                'country_id' => 105,
                'id' => 1097,
                'name' => 'Westmeath',
            ),
            82 => 
            array (
                'country_id' => 4,
                'id' => 1098,
                'name' => 'Djelfa',
            ),
            83 => 
            array (
                'country_id' => 4,
                'id' => 1099,
                'name' => 'El Oued',
            ),
            84 => 
            array (
                'country_id' => 4,
                'id' => 1100,
                'name' => 'El Tarf',
            ),
            85 => 
            array (
                'country_id' => 4,
                'id' => 1101,
                'name' => 'Oran',
            ),
            86 => 
            array (
                'country_id' => 4,
                'id' => 1102,
                'name' => 'Naama',
            ),
            87 => 
            array (
                'country_id' => 4,
                'id' => 1103,
                'name' => 'Annaba',
            ),
            88 => 
            array (
                'country_id' => 4,
                'id' => 1104,
                'name' => 'Bouïra',
            ),
            89 => 
            array (
                'country_id' => 4,
                'id' => 1105,
                'name' => 'Chlef',
            ),
            90 => 
            array (
                'country_id' => 4,
                'id' => 1106,
                'name' => 'Tiaret',
            ),
            91 => 
            array (
                'country_id' => 4,
                'id' => 1107,
                'name' => 'Tlemcen',
            ),
            92 => 
            array (
                'country_id' => 4,
                'id' => 1108,
                'name' => 'Béchar',
            ),
            93 => 
            array (
                'country_id' => 4,
                'id' => 1109,
                'name' => 'Médéa',
            ),
            94 => 
            array (
                'country_id' => 4,
                'id' => 1110,
                'name' => 'Skikda',
            ),
            95 => 
            array (
                'country_id' => 4,
                'id' => 1111,
                'name' => 'Blida',
            ),
            96 => 
            array (
                'country_id' => 4,
                'id' => 1112,
                'name' => 'Illizi',
            ),
            97 => 
            array (
                'country_id' => 4,
                'id' => 1113,
                'name' => 'Jijel',
            ),
            98 => 
            array (
                'country_id' => 4,
                'id' => 1114,
                'name' => 'Biskra',
            ),
            99 => 
            array (
                'country_id' => 4,
                'id' => 1115,
                'name' => 'Tipasa',
            ),
            100 => 
            array (
                'country_id' => 4,
                'id' => 1116,
                'name' => 'Bordj Bou Arréridj',
            ),
            101 => 
            array (
                'country_id' => 4,
                'id' => 1117,
                'name' => 'Tébessa',
            ),
            102 => 
            array (
                'country_id' => 4,
                'id' => 1118,
                'name' => 'Adrar',
            ),
            103 => 
            array (
                'country_id' => 4,
                'id' => 1119,
                'name' => 'Aïn Defla',
            ),
            104 => 
            array (
                'country_id' => 4,
                'id' => 1120,
                'name' => 'Tindouf',
            ),
            105 => 
            array (
                'country_id' => 4,
                'id' => 1121,
                'name' => 'Constantine',
            ),
            106 => 
            array (
                'country_id' => 4,
                'id' => 1122,
                'name' => 'Aïn Témouchent',
            ),
            107 => 
            array (
                'country_id' => 4,
                'id' => 1123,
                'name' => 'Saïda',
            ),
            108 => 
            array (
                'country_id' => 4,
                'id' => 1124,
                'name' => 'Mascara',
            ),
            109 => 
            array (
                'country_id' => 4,
                'id' => 1125,
                'name' => 'Boumerdès',
            ),
            110 => 
            array (
                'country_id' => 4,
                'id' => 1126,
                'name' => 'Khenchela',
            ),
            111 => 
            array (
                'country_id' => 4,
                'id' => 1127,
                'name' => 'Ghardaïa',
            ),
            112 => 
            array (
                'country_id' => 4,
                'id' => 1128,
                'name' => 'Béjaïa',
            ),
            113 => 
            array (
                'country_id' => 4,
                'id' => 1129,
                'name' => 'El Bayadh',
            ),
            114 => 
            array (
                'country_id' => 4,
                'id' => 1130,
                'name' => 'Relizane',
            ),
            115 => 
            array (
                'country_id' => 4,
                'id' => 1131,
                'name' => 'Tizi Ouzou',
            ),
            116 => 
            array (
                'country_id' => 4,
                'id' => 1132,
                'name' => 'Mila',
            ),
            117 => 
            array (
                'country_id' => 4,
                'id' => 1133,
                'name' => 'Tissemsilt',
            ),
            118 => 
            array (
                'country_id' => 4,
                'id' => 1134,
                'name' => 'M\'Sila',
            ),
            119 => 
            array (
                'country_id' => 4,
                'id' => 1135,
                'name' => 'Tamanghasset',
            ),
            120 => 
            array (
                'country_id' => 4,
                'id' => 1136,
                'name' => 'Oum El Bouaghi',
            ),
            121 => 
            array (
                'country_id' => 4,
                'id' => 1137,
                'name' => 'Guelma',
            ),
            122 => 
            array (
                'country_id' => 4,
                'id' => 1138,
                'name' => 'Laghouat',
            ),
            123 => 
            array (
                'country_id' => 4,
                'id' => 1139,
                'name' => 'Ouargla',
            ),
            124 => 
            array (
                'country_id' => 4,
                'id' => 1140,
                'name' => 'Mostaganem',
            ),
            125 => 
            array (
                'country_id' => 4,
                'id' => 1141,
                'name' => 'Sétif',
            ),
            126 => 
            array (
                'country_id' => 4,
                'id' => 1142,
                'name' => 'Batna',
            ),
            127 => 
            array (
                'country_id' => 4,
                'id' => 1143,
                'name' => 'Souk Ahras',
            ),
            128 => 
            array (
                'country_id' => 4,
                'id' => 1144,
                'name' => 'Algiers',
            ),
            129 => 
            array (
                'country_id' => 207,
                'id' => 1146,
                'name' => 'Burgos',
            ),
            130 => 
            array (
                'country_id' => 207,
                'id' => 1147,
                'name' => 'Salamanca',
            ),
            131 => 
            array (
                'country_id' => 207,
                'id' => 1157,
                'name' => 'Palencia',
            ),
            132 => 
            array (
                'country_id' => 207,
                'id' => 1158,
                'name' => 'Madrid',
            ),
            133 => 
            array (
                'country_id' => 207,
                'id' => 1160,
                'name' => 'Asturias',
            ),
            134 => 
            array (
                'country_id' => 207,
                'id' => 1161,
                'name' => 'Zamora',
            ),
            135 => 
            array (
                'country_id' => 207,
                'id' => 1167,
                'name' => 'Pontevedra',
            ),
            136 => 
            array (
                'country_id' => 207,
                'id' => 1170,
                'name' => 'Cantabria',
            ),
            137 => 
            array (
                'country_id' => 207,
                'id' => 1171,
                'name' => 'La Rioja',
            ),
            138 => 
            array (
                'country_id' => 207,
                'id' => 1174,
                'name' => 'Islas Baleares',
            ),
            139 => 
            array (
                'country_id' => 207,
                'id' => 1175,
                'name' => 'Valencia',
            ),
            140 => 
            array (
                'country_id' => 207,
                'id' => 1176,
                'name' => 'Murcia',
            ),
            141 => 
            array (
                'country_id' => 207,
                'id' => 1177,
                'name' => 'Huesca',
            ),
            142 => 
            array (
                'country_id' => 207,
                'id' => 1183,
                'name' => 'Valladolid',
            ),
            143 => 
            array (
                'country_id' => 207,
                'id' => 1185,
                'name' => 'Las Palmas',
            ),
            144 => 
            array (
                'country_id' => 207,
                'id' => 1189,
                'name' => 'Ávila',
            ),
            145 => 
            array (
                'country_id' => 207,
                'id' => 1190,
                'name' => 'Caceres',
            ),
            146 => 
            array (
                'country_id' => 207,
                'id' => 1191,
                'name' => 'Gipuzkoa',
            ),
            147 => 
            array (
                'country_id' => 207,
                'id' => 1192,
                'name' => 'Segovia',
            ),
            148 => 
            array (
                'country_id' => 207,
                'id' => 1193,
                'name' => 'Sevilla',
            ),
            149 => 
            array (
                'country_id' => 207,
                'id' => 1200,
                'name' => 'León',
            ),
            150 => 
            array (
                'country_id' => 207,
                'id' => 1203,
                'name' => 'Tarragona',
            ),
            151 => 
            array (
                'country_id' => 207,
                'id' => 1204,
                'name' => 'Navarra',
            ),
            152 => 
            array (
                'country_id' => 207,
                'id' => 1205,
                'name' => 'Toledo',
            ),
            153 => 
            array (
                'country_id' => 207,
                'id' => 1208,
                'name' => 'Soria',
            ),
            154 => 
            array (
                'country_id' => 53,
                'id' => 1209,
                'name' => 'Guanacaste Province',
            ),
            155 => 
            array (
                'country_id' => 53,
                'id' => 1210,
                'name' => 'Puntarenas Province',
            ),
            156 => 
            array (
                'country_id' => 53,
                'id' => 1211,
                'name' => 'Provincia de Cartago',
            ),
            157 => 
            array (
                'country_id' => 53,
                'id' => 1212,
                'name' => 'Heredia Province',
            ),
            158 => 
            array (
                'country_id' => 53,
                'id' => 1213,
                'name' => 'Limón Province',
            ),
            159 => 
            array (
                'country_id' => 53,
                'id' => 1214,
                'name' => 'San José Province',
            ),
            160 => 
            array (
                'country_id' => 53,
                'id' => 1215,
                'name' => 'Alajuela Province',
            ),
            161 => 
            array (
                'country_id' => 33,
                'id' => 1216,
                'name' => 'Brunei-Muara District',
            ),
            162 => 
            array (
                'country_id' => 33,
                'id' => 1217,
                'name' => 'Belait District',
            ),
            163 => 
            array (
                'country_id' => 33,
                'id' => 1218,
                'name' => 'Temburong District',
            ),
            164 => 
            array (
                'country_id' => 33,
                'id' => 1219,
                'name' => 'Tutong District',
            ),
            165 => 
            array (
                'country_id' => 20,
                'id' => 1220,
                'name' => 'Saint Philip',
            ),
            166 => 
            array (
                'country_id' => 20,
                'id' => 1221,
                'name' => 'Saint Lucy',
            ),
            167 => 
            array (
                'country_id' => 20,
                'id' => 1222,
                'name' => 'Saint Peter',
            ),
            168 => 
            array (
                'country_id' => 20,
                'id' => 1223,
                'name' => 'Saint Joseph',
            ),
            169 => 
            array (
                'country_id' => 20,
                'id' => 1224,
                'name' => 'Saint James',
            ),
            170 => 
            array (
                'country_id' => 20,
                'id' => 1225,
                'name' => 'Saint Thomas',
            ),
            171 => 
            array (
                'country_id' => 20,
                'id' => 1226,
                'name' => 'Saint George',
            ),
            172 => 
            array (
                'country_id' => 20,
                'id' => 1227,
                'name' => 'Saint John',
            ),
            173 => 
            array (
                'country_id' => 20,
                'id' => 1228,
                'name' => 'Christ Church',
            ),
            174 => 
            array (
                'country_id' => 20,
                'id' => 1229,
                'name' => 'Saint Andrew',
            ),
            175 => 
            array (
                'country_id' => 20,
                'id' => 1230,
                'name' => 'Saint Michael',
            ),
            176 => 
            array (
                'country_id' => 245,
                'id' => 1231,
                'name' => 'Ta\'izz',
            ),
            177 => 
            array (
                'country_id' => 245,
                'id' => 1232,
                'name' => 'Amanat Al Asimah',
            ),
            178 => 
            array (
                'country_id' => 245,
                'id' => 1233,
                'name' => 'Ibb',
            ),
            179 => 
            array (
                'country_id' => 245,
                'id' => 1234,
                'name' => 'Ma\'rib',
            ),
            180 => 
            array (
                'country_id' => 245,
                'id' => 1235,
                'name' => 'Al Mahwit',
            ),
            181 => 
            array (
                'country_id' => 245,
                'id' => 1236,
                'name' => 'Sana\'a',
            ),
            182 => 
            array (
                'country_id' => 245,
                'id' => 1237,
                'name' => 'Abyan',
            ),
            183 => 
            array (
                'country_id' => 245,
                'id' => 1238,
                'name' => 'Hadhramaut',
            ),
            184 => 
            array (
                'country_id' => 245,
                'id' => 1239,
                'name' => 'Socotra',
            ),
            185 => 
            array (
                'country_id' => 245,
                'id' => 1240,
                'name' => 'Al Bayda\'',
            ),
            186 => 
            array (
                'country_id' => 245,
                'id' => 1241,
                'name' => 'Al Hudaydah',
            ),
            187 => 
            array (
                'country_id' => 245,
                'id' => 1242,
                'name' => '\'Adan',
            ),
            188 => 
            array (
                'country_id' => 245,
                'id' => 1243,
                'name' => 'Al Jawf',
            ),
            189 => 
            array (
                'country_id' => 245,
                'id' => 1244,
                'name' => 'Hajjah',
            ),
            190 => 
            array (
                'country_id' => 245,
                'id' => 1245,
                'name' => 'Lahij',
            ),
            191 => 
            array (
                'country_id' => 245,
                'id' => 1246,
                'name' => 'Dhamar',
            ),
            192 => 
            array (
                'country_id' => 245,
                'id' => 1247,
                'name' => 'Shabwah',
            ),
            193 => 
            array (
                'country_id' => 245,
                'id' => 1248,
                'name' => 'Raymah',
            ),
            194 => 
            array (
                'country_id' => 245,
                'id' => 1249,
                'name' => 'Saada',
            ),
            195 => 
            array (
                'country_id' => 245,
                'id' => 1250,
                'name' => '\'Amran',
            ),
            196 => 
            array (
                'country_id' => 245,
                'id' => 1251,
                'name' => 'Al Mahrah',
            ),
            197 => 
            array (
                'country_id' => 42,
                'id' => 1252,
                'name' => 'Sangha-Mbaéré',
            ),
            198 => 
            array (
                'country_id' => 42,
                'id' => 1253,
                'name' => 'Nana-Grébizi Economic Prefecture',
            ),
            199 => 
            array (
                'country_id' => 42,
                'id' => 1254,
                'name' => 'Ouham Prefecture',
            ),
            200 => 
            array (
                'country_id' => 42,
                'id' => 1255,
                'name' => 'Ombella-M\'Poko Prefecture',
            ),
            201 => 
            array (
                'country_id' => 42,
                'id' => 1256,
                'name' => 'Lobaye Prefecture',
            ),
            202 => 
            array (
                'country_id' => 42,
                'id' => 1257,
                'name' => 'Mambéré-Kadéï',
            ),
            203 => 
            array (
                'country_id' => 42,
                'id' => 1258,
                'name' => 'Haut-Mbomou Prefecture',
            ),
            204 => 
            array (
                'country_id' => 42,
                'id' => 1259,
                'name' => 'Bamingui-Bangoran Prefecture',
            ),
            205 => 
            array (
                'country_id' => 42,
                'id' => 1260,
                'name' => 'Nana-Mambéré Prefecture',
            ),
            206 => 
            array (
                'country_id' => 42,
                'id' => 1261,
                'name' => 'Vakaga Prefecture',
            ),
            207 => 
            array (
                'country_id' => 42,
                'id' => 1262,
                'name' => 'Bangui',
            ),
            208 => 
            array (
                'country_id' => 42,
                'id' => 1263,
                'name' => 'Kémo Prefecture',
            ),
            209 => 
            array (
                'country_id' => 42,
                'id' => 1264,
                'name' => 'Basse-Kotto Prefecture',
            ),
            210 => 
            array (
                'country_id' => 42,
                'id' => 1265,
                'name' => 'Ouaka Prefecture',
            ),
            211 => 
            array (
                'country_id' => 42,
                'id' => 1266,
                'name' => 'Mbomou Prefecture',
            ),
            212 => 
            array (
                'country_id' => 42,
                'id' => 1267,
                'name' => 'Ouham-Pendé Prefecture',
            ),
            213 => 
            array (
                'country_id' => 42,
                'id' => 1268,
                'name' => 'Haute-Kotto Prefecture',
            ),
            214 => 
            array (
                'country_id' => 174,
                'id' => 1269,
                'name' => 'Romblon',
            ),
            215 => 
            array (
                'country_id' => 174,
                'id' => 1270,
                'name' => 'Bukidnon',
            ),
            216 => 
            array (
                'country_id' => 174,
                'id' => 1271,
                'name' => 'Rizal',
            ),
            217 => 
            array (
                'country_id' => 174,
                'id' => 1272,
                'name' => 'Bohol',
            ),
            218 => 
            array (
                'country_id' => 174,
                'id' => 1273,
                'name' => 'Quirino',
            ),
            219 => 
            array (
                'country_id' => 174,
                'id' => 1274,
                'name' => 'Biliran',
            ),
            220 => 
            array (
                'country_id' => 174,
                'id' => 1275,
                'name' => 'Quezon',
            ),
            221 => 
            array (
                'country_id' => 174,
                'id' => 1276,
                'name' => 'Siquijor',
            ),
            222 => 
            array (
                'country_id' => 174,
                'id' => 1277,
                'name' => 'Sarangani',
            ),
            223 => 
            array (
                'country_id' => 174,
                'id' => 1278,
                'name' => 'Bulacan',
            ),
            224 => 
            array (
                'country_id' => 174,
                'id' => 1279,
                'name' => 'Cagayan',
            ),
            225 => 
            array (
                'country_id' => 174,
                'id' => 1280,
                'name' => 'South Cotabato',
            ),
            226 => 
            array (
                'country_id' => 174,
                'id' => 1281,
                'name' => 'Sorsogon',
            ),
            227 => 
            array (
                'country_id' => 174,
                'id' => 1282,
                'name' => 'Sultan Kudarat',
            ),
            228 => 
            array (
                'country_id' => 174,
                'id' => 1283,
                'name' => 'Camarines Norte',
            ),
            229 => 
            array (
                'country_id' => 174,
                'id' => 1284,
                'name' => 'Southern Leyte',
            ),
            230 => 
            array (
                'country_id' => 174,
                'id' => 1285,
                'name' => 'Camiguin',
            ),
            231 => 
            array (
                'country_id' => 174,
                'id' => 1286,
                'name' => 'Surigao del Norte',
            ),
            232 => 
            array (
                'country_id' => 174,
                'id' => 1287,
                'name' => 'Camarines Sur',
            ),
            233 => 
            array (
                'country_id' => 174,
                'id' => 1288,
                'name' => 'Sulu',
            ),
            234 => 
            array (
                'country_id' => 174,
                'id' => 1289,
                'name' => 'Davao Oriental',
            ),
            235 => 
            array (
                'country_id' => 174,
                'id' => 1290,
                'name' => 'Eastern Samar',
            ),
            236 => 
            array (
                'country_id' => 174,
                'id' => 1291,
                'name' => 'Dinagat Islands',
            ),
            237 => 
            array (
                'country_id' => 174,
                'id' => 1292,
                'name' => 'Capiz',
            ),
            238 => 
            array (
                'country_id' => 174,
                'id' => 1293,
                'name' => 'Tawi-Tawi',
            ),
            239 => 
            array (
                'country_id' => 174,
                'id' => 1294,
                'name' => 'Calabarzon',
            ),
            240 => 
            array (
                'country_id' => 174,
                'id' => 1295,
                'name' => 'Tarlac',
            ),
            241 => 
            array (
                'country_id' => 174,
                'id' => 1296,
                'name' => 'Surigao del Sur',
            ),
            242 => 
            array (
                'country_id' => 174,
                'id' => 1297,
                'name' => 'Zambales',
            ),
            243 => 
            array (
                'country_id' => 174,
                'id' => 1298,
                'name' => 'Ilocos Norte',
            ),
            244 => 
            array (
                'country_id' => 174,
                'id' => 1299,
                'name' => 'Mimaropa',
            ),
            245 => 
            array (
                'country_id' => 174,
                'id' => 1300,
                'name' => 'Ifugao',
            ),
            246 => 
            array (
                'country_id' => 174,
                'id' => 1301,
                'name' => 'Catanduanes',
            ),
            247 => 
            array (
                'country_id' => 174,
                'id' => 1302,
                'name' => 'Zamboanga del Norte',
            ),
            248 => 
            array (
                'country_id' => 174,
                'id' => 1303,
                'name' => 'Guimaras',
            ),
            249 => 
            array (
                'country_id' => 174,
                'id' => 1304,
                'name' => 'Bicol',
            ),
            250 => 
            array (
                'country_id' => 174,
                'id' => 1305,
                'name' => 'Western Visayas',
            ),
            251 => 
            array (
                'country_id' => 174,
                'id' => 1306,
                'name' => 'Cebu',
            ),
            252 => 
            array (
                'country_id' => 174,
                'id' => 1307,
                'name' => 'Cavite',
            ),
            253 => 
            array (
                'country_id' => 174,
                'id' => 1308,
                'name' => 'Central Visayas',
            ),
            254 => 
            array (
                'country_id' => 174,
                'id' => 1309,
                'name' => 'Davao Occidental',
            ),
            255 => 
            array (
                'country_id' => 174,
                'id' => 1310,
                'name' => 'Soccsksargen',
            ),
            256 => 
            array (
                'country_id' => 174,
                'id' => 1311,
                'name' => 'Compostela Valley',
            ),
            257 => 
            array (
                'country_id' => 174,
                'id' => 1312,
                'name' => 'Kalinga',
            ),
            258 => 
            array (
                'country_id' => 174,
                'id' => 1313,
                'name' => 'Isabela',
            ),
            259 => 
            array (
                'country_id' => 174,
                'id' => 1314,
                'name' => 'Caraga',
            ),
            260 => 
            array (
                'country_id' => 174,
                'id' => 1315,
                'name' => 'Iloilo',
            ),
            261 => 
            array (
                'country_id' => 174,
                'id' => 1316,
                'name' => 'Autonomous Region in Muslim Mindanao',
            ),
            262 => 
            array (
                'country_id' => 174,
                'id' => 1317,
                'name' => 'La Union',
            ),
            263 => 
            array (
                'country_id' => 174,
                'id' => 1318,
                'name' => 'Davao del Sur',
            ),
            264 => 
            array (
                'country_id' => 174,
                'id' => 1319,
                'name' => 'Davao del Norte',
            ),
            265 => 
            array (
                'country_id' => 174,
                'id' => 1320,
                'name' => 'Cotabato',
            ),
            266 => 
            array (
                'country_id' => 174,
                'id' => 1321,
                'name' => 'Ilocos Sur',
            ),
            267 => 
            array (
                'country_id' => 174,
                'id' => 1322,
                'name' => 'Eastern Visayas',
            ),
            268 => 
            array (
                'country_id' => 174,
                'id' => 1323,
                'name' => 'Agusan del Norte',
            ),
            269 => 
            array (
                'country_id' => 174,
                'id' => 1324,
                'name' => 'Abra',
            ),
            270 => 
            array (
                'country_id' => 174,
                'id' => 1325,
                'name' => 'Zamboanga Peninsula',
            ),
            271 => 
            array (
                'country_id' => 174,
                'id' => 1326,
                'name' => 'Agusan del Sur',
            ),
            272 => 
            array (
                'country_id' => 174,
                'id' => 1327,
                'name' => 'Lanao del Norte',
            ),
            273 => 
            array (
                'country_id' => 174,
                'id' => 1328,
                'name' => 'Laguna',
            ),
            274 => 
            array (
                'country_id' => 174,
                'id' => 1329,
                'name' => 'Marinduque',
            ),
            275 => 
            array (
                'country_id' => 174,
                'id' => 1330,
                'name' => 'Maguindanao',
            ),
            276 => 
            array (
                'country_id' => 174,
                'id' => 1331,
                'name' => 'Aklan',
            ),
            277 => 
            array (
                'country_id' => 174,
                'id' => 1332,
                'name' => 'Leyte',
            ),
            278 => 
            array (
                'country_id' => 174,
                'id' => 1333,
                'name' => 'Lanao del Sur',
            ),
            279 => 
            array (
                'country_id' => 174,
                'id' => 1334,
                'name' => 'Apayao',
            ),
            280 => 
            array (
                'country_id' => 174,
                'id' => 1335,
                'name' => 'Cordillera Administrative',
            ),
            281 => 
            array (
                'country_id' => 174,
                'id' => 1336,
                'name' => 'Antique',
            ),
            282 => 
            array (
                'country_id' => 174,
                'id' => 1337,
                'name' => 'Albay',
            ),
            283 => 
            array (
                'country_id' => 174,
                'id' => 1338,
                'name' => 'Masbate',
            ),
            284 => 
            array (
                'country_id' => 174,
                'id' => 1339,
                'name' => 'Northern Mindanao',
            ),
            285 => 
            array (
                'country_id' => 174,
                'id' => 1340,
                'name' => 'Davao',
            ),
            286 => 
            array (
                'country_id' => 174,
                'id' => 1341,
                'name' => 'Aurora',
            ),
            287 => 
            array (
                'country_id' => 174,
                'id' => 1342,
                'name' => 'Cagayan Valley',
            ),
            288 => 
            array (
                'country_id' => 174,
                'id' => 1343,
                'name' => 'Misamis Occidental',
            ),
            289 => 
            array (
                'country_id' => 174,
                'id' => 1344,
                'name' => 'Bataan',
            ),
            290 => 
            array (
                'country_id' => 174,
                'id' => 1345,
                'name' => 'Central Luzon',
            ),
            291 => 
            array (
                'country_id' => 174,
                'id' => 1346,
                'name' => 'Basilan',
            ),
            292 => 
            array (
                'country_id' => 174,
                'id' => 1347,
                'name' => 'Metro Manila',
            ),
            293 => 
            array (
                'country_id' => 174,
                'id' => 1348,
                'name' => 'Misamis Oriental',
            ),
            294 => 
            array (
                'country_id' => 174,
                'id' => 1349,
                'name' => 'Northern Samar',
            ),
            295 => 
            array (
                'country_id' => 174,
                'id' => 1350,
                'name' => 'Negros Oriental',
            ),
            296 => 
            array (
                'country_id' => 174,
                'id' => 1351,
                'name' => 'Negros Occidental',
            ),
            297 => 
            array (
                'country_id' => 174,
                'id' => 1352,
                'name' => 'Batanes',
            ),
            298 => 
            array (
                'country_id' => 174,
                'id' => 1353,
                'name' => 'Mountain Province',
            ),
            299 => 
            array (
                'country_id' => 174,
                'id' => 1354,
                'name' => 'Oriental Mindoro',
            ),
            300 => 
            array (
                'country_id' => 174,
                'id' => 1355,
                'name' => 'Ilocos',
            ),
            301 => 
            array (
                'country_id' => 174,
                'id' => 1356,
                'name' => 'Occidental Mindoro',
            ),
            302 => 
            array (
                'country_id' => 174,
                'id' => 1357,
                'name' => 'Zamboanga del Sur',
            ),
            303 => 
            array (
                'country_id' => 174,
                'id' => 1358,
                'name' => 'Nueva Vizcaya',
            ),
            304 => 
            array (
                'country_id' => 174,
                'id' => 1359,
                'name' => 'Batangas',
            ),
            305 => 
            array (
                'country_id' => 174,
                'id' => 1360,
                'name' => 'Nueva Ecija',
            ),
            306 => 
            array (
                'country_id' => 174,
                'id' => 1361,
                'name' => 'Palawan',
            ),
            307 => 
            array (
                'country_id' => 174,
                'id' => 1362,
                'name' => 'Zamboanga Sibugay',
            ),
            308 => 
            array (
                'country_id' => 174,
                'id' => 1363,
                'name' => 'Benguet',
            ),
            309 => 
            array (
                'country_id' => 174,
                'id' => 1364,
                'name' => 'Pangasinan',
            ),
            310 => 
            array (
                'country_id' => 174,
                'id' => 1365,
                'name' => 'Pampanga',
            ),
            311 => 
            array (
                'country_id' => 106,
                'id' => 1366,
                'name' => 'Northern District',
            ),
            312 => 
            array (
                'country_id' => 106,
                'id' => 1367,
                'name' => 'Central District',
            ),
            313 => 
            array (
                'country_id' => 106,
                'id' => 1368,
                'name' => 'Southern District',
            ),
            314 => 
            array (
                'country_id' => 106,
                'id' => 1369,
                'name' => 'Haifa District',
            ),
            315 => 
            array (
                'country_id' => 106,
                'id' => 1370,
                'name' => 'Jerusalem District',
            ),
            316 => 
            array (
                'country_id' => 106,
                'id' => 1371,
                'name' => 'Tel Aviv District',
            ),
            317 => 
            array (
                'country_id' => 22,
                'id' => 1372,
                'name' => 'Limburg',
            ),
            318 => 
            array (
                'country_id' => 22,
                'id' => 1373,
                'name' => 'Flanders',
            ),
            319 => 
            array (
                'country_id' => 22,
                'id' => 1374,
                'name' => 'Flemish Brabant',
            ),
            320 => 
            array (
                'country_id' => 22,
                'id' => 1375,
                'name' => 'Hainaut',
            ),
            321 => 
            array (
                'country_id' => 22,
                'id' => 1376,
                'name' => 'Brussels-Capital Region',
            ),
            322 => 
            array (
                'country_id' => 22,
                'id' => 1377,
                'name' => 'East Flanders',
            ),
            323 => 
            array (
                'country_id' => 22,
                'id' => 1378,
                'name' => 'Namur',
            ),
            324 => 
            array (
                'country_id' => 22,
                'id' => 1379,
                'name' => 'Luxembourg',
            ),
            325 => 
            array (
                'country_id' => 22,
                'id' => 1380,
                'name' => 'Wallonia',
            ),
            326 => 
            array (
                'country_id' => 22,
                'id' => 1381,
                'name' => 'Antwerp',
            ),
            327 => 
            array (
                'country_id' => 22,
                'id' => 1382,
                'name' => 'Walloon Brabant',
            ),
            328 => 
            array (
                'country_id' => 22,
                'id' => 1383,
                'name' => 'West Flanders',
            ),
            329 => 
            array (
                'country_id' => 22,
                'id' => 1384,
                'name' => 'Liège',
            ),
            330 => 
            array (
                'country_id' => 170,
                'id' => 1385,
                'name' => 'Darién Province',
            ),
            331 => 
            array (
                'country_id' => 170,
                'id' => 1386,
                'name' => 'Colón Province',
            ),
            332 => 
            array (
                'country_id' => 170,
                'id' => 1387,
                'name' => 'Coclé Province',
            ),
            333 => 
            array (
                'country_id' => 170,
                'id' => 1388,
                'name' => 'Guna Yala',
            ),
            334 => 
            array (
                'country_id' => 170,
                'id' => 1389,
                'name' => 'Herrera Province',
            ),
            335 => 
            array (
                'country_id' => 170,
                'id' => 1390,
                'name' => 'Los Santos Province',
            ),
            336 => 
            array (
                'country_id' => 170,
                'id' => 1391,
                'name' => 'Ngöbe-Buglé Comarca',
            ),
            337 => 
            array (
                'country_id' => 170,
                'id' => 1392,
                'name' => 'Veraguas Province',
            ),
            338 => 
            array (
                'country_id' => 170,
                'id' => 1393,
                'name' => 'Bocas del Toro Province',
            ),
            339 => 
            array (
                'country_id' => 170,
                'id' => 1394,
                'name' => 'Panamá Oeste Province',
            ),
            340 => 
            array (
                'country_id' => 170,
                'id' => 1395,
                'name' => 'Panamá Province',
            ),
            341 => 
            array (
                'country_id' => 170,
                'id' => 1396,
                'name' => 'Emberá-Wounaan Comarca',
            ),
            342 => 
            array (
                'country_id' => 170,
                'id' => 1397,
                'name' => 'Chiriquí Province',
            ),
            343 => 
            array (
                'country_id' => 233,
                'id' => 1398,
                'name' => 'Howland Island',
            ),
            344 => 
            array (
                'country_id' => 233,
                'id' => 1399,
                'name' => 'Delaware',
            ),
            345 => 
            array (
                'country_id' => 233,
                'id' => 1400,
                'name' => 'Alaska',
            ),
            346 => 
            array (
                'country_id' => 233,
                'id' => 1401,
                'name' => 'Maryland',
            ),
            347 => 
            array (
                'country_id' => 233,
                'id' => 1402,
                'name' => 'Baker Island',
            ),
            348 => 
            array (
                'country_id' => 233,
                'id' => 1403,
                'name' => 'Kingman Reef',
            ),
            349 => 
            array (
                'country_id' => 233,
                'id' => 1404,
                'name' => 'New Hampshire',
            ),
            350 => 
            array (
                'country_id' => 233,
                'id' => 1405,
                'name' => 'Wake Island',
            ),
            351 => 
            array (
                'country_id' => 233,
                'id' => 1406,
                'name' => 'Kansas',
            ),
            352 => 
            array (
                'country_id' => 233,
                'id' => 1407,
                'name' => 'Texas',
            ),
            353 => 
            array (
                'country_id' => 233,
                'id' => 1408,
                'name' => 'Nebraska',
            ),
            354 => 
            array (
                'country_id' => 233,
                'id' => 1409,
                'name' => 'Vermont',
            ),
            355 => 
            array (
                'country_id' => 233,
                'id' => 1410,
                'name' => 'Jarvis Island',
            ),
            356 => 
            array (
                'country_id' => 233,
                'id' => 1411,
                'name' => 'Hawaii',
            ),
            357 => 
            array (
                'country_id' => 233,
                'id' => 1412,
                'name' => 'Guam',
            ),
            358 => 
            array (
                'country_id' => 233,
                'id' => 1413,
                'name' => 'United States Virgin Islands',
            ),
            359 => 
            array (
                'country_id' => 233,
                'id' => 1414,
                'name' => 'Utah',
            ),
            360 => 
            array (
                'country_id' => 233,
                'id' => 1415,
                'name' => 'Oregon',
            ),
            361 => 
            array (
                'country_id' => 233,
                'id' => 1416,
                'name' => 'California',
            ),
            362 => 
            array (
                'country_id' => 233,
                'id' => 1417,
                'name' => 'New Jersey',
            ),
            363 => 
            array (
                'country_id' => 233,
                'id' => 1418,
                'name' => 'North Dakota',
            ),
            364 => 
            array (
                'country_id' => 233,
                'id' => 1419,
                'name' => 'Kentucky',
            ),
            365 => 
            array (
                'country_id' => 233,
                'id' => 1420,
                'name' => 'Minnesota',
            ),
            366 => 
            array (
                'country_id' => 233,
                'id' => 1421,
                'name' => 'Oklahoma',
            ),
            367 => 
            array (
                'country_id' => 233,
                'id' => 1422,
                'name' => 'Pennsylvania',
            ),
            368 => 
            array (
                'country_id' => 233,
                'id' => 1423,
                'name' => 'New Mexico',
            ),
            369 => 
            array (
                'country_id' => 233,
                'id' => 1424,
                'name' => 'American Samoa',
            ),
            370 => 
            array (
                'country_id' => 233,
                'id' => 1425,
                'name' => 'Illinois',
            ),
            371 => 
            array (
                'country_id' => 233,
                'id' => 1426,
                'name' => 'Michigan',
            ),
            372 => 
            array (
                'country_id' => 233,
                'id' => 1427,
                'name' => 'Virginia',
            ),
            373 => 
            array (
                'country_id' => 233,
                'id' => 1428,
                'name' => 'Johnston Atoll',
            ),
            374 => 
            array (
                'country_id' => 233,
                'id' => 1429,
                'name' => 'West Virginia',
            ),
            375 => 
            array (
                'country_id' => 233,
                'id' => 1430,
                'name' => 'Mississippi',
            ),
            376 => 
            array (
                'country_id' => 233,
                'id' => 1431,
                'name' => 'Northern Mariana Islands',
            ),
            377 => 
            array (
                'country_id' => 233,
                'id' => 1432,
                'name' => 'United States Minor Outlying Islands',
            ),
            378 => 
            array (
                'country_id' => 233,
                'id' => 1433,
                'name' => 'Massachusetts',
            ),
            379 => 
            array (
                'country_id' => 233,
                'id' => 1434,
                'name' => 'Arizona',
            ),
            380 => 
            array (
                'country_id' => 233,
                'id' => 1435,
                'name' => 'Connecticut',
            ),
            381 => 
            array (
                'country_id' => 233,
                'id' => 1436,
                'name' => 'Florida',
            ),
            382 => 
            array (
                'country_id' => 233,
                'id' => 1437,
                'name' => 'District of Columbia',
            ),
            383 => 
            array (
                'country_id' => 233,
                'id' => 1438,
                'name' => 'Midway Atoll',
            ),
            384 => 
            array (
                'country_id' => 233,
                'id' => 1439,
                'name' => 'Navassa Island',
            ),
            385 => 
            array (
                'country_id' => 233,
                'id' => 1440,
                'name' => 'Indiana',
            ),
            386 => 
            array (
                'country_id' => 233,
                'id' => 1441,
                'name' => 'Wisconsin',
            ),
            387 => 
            array (
                'country_id' => 233,
                'id' => 1442,
                'name' => 'Wyoming',
            ),
            388 => 
            array (
                'country_id' => 233,
                'id' => 1443,
                'name' => 'South Carolina',
            ),
            389 => 
            array (
                'country_id' => 233,
                'id' => 1444,
                'name' => 'Arkansas',
            ),
            390 => 
            array (
                'country_id' => 233,
                'id' => 1445,
                'name' => 'South Dakota',
            ),
            391 => 
            array (
                'country_id' => 233,
                'id' => 1446,
                'name' => 'Montana',
            ),
            392 => 
            array (
                'country_id' => 233,
                'id' => 1447,
                'name' => 'North Carolina',
            ),
            393 => 
            array (
                'country_id' => 233,
                'id' => 1448,
                'name' => 'Palmyra Atoll',
            ),
            394 => 
            array (
                'country_id' => 233,
                'id' => 1449,
                'name' => 'Puerto Rico',
            ),
            395 => 
            array (
                'country_id' => 233,
                'id' => 1450,
                'name' => 'Colorado',
            ),
            396 => 
            array (
                'country_id' => 233,
                'id' => 1451,
                'name' => 'Missouri',
            ),
            397 => 
            array (
                'country_id' => 233,
                'id' => 1452,
                'name' => 'New York',
            ),
            398 => 
            array (
                'country_id' => 233,
                'id' => 1453,
                'name' => 'Maine',
            ),
            399 => 
            array (
                'country_id' => 233,
                'id' => 1454,
                'name' => 'Tennessee',
            ),
            400 => 
            array (
                'country_id' => 233,
                'id' => 1455,
                'name' => 'Georgia',
            ),
            401 => 
            array (
                'country_id' => 233,
                'id' => 1456,
                'name' => 'Alabama',
            ),
            402 => 
            array (
                'country_id' => 233,
                'id' => 1457,
                'name' => 'Louisiana',
            ),
            403 => 
            array (
                'country_id' => 233,
                'id' => 1458,
                'name' => 'Nevada',
            ),
            404 => 
            array (
                'country_id' => 233,
                'id' => 1459,
                'name' => 'Iowa',
            ),
            405 => 
            array (
                'country_id' => 233,
                'id' => 1460,
                'name' => 'Idaho',
            ),
            406 => 
            array (
                'country_id' => 233,
                'id' => 1461,
                'name' => 'Rhode Island',
            ),
            407 => 
            array (
                'country_id' => 233,
                'id' => 1462,
                'name' => 'Washington',
            ),
            408 => 
            array (
                'country_id' => 218,
                'id' => 1463,
                'name' => 'Shinyanga',
            ),
            409 => 
            array (
                'country_id' => 218,
                'id' => 1464,
                'name' => 'Simiyu',
            ),
            410 => 
            array (
                'country_id' => 218,
                'id' => 1465,
                'name' => 'Kagera',
            ),
            411 => 
            array (
                'country_id' => 218,
                'id' => 1466,
                'name' => 'Dodoma',
            ),
            412 => 
            array (
                'country_id' => 218,
                'id' => 1467,
                'name' => 'Kilimanjaro',
            ),
            413 => 
            array (
                'country_id' => 218,
                'id' => 1468,
                'name' => 'Mara',
            ),
            414 => 
            array (
                'country_id' => 218,
                'id' => 1469,
                'name' => 'Tabora',
            ),
            415 => 
            array (
                'country_id' => 218,
                'id' => 1470,
                'name' => 'Morogoro',
            ),
            416 => 
            array (
                'country_id' => 218,
                'id' => 1471,
                'name' => 'Zanzibar South',
            ),
            417 => 
            array (
                'country_id' => 218,
                'id' => 1472,
                'name' => 'Pemba South',
            ),
            418 => 
            array (
                'country_id' => 218,
                'id' => 1473,
                'name' => 'Zanzibar North',
            ),
            419 => 
            array (
                'country_id' => 218,
                'id' => 1474,
                'name' => 'Singida',
            ),
            420 => 
            array (
                'country_id' => 218,
                'id' => 1475,
                'name' => 'Zanzibar West',
            ),
            421 => 
            array (
                'country_id' => 218,
                'id' => 1476,
                'name' => 'Mtwara',
            ),
            422 => 
            array (
                'country_id' => 218,
                'id' => 1477,
                'name' => 'Rukwa',
            ),
            423 => 
            array (
                'country_id' => 218,
                'id' => 1478,
                'name' => 'Kigoma',
            ),
            424 => 
            array (
                'country_id' => 218,
                'id' => 1479,
                'name' => 'Mwanza',
            ),
            425 => 
            array (
                'country_id' => 218,
                'id' => 1480,
                'name' => 'Njombe',
            ),
            426 => 
            array (
                'country_id' => 218,
                'id' => 1481,
                'name' => 'Geita',
            ),
            427 => 
            array (
                'country_id' => 218,
                'id' => 1482,
                'name' => 'Katavi',
            ),
            428 => 
            array (
                'country_id' => 218,
                'id' => 1483,
                'name' => 'Lindi',
            ),
            429 => 
            array (
                'country_id' => 218,
                'id' => 1484,
                'name' => 'Manyara',
            ),
            430 => 
            array (
                'country_id' => 218,
                'id' => 1485,
                'name' => 'Pwani',
            ),
            431 => 
            array (
                'country_id' => 218,
                'id' => 1486,
                'name' => 'Ruvuma',
            ),
            432 => 
            array (
                'country_id' => 218,
                'id' => 1487,
                'name' => 'Tanga',
            ),
            433 => 
            array (
                'country_id' => 218,
                'id' => 1488,
                'name' => 'Pemba North',
            ),
            434 => 
            array (
                'country_id' => 218,
                'id' => 1489,
                'name' => 'Iringa',
            ),
            435 => 
            array (
                'country_id' => 218,
                'id' => 1490,
                'name' => 'Dar es Salaam',
            ),
            436 => 
            array (
                'country_id' => 218,
                'id' => 1491,
                'name' => 'Arusha',
            ),
            437 => 
            array (
                'country_id' => 74,
                'id' => 1493,
                'name' => 'Tavastia Proper',
            ),
            438 => 
            array (
                'country_id' => 74,
                'id' => 1494,
                'name' => 'Central Ostrobothnia',
            ),
            439 => 
            array (
                'country_id' => 74,
                'id' => 1495,
                'name' => 'Southern Savonia',
            ),
            440 => 
            array (
                'country_id' => 74,
                'id' => 1496,
                'name' => 'Kainuu',
            ),
            441 => 
            array (
                'country_id' => 74,
                'id' => 1497,
                'name' => 'South Karelia',
            ),
            442 => 
            array (
                'country_id' => 74,
                'id' => 1498,
                'name' => 'Southern Ostrobothnia',
            ),
            443 => 
            array (
                'country_id' => 74,
                'id' => 1500,
                'name' => 'Lapland',
            ),
            444 => 
            array (
                'country_id' => 74,
                'id' => 1501,
                'name' => 'Satakunta',
            ),
            445 => 
            array (
                'country_id' => 74,
                'id' => 1502,
                'name' => 'Päijänne Tavastia',
            ),
            446 => 
            array (
                'country_id' => 74,
                'id' => 1503,
                'name' => 'Northern Savonia',
            ),
            447 => 
            array (
                'country_id' => 74,
                'id' => 1504,
                'name' => 'North Karelia',
            ),
            448 => 
            array (
                'country_id' => 74,
                'id' => 1505,
                'name' => 'Northern Ostrobothnia',
            ),
            449 => 
            array (
                'country_id' => 74,
                'id' => 1506,
                'name' => 'Pirkanmaa',
            ),
            450 => 
            array (
                'country_id' => 74,
                'id' => 1507,
                'name' => 'Finland Proper',
            ),
            451 => 
            array (
                'country_id' => 74,
                'id' => 1508,
                'name' => 'Ostrobothnia',
            ),
            452 => 
            array (
                'country_id' => 74,
                'id' => 1509,
                'name' => 'Åland Islands',
            ),
            453 => 
            array (
                'country_id' => 74,
                'id' => 1510,
                'name' => 'Uusimaa',
            ),
            454 => 
            array (
                'country_id' => 74,
                'id' => 1511,
                'name' => 'Central Finland',
            ),
            455 => 
            array (
                'country_id' => 74,
                'id' => 1512,
                'name' => 'Kymenlaakso',
            ),
            456 => 
            array (
                'country_id' => 127,
                'id' => 1513,
                'name' => 'Canton of Diekirch',
            ),
            457 => 
            array (
                'country_id' => 127,
                'id' => 1514,
                'name' => 'Luxembourg District',
            ),
            458 => 
            array (
                'country_id' => 127,
                'id' => 1515,
                'name' => 'Canton of Echternach',
            ),
            459 => 
            array (
                'country_id' => 127,
                'id' => 1516,
                'name' => 'Canton of Redange',
            ),
            460 => 
            array (
                'country_id' => 127,
                'id' => 1517,
                'name' => 'Canton of Esch-sur-Alzette',
            ),
            461 => 
            array (
                'country_id' => 127,
                'id' => 1518,
                'name' => 'Canton of Capellen',
            ),
            462 => 
            array (
                'country_id' => 127,
                'id' => 1519,
                'name' => 'Canton of Remich',
            ),
            463 => 
            array (
                'country_id' => 127,
                'id' => 1520,
                'name' => 'Grevenmacher District',
            ),
            464 => 
            array (
                'country_id' => 127,
                'id' => 1521,
                'name' => 'Canton of Clervaux',
            ),
            465 => 
            array (
                'country_id' => 127,
                'id' => 1522,
                'name' => 'Canton of Mersch',
            ),
            466 => 
            array (
                'country_id' => 127,
                'id' => 1523,
                'name' => 'Canton of Vianden',
            ),
            467 => 
            array (
                'country_id' => 127,
                'id' => 1524,
                'name' => 'Diekirch District',
            ),
            468 => 
            array (
                'country_id' => 127,
                'id' => 1525,
                'name' => 'Canton of Grevenmacher',
            ),
            469 => 
            array (
                'country_id' => 127,
                'id' => 1526,
                'name' => 'Canton of Wiltz',
            ),
            470 => 
            array (
                'country_id' => 127,
                'id' => 1527,
                'name' => 'Canton of Luxembourg',
            ),
            471 => 
            array (
                'country_id' => 59,
                'id' => 1528,
                'name' => 'Region Zealand',
            ),
            472 => 
            array (
                'country_id' => 59,
                'id' => 1529,
                'name' => 'Region of Southern Denmark',
            ),
            473 => 
            array (
                'country_id' => 59,
                'id' => 1530,
                'name' => 'Capital Region of Denmark',
            ),
            474 => 
            array (
                'country_id' => 59,
                'id' => 1531,
                'name' => 'Central Denmark Region',
            ),
            475 => 
            array (
                'country_id' => 59,
                'id' => 1532,
                'name' => 'North Denmark Region',
            ),
            476 => 
            array (
                'country_id' => 213,
                'id' => 1533,
                'name' => 'Gävleborg County',
            ),
            477 => 
            array (
                'country_id' => 213,
                'id' => 1534,
                'name' => 'Dalarna County',
            ),
            478 => 
            array (
                'country_id' => 213,
                'id' => 1535,
                'name' => 'Värmland County',
            ),
            479 => 
            array (
                'country_id' => 213,
                'id' => 1536,
                'name' => 'Östergötland County',
            ),
            480 => 
            array (
                'country_id' => 213,
                'id' => 1537,
                'name' => 'Blekinge County',
            ),
            481 => 
            array (
                'country_id' => 213,
                'id' => 1538,
                'name' => 'Norrbotten County',
            ),
            482 => 
            array (
                'country_id' => 213,
                'id' => 1539,
                'name' => 'Örebro County',
            ),
            483 => 
            array (
                'country_id' => 213,
                'id' => 1540,
                'name' => 'Södermanland County',
            ),
            484 => 
            array (
                'country_id' => 213,
                'id' => 1541,
                'name' => 'Skåne County',
            ),
            485 => 
            array (
                'country_id' => 213,
                'id' => 1542,
                'name' => 'Kronoberg County',
            ),
            486 => 
            array (
                'country_id' => 213,
                'id' => 1543,
                'name' => 'Västerbotten County',
            ),
            487 => 
            array (
                'country_id' => 213,
                'id' => 1544,
                'name' => 'Kalmar County',
            ),
            488 => 
            array (
                'country_id' => 213,
                'id' => 1545,
                'name' => 'Uppsala County',
            ),
            489 => 
            array (
                'country_id' => 213,
                'id' => 1546,
                'name' => 'Gotland County',
            ),
            490 => 
            array (
                'country_id' => 213,
                'id' => 1547,
                'name' => 'Västra Götaland County',
            ),
            491 => 
            array (
                'country_id' => 213,
                'id' => 1548,
                'name' => 'Halland County',
            ),
            492 => 
            array (
                'country_id' => 213,
                'id' => 1549,
                'name' => 'Västmanland County',
            ),
            493 => 
            array (
                'country_id' => 213,
                'id' => 1550,
                'name' => 'Jönköping County',
            ),
            494 => 
            array (
                'country_id' => 213,
                'id' => 1551,
                'name' => 'Stockholm County',
            ),
            495 => 
            array (
                'country_id' => 213,
                'id' => 1552,
                'name' => 'Västernorrland County',
            ),
            496 => 
            array (
                'country_id' => 126,
                'id' => 1553,
                'name' => 'Plungė District Municipality',
            ),
            497 => 
            array (
                'country_id' => 126,
                'id' => 1554,
                'name' => 'Šiauliai District Municipality',
            ),
            498 => 
            array (
                'country_id' => 126,
                'id' => 1555,
                'name' => 'Jurbarkas District Municipality',
            ),
            499 => 
            array (
                'country_id' => 126,
                'id' => 1556,
                'name' => 'Kaunas County',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 126,
                'id' => 1557,
                'name' => 'Mažeikiai District Municipality',
            ),
            1 => 
            array (
                'country_id' => 126,
                'id' => 1558,
                'name' => 'Panevėžys County',
            ),
            2 => 
            array (
                'country_id' => 126,
                'id' => 1559,
                'name' => 'Elektrėnai municipality',
            ),
            3 => 
            array (
                'country_id' => 126,
                'id' => 1560,
                'name' => 'Švenčionys District Municipality',
            ),
            4 => 
            array (
                'country_id' => 126,
                'id' => 1561,
                'name' => 'Akmenė District Municipality',
            ),
            5 => 
            array (
                'country_id' => 126,
                'id' => 1562,
                'name' => 'Ignalina District Municipality',
            ),
            6 => 
            array (
                'country_id' => 126,
                'id' => 1563,
                'name' => 'Neringa Municipality',
            ),
            7 => 
            array (
                'country_id' => 126,
                'id' => 1564,
                'name' => 'Visaginas Municipality',
            ),
            8 => 
            array (
                'country_id' => 126,
                'id' => 1565,
                'name' => 'Kaunas District Municipality',
            ),
            9 => 
            array (
                'country_id' => 126,
                'id' => 1566,
                'name' => 'Biržai District Municipality',
            ),
            10 => 
            array (
                'country_id' => 126,
                'id' => 1567,
                'name' => 'Jonava District Municipality',
            ),
            11 => 
            array (
                'country_id' => 126,
                'id' => 1568,
                'name' => 'Radviliškis District Municipality',
            ),
            12 => 
            array (
                'country_id' => 126,
                'id' => 1569,
                'name' => 'Telšiai County',
            ),
            13 => 
            array (
                'country_id' => 126,
                'id' => 1570,
                'name' => 'Marijampolė County',
            ),
            14 => 
            array (
                'country_id' => 126,
                'id' => 1571,
                'name' => 'Kretinga District Municipality',
            ),
            15 => 
            array (
                'country_id' => 126,
                'id' => 1572,
                'name' => 'Tauragė District Municipality',
            ),
            16 => 
            array (
                'country_id' => 126,
                'id' => 1573,
                'name' => 'Tauragė County',
            ),
            17 => 
            array (
                'country_id' => 126,
                'id' => 1574,
                'name' => 'Alytus County',
            ),
            18 => 
            array (
                'country_id' => 126,
                'id' => 1575,
                'name' => 'Kazlų Rūda municipality',
            ),
            19 => 
            array (
                'country_id' => 126,
                'id' => 1576,
                'name' => 'Šakiai District Municipality',
            ),
            20 => 
            array (
                'country_id' => 126,
                'id' => 1577,
                'name' => 'Šalčininkai District Municipality',
            ),
            21 => 
            array (
                'country_id' => 126,
                'id' => 1578,
                'name' => 'Prienai District Municipality',
            ),
            22 => 
            array (
                'country_id' => 126,
                'id' => 1579,
                'name' => 'Druskininkai municipality',
            ),
            23 => 
            array (
                'country_id' => 126,
                'id' => 1580,
                'name' => 'Kaunas City Municipality',
            ),
            24 => 
            array (
                'country_id' => 126,
                'id' => 1581,
                'name' => 'Joniškis District Municipality',
            ),
            25 => 
            array (
                'country_id' => 126,
                'id' => 1582,
                'name' => 'Molėtai District Municipality',
            ),
            26 => 
            array (
                'country_id' => 126,
                'id' => 1583,
                'name' => 'Kaišiadorys District Municipality',
            ),
            27 => 
            array (
                'country_id' => 126,
                'id' => 1584,
                'name' => 'Kėdainiai District Municipality',
            ),
            28 => 
            array (
                'country_id' => 126,
                'id' => 1585,
                'name' => 'Kupiškis District Municipality',
            ),
            29 => 
            array (
                'country_id' => 126,
                'id' => 1586,
                'name' => 'Šiauliai County',
            ),
            30 => 
            array (
                'country_id' => 126,
                'id' => 1587,
                'name' => 'Raseiniai District Municipality',
            ),
            31 => 
            array (
                'country_id' => 126,
                'id' => 1588,
                'name' => 'Palanga City Municipality',
            ),
            32 => 
            array (
                'country_id' => 126,
                'id' => 1589,
                'name' => 'Panevėžys City Municipality',
            ),
            33 => 
            array (
                'country_id' => 126,
                'id' => 1590,
                'name' => 'Rietavas municipality',
            ),
            34 => 
            array (
                'country_id' => 126,
                'id' => 1591,
                'name' => 'Kalvarija municipality',
            ),
            35 => 
            array (
                'country_id' => 126,
                'id' => 1592,
                'name' => 'Vilnius District Municipality',
            ),
            36 => 
            array (
                'country_id' => 126,
                'id' => 1593,
                'name' => 'Trakai District Municipality',
            ),
            37 => 
            array (
                'country_id' => 126,
                'id' => 1594,
                'name' => 'Širvintos District Municipality',
            ),
            38 => 
            array (
                'country_id' => 126,
                'id' => 1595,
                'name' => 'Pakruojis District Municipality',
            ),
            39 => 
            array (
                'country_id' => 126,
                'id' => 1596,
                'name' => 'Ukmergė District Municipality',
            ),
            40 => 
            array (
                'country_id' => 126,
                'id' => 1597,
                'name' => 'Klaipeda City Municipality',
            ),
            41 => 
            array (
                'country_id' => 126,
                'id' => 1598,
                'name' => 'Utena District Municipality',
            ),
            42 => 
            array (
                'country_id' => 126,
                'id' => 1599,
                'name' => 'Alytus District Municipality',
            ),
            43 => 
            array (
                'country_id' => 126,
                'id' => 1600,
                'name' => 'Klaipėda County',
            ),
            44 => 
            array (
                'country_id' => 126,
                'id' => 1601,
                'name' => 'Vilnius County',
            ),
            45 => 
            array (
                'country_id' => 126,
                'id' => 1602,
                'name' => 'Varėna District Municipality',
            ),
            46 => 
            array (
                'country_id' => 126,
                'id' => 1603,
                'name' => 'Birštonas Municipality',
            ),
            47 => 
            array (
                'country_id' => 126,
                'id' => 1604,
                'name' => 'Klaipėda District Municipality',
            ),
            48 => 
            array (
                'country_id' => 126,
                'id' => 1605,
                'name' => 'Alytus City Municipality',
            ),
            49 => 
            array (
                'country_id' => 126,
                'id' => 1606,
                'name' => 'Vilnius City Municipality',
            ),
            50 => 
            array (
                'country_id' => 126,
                'id' => 1607,
                'name' => 'Šilutė District Municipality',
            ),
            51 => 
            array (
                'country_id' => 126,
                'id' => 1608,
                'name' => 'Telšiai District Municipality',
            ),
            52 => 
            array (
                'country_id' => 126,
                'id' => 1609,
                'name' => 'Šiauliai City Municipality',
            ),
            53 => 
            array (
                'country_id' => 126,
                'id' => 1610,
                'name' => 'Marijampolė Municipality',
            ),
            54 => 
            array (
                'country_id' => 126,
                'id' => 1611,
                'name' => 'Lazdijai District Municipality',
            ),
            55 => 
            array (
                'country_id' => 126,
                'id' => 1612,
                'name' => 'Pagėgiai municipality',
            ),
            56 => 
            array (
                'country_id' => 126,
                'id' => 1613,
                'name' => 'Šilalė District Municipality',
            ),
            57 => 
            array (
                'country_id' => 126,
                'id' => 1614,
                'name' => 'Panevėžys District Municipality',
            ),
            58 => 
            array (
                'country_id' => 126,
                'id' => 1615,
                'name' => 'Rokiškis District Municipality',
            ),
            59 => 
            array (
                'country_id' => 126,
                'id' => 1616,
                'name' => 'Pasvalys District Municipality',
            ),
            60 => 
            array (
                'country_id' => 126,
                'id' => 1617,
                'name' => 'Skuodas District Municipality',
            ),
            61 => 
            array (
                'country_id' => 126,
                'id' => 1618,
                'name' => 'Kelmė District Municipality',
            ),
            62 => 
            array (
                'country_id' => 126,
                'id' => 1619,
                'name' => 'Zarasai District Municipality',
            ),
            63 => 
            array (
                'country_id' => 126,
                'id' => 1620,
                'name' => 'Vilkaviškis District Municipality',
            ),
            64 => 
            array (
                'country_id' => 126,
                'id' => 1621,
                'name' => 'Utena County',
            ),
            65 => 
            array (
                'country_id' => 176,
                'id' => 1622,
                'name' => 'Opole Voivodeship',
            ),
            66 => 
            array (
                'country_id' => 176,
                'id' => 1623,
                'name' => 'Silesian Voivodeship',
            ),
            67 => 
            array (
                'country_id' => 176,
                'id' => 1624,
                'name' => 'Pomeranian Voivodeship',
            ),
            68 => 
            array (
                'country_id' => 176,
                'id' => 1625,
                'name' => 'Kuyavian-Pomeranian Voivodeship',
            ),
            69 => 
            array (
                'country_id' => 176,
                'id' => 1626,
                'name' => 'Podkarpackie Voivodeship',
            ),
            70 => 
            array (
                'country_id' => 176,
                'id' => 1628,
                'name' => 'Warmian-Masurian Voivodeship',
            ),
            71 => 
            array (
                'country_id' => 176,
                'id' => 1629,
                'name' => 'Lower Silesian Voivodeship',
            ),
            72 => 
            array (
                'country_id' => 176,
                'id' => 1630,
                'name' => 'Świętokrzyskie Voivodeship',
            ),
            73 => 
            array (
                'country_id' => 176,
                'id' => 1631,
                'name' => 'Lubusz Voivodeship',
            ),
            74 => 
            array (
                'country_id' => 176,
                'id' => 1632,
                'name' => 'Podlaskie Voivodeship',
            ),
            75 => 
            array (
                'country_id' => 176,
                'id' => 1633,
                'name' => 'West Pomeranian Voivodeship',
            ),
            76 => 
            array (
                'country_id' => 176,
                'id' => 1634,
                'name' => 'Greater Poland Voivodeship',
            ),
            77 => 
            array (
                'country_id' => 176,
                'id' => 1635,
                'name' => 'Lesser Poland Voivodeship',
            ),
            78 => 
            array (
                'country_id' => 176,
                'id' => 1636,
                'name' => 'Łódź Voivodeship',
            ),
            79 => 
            array (
                'country_id' => 176,
                'id' => 1637,
                'name' => 'Masovian Voivodeship',
            ),
            80 => 
            array (
                'country_id' => 176,
                'id' => 1638,
                'name' => 'Lublin Voivodeship',
            ),
            81 => 
            array (
                'country_id' => 214,
                'id' => 1639,
                'name' => 'Aargau',
            ),
            82 => 
            array (
                'country_id' => 214,
                'id' => 1640,
                'name' => 'Fribourg',
            ),
            83 => 
            array (
                'country_id' => 214,
                'id' => 1641,
                'name' => 'Basel-Land',
            ),
            84 => 
            array (
                'country_id' => 214,
                'id' => 1642,
                'name' => 'Uri',
            ),
            85 => 
            array (
                'country_id' => 214,
                'id' => 1643,
                'name' => 'Ticino',
            ),
            86 => 
            array (
                'country_id' => 214,
                'id' => 1644,
                'name' => 'St. Gallen',
            ),
            87 => 
            array (
                'country_id' => 214,
                'id' => 1645,
                'name' => 'Bern',
            ),
            88 => 
            array (
                'country_id' => 214,
                'id' => 1646,
                'name' => 'Zug',
            ),
            89 => 
            array (
                'country_id' => 214,
                'id' => 1647,
                'name' => 'Geneva',
            ),
            90 => 
            array (
                'country_id' => 214,
                'id' => 1648,
                'name' => 'Valais',
            ),
            91 => 
            array (
                'country_id' => 214,
                'id' => 1649,
                'name' => 'Appenzell Innerrhoden',
            ),
            92 => 
            array (
                'country_id' => 214,
                'id' => 1650,
                'name' => 'Obwalden',
            ),
            93 => 
            array (
                'country_id' => 214,
                'id' => 1651,
                'name' => 'Vaud',
            ),
            94 => 
            array (
                'country_id' => 214,
                'id' => 1652,
                'name' => 'Nidwalden',
            ),
            95 => 
            array (
                'country_id' => 214,
                'id' => 1653,
                'name' => 'Schwyz',
            ),
            96 => 
            array (
                'country_id' => 214,
                'id' => 1654,
                'name' => 'Schaffhausen',
            ),
            97 => 
            array (
                'country_id' => 214,
                'id' => 1655,
                'name' => 'Appenzell Ausserrhoden',
            ),
            98 => 
            array (
                'country_id' => 214,
                'id' => 1656,
                'name' => 'Zürich',
            ),
            99 => 
            array (
                'country_id' => 214,
                'id' => 1657,
                'name' => 'Thurgau',
            ),
            100 => 
            array (
                'country_id' => 214,
                'id' => 1658,
                'name' => 'Jura',
            ),
            101 => 
            array (
                'country_id' => 214,
                'id' => 1659,
                'name' => 'Neuchâtel',
            ),
            102 => 
            array (
                'country_id' => 214,
                'id' => 1660,
                'name' => 'Graubünden',
            ),
            103 => 
            array (
                'country_id' => 214,
                'id' => 1661,
                'name' => 'Glarus',
            ),
            104 => 
            array (
                'country_id' => 214,
                'id' => 1662,
                'name' => 'Solothurn',
            ),
            105 => 
            array (
                'country_id' => 214,
                'id' => 1663,
                'name' => 'Lucerne',
            ),
            106 => 
            array (
                'country_id' => 107,
                'id' => 1664,
                'name' => 'Tuscany',
            ),
            107 => 
            array (
                'country_id' => 107,
                'id' => 1665,
                'name' => 'Padua',
            ),
            108 => 
            array (
                'country_id' => 107,
                'id' => 1666,
                'name' => 'Parma',
            ),
            109 => 
            array (
                'country_id' => 107,
                'id' => 1667,
                'name' => 'Siracusa',
            ),
            110 => 
            array (
                'country_id' => 107,
                'id' => 1668,
                'name' => 'Palermo',
            ),
            111 => 
            array (
                'country_id' => 107,
                'id' => 1669,
                'name' => 'Campania',
            ),
            112 => 
            array (
                'country_id' => 107,
                'id' => 1670,
                'name' => 'Marche',
            ),
            113 => 
            array (
                'country_id' => 107,
                'id' => 1672,
                'name' => 'Ancona',
            ),
            114 => 
            array (
                'country_id' => 107,
                'id' => 1674,
                'name' => 'Latina',
            ),
            115 => 
            array (
                'country_id' => 107,
                'id' => 1675,
                'name' => 'Lecce',
            ),
            116 => 
            array (
                'country_id' => 107,
                'id' => 1676,
                'name' => 'Pavia',
            ),
            117 => 
            array (
                'country_id' => 107,
                'id' => 1677,
                'name' => 'Lecco',
            ),
            118 => 
            array (
                'country_id' => 107,
                'id' => 1678,
                'name' => 'Lazio',
            ),
            119 => 
            array (
                'country_id' => 107,
                'id' => 1679,
                'name' => 'Abruzzo',
            ),
            120 => 
            array (
                'country_id' => 107,
                'id' => 1681,
                'name' => 'Ascoli Piceno',
            ),
            121 => 
            array (
                'country_id' => 107,
                'id' => 1683,
                'name' => 'Umbria',
            ),
            122 => 
            array (
                'country_id' => 107,
                'id' => 1685,
                'name' => 'Pisa',
            ),
            123 => 
            array (
                'country_id' => 107,
                'id' => 1686,
                'name' => 'Barletta-Andria-Trani',
            ),
            124 => 
            array (
                'country_id' => 107,
                'id' => 1687,
                'name' => 'Pistoia',
            ),
            125 => 
            array (
                'country_id' => 107,
                'id' => 1688,
                'name' => 'Apulia',
            ),
            126 => 
            array (
                'country_id' => 107,
                'id' => 1689,
                'name' => 'Belluno',
            ),
            127 => 
            array (
                'country_id' => 107,
                'id' => 1690,
                'name' => 'Pordenone',
            ),
            128 => 
            array (
                'country_id' => 107,
                'id' => 1691,
                'name' => 'Perugia',
            ),
            129 => 
            array (
                'country_id' => 107,
                'id' => 1692,
                'name' => 'Avellino',
            ),
            130 => 
            array (
                'country_id' => 107,
                'id' => 1693,
                'name' => 'Pesaro and Urbino',
            ),
            131 => 
            array (
                'country_id' => 107,
                'id' => 1694,
                'name' => 'Pescara',
            ),
            132 => 
            array (
                'country_id' => 107,
                'id' => 1695,
                'name' => 'Molise',
            ),
            133 => 
            array (
                'country_id' => 107,
                'id' => 1696,
                'name' => 'Piacenza',
            ),
            134 => 
            array (
                'country_id' => 107,
                'id' => 1697,
                'name' => 'Potenza',
            ),
            135 => 
            array (
                'country_id' => 107,
                'id' => 1700,
                'name' => 'Prato',
            ),
            136 => 
            array (
                'country_id' => 107,
                'id' => 1701,
                'name' => 'Benevento',
            ),
            137 => 
            array (
                'country_id' => 107,
                'id' => 1702,
                'name' => 'Piedmont',
            ),
            138 => 
            array (
                'country_id' => 107,
                'id' => 1703,
                'name' => 'Calabria',
            ),
            139 => 
            array (
                'country_id' => 107,
                'id' => 1704,
                'name' => 'Bergamo',
            ),
            140 => 
            array (
                'country_id' => 107,
                'id' => 1705,
                'name' => 'Lombardy',
            ),
            141 => 
            array (
                'country_id' => 107,
                'id' => 1706,
                'name' => 'Basilicata',
            ),
            142 => 
            array (
                'country_id' => 107,
                'id' => 1707,
                'name' => 'Ravenna',
            ),
            143 => 
            array (
                'country_id' => 107,
                'id' => 1708,
                'name' => 'Reggio Emilia',
            ),
            144 => 
            array (
                'country_id' => 107,
                'id' => 1709,
                'name' => 'Sicily',
            ),
            145 => 
            array (
                'country_id' => 107,
                'id' => 1712,
                'name' => 'Rieti',
            ),
            146 => 
            array (
                'country_id' => 107,
                'id' => 1713,
                'name' => 'Rimini',
            ),
            147 => 
            array (
                'country_id' => 107,
                'id' => 1714,
                'name' => 'Brindisi',
            ),
            148 => 
            array (
                'country_id' => 107,
                'id' => 1715,
                'name' => 'Sardinia',
            ),
            149 => 
            array (
                'country_id' => 107,
                'id' => 1716,
                'name' => 'Aosta Valley',
            ),
            150 => 
            array (
                'country_id' => 107,
                'id' => 1717,
                'name' => 'Brescia',
            ),
            151 => 
            array (
                'country_id' => 107,
                'id' => 1718,
                'name' => 'Caltanissetta',
            ),
            152 => 
            array (
                'country_id' => 107,
                'id' => 1719,
                'name' => 'Rovigo',
            ),
            153 => 
            array (
                'country_id' => 107,
                'id' => 1720,
                'name' => 'Salerno',
            ),
            154 => 
            array (
                'country_id' => 107,
                'id' => 1721,
                'name' => 'Campobasso',
            ),
            155 => 
            array (
                'country_id' => 107,
                'id' => 1722,
                'name' => 'Sassari',
            ),
            156 => 
            array (
                'country_id' => 107,
                'id' => 1723,
                'name' => 'Enna',
            ),
            157 => 
            array (
                'country_id' => 107,
                'id' => 1725,
                'name' => 'Trentino-South Tyrol',
            ),
            158 => 
            array (
                'country_id' => 107,
                'id' => 1726,
                'name' => 'Verbano-Cusio-Ossola',
            ),
            159 => 
            array (
                'country_id' => 107,
                'id' => 1727,
                'name' => 'Agrigento',
            ),
            160 => 
            array (
                'country_id' => 107,
                'id' => 1728,
                'name' => 'Catanzaro',
            ),
            161 => 
            array (
                'country_id' => 107,
                'id' => 1729,
                'name' => 'Ragusa',
            ),
            162 => 
            array (
                'country_id' => 107,
                'id' => 1730,
                'name' => 'South Sardinia',
            ),
            163 => 
            array (
                'country_id' => 107,
                'id' => 1731,
                'name' => 'Caserta',
            ),
            164 => 
            array (
                'country_id' => 107,
                'id' => 1732,
                'name' => 'Savona',
            ),
            165 => 
            array (
                'country_id' => 107,
                'id' => 1733,
                'name' => 'Trapani',
            ),
            166 => 
            array (
                'country_id' => 107,
                'id' => 1734,
                'name' => 'Siena',
            ),
            167 => 
            array (
                'country_id' => 107,
                'id' => 1735,
                'name' => 'Viterbo',
            ),
            168 => 
            array (
                'country_id' => 107,
                'id' => 1736,
                'name' => 'Verona',
            ),
            169 => 
            array (
                'country_id' => 107,
                'id' => 1737,
                'name' => 'Vibo Valentia',
            ),
            170 => 
            array (
                'country_id' => 107,
                'id' => 1738,
                'name' => 'Vicenza',
            ),
            171 => 
            array (
                'country_id' => 107,
                'id' => 1739,
                'name' => 'Chieti',
            ),
            172 => 
            array (
                'country_id' => 107,
                'id' => 1740,
                'name' => 'Como',
            ),
            173 => 
            array (
                'country_id' => 107,
                'id' => 1741,
                'name' => 'Sondrio',
            ),
            174 => 
            array (
                'country_id' => 107,
                'id' => 1742,
                'name' => 'Cosenza',
            ),
            175 => 
            array (
                'country_id' => 107,
                'id' => 1743,
                'name' => 'Taranto',
            ),
            176 => 
            array (
                'country_id' => 107,
                'id' => 1744,
                'name' => 'Fermo',
            ),
            177 => 
            array (
                'country_id' => 107,
                'id' => 1745,
                'name' => 'Livorno',
            ),
            178 => 
            array (
                'country_id' => 107,
                'id' => 1746,
                'name' => 'Ferrara',
            ),
            179 => 
            array (
                'country_id' => 107,
                'id' => 1747,
                'name' => 'Lodi',
            ),
            180 => 
            array (
                'country_id' => 107,
                'id' => 1749,
                'name' => 'Lucca',
            ),
            181 => 
            array (
                'country_id' => 107,
                'id' => 1750,
                'name' => 'Macerata',
            ),
            182 => 
            array (
                'country_id' => 107,
                'id' => 1751,
                'name' => 'Cremona',
            ),
            183 => 
            array (
                'country_id' => 107,
                'id' => 1752,
                'name' => 'Teramo',
            ),
            184 => 
            array (
                'country_id' => 107,
                'id' => 1753,
                'name' => 'Veneto',
            ),
            185 => 
            array (
                'country_id' => 107,
                'id' => 1754,
                'name' => 'Crotone',
            ),
            186 => 
            array (
                'country_id' => 107,
                'id' => 1755,
                'name' => 'Terni',
            ),
            187 => 
            array (
                'country_id' => 107,
                'id' => 1756,
                'name' => 'Friuli–Venezia Giulia',
            ),
            188 => 
            array (
                'country_id' => 107,
                'id' => 1757,
                'name' => 'Modena',
            ),
            189 => 
            array (
                'country_id' => 107,
                'id' => 1758,
                'name' => 'Mantua',
            ),
            190 => 
            array (
                'country_id' => 107,
                'id' => 1759,
                'name' => 'Massa and Carrara',
            ),
            191 => 
            array (
                'country_id' => 107,
                'id' => 1760,
                'name' => 'Matera',
            ),
            192 => 
            array (
                'country_id' => 107,
                'id' => 1761,
                'name' => 'Medio Campidano',
            ),
            193 => 
            array (
                'country_id' => 107,
                'id' => 1762,
                'name' => 'Treviso',
            ),
            194 => 
            array (
                'country_id' => 107,
                'id' => 1763,
                'name' => 'Trieste',
            ),
            195 => 
            array (
                'country_id' => 107,
                'id' => 1764,
                'name' => 'Udine',
            ),
            196 => 
            array (
                'country_id' => 107,
                'id' => 1765,
                'name' => 'Varese',
            ),
            197 => 
            array (
                'country_id' => 107,
                'id' => 1768,
                'name' => 'Liguria',
            ),
            198 => 
            array (
                'country_id' => 107,
                'id' => 1769,
                'name' => 'Monza and Brianza',
            ),
            199 => 
            array (
                'country_id' => 107,
                'id' => 1771,
                'name' => 'Foggia',
            ),
            200 => 
            array (
                'country_id' => 107,
                'id' => 1773,
                'name' => 'Emilia-Romagna',
            ),
            201 => 
            array (
                'country_id' => 107,
                'id' => 1774,
                'name' => 'Novara',
            ),
            202 => 
            array (
                'country_id' => 107,
                'id' => 1775,
                'name' => 'Cuneo',
            ),
            203 => 
            array (
                'country_id' => 107,
                'id' => 1776,
                'name' => 'Frosinone',
            ),
            204 => 
            array (
                'country_id' => 107,
                'id' => 1777,
                'name' => 'Gorizia',
            ),
            205 => 
            array (
                'country_id' => 107,
                'id' => 1778,
                'name' => 'Biella',
            ),
            206 => 
            array (
                'country_id' => 107,
                'id' => 1779,
                'name' => 'Forlì-Cesena',
            ),
            207 => 
            array (
                'country_id' => 107,
                'id' => 1780,
                'name' => 'Asti',
            ),
            208 => 
            array (
                'country_id' => 107,
                'id' => 1781,
                'name' => 'L\'Aquila',
            ),
            209 => 
            array (
                'country_id' => 107,
                'id' => 1783,
                'name' => 'Alessandria',
            ),
            210 => 
            array (
                'country_id' => 107,
                'id' => 1785,
                'name' => 'Vercelli',
            ),
            211 => 
            array (
                'country_id' => 107,
                'id' => 1786,
                'name' => 'Oristano',
            ),
            212 => 
            array (
                'country_id' => 107,
                'id' => 1787,
                'name' => 'Grosseto',
            ),
            213 => 
            array (
                'country_id' => 107,
                'id' => 1788,
                'name' => 'Imperia',
            ),
            214 => 
            array (
                'country_id' => 107,
                'id' => 1789,
                'name' => 'Isernia',
            ),
            215 => 
            array (
                'country_id' => 107,
                'id' => 1790,
                'name' => 'Nuoro',
            ),
            216 => 
            array (
                'country_id' => 107,
                'id' => 1791,
                'name' => 'La Spezia',
            ),
            217 => 
            array (
                'country_id' => 102,
                'id' => 1792,
                'name' => 'Sumatera Utara',
            ),
            218 => 
            array (
                'country_id' => 102,
                'id' => 1793,
                'name' => 'Bengkulu',
            ),
            219 => 
            array (
                'country_id' => 102,
                'id' => 1794,
                'name' => 'Kalimantan Tengah',
            ),
            220 => 
            array (
                'country_id' => 102,
                'id' => 1795,
                'name' => 'Sulawesi Selatan',
            ),
            221 => 
            array (
                'country_id' => 102,
                'id' => 1796,
                'name' => 'Sulawesi Tenggara',
            ),
            222 => 
            array (
                'country_id' => 102,
                'id' => 1798,
                'name' => 'Papua',
            ),
            223 => 
            array (
                'country_id' => 102,
                'id' => 1799,
                'name' => 'Papua Barat',
            ),
            224 => 
            array (
                'country_id' => 102,
                'id' => 1800,
                'name' => 'Maluku',
            ),
            225 => 
            array (
                'country_id' => 102,
                'id' => 1801,
                'name' => 'Maluku Utara',
            ),
            226 => 
            array (
                'country_id' => 102,
                'id' => 1802,
                'name' => 'Jawa Tengah',
            ),
            227 => 
            array (
                'country_id' => 102,
                'id' => 1804,
                'name' => 'Kalimantan Timur',
            ),
            228 => 
            array (
                'country_id' => 102,
                'id' => 1805,
                'name' => 'DKI Jakarta',
            ),
            229 => 
            array (
                'country_id' => 102,
                'id' => 1806,
                'name' => 'Kalimantan Barat',
            ),
            230 => 
            array (
                'country_id' => 102,
                'id' => 1807,
                'name' => 'Kepulauan Riau',
            ),
            231 => 
            array (
                'country_id' => 102,
                'id' => 1808,
                'name' => 'Sulawesi Utara',
            ),
            232 => 
            array (
                'country_id' => 102,
                'id' => 1809,
                'name' => 'Riau',
            ),
            233 => 
            array (
                'country_id' => 102,
                'id' => 1810,
                'name' => 'Banten',
            ),
            234 => 
            array (
                'country_id' => 102,
                'id' => 1811,
                'name' => 'Lampung',
            ),
            235 => 
            array (
                'country_id' => 102,
                'id' => 1812,
                'name' => 'Gorontalo',
            ),
            236 => 
            array (
                'country_id' => 102,
                'id' => 1813,
                'name' => 'Sulawesi Tengah',
            ),
            237 => 
            array (
                'country_id' => 102,
                'id' => 1814,
                'name' => 'Nusa Tenggara Barat',
            ),
            238 => 
            array (
                'country_id' => 102,
                'id' => 1815,
                'name' => 'Jambi',
            ),
            239 => 
            array (
                'country_id' => 102,
                'id' => 1816,
                'name' => 'Sumatera Selatan',
            ),
            240 => 
            array (
                'country_id' => 102,
                'id' => 1817,
                'name' => 'Sulawesi Barat',
            ),
            241 => 
            array (
                'country_id' => 102,
                'id' => 1818,
                'name' => 'Nusa Tenggara Timur',
            ),
            242 => 
            array (
                'country_id' => 102,
                'id' => 1819,
                'name' => 'Kalimantan Selatan',
            ),
            243 => 
            array (
                'country_id' => 102,
                'id' => 1820,
                'name' => 'Kepulauan Bangka Belitung',
            ),
            244 => 
            array (
                'country_id' => 102,
                'id' => 1822,
                'name' => 'Aceh',
            ),
            245 => 
            array (
                'country_id' => 102,
                'id' => 1824,
                'name' => 'Kalimantan Utara',
            ),
            246 => 
            array (
                'country_id' => 102,
                'id' => 1825,
                'name' => 'Jawa Barat',
            ),
            247 => 
            array (
                'country_id' => 102,
                'id' => 1826,
                'name' => 'Bali',
            ),
            248 => 
            array (
                'country_id' => 102,
                'id' => 1827,
                'name' => 'Jawa Timur',
            ),
            249 => 
            array (
                'country_id' => 102,
                'id' => 1828,
                'name' => 'Sumatera Barat',
            ),
            250 => 
            array (
                'country_id' => 102,
                'id' => 1829,
                'name' => 'DI Yogyakarta',
            ),
            251 => 
            array (
                'country_id' => 114,
                'id' => 1830,
                'name' => 'Phoenix Islands',
            ),
            252 => 
            array (
                'country_id' => 114,
                'id' => 1831,
                'name' => 'Gilbert Islands',
            ),
            253 => 
            array (
                'country_id' => 114,
                'id' => 1832,
                'name' => 'Line Islands',
            ),
            254 => 
            array (
                'country_id' => 182,
                'id' => 1833,
                'name' => 'Primorsky Krai',
            ),
            255 => 
            array (
                'country_id' => 182,
                'id' => 1834,
                'name' => 'Novgorod Oblast',
            ),
            256 => 
            array (
                'country_id' => 182,
                'id' => 1835,
                'name' => 'Jewish Autonomous Oblast',
            ),
            257 => 
            array (
                'country_id' => 182,
                'id' => 1836,
                'name' => 'Nenets Autonomous Okrug',
            ),
            258 => 
            array (
                'country_id' => 182,
                'id' => 1837,
                'name' => 'Rostov Oblast',
            ),
            259 => 
            array (
                'country_id' => 182,
                'id' => 1838,
                'name' => 'Khanty-Mansi Autonomous Okrug',
            ),
            260 => 
            array (
                'country_id' => 182,
                'id' => 1839,
                'name' => 'Magadan Oblast',
            ),
            261 => 
            array (
                'country_id' => 182,
                'id' => 1840,
                'name' => 'Krasnoyarsk Krai',
            ),
            262 => 
            array (
                'country_id' => 182,
                'id' => 1841,
                'name' => 'Republic of Karelia',
            ),
            263 => 
            array (
                'country_id' => 182,
                'id' => 1842,
                'name' => 'Republic of Buryatia',
            ),
            264 => 
            array (
                'country_id' => 182,
                'id' => 1843,
                'name' => 'Murmansk Oblast',
            ),
            265 => 
            array (
                'country_id' => 182,
                'id' => 1844,
                'name' => 'Kaluga Oblast',
            ),
            266 => 
            array (
                'country_id' => 182,
                'id' => 1845,
                'name' => 'Chelyabinsk Oblast',
            ),
            267 => 
            array (
                'country_id' => 182,
                'id' => 1846,
                'name' => 'Omsk Oblast',
            ),
            268 => 
            array (
                'country_id' => 182,
                'id' => 1847,
                'name' => 'Yamalo-Nenets Autonomous Okrug',
            ),
            269 => 
            array (
                'country_id' => 182,
                'id' => 1848,
                'name' => 'Sakha Republic',
            ),
            270 => 
            array (
                'country_id' => 182,
                'id' => 1849,
                'name' => 'Arkhangelsk',
            ),
            271 => 
            array (
                'country_id' => 182,
                'id' => 1850,
                'name' => 'Republic of Dagestan',
            ),
            272 => 
            array (
                'country_id' => 182,
                'id' => 1851,
                'name' => 'Yaroslavl Oblast',
            ),
            273 => 
            array (
                'country_id' => 182,
                'id' => 1852,
                'name' => 'Republic of Adygea',
            ),
            274 => 
            array (
                'country_id' => 182,
                'id' => 1853,
                'name' => 'Republic of North Ossetia-Alania',
            ),
            275 => 
            array (
                'country_id' => 182,
                'id' => 1854,
                'name' => 'Republic of Bashkortostan',
            ),
            276 => 
            array (
                'country_id' => 182,
                'id' => 1855,
                'name' => 'Kursk Oblast',
            ),
            277 => 
            array (
                'country_id' => 182,
                'id' => 1856,
                'name' => 'Ulyanovsk Oblast',
            ),
            278 => 
            array (
                'country_id' => 182,
                'id' => 1857,
                'name' => 'Nizhny Novgorod Oblast',
            ),
            279 => 
            array (
                'country_id' => 182,
                'id' => 1858,
                'name' => 'Amur Oblast',
            ),
            280 => 
            array (
                'country_id' => 182,
                'id' => 1859,
                'name' => 'Chukotka Autonomous Okrug',
            ),
            281 => 
            array (
                'country_id' => 182,
                'id' => 1860,
                'name' => 'Tver Oblast',
            ),
            282 => 
            array (
                'country_id' => 182,
                'id' => 1861,
                'name' => 'Republic of Tatarstan',
            ),
            283 => 
            array (
                'country_id' => 182,
                'id' => 1862,
                'name' => 'Samara Oblast',
            ),
            284 => 
            array (
                'country_id' => 182,
                'id' => 1863,
                'name' => 'Pskov Oblast',
            ),
            285 => 
            array (
                'country_id' => 182,
                'id' => 1864,
                'name' => 'Ivanovo Oblast',
            ),
            286 => 
            array (
                'country_id' => 182,
                'id' => 1865,
                'name' => 'Kamchatka Krai',
            ),
            287 => 
            array (
                'country_id' => 182,
                'id' => 1866,
                'name' => 'Astrakhan Oblast',
            ),
            288 => 
            array (
                'country_id' => 182,
                'id' => 1867,
                'name' => 'Bryansk Oblast',
            ),
            289 => 
            array (
                'country_id' => 182,
                'id' => 1868,
                'name' => 'Stavropol Krai',
            ),
            290 => 
            array (
                'country_id' => 182,
                'id' => 1869,
                'name' => 'Karachay-Cherkess Republic',
            ),
            291 => 
            array (
                'country_id' => 182,
                'id' => 1870,
                'name' => 'Mari El Republic',
            ),
            292 => 
            array (
                'country_id' => 182,
                'id' => 1871,
                'name' => 'Perm Krai',
            ),
            293 => 
            array (
                'country_id' => 182,
                'id' => 1872,
                'name' => 'Tomsk Oblast',
            ),
            294 => 
            array (
                'country_id' => 182,
                'id' => 1873,
                'name' => 'Khabarovsk Krai',
            ),
            295 => 
            array (
                'country_id' => 182,
                'id' => 1874,
                'name' => 'Vologda Oblast',
            ),
            296 => 
            array (
                'country_id' => 182,
                'id' => 1875,
                'name' => 'Sakhalin',
            ),
            297 => 
            array (
                'country_id' => 182,
                'id' => 1876,
                'name' => 'Altai Republic',
            ),
            298 => 
            array (
                'country_id' => 182,
                'id' => 1877,
                'name' => 'Republic of Khakassia',
            ),
            299 => 
            array (
                'country_id' => 182,
                'id' => 1878,
                'name' => 'Tambov Oblast',
            ),
            300 => 
            array (
                'country_id' => 182,
                'id' => 1879,
                'name' => 'Saint Petersburg',
            ),
            301 => 
            array (
                'country_id' => 182,
                'id' => 1880,
                'name' => 'Irkutsk',
            ),
            302 => 
            array (
                'country_id' => 182,
                'id' => 1881,
                'name' => 'Vladimir Oblast',
            ),
            303 => 
            array (
                'country_id' => 182,
                'id' => 1882,
                'name' => 'Moscow Oblast',
            ),
            304 => 
            array (
                'country_id' => 182,
                'id' => 1883,
                'name' => 'Republic of Kalmykia',
            ),
            305 => 
            array (
                'country_id' => 182,
                'id' => 1884,
                'name' => 'Republic of Ingushetia',
            ),
            306 => 
            array (
                'country_id' => 182,
                'id' => 1885,
                'name' => 'Smolensk Oblast',
            ),
            307 => 
            array (
                'country_id' => 182,
                'id' => 1886,
                'name' => 'Orenburg Oblast',
            ),
            308 => 
            array (
                'country_id' => 182,
                'id' => 1887,
                'name' => 'Saratov Oblast',
            ),
            309 => 
            array (
                'country_id' => 182,
                'id' => 1888,
                'name' => 'Novosibirsk',
            ),
            310 => 
            array (
                'country_id' => 182,
                'id' => 1889,
                'name' => 'Lipetsk Oblast',
            ),
            311 => 
            array (
                'country_id' => 182,
                'id' => 1890,
                'name' => 'Kirov Oblast',
            ),
            312 => 
            array (
                'country_id' => 182,
                'id' => 1891,
                'name' => 'Krasnodar Krai',
            ),
            313 => 
            array (
                'country_id' => 182,
                'id' => 1892,
                'name' => 'Kabardino-Balkar Republic',
            ),
            314 => 
            array (
                'country_id' => 182,
                'id' => 1893,
                'name' => 'Chechen Republic',
            ),
            315 => 
            array (
                'country_id' => 182,
                'id' => 1894,
                'name' => 'Sverdlovsk',
            ),
            316 => 
            array (
                'country_id' => 182,
                'id' => 1895,
                'name' => 'Tula Oblast',
            ),
            317 => 
            array (
                'country_id' => 182,
                'id' => 1896,
                'name' => 'Leningrad Oblast',
            ),
            318 => 
            array (
                'country_id' => 182,
                'id' => 1897,
                'name' => 'Kemerovo Oblast',
            ),
            319 => 
            array (
                'country_id' => 182,
                'id' => 1898,
                'name' => 'Republic of Mordovia',
            ),
            320 => 
            array (
                'country_id' => 182,
                'id' => 1899,
                'name' => 'Komi Republic',
            ),
            321 => 
            array (
                'country_id' => 182,
                'id' => 1900,
                'name' => 'Tuva Republic',
            ),
            322 => 
            array (
                'country_id' => 182,
                'id' => 1901,
                'name' => 'Moscow',
            ),
            323 => 
            array (
                'country_id' => 182,
                'id' => 1902,
                'name' => 'Kaliningrad',
            ),
            324 => 
            array (
                'country_id' => 182,
                'id' => 1903,
                'name' => 'Belgorod Oblast',
            ),
            325 => 
            array (
                'country_id' => 182,
                'id' => 1904,
                'name' => 'Zabaykalsky Krai',
            ),
            326 => 
            array (
                'country_id' => 182,
                'id' => 1905,
                'name' => 'Ryazan Oblast',
            ),
            327 => 
            array (
                'country_id' => 182,
                'id' => 1906,
                'name' => 'Voronezh Oblast',
            ),
            328 => 
            array (
                'country_id' => 182,
                'id' => 1907,
                'name' => 'Tyumen Oblast',
            ),
            329 => 
            array (
                'country_id' => 182,
                'id' => 1908,
                'name' => 'Oryol Oblast',
            ),
            330 => 
            array (
                'country_id' => 182,
                'id' => 1909,
                'name' => 'Penza Oblast',
            ),
            331 => 
            array (
                'country_id' => 182,
                'id' => 1910,
                'name' => 'Kostroma Oblast',
            ),
            332 => 
            array (
                'country_id' => 182,
                'id' => 1911,
                'name' => 'Altai Krai',
            ),
            333 => 
            array (
                'country_id' => 230,
                'id' => 1912,
                'name' => 'Sevastopol',
            ),
            334 => 
            array (
                'country_id' => 182,
                'id' => 1913,
                'name' => 'Udmurt Republic',
            ),
            335 => 
            array (
                'country_id' => 182,
                'id' => 1914,
                'name' => 'Chuvash Republic',
            ),
            336 => 
            array (
                'country_id' => 182,
                'id' => 1915,
                'name' => 'Kurgan Oblast',
            ),
            337 => 
            array (
                'country_id' => 73,
                'id' => 1916,
                'name' => 'Lomaiviti',
            ),
            338 => 
            array (
                'country_id' => 73,
                'id' => 1917,
                'name' => 'Ba',
            ),
            339 => 
            array (
                'country_id' => 73,
                'id' => 1918,
                'name' => 'Tailevu',
            ),
            340 => 
            array (
                'country_id' => 73,
                'id' => 1919,
                'name' => 'Nadroga-Navosa',
            ),
            341 => 
            array (
                'country_id' => 73,
                'id' => 1920,
                'name' => 'Rewa',
            ),
            342 => 
            array (
                'country_id' => 73,
                'id' => 1921,
                'name' => 'Northern Division',
            ),
            343 => 
            array (
                'country_id' => 73,
                'id' => 1922,
                'name' => 'Macuata',
            ),
            344 => 
            array (
                'country_id' => 73,
                'id' => 1923,
                'name' => 'Western Division',
            ),
            345 => 
            array (
                'country_id' => 73,
                'id' => 1924,
                'name' => 'Cakaudrove',
            ),
            346 => 
            array (
                'country_id' => 73,
                'id' => 1925,
                'name' => 'Serua',
            ),
            347 => 
            array (
                'country_id' => 73,
                'id' => 1926,
                'name' => 'Ra',
            ),
            348 => 
            array (
                'country_id' => 73,
                'id' => 1927,
                'name' => 'Naitasiri',
            ),
            349 => 
            array (
                'country_id' => 73,
                'id' => 1928,
                'name' => 'Namosi',
            ),
            350 => 
            array (
                'country_id' => 73,
                'id' => 1929,
                'name' => 'Central Division',
            ),
            351 => 
            array (
                'country_id' => 73,
                'id' => 1930,
                'name' => 'Bua',
            ),
            352 => 
            array (
                'country_id' => 73,
                'id' => 1931,
                'name' => 'Rotuma',
            ),
            353 => 
            array (
                'country_id' => 73,
                'id' => 1932,
                'name' => 'Eastern Division',
            ),
            354 => 
            array (
                'country_id' => 73,
                'id' => 1933,
                'name' => 'Lau',
            ),
            355 => 
            array (
                'country_id' => 73,
                'id' => 1934,
                'name' => 'Kadavu',
            ),
            356 => 
            array (
                'country_id' => 132,
                'id' => 1935,
                'name' => 'Labuan',
            ),
            357 => 
            array (
                'country_id' => 132,
                'id' => 1936,
                'name' => 'Sabah',
            ),
            358 => 
            array (
                'country_id' => 132,
                'id' => 1937,
                'name' => 'Sarawak',
            ),
            359 => 
            array (
                'country_id' => 132,
                'id' => 1938,
                'name' => 'Perlis',
            ),
            360 => 
            array (
                'country_id' => 132,
                'id' => 1939,
                'name' => 'Penang',
            ),
            361 => 
            array (
                'country_id' => 132,
                'id' => 1940,
                'name' => 'Pahang',
            ),
            362 => 
            array (
                'country_id' => 132,
                'id' => 1941,
                'name' => 'Malacca',
            ),
            363 => 
            array (
                'country_id' => 132,
                'id' => 1942,
                'name' => 'Terengganu',
            ),
            364 => 
            array (
                'country_id' => 132,
                'id' => 1943,
                'name' => 'Perak',
            ),
            365 => 
            array (
                'country_id' => 132,
                'id' => 1944,
                'name' => 'Selangor',
            ),
            366 => 
            array (
                'country_id' => 132,
                'id' => 1945,
                'name' => 'Putrajaya',
            ),
            367 => 
            array (
                'country_id' => 132,
                'id' => 1946,
                'name' => 'Kelantan',
            ),
            368 => 
            array (
                'country_id' => 132,
                'id' => 1947,
                'name' => 'Kedah',
            ),
            369 => 
            array (
                'country_id' => 132,
                'id' => 1948,
                'name' => 'Negeri Sembilan',
            ),
            370 => 
            array (
                'country_id' => 132,
                'id' => 1949,
                'name' => 'Kuala Lumpur',
            ),
            371 => 
            array (
                'country_id' => 132,
                'id' => 1950,
                'name' => 'Johor',
            ),
            372 => 
            array (
                'country_id' => 247,
                'id' => 1951,
                'name' => 'Mashonaland East Province',
            ),
            373 => 
            array (
                'country_id' => 247,
                'id' => 1952,
                'name' => 'Matabeleland South Province',
            ),
            374 => 
            array (
                'country_id' => 247,
                'id' => 1953,
                'name' => 'Mashonaland West Province',
            ),
            375 => 
            array (
                'country_id' => 247,
                'id' => 1954,
                'name' => 'Matabeleland North Province',
            ),
            376 => 
            array (
                'country_id' => 247,
                'id' => 1955,
                'name' => 'Mashonaland Central Province',
            ),
            377 => 
            array (
                'country_id' => 247,
                'id' => 1956,
                'name' => 'Bulawayo Province',
            ),
            378 => 
            array (
                'country_id' => 247,
                'id' => 1957,
                'name' => 'Midlands Province',
            ),
            379 => 
            array (
                'country_id' => 247,
                'id' => 1958,
                'name' => 'Harare Province',
            ),
            380 => 
            array (
                'country_id' => 247,
                'id' => 1959,
                'name' => 'Manicaland',
            ),
            381 => 
            array (
                'country_id' => 247,
                'id' => 1960,
                'name' => 'Masvingo Province',
            ),
            382 => 
            array (
                'country_id' => 146,
                'id' => 1961,
                'name' => 'Bulgan Province',
            ),
            383 => 
            array (
                'country_id' => 146,
                'id' => 1962,
                'name' => 'Darkhan-Uul Province',
            ),
            384 => 
            array (
                'country_id' => 146,
                'id' => 1963,
                'name' => 'Dornod Province',
            ),
            385 => 
            array (
                'country_id' => 146,
                'id' => 1964,
                'name' => 'Khovd Province',
            ),
            386 => 
            array (
                'country_id' => 146,
                'id' => 1965,
                'name' => 'Övörkhangai Province',
            ),
            387 => 
            array (
                'country_id' => 146,
                'id' => 1966,
                'name' => 'Orkhon Province',
            ),
            388 => 
            array (
                'country_id' => 146,
                'id' => 1967,
                'name' => 'Ömnögovi Province',
            ),
            389 => 
            array (
                'country_id' => 146,
                'id' => 1968,
                'name' => 'Töv Province',
            ),
            390 => 
            array (
                'country_id' => 146,
                'id' => 1969,
                'name' => 'Bayan-Ölgii Province',
            ),
            391 => 
            array (
                'country_id' => 146,
                'id' => 1970,
                'name' => 'Dundgovi Province',
            ),
            392 => 
            array (
                'country_id' => 146,
                'id' => 1971,
                'name' => 'Uvs Province',
            ),
            393 => 
            array (
                'country_id' => 146,
                'id' => 1972,
                'name' => 'Govi-Altai Province',
            ),
            394 => 
            array (
                'country_id' => 146,
                'id' => 1973,
                'name' => 'Arkhangai Province',
            ),
            395 => 
            array (
                'country_id' => 146,
                'id' => 1974,
                'name' => 'Khentii Province',
            ),
            396 => 
            array (
                'country_id' => 146,
                'id' => 1975,
                'name' => 'Khövsgöl Province',
            ),
            397 => 
            array (
                'country_id' => 146,
                'id' => 1976,
                'name' => 'Bayankhongor Province',
            ),
            398 => 
            array (
                'country_id' => 146,
                'id' => 1977,
                'name' => 'Sükhbaatar Province',
            ),
            399 => 
            array (
                'country_id' => 146,
                'id' => 1978,
                'name' => 'Govisümber Province',
            ),
            400 => 
            array (
                'country_id' => 146,
                'id' => 1979,
                'name' => 'Zavkhan Province',
            ),
            401 => 
            array (
                'country_id' => 146,
                'id' => 1980,
                'name' => 'Selenge Province',
            ),
            402 => 
            array (
                'country_id' => 146,
                'id' => 1981,
                'name' => 'Dornogovi Province',
            ),
            403 => 
            array (
                'country_id' => 246,
                'id' => 1982,
                'name' => 'Northern Province',
            ),
            404 => 
            array (
                'country_id' => 246,
                'id' => 1983,
                'name' => 'Western Province',
            ),
            405 => 
            array (
                'country_id' => 246,
                'id' => 1984,
                'name' => 'Copperbelt Province',
            ),
            406 => 
            array (
                'country_id' => 246,
                'id' => 1985,
                'name' => 'Northwestern Province',
            ),
            407 => 
            array (
                'country_id' => 246,
                'id' => 1986,
                'name' => 'Central Province',
            ),
            408 => 
            array (
                'country_id' => 246,
                'id' => 1987,
                'name' => 'Luapula Province',
            ),
            409 => 
            array (
                'country_id' => 246,
                'id' => 1988,
                'name' => 'Lusaka Province',
            ),
            410 => 
            array (
                'country_id' => 246,
                'id' => 1989,
                'name' => 'Muchinga Province',
            ),
            411 => 
            array (
                'country_id' => 246,
                'id' => 1990,
                'name' => 'Southern Province',
            ),
            412 => 
            array (
                'country_id' => 246,
                'id' => 1991,
                'name' => 'Eastern Province',
            ),
            413 => 
            array (
                'country_id' => 18,
                'id' => 1992,
                'name' => 'Capital',
            ),
            414 => 
            array (
                'country_id' => 18,
                'id' => 1993,
                'name' => 'Southern',
            ),
            415 => 
            array (
                'country_id' => 18,
                'id' => 1994,
                'name' => 'Northern',
            ),
            416 => 
            array (
                'country_id' => 18,
                'id' => 1995,
                'name' => 'Muharraq',
            ),
            417 => 
            array (
                'country_id' => 18,
                'id' => 1996,
                'name' => 'Central',
            ),
            418 => 
            array (
                'country_id' => 31,
                'id' => 1997,
                'name' => 'Rio de Janeiro',
            ),
            419 => 
            array (
                'country_id' => 31,
                'id' => 1998,
                'name' => 'Minas Gerais',
            ),
            420 => 
            array (
                'country_id' => 31,
                'id' => 1999,
                'name' => 'Amapá',
            ),
            421 => 
            array (
                'country_id' => 31,
                'id' => 2000,
                'name' => 'Goiás',
            ),
            422 => 
            array (
                'country_id' => 31,
                'id' => 2001,
                'name' => 'Rio Grande do Sul',
            ),
            423 => 
            array (
                'country_id' => 31,
                'id' => 2002,
                'name' => 'Bahia',
            ),
            424 => 
            array (
                'country_id' => 31,
                'id' => 2003,
                'name' => 'Sergipe',
            ),
            425 => 
            array (
                'country_id' => 31,
                'id' => 2004,
                'name' => 'Amazonas',
            ),
            426 => 
            array (
                'country_id' => 31,
                'id' => 2005,
                'name' => 'Paraíba',
            ),
            427 => 
            array (
                'country_id' => 31,
                'id' => 2006,
                'name' => 'Pernambuco',
            ),
            428 => 
            array (
                'country_id' => 31,
                'id' => 2007,
                'name' => 'Alagoas',
            ),
            429 => 
            array (
                'country_id' => 31,
                'id' => 2008,
                'name' => 'Piauí',
            ),
            430 => 
            array (
                'country_id' => 31,
                'id' => 2009,
                'name' => 'Pará',
            ),
            431 => 
            array (
                'country_id' => 31,
                'id' => 2010,
                'name' => 'Mato Grosso do Sul',
            ),
            432 => 
            array (
                'country_id' => 31,
                'id' => 2011,
                'name' => 'Mato Grosso',
            ),
            433 => 
            array (
                'country_id' => 31,
                'id' => 2012,
                'name' => 'Acre',
            ),
            434 => 
            array (
                'country_id' => 31,
                'id' => 2013,
                'name' => 'Rondônia',
            ),
            435 => 
            array (
                'country_id' => 31,
                'id' => 2014,
                'name' => 'Santa Catarina',
            ),
            436 => 
            array (
                'country_id' => 31,
                'id' => 2015,
                'name' => 'Maranhão',
            ),
            437 => 
            array (
                'country_id' => 31,
                'id' => 2016,
                'name' => 'Ceará',
            ),
            438 => 
            array (
                'country_id' => 31,
                'id' => 2017,
                'name' => 'Distrito Federal',
            ),
            439 => 
            array (
                'country_id' => 31,
                'id' => 2018,
                'name' => 'Espírito Santo',
            ),
            440 => 
            array (
                'country_id' => 31,
                'id' => 2019,
                'name' => 'Rio Grande do Norte',
            ),
            441 => 
            array (
                'country_id' => 31,
                'id' => 2020,
                'name' => 'Tocantins',
            ),
            442 => 
            array (
                'country_id' => 31,
                'id' => 2021,
                'name' => 'São Paulo',
            ),
            443 => 
            array (
                'country_id' => 31,
                'id' => 2022,
                'name' => 'Paraná',
            ),
            444 => 
            array (
                'country_id' => 12,
                'id' => 2023,
                'name' => 'Aragatsotn Region',
            ),
            445 => 
            array (
                'country_id' => 12,
                'id' => 2024,
                'name' => 'Ararat Province',
            ),
            446 => 
            array (
                'country_id' => 12,
                'id' => 2025,
                'name' => 'Vayots Dzor Region',
            ),
            447 => 
            array (
                'country_id' => 12,
                'id' => 2026,
                'name' => 'Armavir Region',
            ),
            448 => 
            array (
                'country_id' => 12,
                'id' => 2027,
                'name' => 'Syunik Province',
            ),
            449 => 
            array (
                'country_id' => 12,
                'id' => 2028,
                'name' => 'Gegharkunik Province',
            ),
            450 => 
            array (
                'country_id' => 12,
                'id' => 2029,
                'name' => 'Lori Region',
            ),
            451 => 
            array (
                'country_id' => 12,
                'id' => 2030,
                'name' => 'Yerevan',
            ),
            452 => 
            array (
                'country_id' => 12,
                'id' => 2031,
                'name' => 'Shirak Region',
            ),
            453 => 
            array (
                'country_id' => 12,
                'id' => 2032,
                'name' => 'Tavush Region',
            ),
            454 => 
            array (
                'country_id' => 12,
                'id' => 2033,
                'name' => 'Kotayk Region',
            ),
            455 => 
            array (
                'country_id' => 239,
                'id' => 2034,
                'name' => 'Cojedes',
            ),
            456 => 
            array (
                'country_id' => 239,
                'id' => 2035,
                'name' => 'Falcón',
            ),
            457 => 
            array (
                'country_id' => 239,
                'id' => 2036,
                'name' => 'Portuguesa',
            ),
            458 => 
            array (
                'country_id' => 239,
                'id' => 2037,
                'name' => 'Miranda',
            ),
            459 => 
            array (
                'country_id' => 239,
                'id' => 2038,
                'name' => 'Lara',
            ),
            460 => 
            array (
                'country_id' => 239,
                'id' => 2039,
                'name' => 'Bolívar',
            ),
            461 => 
            array (
                'country_id' => 239,
                'id' => 2040,
                'name' => 'Carabobo',
            ),
            462 => 
            array (
                'country_id' => 239,
                'id' => 2041,
                'name' => 'Yaracuy',
            ),
            463 => 
            array (
                'country_id' => 239,
                'id' => 2042,
                'name' => 'Zulia',
            ),
            464 => 
            array (
                'country_id' => 239,
                'id' => 2043,
                'name' => 'Trujillo',
            ),
            465 => 
            array (
                'country_id' => 239,
                'id' => 2044,
                'name' => 'Amazonas',
            ),
            466 => 
            array (
                'country_id' => 239,
                'id' => 2045,
                'name' => 'Guárico',
            ),
            467 => 
            array (
                'country_id' => 239,
                'id' => 2046,
                'name' => 'Federal Dependencies of Venezuela',
            ),
            468 => 
            array (
                'country_id' => 239,
                'id' => 2047,
                'name' => 'Aragua',
            ),
            469 => 
            array (
                'country_id' => 239,
                'id' => 2048,
                'name' => 'Táchira',
            ),
            470 => 
            array (
                'country_id' => 239,
                'id' => 2049,
                'name' => 'Barinas',
            ),
            471 => 
            array (
                'country_id' => 239,
                'id' => 2050,
                'name' => 'Anzoátegui',
            ),
            472 => 
            array (
                'country_id' => 239,
                'id' => 2051,
                'name' => 'Delta Amacuro',
            ),
            473 => 
            array (
                'country_id' => 239,
                'id' => 2052,
                'name' => 'Nueva Esparta',
            ),
            474 => 
            array (
                'country_id' => 239,
                'id' => 2053,
                'name' => 'Mérida',
            ),
            475 => 
            array (
                'country_id' => 239,
                'id' => 2054,
                'name' => 'Monagas',
            ),
            476 => 
            array (
                'country_id' => 239,
                'id' => 2055,
                'name' => 'La Guaira',
            ),
            477 => 
            array (
                'country_id' => 239,
                'id' => 2056,
                'name' => 'Sucre',
            ),
            478 => 
            array (
                'country_id' => 15,
                'id' => 2057,
                'name' => 'Carinthia',
            ),
            479 => 
            array (
                'country_id' => 15,
                'id' => 2058,
                'name' => 'Upper Austria',
            ),
            480 => 
            array (
                'country_id' => 15,
                'id' => 2059,
                'name' => 'Styria',
            ),
            481 => 
            array (
                'country_id' => 15,
                'id' => 2060,
                'name' => 'Vienna',
            ),
            482 => 
            array (
                'country_id' => 15,
                'id' => 2061,
                'name' => 'Salzburg',
            ),
            483 => 
            array (
                'country_id' => 15,
                'id' => 2062,
                'name' => 'Burgenland',
            ),
            484 => 
            array (
                'country_id' => 15,
                'id' => 2063,
                'name' => 'Vorarlberg',
            ),
            485 => 
            array (
                'country_id' => 15,
                'id' => 2064,
                'name' => 'Tyrol',
            ),
            486 => 
            array (
                'country_id' => 15,
                'id' => 2065,
                'name' => 'Lower Austria',
            ),
            487 => 
            array (
                'country_id' => 154,
                'id' => 2066,
                'name' => 'Mid-Western Region',
            ),
            488 => 
            array (
                'country_id' => 154,
                'id' => 2067,
                'name' => 'Western Region',
            ),
            489 => 
            array (
                'country_id' => 154,
                'id' => 2068,
                'name' => 'Far-Western Development Region',
            ),
            490 => 
            array (
                'country_id' => 154,
                'id' => 2069,
                'name' => 'Eastern Development Region',
            ),
            491 => 
            array (
                'country_id' => 154,
                'id' => 2070,
                'name' => 'Mechi Zone',
            ),
            492 => 
            array (
                'country_id' => 154,
                'id' => 2071,
                'name' => 'Bheri Zone',
            ),
            493 => 
            array (
                'country_id' => 154,
                'id' => 2072,
                'name' => 'Kosi Zone',
            ),
            494 => 
            array (
                'country_id' => 154,
                'id' => 2073,
                'name' => 'Central Region',
            ),
            495 => 
            array (
                'country_id' => 154,
                'id' => 2074,
                'name' => 'Lumbini Zone',
            ),
            496 => 
            array (
                'country_id' => 154,
                'id' => 2075,
                'name' => 'Narayani Zone',
            ),
            497 => 
            array (
                'country_id' => 154,
                'id' => 2076,
                'name' => 'Janakpur Zone',
            ),
            498 => 
            array (
                'country_id' => 154,
                'id' => 2077,
                'name' => 'Rapti Zone',
            ),
            499 => 
            array (
                'country_id' => 154,
                'id' => 2078,
                'name' => 'Seti Zone',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 154,
                'id' => 2079,
                'name' => 'Karnali Zone',
            ),
            1 => 
            array (
                'country_id' => 154,
                'id' => 2080,
                'name' => 'Dhaulagiri Zone',
            ),
            2 => 
            array (
                'country_id' => 154,
                'id' => 2081,
                'name' => 'Gandaki Zone',
            ),
            3 => 
            array (
                'country_id' => 154,
                'id' => 2082,
                'name' => 'Bagmati Zone',
            ),
            4 => 
            array (
                'country_id' => 154,
                'id' => 2083,
                'name' => 'Mahakali Zone',
            ),
            5 => 
            array (
                'country_id' => 154,
                'id' => 2084,
                'name' => 'Sagarmatha Zone',
            ),
            6 => 
            array (
                'country_id' => 206,
                'id' => 2085,
                'name' => 'Unity',
            ),
            7 => 
            array (
                'country_id' => 206,
                'id' => 2086,
                'name' => 'Upper Nile',
            ),
            8 => 
            array (
                'country_id' => 206,
                'id' => 2087,
                'name' => 'Warrap',
            ),
            9 => 
            array (
                'country_id' => 206,
                'id' => 2088,
                'name' => 'Northern Bahr el Ghazal',
            ),
            10 => 
            array (
                'country_id' => 206,
                'id' => 2089,
                'name' => 'Western Equatoria',
            ),
            11 => 
            array (
                'country_id' => 206,
                'id' => 2090,
                'name' => 'Lakes',
            ),
            12 => 
            array (
                'country_id' => 206,
                'id' => 2091,
                'name' => 'Western Bahr el Ghazal',
            ),
            13 => 
            array (
                'country_id' => 206,
                'id' => 2092,
                'name' => 'Central Equatoria',
            ),
            14 => 
            array (
                'country_id' => 206,
                'id' => 2093,
                'name' => 'Eastern Equatoria',
            ),
            15 => 
            array (
                'country_id' => 206,
                'id' => 2094,
                'name' => 'Jonglei State',
            ),
            16 => 
            array (
                'country_id' => 85,
                'id' => 2095,
                'name' => 'Karditsa Regional Unit',
            ),
            17 => 
            array (
                'country_id' => 85,
                'id' => 2096,
                'name' => 'West Greece Region',
            ),
            18 => 
            array (
                'country_id' => 85,
                'id' => 2097,
                'name' => 'Thessaloniki Regional Unit',
            ),
            19 => 
            array (
                'country_id' => 85,
                'id' => 2098,
                'name' => 'Arcadia Prefecture',
            ),
            20 => 
            array (
                'country_id' => 85,
                'id' => 2099,
                'name' => 'Imathia Regional Unit',
            ),
            21 => 
            array (
                'country_id' => 85,
                'id' => 2100,
                'name' => 'Kastoria Regional Unit',
            ),
            22 => 
            array (
                'country_id' => 85,
                'id' => 2101,
                'name' => 'Euboea',
            ),
            23 => 
            array (
                'country_id' => 85,
                'id' => 2102,
                'name' => 'Grevena Prefecture',
            ),
            24 => 
            array (
                'country_id' => 85,
                'id' => 2103,
                'name' => 'Preveza Prefecture',
            ),
            25 => 
            array (
                'country_id' => 85,
                'id' => 2104,
                'name' => 'Lefkada Regional Unit',
            ),
            26 => 
            array (
                'country_id' => 85,
                'id' => 2105,
                'name' => 'Argolis Regional Unit',
            ),
            27 => 
            array (
                'country_id' => 85,
                'id' => 2106,
                'name' => 'Laconia',
            ),
            28 => 
            array (
                'country_id' => 85,
                'id' => 2107,
                'name' => 'Pella Regional Unit',
            ),
            29 => 
            array (
                'country_id' => 85,
                'id' => 2108,
                'name' => 'West Macedonia Region',
            ),
            30 => 
            array (
                'country_id' => 85,
                'id' => 2109,
                'name' => 'Crete Region',
            ),
            31 => 
            array (
                'country_id' => 85,
                'id' => 2110,
                'name' => 'Epirus Region',
            ),
            32 => 
            array (
                'country_id' => 85,
                'id' => 2111,
                'name' => 'Kilkis Regional Unit',
            ),
            33 => 
            array (
                'country_id' => 85,
                'id' => 2112,
                'name' => 'Kozani Prefecture',
            ),
            34 => 
            array (
                'country_id' => 85,
                'id' => 2113,
                'name' => 'Ioannina Regional Unit',
            ),
            35 => 
            array (
                'country_id' => 85,
                'id' => 2114,
                'name' => 'Phthiotis Prefecture',
            ),
            36 => 
            array (
                'country_id' => 85,
                'id' => 2115,
                'name' => 'Chania Regional Unit',
            ),
            37 => 
            array (
                'country_id' => 85,
                'id' => 2116,
                'name' => 'Achaea Regional Unit',
            ),
            38 => 
            array (
                'country_id' => 85,
                'id' => 2117,
                'name' => 'East Macedonia and Thrace',
            ),
            39 => 
            array (
                'country_id' => 85,
                'id' => 2118,
                'name' => 'South Aegean',
            ),
            40 => 
            array (
                'country_id' => 85,
                'id' => 2119,
                'name' => 'Peloponnese Region',
            ),
            41 => 
            array (
                'country_id' => 85,
                'id' => 2120,
                'name' => 'East Attica Regional Unit',
            ),
            42 => 
            array (
                'country_id' => 85,
                'id' => 2121,
                'name' => 'Serres Prefecture',
            ),
            43 => 
            array (
                'country_id' => 85,
                'id' => 2122,
                'name' => 'Attica Region',
            ),
            44 => 
            array (
                'country_id' => 85,
                'id' => 2123,
                'name' => 'Aetolia-Acarnania Regional Unit',
            ),
            45 => 
            array (
                'country_id' => 85,
                'id' => 2124,
                'name' => 'Corfu Prefecture',
            ),
            46 => 
            array (
                'country_id' => 85,
                'id' => 2125,
                'name' => 'Central Macedonia',
            ),
            47 => 
            array (
                'country_id' => 85,
                'id' => 2126,
                'name' => 'Boeotia Regional Unit',
            ),
            48 => 
            array (
                'country_id' => 85,
                'id' => 2127,
                'name' => 'Kefalonia Prefecture',
            ),
            49 => 
            array (
                'country_id' => 85,
                'id' => 2128,
                'name' => 'Central Greece Region',
            ),
            50 => 
            array (
                'country_id' => 85,
                'id' => 2129,
                'name' => 'Corinthia Regional Unit',
            ),
            51 => 
            array (
                'country_id' => 85,
                'id' => 2130,
                'name' => 'Drama Regional Unit',
            ),
            52 => 
            array (
                'country_id' => 85,
                'id' => 2131,
                'name' => 'Ionian Islands Region',
            ),
            53 => 
            array (
                'country_id' => 85,
                'id' => 2132,
                'name' => 'Larissa Prefecture',
            ),
            54 => 
            array (
                'country_id' => 151,
                'id' => 2133,
                'name' => 'Kayin State',
            ),
            55 => 
            array (
                'country_id' => 151,
                'id' => 2134,
                'name' => 'Mandalay Region',
            ),
            56 => 
            array (
                'country_id' => 151,
                'id' => 2135,
                'name' => 'Yangon Region',
            ),
            57 => 
            array (
                'country_id' => 151,
                'id' => 2136,
                'name' => 'Magway Region',
            ),
            58 => 
            array (
                'country_id' => 151,
                'id' => 2137,
                'name' => 'Chin State',
            ),
            59 => 
            array (
                'country_id' => 151,
                'id' => 2138,
                'name' => 'Rakhine State',
            ),
            60 => 
            array (
                'country_id' => 151,
                'id' => 2139,
                'name' => 'Shan State',
            ),
            61 => 
            array (
                'country_id' => 151,
                'id' => 2140,
                'name' => 'Tanintharyi Region',
            ),
            62 => 
            array (
                'country_id' => 151,
                'id' => 2141,
                'name' => 'Bago',
            ),
            63 => 
            array (
                'country_id' => 151,
                'id' => 2142,
                'name' => 'Ayeyarwady Region',
            ),
            64 => 
            array (
                'country_id' => 151,
                'id' => 2143,
                'name' => 'Kachin State',
            ),
            65 => 
            array (
                'country_id' => 151,
                'id' => 2144,
                'name' => 'Kayah State',
            ),
            66 => 
            array (
                'country_id' => 151,
                'id' => 2145,
                'name' => 'Sagaing Region',
            ),
            67 => 
            array (
                'country_id' => 151,
                'id' => 2146,
                'name' => 'Naypyidaw Union Territory',
            ),
            68 => 
            array (
                'country_id' => 151,
                'id' => 2147,
                'name' => 'Mon State',
            ),
            69 => 
            array (
                'country_id' => 225,
                'id' => 2148,
                'name' => 'Bartın',
            ),
            70 => 
            array (
                'country_id' => 225,
                'id' => 2149,
                'name' => 'Kütahya',
            ),
            71 => 
            array (
                'country_id' => 225,
                'id' => 2150,
                'name' => 'Sakarya',
            ),
            72 => 
            array (
                'country_id' => 225,
                'id' => 2151,
                'name' => 'Edirne',
            ),
            73 => 
            array (
                'country_id' => 225,
                'id' => 2152,
                'name' => 'Van',
            ),
            74 => 
            array (
                'country_id' => 225,
                'id' => 2153,
                'name' => 'Bingöl',
            ),
            75 => 
            array (
                'country_id' => 225,
                'id' => 2154,
                'name' => 'Kilis',
            ),
            76 => 
            array (
                'country_id' => 225,
                'id' => 2155,
                'name' => 'Adıyaman',
            ),
            77 => 
            array (
                'country_id' => 225,
                'id' => 2156,
                'name' => 'Mersin',
            ),
            78 => 
            array (
                'country_id' => 225,
                'id' => 2157,
                'name' => 'Denizli',
            ),
            79 => 
            array (
                'country_id' => 225,
                'id' => 2158,
                'name' => 'Malatya',
            ),
            80 => 
            array (
                'country_id' => 225,
                'id' => 2159,
                'name' => 'Elazığ',
            ),
            81 => 
            array (
                'country_id' => 225,
                'id' => 2160,
                'name' => 'Erzincan',
            ),
            82 => 
            array (
                'country_id' => 225,
                'id' => 2161,
                'name' => 'Amasya',
            ),
            83 => 
            array (
                'country_id' => 225,
                'id' => 2162,
                'name' => 'Muş',
            ),
            84 => 
            array (
                'country_id' => 225,
                'id' => 2163,
                'name' => 'Bursa',
            ),
            85 => 
            array (
                'country_id' => 225,
                'id' => 2164,
                'name' => 'Eskişehir',
            ),
            86 => 
            array (
                'country_id' => 225,
                'id' => 2165,
                'name' => 'Erzurum',
            ),
            87 => 
            array (
                'country_id' => 225,
                'id' => 2166,
                'name' => 'Iğdır',
            ),
            88 => 
            array (
                'country_id' => 225,
                'id' => 2167,
                'name' => 'Tekirdağ',
            ),
            89 => 
            array (
                'country_id' => 225,
                'id' => 2168,
                'name' => 'Çankırı',
            ),
            90 => 
            array (
                'country_id' => 225,
                'id' => 2169,
                'name' => 'Antalya',
            ),
            91 => 
            array (
                'country_id' => 225,
                'id' => 2170,
                'name' => 'İstanbul',
            ),
            92 => 
            array (
                'country_id' => 225,
                'id' => 2171,
                'name' => 'Konya',
            ),
            93 => 
            array (
                'country_id' => 225,
                'id' => 2172,
                'name' => 'Bolu',
            ),
            94 => 
            array (
                'country_id' => 225,
                'id' => 2173,
                'name' => 'Çorum',
            ),
            95 => 
            array (
                'country_id' => 225,
                'id' => 2174,
                'name' => 'Ordu',
            ),
            96 => 
            array (
                'country_id' => 225,
                'id' => 2175,
                'name' => 'Balıkesir',
            ),
            97 => 
            array (
                'country_id' => 225,
                'id' => 2176,
                'name' => 'Kırklareli',
            ),
            98 => 
            array (
                'country_id' => 225,
                'id' => 2177,
                'name' => 'Bayburt',
            ),
            99 => 
            array (
                'country_id' => 225,
                'id' => 2178,
                'name' => 'Kırıkkale',
            ),
            100 => 
            array (
                'country_id' => 225,
                'id' => 2179,
                'name' => 'Afyonkarahisar',
            ),
            101 => 
            array (
                'country_id' => 225,
                'id' => 2180,
                'name' => 'Kırşehir',
            ),
            102 => 
            array (
                'country_id' => 225,
                'id' => 2181,
                'name' => 'Sivas',
            ),
            103 => 
            array (
                'country_id' => 225,
                'id' => 2182,
                'name' => 'Muğla',
            ),
            104 => 
            array (
                'country_id' => 225,
                'id' => 2183,
                'name' => 'Şanlıurfa',
            ),
            105 => 
            array (
                'country_id' => 225,
                'id' => 2184,
                'name' => 'Karaman',
            ),
            106 => 
            array (
                'country_id' => 225,
                'id' => 2185,
                'name' => 'Ardahan',
            ),
            107 => 
            array (
                'country_id' => 225,
                'id' => 2186,
                'name' => 'Giresun',
            ),
            108 => 
            array (
                'country_id' => 225,
                'id' => 2187,
                'name' => 'Aydın',
            ),
            109 => 
            array (
                'country_id' => 225,
                'id' => 2188,
                'name' => 'Yozgat',
            ),
            110 => 
            array (
                'country_id' => 225,
                'id' => 2189,
                'name' => 'Niğde',
            ),
            111 => 
            array (
                'country_id' => 225,
                'id' => 2190,
                'name' => 'Hakkâri',
            ),
            112 => 
            array (
                'country_id' => 225,
                'id' => 2191,
                'name' => 'Artvin',
            ),
            113 => 
            array (
                'country_id' => 225,
                'id' => 2192,
                'name' => 'Tunceli',
            ),
            114 => 
            array (
                'country_id' => 225,
                'id' => 2193,
                'name' => 'Ağrı',
            ),
            115 => 
            array (
                'country_id' => 225,
                'id' => 2194,
                'name' => 'Batman',
            ),
            116 => 
            array (
                'country_id' => 225,
                'id' => 2195,
                'name' => 'Kocaeli',
            ),
            117 => 
            array (
                'country_id' => 225,
                'id' => 2196,
                'name' => 'Nevşehir',
            ),
            118 => 
            array (
                'country_id' => 225,
                'id' => 2197,
                'name' => 'Kastamonu',
            ),
            119 => 
            array (
                'country_id' => 225,
                'id' => 2198,
                'name' => 'Manisa',
            ),
            120 => 
            array (
                'country_id' => 225,
                'id' => 2199,
                'name' => 'Tokat',
            ),
            121 => 
            array (
                'country_id' => 225,
                'id' => 2200,
                'name' => 'Kayseri',
            ),
            122 => 
            array (
                'country_id' => 225,
                'id' => 2201,
                'name' => 'Uşak',
            ),
            123 => 
            array (
                'country_id' => 225,
                'id' => 2202,
                'name' => 'Düzce',
            ),
            124 => 
            array (
                'country_id' => 225,
                'id' => 2203,
                'name' => 'Gaziantep',
            ),
            125 => 
            array (
                'country_id' => 225,
                'id' => 2204,
                'name' => 'Gümüşhane',
            ),
            126 => 
            array (
                'country_id' => 225,
                'id' => 2205,
                'name' => 'İzmir',
            ),
            127 => 
            array (
                'country_id' => 225,
                'id' => 2206,
                'name' => 'Trabzon',
            ),
            128 => 
            array (
                'country_id' => 225,
                'id' => 2207,
                'name' => 'Siirt',
            ),
            129 => 
            array (
                'country_id' => 225,
                'id' => 2208,
                'name' => 'Kars',
            ),
            130 => 
            array (
                'country_id' => 225,
                'id' => 2209,
                'name' => 'Burdur',
            ),
            131 => 
            array (
                'country_id' => 225,
                'id' => 2210,
                'name' => 'Aksaray',
            ),
            132 => 
            array (
                'country_id' => 225,
                'id' => 2211,
                'name' => 'Hatay',
            ),
            133 => 
            array (
                'country_id' => 225,
                'id' => 2212,
                'name' => 'Adana',
            ),
            134 => 
            array (
                'country_id' => 225,
                'id' => 2213,
                'name' => 'Zonguldak',
            ),
            135 => 
            array (
                'country_id' => 225,
                'id' => 2214,
                'name' => 'Osmaniye',
            ),
            136 => 
            array (
                'country_id' => 225,
                'id' => 2215,
                'name' => 'Bitlis',
            ),
            137 => 
            array (
                'country_id' => 225,
                'id' => 2216,
                'name' => 'Çanakkale',
            ),
            138 => 
            array (
                'country_id' => 225,
                'id' => 2217,
                'name' => 'Ankara',
            ),
            139 => 
            array (
                'country_id' => 225,
                'id' => 2218,
                'name' => 'Yalova',
            ),
            140 => 
            array (
                'country_id' => 225,
                'id' => 2219,
                'name' => 'Rize',
            ),
            141 => 
            array (
                'country_id' => 225,
                'id' => 2220,
                'name' => 'Samsun',
            ),
            142 => 
            array (
                'country_id' => 225,
                'id' => 2221,
                'name' => 'Bilecik',
            ),
            143 => 
            array (
                'country_id' => 225,
                'id' => 2222,
                'name' => 'Isparta',
            ),
            144 => 
            array (
                'country_id' => 225,
                'id' => 2223,
                'name' => 'Karabük',
            ),
            145 => 
            array (
                'country_id' => 225,
                'id' => 2224,
                'name' => 'Mardin',
            ),
            146 => 
            array (
                'country_id' => 225,
                'id' => 2225,
                'name' => 'Şırnak',
            ),
            147 => 
            array (
                'country_id' => 225,
                'id' => 2226,
                'name' => 'Diyarbakır',
            ),
            148 => 
            array (
                'country_id' => 225,
                'id' => 2227,
                'name' => 'Kahramanmaraş',
            ),
            149 => 
            array (
                'country_id' => 177,
                'id' => 2228,
                'name' => 'Lisbon',
            ),
            150 => 
            array (
                'country_id' => 177,
                'id' => 2229,
                'name' => 'Bragança',
            ),
            151 => 
            array (
                'country_id' => 177,
                'id' => 2230,
                'name' => 'Beja',
            ),
            152 => 
            array (
                'country_id' => 177,
                'id' => 2231,
                'name' => 'Madeira',
            ),
            153 => 
            array (
                'country_id' => 177,
                'id' => 2232,
                'name' => 'Portalegre',
            ),
            154 => 
            array (
                'country_id' => 177,
                'id' => 2233,
                'name' => 'Açores',
            ),
            155 => 
            array (
                'country_id' => 177,
                'id' => 2234,
                'name' => 'Vila Real',
            ),
            156 => 
            array (
                'country_id' => 177,
                'id' => 2235,
                'name' => 'Aveiro',
            ),
            157 => 
            array (
                'country_id' => 177,
                'id' => 2236,
                'name' => 'Évora',
            ),
            158 => 
            array (
                'country_id' => 177,
                'id' => 2237,
                'name' => 'Viseu',
            ),
            159 => 
            array (
                'country_id' => 177,
                'id' => 2238,
                'name' => 'Santarém',
            ),
            160 => 
            array (
                'country_id' => 177,
                'id' => 2239,
                'name' => 'Faro',
            ),
            161 => 
            array (
                'country_id' => 177,
                'id' => 2240,
                'name' => 'Leiria',
            ),
            162 => 
            array (
                'country_id' => 177,
                'id' => 2241,
                'name' => 'Castelo Branco',
            ),
            163 => 
            array (
                'country_id' => 177,
                'id' => 2242,
                'name' => 'Setúbal',
            ),
            164 => 
            array (
                'country_id' => 177,
                'id' => 2243,
                'name' => 'Porto',
            ),
            165 => 
            array (
                'country_id' => 177,
                'id' => 2244,
                'name' => 'Braga',
            ),
            166 => 
            array (
                'country_id' => 177,
                'id' => 2245,
                'name' => 'Viana do Castelo',
            ),
            167 => 
            array (
                'country_id' => 177,
                'id' => 2246,
                'name' => 'Coimbra',
            ),
            168 => 
            array (
                'country_id' => 45,
                'id' => 2247,
                'name' => 'Zhejiang',
            ),
            169 => 
            array (
                'country_id' => 45,
                'id' => 2248,
                'name' => 'Fujian',
            ),
            170 => 
            array (
                'country_id' => 45,
                'id' => 2249,
                'name' => 'Shanghai',
            ),
            171 => 
            array (
                'country_id' => 45,
                'id' => 2250,
                'name' => 'Jiangsu',
            ),
            172 => 
            array (
                'country_id' => 45,
                'id' => 2251,
                'name' => 'Anhui',
            ),
            173 => 
            array (
                'country_id' => 45,
                'id' => 2252,
                'name' => 'Shandong',
            ),
            174 => 
            array (
                'country_id' => 45,
                'id' => 2253,
                'name' => 'Jilin',
            ),
            175 => 
            array (
                'country_id' => 45,
                'id' => 2254,
                'name' => 'Shanxi',
            ),
            176 => 
            array (
                'country_id' => 45,
                'id' => 2255,
                'name' => 'Taiwan',
            ),
            177 => 
            array (
                'country_id' => 45,
                'id' => 2256,
                'name' => 'Jiangxi',
            ),
            178 => 
            array (
                'country_id' => 45,
                'id' => 2257,
                'name' => 'Beijing',
            ),
            179 => 
            array (
                'country_id' => 45,
                'id' => 2258,
                'name' => 'Hunan',
            ),
            180 => 
            array (
                'country_id' => 45,
                'id' => 2259,
                'name' => 'Henan',
            ),
            181 => 
            array (
                'country_id' => 45,
                'id' => 2260,
                'name' => 'Yunnan',
            ),
            182 => 
            array (
                'country_id' => 45,
                'id' => 2261,
                'name' => 'Guizhou',
            ),
            183 => 
            array (
                'country_id' => 45,
                'id' => 2262,
                'name' => 'Ningxia Huizu',
            ),
            184 => 
            array (
                'country_id' => 45,
                'id' => 2263,
                'name' => 'Xinjiang',
            ),
            185 => 
            array (
                'country_id' => 45,
                'id' => 2264,
                'name' => 'Xizang',
            ),
            186 => 
            array (
                'country_id' => 45,
                'id' => 2265,
                'name' => 'Heilongjiang',
            ),
            187 => 
            array (
                'country_id' => 45,
                'id' => 2266,
                'name' => 'Macau SAR',
            ),
            188 => 
            array (
                'country_id' => 45,
                'id' => 2267,
                'name' => 'Hong Kong SAR',
            ),
            189 => 
            array (
                'country_id' => 45,
                'id' => 2268,
                'name' => 'Liaoning',
            ),
            190 => 
            array (
                'country_id' => 45,
                'id' => 2269,
                'name' => 'Inner Mongolia',
            ),
            191 => 
            array (
                'country_id' => 45,
                'id' => 2270,
                'name' => 'Qinghai',
            ),
            192 => 
            array (
                'country_id' => 45,
                'id' => 2271,
                'name' => 'Chongqing',
            ),
            193 => 
            array (
                'country_id' => 45,
                'id' => 2272,
                'name' => 'Shaanxi',
            ),
            194 => 
            array (
                'country_id' => 45,
                'id' => 2273,
                'name' => 'Hainan',
            ),
            195 => 
            array (
                'country_id' => 45,
                'id' => 2274,
                'name' => 'Hubei',
            ),
            196 => 
            array (
                'country_id' => 45,
                'id' => 2275,
                'name' => 'Gansu',
            ),
            197 => 
            array (
                'country_id' => 45,
                'id' => 2276,
                'name' => 'Tianjin',
            ),
            198 => 
            array (
                'country_id' => 45,
                'id' => 2277,
                'name' => 'Sichuan',
            ),
            199 => 
            array (
                'country_id' => 45,
                'id' => 2278,
                'name' => 'Guangxi Zhuang',
            ),
            200 => 
            array (
                'country_id' => 45,
                'id' => 2279,
                'name' => 'Guangdong',
            ),
            201 => 
            array (
                'country_id' => 45,
                'id' => 2280,
                'name' => 'Hebei',
            ),
            202 => 
            array (
                'country_id' => 121,
                'id' => 2281,
                'name' => 'South',
            ),
            203 => 
            array (
                'country_id' => 121,
                'id' => 2282,
                'name' => 'Mount Lebanon',
            ),
            204 => 
            array (
                'country_id' => 121,
                'id' => 2283,
                'name' => 'Baalbek-Hermel',
            ),
            205 => 
            array (
                'country_id' => 121,
                'id' => 2284,
                'name' => 'North',
            ),
            206 => 
            array (
                'country_id' => 121,
                'id' => 2285,
                'name' => 'Akkar',
            ),
            207 => 
            array (
                'country_id' => 121,
                'id' => 2286,
                'name' => 'Beirut',
            ),
            208 => 
            array (
                'country_id' => 121,
                'id' => 2287,
                'name' => 'Beqaa',
            ),
            209 => 
            array (
                'country_id' => 121,
                'id' => 2288,
                'name' => 'Nabatieh',
            ),
            210 => 
            array (
                'country_id' => 232,
                'id' => 2289,
                'name' => 'Isle of Wight',
            ),
            211 => 
            array (
                'country_id' => 232,
                'id' => 2290,
                'name' => 'St Helens',
            ),
            212 => 
            array (
                'country_id' => 232,
                'id' => 2291,
                'name' => 'London Borough of Brent',
            ),
            213 => 
            array (
                'country_id' => 232,
                'id' => 2292,
                'name' => 'Walsall',
            ),
            214 => 
            array (
                'country_id' => 232,
                'id' => 2293,
                'name' => 'Trafford',
            ),
            215 => 
            array (
                'country_id' => 232,
                'id' => 2294,
                'name' => 'City of Southampton',
            ),
            216 => 
            array (
                'country_id' => 232,
                'id' => 2295,
                'name' => 'Sheffield',
            ),
            217 => 
            array (
                'country_id' => 232,
                'id' => 2296,
                'name' => 'West Sussex',
            ),
            218 => 
            array (
                'country_id' => 232,
                'id' => 2297,
                'name' => 'City of Peterborough',
            ),
            219 => 
            array (
                'country_id' => 232,
                'id' => 2298,
                'name' => 'Caerphilly County Borough',
            ),
            220 => 
            array (
                'country_id' => 232,
                'id' => 2299,
                'name' => 'Vale of Glamorgan',
            ),
            221 => 
            array (
                'country_id' => 232,
                'id' => 2300,
                'name' => 'Shetland Islands',
            ),
            222 => 
            array (
                'country_id' => 232,
                'id' => 2301,
                'name' => 'Rhondda Cynon Taf',
            ),
            223 => 
            array (
                'country_id' => 232,
                'id' => 2302,
                'name' => 'Poole',
            ),
            224 => 
            array (
                'country_id' => 232,
                'id' => 2303,
                'name' => 'Central Bedfordshire',
            ),
            225 => 
            array (
                'country_id' => 232,
                'id' => 2304,
                'name' => 'Down District Council',
            ),
            226 => 
            array (
                'country_id' => 232,
                'id' => 2305,
                'name' => 'City of Portsmouth',
            ),
            227 => 
            array (
                'country_id' => 232,
                'id' => 2306,
                'name' => 'London Borough of Haringey',
            ),
            228 => 
            array (
                'country_id' => 232,
                'id' => 2307,
                'name' => 'London Borough of Bexley',
            ),
            229 => 
            array (
                'country_id' => 232,
                'id' => 2308,
                'name' => 'Rotherham',
            ),
            230 => 
            array (
                'country_id' => 232,
                'id' => 2309,
                'name' => 'Hartlepool',
            ),
            231 => 
            array (
                'country_id' => 232,
                'id' => 2310,
                'name' => 'Telford and Wrekin',
            ),
            232 => 
            array (
                'country_id' => 232,
                'id' => 2311,
                'name' => 'Belfast district',
            ),
            233 => 
            array (
                'country_id' => 232,
                'id' => 2312,
                'name' => 'Cornwall',
            ),
            234 => 
            array (
                'country_id' => 232,
                'id' => 2313,
                'name' => 'London Borough of Sutton',
            ),
            235 => 
            array (
                'country_id' => 232,
                'id' => 2314,
                'name' => 'Omagh District Council',
            ),
            236 => 
            array (
                'country_id' => 232,
                'id' => 2315,
                'name' => 'Banbridge',
            ),
            237 => 
            array (
                'country_id' => 232,
                'id' => 2316,
                'name' => 'Causeway Coast and Glens',
            ),
            238 => 
            array (
                'country_id' => 232,
                'id' => 2317,
                'name' => 'Newtownabbey Borough Council',
            ),
            239 => 
            array (
                'country_id' => 232,
                'id' => 2318,
                'name' => 'City of Leicester',
            ),
            240 => 
            array (
                'country_id' => 232,
                'id' => 2319,
                'name' => 'London Borough of Islington',
            ),
            241 => 
            array (
                'country_id' => 232,
                'id' => 2320,
                'name' => 'Metropolitan Borough of Wigan',
            ),
            242 => 
            array (
                'country_id' => 232,
                'id' => 2321,
                'name' => 'Oxfordshire',
            ),
            243 => 
            array (
                'country_id' => 232,
                'id' => 2322,
                'name' => 'Magherafelt District Council',
            ),
            244 => 
            array (
                'country_id' => 232,
                'id' => 2323,
                'name' => 'Southend-on-Sea',
            ),
            245 => 
            array (
                'country_id' => 232,
                'id' => 2324,
                'name' => 'Armagh, Banbridge and Craigavon',
            ),
            246 => 
            array (
                'country_id' => 232,
                'id' => 2325,
                'name' => 'Perth and Kinross',
            ),
            247 => 
            array (
                'country_id' => 232,
                'id' => 2326,
                'name' => 'London Borough of Waltham Forest',
            ),
            248 => 
            array (
                'country_id' => 232,
                'id' => 2327,
                'name' => 'Rochdale',
            ),
            249 => 
            array (
                'country_id' => 232,
                'id' => 2328,
                'name' => 'Merthyr Tydfil County Borough',
            ),
            250 => 
            array (
                'country_id' => 232,
                'id' => 2329,
                'name' => 'Blackburn with Darwen',
            ),
            251 => 
            array (
                'country_id' => 232,
                'id' => 2330,
                'name' => 'Knowsley',
            ),
            252 => 
            array (
                'country_id' => 232,
                'id' => 2331,
                'name' => 'Armagh City and District Council',
            ),
            253 => 
            array (
                'country_id' => 232,
                'id' => 2332,
                'name' => 'Middlesbrough',
            ),
            254 => 
            array (
                'country_id' => 232,
                'id' => 2333,
                'name' => 'East Renfrewshire',
            ),
            255 => 
            array (
                'country_id' => 232,
                'id' => 2334,
                'name' => 'Cumbria',
            ),
            256 => 
            array (
                'country_id' => 232,
                'id' => 2335,
                'name' => 'Scotland',
            ),
            257 => 
            array (
                'country_id' => 232,
                'id' => 2336,
                'name' => 'England',
            ),
            258 => 
            array (
                'country_id' => 232,
                'id' => 2337,
                'name' => 'Northern Ireland',
            ),
            259 => 
            array (
                'country_id' => 232,
                'id' => 2338,
                'name' => 'Wales',
            ),
            260 => 
            array (
                'country_id' => 232,
                'id' => 2339,
                'name' => 'Bath and North East Somerset',
            ),
            261 => 
            array (
                'country_id' => 232,
                'id' => 2340,
                'name' => 'Liverpool',
            ),
            262 => 
            array (
                'country_id' => 232,
                'id' => 2341,
                'name' => 'Sandwell',
            ),
            263 => 
            array (
                'country_id' => 232,
                'id' => 2342,
                'name' => 'Bournemouth',
            ),
            264 => 
            array (
                'country_id' => 232,
                'id' => 2343,
                'name' => 'Isles of Scilly',
            ),
            265 => 
            array (
                'country_id' => 232,
                'id' => 2344,
                'name' => 'Falkirk',
            ),
            266 => 
            array (
                'country_id' => 232,
                'id' => 2345,
                'name' => 'Dorset',
            ),
            267 => 
            array (
                'country_id' => 232,
                'id' => 2346,
                'name' => 'Scottish Borders',
            ),
            268 => 
            array (
                'country_id' => 232,
                'id' => 2347,
                'name' => 'London Borough of Havering',
            ),
            269 => 
            array (
                'country_id' => 232,
                'id' => 2348,
                'name' => 'Moyle District Council',
            ),
            270 => 
            array (
                'country_id' => 232,
                'id' => 2349,
                'name' => 'London Borough of Camden',
            ),
            271 => 
            array (
                'country_id' => 232,
                'id' => 2350,
                'name' => 'Newry and Mourne District Council',
            ),
            272 => 
            array (
                'country_id' => 232,
                'id' => 2351,
                'name' => 'Neath Port Talbot County Borough',
            ),
            273 => 
            array (
                'country_id' => 232,
                'id' => 2352,
                'name' => 'Conwy County Borough',
            ),
            274 => 
            array (
                'country_id' => 232,
                'id' => 2353,
                'name' => 'Outer Hebrides',
            ),
            275 => 
            array (
                'country_id' => 232,
                'id' => 2354,
                'name' => 'West Lothian',
            ),
            276 => 
            array (
                'country_id' => 232,
                'id' => 2355,
                'name' => 'Lincolnshire',
            ),
            277 => 
            array (
                'country_id' => 232,
                'id' => 2356,
                'name' => 'London Borough of Barking and Dagenham',
            ),
            278 => 
            array (
                'country_id' => 232,
                'id' => 2357,
                'name' => 'City of Westminster',
            ),
            279 => 
            array (
                'country_id' => 232,
                'id' => 2358,
                'name' => 'London Borough of Lewisham',
            ),
            280 => 
            array (
                'country_id' => 232,
                'id' => 2359,
                'name' => 'City of Nottingham',
            ),
            281 => 
            array (
                'country_id' => 232,
                'id' => 2360,
                'name' => 'Moray',
            ),
            282 => 
            array (
                'country_id' => 232,
                'id' => 2361,
                'name' => 'Ballymoney',
            ),
            283 => 
            array (
                'country_id' => 232,
                'id' => 2362,
                'name' => 'South Lanarkshire',
            ),
            284 => 
            array (
                'country_id' => 232,
                'id' => 2363,
                'name' => 'Ballymena Borough',
            ),
            285 => 
            array (
                'country_id' => 232,
                'id' => 2364,
                'name' => 'Doncaster',
            ),
            286 => 
            array (
                'country_id' => 232,
                'id' => 2365,
                'name' => 'Northumberland',
            ),
            287 => 
            array (
                'country_id' => 232,
                'id' => 2366,
                'name' => 'Fermanagh and Omagh',
            ),
            288 => 
            array (
                'country_id' => 232,
                'id' => 2367,
                'name' => 'Tameside',
            ),
            289 => 
            array (
                'country_id' => 232,
                'id' => 2368,
                'name' => 'Royal Borough of Kensington and Chelsea',
            ),
            290 => 
            array (
                'country_id' => 232,
                'id' => 2369,
                'name' => 'Hertfordshire',
            ),
            291 => 
            array (
                'country_id' => 232,
                'id' => 2370,
                'name' => 'East Riding of Yorkshire',
            ),
            292 => 
            array (
                'country_id' => 232,
                'id' => 2371,
                'name' => 'Kirklees',
            ),
            293 => 
            array (
                'country_id' => 232,
                'id' => 2372,
                'name' => 'City of Sunderland',
            ),
            294 => 
            array (
                'country_id' => 232,
                'id' => 2373,
                'name' => 'Gloucestershire',
            ),
            295 => 
            array (
                'country_id' => 232,
                'id' => 2374,
                'name' => 'East Ayrshire',
            ),
            296 => 
            array (
                'country_id' => 232,
                'id' => 2375,
                'name' => 'United Kingdom',
            ),
            297 => 
            array (
                'country_id' => 232,
                'id' => 2376,
                'name' => 'London Borough of Hillingdon',
            ),
            298 => 
            array (
                'country_id' => 232,
                'id' => 2377,
                'name' => 'South Ayrshire',
            ),
            299 => 
            array (
                'country_id' => 232,
                'id' => 2378,
                'name' => 'Ascension Island',
            ),
            300 => 
            array (
                'country_id' => 232,
                'id' => 2379,
                'name' => 'Gwynedd',
            ),
            301 => 
            array (
                'country_id' => 232,
                'id' => 2380,
                'name' => 'London Borough of Hounslow',
            ),
            302 => 
            array (
                'country_id' => 232,
                'id' => 2381,
                'name' => 'Medway',
            ),
            303 => 
            array (
                'country_id' => 232,
                'id' => 2382,
                'name' => 'Limavady Borough Council',
            ),
            304 => 
            array (
                'country_id' => 232,
                'id' => 2383,
                'name' => 'Highland',
            ),
            305 => 
            array (
                'country_id' => 232,
                'id' => 2384,
                'name' => 'North East Lincolnshire',
            ),
            306 => 
            array (
                'country_id' => 232,
                'id' => 2385,
                'name' => 'London Borough of Harrow',
            ),
            307 => 
            array (
                'country_id' => 232,
                'id' => 2386,
                'name' => 'Somerset',
            ),
            308 => 
            array (
                'country_id' => 232,
                'id' => 2387,
                'name' => 'Angus',
            ),
            309 => 
            array (
                'country_id' => 232,
                'id' => 2388,
                'name' => 'Inverclyde',
            ),
            310 => 
            array (
                'country_id' => 232,
                'id' => 2389,
                'name' => 'Darlington',
            ),
            311 => 
            array (
                'country_id' => 232,
                'id' => 2390,
                'name' => 'London Borough of Tower Hamlets',
            ),
            312 => 
            array (
                'country_id' => 232,
                'id' => 2391,
                'name' => 'Wiltshire',
            ),
            313 => 
            array (
                'country_id' => 232,
                'id' => 2392,
                'name' => 'Argyll and Bute',
            ),
            314 => 
            array (
                'country_id' => 232,
                'id' => 2393,
                'name' => 'Strabane District Council',
            ),
            315 => 
            array (
                'country_id' => 232,
                'id' => 2394,
                'name' => 'Stockport',
            ),
            316 => 
            array (
                'country_id' => 232,
                'id' => 2395,
                'name' => 'Brighton and Hove',
            ),
            317 => 
            array (
                'country_id' => 232,
                'id' => 2396,
                'name' => 'London Borough of Lambeth',
            ),
            318 => 
            array (
                'country_id' => 232,
                'id' => 2397,
                'name' => 'London Borough of Redbridge',
            ),
            319 => 
            array (
                'country_id' => 232,
                'id' => 2398,
                'name' => 'Manchester',
            ),
            320 => 
            array (
                'country_id' => 232,
                'id' => 2399,
                'name' => 'Mid Ulster',
            ),
            321 => 
            array (
                'country_id' => 232,
                'id' => 2400,
                'name' => 'South Gloucestershire',
            ),
            322 => 
            array (
                'country_id' => 232,
                'id' => 2401,
                'name' => 'Aberdeenshire',
            ),
            323 => 
            array (
                'country_id' => 232,
                'id' => 2402,
                'name' => 'Monmouthshire',
            ),
            324 => 
            array (
                'country_id' => 232,
                'id' => 2403,
                'name' => 'Derbyshire',
            ),
            325 => 
            array (
                'country_id' => 232,
                'id' => 2404,
                'name' => 'Glasgow',
            ),
            326 => 
            array (
                'country_id' => 232,
                'id' => 2405,
                'name' => 'Buckinghamshire',
            ),
            327 => 
            array (
                'country_id' => 232,
                'id' => 2406,
                'name' => 'County Durham',
            ),
            328 => 
            array (
                'country_id' => 232,
                'id' => 2407,
                'name' => 'Shropshire',
            ),
            329 => 
            array (
                'country_id' => 232,
                'id' => 2408,
                'name' => 'Wirral',
            ),
            330 => 
            array (
                'country_id' => 232,
                'id' => 2409,
                'name' => 'South Tyneside',
            ),
            331 => 
            array (
                'country_id' => 232,
                'id' => 2410,
                'name' => 'Essex',
            ),
            332 => 
            array (
                'country_id' => 232,
                'id' => 2411,
                'name' => 'London Borough of Hackney',
            ),
            333 => 
            array (
                'country_id' => 232,
                'id' => 2412,
                'name' => 'Antrim and Newtownabbey',
            ),
            334 => 
            array (
                'country_id' => 232,
                'id' => 2413,
                'name' => 'City of Bristol',
            ),
            335 => 
            array (
                'country_id' => 232,
                'id' => 2414,
                'name' => 'East Sussex',
            ),
            336 => 
            array (
                'country_id' => 232,
                'id' => 2415,
                'name' => 'Dumfries and Galloway',
            ),
            337 => 
            array (
                'country_id' => 232,
                'id' => 2416,
                'name' => 'Milton Keynes',
            ),
            338 => 
            array (
                'country_id' => 232,
                'id' => 2417,
                'name' => 'Derry City Council',
            ),
            339 => 
            array (
                'country_id' => 232,
                'id' => 2418,
                'name' => 'London Borough of Newham',
            ),
            340 => 
            array (
                'country_id' => 232,
                'id' => 2419,
                'name' => 'Wokingham',
            ),
            341 => 
            array (
                'country_id' => 232,
                'id' => 2420,
                'name' => 'Warrington',
            ),
            342 => 
            array (
                'country_id' => 232,
                'id' => 2421,
                'name' => 'Stockton-on-Tees',
            ),
            343 => 
            array (
                'country_id' => 232,
                'id' => 2422,
                'name' => 'Swindon',
            ),
            344 => 
            array (
                'country_id' => 232,
                'id' => 2423,
                'name' => 'Cambridgeshire',
            ),
            345 => 
            array (
                'country_id' => 232,
                'id' => 2424,
                'name' => 'City of London',
            ),
            346 => 
            array (
                'country_id' => 232,
                'id' => 2425,
                'name' => 'Birmingham',
            ),
            347 => 
            array (
                'country_id' => 232,
                'id' => 2426,
                'name' => 'City of York',
            ),
            348 => 
            array (
                'country_id' => 232,
                'id' => 2427,
                'name' => 'Slough',
            ),
            349 => 
            array (
                'country_id' => 232,
                'id' => 2428,
                'name' => 'Edinburgh',
            ),
            350 => 
            array (
                'country_id' => 232,
                'id' => 2429,
                'name' => 'Mid and East Antrim',
            ),
            351 => 
            array (
                'country_id' => 232,
                'id' => 2430,
                'name' => 'North Somerset',
            ),
            352 => 
            array (
                'country_id' => 232,
                'id' => 2431,
                'name' => 'Gateshead',
            ),
            353 => 
            array (
                'country_id' => 232,
                'id' => 2432,
                'name' => 'London Borough of Southwark',
            ),
            354 => 
            array (
                'country_id' => 232,
                'id' => 2433,
                'name' => 'City and County of Swansea',
            ),
            355 => 
            array (
                'country_id' => 232,
                'id' => 2434,
                'name' => 'London Borough of Wandsworth',
            ),
            356 => 
            array (
                'country_id' => 232,
                'id' => 2435,
                'name' => 'Hampshire',
            ),
            357 => 
            array (
                'country_id' => 232,
                'id' => 2436,
                'name' => 'Wrexham County Borough',
            ),
            358 => 
            array (
                'country_id' => 232,
                'id' => 2437,
                'name' => 'Flintshire',
            ),
            359 => 
            array (
                'country_id' => 232,
                'id' => 2438,
                'name' => 'Coventry',
            ),
            360 => 
            array (
                'country_id' => 232,
                'id' => 2439,
                'name' => 'Carrickfergus Borough Council',
            ),
            361 => 
            array (
                'country_id' => 232,
                'id' => 2440,
                'name' => 'West Dunbartonshire',
            ),
            362 => 
            array (
                'country_id' => 232,
                'id' => 2441,
                'name' => 'Powys',
            ),
            363 => 
            array (
                'country_id' => 232,
                'id' => 2442,
                'name' => 'Cheshire West and Chester',
            ),
            364 => 
            array (
                'country_id' => 232,
                'id' => 2443,
                'name' => 'Renfrewshire',
            ),
            365 => 
            array (
                'country_id' => 232,
                'id' => 2444,
                'name' => 'Cheshire East',
            ),
            366 => 
            array (
                'country_id' => 232,
                'id' => 2445,
                'name' => 'Cookstown District Council',
            ),
            367 => 
            array (
                'country_id' => 232,
                'id' => 2446,
                'name' => 'Derry City and Strabane',
            ),
            368 => 
            array (
                'country_id' => 232,
                'id' => 2447,
                'name' => 'Staffordshire',
            ),
            369 => 
            array (
                'country_id' => 232,
                'id' => 2448,
                'name' => 'London Borough of Hammersmith and Fulham',
            ),
            370 => 
            array (
                'country_id' => 232,
                'id' => 2449,
                'name' => 'Craigavon Borough Council',
            ),
            371 => 
            array (
                'country_id' => 232,
                'id' => 2450,
                'name' => 'Clackmannanshire',
            ),
            372 => 
            array (
                'country_id' => 232,
                'id' => 2451,
                'name' => 'Blackpool',
            ),
            373 => 
            array (
                'country_id' => 232,
                'id' => 2452,
                'name' => 'Bridgend County Borough',
            ),
            374 => 
            array (
                'country_id' => 232,
                'id' => 2453,
                'name' => 'North Lincolnshire',
            ),
            375 => 
            array (
                'country_id' => 232,
                'id' => 2454,
                'name' => 'East Dunbartonshire',
            ),
            376 => 
            array (
                'country_id' => 232,
                'id' => 2455,
                'name' => 'Reading',
            ),
            377 => 
            array (
                'country_id' => 232,
                'id' => 2456,
                'name' => 'Nottinghamshire',
            ),
            378 => 
            array (
                'country_id' => 232,
                'id' => 2457,
                'name' => 'Dudley',
            ),
            379 => 
            array (
                'country_id' => 232,
                'id' => 2458,
                'name' => 'Newcastle upon Tyne',
            ),
            380 => 
            array (
                'country_id' => 232,
                'id' => 2459,
                'name' => 'Bury',
            ),
            381 => 
            array (
                'country_id' => 232,
                'id' => 2460,
                'name' => 'Lisburn and Castlereagh',
            ),
            382 => 
            array (
                'country_id' => 232,
                'id' => 2461,
                'name' => 'Coleraine Borough Council',
            ),
            383 => 
            array (
                'country_id' => 232,
                'id' => 2462,
                'name' => 'East Lothian',
            ),
            384 => 
            array (
                'country_id' => 232,
                'id' => 2463,
                'name' => 'Aberdeen',
            ),
            385 => 
            array (
                'country_id' => 232,
                'id' => 2464,
                'name' => 'Kent',
            ),
            386 => 
            array (
                'country_id' => 232,
                'id' => 2465,
                'name' => 'Wakefield',
            ),
            387 => 
            array (
                'country_id' => 232,
                'id' => 2466,
                'name' => 'Halton',
            ),
            388 => 
            array (
                'country_id' => 232,
                'id' => 2467,
                'name' => 'Suffolk',
            ),
            389 => 
            array (
                'country_id' => 232,
                'id' => 2468,
                'name' => 'Thurrock',
            ),
            390 => 
            array (
                'country_id' => 232,
                'id' => 2469,
                'name' => 'Solihull',
            ),
            391 => 
            array (
                'country_id' => 232,
                'id' => 2470,
                'name' => 'Bracknell Forest',
            ),
            392 => 
            array (
                'country_id' => 232,
                'id' => 2471,
                'name' => 'West Berkshire',
            ),
            393 => 
            array (
                'country_id' => 232,
                'id' => 2472,
                'name' => 'Rutland',
            ),
            394 => 
            array (
                'country_id' => 232,
                'id' => 2473,
                'name' => 'Norfolk',
            ),
            395 => 
            array (
                'country_id' => 232,
                'id' => 2474,
                'name' => 'Orkney Islands',
            ),
            396 => 
            array (
                'country_id' => 232,
                'id' => 2475,
                'name' => 'City of Kingston upon Hull',
            ),
            397 => 
            array (
                'country_id' => 232,
                'id' => 2476,
                'name' => 'London Borough of Enfield',
            ),
            398 => 
            array (
                'country_id' => 232,
                'id' => 2477,
                'name' => 'Oldham',
            ),
            399 => 
            array (
                'country_id' => 232,
                'id' => 2478,
                'name' => 'Torbay',
            ),
            400 => 
            array (
                'country_id' => 232,
                'id' => 2479,
                'name' => 'Fife',
            ),
            401 => 
            array (
                'country_id' => 232,
                'id' => 2480,
                'name' => 'Northamptonshire',
            ),
            402 => 
            array (
                'country_id' => 232,
                'id' => 2481,
                'name' => 'Royal Borough of Kingston upon Thames',
            ),
            403 => 
            array (
                'country_id' => 232,
                'id' => 2482,
                'name' => 'Windsor and Maidenhead',
            ),
            404 => 
            array (
                'country_id' => 232,
                'id' => 2483,
                'name' => 'London Borough of Merton',
            ),
            405 => 
            array (
                'country_id' => 232,
                'id' => 2484,
                'name' => 'Carmarthenshire',
            ),
            406 => 
            array (
                'country_id' => 232,
                'id' => 2485,
                'name' => 'City of Derby',
            ),
            407 => 
            array (
                'country_id' => 232,
                'id' => 2486,
                'name' => 'Pembrokeshire',
            ),
            408 => 
            array (
                'country_id' => 232,
                'id' => 2487,
                'name' => 'North Lanarkshire',
            ),
            409 => 
            array (
                'country_id' => 232,
                'id' => 2488,
                'name' => 'Stirling',
            ),
            410 => 
            array (
                'country_id' => 232,
                'id' => 2489,
                'name' => 'City of Wolverhampton',
            ),
            411 => 
            array (
                'country_id' => 232,
                'id' => 2490,
                'name' => 'London Borough of Bromley',
            ),
            412 => 
            array (
                'country_id' => 232,
                'id' => 2491,
                'name' => 'Devon',
            ),
            413 => 
            array (
                'country_id' => 232,
                'id' => 2492,
                'name' => 'Royal Borough of Greenwich',
            ),
            414 => 
            array (
                'country_id' => 232,
                'id' => 2493,
                'name' => 'Salford',
            ),
            415 => 
            array (
                'country_id' => 232,
                'id' => 2494,
                'name' => 'Lisburn City Council',
            ),
            416 => 
            array (
                'country_id' => 232,
                'id' => 2495,
                'name' => 'Lancashire',
            ),
            417 => 
            array (
                'country_id' => 232,
                'id' => 2496,
                'name' => 'Torfaen',
            ),
            418 => 
            array (
                'country_id' => 232,
                'id' => 2497,
                'name' => 'Denbighshire',
            ),
            419 => 
            array (
                'country_id' => 232,
                'id' => 2498,
                'name' => 'Ards',
            ),
            420 => 
            array (
                'country_id' => 232,
                'id' => 2499,
                'name' => 'Barnsley',
            ),
            421 => 
            array (
                'country_id' => 232,
                'id' => 2500,
                'name' => 'Herefordshire',
            ),
            422 => 
            array (
                'country_id' => 232,
                'id' => 2501,
                'name' => 'London Borough of Richmond upon Thames',
            ),
            423 => 
            array (
                'country_id' => 232,
                'id' => 2502,
                'name' => 'Saint Helena',
            ),
            424 => 
            array (
                'country_id' => 232,
                'id' => 2503,
                'name' => 'Leeds',
            ),
            425 => 
            array (
                'country_id' => 232,
                'id' => 2504,
                'name' => 'Bolton',
            ),
            426 => 
            array (
                'country_id' => 232,
                'id' => 2505,
                'name' => 'Warwickshire',
            ),
            427 => 
            array (
                'country_id' => 232,
                'id' => 2506,
                'name' => 'City of Stoke-on-Trent',
            ),
            428 => 
            array (
                'country_id' => 232,
                'id' => 2507,
                'name' => 'Bedford',
            ),
            429 => 
            array (
                'country_id' => 232,
                'id' => 2508,
                'name' => 'Dungannon and South Tyrone Borough Council',
            ),
            430 => 
            array (
                'country_id' => 232,
                'id' => 2509,
                'name' => 'Ceredigion',
            ),
            431 => 
            array (
                'country_id' => 232,
                'id' => 2510,
                'name' => 'Worcestershire',
            ),
            432 => 
            array (
                'country_id' => 232,
                'id' => 2511,
                'name' => 'Dundee',
            ),
            433 => 
            array (
                'country_id' => 232,
                'id' => 2512,
                'name' => 'London Borough of Croydon',
            ),
            434 => 
            array (
                'country_id' => 232,
                'id' => 2513,
                'name' => 'North Down Borough Council',
            ),
            435 => 
            array (
                'country_id' => 232,
                'id' => 2514,
                'name' => 'City of Plymouth',
            ),
            436 => 
            array (
                'country_id' => 232,
                'id' => 2515,
                'name' => 'Larne Borough Council',
            ),
            437 => 
            array (
                'country_id' => 232,
                'id' => 2516,
                'name' => 'Leicestershire',
            ),
            438 => 
            array (
                'country_id' => 232,
                'id' => 2517,
                'name' => 'Calderdale',
            ),
            439 => 
            array (
                'country_id' => 232,
                'id' => 2518,
                'name' => 'Sefton',
            ),
            440 => 
            array (
                'country_id' => 232,
                'id' => 2519,
                'name' => 'Midlothian',
            ),
            441 => 
            array (
                'country_id' => 232,
                'id' => 2520,
                'name' => 'London Borough of Barnet',
            ),
            442 => 
            array (
                'country_id' => 232,
                'id' => 2521,
                'name' => 'North Tyneside',
            ),
            443 => 
            array (
                'country_id' => 232,
                'id' => 2522,
                'name' => 'North Yorkshire',
            ),
            444 => 
            array (
                'country_id' => 232,
                'id' => 2523,
                'name' => 'Ards and North Down',
            ),
            445 => 
            array (
                'country_id' => 232,
                'id' => 2524,
                'name' => 'Newport',
            ),
            446 => 
            array (
                'country_id' => 232,
                'id' => 2525,
                'name' => 'Castlereagh',
            ),
            447 => 
            array (
                'country_id' => 232,
                'id' => 2526,
                'name' => 'Surrey',
            ),
            448 => 
            array (
                'country_id' => 232,
                'id' => 2527,
                'name' => 'Redcar and Cleveland',
            ),
            449 => 
            array (
                'country_id' => 232,
                'id' => 2528,
                'name' => 'City and County of Cardiff',
            ),
            450 => 
            array (
                'country_id' => 232,
                'id' => 2529,
                'name' => 'Bradford',
            ),
            451 => 
            array (
                'country_id' => 232,
                'id' => 2530,
                'name' => 'Blaenau Gwent County Borough',
            ),
            452 => 
            array (
                'country_id' => 232,
                'id' => 2531,
                'name' => 'Fermanagh District Council',
            ),
            453 => 
            array (
                'country_id' => 232,
                'id' => 2532,
                'name' => 'London Borough of Ealing',
            ),
            454 => 
            array (
                'country_id' => 232,
                'id' => 2533,
                'name' => 'Antrim',
            ),
            455 => 
            array (
                'country_id' => 232,
                'id' => 2534,
                'name' => 'Newry, Mourne and Down',
            ),
            456 => 
            array (
                'country_id' => 232,
                'id' => 2535,
                'name' => 'North Ayrshire',
            ),
            457 => 
            array (
                'country_id' => 236,
                'id' => 2536,
                'name' => 'Tashkent',
            ),
            458 => 
            array (
                'country_id' => 236,
                'id' => 2537,
                'name' => 'Namangan Region',
            ),
            459 => 
            array (
                'country_id' => 236,
                'id' => 2538,
                'name' => 'Fergana Region',
            ),
            460 => 
            array (
                'country_id' => 236,
                'id' => 2539,
                'name' => 'Xorazm Region',
            ),
            461 => 
            array (
                'country_id' => 236,
                'id' => 2540,
                'name' => 'Andijan Region',
            ),
            462 => 
            array (
                'country_id' => 236,
                'id' => 2541,
                'name' => 'Bukhara Region',
            ),
            463 => 
            array (
                'country_id' => 236,
                'id' => 2542,
                'name' => 'Navoiy Region',
            ),
            464 => 
            array (
                'country_id' => 236,
                'id' => 2543,
                'name' => 'Qashqadaryo Region',
            ),
            465 => 
            array (
                'country_id' => 236,
                'id' => 2544,
                'name' => 'Samarqand Region',
            ),
            466 => 
            array (
                'country_id' => 236,
                'id' => 2545,
                'name' => 'Jizzakh Region',
            ),
            467 => 
            array (
                'country_id' => 236,
                'id' => 2546,
                'name' => 'Surxondaryo Region',
            ),
            468 => 
            array (
                'country_id' => 236,
                'id' => 2547,
                'name' => 'Sirdaryo Region',
            ),
            469 => 
            array (
                'country_id' => 236,
                'id' => 2548,
                'name' => 'Karakalpakstan',
            ),
            470 => 
            array (
                'country_id' => 236,
                'id' => 2549,
                'name' => 'Tashkent Region',
            ),
            471 => 
            array (
                'country_id' => 224,
                'id' => 2550,
                'name' => 'Ariana',
            ),
            472 => 
            array (
                'country_id' => 224,
                'id' => 2551,
                'name' => 'Bizerte',
            ),
            473 => 
            array (
                'country_id' => 224,
                'id' => 2552,
                'name' => 'Jendouba',
            ),
            474 => 
            array (
                'country_id' => 224,
                'id' => 2553,
                'name' => 'Monastir',
            ),
            475 => 
            array (
                'country_id' => 224,
                'id' => 2554,
                'name' => 'Tunis',
            ),
            476 => 
            array (
                'country_id' => 224,
                'id' => 2555,
                'name' => 'Manouba',
            ),
            477 => 
            array (
                'country_id' => 224,
                'id' => 2556,
                'name' => 'Gafsa',
            ),
            478 => 
            array (
                'country_id' => 224,
                'id' => 2557,
                'name' => 'Sfax',
            ),
            479 => 
            array (
                'country_id' => 224,
                'id' => 2558,
                'name' => 'Gabès',
            ),
            480 => 
            array (
                'country_id' => 224,
                'id' => 2559,
                'name' => 'Tataouine',
            ),
            481 => 
            array (
                'country_id' => 224,
                'id' => 2560,
                'name' => 'Medenine',
            ),
            482 => 
            array (
                'country_id' => 224,
                'id' => 2561,
                'name' => 'Kef',
            ),
            483 => 
            array (
                'country_id' => 224,
                'id' => 2562,
                'name' => 'Kebili',
            ),
            484 => 
            array (
                'country_id' => 224,
                'id' => 2563,
                'name' => 'Siliana',
            ),
            485 => 
            array (
                'country_id' => 224,
                'id' => 2564,
                'name' => 'Kairouan',
            ),
            486 => 
            array (
                'country_id' => 224,
                'id' => 2565,
                'name' => 'Zaghouan',
            ),
            487 => 
            array (
                'country_id' => 224,
                'id' => 2566,
                'name' => 'Ben Arous',
            ),
            488 => 
            array (
                'country_id' => 224,
                'id' => 2567,
                'name' => 'Sidi Bouzid',
            ),
            489 => 
            array (
                'country_id' => 224,
                'id' => 2568,
                'name' => 'Mahdia',
            ),
            490 => 
            array (
                'country_id' => 224,
                'id' => 2569,
                'name' => 'Tozeur',
            ),
            491 => 
            array (
                'country_id' => 224,
                'id' => 2570,
                'name' => 'Kasserine',
            ),
            492 => 
            array (
                'country_id' => 224,
                'id' => 2571,
                'name' => 'Sousse',
            ),
            493 => 
            array (
                'country_id' => 224,
                'id' => 2572,
                'name' => 'Béja',
            ),
            494 => 
            array (
                'country_id' => 137,
                'id' => 2573,
                'name' => 'Ratak Chain',
            ),
            495 => 
            array (
                'country_id' => 137,
                'id' => 2574,
                'name' => 'Ralik Chain',
            ),
            496 => 
            array (
                'country_id' => 220,
                'id' => 2575,
                'name' => 'Centrale Region',
            ),
            497 => 
            array (
                'country_id' => 220,
                'id' => 2576,
                'name' => 'Maritime',
            ),
            498 => 
            array (
                'country_id' => 220,
                'id' => 2577,
                'name' => 'Plateaux Region',
            ),
            499 => 
            array (
                'country_id' => 220,
                'id' => 2578,
                'name' => 'Savanes Region',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 220,
                'id' => 2579,
                'name' => 'Kara Region',
            ),
            1 => 
            array (
                'country_id' => 143,
                'id' => 2580,
                'name' => 'Chuuk State',
            ),
            2 => 
            array (
                'country_id' => 143,
                'id' => 2581,
                'name' => 'Pohnpei State',
            ),
            3 => 
            array (
                'country_id' => 143,
                'id' => 2582,
                'name' => 'Yap State',
            ),
            4 => 
            array (
                'country_id' => 143,
                'id' => 2583,
                'name' => 'Kosrae State',
            ),
            5 => 
            array (
                'country_id' => 133,
                'id' => 2584,
                'name' => 'Vaavu Atoll',
            ),
            6 => 
            array (
                'country_id' => 133,
                'id' => 2585,
                'name' => 'Shaviyani Atoll',
            ),
            7 => 
            array (
                'country_id' => 133,
                'id' => 2586,
                'name' => 'Haa Alif Atoll',
            ),
            8 => 
            array (
                'country_id' => 133,
                'id' => 2587,
                'name' => 'Alif Alif Atoll',
            ),
            9 => 
            array (
                'country_id' => 133,
                'id' => 2588,
                'name' => 'North Province',
            ),
            10 => 
            array (
                'country_id' => 133,
                'id' => 2589,
                'name' => 'North Central Province',
            ),
            11 => 
            array (
                'country_id' => 133,
                'id' => 2590,
                'name' => 'Dhaalu Atoll',
            ),
            12 => 
            array (
                'country_id' => 133,
                'id' => 2591,
                'name' => 'Thaa Atoll',
            ),
            13 => 
            array (
                'country_id' => 133,
                'id' => 2592,
                'name' => 'Noonu Atoll',
            ),
            14 => 
            array (
                'country_id' => 133,
                'id' => 2593,
                'name' => 'Upper South Province',
            ),
            15 => 
            array (
                'country_id' => 133,
                'id' => 2594,
                'name' => 'Addu Atoll',
            ),
            16 => 
            array (
                'country_id' => 133,
                'id' => 2595,
                'name' => 'Gnaviyani Atoll',
            ),
            17 => 
            array (
                'country_id' => 133,
                'id' => 2596,
                'name' => 'Kaafu Atoll',
            ),
            18 => 
            array (
                'country_id' => 133,
                'id' => 2597,
                'name' => 'Haa Dhaalu Atoll',
            ),
            19 => 
            array (
                'country_id' => 133,
                'id' => 2598,
                'name' => 'Gaafu Alif Atoll',
            ),
            20 => 
            array (
                'country_id' => 133,
                'id' => 2599,
                'name' => 'Faafu Atoll',
            ),
            21 => 
            array (
                'country_id' => 133,
                'id' => 2600,
                'name' => 'Alif Dhaal Atoll',
            ),
            22 => 
            array (
                'country_id' => 133,
                'id' => 2601,
                'name' => 'Laamu Atoll',
            ),
            23 => 
            array (
                'country_id' => 133,
                'id' => 2602,
                'name' => 'Raa Atoll',
            ),
            24 => 
            array (
                'country_id' => 133,
                'id' => 2603,
                'name' => 'Gaafu Dhaalu Atoll',
            ),
            25 => 
            array (
                'country_id' => 133,
                'id' => 2604,
                'name' => 'Central Province',
            ),
            26 => 
            array (
                'country_id' => 133,
                'id' => 2605,
                'name' => 'South Province',
            ),
            27 => 
            array (
                'country_id' => 133,
                'id' => 2606,
                'name' => 'South Central Province',
            ),
            28 => 
            array (
                'country_id' => 133,
                'id' => 2607,
                'name' => 'Lhaviyani Atoll',
            ),
            29 => 
            array (
                'country_id' => 133,
                'id' => 2608,
                'name' => 'Meemu Atoll',
            ),
            30 => 
            array (
                'country_id' => 133,
                'id' => 2609,
                'name' => 'Malé',
            ),
            31 => 
            array (
                'country_id' => 156,
                'id' => 2610,
                'name' => 'Utrecht',
            ),
            32 => 
            array (
                'country_id' => 156,
                'id' => 2611,
                'name' => 'Gelderland',
            ),
            33 => 
            array (
                'country_id' => 156,
                'id' => 2612,
                'name' => 'North Holland',
            ),
            34 => 
            array (
                'country_id' => 156,
                'id' => 2613,
                'name' => 'Drenthe',
            ),
            35 => 
            array (
                'country_id' => 156,
                'id' => 2614,
                'name' => 'South Holland',
            ),
            36 => 
            array (
                'country_id' => 156,
                'id' => 2615,
                'name' => 'Limburg',
            ),
            37 => 
            array (
                'country_id' => 156,
                'id' => 2616,
                'name' => 'Sint Eustatius',
            ),
            38 => 
            array (
                'country_id' => 156,
                'id' => 2617,
                'name' => 'Groningen',
            ),
            39 => 
            array (
                'country_id' => 156,
                'id' => 2618,
                'name' => 'Overijssel',
            ),
            40 => 
            array (
                'country_id' => 156,
                'id' => 2619,
                'name' => 'Flevoland',
            ),
            41 => 
            array (
                'country_id' => 156,
                'id' => 2620,
                'name' => 'Zeeland',
            ),
            42 => 
            array (
                'country_id' => 156,
                'id' => 2621,
                'name' => 'Saba',
            ),
            43 => 
            array (
                'country_id' => 156,
                'id' => 2622,
                'name' => 'Friesland',
            ),
            44 => 
            array (
                'country_id' => 156,
                'id' => 2623,
                'name' => 'North Brabant',
            ),
            45 => 
            array (
                'country_id' => 156,
                'id' => 2624,
                'name' => 'Bonaire',
            ),
            46 => 
            array (
                'country_id' => 54,
                'id' => 2625,
                'name' => 'Savanes Region',
            ),
            47 => 
            array (
                'country_id' => 54,
                'id' => 2626,
                'name' => 'Agnéby',
            ),
            48 => 
            array (
                'country_id' => 54,
                'id' => 2627,
                'name' => 'Lagunes District',
            ),
            49 => 
            array (
                'country_id' => 54,
                'id' => 2628,
                'name' => 'Sud-Bandama',
            ),
            50 => 
            array (
                'country_id' => 54,
                'id' => 2629,
                'name' => 'Montagnes District',
            ),
            51 => 
            array (
                'country_id' => 54,
                'id' => 2630,
                'name' => 'Moyen-Comoé',
            ),
            52 => 
            array (
                'country_id' => 54,
                'id' => 2631,
                'name' => 'Marahoué Region',
            ),
            53 => 
            array (
                'country_id' => 54,
                'id' => 2632,
                'name' => 'Lacs District',
            ),
            54 => 
            array (
                'country_id' => 54,
                'id' => 2633,
                'name' => 'Fromager',
            ),
            55 => 
            array (
                'country_id' => 54,
                'id' => 2634,
                'name' => 'Abidjan',
            ),
            56 => 
            array (
                'country_id' => 54,
                'id' => 2635,
                'name' => 'Bas-Sassandra Region',
            ),
            57 => 
            array (
                'country_id' => 54,
                'id' => 2636,
                'name' => 'Bafing Region',
            ),
            58 => 
            array (
                'country_id' => 54,
                'id' => 2637,
                'name' => 'Vallée du Bandama District',
            ),
            59 => 
            array (
                'country_id' => 54,
                'id' => 2638,
                'name' => 'Haut-Sassandra',
            ),
            60 => 
            array (
                'country_id' => 54,
                'id' => 2639,
                'name' => 'Lagunes region',
            ),
            61 => 
            array (
                'country_id' => 54,
                'id' => 2640,
                'name' => 'Lacs Region',
            ),
            62 => 
            array (
                'country_id' => 54,
                'id' => 2641,
                'name' => 'Zanzan Region',
            ),
            63 => 
            array (
                'country_id' => 54,
                'id' => 2642,
                'name' => 'Denguélé Region',
            ),
            64 => 
            array (
                'country_id' => 54,
                'id' => 2643,
                'name' => 'Bas-Sassandra District',
            ),
            65 => 
            array (
                'country_id' => 54,
                'id' => 2644,
                'name' => 'Denguélé District',
            ),
            66 => 
            array (
                'country_id' => 54,
                'id' => 2645,
                'name' => 'Dix-Huit Montagnes',
            ),
            67 => 
            array (
                'country_id' => 54,
                'id' => 2646,
                'name' => 'Moyen-Cavally',
            ),
            68 => 
            array (
                'country_id' => 54,
                'id' => 2647,
                'name' => 'Vallée du Bandama Region',
            ),
            69 => 
            array (
                'country_id' => 54,
                'id' => 2648,
                'name' => 'Sassandra-Marahoué District',
            ),
            70 => 
            array (
                'country_id' => 54,
                'id' => 2649,
                'name' => 'Worodougou',
            ),
            71 => 
            array (
                'country_id' => 54,
                'id' => 2650,
                'name' => 'Woroba District',
            ),
            72 => 
            array (
                'country_id' => 54,
                'id' => 2651,
                'name' => 'Gôh-Djiboua District',
            ),
            73 => 
            array (
                'country_id' => 54,
                'id' => 2652,
                'name' => 'Sud-Comoé',
            ),
            74 => 
            array (
                'country_id' => 54,
                'id' => 2653,
                'name' => 'Yamoussoukro',
            ),
            75 => 
            array (
                'country_id' => 54,
                'id' => 2654,
                'name' => 'Comoé District',
            ),
            76 => 
            array (
                'country_id' => 54,
                'id' => 2655,
                'name' => 'N\'zi-Comoé',
            ),
            77 => 
            array (
                'country_id' => 38,
                'id' => 2656,
                'name' => 'Far North',
            ),
            78 => 
            array (
                'country_id' => 38,
                'id' => 2657,
                'name' => 'Northwest',
            ),
            79 => 
            array (
                'country_id' => 38,
                'id' => 2658,
                'name' => 'Southwest',
            ),
            80 => 
            array (
                'country_id' => 38,
                'id' => 2659,
                'name' => 'South',
            ),
            81 => 
            array (
                'country_id' => 38,
                'id' => 2660,
                'name' => 'Centre',
            ),
            82 => 
            array (
                'country_id' => 38,
                'id' => 2661,
                'name' => 'East',
            ),
            83 => 
            array (
                'country_id' => 38,
                'id' => 2662,
                'name' => 'Littoral',
            ),
            84 => 
            array (
                'country_id' => 38,
                'id' => 2663,
                'name' => 'Adamawa',
            ),
            85 => 
            array (
                'country_id' => 38,
                'id' => 2664,
                'name' => 'West',
            ),
            86 => 
            array (
                'country_id' => 38,
                'id' => 2665,
                'name' => 'North',
            ),
            87 => 
            array (
                'country_id' => 80,
                'id' => 2666,
                'name' => 'Banjul',
            ),
            88 => 
            array (
                'country_id' => 80,
                'id' => 2667,
                'name' => 'West Coast Division',
            ),
            89 => 
            array (
                'country_id' => 80,
                'id' => 2668,
                'name' => 'Upper River Division',
            ),
            90 => 
            array (
                'country_id' => 80,
                'id' => 2669,
                'name' => 'Central River Division',
            ),
            91 => 
            array (
                'country_id' => 80,
                'id' => 2670,
                'name' => 'Lower River Division',
            ),
            92 => 
            array (
                'country_id' => 80,
                'id' => 2671,
                'name' => 'North Bank Division',
            ),
            93 => 
            array (
                'country_id' => 92,
                'id' => 2672,
                'name' => 'Beyla Prefecture',
            ),
            94 => 
            array (
                'country_id' => 92,
                'id' => 2673,
                'name' => 'Mandiana Prefecture',
            ),
            95 => 
            array (
                'country_id' => 92,
                'id' => 2674,
                'name' => 'Yomou Prefecture',
            ),
            96 => 
            array (
                'country_id' => 92,
                'id' => 2675,
                'name' => 'Fria Prefecture',
            ),
            97 => 
            array (
                'country_id' => 92,
                'id' => 2676,
                'name' => 'Boké Region',
            ),
            98 => 
            array (
                'country_id' => 92,
                'id' => 2677,
                'name' => 'Labé Region',
            ),
            99 => 
            array (
                'country_id' => 92,
                'id' => 2678,
                'name' => 'Nzérékoré Prefecture',
            ),
            100 => 
            array (
                'country_id' => 92,
                'id' => 2679,
                'name' => 'Dabola Prefecture',
            ),
            101 => 
            array (
                'country_id' => 92,
                'id' => 2680,
                'name' => 'Labé Prefecture',
            ),
            102 => 
            array (
                'country_id' => 92,
                'id' => 2681,
                'name' => 'Dubréka Prefecture',
            ),
            103 => 
            array (
                'country_id' => 92,
                'id' => 2682,
                'name' => 'Faranah Prefecture',
            ),
            104 => 
            array (
                'country_id' => 92,
                'id' => 2683,
                'name' => 'Forécariah Prefecture',
            ),
            105 => 
            array (
                'country_id' => 92,
                'id' => 2684,
                'name' => 'Nzérékoré Region',
            ),
            106 => 
            array (
                'country_id' => 92,
                'id' => 2685,
                'name' => 'Gaoual Prefecture',
            ),
            107 => 
            array (
                'country_id' => 92,
                'id' => 2686,
                'name' => 'Conakry',
            ),
            108 => 
            array (
                'country_id' => 92,
                'id' => 2687,
                'name' => 'Télimélé Prefecture',
            ),
            109 => 
            array (
                'country_id' => 92,
                'id' => 2688,
                'name' => 'Dinguiraye Prefecture',
            ),
            110 => 
            array (
                'country_id' => 92,
                'id' => 2689,
                'name' => 'Mamou Prefecture',
            ),
            111 => 
            array (
                'country_id' => 92,
                'id' => 2690,
                'name' => 'Lélouma Prefecture',
            ),
            112 => 
            array (
                'country_id' => 92,
                'id' => 2691,
                'name' => 'Kissidougou Prefecture',
            ),
            113 => 
            array (
                'country_id' => 92,
                'id' => 2692,
                'name' => 'Koubia Prefecture',
            ),
            114 => 
            array (
                'country_id' => 92,
                'id' => 2693,
                'name' => 'Kindia Prefecture',
            ),
            115 => 
            array (
                'country_id' => 92,
                'id' => 2694,
                'name' => 'Pita Prefecture',
            ),
            116 => 
            array (
                'country_id' => 92,
                'id' => 2695,
                'name' => 'Kouroussa Prefecture',
            ),
            117 => 
            array (
                'country_id' => 92,
                'id' => 2696,
                'name' => 'Tougué Prefecture',
            ),
            118 => 
            array (
                'country_id' => 92,
                'id' => 2697,
                'name' => 'Kankan Region',
            ),
            119 => 
            array (
                'country_id' => 92,
                'id' => 2698,
                'name' => 'Mamou Region',
            ),
            120 => 
            array (
                'country_id' => 92,
                'id' => 2699,
                'name' => 'Boffa Prefecture',
            ),
            121 => 
            array (
                'country_id' => 92,
                'id' => 2700,
                'name' => 'Mali Prefecture',
            ),
            122 => 
            array (
                'country_id' => 92,
                'id' => 2701,
                'name' => 'Kindia Region',
            ),
            123 => 
            array (
                'country_id' => 92,
                'id' => 2702,
                'name' => 'Macenta Prefecture',
            ),
            124 => 
            array (
                'country_id' => 92,
                'id' => 2703,
                'name' => 'Koundara Prefecture',
            ),
            125 => 
            array (
                'country_id' => 92,
                'id' => 2704,
                'name' => 'Kankan Prefecture',
            ),
            126 => 
            array (
                'country_id' => 92,
                'id' => 2705,
                'name' => 'Coyah Prefecture',
            ),
            127 => 
            array (
                'country_id' => 92,
                'id' => 2706,
                'name' => 'Dalaba Prefecture',
            ),
            128 => 
            array (
                'country_id' => 92,
                'id' => 2707,
                'name' => 'Siguiri Prefecture',
            ),
            129 => 
            array (
                'country_id' => 92,
                'id' => 2708,
                'name' => 'Lola Prefecture',
            ),
            130 => 
            array (
                'country_id' => 92,
                'id' => 2709,
                'name' => 'Boké Prefecture',
            ),
            131 => 
            array (
                'country_id' => 92,
                'id' => 2710,
                'name' => 'Kérouané Prefecture',
            ),
            132 => 
            array (
                'country_id' => 92,
                'id' => 2711,
                'name' => 'Guéckédou Prefecture',
            ),
            133 => 
            array (
                'country_id' => 93,
                'id' => 2712,
                'name' => 'Tombali Region',
            ),
            134 => 
            array (
                'country_id' => 93,
                'id' => 2713,
                'name' => 'Cacheu Region',
            ),
            135 => 
            array (
                'country_id' => 93,
                'id' => 2714,
                'name' => 'Biombo Region',
            ),
            136 => 
            array (
                'country_id' => 93,
                'id' => 2715,
                'name' => 'Quinara Region',
            ),
            137 => 
            array (
                'country_id' => 93,
                'id' => 2716,
                'name' => 'Sul Province',
            ),
            138 => 
            array (
                'country_id' => 93,
                'id' => 2717,
                'name' => 'Norte Province',
            ),
            139 => 
            array (
                'country_id' => 93,
                'id' => 2718,
                'name' => 'Oio Region',
            ),
            140 => 
            array (
                'country_id' => 93,
                'id' => 2719,
                'name' => 'Gabú Region',
            ),
            141 => 
            array (
                'country_id' => 93,
                'id' => 2720,
                'name' => 'Bafatá',
            ),
            142 => 
            array (
                'country_id' => 93,
                'id' => 2721,
                'name' => 'Leste Province',
            ),
            143 => 
            array (
                'country_id' => 93,
                'id' => 2722,
                'name' => 'Bolama Region',
            ),
            144 => 
            array (
                'country_id' => 79,
                'id' => 2723,
                'name' => 'Woleu-Ntem Province',
            ),
            145 => 
            array (
                'country_id' => 79,
                'id' => 2724,
                'name' => 'Ogooué-Ivindo Province',
            ),
            146 => 
            array (
                'country_id' => 79,
                'id' => 2725,
                'name' => 'Nyanga Province',
            ),
            147 => 
            array (
                'country_id' => 79,
                'id' => 2726,
                'name' => 'Haut-Ogooué Province',
            ),
            148 => 
            array (
                'country_id' => 79,
                'id' => 2727,
                'name' => 'Estuaire Province',
            ),
            149 => 
            array (
                'country_id' => 79,
                'id' => 2728,
                'name' => 'Ogooué-Maritime Province',
            ),
            150 => 
            array (
                'country_id' => 79,
                'id' => 2729,
                'name' => 'Ogooué-Lolo Province',
            ),
            151 => 
            array (
                'country_id' => 79,
                'id' => 2730,
                'name' => 'Moyen-Ogooué Province',
            ),
            152 => 
            array (
                'country_id' => 79,
                'id' => 2731,
                'name' => 'Ngounié Province',
            ),
            153 => 
            array (
                'country_id' => 51,
                'id' => 2732,
                'name' => 'Tshuapa',
            ),
            154 => 
            array (
                'country_id' => 51,
                'id' => 2733,
                'name' => 'Tanganyika',
            ),
            155 => 
            array (
                'country_id' => 51,
                'id' => 2734,
                'name' => 'Haut-Uélé',
            ),
            156 => 
            array (
                'country_id' => 51,
                'id' => 2735,
                'name' => 'Kasaï Oriental',
            ),
            157 => 
            array (
                'country_id' => 51,
                'id' => 2738,
                'name' => 'Sud-Kivu',
            ),
            158 => 
            array (
                'country_id' => 51,
                'id' => 2739,
                'name' => 'Nord-Ubangi',
            ),
            159 => 
            array (
                'country_id' => 51,
                'id' => 2740,
                'name' => 'Kwango',
            ),
            160 => 
            array (
                'country_id' => 51,
                'id' => 2741,
                'name' => 'Kinshasa',
            ),
            161 => 
            array (
                'country_id' => 51,
                'id' => 2742,
                'name' => 'Kasaï Central',
            ),
            162 => 
            array (
                'country_id' => 51,
                'id' => 2743,
                'name' => 'Sankuru',
            ),
            163 => 
            array (
                'country_id' => 51,
                'id' => 2744,
                'name' => 'Équateur',
            ),
            164 => 
            array (
                'country_id' => 51,
                'id' => 2745,
                'name' => 'Maniema',
            ),
            165 => 
            array (
                'country_id' => 51,
                'id' => 2746,
                'name' => 'Kongo Central',
            ),
            166 => 
            array (
                'country_id' => 51,
                'id' => 2747,
                'name' => 'Lomami',
            ),
            167 => 
            array (
                'country_id' => 51,
                'id' => 2748,
                'name' => 'Sud-Ubangi',
            ),
            168 => 
            array (
                'country_id' => 51,
                'id' => 2749,
                'name' => 'Nord-Kivu',
            ),
            169 => 
            array (
                'country_id' => 51,
                'id' => 2750,
                'name' => 'Haut-Katanga',
            ),
            170 => 
            array (
                'country_id' => 51,
                'id' => 2751,
                'name' => 'Ituri',
            ),
            171 => 
            array (
                'country_id' => 51,
                'id' => 2752,
                'name' => 'Mongala',
            ),
            172 => 
            array (
                'country_id' => 51,
                'id' => 2753,
                'name' => 'Bas-Uélé',
            ),
            173 => 
            array (
                'country_id' => 51,
                'id' => 2755,
                'name' => 'Mai-Ndombe',
            ),
            174 => 
            array (
                'country_id' => 51,
                'id' => 2756,
                'name' => 'Tshopo',
            ),
            175 => 
            array (
                'country_id' => 51,
                'id' => 2757,
                'name' => 'Kasaï',
            ),
            176 => 
            array (
                'country_id' => 51,
                'id' => 2758,
                'name' => 'Haut-Lomami',
            ),
            177 => 
            array (
                'country_id' => 51,
                'id' => 2759,
                'name' => 'Kwilu',
            ),
            178 => 
            array (
                'country_id' => 94,
                'id' => 2760,
                'name' => 'Cuyuni-Mazaruni',
            ),
            179 => 
            array (
                'country_id' => 94,
                'id' => 2761,
                'name' => 'Potaro-Siparuni',
            ),
            180 => 
            array (
                'country_id' => 94,
                'id' => 2762,
                'name' => 'Mahaica-Berbice',
            ),
            181 => 
            array (
                'country_id' => 94,
                'id' => 2763,
                'name' => 'Upper Demerara-Berbice',
            ),
            182 => 
            array (
                'country_id' => 94,
                'id' => 2764,
                'name' => 'Barima-Waini',
            ),
            183 => 
            array (
                'country_id' => 94,
                'id' => 2765,
                'name' => 'Pomeroon-Supenaam',
            ),
            184 => 
            array (
                'country_id' => 94,
                'id' => 2766,
                'name' => 'East Berbice-Corentyne',
            ),
            185 => 
            array (
                'country_id' => 94,
                'id' => 2767,
                'name' => 'Demerara-Mahaica',
            ),
            186 => 
            array (
                'country_id' => 94,
                'id' => 2768,
                'name' => 'Essequibo Islands-West Demerara',
            ),
            187 => 
            array (
                'country_id' => 94,
                'id' => 2769,
                'name' => 'Upper Takutu-Upper Essequibo',
            ),
            188 => 
            array (
                'country_id' => 172,
                'id' => 2770,
                'name' => 'Presidente Hayes Department',
            ),
            189 => 
            array (
                'country_id' => 172,
                'id' => 2771,
                'name' => 'Canindeyú',
            ),
            190 => 
            array (
                'country_id' => 172,
                'id' => 2772,
                'name' => 'Guairá Department',
            ),
            191 => 
            array (
                'country_id' => 172,
                'id' => 2773,
                'name' => 'Caaguazú',
            ),
            192 => 
            array (
                'country_id' => 172,
                'id' => 2774,
                'name' => 'Paraguarí Department',
            ),
            193 => 
            array (
                'country_id' => 172,
                'id' => 2775,
                'name' => 'Caazapá',
            ),
            194 => 
            array (
                'country_id' => 172,
                'id' => 2776,
                'name' => 'San Pedro Department',
            ),
            195 => 
            array (
                'country_id' => 172,
                'id' => 2777,
                'name' => 'Central Department',
            ),
            196 => 
            array (
                'country_id' => 172,
                'id' => 2778,
                'name' => 'Itapúa',
            ),
            197 => 
            array (
                'country_id' => 172,
                'id' => 2779,
                'name' => 'Concepción Department',
            ),
            198 => 
            array (
                'country_id' => 172,
                'id' => 2780,
                'name' => 'Boquerón Department',
            ),
            199 => 
            array (
                'country_id' => 172,
                'id' => 2781,
                'name' => 'Ñeembucú Department',
            ),
            200 => 
            array (
                'country_id' => 172,
                'id' => 2782,
                'name' => 'Amambay Department',
            ),
            201 => 
            array (
                'country_id' => 172,
                'id' => 2783,
                'name' => 'Cordillera Department',
            ),
            202 => 
            array (
                'country_id' => 172,
                'id' => 2784,
                'name' => 'Alto Paraná Department',
            ),
            203 => 
            array (
                'country_id' => 172,
                'id' => 2785,
                'name' => 'Alto Paraguay Department',
            ),
            204 => 
            array (
                'country_id' => 172,
                'id' => 2786,
                'name' => 'Misiones Department',
            ),
            205 => 
            array (
                'country_id' => 208,
                'id' => 2787,
                'name' => 'Jaffna District',
            ),
            206 => 
            array (
                'country_id' => 208,
                'id' => 2788,
                'name' => 'Kandy District',
            ),
            207 => 
            array (
                'country_id' => 208,
                'id' => 2789,
                'name' => 'Kalutara District',
            ),
            208 => 
            array (
                'country_id' => 208,
                'id' => 2790,
                'name' => 'Badulla District',
            ),
            209 => 
            array (
                'country_id' => 208,
                'id' => 2791,
                'name' => 'Hambantota District',
            ),
            210 => 
            array (
                'country_id' => 208,
                'id' => 2792,
                'name' => 'Galle District',
            ),
            211 => 
            array (
                'country_id' => 208,
                'id' => 2793,
                'name' => 'Kilinochchi District',
            ),
            212 => 
            array (
                'country_id' => 208,
                'id' => 2794,
                'name' => 'Nuwara Eliya District',
            ),
            213 => 
            array (
                'country_id' => 208,
                'id' => 2795,
                'name' => 'Trincomalee District',
            ),
            214 => 
            array (
                'country_id' => 208,
                'id' => 2796,
                'name' => 'Puttalam District',
            ),
            215 => 
            array (
                'country_id' => 208,
                'id' => 2797,
                'name' => 'Kegalle District',
            ),
            216 => 
            array (
                'country_id' => 208,
                'id' => 2798,
                'name' => 'Central Province',
            ),
            217 => 
            array (
                'country_id' => 208,
                'id' => 2799,
                'name' => 'Ampara District',
            ),
            218 => 
            array (
                'country_id' => 208,
                'id' => 2800,
                'name' => 'North Central Province',
            ),
            219 => 
            array (
                'country_id' => 208,
                'id' => 2801,
                'name' => 'Southern Province',
            ),
            220 => 
            array (
                'country_id' => 208,
                'id' => 2802,
                'name' => 'Western Province',
            ),
            221 => 
            array (
                'country_id' => 208,
                'id' => 2803,
                'name' => 'Sabaragamuwa Province',
            ),
            222 => 
            array (
                'country_id' => 208,
                'id' => 2804,
                'name' => 'Gampaha District',
            ),
            223 => 
            array (
                'country_id' => 208,
                'id' => 2805,
                'name' => 'Mannar District',
            ),
            224 => 
            array (
                'country_id' => 208,
                'id' => 2806,
                'name' => 'Matara District',
            ),
            225 => 
            array (
                'country_id' => 208,
                'id' => 2807,
                'name' => 'Ratnapura district',
            ),
            226 => 
            array (
                'country_id' => 208,
                'id' => 2808,
                'name' => 'Eastern Province',
            ),
            227 => 
            array (
                'country_id' => 208,
                'id' => 2809,
                'name' => 'Vavuniya District',
            ),
            228 => 
            array (
                'country_id' => 208,
                'id' => 2810,
                'name' => 'Matale District',
            ),
            229 => 
            array (
                'country_id' => 208,
                'id' => 2811,
                'name' => 'Uva Province',
            ),
            230 => 
            array (
                'country_id' => 208,
                'id' => 2812,
                'name' => 'Polonnaruwa District',
            ),
            231 => 
            array (
                'country_id' => 208,
                'id' => 2813,
                'name' => 'Northern Province',
            ),
            232 => 
            array (
                'country_id' => 208,
                'id' => 2814,
                'name' => 'Mullaitivu District',
            ),
            233 => 
            array (
                'country_id' => 208,
                'id' => 2815,
                'name' => 'Colombo District',
            ),
            234 => 
            array (
                'country_id' => 208,
                'id' => 2816,
                'name' => 'Anuradhapura District',
            ),
            235 => 
            array (
                'country_id' => 208,
                'id' => 2817,
                'name' => 'North Western Province',
            ),
            236 => 
            array (
                'country_id' => 208,
                'id' => 2818,
                'name' => 'Batticaloa District',
            ),
            237 => 
            array (
                'country_id' => 208,
                'id' => 2819,
                'name' => 'Monaragala District',
            ),
            238 => 
            array (
                'country_id' => 49,
                'id' => 2820,
                'name' => 'Mohéli',
            ),
            239 => 
            array (
                'country_id' => 49,
                'id' => 2821,
                'name' => 'Anjouan',
            ),
            240 => 
            array (
                'country_id' => 49,
                'id' => 2822,
                'name' => 'Grande Comore',
            ),
            241 => 
            array (
                'country_id' => 44,
                'id' => 2823,
                'name' => 'Atacama',
            ),
            242 => 
            array (
                'country_id' => 44,
                'id' => 2824,
                'name' => 'Región Metropolitana de Santiago',
            ),
            243 => 
            array (
                'country_id' => 44,
                'id' => 2825,
                'name' => 'Coquimbo',
            ),
            244 => 
            array (
                'country_id' => 44,
                'id' => 2826,
                'name' => 'La Araucanía',
            ),
            245 => 
            array (
                'country_id' => 44,
                'id' => 2827,
                'name' => 'Biobío',
            ),
            246 => 
            array (
                'country_id' => 44,
                'id' => 2828,
                'name' => 'Aisén del General Carlos Ibañez del Campo',
            ),
            247 => 
            array (
                'country_id' => 44,
                'id' => 2829,
                'name' => 'Arica y Parinacota',
            ),
            248 => 
            array (
                'country_id' => 44,
                'id' => 2830,
                'name' => 'Valparaíso',
            ),
            249 => 
            array (
                'country_id' => 44,
                'id' => 2831,
                'name' => 'Ñuble',
            ),
            250 => 
            array (
                'country_id' => 44,
                'id' => 2832,
                'name' => 'Antofagasta',
            ),
            251 => 
            array (
                'country_id' => 44,
                'id' => 2833,
                'name' => 'Maule',
            ),
            252 => 
            array (
                'country_id' => 44,
                'id' => 2834,
                'name' => 'Los Ríos',
            ),
            253 => 
            array (
                'country_id' => 44,
                'id' => 2835,
                'name' => 'Los Lagos',
            ),
            254 => 
            array (
                'country_id' => 44,
                'id' => 2836,
                'name' => 'Magallanes y de la Antártica Chilena',
            ),
            255 => 
            array (
                'country_id' => 44,
                'id' => 2837,
                'name' => 'Tarapacá',
            ),
            256 => 
            array (
                'country_id' => 44,
                'id' => 2838,
                'name' => 'Libertador General Bernardo O\'Higgins',
            ),
            257 => 
            array (
                'country_id' => 210,
                'id' => 2839,
                'name' => 'Commewijne District',
            ),
            258 => 
            array (
                'country_id' => 210,
                'id' => 2840,
                'name' => 'Nickerie District',
            ),
            259 => 
            array (
                'country_id' => 210,
                'id' => 2841,
                'name' => 'Para District',
            ),
            260 => 
            array (
                'country_id' => 210,
                'id' => 2842,
                'name' => 'Coronie District',
            ),
            261 => 
            array (
                'country_id' => 210,
                'id' => 2843,
                'name' => 'Paramaribo District',
            ),
            262 => 
            array (
                'country_id' => 210,
                'id' => 2844,
                'name' => 'Wanica District',
            ),
            263 => 
            array (
                'country_id' => 210,
                'id' => 2845,
                'name' => 'Marowijne District',
            ),
            264 => 
            array (
                'country_id' => 210,
                'id' => 2846,
                'name' => 'Brokopondo District',
            ),
            265 => 
            array (
                'country_id' => 210,
                'id' => 2847,
                'name' => 'Sipaliwini District',
            ),
            266 => 
            array (
                'country_id' => 210,
                'id' => 2848,
                'name' => 'Saramacca District',
            ),
            267 => 
            array (
                'country_id' => 194,
                'id' => 2849,
                'name' => 'Riyadh',
            ),
            268 => 
            array (
                'country_id' => 194,
                'id' => 2850,
                'name' => 'Makkah',
            ),
            269 => 
            array (
                'country_id' => 194,
                'id' => 2851,
                'name' => 'Al Madinah',
            ),
            270 => 
            array (
                'country_id' => 194,
                'id' => 2852,
                'name' => 'Tabuk',
            ),
            271 => 
            array (
                'country_id' => 194,
                'id' => 2853,
                'name' => '\'Asir',
            ),
            272 => 
            array (
                'country_id' => 194,
                'id' => 2854,
                'name' => 'Northern Borders',
            ),
            273 => 
            array (
                'country_id' => 194,
                'id' => 2855,
                'name' => 'Ha\'il',
            ),
            274 => 
            array (
                'country_id' => 194,
                'id' => 2856,
                'name' => 'Eastern Province',
            ),
            275 => 
            array (
                'country_id' => 194,
                'id' => 2857,
                'name' => 'Al Jawf',
            ),
            276 => 
            array (
                'country_id' => 194,
                'id' => 2858,
                'name' => 'Jizan',
            ),
            277 => 
            array (
                'country_id' => 194,
                'id' => 2859,
                'name' => 'Al Bahah',
            ),
            278 => 
            array (
                'country_id' => 194,
                'id' => 2860,
                'name' => 'Najran',
            ),
            279 => 
            array (
                'country_id' => 194,
                'id' => 2861,
                'name' => 'Al-Qassim',
            ),
            280 => 
            array (
                'country_id' => 50,
                'id' => 2862,
                'name' => 'Plateaux Department',
            ),
            281 => 
            array (
                'country_id' => 50,
                'id' => 2863,
                'name' => 'Pointe-Noire',
            ),
            282 => 
            array (
                'country_id' => 50,
                'id' => 2864,
                'name' => 'Cuvette Department',
            ),
            283 => 
            array (
                'country_id' => 50,
                'id' => 2865,
                'name' => 'Likouala Department',
            ),
            284 => 
            array (
                'country_id' => 50,
                'id' => 2866,
                'name' => 'Bouenza Department',
            ),
            285 => 
            array (
                'country_id' => 50,
                'id' => 2867,
                'name' => 'Kouilou Department',
            ),
            286 => 
            array (
                'country_id' => 50,
                'id' => 2868,
                'name' => 'Lékoumou Department',
            ),
            287 => 
            array (
                'country_id' => 50,
                'id' => 2869,
                'name' => 'Cuvette-Ouest Department',
            ),
            288 => 
            array (
                'country_id' => 50,
                'id' => 2870,
                'name' => 'Brazzaville',
            ),
            289 => 
            array (
                'country_id' => 50,
                'id' => 2871,
                'name' => 'Sangha Department',
            ),
            290 => 
            array (
                'country_id' => 50,
                'id' => 2872,
                'name' => 'Niari Department',
            ),
            291 => 
            array (
                'country_id' => 50,
                'id' => 2873,
                'name' => 'Pool Department',
            ),
            292 => 
            array (
                'country_id' => 48,
                'id' => 2874,
                'name' => 'Quindío',
            ),
            293 => 
            array (
                'country_id' => 48,
                'id' => 2875,
                'name' => 'Cundinamarca',
            ),
            294 => 
            array (
                'country_id' => 48,
                'id' => 2876,
                'name' => 'Chocó',
            ),
            295 => 
            array (
                'country_id' => 48,
                'id' => 2877,
                'name' => 'Norte de Santander',
            ),
            296 => 
            array (
                'country_id' => 48,
                'id' => 2878,
                'name' => 'Meta',
            ),
            297 => 
            array (
                'country_id' => 48,
                'id' => 2879,
                'name' => 'Risaralda',
            ),
            298 => 
            array (
                'country_id' => 48,
                'id' => 2880,
                'name' => 'Atlántico',
            ),
            299 => 
            array (
                'country_id' => 48,
                'id' => 2881,
                'name' => 'Arauca',
            ),
            300 => 
            array (
                'country_id' => 48,
                'id' => 2882,
                'name' => 'Guainía',
            ),
            301 => 
            array (
                'country_id' => 48,
                'id' => 2883,
                'name' => 'Tolima',
            ),
            302 => 
            array (
                'country_id' => 48,
                'id' => 2884,
                'name' => 'Cauca',
            ),
            303 => 
            array (
                'country_id' => 48,
                'id' => 2885,
                'name' => 'Vaupés',
            ),
            304 => 
            array (
                'country_id' => 48,
                'id' => 2886,
                'name' => 'Magdalena',
            ),
            305 => 
            array (
                'country_id' => 48,
                'id' => 2887,
                'name' => 'Caldas',
            ),
            306 => 
            array (
                'country_id' => 48,
                'id' => 2888,
                'name' => 'Guaviare',
            ),
            307 => 
            array (
                'country_id' => 48,
                'id' => 2889,
                'name' => 'La Guajira',
            ),
            308 => 
            array (
                'country_id' => 48,
                'id' => 2890,
                'name' => 'Antioquia',
            ),
            309 => 
            array (
                'country_id' => 48,
                'id' => 2891,
                'name' => 'Caquetá',
            ),
            310 => 
            array (
                'country_id' => 48,
                'id' => 2892,
                'name' => 'Casanare',
            ),
            311 => 
            array (
                'country_id' => 48,
                'id' => 2893,
                'name' => 'Bolívar',
            ),
            312 => 
            array (
                'country_id' => 48,
                'id' => 2894,
                'name' => 'Vichada',
            ),
            313 => 
            array (
                'country_id' => 48,
                'id' => 2895,
                'name' => 'Amazonas',
            ),
            314 => 
            array (
                'country_id' => 48,
                'id' => 2896,
                'name' => 'Putumayo',
            ),
            315 => 
            array (
                'country_id' => 48,
                'id' => 2897,
                'name' => 'Nariño',
            ),
            316 => 
            array (
                'country_id' => 48,
                'id' => 2898,
                'name' => 'Córdoba',
            ),
            317 => 
            array (
                'country_id' => 48,
                'id' => 2899,
                'name' => 'Cesar',
            ),
            318 => 
            array (
                'country_id' => 48,
                'id' => 2900,
                'name' => 'Archipiélago de San Andrés, Providencia y Santa Catalina',
            ),
            319 => 
            array (
                'country_id' => 48,
                'id' => 2901,
                'name' => 'Santander',
            ),
            320 => 
            array (
                'country_id' => 48,
                'id' => 2902,
                'name' => 'Sucre',
            ),
            321 => 
            array (
                'country_id' => 48,
                'id' => 2903,
                'name' => 'Boyacá',
            ),
            322 => 
            array (
                'country_id' => 48,
                'id' => 2904,
                'name' => 'Valle del Cauca',
            ),
            323 => 
            array (
                'country_id' => 64,
                'id' => 2905,
                'name' => 'Galápagos',
            ),
            324 => 
            array (
                'country_id' => 64,
                'id' => 2906,
                'name' => 'Sucumbíos',
            ),
            325 => 
            array (
                'country_id' => 64,
                'id' => 2907,
                'name' => 'Pastaza',
            ),
            326 => 
            array (
                'country_id' => 64,
                'id' => 2908,
                'name' => 'Tungurahua',
            ),
            327 => 
            array (
                'country_id' => 64,
                'id' => 2909,
                'name' => 'Zamora Chinchipe',
            ),
            328 => 
            array (
                'country_id' => 64,
                'id' => 2910,
                'name' => 'Los Ríos',
            ),
            329 => 
            array (
                'country_id' => 64,
                'id' => 2911,
                'name' => 'Imbabura',
            ),
            330 => 
            array (
                'country_id' => 64,
                'id' => 2912,
                'name' => 'Santa Elena',
            ),
            331 => 
            array (
                'country_id' => 64,
                'id' => 2913,
                'name' => 'Manabí',
            ),
            332 => 
            array (
                'country_id' => 64,
                'id' => 2914,
                'name' => 'Guayas',
            ),
            333 => 
            array (
                'country_id' => 64,
                'id' => 2915,
                'name' => 'Carchi',
            ),
            334 => 
            array (
                'country_id' => 64,
                'id' => 2916,
                'name' => 'Napo',
            ),
            335 => 
            array (
                'country_id' => 64,
                'id' => 2917,
                'name' => 'Cañar',
            ),
            336 => 
            array (
                'country_id' => 64,
                'id' => 2918,
                'name' => 'Morona-Santiago',
            ),
            337 => 
            array (
                'country_id' => 64,
                'id' => 2919,
                'name' => 'Santo Domingo de los Tsáchilas',
            ),
            338 => 
            array (
                'country_id' => 64,
                'id' => 2920,
                'name' => 'Bolívar',
            ),
            339 => 
            array (
                'country_id' => 64,
                'id' => 2921,
                'name' => 'Cotopaxi',
            ),
            340 => 
            array (
                'country_id' => 64,
                'id' => 2922,
                'name' => 'Esmeraldas',
            ),
            341 => 
            array (
                'country_id' => 64,
                'id' => 2923,
                'name' => 'Azuay',
            ),
            342 => 
            array (
                'country_id' => 64,
                'id' => 2924,
                'name' => 'El Oro',
            ),
            343 => 
            array (
                'country_id' => 64,
                'id' => 2925,
                'name' => 'Chimborazo',
            ),
            344 => 
            array (
                'country_id' => 64,
                'id' => 2926,
                'name' => 'Orellana',
            ),
            345 => 
            array (
                'country_id' => 64,
                'id' => 2927,
                'name' => 'Pichincha',
            ),
            346 => 
            array (
                'country_id' => 60,
                'id' => 2928,
                'name' => 'Obock Region',
            ),
            347 => 
            array (
                'country_id' => 60,
                'id' => 2929,
                'name' => 'Djibouti',
            ),
            348 => 
            array (
                'country_id' => 60,
                'id' => 2930,
                'name' => 'Dikhil Region',
            ),
            349 => 
            array (
                'country_id' => 60,
                'id' => 2931,
                'name' => 'Tadjourah Region',
            ),
            350 => 
            array (
                'country_id' => 60,
                'id' => 2932,
                'name' => 'Arta Region',
            ),
            351 => 
            array (
                'country_id' => 60,
                'id' => 2933,
                'name' => 'Ali Sabieh Region',
            ),
            352 => 
            array (
                'country_id' => 215,
                'id' => 2934,
                'name' => 'Hama',
            ),
            353 => 
            array (
                'country_id' => 215,
                'id' => 2935,
                'name' => 'Rif Dimashq',
            ),
            354 => 
            array (
                'country_id' => 215,
                'id' => 2936,
                'name' => 'As-Suwayda',
            ),
            355 => 
            array (
                'country_id' => 215,
                'id' => 2937,
                'name' => 'Deir ez-Zor',
            ),
            356 => 
            array (
                'country_id' => 215,
                'id' => 2938,
                'name' => 'Latakia',
            ),
            357 => 
            array (
                'country_id' => 215,
                'id' => 2939,
                'name' => 'Damascus',
            ),
            358 => 
            array (
                'country_id' => 215,
                'id' => 2940,
                'name' => 'Idlib',
            ),
            359 => 
            array (
                'country_id' => 215,
                'id' => 2941,
                'name' => 'Al-Hasakah',
            ),
            360 => 
            array (
                'country_id' => 215,
                'id' => 2942,
                'name' => 'Homs',
            ),
            361 => 
            array (
                'country_id' => 215,
                'id' => 2943,
                'name' => 'Quneitra',
            ),
            362 => 
            array (
                'country_id' => 215,
                'id' => 2944,
                'name' => 'Al-Raqqah',
            ),
            363 => 
            array (
                'country_id' => 215,
                'id' => 2945,
                'name' => 'Daraa',
            ),
            364 => 
            array (
                'country_id' => 215,
                'id' => 2946,
                'name' => 'Aleppo',
            ),
            365 => 
            array (
                'country_id' => 215,
                'id' => 2947,
                'name' => 'Tartus',
            ),
            366 => 
            array (
                'country_id' => 130,
                'id' => 2948,
                'name' => 'Fianarantsoa Province',
            ),
            367 => 
            array (
                'country_id' => 130,
                'id' => 2949,
                'name' => 'Toliara Province',
            ),
            368 => 
            array (
                'country_id' => 130,
                'id' => 2950,
                'name' => 'Antsiranana Province',
            ),
            369 => 
            array (
                'country_id' => 130,
                'id' => 2951,
                'name' => 'Antananarivo Province',
            ),
            370 => 
            array (
                'country_id' => 130,
                'id' => 2952,
                'name' => 'Toamasina Province',
            ),
            371 => 
            array (
                'country_id' => 130,
                'id' => 2953,
                'name' => 'Mahajanga Province',
            ),
            372 => 
            array (
                'country_id' => 21,
                'id' => 2954,
                'name' => 'Mogilev Region',
            ),
            373 => 
            array (
                'country_id' => 21,
                'id' => 2955,
                'name' => 'Gomel Region',
            ),
            374 => 
            array (
                'country_id' => 21,
                'id' => 2956,
                'name' => 'Grodno Region',
            ),
            375 => 
            array (
                'country_id' => 21,
                'id' => 2957,
                'name' => 'Minsk Region',
            ),
            376 => 
            array (
                'country_id' => 21,
                'id' => 2958,
                'name' => 'Minsk',
            ),
            377 => 
            array (
                'country_id' => 21,
                'id' => 2959,
                'name' => 'Brest Region',
            ),
            378 => 
            array (
                'country_id' => 21,
                'id' => 2960,
                'name' => 'Vitebsk Region',
            ),
            379 => 
            array (
                'country_id' => 124,
                'id' => 2961,
                'name' => 'Murqub',
            ),
            380 => 
            array (
                'country_id' => 124,
                'id' => 2962,
                'name' => 'Nuqat al Khams',
            ),
            381 => 
            array (
                'country_id' => 124,
                'id' => 2963,
                'name' => 'Zawiya District',
            ),
            382 => 
            array (
                'country_id' => 124,
                'id' => 2964,
                'name' => 'Al Wahat District',
            ),
            383 => 
            array (
                'country_id' => 124,
                'id' => 2965,
                'name' => 'Sabha District',
            ),
            384 => 
            array (
                'country_id' => 124,
                'id' => 2966,
                'name' => 'Derna District',
            ),
            385 => 
            array (
                'country_id' => 124,
                'id' => 2967,
                'name' => 'Murzuq District',
            ),
            386 => 
            array (
                'country_id' => 124,
                'id' => 2968,
                'name' => 'Marj District',
            ),
            387 => 
            array (
                'country_id' => 124,
                'id' => 2969,
                'name' => 'Ghat District',
            ),
            388 => 
            array (
                'country_id' => 124,
                'id' => 2970,
                'name' => 'Jufra',
            ),
            389 => 
            array (
                'country_id' => 124,
                'id' => 2971,
                'name' => 'Tripoli District',
            ),
            390 => 
            array (
                'country_id' => 124,
                'id' => 2972,
                'name' => 'Kufra District',
            ),
            391 => 
            array (
                'country_id' => 124,
                'id' => 2973,
                'name' => 'Wadi al Hayaa District',
            ),
            392 => 
            array (
                'country_id' => 124,
                'id' => 2974,
                'name' => 'Jabal al Gharbi District',
            ),
            393 => 
            array (
                'country_id' => 124,
                'id' => 2975,
                'name' => 'Wadi al Shatii District',
            ),
            394 => 
            array (
                'country_id' => 124,
                'id' => 2976,
                'name' => 'Nalut District',
            ),
            395 => 
            array (
                'country_id' => 124,
                'id' => 2977,
                'name' => 'Sirte District',
            ),
            396 => 
            array (
                'country_id' => 124,
                'id' => 2978,
                'name' => 'Misrata District',
            ),
            397 => 
            array (
                'country_id' => 124,
                'id' => 2979,
                'name' => 'Jafara',
            ),
            398 => 
            array (
                'country_id' => 124,
                'id' => 2980,
                'name' => 'Jabal al Akhdar',
            ),
            399 => 
            array (
                'country_id' => 124,
                'id' => 2981,
                'name' => 'Benghazi',
            ),
            400 => 
            array (
                'country_id' => 40,
                'id' => 2982,
                'name' => 'Ribeira Brava Municipality',
            ),
            401 => 
            array (
                'country_id' => 40,
                'id' => 2983,
                'name' => 'Tarrafal',
            ),
            402 => 
            array (
                'country_id' => 40,
                'id' => 2984,
                'name' => 'Ribeira Grande de Santiago',
            ),
            403 => 
            array (
                'country_id' => 40,
                'id' => 2985,
                'name' => 'Santa Catarina',
            ),
            404 => 
            array (
                'country_id' => 40,
                'id' => 2986,
                'name' => 'São Domingos',
            ),
            405 => 
            array (
                'country_id' => 40,
                'id' => 2987,
                'name' => 'Mosteiros',
            ),
            406 => 
            array (
                'country_id' => 40,
                'id' => 2988,
                'name' => 'Praia',
            ),
            407 => 
            array (
                'country_id' => 40,
                'id' => 2989,
                'name' => 'Porto Novo',
            ),
            408 => 
            array (
                'country_id' => 40,
                'id' => 2990,
                'name' => 'São Miguel',
            ),
            409 => 
            array (
                'country_id' => 40,
                'id' => 2991,
                'name' => 'Maio Municipality',
            ),
            410 => 
            array (
                'country_id' => 40,
                'id' => 2992,
                'name' => 'Sotavento Islands',
            ),
            411 => 
            array (
                'country_id' => 40,
                'id' => 2993,
                'name' => 'São Lourenço dos Órgãos',
            ),
            412 => 
            array (
                'country_id' => 40,
                'id' => 2994,
                'name' => 'Barlavento Islands',
            ),
            413 => 
            array (
                'country_id' => 40,
                'id' => 2995,
                'name' => 'Santa Catarina do Fogo',
            ),
            414 => 
            array (
                'country_id' => 40,
                'id' => 2996,
                'name' => 'Brava',
            ),
            415 => 
            array (
                'country_id' => 40,
                'id' => 2997,
                'name' => 'Paul',
            ),
            416 => 
            array (
                'country_id' => 40,
                'id' => 2998,
                'name' => 'Sal',
            ),
            417 => 
            array (
                'country_id' => 40,
                'id' => 2999,
                'name' => 'Boa Vista',
            ),
            418 => 
            array (
                'country_id' => 40,
                'id' => 3000,
                'name' => 'São Filipe',
            ),
            419 => 
            array (
                'country_id' => 40,
                'id' => 3001,
                'name' => 'São Vicente',
            ),
            420 => 
            array (
                'country_id' => 40,
                'id' => 3002,
                'name' => 'Ribeira Grande',
            ),
            421 => 
            array (
                'country_id' => 40,
                'id' => 3003,
                'name' => 'Tarrafal de São Nicolau',
            ),
            422 => 
            array (
                'country_id' => 40,
                'id' => 3004,
                'name' => 'Santa Cruz',
            ),
            423 => 
            array (
                'country_id' => 82,
                'id' => 3005,
                'name' => 'Schleswig-Holstein',
            ),
            424 => 
            array (
                'country_id' => 82,
                'id' => 3006,
                'name' => 'Baden-Württemberg',
            ),
            425 => 
            array (
                'country_id' => 82,
                'id' => 3007,
                'name' => 'Mecklenburg-Vorpommern',
            ),
            426 => 
            array (
                'country_id' => 82,
                'id' => 3008,
                'name' => 'Lower Saxony',
            ),
            427 => 
            array (
                'country_id' => 82,
                'id' => 3009,
                'name' => 'Bavaria',
            ),
            428 => 
            array (
                'country_id' => 82,
                'id' => 3010,
                'name' => 'Berlin',
            ),
            429 => 
            array (
                'country_id' => 82,
                'id' => 3011,
                'name' => 'Saxony-Anhalt',
            ),
            430 => 
            array (
                'country_id' => 82,
                'id' => 3013,
                'name' => 'Brandenburg',
            ),
            431 => 
            array (
                'country_id' => 82,
                'id' => 3014,
                'name' => 'Bremen',
            ),
            432 => 
            array (
                'country_id' => 82,
                'id' => 3015,
                'name' => 'Thuringia',
            ),
            433 => 
            array (
                'country_id' => 82,
                'id' => 3016,
                'name' => 'Hamburg',
            ),
            434 => 
            array (
                'country_id' => 82,
                'id' => 3017,
                'name' => 'North Rhine-Westphalia',
            ),
            435 => 
            array (
                'country_id' => 82,
                'id' => 3018,
                'name' => 'Hesse',
            ),
            436 => 
            array (
                'country_id' => 82,
                'id' => 3019,
                'name' => 'Rhineland-Palatinate',
            ),
            437 => 
            array (
                'country_id' => 82,
                'id' => 3020,
                'name' => 'Saarland',
            ),
            438 => 
            array (
                'country_id' => 82,
                'id' => 3021,
                'name' => 'Saxony',
            ),
            439 => 
            array (
                'country_id' => 122,
                'id' => 3022,
                'name' => 'Mafeteng District',
            ),
            440 => 
            array (
                'country_id' => 122,
                'id' => 3023,
                'name' => 'Mohale\'s Hoek District',
            ),
            441 => 
            array (
                'country_id' => 122,
                'id' => 3024,
                'name' => 'Mokhotlong District',
            ),
            442 => 
            array (
                'country_id' => 122,
                'id' => 3025,
                'name' => 'Qacha\'s Nek District',
            ),
            443 => 
            array (
                'country_id' => 122,
                'id' => 3026,
                'name' => 'Leribe District',
            ),
            444 => 
            array (
                'country_id' => 122,
                'id' => 3027,
                'name' => 'Quthing District',
            ),
            445 => 
            array (
                'country_id' => 122,
                'id' => 3028,
                'name' => 'Maseru District',
            ),
            446 => 
            array (
                'country_id' => 122,
                'id' => 3029,
                'name' => 'Butha-Buthe District',
            ),
            447 => 
            array (
                'country_id' => 122,
                'id' => 3030,
                'name' => 'Berea District',
            ),
            448 => 
            array (
                'country_id' => 122,
                'id' => 3031,
                'name' => 'Thaba-Tseka District',
            ),
            449 => 
            array (
                'country_id' => 123,
                'id' => 3032,
                'name' => 'Montserrado County',
            ),
            450 => 
            array (
                'country_id' => 123,
                'id' => 3033,
                'name' => 'River Cess County',
            ),
            451 => 
            array (
                'country_id' => 123,
                'id' => 3034,
                'name' => 'Bong County',
            ),
            452 => 
            array (
                'country_id' => 123,
                'id' => 3035,
                'name' => 'Sinoe County',
            ),
            453 => 
            array (
                'country_id' => 123,
                'id' => 3036,
                'name' => 'Grand Cape Mount County',
            ),
            454 => 
            array (
                'country_id' => 123,
                'id' => 3037,
                'name' => 'Lofa County',
            ),
            455 => 
            array (
                'country_id' => 123,
                'id' => 3038,
                'name' => 'River Gee County',
            ),
            456 => 
            array (
                'country_id' => 123,
                'id' => 3039,
                'name' => 'Grand Gedeh County',
            ),
            457 => 
            array (
                'country_id' => 123,
                'id' => 3040,
                'name' => 'Grand Bassa County',
            ),
            458 => 
            array (
                'country_id' => 123,
                'id' => 3041,
                'name' => 'Bomi County',
            ),
            459 => 
            array (
                'country_id' => 123,
                'id' => 3042,
                'name' => 'Maryland County',
            ),
            460 => 
            array (
                'country_id' => 123,
                'id' => 3043,
                'name' => 'Margibi County',
            ),
            461 => 
            array (
                'country_id' => 123,
                'id' => 3044,
                'name' => 'Gbarpolu County',
            ),
            462 => 
            array (
                'country_id' => 123,
                'id' => 3045,
                'name' => 'Grand Kru County',
            ),
            463 => 
            array (
                'country_id' => 123,
                'id' => 3046,
                'name' => 'Nimba',
            ),
            464 => 
            array (
                'country_id' => 166,
                'id' => 3047,
                'name' => 'Ad Dhahirah',
            ),
            465 => 
            array (
                'country_id' => 166,
                'id' => 3048,
                'name' => 'Al Batinah North',
            ),
            466 => 
            array (
                'country_id' => 166,
                'id' => 3049,
                'name' => 'Al Batinah South',
            ),
            467 => 
            array (
                'country_id' => 166,
                'id' => 3050,
                'name' => 'Al Batinah Region',
            ),
            468 => 
            array (
                'country_id' => 166,
                'id' => 3051,
                'name' => 'Ash Sharqiyah Region',
            ),
            469 => 
            array (
                'country_id' => 166,
                'id' => 3052,
                'name' => 'Musandam',
            ),
            470 => 
            array (
                'country_id' => 166,
                'id' => 3053,
                'name' => 'Ash Sharqiyah North',
            ),
            471 => 
            array (
                'country_id' => 166,
                'id' => 3054,
                'name' => 'Ash Sharqiyah South',
            ),
            472 => 
            array (
                'country_id' => 166,
                'id' => 3055,
                'name' => 'Muscat',
            ),
            473 => 
            array (
                'country_id' => 166,
                'id' => 3056,
                'name' => 'Al Wusta',
            ),
            474 => 
            array (
                'country_id' => 166,
                'id' => 3057,
                'name' => 'Dhofar',
            ),
            475 => 
            array (
                'country_id' => 166,
                'id' => 3058,
                'name' => 'Ad Dakhiliyah',
            ),
            476 => 
            array (
                'country_id' => 166,
                'id' => 3059,
                'name' => 'Al Buraimi',
            ),
            477 => 
            array (
                'country_id' => 29,
                'id' => 3060,
                'name' => 'Ngamiland',
            ),
            478 => 
            array (
                'country_id' => 29,
                'id' => 3061,
                'name' => 'Ghanzi District',
            ),
            479 => 
            array (
                'country_id' => 29,
                'id' => 3062,
                'name' => 'Kgatleng District',
            ),
            480 => 
            array (
                'country_id' => 29,
                'id' => 3063,
                'name' => 'Southern District',
            ),
            481 => 
            array (
                'country_id' => 29,
                'id' => 3064,
                'name' => 'South-East District',
            ),
            482 => 
            array (
                'country_id' => 29,
                'id' => 3065,
                'name' => 'North-West District',
            ),
            483 => 
            array (
                'country_id' => 29,
                'id' => 3066,
                'name' => 'Kgalagadi District',
            ),
            484 => 
            array (
                'country_id' => 29,
                'id' => 3067,
                'name' => 'Central District',
            ),
            485 => 
            array (
                'country_id' => 29,
                'id' => 3068,
                'name' => 'North-East District',
            ),
            486 => 
            array (
                'country_id' => 29,
                'id' => 3069,
                'name' => 'Kweneng District',
            ),
            487 => 
            array (
                'country_id' => 24,
                'id' => 3070,
                'name' => 'Collines Department',
            ),
            488 => 
            array (
                'country_id' => 24,
                'id' => 3071,
                'name' => 'Kouffo Department',
            ),
            489 => 
            array (
                'country_id' => 24,
                'id' => 3072,
                'name' => 'Donga Department',
            ),
            490 => 
            array (
                'country_id' => 24,
                'id' => 3073,
                'name' => 'Zou Department',
            ),
            491 => 
            array (
                'country_id' => 24,
                'id' => 3074,
                'name' => 'Plateau Department',
            ),
            492 => 
            array (
                'country_id' => 24,
                'id' => 3075,
                'name' => 'Mono Department',
            ),
            493 => 
            array (
                'country_id' => 24,
                'id' => 3076,
                'name' => 'Atakora Department',
            ),
            494 => 
            array (
                'country_id' => 24,
                'id' => 3077,
                'name' => 'Alibori Department',
            ),
            495 => 
            array (
                'country_id' => 24,
                'id' => 3078,
                'name' => 'Borgou Department',
            ),
            496 => 
            array (
                'country_id' => 24,
                'id' => 3079,
                'name' => 'Atlantique Department',
            ),
            497 => 
            array (
                'country_id' => 24,
                'id' => 3080,
                'name' => 'Ouémé Department',
            ),
            498 => 
            array (
                'country_id' => 24,
                'id' => 3081,
                'name' => 'Littoral Department',
            ),
            499 => 
            array (
                'country_id' => 131,
                'id' => 3082,
                'name' => 'Machinga District',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 131,
                'id' => 3083,
                'name' => 'Zomba District',
            ),
            1 => 
            array (
                'country_id' => 131,
                'id' => 3084,
                'name' => 'Mwanza District',
            ),
            2 => 
            array (
                'country_id' => 131,
                'id' => 3085,
                'name' => 'Nsanje District',
            ),
            3 => 
            array (
                'country_id' => 131,
                'id' => 3086,
                'name' => 'Salima District',
            ),
            4 => 
            array (
                'country_id' => 131,
                'id' => 3087,
                'name' => 'Chitipa district',
            ),
            5 => 
            array (
                'country_id' => 131,
                'id' => 3088,
                'name' => 'Ntcheu District',
            ),
            6 => 
            array (
                'country_id' => 131,
                'id' => 3089,
                'name' => 'Rumphi District',
            ),
            7 => 
            array (
                'country_id' => 131,
                'id' => 3090,
                'name' => 'Dowa District',
            ),
            8 => 
            array (
                'country_id' => 131,
                'id' => 3091,
                'name' => 'Karonga District',
            ),
            9 => 
            array (
                'country_id' => 131,
                'id' => 3092,
                'name' => 'Central Region',
            ),
            10 => 
            array (
                'country_id' => 131,
                'id' => 3093,
                'name' => 'Likoma District',
            ),
            11 => 
            array (
                'country_id' => 131,
                'id' => 3094,
                'name' => 'Kasungu District',
            ),
            12 => 
            array (
                'country_id' => 131,
                'id' => 3095,
                'name' => 'Nkhata Bay District',
            ),
            13 => 
            array (
                'country_id' => 131,
                'id' => 3096,
                'name' => 'Balaka District',
            ),
            14 => 
            array (
                'country_id' => 131,
                'id' => 3097,
                'name' => 'Dedza District',
            ),
            15 => 
            array (
                'country_id' => 131,
                'id' => 3098,
                'name' => 'Thyolo District',
            ),
            16 => 
            array (
                'country_id' => 131,
                'id' => 3099,
                'name' => 'Mchinji District',
            ),
            17 => 
            array (
                'country_id' => 131,
                'id' => 3100,
                'name' => 'Nkhotakota District',
            ),
            18 => 
            array (
                'country_id' => 131,
                'id' => 3101,
                'name' => 'Lilongwe District',
            ),
            19 => 
            array (
                'country_id' => 131,
                'id' => 3102,
                'name' => 'Blantyre District',
            ),
            20 => 
            array (
                'country_id' => 131,
                'id' => 3103,
                'name' => 'Mulanje District',
            ),
            21 => 
            array (
                'country_id' => 131,
                'id' => 3104,
                'name' => 'Mzimba District',
            ),
            22 => 
            array (
                'country_id' => 131,
                'id' => 3105,
                'name' => 'Northern Region',
            ),
            23 => 
            array (
                'country_id' => 131,
                'id' => 3106,
                'name' => 'Southern Region',
            ),
            24 => 
            array (
                'country_id' => 131,
                'id' => 3107,
                'name' => 'Chikwawa District',
            ),
            25 => 
            array (
                'country_id' => 131,
                'id' => 3108,
                'name' => 'Phalombe District',
            ),
            26 => 
            array (
                'country_id' => 131,
                'id' => 3109,
                'name' => 'Chiradzulu District',
            ),
            27 => 
            array (
                'country_id' => 131,
                'id' => 3110,
                'name' => 'Mangochi District',
            ),
            28 => 
            array (
                'country_id' => 131,
                'id' => 3111,
                'name' => 'Ntchisi District',
            ),
            29 => 
            array (
                'country_id' => 35,
                'id' => 3112,
                'name' => 'Kénédougou Province',
            ),
            30 => 
            array (
                'country_id' => 35,
                'id' => 3113,
                'name' => 'Namentenga Province',
            ),
            31 => 
            array (
                'country_id' => 35,
                'id' => 3114,
                'name' => 'Sahel Region',
            ),
            32 => 
            array (
                'country_id' => 35,
                'id' => 3115,
                'name' => 'Centre-Ouest Region',
            ),
            33 => 
            array (
                'country_id' => 35,
                'id' => 3116,
                'name' => 'Nahouri Province',
            ),
            34 => 
            array (
                'country_id' => 35,
                'id' => 3117,
                'name' => 'Passoré Province',
            ),
            35 => 
            array (
                'country_id' => 35,
                'id' => 3118,
                'name' => 'Zoundwéogo Province',
            ),
            36 => 
            array (
                'country_id' => 35,
                'id' => 3119,
                'name' => 'Sissili Province',
            ),
            37 => 
            array (
                'country_id' => 35,
                'id' => 3120,
                'name' => 'Banwa Province',
            ),
            38 => 
            array (
                'country_id' => 35,
                'id' => 3121,
                'name' => 'Bougouriba Province',
            ),
            39 => 
            array (
                'country_id' => 35,
                'id' => 3122,
                'name' => 'Gnagna Province',
            ),
            40 => 
            array (
                'country_id' => 35,
                'id' => 3123,
                'name' => 'Mouhoun',
            ),
            41 => 
            array (
                'country_id' => 35,
                'id' => 3124,
                'name' => 'Yagha Province',
            ),
            42 => 
            array (
                'country_id' => 35,
                'id' => 3125,
                'name' => 'Plateau-Central Region',
            ),
            43 => 
            array (
                'country_id' => 35,
                'id' => 3126,
                'name' => 'Sanmatenga Province',
            ),
            44 => 
            array (
                'country_id' => 35,
                'id' => 3127,
                'name' => 'Centre-Nord Region',
            ),
            45 => 
            array (
                'country_id' => 35,
                'id' => 3128,
                'name' => 'Tapoa Province',
            ),
            46 => 
            array (
                'country_id' => 35,
                'id' => 3129,
                'name' => 'Houet Province',
            ),
            47 => 
            array (
                'country_id' => 35,
                'id' => 3130,
                'name' => 'Zondoma Province',
            ),
            48 => 
            array (
                'country_id' => 35,
                'id' => 3131,
                'name' => 'Boulgou',
            ),
            49 => 
            array (
                'country_id' => 35,
                'id' => 3132,
                'name' => 'Komondjari Province',
            ),
            50 => 
            array (
                'country_id' => 35,
                'id' => 3133,
                'name' => 'Koulpélogo Province',
            ),
            51 => 
            array (
                'country_id' => 35,
                'id' => 3134,
                'name' => 'Tuy Province',
            ),
            52 => 
            array (
                'country_id' => 35,
                'id' => 3135,
                'name' => 'Ioba Province',
            ),
            53 => 
            array (
                'country_id' => 35,
                'id' => 3136,
                'name' => 'Centre',
            ),
            54 => 
            array (
                'country_id' => 35,
                'id' => 3137,
                'name' => 'Sourou Province',
            ),
            55 => 
            array (
                'country_id' => 35,
                'id' => 3138,
                'name' => 'Boucle du Mouhoun Region',
            ),
            56 => 
            array (
                'country_id' => 35,
                'id' => 3139,
                'name' => 'Séno Province',
            ),
            57 => 
            array (
                'country_id' => 35,
                'id' => 3140,
                'name' => 'Sud-Ouest Region',
            ),
            58 => 
            array (
                'country_id' => 35,
                'id' => 3141,
                'name' => 'Oubritenga Province',
            ),
            59 => 
            array (
                'country_id' => 35,
                'id' => 3142,
                'name' => 'Nayala Province',
            ),
            60 => 
            array (
                'country_id' => 35,
                'id' => 3143,
                'name' => 'Gourma Province',
            ),
            61 => 
            array (
                'country_id' => 35,
                'id' => 3144,
                'name' => 'Oudalan Province',
            ),
            62 => 
            array (
                'country_id' => 35,
                'id' => 3145,
                'name' => 'Ziro Province',
            ),
            63 => 
            array (
                'country_id' => 35,
                'id' => 3146,
                'name' => 'Kossi Province',
            ),
            64 => 
            array (
                'country_id' => 35,
                'id' => 3147,
                'name' => 'Kourwéogo Province',
            ),
            65 => 
            array (
                'country_id' => 35,
                'id' => 3148,
                'name' => 'Ganzourgou Province',
            ),
            66 => 
            array (
                'country_id' => 35,
                'id' => 3149,
                'name' => 'Centre-Sud Region',
            ),
            67 => 
            array (
                'country_id' => 35,
                'id' => 3150,
                'name' => 'Yatenga Province',
            ),
            68 => 
            array (
                'country_id' => 35,
                'id' => 3151,
                'name' => 'Loroum Province',
            ),
            69 => 
            array (
                'country_id' => 35,
                'id' => 3152,
                'name' => 'Bazèga Province',
            ),
            70 => 
            array (
                'country_id' => 35,
                'id' => 3153,
                'name' => 'Cascades Region',
            ),
            71 => 
            array (
                'country_id' => 35,
                'id' => 3154,
                'name' => 'Sanguié Province',
            ),
            72 => 
            array (
                'country_id' => 35,
                'id' => 3155,
                'name' => 'Bam Province',
            ),
            73 => 
            array (
                'country_id' => 35,
                'id' => 3156,
                'name' => 'Noumbiel Province',
            ),
            74 => 
            array (
                'country_id' => 35,
                'id' => 3157,
                'name' => 'Kompienga Province',
            ),
            75 => 
            array (
                'country_id' => 35,
                'id' => 3158,
                'name' => 'Est Region',
            ),
            76 => 
            array (
                'country_id' => 35,
                'id' => 3159,
                'name' => 'Léraba Province',
            ),
            77 => 
            array (
                'country_id' => 35,
                'id' => 3160,
                'name' => 'Balé Province',
            ),
            78 => 
            array (
                'country_id' => 35,
                'id' => 3161,
                'name' => 'Kouritenga Province',
            ),
            79 => 
            array (
                'country_id' => 35,
                'id' => 3162,
                'name' => 'Centre-Est Region',
            ),
            80 => 
            array (
                'country_id' => 35,
                'id' => 3163,
                'name' => 'Poni Province',
            ),
            81 => 
            array (
                'country_id' => 35,
                'id' => 3164,
                'name' => 'Nord Region, Burkina Faso',
            ),
            82 => 
            array (
                'country_id' => 35,
                'id' => 3165,
                'name' => 'Hauts-Bassins Region',
            ),
            83 => 
            array (
                'country_id' => 35,
                'id' => 3166,
                'name' => 'Soum Province',
            ),
            84 => 
            array (
                'country_id' => 35,
                'id' => 3167,
                'name' => 'Comoé Province',
            ),
            85 => 
            array (
                'country_id' => 35,
                'id' => 3168,
                'name' => 'Kadiogo Province',
            ),
            86 => 
            array (
                'country_id' => 167,
                'id' => 3169,
                'name' => 'Islamabad Capital Territory',
            ),
            87 => 
            array (
                'country_id' => 167,
                'id' => 3170,
                'name' => 'Gilgit-Baltistan',
            ),
            88 => 
            array (
                'country_id' => 167,
                'id' => 3171,
                'name' => 'Khyber Pakhtunkhwa',
            ),
            89 => 
            array (
                'country_id' => 167,
                'id' => 3172,
                'name' => 'Azad Kashmir',
            ),
            90 => 
            array (
                'country_id' => 167,
                'id' => 3173,
                'name' => 'Federally Administered Tribal Areas',
            ),
            91 => 
            array (
                'country_id' => 167,
                'id' => 3174,
                'name' => 'Balochistan',
            ),
            92 => 
            array (
                'country_id' => 167,
                'id' => 3175,
                'name' => 'Sindh',
            ),
            93 => 
            array (
                'country_id' => 167,
                'id' => 3176,
                'name' => 'Punjab',
            ),
            94 => 
            array (
                'country_id' => 179,
                'id' => 3177,
                'name' => 'Al Rayyan Municipality',
            ),
            95 => 
            array (
                'country_id' => 179,
                'id' => 3178,
                'name' => 'Al-Shahaniya',
            ),
            96 => 
            array (
                'country_id' => 179,
                'id' => 3179,
                'name' => 'Al Wakrah',
            ),
            97 => 
            array (
                'country_id' => 179,
                'id' => 3180,
                'name' => 'Madinat ash Shamal',
            ),
            98 => 
            array (
                'country_id' => 179,
                'id' => 3181,
                'name' => 'Doha',
            ),
            99 => 
            array (
                'country_id' => 179,
                'id' => 3182,
                'name' => 'Al Daayen',
            ),
            100 => 
            array (
                'country_id' => 179,
                'id' => 3183,
                'name' => 'Al Khor',
            ),
            101 => 
            array (
                'country_id' => 179,
                'id' => 3184,
                'name' => 'Umm Salal Municipality',
            ),
            102 => 
            array (
                'country_id' => 36,
                'id' => 3185,
                'name' => 'Rumonge Province',
            ),
            103 => 
            array (
                'country_id' => 36,
                'id' => 3186,
                'name' => 'Muyinga Province',
            ),
            104 => 
            array (
                'country_id' => 36,
                'id' => 3187,
                'name' => 'Mwaro Province',
            ),
            105 => 
            array (
                'country_id' => 36,
                'id' => 3188,
                'name' => 'Makamba Province',
            ),
            106 => 
            array (
                'country_id' => 36,
                'id' => 3189,
                'name' => 'Rutana Province',
            ),
            107 => 
            array (
                'country_id' => 36,
                'id' => 3190,
                'name' => 'Cibitoke Province',
            ),
            108 => 
            array (
                'country_id' => 36,
                'id' => 3191,
                'name' => 'Ruyigi Province',
            ),
            109 => 
            array (
                'country_id' => 36,
                'id' => 3192,
                'name' => 'Kayanza Province',
            ),
            110 => 
            array (
                'country_id' => 36,
                'id' => 3193,
                'name' => 'Muramvya Province',
            ),
            111 => 
            array (
                'country_id' => 36,
                'id' => 3194,
                'name' => 'Karuzi Province',
            ),
            112 => 
            array (
                'country_id' => 36,
                'id' => 3195,
                'name' => 'Kirundo Province',
            ),
            113 => 
            array (
                'country_id' => 36,
                'id' => 3196,
                'name' => 'Bubanza Province',
            ),
            114 => 
            array (
                'country_id' => 36,
                'id' => 3197,
                'name' => 'Gitega Province',
            ),
            115 => 
            array (
                'country_id' => 36,
                'id' => 3198,
                'name' => 'Bujumbura Mairie Province',
            ),
            116 => 
            array (
                'country_id' => 36,
                'id' => 3199,
                'name' => 'Ngozi Province',
            ),
            117 => 
            array (
                'country_id' => 36,
                'id' => 3200,
                'name' => 'Bujumbura Rural Province',
            ),
            118 => 
            array (
                'country_id' => 36,
                'id' => 3201,
                'name' => 'Cankuzo Province',
            ),
            119 => 
            array (
                'country_id' => 36,
                'id' => 3202,
                'name' => 'Bururi Province',
            ),
            120 => 
            array (
                'country_id' => 235,
                'id' => 3203,
                'name' => 'Flores',
            ),
            121 => 
            array (
                'country_id' => 235,
                'id' => 3204,
                'name' => 'San José',
            ),
            122 => 
            array (
                'country_id' => 235,
                'id' => 3205,
                'name' => 'Artigas',
            ),
            123 => 
            array (
                'country_id' => 235,
                'id' => 3206,
                'name' => 'Maldonado',
            ),
            124 => 
            array (
                'country_id' => 235,
                'id' => 3207,
                'name' => 'Rivera',
            ),
            125 => 
            array (
                'country_id' => 235,
                'id' => 3208,
                'name' => 'Colonia',
            ),
            126 => 
            array (
                'country_id' => 235,
                'id' => 3209,
                'name' => 'Durazno',
            ),
            127 => 
            array (
                'country_id' => 235,
                'id' => 3210,
                'name' => 'Río Negro',
            ),
            128 => 
            array (
                'country_id' => 235,
                'id' => 3211,
                'name' => 'Cerro Largo',
            ),
            129 => 
            array (
                'country_id' => 235,
                'id' => 3212,
                'name' => 'Paysandú',
            ),
            130 => 
            array (
                'country_id' => 235,
                'id' => 3213,
                'name' => 'Canelones',
            ),
            131 => 
            array (
                'country_id' => 235,
                'id' => 3214,
                'name' => 'Treinta y Tres',
            ),
            132 => 
            array (
                'country_id' => 235,
                'id' => 3215,
                'name' => 'Lavalleja',
            ),
            133 => 
            array (
                'country_id' => 235,
                'id' => 3216,
                'name' => 'Rocha',
            ),
            134 => 
            array (
                'country_id' => 235,
                'id' => 3217,
                'name' => 'Florida',
            ),
            135 => 
            array (
                'country_id' => 235,
                'id' => 3218,
                'name' => 'Montevideo',
            ),
            136 => 
            array (
                'country_id' => 235,
                'id' => 3219,
                'name' => 'Soriano',
            ),
            137 => 
            array (
                'country_id' => 235,
                'id' => 3220,
                'name' => 'Salto',
            ),
            138 => 
            array (
                'country_id' => 235,
                'id' => 3221,
                'name' => 'Tacuarembó',
            ),
            139 => 
            array (
                'country_id' => 65,
                'id' => 3222,
                'name' => 'Kafr el-Sheikh',
            ),
            140 => 
            array (
                'country_id' => 65,
                'id' => 3223,
                'name' => 'Cairo',
            ),
            141 => 
            array (
                'country_id' => 65,
                'id' => 3224,
                'name' => 'Damietta',
            ),
            142 => 
            array (
                'country_id' => 65,
                'id' => 3225,
                'name' => 'Aswan',
            ),
            143 => 
            array (
                'country_id' => 65,
                'id' => 3226,
                'name' => 'Sohag',
            ),
            144 => 
            array (
                'country_id' => 65,
                'id' => 3227,
                'name' => 'North Sinai',
            ),
            145 => 
            array (
                'country_id' => 65,
                'id' => 3228,
                'name' => 'Monufia',
            ),
            146 => 
            array (
                'country_id' => 65,
                'id' => 3229,
                'name' => 'Port Said',
            ),
            147 => 
            array (
                'country_id' => 65,
                'id' => 3230,
                'name' => 'Beni Suef',
            ),
            148 => 
            array (
                'country_id' => 65,
                'id' => 3231,
                'name' => 'Matrouh',
            ),
            149 => 
            array (
                'country_id' => 65,
                'id' => 3232,
                'name' => 'Qalyubia',
            ),
            150 => 
            array (
                'country_id' => 65,
                'id' => 3233,
                'name' => 'Suez',
            ),
            151 => 
            array (
                'country_id' => 65,
                'id' => 3234,
                'name' => 'Gharbia',
            ),
            152 => 
            array (
                'country_id' => 65,
                'id' => 3235,
                'name' => 'Alexandria',
            ),
            153 => 
            array (
                'country_id' => 65,
                'id' => 3236,
                'name' => 'Asyut',
            ),
            154 => 
            array (
                'country_id' => 65,
                'id' => 3237,
                'name' => 'South Sinai',
            ),
            155 => 
            array (
                'country_id' => 65,
                'id' => 3238,
                'name' => 'Faiyum',
            ),
            156 => 
            array (
                'country_id' => 65,
                'id' => 3239,
                'name' => 'Giza',
            ),
            157 => 
            array (
                'country_id' => 65,
                'id' => 3240,
                'name' => 'Red Sea',
            ),
            158 => 
            array (
                'country_id' => 65,
                'id' => 3241,
                'name' => 'Beheira',
            ),
            159 => 
            array (
                'country_id' => 65,
                'id' => 3242,
                'name' => 'Luxor',
            ),
            160 => 
            array (
                'country_id' => 65,
                'id' => 3243,
                'name' => 'Minya',
            ),
            161 => 
            array (
                'country_id' => 65,
                'id' => 3244,
                'name' => 'Ismailia',
            ),
            162 => 
            array (
                'country_id' => 65,
                'id' => 3245,
                'name' => 'Dakahlia',
            ),
            163 => 
            array (
                'country_id' => 65,
                'id' => 3246,
                'name' => 'New Valley',
            ),
            164 => 
            array (
                'country_id' => 65,
                'id' => 3247,
                'name' => 'Qena',
            ),
            165 => 
            array (
                'country_id' => 140,
                'id' => 3248,
                'name' => 'Agalega Islands',
            ),
            166 => 
            array (
                'country_id' => 140,
                'id' => 3249,
                'name' => 'Rodrigues Island',
            ),
            167 => 
            array (
                'country_id' => 140,
                'id' => 3250,
                'name' => 'Pamplemousses',
            ),
            168 => 
            array (
                'country_id' => 140,
                'id' => 3251,
                'name' => 'Saint Brandon Islands',
            ),
            169 => 
            array (
                'country_id' => 140,
                'id' => 3253,
                'name' => 'Moka',
            ),
            170 => 
            array (
                'country_id' => 140,
                'id' => 3254,
                'name' => 'Flacq',
            ),
            171 => 
            array (
                'country_id' => 140,
                'id' => 3257,
                'name' => 'Savanne',
            ),
            172 => 
            array (
                'country_id' => 140,
                'id' => 3259,
                'name' => 'Black River',
            ),
            173 => 
            array (
                'country_id' => 140,
                'id' => 3260,
                'name' => 'Port Louis',
            ),
            174 => 
            array (
                'country_id' => 140,
                'id' => 3261,
                'name' => 'Rivière du Rempart',
            ),
            175 => 
            array (
                'country_id' => 140,
                'id' => 3263,
                'name' => 'Plaines Wilhems',
            ),
            176 => 
            array (
                'country_id' => 140,
                'id' => 3264,
                'name' => 'Grand Port',
            ),
            177 => 
            array (
                'country_id' => 149,
                'id' => 3265,
                'name' => 'Guelmim',
            ),
            178 => 
            array (
                'country_id' => 149,
                'id' => 3266,
            'name' => 'Aousserd (EH)',
            ),
            179 => 
            array (
                'country_id' => 149,
                'id' => 3267,
                'name' => 'Al Hoceïma',
            ),
            180 => 
            array (
                'country_id' => 149,
                'id' => 3268,
                'name' => 'Larache',
            ),
            181 => 
            array (
                'country_id' => 149,
                'id' => 3269,
                'name' => 'Ouarzazate',
            ),
            182 => 
            array (
                'country_id' => 149,
                'id' => 3270,
                'name' => 'Boulemane',
            ),
            183 => 
            array (
                'country_id' => 149,
                'id' => 3271,
                'name' => 'L\'Oriental',
            ),
            184 => 
            array (
                'country_id' => 149,
                'id' => 3272,
                'name' => 'Béni Mellal',
            ),
            185 => 
            array (
                'country_id' => 149,
                'id' => 3274,
                'name' => 'Chichaoua',
            ),
            186 => 
            array (
                'country_id' => 149,
                'id' => 3275,
            'name' => 'Boujdour (EH)',
            ),
            187 => 
            array (
                'country_id' => 149,
                'id' => 3276,
                'name' => 'Khémisset',
            ),
            188 => 
            array (
                'country_id' => 149,
                'id' => 3277,
                'name' => 'Tiznit',
            ),
            189 => 
            array (
                'country_id' => 149,
                'id' => 3278,
                'name' => 'Béni Mellal-Khénifra',
            ),
            190 => 
            array (
                'country_id' => 149,
                'id' => 3279,
                'name' => 'Sidi Kacem',
            ),
            191 => 
            array (
                'country_id' => 149,
                'id' => 3280,
                'name' => 'El Jadida',
            ),
            192 => 
            array (
                'country_id' => 149,
                'id' => 3281,
                'name' => 'Nador',
            ),
            193 => 
            array (
                'country_id' => 149,
                'id' => 3282,
                'name' => 'Settat',
            ),
            194 => 
            array (
                'country_id' => 149,
                'id' => 3283,
                'name' => 'Zagora',
            ),
            195 => 
            array (
                'country_id' => 149,
                'id' => 3284,
                'name' => 'Médiouna',
            ),
            196 => 
            array (
                'country_id' => 149,
                'id' => 3285,
                'name' => 'Berkane',
            ),
            197 => 
            array (
                'country_id' => 149,
                'id' => 3286,
            'name' => 'Tan-Tan (EH-partial)',
            ),
            198 => 
            array (
                'country_id' => 149,
                'id' => 3287,
                'name' => 'Nouaceur',
            ),
            199 => 
            array (
                'country_id' => 149,
                'id' => 3288,
                'name' => 'Marrakesh-Safi',
            ),
            200 => 
            array (
                'country_id' => 149,
                'id' => 3289,
                'name' => 'Sefrou',
            ),
            201 => 
            array (
                'country_id' => 149,
                'id' => 3290,
                'name' => 'Drâa-Tafilalet',
            ),
            202 => 
            array (
                'country_id' => 149,
                'id' => 3291,
                'name' => 'El Hajeb',
            ),
            203 => 
            array (
                'country_id' => 149,
                'id' => 3292,
            'name' => 'Es-Semara (EH-partial)',
            ),
            204 => 
            array (
                'country_id' => 149,
                'id' => 3293,
            'name' => 'Laâyoune (EH)',
            ),
            205 => 
            array (
                'country_id' => 149,
                'id' => 3294,
                'name' => 'Inezgane-Ait Melloul',
            ),
            206 => 
            array (
                'country_id' => 149,
                'id' => 3295,
                'name' => 'Souss-Massa',
            ),
            207 => 
            array (
                'country_id' => 149,
                'id' => 3296,
                'name' => 'Taza',
            ),
            208 => 
            array (
                'country_id' => 149,
                'id' => 3297,
            'name' => 'Assa-Zag (EH-partial)',
            ),
            209 => 
            array (
                'country_id' => 149,
                'id' => 3298,
            'name' => 'Laâyoune-Sakia El Hamra (EH-partial)',
            ),
            210 => 
            array (
                'country_id' => 149,
                'id' => 3299,
                'name' => 'Errachidia',
            ),
            211 => 
            array (
                'country_id' => 149,
                'id' => 3300,
                'name' => 'Fahs-Anjra',
            ),
            212 => 
            array (
                'country_id' => 149,
                'id' => 3301,
                'name' => 'Figuig',
            ),
            213 => 
            array (
                'country_id' => 149,
                'id' => 3302,
                'name' => 'Chtouka-Ait Baha',
            ),
            214 => 
            array (
                'country_id' => 149,
                'id' => 3303,
                'name' => 'Casablanca-Settat',
            ),
            215 => 
            array (
                'country_id' => 149,
                'id' => 3304,
                'name' => 'Benslimane',
            ),
            216 => 
            array (
                'country_id' => 149,
                'id' => 3305,
            'name' => 'Guelmim-Oued Noun (EH-partial)',
            ),
            217 => 
            array (
                'country_id' => 149,
                'id' => 3306,
            'name' => 'Dakhla-Oued Ed-Dahab (EH)',
            ),
            218 => 
            array (
                'country_id' => 149,
                'id' => 3307,
                'name' => 'Jerada',
            ),
            219 => 
            array (
                'country_id' => 149,
                'id' => 3308,
                'name' => 'Kénitra',
            ),
            220 => 
            array (
                'country_id' => 149,
                'id' => 3309,
                'name' => 'El Kelâa des Sraghna',
            ),
            221 => 
            array (
                'country_id' => 149,
                'id' => 3310,
                'name' => 'Chefchaouen',
            ),
            222 => 
            array (
                'country_id' => 149,
                'id' => 3311,
                'name' => 'Safi',
            ),
            223 => 
            array (
                'country_id' => 149,
                'id' => 3312,
                'name' => 'Tata',
            ),
            224 => 
            array (
                'country_id' => 149,
                'id' => 3313,
                'name' => 'Fès-Meknès',
            ),
            225 => 
            array (
                'country_id' => 149,
                'id' => 3314,
                'name' => 'Taroudannt',
            ),
            226 => 
            array (
                'country_id' => 149,
                'id' => 3315,
                'name' => 'Moulay Yacoub',
            ),
            227 => 
            array (
                'country_id' => 149,
                'id' => 3316,
                'name' => 'Essaouira',
            ),
            228 => 
            array (
                'country_id' => 149,
                'id' => 3317,
                'name' => 'Khénifra',
            ),
            229 => 
            array (
                'country_id' => 149,
                'id' => 3318,
                'name' => 'Tétouan',
            ),
            230 => 
            array (
                'country_id' => 149,
                'id' => 3319,
            'name' => 'Oued Ed-Dahab (EH)',
            ),
            231 => 
            array (
                'country_id' => 149,
                'id' => 3320,
                'name' => 'Al Haouz',
            ),
            232 => 
            array (
                'country_id' => 149,
                'id' => 3321,
                'name' => 'Azilal',
            ),
            233 => 
            array (
                'country_id' => 149,
                'id' => 3322,
                'name' => 'Taourirt',
            ),
            234 => 
            array (
                'country_id' => 149,
                'id' => 3323,
                'name' => 'Taounate',
            ),
            235 => 
            array (
                'country_id' => 149,
                'id' => 3324,
                'name' => 'Tanger-Tétouan-Al Hoceïma',
            ),
            236 => 
            array (
                'country_id' => 149,
                'id' => 3325,
                'name' => 'Ifrane',
            ),
            237 => 
            array (
                'country_id' => 149,
                'id' => 3326,
                'name' => 'Khouribga',
            ),
            238 => 
            array (
                'country_id' => 150,
                'id' => 3327,
                'name' => 'Cabo Delgado Province',
            ),
            239 => 
            array (
                'country_id' => 150,
                'id' => 3328,
                'name' => 'Zambezia Province',
            ),
            240 => 
            array (
                'country_id' => 150,
                'id' => 3329,
                'name' => 'Gaza Province',
            ),
            241 => 
            array (
                'country_id' => 150,
                'id' => 3330,
                'name' => 'Inhambane Province',
            ),
            242 => 
            array (
                'country_id' => 150,
                'id' => 3331,
                'name' => 'Sofala Province',
            ),
            243 => 
            array (
                'country_id' => 150,
                'id' => 3332,
                'name' => 'Maputo Province',
            ),
            244 => 
            array (
                'country_id' => 150,
                'id' => 3333,
                'name' => 'Niassa Province',
            ),
            245 => 
            array (
                'country_id' => 150,
                'id' => 3334,
                'name' => 'Tete Province',
            ),
            246 => 
            array (
                'country_id' => 150,
                'id' => 3335,
                'name' => 'Maputo',
            ),
            247 => 
            array (
                'country_id' => 150,
                'id' => 3336,
                'name' => 'Nampula Province',
            ),
            248 => 
            array (
                'country_id' => 150,
                'id' => 3337,
                'name' => 'Manica Province',
            ),
            249 => 
            array (
                'country_id' => 139,
                'id' => 3338,
                'name' => 'Hodh Ech Chargui',
            ),
            250 => 
            array (
                'country_id' => 139,
                'id' => 3339,
                'name' => 'Brakna',
            ),
            251 => 
            array (
                'country_id' => 139,
                'id' => 3340,
                'name' => 'Tiris Zemmour',
            ),
            252 => 
            array (
                'country_id' => 139,
                'id' => 3341,
                'name' => 'Gorgol',
            ),
            253 => 
            array (
                'country_id' => 139,
                'id' => 3342,
                'name' => 'Inchiri',
            ),
            254 => 
            array (
                'country_id' => 139,
                'id' => 3343,
                'name' => 'Nouakchott-Nord',
            ),
            255 => 
            array (
                'country_id' => 139,
                'id' => 3344,
                'name' => 'Adrar',
            ),
            256 => 
            array (
                'country_id' => 139,
                'id' => 3345,
                'name' => 'Tagant',
            ),
            257 => 
            array (
                'country_id' => 139,
                'id' => 3346,
                'name' => 'Dakhlet Nouadhibou',
            ),
            258 => 
            array (
                'country_id' => 139,
                'id' => 3347,
                'name' => 'Nouakchott-Sud',
            ),
            259 => 
            array (
                'country_id' => 139,
                'id' => 3348,
                'name' => 'Trarza',
            ),
            260 => 
            array (
                'country_id' => 139,
                'id' => 3349,
                'name' => 'Assaba',
            ),
            261 => 
            array (
                'country_id' => 139,
                'id' => 3350,
                'name' => 'Guidimaka',
            ),
            262 => 
            array (
                'country_id' => 139,
                'id' => 3351,
                'name' => 'Hodh El Gharbi',
            ),
            263 => 
            array (
                'country_id' => 139,
                'id' => 3352,
                'name' => 'Nouakchott-Ouest',
            ),
            264 => 
            array (
                'country_id' => 223,
                'id' => 3353,
                'name' => 'Western Tobago',
            ),
            265 => 
            array (
                'country_id' => 223,
                'id' => 3354,
                'name' => 'Couva-Tabaquite-Talparo Regional Corporation',
            ),
            266 => 
            array (
                'country_id' => 223,
                'id' => 3355,
                'name' => 'Eastern Tobago',
            ),
            267 => 
            array (
                'country_id' => 223,
                'id' => 3356,
                'name' => 'Rio Claro-Mayaro Regional Corporation',
            ),
            268 => 
            array (
                'country_id' => 223,
                'id' => 3357,
                'name' => 'San Juan-Laventille Regional Corporation',
            ),
            269 => 
            array (
                'country_id' => 223,
                'id' => 3358,
                'name' => 'Tunapuna-Piarco Regional Corporation',
            ),
            270 => 
            array (
                'country_id' => 223,
                'id' => 3359,
                'name' => 'San Fernando',
            ),
            271 => 
            array (
                'country_id' => 223,
                'id' => 3360,
                'name' => 'Point Fortin',
            ),
            272 => 
            array (
                'country_id' => 223,
                'id' => 3361,
                'name' => 'Sangre Grande Regional Corporation',
            ),
            273 => 
            array (
                'country_id' => 223,
                'id' => 3362,
                'name' => 'Arima',
            ),
            274 => 
            array (
                'country_id' => 223,
                'id' => 3363,
                'name' => 'Port of Spain',
            ),
            275 => 
            array (
                'country_id' => 223,
                'id' => 3364,
                'name' => 'Siparia Regional Corporation',
            ),
            276 => 
            array (
                'country_id' => 223,
                'id' => 3365,
                'name' => 'Penal-Debe Regional Corporation',
            ),
            277 => 
            array (
                'country_id' => 223,
                'id' => 3366,
                'name' => 'Chaguanas',
            ),
            278 => 
            array (
                'country_id' => 223,
                'id' => 3367,
                'name' => 'Diego Martin Regional Corporation',
            ),
            279 => 
            array (
                'country_id' => 223,
                'id' => 3368,
                'name' => 'Princes Town Regional Corporation',
            ),
            280 => 
            array (
                'country_id' => 226,
                'id' => 3369,
                'name' => 'Mary Region',
            ),
            281 => 
            array (
                'country_id' => 226,
                'id' => 3370,
                'name' => 'Lebap Region',
            ),
            282 => 
            array (
                'country_id' => 226,
                'id' => 3371,
                'name' => 'Ashgabat',
            ),
            283 => 
            array (
                'country_id' => 226,
                'id' => 3372,
                'name' => 'Balkan Region',
            ),
            284 => 
            array (
                'country_id' => 226,
                'id' => 3373,
                'name' => 'Daşoguz Region',
            ),
            285 => 
            array (
                'country_id' => 226,
                'id' => 3374,
                'name' => 'Ahal Region',
            ),
            286 => 
            array (
                'country_id' => 27,
                'id' => 3375,
                'name' => 'Beni Department',
            ),
            287 => 
            array (
                'country_id' => 27,
                'id' => 3376,
                'name' => 'Oruro Department',
            ),
            288 => 
            array (
                'country_id' => 27,
                'id' => 3377,
                'name' => 'Santa Cruz Department',
            ),
            289 => 
            array (
                'country_id' => 27,
                'id' => 3378,
                'name' => 'Tarija Department',
            ),
            290 => 
            array (
                'country_id' => 27,
                'id' => 3379,
                'name' => 'Pando Department',
            ),
            291 => 
            array (
                'country_id' => 27,
                'id' => 3380,
                'name' => 'La Paz Department',
            ),
            292 => 
            array (
                'country_id' => 27,
                'id' => 3381,
                'name' => 'Cochabamba Department',
            ),
            293 => 
            array (
                'country_id' => 27,
                'id' => 3382,
                'name' => 'Chuquisaca Department',
            ),
            294 => 
            array (
                'country_id' => 27,
                'id' => 3383,
                'name' => 'Potosí Department',
            ),
            295 => 
            array (
                'country_id' => 188,
                'id' => 3384,
                'name' => 'Saint George Parish',
            ),
            296 => 
            array (
                'country_id' => 188,
                'id' => 3385,
                'name' => 'Saint Patrick Parish',
            ),
            297 => 
            array (
                'country_id' => 188,
                'id' => 3386,
                'name' => 'Saint Andrew Parish',
            ),
            298 => 
            array (
                'country_id' => 188,
                'id' => 3387,
                'name' => 'Saint David Parish',
            ),
            299 => 
            array (
                'country_id' => 188,
                'id' => 3388,
                'name' => 'Grenadines Parish',
            ),
            300 => 
            array (
                'country_id' => 188,
                'id' => 3389,
                'name' => 'Charlotte Parish',
            ),
            301 => 
            array (
                'country_id' => 231,
                'id' => 3390,
                'name' => 'Sharjah Emirate',
            ),
            302 => 
            array (
                'country_id' => 231,
                'id' => 3391,
                'name' => 'Dubai',
            ),
            303 => 
            array (
                'country_id' => 231,
                'id' => 3392,
                'name' => 'Umm al-Quwain',
            ),
            304 => 
            array (
                'country_id' => 231,
                'id' => 3393,
                'name' => 'Fujairah',
            ),
            305 => 
            array (
                'country_id' => 231,
                'id' => 3394,
                'name' => 'Ras al-Khaimah',
            ),
            306 => 
            array (
                'country_id' => 231,
                'id' => 3395,
                'name' => 'Ajman Emirate',
            ),
            307 => 
            array (
                'country_id' => 231,
                'id' => 3396,
                'name' => 'Abu Dhabi Emirate',
            ),
            308 => 
            array (
                'country_id' => 217,
                'id' => 3397,
                'name' => 'districts of Republican Subordination',
            ),
            309 => 
            array (
                'country_id' => 217,
                'id' => 3398,
                'name' => 'Khatlon Province',
            ),
            310 => 
            array (
                'country_id' => 217,
                'id' => 3399,
                'name' => 'Gorno-Badakhshan Autonomous Province',
            ),
            311 => 
            array (
                'country_id' => 217,
                'id' => 3400,
                'name' => 'Sughd Province',
            ),
            312 => 
            array (
                'country_id' => 216,
                'id' => 3402,
                'name' => 'Yilan',
            ),
            313 => 
            array (
                'country_id' => 216,
                'id' => 3403,
                'name' => 'Penghu',
            ),
            314 => 
            array (
                'country_id' => 216,
                'id' => 3404,
                'name' => 'Changhua',
            ),
            315 => 
            array (
                'country_id' => 216,
                'id' => 3405,
                'name' => 'Pingtung',
            ),
            316 => 
            array (
                'country_id' => 216,
                'id' => 3406,
                'name' => 'Taichung',
            ),
            317 => 
            array (
                'country_id' => 216,
                'id' => 3407,
                'name' => 'Nantou',
            ),
            318 => 
            array (
                'country_id' => 216,
                'id' => 3408,
                'name' => 'Chiayi',
            ),
            319 => 
            array (
                'country_id' => 216,
                'id' => 3410,
                'name' => 'Taitung',
            ),
            320 => 
            array (
                'country_id' => 216,
                'id' => 3411,
                'name' => 'Hualien',
            ),
            321 => 
            array (
                'country_id' => 216,
                'id' => 3412,
                'name' => 'Kaohsiung',
            ),
            322 => 
            array (
                'country_id' => 216,
                'id' => 3413,
                'name' => 'Miaoli',
            ),
            323 => 
            array (
                'country_id' => 216,
                'id' => 3415,
                'name' => 'Kinmen',
            ),
            324 => 
            array (
                'country_id' => 216,
                'id' => 3416,
                'name' => 'Yunlin',
            ),
            325 => 
            array (
                'country_id' => 216,
                'id' => 3417,
                'name' => 'Hsinchu',
            ),
            326 => 
            array (
                'country_id' => 216,
                'id' => 3418,
                'name' => 'Chiayi',
            ),
            327 => 
            array (
                'country_id' => 216,
                'id' => 3419,
                'name' => 'Taoyuan',
            ),
            328 => 
            array (
                'country_id' => 216,
                'id' => 3420,
                'name' => 'Lienchiang',
            ),
            329 => 
            array (
                'country_id' => 216,
                'id' => 3421,
                'name' => 'Tainan',
            ),
            330 => 
            array (
                'country_id' => 216,
                'id' => 3422,
                'name' => 'Taipei',
            ),
            331 => 
            array (
                'country_id' => 216,
                'id' => 3423,
                'name' => 'Hsinchu',
            ),
            332 => 
            array (
                'country_id' => 68,
                'id' => 3424,
                'name' => 'Northern Red Sea Region',
            ),
            333 => 
            array (
                'country_id' => 68,
                'id' => 3425,
                'name' => 'Anseba Region',
            ),
            334 => 
            array (
                'country_id' => 68,
                'id' => 3426,
                'name' => 'Maekel Region',
            ),
            335 => 
            array (
                'country_id' => 68,
                'id' => 3427,
                'name' => 'Debub Region',
            ),
            336 => 
            array (
                'country_id' => 68,
                'id' => 3428,
                'name' => 'Gash-Barka Region',
            ),
            337 => 
            array (
                'country_id' => 68,
                'id' => 3429,
                'name' => 'Southern Red Sea Region',
            ),
            338 => 
            array (
                'country_id' => 100,
                'id' => 3430,
                'name' => 'Southern Peninsula Region',
            ),
            339 => 
            array (
                'country_id' => 100,
                'id' => 3431,
                'name' => 'Capital Region',
            ),
            340 => 
            array (
                'country_id' => 100,
                'id' => 3432,
                'name' => 'Westfjords',
            ),
            341 => 
            array (
                'country_id' => 100,
                'id' => 3433,
                'name' => 'Eastern Region',
            ),
            342 => 
            array (
                'country_id' => 100,
                'id' => 3434,
                'name' => 'Southern Region',
            ),
            343 => 
            array (
                'country_id' => 100,
                'id' => 3435,
                'name' => 'Northwestern Region',
            ),
            344 => 
            array (
                'country_id' => 100,
                'id' => 3436,
                'name' => 'Western Region',
            ),
            345 => 
            array (
                'country_id' => 100,
                'id' => 3437,
                'name' => 'Northeastern Region',
            ),
            346 => 
            array (
                'country_id' => 67,
                'id' => 3438,
                'name' => 'Río Muni',
            ),
            347 => 
            array (
                'country_id' => 67,
                'id' => 3439,
                'name' => 'Kié-Ntem Province',
            ),
            348 => 
            array (
                'country_id' => 67,
                'id' => 3440,
                'name' => 'Wele-Nzas Province',
            ),
            349 => 
            array (
                'country_id' => 67,
                'id' => 3441,
                'name' => 'Litoral Province',
            ),
            350 => 
            array (
                'country_id' => 67,
                'id' => 3442,
                'name' => 'Insular Region',
            ),
            351 => 
            array (
                'country_id' => 67,
                'id' => 3443,
                'name' => 'Bioko Sur Province',
            ),
            352 => 
            array (
                'country_id' => 67,
                'id' => 3444,
                'name' => 'Annobón Province',
            ),
            353 => 
            array (
                'country_id' => 67,
                'id' => 3445,
                'name' => 'Centro Sur Province',
            ),
            354 => 
            array (
                'country_id' => 67,
                'id' => 3446,
                'name' => 'Bioko Norte Province',
            ),
            355 => 
            array (
                'country_id' => 142,
                'id' => 3447,
                'name' => 'Chihuahua',
            ),
            356 => 
            array (
                'country_id' => 142,
                'id' => 3448,
                'name' => 'Oaxaca',
            ),
            357 => 
            array (
                'country_id' => 142,
                'id' => 3449,
                'name' => 'Sinaloa',
            ),
            358 => 
            array (
                'country_id' => 142,
                'id' => 3450,
                'name' => 'Estado de México',
            ),
            359 => 
            array (
                'country_id' => 142,
                'id' => 3451,
                'name' => 'Chiapas',
            ),
            360 => 
            array (
                'country_id' => 142,
                'id' => 3452,
                'name' => 'Nuevo León',
            ),
            361 => 
            array (
                'country_id' => 142,
                'id' => 3453,
                'name' => 'Durango',
            ),
            362 => 
            array (
                'country_id' => 142,
                'id' => 3454,
                'name' => 'Tabasco',
            ),
            363 => 
            array (
                'country_id' => 142,
                'id' => 3455,
                'name' => 'Querétaro',
            ),
            364 => 
            array (
                'country_id' => 142,
                'id' => 3456,
                'name' => 'Aguascalientes',
            ),
            365 => 
            array (
                'country_id' => 142,
                'id' => 3457,
                'name' => 'Baja California',
            ),
            366 => 
            array (
                'country_id' => 142,
                'id' => 3458,
                'name' => 'Tlaxcala',
            ),
            367 => 
            array (
                'country_id' => 142,
                'id' => 3459,
                'name' => 'Guerrero',
            ),
            368 => 
            array (
                'country_id' => 142,
                'id' => 3460,
                'name' => 'Baja California Sur',
            ),
            369 => 
            array (
                'country_id' => 142,
                'id' => 3461,
                'name' => 'San Luis Potosí',
            ),
            370 => 
            array (
                'country_id' => 142,
                'id' => 3462,
                'name' => 'Zacatecas',
            ),
            371 => 
            array (
                'country_id' => 142,
                'id' => 3463,
                'name' => 'Tamaulipas',
            ),
            372 => 
            array (
                'country_id' => 142,
                'id' => 3464,
                'name' => 'Veracruz de Ignacio de la Llave',
            ),
            373 => 
            array (
                'country_id' => 142,
                'id' => 3465,
                'name' => 'Morelos',
            ),
            374 => 
            array (
                'country_id' => 142,
                'id' => 3466,
                'name' => 'Yucatán',
            ),
            375 => 
            array (
                'country_id' => 142,
                'id' => 3467,
                'name' => 'Quintana Roo',
            ),
            376 => 
            array (
                'country_id' => 142,
                'id' => 3468,
                'name' => 'Sonora',
            ),
            377 => 
            array (
                'country_id' => 142,
                'id' => 3469,
                'name' => 'Guanajuato',
            ),
            378 => 
            array (
                'country_id' => 142,
                'id' => 3470,
                'name' => 'Hidalgo',
            ),
            379 => 
            array (
                'country_id' => 142,
                'id' => 3471,
                'name' => 'Coahuila de Zaragoza',
            ),
            380 => 
            array (
                'country_id' => 142,
                'id' => 3472,
                'name' => 'Colima',
            ),
            381 => 
            array (
                'country_id' => 142,
                'id' => 3473,
                'name' => 'Ciudad de México',
            ),
            382 => 
            array (
                'country_id' => 142,
                'id' => 3474,
                'name' => 'Michoacán de Ocampo',
            ),
            383 => 
            array (
                'country_id' => 142,
                'id' => 3475,
                'name' => 'Campeche',
            ),
            384 => 
            array (
                'country_id' => 142,
                'id' => 3476,
                'name' => 'Puebla',
            ),
            385 => 
            array (
                'country_id' => 142,
                'id' => 3477,
                'name' => 'Nayarit',
            ),
            386 => 
            array (
                'country_id' => 219,
                'id' => 3478,
                'name' => 'Krabi',
            ),
            387 => 
            array (
                'country_id' => 219,
                'id' => 3479,
                'name' => 'Ranong',
            ),
            388 => 
            array (
                'country_id' => 219,
                'id' => 3480,
                'name' => 'Nong Bua Lam Phu',
            ),
            389 => 
            array (
                'country_id' => 219,
                'id' => 3481,
                'name' => 'Samut Prakan',
            ),
            390 => 
            array (
                'country_id' => 219,
                'id' => 3482,
                'name' => 'Surat Thani',
            ),
            391 => 
            array (
                'country_id' => 219,
                'id' => 3483,
                'name' => 'Lamphun',
            ),
            392 => 
            array (
                'country_id' => 219,
                'id' => 3484,
                'name' => 'Nong Khai',
            ),
            393 => 
            array (
                'country_id' => 219,
                'id' => 3485,
                'name' => 'Khon Kaen',
            ),
            394 => 
            array (
                'country_id' => 219,
                'id' => 3486,
                'name' => 'Chanthaburi',
            ),
            395 => 
            array (
                'country_id' => 219,
                'id' => 3487,
                'name' => 'Saraburi',
            ),
            396 => 
            array (
                'country_id' => 219,
                'id' => 3488,
                'name' => 'Phatthalung',
            ),
            397 => 
            array (
                'country_id' => 219,
                'id' => 3489,
                'name' => 'Uttaradit',
            ),
            398 => 
            array (
                'country_id' => 219,
                'id' => 3490,
                'name' => 'Sing Buri',
            ),
            399 => 
            array (
                'country_id' => 219,
                'id' => 3491,
                'name' => 'Chiang Mai',
            ),
            400 => 
            array (
                'country_id' => 219,
                'id' => 3492,
                'name' => 'Nakhon Sawan',
            ),
            401 => 
            array (
                'country_id' => 219,
                'id' => 3493,
                'name' => 'Yala',
            ),
            402 => 
            array (
                'country_id' => 219,
                'id' => 3494,
                'name' => 'Phra Nakhon Si Ayutthaya',
            ),
            403 => 
            array (
                'country_id' => 219,
                'id' => 3495,
                'name' => 'Nonthaburi',
            ),
            404 => 
            array (
                'country_id' => 219,
                'id' => 3496,
                'name' => 'Trat',
            ),
            405 => 
            array (
                'country_id' => 219,
                'id' => 3497,
                'name' => 'Nakhon Ratchasima',
            ),
            406 => 
            array (
                'country_id' => 219,
                'id' => 3498,
                'name' => 'Chiang Rai',
            ),
            407 => 
            array (
                'country_id' => 219,
                'id' => 3499,
                'name' => 'Ratchaburi',
            ),
            408 => 
            array (
                'country_id' => 219,
                'id' => 3500,
                'name' => 'Pathum Thani',
            ),
            409 => 
            array (
                'country_id' => 219,
                'id' => 3501,
                'name' => 'Sakon Nakhon',
            ),
            410 => 
            array (
                'country_id' => 219,
                'id' => 3502,
                'name' => 'Samut Songkhram',
            ),
            411 => 
            array (
                'country_id' => 219,
                'id' => 3503,
                'name' => 'Nakhon Pathom',
            ),
            412 => 
            array (
                'country_id' => 219,
                'id' => 3504,
                'name' => 'Samut Sakhon',
            ),
            413 => 
            array (
                'country_id' => 219,
                'id' => 3505,
                'name' => 'Mae Hong Son',
            ),
            414 => 
            array (
                'country_id' => 219,
                'id' => 3506,
                'name' => 'Phitsanulok',
            ),
            415 => 
            array (
                'country_id' => 219,
                'id' => 3507,
                'name' => 'Pattaya',
            ),
            416 => 
            array (
                'country_id' => 219,
                'id' => 3508,
                'name' => 'Prachuap Khiri Khan',
            ),
            417 => 
            array (
                'country_id' => 219,
                'id' => 3509,
                'name' => 'Loei',
            ),
            418 => 
            array (
                'country_id' => 219,
                'id' => 3510,
                'name' => 'Roi Et',
            ),
            419 => 
            array (
                'country_id' => 219,
                'id' => 3511,
                'name' => 'Kanchanaburi',
            ),
            420 => 
            array (
                'country_id' => 219,
                'id' => 3512,
                'name' => 'Ubon Ratchathani',
            ),
            421 => 
            array (
                'country_id' => 219,
                'id' => 3513,
                'name' => 'Chon Buri',
            ),
            422 => 
            array (
                'country_id' => 219,
                'id' => 3514,
                'name' => 'Phichit',
            ),
            423 => 
            array (
                'country_id' => 219,
                'id' => 3515,
                'name' => 'Phetchabun',
            ),
            424 => 
            array (
                'country_id' => 219,
                'id' => 3516,
                'name' => 'Kamphaeng Phet',
            ),
            425 => 
            array (
                'country_id' => 219,
                'id' => 3517,
                'name' => 'Maha Sarakham',
            ),
            426 => 
            array (
                'country_id' => 219,
                'id' => 3518,
                'name' => 'Rayong',
            ),
            427 => 
            array (
                'country_id' => 219,
                'id' => 3519,
                'name' => 'Ang Thong',
            ),
            428 => 
            array (
                'country_id' => 219,
                'id' => 3520,
                'name' => 'Nakhon Si Thammarat',
            ),
            429 => 
            array (
                'country_id' => 219,
                'id' => 3521,
                'name' => 'Yasothon',
            ),
            430 => 
            array (
                'country_id' => 219,
                'id' => 3522,
                'name' => 'Chai Nat',
            ),
            431 => 
            array (
                'country_id' => 219,
                'id' => 3523,
                'name' => 'Amnat Charoen',
            ),
            432 => 
            array (
                'country_id' => 219,
                'id' => 3524,
                'name' => 'Suphan Buri',
            ),
            433 => 
            array (
                'country_id' => 219,
                'id' => 3525,
                'name' => 'Tak',
            ),
            434 => 
            array (
                'country_id' => 219,
                'id' => 3526,
                'name' => 'Chumphon',
            ),
            435 => 
            array (
                'country_id' => 219,
                'id' => 3527,
                'name' => 'Udon Thani',
            ),
            436 => 
            array (
                'country_id' => 219,
                'id' => 3528,
                'name' => 'Phrae',
            ),
            437 => 
            array (
                'country_id' => 219,
                'id' => 3529,
                'name' => 'Sa Kaeo',
            ),
            438 => 
            array (
                'country_id' => 219,
                'id' => 3530,
                'name' => 'Nan',
            ),
            439 => 
            array (
                'country_id' => 219,
                'id' => 3531,
                'name' => 'Surin',
            ),
            440 => 
            array (
                'country_id' => 219,
                'id' => 3532,
                'name' => 'Phetchaburi',
            ),
            441 => 
            array (
                'country_id' => 219,
                'id' => 3533,
                'name' => 'Bueng Kan',
            ),
            442 => 
            array (
                'country_id' => 219,
                'id' => 3534,
                'name' => 'Buri Ram',
            ),
            443 => 
            array (
                'country_id' => 219,
                'id' => 3535,
                'name' => 'Nakhon Nayok',
            ),
            444 => 
            array (
                'country_id' => 219,
                'id' => 3536,
                'name' => 'Phuket',
            ),
            445 => 
            array (
                'country_id' => 219,
                'id' => 3537,
                'name' => 'Satun',
            ),
            446 => 
            array (
                'country_id' => 219,
                'id' => 3538,
                'name' => 'Phayao',
            ),
            447 => 
            array (
                'country_id' => 219,
                'id' => 3539,
                'name' => 'Songkhla',
            ),
            448 => 
            array (
                'country_id' => 219,
                'id' => 3540,
                'name' => 'Pattani',
            ),
            449 => 
            array (
                'country_id' => 219,
                'id' => 3541,
                'name' => 'Trang',
            ),
            450 => 
            array (
                'country_id' => 219,
                'id' => 3542,
                'name' => 'Prachin Buri',
            ),
            451 => 
            array (
                'country_id' => 219,
                'id' => 3543,
                'name' => 'Lop Buri',
            ),
            452 => 
            array (
                'country_id' => 219,
                'id' => 3544,
                'name' => 'Lampang',
            ),
            453 => 
            array (
                'country_id' => 219,
                'id' => 3545,
                'name' => 'Sukhothai',
            ),
            454 => 
            array (
                'country_id' => 219,
                'id' => 3546,
                'name' => 'Mukdahan',
            ),
            455 => 
            array (
                'country_id' => 219,
                'id' => 3547,
                'name' => 'Si Sa Ket',
            ),
            456 => 
            array (
                'country_id' => 219,
                'id' => 3548,
                'name' => 'Nakhon Phanom',
            ),
            457 => 
            array (
                'country_id' => 219,
                'id' => 3549,
                'name' => 'Phangnga',
            ),
            458 => 
            array (
                'country_id' => 219,
                'id' => 3550,
                'name' => 'Kalasin',
            ),
            459 => 
            array (
                'country_id' => 219,
                'id' => 3551,
                'name' => 'Uthai Thani',
            ),
            460 => 
            array (
                'country_id' => 219,
                'id' => 3552,
                'name' => 'Chachoengsao',
            ),
            461 => 
            array (
                'country_id' => 219,
                'id' => 3553,
                'name' => 'Narathiwat',
            ),
            462 => 
            array (
                'country_id' => 219,
                'id' => 3554,
                'name' => 'Bangkok',
            ),
            463 => 
            array (
                'country_id' => 69,
                'id' => 3555,
                'name' => 'Hiiu County',
            ),
            464 => 
            array (
                'country_id' => 69,
                'id' => 3556,
                'name' => 'Viljandi County',
            ),
            465 => 
            array (
                'country_id' => 69,
                'id' => 3557,
                'name' => 'Tartu County',
            ),
            466 => 
            array (
                'country_id' => 69,
                'id' => 3558,
                'name' => 'Valga County',
            ),
            467 => 
            array (
                'country_id' => 69,
                'id' => 3559,
                'name' => 'Rapla County',
            ),
            468 => 
            array (
                'country_id' => 69,
                'id' => 3560,
                'name' => 'Võru County',
            ),
            469 => 
            array (
                'country_id' => 69,
                'id' => 3561,
                'name' => 'Saare County',
            ),
            470 => 
            array (
                'country_id' => 69,
                'id' => 3562,
                'name' => 'Pärnu County',
            ),
            471 => 
            array (
                'country_id' => 69,
                'id' => 3563,
                'name' => 'Põlva County',
            ),
            472 => 
            array (
                'country_id' => 69,
                'id' => 3564,
                'name' => 'Lääne-Viru County',
            ),
            473 => 
            array (
                'country_id' => 69,
                'id' => 3565,
                'name' => 'Jõgeva County',
            ),
            474 => 
            array (
                'country_id' => 69,
                'id' => 3566,
                'name' => 'Järva County',
            ),
            475 => 
            array (
                'country_id' => 69,
                'id' => 3567,
                'name' => 'Harju County',
            ),
            476 => 
            array (
                'country_id' => 69,
                'id' => 3568,
                'name' => 'Lääne County',
            ),
            477 => 
            array (
                'country_id' => 69,
                'id' => 3569,
                'name' => 'Ida-Viru County',
            ),
            478 => 
            array (
                'country_id' => 43,
                'id' => 3570,
                'name' => 'Moyen-Chari',
            ),
            479 => 
            array (
                'country_id' => 43,
                'id' => 3571,
                'name' => 'Mayo-Kebbi Ouest',
            ),
            480 => 
            array (
                'country_id' => 43,
                'id' => 3572,
                'name' => 'Sila',
            ),
            481 => 
            array (
                'country_id' => 43,
                'id' => 3573,
                'name' => 'Hadjer-Lamis',
            ),
            482 => 
            array (
                'country_id' => 43,
                'id' => 3574,
                'name' => 'Borkou',
            ),
            483 => 
            array (
                'country_id' => 43,
                'id' => 3575,
                'name' => 'Ennedi-Est',
            ),
            484 => 
            array (
                'country_id' => 43,
                'id' => 3576,
                'name' => 'Guéra',
            ),
            485 => 
            array (
                'country_id' => 43,
                'id' => 3577,
                'name' => 'Lac',
            ),
            486 => 
            array (
                'country_id' => 43,
                'id' => 3579,
                'name' => 'Tandjilé',
            ),
            487 => 
            array (
                'country_id' => 43,
                'id' => 3580,
                'name' => 'Mayo-Kebbi Est',
            ),
            488 => 
            array (
                'country_id' => 43,
                'id' => 3581,
                'name' => 'Wadi Fira',
            ),
            489 => 
            array (
                'country_id' => 43,
                'id' => 3582,
                'name' => 'Ouaddaï',
            ),
            490 => 
            array (
                'country_id' => 43,
                'id' => 3583,
                'name' => 'Bahr el Gazel',
            ),
            491 => 
            array (
                'country_id' => 43,
                'id' => 3584,
                'name' => 'Ennedi-Ouest',
            ),
            492 => 
            array (
                'country_id' => 43,
                'id' => 3585,
                'name' => 'Logone Occidental',
            ),
            493 => 
            array (
                'country_id' => 43,
                'id' => 3586,
                'name' => 'N\'Djamena',
            ),
            494 => 
            array (
                'country_id' => 43,
                'id' => 3587,
                'name' => 'Tibesti',
            ),
            495 => 
            array (
                'country_id' => 43,
                'id' => 3588,
                'name' => 'Kanem',
            ),
            496 => 
            array (
                'country_id' => 43,
                'id' => 3589,
                'name' => 'Mandoul',
            ),
            497 => 
            array (
                'country_id' => 43,
                'id' => 3590,
                'name' => 'Batha',
            ),
            498 => 
            array (
                'country_id' => 43,
                'id' => 3591,
                'name' => 'Logone Oriental',
            ),
            499 => 
            array (
                'country_id' => 43,
                'id' => 3592,
                'name' => 'Salamat',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 17,
                'id' => 3593,
                'name' => 'Berry Islands',
            ),
            1 => 
            array (
                'country_id' => 17,
                'id' => 3594,
                'name' => 'Nichollstown and Berry Islands',
            ),
            2 => 
            array (
                'country_id' => 17,
                'id' => 3595,
                'name' => 'Green Turtle Cay',
            ),
            3 => 
            array (
                'country_id' => 17,
                'id' => 3596,
                'name' => 'Central Eleuthera',
            ),
            4 => 
            array (
                'country_id' => 17,
                'id' => 3597,
                'name' => 'Governor\'s Harbour',
            ),
            5 => 
            array (
                'country_id' => 17,
                'id' => 3598,
                'name' => 'High Rock',
            ),
            6 => 
            array (
                'country_id' => 17,
                'id' => 3599,
                'name' => 'West Grand Bahama',
            ),
            7 => 
            array (
                'country_id' => 17,
                'id' => 3600,
                'name' => 'Rum Cay District',
            ),
            8 => 
            array (
                'country_id' => 17,
                'id' => 3601,
                'name' => 'Acklins',
            ),
            9 => 
            array (
                'country_id' => 17,
                'id' => 3602,
                'name' => 'North Eleuthera',
            ),
            10 => 
            array (
                'country_id' => 17,
                'id' => 3603,
                'name' => 'Central Abaco',
            ),
            11 => 
            array (
                'country_id' => 17,
                'id' => 3604,
                'name' => 'Marsh Harbour',
            ),
            12 => 
            array (
                'country_id' => 17,
                'id' => 3605,
                'name' => 'Black Point',
            ),
            13 => 
            array (
                'country_id' => 17,
                'id' => 3606,
                'name' => 'Sandy Point',
            ),
            14 => 
            array (
                'country_id' => 17,
                'id' => 3607,
                'name' => 'South Eleuthera',
            ),
            15 => 
            array (
                'country_id' => 17,
                'id' => 3608,
                'name' => 'South Abaco',
            ),
            16 => 
            array (
                'country_id' => 17,
                'id' => 3609,
                'name' => 'Inagua',
            ),
            17 => 
            array (
                'country_id' => 17,
                'id' => 3610,
                'name' => 'Long Island',
            ),
            18 => 
            array (
                'country_id' => 17,
                'id' => 3611,
                'name' => 'Cat Island',
            ),
            19 => 
            array (
                'country_id' => 17,
                'id' => 3612,
                'name' => 'Exuma',
            ),
            20 => 
            array (
                'country_id' => 17,
                'id' => 3613,
                'name' => 'Harbour Island',
            ),
            21 => 
            array (
                'country_id' => 17,
                'id' => 3614,
                'name' => 'East Grand Bahama',
            ),
            22 => 
            array (
                'country_id' => 17,
                'id' => 3615,
                'name' => 'Ragged Island',
            ),
            23 => 
            array (
                'country_id' => 17,
                'id' => 3616,
                'name' => 'North Abaco',
            ),
            24 => 
            array (
                'country_id' => 17,
                'id' => 3617,
                'name' => 'North Andros',
            ),
            25 => 
            array (
                'country_id' => 17,
                'id' => 3618,
                'name' => 'Kemps Bay',
            ),
            26 => 
            array (
                'country_id' => 17,
                'id' => 3619,
                'name' => 'Fresh Creek',
            ),
            27 => 
            array (
                'country_id' => 17,
                'id' => 3620,
                'name' => 'San Salvador and Rum Cay',
            ),
            28 => 
            array (
                'country_id' => 17,
                'id' => 3621,
                'name' => 'Crooked Island',
            ),
            29 => 
            array (
                'country_id' => 17,
                'id' => 3622,
                'name' => 'South Andros',
            ),
            30 => 
            array (
                'country_id' => 17,
                'id' => 3623,
                'name' => 'Rock Sound',
            ),
            31 => 
            array (
                'country_id' => 17,
                'id' => 3624,
                'name' => 'Hope Town',
            ),
            32 => 
            array (
                'country_id' => 17,
                'id' => 3625,
                'name' => 'Mangrove Cay',
            ),
            33 => 
            array (
                'country_id' => 17,
                'id' => 3626,
                'name' => 'Freeport',
            ),
            34 => 
            array (
                'country_id' => 17,
                'id' => 3627,
                'name' => 'San Salvador Island',
            ),
            35 => 
            array (
                'country_id' => 17,
                'id' => 3628,
                'name' => 'Acklins and Crooked Islands',
            ),
            36 => 
            array (
                'country_id' => 17,
                'id' => 3629,
                'name' => 'Bimini',
            ),
            37 => 
            array (
                'country_id' => 17,
                'id' => 3630,
                'name' => 'Spanish Wells',
            ),
            38 => 
            array (
                'country_id' => 17,
                'id' => 3631,
                'name' => 'Central Andros',
            ),
            39 => 
            array (
                'country_id' => 17,
                'id' => 3632,
                'name' => 'Grand Cay',
            ),
            40 => 
            array (
                'country_id' => 17,
                'id' => 3633,
                'name' => 'Mayaguana District',
            ),
            41 => 
            array (
                'country_id' => 11,
                'id' => 3634,
                'name' => 'San Juan',
            ),
            42 => 
            array (
                'country_id' => 11,
                'id' => 3635,
                'name' => 'Santiago del Estero',
            ),
            43 => 
            array (
                'country_id' => 11,
                'id' => 3636,
                'name' => 'San Luis',
            ),
            44 => 
            array (
                'country_id' => 11,
                'id' => 3637,
                'name' => 'Tucumán',
            ),
            45 => 
            array (
                'country_id' => 11,
                'id' => 3638,
                'name' => 'Corrientes',
            ),
            46 => 
            array (
                'country_id' => 11,
                'id' => 3639,
                'name' => 'Río Negro',
            ),
            47 => 
            array (
                'country_id' => 11,
                'id' => 3640,
                'name' => 'Chaco',
            ),
            48 => 
            array (
                'country_id' => 11,
                'id' => 3641,
                'name' => 'Santa Fe',
            ),
            49 => 
            array (
                'country_id' => 11,
                'id' => 3642,
                'name' => 'Córdoba',
            ),
            50 => 
            array (
                'country_id' => 11,
                'id' => 3643,
                'name' => 'Salta',
            ),
            51 => 
            array (
                'country_id' => 11,
                'id' => 3644,
                'name' => 'Misiones',
            ),
            52 => 
            array (
                'country_id' => 11,
                'id' => 3645,
                'name' => 'Jujuy',
            ),
            53 => 
            array (
                'country_id' => 11,
                'id' => 3646,
                'name' => 'Mendoza',
            ),
            54 => 
            array (
                'country_id' => 11,
                'id' => 3647,
                'name' => 'Catamarca',
            ),
            55 => 
            array (
                'country_id' => 11,
                'id' => 3648,
                'name' => 'Neuquén',
            ),
            56 => 
            array (
                'country_id' => 11,
                'id' => 3649,
                'name' => 'Santa Cruz',
            ),
            57 => 
            array (
                'country_id' => 11,
                'id' => 3650,
                'name' => 'Tierra del Fuego',
            ),
            58 => 
            array (
                'country_id' => 11,
                'id' => 3651,
                'name' => 'Chubut',
            ),
            59 => 
            array (
                'country_id' => 11,
                'id' => 3652,
                'name' => 'Formosa',
            ),
            60 => 
            array (
                'country_id' => 11,
                'id' => 3653,
                'name' => 'La Rioja',
            ),
            61 => 
            array (
                'country_id' => 11,
                'id' => 3654,
                'name' => 'Entre Ríos',
            ),
            62 => 
            array (
                'country_id' => 11,
                'id' => 3655,
                'name' => 'La Pampa',
            ),
            63 => 
            array (
                'country_id' => 11,
                'id' => 3656,
                'name' => 'Buenos Aires',
            ),
            64 => 
            array (
                'country_id' => 90,
                'id' => 3657,
                'name' => 'Quiché Department',
            ),
            65 => 
            array (
                'country_id' => 90,
                'id' => 3658,
                'name' => 'Jalapa Department',
            ),
            66 => 
            array (
                'country_id' => 90,
                'id' => 3659,
                'name' => 'Izabal Department',
            ),
            67 => 
            array (
                'country_id' => 90,
                'id' => 3660,
                'name' => 'Suchitepéquez Department',
            ),
            68 => 
            array (
                'country_id' => 90,
                'id' => 3661,
                'name' => 'Sololá Department',
            ),
            69 => 
            array (
                'country_id' => 90,
                'id' => 3662,
                'name' => 'El Progreso Department',
            ),
            70 => 
            array (
                'country_id' => 90,
                'id' => 3663,
                'name' => 'Totonicapán Department',
            ),
            71 => 
            array (
                'country_id' => 90,
                'id' => 3664,
                'name' => 'Retalhuleu Department',
            ),
            72 => 
            array (
                'country_id' => 90,
                'id' => 3665,
                'name' => 'Santa Rosa Department',
            ),
            73 => 
            array (
                'country_id' => 90,
                'id' => 3666,
                'name' => 'Chiquimula Department',
            ),
            74 => 
            array (
                'country_id' => 90,
                'id' => 3667,
                'name' => 'San Marcos Department',
            ),
            75 => 
            array (
                'country_id' => 90,
                'id' => 3668,
                'name' => 'Quetzaltenango Department',
            ),
            76 => 
            array (
                'country_id' => 90,
                'id' => 3669,
                'name' => 'Petén Department',
            ),
            77 => 
            array (
                'country_id' => 90,
                'id' => 3670,
                'name' => 'Huehuetenango Department',
            ),
            78 => 
            array (
                'country_id' => 90,
                'id' => 3671,
                'name' => 'Alta Verapaz Department',
            ),
            79 => 
            array (
                'country_id' => 90,
                'id' => 3672,
                'name' => 'Guatemala Department',
            ),
            80 => 
            array (
                'country_id' => 90,
                'id' => 3673,
                'name' => 'Jutiapa Department',
            ),
            81 => 
            array (
                'country_id' => 90,
                'id' => 3674,
                'name' => 'Baja Verapaz Department',
            ),
            82 => 
            array (
                'country_id' => 90,
                'id' => 3675,
                'name' => 'Chimaltenango Department',
            ),
            83 => 
            array (
                'country_id' => 90,
                'id' => 3676,
                'name' => 'Sacatepéquez Department',
            ),
            84 => 
            array (
                'country_id' => 90,
                'id' => 3677,
                'name' => 'Escuintla Department',
            ),
            85 => 
            array (
                'country_id' => 173,
                'id' => 3678,
                'name' => 'Madre de Dios',
            ),
            86 => 
            array (
                'country_id' => 173,
                'id' => 3679,
                'name' => 'Huancavelica',
            ),
            87 => 
            array (
                'country_id' => 173,
                'id' => 3680,
                'name' => 'Áncash',
            ),
            88 => 
            array (
                'country_id' => 173,
                'id' => 3681,
                'name' => 'Arequipa',
            ),
            89 => 
            array (
                'country_id' => 173,
                'id' => 3682,
                'name' => 'Puno',
            ),
            90 => 
            array (
                'country_id' => 173,
                'id' => 3683,
                'name' => 'La Libertad',
            ),
            91 => 
            array (
                'country_id' => 173,
                'id' => 3684,
                'name' => 'Ucayali',
            ),
            92 => 
            array (
                'country_id' => 173,
                'id' => 3685,
                'name' => 'Amazonas',
            ),
            93 => 
            array (
                'country_id' => 173,
                'id' => 3686,
                'name' => 'Pasco',
            ),
            94 => 
            array (
                'country_id' => 173,
                'id' => 3687,
                'name' => 'Huanuco',
            ),
            95 => 
            array (
                'country_id' => 173,
                'id' => 3688,
                'name' => 'Cajamarca',
            ),
            96 => 
            array (
                'country_id' => 173,
                'id' => 3689,
                'name' => 'Tumbes',
            ),
            97 => 
            array (
                'country_id' => 173,
                'id' => 3691,
                'name' => 'Cusco',
            ),
            98 => 
            array (
                'country_id' => 173,
                'id' => 3692,
                'name' => 'Ayacucho',
            ),
            99 => 
            array (
                'country_id' => 173,
                'id' => 3693,
                'name' => 'Junín',
            ),
            100 => 
            array (
                'country_id' => 173,
                'id' => 3694,
                'name' => 'San Martín',
            ),
            101 => 
            array (
                'country_id' => 173,
                'id' => 3695,
                'name' => 'Lima',
            ),
            102 => 
            array (
                'country_id' => 173,
                'id' => 3696,
                'name' => 'Tacna',
            ),
            103 => 
            array (
                'country_id' => 173,
                'id' => 3697,
                'name' => 'Piura',
            ),
            104 => 
            array (
                'country_id' => 173,
                'id' => 3698,
                'name' => 'Moquegua',
            ),
            105 => 
            array (
                'country_id' => 173,
                'id' => 3699,
                'name' => 'Apurímac',
            ),
            106 => 
            array (
                'country_id' => 173,
                'id' => 3700,
                'name' => 'Ica',
            ),
            107 => 
            array (
                'country_id' => 173,
                'id' => 3701,
                'name' => 'Callao',
            ),
            108 => 
            array (
                'country_id' => 173,
                'id' => 3702,
                'name' => 'Lambayeque',
            ),
            109 => 
            array (
                'country_id' => 10,
                'id' => 3703,
                'name' => 'Redonda',
            ),
            110 => 
            array (
                'country_id' => 10,
                'id' => 3704,
                'name' => 'Saint Peter Parish',
            ),
            111 => 
            array (
                'country_id' => 10,
                'id' => 3705,
                'name' => 'Saint Paul Parish',
            ),
            112 => 
            array (
                'country_id' => 10,
                'id' => 3706,
                'name' => 'Saint John Parish',
            ),
            113 => 
            array (
                'country_id' => 10,
                'id' => 3707,
                'name' => 'Saint Mary Parish',
            ),
            114 => 
            array (
                'country_id' => 10,
                'id' => 3708,
                'name' => 'Barbuda',
            ),
            115 => 
            array (
                'country_id' => 10,
                'id' => 3709,
                'name' => 'Saint George Parish',
            ),
            116 => 
            array (
                'country_id' => 10,
                'id' => 3710,
                'name' => 'Saint Philip Parish',
            ),
            117 => 
            array (
                'country_id' => 196,
                'id' => 3711,
                'name' => 'South Bačka District',
            ),
            118 => 
            array (
                'country_id' => 196,
                'id' => 3712,
                'name' => 'Pirot District',
            ),
            119 => 
            array (
                'country_id' => 196,
                'id' => 3713,
                'name' => 'South Banat District',
            ),
            120 => 
            array (
                'country_id' => 196,
                'id' => 3714,
                'name' => 'North Bačka District',
            ),
            121 => 
            array (
                'country_id' => 196,
                'id' => 3715,
                'name' => 'Jablanica District',
            ),
            122 => 
            array (
                'country_id' => 196,
                'id' => 3716,
                'name' => 'Central Banat District',
            ),
            123 => 
            array (
                'country_id' => 196,
                'id' => 3717,
                'name' => 'Bor District',
            ),
            124 => 
            array (
                'country_id' => 196,
                'id' => 3718,
                'name' => 'Toplica District',
            ),
            125 => 
            array (
                'country_id' => 196,
                'id' => 3719,
                'name' => 'Mačva District',
            ),
            126 => 
            array (
                'country_id' => 196,
                'id' => 3720,
                'name' => 'Rasina District',
            ),
            127 => 
            array (
                'country_id' => 196,
                'id' => 3721,
                'name' => 'Pčinja District',
            ),
            128 => 
            array (
                'country_id' => 196,
                'id' => 3722,
                'name' => 'Nišava District',
            ),
            129 => 
            array (
                'country_id' => 248,
                'id' => 3723,
                'name' => 'Prizren District',
            ),
            130 => 
            array (
                'country_id' => 196,
                'id' => 3724,
                'name' => 'Kolubara District',
            ),
            131 => 
            array (
                'country_id' => 196,
                'id' => 3725,
                'name' => 'Raška District',
            ),
            132 => 
            array (
                'country_id' => 196,
                'id' => 3726,
                'name' => 'West Bačka District',
            ),
            133 => 
            array (
                'country_id' => 196,
                'id' => 3727,
                'name' => 'Moravica District',
            ),
            134 => 
            array (
                'country_id' => 196,
                'id' => 3728,
                'name' => 'Belgrade',
            ),
            135 => 
            array (
                'country_id' => 196,
                'id' => 3729,
                'name' => 'Zlatibor District',
            ),
            136 => 
            array (
                'country_id' => 196,
                'id' => 3731,
                'name' => 'Zaječar District',
            ),
            137 => 
            array (
                'country_id' => 196,
                'id' => 3732,
                'name' => 'Braničevo District',
            ),
            138 => 
            array (
                'country_id' => 196,
                'id' => 3733,
                'name' => 'Vojvodina',
            ),
            139 => 
            array (
                'country_id' => 196,
                'id' => 3734,
                'name' => 'Šumadija District',
            ),
            140 => 
            array (
                'country_id' => 196,
                'id' => 3736,
                'name' => 'North Banat District',
            ),
            141 => 
            array (
                'country_id' => 196,
                'id' => 3737,
                'name' => 'Pomoravlje District',
            ),
            142 => 
            array (
                'country_id' => 248,
                'id' => 3738,
                'name' => 'Peć District',
            ),
            143 => 
            array (
                'country_id' => 196,
                'id' => 3740,
                'name' => 'Srem District',
            ),
            144 => 
            array (
                'country_id' => 196,
                'id' => 3741,
                'name' => 'Podunavlje District',
            ),
            145 => 
            array (
                'country_id' => 108,
                'id' => 3742,
                'name' => 'Westmoreland Parish',
            ),
            146 => 
            array (
                'country_id' => 108,
                'id' => 3743,
                'name' => 'Saint Elizabeth Parish',
            ),
            147 => 
            array (
                'country_id' => 108,
                'id' => 3744,
                'name' => 'Saint Ann Parish',
            ),
            148 => 
            array (
                'country_id' => 108,
                'id' => 3745,
                'name' => 'Saint James Parish',
            ),
            149 => 
            array (
                'country_id' => 108,
                'id' => 3746,
                'name' => 'Saint Catherine Parish',
            ),
            150 => 
            array (
                'country_id' => 108,
                'id' => 3747,
                'name' => 'Saint Mary Parish',
            ),
            151 => 
            array (
                'country_id' => 108,
                'id' => 3748,
                'name' => 'Kingston Parish',
            ),
            152 => 
            array (
                'country_id' => 108,
                'id' => 3749,
                'name' => 'Hanover Parish',
            ),
            153 => 
            array (
                'country_id' => 108,
                'id' => 3750,
                'name' => 'Saint Thomas Parish',
            ),
            154 => 
            array (
                'country_id' => 108,
                'id' => 3751,
                'name' => 'Saint Andrew',
            ),
            155 => 
            array (
                'country_id' => 108,
                'id' => 3752,
                'name' => 'Portland Parish',
            ),
            156 => 
            array (
                'country_id' => 108,
                'id' => 3753,
                'name' => 'Clarendon Parish',
            ),
            157 => 
            array (
                'country_id' => 108,
                'id' => 3754,
                'name' => 'Manchester Parish',
            ),
            158 => 
            array (
                'country_id' => 108,
                'id' => 3755,
                'name' => 'Trelawny Parish',
            ),
            159 => 
            array (
                'country_id' => 186,
                'id' => 3756,
                'name' => 'Dennery Quarter',
            ),
            160 => 
            array (
                'country_id' => 186,
                'id' => 3757,
                'name' => 'Anse la Raye Quarter',
            ),
            161 => 
            array (
                'country_id' => 186,
                'id' => 3758,
                'name' => 'Castries Quarter',
            ),
            162 => 
            array (
                'country_id' => 186,
                'id' => 3759,
                'name' => 'Laborie Quarter',
            ),
            163 => 
            array (
                'country_id' => 186,
                'id' => 3760,
                'name' => 'Choiseul Quarter',
            ),
            164 => 
            array (
                'country_id' => 186,
                'id' => 3761,
                'name' => 'Canaries',
            ),
            165 => 
            array (
                'country_id' => 186,
                'id' => 3762,
                'name' => 'Micoud Quarter',
            ),
            166 => 
            array (
                'country_id' => 186,
                'id' => 3763,
                'name' => 'Vieux Fort Quarter',
            ),
            167 => 
            array (
                'country_id' => 186,
                'id' => 3764,
                'name' => 'Soufrière Quarter',
            ),
            168 => 
            array (
                'country_id' => 186,
                'id' => 3765,
                'name' => 'Praslin Quarter',
            ),
            169 => 
            array (
                'country_id' => 186,
                'id' => 3766,
                'name' => 'Gros Islet Quarter',
            ),
            170 => 
            array (
                'country_id' => 186,
                'id' => 3767,
                'name' => 'Dauphin Quarter',
            ),
            171 => 
            array (
                'country_id' => 240,
                'id' => 3768,
                'name' => 'Hưng Yên',
            ),
            172 => 
            array (
                'country_id' => 240,
                'id' => 3769,
                'name' => 'Đồng Tháp',
            ),
            173 => 
            array (
                'country_id' => 240,
                'id' => 3770,
                'name' => 'Bà Rịa-Vũng Tàu',
            ),
            174 => 
            array (
                'country_id' => 240,
                'id' => 3771,
                'name' => 'Thanh Hóa',
            ),
            175 => 
            array (
                'country_id' => 240,
                'id' => 3772,
                'name' => 'Kon Tum',
            ),
            176 => 
            array (
                'country_id' => 240,
                'id' => 3773,
                'name' => 'Điện Biên',
            ),
            177 => 
            array (
                'country_id' => 240,
                'id' => 3774,
                'name' => 'Vĩnh Phúc',
            ),
            178 => 
            array (
                'country_id' => 240,
                'id' => 3775,
                'name' => 'Thái Bình',
            ),
            179 => 
            array (
                'country_id' => 240,
                'id' => 3776,
                'name' => 'Quảng Nam',
            ),
            180 => 
            array (
                'country_id' => 240,
                'id' => 3777,
                'name' => 'Hậu Giang',
            ),
            181 => 
            array (
                'country_id' => 240,
                'id' => 3778,
                'name' => 'Cà Mau',
            ),
            182 => 
            array (
                'country_id' => 240,
                'id' => 3779,
                'name' => 'Hà Giang',
            ),
            183 => 
            array (
                'country_id' => 240,
                'id' => 3780,
                'name' => 'Nghệ An',
            ),
            184 => 
            array (
                'country_id' => 240,
                'id' => 3781,
                'name' => 'Tiền Giang',
            ),
            185 => 
            array (
                'country_id' => 240,
                'id' => 3782,
                'name' => 'Cao Bằng',
            ),
            186 => 
            array (
                'country_id' => 240,
                'id' => 3783,
                'name' => 'Hải Phòng',
            ),
            187 => 
            array (
                'country_id' => 240,
                'id' => 3784,
                'name' => 'Yên Bái',
            ),
            188 => 
            array (
                'country_id' => 240,
                'id' => 3785,
                'name' => 'Bình Dương',
            ),
            189 => 
            array (
                'country_id' => 240,
                'id' => 3786,
                'name' => 'Ninh Bình',
            ),
            190 => 
            array (
                'country_id' => 240,
                'id' => 3787,
                'name' => 'Bình Thuận',
            ),
            191 => 
            array (
                'country_id' => 240,
                'id' => 3788,
                'name' => 'Ninh Thuận',
            ),
            192 => 
            array (
                'country_id' => 240,
                'id' => 3789,
                'name' => 'Nam Định',
            ),
            193 => 
            array (
                'country_id' => 240,
                'id' => 3790,
                'name' => 'Vĩnh Long',
            ),
            194 => 
            array (
                'country_id' => 240,
                'id' => 3791,
                'name' => 'Bắc Ninh',
            ),
            195 => 
            array (
                'country_id' => 240,
                'id' => 3792,
                'name' => 'Lạng Sơn',
            ),
            196 => 
            array (
                'country_id' => 240,
                'id' => 3793,
                'name' => 'Khánh Hòa',
            ),
            197 => 
            array (
                'country_id' => 240,
                'id' => 3794,
                'name' => 'An Giang',
            ),
            198 => 
            array (
                'country_id' => 240,
                'id' => 3795,
                'name' => 'Tuyên Quang',
            ),
            199 => 
            array (
                'country_id' => 240,
                'id' => 3796,
                'name' => 'Bến Tre',
            ),
            200 => 
            array (
                'country_id' => 240,
                'id' => 3797,
                'name' => 'Bình Phước',
            ),
            201 => 
            array (
                'country_id' => 240,
                'id' => 3798,
                'name' => 'Thừa Thiên-Huế',
            ),
            202 => 
            array (
                'country_id' => 240,
                'id' => 3799,
                'name' => 'Hòa Bình',
            ),
            203 => 
            array (
                'country_id' => 240,
                'id' => 3800,
                'name' => 'Kiên Giang',
            ),
            204 => 
            array (
                'country_id' => 240,
                'id' => 3801,
                'name' => 'Phú Thọ',
            ),
            205 => 
            array (
                'country_id' => 240,
                'id' => 3802,
                'name' => 'Hà Nam',
            ),
            206 => 
            array (
                'country_id' => 240,
                'id' => 3803,
                'name' => 'Quảng Trị',
            ),
            207 => 
            array (
                'country_id' => 240,
                'id' => 3804,
                'name' => 'Bạc Liêu',
            ),
            208 => 
            array (
                'country_id' => 240,
                'id' => 3805,
                'name' => 'Trà Vinh',
            ),
            209 => 
            array (
                'country_id' => 240,
                'id' => 3806,
                'name' => 'Đà Nẵng',
            ),
            210 => 
            array (
                'country_id' => 240,
                'id' => 3807,
                'name' => 'Thái Nguyên',
            ),
            211 => 
            array (
                'country_id' => 240,
                'id' => 3808,
                'name' => 'Long An',
            ),
            212 => 
            array (
                'country_id' => 240,
                'id' => 3809,
                'name' => 'Quảng Bình',
            ),
            213 => 
            array (
                'country_id' => 240,
                'id' => 3810,
                'name' => 'Hà Nội',
            ),
            214 => 
            array (
                'country_id' => 240,
                'id' => 3811,
                'name' => 'Hồ Chí Minh',
            ),
            215 => 
            array (
                'country_id' => 240,
                'id' => 3812,
                'name' => 'Sơn La',
            ),
            216 => 
            array (
                'country_id' => 240,
                'id' => 3813,
                'name' => 'Gia Lai',
            ),
            217 => 
            array (
                'country_id' => 240,
                'id' => 3814,
                'name' => 'Quảng Ninh',
            ),
            218 => 
            array (
                'country_id' => 240,
                'id' => 3815,
                'name' => 'Bắc Giang',
            ),
            219 => 
            array (
                'country_id' => 240,
                'id' => 3816,
                'name' => 'Hà Tĩnh',
            ),
            220 => 
            array (
                'country_id' => 240,
                'id' => 3817,
                'name' => 'Lào Cai',
            ),
            221 => 
            array (
                'country_id' => 240,
                'id' => 3818,
                'name' => 'Lâm Đồng',
            ),
            222 => 
            array (
                'country_id' => 240,
                'id' => 3819,
                'name' => 'Sóc Trăng',
            ),
            223 => 
            array (
                'country_id' => 240,
                'id' => 3821,
                'name' => 'Đồng Nai',
            ),
            224 => 
            array (
                'country_id' => 240,
                'id' => 3822,
                'name' => 'Bắc Kạn',
            ),
            225 => 
            array (
                'country_id' => 240,
                'id' => 3823,
                'name' => 'Đắk Nông',
            ),
            226 => 
            array (
                'country_id' => 240,
                'id' => 3824,
                'name' => 'Phú Yên',
            ),
            227 => 
            array (
                'country_id' => 240,
                'id' => 3825,
                'name' => 'Lai Châu',
            ),
            228 => 
            array (
                'country_id' => 240,
                'id' => 3826,
                'name' => 'Tây Ninh',
            ),
            229 => 
            array (
                'country_id' => 240,
                'id' => 3827,
                'name' => 'Hải Dương',
            ),
            230 => 
            array (
                'country_id' => 240,
                'id' => 3828,
                'name' => 'Quảng Ngãi',
            ),
            231 => 
            array (
                'country_id' => 240,
                'id' => 3829,
                'name' => 'Đắk Lắk',
            ),
            232 => 
            array (
                'country_id' => 240,
                'id' => 3830,
                'name' => 'Bình Định',
            ),
            233 => 
            array (
                'country_id' => 185,
                'id' => 3831,
                'name' => 'Saint Peter Basseterre Parish',
            ),
            234 => 
            array (
                'country_id' => 185,
                'id' => 3832,
                'name' => 'Nevis',
            ),
            235 => 
            array (
                'country_id' => 185,
                'id' => 3833,
                'name' => 'Christ Church Nichola Town Parish',
            ),
            236 => 
            array (
                'country_id' => 185,
                'id' => 3834,
                'name' => 'Saint Paul Capisterre Parish',
            ),
            237 => 
            array (
                'country_id' => 185,
                'id' => 3835,
                'name' => 'Saint James Windward Parish',
            ),
            238 => 
            array (
                'country_id' => 185,
                'id' => 3836,
                'name' => 'Saint Anne Sandy Point Parish',
            ),
            239 => 
            array (
                'country_id' => 185,
                'id' => 3837,
                'name' => 'Saint George Gingerland Parish',
            ),
            240 => 
            array (
                'country_id' => 185,
                'id' => 3838,
                'name' => 'Saint Paul Charlestown Parish',
            ),
            241 => 
            array (
                'country_id' => 185,
                'id' => 3839,
                'name' => 'Saint Thomas Lowland Parish',
            ),
            242 => 
            array (
                'country_id' => 185,
                'id' => 3840,
                'name' => 'Saint John Figtree Parish',
            ),
            243 => 
            array (
                'country_id' => 185,
                'id' => 3841,
                'name' => 'Saint Kitts',
            ),
            244 => 
            array (
                'country_id' => 185,
                'id' => 3842,
                'name' => 'Saint Thomas Middle Island Parish',
            ),
            245 => 
            array (
                'country_id' => 185,
                'id' => 3843,
                'name' => 'Trinity Palmetto Point Parish',
            ),
            246 => 
            array (
                'country_id' => 185,
                'id' => 3844,
                'name' => 'Saint Mary Cayon Parish',
            ),
            247 => 
            array (
                'country_id' => 185,
                'id' => 3845,
                'name' => 'Saint John Capisterre Parish',
            ),
            248 => 
            array (
                'country_id' => 116,
                'id' => 3846,
                'name' => 'Daegu',
            ),
            249 => 
            array (
                'country_id' => 116,
                'id' => 3847,
                'name' => 'Gyeonggi Province',
            ),
            250 => 
            array (
                'country_id' => 116,
                'id' => 3848,
                'name' => 'Incheon',
            ),
            251 => 
            array (
                'country_id' => 116,
                'id' => 3849,
                'name' => 'Seoul',
            ),
            252 => 
            array (
                'country_id' => 116,
                'id' => 3850,
                'name' => 'Daejeon',
            ),
            253 => 
            array (
                'country_id' => 116,
                'id' => 3851,
                'name' => 'North Jeolla Province',
            ),
            254 => 
            array (
                'country_id' => 116,
                'id' => 3852,
                'name' => 'Ulsan',
            ),
            255 => 
            array (
                'country_id' => 116,
                'id' => 3853,
                'name' => 'Jeju',
            ),
            256 => 
            array (
                'country_id' => 116,
                'id' => 3854,
                'name' => 'North Chungcheong Province',
            ),
            257 => 
            array (
                'country_id' => 116,
                'id' => 3855,
                'name' => 'North Gyeongsang Province',
            ),
            258 => 
            array (
                'country_id' => 116,
                'id' => 3856,
                'name' => 'South Jeolla Province',
            ),
            259 => 
            array (
                'country_id' => 116,
                'id' => 3857,
                'name' => 'South Gyeongsang Province',
            ),
            260 => 
            array (
                'country_id' => 116,
                'id' => 3858,
                'name' => 'Gwangju',
            ),
            261 => 
            array (
                'country_id' => 116,
                'id' => 3859,
                'name' => 'South Chungcheong Province',
            ),
            262 => 
            array (
                'country_id' => 116,
                'id' => 3860,
                'name' => 'Busan',
            ),
            263 => 
            array (
                'country_id' => 116,
                'id' => 3861,
                'name' => 'Sejong City',
            ),
            264 => 
            array (
                'country_id' => 116,
                'id' => 3862,
                'name' => 'Gangwon Province',
            ),
            265 => 
            array (
                'country_id' => 87,
                'id' => 3863,
                'name' => 'Saint Patrick Parish',
            ),
            266 => 
            array (
                'country_id' => 87,
                'id' => 3864,
                'name' => 'Saint George Parish',
            ),
            267 => 
            array (
                'country_id' => 87,
                'id' => 3865,
                'name' => 'Saint Andrew Parish',
            ),
            268 => 
            array (
                'country_id' => 87,
                'id' => 3866,
                'name' => 'Saint Mark Parish',
            ),
            269 => 
            array (
                'country_id' => 87,
                'id' => 3867,
                'name' => 'Carriacou and Petite Martinique',
            ),
            270 => 
            array (
                'country_id' => 87,
                'id' => 3868,
                'name' => 'Saint John Parish',
            ),
            271 => 
            array (
                'country_id' => 87,
                'id' => 3869,
                'name' => 'Saint David Parish',
            ),
            272 => 
            array (
                'country_id' => 1,
                'id' => 3870,
                'name' => 'Ghazni',
            ),
            273 => 
            array (
                'country_id' => 1,
                'id' => 3871,
                'name' => 'Badghis',
            ),
            274 => 
            array (
                'country_id' => 1,
                'id' => 3872,
                'name' => 'Bamyan',
            ),
            275 => 
            array (
                'country_id' => 1,
                'id' => 3873,
                'name' => 'Helmand',
            ),
            276 => 
            array (
                'country_id' => 1,
                'id' => 3874,
                'name' => 'Zabul',
            ),
            277 => 
            array (
                'country_id' => 1,
                'id' => 3875,
                'name' => 'Baghlan',
            ),
            278 => 
            array (
                'country_id' => 1,
                'id' => 3876,
                'name' => 'Kunar',
            ),
            279 => 
            array (
                'country_id' => 1,
                'id' => 3877,
                'name' => 'Paktika',
            ),
            280 => 
            array (
                'country_id' => 1,
                'id' => 3878,
                'name' => 'Khost',
            ),
            281 => 
            array (
                'country_id' => 1,
                'id' => 3879,
                'name' => 'Kapisa',
            ),
            282 => 
            array (
                'country_id' => 1,
                'id' => 3880,
                'name' => 'Nuristan',
            ),
            283 => 
            array (
                'country_id' => 1,
                'id' => 3881,
                'name' => 'Panjshir',
            ),
            284 => 
            array (
                'country_id' => 1,
                'id' => 3882,
                'name' => 'Nangarhar',
            ),
            285 => 
            array (
                'country_id' => 1,
                'id' => 3883,
                'name' => 'Samangan',
            ),
            286 => 
            array (
                'country_id' => 1,
                'id' => 3884,
                'name' => 'Balkh',
            ),
            287 => 
            array (
                'country_id' => 1,
                'id' => 3885,
                'name' => 'Sar-e Pol',
            ),
            288 => 
            array (
                'country_id' => 1,
                'id' => 3886,
                'name' => 'Jowzjan',
            ),
            289 => 
            array (
                'country_id' => 1,
                'id' => 3887,
                'name' => 'Herat',
            ),
            290 => 
            array (
                'country_id' => 1,
                'id' => 3888,
                'name' => 'Ghōr',
            ),
            291 => 
            array (
                'country_id' => 1,
                'id' => 3889,
                'name' => 'Faryab',
            ),
            292 => 
            array (
                'country_id' => 1,
                'id' => 3890,
                'name' => 'Kandahar',
            ),
            293 => 
            array (
                'country_id' => 1,
                'id' => 3891,
                'name' => 'Laghman',
            ),
            294 => 
            array (
                'country_id' => 1,
                'id' => 3892,
                'name' => 'Daykundi',
            ),
            295 => 
            array (
                'country_id' => 1,
                'id' => 3893,
                'name' => 'Takhar',
            ),
            296 => 
            array (
                'country_id' => 1,
                'id' => 3894,
                'name' => 'Paktia',
            ),
            297 => 
            array (
                'country_id' => 1,
                'id' => 3895,
                'name' => 'Parwan',
            ),
            298 => 
            array (
                'country_id' => 1,
                'id' => 3896,
                'name' => 'Nimruz',
            ),
            299 => 
            array (
                'country_id' => 1,
                'id' => 3897,
                'name' => 'Logar',
            ),
            300 => 
            array (
                'country_id' => 1,
                'id' => 3898,
                'name' => 'Urozgan',
            ),
            301 => 
            array (
                'country_id' => 1,
                'id' => 3899,
                'name' => 'Farah',
            ),
            302 => 
            array (
                'country_id' => 1,
                'id' => 3900,
                'name' => 'Kunduz Province',
            ),
            303 => 
            array (
                'country_id' => 1,
                'id' => 3901,
                'name' => 'Badakhshan',
            ),
            304 => 
            array (
                'country_id' => 1,
                'id' => 3902,
                'name' => 'Kabul',
            ),
            305 => 
            array (
                'country_id' => 14,
                'id' => 3903,
                'name' => 'Victoria',
            ),
            306 => 
            array (
                'country_id' => 14,
                'id' => 3904,
                'name' => 'South Australia',
            ),
            307 => 
            array (
                'country_id' => 14,
                'id' => 3905,
                'name' => 'Queensland',
            ),
            308 => 
            array (
                'country_id' => 14,
                'id' => 3906,
                'name' => 'Western Australia',
            ),
            309 => 
            array (
                'country_id' => 14,
                'id' => 3907,
                'name' => 'Australian Capital Territory',
            ),
            310 => 
            array (
                'country_id' => 14,
                'id' => 3908,
                'name' => 'Tasmania',
            ),
            311 => 
            array (
                'country_id' => 14,
                'id' => 3909,
                'name' => 'New South Wales',
            ),
            312 => 
            array (
                'country_id' => 14,
                'id' => 3910,
                'name' => 'Northern Territory',
            ),
            313 => 
            array (
                'country_id' => 222,
                'id' => 3911,
                'name' => 'Vavaʻu',
            ),
            314 => 
            array (
                'country_id' => 222,
                'id' => 3912,
                'name' => 'Tongatapu',
            ),
            315 => 
            array (
                'country_id' => 222,
                'id' => 3913,
                'name' => 'Haʻapai',
            ),
            316 => 
            array (
                'country_id' => 222,
                'id' => 3914,
                'name' => 'Niuas',
            ),
            317 => 
            array (
                'country_id' => 222,
                'id' => 3915,
                'name' => 'ʻEua',
            ),
            318 => 
            array (
                'country_id' => 103,
                'id' => 3916,
                'name' => 'Markazi',
            ),
            319 => 
            array (
                'country_id' => 103,
                'id' => 3917,
                'name' => 'Khuzestan',
            ),
            320 => 
            array (
                'country_id' => 103,
                'id' => 3918,
                'name' => 'Ilam',
            ),
            321 => 
            array (
                'country_id' => 103,
                'id' => 3919,
                'name' => 'Kermanshah',
            ),
            322 => 
            array (
                'country_id' => 103,
                'id' => 3920,
                'name' => 'Gilan',
            ),
            323 => 
            array (
                'country_id' => 103,
                'id' => 3921,
                'name' => 'Chaharmahal and Bakhtiari',
            ),
            324 => 
            array (
                'country_id' => 103,
                'id' => 3922,
                'name' => 'Qom',
            ),
            325 => 
            array (
                'country_id' => 103,
                'id' => 3923,
                'name' => 'Isfahan',
            ),
            326 => 
            array (
                'country_id' => 103,
                'id' => 3924,
                'name' => 'West Azarbaijan',
            ),
            327 => 
            array (
                'country_id' => 103,
                'id' => 3925,
                'name' => 'Zanjan',
            ),
            328 => 
            array (
                'country_id' => 103,
                'id' => 3926,
                'name' => 'Kohgiluyeh and Boyer-Ahmad',
            ),
            329 => 
            array (
                'country_id' => 103,
                'id' => 3927,
                'name' => 'Razavi Khorasan',
            ),
            330 => 
            array (
                'country_id' => 103,
                'id' => 3928,
                'name' => 'Lorestan',
            ),
            331 => 
            array (
                'country_id' => 103,
                'id' => 3929,
                'name' => 'Alborz',
            ),
            332 => 
            array (
                'country_id' => 103,
                'id' => 3930,
                'name' => 'South Khorasan',
            ),
            333 => 
            array (
                'country_id' => 103,
                'id' => 3931,
                'name' => 'Sistan and Baluchestan',
            ),
            334 => 
            array (
                'country_id' => 103,
                'id' => 3932,
                'name' => 'Bushehr',
            ),
            335 => 
            array (
                'country_id' => 103,
                'id' => 3933,
                'name' => 'Golestan',
            ),
            336 => 
            array (
                'country_id' => 103,
                'id' => 3934,
                'name' => 'Ardabil',
            ),
            337 => 
            array (
                'country_id' => 103,
                'id' => 3935,
                'name' => 'Kurdistan',
            ),
            338 => 
            array (
                'country_id' => 103,
                'id' => 3936,
                'name' => 'Yazd',
            ),
            339 => 
            array (
                'country_id' => 103,
                'id' => 3937,
                'name' => 'Hormozgan',
            ),
            340 => 
            array (
                'country_id' => 103,
                'id' => 3938,
                'name' => 'Mazandaran',
            ),
            341 => 
            array (
                'country_id' => 103,
                'id' => 3939,
                'name' => 'Fars',
            ),
            342 => 
            array (
                'country_id' => 103,
                'id' => 3940,
                'name' => 'Semnan',
            ),
            343 => 
            array (
                'country_id' => 103,
                'id' => 3941,
                'name' => 'Qazvin',
            ),
            344 => 
            array (
                'country_id' => 103,
                'id' => 3942,
                'name' => 'North Khorasan',
            ),
            345 => 
            array (
                'country_id' => 103,
                'id' => 3943,
                'name' => 'Kerman',
            ),
            346 => 
            array (
                'country_id' => 103,
                'id' => 3944,
                'name' => 'East Azerbaijan',
            ),
            347 => 
            array (
                'country_id' => 103,
                'id' => 3945,
                'name' => 'Tehran',
            ),
            348 => 
            array (
                'country_id' => 228,
                'id' => 3946,
                'name' => 'Niutao Island Council',
            ),
            349 => 
            array (
                'country_id' => 228,
                'id' => 3947,
                'name' => 'Nanumanga',
            ),
            350 => 
            array (
                'country_id' => 228,
                'id' => 3948,
                'name' => 'Nui',
            ),
            351 => 
            array (
                'country_id' => 228,
                'id' => 3949,
                'name' => 'Nanumea',
            ),
            352 => 
            array (
                'country_id' => 228,
                'id' => 3950,
                'name' => 'Vaitupu',
            ),
            353 => 
            array (
                'country_id' => 228,
                'id' => 3951,
                'name' => 'Funafuti',
            ),
            354 => 
            array (
                'country_id' => 228,
                'id' => 3952,
                'name' => 'Nukufetau',
            ),
            355 => 
            array (
                'country_id' => 228,
                'id' => 3953,
                'name' => 'Nukulaelae',
            ),
            356 => 
            array (
                'country_id' => 104,
                'id' => 3954,
                'name' => 'Dhi Qar',
            ),
            357 => 
            array (
                'country_id' => 104,
                'id' => 3955,
                'name' => 'Babylon',
            ),
            358 => 
            array (
                'country_id' => 104,
                'id' => 3956,
                'name' => 'Al-Qādisiyyah',
            ),
            359 => 
            array (
                'country_id' => 104,
                'id' => 3957,
                'name' => 'Karbala',
            ),
            360 => 
            array (
                'country_id' => 104,
                'id' => 3958,
                'name' => 'Al Muthanna',
            ),
            361 => 
            array (
                'country_id' => 104,
                'id' => 3959,
                'name' => 'Baghdad',
            ),
            362 => 
            array (
                'country_id' => 104,
                'id' => 3960,
                'name' => 'Basra',
            ),
            363 => 
            array (
                'country_id' => 104,
                'id' => 3961,
                'name' => 'Saladin',
            ),
            364 => 
            array (
                'country_id' => 104,
                'id' => 3962,
                'name' => 'Najaf',
            ),
            365 => 
            array (
                'country_id' => 104,
                'id' => 3963,
                'name' => 'Nineveh',
            ),
            366 => 
            array (
                'country_id' => 104,
                'id' => 3964,
                'name' => 'Al Anbar',
            ),
            367 => 
            array (
                'country_id' => 104,
                'id' => 3965,
                'name' => 'Diyala',
            ),
            368 => 
            array (
                'country_id' => 104,
                'id' => 3966,
                'name' => 'Maysan',
            ),
            369 => 
            array (
                'country_id' => 104,
                'id' => 3967,
                'name' => 'Dohuk',
            ),
            370 => 
            array (
                'country_id' => 104,
                'id' => 3968,
                'name' => 'Erbil',
            ),
            371 => 
            array (
                'country_id' => 104,
                'id' => 3969,
                'name' => 'Sulaymaniyah',
            ),
            372 => 
            array (
                'country_id' => 104,
                'id' => 3970,
                'name' => 'Wasit',
            ),
            373 => 
            array (
                'country_id' => 104,
                'id' => 3971,
                'name' => 'Kirkuk',
            ),
            374 => 
            array (
                'country_id' => 37,
                'id' => 3972,
                'name' => 'Svay Rieng',
            ),
            375 => 
            array (
                'country_id' => 37,
                'id' => 3973,
                'name' => 'Preah Vihear',
            ),
            376 => 
            array (
                'country_id' => 37,
                'id' => 3974,
                'name' => 'Prey Veng',
            ),
            377 => 
            array (
                'country_id' => 37,
                'id' => 3975,
                'name' => 'Takeo',
            ),
            378 => 
            array (
                'country_id' => 37,
                'id' => 3976,
                'name' => 'Battambang',
            ),
            379 => 
            array (
                'country_id' => 37,
                'id' => 3977,
                'name' => 'Pursat',
            ),
            380 => 
            array (
                'country_id' => 37,
                'id' => 3978,
                'name' => 'Kep',
            ),
            381 => 
            array (
                'country_id' => 37,
                'id' => 3979,
                'name' => 'Kampong Chhnang',
            ),
            382 => 
            array (
                'country_id' => 37,
                'id' => 3980,
                'name' => 'Pailin',
            ),
            383 => 
            array (
                'country_id' => 37,
                'id' => 3981,
                'name' => 'Kampot',
            ),
            384 => 
            array (
                'country_id' => 37,
                'id' => 3982,
                'name' => 'Koh Kong',
            ),
            385 => 
            array (
                'country_id' => 37,
                'id' => 3983,
                'name' => 'Kandal',
            ),
            386 => 
            array (
                'country_id' => 37,
                'id' => 3984,
                'name' => 'Banteay Meanchey',
            ),
            387 => 
            array (
                'country_id' => 37,
                'id' => 3985,
                'name' => 'Mondulkiri',
            ),
            388 => 
            array (
                'country_id' => 37,
                'id' => 3986,
                'name' => 'Kratie',
            ),
            389 => 
            array (
                'country_id' => 37,
                'id' => 3987,
                'name' => 'Oddar Meanchey',
            ),
            390 => 
            array (
                'country_id' => 37,
                'id' => 3988,
                'name' => 'Kampong Speu',
            ),
            391 => 
            array (
                'country_id' => 37,
                'id' => 3989,
                'name' => 'Sihanoukville',
            ),
            392 => 
            array (
                'country_id' => 37,
                'id' => 3990,
                'name' => 'Ratanakiri',
            ),
            393 => 
            array (
                'country_id' => 37,
                'id' => 3991,
                'name' => 'Kampong Cham',
            ),
            394 => 
            array (
                'country_id' => 37,
                'id' => 3992,
                'name' => 'Siem Reap',
            ),
            395 => 
            array (
                'country_id' => 37,
                'id' => 3993,
                'name' => 'Stung Treng',
            ),
            396 => 
            array (
                'country_id' => 37,
                'id' => 3994,
                'name' => 'Phnom Penh',
            ),
            397 => 
            array (
                'country_id' => 115,
                'id' => 3995,
                'name' => 'North Hamgyong Province',
            ),
            398 => 
            array (
                'country_id' => 115,
                'id' => 3996,
                'name' => 'Ryanggang Province',
            ),
            399 => 
            array (
                'country_id' => 115,
                'id' => 3997,
                'name' => 'South Pyongan Province',
            ),
            400 => 
            array (
                'country_id' => 115,
                'id' => 3998,
                'name' => 'Chagang Province',
            ),
            401 => 
            array (
                'country_id' => 115,
                'id' => 3999,
                'name' => 'Kangwon Province',
            ),
            402 => 
            array (
                'country_id' => 115,
                'id' => 4000,
                'name' => 'South Hamgyong Province',
            ),
            403 => 
            array (
                'country_id' => 115,
                'id' => 4001,
                'name' => 'Rason',
            ),
            404 => 
            array (
                'country_id' => 115,
                'id' => 4002,
                'name' => 'North Pyongan Province',
            ),
            405 => 
            array (
                'country_id' => 115,
                'id' => 4003,
                'name' => 'South Hwanghae Province',
            ),
            406 => 
            array (
                'country_id' => 115,
                'id' => 4004,
                'name' => 'North Hwanghae Province',
            ),
            407 => 
            array (
                'country_id' => 115,
                'id' => 4005,
                'name' => 'Pyongyang',
            ),
            408 => 
            array (
                'country_id' => 101,
                'id' => 4006,
                'name' => 'Meghalaya',
            ),
            409 => 
            array (
                'country_id' => 101,
                'id' => 4007,
                'name' => 'Haryana',
            ),
            410 => 
            array (
                'country_id' => 101,
                'id' => 4008,
                'name' => 'Maharashtra',
            ),
            411 => 
            array (
                'country_id' => 101,
                'id' => 4009,
                'name' => 'Goa',
            ),
            412 => 
            array (
                'country_id' => 101,
                'id' => 4010,
                'name' => 'Manipur',
            ),
            413 => 
            array (
                'country_id' => 101,
                'id' => 4011,
                'name' => 'Puducherry',
            ),
            414 => 
            array (
                'country_id' => 101,
                'id' => 4012,
                'name' => 'Telangana',
            ),
            415 => 
            array (
                'country_id' => 101,
                'id' => 4013,
                'name' => 'Odisha',
            ),
            416 => 
            array (
                'country_id' => 101,
                'id' => 4014,
                'name' => 'Rajasthan',
            ),
            417 => 
            array (
                'country_id' => 101,
                'id' => 4015,
                'name' => 'Punjab',
            ),
            418 => 
            array (
                'country_id' => 101,
                'id' => 4016,
                'name' => 'Uttarakhand',
            ),
            419 => 
            array (
                'country_id' => 101,
                'id' => 4017,
                'name' => 'Andhra Pradesh',
            ),
            420 => 
            array (
                'country_id' => 101,
                'id' => 4018,
                'name' => 'Nagaland',
            ),
            421 => 
            array (
                'country_id' => 101,
                'id' => 4019,
                'name' => 'Lakshadweep',
            ),
            422 => 
            array (
                'country_id' => 101,
                'id' => 4020,
                'name' => 'Himachal Pradesh',
            ),
            423 => 
            array (
                'country_id' => 101,
                'id' => 4021,
                'name' => 'Delhi',
            ),
            424 => 
            array (
                'country_id' => 101,
                'id' => 4022,
                'name' => 'Uttar Pradesh',
            ),
            425 => 
            array (
                'country_id' => 101,
                'id' => 4023,
                'name' => 'Andaman and Nicobar Islands',
            ),
            426 => 
            array (
                'country_id' => 101,
                'id' => 4024,
                'name' => 'Arunachal Pradesh',
            ),
            427 => 
            array (
                'country_id' => 101,
                'id' => 4025,
                'name' => 'Jharkhand',
            ),
            428 => 
            array (
                'country_id' => 101,
                'id' => 4026,
                'name' => 'Karnataka',
            ),
            429 => 
            array (
                'country_id' => 101,
                'id' => 4027,
                'name' => 'Assam',
            ),
            430 => 
            array (
                'country_id' => 101,
                'id' => 4028,
                'name' => 'Kerala',
            ),
            431 => 
            array (
                'country_id' => 101,
                'id' => 4029,
                'name' => 'Jammu and Kashmir',
            ),
            432 => 
            array (
                'country_id' => 101,
                'id' => 4030,
                'name' => 'Gujarat',
            ),
            433 => 
            array (
                'country_id' => 101,
                'id' => 4031,
                'name' => 'Chandigarh',
            ),
            434 => 
            array (
                'country_id' => 101,
                'id' => 4033,
                'name' => 'Dadra and Nagar Haveli and Daman and Diu',
            ),
            435 => 
            array (
                'country_id' => 101,
                'id' => 4034,
                'name' => 'Sikkim',
            ),
            436 => 
            array (
                'country_id' => 101,
                'id' => 4035,
                'name' => 'Tamil Nadu',
            ),
            437 => 
            array (
                'country_id' => 101,
                'id' => 4036,
                'name' => 'Mizoram',
            ),
            438 => 
            array (
                'country_id' => 101,
                'id' => 4037,
                'name' => 'Bihar',
            ),
            439 => 
            array (
                'country_id' => 101,
                'id' => 4038,
                'name' => 'Tripura',
            ),
            440 => 
            array (
                'country_id' => 101,
                'id' => 4039,
                'name' => 'Madhya Pradesh',
            ),
            441 => 
            array (
                'country_id' => 101,
                'id' => 4040,
                'name' => 'Chhattisgarh',
            ),
            442 => 
            array (
                'country_id' => 97,
                'id' => 4041,
                'name' => 'Choluteca Department',
            ),
            443 => 
            array (
                'country_id' => 97,
                'id' => 4042,
                'name' => 'Comayagua Department',
            ),
            444 => 
            array (
                'country_id' => 97,
                'id' => 4043,
                'name' => 'El Paraíso Department',
            ),
            445 => 
            array (
                'country_id' => 97,
                'id' => 4044,
                'name' => 'Intibucá Department',
            ),
            446 => 
            array (
                'country_id' => 97,
                'id' => 4045,
                'name' => 'Bay Islands Department',
            ),
            447 => 
            array (
                'country_id' => 97,
                'id' => 4046,
                'name' => 'Cortés Department',
            ),
            448 => 
            array (
                'country_id' => 97,
                'id' => 4047,
                'name' => 'Atlántida Department',
            ),
            449 => 
            array (
                'country_id' => 97,
                'id' => 4048,
                'name' => 'Gracias a Dios Department',
            ),
            450 => 
            array (
                'country_id' => 97,
                'id' => 4049,
                'name' => 'Copán Department',
            ),
            451 => 
            array (
                'country_id' => 97,
                'id' => 4050,
                'name' => 'Olancho Department',
            ),
            452 => 
            array (
                'country_id' => 97,
                'id' => 4051,
                'name' => 'Colón Department',
            ),
            453 => 
            array (
                'country_id' => 97,
                'id' => 4052,
                'name' => 'Francisco Morazán Department',
            ),
            454 => 
            array (
                'country_id' => 97,
                'id' => 4053,
                'name' => 'Santa Bárbara Department',
            ),
            455 => 
            array (
                'country_id' => 97,
                'id' => 4054,
                'name' => 'Lempira Department',
            ),
            456 => 
            array (
                'country_id' => 97,
                'id' => 4055,
                'name' => 'Valle Department',
            ),
            457 => 
            array (
                'country_id' => 97,
                'id' => 4056,
                'name' => 'Ocotepeque Department',
            ),
            458 => 
            array (
                'country_id' => 97,
                'id' => 4057,
                'name' => 'Yoro Department',
            ),
            459 => 
            array (
                'country_id' => 97,
                'id' => 4058,
                'name' => 'La Paz Department',
            ),
            460 => 
            array (
                'country_id' => 158,
                'id' => 4059,
                'name' => 'Northland Region',
            ),
            461 => 
            array (
                'country_id' => 158,
                'id' => 4060,
                'name' => 'Manawatu-Wanganui Region',
            ),
            462 => 
            array (
                'country_id' => 158,
                'id' => 4061,
                'name' => 'Waikato Region',
            ),
            463 => 
            array (
                'country_id' => 158,
                'id' => 4062,
                'name' => 'Otago Region',
            ),
            464 => 
            array (
                'country_id' => 158,
                'id' => 4063,
                'name' => 'Marlborough Region',
            ),
            465 => 
            array (
                'country_id' => 158,
                'id' => 4064,
                'name' => 'West Coast Region',
            ),
            466 => 
            array (
                'country_id' => 158,
                'id' => 4065,
                'name' => 'Wellington Region',
            ),
            467 => 
            array (
                'country_id' => 158,
                'id' => 4066,
                'name' => 'Canterbury Region',
            ),
            468 => 
            array (
                'country_id' => 158,
                'id' => 4067,
                'name' => 'Chatham Islands',
            ),
            469 => 
            array (
                'country_id' => 158,
                'id' => 4068,
                'name' => 'Gisborne District',
            ),
            470 => 
            array (
                'country_id' => 158,
                'id' => 4069,
                'name' => 'Taranaki Region',
            ),
            471 => 
            array (
                'country_id' => 158,
                'id' => 4070,
                'name' => 'Nelson Region',
            ),
            472 => 
            array (
                'country_id' => 158,
                'id' => 4071,
                'name' => 'Southland Region',
            ),
            473 => 
            array (
                'country_id' => 158,
                'id' => 4072,
                'name' => 'Auckland Region',
            ),
            474 => 
            array (
                'country_id' => 158,
                'id' => 4073,
                'name' => 'Tasman District',
            ),
            475 => 
            array (
                'country_id' => 158,
                'id' => 4074,
                'name' => 'Bay of Plenty Region',
            ),
            476 => 
            array (
                'country_id' => 158,
                'id' => 4075,
                'name' => 'Hawke\'s Bay Region',
            ),
            477 => 
            array (
                'country_id' => 61,
                'id' => 4076,
                'name' => 'Saint John Parish',
            ),
            478 => 
            array (
                'country_id' => 61,
                'id' => 4077,
                'name' => 'Saint Mark Parish',
            ),
            479 => 
            array (
                'country_id' => 61,
                'id' => 4078,
                'name' => 'Saint David Parish',
            ),
            480 => 
            array (
                'country_id' => 61,
                'id' => 4079,
                'name' => 'Saint George Parish',
            ),
            481 => 
            array (
                'country_id' => 61,
                'id' => 4080,
                'name' => 'Saint Patrick Parish',
            ),
            482 => 
            array (
                'country_id' => 61,
                'id' => 4081,
                'name' => 'Saint Peter Parish',
            ),
            483 => 
            array (
                'country_id' => 61,
                'id' => 4082,
                'name' => 'Saint Andrew Parish',
            ),
            484 => 
            array (
                'country_id' => 61,
                'id' => 4083,
                'name' => 'Saint Luke Parish',
            ),
            485 => 
            array (
                'country_id' => 61,
                'id' => 4084,
                'name' => 'Saint Paul Parish',
            ),
            486 => 
            array (
                'country_id' => 61,
                'id' => 4085,
                'name' => 'Saint Joseph Parish',
            ),
            487 => 
            array (
                'country_id' => 62,
                'id' => 4086,
                'name' => 'El Seibo Province',
            ),
            488 => 
            array (
                'country_id' => 62,
                'id' => 4087,
                'name' => 'La Romana Province',
            ),
            489 => 
            array (
                'country_id' => 62,
                'id' => 4088,
                'name' => 'Sánchez Ramírez Province',
            ),
            490 => 
            array (
                'country_id' => 62,
                'id' => 4089,
                'name' => 'Hermanas Mirabal Province',
            ),
            491 => 
            array (
                'country_id' => 62,
                'id' => 4090,
                'name' => 'Barahona Province',
            ),
            492 => 
            array (
                'country_id' => 62,
                'id' => 4091,
                'name' => 'San Cristóbal Province',
            ),
            493 => 
            array (
                'country_id' => 62,
                'id' => 4092,
                'name' => 'Puerto Plata Province',
            ),
            494 => 
            array (
                'country_id' => 62,
                'id' => 4093,
                'name' => 'Santo Domingo Province',
            ),
            495 => 
            array (
                'country_id' => 62,
                'id' => 4094,
                'name' => 'María Trinidad Sánchez Province',
            ),
            496 => 
            array (
                'country_id' => 62,
                'id' => 4095,
                'name' => 'Distrito Nacional',
            ),
            497 => 
            array (
                'country_id' => 62,
                'id' => 4096,
                'name' => 'Peravia Province',
            ),
            498 => 
            array (
                'country_id' => 62,
                'id' => 4097,
                'name' => 'Independencia',
            ),
            499 => 
            array (
                'country_id' => 62,
                'id' => 4098,
                'name' => 'San Juan Province',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 62,
                'id' => 4099,
                'name' => 'Monseñor Nouel Province',
            ),
            1 => 
            array (
                'country_id' => 62,
                'id' => 4100,
                'name' => 'Santiago Rodríguez Province',
            ),
            2 => 
            array (
                'country_id' => 62,
                'id' => 4101,
                'name' => 'Pedernales Province',
            ),
            3 => 
            array (
                'country_id' => 62,
                'id' => 4102,
                'name' => 'Espaillat Province',
            ),
            4 => 
            array (
                'country_id' => 62,
                'id' => 4103,
                'name' => 'Samaná Province',
            ),
            5 => 
            array (
                'country_id' => 62,
                'id' => 4104,
                'name' => 'Valverde Province',
            ),
            6 => 
            array (
                'country_id' => 62,
                'id' => 4105,
                'name' => 'Baoruco Province',
            ),
            7 => 
            array (
                'country_id' => 62,
                'id' => 4106,
                'name' => 'Hato Mayor Province',
            ),
            8 => 
            array (
                'country_id' => 62,
                'id' => 4107,
                'name' => 'Dajabón Province',
            ),
            9 => 
            array (
                'country_id' => 62,
                'id' => 4108,
                'name' => 'Santiago Province',
            ),
            10 => 
            array (
                'country_id' => 62,
                'id' => 4109,
                'name' => 'La Altagracia Province',
            ),
            11 => 
            array (
                'country_id' => 62,
                'id' => 4110,
                'name' => 'San Pedro de Macorís',
            ),
            12 => 
            array (
                'country_id' => 62,
                'id' => 4111,
                'name' => 'Monte Plata Province',
            ),
            13 => 
            array (
                'country_id' => 62,
                'id' => 4112,
                'name' => 'San José de Ocoa Province',
            ),
            14 => 
            array (
                'country_id' => 62,
                'id' => 4113,
                'name' => 'Duarte Province',
            ),
            15 => 
            array (
                'country_id' => 62,
                'id' => 4114,
                'name' => 'Azua Province',
            ),
            16 => 
            array (
                'country_id' => 62,
                'id' => 4115,
                'name' => 'Monte Cristi Province',
            ),
            17 => 
            array (
                'country_id' => 62,
                'id' => 4116,
                'name' => 'La Vega Province',
            ),
            18 => 
            array (
                'country_id' => 95,
                'id' => 4117,
                'name' => 'Nord',
            ),
            19 => 
            array (
                'country_id' => 95,
                'id' => 4118,
                'name' => 'Nippes',
            ),
            20 => 
            array (
                'country_id' => 95,
                'id' => 4119,
                'name' => 'Grand\'Anse',
            ),
            21 => 
            array (
                'country_id' => 95,
                'id' => 4120,
                'name' => 'Ouest',
            ),
            22 => 
            array (
                'country_id' => 95,
                'id' => 4121,
                'name' => 'Nord-Est',
            ),
            23 => 
            array (
                'country_id' => 95,
                'id' => 4122,
                'name' => 'Sud',
            ),
            24 => 
            array (
                'country_id' => 95,
                'id' => 4123,
                'name' => 'Artibonite',
            ),
            25 => 
            array (
                'country_id' => 95,
                'id' => 4124,
                'name' => 'Sud-Est',
            ),
            26 => 
            array (
                'country_id' => 95,
                'id' => 4125,
                'name' => 'Centre',
            ),
            27 => 
            array (
                'country_id' => 95,
                'id' => 4126,
                'name' => 'Nord-Ouest',
            ),
            28 => 
            array (
                'country_id' => 66,
                'id' => 4127,
                'name' => 'San Vicente Department',
            ),
            29 => 
            array (
                'country_id' => 66,
                'id' => 4128,
                'name' => 'Santa Ana Department',
            ),
            30 => 
            array (
                'country_id' => 66,
                'id' => 4129,
                'name' => 'Usulután Department',
            ),
            31 => 
            array (
                'country_id' => 66,
                'id' => 4130,
                'name' => 'Morazán Department',
            ),
            32 => 
            array (
                'country_id' => 66,
                'id' => 4131,
                'name' => 'Chalatenango Department',
            ),
            33 => 
            array (
                'country_id' => 66,
                'id' => 4132,
                'name' => 'Cabañas Department',
            ),
            34 => 
            array (
                'country_id' => 66,
                'id' => 4133,
                'name' => 'San Salvador Department',
            ),
            35 => 
            array (
                'country_id' => 66,
                'id' => 4134,
                'name' => 'La Libertad Department',
            ),
            36 => 
            array (
                'country_id' => 66,
                'id' => 4135,
                'name' => 'San Miguel Department',
            ),
            37 => 
            array (
                'country_id' => 66,
                'id' => 4136,
                'name' => 'La Paz Department',
            ),
            38 => 
            array (
                'country_id' => 66,
                'id' => 4137,
                'name' => 'Cuscatlán Department',
            ),
            39 => 
            array (
                'country_id' => 66,
                'id' => 4138,
                'name' => 'La Unión Department',
            ),
            40 => 
            array (
                'country_id' => 66,
                'id' => 4139,
                'name' => 'Ahuachapán Department',
            ),
            41 => 
            array (
                'country_id' => 66,
                'id' => 4140,
                'name' => 'Sonsonate Department',
            ),
            42 => 
            array (
                'country_id' => 201,
                'id' => 4141,
                'name' => 'Braslovče Municipality',
            ),
            43 => 
            array (
                'country_id' => 201,
                'id' => 4142,
                'name' => 'Lenart Municipality',
            ),
            44 => 
            array (
                'country_id' => 201,
                'id' => 4143,
                'name' => 'Oplotnica',
            ),
            45 => 
            array (
                'country_id' => 201,
                'id' => 4144,
                'name' => 'Velike Lašče Municipality',
            ),
            46 => 
            array (
                'country_id' => 201,
                'id' => 4145,
                'name' => 'Hajdina Municipality',
            ),
            47 => 
            array (
                'country_id' => 201,
                'id' => 4146,
                'name' => 'Podčetrtek Municipality',
            ),
            48 => 
            array (
                'country_id' => 201,
                'id' => 4147,
                'name' => 'Cankova Municipality',
            ),
            49 => 
            array (
                'country_id' => 201,
                'id' => 4148,
                'name' => 'Vitanje Municipality',
            ),
            50 => 
            array (
                'country_id' => 201,
                'id' => 4149,
                'name' => 'Sežana Municipality',
            ),
            51 => 
            array (
                'country_id' => 201,
                'id' => 4150,
                'name' => 'Kidričevo Municipality',
            ),
            52 => 
            array (
                'country_id' => 201,
                'id' => 4151,
                'name' => 'Črenšovci Municipality',
            ),
            53 => 
            array (
                'country_id' => 201,
                'id' => 4152,
                'name' => 'Idrija Municipality',
            ),
            54 => 
            array (
                'country_id' => 201,
                'id' => 4153,
                'name' => 'Trnovska Vas Municipality',
            ),
            55 => 
            array (
                'country_id' => 201,
                'id' => 4154,
                'name' => 'Vodice Municipality',
            ),
            56 => 
            array (
                'country_id' => 201,
                'id' => 4155,
                'name' => 'Ravne na Koroškem Municipality',
            ),
            57 => 
            array (
                'country_id' => 201,
                'id' => 4156,
                'name' => 'Lovrenc na Pohorju Municipality',
            ),
            58 => 
            array (
                'country_id' => 201,
                'id' => 4157,
                'name' => 'Majšperk Municipality',
            ),
            59 => 
            array (
                'country_id' => 201,
                'id' => 4158,
                'name' => 'Loški Potok Municipality',
            ),
            60 => 
            array (
                'country_id' => 201,
                'id' => 4159,
                'name' => 'Domžale Municipality',
            ),
            61 => 
            array (
                'country_id' => 201,
                'id' => 4160,
                'name' => 'Rečica ob Savinji Municipality',
            ),
            62 => 
            array (
                'country_id' => 201,
                'id' => 4161,
                'name' => 'Podlehnik Municipality',
            ),
            63 => 
            array (
                'country_id' => 201,
                'id' => 4162,
                'name' => 'Cerknica Municipality',
            ),
            64 => 
            array (
                'country_id' => 201,
                'id' => 4163,
                'name' => 'Vransko Municipality',
            ),
            65 => 
            array (
                'country_id' => 201,
                'id' => 4164,
                'name' => 'Sveta Ana Municipality',
            ),
            66 => 
            array (
                'country_id' => 201,
                'id' => 4165,
                'name' => 'Brezovica Municipality',
            ),
            67 => 
            array (
                'country_id' => 201,
                'id' => 4166,
                'name' => 'Benedikt Municipality',
            ),
            68 => 
            array (
                'country_id' => 201,
                'id' => 4167,
                'name' => 'Divača Municipality',
            ),
            69 => 
            array (
                'country_id' => 201,
                'id' => 4168,
                'name' => 'Moravče Municipality',
            ),
            70 => 
            array (
                'country_id' => 201,
                'id' => 4169,
                'name' => 'Slovenj Gradec City Municipality',
            ),
            71 => 
            array (
                'country_id' => 201,
                'id' => 4170,
                'name' => 'Škocjan Municipality',
            ),
            72 => 
            array (
                'country_id' => 201,
                'id' => 4171,
                'name' => 'Šentjur Municipality',
            ),
            73 => 
            array (
                'country_id' => 201,
                'id' => 4172,
                'name' => 'Pesnica Municipality',
            ),
            74 => 
            array (
                'country_id' => 201,
                'id' => 4173,
                'name' => 'Dol pri Ljubljani Municipality',
            ),
            75 => 
            array (
                'country_id' => 201,
                'id' => 4174,
                'name' => 'Loška Dolina Municipality',
            ),
            76 => 
            array (
                'country_id' => 201,
                'id' => 4175,
                'name' => 'Hoče–Slivnica Municipality',
            ),
            77 => 
            array (
                'country_id' => 201,
                'id' => 4176,
                'name' => 'Cerkvenjak Municipality',
            ),
            78 => 
            array (
                'country_id' => 201,
                'id' => 4177,
                'name' => 'Naklo Municipality',
            ),
            79 => 
            array (
                'country_id' => 201,
                'id' => 4178,
                'name' => 'Cerkno Municipality',
            ),
            80 => 
            array (
                'country_id' => 201,
                'id' => 4179,
                'name' => 'Bistrica ob Sotli Municipality',
            ),
            81 => 
            array (
                'country_id' => 201,
                'id' => 4180,
                'name' => 'Kamnik Municipality',
            ),
            82 => 
            array (
                'country_id' => 201,
                'id' => 4181,
                'name' => 'Bovec Municipality',
            ),
            83 => 
            array (
                'country_id' => 201,
                'id' => 4182,
                'name' => 'Zavrč Municipality',
            ),
            84 => 
            array (
                'country_id' => 201,
                'id' => 4183,
                'name' => 'Ajdovščina Municipality',
            ),
            85 => 
            array (
                'country_id' => 201,
                'id' => 4184,
                'name' => 'Pivka Municipality',
            ),
            86 => 
            array (
                'country_id' => 201,
                'id' => 4185,
                'name' => 'Štore Municipality',
            ),
            87 => 
            array (
                'country_id' => 201,
                'id' => 4186,
                'name' => 'Kozje Municipality',
            ),
            88 => 
            array (
                'country_id' => 201,
                'id' => 4187,
                'name' => 'Municipality of Škofljica',
            ),
            89 => 
            array (
                'country_id' => 201,
                'id' => 4188,
                'name' => 'Prebold Municipality',
            ),
            90 => 
            array (
                'country_id' => 201,
                'id' => 4189,
                'name' => 'Dobrovnik Municipality',
            ),
            91 => 
            array (
                'country_id' => 201,
                'id' => 4190,
                'name' => 'Mozirje Municipality',
            ),
            92 => 
            array (
                'country_id' => 201,
                'id' => 4191,
                'name' => 'City Municipality of Celje',
            ),
            93 => 
            array (
                'country_id' => 201,
                'id' => 4192,
                'name' => 'Žiri Municipality',
            ),
            94 => 
            array (
                'country_id' => 201,
                'id' => 4193,
                'name' => 'Horjul Municipality',
            ),
            95 => 
            array (
                'country_id' => 201,
                'id' => 4194,
                'name' => 'Tabor Municipality',
            ),
            96 => 
            array (
                'country_id' => 201,
                'id' => 4195,
                'name' => 'Radeče Municipality',
            ),
            97 => 
            array (
                'country_id' => 201,
                'id' => 4196,
                'name' => 'Vipava Municipality',
            ),
            98 => 
            array (
                'country_id' => 201,
                'id' => 4197,
                'name' => 'Kungota',
            ),
            99 => 
            array (
                'country_id' => 201,
                'id' => 4198,
                'name' => 'Slovenske Konjice Municipality',
            ),
            100 => 
            array (
                'country_id' => 201,
                'id' => 4199,
                'name' => 'Osilnica Municipality',
            ),
            101 => 
            array (
                'country_id' => 201,
                'id' => 4200,
                'name' => 'Borovnica Municipality',
            ),
            102 => 
            array (
                'country_id' => 201,
                'id' => 4201,
                'name' => 'Piran Municipality',
            ),
            103 => 
            array (
                'country_id' => 201,
                'id' => 4202,
                'name' => 'Bled Municipality',
            ),
            104 => 
            array (
                'country_id' => 201,
                'id' => 4203,
                'name' => 'Jezersko Municipality',
            ),
            105 => 
            array (
                'country_id' => 201,
                'id' => 4204,
                'name' => 'Rače–Fram Municipality',
            ),
            106 => 
            array (
                'country_id' => 201,
                'id' => 4205,
                'name' => 'Nova Gorica City Municipality',
            ),
            107 => 
            array (
                'country_id' => 201,
                'id' => 4206,
                'name' => 'Razkrižje Municipality',
            ),
            108 => 
            array (
                'country_id' => 201,
                'id' => 4207,
                'name' => 'Ribnica na Pohorju Municipality',
            ),
            109 => 
            array (
                'country_id' => 201,
                'id' => 4208,
                'name' => 'Muta Municipality',
            ),
            110 => 
            array (
                'country_id' => 201,
                'id' => 4209,
                'name' => 'Rogatec Municipality',
            ),
            111 => 
            array (
                'country_id' => 201,
                'id' => 4210,
                'name' => 'Gorišnica Municipality',
            ),
            112 => 
            array (
                'country_id' => 201,
                'id' => 4211,
                'name' => 'Kuzma Municipality',
            ),
            113 => 
            array (
                'country_id' => 201,
                'id' => 4212,
                'name' => 'Mislinja Municipality',
            ),
            114 => 
            array (
                'country_id' => 201,
                'id' => 4213,
                'name' => 'Duplek Municipality',
            ),
            115 => 
            array (
                'country_id' => 201,
                'id' => 4214,
                'name' => 'Trebnje Municipality',
            ),
            116 => 
            array (
                'country_id' => 201,
                'id' => 4215,
                'name' => 'Brežice Municipality',
            ),
            117 => 
            array (
                'country_id' => 201,
                'id' => 4216,
                'name' => 'Dobrepolje Municipality',
            ),
            118 => 
            array (
                'country_id' => 201,
                'id' => 4217,
                'name' => 'Grad Municipality',
            ),
            119 => 
            array (
                'country_id' => 201,
                'id' => 4218,
                'name' => 'Moravske Toplice Municipality',
            ),
            120 => 
            array (
                'country_id' => 201,
                'id' => 4219,
                'name' => 'Luče Municipality',
            ),
            121 => 
            array (
                'country_id' => 201,
                'id' => 4220,
                'name' => 'Miren–Kostanjevica Municipality',
            ),
            122 => 
            array (
                'country_id' => 201,
                'id' => 4221,
                'name' => 'Ormož Municipality',
            ),
            123 => 
            array (
                'country_id' => 201,
                'id' => 4222,
                'name' => 'Šalovci Municipality',
            ),
            124 => 
            array (
                'country_id' => 201,
                'id' => 4223,
                'name' => 'Miklavž na Dravskem Polju Municipality',
            ),
            125 => 
            array (
                'country_id' => 201,
                'id' => 4224,
                'name' => 'Makole Municipality',
            ),
            126 => 
            array (
                'country_id' => 201,
                'id' => 4225,
                'name' => 'Lendava Municipality',
            ),
            127 => 
            array (
                'country_id' => 201,
                'id' => 4226,
                'name' => 'Vuzenica Municipality',
            ),
            128 => 
            array (
                'country_id' => 201,
                'id' => 4227,
                'name' => 'Kanal ob Soči Municipality',
            ),
            129 => 
            array (
                'country_id' => 201,
                'id' => 4228,
                'name' => 'Ptuj City Municipality',
            ),
            130 => 
            array (
                'country_id' => 201,
                'id' => 4229,
                'name' => 'Sveti Andraž v Slovenskih Goricah Municipality',
            ),
            131 => 
            array (
                'country_id' => 201,
                'id' => 4230,
                'name' => 'Selnica ob Dravi Municipality',
            ),
            132 => 
            array (
                'country_id' => 201,
                'id' => 4231,
                'name' => 'Radovljica Municipality',
            ),
            133 => 
            array (
                'country_id' => 201,
                'id' => 4232,
                'name' => 'Črna na Koroškem Municipality',
            ),
            134 => 
            array (
                'country_id' => 201,
                'id' => 4233,
                'name' => 'Rogaška Slatina Municipality',
            ),
            135 => 
            array (
                'country_id' => 201,
                'id' => 4234,
                'name' => 'Podvelka Municipality',
            ),
            136 => 
            array (
                'country_id' => 201,
                'id' => 4235,
                'name' => 'Ribnica Municipality',
            ),
            137 => 
            array (
                'country_id' => 201,
                'id' => 4236,
                'name' => 'City Municipality of Novo Mesto',
            ),
            138 => 
            array (
                'country_id' => 201,
                'id' => 4237,
                'name' => 'Mirna Peč Municipality',
            ),
            139 => 
            array (
                'country_id' => 201,
                'id' => 4238,
                'name' => 'Križevci Municipality',
            ),
            140 => 
            array (
                'country_id' => 201,
                'id' => 4239,
                'name' => 'Poljčane Municipality',
            ),
            141 => 
            array (
                'country_id' => 201,
                'id' => 4240,
                'name' => 'Brda Municipality',
            ),
            142 => 
            array (
                'country_id' => 201,
                'id' => 4241,
                'name' => 'Šentjernej Municipality',
            ),
            143 => 
            array (
                'country_id' => 201,
                'id' => 4242,
                'name' => 'Maribor City Municipality',
            ),
            144 => 
            array (
                'country_id' => 201,
                'id' => 4243,
                'name' => 'Kobarid Municipality',
            ),
            145 => 
            array (
                'country_id' => 201,
                'id' => 4244,
                'name' => 'Markovci Municipality',
            ),
            146 => 
            array (
                'country_id' => 201,
                'id' => 4245,
                'name' => 'Vojnik Municipality',
            ),
            147 => 
            array (
                'country_id' => 201,
                'id' => 4246,
                'name' => 'Trbovlje Municipality',
            ),
            148 => 
            array (
                'country_id' => 201,
                'id' => 4247,
                'name' => 'Tolmin Municipality',
            ),
            149 => 
            array (
                'country_id' => 201,
                'id' => 4248,
                'name' => 'Šoštanj Municipality',
            ),
            150 => 
            array (
                'country_id' => 201,
                'id' => 4249,
                'name' => 'Žetale Municipality',
            ),
            151 => 
            array (
                'country_id' => 201,
                'id' => 4250,
                'name' => 'Tržič Municipality',
            ),
            152 => 
            array (
                'country_id' => 201,
                'id' => 4251,
                'name' => 'Turnišče Municipality',
            ),
            153 => 
            array (
                'country_id' => 201,
                'id' => 4252,
                'name' => 'Dobrna Municipality',
            ),
            154 => 
            array (
                'country_id' => 201,
                'id' => 4253,
                'name' => 'Renče–Vogrsko Municipality',
            ),
            155 => 
            array (
                'country_id' => 201,
                'id' => 4254,
                'name' => 'Kostanjevica na Krki Municipality',
            ),
            156 => 
            array (
                'country_id' => 201,
                'id' => 4255,
                'name' => 'Sveti Jurij ob Ščavnici Municipality',
            ),
            157 => 
            array (
                'country_id' => 201,
                'id' => 4256,
                'name' => 'Železniki Municipality',
            ),
            158 => 
            array (
                'country_id' => 201,
                'id' => 4257,
                'name' => 'Veržej Municipality',
            ),
            159 => 
            array (
                'country_id' => 201,
                'id' => 4258,
                'name' => 'Žalec Municipality',
            ),
            160 => 
            array (
                'country_id' => 201,
                'id' => 4259,
                'name' => 'Starše Municipality',
            ),
            161 => 
            array (
                'country_id' => 201,
                'id' => 4260,
                'name' => 'Sveta Trojica v Slovenskih Goricah Municipality',
            ),
            162 => 
            array (
                'country_id' => 201,
                'id' => 4261,
                'name' => 'Solčava Municipality',
            ),
            163 => 
            array (
                'country_id' => 201,
                'id' => 4262,
                'name' => 'Vrhnika Municipality',
            ),
            164 => 
            array (
                'country_id' => 201,
                'id' => 4263,
                'name' => 'Središče ob Dravi',
            ),
            165 => 
            array (
                'country_id' => 201,
                'id' => 4264,
                'name' => 'Rogašovci Municipality',
            ),
            166 => 
            array (
                'country_id' => 201,
                'id' => 4265,
                'name' => 'Mežica Municipality',
            ),
            167 => 
            array (
                'country_id' => 201,
                'id' => 4266,
                'name' => 'Juršinci Municipality',
            ),
            168 => 
            array (
                'country_id' => 201,
                'id' => 4267,
                'name' => 'Velika Polana Municipality',
            ),
            169 => 
            array (
                'country_id' => 201,
                'id' => 4268,
                'name' => 'Sevnica Municipality',
            ),
            170 => 
            array (
                'country_id' => 201,
                'id' => 4269,
                'name' => 'Zagorje ob Savi Municipality',
            ),
            171 => 
            array (
                'country_id' => 201,
                'id' => 4270,
                'name' => 'Ljubljana City Municipality',
            ),
            172 => 
            array (
                'country_id' => 201,
                'id' => 4271,
                'name' => 'Gornji Petrovci Municipality',
            ),
            173 => 
            array (
                'country_id' => 201,
                'id' => 4272,
                'name' => 'Polzela Municipality',
            ),
            174 => 
            array (
                'country_id' => 201,
                'id' => 4273,
                'name' => 'Sveti Tomaž Municipality',
            ),
            175 => 
            array (
                'country_id' => 201,
                'id' => 4274,
                'name' => 'Prevalje Municipality',
            ),
            176 => 
            array (
                'country_id' => 201,
                'id' => 4275,
                'name' => 'Radlje ob Dravi Municipality',
            ),
            177 => 
            array (
                'country_id' => 201,
                'id' => 4276,
                'name' => 'Žirovnica Municipality',
            ),
            178 => 
            array (
                'country_id' => 201,
                'id' => 4277,
                'name' => 'Sodražica Municipality',
            ),
            179 => 
            array (
                'country_id' => 201,
                'id' => 4278,
                'name' => 'Bloke Municipality',
            ),
            180 => 
            array (
                'country_id' => 201,
                'id' => 4279,
                'name' => 'Šmartno pri Litiji Municipality',
            ),
            181 => 
            array (
                'country_id' => 201,
                'id' => 4280,
                'name' => 'Ruše Municipality',
            ),
            182 => 
            array (
                'country_id' => 201,
                'id' => 4281,
                'name' => 'Dolenjske Toplice Municipality',
            ),
            183 => 
            array (
                'country_id' => 201,
                'id' => 4282,
                'name' => 'Bohinj Municipality',
            ),
            184 => 
            array (
                'country_id' => 201,
                'id' => 4283,
                'name' => 'Komenda Municipality',
            ),
            185 => 
            array (
                'country_id' => 201,
                'id' => 4284,
                'name' => 'Gorje Municipality',
            ),
            186 => 
            array (
                'country_id' => 201,
                'id' => 4285,
                'name' => 'Šmarje pri Jelšah Municipality',
            ),
            187 => 
            array (
                'country_id' => 201,
                'id' => 4286,
                'name' => 'Ig Municipality',
            ),
            188 => 
            array (
                'country_id' => 201,
                'id' => 4287,
                'name' => 'Kranj City Municipality',
            ),
            189 => 
            array (
                'country_id' => 201,
                'id' => 4288,
                'name' => 'Puconci Municipality',
            ),
            190 => 
            array (
                'country_id' => 201,
                'id' => 4289,
                'name' => 'Šmarješke Toplice Municipality',
            ),
            191 => 
            array (
                'country_id' => 201,
                'id' => 4290,
                'name' => 'Dornava Municipality',
            ),
            192 => 
            array (
                'country_id' => 201,
                'id' => 4291,
                'name' => 'Črnomelj Municipality',
            ),
            193 => 
            array (
                'country_id' => 201,
                'id' => 4292,
                'name' => 'Radenci Municipality',
            ),
            194 => 
            array (
                'country_id' => 201,
                'id' => 4293,
                'name' => 'Gorenja Vas–Poljane Municipality',
            ),
            195 => 
            array (
                'country_id' => 201,
                'id' => 4294,
                'name' => 'Ljubno Municipality',
            ),
            196 => 
            array (
                'country_id' => 201,
                'id' => 4295,
                'name' => 'Dobje Municipality',
            ),
            197 => 
            array (
                'country_id' => 201,
                'id' => 4296,
                'name' => 'Šmartno ob Paki Municipality',
            ),
            198 => 
            array (
                'country_id' => 201,
                'id' => 4297,
                'name' => 'Mokronog–Trebelno Municipality',
            ),
            199 => 
            array (
                'country_id' => 201,
                'id' => 4298,
                'name' => 'Mirna Municipality',
            ),
            200 => 
            array (
                'country_id' => 201,
                'id' => 4299,
                'name' => 'Šenčur Municipality',
            ),
            201 => 
            array (
                'country_id' => 201,
                'id' => 4300,
                'name' => 'Videm Municipality',
            ),
            202 => 
            array (
                'country_id' => 201,
                'id' => 4301,
                'name' => 'Beltinci Municipality',
            ),
            203 => 
            array (
                'country_id' => 201,
                'id' => 4302,
                'name' => 'Lukovica Municipality',
            ),
            204 => 
            array (
                'country_id' => 201,
                'id' => 4303,
                'name' => 'Preddvor Municipality',
            ),
            205 => 
            array (
                'country_id' => 201,
                'id' => 4304,
                'name' => 'Destrnik Municipality',
            ),
            206 => 
            array (
                'country_id' => 201,
                'id' => 4305,
                'name' => 'Ivančna Gorica Municipality',
            ),
            207 => 
            array (
                'country_id' => 201,
                'id' => 4306,
                'name' => 'Log–Dragomer Municipality',
            ),
            208 => 
            array (
                'country_id' => 201,
                'id' => 4307,
                'name' => 'Žužemberk Municipality',
            ),
            209 => 
            array (
                'country_id' => 201,
                'id' => 4308,
                'name' => 'Dobrova–Polhov Gradec Municipality',
            ),
            210 => 
            array (
                'country_id' => 201,
                'id' => 4309,
                'name' => 'Municipality of Cirkulane',
            ),
            211 => 
            array (
                'country_id' => 201,
                'id' => 4310,
                'name' => 'Cerklje na Gorenjskem Municipality',
            ),
            212 => 
            array (
                'country_id' => 201,
                'id' => 4311,
                'name' => 'Šentrupert Municipality',
            ),
            213 => 
            array (
                'country_id' => 201,
                'id' => 4312,
                'name' => 'Tišina Municipality',
            ),
            214 => 
            array (
                'country_id' => 201,
                'id' => 4313,
                'name' => 'Murska Sobota City Municipality',
            ),
            215 => 
            array (
                'country_id' => 201,
                'id' => 4314,
                'name' => 'Municipality of Krško',
            ),
            216 => 
            array (
                'country_id' => 201,
                'id' => 4315,
                'name' => 'Komen Municipality',
            ),
            217 => 
            array (
                'country_id' => 201,
                'id' => 4316,
                'name' => 'Škofja Loka Municipality',
            ),
            218 => 
            array (
                'country_id' => 201,
                'id' => 4317,
                'name' => 'Šempeter–Vrtojba Municipality',
            ),
            219 => 
            array (
                'country_id' => 201,
                'id' => 4318,
                'name' => 'Municipality of Apače',
            ),
            220 => 
            array (
                'country_id' => 201,
                'id' => 4319,
                'name' => 'Koper City Municipality',
            ),
            221 => 
            array (
                'country_id' => 201,
                'id' => 4320,
                'name' => 'Odranci Municipality',
            ),
            222 => 
            array (
                'country_id' => 201,
                'id' => 4321,
                'name' => 'Hrpelje–Kozina Municipality',
            ),
            223 => 
            array (
                'country_id' => 201,
                'id' => 4322,
                'name' => 'Izola Municipality',
            ),
            224 => 
            array (
                'country_id' => 201,
                'id' => 4323,
                'name' => 'Metlika Municipality',
            ),
            225 => 
            array (
                'country_id' => 201,
                'id' => 4324,
                'name' => 'Šentilj Municipality',
            ),
            226 => 
            array (
                'country_id' => 201,
                'id' => 4325,
                'name' => 'Kobilje Municipality',
            ),
            227 => 
            array (
                'country_id' => 201,
                'id' => 4326,
                'name' => 'Ankaran Municipality',
            ),
            228 => 
            array (
                'country_id' => 201,
                'id' => 4327,
                'name' => 'Hodoš Municipality',
            ),
            229 => 
            array (
                'country_id' => 201,
                'id' => 4328,
                'name' => 'Sveti Jurij v Slovenskih Goricah Municipality',
            ),
            230 => 
            array (
                'country_id' => 201,
                'id' => 4329,
                'name' => 'Nazarje Municipality',
            ),
            231 => 
            array (
                'country_id' => 201,
                'id' => 4330,
                'name' => 'Postojna Municipality',
            ),
            232 => 
            array (
                'country_id' => 201,
                'id' => 4331,
                'name' => 'Kostel Municipality',
            ),
            233 => 
            array (
                'country_id' => 201,
                'id' => 4332,
                'name' => 'Slovenska Bistrica Municipality',
            ),
            234 => 
            array (
                'country_id' => 201,
                'id' => 4333,
                'name' => 'Straža Municipality',
            ),
            235 => 
            array (
                'country_id' => 201,
                'id' => 4334,
                'name' => 'Trzin Municipality',
            ),
            236 => 
            array (
                'country_id' => 201,
                'id' => 4335,
                'name' => 'Kočevje Municipality',
            ),
            237 => 
            array (
                'country_id' => 201,
                'id' => 4336,
                'name' => 'Grosuplje Municipality',
            ),
            238 => 
            array (
                'country_id' => 201,
                'id' => 4337,
                'name' => 'Jesenice Municipality',
            ),
            239 => 
            array (
                'country_id' => 201,
                'id' => 4338,
                'name' => 'Laško Municipality',
            ),
            240 => 
            array (
                'country_id' => 201,
                'id' => 4339,
                'name' => 'Gornji Grad Municipality',
            ),
            241 => 
            array (
                'country_id' => 201,
                'id' => 4340,
                'name' => 'Kranjska Gora Municipality',
            ),
            242 => 
            array (
                'country_id' => 201,
                'id' => 4341,
                'name' => 'Hrastnik Municipality',
            ),
            243 => 
            array (
                'country_id' => 201,
                'id' => 4342,
                'name' => 'Zreče Municipality',
            ),
            244 => 
            array (
                'country_id' => 201,
                'id' => 4343,
                'name' => 'Gornja Radgona Municipality',
            ),
            245 => 
            array (
                'country_id' => 201,
                'id' => 4344,
                'name' => 'Municipality of Ilirska Bistrica',
            ),
            246 => 
            array (
                'country_id' => 201,
                'id' => 4345,
                'name' => 'Dravograd Municipality',
            ),
            247 => 
            array (
                'country_id' => 201,
                'id' => 4346,
                'name' => 'Semič Municipality',
            ),
            248 => 
            array (
                'country_id' => 201,
                'id' => 4347,
                'name' => 'Litija Municipality',
            ),
            249 => 
            array (
                'country_id' => 201,
                'id' => 4348,
                'name' => 'Mengeš Municipality',
            ),
            250 => 
            array (
                'country_id' => 201,
                'id' => 4349,
                'name' => 'Medvode Municipality',
            ),
            251 => 
            array (
                'country_id' => 201,
                'id' => 4350,
                'name' => 'Logatec Municipality',
            ),
            252 => 
            array (
                'country_id' => 201,
                'id' => 4351,
                'name' => 'Ljutomer Municipality',
            ),
            253 => 
            array (
                'country_id' => 200,
                'id' => 4352,
                'name' => 'Banská Bystrica Region',
            ),
            254 => 
            array (
                'country_id' => 200,
                'id' => 4353,
                'name' => 'Košice Region',
            ),
            255 => 
            array (
                'country_id' => 200,
                'id' => 4354,
                'name' => 'Prešov Region',
            ),
            256 => 
            array (
                'country_id' => 200,
                'id' => 4355,
                'name' => 'Trnava Region',
            ),
            257 => 
            array (
                'country_id' => 200,
                'id' => 4356,
                'name' => 'Bratislava Region',
            ),
            258 => 
            array (
                'country_id' => 200,
                'id' => 4357,
                'name' => 'Nitra Region',
            ),
            259 => 
            array (
                'country_id' => 200,
                'id' => 4358,
                'name' => 'Trenčín Region',
            ),
            260 => 
            array (
                'country_id' => 200,
                'id' => 4359,
                'name' => 'Žilina Region',
            ),
            261 => 
            array (
                'country_id' => 144,
                'id' => 4360,
                'name' => 'Cimișlia District',
            ),
            262 => 
            array (
                'country_id' => 144,
                'id' => 4361,
                'name' => 'Orhei District',
            ),
            263 => 
            array (
                'country_id' => 144,
                'id' => 4362,
                'name' => 'Bender Municipality',
            ),
            264 => 
            array (
                'country_id' => 144,
                'id' => 4363,
                'name' => 'Nisporeni District',
            ),
            265 => 
            array (
                'country_id' => 144,
                'id' => 4364,
                'name' => 'Sîngerei District',
            ),
            266 => 
            array (
                'country_id' => 144,
                'id' => 4365,
                'name' => 'Căușeni District',
            ),
            267 => 
            array (
                'country_id' => 144,
                'id' => 4366,
                'name' => 'Călărași District',
            ),
            268 => 
            array (
                'country_id' => 144,
                'id' => 4367,
                'name' => 'Glodeni District',
            ),
            269 => 
            array (
                'country_id' => 144,
                'id' => 4368,
                'name' => 'Anenii Noi District',
            ),
            270 => 
            array (
                'country_id' => 144,
                'id' => 4369,
                'name' => 'Ialoveni District',
            ),
            271 => 
            array (
                'country_id' => 144,
                'id' => 4370,
                'name' => 'Florești District',
            ),
            272 => 
            array (
                'country_id' => 144,
                'id' => 4371,
                'name' => 'Telenești District',
            ),
            273 => 
            array (
                'country_id' => 144,
                'id' => 4372,
                'name' => 'Taraclia District',
            ),
            274 => 
            array (
                'country_id' => 144,
                'id' => 4373,
                'name' => 'Chișinău Municipality',
            ),
            275 => 
            array (
                'country_id' => 144,
                'id' => 4374,
                'name' => 'Soroca District',
            ),
            276 => 
            array (
                'country_id' => 144,
                'id' => 4375,
                'name' => 'Briceni District',
            ),
            277 => 
            array (
                'country_id' => 144,
                'id' => 4376,
                'name' => 'Rîșcani District',
            ),
            278 => 
            array (
                'country_id' => 144,
                'id' => 4377,
                'name' => 'Strășeni District',
            ),
            279 => 
            array (
                'country_id' => 144,
                'id' => 4378,
                'name' => 'Ștefan Vodă District',
            ),
            280 => 
            array (
                'country_id' => 144,
                'id' => 4379,
                'name' => 'Basarabeasca District',
            ),
            281 => 
            array (
                'country_id' => 144,
                'id' => 4380,
                'name' => 'Cantemir District',
            ),
            282 => 
            array (
                'country_id' => 144,
                'id' => 4381,
                'name' => 'Fălești District',
            ),
            283 => 
            array (
                'country_id' => 144,
                'id' => 4382,
                'name' => 'Hîncești District',
            ),
            284 => 
            array (
                'country_id' => 144,
                'id' => 4383,
                'name' => 'Dubăsari District',
            ),
            285 => 
            array (
                'country_id' => 144,
                'id' => 4384,
                'name' => 'Dondușeni District',
            ),
            286 => 
            array (
                'country_id' => 144,
                'id' => 4385,
                'name' => 'Gagauzia',
            ),
            287 => 
            array (
                'country_id' => 144,
                'id' => 4386,
                'name' => 'Ungheni District',
            ),
            288 => 
            array (
                'country_id' => 144,
                'id' => 4387,
                'name' => 'Edineț District',
            ),
            289 => 
            array (
                'country_id' => 144,
                'id' => 4388,
                'name' => 'Șoldănești District',
            ),
            290 => 
            array (
                'country_id' => 144,
                'id' => 4389,
                'name' => 'Ocnița District',
            ),
            291 => 
            array (
                'country_id' => 144,
                'id' => 4390,
                'name' => 'Criuleni District',
            ),
            292 => 
            array (
                'country_id' => 144,
                'id' => 4391,
                'name' => 'Cahul District',
            ),
            293 => 
            array (
                'country_id' => 144,
                'id' => 4392,
                'name' => 'Drochia District',
            ),
            294 => 
            array (
                'country_id' => 144,
                'id' => 4393,
                'name' => 'Bălți Municipality',
            ),
            295 => 
            array (
                'country_id' => 144,
                'id' => 4394,
                'name' => 'Rezina District',
            ),
            296 => 
            array (
                'country_id' => 144,
                'id' => 4395,
                'name' => 'Transnistria autonomous territorial unit',
            ),
            297 => 
            array (
                'country_id' => 120,
                'id' => 4396,
                'name' => 'Salacgrīva Municipality',
            ),
            298 => 
            array (
                'country_id' => 120,
                'id' => 4397,
                'name' => 'Vecumnieki Municipality',
            ),
            299 => 
            array (
                'country_id' => 120,
                'id' => 4398,
                'name' => 'Naukšēni Municipality',
            ),
            300 => 
            array (
                'country_id' => 120,
                'id' => 4399,
                'name' => 'Ilūkste Municipality',
            ),
            301 => 
            array (
                'country_id' => 120,
                'id' => 4400,
                'name' => 'Gulbene Municipality',
            ),
            302 => 
            array (
                'country_id' => 120,
                'id' => 4401,
                'name' => 'Līvāni Municipality',
            ),
            303 => 
            array (
                'country_id' => 120,
                'id' => 4402,
                'name' => 'Salaspils Municipality',
            ),
            304 => 
            array (
                'country_id' => 120,
                'id' => 4403,
                'name' => 'Ventspils Municipality',
            ),
            305 => 
            array (
                'country_id' => 120,
                'id' => 4404,
                'name' => 'Rundāle Municipality',
            ),
            306 => 
            array (
                'country_id' => 120,
                'id' => 4405,
                'name' => 'Pļaviņas Municipality',
            ),
            307 => 
            array (
                'country_id' => 120,
                'id' => 4406,
                'name' => 'Vārkava Municipality',
            ),
            308 => 
            array (
                'country_id' => 120,
                'id' => 4407,
                'name' => 'Jaunpiebalga Municipality',
            ),
            309 => 
            array (
                'country_id' => 120,
                'id' => 4408,
                'name' => 'Sēja Municipality',
            ),
            310 => 
            array (
                'country_id' => 120,
                'id' => 4409,
                'name' => 'Tukums Municipality',
            ),
            311 => 
            array (
                'country_id' => 120,
                'id' => 4410,
                'name' => 'Cibla Municipality',
            ),
            312 => 
            array (
                'country_id' => 120,
                'id' => 4411,
                'name' => 'Burtnieki Municipality',
            ),
            313 => 
            array (
                'country_id' => 120,
                'id' => 4412,
                'name' => 'Ķegums Municipality',
            ),
            314 => 
            array (
                'country_id' => 120,
                'id' => 4413,
                'name' => 'Krustpils Municipality',
            ),
            315 => 
            array (
                'country_id' => 120,
                'id' => 4414,
                'name' => 'Cesvaine Municipality',
            ),
            316 => 
            array (
                'country_id' => 120,
                'id' => 4415,
                'name' => 'Skrīveri Municipality',
            ),
            317 => 
            array (
                'country_id' => 120,
                'id' => 4416,
                'name' => 'Ogre Municipality',
            ),
            318 => 
            array (
                'country_id' => 120,
                'id' => 4417,
                'name' => 'Olaine Municipality',
            ),
            319 => 
            array (
                'country_id' => 120,
                'id' => 4418,
                'name' => 'Limbaži Municipality',
            ),
            320 => 
            array (
                'country_id' => 120,
                'id' => 4419,
                'name' => 'Lubāna Municipality',
            ),
            321 => 
            array (
                'country_id' => 120,
                'id' => 4420,
                'name' => 'Kandava Municipality',
            ),
            322 => 
            array (
                'country_id' => 120,
                'id' => 4421,
                'name' => 'Ventspils',
            ),
            323 => 
            array (
                'country_id' => 120,
                'id' => 4422,
                'name' => 'Krimulda Municipality',
            ),
            324 => 
            array (
                'country_id' => 120,
                'id' => 4423,
                'name' => 'Rugāji Municipality',
            ),
            325 => 
            array (
                'country_id' => 120,
                'id' => 4424,
                'name' => 'Jelgava Municipality',
            ),
            326 => 
            array (
                'country_id' => 120,
                'id' => 4425,
                'name' => 'Valka Municipality',
            ),
            327 => 
            array (
                'country_id' => 120,
                'id' => 4426,
                'name' => 'Rūjiena Municipality',
            ),
            328 => 
            array (
                'country_id' => 120,
                'id' => 4427,
                'name' => 'Babīte Municipality',
            ),
            329 => 
            array (
                'country_id' => 120,
                'id' => 4428,
                'name' => 'Dundaga Municipality',
            ),
            330 => 
            array (
                'country_id' => 120,
                'id' => 4429,
                'name' => 'Priekule Municipality',
            ),
            331 => 
            array (
                'country_id' => 120,
                'id' => 4430,
                'name' => 'Zilupe Municipality',
            ),
            332 => 
            array (
                'country_id' => 120,
                'id' => 4431,
                'name' => 'Varakļāni Municipality',
            ),
            333 => 
            array (
                'country_id' => 120,
                'id' => 4432,
                'name' => 'Nereta Municipality',
            ),
            334 => 
            array (
                'country_id' => 120,
                'id' => 4433,
                'name' => 'Madona Municipality',
            ),
            335 => 
            array (
                'country_id' => 120,
                'id' => 4434,
                'name' => 'Sala Municipality',
            ),
            336 => 
            array (
                'country_id' => 120,
                'id' => 4435,
                'name' => 'Ķekava Municipality',
            ),
            337 => 
            array (
                'country_id' => 120,
                'id' => 4436,
                'name' => 'Nīca Municipality',
            ),
            338 => 
            array (
                'country_id' => 120,
                'id' => 4437,
                'name' => 'Dobele Municipality',
            ),
            339 => 
            array (
                'country_id' => 120,
                'id' => 4438,
                'name' => 'Jēkabpils Municipality',
            ),
            340 => 
            array (
                'country_id' => 120,
                'id' => 4439,
                'name' => 'Saldus Municipality',
            ),
            341 => 
            array (
                'country_id' => 120,
                'id' => 4440,
                'name' => 'Roja Municipality',
            ),
            342 => 
            array (
                'country_id' => 120,
                'id' => 4441,
                'name' => 'Iecava Municipality',
            ),
            343 => 
            array (
                'country_id' => 120,
                'id' => 4442,
                'name' => 'Ozolnieki Municipality',
            ),
            344 => 
            array (
                'country_id' => 120,
                'id' => 4443,
                'name' => 'Saulkrasti Municipality',
            ),
            345 => 
            array (
                'country_id' => 120,
                'id' => 4444,
                'name' => 'Ērgļi Municipality',
            ),
            346 => 
            array (
                'country_id' => 120,
                'id' => 4445,
                'name' => 'Aglona Municipality',
            ),
            347 => 
            array (
                'country_id' => 120,
                'id' => 4446,
                'name' => 'Jūrmala',
            ),
            348 => 
            array (
                'country_id' => 120,
                'id' => 4447,
                'name' => 'Skrunda Municipality',
            ),
            349 => 
            array (
                'country_id' => 120,
                'id' => 4448,
                'name' => 'Engure Municipality',
            ),
            350 => 
            array (
                'country_id' => 120,
                'id' => 4449,
                'name' => 'Inčukalns Municipality',
            ),
            351 => 
            array (
                'country_id' => 120,
                'id' => 4450,
                'name' => 'Mārupe Municipality',
            ),
            352 => 
            array (
                'country_id' => 120,
                'id' => 4451,
                'name' => 'Mērsrags Municipality',
            ),
            353 => 
            array (
                'country_id' => 120,
                'id' => 4452,
                'name' => 'Koknese Municipality',
            ),
            354 => 
            array (
                'country_id' => 120,
                'id' => 4453,
                'name' => 'Kārsava Municipality',
            ),
            355 => 
            array (
                'country_id' => 120,
                'id' => 4454,
                'name' => 'Carnikava Municipality',
            ),
            356 => 
            array (
                'country_id' => 120,
                'id' => 4455,
                'name' => 'Rēzekne Municipality',
            ),
            357 => 
            array (
                'country_id' => 120,
                'id' => 4456,
                'name' => 'Viesīte Municipality',
            ),
            358 => 
            array (
                'country_id' => 120,
                'id' => 4457,
                'name' => 'Ape Municipality',
            ),
            359 => 
            array (
                'country_id' => 120,
                'id' => 4458,
                'name' => 'Durbe Municipality',
            ),
            360 => 
            array (
                'country_id' => 120,
                'id' => 4459,
                'name' => 'Talsi Municipality',
            ),
            361 => 
            array (
                'country_id' => 120,
                'id' => 4460,
                'name' => 'Liepāja',
            ),
            362 => 
            array (
                'country_id' => 120,
                'id' => 4461,
                'name' => 'Mālpils Municipality',
            ),
            363 => 
            array (
                'country_id' => 120,
                'id' => 4462,
                'name' => 'Smiltene Municipality',
            ),
            364 => 
            array (
                'country_id' => 120,
                'id' => 4463,
                'name' => 'Daugavpils',
            ),
            365 => 
            array (
                'country_id' => 120,
                'id' => 4464,
                'name' => 'Jēkabpils',
            ),
            366 => 
            array (
                'country_id' => 120,
                'id' => 4465,
                'name' => 'Bauska Municipality',
            ),
            367 => 
            array (
                'country_id' => 120,
                'id' => 4466,
                'name' => 'Vecpiebalga Municipality',
            ),
            368 => 
            array (
                'country_id' => 120,
                'id' => 4467,
                'name' => 'Pāvilosta Municipality',
            ),
            369 => 
            array (
                'country_id' => 120,
                'id' => 4468,
                'name' => 'Brocēni Municipality',
            ),
            370 => 
            array (
                'country_id' => 120,
                'id' => 4469,
                'name' => 'Cēsis Municipality',
            ),
            371 => 
            array (
                'country_id' => 120,
                'id' => 4470,
                'name' => 'Grobiņa Municipality',
            ),
            372 => 
            array (
                'country_id' => 120,
                'id' => 4471,
                'name' => 'Beverīna Municipality',
            ),
            373 => 
            array (
                'country_id' => 120,
                'id' => 4472,
                'name' => 'Aizkraukle Municipality',
            ),
            374 => 
            array (
                'country_id' => 120,
                'id' => 4473,
                'name' => 'Valmiera',
            ),
            375 => 
            array (
                'country_id' => 120,
                'id' => 4474,
                'name' => 'Krāslava Municipality',
            ),
            376 => 
            array (
                'country_id' => 120,
                'id' => 4475,
                'name' => 'Jaunjelgava Municipality',
            ),
            377 => 
            array (
                'country_id' => 120,
                'id' => 4476,
                'name' => 'Sigulda Municipality',
            ),
            378 => 
            array (
                'country_id' => 120,
                'id' => 4477,
                'name' => 'Viļaka Municipality',
            ),
            379 => 
            array (
                'country_id' => 120,
                'id' => 4478,
                'name' => 'Stopiņi Municipality',
            ),
            380 => 
            array (
                'country_id' => 120,
                'id' => 4479,
                'name' => 'Rauna Municipality',
            ),
            381 => 
            array (
                'country_id' => 120,
                'id' => 4480,
                'name' => 'Tērvete Municipality',
            ),
            382 => 
            array (
                'country_id' => 120,
                'id' => 4481,
                'name' => 'Auce Municipality',
            ),
            383 => 
            array (
                'country_id' => 120,
                'id' => 4482,
                'name' => 'Baldone Municipality',
            ),
            384 => 
            array (
                'country_id' => 120,
                'id' => 4483,
                'name' => 'Preiļi Municipality',
            ),
            385 => 
            array (
                'country_id' => 120,
                'id' => 4484,
                'name' => 'Aloja Municipality',
            ),
            386 => 
            array (
                'country_id' => 120,
                'id' => 4485,
                'name' => 'Alsunga Municipality',
            ),
            387 => 
            array (
                'country_id' => 120,
                'id' => 4486,
                'name' => 'Viļāni Municipality',
            ),
            388 => 
            array (
                'country_id' => 120,
                'id' => 4487,
                'name' => 'Alūksne Municipality',
            ),
            389 => 
            array (
                'country_id' => 120,
                'id' => 4488,
                'name' => 'Līgatne Municipality',
            ),
            390 => 
            array (
                'country_id' => 120,
                'id' => 4489,
                'name' => 'Jaunpils Municipality',
            ),
            391 => 
            array (
                'country_id' => 120,
                'id' => 4490,
                'name' => 'Kuldīga Municipality',
            ),
            392 => 
            array (
                'country_id' => 120,
                'id' => 4491,
                'name' => 'Riga',
            ),
            393 => 
            array (
                'country_id' => 120,
                'id' => 4492,
                'name' => 'Daugavpils Municipality',
            ),
            394 => 
            array (
                'country_id' => 120,
                'id' => 4493,
                'name' => 'Ropaži Municipality',
            ),
            395 => 
            array (
                'country_id' => 120,
                'id' => 4494,
                'name' => 'Strenči Municipality',
            ),
            396 => 
            array (
                'country_id' => 120,
                'id' => 4495,
                'name' => 'Kocēni Municipality',
            ),
            397 => 
            array (
                'country_id' => 120,
                'id' => 4496,
                'name' => 'Aizpute Municipality',
            ),
            398 => 
            array (
                'country_id' => 120,
                'id' => 4497,
                'name' => 'Amata Municipality',
            ),
            399 => 
            array (
                'country_id' => 120,
                'id' => 4498,
                'name' => 'Baltinava Municipality',
            ),
            400 => 
            array (
                'country_id' => 120,
                'id' => 4499,
                'name' => 'Aknīste Municipality',
            ),
            401 => 
            array (
                'country_id' => 120,
                'id' => 4500,
                'name' => 'Jelgava',
            ),
            402 => 
            array (
                'country_id' => 120,
                'id' => 4501,
                'name' => 'Ludza Municipality',
            ),
            403 => 
            array (
                'country_id' => 120,
                'id' => 4502,
                'name' => 'Riebiņi Municipality',
            ),
            404 => 
            array (
                'country_id' => 120,
                'id' => 4503,
                'name' => 'Rucava Municipality',
            ),
            405 => 
            array (
                'country_id' => 120,
                'id' => 4504,
                'name' => 'Dagda Municipality',
            ),
            406 => 
            array (
                'country_id' => 120,
                'id' => 4505,
                'name' => 'Balvi Municipality',
            ),
            407 => 
            array (
                'country_id' => 120,
                'id' => 4506,
                'name' => 'Priekuļi Municipality',
            ),
            408 => 
            array (
                'country_id' => 120,
                'id' => 4507,
                'name' => 'Pārgauja Municipality',
            ),
            409 => 
            array (
                'country_id' => 120,
                'id' => 4508,
                'name' => 'Vaiņode Municipality',
            ),
            410 => 
            array (
                'country_id' => 120,
                'id' => 4509,
                'name' => 'Rēzekne',
            ),
            411 => 
            array (
                'country_id' => 120,
                'id' => 4510,
                'name' => 'Garkalne Municipality',
            ),
            412 => 
            array (
                'country_id' => 120,
                'id' => 4511,
                'name' => 'Ikšķile Municipality',
            ),
            413 => 
            array (
                'country_id' => 120,
                'id' => 4512,
                'name' => 'Lielvārde Municipality',
            ),
            414 => 
            array (
                'country_id' => 120,
                'id' => 4513,
                'name' => 'Mazsalaca Municipality',
            ),
            415 => 
            array (
                'country_id' => 63,
                'id' => 4514,
                'name' => 'Viqueque Municipality',
            ),
            416 => 
            array (
                'country_id' => 63,
                'id' => 4515,
                'name' => 'Liquiçá Municipality',
            ),
            417 => 
            array (
                'country_id' => 63,
                'id' => 4516,
                'name' => 'Ermera District',
            ),
            418 => 
            array (
                'country_id' => 63,
                'id' => 4517,
                'name' => 'Manatuto District',
            ),
            419 => 
            array (
                'country_id' => 63,
                'id' => 4518,
                'name' => 'Ainaro Municipality',
            ),
            420 => 
            array (
                'country_id' => 63,
                'id' => 4519,
                'name' => 'Manufahi Municipality',
            ),
            421 => 
            array (
                'country_id' => 63,
                'id' => 4520,
                'name' => 'Aileu municipality',
            ),
            422 => 
            array (
                'country_id' => 63,
                'id' => 4521,
                'name' => 'Baucau Municipality',
            ),
            423 => 
            array (
                'country_id' => 63,
                'id' => 4522,
                'name' => 'Cova Lima Municipality',
            ),
            424 => 
            array (
                'country_id' => 63,
                'id' => 4523,
                'name' => 'Lautém Municipality',
            ),
            425 => 
            array (
                'country_id' => 63,
                'id' => 4524,
                'name' => 'Dili municipality',
            ),
            426 => 
            array (
                'country_id' => 63,
                'id' => 4525,
                'name' => 'Bobonaro Municipality',
            ),
            427 => 
            array (
                'country_id' => 168,
                'id' => 4526,
                'name' => 'Peleliu',
            ),
            428 => 
            array (
                'country_id' => 168,
                'id' => 4527,
                'name' => 'Ngardmau',
            ),
            429 => 
            array (
                'country_id' => 168,
                'id' => 4528,
                'name' => 'Airai',
            ),
            430 => 
            array (
                'country_id' => 168,
                'id' => 4529,
                'name' => 'Hatohobei',
            ),
            431 => 
            array (
                'country_id' => 168,
                'id' => 4530,
                'name' => 'Melekeok',
            ),
            432 => 
            array (
                'country_id' => 168,
                'id' => 4531,
                'name' => 'Ngatpang',
            ),
            433 => 
            array (
                'country_id' => 168,
                'id' => 4532,
                'name' => 'Koror',
            ),
            434 => 
            array (
                'country_id' => 168,
                'id' => 4533,
                'name' => 'Ngarchelong',
            ),
            435 => 
            array (
                'country_id' => 168,
                'id' => 4534,
                'name' => 'Ngiwal',
            ),
            436 => 
            array (
                'country_id' => 168,
                'id' => 4535,
                'name' => 'Sonsorol',
            ),
            437 => 
            array (
                'country_id' => 168,
                'id' => 4536,
                'name' => 'Ngchesar',
            ),
            438 => 
            array (
                'country_id' => 168,
                'id' => 4537,
                'name' => 'Ngaraard',
            ),
            439 => 
            array (
                'country_id' => 168,
                'id' => 4538,
                'name' => 'Angaur',
            ),
            440 => 
            array (
                'country_id' => 168,
                'id' => 4539,
                'name' => 'Kayangel',
            ),
            441 => 
            array (
                'country_id' => 168,
                'id' => 4540,
                'name' => 'Aimeliik',
            ),
            442 => 
            array (
                'country_id' => 168,
                'id' => 4541,
                'name' => 'Ngeremlengui',
            ),
            443 => 
            array (
                'country_id' => 58,
                'id' => 4542,
                'name' => 'Břeclav',
            ),
            444 => 
            array (
                'country_id' => 58,
                'id' => 4543,
                'name' => 'Český Krumlov',
            ),
            445 => 
            array (
                'country_id' => 58,
                'id' => 4544,
                'name' => 'Plzeň-město',
            ),
            446 => 
            array (
                'country_id' => 58,
                'id' => 4545,
                'name' => 'Brno-venkov',
            ),
            447 => 
            array (
                'country_id' => 58,
                'id' => 4546,
                'name' => 'Příbram',
            ),
            448 => 
            array (
                'country_id' => 58,
                'id' => 4547,
                'name' => 'Pardubice',
            ),
            449 => 
            array (
                'country_id' => 58,
                'id' => 4548,
                'name' => 'Nový Jičín',
            ),
            450 => 
            array (
                'country_id' => 58,
                'id' => 4550,
                'name' => 'Náchod',
            ),
            451 => 
            array (
                'country_id' => 58,
                'id' => 4551,
                'name' => 'Prostějov',
            ),
            452 => 
            array (
                'country_id' => 58,
                'id' => 4552,
                'name' => 'Zlínský kraj',
            ),
            453 => 
            array (
                'country_id' => 58,
                'id' => 4553,
                'name' => 'Chomutov',
            ),
            454 => 
            array (
                'country_id' => 58,
                'id' => 4554,
                'name' => 'Středočeský kraj',
            ),
            455 => 
            array (
                'country_id' => 58,
                'id' => 4556,
                'name' => 'České Budějovice',
            ),
            456 => 
            array (
                'country_id' => 58,
                'id' => 4558,
                'name' => 'Rakovník',
            ),
            457 => 
            array (
                'country_id' => 58,
                'id' => 4559,
                'name' => 'Frýdek-Místek',
            ),
            458 => 
            array (
                'country_id' => 58,
                'id' => 4560,
                'name' => 'Písek',
            ),
            459 => 
            array (
                'country_id' => 58,
                'id' => 4561,
                'name' => 'Hodonín',
            ),
            460 => 
            array (
                'country_id' => 58,
                'id' => 4563,
                'name' => 'Zlín',
            ),
            461 => 
            array (
                'country_id' => 58,
                'id' => 4564,
                'name' => 'Plzeň-sever',
            ),
            462 => 
            array (
                'country_id' => 58,
                'id' => 4565,
                'name' => 'Tábor',
            ),
            463 => 
            array (
                'country_id' => 58,
                'id' => 4568,
                'name' => 'Brno-město',
            ),
            464 => 
            array (
                'country_id' => 58,
                'id' => 4571,
                'name' => 'Svitavy',
            ),
            465 => 
            array (
                'country_id' => 58,
                'id' => 4572,
                'name' => 'Vsetín',
            ),
            466 => 
            array (
                'country_id' => 58,
                'id' => 4573,
                'name' => 'Cheb',
            ),
            467 => 
            array (
                'country_id' => 58,
                'id' => 4574,
                'name' => 'Olomouc',
            ),
            468 => 
            array (
                'country_id' => 58,
                'id' => 4575,
                'name' => 'Kraj Vysočina',
            ),
            469 => 
            array (
                'country_id' => 58,
                'id' => 4576,
                'name' => 'Ústecký kraj',
            ),
            470 => 
            array (
                'country_id' => 58,
                'id' => 4578,
                'name' => 'Prachatice',
            ),
            471 => 
            array (
                'country_id' => 58,
                'id' => 4579,
                'name' => 'Trutnov',
            ),
            472 => 
            array (
                'country_id' => 58,
                'id' => 4580,
                'name' => 'Hradec Králové',
            ),
            473 => 
            array (
                'country_id' => 58,
                'id' => 4581,
                'name' => 'Karlovarský kraj',
            ),
            474 => 
            array (
                'country_id' => 58,
                'id' => 4582,
                'name' => 'Nymburk',
            ),
            475 => 
            array (
                'country_id' => 58,
                'id' => 4583,
                'name' => 'Rokycany',
            ),
            476 => 
            array (
                'country_id' => 58,
                'id' => 4584,
                'name' => 'Ostrava-město',
            ),
            477 => 
            array (
                'country_id' => 58,
                'id' => 4586,
                'name' => 'Karviná',
            ),
            478 => 
            array (
                'country_id' => 58,
                'id' => 4588,
                'name' => 'Pardubický kraj',
            ),
            479 => 
            array (
                'country_id' => 58,
                'id' => 4589,
                'name' => 'Olomoucký kraj',
            ),
            480 => 
            array (
                'country_id' => 58,
                'id' => 4590,
                'name' => 'Liberec',
            ),
            481 => 
            array (
                'country_id' => 58,
                'id' => 4591,
                'name' => 'Klatovy',
            ),
            482 => 
            array (
                'country_id' => 58,
                'id' => 4592,
                'name' => 'Uherské Hradiště',
            ),
            483 => 
            array (
                'country_id' => 58,
                'id' => 4593,
                'name' => 'Kroměříž',
            ),
            484 => 
            array (
                'country_id' => 58,
                'id' => 4595,
                'name' => 'Sokolov',
            ),
            485 => 
            array (
                'country_id' => 58,
                'id' => 4596,
                'name' => 'Semily',
            ),
            486 => 
            array (
                'country_id' => 58,
                'id' => 4597,
                'name' => 'Třebíč',
            ),
            487 => 
            array (
                'country_id' => 58,
                'id' => 4598,
                'name' => 'Praha, Hlavní město',
            ),
            488 => 
            array (
                'country_id' => 58,
                'id' => 4599,
                'name' => 'Ústí nad Labem',
            ),
            489 => 
            array (
                'country_id' => 58,
                'id' => 4600,
                'name' => 'Moravskoslezský kraj',
            ),
            490 => 
            array (
                'country_id' => 58,
                'id' => 4601,
                'name' => 'Liberecký kraj',
            ),
            491 => 
            array (
                'country_id' => 58,
                'id' => 4602,
                'name' => 'Jihomoravský kraj',
            ),
            492 => 
            array (
                'country_id' => 58,
                'id' => 4604,
                'name' => 'Karlovy Vary',
            ),
            493 => 
            array (
                'country_id' => 58,
                'id' => 4605,
                'name' => 'Litoměřice',
            ),
            494 => 
            array (
                'country_id' => 58,
                'id' => 4606,
                'name' => 'Praha-východ',
            ),
            495 => 
            array (
                'country_id' => 58,
                'id' => 4607,
                'name' => 'Plzeňský kraj',
            ),
            496 => 
            array (
                'country_id' => 58,
                'id' => 4608,
                'name' => 'Plzeň-jih',
            ),
            497 => 
            array (
                'country_id' => 58,
                'id' => 4609,
                'name' => 'Děčín',
            ),
            498 => 
            array (
                'country_id' => 58,
                'id' => 4611,
                'name' => 'Havlíčkův Brod',
            ),
            499 => 
            array (
                'country_id' => 58,
                'id' => 4612,
                'name' => 'Jablonec nad Nisou',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 58,
                'id' => 4613,
                'name' => 'Jihlava',
            ),
            1 => 
            array (
                'country_id' => 58,
                'id' => 4614,
                'name' => 'Královéhradecký kraj',
            ),
            2 => 
            array (
                'country_id' => 58,
                'id' => 4615,
                'name' => 'Blansko',
            ),
            3 => 
            array (
                'country_id' => 58,
                'id' => 4617,
                'name' => 'Louny',
            ),
            4 => 
            array (
                'country_id' => 58,
                'id' => 4618,
                'name' => 'Kolín',
            ),
            5 => 
            array (
                'country_id' => 58,
                'id' => 4619,
                'name' => 'Praha-západ',
            ),
            6 => 
            array (
                'country_id' => 58,
                'id' => 4620,
                'name' => 'Beroun',
            ),
            7 => 
            array (
                'country_id' => 58,
                'id' => 4621,
                'name' => 'Teplice',
            ),
            8 => 
            array (
                'country_id' => 58,
                'id' => 4622,
                'name' => 'Vyškov',
            ),
            9 => 
            array (
                'country_id' => 58,
                'id' => 4623,
                'name' => 'Opava',
            ),
            10 => 
            array (
                'country_id' => 58,
                'id' => 4624,
                'name' => 'Jindřichův Hradec',
            ),
            11 => 
            array (
                'country_id' => 58,
                'id' => 4625,
                'name' => 'Jeseník',
            ),
            12 => 
            array (
                'country_id' => 58,
                'id' => 4626,
                'name' => 'Přerov',
            ),
            13 => 
            array (
                'country_id' => 58,
                'id' => 4627,
                'name' => 'Benešov',
            ),
            14 => 
            array (
                'country_id' => 58,
                'id' => 4628,
                'name' => 'Strakonice',
            ),
            15 => 
            array (
                'country_id' => 58,
                'id' => 4629,
                'name' => 'Most',
            ),
            16 => 
            array (
                'country_id' => 58,
                'id' => 4630,
                'name' => 'Znojmo',
            ),
            17 => 
            array (
                'country_id' => 58,
                'id' => 4631,
                'name' => 'Kladno',
            ),
            18 => 
            array (
                'country_id' => 58,
                'id' => 4633,
                'name' => 'Česká Lípa',
            ),
            19 => 
            array (
                'country_id' => 58,
                'id' => 4634,
                'name' => 'Chrudim',
            ),
            20 => 
            array (
                'country_id' => 58,
                'id' => 4636,
                'name' => 'Rychnov nad Kněžnou',
            ),
            21 => 
            array (
                'country_id' => 58,
                'id' => 4638,
                'name' => 'Mělník',
            ),
            22 => 
            array (
                'country_id' => 58,
                'id' => 4639,
                'name' => 'Jihočeský kraj',
            ),
            23 => 
            array (
                'country_id' => 58,
                'id' => 4640,
                'name' => 'Jičín',
            ),
            24 => 
            array (
                'country_id' => 58,
                'id' => 4641,
                'name' => 'Domažlice',
            ),
            25 => 
            array (
                'country_id' => 58,
                'id' => 4642,
                'name' => 'Šumperk',
            ),
            26 => 
            array (
                'country_id' => 58,
                'id' => 4643,
                'name' => 'Mladá Boleslav',
            ),
            27 => 
            array (
                'country_id' => 58,
                'id' => 4644,
                'name' => 'Bruntál',
            ),
            28 => 
            array (
                'country_id' => 58,
                'id' => 4645,
                'name' => 'Pelhřimov',
            ),
            29 => 
            array (
                'country_id' => 58,
                'id' => 4646,
                'name' => 'Tachov',
            ),
            30 => 
            array (
                'country_id' => 58,
                'id' => 4647,
                'name' => 'Ústí nad Orlicí',
            ),
            31 => 
            array (
                'country_id' => 58,
                'id' => 4648,
                'name' => 'Žďár nad Sázavou',
            ),
            32 => 
            array (
                'country_id' => 199,
                'id' => 4649,
                'name' => 'North East',
            ),
            33 => 
            array (
                'country_id' => 199,
                'id' => 4650,
                'name' => 'South East',
            ),
            34 => 
            array (
                'country_id' => 199,
                'id' => 4651,
                'name' => 'Central Singapore',
            ),
            35 => 
            array (
                'country_id' => 199,
                'id' => 4652,
                'name' => 'South West',
            ),
            36 => 
            array (
                'country_id' => 199,
                'id' => 4653,
                'name' => 'North West',
            ),
            37 => 
            array (
                'country_id' => 153,
                'id' => 4654,
                'name' => 'Ewa District',
            ),
            38 => 
            array (
                'country_id' => 153,
                'id' => 4655,
                'name' => 'Uaboe District',
            ),
            39 => 
            array (
                'country_id' => 153,
                'id' => 4656,
                'name' => 'Aiwo District',
            ),
            40 => 
            array (
                'country_id' => 153,
                'id' => 4657,
                'name' => 'Meneng District',
            ),
            41 => 
            array (
                'country_id' => 153,
                'id' => 4658,
                'name' => 'Anabar District',
            ),
            42 => 
            array (
                'country_id' => 153,
                'id' => 4659,
                'name' => 'Nibok District',
            ),
            43 => 
            array (
                'country_id' => 153,
                'id' => 4660,
                'name' => 'Baiti District',
            ),
            44 => 
            array (
                'country_id' => 153,
                'id' => 4661,
                'name' => 'Ijuw District',
            ),
            45 => 
            array (
                'country_id' => 153,
                'id' => 4662,
                'name' => 'Buada District',
            ),
            46 => 
            array (
                'country_id' => 153,
                'id' => 4663,
                'name' => 'Anibare District',
            ),
            47 => 
            array (
                'country_id' => 153,
                'id' => 4664,
                'name' => 'Yaren District',
            ),
            48 => 
            array (
                'country_id' => 153,
                'id' => 4665,
                'name' => 'Boe District',
            ),
            49 => 
            array (
                'country_id' => 153,
                'id' => 4666,
                'name' => 'Denigomodu District',
            ),
            50 => 
            array (
                'country_id' => 153,
                'id' => 4667,
                'name' => 'Anetan District',
            ),
            51 => 
            array (
                'country_id' => 230,
                'id' => 4668,
                'name' => 'Zhytomyrska oblast',
            ),
            52 => 
            array (
                'country_id' => 230,
                'id' => 4669,
                'name' => 'Vinnytska oblast',
            ),
            53 => 
            array (
                'country_id' => 230,
                'id' => 4670,
                'name' => 'Zakarpatska Oblast',
            ),
            54 => 
            array (
                'country_id' => 230,
                'id' => 4671,
                'name' => 'Kyivska oblast',
            ),
            55 => 
            array (
                'country_id' => 230,
                'id' => 4672,
                'name' => 'Lvivska oblast',
            ),
            56 => 
            array (
                'country_id' => 230,
                'id' => 4673,
                'name' => 'Luhanska oblast',
            ),
            57 => 
            array (
                'country_id' => 230,
                'id' => 4674,
                'name' => 'Ternopilska oblast',
            ),
            58 => 
            array (
                'country_id' => 230,
                'id' => 4675,
                'name' => 'Dnipropetrovska oblast',
            ),
            59 => 
            array (
                'country_id' => 230,
                'id' => 4676,
                'name' => 'Kyiv',
            ),
            60 => 
            array (
                'country_id' => 230,
                'id' => 4677,
                'name' => 'Kirovohradska oblast',
            ),
            61 => 
            array (
                'country_id' => 230,
                'id' => 4678,
                'name' => 'Chernivetska oblast',
            ),
            62 => 
            array (
                'country_id' => 230,
                'id' => 4679,
                'name' => 'Mykolaivska oblast',
            ),
            63 => 
            array (
                'country_id' => 230,
                'id' => 4680,
                'name' => 'Cherkaska oblast',
            ),
            64 => 
            array (
                'country_id' => 230,
                'id' => 4681,
                'name' => 'Khmelnytska oblast',
            ),
            65 => 
            array (
                'country_id' => 230,
                'id' => 4682,
                'name' => 'Ivano-Frankivska oblast',
            ),
            66 => 
            array (
                'country_id' => 230,
                'id' => 4683,
                'name' => 'Rivnenska oblast',
            ),
            67 => 
            array (
                'country_id' => 230,
                'id' => 4684,
                'name' => 'Khersonska oblast',
            ),
            68 => 
            array (
                'country_id' => 230,
                'id' => 4685,
                'name' => 'Sumska oblast',
            ),
            69 => 
            array (
                'country_id' => 230,
                'id' => 4686,
                'name' => 'Kharkivska oblast',
            ),
            70 => 
            array (
                'country_id' => 230,
                'id' => 4687,
                'name' => 'Zaporizka oblast',
            ),
            71 => 
            array (
                'country_id' => 230,
                'id' => 4688,
                'name' => 'Odeska oblast',
            ),
            72 => 
            array (
                'country_id' => 230,
                'id' => 4689,
                'name' => 'Autonomous Republic of Crimea',
            ),
            73 => 
            array (
                'country_id' => 230,
                'id' => 4690,
                'name' => 'Volynska oblast',
            ),
            74 => 
            array (
                'country_id' => 230,
                'id' => 4691,
                'name' => 'Donetska oblast',
            ),
            75 => 
            array (
                'country_id' => 230,
                'id' => 4692,
                'name' => 'Chernihivska oblast',
            ),
            76 => 
            array (
                'country_id' => 34,
                'id' => 4693,
                'name' => 'Gabrovo Province',
            ),
            77 => 
            array (
                'country_id' => 34,
                'id' => 4694,
                'name' => 'Smolyan Province',
            ),
            78 => 
            array (
                'country_id' => 34,
                'id' => 4695,
                'name' => 'Pernik Province',
            ),
            79 => 
            array (
                'country_id' => 34,
                'id' => 4696,
                'name' => 'Montana Province',
            ),
            80 => 
            array (
                'country_id' => 34,
                'id' => 4697,
                'name' => 'Vidin Province',
            ),
            81 => 
            array (
                'country_id' => 34,
                'id' => 4698,
                'name' => 'Razgrad Province',
            ),
            82 => 
            array (
                'country_id' => 34,
                'id' => 4699,
                'name' => 'Blagoevgrad Province',
            ),
            83 => 
            array (
                'country_id' => 34,
                'id' => 4700,
                'name' => 'Sliven Province',
            ),
            84 => 
            array (
                'country_id' => 34,
                'id' => 4701,
                'name' => 'Plovdiv Province',
            ),
            85 => 
            array (
                'country_id' => 34,
                'id' => 4702,
                'name' => 'Kardzhali Province',
            ),
            86 => 
            array (
                'country_id' => 34,
                'id' => 4703,
                'name' => 'Kyustendil Province',
            ),
            87 => 
            array (
                'country_id' => 34,
                'id' => 4704,
                'name' => 'Haskovo Province',
            ),
            88 => 
            array (
                'country_id' => 34,
                'id' => 4705,
                'name' => 'Sofia City Province',
            ),
            89 => 
            array (
                'country_id' => 34,
                'id' => 4706,
                'name' => 'Pleven Province',
            ),
            90 => 
            array (
                'country_id' => 34,
                'id' => 4707,
                'name' => 'Stara Zagora Province',
            ),
            91 => 
            array (
                'country_id' => 34,
                'id' => 4708,
                'name' => 'Silistra Province',
            ),
            92 => 
            array (
                'country_id' => 34,
                'id' => 4709,
                'name' => 'Veliko Tarnovo Province',
            ),
            93 => 
            array (
                'country_id' => 34,
                'id' => 4710,
                'name' => 'Lovech Province',
            ),
            94 => 
            array (
                'country_id' => 34,
                'id' => 4711,
                'name' => 'Vratsa Province',
            ),
            95 => 
            array (
                'country_id' => 34,
                'id' => 4712,
                'name' => 'Pazardzhik Province',
            ),
            96 => 
            array (
                'country_id' => 34,
                'id' => 4713,
                'name' => 'Ruse Province',
            ),
            97 => 
            array (
                'country_id' => 34,
                'id' => 4714,
                'name' => 'Targovishte Province',
            ),
            98 => 
            array (
                'country_id' => 34,
                'id' => 4715,
                'name' => 'Burgas Province',
            ),
            99 => 
            array (
                'country_id' => 34,
                'id' => 4716,
                'name' => 'Yambol Province',
            ),
            100 => 
            array (
                'country_id' => 34,
                'id' => 4717,
                'name' => 'Varna Province',
            ),
            101 => 
            array (
                'country_id' => 34,
                'id' => 4718,
                'name' => 'Dobrich Province',
            ),
            102 => 
            array (
                'country_id' => 34,
                'id' => 4719,
                'name' => 'Sofia Province',
            ),
            103 => 
            array (
                'country_id' => 181,
                'id' => 4720,
                'name' => 'Suceava County',
            ),
            104 => 
            array (
                'country_id' => 181,
                'id' => 4721,
                'name' => 'Hunedoara County',
            ),
            105 => 
            array (
                'country_id' => 181,
                'id' => 4722,
                'name' => 'Arges',
            ),
            106 => 
            array (
                'country_id' => 181,
                'id' => 4723,
                'name' => 'Bihor County',
            ),
            107 => 
            array (
                'country_id' => 181,
                'id' => 4724,
                'name' => 'Alba',
            ),
            108 => 
            array (
                'country_id' => 181,
                'id' => 4725,
                'name' => 'Ilfov County',
            ),
            109 => 
            array (
                'country_id' => 181,
                'id' => 4726,
                'name' => 'Giurgiu County',
            ),
            110 => 
            array (
                'country_id' => 181,
                'id' => 4727,
                'name' => 'Tulcea County',
            ),
            111 => 
            array (
                'country_id' => 181,
                'id' => 4728,
                'name' => 'Teleorman County',
            ),
            112 => 
            array (
                'country_id' => 181,
                'id' => 4729,
                'name' => 'Prahova County',
            ),
            113 => 
            array (
                'country_id' => 181,
                'id' => 4730,
                'name' => 'Bucharest',
            ),
            114 => 
            array (
                'country_id' => 181,
                'id' => 4731,
                'name' => 'Neamț County',
            ),
            115 => 
            array (
                'country_id' => 181,
                'id' => 4732,
                'name' => 'Călărași County',
            ),
            116 => 
            array (
                'country_id' => 181,
                'id' => 4733,
                'name' => 'Bistrița-Năsăud County',
            ),
            117 => 
            array (
                'country_id' => 181,
                'id' => 4734,
                'name' => 'Cluj County',
            ),
            118 => 
            array (
                'country_id' => 181,
                'id' => 4735,
                'name' => 'Iași County',
            ),
            119 => 
            array (
                'country_id' => 181,
                'id' => 4736,
                'name' => 'Braila',
            ),
            120 => 
            array (
                'country_id' => 181,
                'id' => 4737,
                'name' => 'Constanța County',
            ),
            121 => 
            array (
                'country_id' => 181,
                'id' => 4738,
                'name' => 'Olt County',
            ),
            122 => 
            array (
                'country_id' => 181,
                'id' => 4739,
                'name' => 'Arad County',
            ),
            123 => 
            array (
                'country_id' => 181,
                'id' => 4740,
                'name' => 'Botoșani County',
            ),
            124 => 
            array (
                'country_id' => 181,
                'id' => 4741,
                'name' => 'Sălaj County',
            ),
            125 => 
            array (
                'country_id' => 181,
                'id' => 4742,
                'name' => 'Dolj County',
            ),
            126 => 
            array (
                'country_id' => 181,
                'id' => 4743,
                'name' => 'Ialomița County',
            ),
            127 => 
            array (
                'country_id' => 181,
                'id' => 4744,
                'name' => 'Bacău County',
            ),
            128 => 
            array (
                'country_id' => 181,
                'id' => 4745,
                'name' => 'Dâmbovița County',
            ),
            129 => 
            array (
                'country_id' => 181,
                'id' => 4746,
                'name' => 'Satu Mare County',
            ),
            130 => 
            array (
                'country_id' => 181,
                'id' => 4747,
                'name' => 'Galați County',
            ),
            131 => 
            array (
                'country_id' => 181,
                'id' => 4748,
                'name' => 'Timiș County',
            ),
            132 => 
            array (
                'country_id' => 181,
                'id' => 4749,
                'name' => 'Harghita County',
            ),
            133 => 
            array (
                'country_id' => 181,
                'id' => 4750,
                'name' => 'Gorj County',
            ),
            134 => 
            array (
                'country_id' => 181,
                'id' => 4751,
                'name' => 'Mehedinți County',
            ),
            135 => 
            array (
                'country_id' => 181,
                'id' => 4752,
                'name' => 'Vaslui County',
            ),
            136 => 
            array (
                'country_id' => 181,
                'id' => 4753,
                'name' => 'Caraș-Severin County',
            ),
            137 => 
            array (
                'country_id' => 181,
                'id' => 4754,
                'name' => 'Covasna County',
            ),
            138 => 
            array (
                'country_id' => 181,
                'id' => 4755,
                'name' => 'Sibiu County',
            ),
            139 => 
            array (
                'country_id' => 181,
                'id' => 4756,
                'name' => 'Buzău County',
            ),
            140 => 
            array (
                'country_id' => 181,
                'id' => 4757,
                'name' => 'Vâlcea County',
            ),
            141 => 
            array (
                'country_id' => 181,
                'id' => 4758,
                'name' => 'Vrancea County',
            ),
            142 => 
            array (
                'country_id' => 181,
                'id' => 4759,
                'name' => 'Brașov County',
            ),
            143 => 
            array (
                'country_id' => 181,
                'id' => 4760,
                'name' => 'Maramureș County',
            ),
            144 => 
            array (
                'country_id' => 191,
                'id' => 4761,
                'name' => 'Aiga-i-le-Tai',
            ),
            145 => 
            array (
                'country_id' => 191,
                'id' => 4762,
                'name' => 'Satupa\'itea',
            ),
            146 => 
            array (
                'country_id' => 191,
                'id' => 4763,
                'name' => 'A\'ana',
            ),
            147 => 
            array (
                'country_id' => 191,
                'id' => 4764,
                'name' => 'Fa\'asaleleaga',
            ),
            148 => 
            array (
                'country_id' => 191,
                'id' => 4765,
                'name' => 'Atua',
            ),
            149 => 
            array (
                'country_id' => 191,
                'id' => 4766,
                'name' => 'Vaisigano',
            ),
            150 => 
            array (
                'country_id' => 191,
                'id' => 4767,
                'name' => 'Palauli',
            ),
            151 => 
            array (
                'country_id' => 191,
                'id' => 4768,
                'name' => 'Va\'a-o-Fonoti',
            ),
            152 => 
            array (
                'country_id' => 191,
                'id' => 4769,
                'name' => 'Gaga\'emauga',
            ),
            153 => 
            array (
                'country_id' => 191,
                'id' => 4770,
                'name' => 'Tuamasaga',
            ),
            154 => 
            array (
                'country_id' => 191,
                'id' => 4771,
                'name' => 'Gaga\'ifomauga',
            ),
            155 => 
            array (
                'country_id' => 237,
                'id' => 4772,
                'name' => 'Torba',
            ),
            156 => 
            array (
                'country_id' => 237,
                'id' => 4773,
                'name' => 'Penama',
            ),
            157 => 
            array (
                'country_id' => 237,
                'id' => 4774,
                'name' => 'Shefa',
            ),
            158 => 
            array (
                'country_id' => 237,
                'id' => 4775,
                'name' => 'Malampa',
            ),
            159 => 
            array (
                'country_id' => 237,
                'id' => 4776,
                'name' => 'Sanma',
            ),
            160 => 
            array (
                'country_id' => 237,
                'id' => 4777,
                'name' => 'Tafea',
            ),
            161 => 
            array (
                'country_id' => 202,
                'id' => 4778,
                'name' => 'Honiara',
            ),
            162 => 
            array (
                'country_id' => 202,
                'id' => 4779,
                'name' => 'Temotu Province',
            ),
            163 => 
            array (
                'country_id' => 202,
                'id' => 4780,
                'name' => 'Isabel Province',
            ),
            164 => 
            array (
                'country_id' => 202,
                'id' => 4781,
                'name' => 'Choiseul Province',
            ),
            165 => 
            array (
                'country_id' => 202,
                'id' => 4782,
                'name' => 'Makira-Ulawa Province',
            ),
            166 => 
            array (
                'country_id' => 202,
                'id' => 4783,
                'name' => 'Malaita Province',
            ),
            167 => 
            array (
                'country_id' => 202,
                'id' => 4784,
                'name' => 'Central Province',
            ),
            168 => 
            array (
                'country_id' => 202,
                'id' => 4785,
                'name' => 'Guadalcanal Province',
            ),
            169 => 
            array (
                'country_id' => 202,
                'id' => 4786,
                'name' => 'Western Province',
            ),
            170 => 
            array (
                'country_id' => 202,
                'id' => 4787,
                'name' => 'Rennell and Bellona Province',
            ),
            171 => 
            array (
                'country_id' => 75,
                'id' => 4794,
                'name' => 'Saint-Barthélemy',
            ),
            172 => 
            array (
                'country_id' => 75,
                'id' => 4795,
                'name' => 'Nouvelle-Aquitaine',
            ),
            173 => 
            array (
                'country_id' => 75,
                'id' => 4796,
                'name' => 'Île-de-France',
            ),
            174 => 
            array (
                'country_id' => 75,
                'id' => 4797,
                'name' => 'Mayotte',
            ),
            175 => 
            array (
                'country_id' => 75,
                'id' => 4798,
                'name' => 'Auvergne-Rhône-Alpes',
            ),
            176 => 
            array (
                'country_id' => 75,
                'id' => 4799,
                'name' => 'Occitanie',
            ),
            177 => 
            array (
                'country_id' => 75,
                'id' => 4802,
                'name' => 'Pays-de-la-Loire',
            ),
            178 => 
            array (
                'country_id' => 75,
                'id' => 4804,
                'name' => 'Normandie',
            ),
            179 => 
            array (
                'country_id' => 75,
                'id' => 4806,
                'name' => 'Corse',
            ),
            180 => 
            array (
                'country_id' => 75,
                'id' => 4807,
                'name' => 'Bretagne',
            ),
            181 => 
            array (
                'country_id' => 75,
                'id' => 4809,
                'name' => 'Saint-Martin',
            ),
            182 => 
            array (
                'country_id' => 75,
                'id' => 4810,
                'name' => 'Wallis and Futuna',
            ),
            183 => 
            array (
                'country_id' => 75,
                'id' => 4811,
                'name' => 'Alsace',
            ),
            184 => 
            array (
                'country_id' => 75,
                'id' => 4812,
                'name' => 'Provence-Alpes-Côte-d’Azur',
            ),
            185 => 
            array (
                'country_id' => 75,
                'id' => 4816,
                'name' => 'Paris',
            ),
            186 => 
            array (
                'country_id' => 75,
                'id' => 4818,
                'name' => 'Centre-Val de Loire',
            ),
            187 => 
            array (
                'country_id' => 75,
                'id' => 4820,
                'name' => 'Grand-Est',
            ),
            188 => 
            array (
                'country_id' => 75,
                'id' => 4821,
                'name' => 'Saint Pierre and Miquelon',
            ),
            189 => 
            array (
                'country_id' => 75,
                'id' => 4822,
                'name' => 'French Guiana',
            ),
            190 => 
            array (
                'country_id' => 75,
                'id' => 4823,
                'name' => 'La Réunion',
            ),
            191 => 
            array (
                'country_id' => 75,
                'id' => 4824,
                'name' => 'French Polynesia',
            ),
            192 => 
            array (
                'country_id' => 75,
                'id' => 4825,
                'name' => 'Bourgogne-Franche-Comté',
            ),
            193 => 
            array (
                'country_id' => 75,
                'id' => 4827,
                'name' => 'Martinique',
            ),
            194 => 
            array (
                'country_id' => 75,
                'id' => 4828,
                'name' => 'Hauts-de-France',
            ),
            195 => 
            array (
                'country_id' => 75,
                'id' => 4829,
                'name' => 'Guadeloupe',
            ),
            196 => 
            array (
                'country_id' => 171,
                'id' => 4830,
                'name' => 'West New Britain Province',
            ),
            197 => 
            array (
                'country_id' => 171,
                'id' => 4831,
                'name' => 'Bougainville',
            ),
            198 => 
            array (
                'country_id' => 171,
                'id' => 4832,
                'name' => 'Jiwaka Province',
            ),
            199 => 
            array (
                'country_id' => 171,
                'id' => 4833,
                'name' => 'Hela',
            ),
            200 => 
            array (
                'country_id' => 171,
                'id' => 4834,
                'name' => 'East New Britain',
            ),
            201 => 
            array (
                'country_id' => 171,
                'id' => 4835,
                'name' => 'Morobe Province',
            ),
            202 => 
            array (
                'country_id' => 171,
                'id' => 4836,
                'name' => 'Sandaun Province',
            ),
            203 => 
            array (
                'country_id' => 171,
                'id' => 4837,
                'name' => 'Port Moresby',
            ),
            204 => 
            array (
                'country_id' => 171,
                'id' => 4838,
                'name' => 'Oro Province',
            ),
            205 => 
            array (
                'country_id' => 171,
                'id' => 4839,
                'name' => 'Gulf',
            ),
            206 => 
            array (
                'country_id' => 171,
                'id' => 4840,
                'name' => 'Western Highlands Province',
            ),
            207 => 
            array (
                'country_id' => 171,
                'id' => 4841,
                'name' => 'New Ireland Province',
            ),
            208 => 
            array (
                'country_id' => 171,
                'id' => 4842,
                'name' => 'Manus Province',
            ),
            209 => 
            array (
                'country_id' => 171,
                'id' => 4843,
                'name' => 'Madang Province',
            ),
            210 => 
            array (
                'country_id' => 171,
                'id' => 4844,
                'name' => 'Southern Highlands Province',
            ),
            211 => 
            array (
                'country_id' => 171,
                'id' => 4845,
                'name' => 'Eastern Highlands Province',
            ),
            212 => 
            array (
                'country_id' => 171,
                'id' => 4846,
                'name' => 'Chimbu Province',
            ),
            213 => 
            array (
                'country_id' => 171,
                'id' => 4847,
                'name' => 'Central Province',
            ),
            214 => 
            array (
                'country_id' => 171,
                'id' => 4848,
                'name' => 'Enga Province',
            ),
            215 => 
            array (
                'country_id' => 171,
                'id' => 4849,
                'name' => 'Milne Bay Province',
            ),
            216 => 
            array (
                'country_id' => 171,
                'id' => 4850,
                'name' => 'Western Province',
            ),
            217 => 
            array (
                'country_id' => 233,
                'id' => 4851,
                'name' => 'Ohio',
            ),
            218 => 
            array (
                'country_id' => 101,
                'id' => 4852,
                'name' => 'Ladakh',
            ),
            219 => 
            array (
                'country_id' => 101,
                'id' => 4853,
                'name' => 'West Bengal',
            ),
            220 => 
            array (
                'country_id' => 225,
                'id' => 4854,
                'name' => 'Sinop',
            ),
            221 => 
            array (
                'country_id' => 239,
                'id' => 4855,
                'name' => 'Distrito Capital',
            ),
            222 => 
            array (
                'country_id' => 239,
                'id' => 4856,
                'name' => 'Apure',
            ),
            223 => 
            array (
                'country_id' => 142,
                'id' => 4857,
                'name' => 'Jalisco',
            ),
            224 => 
            array (
                'country_id' => 31,
                'id' => 4858,
                'name' => 'Roraima',
            ),
            225 => 
            array (
                'country_id' => 177,
                'id' => 4859,
                'name' => 'Guarda',
            ),
            226 => 
            array (
                'country_id' => 25,
                'id' => 4860,
                'name' => 'Devonshire',
            ),
            227 => 
            array (
                'country_id' => 25,
                'id' => 4861,
                'name' => 'Hamilton',
            ),
            228 => 
            array (
                'country_id' => 25,
                'id' => 4863,
                'name' => 'Paget',
            ),
            229 => 
            array (
                'country_id' => 25,
                'id' => 4864,
                'name' => 'Pembroke',
            ),
            230 => 
            array (
                'country_id' => 25,
                'id' => 4866,
                'name' => 'Saint George\'s',
            ),
            231 => 
            array (
                'country_id' => 25,
                'id' => 4867,
                'name' => 'Sandys',
            ),
            232 => 
            array (
                'country_id' => 25,
                'id' => 4868,
                'name' => 'Smith\'s',
            ),
            233 => 
            array (
                'country_id' => 25,
                'id' => 4869,
                'name' => 'Southampton',
            ),
            234 => 
            array (
                'country_id' => 25,
                'id' => 4870,
                'name' => 'Warwick',
            ),
            235 => 
            array (
                'country_id' => 48,
                'id' => 4871,
                'name' => 'Huila',
            ),
            236 => 
            array (
                'country_id' => 248,
                'id' => 4874,
            'name' => 'Uroševac District (Ferizaj)',
            ),
            237 => 
            array (
                'country_id' => 248,
                'id' => 4876,
            'name' => 'Đakovica District (Gjakove)',
            ),
            238 => 
            array (
                'country_id' => 248,
                'id' => 4877,
                'name' => 'Gjilan District',
            ),
            239 => 
            array (
                'country_id' => 248,
                'id' => 4878,
                'name' => 'Kosovska Mitrovica District',
            ),
            240 => 
            array (
                'country_id' => 248,
                'id' => 4879,
            'name' => 'Pristina (Priştine)',
            ),
            241 => 
            array (
                'country_id' => 11,
                'id' => 4880,
                'name' => 'Ciudad Autónoma de Buenos Aires',
            ),
            242 => 
            array (
                'country_id' => 17,
                'id' => 4881,
                'name' => 'New Providence',
            ),
            243 => 
            array (
                'country_id' => 34,
                'id' => 4882,
                'name' => 'Shumen',
            ),
            244 => 
            array (
                'country_id' => 98,
                'id' => 4883,
                'name' => 'Yuen Long',
            ),
            245 => 
            array (
                'country_id' => 98,
                'id' => 4884,
                'name' => 'Tsuen Wan',
            ),
            246 => 
            array (
                'country_id' => 98,
                'id' => 4885,
                'name' => 'Tai Po',
            ),
            247 => 
            array (
                'country_id' => 98,
                'id' => 4887,
                'name' => 'Sai Kung',
            ),
            248 => 
            array (
                'country_id' => 98,
                'id' => 4888,
                'name' => 'Islands',
            ),
            249 => 
            array (
                'country_id' => 98,
                'id' => 4889,
                'name' => 'Central and Western',
            ),
            250 => 
            array (
                'country_id' => 98,
                'id' => 4890,
                'name' => 'Wan Chai',
            ),
            251 => 
            array (
                'country_id' => 98,
                'id' => 4891,
                'name' => 'Eastern',
            ),
            252 => 
            array (
                'country_id' => 98,
                'id' => 4892,
                'name' => 'Southern',
            ),
            253 => 
            array (
                'country_id' => 98,
                'id' => 4893,
                'name' => 'Yau Tsim Mong',
            ),
            254 => 
            array (
                'country_id' => 98,
                'id' => 4894,
                'name' => 'Sham Shui Po',
            ),
            255 => 
            array (
                'country_id' => 98,
                'id' => 4895,
                'name' => 'Kowloon City',
            ),
            256 => 
            array (
                'country_id' => 98,
                'id' => 4896,
                'name' => 'Wong Tai Sin',
            ),
            257 => 
            array (
                'country_id' => 98,
                'id' => 4897,
                'name' => 'Kwun Tong',
            ),
            258 => 
            array (
                'country_id' => 98,
                'id' => 4898,
                'name' => 'Kwai Tsing',
            ),
            259 => 
            array (
                'country_id' => 98,
                'id' => 4899,
                'name' => 'Tuen Mun',
            ),
            260 => 
            array (
                'country_id' => 98,
                'id' => 4900,
                'name' => 'North',
            ),
            261 => 
            array (
                'country_id' => 98,
                'id' => 4901,
                'name' => 'Sha Tin',
            ),
            262 => 
            array (
                'country_id' => 4,
                'id' => 4902,
                'name' => 'Sidi Bel Abbès',
            ),
            263 => 
            array (
                'country_id' => 4,
                'id' => 4905,
                'name' => 'El M\'ghair',
            ),
            264 => 
            array (
                'country_id' => 4,
                'id' => 4906,
                'name' => 'El Menia',
            ),
            265 => 
            array (
                'country_id' => 4,
                'id' => 4907,
                'name' => 'Ouled Djellal',
            ),
            266 => 
            array (
                'country_id' => 4,
                'id' => 4908,
                'name' => 'Bordj Baji Mokhtar',
            ),
            267 => 
            array (
                'country_id' => 4,
                'id' => 4909,
                'name' => 'Béni Abbès',
            ),
            268 => 
            array (
                'country_id' => 4,
                'id' => 4910,
                'name' => 'Timimoun',
            ),
            269 => 
            array (
                'country_id' => 4,
                'id' => 4911,
                'name' => 'Touggourt',
            ),
            270 => 
            array (
                'country_id' => 4,
                'id' => 4912,
                'name' => 'Djanet',
            ),
            271 => 
            array (
                'country_id' => 4,
                'id' => 4913,
                'name' => 'In Salah',
            ),
            272 => 
            array (
                'country_id' => 4,
                'id' => 4914,
                'name' => 'In Guezzam',
            ),
            273 => 
            array (
                'country_id' => 181,
                'id' => 4915,
                'name' => 'Mureș County',
            ),
            274 => 
            array (
                'country_id' => 182,
                'id' => 4916,
                'name' => 'Volgograd Oblast',
            ),
            275 => 
            array (
                'country_id' => 145,
                'id' => 4917,
                'name' => 'La Colle',
            ),
            276 => 
            array (
                'country_id' => 145,
                'id' => 4918,
                'name' => 'La Condamine',
            ),
            277 => 
            array (
                'country_id' => 145,
                'id' => 4919,
                'name' => 'Moneghetti',
            ),
            278 => 
            array (
                'country_id' => 103,
                'id' => 4920,
                'name' => 'Hamadan',
            ),
            279 => 
            array (
                'country_id' => 48,
                'id' => 4921,
                'name' => 'Bogotá D.C.',
            ),
            280 => 
            array (
                'country_id' => 173,
                'id' => 4922,
                'name' => 'Loreto',
            ),
            281 => 
            array (
                'country_id' => 58,
                'id' => 4923,
                'name' => 'Kutná Hora',
            ),
            282 => 
            array (
                'country_id' => 109,
                'id' => 4924,
                'name' => 'Kōchi Prefecture',
            ),
            283 => 
            array (
                'country_id' => 240,
                'id' => 4925,
                'name' => 'Cần Thơ',
            ),
            284 => 
            array (
                'country_id' => 161,
                'id' => 4926,
                'name' => 'Rivers',
            ),
            285 => 
            array (
                'country_id' => 149,
                'id' => 4927,
                'name' => 'Rabat-Salé-Kénitra',
            ),
            286 => 
            array (
                'country_id' => 149,
                'id' => 4928,
                'name' => 'Agadir-Ida-Ou-Tanane',
            ),
            287 => 
            array (
                'country_id' => 149,
                'id' => 4929,
                'name' => 'Berrechid',
            ),
            288 => 
            array (
                'country_id' => 149,
                'id' => 4930,
                'name' => 'Casablanca',
            ),
            289 => 
            array (
                'country_id' => 149,
                'id' => 4931,
                'name' => 'Driouch',
            ),
            290 => 
            array (
                'country_id' => 149,
                'id' => 4932,
                'name' => 'Fès',
            ),
            291 => 
            array (
                'country_id' => 149,
                'id' => 4933,
                'name' => 'Fquih Ben Salah',
            ),
            292 => 
            array (
                'country_id' => 149,
                'id' => 4934,
                'name' => 'Guercif',
            ),
            293 => 
            array (
                'country_id' => 149,
                'id' => 4935,
                'name' => 'Marrakech',
            ),
            294 => 
            array (
                'country_id' => 149,
                'id' => 4936,
                'name' => 'M’diq-Fnideq',
            ),
            295 => 
            array (
                'country_id' => 149,
                'id' => 4937,
                'name' => 'Meknès',
            ),
            296 => 
            array (
                'country_id' => 149,
                'id' => 4938,
                'name' => 'Midelt',
            ),
            297 => 
            array (
                'country_id' => 149,
                'id' => 4939,
                'name' => 'Mohammadia',
            ),
            298 => 
            array (
                'country_id' => 149,
                'id' => 4940,
                'name' => 'Oujda-Angad',
            ),
            299 => 
            array (
                'country_id' => 149,
                'id' => 4941,
                'name' => 'Ouezzane',
            ),
            300 => 
            array (
                'country_id' => 149,
                'id' => 4942,
                'name' => 'Rabat',
            ),
            301 => 
            array (
                'country_id' => 149,
                'id' => 4943,
                'name' => 'Rehamna',
            ),
            302 => 
            array (
                'country_id' => 149,
                'id' => 4944,
                'name' => 'Salé',
            ),
            303 => 
            array (
                'country_id' => 149,
                'id' => 4945,
                'name' => 'Sidi Bennour',
            ),
            304 => 
            array (
                'country_id' => 149,
                'id' => 4946,
                'name' => 'Sidi Ifni',
            ),
            305 => 
            array (
                'country_id' => 149,
                'id' => 4947,
                'name' => 'Skhirate-Témara',
            ),
            306 => 
            array (
                'country_id' => 149,
                'id' => 4948,
            'name' => 'Tarfaya (EH-partial)',
            ),
            307 => 
            array (
                'country_id' => 149,
                'id' => 4949,
                'name' => 'Tinghir',
            ),
            308 => 
            array (
                'country_id' => 149,
                'id' => 4950,
                'name' => 'Tanger-Assilah',
            ),
            309 => 
            array (
                'country_id' => 149,
                'id' => 4951,
                'name' => 'Youssoufia',
            ),
            310 => 
            array (
                'country_id' => 149,
                'id' => 4952,
                'name' => 'Sidi Slimane',
            ),
            311 => 
            array (
                'country_id' => 51,
                'id' => 4953,
                'name' => 'Lualaba',
            ),
            312 => 
            array (
                'country_id' => 219,
                'id' => 4954,
                'name' => 'Chaiyaphum',
            ),
            313 => 
            array (
                'country_id' => 218,
                'id' => 4955,
                'name' => 'Mbeya',
            ),
            314 => 
            array (
                'country_id' => 218,
                'id' => 4956,
                'name' => 'Songwe',
            ),
            315 => 
            array (
                'country_id' => 214,
                'id' => 4957,
                'name' => 'Basel-Stadt',
            ),
            316 => 
            array (
                'country_id' => 83,
                'id' => 4958,
                'name' => 'Bono East',
            ),
            317 => 
            array (
                'country_id' => 83,
                'id' => 4959,
                'name' => 'Bono',
            ),
            318 => 
            array (
                'country_id' => 83,
                'id' => 4960,
                'name' => 'North East',
            ),
            319 => 
            array (
                'country_id' => 83,
                'id' => 4961,
                'name' => 'Oti',
            ),
            320 => 
            array (
                'country_id' => 83,
                'id' => 4962,
                'name' => 'Savannah',
            ),
            321 => 
            array (
                'country_id' => 83,
                'id' => 4963,
                'name' => 'Western North',
            ),
            322 => 
            array (
                'country_id' => 159,
                'id' => 4964,
                'name' => 'Nueva Segovia',
            ),
            323 => 
            array (
                'country_id' => 216,
                'id' => 4965,
                'name' => 'Keelung',
            ),
            324 => 
            array (
                'country_id' => 216,
                'id' => 4966,
                'name' => 'New Taipei',
            ),
            325 => 
            array (
                'country_id' => 75,
                'id' => 4967,
                'name' => 'Ain',
            ),
            326 => 
            array (
                'country_id' => 75,
                'id' => 4968,
                'name' => 'Aisne',
            ),
            327 => 
            array (
                'country_id' => 75,
                'id' => 4969,
                'name' => 'Allier',
            ),
            328 => 
            array (
                'country_id' => 75,
                'id' => 4970,
                'name' => 'Alpes-de-Haute-Provence',
            ),
            329 => 
            array (
                'country_id' => 75,
                'id' => 4971,
                'name' => 'Hautes-Alpes',
            ),
            330 => 
            array (
                'country_id' => 75,
                'id' => 4972,
                'name' => 'Alpes-Maritimes',
            ),
            331 => 
            array (
                'country_id' => 75,
                'id' => 4973,
                'name' => 'Ardèche',
            ),
            332 => 
            array (
                'country_id' => 75,
                'id' => 4974,
                'name' => 'Ardennes',
            ),
            333 => 
            array (
                'country_id' => 75,
                'id' => 4975,
                'name' => 'Ariège',
            ),
            334 => 
            array (
                'country_id' => 75,
                'id' => 4976,
                'name' => 'Aube',
            ),
            335 => 
            array (
                'country_id' => 75,
                'id' => 4977,
                'name' => 'Aude',
            ),
            336 => 
            array (
                'country_id' => 75,
                'id' => 4978,
                'name' => 'Aveyron',
            ),
            337 => 
            array (
                'country_id' => 75,
                'id' => 4979,
                'name' => 'Bouches-du-Rhône',
            ),
            338 => 
            array (
                'country_id' => 75,
                'id' => 4981,
                'name' => 'Calvados',
            ),
            339 => 
            array (
                'country_id' => 75,
                'id' => 4982,
                'name' => 'Cantal',
            ),
            340 => 
            array (
                'country_id' => 75,
                'id' => 4983,
                'name' => 'Charente',
            ),
            341 => 
            array (
                'country_id' => 75,
                'id' => 4984,
                'name' => 'Charente-Maritime',
            ),
            342 => 
            array (
                'country_id' => 75,
                'id' => 4985,
                'name' => 'Cher',
            ),
            343 => 
            array (
                'country_id' => 75,
                'id' => 4986,
                'name' => 'Corrèze',
            ),
            344 => 
            array (
                'country_id' => 75,
                'id' => 4987,
                'name' => 'Côte-d\'Or',
            ),
            345 => 
            array (
                'country_id' => 75,
                'id' => 4988,
                'name' => 'Côtes-d\'Armor',
            ),
            346 => 
            array (
                'country_id' => 75,
                'id' => 4989,
                'name' => 'Creuse',
            ),
            347 => 
            array (
                'country_id' => 75,
                'id' => 4990,
                'name' => 'Dordogne',
            ),
            348 => 
            array (
                'country_id' => 75,
                'id' => 4991,
                'name' => 'Doubs',
            ),
            349 => 
            array (
                'country_id' => 75,
                'id' => 4992,
                'name' => 'Drôme',
            ),
            350 => 
            array (
                'country_id' => 75,
                'id' => 4993,
                'name' => 'Eure',
            ),
            351 => 
            array (
                'country_id' => 75,
                'id' => 4994,
                'name' => 'Eure-et-Loir',
            ),
            352 => 
            array (
                'country_id' => 75,
                'id' => 4995,
                'name' => 'Finistère',
            ),
            353 => 
            array (
                'country_id' => 75,
                'id' => 4996,
                'name' => 'Corse-du-Sud',
            ),
            354 => 
            array (
                'country_id' => 75,
                'id' => 4997,
                'name' => 'Haute-Corse',
            ),
            355 => 
            array (
                'country_id' => 75,
                'id' => 4998,
                'name' => 'Gard',
            ),
            356 => 
            array (
                'country_id' => 75,
                'id' => 4999,
                'name' => 'Haute-Garonne',
            ),
            357 => 
            array (
                'country_id' => 75,
                'id' => 5000,
                'name' => 'Gers',
            ),
            358 => 
            array (
                'country_id' => 75,
                'id' => 5001,
                'name' => 'Gironde',
            ),
            359 => 
            array (
                'country_id' => 75,
                'id' => 5002,
                'name' => 'Hérault',
            ),
            360 => 
            array (
                'country_id' => 75,
                'id' => 5003,
                'name' => 'Ille-et-Vilaine',
            ),
            361 => 
            array (
                'country_id' => 75,
                'id' => 5004,
                'name' => 'Indre',
            ),
            362 => 
            array (
                'country_id' => 75,
                'id' => 5005,
                'name' => 'Indre-et-Loire',
            ),
            363 => 
            array (
                'country_id' => 75,
                'id' => 5006,
                'name' => 'Isère',
            ),
            364 => 
            array (
                'country_id' => 75,
                'id' => 5007,
                'name' => 'Jura',
            ),
            365 => 
            array (
                'country_id' => 75,
                'id' => 5008,
                'name' => 'Landes',
            ),
            366 => 
            array (
                'country_id' => 75,
                'id' => 5009,
                'name' => 'Loir-et-Cher',
            ),
            367 => 
            array (
                'country_id' => 75,
                'id' => 5010,
                'name' => 'Loire',
            ),
            368 => 
            array (
                'country_id' => 75,
                'id' => 5011,
                'name' => 'Haute-Loire',
            ),
            369 => 
            array (
                'country_id' => 75,
                'id' => 5012,
                'name' => 'Loire-Atlantique',
            ),
            370 => 
            array (
                'country_id' => 75,
                'id' => 5013,
                'name' => 'Loiret',
            ),
            371 => 
            array (
                'country_id' => 75,
                'id' => 5014,
                'name' => 'Lot',
            ),
            372 => 
            array (
                'country_id' => 75,
                'id' => 5015,
                'name' => 'Lot-et-Garonne',
            ),
            373 => 
            array (
                'country_id' => 75,
                'id' => 5016,
                'name' => 'Lozère',
            ),
            374 => 
            array (
                'country_id' => 75,
                'id' => 5017,
                'name' => 'Maine-et-Loire',
            ),
            375 => 
            array (
                'country_id' => 75,
                'id' => 5018,
                'name' => 'Manche',
            ),
            376 => 
            array (
                'country_id' => 75,
                'id' => 5019,
                'name' => 'Marne',
            ),
            377 => 
            array (
                'country_id' => 75,
                'id' => 5020,
                'name' => 'Haute-Marne',
            ),
            378 => 
            array (
                'country_id' => 75,
                'id' => 5021,
                'name' => 'Mayenne',
            ),
            379 => 
            array (
                'country_id' => 75,
                'id' => 5022,
                'name' => 'Meurthe-et-Moselle',
            ),
            380 => 
            array (
                'country_id' => 75,
                'id' => 5023,
                'name' => 'Meuse',
            ),
            381 => 
            array (
                'country_id' => 75,
                'id' => 5024,
                'name' => 'Morbihan',
            ),
            382 => 
            array (
                'country_id' => 75,
                'id' => 5025,
                'name' => 'Moselle',
            ),
            383 => 
            array (
                'country_id' => 75,
                'id' => 5026,
                'name' => 'Nièvre',
            ),
            384 => 
            array (
                'country_id' => 75,
                'id' => 5027,
                'name' => 'Nord',
            ),
            385 => 
            array (
                'country_id' => 75,
                'id' => 5028,
                'name' => 'Oise',
            ),
            386 => 
            array (
                'country_id' => 75,
                'id' => 5029,
                'name' => 'Orne',
            ),
            387 => 
            array (
                'country_id' => 75,
                'id' => 5030,
                'name' => 'Pas-de-Calais',
            ),
            388 => 
            array (
                'country_id' => 75,
                'id' => 5031,
                'name' => 'Puy-de-Dôme',
            ),
            389 => 
            array (
                'country_id' => 75,
                'id' => 5032,
                'name' => 'Pyrénées-Atlantiques',
            ),
            390 => 
            array (
                'country_id' => 75,
                'id' => 5033,
                'name' => 'Hautes-Pyrénées',
            ),
            391 => 
            array (
                'country_id' => 75,
                'id' => 5034,
                'name' => 'Pyrénées-Orientales',
            ),
            392 => 
            array (
                'country_id' => 75,
                'id' => 5035,
                'name' => 'Bas-Rhin',
            ),
            393 => 
            array (
                'country_id' => 75,
                'id' => 5036,
                'name' => 'Haut-Rhin',
            ),
            394 => 
            array (
                'country_id' => 75,
                'id' => 5037,
                'name' => 'Rhône',
            ),
            395 => 
            array (
                'country_id' => 75,
                'id' => 5038,
                'name' => 'Métropole de Lyon',
            ),
            396 => 
            array (
                'country_id' => 75,
                'id' => 5039,
                'name' => 'Haute-Saône',
            ),
            397 => 
            array (
                'country_id' => 75,
                'id' => 5040,
                'name' => 'Saône-et-Loire',
            ),
            398 => 
            array (
                'country_id' => 75,
                'id' => 5041,
                'name' => 'Sarthe',
            ),
            399 => 
            array (
                'country_id' => 75,
                'id' => 5042,
                'name' => 'Savoie',
            ),
            400 => 
            array (
                'country_id' => 75,
                'id' => 5043,
                'name' => 'Haute-Savoie',
            ),
            401 => 
            array (
                'country_id' => 75,
                'id' => 5044,
                'name' => 'Seine-Maritime',
            ),
            402 => 
            array (
                'country_id' => 75,
                'id' => 5045,
                'name' => 'Seine-et-Marne',
            ),
            403 => 
            array (
                'country_id' => 75,
                'id' => 5046,
                'name' => 'Yvelines',
            ),
            404 => 
            array (
                'country_id' => 75,
                'id' => 5047,
                'name' => 'Deux-Sèvres',
            ),
            405 => 
            array (
                'country_id' => 75,
                'id' => 5048,
                'name' => 'Somme',
            ),
            406 => 
            array (
                'country_id' => 75,
                'id' => 5049,
                'name' => 'Tarn',
            ),
            407 => 
            array (
                'country_id' => 75,
                'id' => 5050,
                'name' => 'Tarn-et-Garonne',
            ),
            408 => 
            array (
                'country_id' => 75,
                'id' => 5051,
                'name' => 'Var',
            ),
            409 => 
            array (
                'country_id' => 75,
                'id' => 5052,
                'name' => 'Vaucluse',
            ),
            410 => 
            array (
                'country_id' => 75,
                'id' => 5053,
                'name' => 'Vendée',
            ),
            411 => 
            array (
                'country_id' => 75,
                'id' => 5054,
                'name' => 'Vienne',
            ),
            412 => 
            array (
                'country_id' => 75,
                'id' => 5055,
                'name' => 'Haute-Vienne',
            ),
            413 => 
            array (
                'country_id' => 75,
                'id' => 5056,
                'name' => 'Vosges',
            ),
            414 => 
            array (
                'country_id' => 75,
                'id' => 5057,
                'name' => 'Yonne',
            ),
            415 => 
            array (
                'country_id' => 75,
                'id' => 5058,
                'name' => 'Territoire de Belfort',
            ),
            416 => 
            array (
                'country_id' => 75,
                'id' => 5059,
                'name' => 'Essonne',
            ),
            417 => 
            array (
                'country_id' => 75,
                'id' => 5060,
                'name' => 'Hauts-de-Seine',
            ),
            418 => 
            array (
                'country_id' => 75,
                'id' => 5061,
                'name' => 'Seine-Saint-Denis',
            ),
            419 => 
            array (
                'country_id' => 75,
                'id' => 5062,
                'name' => 'Val-de-Marne',
            ),
            420 => 
            array (
                'country_id' => 75,
                'id' => 5063,
                'name' => 'Val-d\'Oise',
            ),
            421 => 
            array (
                'country_id' => 75,
                'id' => 5064,
                'name' => 'Clipperton',
            ),
            422 => 
            array (
                'country_id' => 75,
                'id' => 5065,
                'name' => 'French Southern and Antarctic Lands',
            ),
            423 => 
            array (
                'country_id' => 65,
                'id' => 5067,
                'name' => 'Sharqia',
            ),
            424 => 
            array (
                'country_id' => 64,
                'id' => 5068,
                'name' => 'Loja',
            ),
            425 => 
            array (
                'country_id' => 55,
                'id' => 5069,
                'name' => 'Karlovac',
            ),
            426 => 
            array (
                'country_id' => 37,
                'id' => 5070,
                'name' => 'Kampong Thom',
            ),
            427 => 
            array (
                'country_id' => 230,
                'id' => 5071,
                'name' => 'Poltavska oblast',
            ),
            428 => 
            array (
                'country_id' => 242,
                'id' => 5072,
                'name' => 'Saint Thomas',
            ),
            429 => 
            array (
                'country_id' => 242,
                'id' => 5073,
                'name' => 'Saint John',
            ),
            430 => 
            array (
                'country_id' => 242,
                'id' => 5074,
                'name' => 'Saint Croix',
            ),
            431 => 
            array (
                'country_id' => 178,
                'id' => 5075,
                'name' => 'San Juan',
            ),
            432 => 
            array (
                'country_id' => 178,
                'id' => 5076,
                'name' => 'Bayamon',
            ),
            433 => 
            array (
                'country_id' => 178,
                'id' => 5077,
                'name' => 'Carolina',
            ),
            434 => 
            array (
                'country_id' => 178,
                'id' => 5078,
                'name' => 'Ponce',
            ),
            435 => 
            array (
                'country_id' => 178,
                'id' => 5079,
                'name' => 'Caguas',
            ),
            436 => 
            array (
                'country_id' => 178,
                'id' => 5080,
                'name' => 'Guaynabo',
            ),
            437 => 
            array (
                'country_id' => 178,
                'id' => 5081,
                'name' => 'Arecibo',
            ),
            438 => 
            array (
                'country_id' => 178,
                'id' => 5082,
                'name' => 'Toa Baja',
            ),
            439 => 
            array (
                'country_id' => 178,
                'id' => 5083,
                'name' => 'Mayagüez',
            ),
            440 => 
            array (
                'country_id' => 178,
                'id' => 5084,
                'name' => 'Trujillo Alto',
            ),
            441 => 
            array (
                'country_id' => 99,
                'id' => 5085,
                'name' => 'Komárom-Esztergom',
            ),
            442 => 
            array (
                'country_id' => 155,
                'id' => 5086,
                'name' => 'Bonaire',
            ),
            443 => 
            array (
                'country_id' => 155,
                'id' => 5087,
                'name' => 'Saba',
            ),
            444 => 
            array (
                'country_id' => 155,
                'id' => 5088,
                'name' => 'Sint Eustatius',
            ),
            445 => 
            array (
                'country_id' => 207,
                'id' => 5089,
                'name' => 'A Coruña',
            ),
            446 => 
            array (
                'country_id' => 207,
                'id' => 5090,
                'name' => 'Lugo',
            ),
            447 => 
            array (
                'country_id' => 207,
                'id' => 5091,
                'name' => 'Ourense',
            ),
            448 => 
            array (
                'country_id' => 207,
                'id' => 5092,
                'name' => 'Badajoz',
            ),
            449 => 
            array (
                'country_id' => 207,
                'id' => 5093,
                'name' => 'Araba',
            ),
            450 => 
            array (
                'country_id' => 207,
                'id' => 5094,
                'name' => 'Bizkaia',
            ),
            451 => 
            array (
                'country_id' => 207,
                'id' => 5095,
                'name' => 'Almeria',
            ),
            452 => 
            array (
                'country_id' => 207,
                'id' => 5096,
                'name' => 'Cádiz',
            ),
            453 => 
            array (
                'country_id' => 207,
                'id' => 5097,
                'name' => 'Córdoba',
            ),
            454 => 
            array (
                'country_id' => 207,
                'id' => 5098,
                'name' => 'Granada',
            ),
            455 => 
            array (
                'country_id' => 207,
                'id' => 5099,
                'name' => 'Huelva',
            ),
            456 => 
            array (
                'country_id' => 207,
                'id' => 5100,
                'name' => 'Jaén',
            ),
            457 => 
            array (
                'country_id' => 207,
                'id' => 5101,
                'name' => 'Málaga',
            ),
            458 => 
            array (
                'country_id' => 207,
                'id' => 5102,
                'name' => 'Barcelona',
            ),
            459 => 
            array (
                'country_id' => 207,
                'id' => 5103,
                'name' => 'Girona',
            ),
            460 => 
            array (
                'country_id' => 207,
                'id' => 5104,
                'name' => 'Lleida',
            ),
            461 => 
            array (
                'country_id' => 207,
                'id' => 5105,
                'name' => 'Ciudad Real',
            ),
            462 => 
            array (
                'country_id' => 207,
                'id' => 5106,
                'name' => 'Cuenca',
            ),
            463 => 
            array (
                'country_id' => 207,
                'id' => 5107,
                'name' => 'Guadalajara',
            ),
            464 => 
            array (
                'country_id' => 207,
                'id' => 5108,
                'name' => 'Alicante',
            ),
            465 => 
            array (
                'country_id' => 207,
                'id' => 5109,
                'name' => 'Albacete',
            ),
            466 => 
            array (
                'country_id' => 207,
                'id' => 5110,
                'name' => 'Castellón',
            ),
            467 => 
            array (
                'country_id' => 207,
                'id' => 5111,
                'name' => 'Teruel',
            ),
            468 => 
            array (
                'country_id' => 207,
                'id' => 5112,
                'name' => 'Santa Cruz de Tenerife',
            ),
            469 => 
            array (
                'country_id' => 207,
                'id' => 5113,
                'name' => 'Zaragoza',
            ),
            470 => 
            array (
                'country_id' => 43,
                'id' => 5114,
                'name' => 'Chari-Baguirmi',
            ),
            471 => 
            array (
                'country_id' => 174,
                'id' => 5115,
                'name' => 'Western Samar',
            ),
            472 => 
            array (
                'country_id' => 224,
                'id' => 5116,
                'name' => 'Nabeul',
            ),
            473 => 
            array (
                'country_id' => 213,
                'id' => 5117,
                'name' => 'Jämtland County',
            ),
            474 => 
            array (
                'country_id' => 169,
                'id' => 5118,
                'name' => 'Bethlehem',
            ),
            475 => 
            array (
                'country_id' => 169,
                'id' => 5119,
                'name' => 'Deir El Balah',
            ),
            476 => 
            array (
                'country_id' => 169,
                'id' => 5120,
                'name' => 'Gaza',
            ),
            477 => 
            array (
                'country_id' => 169,
                'id' => 5121,
                'name' => 'Hebron',
            ),
            478 => 
            array (
                'country_id' => 169,
                'id' => 5122,
                'name' => 'Jenin',
            ),
            479 => 
            array (
                'country_id' => 169,
                'id' => 5123,
                'name' => 'Jericho and Al Aghwar',
            ),
            480 => 
            array (
                'country_id' => 169,
                'id' => 5124,
                'name' => 'Jerusalem',
            ),
            481 => 
            array (
                'country_id' => 169,
                'id' => 5125,
                'name' => 'Khan Yunis',
            ),
            482 => 
            array (
                'country_id' => 169,
                'id' => 5126,
                'name' => 'Nablus',
            ),
            483 => 
            array (
                'country_id' => 169,
                'id' => 5127,
                'name' => 'North Gaza',
            ),
            484 => 
            array (
                'country_id' => 169,
                'id' => 5128,
                'name' => 'Qalqilya',
            ),
            485 => 
            array (
                'country_id' => 169,
                'id' => 5129,
                'name' => 'Rafah',
            ),
            486 => 
            array (
                'country_id' => 169,
                'id' => 5130,
                'name' => 'Ramallah',
            ),
            487 => 
            array (
                'country_id' => 169,
                'id' => 5131,
                'name' => 'Salfit',
            ),
            488 => 
            array (
                'country_id' => 169,
                'id' => 5132,
                'name' => 'Tubas',
            ),
            489 => 
            array (
                'country_id' => 169,
                'id' => 5133,
                'name' => 'Tulkarm',
            ),
            490 => 
            array (
                'country_id' => 178,
                'id' => 5134,
                'name' => 'Adjuntas',
            ),
            491 => 
            array (
                'country_id' => 178,
                'id' => 5135,
                'name' => 'Aguada',
            ),
            492 => 
            array (
                'country_id' => 178,
                'id' => 5136,
                'name' => 'Aguadilla',
            ),
            493 => 
            array (
                'country_id' => 178,
                'id' => 5137,
                'name' => 'Aguas Buenas',
            ),
            494 => 
            array (
                'country_id' => 178,
                'id' => 5138,
                'name' => 'Aibonito',
            ),
            495 => 
            array (
                'country_id' => 178,
                'id' => 5139,
                'name' => 'Añasco',
            ),
            496 => 
            array (
                'country_id' => 178,
                'id' => 5140,
                'name' => 'Arecibo',
            ),
            497 => 
            array (
                'country_id' => 178,
                'id' => 5141,
                'name' => 'Arroyo',
            ),
            498 => 
            array (
                'country_id' => 178,
                'id' => 5142,
                'name' => 'Barceloneta',
            ),
            499 => 
            array (
                'country_id' => 178,
                'id' => 5143,
                'name' => 'Barranquitas',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'country_id' => 178,
                'id' => 5144,
                'name' => 'Bayamón',
            ),
            1 => 
            array (
                'country_id' => 178,
                'id' => 5145,
                'name' => 'Cabo Rojo',
            ),
            2 => 
            array (
                'country_id' => 178,
                'id' => 5146,
                'name' => 'Caguas',
            ),
            3 => 
            array (
                'country_id' => 178,
                'id' => 5147,
                'name' => 'Camuy',
            ),
            4 => 
            array (
                'country_id' => 178,
                'id' => 5148,
                'name' => 'Canóvanas',
            ),
            5 => 
            array (
                'country_id' => 178,
                'id' => 5149,
                'name' => 'Carolina',
            ),
            6 => 
            array (
                'country_id' => 178,
                'id' => 5150,
                'name' => 'Cataño',
            ),
            7 => 
            array (
                'country_id' => 178,
                'id' => 5151,
                'name' => 'Cayey',
            ),
            8 => 
            array (
                'country_id' => 178,
                'id' => 5152,
                'name' => 'Ceiba',
            ),
            9 => 
            array (
                'country_id' => 178,
                'id' => 5153,
                'name' => 'Ciales',
            ),
            10 => 
            array (
                'country_id' => 178,
                'id' => 5154,
                'name' => 'Cidra',
            ),
            11 => 
            array (
                'country_id' => 178,
                'id' => 5155,
                'name' => 'Coamo',
            ),
            12 => 
            array (
                'country_id' => 178,
                'id' => 5156,
                'name' => 'Comerío',
            ),
            13 => 
            array (
                'country_id' => 178,
                'id' => 5157,
                'name' => 'Corozal',
            ),
            14 => 
            array (
                'country_id' => 178,
                'id' => 5158,
                'name' => 'Culebra',
            ),
            15 => 
            array (
                'country_id' => 178,
                'id' => 5159,
                'name' => 'Dorado',
            ),
            16 => 
            array (
                'country_id' => 178,
                'id' => 5160,
                'name' => 'Fajardo',
            ),
            17 => 
            array (
                'country_id' => 178,
                'id' => 5161,
                'name' => 'Florida',
            ),
            18 => 
            array (
                'country_id' => 178,
                'id' => 5162,
                'name' => 'Guánica',
            ),
            19 => 
            array (
                'country_id' => 178,
                'id' => 5163,
                'name' => 'Guayama',
            ),
            20 => 
            array (
                'country_id' => 178,
                'id' => 5164,
                'name' => 'Guayanilla',
            ),
            21 => 
            array (
                'country_id' => 178,
                'id' => 5165,
                'name' => 'Guaynabo',
            ),
            22 => 
            array (
                'country_id' => 178,
                'id' => 5166,
                'name' => 'Gurabo',
            ),
            23 => 
            array (
                'country_id' => 178,
                'id' => 5167,
                'name' => 'Hatillo',
            ),
            24 => 
            array (
                'country_id' => 178,
                'id' => 5168,
                'name' => 'Hormigueros',
            ),
            25 => 
            array (
                'country_id' => 178,
                'id' => 5169,
                'name' => 'Humacao',
            ),
            26 => 
            array (
                'country_id' => 178,
                'id' => 5170,
                'name' => 'Isabela',
            ),
            27 => 
            array (
                'country_id' => 178,
                'id' => 5171,
                'name' => 'Jayuya',
            ),
            28 => 
            array (
                'country_id' => 178,
                'id' => 5172,
                'name' => 'Juana Díaz',
            ),
            29 => 
            array (
                'country_id' => 178,
                'id' => 5173,
                'name' => 'Juncos',
            ),
            30 => 
            array (
                'country_id' => 178,
                'id' => 5174,
                'name' => 'Lajas',
            ),
            31 => 
            array (
                'country_id' => 178,
                'id' => 5175,
                'name' => 'Lares',
            ),
            32 => 
            array (
                'country_id' => 178,
                'id' => 5176,
                'name' => 'Las Marías',
            ),
            33 => 
            array (
                'country_id' => 178,
                'id' => 5177,
                'name' => 'Las Piedras',
            ),
            34 => 
            array (
                'country_id' => 178,
                'id' => 5178,
                'name' => 'Loíza',
            ),
            35 => 
            array (
                'country_id' => 178,
                'id' => 5179,
                'name' => 'Luquillo',
            ),
            36 => 
            array (
                'country_id' => 178,
                'id' => 5180,
                'name' => 'Manatí',
            ),
            37 => 
            array (
                'country_id' => 178,
                'id' => 5181,
                'name' => 'Maricao',
            ),
            38 => 
            array (
                'country_id' => 178,
                'id' => 5182,
                'name' => 'Maunabo',
            ),
            39 => 
            array (
                'country_id' => 178,
                'id' => 5183,
                'name' => 'Mayagüez',
            ),
            40 => 
            array (
                'country_id' => 178,
                'id' => 5184,
                'name' => 'Moca',
            ),
            41 => 
            array (
                'country_id' => 178,
                'id' => 5185,
                'name' => 'Morovis',
            ),
            42 => 
            array (
                'country_id' => 178,
                'id' => 5186,
                'name' => 'Naguabo',
            ),
            43 => 
            array (
                'country_id' => 178,
                'id' => 5187,
                'name' => 'Naranjito',
            ),
            44 => 
            array (
                'country_id' => 178,
                'id' => 5188,
                'name' => 'Orocovis',
            ),
            45 => 
            array (
                'country_id' => 178,
                'id' => 5189,
                'name' => 'Patillas',
            ),
            46 => 
            array (
                'country_id' => 178,
                'id' => 5190,
                'name' => 'Peñuelas',
            ),
            47 => 
            array (
                'country_id' => 178,
                'id' => 5191,
                'name' => 'Ponce',
            ),
            48 => 
            array (
                'country_id' => 178,
                'id' => 5192,
                'name' => 'Quebradillas',
            ),
            49 => 
            array (
                'country_id' => 178,
                'id' => 5193,
                'name' => 'Rincón',
            ),
            50 => 
            array (
                'country_id' => 178,
                'id' => 5194,
                'name' => 'Río Grande',
            ),
            51 => 
            array (
                'country_id' => 178,
                'id' => 5195,
                'name' => 'Sabana Grande',
            ),
            52 => 
            array (
                'country_id' => 178,
                'id' => 5196,
                'name' => 'Salinas',
            ),
            53 => 
            array (
                'country_id' => 178,
                'id' => 5197,
                'name' => 'San Germán',
            ),
            54 => 
            array (
                'country_id' => 178,
                'id' => 5198,
                'name' => 'San Juan',
            ),
            55 => 
            array (
                'country_id' => 178,
                'id' => 5199,
                'name' => 'San Lorenzo',
            ),
            56 => 
            array (
                'country_id' => 178,
                'id' => 5200,
                'name' => 'San Sebastián',
            ),
            57 => 
            array (
                'country_id' => 178,
                'id' => 5201,
                'name' => 'Santa Isabel',
            ),
            58 => 
            array (
                'country_id' => 178,
                'id' => 5202,
                'name' => 'Toa Alta',
            ),
            59 => 
            array (
                'country_id' => 178,
                'id' => 5203,
                'name' => 'Toa Baja',
            ),
            60 => 
            array (
                'country_id' => 178,
                'id' => 5204,
                'name' => 'Trujillo Alto',
            ),
            61 => 
            array (
                'country_id' => 178,
                'id' => 5205,
                'name' => 'Utuado',
            ),
            62 => 
            array (
                'country_id' => 178,
                'id' => 5206,
                'name' => 'Vega Alta',
            ),
            63 => 
            array (
                'country_id' => 178,
                'id' => 5207,
                'name' => 'Vega Baja',
            ),
            64 => 
            array (
                'country_id' => 178,
                'id' => 5208,
                'name' => 'Vieques',
            ),
            65 => 
            array (
                'country_id' => 178,
                'id' => 5209,
                'name' => 'Villalba',
            ),
            66 => 
            array (
                'country_id' => 178,
                'id' => 5210,
                'name' => 'Yabucoa',
            ),
            67 => 
            array (
                'country_id' => 178,
                'id' => 5211,
                'name' => 'Yauco',
            ),
            68 => 
            array (
                'country_id' => 234,
                'id' => 5212,
                'name' => 'Baker Island',
            ),
            69 => 
            array (
                'country_id' => 234,
                'id' => 5213,
                'name' => 'Howland Island',
            ),
            70 => 
            array (
                'country_id' => 234,
                'id' => 5214,
                'name' => 'Jarvis Island',
            ),
            71 => 
            array (
                'country_id' => 234,
                'id' => 5215,
                'name' => 'Johnston Atoll',
            ),
            72 => 
            array (
                'country_id' => 234,
                'id' => 5216,
                'name' => 'Kingman Reef',
            ),
            73 => 
            array (
                'country_id' => 234,
                'id' => 5217,
                'name' => 'Midway Islands',
            ),
            74 => 
            array (
                'country_id' => 234,
                'id' => 5218,
                'name' => 'Navassa Island',
            ),
            75 => 
            array (
                'country_id' => 234,
                'id' => 5219,
                'name' => 'Palmyra Atoll',
            ),
            76 => 
            array (
                'country_id' => 234,
                'id' => 5220,
                'name' => 'Wake Island',
            ),
            77 => 
            array (
                'country_id' => 172,
                'id' => 5221,
                'name' => 'Asuncion',
            ),
            78 => 
            array (
                'country_id' => 207,
                'id' => 5222,
                'name' => 'Canarias',
            ),
            79 => 
            array (
                'country_id' => 207,
                'id' => 5223,
                'name' => 'Ceuta',
            ),
            80 => 
            array (
                'country_id' => 207,
                'id' => 5224,
                'name' => 'Melilla',
            ),
            81 => 
            array (
                'country_id' => 157,
                'id' => 5225,
                'name' => 'South Province',
            ),
            82 => 
            array (
                'country_id' => 157,
                'id' => 5226,
                'name' => 'North Province',
            ),
            83 => 
            array (
                'country_id' => 157,
                'id' => 5227,
                'name' => 'Loyalty Islands Province',
            ),
        ));
        
        
    }
}