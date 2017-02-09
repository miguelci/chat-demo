@extends('layouts.app')

@section('content')
<div id="app">

  <h1>Chatroom</h1>

  <div class="row">
    <div class="col-xs-12">
      <chat-log :messages="messages"></chat-log>
      <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
  </div>

</div>

@endsection
