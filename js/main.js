var popup = document.getElementById("popup");

function OpenPop() {
    popup.classList.add("open-popup");
}

function ClosePop() {
    popup.classList.remove("open-popup");
}

function Quit() {
    document.location.reload();
}

var bd_day = document.getElementById("bd_day");
for (var i = 1; i < 32; i++) {
    var option = document.createElement('option');
    option.value = i;
    option.innerHTML = i;
    bd_day.options.add(option);
}

var bd_year = document.getElementById("bd_year");
for (var i = 2022; i > 1904; i--) {
    var option = document.createElement('option');
    option.value = i;
    option.innerHTML = i;
    bd_year.options.add(option);
}