<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">@lang('api/search.Result')</h3>
        @if(!empty($data['url']))
        <span class="url-search display-none">{{$data['url']}}</span>
        @endif
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive no-padding">
        @if(empty($data['rest']))
            <div class="text-center">
                @lang('api/search.No result found')
            </div>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>@lang('api/search.Update date')</th>
                    <th>@lang('api/search.Name sub')</th>
                    <th>@lang('api/search.Name kana')</th>
                    <th>@lang('api/search.Business hour')</th>
                    <th>@lang('api/search.Holiday')</th>
                    <th>@lang('api/search.Address')</th>
                    <th>@lang('api/search.Tel')</th>
                    <th>@lang('api/search.Pr short')</th>
                </tr>
            </thead>
            <thead>
                <tr class="filters">
                    <th></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Update date')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Name sub')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Name kana')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Business hour')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Holiday')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Address')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Tel')" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="@lang('api/search.Pr short')" onkeyup="searchItem(this)"></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $result = [];
                    if ($data['total_hit_count'] == 1) {
                        $result[0] = $data['rest'];
                    } else {
                        $result = $data['rest'];
                    }
                @endphp
                @foreach($result as $key => $item)
                <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ !empty($item['update_date']) ? $item['update_date'] : '' }}</td>
                        <td>{{ !empty($item['name']['name']) ? $item['name']['name'] : '' }}</td>
                        <td>{{ !empty($item['name']['name_kana']) ? $item['name']['name_kana'] : '' }}</td>
                        <td>{!! !empty($item['business_hour']) ? $item['business_hour'] : '' !!}</td>
                        <td>{!! !empty($item['holiday']) ? $item['holiday'] : '' !!}</td>
                        <td>{!! !empty($item['contacts']['address']) ? $item['contacts']['address'] : '' !!}</td>
                        <td>{{ !empty($item['contacts']['tel']) ? $item['contacts']['tel'] : '' }}</td>
                        <td>
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
                                    <a href="#" class="btn-detail-pr-long" data-pr-long="{!! $item['sales_points']['pr_long'] !!}">{!! $item['sales_points']['pr_short'] !!}</a>
                                @else
                                    <span>{!! $item['sales_points']['pr_short'] !!}</span>
                                @endif
                            @endif
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        </div>
    </div>
</div>