
@extends('layouts/adminMaster')
<!-- Navigation -->
@section('titre','Ajouter des utilisateurs')

@section('main')
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" align="center">Informations Personnelles </h3>
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/saveUser" method="POST">
                @csrf
                <div class="card-body">
                	<div class="form-group">
                    <label for="exampleInputName">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nom &emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    <input class="form-control form-control-sm" type="text" id="exampleInputName" placeholder="Enter Name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone">   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Phone &emsp; &emsp; &emsp; &emsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                    <input class="form-control bi bi-telephone-x-fill" type="tel" id="exampleInputPhone" placeholder="Enter Phone number" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Email  &emsp; &emsp; &emsp; &emsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="Password">   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;password   &emsp; &emsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    <input type="password" name="password" class="form-control" id="Password1" placeholder="Password" required>
                  </div>
                   <div class="form-group">
                    <label for="confirm">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Confirm password   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                    <input type="password" name="confirm" class="form-control" id="confirm" placeholder="confirm password" required>
                  </div>

                </div>
                <!-- /.card-body -->
               <button type="submit" name="submit" class="button">
                                      Ajouter
                      <i class="zmdi zmdi-arrow-right"></i>
                </button>
                      <br>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

