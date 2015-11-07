<select name="prefecture">
    <option selected="selected">-- 都道府県を選択 --</option>
    @foreach($prefectures as $key => $value)
    <option value="{{$key}}">{{$value}}</option>
    @endforeach
</select>