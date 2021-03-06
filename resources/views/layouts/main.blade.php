<html>
	<head>
		<title>ONLY-MX Главная</title>
		<link rel="stylesheet" href="{{asset('css/ONLY-MX_main.css') }}">
		<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script type="text/javascript" src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
		<script src="{{ asset('/js/buttonup.js') }}"></script>
	</head>
	<body>
		<header id="header">
			<div class="container-fluid">
			  <div class="row">
			  	<div class="col-12">
			  		<i class="fa fa-phone" aria-hidden="true"></i>
			  		<div class="hdr">8 (495) 772-95-90</div>
			  		<i class="fa fa-map-marker" aria-hidden="true"></i>
			  		<div class="hdr">Москва, Таллинская ул., д. 34</div>
			  		<i class="fa fa-envelope-o" aria-hidden="true"></i>
			  		<div class="hdr">miem@hse.ru</div>
			  	</div>
			  </div>
			</div>
		</header>
			
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
			</button>
		  	<a class="navbar-brand" href="{{ asset('/css/ONLY-MX_main.css') }}">ONLY-MX</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
			      <li class="nav-item active"><a class="nav-link" href="/D:/ONLY-MX/ONLY-MX_main.html">Главная<span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
					    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#fs">Грузоперевозки</a>
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#ss">Упаковка грузов</a>
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#ts">Консолидация и хранение</a>
						    <a class="dropdown-item" href="/D:/ONLY-MX/ONLY-MX_services.html#fos">Страхование грузов</a>
					    </div>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Тарифы</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Расчет</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Отзывы</a></li>
					<li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Новости</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Онлайн заказ</a></li>
					<li class="nav-item"><a class="nav-link" href="/D:/ONLY-MX/ONLY-MX_contacts.html">Обратная связь</a></li>
			    </ul>
			   
				<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </ul>
		  	</div>
		</nav>
		
		<div class="container slider">
			<div class="row">
				<div class="col-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
							  <img class="d-block img-fluid" src="images/sl1 m.jpeg" alt="First slide">
							  <div class="carousel-caption d-none d-md-block">
							    <h3>ПАРТНЕРСТВО ОСНОВАНО НА ДОВЕРИИ</h3>
							    <p>Мы сотрудничаем с компаниями по транспортировке и доставке по всей России.</p>
							  </div>
							</div>
							<div class="carousel-item">
							  <img class="d-block img-fluid" src="images/sl2 m.jpg" alt="Second slide">
							  <div class="carousel-caption d-none d-md-block">
							    <h3>БЕЗОПАСНОСТЬ, КАЧЕСТВО, ПРОФЕССИОНАЛИЗМ</h3>
							    <p>Мы предоставляем клиентам по всей стране надежные транспортные услуги.</p>
							  </div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container progress-list">
			<div class="row">
				<div class="col-md-2">
					<h3 style="margin-bottom: 0">
						<p style="margin-bottom: 0">2500 т</p>
					</h3>
					<p>груза ежедневно</p>
				</div>	
				<div class="col-md-2">
					<h3 style="margin-bottom: 0">
						<p style="margin-bottom: 0">3000</p>
					</h3>
					<p>автомашин</p>
				</div>
				<div class="col-md-2">
					<h3 style="margin-bottom: 0">
						<p style="margin-bottom: 0">120</p>
					</h3>
					<p>городов доставки</p>
				</div>
				<div class="col-md-2">
					<h3 style="margin-bottom: 0">
						<p style="margin-bottom: 0">300 000 м<sup>2</sup></p>
					</h3>
					<p>складских помещений</p>
				</div>
				<div class="col-md-2">
					<h3 style="margin-bottom: 0">
						<p style="margin-bottom: 0">10 лет</p>
					</h3>
					<p>успешной работы</p>
				</div>
				<div class="col-md-2">
					<h3 style="margin-bottom: 0">
						<p style="margin-bottom: 0">15 000</p>
					</h3>
					<p>сотрудников</p>
				</div>		
			</div>
		</div>

		<div class="container text-about">
			<div class="row">
				<div class="col-12">
					<p align="justify">Компания «ONLY-MX» с 2007 года осуществляет грузоперевозки по России различными видами транспорта. За годы непрерывного развития небольшая транспортная компания стала крупнейшим транспортно-логистическим оператором. Более 1 500 000 клиентов доверяют нам управление своей логистикой.</p>
				</div>
			</div>
		</div>

		<div class="container cards">
			<div class="row">
				<div class="card-group">
					<div class="card">
					    <img class="card-img-top" src="images/track_ico.png" alt="Card image cap">
					    <div class="card-block">
					    	<h4 class="card-title">Межфилиальная доставка</h4>
					    	<p class="card-text" align="justify">Комплексные услуги по перевозке груза как между нашими терминалами, так и "от двери до двери".</p>
					    	<a href="/D:/ONLY-MX/ONLY-MX_services.html" class="btn btn-primary">Узнать больше</a>
				    	</div>
					</div>
					<div class="card">
					    <img class="card-img-top" src="images/train_ico2.png" alt="Card image cap">
					    <div class="card-block">
					    	<h4 class="card-title">ЖД перевозки</h4>
					    	<p class="card-text" align="justify">Полный спектр услуг в области железнодорожных контейнерных грузоперевозок.</p>
					    	<a href="/D:/ONLY-MX/ONLY-MX_services.html" class="btn btn-primary">Узнать больше</a>
					    </div>
					</div>
					<div class="card">
					    <img class="card-img-top" src="images/cont_ico.png" alt="Card image cap">
					    <div class="card-block">
					    	<h4 class="card-title">Контейнерные перевозки</h4>
					    	<p class="card-text" align="justify">Полный спектр услуг в области железнодорожных контейнерных грузоперевозок.</p>
					    	<a href="/D:/ONLY-MX/ONLY-MX_services.html" class="btn btn-primary">Узнать больше</a>
					    </div>
					</div>
				</div>
			</div>
		</div>

		<footer><center>Алла Кравченко © 2017 ONLY-MX</center></footer>
	</body>
</html>