<style>
    /* Full Page Background */
    body::before {
        content: '';
        position: fixed;
        inset: 0;
        background-image: url('{{ asset('images/bg_uin.jpeg') }}');
        background-size: cover;
        background-position: center;
        z-index: -2;
    }
    
    /* Soft Blur Overlay matching front-end slate theme */
    body::after {
        content: '';
        position: fixed;
        inset: 0;
        background-color: rgba(15, 23, 42, 0.65); /* slate-900 with soft opacity */
        backdrop-filter: blur(8px);
        z-index: -1;
    }
    
    /* Simple Page layout container */
    .fi-simple-layout {
        max-width: 100% !important;
        padding: 1rem !important;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 100%;
    }

    /* Card Container Base */
    .fi-simple-main-ctn {
        background: #ffffff !important;
        border-radius: 1.5rem !important;
        overflow: hidden !important;
        box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.15) !important;
        border: 1px solid #e5e7eb !important;
    }

    /* Split Card Container (Desktop >= 850px) */
    @media (min-width: 850px) {
        .fi-simple-layout {
            padding: 3rem !important;
        }

        .fi-simple-main-ctn {
            display: grid !important;
            grid-template-columns: 1.1fr 1fr !important;
            height: 460px !important;
            min-height: 460px !important;
            max-width: 920px !important;
            width: 100%;
            margin: 0 auto;
        }

        .fi-simple-main-ctn::before {
            display: none !important;
        }

        .login-left-custom-banner {
            grid-column: 1;
            position: relative;
            height: 100%;
            min-height: 100%;
            border-radius: 1.5rem 0 0 1.5rem !important;
            overflow: hidden;
            background-image: linear-gradient(to top, rgba(15,23,42,0.92) 0%, rgba(5,150,105,0.45) 60%, transparent 100%), url('{{ asset('images/bg_uin.jpeg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: flex-end;
            padding: 2.5rem;
        }

        .login-left-content {
            color: #ffffff;
        }

        .login-uin-badge {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 0.65rem;
        }

        .uin-logo-img {
            width: 1.85rem;
            height: 1.85rem;
            object-fit: contain;
            background-color: #ffffff;
            border-radius: 0.5rem;
            padding: 0.15rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.8);
            flex-shrink: 0;
        }

        .uin-badge-text {
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }

        .login-brand-title {
            font-size: 1.35rem;
            font-weight: 600;
            color: #ffffff;
            letter-spacing: -0.01em;
            line-height: 1.25;
        }

        .login-brand-subtitle {
            font-size: 0.775rem;
            font-weight: 500;
            color: #a7f3d0;
            margin-top: 0.2rem;
        }

        .fi-simple-main-ctn > main {
            grid-column: 2;
            padding: 1.5rem 2.5rem !important;
            border-radius: 0 1.5rem 1.5rem 0 !important;
        }
    }

    /* Right Form Panel Base */
    .fi-simple-main-ctn > main {
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        background: #ffffff !important;
        box-shadow: none !important;
        width: 100%;
    }

    /* Mobile Responsive (< 850px) - Clean & Instant Login (Zero-Scroll) */
    @media (max-width: 849px) {
        .fi-simple-layout {
            padding: 1rem 0.75rem !important;
        }

        .fi-simple-main-ctn {
            display: flex !important;
            flex-direction: column !important;
            max-width: 420px !important;
            width: 100% !important;
            height: auto !important;
            min-height: auto !important;
            margin: 0 auto !important;
            padding: 0 !important;
            border-radius: 1.5rem !important;
            overflow: hidden !important;
        }

        .login-left-custom-banner,
        .fi-simple-main-ctn::before {
            display: none !important;
        }

        .fi-simple-main-ctn > main {
            padding: 2.25rem 1.5rem !important;
            border-radius: 1.5rem !important;
            width: 100% !important;
            margin: 0 !important;
        }

        .fi-simple-main-ctn header {
            margin-top: 0 !important;
        }
    }

    .fi-simple-main {
        box-shadow: none !important;
    }

    /* Logo Center */
    .fi-logo {
        margin: 0 auto 1.25rem auto !important;
        display: flex;
        justify-content: center;
        height: auto !important;
    }
    
    .fi-simple-main-ctn header {
        text-align: center !important;
        margin-bottom: 0.85rem !important;
    }

    /* Form Headings */
    .fi-simple-main-ctn h1 {
        font-size: 1.35rem !important; 
        font-weight: 600 !important; 
        letter-spacing: -0.01em !important; 
        color: #0f172a !important; 
        margin-bottom: 0.35rem !important;
    }
    
    .fi-simple-main-ctn p.text-sm,
    .fi-simple-main-ctn .fi-text {
        color: #64748b !important;
        font-size: 0.875rem !important;
    }

    /* Form Inputs matching front-end theme */
    .fi-simple-main-ctn .fi-input-wrp {
        border-radius: 0.75rem !important;
        box-shadow: none !important;
        border: 1px solid #e5e7eb !important;
        background-color: #ffffff !important;
        padding: 0.2rem 0.5rem !important;
        transition: all 0.2s ease !important;
    }

    .fi-simple-main-ctn .fi-input-wrp:hover {
        border-color: #d1d5db !important;
    }

    .fi-simple-main-ctn .fi-input-wrp:focus-within {
        background-color: #ffffff !important;
        border-color: #10b981 !important;
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.12) !important;
    }
    
    .fi-simple-main-ctn .fi-input-wrp input {
        background: transparent !important;
        color: #0f172a !important;
        font-weight: 500 !important;
    }
    
    .fi-simple-main-ctn form .grid {
        gap: 0.85rem !important;
    }

    .fi-simple-main-ctn .fi-fo-field-wrp {
        margin-bottom: 0.25rem !important;
    }
    
    /* Submit Button - Solid Emerald initially, White with Emerald text on Hover */
    .fi-simple-main-ctn .fi-btn {
        margin-top: 0.75rem !important;
        padding: 0.6rem 1.25rem !important;
        font-size: 0.875rem !important;
        font-weight: 600 !important;
        color: #ffffff !important;
        background-color: #059669 !important;
        border: 1px solid #059669 !important;
        border-radius: 0.65rem !important;
        cursor: pointer;
        box-shadow: none !important;
        transition: all 0.2s ease !important;
        width: 100% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    .fi-simple-main-ctn .fi-btn:hover {
        color: #047857 !important;
        background-color: #ffffff !important;
        border-color: #059669 !important;
        transform: translateY(-1px);
    }

    /* Kembali ke Beranda Soft Pill Button */
    .fi-simple-main-ctn footer a,
    .fi-simple-main-ctn a[href="/"] {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 0.4rem !important;
        padding: 0.45rem 1.15rem !important;
        font-size: 0.8rem !important;
        font-weight: 600 !important;
        color: #047857 !important;
        background-color: #ecfdf5 !important;
        border: 1px solid #a7f3d0 !important;
        border-radius: 9999px !important;
        text-decoration: none !important;
        transition: all 0.2s ease !important;
        margin-top: 0.75rem !important;
    }

    .fi-simple-main-ctn footer a:hover,
    .fi-simple-main-ctn a[href="/"]:hover {
        background-color: #059669 !important;
        color: #ffffff !important;
        border-color: #059669 !important;
        transform: translateY(-1px);
    }

    /* Universal Non-Selectable & Default Cursor Rules for Login Page */
    *:not(input):not(textarea):not(select):not([contenteditable="true"]):not(option) {
        user-select: none !important;
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
    }

    *:not(input):not(textarea):not(select):not([contenteditable="true"]):not(option):not(a):not(button):not([role="button"]):not(label):not(svg):not(path) {
        cursor: default !important;
    }

    input, textarea, select {
        cursor: text !important;
        user-select: text !important;
        -webkit-user-select: text !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mainCtn = document.querySelector('.fi-simple-main-ctn');
        if (mainCtn && !document.querySelector('.login-left-custom-banner')) {
            const banner = document.createElement('div');
            banner.className = 'login-left-custom-banner';
            banner.innerHTML = `
                <div class="login-left-content">
                    <div class="login-uin-badge">
                        <img src="{{ asset('images/logo_tangsel.png') }}" alt="Logo Kota Tangerang Selatan" class="uin-logo-img">
                        <span class="uin-badge-text">KKN NAYAKARA</span>
                    </div>
                    <div class="login-brand-title">KERANGGAN</div>
                    <div class="login-brand-subtitle">Kelurahan Keranggan</div>
                </div>
            `;
            mainCtn.insertBefore(banner, mainCtn.firstChild);
        }
    });
</script>
