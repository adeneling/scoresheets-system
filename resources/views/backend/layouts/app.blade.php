<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  .red {
    background-color: #DF2D3C;
  }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') | Scoresheets System</title>

  <!-- Bootstrap -->
  <link href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('backend/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  <!-- Select2 -->
  <link href="{{ asset('backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <!-- datatables -->
  <link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{ asset('backend/build/css/custom.min.css') }}" rel="stylesheet">
  <!-- Sweetalert -->
  <link href="{{ asset('backend/sweetalert/sweetalert.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('favicon/favicon.png') }}">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('home') }}" class="site_title">
              <i class="fa fa-desktop"></i> 
              <span>BEST<font color="red">CS</font></span>
            </a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{ asset('backend/images/img.png') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />

          <!-- sidebar menu -->
          @include('backend.layouts.includes.sidebar')
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          @include('backend.layouts.includes.footer-menu')
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      @include('backend.layouts.includes.top-navigation')
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3><font color="red"> @yield('title') </font></h3>
            </div>
          </div>

          <div class="clearfix"></div>
          {{-- notification --}}
          @if (session()->has('flash_notification.message'))
          <div class="container">
            <div class="alert alert-{{ session()->get('flash_notification.level') }}">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session()->get('flash_notification.message') }}
            </div>
          </div>
          @endif
          {{-- content --}}
          @yield('content')

        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Scoresheets System
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('backend/vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Datatables -->
  <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
  <script src="{{ asset('backend/vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ asset('backend/js/moment/moment.min.js') }}"></script>
  <script src="{{ asset('backend/js/datepicker/daterangepicker.js') }}"></script>
  <!-- jQuery Tags Input -->
  <script src="{{ asset('backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
  <!-- Switchery -->
  <script src="{{ asset('backend/vendors/switchery/dist/switchery.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset('backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>
  <!-- Sweetalert -->
  <script src="{{ asset('backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ asset('backend/build/js/custom.min.js') }}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ asset('backend/sweetalert/sweetalert.min.js') }}"></script>
  <!-- Select2 -->
  <script>
  $(document).ready(function() {
    $(".select2_single").select2({
      placeholder: "Select",
      allowClear: true
    });
    $(".select2_group").select2({});
    $(".select2_multiple").select2({
      maximumSelectionLength: 4,
      placeholder: "With Max Selection limit 4",
      allowClear: true
    });
  });
  </script>
  <!-- /Select2 -->
  <!-- Datatables -->
  <script>
  $(document).ready(function() {
    var handleDataTableButtons = function() {
      if ($("#datatable-buttons").length) {
        $("#datatable-buttons").DataTable({
          dom: "Bfrtip",
          buttons: [
          {
            extend: "copy",
            className: "btn-sm"
          },
          {
            extend: "csv",
            className: "btn-sm"
          },
          {
            extend: "excel",
            className: "btn-sm"
          },
          {
            extend: "pdfHtml5",
            className: "btn-sm"
          },
          {
            extend: "print",
            className: "btn-sm"
          },
          ],
          responsive: true
        });
      }
    };

    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons();
        }
      };
    }();

        //$('#datatable').dataTable();
        $('#datatable').dataTable({
          "aLengthMenu": [[10, 50, 75, 100, -1], [10, 50, 75, 100,"All"]],
          "iDisplayLength": 100
        });
        
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
          { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
</script>
<!-- /Datatables -->
{{-- Sweetalert --}}
<script>
$(document).ready(function () {
  $(document.body).on('click', '.js-submit-confirm', function (event) {
    event.preventDefault()
    var $form = $(this).closest('form')
    var $el = $(this)
    var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'Are you sure want to delete data'
    swal({
      title: 'Are you sure?',
      text: text,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes',
      cancelButtonText: 'Cancel',
      closeOnConfirm: true
    },
    function () {
      $form.submit()
    })
  })
})
</script>

<script>
  var filterPresentationMaterial = $('#filterPresentationMaterial input:radio:checked').val()
  var filterCommunicationSkill = $('#filterCommunicationSkill input:radio:checked').val()
  var filterAchievement = $('#filterAchievement input:radio:checked').val()
  var filterPersonalValue = $('#filterPersonalValue input:radio:checked').val()
  var filterCustomerCareKnowledge = $('#filterCustomerCareKnowledge input:radio:checked').val()
  var filterSolutionSkill = $('#filterSolutionSkill input:radio:checked').val()
  var filterLeadership = $('#filterLeadership input:radio:checked').val()
  var filterInspirationalStory = $('#filterInspirationalStory input:radio:checked').val()
</script>
</body>
</html>