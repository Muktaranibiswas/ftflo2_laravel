@extends('layouts/newecomerce')

@section('content2')

<div class="page-container">

@include('newecomerce/head')

<!-- END PAGE HEAD-->
<!-- BEGIN PAGE CONTENT-->
<div class="page-content">
<div class="container">
 BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                Widget settings form goes here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn blue">Save changes</button>
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE BREADCRUMB-->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="#">Home</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="ecommerce_index.html">Features</a>
        <i class="fa fa-circle"></i>
    </li>
    <li class="active">
        eCommerce
    </li>
</ul>

 @include('newecomerce/visual')

<div class="row">
@include('newecomerce/overview')
 @include('newecomerce/review')

</div>
</div>
<!-- END PAGE CONTENT -->
</div>
@endsection