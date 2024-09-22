<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aland Islands',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Albania',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Algeria',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'American Samoa',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Andorra',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Angola',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Anguilla',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Antarctica',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Antigua and Barbuda',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Argentina',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Armenia',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Aruba',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Australia',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Austria',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Azerbaijan',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'The Bahamas',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bahrain',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bangladesh',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Barbados',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Belarus',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Belgium',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Belize',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Benin',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Bermuda',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Bhutan',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bolivia',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Bosnia and Herzegovina',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Botswana',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Bouvet Island',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Brazil',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'British Indian Ocean Territory',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Brunei',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Bulgaria',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Burkina Faso',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Burundi',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Cambodia',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Cameroon',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Canada',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Cape Verde',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Cayman Islands',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Central African Republic',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Chad',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Chile',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'China',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Christmas Island',
            ),
            46 => 
            array (
                'id' => 47,
            'name' => 'Cocos (Keeling) Islands',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Colombia',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Comoros',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Congo',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Democratic Republic of the Congo',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Cook Islands',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Costa Rica',
            ),
            53 => 
            array (
                'id' => 54,
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Croatia',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Cuba',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Cyprus',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Czech Republic',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Denmark',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Djibouti',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Dominica',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Dominican Republic',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Timor-Leste',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Ecuador',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Egypt',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'El Salvador',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Equatorial Guinea',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Eritrea',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Estonia',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Ethiopia',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Falkland Islands',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Faroe Islands',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Fiji Islands',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Finland',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'France',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'French Guiana',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'French Polynesia',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'French Southern Territories',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Gabon',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Gambia The',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Georgia',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Germany',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ghana',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Gibraltar',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Greece',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Greenland',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Grenada',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Guadeloupe',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Guam',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Guatemala',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Guernsey and Alderney',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Guinea',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Guinea-Bissau',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Guyana',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Haiti',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Heard Island and McDonald Islands',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Honduras',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Hong Kong S.A.R.',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Hungary',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Iceland',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'India',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Indonesia',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Iran',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Iraq',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Ireland',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Israel',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Italy',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Jamaica',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Japan',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Jersey',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Jordan',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Kazakhstan',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Kenya',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Kiribati',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'North Korea',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'South Korea',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Kuwait',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Kyrgyzstan',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Laos',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Latvia',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Lebanon',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Lesotho',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Liberia',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Libya',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Liechtenstein',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Lithuania',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Luxembourg',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Macau S.A.R.',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'North Macedonia',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Madagascar',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Malawi',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Malaysia',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Maldives',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Mali',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Malta',
            ),
            135 => 
            array (
                'id' => 136,
            'name' => 'Man (Isle of)',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Marshall Islands',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Martinique',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Mauritania',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Mauritius',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Mayotte',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Mexico',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Micronesia',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Moldova',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Monaco',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Mongolia',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Montenegro',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Montserrat',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Morocco',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Mozambique',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Myanmar',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Namibia',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Nauru',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Nepal',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Bonaire, Sint Eustatius and Saba',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Netherlands',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'New Caledonia',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'New Zealand',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Nicaragua',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Niger',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Nigeria',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Niue',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Norfolk Island',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Northern Mariana Islands',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Norway',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Oman',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Pakistan',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Palau',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Palestinian Territory Occupied',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Panama',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Papua New Guinea',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Paraguay',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Peru',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Philippines',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Pitcairn Island',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Poland',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Portugal',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Puerto Rico',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Qatar',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Reunion',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Romania',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Russia',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Rwanda',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Saint Helena',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Saint Kitts and Nevis',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Saint Lucia',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Saint Pierre and Miquelon',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Saint Vincent and the Grenadines',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Saint-Barthelemy',
            ),
            189 => 
            array (
                'id' => 190,
            'name' => 'Saint-Martin (French part)',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Samoa',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'San Marino',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Sao Tome and Principe',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Saudi Arabia',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Senegal',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Serbia',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Seychelles',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Sierra Leone',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Singapore',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Slovakia',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Slovenia',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Solomon Islands',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Somalia',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'South Africa',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'South Georgia',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'South Sudan',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Spain',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Sri Lanka',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Sudan',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Suriname',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Svalbard and Jan Mayen Islands',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Eswatini',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Sweden',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Switzerland',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Syria',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Taiwan',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Tajikistan',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Tanzania',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Thailand',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Togo',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Tokelau',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Tonga',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Trinidad and Tobago',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Tunisia',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Turkey',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Turkmenistan',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Turks and Caicos Islands',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Tuvalu',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Uganda',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Ukraine',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'United Arab Emirates',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'United Kingdom',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'United States',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'United States Minor Outlying Islands',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Uruguay',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Uzbekistan',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Vanuatu',
            ),
            237 => 
            array (
                'id' => 238,
            'name' => 'Vatican City State (Holy See)',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Venezuela',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Vietnam',
            ),
            240 => 
            array (
                'id' => 241,
            'name' => 'Virgin Islands (British)',
            ),
            241 => 
            array (
                'id' => 242,
            'name' => 'Virgin Islands (US)',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Wallis and Futuna Islands',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Western Sahara',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Yemen',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Zambia',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Zimbabwe',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Kosovo',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Curaçao',
            ),
            249 => 
            array (
                'id' => 250,
            'name' => 'Sint Maarten (Dutch part)',
            ),
        ));
        
        
    }
}