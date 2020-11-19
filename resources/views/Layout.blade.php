<doctype  html>
<html>
    <header></header>
        <meta  charset = " utf-8 " />
        <title >@yield('Titulo') </title>
    </head>
    <body>
        <h1>@yield('Header')</h1>
        @yield ('Body')
        <div>
            <Br><br><br>
            <A href = "{{route('pagina.index')}}"> <button> Pagina principal </button > </a>
            <A href = "{{route('atores.index')}}"> <button> atores </button > </a>
            <A href = "{{route('filmes.index')}}"> <button> filmes </button > </a>
            <A href = "{{route('generos.index')}}"> <button>  generos </button > </a>
             </a>
        </div>
    </body>
</html>
