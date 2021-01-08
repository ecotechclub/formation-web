@extends('layouts.layout')


@section('head')
    
@endsection

@section('body')

<section>
    <div class="container p-5">

      <center><h1>EcoTech Blog</h1></center>
        <button type="button" class="btn btn-success m-4" data-mdb-toggle="modal" data-mdb-target="#exampleModal">New Post</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabe1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{route("blog.store")}}" id="post1" class="text-center m-4">
                @csrf
                <div class="form-outline m-4">
                  <input required type="text" id="form1" name="Auteur" class="form-control"/>
                  <label class="form-label" for="form1">Auteur</label>
                </div>
                <div class="form-outline m-4">
                  <input required type="text" id="form1" name="Titre" class="form-control"/>
                  <label class="form-label" for="form1">Titre</label>
                </div>

                <div class="form-outline m-4">
                    <textarea class="form-control" id="textAreaExample" name="Contenu" rows="5" required></textarea>
                    <label class="form-label" for="textAreaExample">Contenu</label>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                Discard
              </button>
              <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
          </form>
          </div>
        </div>
        </div>

        @foreach ($blogs as $blog)   
        <div id="{{$blog->id}}" class="card text-center m-4">
            <div class="card-header">{{$blog->Auteur}}</div>
            <div class="card-body">
              <h5 class="card-title">{{$blog->Titre}}</h5>
              <p class="card-text">
                {{$blog->Contenu}}
              </p>
              <a href="{{route("blog.edit", ['blog' => $blog])}}" class="btn btn-primary m-2">Modifier</a>
              <form method="POST" action="{{route("blog.destroy", ['blog' => $blog])}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger m-2">supprimer</button>
              </form>
            </div>
            <div class="card-footer text-muted">{{$blog->created_at}}</div>
        </div>
        @endforeach
    </div>
</section>
@endsection