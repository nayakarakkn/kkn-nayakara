<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\View\PanelsRenderHook;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(\App\Filament\Pages\Auth\Login::class)
            ->homeUrl('/')
            ->brandName('Keranggan')
            ->brandLogo(fn () => view('filament.logo'))
            ->brandLogoHeight('2.5rem')
            ->colors([
                'primary' => Color::Emerald,
            ])
            ->darkMode(false)
            ->globalSearch(false)
            ->font('Inter', provider: \Filament\FontProviders\LocalFontProvider::class)
            ->navigationGroups([
                'Ekonomi & Layanan Warga',
                'Informasi & Pengumuman',
                'Laporan & Rekapitulasi',
            ])
            ->renderHook(
                PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE,
                fn () => view('filament.login-custom-layout'),
            )
            ->renderHook(
                PanelsRenderHook::AUTH_LOGIN_FORM_AFTER,
                fn () => view('filament.login-footer'),
            )
            ->renderHook(
                PanelsRenderHook::SIDEBAR_NAV_START,
                fn () => view('filament.logo-sidebar'),
            )
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn () => view('filament.custom-css'),
            )
            ->renderHook(
                PanelsRenderHook::SIDEBAR_FOOTER,
                fn () => view('filament.sidebar-footer'),
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->resources([
                \App\Filament\Resources\Videos\VideoResource::class,
            ])
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                // Custom widgets are auto-discovered
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
