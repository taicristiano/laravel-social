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
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <!-- general form elements -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Serach</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="search-form">
                        <div class="box-body">
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 margin-bottom-15 input-group">
                                    <input type="text" class="form-control" placeholder="text" name="text" value="日本">
                                    <span class="input-group-addon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <i class="fa fa-spinner fa-spin display-none" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <select class="form-control" name="lang">
                                        <option value="en">英語</option>
                                        <option value="ja">日本語</option>
                                        <option value="zh_cn">中国語 (簡体字)</option>
                                        <option value="zh_tw">中国語 (繁体字)</option>
                                        <option value="ko">韓国語</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">Input coordinates mode</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        <select class="form-control" name="input_coordinates_mode">
                                            <option value="1">日本測地系</option>
                                            <option value="2" selected>世界</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">Range</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        <select class="form-control" name="range">
                                            <option value="300">300m</option>
                                            <option value="500" selected>500m</option>
                                            <option value="1000">1,000m</option>
                                            <option value="2000">2,000m</option>
                                            <option value="3000">3,000m</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">Freeword condition</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        <select class="form-control" name="freeword_condition">
                                            <option value="1">And</option>
                                            <option value="2">Or</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">Cordinates mode</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        <select class="form-control" name="cordinates_mode">
                                            <option value="1">日本測地系</option>
                                            <option value="2">世界</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label for="exampleInputPassword1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top: 7px">Hit per page</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                                        <input type="number" class="form-control" placeholder="Hit per page" onkeypress='return event.charCode >= 48 && event.charCode <= 57' min="10" max="100" name="hit_per_page" value="10">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="english_speaking_staff"> English speaking staff
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="english_menu"> English menu
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="korean_speaking_staff"> Korean speaking staff
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="korean_menu"> Korean menu
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="chinese_speaking_staff"> Chinese speaking staff
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="simplified_chinese_menu"> Simplified chinese menu
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="traditional_chinese_menu"> Traditional chinese menu
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="vegetarian_menu_options"> Vegetarian menu options
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-bottom-0">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="religious_menu_options"> Religious menu options
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="wifi"> Wifi
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="card"> Card
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="private_room"> Private room
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="checkbox text-align">
                                        <label>
                                            <input type="checkbox" value="1" name="no_smoking"> No smoking
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
                    
                </div>
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection

@section('script')
<script>
    var urlSearch = '{{route('api-search')}}';

    navigator.geolocation.getCurrentPosition(function(position) { 
            latitude = {
                name: 'latitude',
                value: position.coords.latitude,
            };
            longitude = {
                name: 'longitude',
                value: position.coords.longitude,
            }
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
            });  
        }
    );
    $(function() {
       $('.input-group-addon').click(function(event) {
            // if ($(this).data('requestRunning')) {
            //     return;
            // }
            // $(this).data('requestRunning', true);
            var token = {
                name: '_token',
                value: window.Laravel.csrfToken
            };
            var data = $("#search-form").serializeArray();
            data.push(token);
            data.push(longitude);
            data.push(latitude);
            // waitingDialog.show()
            $('.input-group-addon').find('.fa-spinner').removeClass('display-none');
            $('.input-group-addon').find('.fa-search').addClass('display-none');
            $.ajax({
                url: urlSearch,
                type: 'post',
                // dataType: 'json',
                data: data,
                success: function (data) {
                    $('#result').html(data);
                    $('html, body').animate({
                        scrollTop: $("#result").offset().top
                    }, 2000);
                    $('.input-group-addon').find('.fa-spinner').addClass('display-none');
                    $('.input-group-addon').find('.fa-search').removeClass('display-none');
                    // waitingDialog.hide();
                },
                error: function () {
                    $('.input-group-addon').find('.fa-spinner').addClass('display-none');
                    $('.input-group-addon').find('.fa-search').removeClass('display-none');
                    // waitingDialog.hide();
                    console.log('zo');
                },
                complete: function () {
                    $('.input-group-addon').find('.fa-spinner').addClass('display-none');
                    $('.input-group-addon').find('.fa-search').removeClass('display-none');
                    // waitingDialog.hide();
                    // $('.fa-search').data('requestRunning', false);
                },
            });
        });
    });

    var waitingDialog = waitingDialog || (function ($) {
        'use strict';
        // Creating modal dialog's DOM
        var $dialog = $(
            '<div class="modal fade" id="searching" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
            '<div class="modal-dialog modal-mss modal-sm">' +
            '<div class="modal-content">' +
                '<div class="modal-header"><h4 style="margin:0;"></h4></div>' +
                '<div class="modal-body">' +
                    '<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
                '</div>' +
            '</div></div></div>');

        return {
            show: function (message, options) {
                // Assigning defaults
                if (typeof options === 'undefined') {
                    options = {};
                }
                if (typeof message === 'undefined') {
                    message = 'Searching';
                }
                var settings = $.extend({
                    dialogSize: 'm',
                    progressType: '',
                    onHide: null // This callback runs after the dialog was hidden
                }, options);

                // Configuring dialog
                $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
                $dialog.find('.progress-bar').attr('class', 'progress-bar');
                if (settings.progressType) {
                    $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
                }
                $dialog.find('h4').text(message);
                // Adding callbacks
                if (typeof settings.onHide === 'function') {
                    $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                        settings.onHide.call($dialog);
                    });
                }
                // Opening dialog
                $dialog.modal();
            },
            /**
             * Closes dialog
             */
            hide: function () {
                $dialog.modal('hide');
            }
        };
    })(jQuery);

        function searchItem($this)
        {
            // $('#result .filters input').keyup(function(e){
            $($this).keyup(function(e){
                /* Ignore tab key */
                var code = e.keyCode || e.which;
                if (code == '9') return;
                /* Useful DOM data and selectors */
                var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('#result'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
                /* Dirtiest filter function ever ;) */
                var $filteredRows = $rows.filter(function(){
                    var value = $(this).find('td').eq(column).text().toLowerCase();
                    return value.indexOf(inputContent) === -1;
                });
                /* Clean previous no-result if exist */
                $table.find('tbody .no-result').remove();
                /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                $rows.show();
                $filteredRows.hide();
                /* Prepend no-result row if all rows are filtered */
                if ($filteredRows.length === $rows.length) {
                    $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                }
            });
        }
</script>
@endsection