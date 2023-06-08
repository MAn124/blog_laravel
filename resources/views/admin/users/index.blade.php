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
                                <td>name</td>
                            </tr>
                           
                        </thead>
                        <tbody>
                        @foreach ($data as $each)
                            <tr>
                                <td>
                                    {{ $each->id}}
                                </td>
                                <td>
                                    {{ $each->name}}
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