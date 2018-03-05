@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="warning" class="alert alert-warning alert-dismissible" role="alert" style="display: none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>搜索的商品名称不能为空!</strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="product-title">
                            <span>商品列表</span>
                            <div class="input-group input-group-sm product-title-search">
                                <input type="text" id="search_product" name="search_product" class="form-control pull-right" placeholder="搜索">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" onclick="searchProduct('search-form');"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                            <a class="action-link"><span class="badge badge-green">新增</span></a>
                        </div>
                        <form id="search-form" action="{{ route('products.index') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>成本</th>
                                    <th>来源</th>
                                    <th>汇率</th>
                                    <th>售价</th>
                                    <th>运费</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <!-- ID -->
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->cost_price}}</td>
                                    <td>{{$product->channel}}</td>
                                    <td>{{$product->exchange_rate}}</td>
                                    <td>{{$product->sell_price}}</td>
                                    <td>{{$product->freight}}</td>
                                    <td>{{$product->status}}</td>

                                    <!-- Edit Button -->
                                    <td>
                                        <a class="action-link">
                                            <span class="badge badge-blue">编辑</span>
                                        </a>
                                        <a class="action-link" href="http://www.baidu.com">
                                            <span class="badge badge-red">删除</span>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="box-footer">
                            @if (!empty($name))
                                {{ $products->appends(['name'=>$name])->links() }}
                            @else
                                {{ $products->links() }}
                            @endif
                        </div>
                    </div>

                    <div class="panel-footer">
                        本系统有Laravel Framework & Bootstrap3强力驱动
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection