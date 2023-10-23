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
    <script src="js/numerais.js"></script>
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
                <h5>ADMIN: {{auth()->user()->name }}</h5>
                <a href="{{ route('vaga.ReturnLists') }}" class="btn btn-primary py-2 px-4 ms-3">Oportunidades</a>
                <a href="{{ route('candidato.ReturnLists') }}" class="btn btn-primary py-2 px-4 ms-3">Candidatos</a>
                <a href="{{ route('login.destroy') }}" class="btn btn-danger py-2 px-4 ms-3">Sair</a>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Área de cadastro</h5>

                <form method="POST" action="{{ route('vaga.insert') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <h6>Campos com * (asterisco) são obrigatórios;</h6>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            @endif


                            @csrf
                            <div class="col-12">
                                Nome: *
                                <input type="nome" id="nome" name="nome"
                                    class="form-control border-1 bg-light px-4" placeholder="Ex: Programador pleno"
                                    style="height: 55px;" required value="{{ old('nome') }}">
                            </div>

                            <div class="col-12">
                                Descrição: *
                                <textarea name="descricao" class="form-control border-1 bg-light px-4 py-4" rows="4"
                                    placeholder="Vaga para dev PHP" required value="{{ old('descricao') }}"></textarea>
                            </div>

                            <div class="col-12">
                                Salário: *
                                <input type="text" name="salario" class="form-control border-1 bg-light px-4"
                                    onpaste="return false" ondrop="return false" placeholder="EX: R$: 00.00,00"
                                    style="height: 55px;" onkeypress="return numerais()" ; required
                                    value="{{ old('salario') }}">
                            </div>

                            <div class="col-12">
                                Tipo da vaga: *
                                <select name="tipo" class="form-control border-1 bg-light px-4"
                                    style="opacity: calc(1)" required>
                                    <p style="opacity: calc(0.5)">
                                        <option value="" disable selected hidden>Tipo da vaga</option>
                                    </p>
                                    <option value="PJ">PJ</option>
                                    <option value="CLT">CLT</option>
                                    <option value="FRELANCER">FRELANCER</option>
                                </select>
                             </div>

                                    <input type="hidden" name='flag' placeholder="flag" value="10"><br><br>

                                    <button class="btn btn-secondary w-100 py-3" type="submit"
                                        name="submit">Salvar Oportunidade</button>
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
    <script src="js/main.js"></script>
</body>

</html>
