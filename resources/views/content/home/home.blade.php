@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container container--full">
	<!-- welcome banner and datepicker section -->
	<div class="home-banner">
		<div class="swiper-container home-banner__slider">
			<!-- Additional required wrapper -->
		    <div class="swiper-wrapper" id="top">
		        <!-- Slides -->
		        <div class="swiper-slide">
					<div class="home-banner__wrapper">
						<div class="home-banner__img" style="background-image: url('images/home-banner.jpeg');"></div>
						<div class="home-banner__overlay"></div>
						<h1 class="home-banner__title container">Temukan tempat wisata <div class="home-banner__subtitle"><span>1</span></div></h1>
					</div>
		        </div>
		        <div class="swiper-slide">
					<div class="home-banner__wrapper">
						<div class="home-banner__img" style="background-image: url('images/home-banner.jpeg');"></div>
						<div class="home-banner__overlay"></div>
						<h1 class="home-banner__title container">Temukan tempat wisata <div class="home-banner__subtitle"><span>2</span></div></h1>
					</div>
		        </div>
		        <div class="swiper-slide">
					<div class="home-banner__wrapper">
						<div class="home-banner__img" style="background-image: url('images/home-banner.jpeg');"></div>
						<div class="home-banner__overlay"></div>
						<h1 class="home-banner__title container">Temukan tempat wisata <div class="home-banner__subtitle"><span>3</span></div></h1>
					</div>
		        </div>
		    </div>
		    <!-- If we need pagination -->
		    <div class="swiper-pagination home-pagination banner-pagination"></div>
		    
		    <!-- If we need navigation buttons -->
		    <div class="swiper-button-prev">
		    	<img src="{{ asset('images/icon/ic-arrow-left.svg') }}" alt="arrow-left">
		    </div>
		    <div class="swiper-button-next">
		    	<img src="{{ asset('images/icon/ic-arrow-right.svg') }}" alt="arrow-right">
		    </div>
		</div>
		<div class="home-datetime container">
			<div class="home-datetime__wrapper row">
				<div class="home-datetime__choose col-md-4">
					<div class="form-group">
						<div class="input-group select with-icon">
					        <div class="input-icon icon-a">
					          <img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
					        </div>
					        <input class="home-datetime__option" type="text" mode="typeahead" placeholder="Kemana?">
					    </div>
					</div>
				</div>
				<div class="home-datetime__choose home-datetime__choose--middle col-md-4">
					<div class="form-group">
						<div class="input-group select with-icon">
					        <div class="input-icon icon-b">
					          <img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
					        </div>
					        <input class="home-datetime__option" type="text" mode="daterange" readonly>
					    </div>
					</div>
				</div>
				<div class="home-datetime__choose home-datetime__choose--last col-md-4">
					<div class="form-group">
						<div class="input-group select with-icon">
					        <div class="input-icon icon-c">
					          <img class="svg-image" src="{{ asset('images/icon/ic-person.svg') }}" alt="Person icon">
					        </div>
					        <input class="home-datetime__option" type="text" mode="increment" readonly value="Peserta?">
					    </div>
					</div>
					<div id="qty" class="home-datetime__qty">
						<div class="qty-form">
				          <button class="qtyminus"></button>
				          <input type="text" name="quantity" value="1" class="qty home-datetime__qty-form" readonly="readonly">
				          <button  class="qtyplus"></button>
				          <div class="btn home-datetime__qty-btn">
				          	Tutup
				          </div>
				        </div>
					</div>
					<div class="home-datetime__btn">
						<button class="btn btn--orange">CARI</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- open trip section -->
	<div class="home-wrapper">
		<h1 class="home-wrapper__title">Top Destination</h1>
		<div class="home-gridview clearfix">
			<div class="container">
				<div class="home-gridview__big row">
					<div class="col-md-6">
						<div class="home-biggrid" style="background-image: url('images/image-a.jpg');">
							<div class="home-biggrid__overlay"></div>
							<div class="home-biggrid__hover">
								<h3>Jalan - Jalan Bersejarah di Bangunan Belanda</h3>
								<p>This is hover state sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
								<div class="home-biggrid__pricehover">
									<span>Mulai Dari</span>
									<p>IDR 200.000</p>
									<img class="svg-image" src="{{ asset('images/icon/home-arrow.svg') }}" alt="">
								</div>
							</div>
							<!-- default state -->
							<div class="home-biggrid__default">
								<h3>Jalan - Jalan Bersejarah di Bangunan Belanda</h3>
								<div class="home-biggrid__price">
									<span>Mulai Dari</span>
									<p>IDR 200.000</p>
								</div>
								<div class="home-biggrid__infowrap">
									<div class="home-biggrid__info">
										<span class="fa fa-map-marker"></span>
										<p>Bandung</p>
									</div>
									<div class="home-biggrid__info">
										<span class="fa fa-calendar"></span>
										<p>24 April - 25 April</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="home-biggrid" style="background-image: url('images/image-a.jpg');">
							<div class="home-biggrid__overlay"></div>
							<!-- hover state -->
							<div class="home-biggrid__hover">
								<h3>Jalan - Jalan Bersejarah di Bangunan Belanda</h3>
								<p>This is hover state sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
								<div class="home-biggrid__pricehover">
									<span>Mulai Dari</span>
									<p>IDR 200.000</p>
									<img class="svg-image" src="{{ asset('images/icon/home-arrow.svg') }}" alt="">
								</div>
							</div>
							<!-- default state -->
							<div class="home-biggrid__default">
								<h3>Jalan - Jalan Bersejarah di Bangunan Belanda</h3>
								<div class="home-biggrid__price">
									<span>Mulai Dari</span>
									<p>IDR 200.000</p>
								</div>
								<div class="home-biggrid__infowrap">
									<div class="home-biggrid__info">
										<span class="fa fa-map-marker"></span>
										<p>Bandung</p>
									</div>
									<div class="home-biggrid__info">
										<span class="fa fa-calendar"></span>
										<p>24 April - 25 April</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="home-gridview__small row">
					<div class="col-md-4">
						<div class="home-smallgrid" style="background-image: url('images/image-b.jpg');">
							<div class="home-biggrid__overlay"></div>
							<!-- hover state -->
							<div class="home-smallgrid__hover">
								<div class="home-smallgrid__wrapper">
									<h5>3 Hari di Bandung Barat : Tangkuban Perahu &amp; Maribaya</h5>
									<div class="home-biggrid__pricehover">
										<span>Mulai Dari</span>
										<p>IDR 200.000</p>
										<img class="svg-image" src="{{ asset('images/icon/home-arrow.svg') }}" alt="">
									</div>
								</div>
							</div>
							<!-- default state -->
							<div class="home-smallgrid__default">
								<div class="home-smallgrid__wrapper">
									<h5>3 Hari di Bandung Barat : Tangkuban Perahu &amp; Maribaya</h5>
									<div class="home-small-grid__infowrap">
										<div class="home-biggrid__info">
											<span class="fa fa-map-marker"></span>
											<p>Bandung</p>
										</div>
										<div class="home-biggrid__info">
											<span class="fa fa-calendar"></span>
											<p>24 April - 25 April</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="home-smallgrid" style="background-image: url('images/image-b.jpg');">
							<div class="home-biggrid__overlay"></div>
							<!-- hover state -->
							<div class="home-smallgrid__hover">
								<div class="home-smallgrid__wrapper">
									<h5>3 Hari di Bandung Barat : Tangkuban Perahu &amp; Maribaya</h5>
									<div class="home-biggrid__pricehover">
										<span>Mulai Dari</span>
										<p>IDR 200.000</p>
										<img class="svg-image" src="{{ asset('images/icon/home-arrow.svg') }}" alt="">
									</div>
								</div>
							</div>
							<!-- default state -->
							<div class="home-smallgrid__default">
								<div class="home-smallgrid__wrapper">
									<h5>3 Hari di Bandung Barat : Tangkuban Perahu &amp; Maribaya</h5>
									<div class="home-small-grid__infowrap">
										<div class="home-biggrid__info">
											<span class="fa fa-map-marker"></span>
											<p>Bandung</p>
										</div>
										<div class="home-biggrid__info">
											<span class="fa fa-calendar"></span>
											<p>24 April - 25 April</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="home-smallgrid" style="background-image: url('images/image-b.jpg');">
							<div class="home-biggrid__overlay"></div>
							<!-- hover state -->
							<div class="home-smallgrid__hover">
								<div class="home-smallgrid__wrapper">
									<h5>3 Hari di Bandung Barat : Tangkuban Perahu &amp; Maribaya</h5>
									<div class="home-biggrid__pricehover">
										<span>Mulai Dari</span>
										<p>IDR 200.000</p>
										<img class="svg-image" src="{{ asset('images/icon/home-arrow.svg') }}" alt="">
									</div>
								</div>
							</div>
							<!-- default state -->
							<div class="home-smallgrid__default">
								<div class="home-smallgrid__wrapper">
									<h5>3 Hari di Bandung Barat : Tangkuban Perahu &amp; Maribaya</h5>
									<div class="home-small-grid__infowrap">
										<div class="home-biggrid__info">
											<span class="fa fa-map-marker"></span>
											<p>Bandung</p>
										</div>
										<div class="home-biggrid__info">
											<span class="fa fa-calendar"></span>
											<p>24 April - 25 April</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- recommend plan section -->
	<div class="home-wrapper relative">
		<h1 class="home-wrapper__title">Best Attraction</h1>
		<!-- JS untuk overflow kiri dan kanan -->
		<div class="home-overflowview relative">
			<div class="swiper-container home-rp__slider">
				<!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>

							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			        <div class="swiper-slide">
						<div class="card">
							<div class="swiper-container card__slider">
								<!-- Additional required wrapper -->
							    <div class="swiper-wrapper">
							        <!-- Slides -->
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							        <div class="swiper-slide">
										<img src="{{ asset('images/image-card.jpeg') }}" alt="">
							        </div>
							    </div>
							    
							    <!-- If we need pagination -->
		    					<div class="swiper-pagination home-pagination card-pagination"></div>
							</div>
							<div class="card__location row">
								<div class="card__map col-md-4">
									<div id="map" class="pd-maps-box maps"></div>
								</div>
								<div class="card__infowrap col-md-8">
									<h5>Petualangan di raja ampat</h5>
									<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
									<div class="card__info">
										<span class="fa fa-map-marker"></span>
										<p>Sulawesi Selatan</p>
									</div>
								</div>
							</div>
							<div class="card__pricewrap relative">
								<h2>Rp200.000 <span>/Orang</span></h2>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
						</div>
			        </div>
			    </div>
			</div>
			<!-- If we need navigation buttons -->
		    <div class="home-shadow__left">
				<img src="{{ asset('images/icon/ic-arrow-left.svg') }}" alt="arrow-left">
			</div>
		    <div class="home-shadow__right">
				<img src="{{ asset('images/icon/ic-arrow-right.svg') }}" alt="arrow-right">
			</div>
		</div>
	</div>
	<!-- slider section -->
	<div class="home-wrapper">
		<div class="container">
			<h1 class="home-wrapper__title">How It Works</h1>
			<!-- efek slider masukkan disini -->
			<div class="home-slider">
				<div class="row">
					<div class="col-md-6">
						<div class="swiper-container home-slider__imgslider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<div class="home-slider__slideimg">
										<img src="{{ asset('images/illustration-a.jpeg') }}" alt="illustration-a">
									</div>
						        </div>
						        <div class="swiper-slide">
									<div class="home-slider__slideimg">
										<img src="{{ asset('images/tg_image_1170784828.jpeg') }}" alt="illustration-a">
									</div>
						        </div>
						        <div class="swiper-slide">
									<div class="home-slider__slideimg">
										<img src="{{ asset('images/tg_image_2765734033.jpeg') }}" alt="illustration-a">
									</div>
						        </div>
						    </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="swiper-container home-slider__wrap relative">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<div class="home-slider__content">
										<h2 class="home-slider__number">1</h2>
										<h3 class="home-slider__title">Pilih kota dan tanggal</h3>
										<p>1. Google Trips makes it easier than ever to plan and organize your trips. It automatically maps out a half day or a full day with suggestions for things to see and do. Don’t like what you see? Tap the “magic wand” to see more nearby sights. Each tap of the wand gives you a fresh set of nearby attractions.</p>
									</div>
						        </div>
						        <div class="swiper-slide">
									<div class="home-slider__content">
										<h2 class="home-slider__number">2</h2>
										<h3 class="home-slider__title">Pilih kota dan tanggal</h3>
										<p>2. Google Trips makes it easier than ever to plan and organize your trips. It automatically maps out a half day or a full day with suggestions for things to see and do. Don’t like what you see? Tap the “magic wand” to see more nearby sights. Each tap of the wand gives you a fresh set of nearby attractions.</p>
									</div>
						        </div>
						        <div class="swiper-slide">
									<div class="home-slider__content">
										<h2 class="home-slider__number">3</h2>
										<h3 class="home-slider__title">Pilih kota dan tanggal</h3>
										<p>3. Google Trips makes it easier than ever to plan and organize your trips. It automatically maps out a half day or a full day with suggestions for things to see and do. Don’t like what you see? Tap the “magic wand” to see more nearby sights. Each tap of the wand gives you a fresh set of nearby attractions.</p>
									</div>
						        </div>
						    </div>
						    <!-- If we need pagination -->
		   					<div class="swiper-pagination home-pagination slide-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php /*
	<!-- calendar section -->
	<div class="home-wrapper home-wrapper__calendar" style="background-image: url('images/calendar-bg.jpeg');">
		<h1 class="home-wrapper__title">Open Trip Calendar</h1>
		<div class="home-calendar">
			<div class="calendar__container">
				<div class="calendar__filter">
					<div class="calendar__filter-wrap row">
						<div class="form-group col-md-6">
							<div class="input-group select with-label">
						        <label for="">Kategori</label>
						        <select class="" name="">
						          <option value="">Semua</option>
						        </select>
						    </div>
						</div>
						<div class="form-group col-md-6">
							<div class="input-group select with-label">
						        <label for="">Destinasi</label>
						        <select class="" name="">
						          <option value="">Pulau Seribu</option>
						        </select>
						    </div>
						</div>
					</div>
				</div>
				<div class="calendar__content"></div>
			</div>
		</div>
	</div>
*/ ?>
	<!-- made a plan section -->
	<div class="home-wrapper home-wrapper__plan relative" style="background-image: url('images/image-a.jpg');">
		<div class="home-plan__overlay"></div>
		<div class="home-plan container">
			<!-- plan section goes here -->
			<div class="row">
				<div class="col-md-6 home-plan__image">
					<img src="{{ asset('images/home-baloon.png') }}" alt="baloon">
				</div>
				<div class="col-md-6 home-plan__text">
					<h2>Have someplace in mind?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  ….</p>
					<!-- <button class="btn btn--medium btn--orange">BUAT PLAN</button> -->
					<a class="btn btn--medium btn--orange" href="#top">BUAT PLAN</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-overlay modal-open-trip">
  <div class="close-modal-container">
    <div class="btn-js-action close-btn" data-action="close-modal">
    </div>
  </div>
  <div class="op-modal">
  	<div class="container">
  		<div class="op-modal__title">
	  		<h1>14 April 2017</h1>
	  		<h4>8 Open Trip Tersedia</h4>
	  	</div>
	  	<div class="op-modal__highlight">
	  		<div class="op-modal__highlight-wrap row">
	  			<div class="col-md-4">
	  				<div class="card card--full">
	  					<div class="card__slider">
	  						<img src="{{ asset('images/image-card.jpeg') }}" alt="modal-image">
	  					</div>
	  					<div class="card__modalinfo card__location card__infowrap">
	  						<h5>Paket Keluarga di Pulau Macan</h5>
	  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
	  						<div class="card__modallocation row">
	  							<div class="card__modallocation-content col-md-6">
	  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
	  								<span>14 - 17 APRIL</span>
	  							</div>
	  							<div class="card__modallocation-content col-md-6">
	  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
	  								<span>Kepulauan Seribu</span>
	  							</div>
	  						</div>
	  					</div>
	  					<div class="card__pricewrap relative">
	  						<p>8 Orang Terdaftar</p>
							<h2>Rp200.000</h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
	  				</div>
	  			</div>
	  			<div class="col-md-4">
	  				<div class="card card--full">
	  					<div class="card__slider">
	  						<img src="{{ asset('images/image-card.jpeg') }}" alt="modal-image">
	  					</div>
	  					<div class="card__modalinfo card__location card__infowrap">
	  						<h5>Paket Keluarga di Pulau Macan</h5>
	  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
	  						<div class="card__modallocation row">
	  							<div class="card__modallocation-content col-md-6">
	  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
	  								<span>14 - 17 APRIL</span>
	  							</div>
	  							<div class="card__modallocation-content col-md-6">
	  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
	  								<span>Kepulauan Seribu</span>
	  							</div>
	  						</div>
	  					</div>
	  					<div class="card__pricewrap relative">
	  						<p>8 Orang Terdaftar</p>
							<h2>Rp200.000</h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
	  				</div>
	  			</div>
	  			<div class="col-md-4">
	  				<div class="card card--full">
	  					<div class="card__slider">
	  						<img src="{{ asset('images/image-card.jpeg') }}" alt="modal-image">
	  					</div>
	  					<div class="card__modalinfo card__location card__infowrap">
	  						<h5>Paket Keluarga di Pulau Macan</h5>
	  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
	  						<div class="card__modallocation row">
	  							<div class="card__modallocation-content col-md-6">
	  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
	  								<span>14 - 17 APRIL</span>
	  							</div>
	  							<div class="card__modallocation-content col-md-6">
	  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
	  								<span>Kepulauan Seribu</span>
	  							</div>
	  						</div>
	  					</div>
	  					<div class="card__pricewrap relative">
	  						<p>8 Orang Terdaftar</p>
							<h2>Rp200.000</h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="op-modal__other">
	  		<div class="op-modal__other-title">
	  			<h3>Lainnya</h3>
	  		</div>
	  		<div class="op-modal__other-container">
	  			<div class="op-modal__other-content">
	  				<div class="op-modal__other-content-wrap row">
	  					<div class="col-md-8">
	  						<div class="card__row card__location card__infowrap">
		  						<h5>Paket Keluarga di Pulau Macan</h5>
		  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
		  						<div class="card__modallocation row">
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
		  								<span>14 - 17 APRIL</span>
		  							</div>
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
		  								<span>Kepulauan Seribu</span>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div class="col-md-4">
	  						<div class="card__pricewrap card__pricewrap--row relative">
	  							<div class="card__price-middle">
	  								<p>2 Orang Terdaftar</p>
									<h2>Rp200.000</h2>
	  							</div>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="op-modal__other-content">
	  				<div class="op-modal__other-content-wrap row">
	  					<div class="col-md-8">
	  						<div class="card__row card__location card__infowrap">
		  						<h5>Paket Keluarga di Pulau Macan</h5>
		  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
		  						<div class="card__modallocation row">
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
		  								<span>14 - 17 APRIL</span>
		  							</div>
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
		  								<span>Kepulauan Seribu</span>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div class="col-md-4">
	  						<div class="card__pricewrap card__pricewrap--row relative">
	  							<div class="card__price-middle">
	  								<p>2 Orang Terdaftar</p>
									<h2>Rp200.000</h2>
	  							</div>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="op-modal__other-content">
	  				<div class="op-modal__other-content-wrap row">
	  					<div class="col-md-8">
	  						<div class="card__row card__location card__infowrap">
		  						<h5>Paket Keluarga di Pulau Macan</h5>
		  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
		  						<div class="card__modallocation row">
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
		  								<span>14 - 17 APRIL</span>
		  							</div>
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
		  								<span>Kepulauan Seribu</span>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div class="col-md-4">
	  						<div class="card__pricewrap card__pricewrap--row relative">
	  							<div class="card__price-middle">
	  								<p>2 Orang Terdaftar</p>
									<h2>Rp200.000</h2>
	  							</div>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="op-modal__other-content">
	  				<div class="op-modal__other-content-wrap row">
	  					<div class="col-md-8">
	  						<div class="card__row card__location card__infowrap">
		  						<h5>Paket Keluarga di Pulau Macan</h5>
		  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
		  						<div class="card__modallocation row">
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
		  								<span>14 - 17 APRIL</span>
		  							</div>
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
		  								<span>Kepulauan Seribu</span>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div class="col-md-4">
	  						<div class="card__pricewrap card__pricewrap--row relative">
	  							<div class="card__price-middle">
	  								<p>2 Orang Terdaftar</p>
									<h2>Rp200.000</h2>
	  							</div>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="op-modal__other-content">
	  				<div class="op-modal__other-content-wrap row">
	  					<div class="col-md-8">
	  						<div class="card__row card__location card__infowrap">
		  						<h5>Paket Keluarga di Pulau Macan</h5>
		  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
		  						<div class="card__modallocation row">
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
		  								<span>14 - 17 APRIL</span>
		  							</div>
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
		  								<span>Kepulauan Seribu</span>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div class="col-md-4">
	  						<div class="card__pricewrap card__pricewrap--row relative">
	  							<div class="card__price-middle">
	  								<p>2 Orang Terdaftar</p>
									<h2>Rp200.000</h2>
	  							</div>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="op-modal__other-content">
	  				<div class="op-modal__other-content-wrap row">
	  					<div class="col-md-8">
	  						<div class="card__row card__location card__infowrap">
		  						<h5>Paket Keluarga di Pulau Macan</h5>
		  						<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
		  						<div class="card__modallocation row">
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-calendar-default.svg') }}" alt="Calendar icon">
		  								<span>14 - 17 APRIL</span>
		  							</div>
		  							<div class="card__modallocation-content col-md-4">
		  								<img class="svg-image" src="{{ asset('images/icon/ic-location.svg') }}" alt="Location icon">
		  								<span>Kepulauan Seribu</span>
		  							</div>
		  						</div>
		  					</div>
	  					</div>
	  					<div class="col-md-4">
	  						<div class="card__pricewrap card__pricewrap--row relative">
	  							<div class="card__price-middle">
	  								<p>2 Orang Terdaftar</p>
									<h2>Rp200.000</h2>
	  							</div>
								<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
							</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
  	</div>
  </div>
</div>

@endsection

@section('jsextra')
<script src="{{ asset('js/plugins/moment.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/plugins/daterangepicker.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/plugins/swiper.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/plugins/fullcalendar.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/plugins/typeahead.jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/view/home.js') }}" charset="utf-8"></script>
@endsection