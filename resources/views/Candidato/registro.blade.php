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
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
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
                <h5 class="fw-bold text-primary text-uppercase">Área de registro</h5>
                @error('message')
                    <p class="text-danger"><i class="fa fa-key fa-fw"></i>*E-mail ou senha inválidos</p>
                @enderror

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif

                <form action="{{ route('candidato.insert') }}" method="POST">
                    @csrf
                    <div class="row g-3">

                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control border-0 bg-light px-4"
                                placeholder="Nome" style="height: 55px;" value="{{ old('name') }}">
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="formacao" class="form-control border-0 bg-light px-4"
                                placeholder="Formação" style="height: 55px;" value="{{ old('formacao') }}">
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="pretensao" class="form-control border-0 bg-light px-4"
                                placeholder="pretensão" style="height: 55px;" value="{{ old('pretensao') }}">
                        </div>

                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control border-0 bg-light px-4"
                                placeholder="E-mail" style="height: 55px;" value="{{ old('email') }}">
                        </div>

                        <div class="col-12">
                            <input type="password" name="password" class="form-control border-0 bg-light px-4"
                                placeholder="Senha" style="height: 55px;">
                        </div>
                        <input type="hidden" name="flag" value="0">
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Cadastrar</button>
                        </div>
                    </div>



                </form>

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
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Jota Tech</a>. Todos
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
    <script src="../js/main.js"></script>
</body>

</html>
