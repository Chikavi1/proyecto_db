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
<body>
    <nav>
        <div class="nav-wrapper" style="background: #885df4 !important;">
          <a href="/home" class="brand-logo center" >Chikavis</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Salir
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
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
                    <a href="{{ route('proyectos.show',$proyecto->id) }}">{{  $proyecto->nombre}}</a> 
                </li>
                @endforeach
            </ul>
        </div>
        <div class="center">

        <div class="col m8" style="background:#f5f6fa;height:40em">
            <form class="form-horizontal" method="POST" action="{{ route('proyectos.update',$proyec->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
            
                <div class="col s12 offset-m2 m8" style="margin-top: 10em;">
                    <div class="" style="border-radius:1em;margin-bottom:3em;">
                        <div class="col s12">
                            <div class="row">

                              <div class="input-field col s6">
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{ $proyec->nombre }}">
                                <label for="nombre">Nombre</label>
                              </div>
                              <div class="input-field col s6">
                                <input id="fecha" type="text" class="datepicker" name="fecha" value="{{ $proyec->fecha }}">
                                <label for="fecha">Fecha</label>
                              </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn">
                                      <span >Archivo</span>
                                      <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                      <input placeholder="subir archivo" class="file-path validate" type="text" name="archivo" value="{{ $proyec->archivo }}" accept="image/x-png,image/gif,image/jpeg">
                                    </div>
                                  </div>
                              </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="comentario" type="text" class="validate" name="comentario" value="{{ $proyec->comentario }}">
                                <!--<textarea id="textarea1" class="materialize-textarea" name="Comentario"></textarea>-->
                                <label for="comentario">comentario</label>
                              </div>
                            </div>


                    </div>
                    <button type="submit" style="border-radius:.6em;padding:1em 2em;background:#ede9fe;color:#6d28d9;font-weight:bold;putline:none;border:2px dashed grey;">Editar</button>
                  </div>
                </form>
            </div>


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