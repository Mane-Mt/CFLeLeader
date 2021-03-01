
@extends('layouts/adminMaster')
            <!-- Navigation -->
@section('titre','Editer les utilisateur')
            
@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-content">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('fail'))                
                    <div class="alert alert-danger" role="alert">
                        {{session('fail')}}
                    </div>
                @elseif(session('success'))
                     <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
           
                       
                        <form action="/roleUpdate/{{$users->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            
                            <div class="form-group"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nom &emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                <input class="form-control form-control-sm" type="text" id="exampleInputName" value="{{$users->name}}" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Phone &emsp; &emsp; &emsp; &emsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </label>
                                <input class="form-control bi bi-telephone-x-fill" type="tel" id="exampleInputPhone" value="{{$users->phone}}" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email  &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$users->email}}" required>
                            </div>
                            <div class="form-group">
                                <label for="Password"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;password   &emsp; &emsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                <input type="password" name="password" class="form-control" id="Password1" value="{{$users->password}}" required>
                            </div>
                               <div class="form-group">
                                <label for="confirm">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Confirm password   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                <input type="password" name="confirm" class="form-control" id="confirm" required>
                            </div>

                        </div>
                        <div class="text-right" style="margin-right:2%">
                            <a href="/admin/listUser" class="btn btn-warning">Annuler</a>
                            <button type="submit" class="btn btn-success mx-3">Modifier</button>
                        </div>
                        <br>
                    </form>
                   
            </div>

        </div>
    </div>
</div>

@endsection

