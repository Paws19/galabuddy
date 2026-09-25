<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>GalaBuddy | Plan it. Explore it. Remember it.</title>
    <meta name="description"
        content="GalaBuddy is your personal gala and travel planner. Plan itineraries, track budgets, discover places, and keep your memories." />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" href="{{ asset('img/gala_logo.png') }}" sizes="32x32">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --ink: #1a2e1a;
            --muted: #5c6b5c;
            --sand: #fffbf0;
            --white: #ffffff;
            --teal: #2d6a4f;
            --teal-2: #40916c;
            --coral: #f4a261;
            --sun: #fbbf24;
            --sky: #48cae4;
            --orange: #e85d04;
            --pin: #f4a261;
            --grad: linear-gradient(135deg, #2d6a4f 0%, #40916c 40%, #f4a261 100%);
            --grad-warm: linear-gradient(135deg, #e85d04 0%, #fbbf24 100%);
            --radius: 22px;
            --shadow: 0 10px 30px -12px rgba(26, 46, 26, .2);
            --shadow-lg: 0 30px 60px -20px rgba(26, 46, 26, .3);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", "Segoe UI", system-ui, -apple-system, sans-serif;
            color: var(--ink);
            background: var(--sand);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        img,
        svg {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1120px, 92%);
            margin-inline: auto;
        }

        section {
            padding: 96px 0;
            position: relative;
        }

        h1,
        h2,
        h3 {
            font-family: "Poppins", "Inter", system-ui, sans-serif;
            line-height: 1.15;
            letter-spacing: -.02em;
        }

        h2 {
            font-size: clamp(1.9rem, 4vw, 2.75rem);
        }

        .eyebrow {
            display: inline-block;
            font-size: .8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: var(--teal);
            background: rgba(45, 106, 79, .12);
            padding: 6px 12px;
            border-radius: 999px;
            margin-bottom: 14px;
        }

        .section-head {
            text-align: center;
            max-width: 640px;
            margin: 0 auto 56px;
        }

        .section-head p {
            color: var(--muted);
            margin-top: 14px;
            font-size: 1.05rem;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 24px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 1rem;
            border: 0;
            cursor: pointer;
            transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--teal);
            color: var(--white);
            box-shadow: 0 8px 20px -8px rgba(45, 106, 79, .5);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px -8px rgba(45, 106, 79, .55);
            background: #245c43;
        }

        .btn-ghost {
            background: var(--white);
            color: var(--ink);
            border: 1px solid #e2e8f0;
        }

        .btn-ghost:hover {
            transform: translateY(-3px);
            border-color: var(--teal);
        }

        .btn-coral {
            background: var(--grad-warm);
            color: var(--white);
            box-shadow: var(--shadow);
        }

        .btn-coral:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        /* Nav */
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            backdrop-filter: blur(14px);
            background: rgba(255, 251, 240, .85);
            border-bottom: 1px solid rgba(26, 46, 26, .06);
            transition: box-shadow .3s ease;
        }

        .nav.scrolled {
            box-shadow: 0 8px 24px -16px rgba(26, 46, 26, .25);
        }

        .nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: -.02em;
        }

        .logo-img {
            height: 58px;
            width: auto;
            object-fit: contain;
            /* Soften the black logo background into the cream nav */
            mix-blend-mode: multiply;
        }

        .footer-logo {
            height: 48px;
            mix-blend-mode: normal;
            filter: brightness(1.05);
        }

        .logo-mark {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: var(--grad);
            display: grid;
            place-items: center;
            color: #fff;
            box-shadow: 0 6px 16px -6px rgba(45, 106, 79, .55);
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
        }

        .logo-mark svg {
            width: 22px;
            height: 22px;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            font-weight: 500;
            color: var(--muted);
        }

        .nav-links a:hover {
            color: var(--ink);
        }

        .nav-cta {
            display: flex;
            gap: 10px;
        }

        .nav-cta .btn {
            padding: 10px 18px;
            font-size: .92rem;
        }

        /* Hero */
        .hero {
            padding: 160px 0 100px;
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            gap: 56px;
            align-items: center;
        }

        .hero h1 {
            font-size: clamp(2.6rem, 6.4vw, 4.4rem);
            font-weight: 800;
        }

        .hero h1 .grad-text {
            background: var(--grad);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .tagline {
            font-weight: 600;
            color: var(--orange);
            margin: 18px 0 12px;
            font-size: 1.1rem;
        }

        .hero p.lead {
            color: var(--muted);
            font-size: 1.1rem;
            max-width: 520px;
        }

        .hero-ctas {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 32px;
        }

        .hero-meta {
            display: flex;
            gap: 18px;
            margin-top: 28px;
            color: var(--muted);
            font-size: .92rem;
            flex-wrap: wrap;
        }

        .hero-meta span::before {
            content: "✓ ";
            color: var(--teal-2);
            font-weight: 700;
        }

        .hero-visual {
            position: relative;
            height: 480px;
        }

        .phone {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 270px;
            height: 470px;
            background: var(--ink);
            border-radius: 40px;
            padding: 12px;
            box-shadow: var(--shadow-lg);
        }

        .screen {
            width: 100%;
            height: 100%;
            background: var(--white);
            border-radius: 30px;
            overflow: hidden;
            padding: 18px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .screen-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 700;
            font-size: .95rem;
        }

        .map-area {
            height: 150px;
            border-radius: 18px;
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(circle at 20% 30%, rgba(255, 255, 255, .7) 0 18px, transparent 19px),
                linear-gradient(135deg, #95d5b2, #48cae4);
        }

        .map-area::after {
            content: "";
            position: absolute;
            inset: 0;
            background: repeating-linear-gradient(60deg, transparent 0 22px, rgba(255, 255, 255, .5) 22px 24px);
        }

        .mini-card {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-radius: 14px;
            background: #f8fafc;
            font-size: .82rem;
            font-weight: 600;
        }

        .mini-dot {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            color: #fff;
            font-size: .9rem;
            flex-shrink: 0;
        }

        .mini-card small {
            display: block;
            color: var(--muted);
            font-weight: 500;
            font-size: .72rem;
        }

        .float-pin {
            position: absolute;
            width: 46px;
            height: 46px;
            border-radius: 50% 50% 50% 0;
            transform: rotate(-45deg);
            background: var(--white);
            box-shadow: var(--shadow);
            display: grid;
            place-items: center;
            animation: float 5s ease-in-out infinite;
        }

        .float-pin span {
            transform: rotate(45deg);
            font-size: 1.1rem;
        }

        .pin-1 {
            top: 2%;
            left: 4%;
            animation-delay: 0s;
        }

        .pin-2 {
            bottom: 6%;
            right: 2%;
            animation-delay: 1.2s;
        }

        .pin-3 {
            top: 30%;
            right: -2%;
            animation-delay: 2.4s;
        }

        .float-card {
            position: absolute;
            background: var(--white);
            border-radius: 16px;
            padding: 12px 14px;
            box-shadow: var(--shadow-lg);
            font-size: .85rem;
            font-weight: 600;
            display: flex;
            gap: 10px;
            align-items: center;
            animation: drift 6s ease-in-out infinite;
        }

        .float-card strong {
            display: block;
            font-size: 1rem;
        }

        .float-card small {
            color: var(--muted);
            font-weight: 500;
        }

        .fc-1 {
            top: 8%;
            right: -4%;
        }

        .fc-2 {
            bottom: 12%;
            left: -6%;
            animation-delay: 1.5s;
        }

        @keyframes float {

            0%,
            100% {
                transform: rotate(-45deg) translateY(0);
            }

            50% {
                transform: rotate(-45deg) translateY(-14px);
            }
        }

        @keyframes drift {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: none;
        }

        /* Cards */
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
        }

        .card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 28px;
            box-shadow: var(--shadow);
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .icon-tile {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: grid;
            place-items: center;
            font-size: 1.5rem;
            margin-bottom: 18px;
            background: var(--sand);
        }

        .card h3 {
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .card p {
            color: var(--muted);
            font-size: .95rem;
        }

        /* Plan */
        .split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
        }

        .split h2 {
            margin-bottom: 18px;
        }

        .split .desc {
            color: var(--muted);
            margin-bottom: 26px;
        }

        .itinerary {
            background: var(--white);
            border-radius: var(--radius);
            padding: 28px;
            box-shadow: var(--shadow-lg);
        }

        .itin-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .itin-head h3 {
            font-size: 1.1rem;
        }

        .chip {
            font-size: .78rem;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 999px;
            background: rgba(251, 191, 36, .2);
            color: #b45309;
        }

        .step {
            display: flex;
            gap: 16px;
            position: relative;
            padding-bottom: 20px;
        }

        .step:last-child {
            padding-bottom: 0;
        }

        .step:not(:last-child)::before {
            content: "";
            position: absolute;
            left: 19px;
            top: 40px;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
        }

        .step-dot {
            width: 40px;
            height: 40px;
            border-radius: 14px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            font-size: 1.1rem;
            color: #fff;
        }

        .step-info {
            flex: 1;
            padding-top: 2px;
        }

        .step-info strong {
            display: block;
        }

        .step-info small {
            color: var(--muted);
        }

        .step-time {
            font-size: .8rem;
            color: var(--muted);
            font-weight: 600;
            padding-top: 4px;
        }

        /* Budget */
        .budget-card {
            background: var(--ink);
            color: var(--white);
            border-radius: var(--radius);
            padding: 30px;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }

        .budget-card::before {
            content: "";
            position: absolute;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f4a261, #fbbf24);
            right: -100px;
            top: -100px;
            opacity: .3;
            filter: blur(30px);
        }

        .budget-card>* {
            position: relative;
        }

        .budget-total {
            font-size: 2.4rem;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            margin: 6px 0 22px;
        }

        .budget-total small {
            font-size: .9rem;
            color: #94a3b8;
            font-weight: 500;
            display: block;
        }

        .bar-row {
            margin-bottom: 16px;
        }

        .bar-label {
            display: flex;
            justify-content: space-between;
            font-size: .92rem;
            margin-bottom: 6px;
        }

        .bar-label span:last-child {
            color: #cbd5e1;
        }

        .bar {
            height: 10px;
            border-radius: 999px;
            background: rgba(255, 255, 255, .1);
            overflow: hidden;
        }

        .bar-fill {
            height: 100%;
            border-radius: 999px;
            width: 0;
            transition: width 1.4s cubic-bezier(.2, .8, .2, 1);
        }

        .budget-note {
            margin-top: 20px;
            font-size: .85rem;
            color: #94a3b8;
        }

        .budget-side {
            display: grid;
            gap: 22px;
        }

        .feature-list {
            list-style: none;
            display: grid;
            gap: 14px;
        }

        .feature-list li {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .feature-list li i {
            font-style: normal;
            width: 28px;
            height: 28px;
            border-radius: 9px;
            background: var(--sand);
            display: grid;
            place-items: center;
            flex-shrink: 0;
            font-size: .9rem;
        }

        .feature-list strong {
            display: block;
        }

        .feature-list small {
            color: var(--muted);
        }

        /* Discover */
        .discover-band {
            background: linear-gradient(180deg, transparent, rgba(45, 106, 79, .06) 40%, transparent);
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 40px;
        }

        .filter {
            border: 1px solid #e2e8f0;
            background: var(--white);
            padding: 9px 18px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .92rem;
            cursor: pointer;
            transition: all .25s ease;
            font-family: inherit;
            color: var(--ink);
        }

        .filter:hover {
            border-color: var(--teal);
        }

        .filter.active {
            background: var(--teal);
            color: var(--white);
            border-color: var(--teal);
        }

        .place-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 22px;
        }

        .place {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform .35s ease, box-shadow .35s ease;
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .place:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: var(--shadow-lg);
        }

        .place-img {
            height: 160px;
            position: relative;
            display: grid;
            place-items: center;
            font-size: 3.2rem;
            background-size: cover;
            background-position: center;
            transition: transform .5s ease;
            overflow: hidden;
        }

        .place-img::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .3), transparent 60%);
        }

        .place:hover .place-img {
            transform: scale(1.06);
        }

        .place-tag {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(255, 255, 255, .92);
            color: var(--ink);
            font-size: .74rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 999px;
            z-index: 2;
        }

        .place-img .emoji-fallback {
            position: relative;
            z-index: 1;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, .35));
        }

        .place-body {
            padding: 18px 20px 20px;
            display: flex;
            flex-direction: column;
            gap: 6px;
            flex: 1;
        }

        .place-body h3 {
            font-size: 1.1rem;
        }

        .place-body p {
            color: var(--muted);
            font-size: .9rem;
        }

        .place-foot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 12px;
        }

        .place-foot small {
            color: var(--muted);
            font-weight: 600;
        }

        .save-btn {
            border: 0;
            background: #f1f5f9;
            padding: 7px 14px;
            border-radius: 999px;
            font-weight: 600;
            cursor: pointer;
            font-family: inherit;
            font-size: .85rem;
            transition: all .25s ease;
        }

        .save-btn.saved {
            background: var(--orange);
            color: #fff;
        }

        /* Destinations */
        .dest-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
        }

        .dest {
            position: relative;
            height: 300px;
            border-radius: var(--radius);
            overflow: hidden;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 22px;
            box-shadow: var(--shadow);
            transition: transform .4s ease;
            background-size: cover;
            background-position: center;
        }

        .dest:hover {
            transform: translateY(-6px);
        }

        .dest::before {
            content: "";
            position: absolute;
            inset: 0;
            background: inherit;
            background-size: cover;
            background-position: center;
            transition: transform .5s ease;
        }

        .dest:hover::before {
            transform: scale(1.08);
        }

        .dest::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 25%, rgba(15, 23, 42, .82));
        }

        .dest>* {
            position: relative;
            z-index: 1;
        }

        .dest .big {
            position: absolute;
            top: 18px;
            right: 18px;
            font-size: 2.2rem;
            z-index: 1;
            transition: transform .5s ease;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, .3));
        }

        .dest:hover .big {
            transform: rotate(-10deg) scale(1.15);
        }

        .dest h3 {
            font-size: 1.35rem;
        }

        .dest small {
            opacity: .9;
            font-size: .88rem;
        }

        .d1 {
            background-image: linear-gradient(135deg, rgba(45, 106, 79, .4), rgba(26, 46, 26, .5)), url('https://ik.imagekit.io/tvlk/blog/2024/08/shutterstock_1898972338.jpg');
        }

        .d2 {
            background-image: linear-gradient(135deg, rgba(45, 106, 79, .35), rgba(26, 46, 26, .5)), url('https://visita.baguio.gov.ph/_next/image?url=%2Flanding%2Ftours.jpg&w=3840&q=75');
        }

        .d3 {
            background-image: linear-gradient(135deg, rgba(232, 93, 4, .3), rgba(26, 46, 26, .55)), url('https://discovery.s14-host.com/media/3067/01JWQBSJSP28YAD1D435MHQ5RA.webp');
        }

        .d4 {
            background-image: linear-gradient(135deg, rgba(0, 119, 182, .3), rgba(26, 46, 26, .5)), url('https://www.bria.com.ph/wp-content/uploads/2022/01/BATANGAS.png');
        }

        .d5 {
            background-image: linear-gradient(135deg, rgba(232, 93, 4, .25), rgba(26, 46, 26, .55)), url('https://www.manila-hotel.com.ph/wp-content/uploads/2020/08/Luneta_Rizal_Monument-1024x683.jpg');
        }

        /* Audience */
        .audience {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 18px;
        }

        .aud {
            background: var(--white);
            border-radius: var(--radius);
            padding: 26px 20px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: transform .3s ease, background .3s ease, color .3s ease;
        }

        .aud:hover {
            transform: translateY(-6px);
            background: var(--teal);
            color: var(--white);
        }

        .aud:hover p {
            color: rgba(255, 255, 255, .8);
        }

        .aud .icon-tile {
            margin: 0 auto 14px;
        }

        .aud h3 {
            font-size: 1.05rem;
            margin-bottom: 6px;
        }

        .aud p {
            color: var(--muted);
            font-size: .86rem;
        }

        /* Memories */
        .memories {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: 150px;
            gap: 14px;
        }

        .mem {
            border-radius: 20px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: #fff;
            font-size: .9rem;
            font-weight: 600;
            box-shadow: var(--shadow);
            transition: transform .35s ease;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
        }

        .mem::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, .15) 60%, transparent);
            z-index: 0;
        }

        .mem>* {
            position: relative;
            z-index: 1;
        }

        .mem:hover {
            transform: scale(1.03) rotate(-1deg);
        }

        .mem small {
            font-weight: 500;
            opacity: .9;
        }

        .mem-a {
            grid-column: span 2;
            grid-row: span 2;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRPzJ0VgKdrbQonJIoT2gV6KxL-MufQPv0HtxlmnJhC_Rtvuo4vpew_pqX&s=10');
        }

        .mem-b {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaahkkyGbRhn9NbTqXgsZDxdB1bqYV0n-HR6jWXbY0pg&s=10');
        }

        .mem-c {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqsnMLqFwNNVjSGCgY1HPaeONf73hsDK3xrBkWSP_Q_Ybq_RfeNimHLVBu&s=10');
        }

        .mem-d {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdpmBuMNYgeAqJbQ-gOWc5EQ_kX__zJJm8AinD3_830vB-QMGwvit-8xd_&s=10');
        }

        .mem-e {
            grid-column: span 2;
            background-image: linear-gradient(135deg, rgba(26, 46, 26, .85), rgba(45, 106, 79, .8)), url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=700&q=80');
        }

        .mem-f {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM1IbonaAUvU7PFROJrsUt_n2NtX6gtTXSRia9YglL8A&s=10');
        }

        .mem-g {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1qYUkPWPc5ZvBwDVsc_0_jrtonUnp9Rf9X4Oxuj5OnPcv71zS7DQ6mK0&s=10');
        }

        .mem-emoji {
            font-size: 2.2rem;
            position: absolute;
            top: 14px;
            right: 16px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, .4));
        }

        /* Stats */
        .stats-band {
            background: linear-gradient(135deg, #1a2e1a 0%, #2d6a4f 100%);
            color: var(--white);
            border-radius: 32px;
            padding: 56px 32px;
            position: relative;
            overflow: hidden;
        }

        .stats-band::after {
            content: "";
            position: absolute;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f4a261, #fbbf24);
            left: -140px;
            bottom: -220px;
            opacity: .25;
            filter: blur(50px);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .stat-num {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-size: clamp(2.4rem, 5vw, 3.4rem);
        }

        .stat-num .grad-text {
            background: var(--grad-warm);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .stat-label {
            color: #94a3b8;
            font-weight: 500;
        }

        /* Final CTA */
        .final-cta {
            background: linear-gradient(135deg, #2d6a4f 0%, #40916c 35%, #e85d04 100%);
            border-radius: 36px;
            padding: 72px 32px;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .final-cta h2 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            margin-bottom: 16px;
        }

        .final-cta p {
            max-width: 560px;
            margin: 0 auto 32px;
            opacity: .92;
            font-size: 1.1rem;
        }

        .final-cta .btn-primary {
            background: var(--white);
            color: var(--ink);
        }

        .final-cta .btn-ghost {
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, .6);
        }

        .final-cta .btn-ghost:hover {
            border-color: #fff;
        }

        .final-cta .btns {
            display: flex;
            gap: 14px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, .12);
            animation: drift 8s ease-in-out infinite;
        }

        .b1 {
            width: 220px;
            height: 220px;
            top: -80px;
            left: -60px;
        }

        .b2 {
            width: 160px;
            height: 160px;
            bottom: -60px;
            right: 8%;
            animation-delay: 2s;
        }

        /* Footer */
        footer {
            padding: 40px 0 48px;
            color: var(--muted);
            font-size: .92rem;
        }

        .footer-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-links {
            display: flex;
            gap: 22px;
        }

        .footer-links a:hover {
            color: var(--ink);
        }

        /* Toast */
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
            transition: transform .4s cubic-bezier(.2, .8, .2, 1);
            font-weight: 500;
            font-size: .95rem;
        }

        .toast.show {
            transform: translate(-50%, 0);
        }

        /* Responsive */
        @media (max-width: 960px) {

            .hero-grid,
            .split {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 130px;
            }

            .hero-visual {
                height: 460px;
                max-width: 420px;
                margin: 0 auto;
                width: 100%;
            }

            .memories {
                grid-template-columns: repeat(2, 1fr);
                grid-auto-rows: 140px;
            }

            .mem-a,
            .mem-e {
                grid-column: span 2;
            }

            .mem-a {
                grid-row: span 2;
            }

            .nav-links {
                display: none;
            }
        }

        @media (max-width: 600px) {
            section {
                padding: 72px 0;
            }

            .nav-cta .btn-ghost {
                display: none;
            }

            .hero-ctas .btn {
                flex: 1 1 100%;
            }

            .float-card {
                display: none;
            }

            .stats-band,
            .final-cta {
                border-radius: 26px;
                padding: 48px 22px;
            }

            .budget-card,
            .itinerary,
            .card {
                padding: 22px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <header class="nav" id="nav">
        <div class="container">
            <a href="#top" class="logo">
                <img src="{{ asset('img/gala_logo.png') }}" alt="GalaBuddy" class="logo-img" />
                Gala Buddy
            </a>
            <nav class="nav-links">
                <a href="#plan">Plan</a>
                <a href="#budget">Budget</a>
                <a href="#discover">Discover</a>
                <a href="#memories">Memories</a>
                <a href="#destinations">Destinations</a>
            </nav>
            <div class="nav-cta">
                <a href="#" class="btn btn-ghost">Log in</a>
                <a href="#final" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero" id="top">
        <div class="container hero-grid">
            <div class="reveal">
                <span class="eyebrow">Your travel & gala companion</span>
                <h1>Your next <span class="grad-text">gala</span> starts here.</h1>
                <p class="tagline">Plan it. Explore it. Remember it.</p>
                <p class="lead">Map out cafés, meals, tourist spots, and sunset stops in one place. Track every peso,
                    discover hidden gems, and keep the memories your friends will bring up for years.</p>
                <div class="hero-ctas">
                    <a href="#plan" class="btn btn-coral">Plan a Gala →</a>
                    <a href="#discover" class="btn btn-ghost">Explore Places</a>
                </div>
                <div class="hero-meta">
                    <span>Free to start</span>
                    <span>Works offline-ready</span>
                    <span>Built for groups</span>
                </div>
            </div>

            <div class="hero-visual reveal" aria-hidden="true">
                <div class="phone">
                    <div class="screen">
                        <div class="screen-head">
                            <span>Tagaytay Gala</span>
                            <span class="chip">Sat</span>
                        </div>
                        <div class="map-area"></div>
                        <div class="mini-card">
                            <div class="mini-dot" style="background:#f97316">☕</div>
                            <div>Café Ridge<small>9:00 AM · Ridge view</small></div>
                        </div>
                        <div class="mini-card">
                            <div class="mini-dot" style="background:#0d9488">🍲</div>
                            <div>Bulalo Lunch<small>12:30 PM · Lakeside</small></div>
                        </div>
                        <div class="mini-card">
                            <div class="mini-dot" style="background:#7c3aed">🌅</div>
                            <div>Sunset Point<small>5:30 PM · Free entry</small></div>
                        </div>
                    </div>
                </div>
                <div class="float-pin pin-1"><span>🏞️</span></div>
                <div class="float-pin pin-2"><span>🍜</span></div>
                <div class="float-pin pin-3"><span>☕</span></div>
                <div class="float-card fc-1">
                    <span style="font-size:1.4rem">🎒</span>
                    <div><strong>₱2,480</strong><small>Trip budget · 62% left</small></div>
                </div>
                <div class="float-card fc-2">
                    <span style="font-size:1.4rem">📸</span>
                    <div><strong>34 photos</strong><small>Saved to your memories</small></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PLAN -->
    <section id="plan">
        <div class="container split">
            <div class="reveal">
                <span class="eyebrow">Plan Your Gala</span>
                <h2>Build a day that flows from coffee to sunset.</h2>
                <p class="desc">Drag stops into place, set times, and share the plan with your squad. GalaBuddy keeps
                    every stop, route, and reservation in one timeline.</p>
                <a href="#final" class="btn btn-primary">Start an Itinerary</a>
            </div>

            <div class="itinerary reveal">
                <div class="itin-head">
                    <h3>Sample: Tagaytay Day Out</h3>
                    <span class="chip">5 stops</span>
                </div>
                <div class="step">
                    <div class="step-dot" style="background:#f97316">☕</div>
                    <div class="step-info"><strong>Café</strong><small>Ridge-view coffee &amp; pastries</small></div>
                    <div class="step-time">9:00</div>
                </div>
                <div class="step">
                    <div class="step-dot" style="background:#0d9488">🍽️</div>
                    <div class="step-info"><strong>Lunch</strong><small>Bulalo by the lake</small></div>
                    <div class="step-time">12:00</div>
                </div>
                <div class="step">
                    <div class="step-dot" style="background:#2563eb">🏛️</div>
                    <div class="step-info"><strong>Tourist Spot</strong><small>Taal Vista viewpoint</small></div>
                    <div class="step-time">14:00</div>
                </div>
                <div class="step">
                    <div class="step-dot" style="background:#ec4899">🌅</div>
                    <div class="step-info"><strong>Sunset</strong><small>Golden-hour photo stop</small></div>
                    <div class="step-time">17:30</div>
                </div>
                <div class="step">
                    <div class="step-dot" style="background:#a855f7">🍷</div>
                    <div class="step-info"><strong>Dinner</strong><small>Friends, finally seated</small></div>
                    <div class="step-time">19:00</div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUDGET -->
    <section id="budget" style="padding-top:0">
        <div class="container split">
            <div class="budget-card reveal">
                <span class="chip" style="background:rgba(255,255,255,.12);color:#fde68a">Sample summary</span>
                <div class="budget-total">₱3,150 <small>Total spending · Budget ₱4,000</small></div>
                <div class="bar-row">
                    <div class="bar-label"><span>🚌 Transportation</span><span>₱900</span></div>
                    <div class="bar">
                        <div class="bar-fill" data-width="28%" style="background:var(--sky)"></div>
                    </div>
                </div>
                <div class="bar-row">
                    <div class="bar-label"><span>🍜 Food</span><span>₱1,450</span></div>
                    <div class="bar">
                        <div class="bar-fill" data-width="46%" style="background:var(--coral)"></div>
                    </div>
                </div>
                <div class="bar-row">
                    <div class="bar-label"><span>🎟️ Entrance fees</span><span>₱800</span></div>
                    <div class="bar">
                        <div class="bar-fill" data-width="25%" style="background:var(--sun)"></div>
                    </div>
                </div>
                <p class="budget-note">You're ₱850 under budget for this gala.</p>
            </div>

            <div class="budget-side reveal">
                <div>
                    <span class="eyebrow">Track Your Budget</span>
                    <h2>Know what you spent before the trip ends.</h2>
                </div>
                <ul class="feature-list">
                    <li>
                        <i>💰</i>
                        <div><strong>Set a budget per gala</strong><small>Split by category or by day.</small></div>
                    </li>
                    <li>
                        <i>🧾</i>
                        <div><strong>Log expenses in seconds</strong><small>Add a fare or meal with one tap.</small>
                        </div>
                    </li>
                    <li>
                        <i>👥</i>
                        <div><strong>Split costs with friends</strong><small>Who owes what, sorted
                                automatically.</small></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- DISCOVER -->
    <section id="discover" class="discover-band">
        <div class="container">
            <div class="section-head reveal">
                <span class="eyebrow">Discover Places</span>
                <h2>Find your next favorite spot.</h2>
                <p>Cafés, restaurants, nature escapes, nightlife, and landmarks — curated for people who love going out.
                </p>
            </div>

            <div class="filters reveal" id="filters">
                <button class="filter active" data-filter="all">All</button>
                <button class="filter" data-filter="cafe">Cafés</button>
                <button class="filter" data-filter="food">Restaurants</button>
                <button class="filter" data-filter="nature">Nature</button>
                <button class="filter" data-filter="fun">Entertainment</button>
                <button class="filter" data-filter="tourist">Tourist Spots</button>
            </div>

            <div class="place-grid" id="placeGrid">
                <article class="place reveal" data-cat="cafe">
                    <div class="place-img"
                        style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLxMxad3wKdecK1OJ2OWdGQzAGMamYomsX35-VMDiD9Z7Iq38sabuhnGBO&s=10')">
                    </div>
                    <div class="place-body">
                        <h3>Dear Joe Coffee & Juice</h3>
                        <p>Slow mornings with a view of the ridge.</p>
                        <div class="place-foot">
                            <small>⭐ 4.8 · Tagaytay</small>
                            <button class="save-btn">Save</button>
                        </div>
                    </div>
                </article>
                <article class="place reveal" data-cat="food">
                    <div class="place-img"
                        style="background-image:url('https://www.kkday.com/en-ph/blog/wp-content/uploads/bulalo_tagaytay.jpg">
                    </div>
                    <div class="place-body">
                        <h3>Lakeside Bulalo House</h3>
                        <p>Hearty soup, best shared with a group.</p>
                        <div class="place-foot">
                            <small>⭐ 4.7 · Tagaytay</small>
                            <button class="save-btn">Save</button>
                        </div>
                    </div>
                </article>
                <article class="place reveal" data-cat="nature">
                    <div class="place-img"
                        style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxb8KpmW3IijbsS_vFermndjxS4ADCLXfepFTSLn0YTtrvcPCHCmEQjYbs&s=10')">
                    </div>
                    <div class="place-body">
                        <h3>Mines View Trail</h3>
                        <p>Pine-scented walks and cool mountain air.</p>
                        <div class="place-foot">
                            <small>⭐ 4.9 · Baguio</small>
                            <button class="save-btn">Save</button>
                        </div>
                    </div>
                </article>
                <article class="place reveal" data-cat="fun">
                    <div class="place-img"
                        style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg_5gMwqfq_cexlfTci9Xk_JnWJGJZkpLh-co1he5Wv0N7DZNQa18M-eCF&s=10')">
                    </div>
                    <div class="place-body">
                        <h3>Rooftop Night Lounge</h3>
                        <p>Live music and skyline views in Makati.</p>
                        <div class="place-foot">
                            <small>⭐ 4.6 · Makati</small>
                            <button class="save-btn">Save</button>
                        </div>
                    </div>
                </article>
                <article class="place reveal" data-cat="tourist">
                    <div class="place-img"
                        style="background-image:url('https://www.kkday.com/en-ph/blog/wp-content/uploads/manila_intramuros_streetscape-1170x680.jpg')">
                    </div>
                    <div class="place-body">
                        <h3>Intramuros Walk</h3>
                        <p>Cobblestone streets and old-Manila stories.</p>
                        <div class="place-foot">
                            <small>⭐ 4.7 · Manila</small>
                            <button class="save-btn">Save</button>
                        </div>
                    </div>
                </article>
                <article class="place reveal" data-cat="nature">
                    <div class="place-img"
                        style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXemgzFFO_iFoledigyNuWoRhjHmTRuv90_mHOIxJn1N9SmYyS7DhIQQF5&s=10')">
                    </div>
                    <div class="place-body">
                        <h3>Sabang Beach Day</h3>
                        <p>Sand, waves, and a sunset worth the drive.</p>
                        <div class="place-foot">
                            <small>⭐ 4.8 · Batangas</small>
                            <button class="save-btn">Save</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- DESTINATIONS -->
    <section id="destinations">
        <div class="container">
            <div class="section-head reveal">
                <span class="eyebrow">Destinations</span>
                <h2>Philippine adventures, ready to plan.</h2>
                <p>From misty mountains to city nights — a few favorites to start your next gala.</p>
            </div>
            <div class="dest-grid">
                <a href="#final" class="dest d1 ">
                    <h3>Tagaytay</h3>
                    <small>Ridge views &amp; lakeside food</small>
                </a>
                <a href="#final" class="dest d2 reveal">
                    <h3>Baguio</h3>
                    <small>Pine trails &amp; strawberry farms</small>
                </a>
                <a href="#final" class="dest d3 reveal">
                    <h3>Makati</h3>
                    <small>Cafés, rooftops &amp; nightlife</small>
                </a>
                <a href="#final" class="dest d4 reveal">
                    <h3>Batangas</h3>
                    <small>Beaches &amp; coastal seafood</small>
                </a>
                <a href="#final" class="dest d5 reveal">
                    <h3>Manila</h3>
                    <small>Heritage sites &amp; street eats</small>
                </a>
            </div>
        </div>
    </section>

    <!-- MEMORIES -->
    <section id="memories" style="padding-top:0">
        <div class="container">
            <div class="section-head reveal">
                <span class="eyebrow">Keep Your Memories</span>
                <h2>Every gala, saved.</h2>
                <p>Upload photos, pin visited places, and relive the best moments whenever you want.</p>
            </div>
            <div class="memories reveal">
                <div class="mem mem-a">
                    <strong>Sunset at Taal Vista</strong>
                    <small>12 photos · Tagaytay</small>
                </div>
                <div class="mem mem-b"><strong>Bulalo Lunch</strong><small>Lakeside · 4 photos</small></div>
                <div class="mem mem-c"><strong>Mines View</strong><small>Baguio · 6 photos</small></div>
                <div class="mem mem-d"><strong>Rooftop Night</strong><small>Makati</small></div>
                <div class="mem mem-e">
                    <span class="mem-emoji">📍</span>
                    <strong>12 places visited</strong>
                    <small>Your map is growing</small>
                </div>
                <div class="mem mem-f"><strong>Café Crawl</strong><small>8 cafés</small></div>
                <div class="mem mem-g"><strong>Beach Weekend</strong><small>Batangas · 9 photos</small></div>
            </div>
        </div>
    </section>

    <!-- AUDIENCE -->
    <section id="audience" style="padding-top:0">
        <div class="container">
            <div class="section-head reveal">
                <span class="eyebrow">Perfect for Every Gala</span>
                <h2>However you like to explore.</h2>
            </div>
            <div class="audience">
                <div class="aud reveal">
                    <div class="icon-tile">🧳</div>
                    <h3>Solo Trips</h3>
                    <p>Go at your own pace.</p>
                </div>
                <div class="aud reveal">
                    <div class="icon-tile">👯</div>
                    <h3>Friends</h3>
                    <p>Plan together, split costs.</p>
                </div>
                <div class="aud reveal">
                    <div class="icon-tile">💞</div>
                    <h3>Date Days</h3>
                    <p>Cozy cafés and sunsets.</p>
                </div>
                <div class="aud reveal">
                    <div class="icon-tile">👨‍👩‍👧</div>
                    <h3>Family Trips</h3>
                    <p>Stops for every age.</p>
                </div>
                <div class="aud reveal">
                    <div class="icon-tile">⚡</div>
                    <h3>Spontaneous Adventures</h3>
                    <p>Last-minute, no plans needed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section style="padding-top:0">
        <div class="container">
            <div class="stats-band reveal">
                <div class="stats">
                    <div>
                        <div class="stat-num"><span class="count" data-target="12">0</span><span
                                class="grad-text">+</span></div>
                        <div class="stat-label">Places Explored</div>
                    </div>
                    <div>
                        <div class="stat-num"><span class="grad-text">₱</span><span class="count"
                                data-target="25">0</span><span class="grad-text">K+</span></div>
                        <div class="stat-label">Expenses Tracked</div>
                    </div>
                    <div>
                        <div class="stat-num"><span class="count" data-target="50">0</span><span
                                class="grad-text">+</span></div>
                        <div class="stat-label">Galas Planned</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section id="final" style="padding-top:0">
        <div class="container">
            <div class="final-cta reveal">
                <div class="blob b1"></div>
                <div class="blob b2"></div>
                <h2>Your next adventure is one plan away.</h2>
                <p>Pick a destination, add your friends, and let GalaBuddy handle the rest. Plan it. Explore it.
                    Remember it.</p>
                <div class="btns">
                    <button class="btn btn-primary" id="startBtn">Start Planning Free</button>
                    <a href="#discover" class="btn btn-ghost">Explore Places</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-wrap">
            <div class="logo" style="font-size:1.1rem">
                <img src="{{ asset('img/gala_logo.png') }}" alt="GalaBuddy" class="logo-img footer-logo" />
                Gala Buddy
            </div>
            <div class="footer-links">
                <a href="#plan">Plan</a>
                <a href="#discover">Discover</a>
                <a href="#memories">Memories</a>
                <a href="#">Privacy</a>
            </div>
            <span>© 2026 GalaBuddy. Plan it. Explore it. Remember it.</span>
        </div>
    </footer>

    <div class="toast" id="toast">Saved to your gala list ✨</div>

    <script>
        // Sticky nav shadow
        const nav = document.getElementById('nav');
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 10), {
            passive: true
        });

        // Fade-in on scroll
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // Animate budget bars and counters when visible
        const animateObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.querySelectorAll('.bar-fill').forEach(bar => {
                    bar.style.width = bar.dataset.width;
                });
                entry.target.querySelectorAll('.count').forEach(counter => {
                    const target = +counter.dataset.target;
                    const start = performance.now();
                    const tick = (now) => {
                        const p = Math.min((now - start) / 1400, 1);
                        counter.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
                        if (p < 1) requestAnimationFrame(tick);
                    };
                    requestAnimationFrame(tick);
                });
                animateObserver.unobserve(entry.target);
            });
        }, {
            threshold: 0.3
        });
        document.querySelectorAll('.budget-card, .stats-band').forEach(el => animateObserver.observe(el));

        // Destination filters
        const filterButtons = document.querySelectorAll('.filter');
        const places = document.querySelectorAll('.place');
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const f = btn.dataset.filter;
                places.forEach(p => {
                    const show = f === 'all' || p.dataset.cat === f;
                    p.style.display = show ? '' : 'none';
                });
            });
        });

        // Toast helper
        const toast = document.getElementById('toast');
        let toastTimer;

        function showToast(msg) {
            toast.textContent = msg;
            toast.classList.add('show');
            clearTimeout(toastTimer);
            toastTimer = setTimeout(() => toast.classList.remove('show'), 2200);
        }

        // Save buttons
        document.querySelectorAll('.save-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const saved = btn.classList.toggle('saved');
                btn.textContent = saved ? 'Saved ✓' : 'Save';
                showToast(saved ? 'Added to your gala list ✨' : 'Removed from your gala list');
            });
        });

        // Start planning CTA
        document.getElementById('startBtn').addEventListener('click', () => {
            showToast('Sign-up coming soon. Welcome aboard! 🎉');
        });
    </script>
</body>

</html>
