@extends('layouts.business-layout')

@section('content')

<x-existing_product />

<x-success_created_msg />

<br><br><br><br>

<center>

<div class="transparent-body hidden"></div>

<div class="container-builder">
    <form action="/post-products" method="GET" class="find-searchable">
        @csrf
        <input type="text" name="search" id="searchable-input" onkeyup="searchProducts()" placeholder="--- Search a product ---">
    </form>
    <button  class="append-add-form" onclick="showThisForm()"><i class="fa fa-plus"></i> Add Post</button>
    <br><br>
    <table class="scrollable-viewer">
        <tr class="tr-th-tbl">
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Discount</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        @if($product->company_id == Auth::guard('web')->user()->id)
        <tr class="tr-td-tbl">
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>

            <td>
                @foreach($categories as $category)
                @if($category->id == $product->category)
                {{$category->category_name}}
                @endif
                @endforeach
            </td>

            <td>{{number_format($product->unit_price,2)}}</td>
            <td>{{number_format($product->quantity)}}</td>
            <td>{{$product->description}}</td>
            <td>
                @if($product->discount !='')
                {{$product->discount}}
                @else
                <button class="state-discount" onclick="PostDiscount(event, $product->id)">State Discount</button>
                
                <form action="/edit/discount/{{$product->id}}" method="POST" class="discountt-creator" id="discount-cr-{{$product->id}}" style="display:none;">
                    @csrf
                    @method('PUT')
                    <p>State {{$product->product_name}}'s {{__('Discount')}}</p>
                    <input type="number" name="discount" id="" placeholder="Enter the discount amount"><br><br>
                    <button type="button" class="close-btn" onclick="closeDiscountDialog(event)">&times;</button>
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
                @endif
                
            </td>
            <td>{{$product->created_at}}</td>
            <td>
                <button onclick="MoreAbout(event, $product->id)"><i class="fa fa-eye"></i></button>
                <div class="view-single-product" id="view-single-product-{{$product->id}}" style="display:none;">
                    <table>
                        <tr class="tr-th-tbl">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Discount</th>
                            <th>Date</th>
                        </tr>
                        <tr class="tr-td-tbl">
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>

                            <td>
                                @foreach($categories as $category)
                                @if($category->id == $product->category)
                                {{$category->category_name}}
                                @endif
                                @endforeach
                            </td>

                            <td>{{number_format($product->unit_price,2)}}</td>
                            <td>{{number_format($product->quantity)}}</td>
                            <td>{{$product->description}}</td>
                            <td>
                                @if($product->discount !='')
                                {{$product->discount}}
                                @else
                                <button class="state-discount" onclick="PostDiscount(event, $product->id)">State Discount</button>
                                @endif
                                
                            </td>
                            <td>{{$product->created_at}}</td>
                        </tr>
                    </table>
                </div>
                <button><i class="fa fa-edit"></i></button>
                <button><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
        @endif
        @endforeach
    </table>
    
    <div class="pagination-builder">
        <br>
        {{$products->links()}}
        <br>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            window.MoreAbout = function(event, prodId){
                event.preventDefault();
                const moreAbt = document.getElementById(`view-single-product-${prodId}`);
                moreAbt.style.display='block';
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
        window.PostDiscount = function(event, productId){
            event.preventDefault();
            const dialogForm = document.getElementById(`discount-cr-${productId}`);
            dialogForm.style.display = 'block';
        }

        window.closeDiscountDialog = function(event, productId){
            event.preventDefault();
            const dialogForm = document.getElementById(`discount-cr-${productId}`);
            dialogForm.style.display = 'none';
        }
    });

    </script>
    
</div>



<form action="{{ route('products') }}" method="POST" class="new-md5-wrapper-ajax hidden" enctype="multipart/form-data">
        @csrf
        <div class="flex-jap-wrapper">  
            <div class="md5-component">
                <input type="hidden" name="company_id" id="" value="{{Auth::guard('web')->user()->id}}">
                <div class="id-viewe">
                    <label for="">Product Id</label><span style="color:red;">*</span><br>
                    <input type="text" name="product_id" id="" value="{{old('product_id')}}">
                </div>
                <div class="name-view">
                    <label for="">Product Name</label><span style="color:red;">*</span><br>
                    <input type="text" name="product_name" id="" value="{{old('product_name')}}">
                </div>
                <div class="category-class">
                    <label for="">Categories</label><span style="color:red;">*</span><br>
                    <select name="category" id="">
                        <option value="">--select category--</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="prive-view">
                    <label for="">Unit Price</label><span style="color:red;">*</span><br>
                    <input type="number" name="unit_price" id="" value="{{old('unit_price')}}">
                </div>
                <div class="quantity-view">
                    <label for="">Quantity</label><span style="color:red;">*</span><br>
                    <input type="text" name="quantity" id="" value="{{old('quantity')}}">
                </div>
                <div class="descrpt-view">
                    <label for="">Descriptions</label><span style="color:red;">*</span><br>
                    <input type="text" name="description" id="" value="{{old('description')}}">
                </div>
                <div class="picture1-view">
                    <label for="">Product Image</label> <span style="color:red;">*</span>
                    <input type="file" name="pictures1" id="" style="border:none;" value="{{old('pictures1')}}" accept="image/*">
                </div>
                <div class="picture2-view">
                    <label for="">Product Image</label> <span style="color:red;">(Optional)</span>
                    <input type="file" name="pictures2" id="" style="border:none;" value="{{old('pictures2')}}" accept="image/*">
                </div>
                <div class="picture3-view">
                    <label for="">Product Image</label> <span style="color:red;">(Optional)</span>
                    <input type="file" name="pictures3" id="" style="border:none;" value="{{old('pictures3')}}" accept="image/*">
                </div>
                <div class="picture4-view">
                    <label for="">Product Video</label> <span style="color:red;">(Optional)</span>
                    <input type="file" name="pictures4" id="" style="border:none;" value="{{old('pictures4')}}" accept="video/*">
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <button type="submit" class="bottom-btn-submit">Submit Product</button>
        <!-- <button class="add-wrapper-btn" onclick="addFormInputs()" type="button"><i class="fa fa-plus"></i></button>  -->
        <button type="button" onclick="closeForm()" class="close-popup">Close</button>
        <br><br>
    </form>
</center>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.addFormInputs = function(){
            const formComponent = document.createElement('div');
            formComponent.innerHTML = `
            <br><br><br><br><hr><hr>
                <input type="hidden" name="company_id[]" id="" value="{{Auth::guard('web')->user()->id}}">
                    <div class="id-viewe">
                        <label for="">Product Id</label><span style="color:red;">*</span><br>
                        <input type="text" name="product_id[]" id="" value="{{old('product_id')}}">
                    </div>
                    <div class="name-view">
                        <label for="">Product Name</label><span style="color:red;">*</span><br>
                        <input type="text" name="product_name[]" id="" value="{{old('product_name')}}">
                    </div>
                    <div class="category-class">
                        <label for="">Categories</label><span style="color:red;">*</span><br>
                        <select name="category[]" id="">
                            <option value="">--select category--</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="prive-view">
                        <label for="">Unit Price</label><span style="color:red;">*</span><br>
                        <input type="number" name="unit_price[]" id="" value="{{old('unit_price')}}">
                    </div>
                    <div class="quantity-view">
                        <label for="">Quantity</label><span style="color:red;">*</span><br>
                        <input type="text" name="quantity[]" id="" value="{{old('quantity')}}">
                    </div>
                    <div class="descrpt-view">
                        <label for="">Descriptions</label><span style="color:red;">*</span><br>
                        <input type="text" name="description[]" id="" value="{{old('description')}}">
                    </div>
                    <div class="picture1-view">
                        <label for="">Product Image</label> <span style="color:red;">*</span>
                        <input type="file" name="pictures1[]" id="" style="border:none;" value="{{old('pictures1')}}" accept="image/*">
                    </div>
                    <div class="picture2-view">
                        <label for="">Product Image</label> <span style="color:red;">(Optional)</span>
                        <input type="file" name="pictures2[]" id="" style="border:none;" value="{{old('pictures2')}}" accept="image/*">
                    </div>
                    <div class="picture3-view">
                        <label for="">Product Image</label> <span style="color:red;">(Optional)</span>
                        <input type="file" name="pictures3[]" id="" style="border:none;" value="{{old('pictures3')}}" accept="image/*">
                    </div>
                    <div class="picture4-view">
                        <label for="">Product Video</label> <span style="color:red;">(Optional)</span>
                        <input type="file" name="pictures4[]" id="" style="border:none;" value="{{old('pictures4')}}" accept="video/*">
                    </div><br><br><br>
            `
            document.querySelector('.flex-jap-wrapper').appendChild(formComponent);
        }
    });
</script>

<script>
    function showThisForm(){
        document.querySelector('.new-md5-wrapper-ajax').style.display='block';
        // document.querySelector('.container-builder').style.backgroundColor='#ddd';
        document.querySelector('.container-builder').style.opacity='0';
    }

    function closeForm(){
        const popUpForm = document.querySelector('.new-md5-wrapper-ajax');
        popUpForm.style.display='none';
        document.querySelector('.container-builder').style.opacity='1';
    }
</script>

<script>
    function searchProducts() {
    const input = document.getElementById('searchable-input').value.toLowerCase();
    const products = document.querySelectorAll('.scrollable-viewer');

    products.forEach(product => {
        const name = product.querySelector('td:nth-child(4)').textContent.toLowerCase();
        const id = product.querySelector('td:nth-child(3)').textContent.toLowerCase();
        
        const isVisible = name.includes(input) || id.includes(input);
        product.style.display = isVisible ? '' : 'none';
    });
}
</script>

@stop