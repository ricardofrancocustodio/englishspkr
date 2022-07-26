<div class="container">
    <!-- <form action="{{ action('TestController@store') }}" method="POST" id="question1"> -->
    <form action="" method="POST" id="question1">
        @csrf
            <div class="row">
                <div class="col-12" style="text-align:right;">
                    <span style="color:red;"><b>Recording...</b></span>
                <div>
            </div>
            <br>
            <div class="row">    
                <div class="col-12" style="text-align:left;">
                    <ol><p class="" id="qtext" style="font-weight: bold; font-size: 20px; color: black;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco?"</b></p></ol>
                </div>
            </div>
                <br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <!-- <img src="{{ asset('images/test/record-icon-18.png') }}" width="50%" height="100px"> -->
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <br><br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-success btn-md" href="#" onclick="submitForm();" role="button" id="submitForm" value="Retake Test">Retake Test</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-warning btn-md" href="#" onclick="submitForm();" role="button" id="submitForm" value="Next Question">Next Question</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-danger btn-md" href="#" onclick="submitForm();" role="button" id="submitForm" value="Stop Test">Stop Test</a>
                        </div>
                    </div>
                </div>
        </div>
        
    </form>
    <script>
            function submitForm() {
                document.getElementById("submitForm").submit();
            }
        </script>
</div>