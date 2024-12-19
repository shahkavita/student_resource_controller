@extends('layout.main')
@section('title')
    View User
@endsection
@section('main-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">View Student</h3>
                    <h3 class="mb-0">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            View Student 
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h3 class="card-title">View Student Details</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped table-light">
                                <tr>
                                    <td>Id</td>
                                    <td>{{$s1->id}}</td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <td>Name</td>
                                    <td>{{$s1->name}}</td>
                                  </td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td>{{$s1->email}}</td>
                                  </tr>
                                  <tr>
                                    <td>Gender</td>
                                    <td>{{$s1->gender}}</td>
                                  </tr>
                                  <tr>

                                    <td>Phone</td>
                                    <td>{{$s1->phone}}</td>
                                  </tr>
                                  <tr>
                                    <td>City</td>
                                    <td>{{$s1->city}}</td>
                                  </tr>
                                  <tr>
                                    <td>Course</td>
                                    <td>{{$s1->course}}</td>
                                  </tr>   
                                <tr>
                                    <td colspan="2" align="center"><a href="{{route('studentlist.index')}}" class="btn btn-dark"> Back </a></td>
                                </tr>                               
                                </tbody>
                              </table>

                    </div> <!-- /.card -->
                   
                </div> <!-- /.col -->
                <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection