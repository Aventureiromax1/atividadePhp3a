@extends('layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Cadastrar Usuário</h2>
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input name="phone" class="form-control" value="{{ old('phone') }}" required>
                </div>
                <button class="btn btn-primary">Salvar</button>
            </form>
            @if($errors->any())
                <div class="mt-2 alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        @forelse($users as $user)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->phone }}</p>
                        <small class="text-muted">Criado em {{ $user->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>Nenhum usuário cadastrado.</p>
            </div>
        @endforelse
    </div>
@endsection
