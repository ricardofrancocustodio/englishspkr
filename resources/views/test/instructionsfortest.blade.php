<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('General instructions') }} - <b style="color: red;">Attention!!! </b></div>



                   <!--  <h1>Instructions for  Tests </h1>   <br> -->


                    <div class="row">
                        <form action="" method="POST" style="width: 100%;">
                            @csrf
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                  <!--<div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">Tabs</h3>
                                  </div> /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <input type="hidden" name="id_testtype" value="">
                                                    <i class="fas fa-microphone"></i>&nbsp;Allow access to the microphone<br><br>
                                                    <i class="far fa-clock"></i>&nbsp;There will be an active timer for each question for reminding you how much is left <br><br>
                                                    <i class="fas fa-tablet-alt"></i>&nbsp; The next question is automatically displayed on screen after last beep sound <br><br>
                                                    <i class="far fa-pause-circle"></i>&nbsp;You cannot pause the Mock Test. <br><br>
                                                    <i class="far fa-stop-circle"></i>&nbsp;Stop the Mock Test anytime you want<br>
                                                   
                                            </div>
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- ./card -->
                            </div>
                            <button class="btn btn-danger" style="width: 100%; font-weight: bold;">Let's Go!</button>
                        </form>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>