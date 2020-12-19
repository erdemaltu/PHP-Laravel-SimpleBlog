@extends('front.layouts.master')
@section('title','iletişim')
@section('bg','https://github.com/StartBootstrap/startbootstrap-clean-blog/blob/master/img/contact-bg.jpg?raw=true')
@section('content')

  <div class="col-md-8">
    @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
    @endif
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <p>Bizimle İletişime Geçebilirsiniz.</p>
    <form method="post" action="{{route('contact.post')}}">
      @csrf
      <div class="control-group">
        <div class="form-group controls">
          <label>Ad Soyad</label>
          <input type="text" class="form-control" value="{{old('name')}}" placeholder="Ad Soyadınız" name="name" required>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group controls">
          <label>Email Adresi</label>
          <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email Adresiniz" name="email" required>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group col-xs-12 controls">
          <label>Konu</label>
          <select class="form-control" name="topic">
            <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
            <option @if(old('topic')=="Destek") selected @endif>Destek</option>
            <option @if(old('topic')=="Genel") selected @endif>Genel</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group controls">
          <label>Mesajınız</label>
          <textarea rows="5" class="form-control" placeholder="Mesajınız" name="message">{{old('message')}}</textarea>
        </div>
      </div>
      <br>
      <div id="success"></div>
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
    </form>
  </div>
  <div class="col-md-4">
    <div class="card card-default">
      <div class="card-body">Panel Content</div>
      Adres:Bla Bla Bla
    </div>
  </div>
@endsection
