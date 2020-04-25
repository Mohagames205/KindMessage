@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST">
                        @csrf

                        <label> Titel<br>
                            <input type="text" name="name" required>
                        </label><br>
                        @if($errors->has("name"))
                        <p> {{ $errors->first("name") }}</p>
                        @endif
                        <label> Inhoud<br>
                            <textarea type="text" name="message" required></textarea>
                        </label><br>
                        @if($errors->has("message"))
                            <p> {{ $errors->first("message") }}</p>
                        @endif
                        <label> Slug<br>
                            <input type="text" name="slug" required>
                        </label><br>
                        @if($errors->has("slug"))
                            <p> {{ $errors->first("slug") }}</p>
                        @endif
                        <button type="submit">Indienen</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Delete posts</div>
                <div class="card-body">
                        <table id="deletelist">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td> {{$message->id}} </td>
                                <td> {{ $message->name }} </td>
                                <td> {{ $message->slug }} </td>
                                <td>
                                    <form method="POST" action="{{ url('messages/'.$message->id.'/delete') }}">
                                        @csrf
                                        @method("DELETE")
                                        <button style="padding: 5px;" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
