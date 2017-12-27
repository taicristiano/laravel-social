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
                                        <img src="{!! $item['image_url']['thumbnail'] !!}" class="img-restaurent" style="width: 80px">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <span class="name-{{$key}}">
                                            <p><i class="fa fa-cutlery" aria-hidden="true"></i>&emsp;{{ !empty($item['name']['name']) ? $item['name']['name'] : '' }}</p>
                                        </span>
                                        <span class="name-kana-{{$key}}">
                                            <p><i class="fa fa-cutlery" aria-hidden="true"></i>&emsp;
                                                @if($lang == 'ja')
                                                {{ !empty($item['name']['name_kana']) ? $item['name']['name_kana'] : '' }}
                                                @else
                                                {{ !empty($item['name']['name_sub']) ? $item['name']['name_sub'] : '' }}
                                                @endif
                                            </p>
                                        </span>
                                        <span class="tel-{{$key}}">
                                            <p><i class="fa fa-phone" aria-hidden="true"></i>&emsp;{{ !empty($item['contacts']['tel']) ? $item['contacts']['tel'] : '' }}</p>
                                        </span>
                                        <span class="address-{{$key}}">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&emsp;{!! !empty($item['contacts']['address']) ? $item['contacts']['address'] : '' !!}</p>
                                        </span>
                                        <!-- <a href="#" class="btn-detail-card btn btn-info pull-right" data-order="{{$key}}"><i class="fa fa-info" aria-hidden="true"></i>&emsp;Detail</a> -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="time-{{$key}}">
                                <div class="time-detail">
                                    <span class="update-date-{{$key}}">
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&emsp;{!! !empty($item['update_date']) ? $item['update_date'] : '' !!}</p>
                                    </span>
                                    <span class="business-hour-{{$key}}">
                                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&emsp;{!! !empty($item['business_hour']) ? $item['business_hour'] : '' !!}</p>
                                    </span>
                                    <span class="holiday-{{$key}}">
                                        <p><i class="fa fa-sign-in" aria-hidden="true"></i>&emsp;{!! !empty($item['holiday']) ? $item['holiday'] : '' !!}</p>
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
                                    @if($isHasPrShot)
                                        @if($isHasPrLong)
                                            <span class="pr-short-{{$key}}"><p>{!! $item['sales_points']['pr_short'] !!}</p></span>
                                            <span class="pr-long-{{$key}}"><p>{!! $item['sales_points']['pr_long'] !!}</p></span>
                                        @else
                                            <span class="pr-short-{{$key}}"><p>{!! $item['sales_points']['pr_short'] !!}</p></span>
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