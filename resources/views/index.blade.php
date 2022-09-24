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
        name
      </th>
      <td>
        <input type="text" name="task_name">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
  </table>
</form>
<table>
  <tr>
    <th>id</th>
    <th>created_at</th>
    <th>updated_at</th>
    <th>task_name</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($todos as $todo)

  <tr>
    <form action="/delete-update" method="post">
      @csrf
      <td>
        <input type="text" name="id" value="{{$todo->id}}">
      </td>
      <td>
        {{$todo->cteated_at}}
      </td>
      <td>
        {{$todo->updated_at}}
      </td>
      <td>
        <input type="text" name="task_name" value="{{$todo->task_name}}">
      </td>
    </form>
    <td>
      <form action="/update" method="post">
        @csrf
        <button>送信</button>
      </form>
    </td>
    <td>
      <form action="/delete" method="post">
        @csrf
        <button>送信</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection
