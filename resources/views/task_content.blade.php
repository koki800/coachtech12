@extends('Todo')
@section('content')
<table>
　<tr class="top">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  <tr>
    <td>{{$items -> created_at}}</td>
    <td><input type="text" name="update" id="" value="{{$items -> content}}"></td>
    <td>
    <form action="/todo/update" method="post">
    @csrf
      <button class="update">更新</button>
    </form>
    </td>
    <td>
      <form action="/todo/delete" method="post">
      @csrf
        <button class="delete">削除</button>
      </form>
    </td>
  </tr>
</table>
@endsection