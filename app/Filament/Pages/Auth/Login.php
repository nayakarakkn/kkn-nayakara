<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Schemas\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;

class Login extends BaseLogin
{
    public function getHeading(): string|Htmlable
    {
        return 'Selamat Datang, Admin';
    }

    public function getSubheading(): string|Htmlable|null
    {
        return 'Masukkan akun Anda untuk mengelola informasi Keranggan.';
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email')
            ->placeholder('Masukkan Email Anda')
            ->prefixIcon('heroicon-m-envelope')
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Kata Sandi')
            ->prefixIcon('heroicon-m-lock-closed')
            ->password()
            ->revealable()
            ->required()
            ->extraInputAttributes(['tabindex' => 2]);
    }
}
