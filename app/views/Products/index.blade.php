@extends('layouts.master')
@section('title')
View Products
@stop
@section('content')

    <div id="breadcrumb">
        <a href= "{{ URL::to('dashboard') }}"><span>Dashboard</span></a>
        <span> > </span>
        <a href="{{ URL::to('Products') }}"  class="current"><span>Products</span></a>
    </div>

    <div class="content">

    <div ng-app="app">  
    <div ng-controller="tabbed_pages">
        <tabset>
            <tab>
                <tab-heading>Products</h2></tab-heading>
                <div>
                    <div class="row">
                    <div class="col-md-12">
                    <div class="dashboard">
                    <div class="dashboard-inner">

                    <!-- will be used to show any messages -->
                    @if ($errors->has())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>        
                            @endforeach
                        </div>
                    @endif
                    @if (Session::has('message-create'))
                        <div class="alert alert-success">{{ Session::get('message-create') }}</div>
                    @endif
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('message-stock-error'))
                        <div class="alert alert-warning">{{ Session::get('message-stock-error') }}</div>
                    @endif

                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="strong">
                                <td>Brand</td>
                                <td>Model</td>
                                <td>Description</td>
                                <td>Supplier</td>
                                <td>Category</td>
                                <td>Sub Category</td>
                                <td>Available Stocks</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Products as $key => $value)
                            <tr>
                                <td>{{ $value->brand }}</td>
                                <td>{{ $value->model }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->supplier }}</td>
                                <td>{{ $value->category }}</td>
                                <td>Current Stock : {{ $value->stocks }}
                                    {{ Form::open(array('url' => 'updateStocks' . $value->id)) }}
                                    <span class="pull-left">Increase/Decrease by: {{ Form::number('stocks', Input::old('stocks'), array('width' => '100% ')) }}</span><br />
                                    <span class="pull-left">{{ Form::submit('Update Stock') }}</span>
                                    {{ Form::close() }}
                                </td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td class="custom-td1">

                                    <!-- show the Product (uses the show method found at GET /Products/{id} -->
                                    <a class="btn btn-small btn-success pull-left custom-btn" href="{{ URL::to('Products/' . $value->id) }}">Show</a>

                                    <!-- edit this Product (uses the edit method found at GET /Products/{id}/edit -->
                                    <a class="btn btn-small btn-info pull-left custom-btn" href="{{ URL::to('Products/' . $value->id . '/edit') }}">Edit</a>

                                    <!-- delete the Product (uses the destroy method DESTROY /Products/{id} -->
                                    {{ Form::open(array('url' => 'Products/' . $value->id, 'class' => 'delete-form')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-small btn-warning pull-left custom-btn')) }}
                                    {{ Form::close() }}
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>

                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            {{ $Products->links() }}
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </tab>

            <tab>
                <tab-heading><span>Suppliers/Categories/Sub Categories</span></tab-heading>
                <div>
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="dashboard">

                    <div class="col-md-4 dashboard-inner">
                    <h4>Suppliers</h4>

                    <!-- will be used to show any messages -->
                    @if (Session::has('message1'))
                        <div class="alert alert-info">{{ Session::get('message1') }}</div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="strong">
                                <td>Supplier Name</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ProductSuppliers as $key => $value1)
                            <tr>
                                <td>{{ $value1->supplierName }}</td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td class="custom-td2">

                                    {{ Form::open(['route' => ['DeleteSupplier/', $value1->id], 'method' => 'delete', 'class' => 'delete-form']) }}
                                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                    {{ Form::close() }}
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 dashboard-inner">
                    <h4>Categories</h4>

                    <!-- will be used to show any messages -->
                    @if (Session::has('message2'))
                        <div class="alert alert-info">{{ Session::get('message2') }}</div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="strong">
                                <td>Category Name</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ProductCategories as $key => $value2)
                            <tr>
                                <td>{{ $value2->categoryName }}</td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td class="custom-td2">

                                    {{ Form::open(['route' => ['DeleteCategory/', $value2->id], 'method' => 'delete', 'class' => 'delete-form']) }}
                                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                    {{ Form::close() }}
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 dashboard-inner">
                    <h4>Sub Categories</h4>

                    <!-- will be used to show any messages -->
                    @if (Session::has('message3'))
                        <div class="alert alert-info">{{ Session::get('message3') }}</div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="strong">
                                <td>Sub Category Name</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ProductSubCategories as $key => $value3)
                            <tr>
                                <td>{{ $value3->subcategoryName }}</td>

                                <!-- we will also add show, edit, and delete buttons -->
                                <td class="custom-td2">

                                    {{ Form::open(['route' => ['DeleteSubCategory/', $value3->id], 'method' => 'delete', 'class' => 'delete-form']) }}
                                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                    {{ Form::close() }}
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>

                    </div>
                    </div>
                    </div>
                </div>
            </tab>

            <!-- <tab>
                <tab-heading><span>Categories</span></tab-heading>
                <div>
                    <p>Content wahahahah</p>
                </div>
            </tab>

            <tab>
                <tab-heading><span>Sub Categories</span></tab-heading>
                <div>
                    <p>Ahahah wahahahah</p>
                </div>
            </tab> -->
        </tabset>
    </div>
    </div> <!-- ng-app -->

    

    

    </div>
@stop