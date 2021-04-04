(function () {

    FTX.Drugs = {

        list: {
            selectors: {
                drugs_table: $('#drugs_table'),
            },
        
            init: function () {

                this.selectors.drugs_table.dataTable({
                    processing: false,
                    serverSide: true,
                    ajax: {
                        url: this.selectors.drugs_table.data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
                        { data: 'manufacture', name: 'manufacture' },
                        { data: 'amount', name: 'amount' },
                        { data: 'price', name: 'price' },
                        { data: 'created_by', name: 'created_by' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }

                    ],
                    order: [[0, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
            }
        },

        edit: {
            init: function (locale) {
                FTX.tinyMCE.init(locale);                
            }
        },
    }
})();