<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> -->
    <div class="container-fluid py-12">
        
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                <strong id="message"></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="d-block pb-5">
                <button class="btn btn-primary" id="ord">New order</button>
            </div>
            <div class="card mb-5 col-md-8" style="display: none;" id="add">

                <!--Card content-->
                <div class="card-body">
                    <!-- Form -->
                    <form id="form">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="inputFirstname">First Name</label> -->
                                <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" value="{{ old('fname') }}" id="inputFirstname" placeholder="First Name*" required>
                                <span class="text-danger" id="fname"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="inputLastname4">Last Name</label> -->
                                <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}" id="inputLastname4" placeholder="Last Name*" required>
                                <span class="text-danger" id="lname"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="inputEmail4">Email</label> -->
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmail4" placeholder="Email*" required>
                                <span class="text-danger" id="email"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="inputPhone4">Phone</label> -->
                                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="inputPhone4" placeholder="Phone*. ex. 255123456789" required>
        
                                <span class="text-danger" id="phoneError"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address*</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" id="inputAddress" placeholder="1234 Main St" required>
                            <span class="text-danger" id="address"></span>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" name="address2" class="form-control @error('address2') is-invalid @enderror" value="{{ old('address2') }}" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                <span class="text-danger" id=""></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputClothCount">No.of clothes*</label>
                                <input type="text" name="cloth_count" class="form-control @error('cloth_count') is-invalid @enderror" value="{{ old('cloth_count') }}" id="inputClothCount" placeholder="ex. 3" required>
                                <span class="text-danger" id="cloth_count"></span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="house">House no.</label>
                                <input type="text" name="house" class="form-control @error('house') is-invalid @enderror" value="{{ old('house') }}" id="house" placeholder="ex. 15">
                                <span class="text-danger" id="house"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputInfo">additional info</label>
                                <input type="text" name="info" class="form-control @error('info') is-invalid @enderror" value="{{ old('info') }}" id="inputInfo" placeholder="ex. call me before arriving">
                                <span class="text-danger" id=""></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDate">Pickup time*</label>
                                <input class="form-control @error('pickup_time') is-invalid @enderror" value="{{ old('pickup_time') }}" name="pickup_time" type="datetime-local" name="date" id="inputDate" required>
                                <span class="text-danger" id="pickup_time"></span>
                            </div>
                        </div>
                        <button id="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- Form -->

                </div>

            </div>
        <div class="card col-md-12">
            <div class="card-body border-r-2">
                <table class="table table-bordered display responsive nowrap" style="width:100%" id="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Address2</th>
                            <th>Pickup time</th>
                            <th>Additional Info</th>
                            <th>House no.</th>
                            <th>No. of clothes</th>
                            <th>Pickup confirm</th>
                            <th>Payment status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($orders) > 0)
                            @foreach($orders -> all() as $order)
                                <tr>
                                    <td>{{$order->fname}} {{$order->lname}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->address2}}</td>
                                    <td>{{$order->pickup_time}}</td>
                                    <td>{{$order->info}}</td>
                                    <td>{{$order->house}}</td>
                                    <td>{{$order->cloth_count}}</td>
                                    <td>{{$order->pickup_status}}</td>
                                    <td>{{$order->payment_status}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
            <!-- <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                
                <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <table class="min-w-fulltable table-bordered display responsive nowrap" style="width:100%" id="table">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ID</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Fullname</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Email</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Phone</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Status</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Created At</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            
                            @if(count($orders) > 0)
                                @foreach($orders -> all() as $order)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">#1</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">{{$order->fname}} {{$order->lname}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$order->email}}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{$order->phone}}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative text-xs">active</span>
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">September 12</td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                            <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                               
                        </tbody>
                    </table>
                  
                </div>
            </div> -->
    </div>
</x-app-layout>
