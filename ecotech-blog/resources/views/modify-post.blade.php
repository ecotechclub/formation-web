@extends('layouts.layout')

@section('head')
    
@endsection

@section('body')
<section>
    <div class="container p-5">

        <center><h1>Modify Post</h1></center>

        <form action="/blog" id="post1" class="card text-center m-4">
            <div class="card-header">
                <div class="form-outline">
                    <input required type="text" id="form1" class="form-control" value="Diaeddin BOUIDAINE"/>
                    <label class="form-label" for="form1">Auteur</label>
                </div>
            </div>
            <div class="card-body">
              <div class="card-title">
                <div class="form-outline">
                    <input required type="text" id="form1" class="form-control" value="Formation web pour les membres du club ecotech"/>
                    <label class="form-label" for="form1">Titre</label>
                </div>
            </div>
            <div class="form-outline">
                <textarea class="form-control" id="textAreaExample" rows="5" required>
                    With supporting text below as a natural lead-in to additional content.
                    With supporting text below as a natural lead-in to additional content.
                    With supporting text below as a natural lead-in to additional content.
                    With supporting text below as a natural lead-in to additional content.
                    With supporting text below as a natural lead-in to additional content.
                </textarea>
                <label class="form-label" for="textAreaExample">Contenu</label>
            </div>
            <button type="submit" class="btn btn-success m-2">Sauvegarder</button>
            <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </form>
    </div>
</section>
    
@endsection
