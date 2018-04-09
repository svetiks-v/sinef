@extends('layouts.admin')

@section('script')
<script src="{{asset('/js/content/admin_content.js')}}"></script>
@endsection

@section('content')

<h2>Администрирование контента</h2>



<div id='content' class='col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>

    <div style="margin-bottom:10px"><a href='{{route("admin.content.add")}}' class="btn btn-primary" id="btnAddContent">Добавить</a></div>
</div>
@endsection

