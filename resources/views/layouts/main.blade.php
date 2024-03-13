<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='icon' href='{{asset('img/dc-logo.png')}}'>
    @vite('resources/js/app.js')
</head>
<body>
@include('includes.header')
@yield('main-content')
@include('includes.footer')
</body>
</html>
{{-- questo file racchiude il layout principale, e dice che negli include le cose sono statiche, negli yield ci metti quello che cambia
MA il vero file, quello principale, quello che vedi in pagina è proprio comics, questo qui sta solo raccogliendo lo stile è TIPO UN DUMB COMPONENT
infatti sia tu che marco avete fatto la route del file comics, NON DEL FILE MAIN.BLADE --}}

{{-- praticamente nella live della MOLISANA lui prima ha creato le rotte dei link presenti nel suo header, poi ha detto che il main cambia a seconda
di quello che clicchiamo nei link tramite yield, nei singoli file collegati ai link gli mette l'exstend e poi 
la section (guarda bene la sintassi live del 07/03/24) e ogni file avrà il suo markup. --}}