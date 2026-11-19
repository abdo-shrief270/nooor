<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminCommand extends Command
{
    protected $signature = 'admin:create {email?}';
    protected $description = 'Create or promote a dashboard administrator';

    public function handle(): int
    {
        $email = $this->argument('email') ?: $this->ask('Admin email');
        $name = $this->ask('Admin name', 'مدير الموقع');
        $password = $this->secret('Password (minimum 8 characters)');

        if (! is_string($password) || mb_strlen($password) < 8) {
            $this->error('Password must contain at least 8 characters.');
            return self::FAILURE;
        }

        User::query()->updateOrCreate(['email' => $email], ['name' => $name, 'password' => Hash::make($password), 'is_admin' => true]);
        $this->info('Administrator is ready. Open /admin/login.');

        return self::SUCCESS;
    }
}
