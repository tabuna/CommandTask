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
                    <label>Управление</label>
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
