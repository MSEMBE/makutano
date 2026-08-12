@extends('layouts.app')

@section('title', 'Makutano Digital — ICT & Digital Solutions, Dodoma')

@section('content')
<div class="mk-hero" style="position:relative;padding:88px 46px 64px;max-width:880px">
  <div style="font:500 10.5px 'JetBrains Mono',monospace;letter-spacing:.2em;color:#ffbd59;margin-bottom:26px">ICT &amp; DIGITAL SOLUTIONS · DODOMA, TANZANIA</div>
  <h1 style="margin:0 0 26px;font:700 78px/.98 'Space Grotesk',sans-serif;letter-spacing:-.035em;text-wrap:balance">
    <span class="lang-en">One partner.<br>Seven digital<br><span style="color:#ffbd59">capabilities</span>.</span>
    <span class="lang-sw">Mshirika mmoja.<br>Huduma saba za<br><span style="color:#ffbd59">kidijitali</span>.</span>
  </h1>
  <p style="margin:0 0 38px;max-width:560px;font:400 17px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.78);text-wrap:pretty">
    <span class="lang-en">We bridge the gap between opportunity and execution in Tanzania's fast-growing digital economy.</span>
    <span class="lang-sw">Tunaunganisha fursa na utekelezaji katika uchumi wa kidijitali unaokua kwa kasi wa Tanzania.</span>
  </p>
  <div style="display:flex;gap:14px;align-items:center">
    <a class="mk-cta" href="{{ route('contact') }}" style="background:#ffbd59;color:#1e3a5f;padding:16px 30px;border-radius:999px;font:700 14.5px 'Space Grotesk',sans-serif"><span class="lang-en">Start a project</span><span class="lang-sw">Anza mradi</span></a>
    <a href="{{ route('about') }}" style="padding:16px 28px;border:1.5px solid rgba(255,255,255,.35);border-radius:999px;font:500 14.5px 'Space Grotesk',sans-serif;color:#fff"><span class="lang-en">View company profile</span><span class="lang-sw">Wasifu wa kampuni</span></a>
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

<div class="mk-grid" style="position:relative;display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(255,255,255,.14)" data-more="{{ route('services') }}">
  <div style="background:#1e3a5f;padding:34px 46px 40px">
    <div style="font:700 34px/1 'Space Grotesk',sans-serif;color:#ffbd59">01</div>
    <div style="font:600 18px/1.3 'Space Grotesk',sans-serif;margin:14px 0 8px"><span class="lang-en">Advertising first</span><span class="lang-sw">Matangazo kwanza</span></div>
    <div style="font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.66)"><span class="lang-en">Our primary line of business — campaigns built for visibility and growth.</span><span class="lang-sw">Biashara yetu kuu — kampeni zilizoundwa kwa mwonekano na ukuaji.</span></div>
  </div>
  <div style="background:#1e3a5f;padding:34px 46px 40px">
    <div style="font:700 34px/1 'Space Grotesk',sans-serif;color:#ffbd59">02</div>
    <div style="font:600 18px/1.3 'Space Grotesk',sans-serif;margin:14px 0 8px"><span class="lang-en">Locally grounded</span><span class="lang-sw">Tumejikita ndani</span></div>
    <div style="font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.66)"><span class="lang-en">Global technology standards, practical Tanzanian market realities.</span><span class="lang-sw">Viwango vya teknolojia ya dunia, uhalisia wa soko la Tanzania.</span></div>
  </div>
  <div style="background:#1e3a5f;padding:34px 46px 40px">
    <div style="font:700 34px/1 'Space Grotesk',sans-serif;color:#ffbd59">03</div>
    <div style="font:600 18px/1.3 'Space Grotesk',sans-serif;margin:14px 0 8px"><span class="lang-en">Fully licensed</span><span class="lang-sw">Tumesajiliwa kikamilifu</span></div>
    <div style="font:400 13px/1.6 Manrope,sans-serif;color:rgba(255,255,255,.66)"><span class="lang-en">Registered ICT provider under the laws of Tanzania, Dodoma City Council.</span><span class="lang-sw">Mtoa huduma wa TEHAMA aliyesajiliwa kwa sheria za Tanzania, Halmashauri ya Jiji la Dodoma.</span></div>
  </div>
</div>

@endsection
