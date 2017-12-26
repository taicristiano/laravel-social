<!-- jQuery 3.1.1 -->
<script src="{{asset('adminlte/plugins/jQuery/jquery-3.1.1.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    $.ajaxSetup({
	  	headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/plugins/iCheck/icheck.min.js')}}"></script>

