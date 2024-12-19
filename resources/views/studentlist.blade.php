@extends('layout.main')
@section('title')
    Elqouent
@endsection
@section('main-content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Student List</h3>
                    <h3 class="mb-0"><a href="{{route('studentlist.create')}}" class="btn btn-warning"> <i class="bi bi-person-fill-add" style="font-size: 20px"></i> Add student</a></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Student List
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h3 class="card-title">Student List</h3>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>Course</th>
                                        <th align="center" style="width: 40px" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d=>$s1)
                                    <tr class="align-middle">
                                        <td>{{$s1->id}}</td>
                                        <td>{{$s1->name}}</td>
                                        <td>{{$s1->email}}</td>
                                      
                                        <td>{{$s1->gender}}</td>
                                        <td>{{$s1->phone}}</td>
                                        <td>{{$s1->city}}</td>
                                        <td>{{$s1->course}}</td>
                                       <td>
                                        <form action="{{route('studentlist.destroy',$s1->id)}}" method="POST">
                                
                                        <a href={{route('studentlist.show',$s1->id)}} class="btn btn-info btn-sm"><i class="fas fa-eye fa-xs"></i></a>
                                       <a href={{route('studentlist.edit',$s1->id)}} class="btn btn-primary btn-sm"><i class="fas fa-edit fa-xs"></i></a>
                                         @csrf
                                        @method('delete')
                                        <button type="submit"class="btn btn-danger btn-sm" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt fa-xs"></i></button>
                                    </form>
                                    </td>
                                    
                                    </tr>    
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                {{$data->links()}}
                            </ul>
                        </div>
                       
                    </div> <!-- /.card -->
                   
                </div> <!-- /.col -->
                <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection