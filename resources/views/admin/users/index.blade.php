@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Level</td>
                            </tr>
                           
                        </thead>
                        <tbody>
                        @foreach ($data as $each)
                        <tr>
                            <td> <a href="{{route("admin.$table.show", $each)}}">
                                
                                {{ $each->id}}
                                </a>
                            
                                </td>
                                <td>
                                    {{ $each->name}}
                                </td>
                                <td>
                                    <a href="mailto:{{$each->email}}">
                                        {{ $each->email}}
                                    </a>
                                   
                                </td>
                                <td>
                                    {{ $each->level}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>      
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection