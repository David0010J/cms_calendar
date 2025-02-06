var jqxTheme = 'bootstrap';
var rowsheight = 35;
var gridHeight = $(window).height() - 205;
var template = 'primary';
var basePath = document.getElementById('baseUrl').value;
var positionNotify = "top-right";
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var base_url = $('#js-var').attr('data-base-url');
var placeholder = $('#js-var').attr('data-dropdown-placeholder');
var filterPlaceholder = $('#js-var').attr('data-dropdown-filter-placeholder');

/* jqxLoader */
$('#jqxLoader').jqxLoader({ width: 130, height:90, isModal: false,text: 'Loading...'});

function initialButton(buttonArray,width,height){
    for(var j = 0; j < buttonArray.length;j++){
        $('#'+buttonArray[j]).jqxButton({ width: width,height: height,roundedCorners:'all',template:template});
    }
}

function createJqxWindowId(id){
    if($('#'+id).length>0){
        $('#'+id).jqxWindow('destroy');
    }
    $('body').append('<div id="'+id+'"><div><div style="top:50%;right:45%;position: absolute;"><img src="'+basePath+'jqwidgets/styles/images/loader-small.gif"></div></div></div>');
}

function closeJqxWindowId(id){
    if($('#'+id).length!=0){
        $('#'+id).jqxWindow('destroy');
    }
}
function newJqxItem(prefix, windowTitle,windowWidth, windowHeight, url, rowId) {
    var id = "jqxwindow"+prefix;
    createJqxWindowId(id);
    $('#'+id).jqxWindow({ theme: jqxTheme, width: windowWidth, height:windowHeight, resizable: true, isModal: true, modalOpacity: 0.7, animationType: 'slide',maxHeight:'800px',maxWidth:'1500px',
        initContent: function(){
            $('#'+id).jqxWindow('setTitle',windowTitle);

            var data = $.extend({
                            "_token":CSRF_TOKEN,
                            'ajaxRequestHtml':'true'
                        },{
                            "Id":( rowId ? rowId : '' )
                        }
                    );

            $.ajax({
                type: 'post',
                url: url,
                data: data,
                success: function (data) {
                    $('#'+id).jqxWindow('setContent',data);
                },
                error: function (request, status, error) {
                    checkSession();

                    if(request.status == 400)
                    {
                        notification($('#js-var').attr('data-sth-went-wrong'),'error');
                    }else
                    {
                        notification(request.responseText,'error');
                    }
                }
            });
            $('#'+id).on('close',function(){
                closeJqxWindowId(id);
            });
        }
    });
}

function newJqxAjax(prefix, windowTitle,windowWidth, windowHeight, url, param,callback) {
    var id = "jqxwindow"+prefix;
    createJqxWindowId(id);
    $('#'+id).jqxWindow({ theme: jqxTheme, width: windowWidth, height:windowHeight, resizable: true, isModal: true, modalOpacity: 0.7, animationType: 'slide',maxHeight:'800px',maxWidth:'1200px',
        initContent: function(){

            $('#'+id).jqxWindow('setTitle',windowTitle);
            $.ajax({
                type: 'post',
                url: url,
                data: param,
                success: function (data) {
                    $('#'+id).jqxWindow('setContent',data);
                    if(callback){
                        callback(data);
                    }
                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }
            });
            $('#'+id).on('close',function(){
                closeJqxWindowId(id);
            });
        }
    });
}

function saveJqxItem(prefix, saveUrl, token,msg=1,callback){

    var valid = $('#jqx-form'+prefix).jqxValidator('validate');
    if(valid || typeof(valid) === 'undefined'){
        var formData = new window.FormData($('#jqx-form'+prefix)[0]);
        $.ajax({
            type: "post",
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            dataType: "json",
            url: saveUrl,
            beforeSend: function( xhr ) {
				if($("#jqx-save"+prefix).length){
					$('#jqx-save'+prefix).jqxButton({ disabled: true });
				}
            },
            success: function (response) {
                // console.log(response);
                // return;
				if($("#jqx-grid"+prefix).length){
					$("#jqx-grid"+prefix).jqxTreeGrid('updateBoundData');
					$("#jqx-grid"+prefix).jqxGrid('updatebounddata');
					$("#jqx-grid"+prefix).jqxGrid('clearselection');
				}
                $("#jqx-notification").jqxNotification();
                $("#jqx-notification").jqxNotification({animationCloseDelay:1000,autoCloseDelay:6000,autoClose: true});
                if(response.code == 0){
                    $('#jqx-notification').jqxNotification({ position: positionNotify,template: "warning",autoCloseDelay:6000,autoClose: true }).html(response.message);
                    $("#jqx-notification").jqxNotification("open");
                }else{
					if(msg==1){
						$('#jqx-notification').jqxNotification({ position: positionNotify,template: "success"}).html(response.message);
						$("#jqx-notification").jqxNotification("open");
                    }

                    /* $('#jqx-notification').jqxNotification({ position: positionNotify,template: "warning",autoClose: false }).html(response.message);
					$("#jqx-notification").jqxNotification("open"); */

					if(callback){
						callback(response);
					}else{
						closeJqxWindowId('jqxwindow'+prefix);
					}

                }
            },
            complete: function(jqXHR, textStatus) {
                var responseText = JSON.parse(jqXHR.responseText);
                if(responseText.code == 1){
                    closeJqxWindowId("jqxwindow"+prefix);
                }else{
					if($("#jqx-save"+prefix).length){
						$('#jqx-save'+prefix).jqxButton({ disabled: false });
					}
                }
            },
            error: function (request, textStatus, errorThrown) {
                $("#jqx-notification").jqxNotification();
                $("#jqx-notification").jqxNotification({animationCloseDelay:1000,autoCloseDelay:6000,autoClose: true});

                if(request.status == 422)
                {
                    $('#jqx-notification').jqxNotification({ position: positionNotify,template: "warning",autoCloseDelay:6000,autoClose: true }).html('ព័ត៌មានមិនត្រឹមត្រូវ');
                    $("#jqx-notification").jqxNotification("open");

                    var errors = JSON.parse(request.responseText);

                    $.each($('input, select ,textarea', '#jqx-form'),function(k){

                        var element = $(this).attr('name');

                        if(errors[element])
                        {
                            if($(this).parents('div[class^="form-group"]').find('.help-block').length)
                            {
                                $(this).parents('div[class^="form-group"]').addClass('has-error').find('.help-block').html(errors[element]);
                            }else
                            {
                                var msg = '<span class="help-block">' + errors[element] +'</span>';
                                $(this).after(msg).parents('div[class^="form-group"]').addClass('has-error');
                            }
                        }else
                        {
                            if($(this).next('.help-block').length)
                            {
                                $(this).next('.help-block').remove();
                                $(this).parents('div[class^="form-group"]').removeClass('has-error');
                            }
                        }
                    });
                }
                else
                {
                    $('#jqx-notification').jqxNotification({ position: positionNotify,template: "error",autoCloseDelay:6000,autoClose: true }).html($('#js-var').attr('data-sth-went-wrong'));
                    $("#jqx-notification").jqxNotification("open");
                }

				if($("#jqx-save"+prefix).length){
					$('#jqx-save'+prefix).jqxButton({ disabled: false });
				}
            }
        });
    }
}

//Dropdown Tree Selection
function jqxTreeDropDownList(label,jqxTheme, width, height, jqxdropDownListId, jqxTreeId, jsonList, hiddenId, hasRoot, hasMainRoot, isSelectFirstItem){
    var dropDownList = jqxdropDownListId;
    if(jsonList==null || jsonList.length <= 0){
        $(dropDownList).jqxDropDownButton({ theme: jqxTheme, width: width, height: 25});
        return false;
    }

    var jqxTree = jqxTreeId;
    var defaultHiddenVal = (hiddenId != null && hiddenId!="" ? $(hiddenId).val() : '');
    $(dropDownList).jqxDropDownButton({ enableBrowserBoundsDetection:true,theme: jqxTheme, width: width, height: 32,animationType: 'fade'});

    $(jqxTree).bind('select', function (event) {
        var args = event.args;
        var item = $(jqxTree).jqxTree('getItem', args.element);
        (hiddenId!=null && hiddenId!=""?$(hiddenId).val(item.id):'');
        var dropDownContent = '<div style="position: relative;margin-top:8px;">'+item.label+'</div>';
        $(dropDownList).jqxDropDownButton('setContent', dropDownContent);
        $(dropDownList).jqxDropDownButton('close');
    });

    var source = jsonList;
    var dataAdapter = new $.jqx.dataAdapter(source);
    dataAdapter.dataBind();
    var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{ name: 'text', map: 'label'}]);
    if(hasRoot===true){
        if(hasMainRoot!=null || hasMainRoot===true){
            records = [{ label: label, id:0, parentid:0, icon: basePath+"icon/folder.png", expanded: true, items: records}];
        }else{
            records = [{ label: " ", id:0, parentid:0, icon: basePath+"icon/folder.png", expanded: true, items: records}];
        }
    }

    $(jqxTree).jqxTree({ theme: jqxTheme, source: records, width: width-2, height: height,allowDrag:false});
    //$(jqxTree).jqxTree().jqxTree('expandAll');
    if(isSelectFirstItem===true){
        $(jqxTree).jqxTree('selectItem', $(jqxTree).find('li:first')[0]);
    }
    if(defaultHiddenVal != "" && defaultHiddenVal != "0"){
        var element = $(jqxTree).find('#'+defaultHiddenVal)[0];
        $(jqxTree).jqxTree('selectItem', element);
    }
}

//Dropdown List
function initDropDownList(jqxTheme, width, height, jqxdropDownListId, source, displayField, valueField, hasDefaultItem, defaultItemText, defaultItemValue, hiddenFeildId,filterPlaceHolder,dropDownHeight,checkbox = false){

    if(source==null || source.length <= 0){
        $(jqxdropDownListId).jqxDropDownList({selectedIndex: 0, source:[], width: width,height:height, dropDownHeight: 1, theme: jqxTheme,placeHolder: ''});
        return false;
    }
    var dataAdapter = new $.jqx.dataAdapter(source,
        {
            beforeLoadComplete: function (records) {
                if(hasDefaultItem===true){
                    var defaultItem = '{"'+valueField+'":"'+defaultItemValue+'","'+displayField+'":"'+defaultItemText+'"}';
                    records.unshift(JSON.parse(defaultItem));
                }
                return records;
            }
        }
    );
    dataAdapter.dataBind();

    //initial dropdown property
    $(jqxdropDownListId).jqxDropDownList({
        selectedIndex:0,
        source: dataAdapter,
        displayMember: displayField,
        valueMember: valueField,
        width: width,
        height:height,
        itemHeight:30,
        filterHeight:35,
        dropDownHeight: dropDownHeight,
        theme: jqxTheme,
        filterable: true,
        checkboxes: checkbox,
        searchMode: 'contains',
        filterPlaceHolder: filterPlaceHolder,
        placeHolder: placeholder,
        enableBrowserBoundsDetection: true,
        animationType: 'fade'
    });

    //On dropdown select event
    $(jqxdropDownListId).bind('select', function (event) {
        var args = event.args;
        var item = $(jqxdropDownListId).jqxDropDownList('getItem', args.item);
        if(item == undefined){
            $(hiddenFeildId).val('');
        }else{
            ((hiddenFeildId!="" && item != null) ? $(hiddenFeildId).val(item.value) : '');
        }
    });
    if(hiddenFeildId!="" && $(hiddenFeildId).val()!= ""){
        $(jqxdropDownListId).jqxDropDownList('selectItem', $(hiddenFeildId).val());
    }

}

//Dropdown Tree Checkbox
function initJqxTreeCheckbox(localData,treeCheckBoxDiv,hiddenFields,width,height){
    var source = {
        type: "post",
        datatype: "json",
        datafields: [
            { name: 'id' },
            { name: 'parentid' },
            { name: 'text' },
            { name: 'value' }
        ],
        id: 'id',
        localdata: localData
    };
    var dataAdapter = new $.jqx.dataAdapter(source);
    dataAdapter.dataBind();
    var records = dataAdapter.getRecordsHierarchy('id', 'parentid', 'items', [{ name: 'text', map: 'label'}]);
    $('#'+treeCheckBoxDiv).jqxTree({ source: records, width: width, height:height,hasThreeStates: false ,checkboxes: true, theme: jqxTheme});
    $('#'+treeCheckBoxDiv).on('change', function (event) {
       getCheckedItems('#'+hiddenFields, 'getCheckedItems',treeCheckBoxDiv);
    });
}

function getCheckedItems(txtId, checkStatus,treeCheckBoxDiv){
    var arrId = [];
    var items = $('#'+treeCheckBoxDiv).jqxTree(checkStatus);
    if(items.length > 0){
        $.each(items, function (index,value) {
            if(value != ""){
                arrId.push(value.id);
                $('#'+treeCheckBoxDiv).jqxTree('checkItem', value.id, true);
            }
        });
        $(txtId).val(arrId.join(','));
    }else{
        $(txtId).val('0');
    }
}

function initDropDownMulti(dropdown,source,defaultValue = {}){
    var placeholder = $('#js-var').attr('data-dropdown-placeholder');
    var filterPlaceholder = $('#js-var').attr('data-dropdown-filter-placeholder');

    //initial dropdown property
    $("#"+dropdown).jqxDropDownList({
        source: source,
        placeHolder: "Select Item",
        width: 250,
        height: 30,
        displayMember: 'name',
        valueMember: 'id',
        checkboxes:true,
        theme: jqxTheme,
        placeHolder: placeholder,
    });

    if(defaultValue.length)
    {
        for(var i = 0; i < defaultValue.length; i++)
        {
            var element = '<input type="hidden" name="'+dropdown+'[]" value="'+defaultValue[i]+'">';
            if($('input[name="'+dropdown+'[]"][type="hidden"][value="'+defaultValue[i]+'"]').length){
                $('input[name="'+dropdown+'[]"][type="hidden"][value="'+defaultValue[i]+'"]').remove();
            }else
            {
                $('#'+dropdown).before(element);
            }
            $("#"+dropdown).jqxDropDownList('checkItem', defaultValue[i] );
        }
    }

    $("#"+dropdown).on('select', function (event) {
        if (event.args) {
            var item = event.args.item;
            if (item) {
                var element = '<input type="hidden" name="'+dropdown+'[]" value="'+item.value+'">';
                if($('input[name="'+dropdown+'[]"][type="hidden"][value="'+item.value+'"]').length){
                    $('input[name="'+dropdown+'[]"][type="hidden"][value="'+item.value+'"]').remove();
                }else
                {
                    $('#'+dropdown).before(element);
                }
            }
        }
    });
}

/*
 * Validate File Upload by Exetensions
 * allowFiles = ['.jpg','.png','.gif']
 * Usage:
 * isValidFileUpload(allowFiles)
 * */
function isValidFileUpload(allowFiles){
    var inputMethod = document.getElementsByTagName('input');
    $("#jqx-notification").jqxNotification();
    for(var i = 0; i < inputMethod.length; i++){
        var oInput = inputMethod[i];
        var isValid = false;
        if(oInput.type == 'file'){
            var fileName = oInput.value;
            if(fileName.length > 0){
                for(var j = 0; j < allowFiles.length; j++){
                    var curExt = allowFiles[j];
                    if(fileName.substr(fileName.length - curExt.length,curExt.length).toLowerCase() == curExt.toLowerCase()){
                        isValid = true;
                        break;
                    }
                }
                if(!isValid){
                    var message = "Sorry, " + fileName + " is invalid, allow files: " + allowFiles.join(", ");
                    $('#jqx-notification').jqxNotification({ position: positionNotify,template: "warning",autoClose: false }).html(message);
                    $("#jqx-notification").jqxNotification("open");
                    return false;
                }
            }
        }
    }
    return true;
}

function isNumeric(input){
    var value = isNaN($("#"+input).val());
    if(value){
        $("#"+input).val('');
    }
}
function getJqxCalendar(divJqxCalendar,divHiddenValue,width,height,placeHolder,value){
    if(value == null || value == ''){
        $('#'+divJqxCalendar).jqxDateTimeInput({
            enableBrowserBoundsDetection:true,
            width: width,
            height: height,
            formatString: 'dd/MM/yyyy',
            readonly: false,
            showFooter: true,
            placeHolder: placeHolder,
            todayString:'Today'
        });
    }else{
        $('#'+divJqxCalendar).jqxDateTimeInput({
            enableBrowserBoundsDetection:true,
            width: width,
            height: height,
            formatString: 'dd/MM/yyyy',
            showFooter: true,
            placeHolder: placeHolder,
            readonly: false,
            value:value
        });
    }
    $('#'+divHiddenValue).val($('#'+divJqxCalendar).val());
    $('#'+divJqxCalendar).on('change', function () {
        $('#'+divHiddenValue).val($(this).val());
    });
}
function getJqxDatePicker(attribute,responseFormat,hiddenInput,defaultValue = null)
{
    $('#'+attribute).jqxDateTimeInput({
        value:defaultValue,
        enableBrowserBoundsDetection:true,
        width: 194,
        height: 34,
        formatString: 'dd/MM/yyyy',
        readonly: false,
        showFooter: true,
        todayString:'Today'
    });

    $('#'+attribute).on('valueChanged', function (event) {
        var date = moment(event.args.date);

        if(!responseFormat)
        {
            return $('#'+hiddenInput).val(date.format('DD/MM/YYYY'));
        }

        $('#'+hiddenInput).val(date.format(responseFormat));
    });

}
function getJqxTime(divTime,timeHidden){
    $('#'+divTime).jqxDateTimeInput({
        width: 86,
        height: 30,
        formatString: 't',
        animationType:'fade',
        showTimeButton: true,
        showCalendarButton: false
    });
    $('#'+timeHidden).val($("#"+divTime).val());
    $('#'+divTime).on('change',function(){
        $('#'+timeHidden).val($("#"+divTime).val());
    });
}
function confirmDelete(title,content,callback) {
    $.confirm({
        icon: 'glyphicon glyphicon-trash',
        title: title,
        content: content,
        draggable: true,
        buttons: {
            danger: {
                text: 'លុប',
                btnClass: 'btn-blue',
                action: function(){
                    callback();
                }
            },
            warning: {
                text: 'បោះបង់',
                btnClass: 'btn-red any-other-class'
            }
        }
    });
}
function confirmMessage(title='បញ្ជាក់',content,callback,callbackCancel,btn1='យល់ព្រម',ntn2='បោះបង់') {
    $.confirm({
        icon: 'fa fa-question-circle',
        title: title,
        content: content,
        draggable: true,
        buttons: {
            danger: {
                text: btn1,
                btnClass: 'btn-blue',
                action: function(){
                    callback();
                }
            },
            warning: {
                text: ntn2,
                btnClass: 'btn-red any-other-class',
				action: function(){
					if(callbackCancel){
						callbackCancel();
					}

                }
            }
        }
    });
}
function alertMessage(title='បញ្ជាក់',content) {
    $.alert({
        title: title,
        content: content,
        type: 'red',
        typeAnimated: true,
    });
    return false;
}
function checkSession(){
    var url = basePath + 'life-time';
    $.ajax({
        type: "GET",
        url: url,
        success : function(response) {
            if (response == 'false'){
                $.alert({
                    title: 'Your connection has expired',
                    content: 'For increase security on this site, connections are expired after 120 minutes of inactivity.',
                    buttons: {
                        danger: {
                            text: 'យល់ព្រម',
                            btnClass: 'btn-blue',
                            action: function(){
                                window.location = basePath + 'auth';
                            }
                        }
                    }
                });
            }
        }
    });
}
function ajaxRequest(data,url,type)
{
    var data = $.extend({"_token":CSRF_TOKEN},data);

    $("#jqx-notification").jqxNotification();
    $("#jqx-notification").jqxNotification({animationCloseDelay:1000,autoCloseDelay:8000});

    $.ajax({
        type: (type ? type : 'POST') ,
        dataType: "json",
        url: base_url + url,
        cache: false,
        data: data,
        success: function (response, status, xhr) {
            $("#jqx-grid").jqxGrid('updatebounddata');
            $("#jqx-grid").jqxGrid('clearselection');

            $('#jqx-notification').jqxNotification({ position: positionNotify, template: "success" }).html(response.message);
            $("#jqx-notification").jqxNotification("open");
        },
        error: function (request, textStatus, errorThrown) {
            var errors = JSON.parse(request.responseText);

            $('#jqx-notification').jqxNotification({position: positionNotify, template: "error" }).html(errors.message);
            $("#jqx-notification").jqxNotification("open");

        }
    });
}

function notification(message,type)
{
    $("#jqx-notification").jqxNotification();
    $("#jqx-notification").jqxNotification({animationCloseDelay:1000,autoCloseDelay:8000});
    $('#jqx-notification').jqxNotification({ position: positionNotify,template: type }).html(message);
    $("#jqx-notification").jqxNotification("open");

    return type == 'success'

}

function deleteJqxGrid(method,prefix='')
{
    var row = $("#jqx-grid"+prefix).jqxGrid('getselectedrowindexes');

    if(!row.length){
        return notification($('#js-var').attr('data-please-select-row'),'warning');
    }

    var listId = [];
    var title = $('#js-var').attr('data-confirm-delete-title');
    var content = $('#js-var').attr('data-confirm-delete-content');

    confirmDelete(title,content,function () {
        for(var index in row){
            var jqxdatarow = $("#jqx-grid"+prefix).jqxGrid('getrowdata', row[index]);
            listId.push(jqxdatarow.id);
        }
        $('#jqx-grid'+prefix).jqxGrid(method, listId);
    });
}
