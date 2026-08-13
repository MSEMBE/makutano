@extends('layouts.app')

@section('title', 'Contact — Makutano Digital')

@section('content')
<div class="mk-pad" style="position:relative;padding:74px 46px 56px;max-width:900px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:24px">GET IN TOUCH</div>
  <h1 style="margin:0 0 22px;font:700 60px/1.02 'Space Grotesk',sans-serif;letter-spacing:-.03em;text-wrap:balance"><span class="lang-en">Ready to partner on your next digital initiative</span><span class="lang-sw">Tayari kushirikiana katika mradi wako wa kidijitali</span></h1>
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
        <a href="tel:+255745997711" style="font:500 15px 'Space Grotesk',sans-serif;text-align:right">+255 745 997 711</a>
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
    <div style="margin-top:30px;height:210px;border-radius:12px;border:1px solid rgba(255,255,255,.16);background:rgba(0,0,0,.16);display:flex;align-items:flex-end;padding:20px;font:400 11px/1.6 'JetBrains Mono',monospace;color:rgba(255,255,255,.45)">map embed · Makole, Dodoma</div>
  </div>
  <form onsubmit="return false" style="background:rgba(0,0,0,.16);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:32px 30px">
    <div style="font:600 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:22px"><span class="lang-en">Send us a message</span><span class="lang-sw">Tutumie ujumbe</span></div>
    <div style="display:flex;flex-direction:column;gap:14px">
      <input class="mk-field" type="text" placeholder="Full name / Jina kamili">
      <input class="mk-field" type="email" placeholder="Email / Barua pepe">
      <input class="mk-field" type="tel" placeholder="Phone / Simu">
      <select class="mk-field">
        <option style="color:#1e3a5f">Digital Advertising</option>
        <option style="color:#1e3a5f">Web Solutions</option>
        <option style="color:#1e3a5f">Software Development</option>
        <option style="color:#1e3a5f">Digital Consultancy</option>
        <option style="color:#1e3a5f">Real Estate Services</option>
        <option style="color:#1e3a5f">Digital Currency Operations</option>
        <option style="color:#1e3a5f">Information Services</option>
      </select>
      <textarea class="mk-field" rows="4" placeholder="How can we help? / Tunawezaje kusaidia?"></textarea>
      <button class="mk-cta" type="submit" style="background:#ffbd59;color:#1e3a5f;border:0;padding:15px 24px;border-radius:999px;font:700 14px 'Space Grotesk',sans-serif;cursor:pointer"><span class="lang-en">Send message</span><span class="lang-sw">Tuma ujumbe</span></button>
    </div>
  </form>
</div>
@endsection
