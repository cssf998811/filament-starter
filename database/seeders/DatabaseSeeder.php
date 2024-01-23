<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@sun.net.tw',
            'password' => Hash::make('admin'),
        ]);

        Post::factory()
            ->count(25)
            ->create();

        Notification::make()
            ->title('Welcome to Filament')
            ->body('You are ready to start building your application.')
            ->success()
            ->sendToDatabase($user);

        // 調用 Artisan 命令賦予超級管理員角色
        Artisan::call('shield:super-admin', ['--user' => 1]);
        // Generate Permissions and/or Policies for Filament
        Artisan::call('shield:generate', ['--all' => true]);

        // 可以檢查命令的輸出（可選）
        $output = Artisan::output();
        $this->command->info($output);
    }
}
