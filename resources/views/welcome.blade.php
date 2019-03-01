<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To do list</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
       
        <!-- Styles -->
        <style>
            html, body {
                background: no-repeat center/100% url('img/postit.jpg');
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
 
            .content {
                text-align: center;
            }
            
            .m-b-md {
                margin-bottom: 300px;
                font-family : 'Dancing Script', cursive;
                color: white;
            }
        </style>
    </head>
    
    <header>
    
    
    </header>
    
    <body>

            <div class="content">
                <div class="m-b-md">
                    <a style="font-size: 150px; text-decoration: underline overline white">To Do List</a>
               		<br>
                	<br>
                	<br>
                	<br>
                	
                @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}" style="color:white; font-size: 40px">Retour</a>
                    	
                    @else
                    	<input type="checkbox" name="login" id="login" />
                        <a href="{{ route('login') }}" style="color:white; font-size: 80px">Se connecter</a>
                        <br>
						<br>
                        <br>
                        <br>
                        @if (Route::has('register'))
                        	<input type="checkbox" name="register" id="register" />
                            <a href="{{ route('register') }}" style="color:white; font-size: 80px">S'enregistrer</a>
                        @endif
                    @endauth
                
           		 @endif
				</div>
				
            </div>
        
    </body>
    
    <footer>
    
    
    
    
    </footer>
    
</html>
