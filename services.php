<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Services — Makutano Digital</title>
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
    .mk-vcard{transition:transform .3s ease,box-shadow .3s ease,border-color .3s ease,background .3s ease;cursor:default}
    .mk-vcard:hover,.mk-vcard:active{transform:translateY(-8px);border-color:rgba(255,189,89,.55);background:rgba(255,255,255,.04);box-shadow:0 24px 20px -18px rgba(0,0,0,.45),0 30px 45px -12px rgba(0,0,0,.4)}
    html[data-theme="light"] .mk-vcard:hover,html[data-theme="light"] .mk-vcard:active{border-color:rgba(255,189,89,.7);background:rgba(30,58,95,.03);box-shadow:0 24px 20px -18px rgba(30,58,95,.16),0 30px 45px -12px rgba(30,58,95,.22)}
    .mk-vcard:hover .mk-arrow{opacity:1;transform:translateX(0)}
    .mk-arrow{opacity:0;transform:translateX(-8px);transition:all .25s ease;color:#ffbd59}
    .mk-field{width:100%;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.2);border-radius:8px;padding:13px 15px;color:#fff;font:400 14px Manrope,sans-serif;outline:none;transition:border-color .18s ease}
    .mk-field:focus{border-color:#ffbd59}
    .mk-field::placeholder{color:rgba(255,255,255,.4)}
    .mk-menubtn{display:none;transition:border-color .18s ease,color .18s ease,transform .18s ease,box-shadow .18s ease}
    .mk-themebtn{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;padding:0;background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:999px;color:rgba(255,255,255,.82);cursor:pointer;transition:color .18s ease,border-color .18s ease,transform .18s ease,box-shadow .18s ease}
    .mk-themebtn:hover,.mk-themebtn:active{color:#fff;border-color:rgba(255,255,255,.6);transform:translateY(-2px) scale(1.05);box-shadow:0 10px 18px -10px rgba(0,0,0,.4)}
    html[data-theme="light"] body{background:#f7f5f0;color:#141414}
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
      <a class="mk-navlink" href="services.php" aria-current="page"><span class="lang-en">Services</span><span class="lang-sw">Huduma</span></a>
      <a class="mk-navlink" href="about.php"><span class="lang-en">About</span><span class="lang-sw">Kuhusu</span></a>
      <a class="mk-navlink" href="contact.php"><span class="lang-en">Contact</span><span class="lang-sw">Wasiliana</span></a>
      <span style="font:500 11px 'JetBrains Mono',monospace;padding:5px 9px;border:1px solid rgba(255,255,255,.3);border-radius:999px" class="mk-langtoggle">EN / SW</span>
      <button class="mk-themebtn" aria-label="Toggle theme" title="Light / dark"><svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="6.6" fill="none" stroke="currentColor" stroke-width="1.4"></circle><path d="M8 1.4a6.6 6.6 0 000 13.2z" fill="currentColor"></path></svg></button>
      <a class="mk-cta" href="contact.php" style="background:#ffbd59;color:#1e3a5f;padding:11px 20px;border-radius:999px;font:700 12.5px 'Space Grotesk',sans-serif"><span class="lang-en">Let's talk</span><span class="lang-sw">Tuzungumze</span></a>
  </div>
  <button class="mk-menubtn" aria-label="Menu" style="background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:8px;color:#fff;font:500 12px 'JetBrains Mono',monospace;padding:8px 12px;cursor:pointer">MENU</button>
</div>
<div class="mk-pad" style="position:relative;padding:74px 46px 56px;max-width:900px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:24px">SEVEN CORE SERVICE DOMAINS</div>
  <h1 style="margin:0 0 22px;font:700 60px/1.02 'Space Grotesk',sans-serif;letter-spacing:-.03em;text-wrap:balance"><span class="lang-en"><span class="mk-gradtext">Expertise &amp; core competencies</span></span><span class="lang-sw"><span class="mk-gradtext">Utaalam na uwezo wetu wa msingi</span></span></h1>
  <p style="margin:0;max-width:620px;font:400 17px/1.62 Manrope,sans-serif;color:rgba(255,255,255,.75);text-wrap:pretty"><span class="lang-en">Makutano Digital's activities span seven core service domains, each aligned to industry-standard practice.</span><span class="lang-sw">Shughuli za Makutano Digital zinajumuisha nyanja saba za huduma, kila moja ikiendana na viwango vya kitaaluma.</span></p>
</div>
<div class="mk-pad" style="position:relative;padding:26px 46px 46px;border-top:1px solid rgba(255,255,255,.14);display:flex;flex-direction:column;gap:16px">
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">01</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Digital Advertising</span><span class="lang-sw">Matangazo ya Kidijitali</span></div>
      <div style="display:inline-block;margin-top:9px;font:500 9.5px 'JetBrains Mono',monospace;letter-spacing:.14em;color:#1e3a5f;background:#ffbd59;padding:4px 8px;border-radius:4px">PRIMARY</div>
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Our primary business activity — comprehensive digital advertising services designed to build brand visibility and drive measurable client growth.</span><span class="lang-sw">Shughuli yetu kuu ya biashara — huduma kamili za matangazo ya kidijitali zilizoundwa kujenga mwonekano wa chapa na kuchochea ukuaji unaopimika wa mteja.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">02</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Web Solutions</span><span class="lang-sw">Suluhisho za Tovuti</span></div>
      
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Development and ongoing maintenance of web portals and related online platforms, built to modern performance and security standards.</span><span class="lang-sw">Utengenezaji na matengenezo endelevu ya mifumo ya tovuti na majukwaa ya mtandaoni, kwa viwango vya kisasa vya utendaji na usalama.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">03</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Software Development</span><span class="lang-sw">Utengenezaji wa Programu</span></div>
      
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Custom software solutions, including Software as a Service (SaaS) products tailored to client operational needs.</span><span class="lang-sw">Suluhisho maalum za programu, ikiwemo bidhaa za Software as a Service (SaaS) zilizoundwa kwa mahitaji ya uendeshaji wa mteja.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">04</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Digital Consultancy</span><span class="lang-sw">Ushauri wa Kidijitali</span></div>
      
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Expert advisory services across digital domains, helping organisations plan and execute their technology strategy.</span><span class="lang-sw">Huduma za ushauri wa kitaalam katika nyanja za kidijitali, kusaidia taasisi kupanga na kutekeleza mikakati ya teknolojia.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">05</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Real Estate Services</span><span class="lang-sw">Huduma za Ardhi na Majengo</span></div>
      
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Fee- and contract-based real estate brokerage, management, and consultancy services.</span><span class="lang-sw">Huduma za udalali, usimamizi na ushauri wa ardhi na majengo kwa ada na mikataba.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">06</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Digital Currency Operations</span><span class="lang-sw">Shughuli za Sarafu za Kidijitali</span></div>
      
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Cryptocurrency-related activities conducted in full compliance with prevailing laws and regulations.</span><span class="lang-sw">Shughuli zinazohusiana na sarafu za kidijitali zinazofanywa kwa kufuata kikamilifu sheria na kanuni zilizopo.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
  <div class="mk-vcard" style="display:grid;grid-template-columns:70px 1fr 1.15fr 40px;align-items:center;gap:24px;padding:28px 30px;border:1px solid rgba(255,255,255,.16);border-radius:12px">
    <span style="font:700 22px/1 'Space Grotesk',sans-serif;color:#ffbd59">07</span>
    <div>
      <div style="font:600 24px/1.2 'Space Grotesk',sans-serif"><span class="lang-en">Information Services</span><span class="lang-sw">Huduma za Taarifa</span></div>
      
    </div>
    <p style="margin:0;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.7)"><span class="lang-en">Additional information service activities undertaken as they create value for our clients and partners.</span><span class="lang-sw">Shughuli za ziada za huduma za taarifa zinazofanywa zinapoleta thamani kwa wateja na washirika wetu.</span></p>
    <span class="mk-arrow" style="font:400 20px Manrope,sans-serif;text-align:right">→</span>
  </div>
</div>
<div class="mk-pad" style="position:relative;padding:60px 46px;display:flex;align-items:center;justify-content:space-between;gap:30px;flex-wrap:wrap">
  <div style="font:600 26px/1.3 'Space Grotesk',sans-serif;max-width:520px"><span class="lang-en">Not sure which service fits? Tell us the outcome you need.</span><span class="lang-sw">Hujui huduma ipi inafaa? Tueleze matokeo unayohitaji.</span></div>
  <a class="mk-cta" href="contact.php" style="background:#ffbd59;color:#1e3a5f;padding:16px 30px;border-radius:999px;font:700 14.5px 'Space Grotesk',sans-serif"><span class="lang-en">Request a proposal</span><span class="lang-sw">Omba pendekezo</span></a>
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
