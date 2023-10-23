{{-- <h1>Listagem de candidatos</h1> <h5><a href="/"> Painel</a></h5>

<table>
    <thead>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Salário</th>
        <th>Tipo</th>
    </thead>
    <tbody>
        @foreach ($candidato as $candidato)
            <tr>
                <td>{{ $candidato->nome }}</td>
                <td>{{ $candidato->formacao }}</td>
                <td>{{ $candidato->pretensao }}</td>
                <td>{{ $candidato->email }}</td>
                <td>
                    <a href="{{route('candidato.show', $candidato->id)}}"> Ver Meu perfil</a> &nbsp &nbsp &nbsp
                    <a href="{{route('candidato.edit', $candidato->id)}}"> atualizar</a>&nbsp &nbsp &nbsp
                    
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
 --}}


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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/table.css" rel="stylesheet">


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
                <h1 class="m-0"><img src="../img/4.png" width="50px">VagasOnly</h1>
            </a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                </div>

                <a href="{{ route('vaga.createList') }}" class="btn btn-primary py-2 px-4 ms-3">Cadastro</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Listagem de candidatos</h5>

                <table id="customers">
                    <thead>
                        <th>Nome</th>
                        <th>Formação</th>
                        <th>Pretensão</th>
                        <th>Email</th>
                        <th>Opções</th>
                       
                    </thead>
                    <tbody>
                        @foreach ($candidato as $candidato)
                            <tr>
                                <td>{{ $candidato->nome }}</td>
                                <td>{{ $candidato->formacao }}</td>
                                <td>{{ $candidato->pretensao }}</td>
                                <td>{{ $candidato->email }}</td>
                                <td>
                                    <a href="{{route('candidato.show', $candidato->id)}}">
                                        <img src="../img/olho.png" width="20px">
                                    </a>&nbsp &nbsp
                                    <a href="{{route('candidato.edit', $candidato->id)}}">
                                        <img src="../img/lapis.png" width="20px">
                                    </a>&nbsp &nbsp

                                   {{--  @if ($vaga->flag == '-10')
                                        <a href="{{ route('vaga.reactive', $vaga->id) }}"> <button
                                                class="btn btn-danger w-20 py-1" type="submit"
                                                name="submit">Reativar</button></a>
                                    @endif --}}
                                    {{-- @if ($vaga->flag == '10')
                                        <a href="{{ route('vaga.pause', $vaga->id) }}"> <button
                                                class="btn btn-primary w-20 py-1" type="submit"
                                                name="submit">Pausar</button></a>
                                    @endif --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
                            Todos os direitos reservados.
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
    <script src="../js/main.js"></script>
</body>

</html>







