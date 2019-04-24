<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            array('country_code' =>  'AF', 'country_name' => 'Afghanistan'),
            array('country_code' =>  'AL', 'country_name' => 'Albania'),
            array('country_code' =>  'DZ', 'country_name' => 'Algeria'),
            array('country_code' =>  'DS', 'country_name' => 'American Samoa'),
            array('country_code' =>  'AD', 'country_name' => 'Andorra'),
            array('country_code' =>  'AO', 'country_name' => 'Angola'),
            array('country_code' =>  'AI', 'country_name' => 'Anguilla'),
            array('country_code' =>  'AQ', 'country_name' => 'Antarctica'),
            array('country_code' =>  'AG', 'country_name' => 'Antigua and Barbuda'),
            array('country_code' =>  'AR', 'country_name' => 'Argentina'),
            array('country_code' =>  'AM', 'country_name' => 'Armenia'),
            array('country_code' =>  'AW', 'country_name' => 'Aruba'),
            array('country_code' =>  'AU', 'country_name' => 'Australia'),
            array('country_code' =>  'AT', 'country_name' => 'Austria'),
            array('country_code' =>  'AZ', 'country_name' => 'Azerbaijan'),
            array('country_code' =>  'BS', 'country_name' => 'Bahamas'),
            array('country_code' =>  'BH', 'country_name' => 'Bahrain'),
            array('country_code' =>  'BD', 'country_name' => 'Bangladesh'),
            array('country_code' =>  'BB', 'country_name' => 'Barbados'),
            array('country_code' =>  'BY', 'country_name' => 'Belarus'),
            array('country_code' =>  'BE', 'country_name' => 'Belgium'),
            array('country_code' =>  'BZ', 'country_name' => 'Belize'),
            array('country_code' =>  'BJ', 'country_name' => 'Benin'),
            array('country_code' =>  'BM', 'country_name' => 'Bermuda'),
            array('country_code' =>  'BT', 'country_name' => 'Bhutan'),
            array('country_code' =>  'BO', 'country_name' => 'Bolivia'),
            array('country_code' =>  'BA', 'country_name' => 'Bosnia and Herzegovina'),
            array('country_code' =>  'BW', 'country_name' => 'Botswana'),
            array('country_code' =>  'BV', 'country_name' => 'Bouvet Island'),
            array('country_code' =>  'BR', 'country_name' => 'Brazil'),
            array('country_code' =>  'IO', 'country_name' => 'British Indian Ocean Territory'),
            array('country_code' =>  'BN', 'country_name' => 'Brunei Darussalam'),
            array('country_code' =>  'BG', 'country_name' => 'Bulgaria'),
            array('country_code' =>  'BF', 'country_name' => 'Burkina Faso'),
            array('country_code' =>  'BI', 'country_name' => 'Burundi'),
            array('country_code' =>  'KH', 'country_name' => 'Cambodia'),
            array('country_code' =>  'CM', 'country_name' => 'Cameroon'),
            array('country_code' =>  'CA', 'country_name' => 'Canada'),
            array('country_code' =>  'CV', 'country_name' => 'Cape Verde'),
            array('country_code' =>  'KY', 'country_name' => 'Cayman Islands'),
            array('country_code' =>  'CF', 'country_name' => 'Central African Republic'),
            array('country_code' =>  'TD', 'country_name' => 'Chad'),
            array('country_code' =>  'CL', 'country_name' => 'Chile'),
            array('country_code' =>  'CN', 'country_name' => 'China'),
            array('country_code' =>  'CX', 'country_name' => 'Christmas Island'),
            array('country_code' =>  'CC', 'country_name' => 'Cocos array(Keeling) Islands'),
            array('country_code' =>  'CO', 'country_name' => 'Colombia'),
            array('country_code' =>  'KM', 'country_name' => 'Comoros'),
            array('country_code' =>  'CG', 'country_name' => 'Congo'),
            array('country_code' =>  'CK', 'country_name' => 'Cook Islands'),
            array('country_code' =>  'CR', 'country_name' => 'Costa Rica'),
            array('country_code' =>  'HR', 'country_name' => 'Croatia array(Hrvatska)'),
            array('country_code' =>  'CU', 'country_name' => 'Cuba'),
            array('country_code' =>  'CY', 'country_name' => 'Cyprus'),
            array('country_code' =>  'CZ', 'country_name' => 'Czech Republic'),
            array('country_code' =>  'DK', 'country_name' => 'Denmark'),
            array('country_code' =>  'DJ', 'country_name' => 'Djibouti'),
            array('country_code' =>  'DM', 'country_name' => 'Dominica'),
            array('country_code' =>  'DO', 'country_name' => 'Dominican Republic'),
            array('country_code' =>  'TP', 'country_name' => 'East Timor'),
            array('country_code' =>  'EC', 'country_name' => 'Ecuador'),
            array('country_code' =>  'EG', 'country_name' => 'Egypt'),
            array('country_code' =>  'SV', 'country_name' => 'El Salvador'),
            array('country_code' =>  'GQ', 'country_name' => 'Equatorial Guinea'),
            array('country_code' =>  'ER', 'country_name' => 'Eritrea'),
            array('country_code' =>  'EE', 'country_name' => 'Estonia'),
            array('country_code' =>  'ET', 'country_name' => 'Ethiopia'),
            array('country_code' =>  'FK', 'country_name' => 'Falkland Islands array(Malvinas)'),
            array('country_code' =>  'FO', 'country_name' => 'Faroe Islands'),
            array('country_code' =>  'FJ', 'country_name' => 'Fiji'),
            array('country_code' =>  'FI', 'country_name' => 'Finland'),
            array('country_code' =>  'FR', 'country_name' => 'France'),
            array('country_code' =>  'FX', 'country_name' => 'France, Metropolitan'),
            array('country_code' =>  'GF', 'country_name' => 'French Guiana'),
            array('country_code' =>  'PF', 'country_name' => 'French Polynesia'),
            array('country_code' =>  'TF', 'country_name' => 'French Southern Territories'),
            array('country_code' =>  'GA', 'country_name' => 'Gabon'),
            array('country_code' =>  'GM', 'country_name' => 'Gambia'),
            array('country_code' =>  'GE', 'country_name' => 'Georgia'),
            array('country_code' =>  'DE', 'country_name' => 'Germany'),
            array('country_code' =>  'GH', 'country_name' => 'Ghana'),
            array('country_code' =>  'GI', 'country_name' => 'Gibraltar'),
            array('country_code' =>  'GK', 'country_name' => 'Guernsey'),
            array('country_code' =>  'GR', 'country_name' => 'Greece'),
            array('country_code' =>  'GL', 'country_name' => 'Greenland'),
            array('country_code' =>  'GD', 'country_name' => 'Grenada'),
            array('country_code' =>  'GP', 'country_name' => 'Guadeloupe'),
            array('country_code' =>  'GU', 'country_name' => 'Guam'),
            array('country_code' =>  'GT', 'country_name' => 'Guatemala'),
            array('country_code' =>  'GN', 'country_name' => 'Guinea'),
            array('country_code' =>  'GW', 'country_name' => 'Guinea-Bissau'),
            array('country_code' =>  'GY', 'country_name' => 'Guyana'),
            array('country_code' =>  'HT', 'country_name' => 'Haiti'),
            array('country_code' =>  'HM', 'country_name' => 'Heard and Mc Donald Islands'),
            array('country_code' =>  'HN', 'country_name' => 'Honduras'),
            array('country_code' =>  'HK', 'country_name' => 'Hong Kong'),
            array('country_code' =>  'HU', 'country_name' => 'Hungary'),
            array('country_code' =>  'IS', 'country_name' => 'Iceland'),
            array('country_code' =>  'IN', 'country_name' => 'India'),
            array('country_code' =>  'IM', 'country_name' => 'Isle of Man'),
            array('country_code' =>  'ID', 'country_name' => 'Indonesia'),
            array('country_code' =>  'IR', 'country_name' => 'Iran array(Islamic Republic of)'),
            array('country_code' =>  'IQ', 'country_name' => 'Iraq'),
            array('country_code' =>  'IE', 'country_name' => 'Ireland'),
            array('country_code' =>  'IL', 'country_name' => 'Israel'),
            array('country_code' =>  'IT', 'country_name' => 'Italy'),
            array('country_code' =>  'CI', 'country_name' => 'Ivory Coast'),
            array('country_code' =>  'JE', 'country_name' => 'Jersey'),
            array('country_code' =>  'JM', 'country_name' => 'Jamaica'),
            array('country_code' =>  'JP', 'country_name' => 'Japan'),
            array('country_code' =>  'JO', 'country_name' => 'Jordan'),
            array('country_code' =>  'KZ', 'country_name' => 'Kazakhstan'),
            array('country_code' =>  'KE', 'country_name' => 'Kenya'),
            array('country_code' =>  'KI', 'country_name' => 'Kiribati'),
            array('country_code' =>  'KP', 'country_name' => 'Korea, Democratic People\'s Republic of'),
            array('country_code' =>  'KR', 'country_name' => 'Korea, Republic of'),
            array('country_code' =>  'XK', 'country_name' => 'Kosovo'),
            array('country_code' =>  'KW', 'country_name' => 'Kuwait'),
            array('country_code' =>  'KG', 'country_name' => 'Kyrgyzstan'),
            array('country_code' =>  'LA', 'country_name' => 'Lao People\'s Democratic Republic'),
            array('country_code' =>  'LV', 'country_name' => 'Latvia'),
            array('country_code' =>  'LB', 'country_name' => 'Lebanon'),
            array('country_code' =>  'LS', 'country_name' => 'Lesotho'),
            array('country_code' =>  'LR', 'country_name' => 'Liberia'),
            array('country_code' =>  'LY', 'country_name' => 'Libyan Arab Jamahiriya'),
            array('country_code' =>  'LI', 'country_name' => 'Liechtenstein'),
            array('country_code' =>  'LT', 'country_name' => 'Lithuania'),
            array('country_code' =>  'LU', 'country_name' => 'Luxembourg'),
            array('country_code' =>  'MO', 'country_name' => 'Macau'),
            array('country_code' =>  'MK', 'country_name' => 'Macedonia'),
            array('country_code' =>  'MG', 'country_name' => 'Madagascar'),
            array('country_code' =>  'MW', 'country_name' => 'Malawi'),
            array('country_code' =>  'MY', 'country_name' => 'Malaysia'),
            array('country_code' =>  'MV', 'country_name' => 'Maldives'),
            array('country_code' =>  'ML', 'country_name' => 'Mali'),
            array('country_code' =>  'MT', 'country_name' => 'Malta'),
            array('country_code' =>  'MH', 'country_name' => 'Marshall Islands'),
            array('country_code' =>  'MQ', 'country_name' => 'Martinique'),
            array('country_code' =>  'MR', 'country_name' => 'Mauritania'),
            array('country_code' =>  'MU', 'country_name' => 'Mauritius'),
            array('country_code' =>  'TY', 'country_name' => 'Mayotte'),
            array('country_code' =>  'MX', 'country_name' => 'Mexico'),
            array('country_code' =>  'FM', 'country_name' => 'Micronesia, Federated States of'),
            array('country_code' =>  'MD', 'country_name' => 'Moldova, Republic of'),
            array('country_code' =>  'MC', 'country_name' => 'Monaco'),
            array('country_code' =>  'MN', 'country_name' => 'Mongolia'),
            array('country_code' =>  'ME', 'country_name' => 'Montenegro'),
            array('country_code' =>  'MS', 'country_name' => 'Montserrat'),
            array('country_code' =>  'MA', 'country_name' => 'Morocco'),
            array('country_code' =>  'MZ', 'country_name' => 'Mozambique'),
            array('country_code' =>  'MM', 'country_name' => 'Myanmar'),
            array('country_code' =>  'NA', 'country_name' => 'Namibia'),
            array('country_code' =>  'NR', 'country_name' => 'Nauru'),
            array('country_code' =>  'NP', 'country_name' => 'Nepal'),
            array('country_code' =>  'NL', 'country_name' => 'Netherlands'),
            array('country_code' =>  'AN', 'country_name' => 'Netherlands Antilles'),
            array('country_code' =>  'NC', 'country_name' => 'New Caledonia'),
            array('country_code' =>  'NZ', 'country_name' => 'New Zealand'),
            array('country_code' =>  'NI', 'country_name' => 'Nicaragua'),
            array('country_code' =>  'NE', 'country_name' => 'Niger'),
            array('country_code' =>  'NG', 'country_name' => 'Nigeria'),
            array('country_code' =>  'NU', 'country_name' => 'Niue'),
            array('country_code' =>  'NF', 'country_name' => 'Norfolk Island'),
            array('country_code' =>  'MP', 'country_name' => 'Northern Mariana Islands'),
            array('country_code' =>  'NO', 'country_name' => 'Norway'),
            array('country_code' =>  'OM', 'country_name' => 'Oman'),
            array('country_code' =>  'PK', 'country_name' => 'Pakistan'),
            array('country_code' =>  'PW', 'country_name' => 'Palau'),
            array('country_code' =>  'PS', 'country_name' => 'Palestine'),
            array('country_code' =>  'PA', 'country_name' => 'Panama'),
            array('country_code' =>  'PG', 'country_name' => 'Papua New Guinea'),
            array('country_code' =>  'PY', 'country_name' => 'Paraguay'),
            array('country_code' =>  'PE', 'country_name' => 'Peru'),
            array('country_code' =>  'PH', 'country_name' => 'Philippines'),
            array('country_code' =>  'PN', 'country_name' => 'Pitcairn'),
            array('country_code' =>  'PL', 'country_name' => 'Poland'),
            array('country_code' =>  'PT', 'country_name' => 'Portugal'),
            array('country_code' =>  'PR', 'country_name' => 'Puerto Rico'),
            array('country_code' =>  'QA', 'country_name' => 'Qatar'),
            array('country_code' =>  'RE', 'country_name' => 'Reunion'),
            array('country_code' =>  'RO', 'country_name' => 'Romania'),
            array('country_code' =>  'RU', 'country_name' => 'Russian Federation'),
            array('country_code' =>  'RW', 'country_name' => 'Rwanda'),
            array('country_code' =>  'KN', 'country_name' => 'Saint Kitts and Nevis'),
            array('country_code' =>  'LC', 'country_name' => 'Saint Lucia'),
            array('country_code' =>  'VC', 'country_name' => 'Saint Vincent and the Grenadines'),
            array('country_code' =>  'WS', 'country_name' => 'Samoa'),
            array('country_code' =>  'SM', 'country_name' => 'San Marino'),
            array('country_code' =>  'ST', 'country_name' => 'Sao Tome and Principe'),
            array('country_code' =>  'SA', 'country_name' => 'Saudi Arabia'),
            array('country_code' =>  'SN', 'country_name' => 'Senegal'),
            array('country_code' =>  'RS', 'country_name' => 'Serbia'),
            array('country_code' =>  'SC', 'country_name' => 'Seychelles'),
            array('country_code' =>  'SL', 'country_name' => 'Sierra Leone'),
            array('country_code' =>  'SG', 'country_name' => 'Singapore'),
            array('country_code' =>  'SK', 'country_name' => 'Slovakia'),
            array('country_code' =>  'SI', 'country_name' => 'Slovenia'),
            array('country_code' =>  'SB', 'country_name' => 'Solomon Islands'),
            array('country_code' =>  'SO', 'country_name' => 'Somalia'),
            array('country_code' =>  'ZA', 'country_name' => 'South Africa'),
            array('country_code' =>  'GS', 'country_name' => 'South Georgia South Sandwich Islands'),
            array('country_code' =>  'ES', 'country_name' => 'Spain'),
            array('country_code' =>  'LK', 'country_name' => 'Sri Lanka'),
            array('country_code' =>  'SH', 'country_name' => 'St. Helena'),
            array('country_code' =>  'PM', 'country_name' => 'St. Pierre and Miquelon'),
            array('country_code' =>  'SD', 'country_name' => 'Sudan'),
            array('country_code' =>  'SR', 'country_name' => 'Suriname'),
            array('country_code' =>  'SJ', 'country_name' => 'Svalbard and Jan Mayen Islands'),
            array('country_code' =>  'SZ', 'country_name' => 'Swaziland'),
            array('country_code' =>  'SE', 'country_name' => 'Sweden'),
            array('country_code' =>  'CH', 'country_name' => 'Switzerland'),
            array('country_code' =>  'SY', 'country_name' => 'Syrian Arab Republic'),
            array('country_code' =>  'TW', 'country_name' => 'Taiwan'),
            array('country_code' =>  'TJ', 'country_name' => 'Tajikistan'),
            array('country_code' =>  'TZ', 'country_name' => 'Tanzania, United Republic of'),
            array('country_code' =>  'TH', 'country_name' => 'Thailand'),
            array('country_code' =>  'TG', 'country_name' => 'Togo'),
            array('country_code' =>  'TK', 'country_name' => 'Tokelau'),
            array('country_code' =>  'TO', 'country_name' => 'Tonga'),
            array('country_code' =>  'TT', 'country_name' => 'Trinidad and Tobago'),
            array('country_code' =>  'TN', 'country_name' => 'Tunisia'),
            array('country_code' =>  'TR', 'country_name' => 'Turkey'),
            array('country_code' =>  'TM', 'country_name' => 'Turkmenistan'),
            array('country_code' =>  'TC', 'country_name' => 'Turks and Caicos Islands'),
            array('country_code' =>  'TV', 'country_name' => 'Tuvalu'),
            array('country_code' =>  'UG', 'country_name' => 'Uganda'),
            array('country_code' =>  'UA', 'country_name' => 'Ukraine'),
            array('country_code' =>  'AE', 'country_name' => 'United Arab Emirates'),
            array('country_code' =>  'GB', 'country_name' => 'United Kingdom'),
            array('country_code' =>  'US', 'country_name' => 'United States'),
            array('country_code' =>  'UM', 'country_name' => 'United States minor outlying islands'),
            array('country_code' =>  'UY', 'country_name' => 'Uruguay'),
            array('country_code' =>  'UZ', 'country_name' => 'Uzbekistan'),
            array('country_code' =>  'VU', 'country_name' => 'Vanuatu'),
            array('country_code' =>  'VA', 'country_name' => 'Vatican City State'),
            array('country_code' =>  'VE', 'country_name' => 'Venezuela'),
            array('country_code' =>  'VN', 'country_name' => 'Vietnam'),
            array('country_code' =>  'VG', 'country_name' => 'Virgin Islands array(British)'),
            array('country_code' =>  'VI', 'country_name' => 'Virgin Islands array(U.S.)'),
            array('country_code' =>  'WF', 'country_name' => 'Wallis and Futuna Islands'),
            array('country_code' =>  'EH', 'country_name' => 'Western Sahara'),
            array('country_code' =>  'YE', 'country_name' => 'Yemen'),
            array('country_code' =>  'ZR', 'country_name' => 'Zaire'),
            array('country_code' =>  'ZM', 'country_name' => 'Zambia'),
            array('country_code' =>  'ZW', 'country_name' => 'Zimbabwe'),
        ]);
    }
}