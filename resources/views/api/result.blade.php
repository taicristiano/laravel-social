<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Result</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive no-padding">
        @if(empty($data['rest']))
            <div class="text-center">
                No record
            </div>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>情報更新日時</th>
                    <th>店舗名称</th>
                    <th>店舗名称カナ</th>
                    <th>営業時間</th>
                    <th>休業日</th>
                    <th>住所</th>
                    <th>電話番号</th>
                    <th>ＰＲ（短</th>
                </tr>
            </thead>
            <thead>
                <tr class="filters">
                    <th></th>
                    <th><input type="text" class="form-control" placeholder="情報更新日時" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="店舗名称" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="店舗名称カナ" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="営業時間" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="休業日" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="住所" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="電話番号" onkeyup="searchItem(this)"></th>
                    <th><input type="text" class="form-control" placeholder="ＰＲ（短)" onkeyup="searchItem(this)"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['rest'] as $key => $item)
                <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ !empty($item['update_date']) ? $item['update_date'] : '' }}</td>
                        <td>{{ !empty($item['name']['name_sub']) ? $item['name']['name_sub'] : '' }}</td>
                        <td>{{ !empty($item['name']['name']) ? $item['name']['name'] : '' }}</td>
                        <td>{!! !empty($item['business_hour']) ? $item['business_hour'] : '' !!}</td>
                        <td>{!! !empty($item['holiday']) ? $item['holiday'] : '' !!}</td>
                        <td>{!! !empty($item['contacts']['address']) ? $item['contacts']['address'] : '' !!}</td>
                        <td>{{ !empty($item['contacts']['tel']) ? $item['contacts']['tel'] : '' }}</td>
                        <td>
                            @if(!empty($item['sales_points']['pr_short']) && $item['sales_points']['pr_short'])
                            <button class="btn btn-info btn-detail-pr-long" data-pr-long="{{!empty($item['sales_points']['pr_long']) ? $item['sales_points']['pr_long'] : ''}}"><i class="fa fa-eye" aria-hidden="true"></i></button>
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