@extends('layouts.app')

@section('title', 'Partners — Makutano Digital')

@section('content')
<div class="mk-pad" style="position:relative;padding:74px 46px 56px;max-width:900px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:24px">OUR PARTNERS</div>
  <h1 style="margin:0 0 22px;font:700 60px/1.02 'Space Grotesk',sans-serif;letter-spacing:-.03em;text-wrap:balance"><span class="lang-en">Organisations we work alongside</span><span class="lang-sw">Mashirika tunayoshirikiana nayo</span></h1>
  <p style="margin:0;max-width:620px;font:400 17px/1.62 Manrope,sans-serif;color:rgba(255,255,255,.75);text-wrap:pretty"><span class="lang-en">We work alongside a small group of trusted organisations across finance, technology, and education to deliver more value to our clients.</span><span class="lang-sw">Tunashirikiana na kundi dogo la mashirika yanayoaminika katika fedha, teknolojia, na elimu ili kuongeza thamani kwa wateja wetu.</span></p>
</div>
<div class="mk-pad" style="position:relative;padding:26px 46px 64px;border-top:1px solid rgba(255,255,255,.14)">
  <div class="mk-timeline">
    <div class="mk-tl-row mk-tl-left">
      <div class="mk-tl-card" style="position:relative;width:calc(50% - 40px);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:28px 26px">
        <span class="mk-tl-dot"></span>
        <div style="display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:16px">
          <div style="width:48px;height:48px;flex:none;border-radius:12px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;font:700 16px 'Space Grotesk',sans-serif;color:#ffbd59">IS</div>
          <span style="font:600 10px 'JetBrains Mono',monospace;letter-spacing:.1em;color:#1e3a5f;background:#ffbd59;padding:5px 10px;border-radius:999px"><span class="lang-en">FINANCIAL SERVICES</span><span class="lang-sw">HUDUMA ZA FEDHA</span></span>
        </div>
        <div style="font:600 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:8px">Ilboru Saccos</div>
        <div style="width:34px;height:2px;background:#ffbd59;margin:0 0 14px"></div>
        <p style="margin:0 0 16px;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">A savings and credit cooperative society (SACCOS) we work with on digital tools for member services and financial operations.</span><span class="lang-sw">Chama cha akiba na mikopo (SACCOS) tunachoshirikiana nacho katika zana za kidijitali kwa huduma za wanachama na shughuli za fedha.</span></p>
        <a class="mk-tl-chip" href="https://ias.co.tz" target="_blank" rel="noopener">ias.co.tz →</a>
      </div>
    </div>
    <div class="mk-tl-row mk-tl-right">
      <div class="mk-tl-card" style="position:relative;width:calc(50% - 40px);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:28px 26px">
        <span class="mk-tl-dot"></span>
        <div style="display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:16px">
          <div style="width:48px;height:48px;flex:none;border-radius:12px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;font:700 16px 'Space Grotesk',sans-serif;color:#ffbd59">MI</div>
          <span style="font:600 10px 'JetBrains Mono',monospace;letter-spacing:.1em;color:#1e3a5f;background:#ffbd59;padding:5px 10px;border-radius:999px"><span class="lang-en">TECHNOLOGY</span><span class="lang-sw">TEKNOLOJIA</span></span>
        </div>
        <div style="font:600 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:8px">Moinfotech</div>
        <div style="width:34px;height:2px;background:#ffbd59;margin:0 0 14px"></div>
        <p style="margin:0 0 16px;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">Our technology development partner, collaborating with us on software engineering and platform delivery.</span><span class="lang-sw">Mshirika wetu wa uendelezaji wa teknolojia, tunayeshirikiana naye katika uhandisi wa programu na utoaji wa mifumo.</span></p>
        <a class="mk-tl-chip" href="https://moinfo.co.tz" target="_blank" rel="noopener">moinfo.co.tz →</a>
      </div>
    </div>
    <div class="mk-tl-row mk-tl-left">
      <div class="mk-tl-card" style="position:relative;width:calc(50% - 40px);border:1px solid rgba(255,255,255,.16);border-radius:12px;padding:28px 26px">
        <span class="mk-tl-dot"></span>
        <div style="display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:16px">
          <div style="width:48px;height:48px;flex:none;border-radius:12px;background:rgba(0,0,0,.28);display:flex;align-items:center;justify-content:center;font:700 16px 'Space Grotesk',sans-serif;color:#ffbd59">SC</div>
          <span style="font:600 10px 'JetBrains Mono',monospace;letter-spacing:.1em;color:#1e3a5f;background:#ffbd59;padding:5px 10px;border-radius:999px"><span class="lang-en">EDUCATION</span><span class="lang-sw">ELIMU</span></span>
        </div>
        <div style="font:600 20px/1.3 'Space Grotesk',sans-serif;margin-bottom:8px">Smartclass</div>
        <div style="width:34px;height:2px;background:#ffbd59;margin:0 0 14px"></div>
        <p style="margin:0 0 16px;font:400 14px/1.65 Manrope,sans-serif;color:rgba(255,255,255,.72)"><span class="lang-en">An education technology partner focused on digital learning tools and platforms.</span><span class="lang-sw">Mshirika wa teknolojia ya elimu anayelenga zana na mifumo ya kujifunza kidijitali.</span></p>
        <span class="mk-tl-chip"><span class="lang-en">Digital Learning</span><span class="lang-sw">Kujifunza Kidijitali</span></span>
      </div>
    </div>
  </div>
</div>
<div class="mk-pad" style="position:relative;padding:20px 46px 64px;display:flex;align-items:center;justify-content:space-between;gap:30px;flex-wrap:wrap;border-top:1px solid rgba(255,255,255,.14)">
  <div style="font:600 26px/1.3 'Space Grotesk',sans-serif;max-width:520px"><span class="lang-en">Interested in partnering with Makutano Digital?</span><span class="lang-sw">Unapenda kushirikiana na Makutano Digital?</span></div>
  <a class="mk-cta" href="{{ route('contact') }}" style="background:#ffbd59;color:#1e3a5f;padding:16px 30px;border-radius:999px;font:700 14.5px 'Space Grotesk',sans-serif"><span class="lang-en">Get in touch</span><span class="lang-sw">Wasiliana nasi</span></a>
</div>
@endsection
