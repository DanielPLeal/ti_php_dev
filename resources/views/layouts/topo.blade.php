@auth
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestão</title>

    <!-- jQuery -->
    <script src="{{URL::to('assets/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <link href="{{URL::to('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::to('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::to('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::to('assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{URL::to('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{URL::to('assets/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::to('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::to('assets/build/css/custom.min.css')}}" rel="stylesheet">

    <link href="{{URL::to('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}"
          rel="stylesheet">
    <link href="{{URL::to('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- ScreenFull -->
    <script src="{{URL::to('assets/js/screenfull.min.js')}}"></script>

    <!-- NOTIFICATION -->
    <script type="text/javascript" src="{{URL::to('assets/js/jquery.noty.packaged.min.js')}}"></script>
    <!-- NOTIFICATION -->

    <!-- JQUERY-FORM -->
    <script type="text/javascript" src="{{URL::to('assets/js/jquery.form.js')}}"></script>
    <!-- JQUERY-FORM -->

    <!-- LOADING MODAL -->
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery.loadingModal.min.css')}}">
    <script src="{{URL::to('assets/js/jquery.loadingModal.min.js')}}"></script>
    <!-- LOADING MODAL -->

    <!-- Switchery -->
    <link href="{{URL::to('assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- Switchery -->

    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::to('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->

    <script src="{{URL::to('assets/js/moment-with-locales.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/msg.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/validador_telefone.js')}}"></script>

    <!-- INTRO JS -->
    <link href="{{URL::to('assets/css/introjs.css')}}" rel="stylesheet">
    <script src="{{URL::to('assets/js/intro.js')}}"></script>
    <!-- INTRO JS -->

    <!-- JQUERY-FORM-VALIDATOR -->
    <script src="{{URL::to('assets/js/jquery.form-validator.min.js')}}"></script>
    <!-- JQUERY-FORM-VALIDATOR -->

    <!-- TOKEN INPUT -->
    <script type="text/javascript" src="{{URL::to('assets/js/tokeninput/jquery.tokeninput.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('assets/js/tokeninput/formatacao.js')}}"></script>
    <link rel="stylesheet" href="{{URL::to('assets/css/tokeninput/token-input-fb.css')}}" type="text/css"/>
    <!-- TOKEN INPUT -->

    <!-- DATEPICKER -->
    <link rel="stylesheet" href="{{URL::to('assets/css/datepicker/jquery-ui.css')}}">
    <script src="{{URL::to('assets/js/jquery-ui.js')}}"></script>
    <!-- DATEPICKER -->

    <!-- MASCARA DE INPUT -->
    <script src="{{URL::to('assets/js/jquery.maskedinput.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('assets/js/jquery.maskMoney.js')}}" type="text/javascript"></script>
    <!-- MASCARA DE INPUT -->

    <!-- JQUERY-CONFIRM -->
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery-confirm.min.css')}}">
    <script src="{{URL::to('assets/js/jquery-confirm.min.js')}}"></script>
    <!-- JQUERY-CONFIRM -->

    <!-- JQUERY-ORDERABLE -->
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery.orderable.min.css')}}">
    <script src="{{URL::to('assets/js/jquery.orderable.min.js')}}"></script>
    <!-- JQUERY-ORDERABLE -->

    <!-- DUAL LIST BOX -->
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap-duallistbox.css')}}">
    <script src="{{URL::to('assets/js/duallistbox/jquery.bootstrap-duallistbox.js')}}"></script>
    <!-- DUAL LIST BOX -->

    <script src="{{URL::to('assets/js/shortcut.js')}}"></script>
    <!-- SHORTCUT -->

    <!-- UI BLOCKER -->
    <script src="{{URL::to('assets/js/jquery.blockUI.min.js')}}"></script>
    <!-- UI BLOCKER -->

    <!-- CLIPBOARD -->
    <script src="{{URL::to('assets/js/clipboard.min.js')}}"></script>
  </head>
  <body class="nav-md">  
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/home" class="site_title"><i class="fa fa-book"></i> <span>HOME</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img class="fa fa-users" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                  <span>Bem vindo,</span>
                  <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section active">
                <h3>Menu</h3>
                <ul class="nav side-menu" style="">
                  <li class=""><a><i class="fa fa-book"></i> Agenda <span class="fa fa-chevron-down"></span></a>
                    
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="/">Contatos</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>                  
            </div>      
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a  style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <form id="logout-form_i" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf 
                  </form>                 
                  <a style="cursor: pointer;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt=""> {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form_i').submit();"><i class="fa fa-sign-out pull-right">  
                      </i>{{ __('Logout') }}</a>
                    </li>                    
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"></a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu"></ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
     
     @include('partials.errors')
     @include('partials.success')

     @yield('content')
   
   <!-- /top navigation -->
    
    <!-- page content -->

    <!-- /page content -->
    </div>
    </div>
    <!-- footer content -->
    <footer>
      <div class="pull-right">
        <p>{{ date('Y') }} - Gestão de usuários</p>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->        

    <!-- Bootstrap -->
    <script src="{{URL::to('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::to('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::to('assets/vendors/nprogress/nprogress.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL::to('assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL::to('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::to('assets/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL::to('assets/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL::to('assets/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::to('assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::to('assets/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::to('assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::to('assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL::to('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::to('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL::to('assets/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL::to('assets/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::to('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::to('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{URL::to('assets/build/js/custom.js')}}"></script>

    <!-- Switchery -->
    <script src="{{URL::to('assets/vendors/switchery/dist/switchery.min.js')}}"></script>

    <script src="{{URL::to('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::to('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{URL::to('assets/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
     
    <script src="{{URL::to('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    
    <script>
    </script>
        
  </body>
</html>
@endauth
