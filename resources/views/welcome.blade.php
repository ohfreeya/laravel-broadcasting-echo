<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <button type="button" onclick="sendEcho()">send whisper</button>
    </body>
</html>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    window.Echo.channel('test')
        .listen('.testEvent', (e) => {
            console.log(e);
        });
    function sendEcho(){
        window.Echo.private('test')
            .whisper('testEvent',  {
                message: 'zachary yaya~'
            });
    }
</script>