<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li></ul>


        <form class="form-inline my-2 my-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">SignUp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">SignIn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('viewmessage')}}">View Messages</a>
            </li>
            <li><a href="{{route('thanks',['name' => 'IS601' ])}}">Thanks</a></li>
        </form>
    </div>
</nav>