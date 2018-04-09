@extends('layouts.admin')

@section('script')
<script src="{{asset('/js/content/admin_content.js')}}"></script>
@endsection

@section('content')

<h2>Добавление новой страницы</h2>



<div id='content' class='col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10'>


    {!!$form!!}

</div>
@endsection

