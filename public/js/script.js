function createJqxWindowId(id){
    if($('#'+id).length>0){
        $('#'+id).jqxWindow('destroy');
    }
    $('body').append('<div id="'+id+'"><div><div style="top:50%;right:45%;position: absolute;"><img src="'+baseUrl+'jqwidgets/styles/images/loader-small.gif"></div></div></div>');
}

function closeJqxWindowId(id){
    if($('#'+id).length!=0){
        $('#'+id).jqxWindow('destroy');
    }
}
function newJqxItem(windowTitle,windowWidth, windowHeight, url, params) {
    var id = "jqx_window";
    createJqxWindowId(id);
    $('#'+id).jqxWindow({ theme: jqxTheme, width: windowWidth, height:windowHeight, resizable: true, isModal: true, modalOpacity: 0.7, animationType: 'slide',maxHeight:windowHeight,maxWidth:windowWidth,
        initContent: function(){
            $('#'+id).jqxWindow('setTitle',windowTitle);
            $.ajax({
                type: 'post',
                url: url,
                data:params,
                success: function (data) {
                    $('#'+id).jqxWindow('setContent',data);
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
function getJqxCalendar(divJqxCalendar,divHiddenValue,width,height,placeHolder,value){
	if(value == null || value == ''){
		$('#'+divJqxCalendar).jqxDateTimeInput({
			enableBrowserBoundsDetection:true,
			width: width,
			height: height,
			formatString: 'dd-MM-yyyy',
			showFooter: true,
			placeHolder: placeHolder,
			readonly: false,
			value:null
		});
	} else {
		$('#'+divJqxCalendar).jqxDateTimeInput({
			enableBrowserBoundsDetection:true,
			width: width,
			height: height,
			formatString: 'dd-MM-yyyy',
			showFooter: true,
			placeHolder: placeHolder,
			readonly: false,
			value:value
		});
	}
	$('#'+divJqxCalendar).on('change', function () {
		var dateVal = $(this).val().split('-');
		if (dateVal.length == 1){
            $('#'+divHiddenValue).val('');
		}
		else{
			$('#'+divHiddenValue).val(dateVal[2]+'-'+dateVal[1]+'-'+dateVal[0]);
		}
	});
}
function initialButton(buttonArray,width,height){
    for(var j = 0; j < buttonArray.length;j++){
        $('#'+buttonArray[j]).jqxButton({ theme: 'bootstrap',width: width,height: height,roundedCorners:'all'});
    }
}
//Dropdown List
function initDropDownList(jqxTheme, width, height, jqxdropDownListId, source, displayField, valueField, hasDefaultItem, defaultItemText, defaultItemValue, hiddenFeildId,filterPlaceHolder,dropDownHeight,dataValueSelected){

    if(source==null || source.length <= 0){
        $(jqxdropDownListId).jqxDropDownList({selectedIndex: 0, source:[], width: width,height:height, dropDownHeight: 1, theme: jqxTheme});
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
        filterHeight:40,
        dropDownHeight: dropDownHeight,
        theme: jqxTheme,
        filterable: true,
		searchMode: 'contains',
        filterPlaceHolder: filterPlaceHolder,
        enableBrowserBoundsDetection: true,
        animationType: 'fade'
    });

    //On dropdown select event
    $(jqxdropDownListId).bind('select', function (event) {
        var args = event.args;
        var item = $(jqxdropDownListId).jqxDropDownList('getItem', args.item);
        if(item == undefined){
            $(hiddenFeildId).val('').trigger('change');
        }else{
            ((hiddenFeildId!="" && item != null) ? $(hiddenFeildId).val(item.value).trigger('change') : '');
        }
    });

    if(hiddenFeildId!="" && $(hiddenFeildId).val()!= ""){
        $(jqxdropDownListId).jqxDropDownList('selectItem', $(hiddenFeildId).val());
    }
	if (typeof dataValueSelected  !== "undefined"){
		$(jqxdropDownListId).jqxDropDownList('selectItem', dataValueSelected);
	}
}
$(document).ready(function() {
	var baseUrl = $("#baseUrl").val();
	var _content = $("#token").val();
   /* jqxLoader */
	// $('#jqx-loader').jqxLoader({ width: 130, height:90, isModal: true,text: 'សូមរង់ចាំ...'});

	$(window).scroll(function () {
		/*var s = $(this).scrollTop();
		if ( s >  180){
			$("aside").css("position","fixed");
			$("aside").css("top","0");
		}else{
			$("aside").css("position","relative");
		}*/

	});

	var sectionList = [".block-1",".block-21",".block-22",".block-23",".block-24",".block-25",".block-31",".block-32",".block-4",".block-5",".block-6",".block-71",".block-72",".block-73",".block-74",".block-8"];
	var menuList = [".menu-1","menu-2",".menu-21",".menu-22",".menu-23",".menu-24",".menu-25","menu-3",".menu-31",".menu-32",".menu-4",".menu-5",".menu-6",".menu-7",".menu-71",".menu-72",".menu-73",".menu-74",".menu-8"];

	var currentBlock;

	//Initialize
	hideBlockExcept([sectionList[0]]);
	currentBlock = [".menu-1"]


	$(".item-click").click(function(){

	});

	$(".btnSave").click(function(){
		setMenuStatus(["success"],[],currentBlock);
	});

	$(".btn").click(function(){
		var id = $(this).attr("data-id");
		openBlock(id);
	});


	function openBlock(id){
		// console.log(id);
		//Remove current active
		setMenuStatus([],["active"],currentBlock);

		switch(id){
			case "74":
				hideBlockExcept([".block-74"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-7",".menu-74"]);
				//Store current block
				currentBlock = [".menu-7",".menu-74"];
				break;
			case "72":
				hideBlockExcept([".block-72",".block-73"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-7",".menu-72",".menu-73"]);
				//Store current block
				currentBlock = [".menu-7",".menu-72",".menu-73"];
				break;
			case "71":
				hideBlockExcept([".block-71"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-7",".menu-71"]);
				//Store current block
				currentBlock = [".menu-7",".menu-71"];
				break;
			case "31":
				hideBlockExcept([".block-31",".block-32"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-3",".menu-31",".menu-32"]);
				//Store current block
				currentBlock = [".menu-3",".menu-31",".menu-32"];
				break;
			case "24":
				hideBlockExcept([".block-24",".block-25"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-2",".menu-24",".menu-25"]);
				//Store current block
				currentBlock = [".menu-2",".menu-24",".menu-25"];
				break;
			case "21":
				hideBlockExcept([".block-21",".block-22",".block-23"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-2",".menu-21",".menu-22",".menu-23"]);
				//Store current block
				currentBlock = [".menu-2",".menu-21",".menu-22",".menu-23"];
				break;
			case "8":
				hideBlockExcept([".block-8"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-8"]);
				//Store current block
				currentBlock = [".menu-8"];
				break;
			case "6":
				hideBlockExcept([".block-6"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-6"]);
				//Store current block
				currentBlock = [".menu-6"];
				break;
			case "5":
				hideBlockExcept([".block-5"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-5"]);
				//Store current block
				currentBlock = [".menu-5"];
				break;
			case "4":
				hideBlockExcept([".block-4"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-4"]);
				//Store current block
				currentBlock = [".menu-4"];
				break;
			case "1":
				hideBlockExcept([".block-1"]);
				//Set active
				setMenuStatus(["active"],[],[".menu-1"]);
				//Store current block
				currentBlock = [".menu-1"];
				break;
		}
	}

	function setMenuStatus(addClassName,removeClassName,classList){
		/*for(var i=0;i<menuList.length;i++){
			if($(menuList[i]).hasClass("success")){
				$(menuList[i]).removeClass("active");
			}else{
				$(menuList[i]).removeClass("active");
				$(menuList[i]).removeClass("success");
			}
		}*/

			for(var i=0;i<classList.length;i++){
				if(addClassName.length > 0){
					for(var k=0;k<addClassName.length;k++){
						$(classList[i]).addClass(addClassName[k]);
					}
				}
				if(removeClassName.length > 0){
					for(var j=0;j<removeClassName.length;j++){
						$(classList[i]).removeClass(removeClassName[j]);
					}
				}
			}
		//},0)

	}

	function hideBlockExcept(classList){
		for(var i=0;i<sectionList.length;i++){
			var isFound = false;
			for(var j=0;j<classList.length;j++){
				if(sectionList[i] === classList[j]){
					isFound = true;
					break;
				}
			}
			if(isFound){
				$(sectionList[i]).show();
				continue;
			}else{
				$(sectionList[i]).hide();
			}
		}
	}


});

