@extends('layouts.layout')

@section('head')
    
@endsection

@section('body')
<section>
    <div class="container p-5">

        <center><h1>Modify Post</h1></center>

        <form method="POST" action="{{route('blog.update', ['blog' => $blog])}}" id="post1" class="card text-center m-4">
            @csrf
            @method('PUT')
            <div class="card-header">
                <div class="form-outline">
                    <input required type="text" id="form1" name="Auteur" class="form-control" value="{{$blog->Auteur}}"/>
                    <label class="form-label" for="form1">Auteur</label>
                </div>
            </div>
            <div class="card-body">
              <div class="card-title">
                <div class="form-outline">
                    <input required type="text" id="form1" name="Titre" class="form-control" value="{{$blog->Titre}}"/>
                    <label class="form-label" for="form1">Titre</label>
                </div>
            </div>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaExample" name="Contenu" rows="5" required>
                    {{$blog->Contenu}}
                </textarea>
                <label class="form-label" for="textAreaExample">Contenu</label>
            </div>
            <button type="submit" class="btn btn-success m-2">Sauvegarder</button>
            </div>
            <div class="card-footer text-muted">{{$blog->created_at}}</div>
        </form>
    </div>
</section>
    
@endsection
