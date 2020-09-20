<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pickups confirmed') }}
        </h2>
    </x-slot>

    <div class="container-fluid py-12">
        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($total)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">pickup confirmed</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($confirmed) }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Order paid</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($confirmed) }}</div>
                        </div>
                        <div class="col">
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">unpaid orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($unpaid)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
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
                        @if(count($confirmed) > 0)
                            @foreach($confirmed -> all() as $order)
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
    </div>
</x-app-layout>