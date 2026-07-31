<style>
    /* 1. Global Page Background - Soft Neutral Slate */
    body {
        background-color: #f8fafc !important;
    }
    
    .fi-main {
        background: transparent !important;
    }

    /* 2. Responsive Topbar & Sidebar for Desktop vs Mobile */
    @media (min-width: 1024px) {
        .fi-topbar {
            display: none !important;
        }

        .fi-sidebar {
            top: 0 !important;
            height: 100vh !important;
        }

        .fi-main-ctn {
            padding-top: 0 !important;
        }
    }

    @media (max-width: 1023px) {
        .fi-topbar {
            display: flex !important;
            background: #ffffff !important;
            border-bottom: 1px solid #e2e8f0 !important;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
        }

        .fi-sidebar-header {
            display: flex !important;
        }

        /* Hide search input in mobile topbar */
        .fi-topbar .fi-global-search-field,
        .fi-topbar-search-field,
        .fi-global-search,
        .fi-topbar form,
        .fi-topbar .fi-input-wrp,
        .fi-topbar input {
            display: none !important;
        }
    }

    /* 3. Sidebar - Clean Left Navigation */
    .fi-sidebar {
        background: #ffffff !important;
        border-right: 1px solid #e2e8f0 !important;
        box-shadow: none !important;
        z-index: 40 !important;
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    .fi-sidebar::-webkit-scrollbar,
    .fi-sidebar-nav::-webkit-scrollbar,
    .fi-sidebar-nav-groups::-webkit-scrollbar,
    .fi-sidebar *::-webkit-scrollbar {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
    }

    .fi-sidebar-nav,
    .fi-sidebar-nav-groups {
        scrollbar-width: none !important;
        -ms-overflow-style: none !important;
    }

    .fi-main-ctn {
        padding-top: 0 !important;
    }
    
    /* Hide Native Sidebar Header */
    .fi-sidebar-header {
        display: none !important;
    }

    .fi-sidebar-nav {
        padding-top: 0 !important;
    }

    /* Reduce group spacing so all menu items fit 100% comfortably without scrollbar */
    .fi-sidebar-group {
        margin-bottom: 0.15rem !important;
    }

    .fi-sidebar-group-label {
        font-size: 0.725rem !important;
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    /* 4. Sidebar Menu Items - Full Rounded Pill Card (Like Reference Design) */
    .fi-sidebar-item-active > a, .fi-sidebar-item-active > button {
        background: #ecfdf5 !important; /* emerald-50 */
        color: #047857 !important; /* emerald-700 */
        font-weight: 700 !important;
        border-left: none !important;
        box-shadow: none !important;
        border-radius: 0.75rem !important;
        margin-left: 0.75rem !important;
        margin-right: 0.75rem !important;
        padding-top: 0.45rem !important;
        padding-bottom: 0.45rem !important;
    }
    
    .fi-sidebar-item-active > a svg, .fi-sidebar-item-active > button svg {
        color: #059669 !important;
    }
    
    .fi-sidebar-item-active > a::after {
        display: none !important;
    }
    
    .fi-sidebar-item > a, .fi-sidebar-item > button {
        transition: all 0.2s ease !important;
        color: #475569 !important; /* slate-600 */
        font-weight: 500 !important;
        border-left: none !important;
        border-radius: 0.75rem !important;
        margin-right: 0.75rem !important;
        margin-left: 0.75rem !important;
        padding-top: 0.45rem !important;
        padding-bottom: 0.45rem !important;
    }

    .fi-sidebar-item > a:hover:not(.fi-sidebar-item-active > a), .fi-sidebar-item > button:hover:not(.fi-sidebar-item-active > button) {
        background: #f1f5f9 !important;
        color: #0f172a !important;
    }

    /* 6. Dashboard Cards, Tables & Containers */
    .fi-ta-ctn, 
    .fi-wi-stats-overview-stat,
    .fi-section,
    .fi-card {
        background: #ffffff !important;
        box-shadow: none !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 0.75rem !important;
        transition: all 0.2s ease !important;
    }

    .fi-ta-ctn:hover, .fi-wi-stats-overview-stat:hover {
        border-color: #d1d5db !important;
    }

    /* Table Header Styling */
    .fi-ta-header, 
    .fi-ta-table thead {
        background-color: #f9fafb !important;
        border-bottom: 1px solid #e5e7eb !important;
    }

    .fi-ta-table th {
        color: #475569 !important;
        font-weight: 600 !important;
        font-size: 0.75rem !important;
        letter-spacing: 0.04em;
    }

    .fi-ta-table td {
        color: #1e293b !important;
        font-weight: 500 !important;
    }

    /* Table Row Hover State */
    .fi-ta-row {
        transition: background-color 0.15s ease !important;
    }

    .fi-ta-row:hover {
        background-color: #f8fafc !important;
    }

    /* Table Selection Header Bar */
    .fi-ta-selection-header {
        background-color: #f9fafb !important;
        border-bottom: 1px solid #e5e7eb !important;
        padding: 0.65rem 1rem !important;
        border-radius: 0.75rem 0.75rem 0 0 !important;
    }

    /* Sembunyikan 'Pilih semua' dan 'Batalkan semua pilihan' & Baris 'Filter aktif' */
    .fi-ta-selection-indicator-actions-ctn,
    .fi-ta-filter-indicators,
    .fi-ta-filter-indicators-ctn,
    .fi-ta-active-filters-ctn,
    [class*="filter-indicator"],
    [class*="active-filters"] {
        display: none !important;
    }

    /* Table Toolbar Layout: Responsive Search & Action Buttons */
    .fi-ta-header-toolbar {
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        gap: 0.75rem !important;
    }

    @media (max-width: 640px) {
        .fi-ta-header-toolbar {
            flex-direction: column-reverse !important;
            align-items: stretch !important;
            gap: 0.75rem !important;
        }

        .fi-ta-header-toolbar > div {
            width: 100% !important;
            margin: 0 !important;
        }

        .fi-ta-search-field,
        .fi-ta-header-toolbar .fi-input-wrp {
            width: 100% !important;
            min-width: 100% !important;
        }
    }

    /* Search & Filter container -> Paling KIRI */
    .fi-ta-header-toolbar > div:nth-child(2),
    .fi-ta-header-toolbar > div:last-child {
        order: 1 !important;
        margin-left: 0 !important;
        margin-right: auto !important;
    }

    /* Actions / Tindakan container -> Paling KANAN */
    .fi-ta-header-toolbar > div:nth-child(1),
    .fi-ta-header-toolbar > div:first-child {
        order: 2 !important;
        margin-left: auto !important;
        margin-right: 0 !important;
    }

    /* Kolom Search - Soft Thin Border */
    .fi-global-search-field,
    .fi-global-search,
    .fi-topbar .fi-input-wrp,
    .fi-ta-search-field,
    .fi-ta-header-toolbar .fi-input-wrp {
        background-color: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 0.65rem !important;
        box-shadow: none !important;
        transition: all 0.2s ease !important;
        min-width: 240px !important;
    }

    .fi-global-search-field:focus-within,
    .fi-global-search:focus-within,
    .fi-topbar .fi-input-wrp:focus-within,
    .fi-ta-search-field:focus-within,
    .fi-ta-header-toolbar .fi-input-wrp:focus-within {
        border-color: #10b981 !important;
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.1) !important;
    }

    .fi-global-search input,
    .fi-topbar input,
    .fi-ta-search-field input,
    .fi-ta-header-toolbar input,
    .fi-input-wrp input,
    .fi-input {
        color: #1f2937 !important;
        font-weight: 500 !important;
        font-size: 0.875rem !important;
        border: none !important;
        background: transparent !important;
        box-shadow: none !important;
        outline: none !important;
        --tw-ring-shadow: none !important;
    }

    .fi-global-search input::placeholder,
    .fi-topbar input::placeholder,
    .fi-ta-search-field input::placeholder,
    .fi-ta-header-toolbar input::placeholder,
    .fi-input-wrp input::placeholder {
        color: #9ca3af !important;
        font-weight: 400 !important;
    }

    .fi-global-search svg,
    .fi-topbar .fi-input-wrp svg,
    .fi-ta-search-field svg,
    .fi-ta-header-toolbar .fi-input-wrp svg {
        color: #059669 !important;
        width: 1.15rem !important;
        height: 1.15rem !important;
    }

    /* 7. Action Buttons & Dropdowns Styling */
    .fi-btn {
        font-weight: 500 !important;
        letter-spacing: 0 !important;
        border-radius: 0.6rem !important;
        box-shadow: none !important;
        transition: all 0.2s ease !important;
    }

    /* Action Trigger Button (e.g. "Tindakan") */
    .fi-dropdown-trigger .fi-btn,
    .fi-ta-actions .fi-btn,
    .fi-ta-bulk-actions-trigger .fi-btn {
        background-color: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        color: #374151 !important;
        box-shadow: none !important;
    }

    .fi-dropdown-trigger .fi-btn:hover,
    .fi-ta-actions .fi-btn:hover,
    .fi-ta-bulk-actions-trigger .fi-btn:hover {
        background-color: #f9fafb !important;
        border-color: #d1d5db !important;
        color: #111827 !important;
        box-shadow: none !important;
    }

    /* Dropdown Floating Panel Box - Soft Minimal Elevation */
    .fi-dropdown-panel {
        background-color: #ffffff !important;
        border: 1px solid #e5e7eb !important;
        border-radius: 0.75rem !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05) !important;
        padding: 0.35rem !important;
    }

    /* Sembunyikan Tombol Column Manager / Column Toggle (Ikon 3 garis vertikal) di Tabel Admin */
    .fi-ta-col-toggle-btn,
    .fi-ta-column-manager-trigger,
    .fi-ta-col-manager-trigger,
    [class*="column-toggle"],
    [class*="column-manager"],
    .fi-ta-header-toolbar button[title*="kolom"],
    .fi-ta-header-toolbar button[title*="column"] {
        display: none !important;
    }

    /* Column Manager Popup Cleanup & Reset Link Fix */
    .fi-ta-column-manager-header {
        padding: 0.5rem 0.75rem !important;
        border-bottom: 1px solid #f3f4f6 !important;
    }

    .fi-ta-column-manager-reset-action,
    .fi-ta-column-manager-header a,
    .fi-ta-column-manager-header button,
    .fi-ta-column-manager-header [class*="reset"] {
        border: none !important;
        box-shadow: none !important;
        color: #dc2626 !important;
        font-weight: 500 !important;
        text-decoration: none !important;
        outline: none !important;
    }

    .fi-ta-column-manager-reset-action:hover,
    .fi-ta-column-manager-header a:hover,
    .fi-ta-column-manager-header button:hover {
        color: #be123c !important;
        background: transparent !important;
        text-decoration: underline !important;
    }

    /* Dropdown Items (e.g., "Hapus yang dipilih") */
    .fi-dropdown-list-item {
        border-radius: 0.5rem !important;
        padding: 0.5rem 0.75rem !important;
        font-weight: 500 !important;
        transition: all 0.15s ease !important;
        box-shadow: none !important;
        border: none !important;
    }

    .fi-dropdown-list-item:hover {
        background-color: #f3f4f6 !important;
    }

    /* Danger Action Item in Dropdown (Hapus) */
    .fi-dropdown-list-item-color-danger,
    .fi-dropdown-list-item[class*="danger"] {
        color: #dc2626 !important;
    }

    .fi-dropdown-list-item-color-danger:hover,
    .fi-dropdown-list-item[class*="danger"]:hover {
        background-color: #fef2f2 !important;
        color: #e11d48 !important;
    }

    /* Form Inputs - Sleek, Soft & High Contrast without Thick Borders */
    .fi-fo-field-wrp-label label {
        color: #1e293b !important;
        font-weight: 600 !important;
        font-size: 0.875rem !important;
    }

    .fi-input-wrp,
    textarea,
    select,
    .fi-select-input {
        background-color: #f8fafc !important; /* Soft Slate-50 background so fields stand out naturally */
        border: 1px solid #cbd5e1 !important; /* Thin 1px Slate-300 border */
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.02) !important;
        border-radius: 0.6rem !important;
        color: #0f172a !important;
        font-weight: 500 !important;
        transition: all 0.2s ease !important;
    }

    .fi-input-wrp:hover,
    textarea:hover,
    select:hover {
        border-color: #94a3b8 !important;
        background-color: #ffffff !important;
    }

    .fi-input-wrp:focus-within,
    textarea:focus,
    select:focus {
        border-color: #059669 !important;
        box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.12) !important;
        background-color: #ffffff !important;
    }

    /* File Upload Dropzone Styling */
    .fi-fo-file-upload,
    .filepond--panel-root {
        border: 1px dashed #cbd5e1 !important;
        background-color: #f8fafc !important;
        border-radius: 0.65rem !important;
        transition: all 0.2s ease !important;
    }

    .fi-fo-file-upload:hover {
        border-color: #059669 !important;
        background-color: #ecfdf5 !important;
    }

    /* 8. Primary Buttons (Solid Emerald initially, White with Emerald text on Hover) */
    .fi-btn-color-primary {
        background-color: #059669 !important;
        color: #ffffff !important;
        border: 1px solid #059669 !important;
        font-weight: 600 !important;
        border-radius: 0.6rem !important;
        box-shadow: none !important;
        transition: all 0.2s ease !important;
    }
    .fi-btn-color-primary:hover {
        background-color: #ffffff !important;
        color: #047857 !important;
        border-color: #059669 !important;
        transform: translateY(-1px);
        box-shadow: none !important;
    }

    /* 9. Hide topbar user menu & dark mode switcher & pagination text */
    .fi-user-menu,
    .fi-theme-switcher,
    .fi-ta-pagination-overview {
        display: none !important;
    }
    
    /* 10. Custom Sidebar Footer Card & Logout Button - Slim & Light */
    .custom-sidebar-footer-card {
        margin: 0.5rem;
        padding: 0.65rem;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 0.75rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        box-shadow: none;
        transition: all 0.2s ease;
    }

    .custom-sidebar-footer-card:hover {
        border-color: #d1d5db;
    }

    .custom-visit-website-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        width: 100%;
        padding: 0.5rem 0.75rem;
        font-size: 0.8rem;
        font-weight: 600;
        color: #047857 !important;
        background-color: #ecfdf5 !important;
        border: 1px solid #a7f3d0 !important;
        border-radius: 0.5rem;
        cursor: pointer;
        text-decoration: none !important;
        box-shadow: none;
        transition: all 0.2s ease;
    }

    .custom-visit-website-btn:hover {
        color: #ffffff !important;
        background-color: #059669 !important;
        border-color: #059669 !important;
    }

    .custom-user-info {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #f3f4f6;
    }

    .custom-user-avatar {
        width: 1.85rem;
        height: 1.85rem;
        border-radius: 9999px;
        background: #059669;
        color: #ffffff;
        font-weight: 600;
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: none;
    }

    .custom-user-details {
        display: flex;
        flex-direction: column;
        min-width: 0;
        line-height: 1.2;
    }

    .custom-user-name {
        font-weight: 600;
        font-size: 0.8rem;
        color: #1e293b;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .custom-user-email {
        font-size: 0.7rem;
        color: #64748b;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .custom-logout-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        width: 100%;
        padding: 0.45rem 0.75rem;
        font-size: 0.8rem;
        font-weight: 500;
        color: #dc2626 !important;
        background-color: #fef2f2 !important;
        border: 1px solid #fee2e2 !important;
        border-radius: 0.5rem;
        cursor: pointer;
        box-shadow: none;
        transition: all 0.2s ease;
    }

    .custom-logout-btn:hover {
        color: #ffffff !important;
        background-color: #e11d48 !important;
        border-color: #e11d48 !important;
        box-shadow: none;
    }

    .custom-logout-btn svg {
        width: 1rem;
        height: 1rem;
        transition: transform 0.2s ease;
    }

    .custom-logout-btn:hover svg {
        transform: translateX(2px);
    }

    /* Sembunyikan Breadcrumbs (Info Kesehatan > Daftar) */
    .fi-breadcrumbs {
        display: none !important;
    }

    /* Sembunyikan Dropdown Pilihan Jumlah Data Per Halaman (e.g. 5 ˅) */
    .fi-ta-pagination-records-select-ctn,
    .fi-ta-pagination select,
    .fi-ta-pagination-records-per-page-select,
    .fi-ta-pagination [class*="records-select"] {
        display: none !important;
    }

    /* 11. Table Pagination - Always Show Page Numbers (1, 2, 3...) On Mobile & Desktop */
    .fi-ta-pagination {
        display: flex !important;
        flex-wrap: wrap !important;
        align-items: center !important;
        justify-content: space-between !important;
        padding: 0.85rem 1rem !important;
        gap: 0.75rem !important;
        border-top: 1px solid #f1f5f9 !important;
    }

    /* Force Page Number buttons (1, 2, 3...) to show up on mobile */
    .fi-ta-pagination .hidden.sm\:flex,
    .fi-ta-pagination div[class*="hidden"][class*="sm:flex"],
    .fi-ta-pagination div[class*="sm:flex"] {
        display: flex !important;
        align-items: center !important;
        gap: 0.25rem !important;
    }

    .fi-ta-pagination-overview {
        color: #64748b !important;
        font-size: 0.8rem !important;
        font-weight: 500 !important;
    }

    /* Table Mobile Responsiveness Fixes */
    @media (max-width: 640px) {
        .fi-ta-pagination {
            justify-content: center !important;
            padding: 0.75rem 0.5rem !important;
        }

        .fi-ta-pagination-overview {
            display: none !important;
        }

        .fi-ta-content {
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
        }

        .fi-ta-table td, 
        .fi-ta-table th {
            padding: 0.65rem 0.75rem !important;
            white-space: nowrap !important;
        }

        .fi-page-header {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }

        .fi-page-header-actions {
            width: 100% !important;
        }

        .fi-page-header-actions .fi-btn {
            width: 100% !important;
            justify-content: center !important;
        }
    }

    /* Sembunyikan Tombol 'Buat & buat lainnya' di Semua Form Input Admin */
    .fi-form-actions button[wire\:click*="Another"],
    .fi-form-actions [wire\:click*="createAnother"],
    .fi-form-actions [wire\:click*="createAndCreateAnother"],
    .fi-ac-btn-action[wire\:click*="Another"],
    button[wire\:click*="createAnother"],
    button[wire\:click*="createAndCreateAnother"],
    .fi-form-actions button:nth-child(2):not(:last-child) {
        display: none !important;
    }

    /* GLOBAL SYSTEM RULE: Prevent text selection caret & I-beam '|' cursor on ALL elements except form inputs */
    *:not(input):not(textarea):not(select):not([contenteditable="true"]):not(option) {
        user-select: none !important;
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
    }

    *:not(input):not(textarea):not(select):not([contenteditable="true"]):not(option):not(a):not(button):not([role="button"]):not(label):not(svg):not(path) {
        cursor: default !important;
    }

    /* Table cells, headers, text columns, badges, cards, titles explicitly use default cursor */
    .fi-ta-header,
    .fi-ta-header-cell,
    .fi-ta-cell,
    .fi-ta-text-item,
    .fi-ta-content,
    .fi-ta-table,
    .fi-header-heading,
    .fi-header-subheading,
    .fi-page-header,
    .fi-badge,
    .fi-section,
    .fi-card,
    th, td, tr, thead, tbody, h1, h2, h3, h4, h5, h6, span, p, div {
        cursor: default !important;
    }
    
    a, button, [role="button"], .fi-btn, .fi-sidebar-item a, .fi-sidebar-item button, .fi-dropdown-trigger button {
        cursor: pointer !important;
    }

    input, textarea, select, [contenteditable="true"] {
        cursor: text !important;
        user-select: text !important;
        -webkit-user-select: text !important;
    }

    /* Fix Giant SVG Icons in Filament Admin Pages, Headers, Buttons & Page Content */
    .fi-main svg,
    .fi-page-header svg,
    .fi-header svg,
    .fi-sidebar-item-icon svg,
    .fi-breadcrumbs svg,
    .fi-btn svg,
    .fi-icon-btn svg,
    .fi-section-header svg,
    header svg,
    main svg {
        max-width: 2.5rem !important;
        max-height: 2.5rem !important;
    }

    .fi-btn svg,
    .fi-icon-btn svg,
    .fi-sidebar-item-icon svg {
        width: 1.25rem !important;
        height: 1.25rem !important;
    }
</style>
