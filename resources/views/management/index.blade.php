@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="ModalLoginForm" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Student Information</h1>
                                </div>
                                <div class="modal-body">
                                <form action="/management" method="post">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="id_no" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="id_no" type="text" class="form-control @error('id_no') is-invalid @enderror" name="id_no" placeholder="Enter todays' year" value="{{ old('id_no') }}" autocomplete="id_no" autofocus>
                
                                                @error('id_no')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus>
                
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>
                
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="MM/DD/YY" value="{{ old('dob') }}"  autocomplete="dob" autofocus>
                
                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" placeholder="Course" value="{{ old('course') }}"  autocomplete="course" autofocus>
                
                                                @error('course')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            
                                    
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div id="updateModal" class="modal fade">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title">Update Information</h1>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/management" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group row">
                                                <label for="id_no" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="id_no" type="text" class="form-control @error('id_no') is-invalid @enderror" name="id_no" placeholder="Enter todays' year" value="{{ old('id_no')}}" autocomplete="id_no" autofocus>
                    
                                                    @error('id_no')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus>
                    
                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>
                    
                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="MM/DD/YY" value="{{ old('dob') }}"  autocomplete="dob" autofocus>
                    
                                                    @error('dob')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" placeholder="Course" value="{{ old('course') }}"  autocomplete="course" autofocus>
                    
                                                    @error('course')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                
                                        
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                         
                        </div>
                    </div>
                </div>
            </div>
    

    



        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">
            +Add Student
        </button>
        <br><br>
        @if(count($managements) > 0 )
        <table class="table table-hover"> 
            <tr>
                <thead class="thead-dark">
                <th>ID#</th>
                <th>Student Name</th>
                <th>Date of Birth</th>
                <th>Course</th>
                <th>Action</th>
            </thead>
            </tr>
            @foreach ($managements as $management)
            <tr>
            <td>{{$management->id_no}}{{$management->id}}</td>
            <td>{{$management->first_name}}  {{$management->last_name}}</td>>
            <td>{{$management->dob}}</td>
            <td>{{$management->course}}</td>
            <td><a data-toggle="modal" data-target="#updateModal" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach
        </table>

        <div class="pagination justify-content-center">
            {!! $managements->render()!!}    
            </div>

        @else
                <p>No Student Record</p>
            @endif
@endsection