@extends('cover.template')

@section('content')
<div class="column">
	
<section data-section-id="1" data-component-id="15a7_2_01_awz" data-category="headers" class="hero">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-spaced" data-config-id="header">The New Internet</h1>
      <h2 class="subtitle" data-config-id="description">Decentralized, secure, private. The PiperNet is on it's way to revolutionize every smartphone, PC, and smart-fridge near you.</h2>
      <div class="buttons is-centered"><a class="control button is-primary" href="#" data-config-id="primary-action">Sign up for free</a><a class="control button is-light" href="#" data-config-id="secondary-action">Read more</a></div>
    </div>
  </div>
</section>

    <div class="container has-text-centered" style="background-color: #FAFAD2;border-radius: 15px;padding: 0px 10px 0px 10px; margin-top: 10px;">
		<section data-section-id="1" data-component-id="15a7_13_02_awz" data-category="blog" class="section">
		  <div class="container">
		    <h2 class="title has-text-centered" data-config-id="header">Produk Terlaris</h2>
		    <div class="columns is-multiline" data-config-id="posts_02">
		      <div class="column is-6-tablet is-3-desktop">
		        <div class="card" style="height: 100%">
		          <div class="card-image"><a href="#"><img src="{{asset('')}}storage/assets/produk/1.jpg" alt=""></a></div>
		          <div class="card-content">
		            <div class="block"><small class="is-size-7">25 Okt 2019 | Oleh Arjuna</small></div>
		            <h5 class="title is-6"><a href="#">Terong Ungu</a></h5>
		            <p>I feel like not everybody outside of Pied Piper knows it, so I wanted to make it clear why I'm the best programmer in the world.</p>
		          </div>
		        </div>
		      </div>

		      <div class="column is-6-tablet is-3-desktop">
		        <div class="card" style="height: 100%">
		          <div class="card-image"><a href="#"><img src="{{asset('')}}storage/assets/produk/2.jpg" alt=""></a></div>
		          <div class="card-content">
		            <div class="block"><small class="is-size-7">25 Okt 2018 | Oleh Bima</small></div>
		            <h5 class="title is-6"><a href="#">Ayam Pejantan</a></h5>
		            <p>What makes decentralization so great? Let me enlighten you with my wisdom</p>
		          </div>
		        </div>
		      </div>
		      <div class="column is-6-tablet is-3-desktop">
		        <div class="card" style="height: 100%">
		          <div class="card-image"><a href="#"><img src="{{asset('')}}storage/assets/produk/3.jpg" alt=""></a></div>
		          <div class="card-content">
		            <div class="block"><small class="is-size-7">25 Okt 2018 | Oleh Nakula</small></div>
		            <h5 class="title is-6"><a href="#">Pisang Oven</a></h5>
		            <p>This is a short story about how we uncovered an insane problem with our ICO, fixed it, and still managed to secure vast funding.</p>
		          </div>
		        </div>
		      </div>
		      <div class="column is-6-tablet is-3-desktop">
		        <div class="card" style="height: 100%">
		          <div class="card-image"><a href="#"><img src="{{asset('')}}storage/assets/produk/4.jpg" alt=""></a></div>
		          <div class="card-content">
		            <div class="block"><small class="is-size-7">25 Okt 2018 | Oleh Sadewa</small></div>
		            <h5 class="title is-6"><a href="#">Kerajinan Bambu</a></h5>
		            <p>An exhaustive guide about how different teas can affect a CEO during their workday.</p>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="buttons is-centered"><a class="button is-primary" href="#" data-config-id="primary-action">Selanjutnya...</a></div>
		  </div>
		</section>
    </div>

    <div class="container has-text-centered" style="background-color: #FAFAD2; border-radius: 15px;padding: 0px 10px 0px 10px; margin-top: 10px;">
		<section data-section-id="3" data-component-id="15a7_4_02_awz" data-category="how-it-works" class="section">
		  <div class="container has-text-centered">
		    <h2 class="title" data-config-id="header">Jasa Terlaris</h2>
		    <div class="columns is-multiline is-centered" data-config-id="how_02">
		      <div class="column is-8 is-4-widescreen">
		        <div class="block"><img src="{{asset('')}}storage/assets/jasa/1.jpg" alt=""></div>
		        <h4 class="title">Pijat Bayi</h4>
		        <p>Using our Piper Assistant application, you can move your data to be stored our decentralized network with simple drag & drop.</p>
		      </div>
		      <div class="column is-8 is-4-widescreen">
		        <div class="block"><img src="{{asset('')}}storage/assets/jasa/2.jpg" alt=""></div>
		        <h4 class="title">Setrika Pakaian</h4>
		        <p>We want to make sure that you can keep using the software that you use to manage your  business.</p>
		      </div>
		      <div class="column is-8 is-4-widescreen">
		        <div class="block"><img src="{{asset('')}}storage/assets/jasa/3.jpg" alt=""></div>
		        <h4 class="title">Merawat Taman</h4>
		        <p>As with all innovative technologies, sometimes unpredictable things will happen, and you can always count on our support to solve issues for&nbsp;you.</p>
		      </div>
		    </div>
		    <div class="buttons is-centered"><a class="button is-primary" href="" data-config-id="primary-action">Selanjutnya...</a></div>
		  </div>
		</section>
    </div>    

</div>    
@endsection