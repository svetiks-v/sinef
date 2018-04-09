
    <form action="{{route('admin.content.save-form')}}" id="formContent" class="form-horizontal" method="post">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="title_page" class="col-sm-2 control-label">Название</label>
        <div class="col-sm-10">
            <input name='title' class="form-control" type="text" placeholder="укажите название страницы" id="title-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="title_page" class="col-sm-2 control-label">Категория</label>
        <div class="col-sm-10">
            <select name="category_id" id="category_id" class="form-control">
                <option value="">Без категории</option>
                <?foreach($categories as $category_id => $category_data):?>
                <option value="{{$category_id}}">{{$category_data['name']}}</option>
                <? endforeach;?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="title_page" class="col-sm-2 control-label">URL</label>
        <div class="col-sm-10">
            /<input name='url' class="form-control" type="text" placeholder="укажите URL страницы" id="url-input" pattern="^[a-zA-Z0-9]+$">
        </div>
    </div>
    <div class="form-group row">
        <label for="title_page" class="col-sm-2 control-label">Полный URL к странице</label>
        <div class="col-sm-10">
            <span class="full-url"></span>
            <input type="hidden" class="full-url" name="full_url" />
        </div>
    </div>
    <div class="form-group row">
        <label for="title_page" class="col-sm-2 control-label">Текст статьи</label>
        <div class="col-sm-10">
            <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="укажите текст статьи"></textarea>
        </div>
    </div>

      <div class="form-group row">
        <label for="title_page" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="submit">
        </div>
    </div>
</form>

<script>
    contentClass.setCategories(<?=json_encode($categories)?>);
</script>
