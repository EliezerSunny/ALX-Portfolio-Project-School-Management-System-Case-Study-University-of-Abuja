<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class PromoteStudents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:promote-students';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $students = User::all(); // Or User::where('role','student')->get();

    foreach ($students as $student) {
        // Example: increase level
        if ($student->level < 400) {
            $student->level += 100;
        }

        // Example: update academic session
        $currentSession = $student->section->section; // e.g., "2023/2024"
        [$start, $end] = explode('/', $currentSession);
        $newSession = ($start + 1) . '/' . ($end + 1);

        $student->section->section = $newSession;
        $student->save();
    }

    $this->info('Students promoted successfully!');
}


}
