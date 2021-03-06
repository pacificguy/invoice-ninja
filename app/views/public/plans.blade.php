@extends('public.header')

@section('content')

  <style>
  section.body {
    background-color: #f8f8f8 !important;
  }
  </style>

  <section class="hero background hero3" data-speed="2" data-type="background">
  <div class="caption-side"></div>
  <div class="container">
    <div class="row" style="margin:0;">
      <div class="caption-wrap">
        <div class="caption">
          <h1>The <span style="color:#ecd816"> Plans</span></h1>
            </div>
          </div>
        </div>
      </div>
    </section>

 <section class="center" style="background-color:#f8f8f8">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        &nbsp;<p/>
        <h2>Go Pro to Unlock Premium Invoice Ninja Features</h2>
        <p>We believe that the free version of Invoice Ninja is a truly awesome product loaded 
          with the key features you need to bill your clients electronically. But for those who 
          crave still more Ninja awesomeness, we've unmasked the Invoice Ninja Pro plan, which 
          offers more versatility, power and customization options for just $50 per year. </p>
          <br/>&nbsp;<br/>
      </div>
    </div>
  </div>
</section>

<div style="background-color:#f8f8f8">
  <center><img src="{{ asset('images/pro-plan-chart.png') }}"/></center>
</div>      


<section style="background-color:#f8f8f8;padding-top:80px;padding-bottom:80px;">
 <div class="container">
  <div class="row">
    <div class="col-md-3 center-block">
      <a href="#">
        <div class="cta">
          <h2 onclick="return getStarted()">Invoice Now <span>+</span></h2>
        </div>
      </a>
    </div>
  </div>
</div>
</section>



@stop