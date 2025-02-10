// form-validation.js

function validateForm(fields) {
    let isValid = true;

    // Clear previous errors
    $(".error").removeClass("error");
    $(".error-message").hide().text("");

    // Validate regular fields
    fields.requiredFields.forEach(function (field) {
        let $input = $(field.selector);
        if ($input.length && !$input.val()) {
            isValid = false;
         //   console.log(`Field ${field.selector} is invalid`); // Debugging
            $input.addClass("error");
            $input.next(".error-message").show().text(field.errorMessage);
        }
    });

    // Validate Select2 fields
    fields.select2Fields.forEach(function (field) {
        let $select = $(field.selector);
        if ($select.length) {
            // For Select2, the actual selected value is within the .select2-container
            if (!$select.val()) {
                isValid = false;
                console.log(`Select2 field ${field.selector} is invalid`); // Debugging
                $select.next(".select2-container").find(".select2-selection").addClass("error");
                $select.closest(".input-group").next(".error-message").show().text(field.errorMessage);
            } else {
                // Remove error class if valid
                $select.next(".select2-container").find(".select2-selection").removeClass("error");
                $select.closest(".input-group").next(".error-message").hide();
            }
        }
    });

    return isValid;
}

$(document).ready(function () {
    // Attach validation to submit button click
    $(situationInfoFormConfig.submitSelector).on("click", function (e) {
        if (!validateForm(situationInfoFormConfig.fields)) {
            e.preventDefault(); // Prevent navigation if form is not valid
        }
    });

    // Handle Select2 change event to remove error class on change
    $('select[data-control="select2"]').on("change", function () {
        if ($(this).val()) {
            $(this).next(".select2-container").find(".select2-selection").removeClass("error");
            $(this).closest(".input-group").next(".error-message").hide();
        }
    });

    // Handle input event to remove error class
    $('input').on("input", function () {
        $(this).removeClass("error");
        $(this).next(".error-message").hide();
    });
});


function setupFormValidation(formConfig) {
    // Attach the validation function to the form
    $(formConfig.submitSelector).on("click", function (e) {
        if (!validateForm(formConfig.fields)) {
            e.preventDefault(); // Prevent navigation if form is not valid
        }
    });

    // Handle Select2 change event to remove error class on change
    $('select[data-control="select2"]').on("change", function () {
        if ($(this).val()) {
            $(this).next(".select2-container").find(".select2-selection").removeClass("error");
            $(this).closest(".input-group").next(".error-message").hide();
        }
    });

    // Handle input event to remove error class
    $('input').on("input", function () {
        $(this).removeClass("error");
        $(this).next(".error-message").hide();
    });
}


// personal-info-form.js

const personalInfoFormConfig = {
    submitSelector: ".nav-link-pages",
    fields: {
        requiredFields: [
            { selector: "#FULL_NAME_KH", errorMessage: "* សូមបំពេញគោត្តនាម-នាម" },
            { selector: "#FULL_NAME_EN", errorMessage: "* សូមបំពេញគោត្តនាម-នាមជាអក្សរឡាតាំង" },
            { selector: "#DATEOFBIRTH", errorMessage: "* សូមជ្រើសរើសថ្ងៃខែឆ្នាំកំណើត" },
            { selector: "#NATIONALITY_1", errorMessage: "* សូមបំពេញសញ្ជាតិ" },
            { selector: "#NATIONALITY_2", errorMessage: "* សូមបំពេញជនជាតិ" },
            { selector: "#PLACE_OF_BIRTH", errorMessage: "* សូមបំពេញទិកន្លែងកំណើត" },
            { selector: "#EMAIL", errorMessage: "* សូមបំពេញអាសយដ្ឋានអេឡិចត្រូនិច" },
            { selector: "#NATION_ID", errorMessage: "* សូមបំពេញលេខអត្តសញ្ញាណប័ណ្ណ" }
        ],
        select2Fields: [
            { selector: "#title_id", errorMessage: "* សូមជ្រើសរើសងារ" },
            { selector: "#province_id", errorMessage: "* សូមជ្រើសរើសរាជធានី/ខេត្ត" },
            { selector: "#district_id", errorMessage: "* សូមជ្រើសរើសក្រុង/ស្រុក/ខណ្ឌ" },
            { selector: "#commune_id", errorMessage: "* សូមជ្រើសរើសឃុំ/សង្កាត់" }
        ]
    }
};

// situation-info-form.js

const situationInfoFormConfig = {
    submitSelector: ".nav-link-pages",
    fields: {
        requiredFields: [
            { selector: "#FIRST_START_WORKING_DATE_FOR_GOV_VALUE", errorMessage: "* សូមបំពេញថ្ងៃទីចាប់ផ្តើមការងារ" },
            { selector: ".class_rank_id", errorMessage: "* សូមជ្រើសរើសអត្តសញ្ញាណ" },

        ],
        select2Fields: [
            { selector: ".class_rank_id", errorMessage: "* សូមជ្រើសរើសអត្តសញ្ញាណ" },
            { selector: ".position_id", errorMessage: "* សូមជ្រើសរើសរាជធានី/ខេត្ត" },
            { selector: ".ministry_id", errorMessage: "* សូមជ្រើសរើសក្រុង/ស្រុក/ខណ្ឌ" },
            { selector: ".general_department_id", errorMessage: "* សូមជ្រើសរើសក្រុង/ស្រុក/ខណ្ឌ" },
            { selector: ".department_id", errorMessage: "* សូមជ្រើសរើសក្រុង/ស្រុក/ខណ្ឌ" },

            { selector: ".current_class_rank_id", errorMessage: "* សូមជ្រើសរើសអត្តសញ្ញាណ" },
            { selector: ".current_position_id", errorMessage: "* សូមជ្រើសរើសអត្តសញ្ញាណ" },
            { selector: ".current_ministry_id", errorMessage: "* សូមជ្រើសរើសអត្តសញ្ញាណ" },
        ]
    }
};

const workingHistoryFormConfig = {
    submitSelector: ".nav-link-pages",
    fields: {
        requiredFields: [
            { selector: ".STARTWORKPUBLIC", errorMessage: "* សូមបំពេញថ្ងៃទីចាប់ផ្តើមការងារ" },
            { selector: ".ENDWORKPUBLIC", errorMessage: "* សូមបំពេញថ្ងៃបញ្ចប់នៃការងារ" },
            { selector: ".GENERAL_DEPARTMENT_WORKING", errorMessage: "* សូមបំពេញអគ្គនាយកដ្ឋាន/អង្គភាព" },
            { selector: ".POSITION_WORKING", errorMessage: "* សូមបំពេញតួនាទី /មុខតំណែង" },
            { selector: ".MINISRYWORKING", errorMessage: "* សូមបំពេញក្រសួង/ស្ថាប័ន" },
        ],
        select2Fields: [
        ]
    }
};



// Initialize validation for Personal Info Form
$(document).ready(function () {
    setupFormValidation(personalInfoFormConfig);
    setupFormValidation(situationInfoFormConfig);
    setupFormValidation(workingHistoryFormConfig);
});
