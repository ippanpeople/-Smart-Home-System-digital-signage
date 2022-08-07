{
    var daylist = ["sun.", "mon.", "tue.", "wed.", "thu.", "fri.", "sat."];
    // var monlist = ["January", "February", "March", "April ", "May", "June", "July", "August", "September", "October", "November", "December"];

    function genTimerStrings(tm, num){

        var i;
        var ret = tm.toString(10);
        var left = ret.length;

        if( left < num){
            for(i=0; i<( num - left ); i++ ){
                ret = String(0) + ret;
            }
        }

        return ret;
    }

    function updateTimer(){
        var ret;
        var date = new Date();
        var tm_year, tm_mon, tm_date, tm_hour, tm_min, tm_sec, tm_msec,tm_day;
        var colon;

        tm_year = date.getFullYear();
        tm_mon = date.getMonth()+1;
        tm_date = date.getDate();
        tm_day = date.getDay();
        tm_hour = date.getHours();
        tm_min = date.getMinutes();
        tm_sec = date.getSeconds();
        tm_msec = date.getMilliseconds();

        tm_mon = genTimerStrings(tm_mon, 2);
        tm_date = genTimerStrings(tm_date, 2);
        tm_hour = genTimerStrings(tm_hour, 2);
        tm_min = genTimerStrings(tm_min, 2);
        tm_sec = genTimerStrings(tm_sec, 2);
        tm_day = daylist[tm_day];

        // tm_mon = monlist[tm_mon];

        if( tm_msec > 499 ){
            colon = ' ';
        }else{
            colon = ':';
        }
        
        document.getElementById("DSEG-clock").innerHTML = tm_hour + colon + tm_min;
        document.getElementById("DSEG-clock-sec").innerHTML = tm_sec;
        document.getElementById("year-day").innerHTML = "<span class=\"D14LI\">" + tm_year + "-" + "<span class=\"D14LI\">" + tm_mon + "</span>" +"-" +  "<span class=\"D14LI\">" + tm_date + ' ' + "</span>" + "<span class=\"D14LI week-font\" >" + tm_day + ' ' + "</span>";
        // document.getElementById("week").innerHTML = tm_day

        setTimeout("updateTimer()", 500 - date.getMilliseconds()%500 );
    }

}