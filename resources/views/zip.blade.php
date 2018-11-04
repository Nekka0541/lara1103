
    <?php
    function getZipCode($zipCodeId, $prefId, $cityId, $addressId)
    {
    
        $zipCode = $("#zip").val();
        // $zipResult = "";
        // $("#pref").val($zipResult.pref);
    }
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        alert("jQuery読み込み完了");
    });
    </script>
</head>
<body>

    <input id="zip" type="text" value="" zip>
    <input id="pref" type="text" value="" pref>
    <input id="city" type="text" value="" city>
    <input id="address1" type="text" value="" address1>



    <?php
    // getZipCode('zip', 'pref', 'city', 'address1');
    ?>
<h1>jqueyのアラートテスト</h1>
</body>
</html>