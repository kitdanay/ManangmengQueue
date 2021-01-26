var time = 10*60;
function countdown()
{
  if(time==0)
  {
    window.location.reload();
  }
  else
  {
    tmptime = time;
    dayTime = 24*60*60;
    hourTime = 60*60;
    minutesTime = 60;

    days = Math.floor(tmptime/dayTime);
    tmptime = tmptime - days*dayTime;

    hours = Math.floor(tmptime/hourTime);
    tmptime = tmptime - hours*hourTime;

    minutes = Math.floor(tmptime/minutesTime);
    tmptime = tmptime - minutes*minutesTime;

    seconds = tmptime;
    tidtext="";
    
    if(hours>0)
      tidtext = "เวลาที่เหลือ <font color=red>" + hours + "</font> ชั่วโมง <font color=red>" + minutes + " </font> นาที <font color=red>" + seconds + " </font>วินาที";
     else if(minutes>0)
      tidtext = "เวลาที่เหลือ <font color=red>" + minutes + "</font> นาที <font color=red>" + seconds + " </font> วินาที";
    else
      tidtext = "เวลาที่เหลือ <font color=red>" + seconds + "</font> seconds";

    document.getElementById('timer').innerHTML = tidtext;
    time--;
    setTimeout("countdown()", 1000);
  }
}