@extends('layouts.app')

@section('content')
<div id="app">

  <h1>Chatroom</h1>

  <div class="row">
    <div class="col-xs-12">


      <div class="panel panel-default">
        <div class="panel-heading">
          Chatroom
          <span class="badge pull-right">@{{ usersInRoom.length }}</span>
        </div>

      </div>

      <chat-log :messages="messages"></chat-log>
      <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
  </div>

</div>

@endsection
