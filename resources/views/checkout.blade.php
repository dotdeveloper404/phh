@extends('app')


@section('content')

<section class="deals-section">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2><img src="{{ asset('assets/images/logo.png')}}" alt=""> <br><span>CHECKOUT</span></h2>
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

                                  <span class="text-sm font-medium lg:text-base">
                                    {{ $item->quantity }}
                                </span>

                                </div>
                                </div>
                              </td>
                              <td  class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    ${{ $item->price }}
                                </span>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div style="float:right;">
                         Total: ${{ Cart::getTotal() }}
                      
                          <form action="{{ route('checkout.do_checkout') }}" method="POST">
                            @csrf
                            <button class="px-6 py-2 text-red-800 bg-red-300">Payment</button>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
            </div>
        </main>

@endsection 