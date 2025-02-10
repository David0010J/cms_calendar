$(document).ready(function () {
    // Listen for change event on the province select element
    $("#province_id").on("change", function () {
        var provinceID = $(this).val();
        // alert('Selected Province ID: ' + provinceID); // Alert the selected province ID
        $.ajax({
            url: "/get-districts/" + provinceID,
            type: "GET",
            success: function (response) {
                $("#district_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#district_id").append(
                        '<option value="' +
                            value.id +
                            '">' +
                            value.name_kh +
                            "</option>"
                    );
                });
                $("#communeID").empty().append("<option></option>");
                $("#villageID").empty().append("<option></option>");
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the district select element
    $("#district_id").on("change", function () {
        var districtID = $(this).val();
        $.ajax({
            url: "/get-communes/" + districtID,
            type: "GET",
            success: function (response) {
                $("#commune_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#commune_id").append(
                        '<option value="' +
                            value.id +
                            '">' +
                            value.name_kh +
                            "</option>"
                    );
                });
                $("#village_id").empty().append("<option></option>");
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the commune select element
    $("#commune_id").on("change", function () {
        var communeID = $(this).val();
        $.ajax({
            url: "/get-villages/" + communeID,
            type: "GET",
            success: function (response) {
                $("#village_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#village_id").append(
                        '<option value="' +
                            value.id +
                            '">' +
                            value.name_kh +
                            "</option>"
                    );
                });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the commune select element
    $("#village_id").on("change", function () {
        var villageID = $(this).val(); // This assumes that village_id is being selected
        console.log("Selected Village ID:", villageID); // Log the selected ID

        // If you need to fetch something based on the village ID, ensure the URL is correct.
        $.ajax({
            url: "/get-some-data/" + villageID, // Use a relevant endpoint
            type: "GET",
            success: function (response) {
                console.log("AJAX Response:", response); // Log the response
                // Process the response as needed
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });
});

// BTN SAVE NEXT CLOSE

// function validateForm(event) {
//     var form = document.getElementById("personal-info-form");
//     var requiredFields = form.querySelectorAll("[required]");
//     var allFilled = true;

//     requiredFields.forEach(function (field) {
//         if (!field.value.trim()) {
//             allFilled = false;
//         }
//     });

//     if (!allFilled) {
//         alert("Please complete all required fields.");
//         event.preventDefault(); // Prevent navigation
//         return false;
//     }
//     return true;
// }

// SELECT2 DROPDOWN WITH MINISTRY, GENERALDEPARTMENT, DEPARTMENT, OFFICES
$(document).ready(function () {
    function initializeSelect2(elementId, placeholder) {
        $("#" + elementId).select2({
            placeholder: placeholder,
            allowClear: true,
        });
    }
    // ALL DROPDOWM AND DYNAMIC DATA SELECT2
    $(document).ready(function () {
        // Initialize Select2 for each dropdown
        // Personal Information

        initializeSelect2("province_id", "");
        initializeSelect2("district_id", "");
        initializeSelect2("commune_id", "");
        initializeSelect2("village_id", "");

        // Situations
        initializeSelect2("ministry_id", "");
        initializeSelect2(
            "general_department_id",
            "{{ trans('officer.class_rank') }}"
        );
        initializeSelect2("department_id", "{{ trans('officer.class_rank') }}");
        initializeSelect2("office_id", "");
        initializeSelect2("position_id", "");
        initializeSelect2("current_position_id", "");
        initializeSelect2("position_equal_to", "");
        initializeSelect2("title_id", "");
        initializeSelect2("class_rank_id", "");
        initializeSelect2("current_class_rank_id", "");
        initializeSelect2("current_ministry_id", "");
        initializeSelect2(
            "current_general_department_id",
            "{{ trans('officer.class_rank') }}"
        );
        initializeSelect2(
            "current_department_id",
            "{{ trans('officer.class_rank') }}"
        );
        initializeSelect2("current_office_id", "");

        // ABILITIES FOREIGN LANGUAGES
        initializeSelect2("language_id", "");
    });

    // Listen for change event on the ministry select element
    $("#ministry_id").on("change", function () {
        var ministryID = $(this).val();
        // alert("Please select");
        $.ajax({
            url: "/get-general-departments/" + ministryID,
            type: "GET",
            success: function (response) {
                $("#general_department_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#general_department_id").append(
                        '<option value="' +
                            value.Id +
                            '">' +
                            value.Name +
                            "</option>"
                    );
                });
                // Clear dependent dropdowns
                $("#department_id")
                    .empty()
                    .append("<option></option>")
                    .select2({ placeholder: "Select Department" });
                $("#office_id")
                    .empty()
                    .append("<option></option>")
                    .select2({ placeholder: "Select Office" });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the general department select element
    $("#general_department_id").on("change", function () {
        var generalDepartmentID = $(this).val();
        $.ajax({
            url: "/get-departments/" + generalDepartmentID,
            type: "GET",
            success: function (response) {
                $("#department_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#department_id").append(
                        '<option value="' +
                            value.Id +
                            '">' +
                            value.Name +
                            "</option>"
                    );
                });
                // Clear dependent dropdown
                $("#office_id")
                    .empty()
                    .append("<option></option>")
                    .select2({ placeholder: "Select Office" });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the department select element
    $("#department_id").on("change", function () {
        var departmentID = $(this).val();
        $.ajax({
            url: "/get-offices/" + departmentID,
            type: "GET",
            success: function (response) {
                $("#office_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#office_id").append(
                        '<option value="' +
                            value.Id +
                            '">' +
                            value.Name +
                            "</option>"
                    );
                });
                // $("#office_id").select2({ placeholder: "Select Office" });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // CURRENTLY SITUATION
    $("#current_ministry_id").on("change", function () {
        var ministryID = $(this).val();
        // alert("Please select");
        $.ajax({
            url: "/get-general-departments/" + ministryID,
            type: "GET",
            success: function (response) {
                $("#current_general_department_id")
                    .empty()
                    .append("<option></option>");
                $.each(response, function (key, value) {
                    $("#current_general_department_id").append(
                        '<option value="' +
                            value.Id +
                            '">' +
                            value.Name +
                            "</option>"
                    );
                });
                // Clear dependent dropdowns
                $("#current_department_id")
                    .empty()
                    .append("<option></option>")
                    .select2({ placeholder: "Select Department" });
                $("#current_office_id")
                    .empty()
                    .append("<option></option>")
                    .select2({ placeholder: "Select Office" });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the general department select element
    $("#current_general_department_id").on("change", function () {
        var generalDepartmentID = $(this).val();
        $.ajax({
            url: "/get-departments/" + generalDepartmentID,
            type: "GET",
            success: function (response) {
                $("#current_department_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#current_department_id").append(
                        '<option value="' +
                            value.Id +
                            '">' +
                            value.Name +
                            "</option>"
                    );
                });
                // Clear dependent dropdown
                $("#current_office_id")
                    .empty()
                    .append("<option></option>")
                    .select2({ placeholder: "Select Office" });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });

    // Listen for change event on the department select element
    $("#current_department_id").on("change", function () {
        var departmentID = $(this).val();
        $.ajax({
            url: "/get-offices/" + departmentID,
            type: "GET",
            success: function (response) {
                $("#current_office_id").empty().append("<option></option>");
                $.each(response, function (key, value) {
                    $("#current_office_id").append(
                        '<option value="' +
                            value.Id +
                            '">' +
                            value.Name +
                            "</option>"
                    );
                });
                // $("#office_id").select2({ placeholder: "Select Office" });
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error);
            },
        });
    });
});
