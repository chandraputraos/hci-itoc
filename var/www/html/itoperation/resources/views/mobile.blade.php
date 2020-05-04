@extends('layouts.index')



@section('content')
<!-- Content Wrapper. Contains page content -->


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mobile</h1>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
       
                    <router-view></router-view>
              

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

<script  src="{{asset('resources/js/app.js')}}" ></script>