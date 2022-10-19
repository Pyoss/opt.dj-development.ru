
$(document).ready(function () {
    $('#telegram-click').click(
        function (){
            console.log(1)
            ym(90253936,'reachGoal','Telegram_Click')
        }
    )
    $('#whatsapp-click').click(
        function (){
            ym(90253936,'reachGoal','Whatsapp_Click')
        }
    )
    $('#viber-click').click(
        function (){
            ym(90253936,'reachGoal','Viber_Click')
        }
    )
})