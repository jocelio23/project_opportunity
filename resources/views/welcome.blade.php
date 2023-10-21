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
            <h5 class="fw-bold text-primary text-uppercase">Painel de navegação</h5>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="p-4">
                    <a class="text-width-g " href="" id="passar_mouse">
                        <div id="passar_mouse"><a href="{{route('vaga.ReturnLists')}}">Vagas</a>
                            <div id="mostrar"></div>
                        </div>
                        <i class="bi bi-hand-index"></i>
                    </a>
                </div>

                <div class="p-4">
                    <a class="text-width-g " href="" id="passar_mouse">
                        <div id="passar_mouse"><a href="{{route('candidato.ReturnLists')}}">Candidatos</a>
                            <div id="mostrar"></div>
                        </div>
                        <i class="bi bi-hand-index"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
