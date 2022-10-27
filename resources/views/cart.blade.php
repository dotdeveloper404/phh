@extends('app')


@section('content')

<section class="deals-section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2><img src="{{ asset('assets/images/logo.png')}}" alt=""> <br><span>CART</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="deals-list">
                </ul>
            </div>
        </div>
    </div>
</section>

<main class="my-8">
            <div class="container px-6 mx-auto cartlist">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                    
                      <div class="flex-1">
                        <table class="table table-striped" cellspacing="0">
                          <thead class="thead-dark">
                            <tr class="h-12 uppercase">
                              <th class="hidden md:table-cell"></th>
                              <th class="text-left">Name</th>
                              <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Quantity</span>
                              </th>
                              <th class="hidden text-right md:table-cell"> price</th>
                              <th class="hidden text-right md:table-cell"> Remove </th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($cartItems as $item)
                            <tr>
                              <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                  <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                </a>
                              </td>
                              <td>
                                <a href="#">
                                  <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                  
                                </a>
                              </td>
                              <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                  <div class="relative flex flex-row w-full h-8">

                                    <form action="{{ route('cart.update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $item->id}}" >
                                    <input type="number"  name="quantity" value="{{ $item->quantity }}" 
                                    class="w-6 text-center bg-gray-300" />
                                    <button type="submit" class="px-2 pb-2 ml-2 text-white bg-blue-500 btn_update_to_cart">update</button>
                                    </form>
                                  
                                </div>
                                </div>
                              </td>
                              <td  class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $item->price }}
                                </span>
                              </td>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('cart.remove') }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="{{ $item->id }}" name="id">
                                  <button class="px-4 py-2 text-white bg-red-600">x</button>
                              </form>
                                
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div style="float:right;">
                         Total: ${{ Cart::getTotal() }}
                      
                          <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Remove All Cart</button>
                            
                          </form>
                            <a href="/checkout" class="btn btn-primary">Checkout</a>
                        </div>

                      </div>
                    </div>
                  </div>
            </div>
        </main>

<section class="deals-section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2><img src="{{ asset('assets/images/logo.png')}}" alt=""> <br><span>Gallagher’s</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="deals-list">
                    @foreach($products as $product)

                    <li>
                        <div class="list-data">
                            <div class="deals-img">
                                <img src="{{asset($product->image)}}" alt="">
                            </div>
                            <div class="deals-content">
                                <h3>{{$product->name}}</h3>
                                <p>{{$product->description}}</p>
                                <span>${{$product->price}}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 btn_add_to_cart"><i class="fas fa-shopping-basket"></i>Add To Cart</button>
                    </form>
                            </div>
                        </div>
                    </li>

                    @endforeach
                   
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection 