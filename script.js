// CSS-Setup
var $header = $('header'), $content = $('.content'), $headerHeight = $header.css('height');
$content.css({
    "paddingTop": $headerHeight
});



// Tap/Phase switch setup
function switchPhase(num) {
    if (num !== currentAppState) {
        $phaseArray.eq(currentAppState).css('display', 'none');
        $phaseArray.eq(num).css('display', 'block');
        currentAppState = num;
        console.log("switch erfolgreich");
    } else {
        console.log("switch nicht erfolgreich");
    }
}

var currentAppState = 1, $phaseArray = $('.phase'), optionsBtn = $('.nav_options'), timerBtn = $('.nav_timer');
optionsBtn.on('click', function() {
    switchPhase(0);
});
timerBtn.on('click', function() {
    switchPhase(1);
});
// timer function
var round = 1,
    play = false,
    timerHour = 0,
    timerMin = 17,
    timerSec = 0,
    originalTimerHour = timerHour;
    originalTimerMin = timerMin;
    originalTimerSec = timerSec;
    blinds = [{
            small: 50,
            big: 100
          }, {
            small: 100,
            big: 200
          }, {
            small: 150,
            big: 300
          }, {
            small: 200,
            big: 400
          }, {
            small: 300,
            big: 600
          }, {
            small: 400,
            big: 800
          }, {
            small: 500,
            big: 1000
          }, {
            small: 600,
            big: 1200
          }, {
            small: 800,
            big: 1600
          }, {
            small: 1000,
            big: 2000
          }, {
            small: 1200,
            big: 2400
          }, {
            small: 1500,
            big: 3000
          }, {
            small: 2000,
            big: 4000
          }, {
            small: 2500,
            big: 5000
          }, {
            small: 3000,
            big: 6000
          }, {
            small: 4000,
            big: 8000
          }, {
            small: 5000,
            big: 10000
          }, {
            small: 6000,
            big: 12000
          }, {
            small: 8000,
            big: 16000
          }, {
            small: 10000,
            big: 20000
          }, {
            small: 12000,
            big: 24000
          }, {
            small: 15000,
            big: 30000
        }, {
            small: 20000,
            big: 40000
        }, {
            small: 25000,
            big: 50000
        }, {
            small: 30000,
            big: 60000
        }, {
            small: 40000,
            big: 80000
        }, {
            small: 50000,
            big: 100000
        }, {
            small: 60000,
            big: 120000
        }, {
            small: 80000,
            big: 160000
        }, {
            small: 100000,
            big: 200000
        }],
    maxRounds = blinds.length;

function setupTimer() {
    $('.blinds').contents().remove();
    $('.blinds').append(blinds[round - 1].small + '/' + blinds[round - 1].big + ' - ' + blinds[round - 1].big);
    $('.time').contents().remove();
    $('.time').append(timerHour + ':' + timerMin + ':' + timerSec);
    $('.round').contents().remove();
    $('.round').append(round);   

}

function countDown() {
    if (play) {
        if (timerSec > 0) {
		if ((timerSec == 4) && (timerMin == 0) && (timerHour == 0)) {
			document.getElementById('cinco').play();
		}
            timerSec -= 1;
            setupTimer();
        } else {
            if (timerMin > 0) {
				if ((timerSec == 0) && (timerMin == 1) && (timerHour == 0)) {
					document.getElementById('alerta1').play();
				}
                timerSec = 59;
                timerMin -= 1;
                setupTimer();
            } else {
                if (timerHour > 0) {
                    timerHour -= 1;
                    timerMin = 59;
                    timerSec = 59;
                    setupTimer();
                } else {
		    document.getElementById('alerta').play();
                    nextRound();
                }
            }
        }
    } else {
        return;
    }
}

function startTimer() {
    if (!play) {
        play = true;
        refreshTimer();
    } else {
        play = false;
    }
}
function nextRound() {
    if (round < maxRounds) {
        round += 1;
        $('.blinds').contents().remove();
	$('.blinds').append(blinds[round - 1].small + '/' + blinds[round - 1].big + ' - ' + blinds[round - 1].big);
        timerHour = originalTimerHour;
        timerMin = originalTimerMin;
        timerSec = originalTimerSec;
        $('.time').contents().remove();
        $('.time').append(timerHour + ':' + timerMin + ':' + timerSec);
        $('.round').contents().remove();
        $('.round').append(round);
        console.log("success");
}
}
function lastRound() {
    if (round > 1) {
        round -= 1;
        $('.blinds').contents().remove();
        $('.blinds').append(blinds[round - 1].small + '/' + blinds[round - 1].big + ' - ' + blinds[round - 1].big);
        timerHour = originalTimerHour;
        timerMin = originalTimerMin;
        timerSec = originalTimerSec;
        $('.time').contents().remove();
        $('.time').append(timerHour + ':' + timerMin + ':' + timerSec);
        $('.round').contents().remove();
        $('.round').append(round);
}
}
function resetTime() {
    timerHour = originalTimerHour;
    timerMin = originalTimerMin;
    timerSec = originalTimerSec;
    $('.time').contents().remove();
    $('.time').append(timerHour + ':' + timerMin + ':' + timerSec);
}

$('.start_pause').on('click', function() {
    startTimer();
});
$('.next_blind').on('click', function() {
    nextRound();
});
$('.last_blind').on('click', function() {
    lastRound();
});
$('.reset_time').on('click', function() {
    resetTime();
});
    

function refreshTimer() {
    if (play) {
        countDown();
        setTimeout(refreshTimer, 1000);
    } else {
        return;
    }
}

setupTimer();
function changeTime() {
    timerHour = parseInt($('.input_hour').val());
    timerMin = parseInt($('.input_min').val());
    timerSec = parseInt($('.input_sec').val());
    originalTimerHour = timerHour;
    originalTimerMin = timerMin;
    originalTimerSec = timerSec;
    $('.time').contents().remove();
    $('.time').append(timerHour + ':' + timerMin + ':' + timerSec);
}

$('.save_time').on('click', function(event) {
    event.preventDefault();
    changeTime();
});

function changeBlinds() {
    
}