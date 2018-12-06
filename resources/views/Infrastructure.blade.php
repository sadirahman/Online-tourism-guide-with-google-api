@extends('layout.app')

@section('content')
@if (session('Status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif

<!--/header-bottom--></header>
<!--/header-->
<section id="slider"> 
<!--slider-->
<div class="container"> 
  <div class="row"> 
    <div class="col-sm-12"> 
      <div id="slider-carousel" class="carousel slide" data-ride="carousel"> 
        <ol class="carousel-indicators">
        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#slider-carousel" data-slide-to="1"></li>
          <li data-target="#slider-carousel" data-slide-to="2"></li>
          <li data-target="#slider-carousel" data-slide-to="3"></li>
          <li data-target="#slider-carousel" data-slide-to="4"></li>
          <li data-target="#slider-carousel" data-slide-to="5"></li>
          <li data-target="#slider-carousel" data-slide-to="6"></li>
		  <li data-target="#slider-carousel" data-slide-to="7"></li>
          <li data-target="#slider-carousel" data-slide-to="8"></li>
		  <li data-target="#slider-carousel" data-slide-to="9"></li>

        </ol>
        <div class="carousel-inner"> 
          <div class="item active"> 
              <div> <img src="design/image/tourism-infrastructure-001.jpg" class="girl img-responsive" alt="" /></div>
          </div>
		   <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-002.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		   <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-003.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		  <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-004.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		  <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-005.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		  <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-006.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		  <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-007.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		  <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-008.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		  <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-009.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
		   <div class="item"> 
            <div> <img src="design/image/tourism-infrastructure-010.jpg" class="girl img-responsive" alt="" /> 
            </div>
          </div>
        </div>
        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev"> 
        <i class="fa fa-angle-left"></i> </a> <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"> 
        <i class="fa fa-angle-right"></i> </a> </div>
    </div>
  </div>
</div>
</section> 
<!--/slider--><section>
<div class="container"> 
<div class="row"> 
  <div class="col-sm-3"> 
    <div> 
      <h2 class="title text-center">Why Should Choose Us?</h2>
      <style>
.list-group-item a
{
color:#343434;
font-weight:normal;
text-transform:uppercase;
} 
</style>
      <div style='background:#eee;' id="accordian"> 
        <ul class="list-group">
    <li class="list-group-item">
      <div align="justify">Golden Bengal tours is a leading private tour operator 
        and ground handler in Dhaka, Bangladesh. Since the year 2001 as an incoming 
        tour company in Bangladesh, we have been serving to our valued clients 
        with a nice reputation. Regularly we are operating several guided tours 
        in &amp; outside of Bangladesh. We have an expert multilingual team &amp; 
        modern logistics for providing you a world class tourism service in Bangladesh.<br>
        <br>
        As a popular travel agent in Bangladesh; many renowned tour companies 
        from UK, USA, Canada, Countries of European Union, Australia, New Zealand, 
        Japan, Korea and China choose us as their counterpart. As a result we 
        handle a large number of foreign tourists every year. Also we are serving 
        to some foreign organizations, multinational companies, corporate offices, 
        NGOs and so many foreign &amp; local tourists. All these make us well 
        known, reputed, reliable and trusted tour company in Bangladesh to individuals 
        and organizations.<br>
        <br>
        Golden Bengal Tours is always ready to serve you for any travel needs 
        in Bangladesh even in South Asia. Please start your BANGLADESH travel 
        planning today. In advance we are greeting you &quot;Welcome to Dhaka, 
        Bangladesh&quot;.</div>
    </li>

        </ul>
      </div>
	  <h2 class="title text-center">Rent A Car</h2>
      <div class="product-image-wrapper"> 
        <div class="single-products"> 
          <div class="productinfo text-center"> <img src="design/image/tour008.jpg" alt="" height="200" width="200" /> 
          </div>
          <div class="product-overlay"> 
            <div class="overlay-content"> 
              <h2>Rent A Car</h2>
              <p align="justify">You can hire Sedan Cars, Micro Buses, Mini 
                  Buses, Bus and cruise boat from us. All our vehicles are air 
                  conditioned and renowned brand of Japan. Driver, fuel, toll 
                  and parking are included in price. We provide Airport and hotel 
                  transfer, daily and monthly basis rent a car service.
            </div>
          </div>
        </div>
      </div>
	  

      <h2 class="title text-center">Support to Foreign Investors</h2>
	  <div style='background:#eee;' id="accordian"> 
        <ul class="list-group">
    <li class="list-group-item">
      <div align="justify">
	  Bangladesh is an ideal place to invest in any business and has guarantee of best return. We support you to full fill all sorts of needs to set up your new business in Bangladesh.
	  </div>
    </li>
        </ul>
      </div>
	  
      
    </div>
  </div>
  <div class="col-sm-9 padding-right"> 
			<div class='col-sm-12' style='padding-bottom:30px;text-align:justify;color:#333;'> 
			<h2 class="title text-center">Tourism Infrastructure & Facilities in Bangladesh</h2>
				<p>Bangladesh is right now a rapidly developing country in Asia. Its tourism infrastructures 
  are also developing very fast. The capital city, Dhaka is easily accessible 
  from any corner of the Earth.<br>
  <br>
  <strong>Transports:</strong><br>
  Bangladesh has a wide transportation network of roads &amp; highways, express 
  railways, modern water and air ways, which connects all places conveniently. 
  We have latest and Modern, comfortable Japanese vehicles, highly facilitate 
  passenger ships. Government and many privet air lines connects Dhaka from other 
  seven cities. <br>
  <br>
  <strong>Hotel, Resort &amp; Other Accommodation:</strong><br>
  Clean and comfortable accommodation in practically all towns on tourist traffic 
  routes. International chain star hotels are available in big cities.<br>
  <br>
  <strong>Food and Health Care:<br>
  </strong>Bangladeshi curry is very famous to the foreigners. Beside of several 
  very testy local dishes; eastern and western testy foods are available here. 
  We have world class hospitals and health care service in big cities. The coverage 
  of travel insurance can be provided if require.<br>
  <br>
  <strong>ATM Booths and Internet Service:</strong><br>
  ATM booths, Cell phone and internet network are available everywhere. A number 
  of trained, experienced and skilled manpower joint in tourism sector every year 
  who are ensuring world class travel services.<br>
  <br>
  <strong>On Arrival Visa in Bangladesh: </strong><br>
  To attract more foreign tourists Bangladesh provide on arrival visa at all international 
  airports for 60 countries citizens including USA, Canada, UK, countries of European 
  Union, Australia, New Zealand, Japan, South Korea and few Arabian countries. 
  Vias fee is 51 USD while Japanese citizens are free. <br>
  <br>
  <strong>Safety for Tourists:</strong><br>
  Our law and orders situation is much better than the other south Asian countries. 
  Bangladesh is the safest land in South Asia for foreign tourists, businessmen 
  and other </p>
<p>professionals. Government or major political parties never support terrorism, 
  suicide bombings, violence, religious unrest, underground leftist politics and 
  mafias. Specially we have tourist police to guard the foreign tourists in several 
  tourist spots. Bangladesh is known as a moderate Muslim majority country; not 
  a Muslim country. People from all communities live here together peacefully 
  as real brother of each other.<br>
  <br>
  <strong>Rental Car &amp; Bus Service: </strong><br>
  With driver and fuel latest and Modern Japanese A/C Sedan Car, SUV, Micro Bus, 
  Mini Bus, Tourist Couch, 36 sitter Couch can be hire from Rant-A-Car as daily, 
  weekly and monthly basis.<br>
  <br>
  <strong>Restaurants and Bars:</strong><br>
  Western, Continental, Italian, Chinese, Thai, Japanese, Korian Indian restaurants 
  are available in all major hotels and most of the cities. But local dishes are 
  normally bit hot and spicy. Various kinds of curries of chicken, mutton, beef, 
  fish, prawns and vegetables are available but there is no pork. <br>
  <br>
  All kind of hard drinks are available in big hotels, bars and duty paid shops. 
  You can buy your necessary liquor from airport duty free shop when you arrive 
  at Dhaka airport. Drinking in public areas is not recommended for foreigners 
  on Fridays. <br>
  <br>
  <strong>Traditional Drinks: </strong><br>
  Cha; milky sweet tea is the main drink and available everywhere. Green coconut 
  water is a fine, safe and refreshing drink. Lassi is refreshing yogurt drink. 
  International soft drinks, such as Pepsi, Coca Cola, Fanta, 7-up, Mirinda and 
  Sprite are available. Bottled mineral water is safe to drink; never drink from 
  tap. <br>
  <br>
  <strong>Souvenir &amp; Shopping:</strong><br>
  Bangladeshi garments are world famous and cheap in price. Best buy in Bangladesh 
  is several handicrafts from ARONG chain shops. Brass wares, delicate silver 
  trinkets, beautiful objects of ivory, embroidered silk Sarees, scarves, purses, 
  bamboo decoration pieces, cane and conch shell products, gold and silver ornament, 
  jute carpets and a host of other attractive handicrafts can be bought in the 
  shops, at the handicraft sale centers and galleries in the cities and also at 
  tourist spots. Traditional Bangladeshi dresses like Lungee, Panpabi, Saree, 
  Salower and Kamiz of silk and cotton can be bought as souvenir and good memories 
  of Bangladesh.<br>
  <br>
  <strong>We are ready to receive foreign tourists:</strong><br>
  Our tourism facilities are very similar to India. We are ready to receive any 
  foreign tourists and can provide world class tourism services. Warm hearted, 
  hospitable, friendly people is our main brand. Our villages, rivers, hills, 
  culture, music, nature, weather must attract you as a traveler in Bangladesh.</p>
			</div>
  </div>
  </div>
</div></section>
@endsection
