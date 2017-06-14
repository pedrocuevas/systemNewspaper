@extends('layouts.app')



@section('page')

		<div class="container">
			<div class="bb-custom-wrapper">
				
				<div id="bb-bookblock" class="bb-bookblock">
					<div class="bb-item">
						<div class="bb-custom-firstpage">
							<h1>Cuerpo Diplomático <span>A Content Flip Plugin</span></h1>	
							<nav class="codrops-demos">
								<a href="{{route('admin.dashboard')}}">Volver</a>
							</nav>
							<nav class="codrops-nav">
								<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/codrops/2012/08/29/multiple-area-charts-with-d3-js/"><span>Previous Demo</span></a>
								<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/2012/09/03/bookblock-a-content-flip-plugin/"><span>Back to the Codrops Article</span></a>
							</nav>
						</div>
						<div class="bb-custom-side contenido">
							<button id="boton1" onclick="lupa(1)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="1" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-1.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton2" onclick="lupa(2)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="2" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-2.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton3" onclick="lupa(3)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="3" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-3.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton4" onclick="lupa(4)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
						<img id="4" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-4.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton5" onclick="lupa(5)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="5" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-5.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton6" onclick="lupa(6)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="6" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-6.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton7" onclick="lupa(7)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="7" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-7.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton8" onclick="lupa(8)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="8" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-8.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton9" onclick="lupa(9)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="9" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-9.jpg')}}" alt="">
						</div>
					</div>



					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton10" onclick="lupa(10)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="10" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-10.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton11" onclick="lupa(11)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="11" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-11.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton12" onclick="lupa(12)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
						<img id="12" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-12.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton13" onclick="lupa(13)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="13" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-13.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton14" onclick="lupa(14)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="14" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-14.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton15" onclick="lupa(15)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="15" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-15.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton16" onclick="lupa(16)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="16" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-16.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton17" onclick="lupa(17)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="17" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-17.jpg')}}" alt="">
						</div>
					</div>


					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton18" onclick="lupa(18)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="18" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-18.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton19" onclick="lupa(19)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="19" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-19.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton20" onclick="lupa(20)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
						<img id="20" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-20.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton21" onclick="lupa(21)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="21" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-21.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton22" onclick="lupa(22)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="22" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-22.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton23" onclick="lupa(23)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="23" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-23.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton24" onclick="lupa(24)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="24" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-24.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton25" onclick="lupa(25)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="25" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-25.jpg')}}" alt="">
						</div>
					</div>



					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton26" onclick="lupa(26)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="26" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-26.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton27" onclick="lupa(27)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="27" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-27.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton28" onclick="lupa(28)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
						<img id="28" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-28.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton29" onclick="lupa(29)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="29" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-29.jpg')}}" alt="">
						</div>
					</div>
					<div class="bb-item">
						<div class="bb-custom-side contenido">
						<button id="boton30" onclick="lupa(30)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="30" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-30.jpg')}}" alt="">
						</div>
						<div class="bb-custom-side contenido">
						<button id="boton31" onclick="lupa(31)"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
							<img id="31" src="{{asset('images/cuerpo/RevistaCuerpoDiplomatico-31.jpg')}}" alt="">
						</div>
					</div>



				</div>

				<nav>
					<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
					<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
					<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
					<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
				</nav>

			</div>

		</div> 

@endsection

@section('styles')

    {{ Html::style(mix('assets/revista/css/revista.css')) }}
    		<style>
			.bb-custom-side img{width:100%;}

			.contenido {
			    position: relative;
			    height: auto;
			    margin: 20px auto;
			    border: 12px solid #fff;
			    border-radius: 10px;
			    box-shadow: 1px 1px 5px rgba(50,50,50 0.5);
			}


		</style>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{ Html::script('assets/revista/js/modernizr.custom.js')}}
    {{ Html::script(mix('assets/revista/js/revista.js')) }}

		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>

		<script type="text/javascript">

		function lupa(imagen){
			$("#"+imagen).mlens(
		    {
		        imgSrc: $("#"+imagen).attr("data-big"),   // path of the hi-res version of the image
		        lensShape: "circle",                // shape of the lens (circle/square)
		        lensSize: 400,                  // size of the lens (in px)
		        borderSize: 4,                  // size of the lens border (in px)
		        borderColor: "#fff",                // color of the lens border (#hex)
		        borderRadius: 0,                // border radius (optional, only if the shape is square)
		        imgOverlay: $("#"+imagen).attr("data-overlay"), // path of the overlay image (optional)
		        overlayAdapt: true, // true if the overlay image has to adapt to the lens size (true/false)
		        zoomLevel:0.5
		    });
		    $("#boton"+imagen).attr('onclick','destruyeLupa('+imagen+')');
		}

		function destruyeLupa(imagen){
			$("#"+imagen).mlens('destroy');
			$("#boton"+imagen).attr('onclick','lupa('+imagen+')');
		}
		</script>


@endsection