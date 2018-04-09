@extends('layouts.content')

@section('script')

@endsection


@section('title')
{{$content['title']}}
@endsection


@section('content')

<div id='content' class='col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>


    {!!$content['body']!!}

</div>
@endsection

