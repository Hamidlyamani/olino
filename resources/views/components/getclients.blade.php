<div class="row">
    {{-- {{ $Products['id']}} --}}
    <div class="col-md-12 py-30">
        <div class="main-card mb-22 card">
            <div class="card-header">All Clients
                <div class="btn-actions-pane-right">

                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td class="text-center text-muted">{{ $client['id'] }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $client['name'] }}</div>
                                                <div class="widget-subheading opacity-7">{{ $client['name'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $client['email'] }}</td>
                                <td class="text-center">{{ $client['phone'] }}</td>

                                <td class="text-center">
                                    <a href="removeclient/{{ $client['id'] }}"><button type="button"
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
