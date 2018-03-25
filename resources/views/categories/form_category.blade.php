<? $_r = "<span class='require_span' title='Поле обязательно для заполнения'>*</span>";?>
<form action="" id="form_category" onsubmit="return false" style='width:600px'>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Наименование{!!$_r!!}</label>
        <div class="col-sm-8 control-input">
           <input type="text" name="name" class="form-control" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">URL{!!$_r!!}</label>
        <div class="col-sm-8 control-input">
           <input type="text" name="url" class="form-control" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Родительская категория</label>
        <div class="col-sm-8">
            <select name="category_id" class="form-control">
                <option value="">Не указана</option>
                @foreach($all as $category_id => $category_name)
                <option value="{{$category_id}}">{{$category_name}}</option>
                @endforeach;
            </select>
        </div>
    </div>
</form>