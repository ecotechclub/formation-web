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
              <form action="/blog" id="post1" class="text-center m-4">
                <div class="form-outline m-4">
                  <input required type="text" id="form1" class="form-control"/>
                  <label class="form-label" for="form1">Auteur</label>
                </div>
                <div class="form-outline m-4">
                  <input required type="text" id="form1" class="form-control"/>
                  <label class="form-label" for="form1">Titre</label>
                </div>

                <div class="form-outline m-4">
                    <textarea class="form-control" id="textAreaExample" rows="5" required></textarea>
                    <label class="form-label" for="textAreaExample">Contenu</label>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                Discard
              </button>
              <button type="button" class="btn btn-primary">Ajouter</button>
            </div>
          </div>
        </div>
        </div>


        <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <div id="post1" class="card text-center m-4">
          <div class="card-header">Diaeddin BOUIDAINE</div>
          <div class="card-body">
            <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional content.
              With supporting text below as a natural lead-in to additional content.
              With supporting text below as a natural lead-in to additional content.
              With supporting text below as a natural lead-in to additional content.
              With supporting text below as a natural lead-in to additional content.
            </p>
            <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
            <a href="#" class="btn btn-danger m-2">supprimer</a>
          </div>
          <div class="card-footer text-muted">2 days ago</div>
      </div>

      <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>

        <div id="post1" class="card text-center m-4">
            <div class="card-header">Diaeddin BOUIDAINE</div>
            <div class="card-body">
              <h5 class="card-title">Formation web pour les membres du club ecotech</h5>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
              </p>
              <a href="/modify-post" class="btn btn-primary m-2">Modifier</a>
              <a href="#" class="btn btn-danger m-2">supprimer</a>
            </div>
            <div class="card-footer text-muted">2 days ago</div>
        </div>
    </div>
</section>
@endsection