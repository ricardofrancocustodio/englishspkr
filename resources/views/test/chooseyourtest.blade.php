<div class="container">
    <!-- <form action="{{ action('TestController@store') }}" method="POST" id="question1"> -->
    <form action="" method="POST" id="question1">
        @csrf
            <div class="row">
                <div class="col-12" style="text-align:center;">
                    <span style="color:red;"><b>Choose your Test</b></span>
                <div>
            </div>
            <br>
            <div class="row">    
                <div class="col-12" style="text-align:left;">
                    <ol>
                        <p class="" id="qtext" style="font-weight: bold; font-size: 20px; color: black;">
                            <b>                
                                <select name="" id="">
                                    <option>sss</option>
                                </select>
                            </b>
                        </p>
                    </ol>
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
                
        </div>
        
    </form>
    <script>
         
            $(document).ready(function() {
                $('#generate').click(function() {
                var values = ["dog", "cat", "parrot", "rabbit"];
        
                $('#container')
                .append(
                    $(document.createElement('label')).prop({
                        for: 'pets'
                    }).html('Choose your pets: ')
                )
                .append(
                    $(document.createElement('select')).prop({
                        id: 'pets',
                        name: 'pets'
                    })
                )
        
                for (const val of values) {
                    $('#pets').append($(document.createElement('option')).prop({
                        value: val,
                        text: val.charAt(0).toUpperCase() + val.slice(1)
                    }))
                }
            })
});
        </script>
</div>