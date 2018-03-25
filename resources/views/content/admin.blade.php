@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="{{asset('/public/jqgrid/css/ui.jqgrid-bootstrap.css')}}" media="screen"/>
@endsection

@section('script')
<script src="{{ asset('/public/jqgrid/js/jquery.jqGrid.min.js') }}"></script>
<script src="{{ asset('/public/jqgrid/js/i18n/grid.locale-ru.js') }}"></script>
<script>
    var grid_url = '{{route("admin.content.list")}}';
</script>
<script src="{{asset('/js/content/admin_content.js')}}"></script>
@endsection

@section('content')

<h2>Администрирование категорий</h2>



<div id='categories' class='col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>

    <table id="jqGrid"></table>
    <div id="jqGridPager"></div>

    
    <div style="margin-bottom:10px"><button class="btn btn-primary" id="btnAddCategory">Добавить</button></div>
</div>
@endsection

