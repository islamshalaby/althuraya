@extends('admin.app')

@section('title' , __('messages.product_details'))

@section('content')
        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{ __('messages.product_details') }}</h4>
                    @if ($data['product']->like_card == 1)
                        <a  data-toggle="modal" data-target="#exampleModalLike{{ $data['product']->id }}" href="#" class="btn btn-primary  mb-2 mr-2 rounded-circle" title="" data-original-title="Tooltip using BUTTON tag">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <div class="modal fade" id="exampleModalLike{{ $data['product']->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLike{{ $data['product']->id }}Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    
                                        <div class="modal-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            <div class="compose-box">
                                                <div class="compose-content" id="addTaskModalTitle">
                                                    <h5 class="">{{ __('messages.add_amount') }}</h5>
                                                    
                                                    <form action="{{ route('likeCard.update.amount') }}" method="post" >
                                                        @csrf
                                                        <input type="hidden" name="_method" value="put" />
                                                        <input name="product_id" type="hidden" value="{{ $data['product']->id }}" />
                                                        <input name="like_product_id" type="hidden" value="{{ $data['product']->product_id }}" />
                                                        <div class="row">
    
                                                            <div class="form-group col-12 mb-4">
                                                                <label for="total_quatity">{{ __('messages.amount') }}</label>
                                                                <input type="number" name="amount" class="form-control" placeholder="{{ __('messages.amount') }}" >
                                                            </div>
                                                            
                                                        </div>
                                                        <input type="submit" value="{{ __('messages.submit') }}" class="btn btn-primary" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            {{--  <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>  --}}
                                            
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive"> 
                <table class="table table-bordered mb-4">
                    <tbody>
                        <tr>
                            <td class="label-table" > {{ __('messages.title_en') }}</td>
                            <td>
                                {{ $data['product']['title_en'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="label-table" > {{ __('messages.title_ar') }}</td>
                            <td>
                                {{ $data['product']['title_ar'] }}
                            </td>
                        </tr>
                        {{-- <tr>
                            <td class="label-table" > {{ __('messages.video_link') }}</td>
                            <td>
                                <a href="{{ $data['product']['video'] }}" target="_blank">{{ $data['product']['video'] }}</a>
                            </td>
                        </tr> --}}
                        {{-- <tr>
                            <td class="label-table" > {{ __('messages.store') }}</td>
                            <td>
                                {{ $data['product']->store->name }}
                            </td>
                        </tr> --}}
                        <tr>
                            <td class="label-table" > {{ __('messages.category') }} </td>
                            <td>
                                {{ App::isLocale('en') ? $data['product']['category']['title_en'] : $data['product']['category']['title_ar'] }}
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="label-table" > {{ __('messages.description_en') }} </td>
                            <td>
                                {{ $data['product']['description_en'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="label-table" > {{ __('messages.total_quatity') }} </td>
                            <td>
                                {{ $data['product']['total_quatity'] }}
                            </td>
                        </tr>
                         <tr>
                            <td class="label-table" > {{ __('messages.remaining_quantity') }} </td>
                            <td>
                                {{ $data['product']['remaining_quantity'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="label-table" > {{ __('messages.sold_quantity') }} </td>
                            <td>
                                {{ $data['product']['sold_count'] }}
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="label-table" > {{ __('messages.last-update_date') }} </td>
                            <td>
                                {{ $data['product']['updated_at']->format('Y-m-d') }}
                            </td>
                        </tr>             
                    </tbody>
                </table>

                <div class="row">
                    @if (count($data['product']['images']) > 0)
                        @foreach ($data['product']['images'] as $image)
                        <div style="position : relative" class="col-md-2 product_image">
                            <img width="100%" src="https://res.cloudinary.com/{{ cloudinary_app_name() }}/image/upload/w_100,q_100/v1581928924/{{ $image->image }}"  />
                        </div>
                        @endforeach
                    @endif
                </div>
                

            </div>
        </div>
    </div>  
    
@endsection