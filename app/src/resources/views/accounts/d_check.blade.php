<html>
<h1>{{$account['name']}}を削除しますか？</h1>
<form method="POST" action="{{url('accounts/delete')}}">
    @csrf
    <button type="submit" class="btn btn-secondary">削除</button>
    <input type="hidden" value="delete">
    <input type="hidden" name='id' value={{$account['id']}} >
</form>
<button onclick="location.href='{{route('accounts.index')}}'" type="button" class="btn btn-secondary">キャンセル
</button>
</html>
