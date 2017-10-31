<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'code' => 'AED',
            'number' => '784',
            'decimals' => 2,
            'name' => 'United Arab Emirates Dirham',
            'symbol' => 'د.إ',
            'countries' => '196',
        ]);

        DB::table('currencies')->insert([
            'code' => 'AFN',
            'number' => '971',
            'decimals' => 2,
            'name' => 'Afghan Afghani',
            'symbol' => '؋',
            'countries' => '2',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ALL',
            'number' => '008',
            'decimals' => 2,
            'name' => 'Albanian Lek',
            'symbol' => 'Lek',
            'countries' => '3',
        ]);

        DB::table('currencies')->insert([
            'code' => 'AMD',
            'number' => '051',
            'decimals' => 2,
            'name' => 'Armenian Dram',
            'symbol' => '֏',
            'countries' => '9',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ANG',
            'number' => '532',
            'decimals' => 2,
            'name' => 'Netherlands Antillean Guilder',
            'symbol' => 'NAƒ',
            'countries' => '128',
        ]);

        DB::table('currencies')->insert([
            'code' => 'AOA',
            'number' => '973',
            'decimals' => 2,
            'name' => 'Angolan Kwanza',
            'symbol' => 'Kz',
            'countries' => '6',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ARS',
            'number' => '032',
            'decimals' => 2,
            'name' => 'Argentine Peso',
            'symbol' => '$',
            'countries' => '8',
        ]);

        DB::table('currencies')->insert([
            'code' => 'AUD',
            'number' => '036',
            'decimals' => 2,
            'name' => 'Australian Dollar',
            'symbol' => '$',
            'countries' => '11,91,126,193',
        ]);

        DB::table('currencies')->insert([
            'code' => 'AWG',
            'number' => '533',
            'decimals' => 2,
            'name' => 'Aruban Florin',
            'symbol' => 'ƒ',
            'countries' => '128',
        ]);

        DB::table('currencies')->insert([
            'code' => 'AZN',
            'number' => '944',
            'decimals' => 2,
            'name' => 'Azerbaijani Manat',
            'symbol' => '₼',
            'countries' => '13',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BAM',
            'number' => '977',
            'decimals' => 2,
            'name' => 'Bosnia and Herzegovina Convertible Mark',
            'symbol' => 'KM',
            'countries' => '24',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BBD',
            'number' => '052',
            'decimals' => 2,
            'name' => 'Barbados Dollar',
            'symbol' => '$',
            'countries' => '17',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BDT',
            'number' => '050',
            'decimals' => 2,
            'name' => 'Bangladeshi Taka',
            'symbol' => 'Bds$',
            'countries' => '16',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BGN',
            'number' => '975',
            'decimals' => 2,
            'name' => 'Bulgarian Lev',
            'symbol' => 'лв',
            'countries' => '28',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BHD',
            'number' => '048',
            'decimals' => 3,
            'name' => 'Bahraini Dinar',
            'symbol' => '.د.ب',
            'countries' => '15',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BIF',
            'number' => '108',
            'decimals' => 0,
            'name' => 'Burundian Franc',
            'symbol' => 'FBu',
            'countries' => '30',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BMD',
            'number' => '060',
            'decimals' => 2,
            'name' => 'Bermudian Dollar',
            'symbol' => '$',
            'countries' => '197',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BND',
            'number' => '096',
            'decimals' => 2,
            'name' => 'Brunei Dollar',
            'symbol' => '$',
            'countries' => '27',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BOB',
            'number' => '068',
            'decimals' => 2,
            'name' => 'Boliviano',
            'symbol' => '$b',
            'countries' => '23',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BOV',
            'number' => '984',
            'decimals' => 2,
            'name' => 'Bolivian Mvdol',
            'symbol' => '$b',
            'countries' => '23',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BRL',
            'number' => '986',
            'decimals' => 2,
            'name' => 'Brazilian Real',
            'symbol' => 'R$',
            'countries' => '26',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BSD',
            'number' => '044',
            'decimals' => 2,
            'name' => 'Bahamian Dollar',
            'symbol' => '$',
            'countries' => '14',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BTN',
            'number' => '064',
            'decimals' => 2,
            'name' => 'Bhutanese Ngultrum',
            'symbol' => 'Nu.',
            'countries' => '22',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BWP',
            'number' => '072',
            'decimals' => 2,
            'name' => 'Botswana Pula',
            'symbol' => 'P',
            'countries' => '25',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BYN',
            'number' => '933',
            'decimals' => 2,
            'name' => 'Belarusian Ruble',
            'symbol' => 'p.',
            'countries' => '18',
        ]);

        DB::table('currencies')->insert([
            'code' => 'BZD',
            'number' => '084',
            'decimals' => 2,
            'name' => 'Belize Dollar',
            'symbol' => '$',
            'countries' => '20',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CAD',
            'number' => '124',
            'decimals' => 2,
            'name' => 'Canadian Dollar',
            'symbol' => '$',
            'countries' => '33',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CDF',
            'number' => '976',
            'decimals' => 2,
            'name' => 'Congolese Franc',
            'symbol' => 'FC',
            'countries' => '47',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CHE',
            'number' => '947',
            'decimals' => 2,
            'name' => 'WIR Euro',
            'symbol' => '€',
            'countries' => '180',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CHF',
            'number' => '756',
            'decimals' => 2,
            'name' => 'Swiss Franc',
            'symbol' => 'CHF',
            'countries' => '180,103',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CHW',
            'number' => '948',
            'decimals' => 2,
            'name' => 'WIR Franc',
            'symbol' => 'CHW',
            'countries' => '180',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CLF',
            'number' => '990',
            'decimals' => 4,
            'name' => 'Unidad de Fomento',
            'symbol' => 'UF',
            'countries' => '37',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CLP',
            'number' => '152',
            'decimals' => 0,
            'name' => 'Chilean Peso',
            'symbol' => '$',
            'countries' => '37',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CNY',
            'number' => '156',
            'decimals' => 2,
            'name' => 'Chinese Yuan',
            'symbol' => '¥',
            'countries' => '38',
        ]);

        DB::table('currencies')->insert([
            'code' => 'COP',
            'number' => '170',
            'decimals' => 2,
            'name' => 'Colombian Peso',
            'symbol' => '$',
            'countries' => '39',
        ]);

        DB::table('currencies')->insert([
            'code' => 'COU',
            'number' => '970',
            'decimals' => 2,
            'name' => 'Unidad de Valor Real',
            'symbol' => 'UVR',
            'countries' => '39',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CRC',
            'number' => '188',
            'decimals' => 2,
            'name' => 'Costa Rican Colon',
            'symbol' => '₡',
            'countries' => '42',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CUC',
            'number' => '931',
            'decimals' => 2,
            'name' => 'Cuban Convertible Peso',
            'symbol' => '$',
            'countries' => '44',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CUP',
            'number' => '192',
            'decimals' => 2,
            'name' => 'Cuban Peso',
            'symbol' => '$',
            'countries' => '44',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CVE',
            'number' => '132',
            'decimals' => 0,
            'name' => 'Cape Verde Escudo',
            'symbol' => '$',
            'countries' => '34',
        ]);

        DB::table('currencies')->insert([
            'code' => 'CZK',
            'number' => '203',
            'decimals' => 2,
            'name' => 'Czech Koruna',
            'symbol' => 'Kč',
            'countries' => '46',
        ]);

        DB::table('currencies')->insert([
            'code' => 'DJF',
            'number' => '262',
            'decimals' => 0,
            'name' => 'Djiboutian Franc',
            'symbol' => 'Fdj',
            'countries' => '49',
        ]);

        DB::table('currencies')->insert([
            'code' => 'DKK',
            'number' => '208',
            'decimals' => 2,
            'name' => 'Danish Krone',
            'symbol' => 'kr',
            'countries' => '48',
        ]);

        DB::table('currencies')->insert([
            'code' => 'DOP',
            'number' => '214',
            'decimals' => 2,
            'name' => 'Dominican Peso',
            'symbol' => '$',
            'countries' => '51',
        ]);

        DB::table('currencies')->insert([
            'code' => 'DZD',
            'number' => '012',
            'decimals' => 2,
            'name' => 'Algerian Dinar',
            'symbol' => 'دج',
            'countries' => '4,152',
        ]);

        DB::table('currencies')->insert([
            'code' => 'EGP',
            'number' => '818',
            'decimals' => 2,
            'name' => 'Egyptian Pound',
            'symbol' => 'E£',
            'countries' => '54',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ERN',
            'number' => '232',
            'decimals' => 2,
            'name' => 'Eritrean Nakfa',
            'symbol' => 'ናቕፋ',
            'countries' => '57',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ETB',
            'number' => '230',
            'decimals' => 2,
            'name' => 'Ethiopian Birr',
            'symbol' => 'ብር',
            'countries' => '59',
        ]);

        DB::table('currencies')->insert([
            'code' => 'EUR',
            'number' => '978',
            'decimals' => 2,
            'name' => 'Euro',
            'symbol' => '€',
            'countries' => '5,12,19,45,58,61,62,66,68,82,84,98,104,105,112,119,121,128,146,157,165,166,173',
        ]);

        DB::table('currencies')->insert([
            'code' => 'FJD',
            'number' => '242',
            'decimals' => 2,
            'name' => 'Fiji Dollar',
            'symbol' => 'FJ$',
            'countries' => '60',
        ]);

        DB::table('currencies')->insert([
            'code' => 'FKP',
            'number' => '238',
            'decimals' => 2,
            'name' => 'Falkland Islands Pound',
            'symbol' => '£',
            'countries' => '197',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GBP',
            'number' => '826',
            'decimals' => 2,
            'name' => 'Pound Sterling',
            'symbol' => '£',
            'countries' => '197',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GEL',
            'number' => '981',
            'decimals' => 2,
            'name' => 'Georgian Lari',
            'symbol' => '₾',
            'countries' => '65',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GHS',
            'number' => '936',
            'decimals' => 2,
            'name' => 'Ghanaian Cedi',
            'symbol' => 'GH₵',
            'countries' => '67',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GIP',
            'number' => '292',
            'decimals' => 2,
            'name' => 'Gibraltar Pound',
            'symbol' => '£',
            'countries' => '197',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GMD',
            'number' => '270',
            'decimals' => 2,
            'name' => 'Gambian Dalasi',
            'symbol' => 'D',
            'countries' => '64',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GNF',
            'number' => '324',
            'decimals' => 0,
            'name' => 'Guinean Franc',
            'symbol' => 'FG',
            'countries' => '71',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GTQ',
            'number' => '320',
            'decimals' => 2,
            'name' => 'Guatemalan Quetzal',
            'symbol' => 'Q',
            'countries' => '70',
        ]);

        DB::table('currencies')->insert([
            'code' => 'GYD',
            'number' => '328',
            'decimals' => 2,
            'name' => 'Guyanese Dollar',
            'symbol' => '$',
            'countries' => '73',
        ]);

        DB::table('currencies')->insert([
            'code' => 'HKD',
            'number' => '344',
            'decimals' => 2,
            'name' => 'Hong Kong Dollar',
            'symbol' => '$',
            'countries' => '38',
        ]);

        DB::table('currencies')->insert([
            'code' => 'HNL',
            'number' => '340',
            'decimals' => 2,
            'name' => 'Honduran Lempira',
            'symbol' => 'L',
            'countries' => '75',
        ]);

        DB::table('currencies')->insert([
            'code' => 'HRK',
            'number' => '191',
            'decimals' => 2,
            'name' => 'Croatian Kuna',
            'symbol' => 'kn',
            'countries' => '43',
        ]);

        DB::table('currencies')->insert([
            'code' => 'HTG',
            'number' => '332',
            'decimals' => 2,
            'name' => 'Haitian Gourde',
            'symbol' => 'G',
            'countries' => '74',
        ]);

        DB::table('currencies')->insert([
            'code' => 'HUF',
            'number' => '348',
            'decimals' => 2,
            'name' => 'Hungarian Forint',
            'symbol' => 'Ft',
            'countries' => '76',
        ]);

        DB::table('currencies')->insert([
            'code' => 'IDR',
            'number' => '360',
            'decimals' => 2,
            'name' => 'Indonesian Rupiah',
            'symbol' => 'Rp',
            'countries' => '79',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ILS',
            'number' => '376',
            'decimals' => 2,
            'name' => 'Israeli New Shekel',
            'symbol' => '₪',
            'countries' => '83',
        ]);

        DB::table('currencies')->insert([
            'code' => 'INR',
            'number' => '356',
            'decimals' => 2,
            'name' => 'Indian Rupee',
            'symbol' => '₹',
            'countries' => '78,22',
        ]);

        DB::table('currencies')->insert([
            'code' => 'IQD',
            'number' => '368',
            'decimals' => 3,
            'name' => 'Iraqi Dinar',
            'symbol' => 'ع.د',
            'countries' => '81',
        ]);

        DB::table('currencies')->insert([
            'code' => 'IRR',
            'number' => '364',
            'decimals' => 2,
            'name' => 'Iranian Rial',
            'symbol' => '﷼',
            'countries' => '80',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ISK',
            'number' => '352',
            'decimals' => 0,
            'name' => 'Icelandic Króna',
            'symbol' => 'kr',
            'countries' => '77',
        ]);

        DB::table('currencies')->insert([
            'code' => 'JMD',
            'number' => '388',
            'decimals' => 2,
            'name' => 'Jamaican Dollar',
            'symbol' => '$',
            'countries' => '86',
        ]);

        DB::table('currencies')->insert([
            'code' => 'JOD',
            'number' => '400',
            'decimals' => 3,
            'name' => 'Jordanian Dinar',
            'symbol' => 'ع.د',
            'countries' => '88',
        ]);

        DB::table('currencies')->insert([
            'code' => 'JPY',
            'number' => '392',
            'decimals' => 0,
            'name' => 'Japanese Yen',
            'symbol' => '¥',
            'countries' => '87',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KES',
            'number' => '404',
            'decimals' => 2,
            'name' => 'Kenyan Shilling',
            'symbol' => 'KSh',
            'countries' => '90',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KGS',
            'number' => '417',
            'decimals' => 2,
            'name' => 'Kyrgyzstani Som',
            'symbol' => 'лв',
            'countries' => '96',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KHR',
            'number' => '116',
            'decimals' => 2,
            'name' => 'Cambodian Riel',
            'symbol' => '៛',
            'countries' => '31',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KMF',
            'number' => '174',
            'decimals' => 0,
            'name' => 'Comoro Franc',
            'symbol' => 'CF',
            'countries' => '40',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KPW',
            'number' => '408',
            'decimals' => 2,
            'name' => 'North Korean Won',
            'symbol' => '₩',
            'countries' => '92',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KRW',
            'number' => '410',
            'decimals' => 0,
            'name' => 'South Korean Won',
            'symbol' => '₩',
            'countries' => '93',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KWD',
            'number' => '414',
            'decimals' => 3,
            'name' => 'Kuwaiti Dinar',
            'symbol' => 'د.ك',
            'countries' => '95',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KYD',
            'number' => '136',
            'decimals' => 2,
            'name' => 'Cayman Islands Dollar',
            'symbol' => '$',
            'countries' => '197',
        ]);

        DB::table('currencies')->insert([
            'code' => 'KZT',
            'number' => '398',
            'decimals' => 2,
            'name' => 'Kazakhstani Tenge',
            'symbol' => '₸',
            'countries' => '89',
        ]);

        DB::table('currencies')->insert([
            'code' => 'LAK',
            'number' => '418',
            'decimals' => 2,
            'name' => 'Lao Kip',
            'symbol' => '₭',
            'countries' => '97',
        ]);

        DB::table('currencies')->insert([
            'code' => 'LBP',
            'number' => '422',
            'decimals' => 2,
            'name' => '	Lebanese Pound',
            'symbol' => 'ل.ل.',
            'countries' => '99',
        ]);

        DB::table('currencies')->insert([
            'code' => 'LKR',
            'number' => '144',
            'decimals' => 2,
            'name' => '	Sri Lankan Rupee',
            'symbol' => 'රු',
            'countries' => '174',
        ]);

        DB::table('currencies')->insert([
            'code' => 'LRD',
            'number' => '430',
            'decimals' => 2,
            'name' => 'Liberian Dollar',
            'symbol' => 'L$',
            'countries' => '101',
        ]);

        DB::table('currencies')->insert([
            'code' => 'LSL',
            'number' => '426',
            'decimals' => 2,
            'name' => 'Lesotho Loti',
            'symbol' => 'L',
            'countries' => '100',
        ]);

        DB::table('currencies')->insert([
            'code' => 'LYD',
            'number' => '434',
            'decimals' => 3,
            'name' => '	Libyan Dinar',
            'symbol' => 'ل.د',
            'countries' => '102',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MAD',
            'number' => '504',
            'decimals' => 2,
            'name' => 'Moroccan Dirham',
            'symbol' => 'MAD',
            'countries' => '122',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MDL',
            'number' => '498',
            'decimals' => 2,
            'name' => 'Moldovan Leu',
            'symbol' => 'Leu',
            'countries' => '118',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MGA',
            'number' => '969',
            'decimals' => 1,
            'name' => 'Malagasy Ariary',
            'symbol' => 'Ar',
            'countries' => '107',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MKD',
            'number' => '807',
            'decimals' => 2,
            'name' => 'Macedonian Denar',
            'symbol' => 'ден',
            'countries' => '106',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MMK',
            'number' => '104',
            'decimals' => 2,
            'name' => 'Myanmar Kyat',
            'symbol' => 'K',
            'countries' => '124',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MNT',
            'number' => '496',
            'decimals' => 2,
            'name' => 'Mongolian Tögrög',
            'symbol' => '₮',
            'countries' => '120',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MOP',
            'number' => '446',
            'decimals' => 2,
            'name' => 'Macanese Pataca',
            'symbol' => 'MOP$',
            'countries' => '38',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MRO',
            'number' => '478',
            'decimals' => 1,
            'name' => 'Mauritanian Ouguiya',
            'symbol' => 'UM',
            'countries' => '114',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MUR',
            'number' => '480',
            'decimals' => 2,
            'name' => 'Mauritian rupee',
            'symbol' => '₨',
            'countries' => '115',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MVR',
            'number' => '462',
            'decimals' => 2,
            'name' => 'Maldivian Rufiyaa',
            'symbol' => 'Rf',
            'countries' => '110',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MWK',
            'number' => '454',
            'decimals' => 2,
            'name' => 'Malawian Kwacha',
            'symbol' => 'MK',
            'countries' => '108',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MXN',
            'number' => '484',
            'decimals' => 2,
            'name' => 'Mexican Peso',
            'symbol' => '$',
            'countries' => '116',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MXV',
            'number' => '979',
            'decimals' => 2,
            'name' => 'Mexican Unidad de Inversion',
            'symbol' => 'UDI',
            'countries' => '116',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MYR',
            'number' => '458',
            'decimals' => 2,
            'name' => 'Malaysian Ringgit',
            'symbol' => 'RM',
            'countries' => '109',
        ]);

        DB::table('currencies')->insert([
            'code' => 'MZN',
            'number' => '943',
            'decimals' => 2,
            'name' => 'Mozambican Metical',
            'symbol' => 'MT',
            'countries' => '123',
        ]);

        DB::table('currencies')->insert([
            'code' => 'NAD',
            'number' => '516',
            'decimals' => 2,
            'name' => 'Namibian Dollar',
            'symbol' => 'N$',
            'countries' => '125',
        ]);

        DB::table('currencies')->insert([
            'code' => 'NGN',
            'number' => '566',
            'decimals' => 2,
            'name' => 'Nigerian Naira',
            'symbol' => '₦',
            'countries' => '132',
        ]);

        DB::table('currencies')->insert([
            'code' => 'NIO',
            'number' => '558',
            'decimals' => 2,
            'name' => 'Nicaraguan Córdoba',
            'symbol' => 'C$',
            'countries' => '130',
        ]);

        DB::table('currencies')->insert([
            'code' => 'NOK',
            'number' => '578',
            'decimals' => 2,
            'name' => 'Norwegian Krone',
            'symbol' => 'kr',
            'countries' => '135',
        ]);

        DB::table('currencies')->insert([
            'code' => 'NPR',
            'number' => '524',
            'decimals' => 2,
            'name' => 'Nepalese Rupee',
            'symbol' => 'रु',
            'countries' => '127',
        ]);

        DB::table('currencies')->insert([
            'code' => 'NZD',
            'number' => '554',
            'decimals' => 2,
            'name' => 'New Zealand Dollar',
            'symbol' => '$',
            'countries' => '129,41,133',
        ]);

        DB::table('currencies')->insert([
            'code' => 'OMR',
            'number' => '512',
            'decimals' => 3,
            'name' => 'Omani Rial',
            'symbol' => '﷼',
            'countries' => '136',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PAB',
            'number' => '590',
            'decimals' => 2,
            'name' => 'Panamanian Balboa',
            'symbol' => 'B/.',
            'countries' => '140',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PEN',
            'number' => '604',
            'decimals' => 2,
            'name' => 'Peruvian Sol',
            'symbol' => 'S/',
            'countries' => '143',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PGK',
            'number' => '598',
            'decimals' => 2,
            'name' => 'Papua New Guinean Kina',
            'symbol' => 'K',
            'countries' => '141',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PHP',
            'number' => '608',
            'decimals' => 2,
            'name' => '	Philippine Peso',
            'symbol' => '₱',
            'countries' => '144',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PKR',
            'number' => '586',
            'decimals' => 2,
            'name' => 'Pakistani Rupee',
            'symbol' => '₨',
            'countries' => '137',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PLN',
            'number' => '985',
            'decimals' => 2,
            'name' => 'Polish Złoty',
            'symbol' => 'zł',
            'countries' => '145',
        ]);

        DB::table('currencies')->insert([
            'code' => 'PYG',
            'number' => '600',
            'decimals' => 0,
            'name' => 'Paraguayan Guaraní',
            'symbol' => '₲',
            'countries' => '142',
        ]);

        DB::table('currencies')->insert([
            'code' => 'QAR',
            'number' => '634',
            'decimals' => 2,
            'name' => 'Qatari Riyal',
            'symbol' => 'ر.ق',
            'countries' => '147',
        ]);

        DB::table('currencies')->insert([
            'code' => 'RON',
            'number' => '946',
            'decimals' => 2,
            'name' => 'Romanian Leu',
            'symbol' => 'Leu',
            'countries' => '149',
        ]);

        DB::table('currencies')->insert([
            'code' => 'RSD',
            'number' => '941',
            'decimals' => 2,
            'name' => 'Serbian Dinar',
            'symbol' => 'дин',
            'countries' => '161',
        ]);

        DB::table('currencies')->insert([
            'code' => 'RUB',
            'number' => '643',
            'decimals' => 2,
            'name' => 'Russian Ruble',
            'symbol' => '₽',
            'countries' => '150',
        ]);

        DB::table('currencies')->insert([
            'code' => 'RWF',
            'number' => '646',
            'decimals' => 0,
            'name' => 'Rwandan Franc',
            'symbol' => 'FRw',
            'countries' => '151',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SAR',
            'number' => '682',
            'decimals' => 2,
            'name' => 'Saudi Riyal',
            'symbol' => 'ر.س',
            'countries' => '159',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SBD',
            'number' => '090',
            'decimals' => 2,
            'name' => 'Solomon Islands Dollar',
            'symbol' => 'SI$',
            'countries' => '167',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SCR',
            'number' => '690',
            'decimals' => 2,
            'name' => 'Seychelles Rupee',
            'symbol' => 'SR',
            'countries' => '162',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SDG',
            'number' => '938',
            'decimals' => 2,
            'name' => 'Sudanese Pound',
            'symbol' => 'ج.س',
            'countries' => '175',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SEK',
            'number' => '752',
            'decimals' => 2,
            'name' => 'Swedish Krona',
            'symbol' => 'kr',
            'countries' => '179',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SGD',
            'number' => '702',
            'decimals' => 2,
            'name' => 'Singapore Dollar',
            'symbol' => 'S$',
            'countries' => '164',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SHP',
            'number' => '654',
            'decimals' => 2,
            'name' => 'Saint Helena Pound',
            'symbol' => 'kr',
            'countries' => '197',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SLL',
            'number' => '694',
            'decimals' => 2,
            'name' => 'Sierra Leonean Leone',
            'symbol' => 'Le',
            'countries' => '163',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SOS',
            'number' => '706',
            'decimals' => 2,
            'name' => 'Somali Shilling',
            'symbol' => 'Sh.So',
            'countries' => '168',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SRD',
            'number' => '968',
            'decimals' => 2,
            'name' => 'Surinamese Dollar',
            'symbol' => '$',
            'countries' => '177',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SSP',
            'number' => '728',
            'decimals' => 2,
            'name' => 'South Sudanese Pound',
            'symbol' => 'SSP',
            'countries' => '172',
        ]);

        DB::table('currencies')->insert([
            'code' => 'STD',
            'number' => '678',
            'decimals' => 2,
            'name' => 'São Tomé and Príncipe Dobra',
            'symbol' => 'Db',
            'countries' => '158',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SVC',
            'number' => '222',
            'decimals' => 2,
            'name' => 'Salvadoran Colón',
            'symbol' => '₡',
            'countries' => '55',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SYP',
            'number' => '760',
            'decimals' => 2,
            'name' => 'Syrian Pound',
            'symbol' => '£S',
            'countries' => '181',
        ]);

        DB::table('currencies')->insert([
            'code' => 'SZL',
            'number' => '748',
            'decimals' => 2,
            'name' => 'Swazi Lilangeni',
            'symbol' => 'L',
            'countries' => '178',
        ]);

        DB::table('currencies')->insert([
            'code' => 'THB',
            'number' => '764',
            'decimals' => 2,
            'name' => 'Thai Baht',
            'symbol' => '฿',
            'countries' => '185',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TJS',
            'number' => '972',
            'decimals' => 2,
            'name' => 'Tajikistani Somoni',
            'symbol' => 'TJS',
            'countries' => '183',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TMT',
            'number' => '934',
            'decimals' => 2,
            'name' => 'Turkmenistan Manat',
            'symbol' => 'T',
            'countries' => '192',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TND',
            'number' => '788',
            'decimals' => 3,
            'name' => 'Tunisian Dinar',
            'symbol' => 'د.ت',
            'countries' => '190',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TOP',
            'number' => '776',
            'decimals' => 2,
            'name' => 'Tongan Paʻanga',
            'symbol' => 'T$',
            'countries' => '187',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TRY',
            'number' => '949',
            'decimals' => 2,
            'name' => 'Turkish Lira',
            'symbol' => '₺',
            'countries' => '191',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TTD',
            'number' => '780',
            'decimals' => 2,
            'name' => 'Trinidad and Tobago Dollar',
            'symbol' => '$',
            'countries' => '189',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TWD',
            'number' => '901',
            'decimals' => 2,
            'name' => 'New Taiwan Dollar',
            'symbol' => 'NT$',
            'countries' => '182',
        ]);

        DB::table('currencies')->insert([
            'code' => 'TZS',
            'number' => '834',
            'decimals' => 2,
            'name' => 'Tanzanian Shilling',
            'symbol' => 'TSh',
            'countries' => '184',
        ]);

        DB::table('currencies')->insert([
            'code' => 'UAH',
            'number' => '980',
            'decimals' => 2,
            'name' => 'Ukrainian Hryvnia',
            'symbol' => '₴',
            'countries' => '195',
        ]);

        DB::table('currencies')->insert([
            'code' => 'UGX',
            'number' => '800',
            'decimals' => 0,
            'name' => 'Ugandan shilling',
            'symbol' => 'USh',
            'countries' => '194',
        ]);

        DB::table('currencies')->insert([
            'code' => 'USD',
            'number' => '840',
            'decimals' => 2,
            'name' => 'United States Dollar',
            'symbol' => '$',
            'countries' => '198,17,53,55,74,113,117,138,140,52',
        ]);

        DB::table('currencies')->insert([
            'code' => 'USN',
            'number' => '997',
            'decimals' => 2,
            'name' => 'United States Dollar (Next Day)',
            'symbol' => '$',
            'countries' => '198',
        ]);

        DB::table('currencies')->insert([
            'code' => 'UYI',
            'number' => '940',
            'decimals' => 0,
            'name' => 'Uruguay Peso en Unidades Indexadas',
            'symbol' => 'URUIURUI',
            'countries' => '199',
        ]);

        DB::table('currencies')->insert([
            'code' => 'UYU',
            'number' => '858',
            'decimals' => 2,
            'name' => 'Uruguayan Peso',
            'symbol' => '$',
            'countries' => '199',
        ]);

        DB::table('currencies')->insert([
            'code' => 'UZS',
            'number' => '860',
            'decimals' => 2,
            'name' => 'Uzbekistan Som',
            'symbol' => 'UZS',
            'countries' => '200',
        ]);

        DB::table('currencies')->insert([
            'code' => 'VEF',
            'number' => '937',
            'decimals' => 2,
            'name' => 'Venezuelan Bolívar',
            'symbol' => 'Bs.F.',
            'countries' => '203',
        ]);

        DB::table('currencies')->insert([
            'code' => 'VND',
            'number' => '704',
            'decimals' => 0,
            'name' => 'Vietnamese Dồng',
            'symbol' => '₫',
            'countries' => '204',
        ]);

        DB::table('currencies')->insert([
            'code' => 'VUV',
            'number' => '548',
            'decimals' => 0,
            'name' => 'Vanuatu Vatu',
            'symbol' => 'VT',
            'countries' => '201',
        ]);

        DB::table('currencies')->insert([
            'code' => 'WST',
            'number' => '882',
            'decimals' => 2,
            'name' => 'Samoan Tala',
            'symbol' => 'WS$',
            'countries' => '156',
        ]);

        DB::table('currencies')->insert([
            'code' => 'XAF',
            'number' => '950',
            'decimals' => 0,
            'name' => 'Central African CFA Franc',
            'symbol' => 'FCFA',
            'countries' => '32,35,148,36,56,63',
        ]);

        DB::table('currencies')->insert([
            'code' => 'XCD',
            'number' => '951',
            'decimals' => 2,
            'name' => 'East Caribbean Dollar',
            'symbol' => '$',
            'countries' => '7,50,69,153,154,155',
        ]);

        DB::table('currencies')->insert([
            'code' => 'XOF',
            'number' => '952',
            'decimals' => 0,
            'name' => 'West African CFA Franc',
            'symbol' => '$',
            'countries' => '21,29,85,72,111,131,160,186',
        ]);

        DB::table('currencies')->insert([
            'code' => 'XPF',
            'number' => '953',
            'decimals' => 0,
            'name' => 'CFP Franc',
            'symbol' => '$',
            'countries' => '62',
        ]);

        DB::table('currencies')->insert([
            'code' => 'YER',
            'number' => '886',
            'decimals' => 2,
            'name' => 'Yemeni Rial',
            'symbol' => '﷼',
            'countries' => '205',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ZAR',
            'number' => '710',
            'decimals' => 2,
            'name' => 'South African Rand',
            'symbol' => 'R',
            'countries' => '170',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ZMW',
            'number' => '967',
            'decimals' => 2,
            'name' => 'Zambian Kwacha',
            'symbol' => 'ZK',
            'countries' => '206',
        ]);

        DB::table('currencies')->insert([
            'code' => 'ZWL',
            'number' => '932',
            'decimals' => 2,
            'name' => 'Zimbabwean Dollar',
            'symbol' => '$',
            'countries' => '207',
        ]);
    }
}
