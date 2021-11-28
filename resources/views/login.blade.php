{{-- inicio header --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .body {
            background-color:#8d8d8d;
        }
        .header-b {
            background-color:#c7c7c7;
            border-radius 6px;					
        }
        .nav-b {
            background-color:#eeeeee;	
            border-radius: 6px;						
        }
        .content-b{
            background-color:#eeeeee;
            border-radius: 6px;	
            height: 450px;
        }

        .footer-b {
            background-color:#707070;
            border-radius: 6px;				
        }
        .hola {

background-color: #fff;
padding: 2.5px;
border: .2px solid black;
border-radius: 6px;
}
        .hey {

background-color: #90caf9;
padding: 2.5px;
border-radius: 6px;
}
    </style>
</head>
<body class="header-b">
<div>
    <h2 align="center" style="background-color:#90caf9; border-radius: 6px">Log in</h2>
<br>
</div>
{{-- FIN header --}}
{{-- inicio nav --}}
<nav class="nav-b">
</nav>
{{-- FIN nav --}}
{{-- inicio content --}}
<div class="content-b">
<div>
   <div style="background-color:#9e9e9e ; border-radius: 6px;"> <h2 align="center">Favor de iniciar sesion</h2></div>
</div>
<h3 align="center">
<br>
<div>
    <form action="{{route('valida')}}" method="POST">
    {{csrf_field()}}
        <div>
        <br>
            <label for="inusuario">Usuario</label>
            <br>
            <input type="text" class="hola" id="inusuario" name="inusuario"/>
        </div>
        <div>
        <br>
            <label for="incont">Contraseña</label>
            <br>
            <input type="password" class="hola" id="incont" name="incont"/>
        </div>
    <br>
        <div>
            <input type="submit" class="hey" value="Ingresar" />
        </div>
    </form>
    
    </div>
<br>

<br>
</h3>

</div>    
{{-- FIN content --}}
{{-- inicio footer --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
<footer class="footer-b" ; align="center">
    <p style="color:white";>Esta pagina fue creada por Aaron Isaac Pacheco Giron</p>
    <p style="color:white";>19308051220706</p>
     <p style="color:white";>CBTis122  5F</p>
</footer>
</html>
{{-- FIN footer --}}