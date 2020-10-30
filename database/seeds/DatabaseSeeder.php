<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $languageCodes = [
            [
                'language_code' => 'en',
                'country_code' => 'UK'
            ],
            [
                'language_code' => 'de',
                'country_code' => 'DE'
            ],
            [
                'language_code' => 'fr',
                'country_code' => 'FR'
            ],
            [
                'language_code' => 'ru',
                'country_code' => 'RU'
            ],
            [
                'language_code' => 'es',
                'country_code' => 'ES'
            ],
            [
                'language_code' => 'pt',
                'country_code' => 'PT'
            ]
        ];
        \Illuminate\Support\Facades\DB::table('languages')->insert($languageCodes);
        factory(\App\User::class, 6)->create();
        factory(\App\Model\Course::class, 8)->create();
        factory(\App\Model\TranslationCourse::class, 30)->create();
        factory(\App\Model\File::class, 30)->create();
        factory(\App\Model\AccessReason::class, 30)->create();
        factory(\App\Model\TranslationAccessReason::class, 30)->create();
    }
}
