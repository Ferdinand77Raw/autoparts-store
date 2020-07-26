@extends("layouts.main")

@section("Head")

<h1>
   High Tech Auto-Parts

      <a href="#">
      <nav id="pinterest">            
      </nav>
   </a>
   <a href="#">
      <nav id="twitter"></nav>
   </a>
   <a href="#">
      <nav id="youtube"></nav>
   </a>
   <a href="#">
      <nav id="instagram"></nav>
   </a>
   <a href="#">
      <nav id="tumblr"></nav>
   </a>
</h1>
<h2>
   Auto-Parts for Racing and Tunning 
</h2>
<header>
	<div class="main">
	<ul>
		<li><a href="#jszone">Showroom</a></li>
    <li><a href="#products">Used auto-parts</li></li>
	</ul>
   </div>
</header>
@endsection
@section("Middle")


<section id="mainsection">
 	<h4>Top performance Auto-Parts for your car</h4>
      <nav>Find what you're looking for your car.</br> The best site for tunning is here!</nav> 
		  <nav>We also help you to find used auto-parts at a good price and at a good state!<a href="/project/create" target="new">What's more, you can click here to sell yours!</a></nav>
</section>

<section id="jszone">
   The best auto-parts on sale!
      <!-- galeria Jquery -->
      <!--/top-->
  <div id="header">
    <div class="wrap">
      <div id="slide-holder">
      <div id="slide-runner">
        
    <img id="slide-img-1" src="/images/falken_ziex(1).jpg" class="slide" alt="" />
    <img id="slide-img-2" src="/images/BridgestonePotenza.jpg" class="slide" alt="" />
    <img id="slide-img-3" src="/images/Goodyear_Eagle.jpg" class="slide" alt="" />
    <img id="slide-img-4" src="/images/Falken_Azenis.jpg" class="slide" alt="" />
    <img id="slide-img-5" src="/images/YokohamaAdvan.jpg" class="slide" alt="" />
    <img id="slide-img-6" src="/images/Michelin_PilotSport.jpg" class="slide" alt="" />
    <img id="slide-img-7" src="/images/mazda_miata_coilover.jpg" class="slide" alt="" />
    <img id="slide-img-8" src="/images/diamond_zrp_pistons.jpg" class="slide" alt="" />
    <img id="slide-img-9" src="/images/turbonettics.jpg" class="slide" alt="" />
    <img id="slide-img-10" src="/images/GTX5008.jpg" class="slide" alt="" />
    <img id="slide-img-11" src="/images/exhaust_pipe_flowmaster.jpg" class="slide" alt="" />
    <img id="slide-img-12" src="/images/halltech_ecu.jpg" class="slide" alt="" />
    
    <div id="slide-controls">
     <p id="slide-client" class="text"><strong>Product: </strong><span></span></p>
     <p id="slide-desc" class="text"></p>
     <p id="slide-nav"></p>
    </div>
</div><!--content featured gallery here -->
   </div>
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"Falken Tires","desc":"Price: USD$700"},{"id":"slide-img-2","client":"Bridgestone Potenza","desc":"Price: USD$1100"},{"id":"slide-img-3","client":"Goodyear Eagle","desc":"Price: USD$800"},{"id":"slide-img-4","client":"Falken Azenis","desc":"Price: USD$900"},{"id":"slide-img-5","client":"Yokohama Advan","desc":"Price: USD$950"},{"id":"slide-img-6","client":"Michelin Pilot Sport","desc":"Price: USD$1050"},{"id":"slide-img-7","client":"HKS Mazda Miata Coilover Kit","desc":"Price: USD$2300"},{"id":"slide-img-8","client":"Diamond ZRP Pisotns","desc":"Price: USD$1050"},{"id":"slide-img-9","client":"Turbo Turnonettics","desc":"Price: USD$1540"},{"id":"slide-img-10","client":"Turbo GTX5008","desc":"Price: USD$1950"},{"id":"slide-img-11","client":"Exhaust Pipe Flowmaster","desc":"Price: USD$860"},{"id":"slide-img-12","client":"Halltech ECU System","desc":"Price: USD$2600"}];
   </script>
  </div> 
</div><!--/header-->
      <!-- fin galeria -->    
</section>

<section class="Re-sell">
  <div id="products">
    <ul>
    @foreach($product as $products)  
    <li>
      Product: {{$products->Name}}</br>
      Origin: {{$products->Origin}}</br>
      Price:  {{$products->Price}}</br>
      Seller's contact: {{$products->Phone_Number}}</br>
      <img src="/images/{{$products->Photo}}" />
    </li>
     @endforeach
  </ul>
  </div>
  <nav id="notice">In this case we jus act as a broker between the seller and the buyer. We don't make refunds. As for the seller, he himself/herself it's subjected to the federal laws about auto-parts. If any auto-part is suspected to be involved in black market's list, the seller will face legal actions and even prison.</nav>
</section>

<section id="zweitschlussfolgerung">
 <div id="erste">
   <div id="sanasponsors">Our sponsors in North America & South America</div>
   <nav id="brembo"></nav>
   <nav id="ecufast"></nav>
   <nav id="actc"></nav>
   <nav id="goodyear"></nav>
   <nav id="jsp"></nav>
   <nav id="turbonetics"></nav>
   <nav id="ptrbr"></nav>
   <nav id="hamiltonoil"></nav>
   <nav id="indycarseries"></nav>
   <nav id="ttwoser"></nav>
   <nav id="juntascicarelli"></nav>
</div>

<div id="zweite">
   <div id="eusponsors">Our Sponsors in Europe</div>
   <nav id="castrol"></nav>
   <nav id="dunlop"></nav>
   <nav id="bosch"></nav>
   <nav id="wtcr"></nav>
   <nav id="coopertires"></nav>
   <nav id="magnetimarelli"></nav>
</div>

 <div id="dreite"> 
   <div id="asiasponsors">Our Sponsors in Asia
   </div> 
   <nav id="toyotires"></nav>
   <nav id="falkentires"></nav>
   <nav id="bridgestone"></nav>
   <nav id="yokohama"></nav>
</div>
</section>
@endsection

@section("Foot")

<footer>	
	<div id="nivelF">
		<ul>
			<li><a href="/project/create" target="new">Contact</a></li>
			<li><a href="#">FAQ</a></li>
			<li><a href="#">Job Opportunities</a></li>
			<li><a href="#">Advices</a></li> 
			<li><a href="#">Legal department</a></li>
		</ul>
	</div>
</footer>

<p>Copyrights © High Tech Auto-Parts 2020 || All rights reserved  ®.</p>
@endsection