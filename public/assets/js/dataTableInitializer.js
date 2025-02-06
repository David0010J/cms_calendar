class DataTableInitializer {
    constructor(tableId, ajaxUrl, columns, columnDefs) {
        this.tableId = tableId;
        this.ajaxUrl = ajaxUrl;
        this.columns = columns;
        this.columnDefs = columnDefs;
    }
    init() {
        $(document).ready(() => {
            $(this.tableId).DataTable({
                processing: true,
                serverSide: true,
                // dom: 'Bfrtip', // Add this line
                // buttons: [
                //     'excel', 'print' // Add this line
                // ],
                ajax: this.ajaxUrl,
                columns: this.columns,
                columnDefs: this.columnDefs,
                autoWidth: false,
                language: {
                    "processing": "កំពុងដំណើរការ...",
                    "lengthMenu": "បង្ហាញ _MENU_ ទិន្នន័យ",
                    "zeroRecords": "គ្មានទិន្នន័យត្រូវបានស្វែងរក",
                    "info": "បង្ហាញ _START_ ទៅ _END_ នៃ _TOTAL_ ទិន្នន័យ",
                    "infoEmpty": "បង្ហាញ 0 ទៅ 0 នៃ 0 ទិន្នន័យ",
                    "infoFiltered": "(ស្វែងរកពី _MAX_ ទិន្នន័យសរុប)",
                    "search": "ស្វែងរក:",
                    "paginate": {
                        "first": "ដំបូង",
                        "last": "ចុងក្រោយ",
                        "next": "បន្ទាប់",
                        "previous": "មុន"
                    },
                    "aria": {
                        "sortAscending": ": សូមរៀបតាមលំដាប់កើន",
                        "sortDescending": ": សូមរៀបតាមលំដាប់បន្ថយ"
                    }
                }
            });
        });
    }
}
