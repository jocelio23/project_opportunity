
@extends('layouts.admin')
@section('title', 'Postagem')
@section('content')

    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>teste<b style="text-transform: uppercase;"></b></small>
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Seja bem vindo(a)
                       </small>
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
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link ">Painel</a>
                    <a href="{{route('vaga.createList')}}" class="nav-item nav-link ">Cadastrar vagas</a>
                   
                </div>
            </div>
            

        </nav>
      
    </div>

    <!-- Conteúdo central -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <br>
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Listagem de Vagas</h5>
        </div>
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                   
                    <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">

                        <table>
                            <thead>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Salário</th>
                                <th>Tipo</th>
                            </thead>
                            <tbody>
                                @foreach ($vagas as $vaga)
                                    <tr>
                                        <td>{{ $vaga->nome }}</td>
                                        <td>{{ $vaga->descricao }}</td>
                                        <td>{{ $vaga->salario }}</td>
                                        <td>{{ $vaga->tipo }}</td>
                                        <td>
                                            <a href="{{route('vaga.show', $vaga->id)}}"> Acompanhar vaga</a> &nbsp &nbsp &nbsp
                                            <a href="{{route('vaga.edit', $vaga->id)}}"> atualizar</a>&nbsp &nbsp &nbsp
                                            {{-- <a href="{{route('vaga.edit', $vaga->id)}}"> Pausar candidaturas</a>&nbsp &nbsp &nbsp --}}
                                            
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

