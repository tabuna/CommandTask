@extends('layouts.accounts')

@section('accounts')


    <div class="wrapper-md">


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название организации</th>
                <th>Управление</th>
            </tr>
            </thead>
            <tbody>
            @foreach($organizations as $organization)
            <tr>
                <td>{{$organization->name}}</td>
                <td>
                    @if($organization->user_id == $user->id)

                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{route('organization.user.index',$organization->id)}}" class="btn btn-default"><i class="icon-people"></i></a>
                            <a href="{{route('organization.edit',$organization->id)}}" class="btn btn-default"><i class="icon-pencil"></i></a>
                            <a class="btn btn-default"><i class="icon-trash"></i></a>
                        </div>

                        @else
                        <label>Покинуть</label>
                    @endif
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>


    </div>








@endsection
