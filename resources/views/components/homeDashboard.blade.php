<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>Your Store Dashboard: Insights and Management
                <div class="page-title-subheading">Welcome, <b>{{ auth()->user()->name }}</b>! Manage your store with ease and make it a thriving online destination.
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                    <div class="widget-subheading"></div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>196</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Clients</div>
                    <div class="widget-subheading"></div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>168</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading"> Total Products</div>
                    <div class="widget-subheading"> </div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>538</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    {{-- {{ $Products['id']}} --}}
    <div class="col-md-12 py-30">
        <div class="main-card mb-22 card">
            <div class="card-header">All Orders
                <div class="btn-actions-pane-right">

                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            
                            <th class="text-center">Product</th>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{          $Orders}} --}}
                        {{-- @foreach ($Orders as $order)
                            <tr>
                                <td class="text-center text-muted">{{ $order['id'] }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                              <div class="widget-content-left mr-3">
                                                  <div class="widget-content-left">
                                                      <img width="40" class="rounded-circle"
                                                          src="../images/{{ $order->product['image_name'] }}" alt="">
                                                  </div>
                                              </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $order->product['name'] }}</div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $order->client['name'] }}</td>
                                <td class="text-center">{{ $order->product['price'] }}</td>
                                <td class="text-center">{{ $order['quantity'] }}</td>
                                <td class="text-center">{{ $order->product['price']*$order['quantity'] }}</td>

                                <td class="text-center">
                                    <a href="removeorder/{{ $order['id'] }}"><button type="button"
                                            id="PopoverCustomT-1" class="btn btn-primary btn-sm">Remove</button></a>
                                </td>
                            </tr>
                        @endforeach --}}

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
