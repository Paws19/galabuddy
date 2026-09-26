<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>GalaBuddy | Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --ink: #1a2e1a;
            --muted: #5c6b5c;
            --sand: #fffbf0;
            --white: #fff;
            --teal: #2d6a4f;
            --teal-2: #40916c;
            --coral: #f4a261;
            --grad: linear-gradient(135deg, #2d6a4f 0%, #40916c 40%, #f4a261 100%);
            --radius: 22px;
            --shadow: 0 10px 30px -12px rgba(26, 46, 26, .2);
            --shadow-lg: 0 30px 60px -20px rgba(26, 46, 26, .3);
            --sidebar-w: 260px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Inter, system-ui, sans-serif;
            color: var(--ink);
            background: var(--sand);
            min-height: 100dvh;
            -webkit-font-smoothing: antialiased;
        }

        button {
            font-family: inherit;
            cursor: pointer;
            border: 0;
            background: none;
        }

        h1,
        h2,
        h3 {
            font-family: Poppins, Inter, sans-serif;
            letter-spacing: -.02em;
            line-height: 1.15;
        }

        .app {
            display: flex;
            min-height: 100dvh;
        }

        .sidebar {
            width: var(--sidebar-w);
            background: var(--white);
            border-right: 1px solid rgba(26, 46, 26, .08);
            position: fixed;
            inset: 0 auto 0 0;
            z-index: 40;
            display: flex;
            flex-direction: column;
            transition: transform .3s ease;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 20px 22px;
            font-family: Poppins, sans-serif;
            font-weight: 700;
            font-size: 1.2rem;
            border-bottom: 1px solid rgba(26, 46, 26, .06);
        }

        .logo-mark {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: var(--grad);
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 1.2rem;
        }

        .sidebar-nav {
            flex: 1;
            padding: 18px 14px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 14px;
            font-weight: 500;
            color: var(--muted);
            width: 100%;
            text-align: left;
        }

        .nav-item:hover {
            background: rgba(45, 106, 79, .06);
            color: var(--ink);
        }

        .nav-item.active {
            background: rgba(45, 106, 79, .12);
            color: var(--teal);
            font-weight: 600;
        }

        .main {
            flex: 1;
            margin-left: var(--sidebar-w);
            min-width: 0;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 30;
            background: rgba(255, 251, 240, .92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(26, 46, 26, .06);
            padding: 14px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .menu-toggle {
            display: none;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: var(--white);
            border: 1px solid #e2e8f0;
            place-items: center;
            font-size: 1.2rem;
        }

        .topbar h1 {
            font-size: 1.25rem;
            flex: 1;
            min-width: 120px;
        }

        .content {
            padding: 24px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .panel {
            display: none;
        }

        .panel.active {
            display: block;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .95rem;
        }

        .btn-sm {
            padding: 8px 14px;
            font-size: .85rem;
        }

        .btn-primary {
            background: var(--teal);
            color: #fff;
        }

        .btn-primary:hover {
            background: #245c43;
        }

        .btn-coral {
            background: linear-gradient(135deg, #e85d04, #fbbf24);
            color: #fff;
        }

        .btn-ghost {
            background: #fff;
            border: 1px solid #e2e8f0;
            color: var(--ink);
        }

        .btn-outline-teal {
            background: transparent;
            color: var(--teal);
            border: 1.5px solid var(--teal);
        }

        .eyebrow {
            display: inline-block;
            font-size: .75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: var(--teal);
            background: rgba(45, 106, 79, .12);
            padding: 5px 11px;
            border-radius: 999px;
            margin-bottom: 10px;
        }

        .panel-head {
            margin-bottom: 20px;
        }

        .panel-head h2 {
            font-size: clamp(1.4rem, 3vw, 1.85rem);
            margin-bottom: 6px;
        }

        .panel-head p {
            color: var(--muted);
        }

        .status-banner {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            border-radius: 16px;
            padding: 12px 16px;
            margin-bottom: 16px;
            font-size: .9rem;
            color: #065f46;
            line-height: 1.45;
        }

        .status-banner.warn {
            background: #fff7ed;
            border-color: #fed7aa;
            color: #9a3412;
        }

        .loc-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            background: #fff;
            border-radius: 16px;
            box-shadow: var(--shadow);
            margin-bottom: 14px;
            font-size: .9rem;
        }

        .loc-bar .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--teal-2);
            flex-shrink: 0;
        }

        .loc-bar .dot.off {
            background: #94a3b8;
        }

        .loc-bar span {
            color: var(--muted);
        }

        .search-box {
            position: relative;
            margin-bottom: 12px;
        }

        .search-box input {
            width: 100%;
            padding: 14px 100px 14px 48px;
            border-radius: 16px;
            border: 1.5px solid #e2e8f0;
            background: #fff;
            font-size: 1rem;
            font-family: inherit;
            outline: none;
        }

        .search-box input:focus {
            border-color: var(--teal);
            box-shadow: 0 0 0 4px rgba(45, 106, 79, .12);
        }

        .search-box .ico {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
        }

        .search-box .search-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 14px;
        }

        .filter {
            border: 1px solid #e2e8f0;
            background: #fff;
            padding: 8px 14px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .85rem;
            color: var(--ink);
        }

        .filter.active {
            background: var(--teal);
            color: #fff;
            border-color: var(--teal);
        }

        .map-wrap {
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 18px;
            height: 300px;
            background: #e8f0e8;
            position: relative;
        }

        #gmap {
            width: 100%;
            height: 100%;
        }

        .map-label {
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 5;
            background: rgba(255, 255, 255, .95);
            padding: 6px 12px;
            border-radius: 999px;
            font-size: .78rem;
            font-weight: 600;
            box-shadow: var(--shadow);
            max-width: 75%;
        }

        .place-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 16px;
        }

        .place-item {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1.5px solid transparent;
            transition: transform .25s, box-shadow .25s;
            display: flex;
            flex-direction: column;
        }

        .place-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .place-item.is-selected {
            border-color: var(--teal);
        }

        .place-photo {
            height: 160px;
            min-height: 160px;
            background: linear-gradient(135deg, #b7e4c7, #90e0ef);
            position: relative;
            overflow: hidden;
        }

        .place-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .place-photo .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            z-index: 1;
        }

        .place-body {
            padding: 14px 16px 16px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .place-body h3 {
            font-size: 1.05rem;
            margin-bottom: 4px;
        }

        .place-body .addr {
            color: var(--muted);
            font-size: .86rem;
            margin-bottom: 8px;
        }

        .rating-row {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: .9rem;
            margin-bottom: 8px;
            flex-wrap: wrap;
        }

        .stars {
            color: #f59e0b;
            letter-spacing: 1px;
        }

        .rating-num {
            font-weight: 700;
        }

        .rating-count {
            color: var(--muted);
            font-size: .82rem;
        }

        .place-desc {
            font-size: .85rem;
            color: var(--muted);
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .place-reviews {
            font-size: .82rem;
            color: var(--ink);
            line-height: 1.45;
            background: #f8fafc;
            border-radius: 12px;
            padding: 10px 12px;
            margin-bottom: 10px;
        }

        .place-reviews .rev {
            margin-bottom: 8px;
        }

        .place-reviews .rev:last-child {
            margin-bottom: 0;
        }

        .place-reviews .rev-author {
            font-weight: 600;
            color: var(--teal);
            font-size: .78rem;
        }

        .chip {
            font-size: .72rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(251, 191, 36, .2);
            color: #b45309;
        }

        .chip-teal {
            background: rgba(45, 106, 79, .12);
            color: var(--teal);
        }

        .chip-coral {
            background: rgba(244, 162, 97, .25);
            color: #c2410c;
        }

        .place-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: auto;
        }

        .empty-state,
        .loading {
            text-align: center;
            padding: 40px 16px;
            color: var(--muted);
            grid-column: 1 / -1;
        }

        .loading {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .spinner {
            width: 22px;
            height: 22px;
            border: 3px solid #e2e8f0;
            border-top-color: var(--teal);
            border-radius: 50%;
            animation: spin .7s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .toast {
            position: fixed;
            bottom: 24px;
            left: 50%;
            transform: translate(-50%, 140%);
            background: var(--ink);
            color: #fff;
            padding: 14px 22px;
            border-radius: 999px;
            box-shadow: var(--shadow-lg);
            z-index: 100;
            transition: transform .4s;
            font-weight: 500;
            font-size: .95rem;
            max-width: 90%;
            text-align: center;
        }

        .toast.show {
            transform: translate(-50%, 0);
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(26, 46, 26, .4);
            z-index: 35;
        }

        .sidebar-overlay.show {
            display: block;
        }

        .grid-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 14px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: #fff;
            border-radius: var(--radius);
            padding: 18px;
            box-shadow: var(--shadow);
            text-align: center;
        }

        .stat-card .num {
            font-family: Poppins, sans-serif;
            font-weight: 800;
            font-size: 1.8rem;
            background: var(--grad);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .stat-card .label {
            color: var(--muted);
            font-size: .85rem;
            margin-top: 4px;
        }

        .gala-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .gala-item {
            background: #fff;
            border-radius: 18px;
            padding: 16px 18px;
            box-shadow: var(--shadow);
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .gala-ico {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: var(--sand);
            display: grid;
            place-items: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        @media (max-width: 960px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main {
                margin-left: 0;
            }

            .menu-toggle {
                display: grid;
            }
        }

        @media (max-width: 600px) {
            .content {
                padding: 16px;
            }

            .map-wrap {
                height: 240px;
            }
        }
    </style>
</head>

<body>
    <div class="app">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-brand">
                <div class="logo-mark">🎒</div> Gala Buddy
            </div>
            <nav class="sidebar-nav">
                <button class="nav-item active" data-panel="overview"><span>🏠</span> Overview</button>
                <button class="nav-item" data-panel="search"><span>📍</span> Nearby &amp; Search</button>
                <button class="nav-item" data-panel="galas"><span>🗺️</span> My Galas</button>
            </nav>
        </aside>
        <div class="sidebar-overlay" id="sidebarOverlay"></div>
        <div class="main">
            <header class="topbar">
                <button class="menu-toggle" id="menuToggle" aria-label="Menu">☰</button>
                <h1 id="pageTitle">Overview</h1>
                <button class="btn btn-ghost btn-sm" id="locateBtn">📍 My location</button>
                <button class="btn btn-coral btn-sm" id="newGalaBtn">+ New Gala</button>
            </header>
            <div class="content">
                <section class="panel active" id="panel-overview">
                    <div class="panel-head">
                        <span class="eyebrow">Dashboard</span>
                        <h2>Your next gala starts here.</h2>
                        <p>Google Places — photos, ratings, descriptions &amp; reviews.</p>
                    </div>
                    <div class="status-banner" id="statusBanner">Connecting to Google Places…</div>
                    <div class="grid-stats">
                        <div class="stat-card">
                            <div class="num" id="statGalas">0</div>
                            <div class="label">Galas saved</div>
                        </div>
                        <div class="stat-card">
                            <div class="num" id="statNearby">0</div>
                            <div class="label">Nearby spots</div>
                        </div>
                        <div class="stat-card">
                            <div class="num" id="statActive">—</div>
                            <div class="label">Active gala</div>
                        </div>
                    </div>
                    <h3 style="margin-bottom:12px;font-size:1.05rem">Suggested near you</h3>
                    <div class="place-list" id="overviewNearby"></div>
                    <h3 style="margin:24px 0 12px;font-size:1.05rem">Your galas</h3>
                    <div class="gala-list" id="overviewGalas"></div>
                </section>

                <section class="panel" id="panel-search">
                    <div class="panel-head">
                        <span class="eyebrow">Google Places</span>
                        <h2>Nearby &amp; search</h2>
                        <p>Use a <strong>city button</strong> below (always works), or Allow location on
                            <strong>http://localhost</strong> (not file://).
                        </p>
                    </div>
                    <div class="loc-bar" style="flex-direction:column;align-items:stretch;gap:12px">
                        <div style="display:flex;flex-wrap:wrap;align-items:center;gap:10px">
                            <span class="dot off" id="locDot"></span>
                            <div style="flex:1;min-width:140px">
                                <strong id="locTitle">Location not set</strong>
                                <span id="locSub"> · tap Allow location</span>
                            </div>
                            <button class="btn btn-primary btn-sm" id="allowLocBtn" type="button">📍 Allow
                                location</button>
                            <button class="btn btn-outline-teal btn-sm" id="refreshNearbyBtn"
                                type="button">Refresh</button>
                        </div>
                        <div id="locHelp" style="font-size:.82rem;color:var(--muted);line-height:1.4;display:none">
                        </div>
                        <div>
                            <div style="font-size:.78rem;font-weight:600;color:var(--muted);margin-bottom:6px">Or pick a
                                city (works without GPS):</div>
                            <div class="filters" id="cityChips" style="margin:0">
                                <button type="button" class="filter" data-lat="14.5995" data-lon="120.9842"
                                    data-name="Manila">Manila</button>
                                <button type="button" class="filter" data-lat="14.6760" data-lon="121.0437"
                                    data-name="Quezon City">Quezon City</button>
                                <button type="button" class="filter" data-lat="14.1153" data-lon="120.9621"
                                    data-name="Tagaytay">Tagaytay</button>
                                <button type="button" class="filter" data-lat="16.4023" data-lon="120.5960"
                                    data-name="Baguio">Baguio</button>
                                <button type="button" class="filter" data-lat="10.3157" data-lon="123.8854"
                                    data-name="Cebu">Cebu</button>
                                <button type="button" class="filter" data-lat="7.1907" data-lon="125.4553"
                                    data-name="Davao">Davao</button>
                            </div>
                        </div>
                    </div>
                    <div class="search-box">
                        <span class="ico">🔎</span>
                        <input type="search" id="searchInput" placeholder="Tagaytay, Baguio café, Intramuros…"
                            autocomplete="off" />
                        <button class="btn btn-primary btn-sm search-btn" id="searchBtn">Search</button>
                    </div>
                    <div class="filters" id="catFilters">
                        <button class="filter active" data-query="restaurants cafes tourist attractions">All</button>
                        <button class="filter" data-query="cafes">☕ Cafés</button>
                        <button class="filter" data-query="restaurants">🍜 Food</button>
                        <button class="filter" data-query="tourist attractions">🏛️ Tourist</button>
                        <button class="filter" data-query="parks">🏞️ Parks</button>
                        <button class="filter" data-query="bars nightlife">🎉 Nightlife</button>
                    </div>
                    <div class="map-wrap">
                        <div class="map-label" id="mapLabel">Map</div>
                        <div id="gmap"></div>
                    </div>
                    <h3 style="margin-bottom:12px;font-size:1.05rem" id="listTitle">Gala spots</h3>
                    <div class="place-list" id="searchResults">
                        <div class="empty-state">Allow location or search a city to see places.</div>
                    </div>
                </section>

                <section class="panel" id="panel-galas">
                    <div class="panel-head">
                        <span class="eyebrow">My list</span>
                        <h2>Saved galas</h2>
                        <p>Places you set or saved.</p>
                    </div>
                    <div class="gala-list" id="galaList"></div>
                </section>
            </div>
        </div>
    </div>
    <div class="toast" id="toast"></div>

    <script>
        const GOOGLE_MAPS_API_KEY = 'AIzaSyDur-wnpOCed4l4fCl5P0eGnyDTGNguMB8';
        const STORAGE_KEY = 'galabuddy_gplaces_v2';
        const DEFAULT_LAT = 14.5995;
        const DEFAULT_LON = 120.9842;

        // Places API (New) field mask — photos, ratings, reviews, description
        const FIELD_MASK = [
            'places.id',
            'places.displayName',
            'places.formattedAddress',
            'places.location',
            'places.rating',
            'places.userRatingCount',
            'places.photos',
            'places.reviews',
            'places.editorialSummary',
            'places.googleMapsUri',
            'places.types',
            'places.currentOpeningHours',
            'places.websiteUri',
            'places.primaryTypeDisplayName'
        ].join(',');

        let userLat = DEFAULT_LAT;
        let userLon = DEFAULT_LON;
        let map = null;
        let markers = [];
        let mapsReady = false;
        let lastPlaces = [];
        let currentQuery = 'restaurants cafes tourist attractions';
        let state = loadState();

        function loadState() {
            try {
                const raw = localStorage.getItem(STORAGE_KEY);
                if (raw) return JSON.parse(raw);
            } catch (_) {}
            return {
                galas: [],
                activeId: null
            };
        }

        function saveState() {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
        }

        const $ = (s, r) => (r || document).querySelector(s);
        const $$ = (s, r) => [...(r || document).querySelectorAll(s)];

        function showToast(msg) {
            const t = $('#toast');
            t.textContent = msg;
            t.classList.add('show');
            clearTimeout(showToast._t);
            showToast._t = setTimeout(() => t.classList.remove('show'), 3000);
        }

        function escapeHtml(s) {
            return String(s ?? '')
                .replace(/&/g, '&amp;').replace(/</g, '&lt;')
                .replace(/>/g, '&gt;').replace(/"/g, '&quot;');
        }

        function uid() {
            return 'g_' + Date.now().toString(36) + Math.random().toString(36).slice(2, 7);
        }

        function starsHtml(rating) {
            if (rating == null) return '<span class="stars">☆☆☆☆☆</span>';
            const full = Math.round(Number(rating));
            return '<span class="stars">' + '★'.repeat(Math.min(5, full)) + '☆'.repeat(Math.max(0, 5 - full)) + '</span>';
        }

        function setLocBar(ok, title, sub) {
            $('#locDot').classList.toggle('off', !ok);
            $('#locTitle').textContent = title;
            $('#locSub').textContent = sub ? ' · ' + sub : '';
        }

        function setStatus(msg, warn) {
            const el = $('#statusBanner');
            el.textContent = msg;
            el.classList.toggle('warn', !!warn);
        }

        // ---------- Images ----------
        const GEOAPIFY_KEY = 'bc9f7d06bf3b4dde83cce62f68e39f22';

        function photoUrlFrom(photo, maxW) {
            if (!photo || !photo.name) return '';
            return 'https://places.googleapis.com/v1/' + photo.name +
                '/media?maxWidthPx=' + (maxW || 800) + '&key=' + encodeURIComponent(GOOGLE_MAPS_API_KEY);
        }

        /** Location image for this exact pin (always works with lat/lon) */
        function placeImageUrl(lat, lon) {
            if (lat == null || lon == null || isNaN(lat) || isNaN(lon)) return '';
            return 'https://maps.geoapify.com/v1/staticmap?style=osm-bright-smooth&width=640&height=400' +
                '&center=lonlat:' + lon + ',' + lat +
                '&zoom=17' +
                '&marker=lonlat:' + lon + ',' + lat + ';color:%23e85d04;size:large' +
                '&apiKey=' + GEOAPIFY_KEY;
        }

        function imgTag(url, alt) {
            if (!url) {
                return '<div style="display:grid;place-items:center;height:100%;min-height:150px;' +
                    'background:linear-gradient(135deg,#2d6a4f,#f4a261);color:#fff;font-weight:700;padding:12px;text-align:center">' +
                    escapeHtml((alt || 'Place').slice(0, 36)) + '</div>';
            }
            return '<img src="' + escapeHtml(url) + '" alt="' + escapeHtml(alt || '') +
                '" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block" ' +
                'onerror="this.onerror=null;this.style.display=\'none\';this.parentElement.insertAdjacentHTML(\'beforeend\',' +
                '\'<div style=display:grid;place-items:center;height:100%;min-height:150px;background:linear-gradient(135deg,#2d6a4f,#f4a261);color:%23fff;font-weight:700;padding:12px;text-align:center>' +
                escapeHtml((alt || 'Place').slice(0, 36)).replace(/'/g, '') + '</div>\')"/>';
        }

        // ---------- Normalize Places API (New) ----------
        function normalizePlace(p) {
            const loc = p.location || {};
            const reviews = (p.reviews || []).slice(0, 3).map(function(r) {
                return {
                    author: (r.authorAttribution && r.authorAttribution.displayName) || 'Google user',
                    text: r.text && r.text.text ? r.text.text : (r.originalText && r.originalText.text) || '',
                    rating: r.rating || null
                };
            }).filter(function(r) {
                return r.text;
            });

            const description =
                (p.editorialSummary && p.editorialSummary.text) ||
                (reviews[0] && reviews[0].text ? reviews[0].text.slice(0, 160) : '') ||
                '';

            const photos = p.photos || [];
            const lat = loc.latitude != null ? loc.latitude : null;
            const lon = loc.longitude != null ? loc.longitude : null;
            // Google photo if any; otherwise location snapshot so every card has an image
            let photoUrl = photos[0] ? photoUrlFrom(photos[0], 800) : '';
            if (!photoUrl) photoUrl = placeImageUrl(lat, lon);

            return {
                id: p.id || '',
                name: (p.displayName && p.displayName.text) || 'Place',
                address: p.formattedAddress || '',
                lat: lat,
                lon: lon,
                rating: p.rating != null ? p.rating : null,
                ratingCount: p.userRatingCount || 0,
                photoUrl: photoUrl,
                description: description,
                reviews: reviews,
                mapsUrl: p.googleMapsUri || '',
                website: p.websiteUri || '',
                typeLabel: (p.primaryTypeDisplayName && p.primaryTypeDisplayName.text) || '',
                openNow: p.currentOpeningHours ? p.currentOpeningHours.openNow : null
            };
        }

        // ---------- Places API (New) ----------
        async function searchText(query, lat, lon) {
            const body = {
                textQuery: query,
                maxResultCount: 20,
                languageCode: 'en'
            };
            if (lat != null && lon != null) {
                body.locationBias = {
                    circle: {
                        center: {
                            latitude: lat,
                            longitude: lon
                        },
                        radius: 12000.0
                    }
                };
            }
            const res = await fetch('https://places.googleapis.com/v1/places:searchText', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Goog-Api-Key': GOOGLE_MAPS_API_KEY,
                    'X-Goog-FieldMask': FIELD_MASK
                },
                body: JSON.stringify(body)
            });
            const data = await res.json();
            if (!res.ok) {
                const msg = (data.error && data.error.message) || ('HTTP ' + res.status);
                throw new Error(msg);
            }
            return (data.places || []).map(normalizePlace);
        }

        async function searchNearby(lat, lon, includedTypes) {
            // Nearby Search (New)
            const body = {
                maxResultCount: 20,
                rankPreference: 'POPULARITY',
                locationRestriction: {
                    circle: {
                        center: {
                            latitude: lat,
                            longitude: lon
                        },
                        radius: 5000.0
                    }
                },
                languageCode: 'en'
            };
            if (includedTypes && includedTypes.length) {
                body.includedTypes = includedTypes;
            } else {
                body.includedTypes = ['restaurant', 'cafe', 'tourist_attraction'];
            }
            const res = await fetch('https://places.googleapis.com/v1/places:searchNearby', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Goog-Api-Key': GOOGLE_MAPS_API_KEY,
                    'X-Goog-FieldMask': FIELD_MASK
                },
                body: JSON.stringify(body)
            });
            const data = await res.json();
            if (!res.ok) {
                // Fallback to text search near this point
                return searchText(currentQuery + ' near me', lat, lon);
            }
            return (data.places || []).map(normalizePlace);
        }

        // ---------- Location ----------
        async function ipLocationFallback() {
            try {
                const res = await fetch('https://get.geojs.io/v1/ip/geo.json');
                const data = await res.json();
                if (data.latitude && data.longitude) {
                    return {
                        lat: parseFloat(data.latitude),
                        lon: parseFloat(data.longitude),
                        label: [data.city, data.region, data.country].filter(Boolean).join(', ') || 'Approx. location'
                    };
                }
            } catch (_) {}
            return {
                lat: DEFAULT_LAT,
                lon: DEFAULT_LON,
                label: 'Manila (default)'
            };
        }

        function applyLocation(lat, lon, title, sub) {
            userLat = lat;
            userLon = lon;
            setLocBar(true, title, sub);
            var help = $('#locHelp');
            if (help) {
                help.style.display = 'none';
                help.textContent = '';
            }
            if (map) {
                map.setCenter({
                    lat: lat,
                    lng: lon
                });
                map.setZoom(14);
            }
            loadNearby();
        }

        function showLocHelp(html) {
            var help = $('#locHelp');
            if (!help) return;
            help.style.display = 'block';
            help.innerHTML = html;
        }

        function requestLocationAndLoad() {
            showToast('Requesting location…');
            if (location.protocol === 'file:') {
                showLocHelp(
                    '<strong>GPS cannot work from a file:// page.</strong> ' +
                    'Click <strong>Tagaytay</strong> or <strong>Manila</strong> below — that sets your location and loads places. ' +
                    'Or open via: <code>python3 -m http.server 8080</code> → http://localhost:8080/galabuddy-dashboard.html'
                );
                showToast('Use a city button — GPS blocked on file://');
                return;
            }
            setLocBar(false, 'Detecting GPS…', 'click Allow in the popup');
            tryGpsUpgrade();
        }

        function loadMapScript() {
            if (window.google && window.google.maps) {
                initMap();
                return;
            }
            const s = document.createElement('script');
            s.src = 'https://maps.googleapis.com/maps/api/js?key=' + encodeURIComponent(GOOGLE_MAPS_API_KEY) +
                '&callback=initMap';
            s.async = true;
            s.defer = true;
            s.onerror = function() {
                setStatus('Map script failed to load — check API key / Maps JavaScript API.', true);
            };
            document.head.appendChild(s);
        }

        window.initMap = function() {
            mapsReady = true;
            map = new google.maps.Map(document.getElementById('gmap'), {
                center: {
                    lat: userLat,
                    lng: userLon
                },
                zoom: 13,
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: true
            });
            setStatus('Google Places connected · ratings from Google. Photos only when Google provides them.');
            // Always load something fast via network location, then upgrade to GPS if allowed
            bootstrapLocation();
        };

        /** Network location first (works everywhere), GPS only on localhost/https */
        function bootstrapLocation() {
            setLocBar(false, 'Finding your area…', '');
            var isFile = location.protocol === 'file:';
            if (isFile) {
                showLocHelp(
                    '<strong>Your browser blocks GPS on file:// pages.</strong> ' +
                    'This is a browser security rule. <strong>Pick a city below</strong> (Tagaytay, Manila…) — that works now. ' +
                    'For real GPS: run <code>python3 -m http.server 8080</code> and open <code>http://localhost:8080/galabuddy-dashboard.html</code>.'
                );
            }
            ipLocationFallback().then(function(ip) {
                userLat = ip.lat;
                userLon = ip.lon;
                setLocBar(true, ip.label || 'Approximate area', 'network · pick a city for accuracy');
                if (map) {
                    map.setCenter({
                        lat: ip.lat,
                        lng: ip.lon
                    });
                    map.setZoom(13);
                }
                loadNearby();
                tryGpsUpgrade();
            });
        }

        function tryGpsUpgrade() {
            if (!navigator.geolocation) {
                showLocHelp('This device has no geolocation. Use a city button below.');
                return;
            }
            if (location.protocol === 'file:') {
                // Already shown help in bootstrap
                return;
            }
            if (!window.isSecureContext) {
                showLocHelp('GPS needs https or localhost. Use a city button, or open via local server.');
                return;
            }
            navigator.geolocation.getCurrentPosition(
                function(pos) {
                    applyLocation(
                        pos.coords.latitude,
                        pos.coords.longitude,
                        'Your GPS location ✓',
                        pos.coords.latitude.toFixed(5) + ', ' + pos.coords.longitude.toFixed(5)
                    );
                    showToast('GPS locked · nearby refreshed');
                },
                function(err) {
                    var msg = 'GPS not available';
                    if (err && err.code === 1) msg =
                        'You blocked location — allow it in the address-bar lock/info icon, or pick a city';
                    if (err && err.code === 2) msg = 'Position unavailable — pick a city below';
                    if (err && err.code === 3) msg = 'GPS timed out — pick a city below';
                    showLocHelp(msg);
                }, {
                    enableHighAccuracy: true,
                    timeout: 15000,
                    maximumAge: 0
                }
            );
        }

        function clearMarkers() {
            markers.forEach(function(m) {
                m.setMap(null);
            });
            markers = [];
        }

        function pinPlacesOnMap(places) {
            if (!map) return;
            clearMarkers();
            const bounds = new google.maps.LatLngBounds();
            places.forEach(function(p, i) {
                if (p.lat == null || p.lon == null) return;
                const pos = {
                    lat: p.lat,
                    lng: p.lon
                };
                const m = new google.maps.Marker({
                    map: map,
                    position: pos,
                    title: p.name,
                    label: p.rating != null ? {
                        text: String(Number(p.rating).toFixed(1)),
                        color: '#fff',
                        fontSize: '11px',
                        fontWeight: '700'
                    } : undefined
                });
                const photo = p.photoUrl ?
                    '<img src="' + escapeHtml(p.photoUrl) +
                    '" style="width:100%;height:90px;object-fit:cover;border-radius:8px;margin-bottom:6px" onerror="this.style.display=\'none\'"/>' :
                    '';
                const rating = p.rating != null ?
                    '★ ' + Number(p.rating).toFixed(1) + (p.ratingCount ? ' (' + p.ratingCount + ')' : '') :
                    'No rating';
                const iw = new google.maps.InfoWindow({
                    content: '<div style="max-width:240px;font-family:Inter,sans-serif">' + photo +
                        '<strong>' + escapeHtml(p.name) + '</strong><br/>' +
                        '<span style="color:#5c6b5c;font-size:12px">' + escapeHtml(p.address || '') +
                        '</span><br/>' +
                        '<span style="color:#b45309;font-weight:600;font-size:12px">' + rating +
                        '</span></div>'
                });
                m.addListener('click', function() {
                    iw.open(map, m);
                    $$('.place-item').forEach(function(el) {
                        el.classList.remove('is-selected');
                    });
                    const row = document.getElementById('place-' + i);
                    if (row) {
                        row.classList.add('is-selected');
                        row.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest'
                        });
                    }
                });
                markers.push(m);
                bounds.extend(pos);
            });
            const you = new google.maps.Marker({
                map: map,
                position: {
                    lat: userLat,
                    lng: userLon
                },
                title: 'You',
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 8,
                    fillColor: '#2d6a4f',
                    fillOpacity: 1,
                    strokeColor: '#fff',
                    strokeWeight: 2
                }
            });
            markers.push(you);
            bounds.extend({
                lat: userLat,
                lng: userLon
            });
            if (places.length) {
                try {
                    map.fitBounds(bounds, 48);
                } catch (_) {}
            }
            $('#mapLabel').textContent = places.length ? places.length + ' places · Google ratings' : 'Map';
        }

        // ---------- Load / search ----------
        async function loadNearby() {
            const el = $('#searchResults');
            el.innerHTML = '<div class="loading"><div class="spinner"></div> Loading nearby from Google…</div>';
            $('#listTitle').textContent = 'Nearby gala spots';
            try {
                // Text search is most reliable with this key; bias to user location
                let places = await searchText(currentQuery, userLat, userLon);
                if (!places.length) {
                    places = await searchNearby(userLat, userLon, null);
                }
                places.sort(function(a, b) {
                    const ra = a.rating || 0,
                        rb = b.rating || 0;
                    if (rb !== ra) return rb - ra;
                    return (b.ratingCount || 0) - (a.ratingCount || 0);
                });
                lastPlaces = places;
                $('#statNearby').textContent = places.length;
                renderPlaceList(places, el);
                pinPlacesOnMap(places);
                renderPlaceList(places.slice(0, 4), $('#overviewNearby'));
                if (places.length) showToast(places.length + ' places with ratings');
                else showToast('No places found — try search');

            } catch (err) {
                console.error(err);
                el.innerHTML = '<div class="empty-state"><h3>Couldn’t load places</h3><p>' +
                    escapeHtml(err.message || 'API error') + '</p></div>';
                setStatus('Places error: ' + (err.message || 'unknown'), true);
                showToast('Load failed — try Search');
            }
        }

        async function searchPlaces(query) {
            const q = (query || '').trim();
            if (q.length < 2) {
                showToast('Type at least 2 characters');
                return;
            }
            const el = $('#searchResults');
            el.innerHTML = '<div class="loading"><div class="spinner"></div> Searching “' + escapeHtml(q) + '”…</div>';
            $('#listTitle').textContent = 'Results for “' + q + '”';
            try {
                // For cities, search attractions/food there
                const smartQuery = /cafe|restaurant|park|bar|hotel|museum/i.test(q) ?
                    q :
                    (q + ' restaurants cafes tourist attractions');
                const places = await searchText(smartQuery, userLat, userLon);
                places.sort(function(a, b) {
                    const ra = a.rating || 0,
                        rb = b.rating || 0;
                    if (rb !== ra) return rb - ra;
                    return (b.ratingCount || 0) - (a.ratingCount || 0);
                });
                lastPlaces = places;
                $('#statNearby').textContent = places.length;
                renderPlaceList(places, el);
                pinPlacesOnMap(places);
                if (places[0] && places[0].lat != null) {
                    userLat = places[0].lat;
                    userLon = places[0].lon;
                    if (map) {
                        map.setCenter({
                            lat: userLat,
                            lng: userLon
                        });
                        map.setZoom(13);
                    }
                    setLocBar(true, 'Search: ' + q, userLat.toFixed(4) + ', ' + userLon.toFixed(4));
                }
                showToast(places.length ? places.length + ' places found' : 'No results');

            } catch (err) {
                console.error(err);
                el.innerHTML = '<div class="empty-state"><h3>Search failed</h3><p>' +
                    escapeHtml(err.message || 'Try again') + '</p></div>';
                showToast('Search error');
            }
        }

        function renderPlaceList(places, el) {
            if (!el) return;
            if (!places || !places.length) {
                el.innerHTML = '<div class="empty-state">No places yet. Try search or My location.</div>';
                return;
            }
            el.innerHTML = places.map(function(p, i) {
                const photo = imgTag(p.photoUrl || placeImageUrl(p.lat, p.lon), p.name);

                const ratingBlock = p.rating != null ?
                    '<div class="rating-row">' + starsHtml(p.rating) +
                    '<span class="rating-num">' + Number(p.rating).toFixed(1) + '</span>' +
                    '<span class="rating-count">(' + (p.ratingCount || 0) + ' reviews)</span></div>' :
                    '<div class="rating-row"><span class="rating-count">No rating yet</span></div>';

                const openChip = p.openNow === true ?
                    '<span class="chip chip-teal">Open now</span>' :
                    (p.openNow === false ? '<span class="chip">Closed</span>' : '');
                const topChip = i === 0 && p.rating != null ?
                    '<span class="chip chip-coral">Top rated</span>' : '';
                const typeChip = p.typeLabel ?
                    '<span class="chip chip-teal">' + escapeHtml(p.typeLabel) + '</span>' : '';

                let descHtml = '';
                if (p.description) {
                    descHtml = '<p class="place-desc">' + escapeHtml(p.description.slice(0, 200)) +
                        (p.description.length > 200 ? '…' : '') + '</p>';
                }

                let reviewsHtml = '';
                if (p.reviews && p.reviews.length) {
                    reviewsHtml = '<div class="place-reviews">' +
                        p.reviews.slice(0, 2).map(function(r) {
                            return '<div class="rev"><div class="rev-author">' + escapeHtml(r.author) +
                                (r.rating ? ' · ★ ' + r.rating : '') + '</div>' +
                                escapeHtml(r.text.slice(0, 140)) + (r.text.length > 140 ? '…' : '') + '</div>';
                        }).join('') + '</div>';
                }

                return '<article class="place-item" data-idx="' + i + '" id="place-' + i + '">' +
                    '<div class="place-photo"><div class="badge">' + topChip + openChip + typeChip + '</div>' +
                    photo + '</div>' +
                    '<div class="place-body">' +
                    '<h3>' + escapeHtml(p.name) + '</h3>' +
                    '<p class="addr">' + escapeHtml(p.address) + '</p>' +
                    ratingBlock +
                    descHtml +
                    reviewsHtml +
                    '<div class="place-actions">' +
                    '<button class="btn btn-outline-teal btn-sm" data-act="map" data-idx="' + i +
                    '">📍 Map</button>' +
                    (p.mapsUrl ? '<a class="btn btn-ghost btn-sm" href="' + escapeHtml(p.mapsUrl) +
                        '" target="_blank" rel="noopener">Google</a>' : '') +
                    '<button class="btn btn-primary btn-sm" data-act="set" data-idx="' + i +
                    '">Set location</button>' +
                    '<button class="btn btn-ghost btn-sm" data-act="save" data-idx="' + i + '">Save</button>' +
                    '<button class="btn btn-ghost btn-sm" data-act="send" data-idx="' + i + '">Tropa</button>' +
                    '</div></div></article>';
            }).join('');

            el.querySelectorAll('[data-act]').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const idx = +btn.dataset.idx;
                    const p = places[idx];
                    if (!p) return;
                    const act = btn.dataset.act;
                    if (act === 'map') {
                        if (map && p.lat != null) {
                            map.panTo({
                                lat: p.lat,
                                lng: p.lon
                            });
                            map.setZoom(16);
                        }
                        switchPanel('search');
                        showToast(p.name);
                    }
                    if (act === 'set') {
                        const g = addGala(fromPlace(p));
                        setActive(g.id);
                        showToast('Set as active: ' + p.name);
                    }
                    if (act === 'save') {
                        addGala(fromPlace(p));
                        showToast('Saved: ' + p.name);
                    }
                    if (act === 'send') sendToTropa(fromPlace(p));
                });
            });
        }

        function fromPlace(p) {
            return {
                name: p.name,
                place: p.address,
                notes: (p.rating != null ? '★ ' + p.rating + ' (' + (p.ratingCount || 0) + ')' : '') +
                    (p.description ? '\n' + p.description.slice(0, 120) : ''),
                lat: p.lat,
                lon: p.lon,
                rating: p.rating,
                photoUrl: p.photoUrl,
                placeId: p.id,
                mapsUrl: p.mapsUrl,
                source: 'google'
            };
        }

        function addGala(obj) {
            const g = Object.assign({
                id: uid(),
                createdAt: new Date().toISOString()
            }, obj);
            state.galas.unshift(g);
            saveState();
            renderGalas();
            return g;
        }

        function setActive(id) {
            state.activeId = id;
            saveState();
            renderGalas();
        }

        function removeGala(id) {
            state.galas = state.galas.filter(function(g) {
                return g.id !== id;
            });
            if (state.activeId === id) state.activeId = null;
            saveState();
            renderGalas();
        }

        function sendToTropa(g) {
            const text = '🎒 Gala: *' + g.name + '*\n📍 ' + (g.place || '') +
                (g.rating != null ? '\n★ ' + g.rating : '') +
                (g.mapsUrl ? '\n' + g.mapsUrl : (g.lat ? '\nhttps://www.google.com/maps?q=' + g.lat + ',' + g.lon : '')) +
                '\n— GalaBuddy';
            if (navigator.share) {
                navigator.share({
                    title: g.name,
                    text: text
                }).catch(function() {
                    copyText(text);
                });
            } else copyText(text);
        }

        function copyText(text) {
            navigator.clipboard.writeText(text).then(function() {
                showToast('Copied for tropa ✨');
            });
        }

        function renderGalas() {
            $('#statGalas').textContent = state.galas.length;
            const active = state.galas.find(function(g) {
                return g.id === state.activeId;
            });
            $('#statActive').textContent = active ?
                (active.name.length > 14 ? active.name.slice(0, 14) + '…' : active.name) :
                '—';

            function listHtml(list) {
                if (!list.length) return '<div class="empty-state">No saved galas yet.</div>';
                return list.map(function(g) {
                    const activeChip = state.activeId === g.id ? '<span class="chip chip-coral">Active</span> ' :
                        '';
                    return '<article class="gala-item" data-id="' + g.id + '">' +
                        '<div class="gala-ico">' + (state.activeId === g.id ? '⭐' : '📍') + '</div>' +
                        '<div style="flex:1;min-width:0">' +
                        '<h3 style="font-size:1.05rem">' + escapeHtml(g.name) + '</h3>' +
                        '<p style="color:var(--muted);font-size:.88rem">' + escapeHtml(g.place || '') + '</p>' +
                        '<div style="margin-top:6px">' + activeChip +
                        (g.rating != null ? '<span class="chip">' + g.rating + ' ★</span>' : '') + '</div>' +
                        '<div class="place-actions" style="margin-top:10px">' +
                        '<button class="btn btn-primary btn-sm" data-g="set">Set</button>' +
                        '<button class="btn btn-ghost btn-sm" data-g="send">Tropa</button>' +
                        '<button class="btn btn-ghost btn-sm" data-g="del" style="color:#b91c1c">Delete</button>' +
                        '</div></div></article>';
                }).join('');
            }

            const og = $('#overviewGalas');
            const gl = $('#galaList');
            og.innerHTML = listHtml(state.galas.slice(0, 5));
            gl.innerHTML = listHtml(state.galas);

            [og, gl].forEach(function(box) {
                box.querySelectorAll('.gala-item').forEach(function(row) {
                    const id = row.dataset.id;
                    const g = state.galas.find(function(x) {
                        return x.id === id;
                    });
                    row.querySelectorAll('[data-g]').forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            if (btn.dataset.g === 'set') {
                                setActive(id);
                                showToast('Active: ' + g.name);
                            }
                            if (btn.dataset.g === 'send') sendToTropa(g);
                            if (btn.dataset.g === 'del' && confirm('Delete “' + g.name +
                                    '”?')) removeGala(id);
                        });
                    });
                });
            });
        }

        function switchPanel(name) {
            $$('.panel').forEach(function(p) {
                p.classList.remove('active');
            });
            $$('.nav-item').forEach(function(n) {
                n.classList.toggle('active', n.dataset.panel === name);
            });
            const panel = document.getElementById('panel-' + name);
            if (panel) panel.classList.add('active');
            $('#pageTitle').textContent = {
                overview: 'Overview',
                search: 'Nearby & Search',
                galas: 'My Galas'
            } [name] || name;
            $('#sidebar').classList.remove('open');
            $('#sidebarOverlay').classList.remove('show');
            if (name === 'search' && map) {
                setTimeout(function() {
                    try {
                        google.maps.event.trigger(map, 'resize');
                    } catch (_) {}
                }, 200);
            }
        }

        $$('.nav-item').forEach(function(btn) {
            btn.addEventListener('click', function() {
                switchPanel(btn.dataset.panel);
            });
        });
        $('#menuToggle').addEventListener('click', function() {
            $('#sidebar').classList.add('open');
            $('#sidebarOverlay').classList.add('show');
        });
        $('#sidebarOverlay').addEventListener('click', function() {
            $('#sidebar').classList.remove('open');
            $('#sidebarOverlay').classList.remove('show');
        });
        $('#locateBtn').addEventListener('click', function() {
            switchPanel('search');
            requestLocationAndLoad();
        });
        var allowBtn = $('#allowLocBtn');
        if (allowBtn) allowBtn.addEventListener('click', function() {
            requestLocationAndLoad();
        });
        $$('#cityChips .filter').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var lat = parseFloat(btn.dataset.lat);
                var lon = parseFloat(btn.dataset.lon);
                var name = btn.dataset.name || 'City';
                $$('#cityChips .filter').forEach(function(b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');
                applyLocation(lat, lon, name, lat.toFixed(4) + ', ' + lon.toFixed(4));
                showToast('Location set to ' + name);
            });
        });
        $('#refreshNearbyBtn').addEventListener('click', function() {
            loadNearby();
        });
        $('#searchBtn').addEventListener('click', function() {
            searchPlaces($('#searchInput').value);
        });
        $('#searchInput').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') searchPlaces($('#searchInput').value);
        });
        $$('#catFilters .filter').forEach(function(btn) {
            btn.addEventListener('click', function() {
                $$('#catFilters .filter').forEach(function(b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');
                currentQuery = btn.dataset.query || 'restaurants cafes';
                loadNearby();
            });
        });
        $('#newGalaBtn').addEventListener('click', function() {
            const name = prompt('Gala name?');
            if (!name) return;
            addGala({
                name: name,
                place: '',
                notes: '',
                lat: userLat,
                lon: userLon,
                source: 'manual'
            });
            showToast('Saved');
            switchPanel('galas');
        });

        renderGalas();
        loadMapScript();
    </script>
</body>

</html>
