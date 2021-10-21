@extends('Todo')
@section('content')
@if(count($items) > 0)
<table>
　<tr class="top">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item -> updated_at}}</td>
    <form action="/todo/update" method="post">
    @csrf
    <td><input type="hidden" name="id"  value="{{$item -> id}}"></td>
    <td><input type="text" name="content" value="{{$item -> content}}"></td>
    <td>
    <button class="update">更新</button>
    </td>
    </form>
    <form action="/todo/delete" method="post">
    @csrf
    <td><input type="hidden" name="id" value="{{$item -> id}}"></td>
    <button class="delete">削除</button>
    </form>
  </tr>
  @endforeach
</table>
@endif
@endsection