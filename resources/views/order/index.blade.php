
@extends('layouts.master')

@section('css')
    <style>
        .dataTables_filter {
            float: right;
        }
        .paging_simple_numbers {
            float: right;
        }
    </style>
@endsection

@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Order</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                            <li class="breadcrumb-item active">List Out</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Order Panel</h4>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js')

    <!-- Required datatable js -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Datatable init js -->
{{--    <script src="{{asset('assets/pages/datatables.init.js')}}"></script>--}}
@endsection
