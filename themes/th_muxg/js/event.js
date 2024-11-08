var Events={};

Events.text = [
['Will start in','<font color="green">Time left to start</font>'],
['Will appear in','<font color="red">Time left to invasion</font>']
];

Events.sked = [
['Chaos Castle',0,'01:00','03:00','05:00','09:00','13:00','17:00','19:00','21:00','23:00'],
['Golden Invasion',1,'01:12','03:12','05:12','09:12','13:12','17:12','19:12','21:12','23:12'],
['Castle Deep',0,'18:00'],
['Great Dragon',1,'18:45'],
['Happy Hour',0,'19:00'],
['White Rabbits',1,'19:47'],
['Team Deathmatch',0,'20:00'],
['Asteroth',1,'20:45']
];

Events.init = function(e){
	if( typeof e == "string" )
		var g = new Date(new Date().toString().replace(/\d+:\d+:\d+/g, e));
	var f = ( typeof e == "number" ? e : ( g.getHours() * 60 + g.getMinutes() ) * 60 + g.getSeconds() );
	var q = Events.sked;
	var j = [];

	for(var a = 0; a < q.length; a++){
		var n = q[a];
		for(var k = 2; k < q[a].length; k++){
			var b = 0;
			var p = q[a][k].split(":");
			var o = ( p[0] * 60 + p[1] * 1 ) * 60;
			var c = q[a][2].split(":");
			if( q[a].length-1 == k && (o - f) < 0 ) b = 1;
			var r = b ? (1440 * 60 - f) + ( (c[0] * 60 + c[1] * 1) * 60 ) : o - f;
			if( f <= o || b ){
				var l = Math.floor((r / 60) / 60), l = l < 10 ? "0" + l : l;
				var d = Math.floor((r / 60) % 60), d = d < 10 ? "0" + d : d;
				var u = r % 60, u = u < 10 ? "0" + u : u;
				j.push('<hr><div class="event_title">' + '<span>' + q[a][b ? 2 : k] + "</span>" + n[0] + '</div><div class="event_info"><span>' + (l + ":" + d + ":" + u) + '</span>' + ( Events.text[ q[a][1] ][ +(l == 0 && d < (q[a][1] ? 1 : 5)) ] ) + "</div>");
				break;
			};
		};
	};
	document.getElementById("events").innerHTML = j.join("");
	setTimeout(function(){ Events.init( f == 86400 ? 1 : ++f ); }, 1000);
};

var utc = ((new Date().getTimezoneOffset() - new Date(new Date().getFullYear(), 0, 1).getTimezoneOffset()) / 60) * -1;

function myTimer() {
	var d = new Date(),
	hh = d.getUTCHours() + 2 + utc,
	mm = d.getMinutes(),
	ss = d.getSeconds();
	if(hh >= 24) hh = hh - 24;
	if(hh <= 9) hh = "0" + hh;
	if(mm <= 9) mm = "0" + mm;
	if(ss <= 9) ss = "0" + ss;
	document.getElementById("time").innerHTML = hh + ":" + mm + ":" + ss;
	setTimeout(function(){myTimer()},1000);
}

/*function myTimer()
{var d=new Date();hh=d.getUTCHours()+2,mm=d.getMinutes(),ss=d.getSeconds();if(hh>=24)
{hh=hh-24;}
if(hh<=9)
{hh="0"+hh;}
if(mm<=9)
{mm="0"+mm;}
if(ss<=9)
{ss="0"+ss;}
document.getElementById("time").innerHTML="Server time: "+hh+":"+mm+":"+ss;
setTimeout(function(){myTimer()},1000);
}*/

function EventsTime()
{var d=new Date();hh=d.getUTCHours()+2+utc,mm=d.getMinutes(),ss=d.getSeconds();if(hh>=24)
{hh=hh-24;}
if(hh<=9)
{hh="0"+hh;}
if(mm<=9)
{mm="0"+mm;}
if(ss<=9)
{ss="0"+ss;}
Events.init(hh+":"+mm+":"+ss);}