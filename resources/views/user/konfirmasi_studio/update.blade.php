@extends('layouts.mst_dashboard_relog')
@section('content')
    <div class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="section-title-4">
                            <h1><strong>CONFIRMATION</strong> PROCESS</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="progress-group">
                        <div class="wrapper">
                            <div class="step step01 complete">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 01"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step02">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 02"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step03">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 03"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step04 complete">
                                <progress class="progress" value="100" max="100"
                                          aria-describedby="Step 04"></progress>
                                <div class="progress-circle"></div>
                            </div>
                            <div class="step step05">
                                <progress class="progress" value="0" max="100"
                                          aria-describedby="Step 05"></progress>
                                <div class="progress-circle"></div>
                            </div>
                        </div>
                        <div class="progress-labels">
                            <div class="label" style="color: black">Input</div>
                            <div class="label" style="color: black">Review</div>
                            <div class="label" style="color: black">Payment</div>
                            <div class="label" style="color: red">Process</div>
                            <div class="label" style="color: black">Report</div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="w3-panel w3-card text-center">
                        <br>
                        <form action="{{url('konfirmasi/edit/'.$edit->id)}}" class="form-horizontal" method="post"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <input type="hidden" value="{{$edit->id}}" name="id">

                            <div class="form-group has-feedback">
                                <label for="bukti_pembayaran" class="col-md-4 control-label">Payment Proof</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                                    <span class="btn btn-info">
                                                        Browse&hellip;<input name="bukti_pembayaran" type="file"
                                                                             style="display: none;" multiple>
                                                    </span>
                                        </label>
                                        <input type="text" id="bukti_pembayaran" class="form-control" readonly>
                                    </div>
                                    <span class="glyphicon glyphicon-picture form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="atas_nama" class="col-md-4 control-label">Sender Name</label>

                                <div class="col-md-6">
                                    <input value="{{$edit->atas_nama}}" placeholder="Sender name" id="atas_nama"
                                           type="text" class="form-control"
                                           name="atas_nama" required>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="metode" class="col-md-4 control-label">Payment Type</label>

                                <div class="col-md-6">
                                    <select name="metode" class="form-control">
                                        <option value="0" disabled selected>-- Choose --</option>
                                        @if($edit->metode=="Lunas")
                                            <option value="DP">DP</option>
                                            <option value="Lunas" selected>Lunas</option>
                                        @elseif ($edit->metode=="DP")
                                            <option value="DP" selected>DP</option>
                                            <option value="Lunas">Lunas</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="jumlah" class="col-md-4 control-label">Transfer Nominal (Rp)</label>

                                <div class="col-md-6">
                                    <input value="{{$edit->jumlah}}" placeholder="Transfer nominal" id="jumlah"
                                           type="number" min="0" class="form-control"
                                           name="jumlah" required>
                                    <span class="glyphicon glyphicon-usd form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="deskripsi" class="col-md-4 control-label">Notes</label>

                                <div class="col-md-6">
                                    <textarea placeholder="Type some note here..." id="deskripsi" type="text"
                                              class="form-control"
                                              name="deskripsi" required>value="{{$edit->deskripsi}}"</textarea>
                                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary button btn-block">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection