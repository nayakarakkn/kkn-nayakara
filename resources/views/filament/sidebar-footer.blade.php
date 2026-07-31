@php
    $user = filament()->auth()->user();
@endphp

<div class="custom-sidebar-footer-card">
    @if($user)
        <div class="custom-user-info">
            <div class="custom-user-avatar">
                {{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}
            </div>
            <div class="custom-user-details">
                <span class="custom-user-name" title="{{ $user->name }}">{{ $user->name }}</span>
                <span class="custom-user-email" title="{{ $user->email }}">{{ $user->email }}</span>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ filament()->getLogoutUrl() }}" style="width: 100%; margin: 0;">
        @csrf
        <button type="submit" class="custom-logout-btn" title="Keluar dari akun">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            <span>Keluar (Log Out)</span>
        </button>
    </form>
</div>
