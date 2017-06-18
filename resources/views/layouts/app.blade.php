<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hotel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Hotel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            @if(Auth::user()->authentication == 1)
                                <li><a href="{{ url('csList') }}">Manage CS</a></li>
                                <li><a href="{{ url('laporanBooking') }}">Laporan Booking</a></li>
                            @else
                                <li><a href="">Booking Kamar</a></li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
    $(function () {
        $('#datepicker').datepicker(
        {
            dateFormat: 'yy-mm-dd',
        });
    });

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var nama = button.data('nama')
        var email = button.data('email')
        var no_telp = button.data('no_telp')
        var wn = button.data('wn')
        var noKamar = button.data('no_kamar')
        var checkIn = button.data('check_in')
        var checkOut = button.data('check_out')
        var type = button.data('type')
        var harga = button.data('harga')
        var date1 = new Date(checkIn)
        var date2 = new Date(checkOut)
        var diff = date2 - date1
        var lama = diff/1000/60/60/24 // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#nama').text("Nama Pemesan : "+nama)
        modal.find('#email').text("Email : "+email)
        modal.find('#noTelp').text("No Telp : "+no_telp)
        modal.find('#wn').text("Warga Negara : "+wn)
        modal.find('#type').text("Tipe : "+type+" / Rp. "+harga)
        modal.find('#checkIn').text("Check In : "+checkIn)
        modal.find('#checkOut').text("Check Out : "+checkOut)
        modal.find('#exampleModalLabel').text("Info Pemesanan Kamar "+noKamar)
        modal.find('#lamaMenginap').text("Lama Menginap : "+lama+" hari")
        modal.find('#harga').text("Total harga : Rp. "+lama*harga)
        modal.find('#edit').html("<a class='btn btn-primary' href='{{ url('halamanPrint') }}?id="+id+"'>Print</a>")
    })
  </script>
   <script>
    $( function() {
        $( "#datepickerOut" ).datepicker(
        {
            dateFormat: 'yy-mm-dd',
        });
    });
  </script>

    <script>
    $('#print').click(function(){
        $('#print').hide();
        window.print();
    });
    </script>

      <script type="text/javascript">
        $(function(){
            $('#printOut').click(function(e){
                e.preventDefault();
                var w = window.open();
                var printOne = $('.contentToPrint1').html();
                var printTwo = $('.contentToPrint2').html();
                w.document.write('<html><head><title>Booking Room Detail</title></head><body><h1>Booking Room Detail</h1><h3 />' + printOne + '<hr />' + printTwo) + '</body></html>';
                w.window.print();
                w.document.close();
                return false;
            });
        });
     </script>
</body>
</html>
