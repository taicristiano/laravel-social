(function($){
    var root;
    //閾ｪ霄ｫ縺ｮURL繧貞叙蠕�
    var scripts = (function() {
        if (document.currentScript) {
            return document.currentScript.src;
        } else {
            var scripts = document.getElementsByTagName('script'),
            script = scripts[scripts.length-2];

            if (script.src) {
                return script.src;
            }
        }
    })();

    root = scripts.match("(.+/)(.+?)([\?#;].*)?$")[1];

    var storage = localStorage;
    var language = storage.getItem("language");
    var sns = storage.getItem("account");
    var session = storage.getItem("session");
    var timerID;

    var count = 0;
    
    $(document).ready(function(){
        if(!$('.status').data('lang')) {
            setLang(language);
            $(".language").val(language);
        }
        setSession();

        $('.sns').html(sns);
        if ($('#toggleButton').is(':checked')) {
            $('.snslogin').addClass("on");
        } else {
            $('.snslogin').removeClass("on");
        }

    });

    $(document).on("change",".language",function(e){
        var lang = $(this).val();
        if(lang != ""){
            setLang(lang);
        } else{
            setLang("");
        }
    });

    $(document).on("change",".contract input[type=checkbox]",function(e){
        if ($(this).is(':checked')) {
            $('.snslogin').addClass("on");
        } else {
            $('.snslogin').removeClass("on");
        }
    });

    $(document).on("click",".snslogin img",function(e){

        if($(".snslogin").hasClass("on")){
            var sns = $(this).attr('class');
            setSns(sns);
        }

    });

    $(document).on("click",".btn_language",function(e){
        $(".animation2").hide();
        $(".animation3").addClass("on");
        return false;
    });

    $(document).on("click",".status button",function(e){
        storage.clear();
        location.reload();
    });

    $(document).on("click",".mat button.close",function(e){
        remove_msg("please_login");
    });

    function setLang(lang){

        if( lang == "" || lang === null){
            lang = "en"; //繝�ヵ繧ｩ繝ｫ繝郁ｨ隱�
        }

        storage.setItem("language",lang);
        $(".en,.ja,.zh-cn,.zh-tw,.ko").removeClass("on");
        $('.'+lang).addClass("on");

        $(".language").val(lang);
        $('.lan').html(lang);
        if($('.status').data('lang')) {
            history.pushState({}, '', urlCallback + '/' + lang);
        }
    }

    function setSession(){

        var date = new Date();

        //繧ｻ繝�す繝ｧ繝ｳ繝√ぉ繝�け
        if(session == "" || session === null){
            storage.setItem("session",date);
            storage.setItem("account","");
        } else{
            var session_date = new Date(session);
            count = Math.round((date.getTime() - session_date.getTime()) / 1000);
        }

        //timerID = setInterval(countup,1000);
        $('.ses').html(session);

    }

    function setSns(account){
        window.location.href = "./" + account;
    }

    function countup() {

        var connect_time = (sns == "" || sns === null) ? 30 : 86400; //蛻�妙縺吶ｋ遘呈焚

        if( count >= connect_time ){
//          alert("蛻�妙縺ｮ蜃ｦ逅�ｒAjax縺ｧ縺ｪ縺偵ｋ");

            storage.setItem("account","");
            clearInterval(timerID);
            add_msg("please_login");

            return;

        } else{
            $(".sec").html(count);
            count++;
        }

    }

    function add_msg(cls){
        $(".mat").addClass('on');
        $("."+cls).addClass('on');
    }

    function remove_msg(cls){
        $(".mat").removeClass('on');
        $(".mat>.msg").removeClass('on');
    }
})(jQuery);