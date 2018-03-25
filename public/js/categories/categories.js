Categories = function () {
    parent = '#categories',
            form_category = '#form_category',
            self = this
            ;

    this.init = function () {
        self.loadTableContracts();
        $('#btnAddCategory').on("click", function () {
            self.getDialogForAddEditCategory();
        });
    },
            this.getDialogForAddEditCategory = function (category_id) {
                var id = category_id || "";
                $.ajax({
                    url: urls.get_form_category,
                    type: "POST",
                    data: ({id: id}),
                    success: function (answer_html) {
                        var save_button = {
                            text: "Сохранить",
                            click: function () {
                                self.saveCategory();
                            }
                        };
                        open_dialog('add_edit_category', answer_html, true, 'Управление категорией', save_button);
                    }
                });
            },
            this.saveCategory = function () {
                var valid = self.validFormCategory();
                if (valid) {

                    sendFormToServer(form_category, urls.save);

                }
            },
            clearError = function (form) {
                $('.control-input', form).removeClass('has-error');
            },
            reloadTable = function () {
                $("#jqGrid").trigger("reloadGrid");
            },
            sendFormToServer = function (form, url) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: $(form).serialize(),
                    success: function (answer_json) {
                        if (answer_json.status === 'ok') {
                            $('.add_edit_category').remove();
                            bsAlert.success("Данные успешно сохранены");
                            reloadTable();
                        } else {
                            bsAlert.error(answer_json.message);
                        }
                    }
                });
            },
                    
            /**
             * 
             * @returns {Boolean}
             */
            this.validFormCategory = function () {
                var validate = true;
                var empty = false;
                var require = {
                    'url': $('[name="url"]', form_category).val(),
                    'name': $('[name="name"]', form_category).val()
                };

                clearError(form_category);

                for (var key in require) {
                    var value = $.trim(require[key]);
                    if (value === '') {
                        $('[name="' + key + '"]', form_category).parent('.control-input').addClass('has-error');
                        empty = true;
                        validate = false;
                    }
                }

                if (empty) {
                    bsAlert.error("Заполните обязательные поля");
                }

                return validate;
            },
            this.loadTableContracts = function () {
                var table = $("#jqGrid");

                table.jqGrid({
                    url: urls.grid,
                    mtype: "POST",
                    styleUI: 'Bootstrap',
                    datatype: "json",
                    colModel: [
                        {label: 'id', name: 'id', width: 50, index: 'id', hidden: true, key: true},
                        {label: 'Наименование', name: 'name', width: 120, index: 'cat1.name'},
                        {label: 'РОдительская категория', name: 'parent_category', width: 120, index: 'cat2.name'},
                        {label: 'URL', name: 'url', width: 120, index: 'cat1.url', search: false},
                        {label: 'Действия', name: 'actions', width: 70, align: 'center', sortable: false, search: false, formatter: actionsFormatter}
                    ],

                    viewrecords: true,
                    height: 'auto',
                    width: 1200,
                    rowList: [25, 50, 100, 200],
                    rowNum: 50,
                    pager: "#jqGridPager",
                    rownumbers: true,
                    sortname: 'id',
                    toppager: true,
                    sortorder: 'ASC'
                }).jqGrid('navGrid', '#jqGridPager', {search: false, add: false, edit: false, del: false, refresh: true, cloneToTop: true}, {}, {}, {}, {});
                ;

// Подключаю панель фильтра
                table.jqGrid('filterToolbar', {stringResult: true, searchOnEnter: true});
                table.jqGrid("setLabel", "rn", "№<br>п/п");
            },
            actionsFormatter = function (offer_accepted_id, options) {
                return '';
            }


}

var categoriesClass = new Categories();

$(function () {
    categoriesClass.init();


})