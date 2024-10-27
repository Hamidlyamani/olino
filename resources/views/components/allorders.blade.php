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
                        @foreach ($Orders as $order)
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
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
