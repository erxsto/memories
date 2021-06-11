@extends('layouts.app')
@section('content')
<section id="highlights" class="wrapper style3">
    <div class="container">
        <div class="row aln-center">
            <div class="col-4 col-12-medium">
                @foreach ($plans as $plan)
                <section class="highlight">
                    <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                    <h3>{{ $plan->name }}</a></h3>


                    <table style="color:#000000">
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>
                                ${{ number_format($plan->cost, 2) }}
                            </td>
                            <td>
                                <img width="15px;" src="images/paloma.png" alt="paloma">
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>
                                @if ($plan->description)
                                {{ $plan->description }}
                                @endif
                            </td>
                            <td>
                                <img width="15px;" src="images/paloma.png" alt="paloma">
                            </td>
                        </tr>
                    </table>
                    <ul class="actions">
                        <li><a href=".\perfil" class="button style1">Seleccionar</a></li>
                    </ul>
                </section>
            </div>
            <!--
					<div class="col-4 col-12-medium">
						<section class="highlight">
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>

							<h3><a href="#">Básico</a></h3>

							<table style="color:#000000">
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										Texto - Imágen - Audio
									</td>
									<td>
										<img class="amarillo" width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										3 GB
									</td>
									<td>
										<img class="amarillo" width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										Visualización Y Descarga para herederos
									</td>
									<td>
										<img class="amarillo" width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										5 herederos
									</td>
									<td>
										<img class="amarillo" width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>

							</table>
							<ul class="actions">
								<li><a href="#" class="button style1">Seleccionar</a></li>
							</ul>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section class="highlight">
							<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
							<h3><a href="#">Premium</a></h3>



							<table style="color:#000000">
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										Texto - Imágen - Audio - Video
									</td>
									<td>
										<img width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										10 GB
									</td>
									<td>
										<img width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										Visualización Y Descarga para herederos
									</td>
									<td>
										<img width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										15 herederos
									</td>
									<td>
										<img width="15px;" src="images/paloma.png" alt="paloma">
									</td>
								</tr>

							</table>

							</p>

							<ul class="actions">
								<li><a href="#" class="button style1">Seleccionar</a></li>
							</ul>
						</section>
					</div>-->
            @endforeach
        </div>
    </div>
</section>
@endsection