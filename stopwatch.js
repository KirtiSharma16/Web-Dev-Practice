let timer;
let hrs=0, mins=0, secs=0, displayhrs=0, displaymins=0, displaysecs=0;

function start(){
  timer=setInterval(function(){
    secs++;
    if(secs==60){
      mins++; secs=0;
      if(mins==60){
        hrs++; mins=0;
      }
    }
    if(secs<10) displaysecs="0"+secs.toString();
    else displaysecs=secs.toString();

    if(mins<10) displaymins="0"+mins.toString();
    else displaymins=mins.toString();

    if(hrs<10) displayhrs="0"+hrs.toString();
    else displayhrs=hrs.toString();

    document.getElementById("time").innerHTML=displayhrs+":"+displaymins+":"+displaysecs;
  },1000);
}

function pause(){
  clearInterval(timer);
}

function reset(){
  clearInterval(timer);
  hrs=0, mins=0, secs=0;
  document.getElementById("time").innerHTML="00:00:00";
}