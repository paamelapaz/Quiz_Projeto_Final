<section class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul>
        <a class="btn btn-outline-info" href="{{ url('/') }}">Inicio</a>
        <a class="btn btn-outline-info" href="{{ route('quiz') }}">Quizzes</a>
        <a class="btn btn-outline-success" href="{{ route('new_quiz') }}">Criar um quiz</a>
        @if(Auth::check())
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-success" type="submit">
                <span>{{ __('Logout') }}</span>
            </button>
        </form>
        Bem vindo! {{Auth::user()->name}}
        @endif
        </ul>
    </nav>
</section>
<head>
<style>
        body {
            background-image: url('imagens/img64789faa231705.85386216.jpg');
            background-size: cover; /* Ajusta o tamanho da imagem para cobrir todo o corpo da página */
            background-repeat: no-repeat; /* Impede a repetição da imagem */
            /* Outras propriedades de estilo, como cor do texto, podem ser adicionadas aqui conforme necessário */
        }
    </style>
</head>