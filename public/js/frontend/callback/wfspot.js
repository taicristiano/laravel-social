// 繝ｭ繧ｰ繧､繝ｳ閠��菴咲ｽｮ繧貞叙蠕励☆繧� ////////////////////////////////////////////////////////////////////////////
// 繝悶Λ繧ｦ繧ｶ縺悟ｯｾ蠢懊＠縺ｦ縺�ｋ縺九メ繧ｧ繝�け
if (typeof navigator.geolocation === 'undefined') {
    document.getElementById("shop_result").innerHTML = '繝悶Λ繧ｦ繧ｶ縺御ｽ咲ｽｮ諠��ｱ蜿門ｾ励↓蟇ｾ蠢懊＠縺ｦ縺�∪縺帙ｓ';
} else {
    locationInfoGet();
}

function locationInfoGet() {
    // 繧ｪ繝励す繝ｧ繝ｳ險ｭ螳�
    var wOptions = {
        "enableHighAccuracy": true, // true : 鬮倡ｲｾ蠎ｦ
        "timeout": 10000, // 繧ｿ繧､繝�繧｢繧ｦ繝� : 繝溘Μ遘�
        "maximumAge": 0, // 繝��繧ｿ繧偵く繝｣繝�す繝･譎る俣 : 繝溘Μ遘�
    };

    // 繝ｦ繝ｼ繧ｶ繝ｼ縺ｮ迴ｾ蝨ｨ縺ｮ菴咲ｽｮ諠��ｱ繧貞叙蠕�
    navigator.geolocation.getCurrentPosition(successCallback, errorCallback, wOptions);
}

// 菴咲ｽｮ蜿門ｾ励�謌仙粥譎ゅ↓螳溯｡後＆繧後ｋ
function successCallback(position) {
    // 蜿門ｾ励＠縺溷､繧貞�蜉�
    setShops(position.coords.latitude, position.coords.longitude);
}

// 菴咲ｽｮ蜿門ｾ励�螟ｱ謨玲凾縺ｫ螳溯｡後＆繧後ｋ
function errorCallback(error) {
    var err_msg = "";
    switch (error.code) {
        case 1:
            err_msg = "菴咲ｽｮ諠��ｱ縺ｮ蛻ｩ逕ｨ縺瑚ｨｱ蜿ｯ縺輔ｌ縺ｦ縺�∪縺帙ｓ";
            break;
        case 2:
            err_msg = "繝�ヰ繧､繧ｹ縺ｮ菴咲ｽｮ縺悟愛螳壹〒縺阪∪縺帙ｓ";
            break;
        case 3:
            err_msg = "繧ｿ繧､繝�繧｢繧ｦ繝医＠縺ｾ縺励◆";
            break;
    }
    // 繧ｨ繝ｩ繝ｼ繝｡繝�そ繝ｼ繧ｸ蜃ｺ蜉�
    document.getElementById("shop_result").innerHTML = err_msg;
    //document.getElementById("shop_result").innerHTML = error.message;
}

function setShops(latitude, longitude) {
    //window.alert(latitude+longitude);
    var data = {};
    data['LATITUDE'] = latitude;
    data['LONGITUDE'] = longitude;
    // AJAX
    $.ajax({
        type: "POST",
        url: "./dbShops.php",
        data: data,
    }).done(function(data) {
        window.alert(data['SHOP_HTML']);
        //var text = data['SHOP_HTML'];
        //window.alert(text);
        //var domObject = $(text);
        //domObject.appendTo("#shop_result");
        $("#shop_result").html(data['SHOP_HTML']);
        //$("#shop_result").html = text;
    }).fail(function() {
        $("#shop_result").html("<p>隧ｲ蠖薙�縺雁ｺ励�縺ゅｊ縺ｾ縺帙ｓ縲�</p>");
    });
};