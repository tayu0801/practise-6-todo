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
<div class="todo">
  <div class="todo__content">
    <p class="todo__title">Todo List</p>
    <form class="todo__create" action="/create" method="post">
      @csrf
      <input class="todo__create-txt" type="text" name="task_name">
      <button class="todo__create-btn">追加</button>
    </form>
    <table>
      <tr>
        <th class="todo__table-hed todo__table-hed-created_at">作成日</th>
        <th class="todo__table-hed">タスク名</th>
        <th class="todo__table-hed">更新</th>
        <th class="todo__table-hed">削除</th>
      </tr>
      @foreach ($todos as $todo)
      <tr>
        <td>
          {{$todo->created_at}}
        </td>
        <form action="/{{$todo->id}}/update" method="post">
          @csrf
          <td>
            <input class="todo__table-task-name" type="text" name="task_name" value="{{$todo->task_name}}">
          </td>
          <td>
            <button class="todo__table-update-btn">更新</button>
          </td>
        </form>
        <td>
          <form action="/{{$todo->id}}/delete" method="post">
            @csrf
            <button class="todo__table-delete-btn">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
