@extends('admin.app')

@section('title' , __('messages.transations'))

@section('content')
    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{ __('messages.transations') }}</h4>
                    <h6><b>{{ __('messages.like_card_balance') }} : </b> {{ $balance->balance . ' ' . __('messages.dinar') }}</h6>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive"> 
                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>{{ __('messages.order_number') }}</th>
                            <th>{{ __('messages.product') }}</th>
                            <th>{{ __('messages.price') }}</th>
                            <th>Serial code</th>
                            <th>Serial number</th>
                            <th>{{ __('messages.valid_to') }}</th>
                            <th>{{ __('messages.date') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $row)
                            <tr >
                                <td><?=$i;?></td>
                                <td>{{ $row->like_order_id }}</td>
                                <td><a href="{{ route('products.details', $row->product_id) }}" target="_blank" >{{ $row->product }}</a></td>
                                <td>{{ $row->price . " " . __('messages.dinar') }}</td>
                                <td>{{ $row->serial_code }}</td>
                                <td>{{ $row->serial_number }}</td>
                                <td>{{ $row->valid_to }}</td>
                                <td>{{ $row->created_at }}</td>
                                <?php $i++; ?>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="paginating-container pagination-solid">
            <ul class="pagination">
                <li class="prev"><a href="{{$data['contact_us']->previousPageUrl()}}">Prev</a></li>
                @for($i = 1 ; $i <= $data['contact_us']->lastPage(); $i++ )
                    <li class="{{ $data['contact_us']->currentPage() == $i ? "active" : '' }}"><a href="/admin-panel/contact_us/?page={{$i}}">{{$i}}</a></li>               
                @endfor
                <li class="next"><a href="{{$data['contact_us']->nextPageUrl()}}">Next</a></li>
            </ul>
        </div>   --}}
        
    </div>  

@endsection