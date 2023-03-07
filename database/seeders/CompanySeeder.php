<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => 'ООО СанТехПром',
                'inn' => '769879348578',
                'info' => 'Возможно они делают что-то',
                'ceo' => 'Васян Пупкин',
                'address' => 'Санкт-Петербург, ул. Ленина',
                'phone' => '86704968'
            ],
            [
                'name' => 'ИП Жэб',
                'inn' => '040985978659',
                'info' => 'Среда мои чюваки',
                'ceo' => 'Костян Уткин',
                'address' => 'Санкт-Петербург, ул. Легушковая',
                'phone' => '8709584584'
            ],
            [
                'name' => 'Редан',
                'inn' => '769879348578',
                'info' => 'Просто аниме любят ребята позитивные',
                'ceo' => 'Петр Овсянкин',
                'address' => 'Санкт-Петербург, ул. Кавайная',
                'phone' => '86704968'
            ],
        ];

        foreach ($companies as $company)
        {
            Company::create($company);
        }
    }
}
