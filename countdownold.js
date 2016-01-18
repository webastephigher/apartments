<script>
var end = new Date('05/22/2015 2:00 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML =
		  '<table style=\"text-align:center; margin-left:auto; margin-right:auto;\">' +
		  '<tr><td colspan=4 style=\"font-size:30px;\">WE ARE MOVING</td></tr>' +
		  '<tr><td>' +
		  '<font style=\"font-size:24px;\">' + days + '</font><br>days' +
		  '</td><td style=\"padding-left:50px;\">' +
		  '<font style=\"font-size:24px;\">' + hours + '</font><br>hrs' +
		  '</td><td style=\"padding-left:50px;\">' +
		  '<font style=\"font-size:24px;\">' + minutes + '</font><br>mins' +
		  '</td><td style=\"padding-left:50px;\">' +
		  '<font style=\"font-size:24px;\">' + seconds + '</font><br>secs' +
		  '</td></tr></table>';
    }
    timer = setInterval(showRemaining, 1000);
</script>
<div id="countdown"></div>