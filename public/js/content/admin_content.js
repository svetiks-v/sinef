Content = function () {
    parent = '#content',
            self = this,
            categories = []
            ;

    this.init = function () {
        $('#formContent').delegate("#category_id", "change", function () {
            self.setUrlInHiddenField(this.value);
        });

        $('#formContent').delegate("#url-input", "change keyup", function () {
            self.setUrlInHiddenField();
        });
    },
    this.setUrlInHiddenField = function (category_id) {
        var category = category_id || $("#category_id").val();
        var value_input = $('#url-input', '#formContent' ).val();
        var url = '';
        if(value_input!==''){
            url = '\/' + value_input;
        }
        if (self.getCategories()[category] !== undefined){
            url = self.getCategories()[category]['url'] + url;
        }
        $('.full-url', '#formContent').val(url).text(url);
    },
    this.setCategories = function (categories_json) {
        categories = categories_json;
    },
    this.getCategories = function () {
        return categories;
    }

}

var contentClass = new Content();

$(function () {
    contentClass.init();


})