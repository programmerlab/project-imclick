<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="{{ url('/')}}">Immoclic</a>.</strong> All rights reserved.
      </footer>
 
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
 <!-- jQuery 2.1.4 -->
    <script src="{{ URL::asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ URL::asset('assets/js/raphael-min.js') }}"></script>
   
    <!-- Sparkline -->
    <script src="{{ URL::asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ URL::asset('assets/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ URL::asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ URL::asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ URL::asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('assets/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('assets/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script>
     <script src="{{ URL::asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.validate.js') }}"></script>

      <script src="{{ URL::asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('assets/js/common.js') }}"></script>
     <script type="text/javascript">
        $(".select2").select2();
        var url = "{{ url('admin') }}";
        var email_req = '{{ Lang::get('immoclick-lang.email_req') }}';
        var password_req = '{{ Lang::get('immoclick-lang.password_req') }}';
    </script> 


    <script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.blueimp-gallery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.image-gallery.min.js') }}"></script>    
    <script src="{{ URL::asset('website/js/upb.js')}}"></script> 

  </body>
</html>
