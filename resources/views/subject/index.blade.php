@extends('layouts.app')


@section('content')

    <div class="container"> 
        <div class="row justify-content-center">
                    <div id="ModalLoginForm" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Subject Information</h1>
                                </div>
                                <div class="modal-body">
                                <form action="/subject" method="post">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="subject_name" class="col-md-4 col-form-label text-md-right">{{ __('Subject Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="subject_name" type="text" class="form-control @error('subject_name') is-invalid @enderror" name="subject_name" placeholder="Name" value="{{ old('subject_name') }}" autocomplete="subject_name" autofocus>
                
                                                @error('subject_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="room_capacity" class="col-md-4 col-form-label text-md-right">{{ __('Room Capacity') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="room_capacity" type="text" class="form-control @error('room_capacity') is-invalid @enderror" name="room_capacity" placeholder="Capacity" value="{{ old('room_capacity') }}"  autocomplete="room_capacity" autofocus>
                
                                                @error('room_capacity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="room_no" class="col-md-4 col-form-label text-md-right">{{ __('Room No') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="room_no" type="text" class="form-control @error('room_no') is-invalid @enderror" name="room_no" placeholder="Room No" value="{{ old('room_no') }}"  autocomplete="room_no" autofocus>
                
                                                @error('room_no')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="class_schedule" class="col-md-4 col-form-label text-md-right">{{ __('Schedule') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="class_schedule" type="text" class="form-control @error('class_schedule') is-invalid @enderror" name="class_schedule" placeholder="Schedule" value="{{ old('class_schedule') }}"  autocomplete="class_schedule" autofocus>
                
                                                @error('class_schedule')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Add Course') }}
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
            +Add Course Subject
        </button>
        <br><br>
        @if(count($subjects) > 0 )
        <table class="table table-hover"> 
            <tr>
                <thead class="thead-dark">
                <th>Subject Name</th>
                <th>Room Capacity</th>
                <th>Room #</th>
                <th>Course Schedule</th>
                <th>Action</th>
            </thead>
            </tr>
            @foreach ($subjects as $subject)
            <tr>
            <td>{{$subject->subject_name}}</td>
            <td>{{$subject->room_capacity}}</td>
            <td>{{$subject->room_no}}</td>
            <td>{{$subject->class_schedule}}</td>
            <td><a data-toggle="modal" data-target="#updateModal" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach
        </table>

        <div class="pagination justify-content-center">
            {{ $subjects->links()}}
            </div>

        @else
                <p>No Student Record</p>
            @endif

@endsection