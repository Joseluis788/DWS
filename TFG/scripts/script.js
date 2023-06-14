function timer ()
{
    var numero = document.getElementById('numero');
    var countdown = 5;

    numero.textContent = countdown;

    setInterval(function() {
    countdown = --countdown <= 0 ? 5 : countdown;

    numero.textContent = countdown;
    }, 1000);
}