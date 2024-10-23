<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(SuperUserSetupSeeder::class);
        $this->call(PriceCalculatorSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(ActivityGroupsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(LicensesTableSeeder::class);
        $this->call(FreezonesTableSeeder::class);
        $this->call(VisaActivitiesTableSeeder::class);
        $this->call(VisaTypesTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(FreezonePagesTableSeeder::class);
        $this->call(StaticPagesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
