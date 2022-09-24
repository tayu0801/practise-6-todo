@extends('layouts.default')
<style>
  th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
</style>
@section('title', 'create.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/create" method="post">
  <table>
    @csrf
    <tr>
      <th>
        task_name
      </th>
      <td>
        <input type="text" name="task_name">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>追加</button>
      </td>
  </table>
</form>
<table>
  <tr>
    <th>created_at</th>
    <th>updated_at</th>
    <th>task_name</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($todos as $todo)
  <tr>
    <!-- <form action="/{{$todo->id}}/update" method="post"> -->
    <form action="/{{$todo->id}}/delete" method="post">
      @csrf
      <td>
        {{$todo->created_at}}
      </td>
      <td>
        {{$todo->updated_at}}
      </td>
      <td>
        <input type="text" name="task_name" value="{{$todo->task_name}}">
      </td>
      <td>
        <button>更新</button>
      </td>
      <td>
        <button>削除</button>
      </td>
    </form>
  </tr>
  @endforeach
</table>
@endsection
