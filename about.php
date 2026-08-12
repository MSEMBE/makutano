<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About — Makutano Digital</title>
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
    .mk-link{animation:mkFloat 7s ease-in-out infinite}
    .mk-cta{transition:transform .18s ease,box-shadow .18s ease}
    .mk-cta:hover{transform:translateY(-2px);box-shadow:0 10px 24px rgba(0,0,0,.3)}
    .mk-langtoggle{cursor:pointer;user-select:none;color:rgba(255,255,255,.82)}
    .mk-langtoggle:hover{color:#fff;border-color:rgba(255,255,255,.6)}
    .mk-navlink{color:rgba(255,255,255,.82);font:500 12.5px 'Space Grotesk',sans-serif;padding-bottom:3px;border-bottom:1.5px solid transparent;transition:color .18s ease,border-color .18s ease}
    .mk-navlink:hover{color:#fff;border-bottom-color:rgba(255,255,255,.4)}
    .mk-navlink[aria-current="page"]{color:#fff;border-bottom-color:#ffbd59}
    .mk-svcrow{transition:background .25s ease,padding-left .25s ease}
    .mk-svcrow:hover{background:rgba(255,255,255,.06);padding-left:60px}
    .mk-svcrow:hover .mk-arrow{opacity:1;transform:translateX(0)}
    .mk-arrow{opacity:0;transform:translateX(-8px);transition:all .25s ease;color:#ffbd59}
    .mk-field{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.2);border-radius:8px;padding:13px 15px;color:#fff;font:400 14px Manrope,sans-serif;outline:none;transition:border-color .18s ease}
    .mk-field:focus{border-color:#ffbd59}
    .mk-field::placeholder{color:rgba(255,255,255,.4)}
    .mk-menubtn{display:none}
    .mk-themebtn{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;padding:0;background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:rgba(255,255,255,.82);cursor:pointer;transition:color .18s ease,border-color .18s ease}
    .mk-themebtn:hover{color:#fff;border-color:rgba(255,255,255,.6)}
    html[data-theme="light"] body{background:#f7f5f0;color:#141414}
    html[data-theme="light"] .mk-themebtn{border-color:rgba(20,20,20,.25);color:rgba(20,20,20,.7)}
    html[data-theme="light"] .mk-themebtn:hover{color:#141414;border-color:rgba(20,20,20,.5)}
    html[data-theme="light"] .mk-langtoggle{color:rgba(20,20,20,.7)}
    html[data-theme="light"] .mk-langtoggle:hover{color:#141414;border-color:rgba(20,20,20,.5)}
    html[data-theme="light"] .mk-navlink{color:rgba(20,20,20,.7)}
    html[data-theme="light"] .mk-navlink:hover,html[data-theme="light"] .mk-navlink[aria-current="page"]{color:#141414}
    html[data-theme="light"] .mk-navlink:hover{border-bottom-color:rgba(20,20,20,.3)}
    html[data-theme="light"] .mk-nav{background:#eeeae0}
    html[data-theme="light"] .mk-svcrow:hover{background:rgba(20,20,20,.05)}
    html[data-theme="light"] .mk-field{background:rgba(20,20,20,.04);border-color:rgba(20,20,20,.2);color:#141414}
    html[data-theme="light"] .mk-field::placeholder{color:rgba(20,20,20,.4)}
    html[data-theme="light"] .mk-menubtn{border-color:rgba(20,20,20,.25);color:#141414}
    html[data-theme="light"] .mk-cta:hover{box-shadow:0 10px 24px rgba(30,58,95,.22)}
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
<div style="position:relative;display:flex;align-items:center;justify-content:space-between;padding:20px 46px;border-bottom:1px solid rgba(255,255,255,.14)" class="mk-pad">
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
  <h1 style="margin:0 0 22px;font:700 60px/1.02 'Space Grotesk',sans-serif;letter-spacing:-.03em;text-wrap:balance"><span class="lang-en">A Tanzanian digital solutions partnership</span><span class="lang-sw">Ushirikiano wa suluhisho za kidijitali wa Tanzania</span></h1>
  <p style="margin:0;max-width:620px;font:400 17px/1.62 Manrope,sans-serif;color:rgba(255,255,255,.75);text-wrap:pretty"><span class="lang-en">Established to bridge the gap between opportunity and execution in the country’s fast-growing digital economy.</span><span class="lang-sw">Umeanzishwa kuunganisha fursa na utekelezaji katika uchumi wa kidijitali unaokua kwa kasi wa nchi.</span></p>
</div>
<div class="mk-pad mk-grid" style="position:relative;display:grid;grid-template-columns:1.25fr .95fr;gap:56px;padding:20px 46px 64px;border-top:1px solid rgba(255,255,255,.14);padding-top:56px">
  <div>
    <p style="margin:0 0 22px;font:400 16px/1.72 Manrope,sans-serif;color:rgba(255,255,255,.8);text-wrap:pretty">Operating at the intersection of technology, real estate, and information services, we exist to give businesses, investors, and institutions a single, trusted partner for building and scaling their digital presence.</p>
    <p style="margin:0 0 40px;font:400 16px/1.72 Manrope,sans-serif;color:rgba(255,255,255,.8);text-wrap:pretty">Our core value proposition centres on digital advertising as our primary line of business, complemented by web solutions, software development, digital consultancy, and emerging digital currency services. We solve a specific market problem: the shortage of integrated, locally-grounded digital partners who understand both global technology standards and the practical realities of operating in the Tanzanian and East African market.</p>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px">
      <div style="border:1px solid rgba(255,255,255,.18);border-radius:12px;padding:26px 24px">
        <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:14px"><span class="lang-en">OUR MISSION</span><span class="lang-sw">DHAMIRA YETU</span></div>
        <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.78)">To empower businesses, investors, and institutions across Tanzania with integrated digital solutions — from advertising and software to consultancy and information services — delivered with international standards of quality and local market insight.</p>
      </div>
      <div style="border:1px solid rgba(255,255,255,.18);border-radius:12px;padding:26px 24px">
        <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:14px"><span class="lang-en">OUR VISION</span><span class="lang-sw">MALENGO YETU</span></div>
        <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.78)">To be East Africa’s most trusted digital partner, recognised for turning emerging technology into practical, measurable growth for the organisations we serve.</p>
      </div>
    </div>
  </div>
  <div>
    <div style="background:rgba(0,0,0,.16);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:30px 28px">
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
      <span style="font:400 13px/1.5 Manrope,sans-serif;color:rgba(255,255,255,.62)"><span class="lang-en">License Validity</span><span class="lang-sw">Uhalali wa Leseni</span></span>
      <span style="font:500 13px/1.5 'JetBrains Mono',monospace;text-align:right">4 August 2026 — 3 August 2027</span>
    </div>
    </div>
  </div>
</div>
<div class="mk-pad" style="position:relative;padding:56px 46px 64px;border-top:1px solid rgba(255,255,255,.14)">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:26px"><span class="lang-en">LEADERSHIP</span><span class="lang-sw">UONGOZI</span></div>
  <p style="margin:0 0 30px;max-width:620px;font:400 16px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.75)">Makutano Digital is led by a two-member executive team holding overall responsibility for strategy, operations, and client delivery.</p>
  <div class="mk-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:24px">
    <div style="display:flex;gap:20px;border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:24px">
      <div style="width:96px;height:112px;flex:none;border-radius:8px;background:rgba(255,255,255,.07);border:1px dashed rgba(255,255,255,.3);display:flex;align-items:center;justify-content:center;text-align:center;font:400 9px/1.5 'JetBrains Mono',monospace;color:rgba(255,255,255,.45)">portrait<br>360×420</div>
      <div>
        <div style="font:600 18px/1.3 'Space Grotesk',sans-serif">[Full Name]</div>
        <div style="font:500 11px 'JetBrains Mono',monospace;color:#ffbd59;margin:7px 0 12px">CHIEF EXECUTIVE OFFICER</div>
        <p style="margin:0;font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.7)">Holds overall responsibility for the company’s strategic direction, partnerships, and growth. Degree-qualified.</p>
      </div>
    </div>
    <div style="display:flex;gap:20px;border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:24px">
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
<div style="border-top:1px solid rgba(255,255,255,.14);background:#16304f">
  <div class="mk-pad mk-grid" style="display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:40px;padding:52px 46px 40px">
    <div>
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
        <img src="assets/logo.png" alt="" style="width:30px;height:30px;border-radius:6px;display:block;background:#fff">
        <span style="font:700 14px/1 'Space Grotesk',sans-serif;letter-spacing:.04em">MAKUTANO DIGITAL</span>
      </div>
      <p style="margin:0;max-width:340px;font:400 13px/1.7 Manrope,sans-serif;color:rgba(255,255,255,.6)"><span class="lang-en">Makutano Digital Company Limited — a duly licensed ICT services provider operating under the laws of the United Republic of Tanzania.</span><span class="lang-sw">Makutano Digital Company Limited — mtoa huduma za TEHAMA aliyesajiliwa kwa mujibu wa sheria za Jamhuri ya Muungano wa Tanzania.</span></p>
    </div>
    <div>
      <div style="font:500 10px 'JetBrains Mono',monospace;letter-spacing:.16em;color:#ffbd59;margin-bottom:16px"><span class="lang-en">PAGES</span><span class="lang-sw">KURASA</span></div>
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
        <a href="tel:+255745997711" style="color:rgba(255,255,255,.75)">0745 99 77 11</a>
        <a href="mailto:info@makutano.co.tz" style="color:rgba(255,255,255,.75)">info@makutano.co.tz</a>
        <a href="https://www.makutano.co.tz" style="color:rgba(255,255,255,.75)">www.makutano.co.tz</a>
      </div>
    </div>
  </div>
  <div class="mk-pad" style="padding:18px 46px;border-top:1px solid rgba(255,255,255,.1);font:400 11px 'JetBrains Mono',monospace;color:rgba(255,255,255,.4);display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px">
    <span>© 2026 MAKUTANO DIGITAL COMPANY LIMITED</span>
    <span>TIN 205-614-818 · BL01695972026-2700002767</span>
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
