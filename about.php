<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About — Makutano Digital</title>
  <link rel="icon" type="image/png" href="assets/logo.png">
  <link rel="apple-touch-icon" href="assets/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box}
    body{margin:0;background:#1e3a5f;color:#fff;font-family:Manrope,system-ui,sans-serif}
    a{color:#ffbd59;text-decoration:none}
    a:hover{color:#fff}
    .lang-sw{display:none}
    html[lang="sw"] .lang-en{display:none}
    html[lang="sw"] .lang-sw{display:inline}
    @keyframes mkMarquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
    @keyframes mkFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-14px)}}
    @keyframes mkBreathe{0%,100%{filter:brightness(.82) saturate(1);transform:scale(1)}50%{filter:brightness(1.3) saturate(1.2);transform:scale(1.015)}}
    .mk-gradtext{background:conic-gradient(from 200deg,#fff,#ffbd59,#fff,#ffbd59,#fff);-webkit-background-clip:text;background-clip:text;color:transparent;display:inline-block;animation:mkBreathe 3.2s ease-in-out infinite}
    html[data-theme="light"] .mk-gradtext{background:conic-gradient(from 200deg,#1e3a5f,#ffbd59,#1e3a5f,#ffbd59,#1e3a5f);-webkit-background-clip:text;background-clip:text}
    .mk-link{animation:mkFloat 7s ease-in-out infinite}
    .mk-cta{transition:transform .22s ease,box-shadow .22s ease}
    .mk-cta:hover,.mk-cta:active{transform:translateY(-4px);box-shadow:0 16px 20px -12px rgba(0,0,0,.4),0 20px 34px -10px rgba(255,189,89,.45)}
    .mk-langtoggle{cursor:pointer;user-select:none;color:rgba(255,255,255,.82);display:inline-block;transition:color .18s ease,border-color .18s ease,transform .18s ease,box-shadow .18s ease}
    .mk-langtoggle:hover,.mk-langtoggle:active{color:#fff;border-color:rgba(255,255,255,.6);transform:translateY(-2px);box-shadow:0 10px 18px -10px rgba(0,0,0,.4)}
    .mk-navlink{color:rgba(255,255,255,.82);font:500 12.5px 'Space Grotesk',sans-serif;padding-bottom:3px;border-bottom:1.5px solid transparent;transition:color .18s ease,border-color .18s ease}
    .mk-navlink:hover{color:#fff;border-bottom-color:rgba(255,255,255,.4)}
    .mk-navlink[aria-current="page"]{color:#fff;border-bottom-color:#ffbd59}
    .mk-svcrow{transition:background .25s ease,padding-left .25s ease}
    .mk-svcrow:hover{background:rgba(255,255,255,.06);padding-left:60px}
    .mk-svcrow:hover .mk-arrow{opacity:1;transform:translateX(0)}
    .mk-arrow{opacity:0;transform:translateX(-8px);transition:all .25s ease;color:#ffbd59}
    .mk-field{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.2);border-radius:8px;padding:13px 15px;color:#fff;font:400 14px Manrope,sans-serif;outline:none;transition:border-color .18s ease}
    .mk-field:focus{border-color:#ffbd59}
    .mk-vcard{transition:transform .3s ease,box-shadow .3s ease,border-color .3s ease,background .3s ease;cursor:default}
    .mk-vcard:hover,.mk-vcard:active{transform:translateY(-8px);border-color:rgba(255,189,89,.55);background:rgba(255,255,255,.04);box-shadow:0 24px 20px -18px rgba(0,0,0,.45),0 30px 45px -12px rgba(0,0,0,.4)}
    html[data-theme="light"] .mk-vcard:hover,html[data-theme="light"] .mk-vcard:active{border-color:rgba(255,189,89,.7);background:rgba(30,58,95,.03);box-shadow:0 24px 20px -18px rgba(30,58,95,.16),0 30px 45px -12px rgba(30,58,95,.22)}
    .mk-field::placeholder{color:rgba(255,255,255,.4)}
    .mk-menubtn{display:none;transition:border-color .18s ease,color .18s ease,transform .18s ease,box-shadow .18s ease}
    .mk-themebtn{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;padding:0;background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:rgba(255,255,255,.82);cursor:pointer;transition:color .18s ease,border-color .18s ease,transform .18s ease,box-shadow .18s ease}
    .mk-themebtn:hover,.mk-themebtn:active{color:#fff;border-color:rgba(255,255,255,.6);transform:translateY(-2px) scale(1.05);box-shadow:0 10px 18px -10px rgba(0,0,0,.4)}
    html[data-theme="light"] body{background:#f7f5f0;color:#141414}
    html[data-theme="light"] .mk-svcrow:hover{background:rgba(20,20,20,.05)}
    html[data-theme="light"] .mk-field{background:rgba(20,20,20,.04);border-color:rgba(20,20,20,.2);color:#141414}
    html[data-theme="light"] .mk-field::placeholder{color:rgba(20,20,20,.4)}
    html[data-theme="light"] .mk-cta:hover,html[data-theme="light"] .mk-cta:active{box-shadow:0 16px 20px -12px rgba(30,58,95,.3),0 20px 34px -10px rgba(255,189,89,.5)}
    html[data-theme="light"] img[alt="Makutano Digital"],html[data-theme="light"] .mk-link{filter:none}
    @media (max-width:900px){
      .mk-hero h1{font-size:46px !important}
      .mk-nav{position:absolute;top:100%;left:0;right:0;flex-direction:column;align-items:flex-start !important;gap:18px !important;background:#16304f;padding:24px 46px;border-bottom:1px solid rgba(255,255,255,.14);z-index:20}
      .mk-nav[data-open="false"]{display:none !important}
      .mk-menubtn{display:block}
      .mk-grid{grid-template-columns:1fr !important}
      .mk-pad{padding-left:22px !important;padding-right:22px !important}
    }
  </style>
</head>
<body>
<div style="background:#1e3a5f;color:#fff;font-family:'Space Grotesk',sans-serif;position:relative;overflow:hidden">
<div class="mk-link" style="position:absolute;right:-90px;top:60px;width:520px;height:520px;opacity:.13;pointer-events:none">
  <div style="position:absolute;left:0;top:0;width:330px;height:330px;border:34px solid #ffbd59;border-radius:70px"></div>
  <div style="position:absolute;left:180px;top:180px;width:330px;height:330px;border:34px solid #fff;border-radius:70px"></div>
</div>
<div class="mk-fixedbar mk-pad" style="position:relative;display:flex;align-items:center;justify-content:space-between;padding:20px 46px;border-bottom:1px solid rgba(255,255,255,.14);background:#1e3a5f">
  <a href="index.php" style="display:flex;align-items:center;gap:12px;color:#fff">
    <img src="assets/logo.png" alt="Makutano Digital" style="width:32px;height:32px;border-radius:7px;display:block;background:#fff">
    <span style="font:700 15px/1 'Space Grotesk',sans-serif;letter-spacing:.04em">MAKUTANO</span>
  </a>
  <div class="mk-nav" data-open="false" style="display:flex;align-items:center;gap:28px">
      <a class="mk-navlink" href="index.php"><span class="lang-en">Home</span><span class="lang-sw">Nyumbani</span></a>
      <a class="mk-navlink" href="services.php"><span class="lang-en">Services</span><span class="lang-sw">Huduma</span></a>
      <a class="mk-navlink" href="about.php" aria-current="page"><span class="lang-en">About</span><span class="lang-sw">Kuhusu</span></a>
      <a class="mk-navlink" href="contact.php"><span class="lang-en">Contact</span><span class="lang-sw">Wasiliana</span></a>
      <span style="font:500 11px 'JetBrains Mono',monospace;padding:5px 9px;border:1px solid rgba(255,255,255,.3);border-radius:999px" class="mk-langtoggle">EN / SW</span>
      <button class="mk-themebtn" aria-label="Toggle theme" title="Light / dark"><svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="6.6" fill="none" stroke="currentColor" stroke-width="1.4"></circle><path d="M8 1.4a6.6 6.6 0 000 13.2z" fill="currentColor"></path></svg></button>
      <a class="mk-cta" href="contact.php" style="background:#ffbd59;color:#1e3a5f;padding:11px 20px;border-radius:999px;font:700 12.5px 'Space Grotesk',sans-serif"><span class="lang-en">Let's talk</span><span class="lang-sw">Tuzungumze</span></a>
  </div>
  <button class="mk-menubtn" aria-label="Menu" style="background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:8px;color:#fff;font:500 12px 'JetBrains Mono',monospace;padding:8px 12px;cursor:pointer">MENU</button>
</div>
<div class="mk-pad" style="position:relative;padding:74px 46px 56px;max-width:900px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:24px">EXECUTIVE SUMMARY · COMPANY PROFILE 2026</div>
  <h1 style="margin:0 0 22px;font:700 60px/1.02 'Space Grotesk',sans-serif;letter-spacing:-.03em;text-wrap:balance"><span class="lang-en"><span class="mk-gradtext">A Tanzanian digital solutions partnership</span></span><span class="lang-sw"><span class="mk-gradtext">Ushirikiano wa suluhisho za kidijitali wa Tanzania</span></span></h1>
  <p style="margin:0;max-width:620px;font:400 17px/1.62 Manrope,sans-serif;color:rgba(255,255,255,.75);text-wrap:pretty"><span class="lang-en">Established to bridge the gap between opportunity and execution in the country’s fast-growing digital economy.</span><span class="lang-sw">Umeanzishwa kuunganisha fursa na utekelezaji katika uchumi wa kidijitali unaokua kwa kasi wa nchi.</span></p>
</div>
<div class="mk-pad" style="position:relative;padding:64px 46px 64px;border-top:1px solid rgba(255,255,255,.14);text-align:center">
  <h2 style="margin:0 0 14px;font:700 40px/1.15 'Space Grotesk',sans-serif;letter-spacing:-.02em"><span class="lang-en"><span style="color:#fff">Our </span><span style="color:#ffbd59">Core Values</span></span><span class="lang-sw"><span style="color:#fff">Maadili </span><span style="color:#ffbd59">Yetu Makuu</span></span></h2>
  <p style="margin:0 auto 40px;max-width:680px;font:400 16px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.68)"><span class="lang-en">Our core values guide every partnership and drive exceptional results.</span><span class="lang-sw">Maadili yetu makuu yanaongoza kila ushirikiano na kuleta matokeo bora.</span></p>
  <div class="mk-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2.5c2.8 1.6 4.6 4.9 4.6 8.6 0 2.4-.8 4.6-2.1 6.3l-2.5 2.6-2.5-2.6C8.2 15.7 7.4 13.5 7.4 11.1c0-3.7 1.8-7 4.6-8.6Z"></path><circle cx="12" cy="10" r="1.8"></circle><path d="M8.5 15.5 5.5 18l1-3.4"></path><path d="M15.5 15.5 18.5 18l-1-3.4"></path><path d="M9.5 19.5 10 22h4l.5-2.5"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Innovation First</span><span class="lang-sw">Ubunifu Kwanza</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">We harness cutting-edge web and mobile technologies to create practical, future-ready solutions.</span><span class="lang-sw">Tunatumia teknolojia za kisasa za wavuti na simu kuunda suluhisho la vitendo na la baadaye.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Collaboration</span><span class="lang-sw">Ushirikiano</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">We believe in co-creating with our clients, ensuring that every solution reflects both sides of the need.</span><span class="lang-sw">Tunaamini katika kubuni pamoja na wateja wetu, kuhakikisha kila suluhisho linaakisi mahitaji ya pande zote mbili.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="5"></circle><circle cx="12" cy="12" r="1.4" fill="currentColor"></circle></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Impact Driven</span><span class="lang-sw">Matokeo Yenye Athari</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">Every product we build aims to improve lives, empower organizations, and strengthen connections.</span><span class="lang-sw">Kila bidhaa tunayounda inalenga kuboresha maisha, kuwezesha mashirika, na kuimarisha mahusiano.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Integrity &amp; Transparency</span><span class="lang-sw">Uadilifu na Uwazi</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">We value honesty, clear communication, and accountability in every project.</span><span class="lang-sw">Tunathamini uaminifu, mawasiliano wazi, na uwajibikaji katika kila mradi.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 3h12l4 6-10 12L2 9Z"></path><path d="M11 3 8 9l4 12 4-12-3-6"></path><path d="M2 9h20"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Excellence in Delivery</span><span class="lang-sw">Ubora katika Utoaji</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">Quality is at the heart of our work; we ensure reliable, scalable, and user-friendly solutions.</span><span class="lang-sw">Ubora ndio msingi wa kazi yetu; tunahakikisha suluhisho za kuaminika, zinazoweza kukua, na rafiki kwa mtumiaji.</span></p>
    </div>
  </div>
</div>
<div class="mk-pad mk-grid" style="position:relative;display:grid;grid-template-columns:1.25fr .95fr;gap:56px;padding:20px 46px 64px;border-top:1px solid rgba(255,255,255,.14);padding-top:56px">
  <div>
    <p style="margin:0 0 22px;font:400 16px/1.72 Manrope,sans-serif;color:rgba(255,255,255,.8);text-wrap:pretty">Operating at the intersection of technology, real estate, and information services, we exist to give businesses, investors, and institutions a single, trusted partner for building and scaling their digital presence.</p>
    <p style="margin:0 0 40px;font:400 16px/1.72 Manrope,sans-serif;color:rgba(255,255,255,.8);text-wrap:pretty">Our core value proposition centres on digital advertising as our primary line of business, complemented by web solutions, software development, digital consultancy, and emerging digital currency services. We solve a specific market problem: the shortage of integrated, locally-grounded digital partners who understand both global technology standards and the practical realities of operating in the Tanzanian and East African market.</p>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px">
      <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.18);border-radius:12px;padding:26px 24px">
        <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:14px"><span class="lang-en">OUR MISSION</span><span class="lang-sw">DHAMIRA YETU</span></div>
        <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.78)">To empower businesses, investors, and institutions across Tanzania with integrated digital solutions — from advertising and software to consultancy and information services — delivered with international standards of quality and local market insight.</p>
      </div>
      <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.18);border-radius:12px;padding:26px 24px">
        <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:14px"><span class="lang-en">OUR VISION</span><span class="lang-sw">MALENGO YETU</span></div>
        <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.78)">To be East Africa’s most trusted digital partner, recognised for turning emerging technology into practical, measurable growth for the organisations we serve.</p>
      </div>
    </div>
  </div>
  <div>
    <div class="mk-vcard" style="background:rgba(0,0,0,.16);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:30px 28px">
      <div style="font:600 18px/1.3 'Space Grotesk',sans-serif;margin-bottom:6px"><span class="lang-en">Business registration</span><span class="lang-sw">Usajili wa biashara</span></div>
      <p style="margin:0 0 18px;font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.6)"><span class="lang-en">A duly licensed business registered for the provision of local ICT services.</span><span class="lang-sw">Biashara iliyosajiliwa kisheria kwa utoaji wa huduma za TEHAMA za ndani.</span></p>
    <div style="display:flex;justify-content:space-between;gap:20px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)">
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">Business License No.</span><span class="lang-sw">Namba ya Leseni</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">BL01695972026-2700002767</span>
    </div>
    <div style="display:flex;justify-content:space-between;gap:20px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)">
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">Issuing Office</span><span class="lang-sw">Ofisi Iliyotoa</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">Dodoma City Council</span>
    </div>
    <div style="display:flex;justify-content:space-between;gap:20px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)">
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">Tax Identification No.</span><span class="lang-sw">Namba ya Utambulisho wa Kodi</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">205-614-818</span>
    </div>
    <div style="display:flex;justify-content:space-between;gap:20px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)">
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">Business Activity</span><span class="lang-sw">Shughuli ya Biashara</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">ICT Services (Local)</span>
    </div>
    <div style="display:flex;justify-content:space-between;gap:20px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)">
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">Region / Ward</span><span class="lang-sw">Mkoa / Kata</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">Dodoma, Makole</span>
    </div>
    <div style="display:flex;justify-content:space-between;gap:20px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,.12)">
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">Licensed Date</span><span class="lang-sw">Tarehe ya Leseni</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">4 August 2026</span>
    </div>
    </div>
  </div>
</div>
<div class="mk-pad" style="position:relative;padding:64px 46px 64px;border-top:1px solid rgba(255,255,255,.14);text-align:center">
  <h2 style="margin:0 0 14px;font:700 40px/1.15 'Space Grotesk',sans-serif;letter-spacing:-.02em"><span class="lang-en"><span style="color:#fff">Proven </span><span style="color:#ffbd59">Credibility</span></span><span class="lang-sw"><span style="color:#fff">Uaminifu </span><span style="color:#ffbd59">Uliothibitika</span></span></h2>
  <p style="margin:0 auto 40px;max-width:620px;font:400 16px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.68)"><span class="lang-en">Why you can trust us to deliver exceptional results that exceed expectations.</span><span class="lang-sw">Kwa nini unaweza kutuamini kutoa matokeo bora yanayozidi matarajio.</span></p>
  <div class="mk-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;text-align:left">
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Proven Expertise</span><span class="lang-sw">Utaalamu Uliothibitika</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">Our team has strong experience in developing web and mobile applications across diverse industries.</span><span class="lang-sw">Timu yetu ina uzoefu mkubwa katika kutengeneza programu za wavuti na simu katika sekta mbalimbali.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Client-Centered Approach</span><span class="lang-sw">Mkabala Unaomlenga Mteja</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">We put our clients first, listening and tailoring solutions that bridge gaps effectively.</span><span class="lang-sw">Tunawaweka wateja wetu mbele, tukisikiliza na kurekebisha suluhisho zinazoziba mapengo kwa ufanisi.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Trusted Partnerships</span><span class="lang-sw">Ushirikiano wa Kuaminika</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">Organizations and individuals rely on us to deliver solutions that truly unite and create value.</span><span class="lang-sw">Mashirika na watu binafsi wanategemea sisi kutoa suluhisho zinazounganisha kweli na kuongeza thamani.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 7 13.5 15.5 8.5 10.5 2 17"></path><path d="M16 7h6v6"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Continuous Growth</span><span class="lang-sw">Ukuaji Endelevu</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">We stay ahead of digital trends, ensuring our solutions remain relevant and impactful.</span><span class="lang-sw">Tunabaki mbele ya mienendo ya kidijitali, kuhakikisha suluhisho zetu zinabaki muhimu na zenye athari.</span></p>
    </div>
    <div class="mk-vcard" style="border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:26px 24px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:14px">
        <div style="width:44px;height:44px;flex:none;border-radius:999px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;color:#ffbd59">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        </div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif"><span class="lang-en">Commitment to Security &amp; Reliability</span><span class="lang-sw">Dhamira ya Usalama na Kutegemewa</span></div>
      </div>
      <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">We prioritize secure, stable, and dependable technologies for long-term trust.</span><span class="lang-sw">Tunapa kipaumbele teknolojia salama, thabiti, na za kutegemewa kwa uaminifu wa muda mrefu.</span></p>
    </div>
  </div>
</div>
<div class="mk-pad" style="position:relative;padding:56px 46px 64px;border-top:1px solid rgba(255,255,255,.14)">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:26px"><span class="lang-en">LEADERSHIP</span><span class="lang-sw">UONGOZI</span></div>
  <p style="margin:0 0 30px;max-width:620px;font:400 16px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.75)">Makutano Digital is led by a two-member executive team holding overall responsibility for strategy, operations, and client delivery.</p>
  <div class="mk-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
    <div class="mk-vcard" style="display:flex;gap:20px;border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:24px">
      <div style="width:96px;height:112px;flex:none;border-radius:8px;background:rgba(255,255,255,.07);border:1px dashed rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;text-align:center;font:400 9px/1.5 'JetBrains Mono',monospace;color:rgba(255,255,255,.45)">portrait<br>360×420</div>
      <div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif">[Full Name]</div>
        <div style="font:500 11px 'JetBrains Mono',monospace;color:#ffbd59;margin:7px 0 12px">CHIEF EXECUTIVE OFFICER</div>
        <p style="margin:0;font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.7)">Holds overall responsibility for the company’s strategic direction, partnerships, and growth. Degree-qualified.</p>
      </div>
    </div>
    <div class="mk-vcard" style="display:flex;gap:20px;border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:24px">
      <div style="width:96px;height:112px;flex:none;border-radius:8px;background:rgba(255,255,255,.07);border:1px dashed rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;text-align:center;font:400 9px/1.5 'JetBrains Mono',monospace;color:rgba(255,255,255,.45)">portrait<br>360×420</div>
      <div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif">[Full Name]</div>
        <div style="font:500 11px 'JetBrains Mono',monospace;color:#ffbd59;margin:7px 0 12px">MANAGING DIRECTOR</div>
        <p style="margin:0;font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.7)">Oversees day-to-day operations, service delivery, and client engagement across all business lines. Degree-qualified.</p>
      </div>
    </div>
  </div>
  <div style="margin-top:16px;font:400 11px/1.6 'JetBrains Mono',monospace;color:rgba(255,255,255,.4)">Names, degrees and years of experience still to be supplied.</div>
</div>
<div class="mk-fixedbar" style="border-top:1px solid rgba(255,255,255,.14);background:#16304f">
  <div class="mk-pad mk-grid" style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:40px;padding:52px 46px 40px">
    <div>
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
        <img src="assets/logo.png" alt="" style="width:30px;height:30px;border-radius:6px;display:block;background:#fff">
        <span style="font:700 14px/1 'Space Grotesk',sans-serif;letter-spacing:.04em">MAKUTANO DIGITAL</span>
      </div>
      <p style="margin:0;max-width:340px;font:400 13px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.6)"><span class="lang-en">Makutano Digital Company Limited — a duly licensed ICT services provider operating under the laws of the United Republic of Tanzania.</span><span class="lang-sw">Makutano Digital Company Limited — mtoa huduma za TEHAMA aliyesajiliwa kwa mujibu wa sheria za Jamhuri ya Muungano wa Tanzania.</span></p>
    </div>
    <div>
      <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:16px"><span class="lang-en">USEFUL LINKS</span><span class="lang-sw">VIUNGO MUHIMU</span></div>
      <div style="display:flex;flex-direction:column;gap:10px;font:500 13px Manrope,sans-serif">
        <a href="index.php" style="color:rgba(255,255,255,.75)"><span class="lang-en">Home</span><span class="lang-sw">Nyumbani</span></a>
        <a href="services.php" style="color:rgba(255,255,255,.75)"><span class="lang-en">Services</span><span class="lang-sw">Huduma</span></a>
        <a href="about.php" style="color:rgba(255,255,255,.75)"><span class="lang-en">About</span><span class="lang-sw">Kuhusu</span></a>
        <a href="contact.php" style="color:rgba(255,255,255,.75)"><span class="lang-en">Contact</span><span class="lang-sw">Wasiliana</span></a>
      </div>
    </div>
    <div>
      <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:16px"><span class="lang-en">CONTACT</span><span class="lang-sw">MAWASILIANO</span></div>
      <div style="display:flex;flex-direction:column;gap:10px;font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.75)">
        <span>Makole, Dodoma, Tanzania</span>
        <a href="tel:+255745997711" style="color:rgba(255,255,255,.75)">+255 745 997 711</a>
        <a href="mailto:info@makutano.co.tz" style="color:rgba(255,255,255,.75)">info@makutano.co.tz</a>
        <a href="https://www.makutano.co.tz" style="color:rgba(255,255,255,.75)">www.makutano.co.tz</a>
      </div>
    </div>
  </div>
  <div class="mk-pad" style="padding:18px 46px;border-top:1px solid rgba(255,255,255,.1);font:400 11px 'JetBrains Mono',monospace;color:rgba(255,255,255,.4);display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px">
    <span>© 2026 MAKUTANO DIGITAL COMPANY LIMITED</span>
    <span>Developed by <a href="https://moinfo.co.tz" target="_blank" rel="noopener">Moinfotech</a></span>
  </div>
</div>
</div>
  <script>
    (function(){
      var h = document.documentElement;
      try { var s = localStorage.getItem('mk-lang'); if (s) h.lang = s; } catch (e) {}
      document.querySelectorAll('.mk-langtoggle').forEach(function(el){
        el.addEventListener('click', function(){
          h.lang = h.lang === 'sw' ? 'en' : 'sw';
          try { localStorage.setItem('mk-lang', h.lang); } catch (e) {}
        });
      });
      function lighten(prop, val){
        var v = val;
        if (prop.indexOf('background') === 0) {
          if (/rgb\(30, ?58, ?95\)/.test(v)) return '#f7f5f0';
          if (/rgb\(22, ?48, ?79\)/.test(v)) return '#eeeae0';
          if (/rgba\(0, ?0, ?0, ?[0-9.]+\)/.test(v)) return 'rgba(20,20,20,.04)';
          if (/rgba\(255, ?255, ?255, ?[0-9.]+\)/.test(v)) return 'rgba(20,20,20,.045)';
          return v;
        }
        v = v.replace(/rgba\(255, ?255, ?255, ?([0-9.]+)\)/g, 'rgba(20,20,20,$1)');
        if (prop === 'color') v = v.replace(/rgb\(255, ?255, ?255\)/g, '#141414').replace(/rgb\(255, ?189, ?89\)/g, '#a06a12');
        if (prop.indexOf('border') === 0) v = v.replace(/rgb\(255, ?255, ?255\)/g, 'rgba(20,20,20,.2)');
        return v;
      }
      function paint(light){
        var nodes = document.querySelectorAll('[style]');
        for (var i = 0; i < nodes.length; i++) {
          var el = nodes[i];
          if (el.dataset.mkStyle === undefined) el.dataset.mkStyle = el.getAttribute('style');
          el.setAttribute('style', el.dataset.mkStyle);
          if (!light) continue;
          if (el.closest('.mk-fixedbar')) continue;
          var out = [];
          for (var j = 0; j < el.style.length; j++) {
            var p = el.style[j];
            out.push(p + ':' + lighten(p, el.style.getPropertyValue(p)));
          }
          el.setAttribute('style', out.join(';'));
        }
      }
      var mkTheme = 'dark';
      try { mkTheme = localStorage.getItem('mk-theme') || 'dark'; } catch (e) {}
      h.setAttribute('data-theme', mkTheme);
      if (mkTheme === 'light') paint(true);
      document.querySelectorAll('.mk-themebtn').forEach(function(el){
        el.addEventListener('click', function(){
          var light = h.getAttribute('data-theme') !== 'light';
          h.setAttribute('data-theme', light ? 'light' : 'dark');
          paint(light);
          try { localStorage.setItem('mk-theme', light ? 'light' : 'dark'); } catch (e) {}
        });
      });
      var btn = document.querySelector('.mk-menubtn'), nav = document.querySelector('.mk-nav');
      if (btn && nav) btn.addEventListener('click', function(){
        nav.dataset.open = nav.dataset.open === 'true' ? 'false' : 'true';
      });
    })();
  </script>
</body>
</html>
