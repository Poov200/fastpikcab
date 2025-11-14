<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateMissingCityBlades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blades:create-missing-cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create specific city-to-city Blade files for all cities.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allCities = [
            'Ariyalur', 'Arani', 'Arakkonam', 'Tirupati', 'Chengalpattu', 'Chennai', 'Coimbatore', 'Cuddalore', 'Dharmapuri',
            'Dindigul', 'Erode', 'Hosur', 'Kanchipuram', 'Karur', 'Krishnagiri', 'Madurai', 'Mayiladuthurai', 'Nagapattinam',
            'Nagercoil', 'Namakkal', 'Perambalur', 'Puducherry', 'Pudukkottai', 'Ramanathapuram', 'Ranipet', 'Salem',
            'Sivakasi', 'Tenkasi', 'Thanjavur', 'Thiruvarur', 'Thoothukudi', 'Tirunelveli', 'Tiruppur', 'Trichy', 'Vellore',
            'Villupuram', 'Virudhunagar', 'Karaikal', 'Kochi', 'tiruvannamalai', 'Kerala'
        ];

        $targetCities = ['Ariyalur'];

        $created = 0;
        $checked = 0;
        $skipped = 0;

        $this->info("Checking for missing city-to-city Blade files for specified cities...\n");

        foreach ($allCities as $sourceCity) {
            // Trim whitespace
            $sourceCityTrimmed = trim($sourceCity);

            // Define possible directory names: PascalCase and lowercase
            $sourceDirNamePascal = Str::studly($sourceCityTrimmed);
            $sourceDirNameLower = Str::lower($sourceCityTrimmed);

            $sourceDir = resource_path("views/{$sourceDirNamePascal}");

            // Check for both PascalCase and lowercase directories
            if (!File::exists($sourceDir)) {
                $sourceDir = resource_path("views/{$sourceDirNameLower}");
                if (!File::exists($sourceDir)) {
                    $this->comment("Directory not found: " . resource_path("views/{$sourceDirNamePascal}") . " or " . resource_path("views/{$sourceDirNameLower}") . " - skipping");
                    continue;
                }
            }

            // Get a list of all existing file names in the directory, converted to lowercase for case-insensitive checking
            $existingFiles = collect(File::files($sourceDir))->map(function ($file) {
                return strtolower($file->getFilename());
            })->toArray();

            // Loop through the same target cities for the destination
            foreach ($targetCities as $destinationCity) {
                // Skip creating a file for a city to itself
                if ($sourceCity === $destinationCity) {
                    continue;
                }

                $checked++;

                // Generate the expected filename in lowercase for a consistent check
                $fileName = Str::lower($sourceCityTrimmed) . '-to-' . Str::lower(trim($destinationCity)) . '.blade.php';
                $fullPath = $sourceDir . '/' . $fileName;

                // Check if the file already exists (using the lowercase filename)
                if (in_array($fileName, $existingFiles)) {
                    $this->line("✓ EXISTS: {$fileName} in " . basename($sourceDir));
                    $skipped++;
                    continue;
                }

                // Create the missing Blade file
                $stubContent = "@extends('layouts.app')\n@section('content')\n<h1>" . ucfirst($sourceCityTrimmed) . " to " . ucfirst(trim($destinationCity)) . " Taxi Service</h1>\n@endsection";
                File::put($fullPath, $stubContent);

                $this->info("✓ CREATED: {$fileName} in " . basename($sourceDir));
                $created++;
            }
        }

        $this->info("\n--- Summary ---");
        $this->info("Total file combinations checked: {$checked}");
        $this->info("Files already existed: {$skipped}");
        $this->info("New files created: {$created}");

        if ($created === 0) {
            $this->comment("\nAll required Blade files already exist. No new files were created.");
        } else {
            $this->info("\nSuccessfully created {$created} missing Blade file(s).");
        }

        return 0;
    }
}
