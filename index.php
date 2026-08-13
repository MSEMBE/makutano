<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Makutano Digital — ICT &amp; Digital Solutions, Dodoma</title>
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
    .mk-vcard{transition:transform .3s ease,box-shadow .3s ease,border-color .3s ease;cursor:default}
    .mk-vcard:hover,.mk-vcard:active{transform:translateY(-8px);border-color:rgba(255,189,89,.55);box-shadow:0 24px 20px -18px rgba(0,0,0,.45),0 30px 45px -12px rgba(0,0,0,.4)}
    html[data-theme="light"] .mk-vcard:hover,html[data-theme="light"] .mk-vcard:active{border-color:rgba(255,189,89,.7);box-shadow:0 24px 20px -18px rgba(30,58,95,.16),0 30px 45px -12px rgba(30,58,95,.22)}
    .mk-field{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.2);border-radius:8px;padding:13px 15px;color:#fff;font:400 14px Manrope,sans-serif;outline:none;transition:border-color .18s ease}
    .mk-field:focus{border-color:#ffbd59}
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
<div class="mk-fixedbar mk-pad" style="position:sticky;top:0;z-index:30;display:flex;align-items:center;justify-content:space-between;padding:20px 46px;border-bottom:1px solid rgba(255,255,255,.14);background:#1e3a5f">
  <a href="index.php" style="display:flex;align-items:center;gap:12px;color:#fff">
    <img src="assets/logo.png" alt="Makutano Digital" style="width:32px;height:32px;border-radius:7px;display:block;background:#fff">
    <span style="font:700 15px/1 'Space Grotesk',sans-serif;letter-spacing:.04em">MAKUTANO</span>
  </a>
  <div class="mk-nav" data-open="false" style="display:flex;align-items:center;gap:28px">
      <a class="mk-navlink" href="index.php" aria-current="page"><span class="lang-en">Home</span><span class="lang-sw">Nyumbani</span></a>
      <a class="mk-navlink" href="services.php"><span class="lang-en">Services</span><span class="lang-sw">Huduma</span></a>
      <a class="mk-navlink" href="about.php"><span class="lang-en">About</span><span class="lang-sw">Kuhusu</span></a>
      <a class="mk-navlink" href="partners.php"><span class="lang-en">Partners</span><span class="lang-sw">Washirika</span></a>
      <a class="mk-navlink" href="contact.php"><span class="lang-en">Contact</span><span class="lang-sw">Wasiliana</span></a>
      <span style="font:500 11px 'JetBrains Mono',monospace;padding:5px 9px;border:1px solid rgba(255,255,255,.3);border-radius:999px" class="mk-langtoggle">EN / SW</span>
      <button class="mk-themebtn" aria-label="Toggle theme" title="Light / dark"><svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="6.6" fill="none" stroke="currentColor" stroke-width="1.4"></circle><path d="M8 1.4a6.6 6.6 0 000 13.2z" fill="currentColor"></path></svg></button>
      <a class="mk-cta" href="contact.php" style="background:#ffbd59;color:#1e3a5f;padding:11px 20px;border-radius:999px;font:700 12.5px 'Space Grotesk',sans-serif"><span class="lang-en">Let's talk</span><span class="lang-sw">Tuzungumze</span></a>
  </div>
  <button class="mk-menubtn" aria-label="Menu" style="background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:8px;color:#fff;font:500 12px 'JetBrains Mono',monospace;padding:8px 12px;cursor:pointer">MENU</button>
</div>
<div style="background:#1e3a5f;color:#fff;font-family:'Space Grotesk',sans-serif;position:relative;overflow:hidden">
<div class="mk-link" style="position:absolute;right:-90px;top:60px;width:520px;height:520px;opacity:.13;pointer-events:none">
  <div style="position:absolute;left:0;top:0;width:330px;height:330px;border:34px solid #ffbd59;border-radius:70px"></div>
  <div style="position:absolute;left:180px;top:180px;width:330px;height:330px;border:34px solid #fff;border-radius:70px"></div>
</div>
<div class="mk-hero" style="position:relative;padding:88px 46px 64px;max-width:880px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:26px">ICT &amp; DIGITAL SOLUTIONS · DODOMA, TANZANIA</div>
  <h1 style="margin:0 0 26px;font:700 78px/.98 'Space Grotesk',sans-serif;letter-spacing:-.035em;text-wrap:balance">
    <span class="lang-en"><span class="mk-gradtext">One partner.<br>Seven digital</span><br><span class="mk-gradtext">capabilities</span>.</span>
    <span class="lang-sw"><span class="mk-gradtext">Mshirika mmoja.<br>Huduma saba za</span><br><span class="mk-gradtext">kidijitali</span>.</span>
  </h1>
  <p style="margin:0 0 38px;max-width:560px;font:400 17px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.78);text-wrap:pretty">
    <span class="lang-en">We bridge the gap between opportunity and execution in Tanzania's fast-growing digital economy.</span>
    <span class="lang-sw">Tunaunganisha fursa na utekelezaji katika uchumi wa kidijitali unaokua kwa kasi wa Tanzania.</span>
  </p>
  <div style="display:flex;gap:14px;align-items:center">
    <a class="mk-cta" href="contact.php" style="background:#ffbd59;color:#1e3a5f;padding:16px 30px;border-radius:999px;font:700 14.5px 'Space Grotesk',sans-serif"><span class="lang-en">Start a project</span><span class="lang-sw">Anza mradi</span></a>
    <a class="mk-cta" href="assets/Makutano_Digital_Company_Profile.pdf" target="_blank" rel="noopener" style="padding:16px 28px;border:1.5px solid rgba(255,255,255,.35);border-radius:999px;font:500 14.5px 'Space Grotesk',sans-serif;color:#fff"><span class="lang-en">View company profile</span><span class="lang-sw">Wasifu wa kampuni</span></a>
  </div>
</div>

<div style="position:relative;border-top:1px solid rgba(255,255,255,.14);border-bottom:1px solid rgba(255,255,255,.14);padding:18px 0;overflow:hidden;background:rgba(0,0,0,.12)">
  <div style="display:flex;width:max-content;animation:mkMarquee 26s linear infinite">
    <div style="display:flex;gap:38px;flex:none;font:500 15px 'Space Grotesk',sans-serif;color:rgba(255,255,255,.6);white-space:nowrap;padding-right:38px">
      <span>Digital Advertising</span><span style="color:#ffbd59">◆</span><span>Web Solutions</span><span style="color:#ffbd59">◆</span><span>Software Development</span><span style="color:#ffbd59">◆</span><span>Digital Consultancy</span><span style="color:#ffbd59">◆</span><span>Real Estate</span><span style="color:#ffbd59">◆</span><span>Digital Currency</span><span style="color:#ffbd59">◆</span><span>Information Services</span><span style="color:#ffbd59">◆</span>
    </div>
    <div style="display:flex;gap:38px;flex:none;font:500 15px 'Space Grotesk',sans-serif;color:rgba(255,255,255,.6);white-space:nowrap;padding-right:38px">
      <span>Digital Advertising</span><span style="color:#ffbd59">◆</span><span>Web Solutions</span><span style="color:#ffbd59">◆</span><span>Software Development</span><span style="color:#ffbd59">◆</span><span>Digital Consultancy</span><span style="color:#ffbd59">◆</span><span>Real Estate</span><span style="color:#ffbd59">◆</span><span>Digital Currency</span><span style="color:#ffbd59">◆</span><span>Information Services</span><span style="color:#ffbd59">◆</span>
    </div>
  </div>
</div>

<div class="mk-grid mk-pad" style="position:relative;display:grid;grid-template-columns:repeat(3,1fr);gap:20px;padding:32px 46px 40px" data-more="services.html">
  <div class="mk-vcard" style="background:#1e3a5f;padding:40px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px;text-align:center">
    <div style="width:64px;height:64px;margin:0 auto 22px;border-radius:16px;background:rgba(255,255,255,.06);display:flex;align-items:center;justify-content:center;color:#ffbd59">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><path d="M15 2v2"></path><path d="M15 20v2"></path><path d="M2 15h2"></path><path d="M2 9h2"></path><path d="M20 15h2"></path><path d="M20 9h2"></path><path d="M9 2v2"></path><path d="M9 20v2"></path></svg>
    </div>
    <div style="font:700 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:12px"><span class="lang-en">AI-Powered Solutions</span><span class="lang-sw">Suluhisho za AI</span></div>
    <p style="margin:0 0 22px;font:400 14px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.66)"><span class="lang-en">We integrate cutting-edge AI and machine learning to create smart, automated, and predictive applications that drive business growth.</span><span class="lang-sw">Tunatumia AI na ujifunzaji wa mashine wa kisasa kuunda programu janja, za kiotomatiki, na za kutabiri zinazochochea ukuaji wa biashara.</span></p>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px">
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">Machine Learning</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">Automation</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">Predictive Analytics</span>
    </div>
  </div>
  <div class="mk-vcard" style="background:#1e3a5f;padding:40px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px;text-align:center">
    <div style="width:64px;height:64px;margin:0 auto 22px;border-radius:16px;background:rgba(255,255,255,.06);display:flex;align-items:center;justify-content:center;color:#ffbd59">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
    </div>
    <div style="font:700 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:12px"><span class="lang-en">Web Development</span><span class="lang-sw">Utengenezaji wa Tovuti</span></div>
    <p style="margin:0 0 22px;font:400 14px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.66)"><span class="lang-en">From dynamic single-page applications to large-scale enterprise platforms, we build fast, secure, and scalable web solutions.</span><span class="lang-sw">Kutoka programu za ukurasa mmoja zinazobadilika hadi majukwaa makubwa ya kibiashara, tunajenga suluhisho za wavuti za haraka, salama, na zinazoweza kukua.</span></p>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px">
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">React</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">Laravel</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">CodeIgniter</span>
    </div>
  </div>
  <div class="mk-vcard" style="background:#1e3a5f;padding:40px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px;text-align:center">
    <div style="width:64px;height:64px;margin:0 auto 22px;border-radius:16px;background:rgba(255,255,255,.06);display:flex;align-items:center;justify-content:center;color:#ffbd59">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="14" height="10" rx="2"></rect><path d="M6 18h6"></path><path d="M9 14v4"></path><rect x="15" y="10" width="7" height="12" rx="1.5"></rect><path d="M18 19h.01"></path></svg>
    </div>
    <div style="font:700 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:12px"><span class="lang-en">Mobile App Development</span><span class="lang-sw">Utengenezaji wa Programu za Simu</span></div>
    <p style="margin:0 0 22px;font:400 14px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.66)"><span class="lang-en">We design and develop beautiful, intuitive, and high-performance native mobile apps for both iOS and Android platforms.</span><span class="lang-sw">Tunabuni na kutengeneza programu za simu nzuri, rahisi kutumia, na zenye utendaji wa hali ya juu kwa mifumo ya iOS na Android.</span></p>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px">
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">Flutter</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">React Native</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">iOS</span>
      <span style="font:700 11px 'JetBrains Mono',monospace;padding:6px 14px;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:#fff">Android</span>
    </div>
  </div>
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
        <a href="partners.php" style="color:rgba(255,255,255,.75)"><span class="lang-en">Partners</span><span class="lang-sw">Washirika</span></a>
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
