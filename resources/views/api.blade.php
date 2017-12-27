@extends('layouts.master')
@section('title')
Search
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrappers">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <!-- general form elements -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('api/search.Search')</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="search-form">
                        <div class="box-body">
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12 margin-bottom-15 input-group">
                                    @php
                                        $freeword = '';
                                        if (!empty($data['freeword'])) {
                                            $freeword = $data['freeword'];
                                        }
                                    @endphp
                                    <input type="text" class="form-control padding-16" placeholder="@lang('api/search.Freeword')" name="freeword" value="{{$freeword}}">
                                    <span class="input-group-addon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <i class="fa fa-spinner fa-spin display-none" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                    <select class="form-control" name="lang" id="select-lang">
                                        <option value="en" @if($lang == 'en') selected @endif>@lang('api/search.English')</option>
                                        <option value="ja" @if($lang == 'ja') selected @endif>@lang('api/search.Japan')</option>
                                        <option value="zh_cn" @if($lang == 'zh_cn') selected @endif>@lang('api/search.China old')</option>
                                        <option value="zh_tw" @if($lang == 'zh_tw') selected @endif>@lang('api/search.China new')</option>
                                        <option value="ko" @if($lang == 'ko') selected @endif>@lang('api/search.Korea')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">@lang('api/search.Input coordinates mode')</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        @php
                                            $coordinatesMode = 1;
                                            if (!empty($data['input_coordinates_mode'])) {
                                                $coordinatesMode = $data['input_coordinates_mode'];
                                            }
                                        @endphp
                                        <select class="form-control" name="input_coordinates_mode">
                                            <option value="1" @if($coordinatesMode == 1) selected @endif>@lang('api/search.Japan geolocation')</option>
                                            {{-- selected --}}
                                            <option value="2" @if($coordinatesMode == 2) selected @endif>@lang('api/search.World geolocation')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">@lang('api/search.Range')</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0 padding-ipad">
                                        @php
                                            $range = 500;
                                            if (!empty($data['range'])) {
                                                $range = $data['range'];
                                            }
                                        @endphp
                                        <select class="form-control" name="range">
                                            <option value="300" @if($range == 300) selected @endif>300m</option>
                                            <option value="500" @if($range == 500) selected @endif>500m</option>
                                            <option value="1000" @if($range == 1000) selected @endif>1,000m</option>
                                            <option value="2000" @if($range == 2000) selected @endif>2,000m</option>
                                            <option value="3000" @if($range == 3000) selected @endif>3,000m</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">@lang('api/search.Freeword condition')</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0 padding-desktop">
                                        @php
                                            $freewordCondition = 1;
                                            if (!empty($data['freeword_condition'])) {
                                                $freewordCondition = $data['freeword_condition'];
                                            }
                                        @endphp
                                        <select class="form-control" name="freeword_condition">
                                            <option value="1" @if($freewordCondition == 1) selected @endif>@lang('api/search.And')</option>
                                            <option value="2" @if($freewordCondition == 2) selected @endif>@lang('api/search.Or')</option>
                                        </select>
                                    </div>
                                </div>
                            {{-- </div> --}}
                            {{-- <div class="form-group row"> --}}
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">@lang('api/search.Cordinates mode')</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0 padding-ipad">
                                        @php
                                            $cordinatesMode = 1;
                                            if (!empty($data['cordinates_mode'])) {
                                                $cordinatesMode = $data['cordinates_mode'];
                                            }
                                        @endphp
                                        <select class="form-control" name="cordinates_mode">
                                            <option value="1" @if($cordinatesMode == 1) selected @endif>@lang('api/search.Japan geolocation')</option>
                                            <option value="2" @if($cordinatesMode == 2) selected @endif>@lang('api/search.World geolocation')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">@lang('api/search.Hit per page')</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        @php
                                            $hitPerPage = 10;
                                            if (!empty($data['hit_per_page'])) {
                                                $hitPerPage = $data['hit_per_page'];
                                            }
                                        @endphp
                                        <input type="number" class="form-control padding-16" placeholder="Hit per page" onkeypress='return event.charCode >= 48 && event.charCode <= 57' min="10" max="100" name="hit_per_page" value="{{$hitPerPage}}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">@lang('api/search.Sort')</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0 padding-desktop padding-ipad">
                                        @php
                                            $sort = 1;
                                            if (!empty($data['sort'])) {
                                                $sort = $data['sort'];
                                            }
                                        @endphp
                                        <select class="form-control" name="sort">
                                            <option value="1" @if($sort == 1) selected @endif>@lang('api/search.Store name')</option>
                                            <option value="2" @if($sort == 2) selected @endif>@lang('api/search.Business type')</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $englishSpeakingStaff = 0;
                                                if (!empty($data['english_speaking_staff'])) {
                                                    $englishSpeakingStaff = $data['english_speaking_staff'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="english_speaking_staff" @if($englishSpeakingStaff == 1) checked @endif>&emsp;@lang('api/search.English speaking staff')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $englishMenu = 0;
                                                if (!empty($data['english_menu'])) {
                                                    $englishMenu = $data['english_menu'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="english_menu" @if($englishMenu == 1) checked @endif>&emsp;@lang('api/search.English menu')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $koreanSpeakingStaff = 0;
                                                if (!empty($data['korean_speaking_staff'])) {
                                                    $koreanSpeakingStaff = $data['korean_speaking_staff'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="korean_speaking_staff" @if($koreanSpeakingStaff == 1) checked @endif>&emsp;@lang('api/search.Korean speaking staff')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $koreanMenu = 0;
                                                if (!empty($data['korean_menu'])) {
                                                    $koreanMenu = $data['korean_menu'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="korean_menu" @if($koreanMenu == 1) checked @endif>&emsp;@lang('api/search.Korean menu')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $chineseSpeakingStaff = 0;
                                                if (!empty($data['chinese_speaking_staff'])) {
                                                    $chineseSpeakingStaff = $data['chinese_speaking_staff'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="chinese_speaking_staff" @if($chineseSpeakingStaff == 1) checked @endif>&emsp;@lang('api/search.Chinese speaking staff')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $simplifiedChineseMenu = 0;
                                                if (!empty($data['simplified_chinese_menu'])) {
                                                    $simplifiedChineseMenu = $data['simplified_chinese_menu'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="simplified_chinese_menu" @if($simplifiedChineseMenu == 1) checked @endif>&emsp;@lang('api/search.Simplified chinese menu')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $traditionalChineseMenu = 0;
                                                if (!empty($data['traditional_chinese_menu'])) {
                                                    $traditionalChineseMenu = $data['traditional_chinese_menu'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="traditional_chinese_menu" @if($traditionalChineseMenu == 1) checked @endif>&emsp;@lang('api/search.Traditional chinese menu')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $vegetarianMenuOptions = 0;
                                                if (!empty($data['vegetarian_menu_options'])) {
                                                    $vegetarianMenuOptions = $data['vegetarian_menu_options'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="vegetarian_menu_options" @if($vegetarianMenuOptions == 1) checked @endif>&emsp;@lang('api/search.Vegetarian menu options')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $religiousMenuOptions = 0;
                                                if (!empty($data['religious_menu_options'])) {
                                                    $religiousMenuOptions = $data['religious_menu_options'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="religious_menu_options" @if($religiousMenuOptions == 1) checked @endif>&emsp;@lang('api/search.Religious menu options')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $wifi = 0;
                                                if (!empty($data['wifi'])) {
                                                    $wifi = $data['wifi'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="wifi" @if($wifi == 1) checked @endif>&emsp;@lang('api/search.Wifi')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $card = 0;
                                                if (!empty($data['card'])) {
                                                    $card = $data['card'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="card" @if($card == 1) checked @endif>&emsp;@lang('api/search.Card')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $privateRoom = 0;
                                                if (!empty($data['private_room'])) {
                                                    $privateRoom = $data['private_room'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="private_room" @if($privateRoom == 1) checked @endif>&emsp;@lang('api/search.Private room')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $noSmoking = 0;
                                                if (!empty($data['no_smoking'])) {
                                                    $noSmoking = $data['no_smoking'];
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="no_smoking" @if($noSmoking == 1) checked @endif>&emsp;@lang('api/search.No smoking')
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style=" min-height: 55px">
                                    <div class="checkbox text-align">
                                        <label>
                                            @php
                                                $test = 0;
                                                if ($testLatLog) {
                                                    $test = $testLatLog;
                                                }
                                            @endphp
                                            <input type="checkbox" class="minimal" value="1" name="test_lat" @if($test == 1) checked @endif>&emsp;Test lat/log
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </form>
                </div>
                <!-- /.box -->
                <div id="result">
                    @if($hasResult)
                        @include('api.result1', ['data' => $result])
                    @endif
                </div>
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<div class="modal fade" id="modal-pr-long" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('api/search.Pr long detail')</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('api/search.Close')</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="card-restaurent" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('api/search.Card detail')</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="detail col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    </div>
                    <div class="image col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="other col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('api/search.Close')</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var urlSearch = '{{route('api-search', ['lang' => $lang])}}';
    var urlSearchBase = '{{route('api', ['lang' => ''])}}';
    var langCurrent = '{{$lang}}';
    var isHasLatitude = false;
    navigator.geolocation.getCurrentPosition(function(position) { 
            latitude = {
                name: 'latitude',
                value: position.coords.latitude,
            };
            longitude = {
                name: 'longitude',
                value: position.coords.longitude,
            }
            isHasLatitude = true;
        },
        function(failure) {
            $.getJSON('https://ipinfo.io/geo', function(response) { 
                var loc = response.loc.split(',');
                latitude = {
                    name: 'latitude',
                    value: loc[0],
                };
                longitude = {
                    name: 'longitude',
                    value: loc[1]
                }
                isHasLatitude = true;
            });  
        }
    );

    $(document).on("change", "#select-lang",function() {
        var lang = $(this).val();
        var urlCurrent = window.location.href; 
        url = urlCurrent.replace(langCurrent, lang);
        // url = urlSearchBase + '/' + lang;
        var stringReplace = 'lang=' + langCurrent;
        url = url.replace(stringReplace, 'lang=' + lang);
        window.location.href = url;
    });
    $(document).on("click", ".btn-detail-pr-long", function() {
        event.preventDefault();
        var prLong = $(this).data('pr-long');
        if (prLong.length) {
            var modalPrLong = $('#modal-pr-long');
            modalPrLong.find('.modal-body p').html(prLong);
            modalPrLong.modal('show'); 
        }
    });

    $(document).on("click", ".btn-detail-card", function() {
        event.preventDefault();
        var modalCard = $('#card-restaurent');
        modalCard.find('.modal-body .detail').html('');
        modalCard.find('.modal-body .image').html('');
        modalCard.find('.modal-body .other').html('');
        var order = $(this).data('order');
        modalCard.find('.modal-body .detail').append($('.name-' + order).html());
        modalCard.find('.modal-body .detail').append($('.name-kana-' + order).html());
        modalCard.find('.modal-body .detail').append($('.tel-' + order).html());
        modalCard.find('.modal-body .image').append($('.img-restaurent-' + order).html());
        modalCard.find('.modal-body .other').append($('.address-' + order).html());
        modalCard.find('.modal-body .other').append($('.pr-short-' + order).html());
        modalCard.find('.modal-body .other').append($('.pr-long-' + order).html());
        modalCard.find('.modal-body .other').append($('.update-date-' + order).html());
        modalCard.find('.modal-body .other').append($('.business-hour-' + order).html());
        modalCard.find('.modal-body .other').append($('.business-hour-' + order).html());
        modalCard.find('.modal-body .other').append($('.holiday-' + order).html());
        modalCard.modal('show'); 
    });

    $(function() {
        $('.input-group-addon').addClass('icon-serach');
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
        })

        $('.icon-serach').click(function(event) {
            if (!isHasLatitude) {
                return;
            }

            if ($(this).data('requestRunning')) {
                return;
            }
            $(this).data('requestRunning', true);
            var token = {
                name: '_token',
                value: window.Laravel.csrfToken
            };
            var data = $("#search-form").serializeArray();
            data.push(token);
            data.push(longitude);
            data.push(latitude);
            $('.icon-serach').find('.fa-spinner').removeClass('display-none');
            $('.icon-serach').find('.fa-search').addClass('display-none');
            $.ajax({
                url: urlSearch,
                type: 'get',
                // dataType: 'json',
                data: data,
                success: function (data) {

                    $('#result').html(data);
                    $('html, body').animate({
                        scrollTop: $("#result").offset().top
                    }, 2000);
                    $('.icon-serach').find('.fa-spinner').addClass('display-none');
                    $('.icon-serach').find('.fa-search').removeClass('display-none');
                    history.pushState({}, '', $('.url-search').text());
                },
                error: function () {
                    $('.icon-serach').find('.fa-spinner').addClass('display-none');
                    $('.icon-serach').find('.fa-search').removeClass('display-none');
                },
                complete: function () {
                    $('.icon-serach').find('.fa-spinner').addClass('display-none');
                    $('.icon-serach').find('.fa-search').removeClass('display-none');
                    $('.icon-serach').data('requestRunning', false);
                },
            });
        });
    });
</script>
@endsection