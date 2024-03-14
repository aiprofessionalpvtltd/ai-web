<?php

namespace Database\Seeders;

use App\Models\BankResidentStatus;
use App\Models\InternshipRoleLevel;
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
        $this->call([
            SettingsTableSeeder::class,
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            GenderSeeder::class,
            IndustrySeeder::class,
            JobSectorSeeder::class,
            CompanyTypeSeeder::class,
            CarrierLevelSeeder::class,
            ExperienceSeeder::class,
            QualificationSeeder::class,
            JobTypeSeeder::class,
            SkillSeeder::class,
            MaritalStatusSeeder::class,
        ]);
    }
}
