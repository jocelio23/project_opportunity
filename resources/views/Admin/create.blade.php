@extends('layouts.admin')
@section('title', 'Postagem')
@section('content')

    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>teste<b style="text-transform: uppercase;"></b></small>
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Seja bem vindo(a)
                        {{-- {{auth()->user()->name }} --}}</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <img src="img/4.png" width="50">
                    {{--   @if (auth()->user()->super_usuario != null)
                       <butaton onclick="NovoUser()" type="button" class="btn text-light bg-dark ms-3"><i class="fa fa-user-circle-o" aria-hidden="true"></i><i class="fa fa-user-plus" aria-hidden="true"></i></butaton></a>
                    @endif --}}
                    &nbsp &nbsp &nbsp
                    <button onclick="sair()" class="btn btn-outline-light  bg-danger border-danger">Sair</button>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

        </nav>
    </div>

    <!-- Conteúdo central -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <br>
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Cadastrar oportunidade</h5>
        </div>
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <iframe class="position-relative rounded w-100 h-100" src="img/2.jpg" width="120" frameborder="0"
                            style="min-height: 30px; border:0;" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">

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
                                    <h3> *</h3>
                                    <input type="text" name='nome' placeholder="Nome da vaga"
                                        value="{{ old('nome') }}"><br>
                                    <h3> *</h3>
                                    <input type="text" name='descricao' placeholder="Descrição da vaga"
                                        value="{{ old('descricao') }}"><br>
                                    <h3> *</h3>
                                    <input type="text" name='salario' placeholder="salario"
                                        value="{{ old('salario') }}"><br>
                                    <h3> *</h3>
                                    {{--  <input type="text" name='contratante' placeholder="Contratante"><br> --}}
                                    <input type="text" name='tipo' placeholder="tipo"
                                        value="{{ old('tipo') }}"><br><br>
                                    <button class="btn btn-secondary w-100 py-3" type="submit"
                                        name="submit">Enviar</button>

                                    <a href="{{ route('vaga.ReturnLists') }}">
                                        <h4> Ver lista de oportunidades</h4>
                                    </a>
                                </div>
                            </div>
                        </form>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
