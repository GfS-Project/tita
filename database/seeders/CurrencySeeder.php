<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            ['name' => 'Afghani', 'code' => 'AFN', 'symbol' => '؋', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lek', 'code' => 'ALL', 'symbol' => 'Lek', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Netherlands Antillian Guilder', 'code' => 'ANG', 'symbol' => 'ƒ', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Argentine Peso', 'code' => 'ARS', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Australian Dollar', 'code' => 'AUD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aruban Guilder', 'code' => 'AWG', 'symbol' => 'ƒ', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Azerbaijanian Manat', 'code' => 'AZN', 'symbol' => 'ман', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Convertible Marks', 'code' => 'BAM', 'symbol' => 'KM', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Barbados Dollar', 'code' => 'BBD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bangladeshi Taka', 'code' => 'BDT', 'symbol' => '৳', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bulgarian Lev', 'code' => 'BGN', 'symbol' => 'лв', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bermudian Dollar', 'code' => 'BMD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brunei Dollar', 'code' => 'BND', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BOV Boliviano Mvdol', 'code' => 'BOB', 'symbol' => '$b', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brazilian Real', 'code' => 'BRL', 'symbol' => 'R$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bahamian Dollar', 'code' => 'BSD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pula', 'code' => 'BWP', 'symbol' => 'P', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belarussian Ruble', 'code' => 'BYR', 'symbol' => 'p.', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belize Dollar', 'code' => 'BZD', 'symbol' => 'BZ$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Canadian Dollar', 'code' => 'CAD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swiss Franc', 'code' => 'CHF', 'symbol' => 'CHF', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CLF Chilean Peso Unidades de fomento', 'code' => 'CLP', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yuan Renminbi', 'code' => 'CNY', 'symbol' => '¥', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'COU Colombian Peso Unidad de Valor Real', 'code' => 'COP', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Costa Rican Colon', 'code' => 'CRC', 'symbol' => '₡', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CUC Cuban Peso Peso Convertible', 'code' => 'CUP', 'symbol' => '₱', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Czech Koruna', 'code' => 'CZK', 'symbol' => 'Kč', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Danish Krone', 'code' => 'DKK', 'symbol' => 'kr', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dominican Peso', 'code' => 'DOP', 'symbol' => 'RD$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Egyptian Pound', 'code' => 'EGP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fiji Dollar', 'code' => 'FJD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Falkland Islands Pound', 'code' => 'FKP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pound Sterling', 'code' => 'GBP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gibraltar Pound', 'code' => 'GIP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Quetzal', 'code' => 'GTQ', 'symbol' => 'Q', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Guyana Dollar', 'code' => 'GYD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hong Kong Dollar', 'code' => 'HKD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lempira', 'code' => 'HNL', 'symbol' => 'L', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Croatian Kuna', 'code' => 'HRK', 'symbol' => 'kn', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Forint', 'code' => 'HUF', 'symbol' => 'Ft', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rupiah', 'code' => 'IDR', 'symbol' => 'Rp', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'New Israeli Sheqel', 'code' => 'ILS', 'symbol' => '₪', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Iranian Rial', 'code' => 'IRR', 'symbol' => '﷼', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Iceland Krona', 'code' => 'ISK', 'symbol' => 'kr', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jamaican Dollar', 'code' => 'JMD', 'symbol' => 'J$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yen', 'code' => 'JPY', 'symbol' => '¥', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Som', 'code' => 'KGS', 'symbol' => 'лв', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Riel', 'code' => 'KHR', 'symbol' => '៛', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'North Korean Won', 'code' => 'KPW', 'symbol' => '₩', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Won', 'code' => 'KRW', 'symbol' => '₩', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cayman Islands Dollar', 'code' => 'KYD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tenge', 'code' => 'KZT', 'symbol' => 'лв', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kip', 'code' => 'LAK', 'symbol' => '₭', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lebanese Pound', 'code' => 'LBP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sri Lanka Rupee', 'code' => 'LKR', 'symbol' => '₨', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Liberian Dollar', 'code' => 'LRD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lithuanian Litas', 'code' => 'LTL', 'symbol' => 'Lt', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Latvian Lats', 'code' => 'LVL', 'symbol' => 'Ls', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denar', 'code' => 'MKD', 'symbol' => 'ден', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tugrik', 'code' => 'MNT', 'symbol' => '₮', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mauritius Rupee', 'code' => 'MUR', 'symbol' => '₨', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MXV Mexican Peso Mexican Unidad de Inversion (UDI)', 'code' => 'MXN', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Malaysian Ringgit', 'code' => 'MYR', 'symbol' => 'RM', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Metical', 'code' => 'MZN', 'symbol' => 'MT', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Naira', 'code' => 'NGN', 'symbol' => '₦', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cordoba Oro', 'code' => 'NIO', 'symbol' => 'C$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Norwegian Krone', 'code' => 'NOK', 'symbol' => 'kr', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nepalese Rupee', 'code' => 'NPR', 'symbol' => '₨', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'New Zealand Dollar', 'code' => 'NZD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rial Omani', 'code' => 'OMR', 'symbol' => '﷼', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'USD Balboa US Dollar', 'code' => 'PAB', 'symbol' => 'B/.', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nuevo Sol', 'code' => 'PEN', 'symbol' => 'S/.', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Philippine Peso', 'code' => 'PHP', 'symbol' => 'Php', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pakistan Rupee', 'code' => 'PKR', 'symbol' => '₨', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Zloty', 'code' => 'PLN', 'symbol' => 'zł', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Guarani', 'code' => 'PYG', 'symbol' => 'Gs', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Qatari Rial', 'code' => 'QAR', 'symbol' => '﷼', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Serbian Dinar', 'code' => 'RSD', 'symbol' => 'Дин.', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Russian Ruble', 'code' => 'RUB', 'symbol' => '₽', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rwanda Franc', 'code' => 'RWF', 'symbol' => '₣', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Saudi Riyal', 'code' => 'SAR', 'symbol' => '﷼', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Solomon Islands Dollar', 'code' => 'SBD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seychelles Rupee', 'code' => 'SCR', 'symbol' => '₨', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sudanese Pound', 'code' => 'SDG', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swedish Krona', 'code' => 'SEK', 'symbol' => 'kr', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Singapore Dollar', 'code' => 'SGD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Saint Helena Pound', 'code' => 'SHP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Leone', 'code' => 'SLL', 'symbol' => 'Le', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Somali Shilling', 'code' => 'SOS', 'symbol' => 'S', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Surinam Dollar', 'code' => 'SRD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dobra', 'code' => 'STD', 'symbol' => 'Db', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'El Salvador Colon', 'code' => 'SVC', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Syrian Pound', 'code' => 'SYP', 'symbol' => '£', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lilangeni', 'code' => 'SZL', 'symbol' => 'L', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Baht', 'code' => 'THB', 'symbol' => '฿', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Somoni', 'code' => 'TJS', 'symbol' => 'ЅМ', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Manat', 'code' => 'TMT', 'symbol' => 'T', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tunisian Dinar', 'code' => 'TND', 'symbol' => 'د.ت', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pa\'anga', 'code' => 'TOP', 'symbol' => 'T$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Turkish Lira', 'code' => 'TRY', 'symbol' => '₺', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trinidad and Tobago Dollar', 'code' => 'TTD', 'symbol' => 'TT$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'New Taiwan Dollar', 'code' => 'TWD', 'symbol' => 'NT$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tanzanian Shilling', 'code' => 'TZS', 'symbol' => 'TSh', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hryvnia', 'code' => 'UAH', 'symbol' => '₴', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uganda Shilling', 'code' => 'UGX', 'symbol' => 'USh', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'US Dollar', 'code' => 'USD', 'symbol' => '$', 'status' => 1, 'is_default' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'USN US Dollar (Next day)', 'code' => 'USN', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uruguay Peso en Unidades Indexadas', 'code' => 'UYI', 'symbol' => '$U', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Peso Uruguayo', 'code' => 'UYU', 'symbol' => '$U', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uzbekistan Sum', 'code' => 'UZS', 'symbol' => 'лв', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Venezuelan Bolivar', 'code' => 'VEF', 'symbol' => 'Bs', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dong', 'code' => 'VND', 'symbol' => '₫', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vatu', 'code' => 'VUV', 'symbol' => 'Vt', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tala', 'code' => 'WST', 'symbol' => 'WS$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CFA Franc BEAC', 'code' => 'XAF', 'symbol' => 'FCFA', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'East Caribbean Dollar', 'code' => 'XCD', 'symbol' => '$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SDR (Special Drawing Rights)', 'code' => 'XDR', 'symbol' => 'XDR', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CFA Franc BCEAO', 'code' => 'XOF', 'symbol' => 'CFA', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Silver', 'code' => 'XPD', 'symbol' => 'XPD', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gold', 'code' => 'XAU', 'symbol' => 'XAU', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bond Markets Unit European Composite Unit (EURCO)', 'code' => 'XBA', 'symbol' => 'XBA', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bond Markets Unit European Monetary Unit (E.M.U.-6)', 'code' => 'XBB', 'symbol' => 'XBB', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bond Markets Unit European Unit of Account 9 (E.U.A.-9)', 'code' => 'XBC', 'symbol' => 'XBC', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bond Markets Unit European Unit of Account 17 (E.U.A.-17)', 'code' => 'XBD', 'symbol' => 'XBD', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CFP Franc', 'code' => 'XPF', 'symbol' => '₣', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yemeni Rial', 'code' => 'YER', 'symbol' => '﷼', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rand', 'code' => 'ZAR', 'symbol' => 'R', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Zambian Kwacha', 'code' => 'ZMK', 'symbol' => 'ZK', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Zimbabwe Dollar', 'code' => 'ZWD', 'symbol' => 'Z$', 'status' => 1, 'is_default' => 0, 'created_at' => now(), 'updated_at' => now()],
        ];

        Currency::insert($currencies);
    }
}
