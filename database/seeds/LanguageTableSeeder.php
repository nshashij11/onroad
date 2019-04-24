<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
        	array('name' =>  'English', 'short' => 'en'),
			array('name' =>  'German', 'short' => 'de'),
			array('name' =>  'French', 'short' => 'fr'),
			array('name' =>  'Dutch', 'short' => 'nl'),
			array('name' =>  'Italian', 'short' => 'it'),
			array('name' =>  'Spanish', 'short' => 'es'),
			array('name' =>  'Polish', 'short' => 'pl'),
			array('name' =>  'Russian', 'short' => 'ru'),
			array('name' =>  'Japanese', 'short' => 'ja'),
			array('name' =>  'Portuguese', 'short' => 'pt'),
			array('name' =>  'Swedish', 'short' => 'sv'),
			array('name' =>  'Chinese', 'short' => 'zh'),
			array('name' =>  'Catalan', 'short' => 'ca'),
			array('name' =>  'Ukrainian', 'short' => 'uk'),
			array('name' =>  'Norwegian (BokmÃ¥l)', 'short' => 'no'),
			array('name' =>  'Finnish', 'short' => 'fi'),
			array('name' =>  'Vietnamese', 'short' => 'vi'),
			array('name' =>  'Czech', 'short' => 'cs'),
			array('name' =>  'Hungarian', 'short' => 'hu'),
			array('name' =>  'Korean', 'short' => 'ko'),
			array('name' =>  'Indonesian', 'short' => 'id'),
			array('name' =>  'Turkish', 'short' => 'tr'),
			array('name' =>  'Romanian', 'short' => 'ro'),
			array('name' =>  'Persian', 'short' => 'fa'),
			array('name' =>  'Arabic', 'short' => 'ar'),
			array('name' =>  'Danish', 'short' => 'da'),
			array('name' =>  'Esperanto', 'short' => 'eo'),
			array('name' =>  'Serbian', 'short' => 'sr'),
			array('name' =>  'Lithuanian', 'short' => 'lt'),
			array('name' =>  'Slovak', 'short' => 'sk'),
			array('name' =>  'Malay', 'short' => 'ms'),
			array('name' =>  'Hebrew', 'short' => 'he'),
			array('name' =>  'Bulgarian', 'short' => 'bg'),
			array('name' =>  'Slovenian', 'short' => 'sl'),
			array('name' =>  'VolapÃ¼k', 'short' => 'vo'),
			array('name' =>  'Kazakh', 'short' => 'kk'),
			array('name' =>  'Waray-Waray', 'short' => 'war'),
			array('name' =>  'Basque', 'short' => 'eu'),
			array('name' =>  'Croatian', 'short' => 'hr'),
			array('name' =>  'Hindi', 'short' => 'hi'),
			array('name' =>  'Estonian', 'short' => 'et'),
			array('name' =>  'Azerbaijani', 'short' => 'az'),
			array('name' =>  'Galician', 'short' => 'gl'),
			array('name' =>  'Simple English', 'short' => 'simple'),
			array('name' =>  'Norwegian (Nynorsk)', 'short' => 'nn'),
			array('name' =>  'Thai', 'short' => 'th'),
			array('name' =>  'Newar / Nepal Bhasa', 'short' => 'new'),
			array('name' =>  'Greek', 'short' => 'el'),
			array('name' =>  'Aromanian', 'short' => 'roa-rup'),
			array('name' =>  'Latin', 'short' => 'la'),
			array('name' =>  'Occitan', 'short' => 'oc'),
			array('name' =>  'Tagalog', 'short' => 'tl'),
			array('name' =>  'Haitian', 'short' => 'ht'),
			array('name' =>  'Macedonian', 'short' => 'mk'),
			array('name' =>  'Georgian', 'short' => 'ka'),
			array('name' =>  'Serbo-Croatian', 'short' => 'sh'),
			array('name' =>  'Telugu', 'short' => 'te'),
			array('name' =>  'Piedmontese', 'short' => 'pms'),
			array('name' =>  'Cebuano', 'short' => 'ceb'),
			array('name' =>  'Tamil', 'short' => 'ta'),
			array('name' =>  'Belarusian (TaraÅ¡kievica)', 'short' => 'be-x-old'),
			array('name' =>  'Breton', 'short' => 'br'),
			array('name' =>  'Latvian', 'short' => 'lv'),
			array('name' =>  'Javanese', 'short' => 'jv'),
			array('name' =>  'Albanian', 'short' => 'sq'),
			array('name' =>  'Belarusian', 'short' => 'be'),
			array('name' =>  'Marathi', 'short' => 'mr'),
			array('name' =>  'Welsh', 'short' => 'cy'),
			array('name' =>  'Luxembourgish', 'short' => 'lb'),
			array('name' =>  'Icelandic', 'short' => 'is'),
			array('name' =>  'Bosnian', 'short' => 'bs'),
			array('name' =>  'Yoruba', 'short' => 'yo'),
			array('name' =>  'Malagasy', 'short' => 'mg'),
			array('name' =>  'Aragonese', 'short' => 'an'),
			array('name' =>  'Bishnupriya Manipuri', 'short' => 'bpy'),
			array('name' =>  'Lombard', 'short' => 'lmo'),
			array('name' =>  'West Frisian', 'short' => 'fy'),
			array('name' =>  'Bengali', 'short' => 'bn'),
			array('name' =>  'Ido', 'short' => 'io'),
			array('name' =>  'Swahili', 'short' => 'sw'),
			array('name' =>  'Gujarati', 'short' => 'gu'),
			array('name' =>  'Malayalam', 'short' => 'ml'),
			array('name' =>  'Western Panjabi', 'short' => 'pnb'),
			array('name' =>  'Afrikaans', 'short' => 'af'),
			array('name' =>  'Low Saxon', 'short' => 'nds'),
			array('name' =>  'Sicilian', 'short' => 'scn'),
			array('name' =>  'Urdu', 'short' => 'ur'),
			array('name' =>  'Kurdish', 'short' => 'ku'),
			array('name' =>  'Cantonese', 'short' => 'zh-yue'),
			array('name' =>  'Armenian', 'short' => 'hy'),
			array('name' =>  'Quechua', 'short' => 'qu'),
			array('name' =>  'Sundanese', 'short' => 'su'),
			array('name' =>  'Nepali', 'short' => 'ne'),
			array('name' =>  'Zazaki', 'short' => 'diq'),
			array('name' =>  'Asturian', 'short' => 'ast'),
			array('name' =>  'Tatar', 'short' => 'tt'),
			array('name' =>  'Neapolitan', 'short' => 'nap'),
			array('name' =>  'Irish', 'short' => 'ga'),
			array('name' =>  'Chuvash', 'short' => 'cv'),
			array('name' =>  'Samogitian', 'short' => 'bat-smg'),
			array('name' =>  'Walloon', 'short' => 'wa'),
			array('name' =>  'Amharic', 'short' => 'am'),
			array('name' =>  'Kannada', 'short' => 'kn'),
			array('name' =>  'Alemannic', 'short' => 'als'),
			array('name' =>  'Buginese', 'short' => 'bug'),
			array('name' =>  'Burmese', 'short' => 'my'),
			array('name' =>  'Interlingua', 'short' => 'ia'),
        ]);
    }
}
