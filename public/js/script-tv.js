var ddd;
var lrec = 0;
	
$(document).ready(function() {	
	eventsCal();
	//loaddata();
});

function loaddata(){
	$.ajax({
		cache: false,
		url:"json/par.json",
		dataType: "json",
		success:function(result){
			
			ddd = $('.cbody').easyTicker({
				direction: 'up',
//				easing: 'easeInOutBack',
				speed: 'fast',
				interval: 6000,
				height: 'auto',
				visible: result[0].record,
				mousePause: 0
			}).data('easyTicker');
			ddd.stop();
			$('#ct').empty();	
			eventsList(result[0].duration, result[0].record,result[0].old_record,result[0].delay);		
			setTimeout(function() {loaddata();}, 60000);
		}
	});	
}

function eventsCal(){
	var monthNames = [ "មករា", "កុម្ភៈ", "មីនា", "មេសា", "ឧសភា", "មិថុនា", "កក្កដា", "សីហា", "កញ្ញា", "តុលា", "វិច្ឋិកា", "ធ្នូ" ]; 
	var dayNames= ["អាទិត្យ","ច័ន្ទ","អង្គារ","ពុធ","ព្រហស្បតិ័","សុក្រ","សៅរ៍"]
	
	var newDate = new Date();
	newDate.setDate(newDate.getDate());
	$('#Date').html("ថ្ងៃ " +dayNames[newDate.getDay()] + " ទី " + newDate.getDate() + ' ខែ ' + monthNames[newDate.getMonth()] + ' ឆ្នាំ ' + newDate.getFullYear());
	
	setInterval( function() {
		var seconds = new Date().getSeconds();
		$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
		},1000);
		
	setInterval( function() {
		var minutes = new Date().getMinutes();
		$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
		},1000);
		
	setInterval( function() {
		var hours = new Date().getHours();
		$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
		}, 1000);			
}

function eventsList(DAlert,NRecord,ORecord,DDelay){	
	$.ajax({
    	cache: false,
    	url: "json/data.json",
    	dataType: "text",
    	success: function(data1) {	
            data1 = data1.replace(/(\r\n|\n|\r)/gm,"");
            var data = $.parseJSON(data1);

			var cevent = false;
			var ccount = 0;
			var drec = 0;
			var anews = "";
			var tloop;			
			var rrec=[];
			
			for (var i = 0; i < data.length; i++) {
				dd = new Date(data[i].date +" "+ data[i].time);			
				dless = dd.getTime()-$.now();
				if(dless > (-1*ORecord)){					
					rrec[drec] = data[i];
					drec++;
				}
			}
			
			
			if(rrec.length <= NRecord){
				ddd.stop();
				$('#ct').empty();
			}
			else {ddd.stop();ddd.start();}
			
			if(lrec > rrec.length) tloop = lrec;
			else tloop = rrec.length;
			
			var oe=0;var uoe="";
			for (var i = 0; i < tloop; i++) {									
				if(i<rrec.length){
					if(oe==0) {uoe="uodd "; oe=1;}
					else {uoe="ueven ";	oe=0;}
					var tr = "";
					cevent = false;
					dd = new Date(rrec[i].date +" "+ rrec[i].time);			
					dless = dd.getTime()-$.now();
					if(dless > (-1*DDelay)){
						if(dless <= DAlert){
							tr = '<ul class="'+uoe+'blink">';						
							cevent = true;
						}else{
							tr = '<ul class="'+uoe+'">';
							if(ccount == 0) cevent = true;
						}
					}else tr = '<ul class="'+uoe+'tout">';
				
					tr+='<li class="c1"></li>';
					tr+='<li class="c2"><p>' + $.format.date(dd.getTime(), "dd/MM/yyyy")+'<br /><span>'+$.format.date(dd.getTime(), "H:mm") + '</span></p></li>';
					tr+='<li class="c3"><p>' + rrec[i].program + '</p></li>';
					tr+='<li class="c4"><p>' + rrec[i].location + '</p></li>';
					tr+='<li class="c5"><p>' + rrec[i].chariedby + '</p></li>';
					tr+='</ul>';
				
					if($('#ct'+i).length > 0) $('#ct'+i).empty().append(tr);
					else $('#ct').append('<div id="ct'+i+'">'+tr+'</div>');
					
					
				}else{
					if($('#ct'+i).length > 0) $('#ct'+i).remove();
				}

			}		
			
			lrec = rrec.length;
		}
	});
}