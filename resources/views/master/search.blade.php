		<div class="collapse navbar-collapse" id="colapsable">
			<ul class="nav navbar-nav navbar-right">
				<li class="visible-xs">
					{!! Form::open(['route' => 'search', 'accept-charset' => 'UTF-8', 'class' => 'form']) !!}
						<div class="input-group">
						{!! Form::text('q', '', ['class'=> 'form-control', 'placeholder' => 'Search games' ]) !!}
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
							</span>
						</div>
					{!! Form::close() !!}
				</li>
				@if (Auth::guest())
				<li class=""><a href="{{route('register')}}" class="subbar">Register</a></li>
				<li id="nav-login-btn" class=""><a href="{{route('login')}}" class="subbar">Login</a></li>
		        @else
		         <li>
                    <a href="#">{{ Auth::user()->username }}</a>
                </li>
                <li><a href="{{route('logout')}}">Logout</a></li> 
	            @endif
				
				<li class="hidden-xs"><a href="#toggle-search" class="subbar"><span class="glyphicon glyphicon-search"></span></a></li>
			</ul>
		</div>
