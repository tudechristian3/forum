@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Channel</div>

                <div class="card-body">
                    
                    <form action="{{  route('channels.update', ['channel' => $channel->id])  }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <input type="text" name="channel" class="form-control" value="{{$channel->title}}">
                        </div>
                        
                        <div class="form-group">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit">Save Channel</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
