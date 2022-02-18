<header>
    @auth
        <h2>Benvenuto {{Auth::user() -> name}}</h2>
        <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>


    @else
        <form action="{{route('register')}}" method="POST">
            @method('POST')
            @csrf
        
            <label for="name">Name</label><br>
            <input type="text" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">Password confirmation</label><br>
            <input type="password" name="password_confirmation"><br><br>
            
            <button class="btn-primary" type="submit">Register</button><br><br>
        </form>

        <form action="{{route('login')}}"method="POST">
            @method('POST')
            @csrf

            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br><br>
                                                            
            <button class="btn-primary" type="submit">Login</button>

        </form>
    @endauth
    
    
    
</header>