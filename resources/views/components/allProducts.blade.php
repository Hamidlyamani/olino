<div class="row">
    {{-- {{ $Products['id']}} --}}
          <div class="col-md-12 py-30">
              <div class="main-card mb-22 card">
                  <div class="card-header">All Products
                      <div class="btn-actions-pane-right">
                          
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                          <thead>
                              <tr>
                                  <th class="text-center">#</th>
                                  <th>Name</th>
                                  <th class="text-center">Price</th>
                                  <th class="text-center">Status</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($products as $product)
                              <tr>
                                  <td class="text-center text-muted">{{$product['id']}}</td>
                                  <td>
                                      <div class="widget-content p-0">
                                          <div class="widget-content-wrapper">
                                              <div class="widget-content-left mr-3">
                                                  <div class="widget-content-left">
                                                      <img width="40" class="rounded-circle"
                                                          src="../images/{{ $product['image_name'] }}" alt="">
                                                  </div>
                                              </div>
                                              <div class="widget-content-left flex2">
                                                  <div class="widget-heading">{{$product['name']}}</div>
                                                  <div class="widget-subheading opacity-7">{{$product['name']}}
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td class="text-center">{{$product['price']}}.00 MAD</td>
                                  <td class="text-center">
                                      <div class="badge badge-warning">on stock</div>
                                  </td>
                                  <td class="text-center">
                                    <a href="removeProduct/{{$product['id']}}"> <button type="button" id="PopoverCustomT-1"
                                          class="btn btn-primary btn-sm">Remove</button></a> 
                                  </td>
                              </tr>
                              @endforeach
                             
                             
                             
                          </tbody>
                      </table>
                  </div>
               
              </div>
          </div>
      </div>