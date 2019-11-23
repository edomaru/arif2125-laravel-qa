@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @foreach ($questions as $question)
                       <div class="media">
                         
                           <div class="d-flex flex-column counters">
                               <div class="vote">
                                <strong>{{$question->votes}}</strong>{{str_plural('vote',$question->votes)}}
                               </div>
                               <div class="status">
                                    <strong>{{$question->answers}}</strong>{{str_plural('answer',$question->answers)}}
                                </div>
                                <div class="view">
                                        <strong>{{$question->views}}</strong>{{str_plural('view',$question->views)}}
                                </div>
                           </div>
                           <div class="media-body">
                               <div class="mt-0">
                                    {{-- route('questions.show',$question->id --}}
                               <h3><a href="{{$question->url}}">{{$question->title}}</</a></h3>
                               <p class="lead">
                               Asked By <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                               <small class="text-muted">{{$question->created_date}}</small>
                               </p>
                                   {{str_limit($question->body,250)}}
                               </div>
                           </div>
                        </div>
                        <hr> 
                    @endforeach

                  {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
