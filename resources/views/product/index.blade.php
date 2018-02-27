@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span>商品列表</span>
                            <a class="action-link"><span class="label label-success">新增</span></a>
                        </div>
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
                                            <span class="label label-primary">编辑</span>
                                        </a>
                                        <a class="action-link" href="http://www.baidu.com">
                                            <span class="label label-danger">删除</span>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="box-footer">
                            {{ $products->links() }}
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