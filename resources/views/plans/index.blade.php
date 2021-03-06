@extends('layouts.app')
@section('content')
<section id="highlights" class="wrapper style3">
    <div class="container">
        <div class="row aln-center">
            <div class="col-4 col-12-medium">
                @foreach ($plans as $plan)
                <section class="highlight">
					@if($plan->name=='Premium')
                    <a href="#" class="image featured"><img src="images/pre.png" alt="" style="width: 80%"/></a>
                    <h3>Plan {{ $plan->name }}</a></h3>
					@else
					<a href="#" class="image featured"><img src="images/vip.png" alt="" style="width: 100%"/></a>
					<h3>{{ $plan->name }}</a></h3>
					@endif
                    


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
                        
                           
                                @if ($plan->description)
								@php
								$descripcion  = strval($plan->description);
								$partes_separadas = explode("- ", $descripcion);
								for($i=0; $i <= 4; $i++){
						echo'<tr>';
                        echo'<td>';
                                echo $partes_separadas[$i];  
								echo '&nbsp;&nbsp;<br>'; 
                        echo'</td>';
                        echo'<td>
                                <img width="15px;" src="images/paloma.png" alt="paloma">
                            </td>
                        		
						</tr>';
								
									
								}
                                @endphp
                                @endif
                            
                            
                    </table>
                    <ul class="actions">
                        <li><a href="{{ url('/plan', $plan->slug) }}"  class="button style1">Seleccionar</a></li>
                    </ul>
                </section>
            </div>
            <!--
					<div class="col-4 col-12-medium">
						<section class="highlight">
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>

							<h3><a href="#">B??sico</a></h3>

							<table style="color:#000000">
								<tr>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>
										Texto - Im??gen - Audio
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
										Visualizaci??n Y Descarga para herederos
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
										Texto - Im??gen - Audio - Video
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
										Visualizaci??n Y Descarga para herederos
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