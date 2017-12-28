<?php

use App\Library\StringHelper;

?>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">@lang('api/search.Result')</h3>
        @if(!empty($data['url']))
        <span class="url-search display-none">{{$data['url']}}</span>
        @endif
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        @if(empty($data['rest']))
            <div class="text-center">
                @lang('api/search.No result found')
            </div>
        @else
            @php
                $result = [];
                if ($data['total_hit_count'] == 1) {
                    $result[0] = $data['rest'];
                } else {
                    $result = $data['rest'];
                }
            @endphp

            @foreach($result as $key => $item)
            @if($key % 2 == 0)
            <div class="row tab-custom">
            @endif
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-0">
                    <!-- Nav tabs -->
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#common-{{$key}}" aria-controls="common-{{$key}}" role="tab" data-toggle="tab">    <i class="fa fa-bars" aria-hidden="true"></i>&emsp;@lang('api/search.Common')
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#time-{{$key}}" aria-controls="time-{{$key}}" role="tab" data-toggle="tab" class="padding-right-0">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>&emsp;@lang('api/search.Uptime')
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#pr-{{$key}}" aria-controls="pr-{{$key}}" role="tab" data-toggle="tab">
                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>&emsp;@lang('api/search.PR')
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content card-restaurent">
                            <div role="tabpanel" class="tab-pane active" id="common-{{$key}}">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 img-restaurent-{{$key}}" style="width: 110px">
                                        <img src="{!! !empty($item['image_url']['thumbnail']) ? $item['image_url']['thumbnail'] : '' !!}" class="img-restaurent" style="width: 80px" onerror="this.src='{{asset('images/no-image.png')}}'">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        @if($lang == 'ja')
                                            <span class="name-{{$key}}">
                                                <p>
                                                    <span class="pull-left fa-icon">
                                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="content-type">{{ !empty($item['name']['name']) ? $item['name']['name'] : '' }}</span>
                                                </p>
                                            </span>
                                            <span class="name-kana-{{$key}}">
                                                <p>
                                                    <span class="pull-left fa-icon">
                                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="content-type">{{ !empty($item['name']['name_kana']) ? $item['name']['name_kana'] : '' }}</span>
                                                </p>
                                            </span>
                                        @else
                                            <span class="name-{{$key}}">
                                                <p>
                                                    <span class="pull-left fa-icon">
                                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="content-type">{{ !empty($item['name']['name']) ? $item['name']['name'] : '' }}</span>
                                                </p>
                                            </span>
                                            <span class="name-kana-{{$key}}">
                                                <p>
                                                    <span class="pull-left fa-icon">
                                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="content-type">{{ !empty($item['name']['name_sub']) ? $item['name']['name_sub'] : '' }}</span>
                                                </p>
                                            </span>
                                        @endif
                                        <span class="tel-{{$key}}">
                                            @php
                                                $tel = '';
                                                if(!empty($item['contacts']['tel'])) {
                                                    $tel = $item['contacts']['tel'];
                                                }
                                            @endphp
                                            <p>
                                                <span class="pull-left fa-icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </span>
                                                <span class="content-type">
                                                    <a href="tel:{{$tel}}">{{$tel}}</a>
                                                </span>
                                            </p>
                                        </span>
                                        <span class="address-{{$key}}">
                                            <p>
                                                <span class="pull-left fa-icon">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </span>
                                            @php
                                                $latitude = 0;
                                                $longitude = 0;
                                                if(!empty($item['location']['latitude_wgs84'])) {
                                                    $latitude = $item['location']['latitude_wgs84'];
                                                }
                                                if(!empty($item['location']['longitude_wgs84'])) {
                                                    $longitude = $item['location']['longitude_wgs84'];
                                                }
                                                $urlMap = 'http://maps.google.com/maps?q=' . $latitude . ',' . $longitude;
                                            @endphp
                                            <span class="content-type">
                                                <a href="{{$urlMap}}" target="_blank" class="pull-left">{!! !empty($item['contacts']['address']) ? $item['contacts']['address'] : '' !!}</a>
                                            </span>
                                            </p>
                                        </span>
                                        <!-- <a href="#" class="btn-detail-card btn btn-info pull-right" data-order="{{$key}}"><i class="fa fa-info" aria-hidden="true"></i>&emsp;Detail</a> -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="time-{{$key}}">
                                <div class="time-detail">
                                    <span class="update-date-{{$key}}">
                                        <p>
                                            <span class="pull-left fa-icon">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </span>
                                            <span class="content-type">{!! !empty($item['update_date']) ? $item['update_date'] : '' !!}</span>
                                        </p>
                                    </span>
                                    <span class="business-hour-{{$key}}">
                                        @php
                                            $resultContent = StringHelper::subContentString(!empty($item['business_hour']) ? $item['business_hour'] : '', 110);
                                            $isSub = false;
                                            if(!empty($resultContent['sub'])) {
                                                $isSub = true;
                                            }
                                        @endphp
                                        @if($isSub)
                                        <p>
                                            <span class="pull-left fa-icon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                            <span class="fisrt content-type">{!! $resultContent['sub'] !!}
                                                <a href="#" class="see-more" data-item="business-hour-{{$key}}">View more</a>
                                            </span>
                                            <span class="second content-type display-none">{!! $resultContent['content'] !!}<a href="#" class="see-less" data-item="business-hour-{{$key}}"> View less</a></span>
                                        </p>
                                        @else
                                            @if(!empty($item['business_hour']))
                                            <p>
                                                <span class="pull-left fa-icon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                                <span class="content-type">{!! !empty($item['business_hour']) ? $item['business_hour'] : '' !!}</span>
                                            </p>
                                            @endif
                                        @endif
                                    </span>
                                    <span class="holiday-{{$key}}">
                                        @php
                                            $resultHoliday = StringHelper::subContentString(!empty($item['holiday']) ? $item['holiday'] : '', 110);
                                            $isSub = false;
                                            if(!empty($resultHoliday['sub'])) {
                                                $isSub = true;
                                            }
                                        @endphp
                                        @if($isSub)
                                        <p>
                                            <span class="pull-left fa-icon">
                                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                                            </span>
                                            <span class="fisrt content-type">{{strlen($resultHoliday['sub'])}} {!! $resultHoliday['sub'] !!}
                                                <a href="#" class="see-more" data-item="holiday-{{$key}}">View more</a>
                                            </span>
                                            <span class="second content-type display-none">{{strlen($resultHoliday['content'])}} {!! $resultHoliday['content'] !!}
                                                <a href="#" class="see-less" data-item="holiday-{{$key}}"> View less</a>
                                            </span>
                                        </p>
                                        @else
                                            @if(!empty($item['holiday']))
                                            <p>
                                                <span class="pull-left fa-icon">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                </span>
                                                <span class="content-type">{!! !empty($item['holiday']) ? $item['holiday'] : '' !!}</span>
                                            </p>
                                            @endif
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pr-{{$key}}">
                                <div class="pr-detail">
                                    @php
                                        $isHasPrShot = false;
                                        $isHasPrLong = false;
                                        if (!empty($item['sales_points']['pr_short'])) {
                                            $isHasPrShot = true;
                                        }
                                        if (!empty($item['sales_points']['pr_long'])) {
                                            $isHasPrLong = true;
                                        }
                                    @endphp
                                    @if($isHasPrShot && $isHasPrLong)
                                        @if(strlen($item['sales_points']['pr_short']) > strlen($item['sales_points']['pr_long']))
                                            <span class="pr-short-{{$key}}"><p>{!! $item['sales_points']['pr_short'] !!}</p></span>
                                        @else
                                            <span class="pr-short-{{$key}}"><p>{!! $item['sales_points']['pr_long'] !!}</p></span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @if($key % 2 == 1)
            </div>
            @endif
            @endforeach
        @endif
    </div>
</div>