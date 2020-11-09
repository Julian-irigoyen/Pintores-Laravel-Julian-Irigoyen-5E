        <nav style="background-color:red">
            @yield('navbar')
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="{{route('login')}}">Inicio</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                        <li class="nav-item active">
                                                <a class="nav-link" href="{{route('Salvador')}}">Salvador Dalí</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{route('Marco')}}">Marco Grassi</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{route('Vincent')}}">Vincent Van Gogh</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{route('Leonardo')}}">Leonardo da Vinci</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{route('Miguel')}}">Miguel Ángel</a>
                                        </li>
                                </ul>
                        </div>
                </nav>
        </nav>
