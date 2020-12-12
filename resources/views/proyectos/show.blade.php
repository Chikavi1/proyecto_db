<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>

</head>

<style>
    .block{
        width:100%;
    }

</style>
<body>
    <nav>
        <div class="nav-wrapper" style="background: #885df4 !important;">
          <a href="/home" class="brand-logo center" >Chikavis</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Salir
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>


    <div class="row">

        <div class="col m2"  style="background: #ffffff !important; min-height: 100%;height:40em !important;">
            <h5 style="font-weight: bold;margin-top:10em;">Mis Proyectos</h5>
            <ul>
                @foreach($proyectos as $proyecto)
                <li style="padding: 1em;">
                    <a href="{{ route('proyectos.show',$proyecto->id) }}">{{ucfirst( $proyecto->nombre)}}</a> 
                </li>
                @endforeach
            </ul>
        </div>
        <div class="center">

        <div class="col m8" style="background:#f5f6fa;height:40em">
          
            <div class="row " style="margin:1em;">
                <div class="col m6">
                    <a class="btn block" href="{{ route('proyectos.edit',$proyec->id) }}">Actualizar</a>
                </div>
                <div class="col m6">
                    <form action="{{action('CrudController@destroy', $proyec->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" value="{{$proyec->id}}">
                        <button type="submit" class="btn red darken-2 block">Eliminar</button>
                    </td>
                    </form>
                </div>
            </div>
           



            <h1>{{ucfirst( $proyec->nombre) }}</h1>
            <p>{{ ucfirst( $proyec->comentario ) }}</p>
            <span>Fecha: {{ $proyec->fecha }}</span><br>
            <a href="">{{ $proyec->archivo }}</a>

        </div>
        <div class="col m2 z-depth-2"  style="background: #ffffff  !important; min-height: 100%;height:40em !important;">
           <div class="center">
               <img width="100" height="100" style="margin-top:3em;" class="circle " src="https://images.unsplash.com/photo-1584518969469-c2d99c7760a0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="">
           </div>
            <p class="center-align" style="font-weight: bold;">{{Auth::user()->name}}</p>
            <p>{{Auth::user()->email}}</p>
            <span style="font-size: .8em;color:grey;">Cargo: </span>
            <p style="color:#25376e;font-weight:bold;">{{Auth::user()->cargo}}</p>
            <span style="font-size: .8em;color:grey;">Proyectos: </span>
            <p style="color:#25376e;font-weight:bold;">{{$total}}</p>

        </div>



      </div>



      <script>
        $(document).ready(function(){
   $('.datepicker').datepicker();
});
    </script>


</body>
</html>