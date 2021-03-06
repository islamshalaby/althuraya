@extends('admin.app')
@section('title' , __('messages.show_categories'))
@section('content')
    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">

        <div class="statbox widget box box-shadow">
            <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>{{ __('messages.show_categories') }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <a class="btn btn-primary" href="/admin-panel/categories/add">{{ __('messages.add') }}</a>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive">
                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>{{ __('messages.image') }}</th>
                            <th>{{ __('messages.category_title') }}</th>
                            <th class="text-center">{{ __('messages.sub_category_first') }}</th>
                            <th class="text-center">{{ __('messages.products') }}</th>
                            @if(Auth::user()->update_data)<th class="text-center">{{ __('messages.edit') }}</th>@endif
                            @if(Auth::user()->delete_data)<th class="text-center">{{ __('messages.delete') }}</th>@endif
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data['categories'] as $category)
                            <tr>
                                <td><?=$i;?></td>
                                <td class="text-center"><img src="https://res.cloudinary.com/{{cloudinary_app_name()}}/image/upload/w_100,q_100/v1581928924/{{ $category->image }}"  /></td>
                                <td>{{ $category->title }}</td>
                                
                                <td class="text-center blue-color">
                                    @if (count($category->products) > 0 && $category->next_level == false)
                                        {{ __('messages.category_has_products_add') }}
                                    @else
                                    <a href="{{route('sub_cat.show',$category->id)}}">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-layers">
                                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                <polyline points="2 17 12 22 22 17"></polyline>
                                                <polyline points="2 12 12 17 22 12"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    @endif
                                </td>
                                
                                
                                <td class="text-center blue-color"><a href="{{ route('category.products', $category->id) }}" ><i class="far fa-eye"></i></a></td>
                                @if(Auth::user()->update_data)
                                    <td class="text-center blue-color" ><a href="/admin-panel/categories/edit/{{ $category->id }}" ><i class="far fa-edit"></i></a></td>
                                @endif
                                @if(Auth::user()->delete_data)
                                    <td class="text-center blue-color" >
                                        @if ((count($category->products) > 0 && count($category->subCategories) > 0) 
                                        || (count($category->products) > 0 && count($category->subCategories) == 0) 
                                        || (count($category->products) == 0 && count($category->subCategories) > 0))
                                        {{ __('messages.category_has_products') }}
                                        @else
                                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="/admin-panel/categories/delete/{{ $category->id }}" ><i class="far fa-trash-alt"></i></a></td>
                                        @endif
                                @endif
                                <?php $i++; ?>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
