<div class="recent-grid">
                    <div class="delivary">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Delivary</h3>
                                <button>See all <span class="las la-arrow-right"></span></button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>SL</td>
                                                <td>Delivered by</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @foreach ($delivery as $d)
                                                <tr class='t-center'>
                                                    <td> {{ $i }} </td>
                                                    <td> {{ $d->email }} </td>
                                                    <td style="color:green;">
                                                        @if ($d->is_done == 'Y')
                                                            Done
                                                        @elseif($d->is_done == 'N')
                                                            <a class='red' href="{{ 'done/' . $d->id }}">Pending</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @php $i= $i + 1; @endphp
                                            @endforeach


                                           

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>New Customer</h3>
                                <button>See all <span class="las la-arrow-right"></span></button>
                            </div>
                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                        <img src="img/admin.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Mahfuj</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>

                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="img/admin.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Mahfuj</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>

                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>

                                <div class="customer">
                                    <div class="info">
                                        <img src="img/admin.jpg" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>Mahfuj</h4>
                                            <small>CEO Excerpt</small>
                                        </div>
                                    </div>

                                    <div class="contact">
                                        <span class="las la-user-circle"></span>
                                        <span class="las la-comment"></span>
                                        <span class="las la-phone"></span>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>