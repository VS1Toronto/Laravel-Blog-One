@extends('master')
@section('title', 'Create Ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                <!-- If the validator in the Request Object fails, Laravel will store-->
                <!-- all errors in the Session and we can easily access the errors via-->
                <!-- the Session -->
                <!-- -->

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach


                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <!--  For security purposes Laravel requires a token to be sent when using the PostController -->
                <!--  method. If you don't send any token it will throw an error -->
                <!-- -->
                <!--  This line send the token -->
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <!-- -->
                <!-- -->
                <fieldset>
                    <legend>Create a message</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
