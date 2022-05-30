<html>
    <head>
        <title>Testing for auto check if an data already Exists</title>
    </head>
    <body>
        <div class="form-group">
            <label>Batch Number:</label>
            <input type="number" class="form-control"  id="batchn" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))" name="batchn" placeholder="Select inspection type first" onInput="checkresult5()" required>
            <span id="check-batchNo"></span>
          </div>
    </body>
    <script>
        function checkresult5() {

            jQuery.ajax({
                url: "../filterBatchNo.php",
                data: 'batchn=' + $("#batchn").val(),
                type: "GET",
                success: function(data) {
                    $("#check-batchNo").html(data);
                },
                error: function() {}
            });
        }
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</html>