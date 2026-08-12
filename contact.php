<?php
$mkSent = false;
$mkError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $allowedServices = ['Digital Advertising', 'Web Solutions', 'Software Development', 'Digital Consultancy', 'Real Estate Services', 'Digital Currency Operations', 'Information Services'];

  $name    = trim($_POST['name'] ?? '');
  $email   = trim($_POST['email'] ?? '');
  $phone   = trim($_POST['phone'] ?? '');
  $service = trim($_POST['service'] ?? '');
  $message = trim($_POST['message'] ?? '');

  if (!in_array($service, $allowedServices, true)) {
    $service = '';
  }

  if ($name === '' || mb_strlen($name) > 120) {
    $mkError = 'Please enter your full name.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $mkError = 'Please enter a valid email address.';
  } elseif ($phone !== '' && !preg_match('/^[0-9+\-\s()]{6,20}$/', $phone)) {
    $mkError = 'Please enter a valid phone number.';
  } elseif ($message === '' || mb_strlen($message) > 5000) {
    $mkError = 'Please enter a message (up to 5000 characters).';
  } else {
    require __DIR__ . '/lib/PHPMailer/Exception.php';
    require __DIR__ . '/lib/PHPMailer/PHPMailer.php';
    require __DIR__ . '/lib/PHPMailer/SMTP.php';

    $cfg = require __DIR__ . '/mail-config.php';
    $mailer = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
      $mailer->isSMTP();
      $mailer->Host       = $cfg['host'];
      $mailer->Port       = $cfg['port'];
      $mailer->SMTPAuth   = true;
      $mailer->Username   = $cfg['username'];
      $mailer->Password   = $cfg['password'];
      $mailer->SMTPSecure = $cfg['encryption'] === 'ssl'
        ? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;

      $mailer->setFrom($cfg['from_email'], $cfg['from_name']);
      $mailer->addAddress($cfg['to_email']);
      $mailer->addReplyTo($email, $name);

      $mailer->Subject = 'New website enquiry from ' . $name;
      $mailer->Body    = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message\n";

      $mailer->send();
      $mkSent = true;
    } catch (Exception $e) {
      $mkError = 'Sorry, something went wrong sending your message. Please email us directly.';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact — Makutano Digital</title>
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
      <a class="mk-navlink" href="about.php"><span class="lang-en">About</span><span class="lang-sw">Kuhusu</span></a>
      <a class="mk-navlink" href="contact.php" aria-current="page"><span class="lang-en">Contact</span><span class="lang-sw">Wasiliana</span></a>
      <span style="font:500 11px 'JetBrains Mono',monospace;padding:5px 9px;border:1px solid rgba(255,255,255,.3);border-radius:999px" class="mk-langtoggle">EN / SW</span>
      <button class="mk-themebtn" aria-label="Toggle theme" title="Light / dark"><svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="6.6" fill="none" stroke="currentColor" stroke-width="1.4"></circle><path d="M8 1.4a6.6 6.6 0 000 13.2z" fill="currentColor"></path></svg></button>
      <a class="mk-cta" href="contact.php" style="background:#ffbd59;color:#1e3a5f;padding:11px 20px;border-radius:999px;font:700 12.5px 'Space Grotesk',sans-serif"><span class="lang-en">Let's talk</span><span class="lang-sw">Tuzungumze</span></a>
  </div>
  <button class="mk-menubtn" aria-label="Menu" style="background:transparent;border:1px solid rgba(255,255,255,.3);border-radius:8px;color:#fff;font:500 12px 'JetBrains Mono',monospace;padding:8px 12px;cursor:pointer">MENU</button>
</div>
<div class="mk-pad" style="position:relative;padding:74px 46px 56px;max-width:900px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:24px">GET IN TOUCH</div>
  <h1 style="margin:0 0 22px;font:700 60px/1.02 'Space Grotesk',sans-serif;letter-spacing:-.03em;text-wrap:balance"><span class="lang-en"><span class="mk-gradtext">Ready to partner on your next digital initiative</span></span><span class="lang-sw"><span class="mk-gradtext">Tayari kushirikiana katika mradi wako wa kidijitali</span></span></h1>
  <p style="margin:0;max-width:620px;font:400 17px/1.62 Manrope,sans-serif;color:rgba(255,255,255,.75);text-wrap:pretty"><span class="lang-en">Reach out to discuss how our team can support your goals.</span><span class="lang-sw">Wasiliana nasi kujadili namna timu yetu inaweza kusaidia malengo yako.</span></p>
</div>
<div class="mk-pad mk-grid" style="position:relative;display:grid;grid-template-columns:1fr 1fr;gap:56px;padding:16px 46px 70px;border-top:1px solid rgba(255,255,255,.14);padding-top:56px">
  <div>
    <div style="display:flex;flex-direction:column;gap:0">
      <div style="display:flex;justify-content:space-between;gap:20px;padding:20px 0;border-bottom:1px solid rgba(255,255,255,.12)">
        <span style="font:500 11px 'JetBrains Mono',monospace;letter-spacing:.1em;color:rgba(255,255,255,.55)"><span class="lang-en">OFFICE LOCATION</span><span class="lang-sw">MAHALI PA OFISI</span></span>
        <span style="font:500 15px 'Space Grotesk',sans-serif;text-align:right">Makole, Dodoma, Tanzania</span>
      </div>
      <div style="display:flex;justify-content:space-between;gap:20px;padding:20px 0;border-bottom:1px solid rgba(255,255,255,.12)">
        <span style="font:500 11px 'JetBrains Mono',monospace;letter-spacing:.1em;color:rgba(255,255,255,.55)"><span class="lang-en">PHONE</span><span class="lang-sw">SIMU</span></span>
        <a href="tel:+255745997711" style="font:500 15px 'Space Grotesk',sans-serif;text-align:right">+255 745 99 77 11</a>
      </div>
      <div style="display:flex;justify-content:space-between;gap:20px;padding:20px 0;border-bottom:1px solid rgba(255,255,255,.12)">
        <span style="font:500 11px 'JetBrains Mono',monospace;letter-spacing:.1em;color:rgba(255,255,255,.55)"><span class="lang-en">EMAIL</span><span class="lang-sw">BARUA PEPE</span></span>
        <a href="mailto:info@makutano.co.tz" style="font:500 15px 'Space Grotesk',sans-serif;text-align:right">info@makutano.co.tz</a>
      </div>
      <div style="display:flex;justify-content:space-between;gap:20px;padding:20px 0;border-bottom:1px solid rgba(255,255,255,.12)">
        <span style="font:500 11px 'JetBrains Mono',monospace;letter-spacing:.1em;color:rgba(255,255,255,.55)"><span class="lang-en">WEBSITE</span><span class="lang-sw">TOVUTI</span></span>
        <a href="https://www.makutano.co.tz" style="font:500 15px 'Space Grotesk',sans-serif;text-align:right">www.makutano.co.tz</a>
      </div>
    </div>
    <div style="margin-top:30px;height:210px;border-radius:12px;border:1px solid rgba(255,255,255,.16);overflow:hidden">
      <iframe src="https://www.google.com/maps?q=Makole,+Dodoma,+Tanzania&amp;output=embed" width="100%" height="100%" style="border:0;display:block" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Makutano Digital — Makole, Dodoma, Tanzania"></iframe>
    </div>
  </div>
  <form method="post" style="background:rgba(0,0,0,.16);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:32px 30px">
    <div style="font:600 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:22px"><span class="lang-en">Send us a message</span><span class="lang-sw">Tutumie ujumbe</span></div>
    <?php if ($mkSent): ?>
    <div style="margin-bottom:16px;padding:13px 15px;border-radius:8px;background:rgba(255,189,89,.15);border:1px solid rgba(255,189,89,.4);font:500 13px/1.5 Manrope,sans-serif"><span class="lang-en">Thanks — your message has been sent. We'll get back to you shortly.</span><span class="lang-sw">Asante — ujumbe wako umetumwa. Tutawasiliana nawe hivi karibuni.</span></div>
    <?php elseif ($mkError): ?>
    <div style="margin-bottom:16px;padding:13px 15px;border-radius:8px;background:rgba(220,80,80,.15);border:1px solid rgba(220,80,80,.4);font:500 13px/1.5 Manrope,sans-serif"><?php echo htmlspecialchars($mkError); ?></div>
    <?php endif; ?>
    <div style="display:flex;flex-direction:column;gap:14px">
      <input class="mk-field" type="text" name="name" placeholder="Full name / Jina kamili" maxlength="120" required>
      <input class="mk-field" type="email" name="email" placeholder="Email / Barua pepe" maxlength="254" required>
      <input class="mk-field" type="tel" name="phone" placeholder="Phone / Simu" pattern="[0-9+\-\s()]{6,20}" maxlength="20">
      <select class="mk-field" name="service">
        <option style="color:#1e3a5f">Digital Advertising</option>
        <option style="color:#1e3a5f">Web Solutions</option>
        <option style="color:#1e3a5f">Software Development</option>
        <option style="color:#1e3a5f">Digital Consultancy</option>
        <option style="color:#1e3a5f">Real Estate Services</option>
        <option style="color:#1e3a5f">Digital Currency Operations</option>
        <option style="color:#1e3a5f">Information Services</option>
      </select>
      <textarea class="mk-field" name="message" rows="4" placeholder="How can we help? / Tunawezaje kusaidia?" maxlength="5000" required></textarea>
      <button class="mk-cta" type="submit" style="background:#ffbd59;color:#1e3a5f;border:0;padding:15px 24px;border-radius:999px;font:700 14px 'Space Grotesk',sans-serif;cursor:pointer"><span class="lang-en">Send message</span><span class="lang-sw">Tuma ujumbe</span></button>
    </div>
  </form>
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
        <a href="tel:+255745997711" style="color:rgba(255,255,255,.75)">+255 745 99 77 11</a>
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
