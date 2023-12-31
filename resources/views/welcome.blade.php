<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vagas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->

    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><img src="img/4.png" width="50px">VagasOnly</h1>
            </a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                </div>
                @if (auth()->user())
                    <h5>Usuário: {{ auth()->user()->name }}</h5>
                @endif

                <a href="{{ route('login.show') }}" class="btn btn-primary py-2 px-4 ms-3" target="_blank">Adm</a>
                @if (!auth()->user())
                    <a href="{{ route('candidato.login') }}" class="btn btn-primary py-2 px-4 ms-3">Login do
                        candidato</a>
                @endif
                <a href="{{ route('candidato.registro') }}" class="btn btn-primary py-2 px-4 ms-3">Criar conta</a>
                {{--                 <a href="{{ route('candidato.destroy') }}" class="btn btn-danger py-2 px-4 ms-3">Sair</a>
 --}}
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Oportunidades Ativas</h5>
                <h3 class="mb-0">Não perca tempo, candidate-se agora mesmo!</h3>


                <h1 class="mb-0">
                    @if (auth()->user() == null)
                        <h5>Você precisa estar logado para se inscrever</h5>
                </h1>
                @endif
            </div>
            <div class="row g-5">
                @foreach ($vagas as $vaga)
                    @if ($vaga->flag != '-10')
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                            <div
                                class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    <i class="fa fa-code text-white"></i>
                                </div>
                                <h4 class="mb-3">{{ $vaga->nome }}</h4>
                                <p class="m-0">Descrição:{{ $vaga->descricao }}</p>
                                <p class="m-0">Descrição:{{ $vaga->salario }}</p>
                                <p class="m-0">Descrição:{{ $vaga->tipo }}</p>
                                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                                    {{--  id:{{ auth()->user()->id}}  --}}
                                    @if (auth()->user())
                                        <form action="{{ route('inscricao.insert') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="flag" value="10">
                                            <input type="hidden" name="candidato" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="vaga" value="{{ $vaga->id }}">


                                            {{-- Se já tá inscrito nessa vaga não mostre --}}

                                            <button type="submit" class="btn btn-primary w-100 py-3" type="submit"
                                                name="submit">Me
                                                inscrever</button>
                                        </form>

                                        @foreach ($inscricoes as $ins)
                                            @if ($vaga->id == $ins->vaga && $ins->candidato == auth()->user()->id)
                                                <form action="{{ route('vaga.desistir', $ins->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="col-12">
                                                        <button class="btn btn-danger w-100 py-3"
                                                            type="submit">Desistir</button>
                                                    </div>
                                                </form>
                                            @break
                                        @endif
                                    @endforeach



                                @endif

                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

    </div>
</div>

<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Jota Tech</a>.
                        Todos
                        os direitos reservados.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
