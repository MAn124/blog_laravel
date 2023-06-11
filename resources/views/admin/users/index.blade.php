@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <form  id="role-filter">
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control select-filter" name="role">
                            <option selected >All</option>
                            @foreach ($roles as $role => $value)                               
                                <option value="{{$value}}">{{$role}}</option>
                            @endforeach
                        </select>
                    </div>
                    </form>
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
                            <td> <a href="">                              
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
                                    {{ $each->level_name}}
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
@push('js')
   <script>
    $(document).ready(function(){
        $(".select-filter").change(function(){
            $("#role-filter").submit();
        });
    });
    </script> 
@endpush