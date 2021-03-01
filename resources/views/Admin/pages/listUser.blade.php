
@extends('layouts/adminMaster')
            <!-- Navigation -->
@section('titre','la liste des admin')
            
@section('main')
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title"> Users table</h1>
                @if(session('successupdate'))                
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @elseif(session('successdelete'))
                     <div class="alert alert-success" role="alert">
                        {{session('successdelete')}}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text--primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                             <th>User type</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $row): ?>
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->email}}</td>
                                    <?php if($row->usertype=='admin'){ ?>
                                            <td>{{$row->usertype}}</td>
                                    <?php }else{$usertype='user'; ?>
                                            <td>{{$usertype}}</td>
                                        <?php } ?>
                                    <td>
                                        <a href="/roleEdit/{{$row->id}}" class="  btn-floating btn-small waves-effect waves-light green" >
                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil">&#xf040</i>
                                    </td>
                                    <td>
                                        
                                         
                                        <button type="button" class="btn-floating btn-small waves-effect waves-light red" data-toggle="modal" data-target="#Modal{{$row->id }}">
                                            <i class="fa fa-fw" aria-hidden="true" title="supprimer">&#xf1f8</i></a>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal{{$row->id }}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$row->id }}Title" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title" id="Modal_{{$row->id }}Title" style="font-weight:bold;">{{$row->nom }}</h4>                                                        
                                                    </div>
                                                    <div class="modal-body" style=" font-size: 1.1rem; ">
                                                    <div class="center">
                                                        <h1 class="red-text">Attention !</h1>
                                                        <h3>Voulez vous réellement supprimer cet Utitlisateur ?</h3>
                                                      <form action="/roleDelete/{{$row->id}}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </div>
                                                    <div class="modal-footer">
                                                           <button type="submit" class="btn btn-danger">DELETE</button>
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                                                       </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>

                                </tr>
                            <?php endforeach ?>
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
