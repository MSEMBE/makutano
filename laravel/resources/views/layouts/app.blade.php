<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Makutano Digital — ICT & Digital Solutions, Dodoma')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo.png') }}">
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
    .mk-timeline{position:relative}
    .mk-timeline::before{content:"";position:absolute;top:6px;bottom:6px;left:50%;width:2px;background:rgba(255,255,255,.16);transform:translateX(-1px)}
    html[data-theme="light"] .mk-timeline::before{background:rgba(20,20,20,.14)}
    .mk-tl-row{position:relative;display:flex;margin-bottom:48px}
    .mk-tl-row:last-child{margin-bottom:0}
    .mk-tl-row.mk-tl-right{justify-content:flex-end}
    .mk-tl-dot{position:absolute;top:34px;width:14px;height:14px;border-radius:999px;background:#ffbd59;box-shadow:0 0 0 5px #1e3a5f;z-index:1}
    html[data-theme="light"] .mk-tl-dot{box-shadow:0 0 0 5px #f7f5f0}
    .mk-tl-row.mk-tl-left .mk-tl-dot{right:-47px}
    .mk-tl-row.mk-tl-right .mk-tl-dot{left:-47px}
    .mk-tl-chip{display:inline-flex;align-items:center;gap:6px;font:500 11.5px 'JetBrains Mono',monospace;color:rgba(255,255,255,.8);border:1px solid rgba(255,255,255,.25);border-radius:999px;padding:6px 12px;transition:border-color .18s ease,color .18s ease}
    a.mk-tl-chip:hover{color:#ffbd59;border-color:#ffbd59}
    html[data-theme="light"] .mk-tl-chip{color:rgba(20,20,20,.7);border-color:rgba(20,20,20,.2)}
    @media (max-width:900px){
      .mk-hero h1{font-size:46px !important}
      .mk-nav{position:absolute;top:100%;left:0;right:0;flex-direction:column;align-items:flex-start !important;gap:18px !important;background:#16304f;padding:24px 46px;border-bottom:1px solid rgba(255,255,255,.14);z-index:20}
      .mk-nav[data-open="false"]{display:none !important}
      .mk-menubtn{display:block}
      .mk-grid{grid-template-columns:1fr !important}
      .mk-pad{padding-left:22px !important;padding-right:22px !important}
      .mk-timeline::before{left:20px}
      .mk-tl-row,.mk-tl-row.mk-tl-right{justify-content:flex-start}
      .mk-tl-row .mk-tl-card{width:100% !important;margin-left:44px}
      .mk-tl-row.mk-tl-left .mk-tl-dot,.mk-tl-row.mk-tl-right .mk-tl-dot{left:-32px;right:auto}
    }
    </style>
</head>
<body>
@include('partials.navbar')
<div style="background:#1e3a5f;color:#fff;font-family:'Space Grotesk',sans-serif;position:relative;overflow:hidden">
<div class="mk-link" style="position:absolute;right:-90px;top:60px;width:520px;height:520px;opacity:.13;pointer-events:none">
  <div style="position:absolute;left:0;top:0;width:330px;height:330px;border:34px solid #ffbd59;border-radius:70px"></div>
  <div style="position:absolute;left:180px;top:180px;width:330px;height:330px;border:34px solid #fff;border-radius:70px"></div>
</div>
@yield('content')
@include('partials.footer')
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
