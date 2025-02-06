
/* convert solar to lunar calendar*/
var lMonth = ['មិគសិរ','បុស្ស','មាឃ','ផល្គុន','ចេត្រ','ពិសាខ','ជេស្ឋ',['អាសាឍ','បឋមាសាឍ','ទុតិយាសាឍ'],'ស្រាពណ៍','ភទ្របទ','អស្សុជ','កត្តិក'];
var lAnimal = ['ជូត','ឆ្លូវ','ខាល','ថោះ','រោង','ម្សាញ់','មមី','មមែ','វក','រកា','ច','កុរ'];
var lDay = ['អាទិត្យ','ចន្ទ','អង្គារ','ពុធ','ព្រហស្បតិ៍','សុក្រ','សៅរ៍'];
var lSak = ['ឯកស័ក','ទោស័ក','ត្រីស័ក','ចត្វាស័ក','បញ្ចាស័ក','ឆស័ក','សប្ដស័ក','អដ្ឋស័ក','នព្វស័ក','សំរឹទ្ធិស័ក'];
/* return 0-29*/
function get_bodithey(year) {
    var ahk = get_aharkun(year);
    var avml = floor((11 * ahk + 25)  / 692);
    var m = avml + ahk + 29;
    return (m % 30);
}
/* return int*/
function get_aharkun(ad_year) {
    var beyear = get_be_year(ad_year);
    var t = beyear * 292207 + 499;
    ahk = floor(t / 800) + 4;
    return ahk;
}
function get_be_year(year){
    return year + 544;
}
function floor(nmb){
    return Math.floor(nmb);
}
/* return 0-291*/
function get_avoman(year) {
    var ahk = get_aharkun(year);
    var avm = (11 * ahk + 25)  % 692;
    return avm;
}
/* return 1-800*/
function kromthupul(be_year) {
    var akh = get_akhakun_mod(be_year);
    var krom = 800 - akh;
    return krom;
}
function get_akhakun_mod(be_year) {
    var t = be_year * 292207 + 499;
    var ahkmod = t % 800;
    return ahkmod;
}
function get_akhakun(be_year){
    var t = be_year * 292207 + 499;
    return t;
}
function is_khmer_solar_leap(year) {
    var be_year = get_be_year(year);
    var krom = kromthupul(be_year);
    if (krom <= 207) return 1;
    else return 0;
}
/* return 0:regular, 1:leap month, 2:leap day, 3:leap day and month*/
function get_bodithey_leap(ad_year) {
    var result = 0;
    var a = get_avoman(ad_year);
    var b = get_bodithey(ad_year);

    /* check bodithey leap month*/
    var bodithey_leap = 0;
    if (b >= 25 || b <= 5) {
        bodithey_leap = 1;
    }
    /* check for avoman leap-day based on gregorian leap*/
    var avoman_leap = 0;
    if (is_khmer_solar_leap(ad_year)) {
        if (a <= 126) avoman_leap = 1;
    } else {
        if (a <=137) {
            /* check for avoman case 137/0, 137 must be normal year (p.26)*/
            if (get_avoman(ad_year + 1) == 0) {
                avoman_leap = 0;
            } else avoman_leap = 1;
        }
    }
    /* case of 25/5 consecutively*/
    /* only bodithey 5 can be leap-month, so set bodithey 25 to none*/
    if (b == 25) {
        var next_b = get_bodithey(ad_year + 1);
        if (next_b == 5) bodithey_leap = 0;
    }

    /* case of 24/6 consecutively, 24 must be leap-month*/
    if (b == 24) {
        next_b = get_bodithey(ad_year + 1);
        if (next_b == 6) bodithey_leap = 1;
    }

    /* format leap result (0:regular, 1:month, 2:day, 3:both)*/
    if (bodithey_leap == 1 && avoman_leap == 1) {
        result = 3;
    } else if (bodithey_leap == 1) {
        result = 1;
    } else if (avoman_leap == 1) {
        result = 2;
    } else result = 0;
    return result;
}
/* return 0:regular, 1:leap month, 2:leap day (no leap month and day together)*/
function get_protetin_leap(adyear) {
    var b = get_bodithey_leap(adyear);
    if (b == 3) {
        return 1;
    }
    if (b == 2 || b == 1) {
        return b;
    }
    /* case of previous year is 3*/
    if (get_bodithey_leap(adyear - 1) == 3) {
        return 2;
    }
    /* normal case*/
    return 0;
}
function is_gregorian_leap(year){
    return (year % 100 === 0) ? (year % 400 === 0) : (year % 4 === 0);
}
function get_numofday_in_kmonth(newm, year){
    var add_day = 0;
    if(newm == 7 && get_protetin_leap(year) == 2){
        return 30;
    }
    if ((newm % 2) == 0){
        return 30;
    } else {
        return 29;
    }
}
function get_total_day_from_epoch_date(epoch_year,year){
    var totalDay = 0;
    for(var i=epoch_year;i<year;i++){
        if(get_protetin_leap(i)==0){
            totalDay += 354;
        }else if(get_protetin_leap(i)==1){
            totalDay += 384;
        }else{
            totalDay += 355;
        }
    }
    return totalDay
}
function get_diff_days(date1,date2){
    var timeDiff = date2.getTime() - date1.getTime();
    return diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
}
function get_khmer_month_date(diffDays,year){
    var alreadyLeapMonth = false;
    var leapMonth = 0;
    var khmer_month = 2;
    var khmer_date = 1;
    var khmer_day = 0;
    var nmb_day = 30;
    var month_leap = 0;
    var date_month_luarn = [];
    if(diffDays > 0){
        if(diffDays < 30){
            diffDays++;
            date_month_luarn = [diffDays,khmer_month,0];
            diffDays = (diffDays > 15) ? (diffDays-15)+"រោច" : (diffDays+"កើត")
            /* console.log(lMonth[khmer_month-1] + "<>" + (diffDays) );*/
        }else{
            diffDays++;
            while(diffDays-nmb_day > 0){ /*5 | 211 - 29 = 182*/
                diffDays -= nmb_day;
                if(khmer_month % 2 == 0){
                    if(khmer_month==6 && get_protetin_leap(year)==2){
                        nmb_day = 30;
                    }else{
                        nmb_day = 29;
                    }
                }else{
                    if(khmer_month==7 && get_protetin_leap(year)==1 && month_leap == 0){
                        /*alert(khmer_month+"-"+get_protetin_leap(year)+"-"+month_leap+"|"+diffDays);*/
                        month_leap++;
                        nmb_day = 30;
                        if(diffDays > 30 && diffDays < 60){
                            khmer_month--;
                            month_leap++;
                        }else if(diffDays > 59){
                            khmer_month--;
                        }
                    }else if(khmer_month==7 && get_protetin_leap(year)==1 && month_leap == 1){
                        /*alert(khmer_month+"-"+get_protetin_leap(year)+"-"+month_leap);*/
                        month_leap++
                        nmb_day = 30;
                    }else{
                        nmb_day = 30;
                    }
                    nmb_day = 30;
                }
                khmer_month++;
                /*console.log(khmer_month + " " + diffDays);*/
            }
            date_month_luarn = [diffDays,khmer_month,month_leap];
            diffDays = (diffDays > 15) ? (diffDays-15)+"រោច" : (diffDays+"កើត");
            /* console.log(lMonth[khmer_month-1] + "<>" + diffDays + " leap : "+month_leap);*/
        }
    }else if(diffDays < 0){
        diffDays = Math.abs(diffDays);
        if(diffDays<30){
            diffDays = 30 - diffDays;
            date_month_luarn = [diffDays,1,0];
            diffDays = (diffDays > 15) ? (diffDays-15)+"រោច" : (diffDays+"កើត");
            /*console.log(lMonth[0]+"<>"+diffDays);*/
        }else if(diffDays<60){
            diffDays = 60 - diffDays;
            date_month_luarn = [diffDays,2,0];
            /* console.log(lMonth[11]+"<>"+diffDays);*/
        }
    }else{
        date_month_luarn = [1,2,0];
        /* console.log(lMonth[1]+"<>"+1+"កើត");*/
    }
    return date_month_luarn;
}
function get_exact_be_year (year,month,date){
    var ahk = get_akhakun(get_be_year(year));
    var pea = ahk % 7;
    var CHAET = 5;
    var PISAK = 6;
    var month_ny;
    var bot_ny = get_bodithey(year);
    if (bot_ny >=6) {
        month_ny = CHAET;
        /* check for previous year for (type 3)*/
        var botleap = get_bodithey_leap(year - 1);
        if (botleap == 3) { /* uon case*/
            bot_ny++;
        }
    } else {
        month_ny = PISAK;
        bot_ny++;
    }
    var be_year = get_be_year(year);
    if(month < month_ny ){
        be_year -= 1;
    }else if(month == month_ny){
        if(date < bot_ny){
            be_year -= 1;
        }
    }
    return be_year;
}
function get_lAnimal(be_year){
    var epoch_be_year = 2443;
    var epoch_lAnimal = 12;
    while(be_year > epoch_be_year){
        epoch_lAnimal++;
        epoch_lAnimal = (epoch_lAnimal > 12) ? 1 : epoch_lAnimal ;
        epoch_be_year++;
        /*console.log(epoch_be_year + " <> " + epoch_lAnimal);*/
    }
    return epoch_lAnimal;
}
function get_Sak(be_year) {
    var epoch_be_year = 2443;
    var epoch_sak = 1;
    while(be_year > epoch_be_year){
        epoch_sak++;
        epoch_sak = (epoch_sak > 10) ? 1 : epoch_sak ;
        epoch_be_year++;
    }
    return epoch_sak;
}
function solarTolunar(date){
    var current_date;
    if(jQuery.type(date) === "date"){
        current_date = date;
    }else{
        current_date = new Date(date.split("-")[2],parseInt(date.split("-")[1])-1,date.split("-")[0]);
        /*alert(current_date);*/
        if(isNaN(current_date.getTime())){
            return {"status":false,"error":"wrong Date Format"};
        }
    }
    var epoch_date = new Date(1900,0,1);
    var totalDay = get_total_day_from_epoch_date(epoch_date.getFullYear(),current_date.getFullYear()); /* total Days from epoch_date to current_date*/
    epoch_date = new Date(epoch_date.setDate(epoch_date.getDate() + totalDay - 1));
    var diffDays = get_diff_days(epoch_date,current_date);
    var khmer_month_date = get_khmer_month_date(diffDays-1, current_date.getFullYear());
    var exact_be_year = get_exact_be_year(current_date.getFullYear(), khmer_month_date[1], khmer_month_date[0]);
    var iAnimal = get_lAnimal(exact_be_year);
    var iSak = get_Sak(exact_be_year);

    var khmer_date = (khmer_month_date[0] > 15) ? khmer_month_date[0]-15+"រោច" : khmer_month_date[0] + "កើត";
    var khmer_month = lMonth[khmer_month_date[1]-1];
    if(khmer_month_date[1] > 12){
        khmer_month = lMonth[khmer_month_date[1]-13];
    }
    if(khmer_month_date[1] == 8){
        khmer_month = khmer_month[khmer_month_date[2]];
    }
    return {
        'status':true,
        'date':khmer_date,
        'month':khmer_month,
        'animal':lAnimal[iAnimal-1],
        'sak':lSak[iSak-1],
        'be_year':exact_be_year,
        'day': lDay[current_date.getDay()]
    };
}

function getLunarDate(current_get_date, div_render){
    var lunar_date = solarTolunar(current_get_date);
    if(lunar_date.status == true){
        text_date = 'ថ្ងៃ'+lunar_date.day+' '+lunar_date.date+' ខែ '+lunar_date.month+' ឆ្នាំ '+lunar_date.animal+' '+lunar_date.sak+' ព.ស '+lunar_date.be_year;
    }else{
        text_date = lunar_date.error;
    }
    document.getElementById(div_render).innerHTML = text_date
}