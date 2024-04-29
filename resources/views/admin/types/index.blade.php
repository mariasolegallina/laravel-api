@extends('layouts.app')

@section('content')
<section>
    <div class="container">
<div class="d-flex justify-content-between my-4">
    <h2 class="fs-4 text-secondary">Tipologie di progetti</h2>
    {{-- <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Aggiungi</a> --}}
</div>
    
    </div>
</section>

<section>
    <div class="container">

        <table class="table my-4">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
               @forelse ($types as $type)
                   <tr>
                    <th scope="row">{{$type->id}}</th>
                    <td>
                        <a href="{{route('admin.types.show', $type)}}">{{$type->name}}</a></td>
                    <td>
                        <a href="{{route('admin.types.edit', $type)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                   </tr>
               @empty
                   <tr>
                    <td>Nessun progetto</td>
                   </tr>
               @endforelse
            </tbody>
          </table>
    </div>
</section>
@endsection