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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-0">
                    <!-- Nav tabs -->
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home-{{$key}}" aria-controls="home-{{$key}}" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#profile-{{$key}}" aria-controls="profile-{{$key}}" role="tab" data-toggle="tab">Profile</a></li>
                            <li role="presentation"><a href="#messages-{{$key}}" aria-controls="messages-{{$key}}" role="tab" data-toggle="tab">Messages</a></li>
                            <li role="presentation"><a href="#settings-{{$key}}" aria-controls="settings-{{$key}}"role="tab" data-toggle="tab">Settings</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content card-restaurent">
                            <div role="tabpanel" class="tab-pane active" id="home-{{$key}}">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 img-restaurent-{{$key}}">
                                    @php
                                        $img = explode("?", $item['image_url']['thumbnail'])[0];
                                    @endphp
                                    <img src="{!! $img !!}" class="img-restaurent">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
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
                                    <a href="#" class="btn-detail-card btn btn-info pull-right" data-order="{{$key}}"><i class="fa fa-info" aria-hidden="true"></i>&emsp;Detail</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile-{{$key}}">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                            <span class="pr-short-{{$key}}"><p>Sort:{!! $item['sales_points']['pr_short'] !!}</p></span>
                                            <span class="pr-long-{{$key}}"><p>Long:{!! $item['sales_points']['pr_long'] !!}</p></span>
                                        @else
                                            <span class="pr-short-{{$key}}"><p>Sort:{!! $item['sales_points']['pr_short'] !!}</p></span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages-{{$key}}">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                            <div role="tabpanel" class="tab-pane" id="settings-{{$key}}">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>