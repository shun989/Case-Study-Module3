@extends('layouts.master')
@section('content')
    <style>
        .w-5{
            display: none;
        }
        p{
            margin-top: 10px;
        }
        .limited-text{
            white-space: nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 3cm;
        }
    </style>
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">{{__('language.Product table')}}</h1>
                <p class="mb-4"></p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <a href="{{route('admin.createForm')}}">{{__('language.Add new Product')}}</a></h6>
                    </div>
                    <div class="card-body container">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>{{__("language.Image")}}</th>
                                    <th>{{__("language.Name")}}</th>
                                    <th>{{__("language.Category")}}</th>
                                    <th>{{__("language.Description")}}</th>
                                    <th>{{__("language.Price")}}</th>
                                    <th>{{__("language.Create day")}}</th>
                                    <th>{{__("language.Update day")}}</th>
                                    <th colspan="2">{{__('language.Option')}}</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>{{__("language.Image")}}</th>
                                    <th>{{__("language.Name")}}</th>
                                    <th>{{__("language.Category")}}</th>
                                    <th>{{__("language.Description")}}</th>
                                    <th>{{__("language.Price")}}</th>
                                    <th>{{__("language.Create day")}}</th>
                                    <th>{{__("language.Update day")}}</th>
                                    <th colspan="2">{{__('language.Option')}}</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td><img style="width: 80px;height: 50px" src="{{$product['image']}}" alt=""></td>
                                        <td>{{$product['name']}}</td>
                                        <td>{{$product['category']}}</td>
                                        <td><p class="limited-text">{{$product['description']}}</p></td>
                                        <td>{{number_format($product['price'])}}VNĐ</td>
                                        <td>{{$product['created_at']}}</td>
                                        <td>{{$product['updated_at']}}</td>
                                        <td><a href="{{route('admin.updateForm',$product->id)}}">{{__('language.Update')}}</a></td>
                                        <td><a href="{{route('admin.delete',$product->id)}}">{{__('language.Delete')}}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        <!-- /.container-fluid -->
        </div>
    </div>
@endsection
